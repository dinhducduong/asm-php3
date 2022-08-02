<?php $__env->startSection('content'); ?>
<section class="pb-11 pt-7 bg-600">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6 class="font-sans-serif text-primary fw-bold">Danh mục khóa học</h6>
                <h1 class="mb-6">Danh sách khóa học</h1>
                <form class="row g-3">
                    <div class="col-sm-6 col-md-3">
                        <label class="form-label" for="inputCategories">Danh mục</label>
                        <select class="form-select" id="inputCategories">
                            <option selected="selected" disabled>Select</option>
                            <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($key->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <label class="form-label" for="inputLevel">Cấp bậc</label>
                        <select class="form-select" id="inputLevel">
                            <option selected="selected" disabled>Tất cả</option>
                            <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($key->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <label class="form-label" for="inputLanguage">Ngôn ngữ</label>
                        <select class="form-select" id="inputLanguage">
                            <option selected="selected" disabled>Vietnamese</option>
                            <option value="1">English</option>
                            <option value="2">Bangla</option>
                            <option value="3">Hindi</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <label class="form-label" for="inputInstructor">Giảng Viên</label>
                        <select class="form-select" id="inputInstructor">
                            <option selected="selected" disabled>Tất cả giảng viên </option>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($key->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </select>
                    </div>
                    <div class="col-auto z-index-2">
                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-0" style="margin-top:-17rem">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100" src="<?php echo e($key->image); ?>" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1"><?php echo e($key->title); ?></h5>
                        <h4 class="text-danger"><?php echo e($key->price); ?> đ</h4>
                        <a class="text-muted fs--1 stretched-link text-decoration-none"
                            href="<?php echo e(route('detail_course', ['id' => $key->id])); ?>"><?php echo e($key->description_short); ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="d-flex justify-content-end">
            <?php echo e($data->links()); ?>

        </div>
    </div><!-- end of .container-->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\asm_php3\resources\views/frontend/course/list_course_view.blade.php ENDPATH**/ ?>