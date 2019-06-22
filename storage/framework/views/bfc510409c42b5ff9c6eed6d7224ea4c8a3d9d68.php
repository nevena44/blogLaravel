<?php $__env->startSection('cont'); ?>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo e(asset('/')); ?>images/bg-01.jpg');">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">PHOTO</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $slika; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($s->IdSlika); ?></th>
                        <td><img src="<?php echo e(asset('/').$s->Putanja); ?>" width="100px" height="100px"/></td>
                        <td><?php echo e($s->Alt); ?></td>
                        <td><a href="<?php echo e(route("slika.edit",['slika'=>$s->IdSlika])); ?>"><input type="submit" class="btn btn-primary" value="EDIT"/></a></td>
                        <td><form action="<?php echo e(route("slika.destroy",['slika'=>$s->IdSlika])); ?>" method="post"> <?php echo e(method_field('DELETE')); ?> <?php echo csrf_field(); ?> <a href="#"><input type="submit" class="btn btn-primary" value="DELETE"/></a></form></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($slika->render()); ?>

            <div class="flex-col-c p-t-155">
                <a href="<?php echo e(route('slika.create')); ?>" class="txt2">
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