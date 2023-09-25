<?php 

$images = get_field('acf_gallery');

$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <div class="carousel-js">
        <?php foreach( $images as $image ):
                <?php echo wp_get_attachment_image( $image['ID'], $size );
        <?php endforeach; ?>
    </div>
<?php endif; ?>
