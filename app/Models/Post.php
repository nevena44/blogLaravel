<?php


namespace App\Models;


use Illuminate\Support\Facades\DB;

class Post
{
    public $IdPost;
    public $naslov;
    public $opis;
    public $skraceni;
    public $korisnikId;
    public $slikaime;
    public $datum;

    public function GetAll(){
        return DB::table('post AS p')
            ->join('korisnik AS kor','p.IdKorisnik','=','kor.IdKorisnik')
            ->join('postslika AS ps','p.IdPost','=','ps.IdPost')
            ->join('slika AS s','ps.IdSlika','=','s.IdSlika')
            ->where(['Children'=>1])
            ->paginate(4);

    }

    public function GetOne(){
        return DB::table('post AS p')
            ->join('korisnik AS kor','p.IdKorisnik','=','kor.IdKorisnik')
            ->join('postslika AS ps','p.IdPost','=','ps.IdPost')
            ->join('slika AS s','ps.IdSlika','=','s.IdSlika')
            ->where([['p.IdPost','=',$this->IdPost],['Children','=',2]])
            ->first();
    }
    public function GetHashSlKom(){
        $slike =  DB::table('post AS p')
            ->select('s.Putanja','s.Alt')
            ->join('postslika AS ps','p.IdPost','=','ps.IdPost')
            ->join('slika AS s','ps.IdSlika','=','s.IdSlika')
            ->where(['p.IdPost' =>$this->IdPost,'Children'=>0])
            ->get();

        $hash= DB::table('post AS p')
            ->select('h.Naziv')
            ->join('posthash AS ph','p.IdPost','=','ph.IdPost')
            ->join('hashtag AS h','ph.IdHash','=','h.IdHash')
            ->where(['p.IdPost' =>$this->IdPost])
            ->get();

        $kom =  DB::table('post AS p')
            ->select('k.Tekst','k.Datum','kor.KorIme','s.Putanja','s.Alt','k.IdKomentar')
            ->join('postkom AS pk','p.IdPost','=','pk.IdPost')
            ->join('komentar AS k','pk.IdKomentar','=','k.IdKomentar')
            ->join('korkom AS kk','k.IdKomentar','=','kk.IdKomentar')
            ->join('korisnik AS kor','kk.IdKorisnik','=','kor.IdKorisnik')
            ->join('slika AS s','kor.IdSlika','=','s.IdSlika')
            ->where(['p.IdPost'=>$this->IdPost])
            ->get();


        return [
            'slike' => $slike,
            'hash' => $hash,
            'kom' => $kom
        ];
    }

    public function insert(){
        try{
        $postId = DB::table('post')
            ->insertGetId([
                'Naslov'=>$this->naslov,
                'Opis'=>$this->opis,
                'SkraceniOpis'=>$this->skraceni,
                'IdKorisnik'=>$this->korisnikId,
                'Datum'=>$this->datum
            ]);
        $slika = DB::table('slika')
            ->insertGetId([
                'Putanja'=>'img/'.$this->slikaime,
                'Alt'=>$this->naslov,
                'Children'=>1
            ]);
        DB::table('postslika')->insert([
            'IdPost'=>$postId,
            'IdSlika'=>$slika
        ]);}
        catch(\Exception $ex){
            echo $ex->getMessage();
        }

        return true;
    }

    public function edit(){
        return DB::table('post')
            ->where([
                'IdPost'=>$this->IdPost
            ])
            ->update([
                'Naslov'=>$this->naslov,
                'Opis'=>$this->opis,
                'SkraceniOpis'=>$this->skraceni,
                'Datum'=>$this->datum,
                'IdKorisnik'=>$this->korisnikId
            ]);
    }

    public function deletePost(){

        DB::table('postkom')
            ->where('IdPost','=',$this->IdPost)
            ->delete();

        DB::table('posthash')
            ->where('IdPost','=',$this->IdPost)
            ->delete();

        DB::table('postslika')
            ->where('IdPost','=',$this->IdPost)
            ->delete();

        return DB::table('post')
            ->where('IdPost','=',$this->IdPost)
            ->delete();
    }

    public function jedan()
    {
        return DB::table('post')
            ->where([
                'IdPost'=>$this->IdPost
            ])
            ->first();
    }

    public function updatePost(){
        $idSLika = DB::table('slika')
            ->insertGetId([
                'Putanja'=>'img/'.$this->slikaime,
                'Alt'=>$this->naslov,
                'Children'=>1
            ]);
        DB::table('post')
            ->where([
                'IdPost'=>$this->IdPost
            ])
            ->update([
                'Naslov'=>$this->naslov,
                'Opis'=>$this->opis,
                'SkraceniOpis'=>$this->skraceni,
                'Datum'=>$this->datum,
                'IdKorisnik'=>$this->korisnikId
            ]);
        return DB::table('postslika')
            ->insert(['IdPost'=>$this->IdPost,
                'IdSlika'=>$idSLika]);

    }


}
