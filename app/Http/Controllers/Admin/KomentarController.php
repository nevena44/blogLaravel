<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\KomentarRequest;
use App\Models\KljucneAkt;
use App\Models\Komentar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class KomentarController extends Controller
{
    public $model;
    public $data;

    public function __construct()
    {
        $this->model = new Komentar();
        $this->data['komentar']=$this->model->GetAll();

    }

    public function index()
    {
        return view('admin.komentar.komentar',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['users']= $this->model->GetUser();
        return view('admin.komentar.insert',$this->data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KomentarRequest $request)
    {
        $this->model->text = $request->input('text');
        $datum = new \DateTime();
        $datum->format('Y-m-d');
        $this->model->datum = $datum;

        $rez=$this->model->insert();

        if($rez) {
            if(session()->has('user')){
            $kor = session()->get('user')->KorIme;
            $datum = new \DateTime();
            $datum->format('Y-m-d');
            $akt = new KljucneAkt();
            $akt->kor = $kor;
            $akt->opis = "Insert comment ADMIN PANEL";
            $akt->datum = $datum;
            $akt->insert();
            return redirect('/admin/komentar');}
        }
        else{
            return redirect()->route('komentar.create');
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
        $this->model->id = $id;

        $this->data['single'] = $this->model->GetOne();
        $this->data['id']= $id;

        return view('admin.komentar.edit',$this->data);
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

        $this->data['single'] = $this->model->jedan();
        $this->data['id']= $id;

        return view('admin.komentar.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KomentarRequest $request, $id)
    {
        $komentar = new Komentar();

        $komentar->id = $id;
        $komentar->text = $request->input('text');
        $datum = new \DateTime();
        $datum->format('Y-m-d');
        $komentar->datum = $datum;
        try{
        $rez = $komentar->edit();
        if($rez){
            if(session()->has('user')){
                $kor = session()->get('user')->KorIme;
                $datum = new \DateTime();
                $datum->format('Y-m-d');
                $akt = new KljucneAkt();
                $akt->kor = $kor;
                $akt->opis = "Update comment ADMIN PANEL";
                $akt->datum = $datum;
                $akt->insert();

            }return redirect()->back();
        }
        else{
            return redirect()->back();

        }}
        catch (Exception $e ){
            throw new Exception($e->getMessage());
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
        if(session()->has('user')){
        $kor = session()->get('user')->KorIme;
        $datum = new \DateTime();
        $datum->format('Y-m-d');
        $akt = new KljucneAkt();
        $akt->kor = $kor;
        $akt->opis = "Delete comment ADMIN PANEL";
        $akt->datum = $datum;
        $akt->insert();
        $this->model->id = $id;
        $this->model->delete();
        return redirect()->back();}
    }


}
