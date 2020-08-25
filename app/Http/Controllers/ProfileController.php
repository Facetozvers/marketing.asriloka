<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\User;
use App\UserProfile;
use App\Listing;
use File;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $user = User::where('no_kepegawaian', Auth::user()->no_kepegawaian)->first();
        $listings = Listing::where('lister_id',$user->no_kepegawaian)->where('Approval','Approved')->get();

        foreach ($listings as $listing){
            $images = \File::allFiles('/home/asriloka/marketing.asriloka.com/public/listing_pic/'.$listing->id);
            $listing->coverImg = $images[0]->getFileName();
        }

        if(\File::exists('/home/asriloka/marketing.asriloka.com/public/profile_pic/'.$user->no_kepegawaian)){
            $user_image = \File::allFiles('/home/asriloka/marketing.asriloka.com/public/profile_pic/'.$user->no_kepegawaian);
            $profilePic = $user_image[0]->getFileName();            
            return view('profile.profile', ['user' => $user, 'listings' => $listings, 'profilePic' => $profilePic]);
        }

        else{
            return view('profile.profile', ['user' => $user, 'listings' => $listings]);
        }


    }

    public function uploadPicPage(Request $request){
        $data = $request->all();
        return view('profile.upload_pic', ['data' => $data]);
    }

    public function uploadPic(Request $request){
        $customMessages = [
            'pic.image' => 'Foto harus berupa Image',
            'pic.mimes' => 'Foto harus merupakan file dengan tipe : .png, .jpeg, atau .jpg',
            'pic.max' => 'Foto tidak boleh melebihi 5MB',
            
         ];

        $validator = Validator::make($request->all(), [
			'pic' => 'required|file|image|mimes:jpeg,png,jpg|max:5120',
        ], $customMessages);

        if($validator->fails()){
            return redirect('profile')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user_profile = UserProfile::where('no_kepegawaian',$request->no_kepegawaian)->first();
        if($user_profile->pic_url == NULL){
            $user_profile->pic_url = 'profile_pic/'.$request->no_kepegawaian;
            $request->file('pic')->move($user_profile->pic_url,'profile.'.$request->file('pic')->getClientOriginalExtension());
            $user_profile->save();
        }

        else{
            File::deleteDirectory($user_profile->pic_url);
            $request->file('pic')->move($user_profile->pic_url,'profile.'.$request->file('pic')->getClientOriginalExtension());
        }

        return redirect('/profile');
        
    }

    public function deletePic(Request $request){
        $user_profile = UserProfile::where('no_kepegawaian',$request->no_kepegawaian)->first();
        File::deleteDirectory($user_profile->pic_url);
        $user_profile->pic_url = NULL;
        $user_profile->save();

        return redirect('/profile');
    }
}
