@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">USERNAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">SLIKA</th>
            <th scope="col">ULOGA</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>
        </tr>
        </thead>
        <tbody>
        @foreach($korisnici as $k)
        <tr>
            <th scope="row">{{$k->IdKorisnik}}</th>
            <td>{{$k->KorIme}}</td>
            <td>{{$k->Email}}</td>
            <td><img src="{{asset('/').$k->Putanja}}" width="100px" height="100px"/></td>
            <td>{{$k->Naziv}}</td>
            <td><a href="{{route("korisnik.edit",['korisnik'=>$k->IdKorisnik])}}"><input type="submit" class="btn btn-primary" value="EDIT"/></a></td>
            <td><form action="{{route("korisnik.destroy",['korisnik'=>$k->IdKorisnik])}}" method="post"> {{method_field('DELETE')}} @csrf <a href="#"><input type="submit" class="btn btn-primary" value="DELETE"/></a></form></td>
        </tr>
        @endforeach
        </tbody>
    </table>
            <div class="flex-col-c p-t-155">
                <a href="{{route('korisnik.create')}}" class="txt2">
                    <input type="submit" class="btn btn-primary" value="INSERT"/>
                </a>
            </div>
            <div class="flex-col-c p-t-155">
                <a href="{{asset('/admin')}}" class="txt2">
                    <input type="submit" class="btn btn-primary" value="BACK TO ADMIN"/>
                </a>
            </div>
        </div>
    </div>
@endsection
