<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Slika extends Model
{
    public $id;
    public $putanja;
    public $alt;
    public $children;

    public function getAll()
    {
        return DB::table('slika')
            ->paginate(20);
    }

    public function getOne(){
        return DB::table('slika')
            ->where('IdSlika','=',$this->id)
            ->first();
    }

    public function insert(){
        return DB::table('slika')
            ->insert([
                'Putanja'=>'img/'.$this->putanja,
                'Alt'=>$this->alt,
            ]);
    }

    public function edit(){
        return DB::table('slika')
            ->where('IdSlika','=',$this->id)
            ->update([
                'Putanja'=>'img/'.$this->putanja,
                'Alt'=>$this->alt,
            ]);
    }

    public function deleteS(){
        return DB::table('slika')
            ->where('IdSlika','=',$this->id)
            ->delete();
    }
}
