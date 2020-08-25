<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Listing;
use App\UserProfile;

class GuestController extends Controller
{
    public function profile($id){
        $user = DB::table('users')->where('no_kepegawaian','=', $id)->select('name','phone_number','referral_code','email')->first();
        $user_profile = DB::table('users')->where('no_kepegawaian','=', $id)->first();
        $listings = Listing::where('lister_id',$id)->where('Approval','Approved')->get();

        foreach ($listings as $listing){
            $images = \File::allFiles('/home/asriloka/marketing.asriloka.com/public/listing_pic/'.$listing->id);
            $listing->coverImg = $images[0]->getFileName();
        }
        
        if(\File::exists('/home/asriloka/marketing.asriloka.com/public/profile_pic/'.$id)){
            $user_image = \File::allFiles('/home/asriloka/marketing.asriloka.com/public/profile_pic/'.$id);
            $profilePic = $user_image[0]->getFileName();       
            $picUrl = $user_profile->pic_url;     
            return view('profile.profile', ['user' => $user, 'listings' => $listings, 'profilePic' => $profilePic, 'picUrl' => $picUrl]);
        }

        else{
            return view('profile.profile', ['user' => $user, 'listings' => $listings]);
        }
        
    }
}
