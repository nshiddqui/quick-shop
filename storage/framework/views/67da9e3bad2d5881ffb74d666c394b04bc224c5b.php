 <?php
     //pickup order from  plugin
     $isactivatePickupPoint = isActivePlugin('pickuppoint-cartlooks');
     $order_pickup_point_active_link_file_links = [];
     $order_pickup_point_active_link_file = base_path() . '/plugins/pickuppoint-cartlooks/views/includes/submenu/order_active_link.json';
     if (file_exists($order_pickup_point_active_link_file)) {
         $order_pickup_point_active_link_file_links = json_decode(file_get_contents($order_pickup_point_active_link_file), true);
     }
     $isactivateMultivendor = isActivePlugin('multivendor-cartlooks');
     //Seller Products from  plugin
     $seller_products_active_link_file_links = [];
     $seller_products_active_link_file = base_path() . '/plugins/multivendor-cartlooks/views/includes/submenu/products_active_link.json';
     if (file_exists($seller_products_active_link_file)) {
         $seller_products_active_link_file_links = json_decode(file_get_contents($seller_products_active_link_file), true);
     }
     //Seller order from  plugin
     $order_seller_active_link_file_links = [];
     $order_seller_active_link_file = base_path() . '/plugins/multivendor-cartlooks/views/includes/submenu/order_active_link.json';
     if (file_exists($order_seller_active_link_file)) {
         $order_seller_active_link_file_links = json_decode(file_get_contents($order_seller_active_link_file), true);
     }
 ?>
 <!--Products Module-->
 <?php if(auth()->user()->can('Manage Add New Product') ||
         auth()->user()->can('Manage Inhouse Products') ||
         auth()->user()->can('Manage Colors') ||
         auth()->user()->can('Manage Brands') ||
         auth()->user()->can('Manage Categories') ||
         auth()->user()->can('Manage Attributes') ||
         auth()->user()->can('Manage Units') ||
         auth()->user()->can('Manage Product Reviews') ||
         auth()->user()->can('Manage Product collections') ||
         auth()->user()->can('Manage Product Tags') ||
         auth()->user()->can('Manage Product Conditions')): ?>
     <li
         class="<?php echo e(Request::routeIs($seller_products_active_link_file_links, ['plugin.cartlookscore.product.reviews.list','plugin.cartlookscore.product.collection.products','plugin.cartlookscore.product.collection.edit','plugin.cartlookscore.product.collection.add.new','plugin.cartlookscore.product.collection.list','plugin.cartlookscore.product.edit','plugin.cartlookscore.product.list','plugin.cartlookscore.product.add.new','plugin.cartlookscore.product.units.edit','plugin.cartlookscore.product.attributes.values.edit','plugin.cartlookscore.product.attributes.values','plugin.cartlookscore.product.attributes.edit','plugin.cartlookscore.product.attributes.add','plugin.cartlookscore.product.attributes.list','plugin.cartlookscore.product.tags.edit','plugin.cartlookscore.product.tags.add.new','plugin.cartlookscore.product.tags.list','plugin.cartlookscore.product.conditions.edit','plugin.cartlookscore.product.conditions.new','plugin.cartlookscore.product.conditions.list','plugin.cartlookscore.product.units.new','plugin.cartlookscore.product.units.list','plugin.cartlookscore.product.colors.edit','plugin.cartlookscore.product.colors.list','plugin.cartlookscore.product.colors.new','plugin.cartlookscore.product.brand.edit','plugin.cartlookscore.product.brand.new','plugin.cartlookscore.product.category.list','plugin.cartlookscore.product.category.new','plugin.cartlookscore.product.category.edit','plugin.cartlookscore.product.brand.list'])? 'active sub-menu-opened': ''); ?>">
         <a href="#">
             <i class="icofont-bucket1"></i>
             <span class="link-title"> <?php echo e(translate('Products')); ?></span>
         </a>
         <ul class="nav sub-menu">
             <?php if(auth()->user()->can('Manage Add New Product')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.add.new']) ? 'active ' : ''); ?>">
                     <a href="<?php echo e(route('plugin.cartlookscore.product.add.new')); ?>"><?php echo e(translate('Add New Product')); ?></a>
                 </li>
             <?php endif; ?>
             <?php if(auth()->user()->can('Manage Inhouse Products')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.list']) ? 'active ' : ''); ?>">
                     <a href="<?php echo e(route('plugin.cartlookscore.product.list')); ?>">
                         <?php if($isactivateMultivendor): ?>
                             <?php echo e(translate('Inhouse Products')); ?>

                         <?php else: ?>
                             <?php echo e(translate('All Products')); ?>

                         <?php endif; ?>
                     </a>
                 </li>
                 <?php if($isactivateMultivendor): ?>
                     <?php if ($__env->exists('plugin/multivendor-cartlooks::includes.submenu.products')) echo $__env->make('plugin/multivendor-cartlooks::includes.submenu.products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <?php endif; ?>
             <?php endif; ?>
             <?php if(auth()->user()->can('Manage Colors')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.colors.edit', 'plugin.cartlookscore.product.colors.list', 'plugin.cartlookscore.product.colors.new']) ? 'active ' : ''); ?>">
                     <a href="<?php echo e(route('plugin.cartlookscore.product.colors.list')); ?>"><?php echo e(translate('Colors')); ?></a>
                 </li>
             <?php endif; ?>
             <?php if(auth()->user()->can('Manage Brands')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.brand.edit', 'plugin.cartlookscore.product.brand.list', 'plugin.cartlookscore.product.brand.new']) ? 'active ' : ''); ?>">
                     <a href="<?php echo e(route('plugin.cartlookscore.product.brand.list')); ?>"><?php echo e(translate('Brands')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Categories')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.category.list', 'plugin.cartlookscore.product.category.new', 'plugin.cartlookscore.product.category.edit']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.product.category.list')); ?>"><?php echo e(translate('Categories')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Attributes')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.attributes.values.edit', 'plugin.cartlookscore.product.attributes.values', 'plugin.cartlookscore.product.attributes.edit', 'plugin.cartlookscore.product.attributes.add', 'plugin.cartlookscore.product.attributes.list']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.product.attributes.list')); ?>"><?php echo e(translate('Attributes')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Units')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.units.edit', 'plugin.cartlookscore.product.units.new', 'plugin.cartlookscore.product.units.list']) ? 'active ' : ''); ?>">
                     <a href="<?php echo e(route('plugin.cartlookscore.product.units.list')); ?>"><?php echo e(translate('Units')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Product Reviews')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.reviews.list']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.product.reviews.list')); ?>"><?php echo e(translate('Product Reviews')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Product collections')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.collection.list']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.product.collection.list')); ?>"><?php echo e(translate('Product collections')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Product Tags')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.tags.edit', 'plugin.cartlookscore.product.tags.add.new', 'plugin.cartlookscore.product.tags.list']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.product.tags.list')); ?>"><?php echo e(translate('Product Tags')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Product conditions')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.product.conditions.edit', 'plugin.cartlookscore.product.conditions.new', 'plugin.cartlookscore.product.conditions.list']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.product.conditions.list')); ?>"><?php echo e(translate('Product conditions')); ?></a>
                 </li>
             <?php endif; ?>
         </ul>
     </li>
 <?php endif; ?>

 <!--End Products Module-->
 <!--Orders Module-->
 <?php if(auth()->user()->can('Manage Inhouse Orders') ||
         auth()->user()->can('Manage Pickup Point Order')): ?>
     <li
         class="<?php echo e(Request::routeIs($order_pickup_point_active_link_file_links, $order_seller_active_link_file_links, ['plugin.cartlookscore.orders.details', 'plugin.cartlookscore.orders.inhouse']) ? 'active sub-menu-opened' : ''); ?>">
         <a href="#">
             <i class="icofont-cart"></i>
             <span class="link-title"><?php echo e(translate('Orders')); ?></span>
         </a>
         <ul class="nav sub-menu">
             <?php if(auth()->user()->can('Manage Inhouse Orders')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.orders.inhouse']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.orders.inhouse')); ?>"><?php echo e(translate('Inhouse Orders')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if($isactivateMultivendor): ?>
                 <?php if ($__env->exists('plugin/multivendor-cartlooks::includes.submenu.order')) echo $__env->make('plugin/multivendor-cartlooks::includes.submenu.order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <?php endif; ?>
             <?php if($isactivatePickupPoint): ?>
                 <?php if ($__env->exists('plugin/pickuppoint-cartlooks::includes.submenu.order')) echo $__env->make('plugin/pickuppoint-cartlooks::includes.submenu.order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <?php endif; ?>

         </ul>
     </li>
 <?php endif; ?>

 <!--End Orders Module-->

 <?php if(auth()->user()->can('Manage Customers')): ?>
     <!--Customer Module-->
     <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.customers.list']) ? 'active' : ''); ?>">
         <a href="<?php echo e(route('plugin.cartlookscore.customers.list')); ?>">
             <i class="icofont-users-alt-4"></i>
             <span class="link-title"><?php echo e(translate('Customers')); ?></span>
         </a>

     </li>
     <!--End Customer module-->
 <?php endif; ?>

 <!--Shippings Module-->
 <?php
     //carrier  plugin
     $isactivateCarrier = isActivePlugin('carrier-cartlooks');
     $shipping_carrier_active_link_file_links = [];
     $shipping_carrier_active_link_file = base_path() . '/plugins/carrier-cartlooks/views/includes/submenu/shipping_active_link.json';
     if (file_exists($shipping_carrier_active_link_file)) {
         $shipping_carrier_active_link_file_links = json_decode(file_get_contents($shipping_carrier_active_link_file), true);
     }
     //pickup  plugin
     $isactivatePickupPoint = isActivePlugin('pickuppoint-cartlooks');
     $shipping_pickup_point_active_link_file_links = [];
     $shipping_pickup_point_active_link_file = base_path() . '/plugins/pickuppoint-cartlooks/views/includes/submenu/shipping_active_link.json';
     if (file_exists($shipping_pickup_point_active_link_file)) {
         $shipping_pickup_point_active_link_file_links = json_decode(file_get_contents($shipping_pickup_point_active_link_file), true);
     }
     //delivery boy plugun
     $isactivateDeliveryBoy = isActivePlugin('deliveryboy');
     $shipping_delivery_boy_active_link_file_links = [];
     $shipping_delivery_boy_active_link_file = base_path() . '/plugins/deliveryboy/views/includes/submenu/shipping_active_link.json';
     if (file_exists($shipping_delivery_boy_active_link_file)) {
         $shipping_delivery_boy_active_link_file_links = json_decode(file_get_contents($shipping_delivery_boy_active_link_file), true);
     }
 ?>

 <?php if(auth()->user()->can('Manage Shipping & Delivery') ||
         auth()->user()->can('Manage Pickup Points') ||
         auth()->user()->can('Manage Carriers') ||
         auth()->user()->can('Manage Locations')): ?>

     <li
         class="<?php echo e(Request::routeIs($shipping_carrier_active_link_file_links, $shipping_delivery_boy_active_link_file_links, $shipping_pickup_point_active_link_file_links, ['plugin.cartlookscore.shipping.profile.manage', 'plugin.cartlookscore.shipping.profile.form', 'plugin.cartlookscore.shipping.configuration', 'plugin.cartlookscore.shipping.locations.cities.edit', 'plugin.cartlookscore.shipping.locations.cities.add.new', 'plugin.cartlookscore.shipping.locations.cities.list', 'plugin.cartlookscore.shipping.locations.states.edit', 'plugin.cartlookscore.shipping.locations.states.new.add', 'plugin.cartlookscore.shipping.locations.states.list', 'plugin.cartlookscore.shipping.locations.country.edit', 'plugin.cartlookscore.shipping.locations.country.new', 'plugin.cartlookscore.shipping.locations.country.list']) ? 'active sub-menu-opened' : ''); ?>">
         <a href="#">
             <i class="icofont-ship"></i>
             <span class="link-title"><?php echo e(translate('Shippings')); ?></span>
         </a>
         <ul class="nav sub-menu">
             <?php if(auth()->user()->can('Manage Shipping & Delivery')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.shipping.configuration']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.shipping.configuration')); ?>"><?php echo e(translate('Shipping & Delivery')); ?></a>
                 </li>
             <?php endif; ?>


             <?php if($isactivatePickupPoint): ?>
                 <?php if(auth()->user()->can('Manage Pickup Points')): ?>
                     <?php if ($__env->exists('plugin/pickuppoint-cartlooks::includes.submenu.shipping')) echo $__env->make('plugin/pickuppoint-cartlooks::includes.submenu.shipping', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <?php endif; ?>
             <?php endif; ?>

             <?php if($isactivateCarrier): ?>
                 <?php if(auth()->user()->can('Manage Carriers')): ?>
                     <?php if ($__env->exists('plugin/carrier-cartlooks::includes.submenu.shipping')) echo $__env->make('plugin/carrier-cartlooks::includes.submenu.shipping', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <?php endif; ?>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Locations')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.shipping.locations.cities.edit', 'plugin.cartlookscore.shipping.locations.cities.add.new', 'plugin.cartlookscore.shipping.locations.cities.list', 'plugin.cartlookscore.shipping.locations.states.edit', 'plugin.cartlookscore.shipping.locations.states.new.add', 'plugin.cartlookscore.shipping.locations.states.list', 'plugin.cartlookscore.shipping.locations.country.edit', 'plugin.cartlookscore.shipping.locations.country.new', 'plugin.cartlookscore.shipping.locations.country.list']) ? 'sub-menu-opened' : ''); ?>">
                     <a href="<?php echo e(route('core.languages')); ?>"><?php echo e(translate('Locations')); ?></a>
                     <ul class="nav sub-menu">
                         <li
                             class="<?php echo e(Request::routeIs(['plugin.cartlookscore.shipping.locations.country.edit', 'plugin.cartlookscore.shipping.locations.country.new', 'plugin.cartlookscore.shipping.locations.country.list']) ? 'active ' : ''); ?>">
                             <a
                                 href="<?php echo e(route('plugin.cartlookscore.shipping.locations.country.list')); ?>"><?php echo e(translate('Countries')); ?></a>
                         </li>
                         <li
                             class="<?php echo e(Request::routeIs(['plugin.cartlookscore.shipping.locations.states.edit', 'plugin.cartlookscore.shipping.locations.states.new.add', 'plugin.cartlookscore.shipping.locations.states.list']) ? 'active ' : ''); ?>">
                             <a
                                 href="<?php echo e(route('plugin.cartlookscore.shipping.locations.states.list')); ?>"><?php echo e(translate('States')); ?></a>
                         </li>
                         <li
                             class="<?php echo e(Request::routeIs(['plugin.cartlookscore.shipping.locations.cities.edit', 'plugin.cartlookscore.shipping.locations.cities.add.new', 'plugin.cartlookscore.shipping.locations.cities.list']) ? 'active ' : ''); ?>">
                             <a
                                 href="<?php echo e(route('plugin.cartlookscore.shipping.locations.cities.list')); ?>"><?php echo e(translate('Cities')); ?></a>
                         </li>
                     </ul>
                 </li>
             <?php endif; ?>
         </ul>
     </li>
 <?php endif; ?>

 <!--End Shippings Module-->



 <!--Payments Module-->
 <?php if(auth()->user()->can('Manage Payment Methods') ||
         auth()->user()->can('Manage Transaction history')): ?>
     <li
         class="<?php echo e(Request::routeIs(['plugin.cartlookscore.payments.methods', 'plugin.cartlookscore.payments.transactions.history']) ? 'active sub-menu-opened' : ''); ?>">
         <a href="#">
             <i class="icofont-money"></i>
             <span class="link-title"><?php echo e(translate('Payments')); ?></span>
         </a>
         <ul class="nav sub-menu">
             <?php if(auth()->user()->can('Manage Payment Methods')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.payments.methods']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.payments.methods')); ?>"><?php echo e(translate('Payment Methods')); ?></a>
                 </li>
             <?php endif; ?>
             <?php if(auth()->user()->can('Manage Transaction history')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.payments.transactions.history']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.payments.transactions.history')); ?>"><?php echo e(translate('Transaction history')); ?></a>
                 </li>
             <?php endif; ?>
         </ul>
     </li>
 <?php endif; ?>
 <!--End Payments Module-->


 <!--Marketings Module-->
 <?php
     //flashdeal plugin
     $isactivateFlashdeal = isActivePlugin('flashdeal-cartlooks');
     $marketing_active_link_file_links = [];
     $marketing_active_link_file = base_path() . '/plugins/flashdeal-cartlooks/views/includes/submenu/marketing_active_link.json';
     if (file_exists($marketing_active_link_file)) {
         $marketing_active_link_file_links = json_decode(file_get_contents($marketing_active_link_file), true);
     }
     //coupon plugin
     $isactivateCoupon = isActivePlugin('coupon-cartlooks');
     $marketing_coupon_active_link_file_links = [];
     $marketing_coupon_active_link_file = base_path() . '/plugins/coupon-cartlooks/views/includes/submenu/marketing_active_link.json';
     if (file_exists($marketing_coupon_active_link_file)) {
         $marketing_coupon_active_link_file_links = json_decode(file_get_contents($marketing_coupon_active_link_file), true);
     }
 ?>
 <?php if(auth()->user()->can('Manage Flash Deals') ||
         auth()->user()->can('Manage Coupons') ||
         auth()->user()->can('Manage Custom notification')): ?>
     <li
         class="<?php echo e(Request::routeIs($marketing_coupon_active_link_file_links, $marketing_active_link_file_links, ['plugin.cartlookscore.marketing.custom.notification', 'plugin.cartlookscore.marketing.custom.notification.create.new']) ? 'active sub-menu-opened' : ''); ?>">
         <a href="#">
             <i class="icofont-megaphone"></i>
             <span class="link-title"><?php echo e(translate('Marketing')); ?></span>
         </a>
         <ul class="nav sub-menu">
             <?php if($isactivateFlashdeal): ?>
                 <?php if ($__env->exists('plugin/flashdeal-cartlooks::includes.submenu.marketing')) echo $__env->make('plugin/flashdeal-cartlooks::includes.submenu.marketing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <?php endif; ?>
             <?php if($isactivateCoupon): ?>
                 <?php if ($__env->exists('plugin/coupon-cartlooks::includes.submenu.marketing')) echo $__env->make('plugin/coupon-cartlooks::includes.submenu.marketing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <?php endif; ?>
             <?php if(auth()->user()->can('Manage Custom notification')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.marketing.custom.notification', 'plugin.cartlookscore.marketing.custom.notification.create.new']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.marketing.custom.notification')); ?>"><?php echo e(translate('Custom Notification')); ?></a>
                 </li>
             <?php endif; ?>
         </ul>
     </li>
 <?php endif; ?>
 <!--End Marketings Module-->
 <!--Report Module-->
 <?php if(auth()->user()->can('Manage Product Reports') ||
         auth()->user()->can('Manage Keyword Search Reports') ||
         auth()->user()->can('Manage Wishlist Reports')): ?>
     <li
         class="<?php echo e(Request::routeIs(['plugin.cartlookscore.reports.search.keyword', 'plugin.cartlookscore.reports.products.wishlist', 'plugin.cartlookscore.reports.products']) ? 'active sub-menu-opened' : ''); ?>">
         <a href="#">
             <i class="icofont-list"></i>
             <span class="link-title"><?php echo e(translate('Reports')); ?></span>
         </a>
         <ul class="nav sub-menu">
             <?php if(auth()->user()->can('Manage Product Reports')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.reports.products']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.reports.products')); ?>"><?php echo e(translate('Product Reports')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Keyword Search Reports')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.reports.search.keyword']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.reports.search.keyword')); ?>"><?php echo e(translate('Keyword Search Reports')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Wishlist Reports')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.reports.products.wishlist']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.reports.products.wishlist')); ?>"><?php echo e(translate('Wishlist Reports')); ?></a>
                 </li>
             <?php endif; ?>
         </ul>
     </li>
 <?php endif; ?>
 <!--End Report Module-->

 <!--Ecommerce Settings Module-->
 <?php if(auth()->user()->can('Manage Taxes') ||
         auth()->user()->can('Manage Settings') ||
         auth()->user()->can('Manage Currencies') ||
         auth()->user()->can('Manage Product Share Options')): ?>
     <li
         class="<?php echo e(Request::routeIs(['plugin.cartlookscore.ecommerce.edit.currency', 'plugin.cartlookscore.ecommerce.add.currency', 'plugin.cartlookscore.ecommerce.all.currencies', 'plugin.cartlookscore.ecommerce.configuration', 'plugin.cartlookscore.ecommerce.settings.taxes.manage.rates', 'plugin.cartlookscore.products.share.options', 'plugin.cartlookscore.ecommerce.settings.taxes.list']) ? 'active sub-menu-opened' : ''); ?>">
         <a href="#">
             <i class="icofont-interface"></i>
             <span class="link-title"><?php echo e(translate('Ecommerce Settings')); ?></span>
         </a>
         <ul class="nav sub-menu">
             <?php if(auth()->user()->can('Manage Settings')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.ecommerce.configuration']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.ecommerce.configuration')); ?>"><?php echo e(translate('Settings')); ?></a>
                 </li>
             <?php endif; ?>
             <?php if(auth()->user()->can('Manage Currencies')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.ecommerce.all.currencies']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.ecommerce.all.currencies')); ?>"><?php echo e(translate('Currencies')); ?></a>
                 </li>
             <?php endif; ?>

             <?php if(auth()->user()->can('Manage Product Share Options')): ?>
                 <li class="<?php echo e(Request::routeIs(['plugin.cartlookscore.products.share.options']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.products.share.options')); ?>"><?php echo e(translate('Product Share Options')); ?></a>
                 </li>
             <?php endif; ?>
             <?php if(auth()->user()->can('Manage Taxes')): ?>
                 <li
                     class="<?php echo e(Request::routeIs(['plugin.cartlookscore.ecommerce.settings.taxes.manage.rates', 'plugin.cartlookscore.ecommerce.settings.taxes.list']) ? 'active ' : ''); ?>">
                     <a
                         href="<?php echo e(route('plugin.cartlookscore.ecommerce.settings.taxes.list')); ?>"><?php echo e(translate('Tax')); ?></a>
                 </li>
             <?php endif; ?>
         </ul>
     </li>
 <?php endif; ?>
 <!--End Ecommerce Settings Module-->
<?php /**PATH C:\Development\quick-shop\plugins/cartlookscore/views/includes/navbar.blade.php ENDPATH**/ ?>