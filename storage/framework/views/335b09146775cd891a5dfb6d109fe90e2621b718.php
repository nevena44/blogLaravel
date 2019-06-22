<?php $__env->startSection('sadrzaj'); ?>

    <div class="page-container float-right">
        <div class="row">
            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6">
                <div class="blog-entry ftco-animate">
                    <a href="<?php echo e(route('single',['id'=>$p->IdPost])); ?>" class="blog-image">
                        <img src="<?php echo e(asset('/').$p->Putanja); ?>" class="img-fluid" alt="<?php echo e($p->Alt); ?>">
                    </a>
                    <div class="text py-4">
                        <div class="meta">
                            <div><?php echo e($p->Datum); ?></div>
                            <div><?php echo e($p->KorIme); ?></div>
                        </div>
                        <h3 class="heading"><a href="<?php echo e(route('single',['id'=>$p->IdPost])); ?>"><?php echo e($p->Naslov); ?></a></h3>
                        <p><?php echo e($p->SkraceniOpis); ?></p>
                    </div>
                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php echo e($post->render()); ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.glavniLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>