<nav id="colorlib-main-nav" role="navigation">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
    <div class="js-fullheight colorlib-table">
        <div class="colorlib-table-cell js-fullheight">
            <div class="row d-flex justify-content-end">
                <div class="col-md-12 px-5">
                    <ul class="mb-5">
                        <li class="active"><a href="<?php echo e(route('index')); ?>"><span>Home</span></a></li>
                        <li><a href="<?php echo e(route('auth')); ?>"><span>About author</span></a></li>
                        <?php if(!session()->has('user')): ?>
                        <li><a href="<?php echo e(route('log')); ?>"><span>Log in / Register</span></a> </li><?php endif; ?>
                        <?php if(session()->has('user')): ?>
                            <li><a href="<?php echo e(route('logout')); ?>"><span>Logout</span></a> </li>
                            <li><a href="<?php echo e(route('contact')); ?>"><span>Contact</span></a></li>
                            <?php if(session()->get('user')->Naziv=='Admin'): ?>
                            <li><a href="<?php echo e(asset('/admin')); ?>"><span>Admin panel</span></a> </li><?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col px-5 copyright">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br> | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                </div>
            </div>
        </div>
    </div>
</nav>