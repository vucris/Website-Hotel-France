<div class="row">
    <div class="col-lg-4 col-xl-3 col-md-12">
        <?php echo $__env->make('Tour::frontend.layouts.search.filter-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-lg-8 col-xl-9 col-md-12">
        <div class="bravo-list-item">
            <div class="d-flex justify-content-between align-items-center mb-4 topbar-search">
                <h3 class="font-size-21 font-weight-bold mb-0 text-lh-1 result-count">
                    <?php if($rows->total() > 1): ?>
                        <?php echo e(__(":count tours found",['count'=>$rows->total()])); ?>

                    <?php else: ?>
                        <?php echo e(__(":count tour found",['count'=>$rows->total()])); ?>

                    <?php endif; ?>
                </h3>
                <div class="control">
                    <?php echo $__env->make('Tour::frontend.layouts.search.orderby', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="ajax-search-result">
                <?php echo $__env->make('Tour::frontend.ajax.search-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\laragon\www\sondoongtour\themes/Mytravel/Tour/Views/frontend/layouts/search/list-item.blade.php ENDPATH**/ ?>