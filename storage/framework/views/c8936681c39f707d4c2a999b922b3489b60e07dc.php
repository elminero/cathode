<?php $__env->startSection('title', 'Project: ' . $project->title); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Project: <?php echo e($project->title); ?></h1>
                <h2>Description</h2>
                <p><?php echo e($project->description); ?></p>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $project)): ?>

                    <a href="/projects/<?php echo e($project->id); ?>/edit"><button class="btn btn-primary">Edit</button></a>

                    <form class="float-right" method="post" action="/projects/<?php echo e($project->id); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                    <div class="clear-both"></div>

                <?php endif; ?>

            </div>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $project)): ?>
                <div class="col-md-4">

                    <h1>Add a Task </h1>
                    <form method="post" action="/projects/<?php echo e($project->id); ?>/Task">

                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add a Task</button>
                        </div>

                    </form>

                </div>
            <?php endif; ?>


            <div class="col-md-4">

                <h1>Project Tasks</h1>


                    <?php $__currentLoopData = $project->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form method="post" action="/tasks/<?php echo e($task->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('patch'); ?>
                            <label class="<?php echo e($task->completed?'completed':''); ?>">
                                <input type="checkbox" name="complete" onchange="this.form.submit()"
                                    <?php echo e($task->completed?'checked':''); ?>

                                >
                                <?php echo e($task->title); ?>

                            </label>
                        </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>


        <div class="row">
            <div class="col-md-4">

                <h1>Employee</h1>

                Position: <?php echo e($employee->position); ?> <br/>
                Age: <?php echo e($employee->age); ?> <br />
                Gender: <?php echo e($employee->gender); ?>


            </div>

        </div>



    </div>








<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/cathode/resources/views/projects/show.blade.php ENDPATH**/ ?>