<?php $__env->startSection('sadrzaj'); ?>
    <section class="ftco-fixed clearfix">
        <div class="image js-fullheight float-left">
            <div class="home-slider owl-carousel js-fullheight">
                <div class="slider-item js-fullheight" style="background-image: url('<?php echo e(asset('/').$post->Putanja); ?>');">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row slider-text align-items-end" data-scrollax-parent="true">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end:image -->
    <div class="page-container float-right">
        <div class="row">

            <div class="col-md-12">
                <h2 class="mb-3"><?php echo e($post->Naslov); ?>ov</h2>
                <p><?php echo e($post->Opis); ?></p>
                <?php $__currentLoopData = $slika; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h2 class="mb-3 mt-5"><?php echo e($s->Alt); ?></h2>
                    <img src="<?php echo e(asset('/').$s->Putanja); ?>" alt="<?php echo e($s->Alt); ?>" class="img-fluid"><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <?php $__currentLoopData = $hash; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="tag-cloud-link"><?php echo e($h->Naziv); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="pt-5 mt-5">
                    <h3 class="mb-5">Comments</h3>
                    <ul class="comment-list">
                        <?php $__currentLoopData = $kom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="<?php echo e(asset('/').$k->Putanja); ?>" alt="<?php echo e($k->Alt); ?>">
                                </div>
                                <div class="comment-body">
                                    <h3><?php echo e($k->KorIme); ?></h3>
                                    <div class="meta"><?php echo e($k->Datum); ?></div>
                                    <p><?php echo e($k->Tekst); ?></p>
                                    <?php if(session()->has('user')&&session()->get('user')->KorIme==$k->KorIme): ?>
                                    <a href="<?php echo e(route('edit',['id'=>$k->IdKomentar])); ?>">
                                        <input type="submit" name="edit" class="btn py-3 px-4 btn-primary" value="EDIT"/>
                                    </a>
                                    <form action="<?php echo e(route('delete',['id'=>$k->IdKomentar])); ?>" method="post"><?php echo csrf_field(); ?>
                                        <input type="submit" name="delete" class="btn py-3 px-4 btn-primary" value="DELETE"/>
                                    </form>
                                        <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <!-- END comment-list -->
                    <?php if(session()->has('user')): ?>
                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="<?php echo e(route('kom',['id'=>$post->IdPost])); ?>" method="POST" class="bg-light p-4">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="name"><?php echo e(session()->get('user')->KorIme); ?></label>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="text" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                    </div>
                        <?php endif; ?>
                </div>
            </div> <!-- .col-md-12 -->
        </div>
    </div><!-- end: page-container-->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.glavniLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>