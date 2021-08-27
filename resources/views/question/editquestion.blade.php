@include('inc.header')
<!-- <?php $checkLogin = session('user_id'); ?> -->
<div class="page-wrapper">
    @include('inc.adminSidebar')

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        @include('inc.adminHeader')

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header cards" style="background-color: white;">
                                    <strong>Edit</strong> Question
                                </div>
                                
                                <div class="card-body card-block">
                                    <form id="editquestion" method="post" enctype="multipart/form-data"
                                        class="form-horizontal">
                                        
                                        <!-- // -->
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Course</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select id="cource_id" name="cource_id" class="form-control">
                                                    <option value="">Select Cource</option>
                                                    @foreach ($term as $item)
                                                    <option value="{{$item->id}}" @if($item->id==$quetion->cource_id)selected @endif>
                                                        {{$item->name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- // -->
                                        <input type="hidden" id="id" value="{{$quetion->id}}" name="id" class="form-control">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Chapter</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select id="chapter_id" name="chapter_id" class="form-control">
                                                    <option value='{{$quetion->chapter_id}}'>{{$chapter->name}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Question type </label>

                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select id="question"  name="type" class="form-control">
                                                    <option value="">select question</option>
                                                    <option value="oral" @if($quetion->type== 'oral') selected @endif>oral</option>
                                                    <option value="written" @if($quetion->type== 'written') selected @endif>written</option>
                                                </select>
                                                <!-- <input type="text" id="email" name="phone" class="form-control"> -->

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input"  class=" form-control-label">question</label>
                                            </div>
                                            <div class="col-12 col-md-9">

                                                <input type="text" id="explaination" value="{{$quetion->question}}" name="question" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class="  form-control-label">description</label>
                                            </div>
                                            <div class="col-12 col-md-9">

                                                <input type="text" id="explaination" value="{{$quetion->question_explan}}"  name="question_explan" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input"  class=" form-control-label">option1 </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="answer1"  value="{{$quetion->answer_1}}" name="answer_1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input"  class=" form-control-label">option2 </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="answer2"  value="{{$quetion->answer_2}}" name="answer_2" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">option3 </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="answer3" value="{{$quetion->answer_3}}" name="answer_3" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input"  class=" form-control-label">correct answer
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="correct_answer" value="{{$quetion->correct_answer}}" name="correct_answer" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input"  class=" form-control-label">description
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="explaination" value="{{$quetion->explaination}}" name="explaination" class="form-control">
                                            </div>
                                        </div>



                                        <div class="row card-footer">
                                            <div class="col col-md-3">
                                                &nbsp;
                                            </div>
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                         
                                            <div class="col-12 col-md-9">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button id="reset" type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                &nbsp;
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <div class="result"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <a href="{{url('question/questionlist')}}"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#cource_id').on('change', function () {
                    var idCountry = this.value;
                    // $("#chapter").html('');
                    // alert(idCountry);
                    // return;
                    $.ajax({
                        url: "{{url('api/getdata')}}",
                        type: "POST",
                        data: {
                            parent_id: idCountry,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            console.log(result);
                            $('#chapter_id').html('<option value="">Select Chapter</option>');
                            $.each(result.data, function (key, value) {
                                $("#chapter_id").append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });

                        }
                    });
                });
            });
        </script>
 <script>
     
      </script>

    </div>

</div>
@include('inc.adminFooter')

@include('inc.footer')