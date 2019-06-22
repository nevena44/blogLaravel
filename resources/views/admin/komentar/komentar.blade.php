@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">TEXT</th>
                    <th scope="col">DATUM</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                </tr>
                </thead>
                <tbody>
                @foreach($komentar as $k)
                    <tr>
                        <th scope="row">{{$k->IdKomentar}}</th>
                        <td>{{$k->Tekst}}</td>
                        <td>{{$k->Datum}}</td>
                        <td><a href="{{route("komentar.edit",['komentar'=>$k->IdKomentar])}}"><input type="submit" class="btn btn-primary" value="EDIT"/></a></td>
                        <td><form action="{{route("komentar.destroy",['komentar'=>$k->IdKomentar])}}" method="post"> {{method_field('DELETE')}} @csrf <a href="#"><input type="submit" class="btn btn-primary" value="DELETE"/></a></form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="flex-col-c p-t-155">
                <a href="{{route('komentar.create')}}" class="txt2">
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