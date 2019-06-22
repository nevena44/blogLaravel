<?php $__env->startSection('cont'); ?>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo e(asset('/')); ?>images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="<?php echo e(route('komentar.store')); ?>" method="POST" class="login100-form validate-form" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <span class="login100-form-title p-b-49">
						INSERT COMMENT
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Text is reauired">
                        <span class="label-input100">Text</span>
                        <input class="input100" type="text" name="text" placeholder="Type your comment">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <input type="submit" class="login100-form-btn" value="INSERT" name="btnInsert"/>
                        </div>
                    </div>
                    <div class="flex-col-c p-t-155">
                        <a href="<?php echo e(asset('/admin')); ?>" class="txt2">
                            ADMIN
                        </a>
                    </div>
                    <div class="flex-col-c p-t-155">
                        <a href="<?php echo e(route('index')); ?>" class="txt2">
                            Back to blog page.
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>s
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.loglayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>