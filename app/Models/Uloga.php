<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Uloga extends Model
{
    public $id;
    public $naziv;

    public function getAll(){
        return DB::table('uloga')
            ->get();
    }

    public function getOne(){
        return DB::table('uloga')
            ->where('IdUloga','=',$this->id)
            ->first();
    }

    public function insertUloga(){
        return DB::table('uloga')
            ->insert([
               'Naziv'=>$this->naziv
            ]);
    }

    public function editUloga(){
        return DB::table('uloga')
            ->where('IdUloga','=',$this->id)
            ->update([
                'Naziv'=>$this->naziv
            ]);
    }

    public function deleteUloga(){
        return DB::table('uloga')
            ->where('IdUloga','=',$this->id)
            ->delete();
    }
}
