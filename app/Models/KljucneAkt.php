<?php
/**
 * Created by PhpStorm.
 * User: siste
 * Date: 3/17/2019
 * Time: 8:54 PM
 */

namespace App\Models;


use Illuminate\Support\Facades\DB;

class KljucneAkt
{
    public $opis;
    public $kor;
    public $datum;
    public $od;
    public $do;

    public function insert(){
        return DB::table('kljucneakt')
            ->insert([
                'Opis'=>$this->opis,
                'Korisnik'=>$this->kor,
                'Datum'=>$this->datum
            ]);
    }

    public function GetAll(){
        return DB::table('kljucneakt')
            ->get();
    }

    public function getDatum(){
        return DB::table('kljucneakt')
            ->select('Datum','IdKljucne')
            ->orderByRaw('Datum','ASC')
            ->get();
    }

    public function getOdDO(){
        return DB::table('kljucneakt')
            ->select('IdKljucne','Opis','Datum','Korisnik')
            ->where([
                ['Datum','>=',$this->od],
                ['Datum','<=',$this->do]
            ])
            ->get();
    }
    public function getOd(){
        return DB::table('kljucneakt')
            ->select('IdKljucne','Opis','Datum','Korisnik')
            ->where(
                'Datum','>=',$this->od
            )
            ->get();
    }
    public function getDo(){
        return DB::table('kljucneakt')
            ->select('IdKljucne','Opis','Datum','Korisnik')
            ->where(
                'Datum','<=',$this->do
            )
            ->get();
    }
}
