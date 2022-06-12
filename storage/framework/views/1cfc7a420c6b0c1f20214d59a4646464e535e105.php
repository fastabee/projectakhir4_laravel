<?php $__env->startSection('head'); ?>
	<link href="<?php echo e(asset('css/contact.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="bravo_content-wrapper">
	<div class="bravo_content">
		<div class="container">
			<div class="row section">
				<div class="col-md-5">
					<div role="form" class="form_wrapper" lang="en-US" dir="ltr">
						<form method="post" action="<?php echo e(url('/contact/store')); ?>"  class="bookcore-form">
							<?php echo e(csrf_field()); ?>

							<div style="display: none;">
								<input type="hidden" name="g-recaptcha-response" value="">
							</div>
							<div class="contact-form">
								<div class="contact-header">
									<h3><?php echo e(__('kami sangat senanag menerima masukan dari anda')); ?> </h3>
									<p><?php echo e(__('Berikan Kami saran dan kami akan memberi respon baik sebisa mungkin')); ?> </p>

                                </div>
								<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

								<div class="contact-form">
									<div class="form-group">
										<input type="text" value="" placeholder=" <?php echo e(__('Name')); ?> " name="name" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" value="" placeholder="<?php echo e(__('Email')); ?>" name="email" class="form-control">
									</div>

									<div class="form-group">
										 <textarea name="message" cols="40" rows="10" class="form-control textarea" placeholder="<?php echo e(__('Message')); ?>"></textarea>
									</div>
									<div class="form-group">
										<?php echo e(recaptcha_field('contact')); ?>

									</div>
									<p><input type="submit" value="<?php echo e(__('SEND MESSAGE')); ?>" class="form-control submit btn btn-primary"></p></div></div>
							</form>
					</div>
				</div>
				<div class="offset-md-2 col-md-5">
					<div class="contact-info">
						<div class="info-bg">
							<img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/bg-contact-1.jpg" class="img-responsive" alt="Background Contact Info">    </div>
						<div class="info-content">
							<h3><?php echo e(__('My Path')); ?></h3>
							<div class="sub">
								<p></p>
								<p><?php echo e(__('Telp. 081359594530')); ?></p>
								<p><?php echo e(__('Email. fastabee@polije.com')); ?></p>
								<p class="address"><?php echo e(__('Jl. Mastrip Kerajan Timur, Sumbersari,Jember ')); ?> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\new laravel\booking1\modules/Contact/Views/index.blade.php ENDPATH**/ ?>