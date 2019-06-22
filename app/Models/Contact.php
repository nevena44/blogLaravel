<?php
/**
 * Created by PhpStorm.
 * User: siste
 * Date: 3/17/2019
 * Time: 8:47 PM
 */

namespace App\Models;


use Illuminate\Support\Facades\DB;

class Contact
{
    public $kor;
    public $mess;

    public function insert(){
        return DB::table('contact')
            ->insert([
                'Poruka'=>$this->mess,
                'Korisnik'=>$this->kor
            ]);
    }

    public function getAll(){
        return DB::table('contact')
            ->get();
    }

}
