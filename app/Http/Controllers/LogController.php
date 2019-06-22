<?php

namespace App\Http\Controllers;

use App\Http\Requests\KorisnikRequest;
use App\Models\KljucneAkt;
use App\Models\Korisnik;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function log(){
        return view('pages.login');
    }

    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('pass');

        $kor = new Korisnik();
        $kor->KorIme = $username;
        $kor->Lozinka = $password;

        $rezultat = $kor->Login();

        if($rezultat){
            $request->session()->put('user',$rezultat);
            $kor = session()->get('user')->KorIme;
            $datum = new \DateTime();
            $datum->format('Y-m-d');
            $akt = new KljucneAkt();
            $akt->kor = $kor;
            $akt->opis = "Logovanje";
            $akt->datum = $datum;
            $akt->insert();
            return redirect('/');
        }
        else{
            return redirect()->back()->with('poruka','Pokusaj ponovo');
        }
    }
    public function reg(){
        return view('pages.register');
    }

    public function logout(){
        if(session()->has('user')){
            $kor = session()->get('user')->KorIme;
            $datum = new \DateTime();
            $datum->format('Y-m-d');
            $akt = new KljucneAkt();
            $akt->kor = $kor;
            $akt->opis = "Logout";
            $akt->datum = $datum;
            $akt->insert();
            session()->forget('user');
            session()->flush();

        }
        return redirect('/');
    }

    public function register(KorisnikRequest $request){
        if($request->has('btnInsert')){
            $kor = new Korisnik();
            $kor->KorIme=$request->input('username');
            $kor->Email=$request->input('email');
            $kor->Lozinka=$request->input('pass');

            $file=$request->file('fSlika');
            $fileName=time().$file->getClientOriginalName();
            $kor->slikaFile=$fileName;
            if($file->isValid()){
                request()->fSlika->move(public_path('img'), $fileName);


                try{
                    $rez=$kor->insertUser();
                    if($rez){
                        if(session()->has('user')){
                        $kor = session()->get('user')->KorIme;
                        $datum = new \DateTime();
                        $datum->format('Y-m-d');
                        $akt = new KljucneAkt();
                        $akt->kor = $kor;
                        $akt->opis = "Register";
                        $akt->datum = $datum;
                        $akt->insert();
                        }return redirect()->route('log')->with('por','USPESNO STE SE REGISTROVALI!');
                    }
                    else{
                        return redirect()->route('reg');
                    }
                }
                catch (\Throwable $ex){
                    echo $ex->getMessage();
                }}
        }
    }
}
