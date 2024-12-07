
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php
    // آرگومان‌ها برای دریافت تصاویر از رسانه
    $args = array(
        'post_type' => 'attachment', // نوع پست برای رسانه
        'post_mime_type' => 'image', // فقط تصاویر
        'post_status' => 'inherit', // وضعیت پست
        'posts_per_page' => -1, // تعداد بی‌نهایت
    );

    // اجرای کوئری
    $images = get_posts($args);
    
    // بررسی وجود تصاویر
    if ($images) {
        $total_images = count($images); // تعداد کل تصاویر
        foreach ($images as $index => $image) {
            $img_url = wp_get_attachment_image_url($image->ID, 'full'); // دریافت URL تصویر
            if(esc_attr($image->post_title) == 'Slider'){
                
                ?>
            <div class="carousel-item <?php if (esc_attr($image->post_title) == 'Slider') echo 'active'; ?>">
                <img class="d-block w-100" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($image->post_title); ?>">
            </div>
            <?php
            }
        }
    } else {
        echo '<div class="carousel-item active"><p>No images found.</p></div>';
    }
    ?>
  </div>

</div>
