<?php
/**
 * Created by PhpStorm.
 * User: siste
 * Date: 3/10/2019
 * Time: 1:46 PM
 */

namespace App\Models;


use Illuminate\Support\Facades\DB;

class Korisnik
{
    public $IdKorisnik;
    public $KorIme;
    public $Lozinka;
    public $Email;
    public $IdSlika;
    public $IdUloga;
    public $slikaFile;

    public function GetAll(){
        return DB::table('korisnik AS k')
            ->join('slika AS s','k.IdSlika','=','s.IdSlika')
            ->join('uloga AS u','k.IdUloga','=','u.IdUloga')
            ->get();
}

    public function getOne(){
        return DB::table('korisnik AS k')
            ->join('slika AS s','k.IdSlika','=','s.IdSlika')
            ->join('uloga AS u','k.IdUloga','=','u.IdUloga')
            ->where(['IdKorisnik'=>$this->IdKorisnik])
            ->first();
    }

    public function insertUser(){

        try{
               $id = DB::table('slika')
                    ->insertGetId([
                        'Putanja' => 'img/'.$this->slikaFile,
                        'Alt' => $this->KorIme

                    ]);

                DB::table('korisnik')
                   ->insert([
                      'KorIme'=>$this->KorIme,
                      'Lozinka'=>md5($this->Lozinka),
                      'Email'=>$this->Email,
                      'IdSlika'=>$id,
                      'IdUloga'=>2
                   ]);
                return true;

            }
            catch(\Exception $ex){
            echo $ex->getMessage();
            }
    }

    public function editUser(){
        $id = DB::table('slika')->insertGetId([
            'Putanja'=> 'img/'.$this->slikaFile,
            'Alt'=>$this->KorIme
        ]);
        return DB::table('korisnik')
            ->where(['IdKorisnik'=> $this->IdKorisnik])
            ->update([
                'KorIme'=>$this->KorIme,
                'Email'=>$this->Email,
                'Lozinka'=>md5($this->Lozinka),
                'IdSlika'=>$id
            ]);
    }


    public function Login(){
        return DB::table('korisnik AS k')
            ->join('uloga AS u','k.IdUloga','=','u.IdUloga')
            ->where([
                'KorIme'=>$this->KorIme,
                'Lozinka'=>md5($this->Lozinka)
            ])
            ->first();
    }

    public function deleteKorisnik(){
        DB::table('korisnik')
            ->where('IdKorisnik','=',$this->IdKorisnik)
            ->delete();
        return true;
    }

}
