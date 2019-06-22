@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <table class="table">
                <thead>
                <tr>
                    <form action="{{asset('/kljucne')}}" method="post"> @csrf
                    <th scope="col">SORTIRAJ OD</th><td><input type="date" name="od"/></td>
                    <th scope="col">DO</th><td><input type="date" name="do"/></td>
                    <td><input type="submit" name="sortiraj" class="btn btn-primary" value="SORT"/> </td></form>
                </tr>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">USER</th>
                    <th scope="col">AKTIVNOST</th>
                    <th scope="col">DATUM</th>

                </tr>
                </thead>
                <tbody>
                @foreach($klju as $k)
                    <tr>
                        <th scope="row">{{$k->IdKljucne}}</th>
                        <td>{{$k->Korisnik}}</td>
                        <td>{{$k->Opis}}</td>
                        <td>{{$k->Datum}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="flex-col-c p-t-155">
                <a href="{{asset('/admin')}}" class="txt2">
                    <input type="submit" class="btn btn-primary" value="BACK TO ADMIN"/>
                </a>
            </div>
        </div>
    </div>
@endsection
