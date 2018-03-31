@extends('student.layout.master')


@section('content')

    <div class="container" style="margin-left:40px; margin-top: 60px;" >
        <div class="row">
            <div class="col-md-10 col-md-offset-2 ">
                <h1 class="heading-padding display2"> Welcome {{ $data->Name }} to the Student Portal.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-5">
                <h3 class="heading-padding"><strong>Your Information</strong></h3>
            </div>

        </div>
        <hr style="height:2px;border:none;color:#333;background-color:#333;"/>
        <div class="row" >
            <div class="col-md-12">
                <div class="col-md-3 image-padding">
                    <div class="row" >
                        <div class="col-md-12">
                            <img src="{{ asset('img/avatar.png') }}" class="img-responsive" alt="image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-sm-offset-1">
                            <h3> {{   $data->Name }} </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-8" style="">
                    <table class="table table-striped table-padding table-hover" style="margin-bottom: 30px;">
                        <tbody>
                        <tr>
                            <td><b>NAME</b></td>
                            <td>{{   $data->Name }}</td>
                            <td><b>FATHER'S NAME</b></td>
                            <td>{{ $data->Father }}</td>
                        </tr>
                        <tr class="active">
                            <td><b>ROLL NO</b></td>
                            <td>{{ $data->roll_no }}</td>
                            <td><b>STUDENT NO</b></td>
                            <td>{{   $data->student_no }}</td>
                        </tr>
                        <tr>
                            <td><b>BRANCH</b></td>
                            <td>{{ $data->branch }}</td>
                            <td>
                                <b>EMAIL ADDRESS </b>
                            </td>
                            <td>
                                {{   $data->email }}
                            </td>
                        </tr>
                        <tr class="active">
                            <td><b>DOB</b></td>
                            <td>{{ $data->DOB }}</td>
                            <td><b>Batch Year</b></td>
                            <td>{{ $data->year }}
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
        <hr style="height:2px;border:none;color:#333;background-color:#333;"/>
    </div>

@endsection