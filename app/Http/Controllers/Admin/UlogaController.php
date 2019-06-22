<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UlogaRequest;
use App\Models\KljucneAkt;
use App\Models\Uloga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UlogaController extends Controller
{
    public $model;
    public $data;

    public function index()
    {
        $this->model = new Uloga();
        $this->data['uloga'] = $this->model->getAll();
        return view('admin.uloga.uloga',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.uloga.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UlogaRequest $request)
    {
        $uloga = new Uloga();

        $uloga->naziv = $request->input('naziv');
        $rez = $uloga->insertUloga();

        if($rez) {
            if(session()->has('user')){
                $kor = session()->get('user')->KorIme;
                $datum = new \DateTime();
                $datum->format('Y-m-d');
                $akt = new KljucneAkt();
                $akt->kor = $kor;
                $akt->opis = "Insert uloga ADMIN PANEL";
                $akt->datum = $datum;
                $akt->insert();
                return redirect('/admin/uloga');}
        }
        else{
            return redirect()->route('uloga.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uloga = new Uloga();

        $uloga->id = $id;

        $this->data['single'] = $uloga->getOne();
        $this->data['id']= $id;

        return view('admin.uloga.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UlogaRequest $request, $id)
    {
        $uloga = new Uloga();

        $uloga->id = $id;
        $uloga->naziv = $request->input('naziv');
        try{
            $rez = $uloga->editUloga();
            if($rez){
                if(session()->has('user')){
                    $kor = session()->get('user')->KorIme;
                    $datum = new \DateTime();
                    $datum->format('Y-m-d');
                    $akt = new KljucneAkt();
                    $akt->kor = $kor;
                    $akt->opis = "Update roles ADMIN PANEL";
                    $akt->datum = $datum;
                    $akt->insert();

                }return redirect('/admin/uloga');
            }
            else{
                return redirect()->back();

            }}
        catch (\Exception $e ){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uloga = new Uloga();
        if(session()->has('user')){
            $kor = session()->get('user')->KorIme;
            $datum = new \DateTime();
            $datum->format('Y-m-d');
            $akt = new KljucneAkt();
            $akt->kor = $kor;
            $akt->opis = "Delete roles ADMIN PANEL";
            $akt->datum = $datum;
            $akt->insert();
            $uloga->id = $id;
            $uloga->deleteUloga();
            return redirect()->back();}
    }

}
