<?php $__env->startSection('title'); ?>
    <?php echo e(translate('Users')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_css'); ?>
    <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
    <link rel="stylesheet" href="<?php echo e(asset('/public/web-assets/backend/plugins/data-table/css/jquery.dataTables.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('/public/web-assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('/public/web-assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">

    <link rel="stylesheet"
        href="<?php echo e(asset('/public/web-assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
    <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>
    <div class="row">
        <!-- User List-->
        <div class="col-md-12">
            <div class="card mb-30">
                <div
                    class="align-items-center bg-white border-bottom2 card-header d-flex gap-10 justify-content-between py-3">
                    <h4><?php echo e(translate('Users')); ?></h4>
                    <?php if(auth()->user()->can('Create User')): ?>
                        <div class="d-flex flex-wrap">
                            <a href="<?php echo e(route('core.add.user')); ?>" class="btn long"><?php echo e(translate('Add New User')); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="hoverable text-nowrap border-top2 " id="user_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(translate('Image')); ?> </th>
                                    <th><?php echo e(translate('UID')); ?> </th>
                                    <th><?php echo e(translate('Name')); ?> </th>
                                    <th><?php echo e(translate('Email')); ?></th>
                                    <th><?php echo e(translate('Roles')); ?></th>
                                    <?php if(auth()->user()->can('Edit User')): ?>
                                        <th><?php echo e(translate('Status')); ?></th>
                                    <?php endif; ?>
                                    <?php if(auth()->user()->can('Edit User') ||
                                            auth()->user()->can('Delete User')): ?>
                                        <th><?php echo e(translate('Actions')); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="img img-45">
                                                    <img src="<?php echo e(asset(getFilePath($user->image, true))); ?>"
                                                        alt="<?php echo e($user->name); ?>" class="rounded-circle">
                                                </div>
                                            </div>
                                        </td>
                                        <td><?php echo e($user->uid); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td>
                                            <?php
                                                $roles = $user->getRoleNames();
                                            ?>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roleKey => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($role); ?>

                                                <?php if($roleKey + 1 != $roles->count()): ?>
                                                    ,
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <?php if(auth()->user()->can('Edit User')): ?>
                                            <td>
                                                <?php if($user->id != getSupperAdminId()): ?>
                                                    <label class="switch glow primary medium">
                                                        <input type="checkbox" class="user_status"
                                                            id="user_status_<?php echo e($user->id); ?>" name="status"
                                                            <?php if($user->status == config('settings.general_status.active')): echo 'checked'; endif; ?>
                                                            onchange="updateUserStatus('<?php echo e($user->id); ?>')">
                                                        <span class="control"></span>
                                                    </label>
                                                <?php endif; ?>
                                                <?php if($user->id == getSupperAdminId()): ?>
                                                    <?php if($user->status == config('settings.general_status.active')): ?>
                                                        <p class="badge badge-success"
                                                            title="Super admin status can not be change">
                                                            <?php echo e(translate('Active')); ?></p>
                                                    <?php else: ?>
                                                        <p class="badge badge-danger"
                                                            title="Super admin status can not be change">
                                                            <?php echo e(translate('Inactive')); ?></p>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
                                        <?php if(auth()->user()->can('Edit User') ||
                                                auth()->user()->can('Delete User')): ?>
                                            <td>
                                                <div class="dropdown-button">
                                                    <a href="#" class="d-flex align-items-center"
                                                        data-toggle="dropdown">
                                                        <div class="menu-icon style--two mr-0">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <?php if($user->id != getSupperAdminId()): ?>
                                                            <?php if(auth()->user()->can('Edit User')): ?>
                                                                <a href="<?php echo e(route('core.edit.user', $user->id)); ?>">Edit</a>
                                                            <?php endif; ?>
                                                            <?php if(auth()->user()->can('Delete User')): ?>
                                                                <a href="#"
                                                                    onclick="deleteConfirmation('<?php echo e($user->id); ?>')">Delete</a>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <p class=" alert alert-danger">Has no action for super admin</p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- User List-->

        <!--Delete Modal-->
        <div id="delete-modal" class="delete-modal modal fade show" aria-modal="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title h6"><?php echo e(translate('Delete Confirmation')); ?></h4>
                    </div>
                    <div class="modal-body text-center">
                        <p class="mt-1"><?php echo e(translate('Are you sure to delete this user')); ?>?</p>
                        <form method="POST" action="<?php echo e(route('core.user.delete')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" id="user_id" name="id">
                            <button type="button" class="btn long mt-2 btn-danger"
                                data-dismiss="modal"><?php echo e(translate('cancel')); ?></button>
                            <button type="submit" class="btn long mt-2"><?php echo e(translate('Delete')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Delete Modal-->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_scripts'); ?>
    <script src="<?php echo e(asset('/public/web-assets/backend/plugins/data-table/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/public/web-assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('/public/web-assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('/public/web-assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>">
    </script>

    <script type="application/javascript">
        (function($) {
            "use strict";
            $("#user_table").DataTable();
            
        })(jQuery);

        /**
         * Will request to update user status
         */
        function updateUserStatus(user_id) {
            "use strict";
            let status = 2
            if ($('#user_status_' + user_id).is(":checked")) {
                status = 1
            }
            $.post("<?php echo e(route('core.update.user.status')); ?>", {
                    _token: '<?php echo e(csrf_token()); ?>',
                    id: user_id,
                    status: status
                },
                function(data, status) {
                    toastr.success("User status updated successfully", "Success!");
                }).fail(function(xhr, status, error) {
                toastr.error("Unable to update user status", "!");
            });
        }

        /**
         * show delete confirmation modal
         */
        function deleteConfirmation(user_id) {
            "use strict";
            $("#user_id").val(user_id);
            $('#delete-modal').modal('show');
        }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::base.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Development\quick-shop\Core/resources/views/base/users/users.blade.php ENDPATH**/ ?>