@extends('layout.glavniLayout')
@section('sadrzaj')
    <div class="page-container float-right">
        <div class="row">
<div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Leave a message</h3>
    <form action="{{asset('/contact')}}" method="POST" class="bg-light p-4">
        @csrf
        <div class="form-group">
            <label for="name">{{session()->get('user')->KorIme}}</label>
            <input type="text" name="kor" value="{{session()->get('user')->KorIme}}"/>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="text" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Send message" class="btn py-3 px-4 btn-primary">
        </div>

    </form>
    @if (session('por'))
        <div class="alert-success">
            {{session('por')}}
        </div>
    @endif
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
</div>
        </div>
    </div>
    @endsection
