<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiProperti extends Model
{
    public static function boot(){
        parent::boot();

        static::creating(function($model){
            $model->number = TransaksiProperti::where('listing_id', $model->listing_id)->max('number') + 1;
            $model->no_transaksi = 'TRSC'.$model->listing_id.str_pad($model->number,2,'0',STR_PAD_LEFT);

            //menyimpan upload url
            $tujuan_upload = "transaksi/".$model->no_transaksi;
            $model->pathFile = $tujuan_upload;
        });
    }
}
