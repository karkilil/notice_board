@extends('frontend.layout')
@section('content')
        <div class="row">
            <div class="col-md-7 col-md-offset-3">
                <div class="panel panel-success">
                    <div class="panel-heading">New Student's Registration Form</div>
                    <div class="panel-body">
                    {!! form($form) !!}
                    </div>
                </div>
            </div>
        </div>

@endsection