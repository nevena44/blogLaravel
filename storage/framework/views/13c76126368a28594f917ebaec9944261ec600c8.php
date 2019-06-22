<?php $__env->startSection('cont'); ?>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo e(asset('/')); ?>images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="<?php echo e(asset('/log')); ?>" method="POST" class="login100-form validate-form">
                    <?php echo csrf_field(); ?>
					<span class="login100-form-title p-b-49">
						Login
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Type your username">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" placeholder="Type your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <input type="submit" value="LOGIN" name="btnLog" class="login100-form-btn"/>
                        </div>
                    </div>
                    <?php if(session('poruka')): ?>
                        <?php echo e(session('poruka')); ?>

                        <?php endif; ?>
                    <?php if(session('por')): ?>
                        <div class="alert-success">
                            <?php echo e(session('por')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="flex-col-c p-t-155">
                        <a href="<?php echo e(route('reg')); ?>" class="txt2">
                            Register
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