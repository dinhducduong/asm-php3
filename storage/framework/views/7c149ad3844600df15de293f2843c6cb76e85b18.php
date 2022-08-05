<?php $__env->startSection('title', 'Profile'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="">
            <h2>Lịch sử đăng kí khóa học</h2>
        </div>
        <div class="row col pt-4">
            <div class="col-3">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thông tin cá nhân</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lịch sử mua khóa học</a>
                    </li>
                </ul>
            </div>
            <div class="col-9">
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>ID</th>
                            <th>Tên khóa học</th>
                            <th>Trạng thái</th>
                            <th>Ngày đăng kí</th>
                            <th>Vào học</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row">#<?php echo e($value->id); ?></td>
                            <td><?php echo e($value->title_course); ?></td>
                            <td>
                                <?php if($value->status == 0): ?>
                                <span>Active</span>
                                <?php else: ?>
                                <span>No Active</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($value->created_at); ?></td>
                            <td>
                                <?php if($value->status == 0): ?>
                                <a href="" class="text-success">Vào học</a>
                                <?php else: ?>
                                <a href="" class="text-danger">Kích hoạt khóa học</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\asm_php3\resources\views/frontend/auth/profile.blade.php ENDPATH**/ ?>