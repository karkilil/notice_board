@extends('frontend.layout')
@include('frontend.nav')
@section('content')
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="well">
                    {!! form($form) !!}
                    <a class="btn btn-link pull-right" style="text-decoration: none;" href="#">Goto Login</a>
                </div>
            </div>
        </div>

@endsection