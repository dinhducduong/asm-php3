<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('adminhtml.component.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="g-sidenav-show  bg-gray-100">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <?php echo $__env->make('adminhtml.component.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <?php echo $__env->make('adminhtml.component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
            <?php echo $__env->yieldContent('content'); ?>
        <footer class="footer pt-3  ">
        </footer>
    </div>
</main>
<div class="fixed-plugin">
    <?php echo $__env->make('adminhtml.component.setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php echo $__env->make('adminhtml.component.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel\asm_php3\resources\views/adminhtml/home_admin_layout.blade.php ENDPATH**/ ?>