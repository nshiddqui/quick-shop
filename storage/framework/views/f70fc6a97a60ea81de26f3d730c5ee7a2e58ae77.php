<?php if(isActivePlugin('pickuppoint-cartlooks')): ?>
    <li
        class="<?php echo e(Request::routeIs(['plugin.pickuppoint.edit.pickup.point', 'plugin.pickuppoint.pickup.points']) ? 'active ' : ''); ?>">
        <a href="<?php echo e(route('plugin.pickuppoint.pickup.points')); ?>"><?php echo e(translate('Pickup Points')); ?><span
                class="badge badge-danger ml-2"><?php echo e(translate('Addon')); ?></span></a>
    </li>
<?php endif; ?>
<?php /**PATH C:\Development\quick-shop\plugins/pickuppoint-cartlooks/views/includes/submenu/shipping.blade.php ENDPATH**/ ?>