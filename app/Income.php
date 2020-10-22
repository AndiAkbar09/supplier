<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $table = 'incomes';
    protected $guarded = [];

    public function newCode(){

        $_kode = "K0";
        
        $kode = Income::where('kode_barang','K0')->orderBy('kode_barang');

        $kode = $kode->count();

        if($kode == 0){
            $kode = $_kode."01";
        }else{
            $last = $kode + 1;

            $kode = "$_kode".str_pad($last, 3, '0', STR_PAD_LEFT);
        }
            
        return $kode;
    }
}
