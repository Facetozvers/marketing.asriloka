<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Listing;
use App\TransaksiProperti;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $transaksis = TransaksiProperti::where('sales_id', Auth::user()->id)->orWhere('lister_id', Auth::user()->id)->get();
        return view('transaksi.index', ['transaksis' => $transaksis]);
    }

    public function uploadPage($id){
        $transaksi_properti = TransaksiProperti::where('listing_id', $id)->orderBy('number', 'desc')->first();
        $listing = Listing::where('id', $id)->first();
        if(($transaksi_properti == NULL || $transaksi_properti->status == 'Batal') && $listing->Approval == "Approved"){
            $listing = Listing::where('id', $id)->first();
            return view('listing.upload_bukti', ['listing' => $listing]);
        }
        else{
            return redirect('/');
        }
    }

    public function uploadClosing(Request $request){
        $user = User::where('id', Auth::user()->id)->first();
        $listing = Listing::where('id', $request->listing_id)->first();
        $lister = $listing->lister_id;
     
        if($request->token == $user->token && $user->role == 'marketing'){

            $closing = $request->file('bukti_transaksi');
            $namaFile = $request->listing_id.'_closing.'.$closing->getClientOriginalExtension();
            
            
            $transaksi = new TransaksiProperti;
            $transaksi->listing_id = $request->listing_id;
            $transaksi->sales_id = Auth::user()->id;
            $transaksi->status = "Closing";
            $transaksi->lister_id = $lister;
            $transaksi->urlClosing = $namaFile;
            $transaksi->pembeli = $request->pembeli;
            $transaksi->harga_jual = $request->harga_jual;
            $transaksi->urlAkad = NULL;
            $transaksi->urlBuktiBAF = NULL;
            $transaksi->save();

            $closing->move($transaksi->pathFile,$transaksi->urlClosing);

            if($transaksi->save()){
                return redirect('/transaction')->with(['message' => 'Upload Bukti Transaksi Berhasil!', 'alert-class' => 'alert-danger']);
            }

            else{
                return redirect('/transaction')->with(['message' => 'Upload bukti transaksi gagal! Silahkan coba lagi', 'alert-class' => 'alert-danger']);

            }
        }

        else{
            return abort(404);
        }
    }

    public function uploadAkadPage($id){
        $transaksi_properti = TransaksiProperti::where('id', $id)->first();
        if($transaksi_properti != NULL && $transaksi_properti->status == 'Closing'){
            return view('transaksi.upload_akad', ['transaksi' => $transaksi_properti]);
        }
        else{
            return redirect('/');
        }
    }

    public function uploadAkad(Request $request){
        $user = User::where('id', Auth::user()->id)->first();
     
        if($user->id != $request->lister_id){
            return redirect('/transaction')->with(['message' => 'Hanya Pelisting yang dapat mengupload bukti akad!', 'alert-class' => 'alert-danger']);
        }
        else if($request->token == $user->token && $user->role == 'marketing' && $user->id == $request->lister_id){ //hanya boleh lister yang upload bukti akad

            $akad = $request->file('bukti_transaksi');
            $buktiBAF = $request->file('bukti_BAF');
            
            $transaksi = TransaksiProperti::where('id', $request->no_transaksi)->first();
            $tujuan_upload = "transaksi\\".$transaksi->no_transaksi;
            $namaFileAkad = $transaksi->no_transaksi.'_akad.'.$akad->getClientOriginalExtension();
            $namaFileBAF = $transaksi->no_transaksi.'_buktiBAF.'.$buktiBAF->getClientOriginalExtension();

            $transaksi->urlAkad = $namaFileAkad;
            $transaksi->urlBuktiBAF = $namaFileBAF;
            $transaksi->status = 'Akad';

            
            $transaksi->save();

            $akad->move($tujuan_upload,$namaFileAkad);
            $buktiBAF->move($tujuan_upload,$namaFileBAF);

            return redirect('/upload/success');
        }

        else{
            return abort(404);
        }
    }
}
