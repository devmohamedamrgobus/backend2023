<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>edit category</h1>

        <form action="../update" method="post">
            <input type="text" value="<?php echo e($data['name']); ?>" name="name">
            <input type="hidden" value="<?php echo e($data['id']); ?>" name="id">
            <input type="submit" value="update">
        </form>
    </body>
</html><?php /**PATH C:\laragon\www\backend2023\session19\src\views/edit.blade.php ENDPATH**/ ?>