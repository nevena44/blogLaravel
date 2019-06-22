@extends('layout.glavniLayout')
@section('sadrzaj')
    <section class="ftco-fixed clearfix">
        <div class="image js-fullheight float-left">
            <div class="home-slider owl-carousel js-fullheight">
                <div class="slider-item js-fullheight" style="background-image: url('{{asset('/').$post->Putanja}}');">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row slider-text align-items-end" data-scrollax-parent="true">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end:image -->
    <div class="page-container float-right">
        <div class="row">

            <div class="col-md-12">
                <h2 class="mb-3">{{$post->Naslov}}ov</h2>
                <p>{{$post->Opis}}</p>
                @foreach($slika as $s)
                    <h2 class="mb-3 mt-5">{{$s->Alt}}</h2>
                    <img src="{{asset('/').$s->Putanja}}" alt="{{$s->Alt}}" class="img-fluid">@endforeach
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        @foreach($hash as $h)
                        <a class="tag-cloud-link">{{$h->Naziv}}</a>
                        @endforeach
                    </div>
                </div>

                <div class="pt-5 mt-5">
                    <h3 class="mb-5">Comments</h3>
                    <ul class="comment-list">
                        @foreach($kom as $k)
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{asset('/').$k->Putanja}}" alt="{{$k->Alt}}">
                                </div>
                                <div class="comment-body">
                                    <h3>{{$k->KorIme}}</h3>
                                    <div class="meta">{{$k->Datum}}</div>
                                    <p>{{$k->Tekst}}</p>
                                    @if(session()->has('user')&&session()->get('user')->KorIme==$k->KorIme)
                                    <a href="{{route('edit',['id'=>$k->IdKomentar])}}">
                                        <input type="submit" name="edit" class="btn py-3 px-4 btn-primary" value="EDIT"/>
                                    </a>
                                    <form action="{{route('delete',['id'=>$k->IdKomentar])}}" method="post">@csrf
                                        <input type="submit" name="delete" class="btn py-3 px-4 btn-primary" value="DELETE"/>
                                    </form>
                                        @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <!-- END comment-list -->
                    @if(session()->has('user'))
                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="{{route('kom',['id'=>$post->IdPost])}}" method="POST" class="bg-light p-4">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{session()->get('user')->KorIme}}</label>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="text" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                    </div>
                        @endif
                </div>
            </div> <!-- .col-md-12 -->
        </div>
    </div><!-- end: page-container-->
    </section>
@endsection
