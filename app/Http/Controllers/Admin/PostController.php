<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Models\KljucneAkt;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public $model;
    public $data;

    public function __construct()
    {
        $this->model = new Post();
        $this->data['post'] = $this->model->GetAll();
    }

    public function index()
    {
        return view('admin.post.post',$this->data);
    }

    public function create()
    {
       return view('admin.post.insert');
    }

    public function store(PostRequest $request)
    {
        $datum = new \DateTime();
        $datum->format('Y.m.d');
        $this->model->naslov = $request->input('name');
        $this->model->opis = $request->input('text');
        $this->model->skraceni = $request->input('ptext');
        $this->model->datum = $datum;
        $this->model->korisnikId = session()->get('user')->IdKorisnik;
        $file=$request->file('photo');
        $fileName=time().$file->getClientOriginalName();
        $this->model->slikaime=$fileName;
        if($file->isValid()){
            $file->move(public_path('img'), $fileName);
            $rez = $this->model->insert();
           if($rez){
               if(session()->has('user')){
               $kor = session()->get('user')->KorIme;
               $datum = new \DateTime();
               $datum->format('Y-m-d');
               $akt = new KljucneAkt();
               $akt->kor = $kor;
               $akt->opis = "Insert post ADMIN PANEL";
               $akt->datum = $datum;
               $akt->insert();
               return redirect('/admin/post');}
           }
           return redirect()->route('post.create');
        }
        return 'Greska';
    }

    public function show($id)
    {
        $this->model->IdPost = $id;
        $rez = $this->model->GetOne();
        return view('admin.post.edit',['p'=>$rez]);
    }


    public function edit($id)
    {
        $this->model->IdPost = $id;
        $rez = $this->model->jedan();
        $idd = $id;
        return view('admin.post.edit',['p'=>$rez,'id'=>$idd]);
    }


    public function update(Request $request, $id)
    {
        $datum = new \DateTime();
        $datum->format('Y.m.d');
        $this->model->naslov = $request->input('name');
        $this->model->opis = $request->input('text');
        $this->model->skraceni = $request->input('ptext');
        $this->model->datum = $datum;
        $this->model->IdPost = $id;
        $this->model->korisnikId = session()->get('user')->IdKorisnik;
//        $file=$request->file('photo');
//        $fileName=time().$file->getClientOriginalName();
//        $this->model->slikaime=$fileName;
//        if($file->isValid()){
//            $file->move(public_path('img'), $fileName);
//                $rez = $this->model->updatePost();
//                dd($rez);
//                if($rez){
//                    if(session()->has('user')){
//                        $kor = session()->get('user')->KorIme;
//                        $datum = new \DateTime();
//                        $datum->format('Y-m-d');
//                        $akt = new KljucneAkt();
//                        $akt->kor = $kor;
//                        $akt->opis = "Edit post ADMIN PANEL";
//                        $akt->datum = $datum;
//                        $akt->insert();
//                        return redirect()->route('post.index');}
//                }
//
//                }
//            else{
                $rez = $this->model->edit();
                if($rez){
                    if(session()->has('user')){
                        $kor = session()->get('user')->KorIme;
                        $datum = new \DateTime();
                        $datum->format('Y-m-d');
                        $akt = new KljucneAkt();
                        $akt->kor = $kor;
                        $akt->opis = "Edit post ADMIN PANEL";
                        $akt->datum = $datum;
                        $akt->insert();
                        return redirect()->route('post.index');}
                }
                return redirect()->back();
           }



    public function destroy($id)
    {
        if(session()->has('user')){
        $kor = session()->get('user')->KorIme;
        $datum = new \DateTime();
        $datum->format('Y-m-d');
        $akt = new KljucneAkt();
        $akt->kor = $kor;
        $akt->opis = "Delete post ADMIN PANEL";
        $akt->datum = $datum;
        $akt->insert();
        $this->model->IdPost = $id;
        $this->model->deletePost();
        return redirect()->back();
        }
    }
}
