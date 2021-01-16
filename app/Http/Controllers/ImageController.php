<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Listing;
use App\ListingFacilities;
use App\User;
use App\UserRefLink;
use File;

class ImageController extends Controller
{
    public function editImagePage($id){
        //check pelisting
        $listing = DB::table('listings')->where('listings.id','=', $id)->select('lister_id')->first();
        if(Auth::user()->no_kepegawaian != $listing->lister_id){
            abort(404);
        }

        $data = DB::table('listings')->where('listings.id','=', $id)->join('listing_facilities', 'listings.id', '=', 'listing_facilities.listing_id')->first();
        $images = \File::allFiles(public_path('listing_pic/'.$data->listing_id));
        
        
        return view('listing.edit_image', ['data' => $data,  'images' => $images]);
    }

    public function uploadImage($id, Request $request){
        //check pelisting
        $listing = DB::table('listings')->where('listings.id','=', $id)->select('lister_id')->first();
        if(Auth::user()->no_kepegawaian != $listing->lister_id){
            abort(404);
        }

        $data = DB::table('listings')->where('listings.id','=', $id)->join('listing_facilities', 'listings.id', '=', 'listing_facilities.listing_id')->first();
        $images = \File::allFiles(public_path('listing_pic/'.$data->listing_id));

        $lastFile = last($images);
        $lastName = pathinfo( $lastFile->getFilename(), PATHINFO_FILENAME);
        $newName = $lastName + 1;

        $request->file('gambar')->move($data->picUrl,$newName.'.'.$request->file('gambar')->getClientOriginalExtension());

        return redirect('/listing/editImage/'.$id)->with(['message' => 'Gambar berhasil di-upload!', 'alert-class' => 'alert-success']);
        
    }

    public function deleteImage(Request $request){
        //check pelisting
        $listing = DB::table('listings')->where('listings.id','=', $request->listing_id)->select('lister_id')->first();
        if(Auth::user()->no_kepegawaian != $listing->lister_id){
            abort(404);
        }

        $data = Listing::where('id', $request->listing_id)->first();
        File::delete($data->picUrl.'/'.$request->namaFile);

        return redirect('/listing/editImage/'.$request->listing_id)->with(['message' => 'Gambar berhasil dihapus!', 'alert-class' => 'alert-success']);
    }
}
