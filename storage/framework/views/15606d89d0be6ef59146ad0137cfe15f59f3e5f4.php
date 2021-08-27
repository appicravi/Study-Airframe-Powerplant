 
<?php if($customertList): ?>
<?php $i = 1;?>
	<?php $__currentLoopData = $customertList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $customert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr class="tr-shadow" id="row_<?php echo e($customert->id); ?>" style="border-top: 1px solid #ebe8f8;">
        <td><?php echo $i;?></td>
        <td><?php echo e($customert->name); ?></td>
		<td><?php echo e($customert->dial_code); ?></td>
		<td><?php echo e($customert->phone); ?></td>
		<td><?php echo e($customert->email); ?></td>
		<td><?php echo e($customert->created_at); ?></td>
        <td>
            <div class="table-data-feature">
				<a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/edit-customer/<?php echo e($customert->id); ?>"><i class="zmdi zmdi-edit"></i></a>
				<a class="item deleteme" data-id="<?php echo e($customert->id); ?>" data-type="customer" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
            </div>
        </td>
    </tr>
<?php $i++;?>

   
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>


<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/dalohotel/resources/views/customer/pagination_data.blade.php ENDPATH**/ ?>