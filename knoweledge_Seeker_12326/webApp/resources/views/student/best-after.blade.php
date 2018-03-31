@extends('student.layout.master')


@section('content')

    <div class="container">
        <div class="box">
            <div class="row">
                <div class=" col-md-offset- col-md-6 heading">
                    <b>Best After Graduation </b>
                </div>
            </div>

            <div class="row carousel-padding">
                <div class=" col-md-offset-1 col-md-10">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('img/pic-1.jpg') }}" alt="image">
                            </div>

                            <div class="item ">
                                <img src="{{ asset('img/pic-2.jpg') }}" q alt="image">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-10 text-padding ">

                    <p> Following are identfied as the best you can follow after your graduation. If you are able to put
                        a better foot forward to secure a position in the suitable line of work,you will prove to be a
                        good asset after all.</p>


                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-10 text-padding ">
                    <div class="text-padding l">
                        <h3 style="font-weight: 500">Recommendations for you:</h3>
                        <hr>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info list">1.You can go for
                                <strong>{{ $prediction->recommended_course_1 }}</strong>.
                            </li>
                            <li class="list-group-item list-group-item-info list">2.You can go for
                                <strong>{{ $prediction->recommended_course_2 }}</strong>.
                            </li>
                            <li class="list-group-item list-group-item-info list">3.You can go for
                                <strong>{{ $prediction->recommended_course_3 }}</strong>.
                            </li>
                            <li class="list-group-item list-group-item-info list">4.You can go for
                                <strong>{{ $prediction->recommended_course_4 }}</strong>.
                            </li>
                            <li class="list-group-item list-group-item-info list">5.You can go for
                                <strong>{{ $prediction->recommended_course_5 }}</strong>.
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-10 heading1">
                    <h3> You may Contact these Passout Students :</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $alumini[0]->al_name_1 }}</td>
                            <td>{{ $alumini[0]->al_email_1 }}</td>
                            <td>{{ $alumini[0]->al_contact_1 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $alumini[0]->al_name_2 }}</td>
                            <td>{{ $alumini[0]->al_email_2 }}</td>
                            <td>{{ $alumini[0]->al_contact_2 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $alumini[0]->al_name_3 }}</td>
                            <td>{{ $alumini[0]->al_email_3 }}</td>
                            <td>{{ $alumini[0]->al_contact_3 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $alumini[0]->al_name_4 }}</td>
                            <td>{{ $alumini[0]->al_email_4 }}</td>
                            <td>{{ $alumini[0]->al_contact_4 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $alumini[0]->al_name_5 }}</td>
                            <td>{{ $alumini[0]->al_email_5 }}</td>
                            <td>{{ $alumini[0]->al_contact_5 }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-1 col-md-10 heading1">
                    <h3> Follow this link for the courses -</h3>
                </div>
            </div>
            <div class="row padd">
                <div class="col-md-offset- col-md-3">
                    <a href="https://www.myamcat.com/" target="_blank"> <img src="{{ asset('img/AMCAT_new-logo.png') }}"
                                                                             class="img-responsive" alt=""></a>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <a href="https://www.coursera.org/" target="_blank"> <img src="{{ asset('img/Coursera_logo.PNG') }}"
                                                                              class="img-responsive" alt=""></a>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <a href="https://www.khanacademy.org/" target="_blank"> <img src="{{ asset('img/khan-academy.png') }}"
                                                                                 class="img-responsive" alt=""></a>
                </div>
            </div>
            <div class="row padd">
                <div class="col-md-offset-2 col-md-3">
                    <a href="https://www.indeed.com/" target="_blank"> <img src="{{ asset('img/indeed-logo.png') }}" class="img-responsive"
                                                                            alt=""></a>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <a href="https://www.udacity.com/" target="_blank"> <img src="{{ asset('img/udacity.png') }}" class="img-responsive" alt=""></a>
                </div>
            </div>

        </div>
    </div>

@endsection()