<div class="list-item">
    <div class="row">
        <?php if($rows->total() > 0): ?>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-xl-4 mb-3 mb-md-4 pb-1">
                    <?php echo $__env->make('Space::frontend.layouts.search.loop-grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="col-lg-12">
                <?php echo e(__("Space not found")); ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<?php if($rows->total() > 0): ?>
    <div class="text-center text-md-left font-size-14 mb-3 text-lh-1"><?php echo e(__("Showing :from - :to of :total Spaces",["from"=>$rows->firstItem(),"to"=>$rows->lastItem(),"total"=>$rows->total()])); ?></div>
<?php endif; ?>
<?php echo e($rows->appends(request()->query())->links()); ?>

<?php /**PATH D:\laragon\www\sondoongtour\themes/Mytravel/Space/Views/frontend/ajax/search-result.blade.php ENDPATH**/ ?>