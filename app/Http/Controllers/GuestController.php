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
        $listing = Listing::where('lister_id',$id)->where('Approval','Approved')->get();
        
        return view('profile.profile', ['user' => $user, 'listings' => $listing]);
    }
}
