@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">NASLOV</th>
                    <th scope="col">OPIS</th>
                    <th scope="col">SKRACENI OPIS</th>
                    <th scope="col">DATUM</th>
                    <th scope="col">SLIKA</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                </tr>
                </thead>
                <tbody>
                @foreach($post as $p)
                    <tr>
                        <td scope="row">{{$p->IdPost}}</td>
                        <th >{{$p->Naslov}}</th>
                        <td><textarea>{{$p->Opis}}</textarea></td>
                        <td>{{$p->SkraceniOpis}}</td>
                        <td>{{$p->Datum}}</td>
                        <td><img src="{{asset('/').$p->Putanja}}" width="100px" height="100px alt="{{$p->Alt}}"/> </td>
                        <td><a href="{{route("post.edit",['post'=>$p->IdPost])}}"><input type="submit" class="btn btn-primary" value="EDIT"/></a></td>
                        <td><form action="{{route("post.destroy",['komentar'=>$p->IdPost])}}" method="post"> {{method_field('DELETE')}} @csrf <a href="#"><input type="submit" class="btn btn-primary" value="DELETE"/></a></form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{$post->render()}}

            <div class="flex-col-c p-t-155">
                <a href="{{route('post.create')}}" class="txt2">
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
