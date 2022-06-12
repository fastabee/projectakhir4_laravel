<div class="user-form-settings">
    <div class="breadcrumb-page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo e(url("/user/dashboard")); ?>">
                    <?php echo e(__("Home")); ?>

                </a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>&nbsp; <?php echo e(__("Dashboard")); ?> </li>
        </ul>
        <div class="bravo-more-menu-user">
            <i class="icofont-settings"></i>
        </div>
    </div>
    <h2 class="title-bar no-border-bottom">
        <?php echo e(__("Dashboard")); ?>

    </h2>
    <?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="bravo-user-dashboard">
        <div class="row dashboard-price-info row-eq-height">
            <?php if(!empty($cards_report)): ?>
                <?php $__currentLoopData = $cards_report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="dashboard-item">
                            <div class="wrap-box">
                                <div class="title">
                                    <?php echo e($item['title']); ?>

                                </div>
                                <div class="details">
                                    <div class="number">
                                        <?php echo e($item['amount']); ?>

                                    </div>
                                </div>
                                <div class="desc"> <?php echo e($item['desc']); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="bravo-user-chart">
        <div class="chart-title">
            <?php echo e(__("Earning statistics")); ?>

            <div class="action-control">
                <div id="reportrange">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
            </div>
        </div>
        <canvas class="bravo-user-render-chart"></canvas>
        <script>
            var earning_chart_data = <?php echo json_encode($earning_chart_data); ?>;
        </script>
    </div>
</div><?php /**PATH D:\new laravel\booking\modules/User/Views/frontend/layouts/dashboard/index.blade.php ENDPATH**/ ?>