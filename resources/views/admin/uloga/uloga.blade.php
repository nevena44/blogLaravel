@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">NAZIV</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                </tr>
                </thead>
                <tbody>
                @foreach($uloga as $u)
                    <tr>
                        <th scope="row">{{$u->IdUloga}}</th>
                        <td>{{$u->Naziv}}</td>
                        <td><a href="{{route("uloga.edit",['komentar'=>$u->IdUloga])}}"><input type="submit" class="btn btn-primary" value="EDIT"/></a></td>
                        <td><form action="{{route("uloga.destroy",['komentar'=>$u->IdUloga])}}" method="post"> {{method_field('DELETE')}} @csrf <a href="#"><input type="submit" class="btn btn-primary" value="DELETE"/></a></form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="flex-col-c p-t-155">
                <a href="{{route('uloga.create')}}" class="txt2">
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