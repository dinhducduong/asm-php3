<?php $__env->startSection('content'); ?>
<section class="pb-11 pt-7 bg-600">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6 class="font-sans-serif text-primary fw-bold">Chi tiết khóa học</h6>
                <h1 class="mb-6"><?php echo e($detail_course[0]->title); ?></h1>
            </div>
        </div>
    </div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->



<!-- ============================================-->
<!-- <section> begin ============================-->
<section style="margin-top:-21.5rem">

    <div class="container">
        <div class="row">
            <div class="col-md-8"><img class="w-100" src="<?php echo e($detail_course[0]->image); ?>" alt="..." />
                <h1 class="my-4">Mô tả</h1>
                <p><?php echo e($detail_course[0]->description_long); ?></p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Đã đăng kí </strong>: <?php echo e($count_order); ?> Học viên</li>
                        <li class="list-group-item"><strong>Giảng viên </strong>: <?php echo e($detail_course[0]->name); ?></li>
                        <li class="list-group-item"><strong>Bài giảng </strong>: <?php echo e($data_count_course_user); ?></li>
                        <li class="list-group-item"><strong>Cấp bậc </strong>: <?php echo e($detail_course[0]->title_levels); ?></li>
                        <li class="list-group-item"><strong>Danh mục </strong>: <?php echo e($detail_course[0]->title_cate); ?></li>
                        <li class="list-group-item"><strong>Giá </strong>: <?php echo e($detail_course[0]->price); ?> $</li>
                        <li class="list-group-item">
                            <form method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit" name="btnSub" class="btn btn-danger">Đăng kí
                                    khóa học</button>
                            </form>
                            <p class="text-muted mb-0 mt-4">Liên hệ với giảng viên</p><a class="text-info"
                                href="#"><?php echo e($detail_course[0]->email); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section>
<!-- <section> close ============================-->
<!-- ============================================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\asm_php3\resources\views/frontend/course/list_course_detail.blade.php ENDPATH**/ ?>