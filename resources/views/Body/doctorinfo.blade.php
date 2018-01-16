@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    Rating of that Doctor
                    Photo: Photo Will be Places Here <br>
                    Name:{{$doctorinfo->name}} <br>
                    Location: {{$doctorinfo->location->name}} <br>
                    Experience:{{$doctorinfo->experience}}<br>
                    Specification:{{$doctorinfo->specification->name}}<br>
                    Education:{{$doctorinfo->Education}}<br>
                    Cost:Rs. {{$doctorinfo->Cost}}<br>
                    Phone Number:{{$doctorinfo->phonenumber}}<br>
                    All the Feedbacks of the Doctor are placed here. <br>
                    <button type="button" id="bookapooint{{$doctorinfo->id}}" class="btn btn-primary">Book Appointment</button>

                    <br>



                    Available Time for This Doctor at Date 2018-01-18 is :

                    @if(count($timelist)==0)
                    <br> Sorry No Available At this Date
                    @endif
                    @foreach ($timelist as $time)
                        <br>


                    {{$time->appoint_time}}





                    {{--@if(count($date->doctor_appointment_time)==0)--}}
                    {{--Sorry No Time Available In this Date--}}
                    {{--@endif--}}
                        {{--@foreach ($date->doctor_appointment_time as $time)--}}
                            {{--{{$time->appoint_time}}--}}
                            {{--@endforeach--}}


                        @endforeach

                    The Start Time of This Doctor is
                    {{$slot->StartTime}} <br>
                    End Time is
                    {{$slot->EndTime}}
                    {{--//display the converted time--}}
                    {{intval((strtotime(date('Y-m-d H:i:s'))-strtotime("2017-05-11 02:56:18"))/60)}}
                    {{date('H:i',strtotime('+'.$slot->SlotTime .' minutes',strtotime($slot->StartTime)))}}

                </div>
            </div>
        </div>
    </div>
@endsection
