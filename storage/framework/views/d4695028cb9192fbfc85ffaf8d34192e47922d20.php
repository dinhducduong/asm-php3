<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
<div class="title">
    <h3 class="p-3">Edit Course</h3>
</div>
<div class="row p-3">
    <form method="post">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title</label>
                    <input value="<?php echo e($course_find->title); ?>" name="title" type="text" class="form-control"
                        placeholder="Title Course">
                </div>
                <?php if($errors->has('title')): ?>
                <span class="text-danger"> <?php echo e($errors->first('title')); ?></span>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Category</label>
                    <select name="categories_id" class="form-control">
                        <option disabled selected>Select</option>
                        <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>" <?php if($key->id == $course_find->categories_id): echo 'selected'; endif; ?> ><?php echo e($key->title); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <?php if($errors->has('categories_id')): ?>
                <span class="text-danger"> <?php echo e($errors->first('categories_id')); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Image</label>
                    <input name="image" class="form-control" type="file">
                </div>
                <?php if($errors->has('image')): ?>
                <span class="text-danger"> <?php echo e($errors->first('image')); ?></span>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Level</label>
                    <select name="levels_id" class="form-control">
                        <option disabled selected>Select</option>
                        <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>" <?php if($key->id == $course_find->levels_id): echo 'selected'; endif; ?> ><?php echo e($key->title); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <?php if($errors->has('levels_id')): ?>
                <span class="text-danger"> <?php echo e($errors->first('levels_id')); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Price</label>
                    <input value="<?php echo e($course_find->price); ?>" name="price" type="text" placeholder="Price"
                        class="form-control" />
                </div>
                <?php if($errors->has('price')): ?>
                <span class="text-danger"> <?php echo e($errors->first('price')); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description Short</label>
                    <textarea name="description_short" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"><?php echo e($course_find->description_short); ?></textarea>
                </div>
                <?php if($errors->has('description_short')): ?>
                <span class="text-danger"> <?php echo e($errors->first('description_short')); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description Long</label>
                    <textarea name="description_long" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"><?php echo e($course_find->description_long); ?></textarea>
                </div>
                <?php if($errors->has('description_long')): ?>
                <span class="text-danger"> <?php echo e($errors->first('description_long')); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="col">
            <button class="btn btn-danger" type="submit">Save</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminhtml.home_admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\asm_php3\resources\views/adminhtml/course/course_view_edit.blade.php ENDPATH**/ ?>