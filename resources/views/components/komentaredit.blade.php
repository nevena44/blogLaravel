@extends('layout.loglayout')
@section('cont')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{asset('/')}}images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="{{route('update',['id'=>$id])}}" method="POST" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-49">
						EDIT COMMENT
					</span>

                    <div class="wrap-input100 validate-input m-b-23">
                        <span class="label-input100">Text</span>
                        <input class="input100" type="text" name="text" value="{{$single->Tekst}}" placeholder="Type your comment"/>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <input type="submit" class="login100-form-btn" value="INSERT" name="edit"/>
                        </div>
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
