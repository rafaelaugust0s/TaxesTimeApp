@extends('layouts.taxes')





@section('content')


<h3 class="ui top attached blue header block segment"> </h3>
<div class="row">
    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">
        <p>Keep your documents updated!! Upload them now!</p> <br>

    <div class="ui bottom attached segment">

        @if(\Illuminate\Support\Facades\Session::has('filemsg'))
            <div class="alert alert-success">
                <strong>Success!</strong> {{\Illuminate\Support\Facades\Session::get('filemsg')}}</a>.
            </div>
        @endif

        <form  action="index" method="post"
              enctype="multipart/form-data">
            {{csrf_field()}}


            <input type="file" name="file" id="file">
<br>
            <br>

            <button class="submit" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger ">UPLOAD</button>

        </form>
    </div>

    </div>

@endsection
