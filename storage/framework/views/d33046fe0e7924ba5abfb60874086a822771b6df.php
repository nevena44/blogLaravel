<?php $__env->startSection('cont'); ?>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo e(asset('/')); ?>images/bg-01.jpg');">
            <table class="table">
                <thead>
                <tr>
                    <form action="<?php echo e(asset('/kljucne')); ?>" method="post"> <?php echo csrf_field(); ?>
                    <th scope="col">SORTIRAJ OD</th><td><input type="date" name="od"/></td>
                    <th scope="col">DO</th><td><input type="date" name="do"/></td>
                    <td><input type="submit" name="sortiraj" class="btn btn-primary" value="SORT"/> </td></form>
                </tr>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">USER</th>
                    <th scope="col">AKTIVNOST</th>
                    <th scope="col">DATUM</th>

                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $klju; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($k->IdKljucne); ?></th>
                        <td><?php echo e($k->Korisnik); ?></td>
                        <td><?php echo e($k->Opis); ?></td>
                        <td><?php echo e($k->Datum); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="flex-col-c p-t-155">
                <a href="<?php echo e(asset('/admin')); ?>" class="txt2">
                    <input type="submit" class="btn btn-primary" value="BACK TO ADMIN"/>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.loglayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>