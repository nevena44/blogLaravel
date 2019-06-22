<?php $__env->startSection('cont'); ?>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo e(asset('/')); ?>images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="<?php echo e(route('post.update',['id'=>$id])); ?>" class="login100-form validate-form" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PATCH')); ?>

                    <span class="login100-form-title p-b-49">
						EDIT POST
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Post name is reauired">
                        <span class="label-input100">Post Name</span>
                        <input class="input100" type="text" name="name" value="<?php echo e($p->Naslov); ?>" placeholder="Type your post name">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Post text is reauired">
                        <span class="label-input100">Post Text</span>
                        <textarea class="input100" type="text" name="text" placeholder="Type your post text"><?php echo e($p->Opis); ?></textarea>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Text is required">
                        <span class="label-input100">Text</span>
                        <input class="input100" type="text" name="ptext" value="<?php echo e($p->SkraceniOpis); ?>" placeholder="Type your text">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>







                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <input type="submit" class="login100-form-btn" value="EDIT" name="btnInsert"/>
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