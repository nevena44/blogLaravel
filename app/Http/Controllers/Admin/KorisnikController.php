<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\KorisnikRequest;
use App\Models\KljucneAkt;
use App\Models\Korisnik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KorisnikController extends Controller
{
    public $model;
    public $data;

    public function __construct()
    {
        $this->model = new Korisnik();
        $this->data['korisnici'] = $this->model->GetAll();
    }

    public function index()
    {
        return view('admin.korisnik.korisnici',$this->data);
    }

    public function create()
    {
        return view('admin.korisnik.insert');
    }

    public function store(KorisnikRequest $request)
    {
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
                            $akt->opis = "Insert user ADMIN PANEL";
                            $akt->datum = $datum;
                            $akt->insert();
                        }return redirect()->route('korisnik.index');
                    }
                    else{
                        return redirect()->route('korisnik.create');
                    }
                }
                catch (\Throwable $ex){
                    echo $ex->getMessage();
                }}
        }
    }

    public function show($id)
    {
        return view('admin.korisnik.edit',$this->data);
    }

    public function edit($id)
    {
        $this->model->IdKorisnik = $id;
        $this->data['kor']= $this->model->getOne();
        return view('admin.korisnik.edit',$this->data);
    }

    public function update(KorisnikRequest $request, $id)
    {
        if($request->has('btnInsert')){
            $kor = new Korisnik();
            $kor->KorIme=$request->input('username');
            $kor->Email=$request->input('email');
            $kor->Lozinka=$request->input('pass');
            $kor->IdKorisnik = $id;

            $file=$request->file('fSlika');
            $fileName=time().$file->getClientOriginalName();
            $kor->slikaFile=$fileName;
            if($file->isValid()){
                request()->fSlika->move(public_path('img'), $fileName);
                try{
                $rez=$kor->editUser();
                if($rez){
                    if(session()->has('user')){
                        $kor = session()->get('user')->KorIme;
                        $datum = new \DateTime();
                        $datum->format('Y-m-d');
                        $akt = new KljucneAkt();
                        $akt->kor = $kor;
                        $akt->opis = "Edit user ADMIN PANEL";
                        $akt->datum = $datum;
                        $akt->insert();
                    }return redirect()->route('korisnik.index');
                }
            }


                catch (\Throwable $ex){
                    echo $ex->getMessage();
                }}
        }
    }

    public function destroy($id)
    {
        if(session()->has('user')){
        $kor = session()->get('user')->KorIme;
        $datum = new \DateTime();
        $datum->format('Y-m-d');
        $akt = new KljucneAkt();
        $akt->kor = $kor;
        $akt->opis = "Delete user ADMIN PANEL";
        $akt->datum = $datum;
        $akt->insert();
       $this->model->IdKorisnik = $id;
       $this->model->deleteKorisnik();
       }return redirect()->route('korisnik.index');
    }
}
