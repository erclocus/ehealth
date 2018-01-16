@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">




@foreach($doctors as $doctor)
                        <div class="panel-heading">
                    <a href="/doctor/{{$doctor->id}}/{{$doctor->name}}" > {{$doctor->name}} </a>
                        <button type="button" id="bookapooint{{$doctor->id}}" class="btn btn-primary">Book Appointment</button>
                        </div>
    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
