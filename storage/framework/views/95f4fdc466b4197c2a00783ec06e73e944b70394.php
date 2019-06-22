<?php $__env->startSection('cont'); ?>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo e(asset('/')); ?>images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="<?php echo e(route('post.store')); ?>" method="POST" class="login100-form validate-form" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <span class="login100-form-title p-b-49">
						INSERT POST
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Post name is reauired">
                        <span class="label-input100">Post Name</span>
                        <input class="input100" type="text" name="name" placeholder="Type your post name">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Post text is reauired">
                        <span class="label-input100">Post Text</span>
                        <textarea class="input100" type="text" name="text" placeholder="Type your post text"></textarea>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Text is required">
                        <span class="label-input100">Text</span>
                        <input class="input100" type="text" name="ptext" placeholder="Type your text"/>
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Pictures is reauired">
                        <span class="label-input100">Picture</span>
                        <input class="input100" type="file" name="photo" placeholder="Type your photo">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <input type="submit" class="login100-form-btn" value="INSERT" name="btnInsert"/>
                        </div>
                    </div>
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
                    <div class="flex-col-c p-t-155">
                        <a href="<?php echo e(route('post.index')); ?>" class="txt2">
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