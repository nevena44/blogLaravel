@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="{{route('komentar.store')}}" method="POST" class="login100-form validate-form" enctype="multipart/form-data">
                    @csrf
                    <span class="login100-form-title p-b-49">
						INSERT COMMENT
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Text is reauired">
                        <span class="label-input100">Text</span>
                        <input class="input100" type="text" name="text" placeholder="Type your comment">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <input type="submit" class="login100-form-btn" value="INSERT" name="btnInsert"/>
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
                        <a href="{{asset('/admin')}}" class="txt2">
                            ADMIN
                        </a>
                    </div>
                    <div class="flex-col-c p-t-155">
                        <a href="{{route('index')}}" class="txt2">
                            Back to blog page.
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>s
@endsection
