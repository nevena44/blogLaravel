<?php $__env->startSection('sadrzaj'); ?>
    <div class="page-container float-right">
        <div class="row">
<div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Leave a message</h3>
    <form action="<?php echo e(asset('/contact')); ?>" method="POST" class="bg-light p-4">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name"><?php echo e(session()->get('user')->KorIme); ?></label>
            <input type="text" name="kor" value="<?php echo e(session()->get('user')->KorIme); ?>"/>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="text" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Send message" class="btn py-3 px-4 btn-primary">
        </div>

    </form>
    <?php if(session('por')): ?>
        <div class="alert-success">
            <?php echo e(session('por')); ?>

        </div>
    <?php endif; ?>
    <br/><br/>
    <div class="container-login100-form-btn">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.glavniLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>