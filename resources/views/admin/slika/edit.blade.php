@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="{{route('slika.update',['id'=>$slika->IdSlika])}}" method="POST" class="login100-form validate-form" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PATCH')}}
                    <span class="login100-form-title p-b-49">
						EDIT USER
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="alt" value="{{$slika->Alt}}" placeholder="Type your username">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Pictures is reauired">
                        <span class="label-input100">Picture</span>
                        <input class="input100" type="file" name="fSlika" placeholder="Type your photo">
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
                        <a href="{{route('slika.index')}}" class="txt2">
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
