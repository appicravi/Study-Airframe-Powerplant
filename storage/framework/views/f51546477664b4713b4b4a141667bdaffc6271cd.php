<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $checkLogin = session('user_id'); ?>
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
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
                              
                               <form id="import_fileform" method='post'  enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="file" name="import_file" data-id=''>
                                    <button type="submit" class="btn btn-primary">Import File</button>
                               </form>
                               <div id="result2"></div>
                                <div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Question list</h5>
                                     <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Course</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select id="cource_id" name="cource_id" class="form-control">
                                                    <option value="">Select Cource</option>
                                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>">
                                                        <?php echo e($item->name); ?>

                                                    </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-9">
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
                                                <label for="text-input" class=" form-control-label">Status</label>

                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select id="status"  name="type" class="form-control">
                                                    <option value="">select status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactive</option>
                                                </select>
                                                <!-- <input type="text" id="email" name="phone" class="form-control"> -->

                                            </div>
                                        </div>
                                        
                                      <div role="group" class="btn-group btn-group-sm">
									  <!-- <input type="text" class="form-control" id="searchcust-1" onkeyup="betterFunction()" placeholder="Search by NAME"> -->
											<input type="hidden" class="form-control" id="crf" value="<?php echo e(csrf_token()); ?>">
                                          <a href="<?php echo e(url('question/add-Question')); ?>" class="btn btn-sm btn-secondary">Add Question</a></div>
                                </div>
                                 <!-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Chapter</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select id="chapter_id" name="chapter_id" class="form-control">
                                                </select>
                                            </div>
                                        </div> -->
                                <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <!-- <th style="color: #000;">ID</th> -->
                                                <th style="color: #000;">Course</th>
                                                
                                                <th style="color: #000;">Chapter</th>
                                                <th style="color: #000;">Questiont type</th>
                                                <th style="color: #000;">Question</th> 
                                                <th style="color: #000;">Answer</th> 
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="allcust">
                                        <?php if($questionlist): ?>
	<?php $__currentLoopData = $questionlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $questions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<tr class="tr-shadow" id="row_<?php echo e($questions->id); ?>" style="border-top: 1px solid #ebe8f8;">
        <td><?php echo e($questions->name); ?></td>
        <td><?php echo e($questions->chapter_id); ?></td>
		
		<td><?php echo e($questions->type); ?></td>
        <td><?php echo e($questions->question); ?></td>
		 <td><?php echo e($questions->correct_answer); ?></td>
         <!-- <td><?php echo e($questions->created_at); ?></td> -->
         <td>
           <input id="status_change" class='status_change' data-id="<?php echo e($questions->id); ?>" type="checkbox" <?php if($questions->status): ?> checked <?php endif; ?>>        
        </td>
        <td>
            <div class="table-data-feature">
				<a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('question/edit')); ?>/<?php echo e($questions->id); ?>"><i class="zmdi zmdi-edit"></i></a>
				<a class="item deleteme" data-id="<?php echo e($questions->id); ?>" data-type="question" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
            </div>
        </td>
    </tr>

   
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                               
                                <!-- END DATA TABLE -->
                                <a href="<?php echo e(url('super-admin/dashboard')); ?>"><i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                       
                         <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />


   
                        
                       
                    </div>
                </div>
            </div>
            
            <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <script>
     $(document).ready(function(){
        var host = 'education';
        $(".status_change").change(function(){
           var data= $(this).data('id');
           alert(data);
           if(data!='')
           {
            $.ajax({
                type:'post',
                url: "/"+host+"/api/changequestionstatus",
                data:{
                    id:data,
                    _token:$("#token").val(),
                },
                success: function(response){
                    var obj=JSON.parse(response);
                    if(obj.status){
                        location.reload();
                    }else{

                    }
                }
            })
           }
            
        });
        $("#import_fileform").submit(function(event){
            event.preventDefault();
            var formData= new FormData(jQuery('#import_fileform')[0]);
            
            $.ajax({
                type:'post',
                url: "/"+host+"/importfile",
                data:formData,
                contentType:false,
                processData:false,
                success: function(response){
                    var obj=JSON.parse(response);
                    if(obj.status==true){
                        jQuery('#result2').html(obj.message);
                    }else{
                        jQuery('#result2').html(obj.message);
                    }
                }
            });
        });
           
    });
    </script>
            <script>
                 var host = 'education';
                let counter=0;
                const getData =() =>{
                    jQuery.ajax({
                        type: 'post',
                        url: '/'+host+'/actions/searchCustomer',
                        data: { 
                            key: jQuery("#searchcust-1").val(),
                            _token: jQuery("#crf").val()
                        },
                        success: function(data) {
                            var obj = JSON.parse(data);
                            if(obj.status==true){
                                jQuery('#allcust').html(obj.data);
                            }else{
                                jQuery('#allcust').html('No data found');
                            }
                        }
                    });
                    console.log("fetch data",counter++);
                }

                const Magic = function(fn,d){
                    let timer;

                    return function (){
                        let context=this;
                        args=arguments;
                        clearTimeout(timer);
                        timer = setTimeout( () =>{
                            getData.apply(context,arguments);
                        },d);
                    }
                }
                const betterFunction =Magic(getData,300);
            </script>
            <script>
        $(document).ready(function () {
            var host = 'education';
            $('#cource_id').on('change', function () {
                var idCountry = this.value;
                // $('#hiddenchapter_id').val(idCountry);
                jQuery.ajax({
                    type: 'post',
                    url: '/'+host+'/api/filter',
                    data: { 
                        key: idCountry,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(data) {
                        var obj = JSON.parse(data);
                        if(obj.status==true){
                            jQuery('#allcust').html(obj.data);
                        }else{
                            jQuery('#allcust').html('No data found');
                        }
                    }
                });
            });
        });
    </script>
                    <script>
        $(document).ready(function () {
            var host = 'education';
            $('#chapter_id').on('change', function () {
                var idCountry = this.value;

                //  hiddenchapter_id=$('#hiddenchapter_id').val();
                jQuery.ajax({
                    type: 'post',
                    url: '/'+host+'/api/fliterbychapter',
                    data: { 
                        // course_id:hiddenchapter_id,
                        key: idCountry,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(data) {
                        var obj = JSON.parse(data);
                        if(obj.status==true){
                            jQuery('#allcust').html(obj.data);
                        }else{
                            jQuery('#allcust').html('No data found');
                        }
                    }
                });
            });
        });
    </script>

<script>
        $(document).ready(function () {
            var host = 'education';
            $('#question_type').on('change', function () {
                var idCountry = this.value;
            //    $('#hiddenchapter_id').val(idCountry);
                jQuery.ajax({
                    type: 'post',
                    url: '/'+host+'/api/fliterbytype',
                    data: { 
                        key: idCountry,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(data) {
                        var obj = JSON.parse(data);
                        if(obj.status==true){
                            jQuery('#allcust').html(obj.data);
                        }else{
                            jQuery('#allcust').html('No data found');
                        }
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            var host = 'education';
            $('#status').on('change', function () {
                var idCountry = this.value;
            //    $('#hiddenchapter_id').val(idCountry);
                jQuery.ajax({
                    type: 'post',
                    url: '/'+host+'/api/fliterbystatus',
                    data: { 
                        key: idCountry,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(data) {
                        var obj = JSON.parse(data);
                        if(obj.status==true){
                            jQuery('#allcust').html(obj.data);
                        }else{
                            jQuery('#allcust').html('No data found');
                        }
                    }
                });
            });
        });
    </script>
    
    
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
     <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>











<script>
$(document).ready(function(){

   

 function clear_icon()
 {
  $('#id_icon').html('');
  $('#post_title_icon').html('');
 }

 function fetch_data(page, sort_type, sort_by, query)
 {
  $.ajax({
  //  url: '/'+host+'/actions/addRestaurant',
   url:"/rcontrol/super-admin/customerlist/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
   success:function(data)
   {
    $('tbody').html('');
    $('tbody').html(data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){   
  var query = $('#search').val();
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();
  var page = $('#hidden_page').val();
  fetch_data(page, sort_type, column_name, query);
 });

 $(document).on('click', '.sorting', function(){
  var column_name = $(this).data('column_name');
  var order_type = $(this).data('sorting_type');
  var reverse_order = '';
  if(order_type == 'asc')
  {
   $(this).data('sorting_type', 'desc');
   reverse_order = 'desc';
   clear_icon();
   $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
  }
  if(order_type == 'desc')
  {
   $(this).data('sorting_type', 'asc');
   reverse_order = 'asc';
   clear_icon
   $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
  }
  $('#hidden_column_name').val(column_name);
  $('#hidden_sort_type').val(reverse_order);
  var page = $('#hidden_page').val();
  var query = $('#serach').val();
  fetch_data(page, reverse_order, column_name, query);
 });

 $(document).on('click', '.pagination a', function(event){ alert('hi');
  event.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  $('#hidden_page').val(page);
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();

  var query = $('#serach').val();

  $('li').removeClass('active');
        $(this).parent().addClass('active');
  fetch_data(page, sort_type, column_name, query);
 });

});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#cource_id').on('change', function () {
                    var idCountry = this.value;
                    // $("#chapter").html('');
                    // alert(idCountry);
                    // return;
                    $.ajax({
                        url: "<?php echo e(url('api/fatch')); ?>",
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
        </script><?php /**PATH C:\xampp\htdocs\education\resources\views/question/adminquestion.blade.php ENDPATH**/ ?>