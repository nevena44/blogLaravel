@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="{{asset('/log')}}" method="POST" class="login100-form validate-form">
                    @csrf
					<span class="login100-form-title p-b-49">
						Login
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Type your username">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" placeholder="Type your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <input type="submit" value="LOGIN" name="btnLog" class="login100-form-btn"/>
                        </div>
                    </div>
                    @if(session('poruka'))
                        {{session('poruka')}}
                        @endif
                    @if (session('por'))
                        <div class="alert-success">
                            {{session('por')}}
                        </div>
                    @endif
                    <div class="flex-col-c p-t-155">
                        <a href="{{route('reg')}}" class="txt2">
                            Register
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
