<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="row justify-content-end">
        <div class="">
            <h3 class="py-3 px-5">Manager Course</h3>
        </div>
        <div class="py-3 px-5"><a class=" btn btn-primary" href="<?php echo e(url('admin/course/add')); ?>">Add New</a></div>
    </div>
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
                    
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Level</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo e($key->title_cate); ?></p>
                    </td>
                    
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-xs"><?php echo e($key->title_levels); ?></span>
                        </div>
                    </td>
                    <td>$<?php echo e($key->price); ?></td>
                    <td class="align-middle">
                        <div class="dropdown">
                            <a href="#" class="btn dropdown-toggle " data-bs-toggle="dropdown"
                                id="navbarDropdownMenuLink2">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(url('admin/course/edit/'. $key->id)); ?>">
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(url('admin/course/delete/'. $key->id)); ?>">
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
            <?php echo e($courses->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminhtml.home_admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\asm_php3\resources\views/adminhtml/course/course_view_index.blade.php ENDPATH**/ ?>