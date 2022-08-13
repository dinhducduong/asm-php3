<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="row justify-content-end">
        <div class="">
            <h3 class="py-3 px-5">Manager Category</h3>
        </div>
        <div class="py-3 px-5"><a class=" btn btn-primary" href="<?php echo e(url('admin/category/add')); ?>">Add New</a></div>
    </div>
    <?php if( Session::has('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <strong><?php echo e(Session::get('success')); ?></strong>
        </button>
    </div>
    <?php endif; ?>
    <div class="">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tile</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <div>
                            <p class="text-xs font-weight-bold mb-0 px-2">#<?php echo e($key->id); ?></p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2">

                            <div>
                                <img src="<?php echo e($key->image?''. Storage::url($key->image): " $key->image"); ?>"
                                class="avatar avatar-sm rounded-circle me-2">
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0 text-xs"><?php echo e($key->title); ?></h6>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-xs"><?php
                                if($key->status == 0){
                                echo "Disable";
                                }elseif($key->status == 1){
                                echo "Enable";
                                }
                                ?></span>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="dropdown">
                            <a href="#" class="btn dropdown-toggle " data-bs-toggle="dropdown"
                                id="navbarDropdownMenuLink2">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(url('admin/category/edit/'. $key->id)); ?>">
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(url('admin/category/delete/'. $key->id)); ?>">
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="d-flex px-3">
            <?php echo e($category->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminhtml.home_admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\asm_php3\resources\views/adminhtml/category/category_view_index.blade.php ENDPATH**/ ?>