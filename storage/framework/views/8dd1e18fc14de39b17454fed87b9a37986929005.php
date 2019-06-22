<?php $__env->startSection('cont'); ?>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo e(asset('/')); ?>images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <a href="<?php echo e(route('korisnik.index')); ?>" class="login100-form-btn>">USERS</a><br/><br/>
                <a href="<?php echo e(route('uloga.index')); ?>" class="login100-form-btn>">ROLES</a><br/><br/>
                <a href="<?php echo e(route('post.index')); ?>" class="login100-form-btn>">POSTS</a><br/><br/>
                <a href="<?php echo e(route('komentar.index')); ?>" class="login100-form-btn>">COMMENTS</a><br/><br/>
                <a href="<?php echo e(route('hash.index')); ?>" class="login100-form-btn>">HACHTAG</a><br/><br/>
                <a href="<?php echo e(route('slika.index')); ?>" class="login100-form-btn>">PHOTO</a><br/><br/>
                <a href="<?php echo e(asset('/kljucne')); ?>" class="login100-form-btn>">KLJUCNE AKTIVNOSTI KORISNIKA</a><br/><br/>
                <a href="<?php echo e(asset('/admin/kontakt')); ?>" class="login100-form-btn>">CONTACT</a><br/><br/>
            <br/><br/><br/>
                <a href="<?php echo e(route('index')); ?>" class="login100-form-btn>">BACK</a><br/><br/>
        </div>

    </div>
    <div id="dropDownSelect1">

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.loglayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>