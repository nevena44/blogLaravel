<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HashRequest;
use App\Models\Hashtag;
use App\Models\KljucneAkt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HashController extends Controller
{
    public $data;
    public $model;

    public function __construct()
    {
        $this->model = new Hashtag();

        $this->data['hash'] = $this->model->getAll();
    }

    public function index()
    {
        return view('admin.hash.hash',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hash.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HashRequest $request)
    {
        $this->model->naziv = $request->input('naziv');
        $rez=$this->model->insert();

        if($rez) {
            if(session()->has('user')){
                $kor = session()->get('user')->KorIme;
                $datum = new \DateTime();
                $datum->format('Y-m-d');
                $akt = new KljucneAkt();
                $akt->kor = $kor;
                $akt->opis = "Insert hashtag ADMIN PANEL";
                $akt->datum = $datum;
                $akt->insert();
                return redirect('/admin/hash');}
        }
        else{
            return redirect()->route('hash.create');
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

        $this->data['single'] = $this->model->getOne();
        $this->data['id']= $id;

        return view('admin.hash.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HashRequest $request, $id)
    {
        $this->model->id = $id;
        $this->model->naziv = $request->input('naziv');
        try{
            $rez = $this->model->updateHash();
            if($rez){
                if(session()->has('user')){
                    $kor = session()->get('user')->KorIme;
                    $datum = new \DateTime();
                    $datum->format('Y-m-d');
                    $akt = new KljucneAkt();
                    $akt->kor = $kor;
                    $akt->opis = "Update hashtag ADMIN PANEL";
                    $akt->datum = $datum;
                    $akt->insert();

                }return redirect('/admin/hash');
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
        if(session()->has('user')){
            $kor = session()->get('user')->KorIme;
            $datum = new \DateTime();
            $datum->format('Y-m-d');
            $akt = new KljucneAkt();
            $akt->kor = $kor;
            $akt->opis = "Delete hastag ADMIN PANEL";
            $akt->datum = $datum;
            $akt->insert();
            $this->model->id = $id;
            $this->model->deleteHash();
            return redirect()->back();}
    }
}
