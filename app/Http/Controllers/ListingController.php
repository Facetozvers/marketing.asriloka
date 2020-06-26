<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Listing;

class ListingController extends Controller
{
    public function index(){
        
        $listings = Listing::where('lister_id', Auth::user()->id)->get();
        return view('listing.index', ['listings' => $listings]);
    }

    public function detail($id){
        $data = DB::table('listings')->where('id','=', $id)->join('listing_facilities', 'listings.id', '=', 'listing_facilities.listing_id')->first();
        return view('listing.detail', ['listings' => $data]);
    }

    public function new(){
        return view('listing.new');
    }
}
