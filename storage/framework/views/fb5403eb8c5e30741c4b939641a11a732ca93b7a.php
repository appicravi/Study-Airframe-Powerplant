<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- <?php $checkLogin = session('user_id'); ?> -->
<div class="page-wrapper">
    <?php echo $__env->make('inc.adminSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <?php echo $__env->make('inc.adminHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                               
                                <div class="card-header cards" style="background-color: white;">
                                    <strong>Add</strong> Question
                                </div>
                                <div class="card-body card-block">
                                    <form id="question" method="post" enctype="multipart/form-data"
                                        class="form-horizontal">

                                       
                                        <!-- // -->
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Course</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select id="cource_id" name="cource_id" class="form-control">
                                                    <option value="">Select Cource</option>
                                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>">
                                                        <?php echo e($item->name); ?>

                                                    </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- // -->
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Chapter</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select id="chapter_id" name="chapter_id" class="form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Question type </label>

                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select id="question_type"  name="type" class="form-control">
                                                    <option value="">select question</option>
                                                    <option value="oral">oral</option>
                                                    <option value="written">written</option>
                                                </select>
                                                <!-- <input type="text" id="email" name="phone" class="form-control"> -->

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">question</label>
                                            </div>
                                            <div class="col-12 col-md-9">

                                                <input type="text" id="explaination" name="question" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">description</label>
                                            </div>
                                            <div class="col-12 col-md-9">

                                                <input type="text" id="explaination" name="question_explan" class="form-control">
                                            </div>
                                        </div>
                                        <div id="option">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">option1 </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="answer_1" name="answer_1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">option2 </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="answer_2" name="answer_2" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">option3 </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="answer_3" name="answer_3" class="form-control">
                                            </div>
                                        </div>
                                </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">correct answer
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="correct_answer" name="correct_answer" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">description
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="explaination" name="explaination" class="form-control">
                                            </div>
                                        </div>



                                        <div class="row card-footer">
                                            <div class="col col-md-3">
                                                &nbsp;
                                            </div>
                                            <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                         
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

                    <a href="<?php echo e(url('question/questionlist')); ?>"><i class="fas fa-arrow-left"></i></a>
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
                        url: "<?php echo e(url('api/getdata')); ?>",
                        type: "POST",
                        data: {
                            parent_id: idCountry,
                            _token: '<?php echo e(csrf_token()); ?>'
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
            $(document).ready(function () {
                $('#question_type').on('change', function () {
                    // alert("hello")
                    var type = this.value;
                    if(type =='oral'){
                    $('#option').hide();
                    // alert(idCountry);
                    // return;
                    }else{
                    
                    $('#option').show();
                    }
                       
                    });
                
            });
        </script>

    </div>

</div>
<?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\education\resources\views/question/addQuestion.blade.php ENDPATH**/ ?>