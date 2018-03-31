@extends('student.layout.master')

@section('content')
        <h2>Questionnaire</h2>
        @if(count($errors)>0)
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('student.store') }}" method="post">
            {{ csrf_field() }}
            {{--<div class="ques-box form-control">--}}
                {{--<div class=" box-in-padding">--}}

                    {{--<div class="input-group">--}}

                        {{--<span class="input-group-addon">Student No.</span>--}}
                        {{--<input id="text" type="text" class="form-control" name="student_id"--}}
                               {{--value="{{ Auth::user()->student_id }}" readonly>--}}
                    {{--</div>--}}
                    {{--<div class="input-group">--}}
                        {{--<span class="input-group-addon">Semster:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>--}}
                        {{--<input id="text" type="text" class="form-control" name="sem" value="{{ Auth::user()->sem }}"--}}
                               {{--readonly>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
            <div class="ques-box">
                <div class=" box-in-padding">
                    <h4 class="ques-text"> Q1 : Do you feel going to college mostly waste your time?</h4>

                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_1" value="A">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_1" value="B">No</label>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="row col-gap">
                    <div class="col-md-6">
                    <div class="radio ">
                    <label class="option-text"><input type="radio" name="optradio">No,I am happy with this college</label></div></div>
                    <div class="col-md-6">
                    <div class="radio ">
                    <label class="option-text"><input type="radio" name="optradio">Yes, I will definitely do</label></div></div>
                    </div>
                    -->

                </div>
            </div>

            <div class="ques-box">
                <div class=" box-in-padding">
                    <h4 class="ques-text"> Q2 : Rate the curriculum of the university/college according to
                        difficulty? </h4>

                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_2" value="A">Easy</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_2" value="B">Not Easy</label></div>
                        </div>
                    </div>
                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_2" value="C">Moderately
                                    difficult</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_2" value="D">Difficult</label></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ques-box">
                <div class=" box-in-padding">
                    <h4 class="ques-text"> Q3 : Rate on the scale of 10 the education quality and infrastructure of your
                        college with respect to your career goals? </h4>

                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_3" value="A">2</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_3" value="B">5</label></div>
                        </div>
                    </div>
                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_3" value="C">7</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_3" value="D">10</label></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ques-box">
                <div class=" box-in-padding">
                    <h4 class="ques-text"> Q4 : Are you satisfied with your academic performance? </h4>

                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_4" value="A">Yes, very much</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_4" value="B">Quite a bit</label>
                            </div>
                        </div>
                    </div>
                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_4" value="C">I need to
                                    improve</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_4" value="D">Not at all </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ques-box">
                <div class=" box-in-padding">
                    <h4 class="ques-text"> Q5 : How do you feel about paying for college?</h4>

                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_5" value="A">It’s an investment for
                                    my
                                    future.</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_5" value="B">Fees is too
                                    high.</label>
                            </div>
                        </div>
                    </div>
                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_5" value="C">I don’t care. My
                                    parents
                                    are paying for it.</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_5" value="D">None of these</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ques-box">
                <div class=" box-in-padding">
                    <h4 class="ques-text"> Q6 : Where do you see yourself after college? </h4>

                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_6" value="A"> Doing a high profile
                                    job</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_6" value="B">Running a successful
                                    business</label></div>
                        </div>
                    </div>
                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_6" value="C">Pursuing
                                    masters</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_6" value="D">I don’t see a
                                    future</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ques-box">
                <div class=" box-in-padding">
                    <h4 class="ques-text"> Q7 : Why are you pursuing this course? </h4>

                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_7" value="A"> Family
                                    pressure</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_7" value="B">Following my
                                    Passion</label></div>
                        </div>
                    </div>
                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_7" value="C">Because everybody is
                                    doing the same</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_7" value="D">Not sure</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ques-box">
                <div class=" box-in-padding">
                    <h4 class="ques-text"> Q8 : Do you involve extra-curriculum activities? </h4>

                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_8" value="A"> Often</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_8" value="B">Sometimes</label></div>
                        </div>
                    </div>
                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_8"value="C">Rarely</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_8" value="D">Waste of time</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ques-box">
                <div class=" box-in-padding">
                    <h4 class="ques-text"> Q9 : Do you think people around you doing better than you? </h4>

                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_9" value="A"> Yes</label></div>
                        </div>

                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_9" value="B">No</label></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ques-box">
                <div class=" box-in-padding">
                    <h4 class="ques-text"> Q10 : Class lectures are interesting. </h4>

                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_10" value="A"> Always</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio">
                                <label class="option-text"><input type="radio" name="ques_S_drop_10" value="B">Mostly</label></div>
                        </div>
                    </div>
                    <div class="row col-gap">
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_10" value="C">Rarely</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="radio ">
                                <label class="option-text"><input type="radio" name="ques_S_drop_10" value="D">None of these</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row submit-button-padding">
                <div class="col-md-offset-10 col-md-1 ">
                    <input type="Submit" class="btn btn-success btn-lg">
                </div>
            </div>

        </form>
        @endsection
