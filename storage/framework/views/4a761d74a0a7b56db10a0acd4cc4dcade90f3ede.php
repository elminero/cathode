<?php $__env->startSection('title', 'New Project'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">

        <div class="col-md-6">
            <h1>Describe Your New Project</h1>

            <form method="post" action="/projects">

                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="title" class="<?php echo e($errors->has('title')?'error':''); ?>">Title</label>
                    <input type="text" name="title" id="title" class="form-control <?php echo e($errors->has('title')?'error-border':''); ?>" value="<?php echo e(old('title')); ?>">
                </div>

                <div class="form-group">
                    <label for="description" class="<?php echo e($errors->has('description')?'error':''); ?>">Description</label>
                    <textarea id="description" name="description" class="form-control <?php echo e($errors->has('description')?'error-border':''); ?>"><?php echo e(old('description')); ?></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create a New Project</button>
                </div>

            </form>

            <?php if($errors->count()): ?>
                <ul class="error">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>

        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/cathode/resources/views/create.blade.php ENDPATH**/ ?>