@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">PHOTO</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                </tr>
                </thead>
                <tbody>
                @foreach($slika as $s)
                    <tr>
                        <th scope="row">{{$s->IdSlika}}</th>
                        <td><img src="{{asset('/').$s->Putanja}}" width="100px" height="100px"/></td>
                        <td>{{$s->Alt}}</td>
                        <td><a href="{{route("slika.edit",['slika'=>$s->IdSlika])}}"><input type="submit" class="btn btn-primary" value="EDIT"/></a></td>
                        <td><form action="{{route("slika.destroy",['slika'=>$s->IdSlika])}}" method="post"> {{method_field('DELETE')}} @csrf <a href="#"><input type="submit" class="btn btn-primary" value="DELETE"/></a></form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$slika->render()}}
            <div class="flex-col-c p-t-155">
                <a href="{{route('slika.create')}}" class="txt2">
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
