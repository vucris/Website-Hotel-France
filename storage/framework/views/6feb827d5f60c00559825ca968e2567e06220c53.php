<div class="row">
    <div class="col-lg-3 col-md-12">
        <?php echo $__env->make('Event::frontend.layouts.search.filter-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-lg-9 col-md-12">
        <div class="bravo-list-item">
            <div class="d-flex justify-content-between align-items-center mb-4 topbar-search">
                <h3 class="font-size-21 font-weight-bold mb-0 text-lh-1result-count">
                    <?php if($rows->total() > 1): ?>
                        <?php echo e(__(":count events found",['count'=>$rows->total()])); ?>

                    <?php else: ?>
                        <?php echo e(__(":count event found",['count'=>$rows->total()])); ?>

                    <?php endif; ?>
                </h3>
                <div class="control bc-form-order">
                    <?php echo $__env->make('Layout::global.search.orderby',['routeName'=>'event.search'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="ajax-search-result">
                <?php echo $__env->make('Event::frontend.ajax.search-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\laragon\www\sondoongtour\themes/Mytravel/Event/Views/frontend/layouts/search/list-item.blade.php ENDPATH**/ ?>