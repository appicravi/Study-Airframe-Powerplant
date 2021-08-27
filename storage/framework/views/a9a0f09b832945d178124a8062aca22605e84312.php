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
                                <div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Cleaner List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
									  <input type="text" class="form-control" id="searchcleaner" placeholder="Search by NAME">
											<input type="hidden" class="form-control" id="crf" value="<?php echo e(csrf_token()); ?>">
                                          <a href="<?php echo e(url('super-admin/add-cleaner')); ?>" class="btn btn-sm btn-secondary">Add Cleaner</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">ID</th>
                                                <th style="color: #000;">Name</th>
                                                <th style="color: #000;">Email</th>
												<th style="color: #000;">Address</th>
                                                <th style="color: #000;">Phone</th>
                                                <th style="color: #000;">Description</th>
                                                <th style="color: #000;">Reviews</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="allcust">
                                        <?php if($cleanerList): ?>
                                                <?php $__currentLoopData = $cleanerList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cleaner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="tr-shadow" id="row_<?php echo e($cleaner['id']); ?>" style="border-top: 1px solid #ebe8f8;">
                                                    <td><?php echo e($cleaner['id']); ?></td>
                                                    <td><?php echo e($cleaner['first_name']."  ".$cleaner['last_name']); ?></td>
                                                    <td><?php echo e($cleaner['email']); ?></td>
                                                    <td><?php echo e($cleaner['address']); ?></td>
                                                    <td><?php echo e($cleaner['mobile']); ?></td>
                                                    <td><?php echo e($cleaner['description']); ?></td>
                                                    <td>
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/view-reviews/<?php echo e($cleaner['id']); ?>">
                                                        (<?php echo e($cleaner['rating']); ?>)
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/edit-cleaner/<?php echo e($cleaner['id']); ?>"><i class="zmdi zmdi-edit"></i></a>
                                                            <a class="item deleteme" data-id="<?php echo e($cleaner['id']); ?>" data-type="cleaner" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                              </tbody>
                                            </table>
                                        </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

                         <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />


   
                        
                       
                    </div>
                </div>
            </div>
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
</script><?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/cleaner/allCleaner.blade.php ENDPATH**/ ?>