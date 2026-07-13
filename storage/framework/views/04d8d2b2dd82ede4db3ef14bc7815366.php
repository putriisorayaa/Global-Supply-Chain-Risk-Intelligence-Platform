<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChainPulse</title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
</head>
<body>

<nav style="background:#0d6efd;padding:15px;">

    <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a> |

    <a href="<?php echo e(route('weather')); ?>">Weather</a> |

    <a href="<?php echo e(route('currency')); ?>">Currency</a> |

    <a href="<?php echo e(route('news')); ?>">News</a> |

    <a href="<?php echo e(route('ports')); ?>">Ports</a>

</nav>

<div style="padding:20px">

    <?php echo $__env->yieldContent('content'); ?>

</div>

</body>
</html><?php /**PATH C:\xampp1\htdocs\chainpulse\resources\views/layouts/app.blade.php ENDPATH**/ ?>