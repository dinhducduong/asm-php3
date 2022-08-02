<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
<div class="title">
    <h3 class="p-3">Add New Category</h3>
</div>
<div class="row p-3">
    <form method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title</label>
                    <input value="<?php echo e(old('title')); ?>" name=" title" type="text" class="form-control"
                        placeholder="Title Category">
                </div>
                <?php if($errors->has('title')): ?>
                <span class="text-danger"> <?php echo e($errors->first('title')); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Image</label><br>
                    <input type="file" name="image" accept="image/*" class="form-control-file" id="image">
                </div>
                <?php if($errors->has('image')): ?>
                <span class="text-danger"> <?php echo e($errors->first('image')); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="col">
            <button class="btn btn-danger" type="submit">Save</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminhtml.home_admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\asm_php3\resources\views/adminhtml/category/category_view_add.blade.php ENDPATH**/ ?>