<?php
/**
 * Created by PhpStorm.
 * User: siste
 * Date: 3/7/2019
 * Time: 5:26 PM
 */

namespace App\Models;


use Illuminate\Support\Facades\DB;

class Komentar
{
    public $id;
    public $text;
    public $datum;
    public $korId;

    public function GetAll(){
        return DB::table('komentar AS k')
            ->get();
    }
    public function GetOne(){
        return DB::table('komentar AS k')
            ->join('korkom AS kk','k.IdKomentar','=','kk.IdKomentar')
            ->join('korisnik AS kor','kk.IdKorisnik','=','kor.IdKorisnik')
            ->where('k.IdKomentar', '=',$this->id)
            ->first();
    }

    public function jedan(){
        return DB::table('komentar')
            ->where('IdKomentar','=', $this->id)
            ->first();
    }

    public function insert(){
       DB::table('komentar')
            ->insert([
                'Tekst'=>$this->text,
                'Datum'=>$this->datum
            ]);
       return true;
    }

    public function insertCom(){
        $idKom = DB::table('komentar')
            ->insertGetId([
                'Tekst'=>$this->text,
                'Datum'=>$this->datum
            ]);

        DB::table('korkom')
            ->insert([
                'IdKorisnik'=>$this->korId,
                'IdKomentar'=>$idKom
            ]);

        DB::table('postkom')
            ->insert([
                'IdKomentar'=>$idKom,
                'IdPost'=>$this->id
            ]);
        return true;
    }

    public function edit(){
         DB::table('komentar')
            ->where(['IdKomentar'=>$this->id])
            ->update([
               'Tekst'=>$this->text,
               'Datum'=>$this->datum
            ]);

        return DB::table('postkom')
             ->where('IdKomentar','=',$this->id)
            ->first();
    }

    public function delete(){
       DB::table('postkom')
           ->where('IdKomentar','=',$this->id)
           ->delete();
       DB::table('korkom')
           ->where('IdKomentar','=',$this->id)
           ->delete();
        return DB::table('komentar')
            ->where('IdKomentar','=',$this->id)
            ->delete();

    }

    public function GetUser(){
        return DB::table('korisnik')
            ->select('KorIme','IdKorisnik')
            ->get();
    }


}
