<?php $__env->startSection('title'); ?>
    <?php echo e(translate('Roles')); ?>

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
    <style>
        .table-scroll {
            overflow-x: auto;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>
    <div class="row">
        <!-- Role List-->
        <div class="col-md-5">
            <div class="card mb-30">
                <div class="card-header bg-white border-bottom2 py-3">
                    <h4><?php echo e(translate('Roles')); ?></h4>
                </div>
                <div class="card-body p-1 py-2">
                    <div class="table-responsive">
                        <table class="hoverable text-nowrap border-top2 " id="role_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(translate('Name')); ?></th>
                                    <?php if(auth()->user()->can('Edit Role') ||
                                            auth()->user()->can('Delete Role')): ?>
                                        <th><?php echo e(translate('Actions')); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $key = 1;
                                ?>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($role->id != config('settings.roles.supper_admin')): ?>
                                        <tr>
                                            <td><?php echo e($key); ?></td>
                                            <td><?php echo e($role->name); ?></td>
                                            <?php if(auth()->user()->can('Edit Role') ||
                                                    auth()->user()->can('Delete Role')): ?>
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
                                                            <?php if(auth()->user()->can('Edit Role')): ?>
                                                                <a href="#"
                                                                    onclick="showEditableForm('<?php echo e($role->id); ?>')">Edit</a>
                                                            <?php endif; ?>
                                                            <?php if(auth()->user()->can('Delete Role')): ?>
                                                                <a href="#"
                                                                    onclick="deleteConfirmation('<?php echo e($role->id); ?>')">Delete</a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php
                                            $key++;
                                        ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- Role List-->

        <?php if(auth()->user()->can('Create Role') ||
                auth()->user()->can('Edit Role')): ?>
            <div class="col-md-7 mb-30">
                <?php if(auth()->user()->can('Create Role')): ?>
                    <!-- Add new role-->
                    <div class="card">
                        <div
                            class="post-head align-items-center bg-white border-bottom2 card-header d-flex gap-10 justify-content-between py-3">
                            <div class="d-flex align-items-center">
                                <div class="content">
                                    <h4><?php echo e(translate('Add New Role')); ?></h4>
                                </div>
                            </div>
                            <div id="add_role_down_icon" class="icon" onclick="toggleRoleAddingForm()">
                                <i class="icofont-simple-down"></i>
                            </div>
                            <div id="add_role_up_icon" class="icon" onclick="toggleRoleAddingForm()">
                                <i class="icofont-simple-up"></i>
                            </div>
                        </div>
                        <div class="card-body" id="add_role">
                            <div>
                                <form action="<?php echo e(route('core.add.role')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-row mb-20">
                                        <div class="col-md-4">
                                            <label class="font-14 bold black"><?php echo e(translate('Name')); ?></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="role_name" class="theme-input-style"
                                                value="<?php echo e(old('role_name')); ?>"
                                                placeholder="<?php echo e(translate('Give role name')); ?>">
                                            <?php if($errors->has('role_name')): ?>
                                                <div class="invalid-input"><?php echo e($errors->first('role_name')); ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-row mb-20">
                                        <input type="hidden" name="permissions" id="permissions">
                                        <div class="col-sm-12 table-scroll">
                                            <h4 class="mb-3"><?php echo e(translate('Permissions')); ?></h5>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"><?php echo e(translate('Module')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Feature')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Show')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Create')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Edit')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Delete')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Manage')); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php for($i = 0; $i < sizeof($permissionModules); $i++): ?>
                                                            <?php
                                                                $permissions = getPermissionsOfModule($permissionModules[$i]->id);
                                                                $show_permission_id = hasPermissionInThisModule($permissionModules[$i]->id, translate('Show ') . ' ' . $permissionModules[$i]->module_name);
                                                                $create_permission_id = hasPermissionInThisModule($permissionModules[$i]->id, translate('Create ') . ' ' . $permissionModules[$i]->module_name);
                                                                $edit_permission_id = hasPermissionInThisModule($permissionModules[$i]->id, translate('Edit ') . ' ' . $permissionModules[$i]->module_name);
                                                                $delete_permission_id = hasPermissionInThisModule($permissionModules[$i]->id, translate('Delete ') . ' ' . $permissionModules[$i]->module_name);
                                                                $manage_permission_id = hasPermissionInThisModule($permissionModules[$i]->id, translate('Manage ') . ' ' . $permissionModules[$i]->module_name);
                                                            ?>
                                                            <tr>
                                                                <?php if($i == 0 || $permissionModules[$i]->parent_module != $permissionModules[$i - 1]->parent_module): ?>
                                                                    <td class="font-weight-bold">
                                                                        <?php echo e($permissionModules[$i]->parent_module); ?></td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                                <td><?php echo e($permissionModules[$i]->module_name); ?></td>
                                                                <?php if($show_permission_id): ?>
                                                                    <td>
                                                                        <label class="switch success small">
                                                                            <input type="checkbox"
                                                                                id="role_has_permissions_<?php echo e($show_permission_id); ?>"
                                                                                onchange="setRemovePermissionsToRole('<?php echo e($show_permission_id); ?>')">
                                                                            <span class="control"></span>
                                                                        </label>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                                <?php if($create_permission_id): ?>
                                                                    <td>
                                                                        <label class="switch success small">
                                                                            <input type="checkbox"
                                                                                id="role_has_permissions_<?php echo e($create_permission_id); ?>"
                                                                                onchange="setRemovePermissionsToRole('<?php echo e($create_permission_id); ?>')">
                                                                            <span class="control"></span>
                                                                        </label>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                                <?php if($edit_permission_id): ?>
                                                                    <td>
                                                                        <label class="switch success small">
                                                                            <input type="checkbox"
                                                                                id="role_has_permissions_<?php echo e($edit_permission_id); ?>"
                                                                                onchange="setRemovePermissionsToRole('<?php echo e($edit_permission_id); ?>')">
                                                                            <span class="control"></span>
                                                                        </label>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                                <?php if($delete_permission_id): ?>
                                                                    <td>
                                                                        <label class="switch success small">
                                                                            <input type="checkbox"
                                                                                id="role_has_permissions_<?php echo e($delete_permission_id); ?>"
                                                                                onchange="setRemovePermissionsToRole('<?php echo e($delete_permission_id); ?>')">
                                                                            <span class="control"></span>
                                                                        </label>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                                <?php if($manage_permission_id): ?>
                                                                    <td>
                                                                        <label class="switch success small">
                                                                            <input type="checkbox"
                                                                                id="role_has_permissions_<?php echo e($manage_permission_id); ?>"
                                                                                onchange="setRemovePermissionsToRole('<?php echo e($manage_permission_id); ?>')">
                                                                            <span class="control"></span>
                                                                        </label>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                            </tr>
                                                        <?php endfor; ?>
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn long"><?php echo e(translate('Submit')); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Add new role-->
                <?php endif; ?>

                <?php if(auth()->user()->can('Edit Role')): ?>
                    <!-- Update new role-->
                    <div class="card mt-4" id="update_role">
                        <div
                            class="post-head align-items-center bg-white border-bottom2 card-header d-flex gap-10 justify-content-between py-3">
                            <h4 class="mb-1"><?php echo e(translate('Update Role')); ?></h4>
                            <div id="update_role_down_icon" class="icon" onclick="hideRoleUpdateForm()">
                                <i class="icofont-close"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div>
                                    <input type="hidden" name="role_id" id="role_id">
                                    <div class="form-row mb-20">
                                        <div class="col-md-4">
                                            <label class="font-14 bold black"><?php echo e(translate('Name')); ?></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="role_name" id="role_name"
                                                class="theme-input-style"
                                                placeholder="<?php echo e(translate('Give role name')); ?>">
                                            <div class="invalid-input" id="role_name_update_error"></div>
                                        </div>
                                    </div>

                                    <div class="form-row mb-20">
                                        <input type="hidden" name="permissions" id="edditable_permissions">
                                        <div class="col-sm-12 table-scroll">
                                            <div class="invalid-input" id="permissions_update_error"></div>
                                            <h4 class="mb-3"><?php echo e(translate('Permissions')); ?></h5>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"><?php echo e(translate('Module')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Feature')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Show')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Create')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Edit')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Delete')); ?></th>
                                                            <th scope="col"><?php echo e(translate('Manage')); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php for($i = 0; $i < sizeof($permissionModules); $i++): ?>
                                                            <?php
                                                                $permissions = getPermissionsOfModule($permissionModules[$i]->id);
                                                                $show_permission_id = hasPermissionInThisModule($permissionModules[$i]->id, translate('Show ') . ' ' . $permissionModules[$i]->module_name);
                                                                $create_permission_id = hasPermissionInThisModule($permissionModules[$i]->id, translate('Create ') . ' ' . $permissionModules[$i]->module_name);
                                                                $edit_permission_id = hasPermissionInThisModule($permissionModules[$i]->id, translate('Edit ') . ' ' . $permissionModules[$i]->module_name);
                                                                $delete_permission_id = hasPermissionInThisModule($permissionModules[$i]->id, translate('Delete ') . ' ' . $permissionModules[$i]->module_name);
                                                                $manage_permission_id = hasPermissionInThisModule($permissionModules[$i]->id, translate('Manage ') . ' ' . $permissionModules[$i]->module_name);
                                                            ?>
                                                            <tr>
                                                                <?php if($i == 0 || $permissionModules[$i]->parent_module != $permissionModules[$i - 1]->parent_module): ?>
                                                                    <td class="font-weight-bold">
                                                                        <?php echo e($permissionModules[$i]->parent_module); ?></td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                                <td><?php echo e($permissionModules[$i]->module_name); ?></td>
                                                                <?php if($show_permission_id): ?>
                                                                    <td>
                                                                        <label class="switch success small">
                                                                            <input type="checkbox"
                                                                                id="edtable_role_has_permissions_<?php echo e($show_permission_id); ?>"
                                                                                onchange="setRemovePermissionsToRoleOnEdit('<?php echo e($show_permission_id); ?>')">
                                                                            <span class="control"></span>
                                                                        </label>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                                <?php if($create_permission_id): ?>
                                                                    <td>
                                                                        <label class="switch success small">
                                                                            <input type="checkbox"
                                                                                id="edtable_role_has_permissions_<?php echo e($create_permission_id); ?>"
                                                                                onchange="setRemovePermissionsToRoleOnEdit('<?php echo e($create_permission_id); ?>')">
                                                                            <span class="control"></span>
                                                                        </label>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                                <?php if($edit_permission_id): ?>
                                                                    <td>
                                                                        <label class="switch success small">
                                                                            <input type="checkbox"
                                                                                id="edtable_role_has_permissions_<?php echo e($edit_permission_id); ?>"
                                                                                onchange="setRemovePermissionsToRoleOnEdit('<?php echo e($edit_permission_id); ?>')">
                                                                            <span class="control"></span>
                                                                        </label>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                                <?php if($delete_permission_id): ?>
                                                                    <td>
                                                                        <label class="switch success small">
                                                                            <input type="checkbox"
                                                                                id="edtable_role_has_permissions_<?php echo e($delete_permission_id); ?>"
                                                                                onchange="setRemovePermissionsToRoleOnEdit('<?php echo e($delete_permission_id); ?>')">
                                                                            <span class="control"></span>
                                                                        </label>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                                <?php if($manage_permission_id): ?>
                                                                    <td>
                                                                        <label class="switch success small">
                                                                            <input type="checkbox"
                                                                                id="edtable_role_has_permissions_<?php echo e($manage_permission_id); ?>"
                                                                                onchange="setRemovePermissionsToRoleOnEdit('<?php echo e($manage_permission_id); ?>')">
                                                                            <span class="control"></span>
                                                                        </label>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td></td>
                                                                <?php endif; ?>
                                                            </tr>
                                                        <?php endfor; ?>
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn long"
                                                onclick="updateRole()"><?php echo e(translate('Save Changes')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Update new role-->
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!--Delete Modal-->
        <div id="delete-modal" class="delete-modal modal fade show" aria-modal="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title h6"><?php echo e(translate('Delete Confirmation')); ?></h4>
                    </div>
                    <div class="modal-body text-center">
                        <input type="hidden" name="role_id" id="role_id" value="">
                        <p class="mt-1"><?php echo e(translate('Are you sure to delete this')); ?>?</p>
                        <button type="button" class="btn btn-danger long mt-2"
                            data-dismiss="modal"><?php echo e(translate('cancel')); ?></button>
                        <button type="submit" class="btn long mt-2"
                            onclick="deleteRole()"><?php echo e(translate('Delete')); ?></button>
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
        let role_has_permissions = [];
        let role_has_module_permissions = [];
        let editable_role_has_permissions = [];

        (function($) {
            "use strict";
            $('#role_table').DataTable();
            hideElement(['#add_role_up_icon', '#update_role']);
        })(jQuery);
        

        /**
         * Toggle role adding form
         */
        function toggleRoleAddingForm() {
            "use strict";
            toggleElement([
                '#add_role',
                '#add_role_down_icon',
                '#add_role_up_icon'
            ]);
        }

        /**
         * hiding role updating form
         */
        function hideRoleUpdateForm() {
            "use strict";
            $('#update_role').hide();
        }

        /**
         * Show role editable form with necessary information
         */
        function showEditableForm(role_id) {
            "use strict";
            flash()
            $('#update_role').show();
            $('#add_role').hide();
            $.get("<?php echo e(route('core.edit.role')); ?>", {
                    id: role_id
                },
                function(data, status) {
                    let response = JSON.parse(JSON.stringify(data))
                    let role = response.role
                    let permissions = response.permissions
                    let modules = response.modules
                    let last_permission_id = <?php echo e($last_permission_id); ?>


                    for (let i = 0; i < modules.length; i++) {
                        if(modules[i].hasAllPermission == 1){
                            $('#editable_role_has_module_permissions_' + modules[i].id).prop('checked', true);
                        }
                        else{
                            $('#editable_role_has_module_permissions_' + modules[i].id).prop('checked', false);
                        }
                    }
                    for (let i = 1; i <= last_permission_id; i++) {
                        $('#edtable_role_has_permissions_' + i).prop('checked', false);
                    }
                    for (let i = 0; i < permissions.length; i++) {
                        $('#edtable_role_has_permissions_' + permissions[i]).prop('checked', true);
                        editable_role_has_permissions.push('' + permissions[i])
                    }
                    $('#role_name').val(role.name)
                    $('#role_id').val(role.id)
                }).fail(function(xhr, status, error) {
                let error_response = JSON.parse(xhr.responseText)
                let error_message = error_response.message
                toastr.error(error_message, "!");
            });
        }

        /**
         * Update role info 
         */
        function updateRole() {
            "use strict";
            let role_id = $('#role_id').val()
            let role_name = $('#role_name').val()
            let permissions = editable_role_has_permissions.join(',')

            $.post("<?php echo e(route('core.update.role')); ?>", {
                    _token: '<?php echo e(csrf_token()); ?>',
                    id: role_id,
                    role_name: role_name,
                    permissions: permissions
                },
                function(data, status) {
                    flash()
                    location.reload()
                    toastr.success("Role updated successfully", "Success!");
                }).fail(function(xhr, status, error) {
                let error_response = JSON.parse(xhr.responseText)
                let error_message = error_response.message
                let errors = {}

                if (error_response.hasOwnProperty('errors')) {
                    errors = objToArray(error_response.errors)
                    showFormErrorMessage(errors)
                } else {
                    toastr.error(error_message, "!");
                }
            });
        }

        /**
         * confirm before delete
         */
        function deleteConfirmation(role_id)
        {
            "use strict";
            $("#role_id").val(role_id);
            $('#delete-modal').modal('show');
        }

        /**
         * Delete role
         */
        function deleteRole() {
            "use strict";
            let role_id =  $("#role_id").val();
            $.post("<?php echo e(route('core.delete.role')); ?>", {
                    _token: '<?php echo e(csrf_token()); ?>',
                    id: role_id
                },
                function(data, status) {
                    flash()
                    location.reload()
                    toastr.success("Role deleted successfully", "Success!");
                }).fail(function(xhr, status, error) {
                let error_response = JSON.parse(xhr.responseText)
                let error_message = error_response.message
                toastr.error(error_message, "!");
            });
        }

        /**
         * set and remove permissions to role  
         */
        function setRemovePermissionsToRole(permission_id) {
            "use strict";
            if ($('#role_has_permissions_' + permission_id).is(":checked")) {
                role_has_permissions.push(''+permission_id)
            } else {
                let index = role_has_permissions.indexOf(''+permission_id);
                role_has_permissions.splice(index, 1);
            }
            $('#permissions').val(role_has_permissions.join(','))
        }
        
        /**
         * set and remove module permissions to role  
         */
        function setRemoveModulePermissionsToRole(module_id,permissionString) {
            "use strict";
            let permissions = JSON.parse(permissionString) 

            let last_permission_id = <?php echo e($last_permission_id); ?>

            
            if ($('#role_has_module_permissions_' + module_id).is(":checked")) {
                for (let i = 0; i < permissions.length; i++) {
                    $('#role_has_permissions_' + permissions[i].id).prop('checked', true);
                    role_has_permissions.push('' + permissions[i].id)
                }
            }
            else{
                for (let i = 0; i < permissions.length; i++) {
                    $('#role_has_permissions_' + permissions[i].id).prop('checked', false);
                    let index = role_has_permissions.indexOf(''+permissions[i].id);
                    role_has_permissions.splice(index, 1);
                }
            }
            $('#permissions').val(role_has_permissions.join(','))
        }


        /**
         * set and remove permissions to role on edit 
         */
        function setRemovePermissionsToRoleOnEdit(permission_id) {
            "use strict";
            if ($('#edtable_role_has_permissions_' + permission_id).is(":checked")) {
                editable_role_has_permissions.push(''+permission_id)
            } else {
                let index = editable_role_has_permissions.indexOf(''+permission_id);
                editable_role_has_permissions.splice(index, 1);
            }
            $('#edditable_permissions').val(role_has_permissions.join(','))
        }

        /**
        * set and remove module permissions to role while editing  
        */
         function setRemoveModulePermissionsToRoleOnEdit(module_id,permissionString) {
            "use strict";
            let permissions = JSON.parse(permissionString) 
                       
            if ($('#editable_role_has_module_permissions_' + module_id).is(":checked")) {
                for (let i = 0; i < permissions.length; i++) {
                    $('#edtable_role_has_permissions_' + permissions[i].id).prop('checked', true);
                    editable_role_has_permissions.push('' + permissions[i].id)
                }
            }
            else{
                for (let i = 0; i < permissions.length; i++) {
                    $('#edtable_role_has_permissions_' + permissions[i].id).prop('checked', false);
                    let index = editable_role_has_permissions.indexOf(''+permissions[i].id);
                    if(index!=-1){
                        editable_role_has_permissions.splice(index, 1);
                    }
                }
            }
            $('#edditable_permissions').val(role_has_permissions.join(','))
        }

        /**
         * Flush data 
         */
        function flash() {
            "use strict";
            $('#role_name_update_error').html('')
            $('#permissions_update_error').html('')
            editable_role_has_permissions = []
        }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::base.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Development\quick-shop\Core/resources/views/base/users/roles.blade.php ENDPATH**/ ?>