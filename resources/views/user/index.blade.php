@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">LIST of DOCTORS</div>


                    {!! Form::open(array('route' => 'doctor.list', 'method'=>'get', 'class'=>'form navbar-form navbar-right searchform')) !!}
                    {!! Form::text('location', null,
                                           array('required',
                                                'class'=>'form-control',
                                                'placeholder'=>'Enter Your Location')) !!}

                    {!! Form::text('specification', null,
                                           array('required',
                                                'class'=>'form-control',
                                                'placeholder'=>'Enter the Specification')) !!}
                    {!! Form::submit('Search',
                                               array('class'=>'btn btn-default')) !!}
                    {!! Form::close() !!}

                    <div class="panel-body">
f
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
