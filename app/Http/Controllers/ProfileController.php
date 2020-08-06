<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Listing;

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

        return view('profile.profile', ['user' => $user, 'listings' => $listings]);
    }
}
