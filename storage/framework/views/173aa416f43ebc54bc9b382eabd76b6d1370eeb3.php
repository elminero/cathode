<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>

        .error {
            color: red;
        }

        .error-border {
            border-color: red;
        }

        .float-right {
            float: right;
        }

        .clear-both {
            clear:both
        }

        .completed {
            text-decoration: line-through;
        }

    </style>

</head>
<body>

    <?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH /home/vagrant/code/cathode/resources/views/layouts/master.blade.php ENDPATH**/ ?>