@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">USER</th>
                    <th scope="col">MESSAGE</th>
                </tr>
                </thead>
                <tbody>
                @foreach($kont as $p)
                    <tr>
                        <td scope="row">{{$p->IdContact}}</td>
                        <th >{{$p->Korisnik}}</th>
                        <td>{{$p->Poruka}}</td>
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
