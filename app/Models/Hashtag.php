<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hashtag extends Model
{
    public $id;
    public $naziv;

    public function getAll(){
        return DB::table('hashtag')
            ->get();
    }

    public function getOne(){
        return DB::table('hashtag')
            ->where('IdHash','=',$this->id)
            ->first();
    }

    public function insert(){
        return DB::table('hashtag')
            ->insert([
                'Naziv'=>$this->naziv
            ]);
    }

    public function updateHash(){
        return DB::table('hashtag')
            ->where('IdHash','=',$this->id)
            ->update([
                'Naziv'=>$this->naziv
            ]);
    }

    public function deleteHash(){
        return DB::table('hashtag')
            ->where('IdHash','=',$this->id)
            ->delete();
    }
}
