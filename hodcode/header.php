<?php
    $inDir = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $inDir?>/style.css">
    <link rel="stylesheet" href="<?= $inDir?>/assets/css/bootstrap.rtl.min.css">
    <script src="<?= $inDir ?>/assets/js/bootstrap.bundle.min.js"></script>
    <title>hodeCode</title>
</head>
 <style>
    @font-face {
        font-family: peyda;
        src: url("<?= $inDir?>/assets/font/PeydaWeb-Bold.woff2");
    }

    body{
        font-family: peyda;
    }
 </style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container">
                <a class="navbar-brand" href=".">
                <img src="<?= $inDir ?>/assets/logo.svg" alt="<?= get_bloginfo('name') ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header', // تغییر به 'header'
                            'container' => false,
                            'items_wrap' => '%3$s', // حذف <ul> اضافی
                        ));
                    ?> 
                </ul>
            </div>
        </div>
    </nav>
</header>



