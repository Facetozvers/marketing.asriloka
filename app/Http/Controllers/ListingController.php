<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Listing;
use App\ListingFacilities;

class ListingController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
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

    public function request(Request $request){
        $listing = new Listing;
        $listing->lister_id = Auth::id();
        $listing->nama_listing = $request->judul;
        $listing->jenis_listing = $request->jenis_listing;
        $listing->kota = $request->kota;
        $listing->wilayah = $request->wilayah;
        $listing->alamat_detail = $request->alamat_detail;
        $listing->harga = $request->harga;
        $listing->desc = $request->desc;
        $listing->kamar = $request->kamar;
        $listing->kamar_mandi = $request->kamar_mandi;
        $listing->garasi = $request->garasi;
        $listing->luas = $request->luas;
        $listing->TipePenjualan = $request->TipePenjualan;
        $listing->statusTanah = $request->statusTanah;
        $listing->Approval = "Pending";
        $listing->picUrl = "none";
        $listing->save();

        $listing_facilities = new ListingFacilities;
        $listing_facilities->listing_id = $listing->id;
        $listing_facilities->carport = $request->carport;
        $listing_facilities->swimming_pool = $request->swimming_pool;
        $listing_facilities->garden = $request->garden;
        $listing_facilities->security = $request->security;
        $listing_facilities->gym = $request->gym;
        $listing_facilities->restaurant = $request->restaurant;
        $listing_facilities->air = $request->air;
        $listing_facilities->daya_listrik = $request->daya_listrik;
        $listing_facilities->perabotan = $request->perabotan;
        $listing_facilities->jenis_lantai = $request->jenis_lantai;
        $listing_facilities->save();

        if($listing->save() && $listing_facilities->save()){
            return redirect('/listing')->with(['message' => 'Request berhasil ditambahkan!', 'alert-class' => 'alert-success']);
        }
        else
        {
            return redirect('/listing')->with(['message' => 'Request gagal!', 'alert-class' => 'alert-danger']);
        }



        
    }
}
