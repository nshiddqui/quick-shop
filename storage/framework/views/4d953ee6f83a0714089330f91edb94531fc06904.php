<?php
    $isactivateFlashdeal = isActivePlugin('flashdeal-cartlooks');
?>
<?php if($isactivateFlashdeal): ?>
    <?php if(auth()->user()->can('Manage Flash Deals')): ?>
        <li class="<?php echo e(Request::routeIs(['plugin.flashdeal.list']) ? 'active ' : ''); ?>">
            <a href="<?php echo e(route('plugin.flashdeal.list')); ?>"><?php echo e(translate('Flash Deals')); ?><span
                    class="badge badge-danger ml-2"><?php echo e(translate('Addon')); ?></span></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\Development\quick-shop\plugins/flashdeal-cartlooks/views/includes/submenu/marketing.blade.php ENDPATH**/ ?>