<?php $__env->startSection('cont'); ?>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo e(asset('/')); ?>images/bg-01.jpg');">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">NASLOV</th>
                    <th scope="col">OPIS</th>
                    <th scope="col">SKRACENI OPIS</th>
                    <th scope="col">DATUM</th>
                    <th scope="col">SLIKA</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td scope="row"><?php echo e($p->IdPost); ?></td>
                        <th ><?php echo e($p->Naslov); ?></th>
                        <td><textarea><?php echo e($p->Opis); ?></textarea></td>
                        <td><?php echo e($p->SkraceniOpis); ?></td>
                        <td><?php echo e($p->Datum); ?></td>
                        <td><img src="<?php echo e(asset('/').$p->Putanja); ?>" width="100px" height="100px alt="<?php echo e($p->Alt); ?>"/> </td>
                        <td><a href="<?php echo e(route("post.edit",['post'=>$p->IdPost])); ?>"><input type="submit" class="btn btn-primary" value="EDIT"/></a></td>
                        <td><form action="<?php echo e(route("post.destroy",['komentar'=>$p->IdPost])); ?>" method="post"> <?php echo e(method_field('DELETE')); ?> <?php echo csrf_field(); ?> <a href="#"><input type="submit" class="btn btn-primary" value="DELETE"/></a></form></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <?php echo e($post->render()); ?>


            <div class="flex-col-c p-t-155">
                <a href="<?php echo e(route('post.create')); ?>" class="txt2">
                    <input type="submit" class="btn btn-primary" value="INSERT"/>
                </a>
            </div>
            <div class="flex-col-c p-t-155">
                <a href="<?php echo e(asset('/admin')); ?>" class="txt2">
                    <input type="submit" class="btn btn-primary" value="BACK TO ADMIN"/>
                </a>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.loglayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>