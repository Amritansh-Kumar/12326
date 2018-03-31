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
    <form action="{{ route('student.store2') }}" method="post">
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
                <h4 class="ques-text"> Q1 : I make friends easily </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per1" value="A">Agree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per1" value="B">Neutral</label>
                        </div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="ques_S_per2" value="C">Disagree</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q2 : I really enjoys parties and gathering &nbsp; &nbsp;</h4>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per2" value="A">Agree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per2" value="B">Neutral</label>
                        </div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="ques_S_per2" value="C">Disagree</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q3 : My working space is generally organised </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per3" value="A">Agree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per3" value="B">Neutral</label>
                        </div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="ques_S_per3" value="C">Disagree</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q4 : I like to take charge of situation and events </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per4" value="A">Agree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per4" value="B">Neutral</label>
                        </div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="ques_S_per4" value="C">Disagree</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q5 : I find difficult to approach others</h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per5" value="A">Agree</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per5" value="B">Neutral</label>
                        </div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="ques_S_per5" value="C">Disagree</label></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q6 : I believe that I am better than others </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per6" value="A">Agree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per6" value="B">Neutral</label></div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="ques_S_per6" value="C">Disagree</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q7 : I am spontaneous – I act with thinking</h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per7" value="A"> Agree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per7" value="B">Neutral</label></div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="ques_S_per7" value="C">Disagree</label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q8 : I value feelings more than logic </h4>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per8" value="A">Agree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per8" value="B">Neutral</label></div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="ques_S_per8" value="C">Disagree</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q9 : I prefer to things that I know </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per9" value="A"> Agree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per9" value="B">Neutral</label>
                        </div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="ques_S_per10" value="C">Disagree</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q10 : I am more detail oriented rather than focussing on big picture </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per10" value="A"> Agree</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="ques_S_per10" value="B">Neutral</label>
                        </div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="ques_S_per10" value="C">Disagree</label>
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