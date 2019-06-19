<?php $__env->startSection('title', 'Edit Project'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">

        <div class="col-md-6">
            <h1>Change Your New Project</h1>

            <form method="post" action="/projects/<?php echo e($project->id); ?>">

                <?php echo csrf_field(); ?>
                <?php echo method_field('patch'); ?>

                <div class="form-group">
                    <label for="title" class="<?php echo e($errors->has('title')?'error':''); ?>">Title</label>
                    <input type="text" name="title" id="title" class="form-control <?php echo e($errors->has('title')?'error-border':''); ?>" value="<?php echo e($project->title); ?>">
                </div>

                <div class="form-group">
                    <label for="description" class="<?php echo e($errors->has('description')?'error':''); ?>">Description</label>
                    <textarea id="description" name="description" class="form-control <?php echo e($errors->has('description')?'error-border':''); ?>"><?php echo e($project->description); ?></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Make Changes</button>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/cathode/resources/views/projects/edit.blade.php ENDPATH**/ ?>