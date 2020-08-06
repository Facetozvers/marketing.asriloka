<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Listing;

class GuestController extends Controller
{
    public function profile($id){
        $user = DB::table('users')->where('no_kepegawaian','=', $id)->select('name','phone_number','referral_code','email')->first();
        $listings = Listing::where('lister_id',$id)->where('Approval','Approved')->get();

        foreach ($listings as $listing){
            $images = \File::allFiles('/home/asriloka/marketing.asriloka.com/public/listing_pic/'.$listing->id);
            $listing->coverImg = $images[0]->getFileName();
        }
        
        return view('profile.profile_guest', ['user' => $user, 'listings' => $listings]);
    }
}
