<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body">
	<h3>Recent Posts Sent To Buffer
	</h3>

	<div class="row">
		<div class="col-md-12">
			<form method="get" action="<?php echo e(url('/history')); ?>">
				<input type="text" name="name">
				<input type="date" name="date">
				<select>
					<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
				<input type="submit">
			</form>
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text</th> <th>Time</th> </tr> 
				</thead> 
				<tbody>
					<?php $__currentLoopData = $bufferPostings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bufferPosting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($bufferPosting->groupInfo['name']); ?></td>
						<td><?php echo e($bufferPosting->groupInfo['type']); ?></td>
						<td><img src="<?php echo e($bufferPosting->accountInfo['avatar']); ?>" style="max-height: 50px; border-radius: 50%;"></td>
						<td><?php echo e($bufferPosting->post['text']); ?></td>
						<td><?php echo e($bufferPosting->sent_at); ?></td>



					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody> 
			</table>
			<?php echo e($bufferPostings->links()); ?>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>