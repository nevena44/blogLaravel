@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="{{route('post.update',['id'=>$id])}}" class="login100-form validate-form" method="post">
                    @csrf
                    {{method_field('PATCH')}}
                    <span class="login100-form-title p-b-49">
						EDIT POST
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Post name is reauired">
                        <span class="label-input100">Post Name</span>
                        <input class="input100" type="text" name="name" value="{{$p->Naslov}}" placeholder="Type your post name">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Post text is reauired">
                        <span class="label-input100">Post Text</span>
                        <textarea class="input100" type="text" name="text" placeholder="Type your post text">{{$p->Opis}}</textarea>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Text is required">
                        <span class="label-input100">Text</span>
                        <input class="input100" type="text" name="ptext" value="{{$p->SkraceniOpis}}" placeholder="Type your text">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

{{--                    <div class="wrap-input100 validate-input" data-validate="Text is required">--}}
{{--                        <span class="label-input100">Photo</span>--}}
{{--                        <input class="input100" type="file" name="photo" placeholder="Type your photo">--}}
{{--                        <span class="focus-input100" data-symbol="&#xf190;"></span>--}}
{{--                    </div>--}}

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <input type="submit" class="login100-form-btn" value="EDIT" name="btnInsert"/>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="container-login100-form-btn">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="flex-col-c p-t-155">
                        <a href="{{route('post.index')}}" class="txt2">
                            Back to blog page.
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>s
@endsection
