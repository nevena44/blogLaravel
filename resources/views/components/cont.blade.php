@extends('layout.glavniLayout')
@section('sadrzaj')

    <div class="page-container float-right">
        <div class="row">
            @foreach($post as $p)
            <div class="col-md-6">
                <div class="blog-entry ftco-animate">
                    <a href="{{route('single',['id'=>$p->IdPost])}}" class="blog-image">
                        <img src="{{asset('/').$p->Putanja}}" class="img-fluid" alt="{{$p->Alt}}">
                    </a>
                    <div class="text py-4">
                        <div class="meta">
                            <div>{{$p->Datum}}</div>
                            <div>{{$p->KorIme}}</div>
                        </div>
                        <h3 class="heading"><a href="{{route('single',['id'=>$p->IdPost])}}">{{$p->Naslov}}</a></h3>
                        <p>{{$p->SkraceniOpis}}</p>
                    </div>
                </div>

            </div>
            @endforeach

                {{$post->render()}}
    </div>

@endsection