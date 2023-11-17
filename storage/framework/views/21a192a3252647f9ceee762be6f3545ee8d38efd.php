<?php if(auth()->user()->can('Manage Seller Products')): ?>
    <li class="<?php echo e(Request::routeIs(['plugin.multivendor.admin.seller.products.list']) ? 'active ' : ''); ?>">
        <a
            href="<?php echo e(route('plugin.multivendor.admin.seller.products.list')); ?>"><?php echo e(translate('Seller Products')); ?></a><span
            class="badge badge-danger ml-2"><?php echo e(translate('Addon')); ?></span>
    </li>
<?php endif; ?>
<?php /**PATH C:\Development\quick-shop\plugins/multivendor-cartlooks/views/includes/submenu/products.blade.php ENDPATH**/ ?>