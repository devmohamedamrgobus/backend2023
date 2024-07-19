<h1> <?php echo e($name); ?> </h1>


<?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <li><?php echo e($c); ?></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\laragon\www\backend2023\session15\src\views/home.blade.php ENDPATH**/ ?>