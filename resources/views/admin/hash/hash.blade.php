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
                @foreach($hash as $h)
                    <tr>
                        <th scope="row">{{$h->IdHash}}</th>
                        <td>{{$h->Naziv}}</td>
                        <td><a href="{{route("hash.edit",['komentar'=>$h->IdHash])}}"><input type="submit" class="btn btn-primary" value="EDIT"/></a></td>
                        <td><form action="{{route("hash.destroy",['komentar'=>$h->IdHash])}}" method="post"> {{method_field('DELETE')}} @csrf <a href="#"><input type="submit" class="btn btn-primary" value="DELETE"/></a></form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="flex-col-c p-t-155">
                <a href="{{route('hash.create')}}" class="txt2">
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