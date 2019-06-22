<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SlikaRequest;
use App\Models\KljucneAkt;
use App\Models\Slika;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlikaController extends Controller
{
    public $model;
    public $data;

    public function __construct()
    {
        $this->model = new Slika();
        $this->data['slika'] = $this->model->GetAll();
    }

    public function index()
    {
        return view('admin.slika.slika',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slika.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlikaRequest $request)
    {
        if($request->has('btnInsert')){

            $file=$request->file('fSlika');
            $fileName=time().$file->getClientOriginalName();
            $this->model->putanja = $fileName;
            $this->model->alt = $request->input('alt');
            if($file->isValid()){
                request()->fSlika->move(public_path('img'), $fileName);


                try{
                    $rez=$this->model->insert();
                    if($rez){
                        if(session()->has('user')){
                            $kor = session()->get('user')->KorIme;
                            $datum = new \DateTime();
                            $datum->format('Y-m-d');
                            $akt = new KljucneAkt();
                            $akt->kor = $kor;
                            $akt->opis = "Insert photo ADMIN PANEL";
                            $akt->datum = $datum;
                            $akt->insert();
                        }return redirect()->route('slika.index');
                    }
                    else{
                        return redirect()->route('slika.create');
                    }
                }
                catch (\Throwable $ex){
                    echo $ex->getMessage();
                }}
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
        $this->model->id = $id;
        $this->data['slika']= $this->model->getOne();
        return view('admin.slika.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SlikaRequest $request, $id)
    {
        if($request->has('btnInsert')){
            $this->model->alt = $request->input('alt');
            $this->model->id = $id;

            $file=$request->file('fSlika');
            $fileName=time().$file->getClientOriginalName();
            $this->model->putanja = $fileName;
            if($file->isValid()){
                request()->fSlika->move(public_path('img'), $fileName);
                try{
                    $rez=$this->model->edit();
                    if($rez){
                        if(session()->has('user')){
                            $kor = session()->get('user')->KorIme;
                            $datum = new \DateTime();
                            $datum->format('Y-m-d');
                            $akt = new KljucneAkt();
                            $akt->kor = $kor;
                            $akt->opis = "Edit photo ADMIN PANEL";
                            $akt->datum = $datum;
                            $akt->insert();
                        }return redirect()->route('slika.index');
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
            $this->model->id = $id;
            $this->model->deleteS();
        }return redirect()->route('slika.index');
    }

}
