<div class="bravo_footer">
    <div class="mailchimp">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-xs-12  col-md-7 col-lg-6">
                            <div class="media ">
                                <div class="media-left hidden-xs">
                                    <i class="icofont-island-alt"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo e(__("Dapatkan Pembaruan Tempat Indah Setiap harinya")); ?></h4>
                                    <p><?php echo e(__("Silahkan Berikan Saran Tempat Untuk Membantu Kami")); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 col-lg-6">
                            <form action="<?php echo e(route('newsletter.subscribe')); ?>" class="subcribe-form bravo-subscribe-form bravo-form">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control email-input" placeholder="<?php echo e(__('email anda')); ?>">
                                    <button type="submit" class="btn-submit"><?php echo e(__('Subscribe')); ?>

                                        <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                    </button>
                                </div>
                                <div class="form-mess"></div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="copy-right">
        <div class="container context">
            <div class="row">
                <div class="col-md-12">
                    @copyright  mypath 2022 - fastabee`s team
                    <div class="f-visa">
                        Polije Sip
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layouts/parts/login-register-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(Auth::id()): ?>
    <?php echo $__env->make('Media::browser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


<script src="<?php echo e(asset('libs/lazy-load/intersection-observer.js')); ?>"></script>
<script async src="<?php echo e(asset('libs/lazy-load/lazyload.min.js')); ?>"></script>
<script>
    // Set the options to make LazyLoad self-initialize
    window.lazyLoadOptions = {
        elements_selector: ".lazy",
        // ... more custom settings?
    };

    // Listen to the initialization event and get the instance of LazyLoad
    window.addEventListener('LazyLoad::Initialized', function (event) {
        window.lazyLoadInstance = event.detail.instance;
    }, false);


</script>
<script src="<?php echo e(asset('libs/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/vue/vue.js')); ?>"></script>
<script src="<?php echo e(asset('libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<?php if(Auth::id()): ?>
    <script src="<?php echo e(asset('module/media/js/browser.js')); ?>"></script>
<?php endif; ?>
<script src="<?php echo e(asset('libs/carousel-2/owl.carousel.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset("libs/daterange/moment.min.js")); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset("libs/daterange/daterangepicker.min.js")); ?>"></script>
<script src="<?php echo e(asset('js/functions.js')); ?>"></script>
<script src="<?php echo e(asset('js/home.js')); ?>"></script>

<?php echo $__env->yieldContent('footer'); ?>
<?php \App\Helpers\ReCaptchaEngine::scripts() ?><?php /**PATH D:\new laravel\booking1\resources\views/layouts/parts/footer.blade.php ENDPATH**/ ?>