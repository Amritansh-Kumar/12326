@extends('teacher.layout.master')

@section('content')

    <h2 style="margin-top: 30px;">Questionnaire</h2>
    @if(count($errors)>0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('teacher.store') }}" method="post">
        {{ csrf_field() }}
        <div class="ques-box" style="margin-top: 60px;">
            <div class=" box-in-padding">
                <h3><strong>Fill Studnent Infromation:</strong></h3>
                <br>
                <h4 class="ques-text"> &nbsp;Student NO.: </h4>
                <input  name="student_no" type="text" class="form-control">
                <h4 class="ques-text">Semster:</h4>
                            <input  name="sem" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q1 : How is student’s academic performance till now?
                </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_1" value="A">Very Good</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_1" value="B">Average</label>
                        </div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_1" value="C">Below Average</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_1" value="D">Poor</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q2 : How is behaviour of the student in class?
                </h4>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_2" value="A">Very responsive</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_2" value="B">Responsive</label></div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="question_2" value="C">Average</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="question_2" value="D">Irresponsive</label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q3 : Does student complete assignment on time?   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp; </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_3" value="A">Always</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_3" value="B">Mostly</label></div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="question_3" value="C">Rearly</label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q4 : Does student ask question in the class? </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_4" value="A">Always</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_4" value="B">Mostly</label>
                        </div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="question_4" value="C">Rarely</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q5 : Does student come late in class? </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_5" value="A">Always</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_5" value="B">Mostly</label>
                        </div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="question_5" value="C">Rarely</label></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q6 : How does student mostly appear in the class?
                </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_6" value="A"> Happy/Cheerful</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_6" value="B">Normal
                            </label></div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="question_6" value="C">Gloomy/Dull/Sad
                            </label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q7 :Has the student ever consulted you for his problem after class? </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_7" value="A">Yes</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_7" value="B">No</label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ques-box">
            <div class=" box-in-padding">
                <h4 class="ques-text"> Q8 : Rate the overall intellect of the student? </h4>

                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_8" value="A">Bright</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <label class="option-text"><input type="radio" name="question_8" value="B">Average</label></div>
                    </div>
                </div>
                <div class="row col-gap">
                    <div class="col-md-6">
                        <div class="radio ">
                            <label class="option-text"><input type="radio" name="question_8" value="C">Below Average</label></div>
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
