<?php
/**
 * Created by PhpStorm.
 * User: siste
 * Date: 2/25/2019
 * Time: 5:32 PM
 */

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Http\Requests\KomentarRequest;
use App\Models\Contact;
use App\Models\KljucneAkt;
use App\Models\Komentar;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $post = new Post();
        $postovi = $post->GetAll();
        return view('components.cont',['post'=>$postovi]);
    }

    public function single($id){
        $post = new Post();
        $post->IdPost=$id;
        $podaci = $post->GetOne();
        $data=$post->GetHashSlKom();
        return view('pages.single',['post'=>$podaci,'slika'=>$data['slike'],'hash'=>$data['hash'],'kom'=>$data['kom']]);
    }
    public function admin(){
        return view('admin.admin');
    }

    public function kom(KomentarRequest $request,$id){
        $datum = new \DateTime();
        $datum->format('Y-m-d');
        $komentar = new Komentar();
        $komentar->text = $request->input('text');
        $komentar->datum = $datum;
        $komentar->id = $id;
        if(session()->has('user')){
            $kor = session()->get('user')->IdKorisnik;
            $komentar->korId = $kor;
        $rez = $komentar->insertCom();

        if($rez) {
            if(session()->has('user')){
            $kor = session()->get('user')->KorIme;
            $datum = new \DateTime();
            $datum->format('Y-m-d');
            $akt = new KljucneAkt();
            $akt->kor = $kor;
            $akt->opis = "Insert comment";
            $akt->datum = $datum;
            $akt->insert();
            return redirect()->back();}
        }}
        else{
            return redirect()->route('index');
        }
    }

    public function auth(){
        return view('pages.author');
    }
    public function cont(){
        return view('pages.contact');
    }
    public function contt(ContactRequest $request){
        $con = new Contact();
        $con->mess = $request->input('text');
        $con->kor = $request->input('kor');
        $rez = $con->insert();
        if($rez){
            if(session()->has('user')){
            $kor = session()->get('user')->KorIme;
            $datum = new \DateTime();
            $datum->format('Y-m-d');
            $akt = new KljucneAkt();
            $akt->kor = $kor;
            $akt->opis = "Send contact form";
            $akt->datum = $datum;
            $akt->insert();
            return redirect()->back()->with('por','Messages is send');}

        }
        else{
            return redirect()->route('index');
        }
            }

            public function kljucne(){
        $klju = new KljucneAkt();
        $rez = $klju->GetAll();
        return view ('admin.kljucne',['klju'=>$rez]);
            }

            public function kljucne1(Request $request){
                if($request->has('sortiraj')){
                    $klju = new KljucneAkt();
                    $od = $request->input('od');
                    $do = $request->input('do');
                    if($od!=null&&$do!=null){
                        $klju->od = $od;
                        $klju->do = $do;
                        $ppodatumu = $klju->getOdDO();
                        return view('admin.kljucne',['klju'=>$ppodatumu]);
                    }

                    else if($od!=null){
                        $klju->od = $od;
                        $odd = $klju->getOd();
                        return view('admin.kljucne',['klju'=>$odd]);
                    }

                    else if($do!=null){
                        $klju->do = $do;
                        $odd = $klju->getDo();
                        return view('admin.kljucne',['klju'=>$odd]);
                    }

                    else{
                        $rez = $klju->GetAll();
                        return view('admin.kljucne',['klju'=>$rez]);
                    }


                }
                return redirect()->back();
            }

            public function prikazAdmin(){
                $kontact = new Contact();
                $rez = $kontact->getAll();
                return view('admin.kontakt',['kont'=>$rez]);
            }

            public function editKom($id){
                $kom = new Komentar();
                $kom->id = $id;

                $single = $kom->jedan();
                $idK= $id;

                return view('components.komentaredit',['single'=>$single,'id'=>$idK]);
            }

            public function updateKom(KomentarRequest $request,$id){

            if($request->has('edit')){
                $komentar = new Komentar();

                $komentar->id = $id;
                $komentar->text = $request->input('text');
                $datum = new \DateTime();
                $datum->format('Y-m-d');
                $komentar->datum = $datum;
                $rez = $komentar->edit();
                    if($rez){
                        if(session()->has('user')){
                            $kor = session()->get('user')->KorIme;
                            $datum = new \DateTime();
                            $datum->format('Y-m-d');
                            $akt = new KljucneAkt();
                            $akt->kor = $kor;
                            $akt->opis = "Update comment ".$kor;
                            $akt->datum = $datum;
                            $akt->insert();
                        }
                        return redirect()->back();

                    }}
    }


            public function deleteKom($id){
                if(session()->has('user')){
                    $kor = session()->get('user')->KorIme;
                    $datum = new \DateTime();
                    $datum->format('Y-m-d');
                    $akt = new KljucneAkt();
                    $akt->kor = $kor;
                    $akt->opis = "Delete comment ADMIN PANEL";
                    $akt->datum = $datum;
                    $akt->insert();
                    $kom = new Komentar();
                    $kom->id = $id;
                    $kom->delete();
                    return redirect()->back();}
            }

}
