<!DOCTYPE html>
<html lang="en">
<head>
<?php echo $__env->make('components.logheader', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<?php echo $__env->yieldContent('cont'); ?>
<?php echo $__env->make('components.logscript', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>