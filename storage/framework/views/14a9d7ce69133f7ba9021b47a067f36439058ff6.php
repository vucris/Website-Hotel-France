<?php
    $translation = $row->translate();
?>
<div class="item-loop relative item-loop-wrap <?php echo e($wrap_class ?? ''); ?>">
    <div class="thumb-image ">
        <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl($include_param ?? true)); ?>">
            <?php if($row->image_url): ?>
                <?php if(!empty($disable_lazyload)): ?>
                    <img src="<?php echo e($row->image_url); ?>" class="img-responsive" alt="">
                <?php else: ?>
                    <?php echo get_image_tag($row->image_id,'medium',['class'=>'img-responsive','alt'=>$row->title]); ?>

                <?php endif; ?>
            <?php endif; ?>
        </a>
        <div class="service-wishlist <?php echo e($row->isWishList()); ?>" data-id="<?php echo e($row->id); ?>" data-type="<?php echo e($row->type); ?>">
            <i class="fa fa-heart-o"></i>
        </div>
        <?php if($row->discount_percent): ?>
            <div class="sale_info"><?php echo e($row->discount_percent); ?></div>
        <?php endif; ?>
        <div class="location d-none position-absolute bottom-0 left-0 right-0">
            <div class="px-4 pb-3">
                <?php if(!empty($row->location->name)): ?>
                    <?php $location =  $row->location->translate(); ?>
                    <a href="<?php echo e($row->location->getDetailUrl() ?? ''); ?>" class="d-block">
                        <div class="d-flex align-items-center font-size-14 text-white">
                            <i class="icon flaticon-pin-1 mr-2 font-size-20"></i> <?php echo e($location->name ?? ''); ?>

                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if($row->is_featured == "1"): ?>
        <div class="position-absolute top-0 left-0 pt-3 pl-3 featured">
            <span class="badge font-weight-normal badge-pill px-4 mr-3 py-2"><?php echo e(__("Featured")); ?></span>
        </div>
    <?php endif; ?>
    <div class="location">
        <?php if(!empty($row->location->name)): ?>
            <?php $location =  $row->location->translate() ?>
            <?php echo e($location->name ?? ''); ?>

        <?php endif; ?>
    </div>
    <div class="item-title">
        <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl($include_param ?? true)); ?>">
            <?php if($row->is_instant): ?>
                <i class="fa fa-bolt d-none"></i>
            <?php endif; ?>
            <?php echo clean($translation->title); ?>

        </a>
    </div>
    <?php if(setting_item('space_enable_review')): ?>
        <?php
        $reviewData = $row->getScoreReview();
        $score_total = $reviewData['score_total'];
        ?>
        <div class="service-review">
        <span class="rate">
            <?php if($reviewData['total_review'] > 0): ?> <?php echo e($score_total); ?>/5 <?php endif; ?> <span class="rate-text"><?php echo e($reviewData['review_text']); ?></span>
        </span>
            <span class="review">
         <?php if($reviewData['total_review'] > 1): ?>
                    <?php echo e(__(":number Reviews",["number"=>$reviewData['total_review'] ])); ?>

                <?php else: ?>
                    <?php echo e(__(":number Review",["number"=>$reviewData['total_review'] ])); ?>

                <?php endif; ?>
        </span>
        </div>
    <?php endif; ?>
    <?php if(!empty($time = $row->start_time)): ?>
        <div class="start-time">
            <?php echo e(__("Start Time: :time",['time'=>$time])); ?>

        </div>
    <?php endif; ?>
    <div class="info">
        <div class="duration">
            <?php echo e(duration_format($row->duration)); ?>

        </div>
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text"><?php echo e(__("from")); ?></span>
            </div>
            <div class="price">
                <span class="onsale"><?php echo e($row->display_sale_price); ?></span>
                <span class="text-price"><?php echo e($row->display_price); ?></span>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\laragon\www\sondoongtour\themes/Mytravel/Event/Views/frontend/layouts/search/loop-grid.blade.php ENDPATH**/ ?>