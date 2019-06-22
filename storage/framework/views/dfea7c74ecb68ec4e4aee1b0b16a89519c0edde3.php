<?php $__env->startSection('sadrzaj'); ?>

    <div class="page-container float-right">
        <div class="row">
            <p>My name is Nevena Pejcic.My birth date is 14.08.1996. I am a student of ICT colege.</p>
            <img src="<?php echo e(asset('/')); ?>img/autor.jpg"/>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.glavniLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>