<?php
/*
 Template name: Our History
*/
?>

<?php
get_header();
?>

<div class="aboutus">
            <div class="container">
                <h1 class="title"><?php the_field('story_title', 2); ?>
        </h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story1_title', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story1', 2); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                $image = get_field('about1_img');

                if (!empty($image)): ?>
                    <img class="aboutus__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php endif;
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php
                $image = get_field('about2_img');

                if (!empty($image)): ?>
                    <img class="aboutus__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php endif;
                ?>
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story2_title', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story2', 2); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story3_title', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story3', 2); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                $image = get_field('about3_img');

                if (!empty($image)): ?>
                    <img class="aboutus__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php

?>

<?php get_footer();
?>