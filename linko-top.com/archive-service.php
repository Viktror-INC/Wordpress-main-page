<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.03.2020
 * Time: 13:08
 */
get_header();
?>

<section class="service">
    <div class="container">
        <h2>Our <i class="arrows"></i> services</h2>
        <div class="items">
            <?php
            $args = array( 'post_type' => 'service', 'posts_per_page' => -1,);
            $attachments = get_posts( $args );
            if ($attachments) {
                foreach ( $attachments as $post ) { setup_postdata($post);?>
                    <a href="<?= get_permalink(); ?>" class="item">
                        <i class="icon-service"></i>
                        <h2><?php the_title();?></h2>
                        <div class="service-description">
                            <?php the_excerpt();?>
                        </div>
                        <span class="btn">Подробнее</span>
                    </a>
                    <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        <?php
        if (!wp_is_mobile() ) {
            if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' ▷ ');
        } ?>
    </div>

</section>
<div>

</div>
    <section class="features">
        <div class="container">
            <div class="item">
                <? $frontpage_id = get_option('page_on_front');?>
                <img src="<?= get_field('Изображение блока Почему мы', $frontpage_id);?>" alt="">
            </div>
            <div class="item">
                <?php
                $var_main_title = get_field('Преимущества', $frontpage_id);
                echo $var_main_title;
                ?>
                <div class="products-list">
                    <h4>Перейти к Услугам:</h4>
                    <?php
                    $args = array( 'post_type' => 'service', 'posts_per_page' => -1,);
                    $attachments = get_posts( $args );
                    if ($attachments) { ?>
                        <ul>
                            <?php foreach ( $attachments as $post ) { setup_postdata($post);?>
                                <li><a href="<?= get_permalink(); ?>"><?php the_title();?></a></li>
                                <?php
                            }?>
                        </ul>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
if(!empty(category_description($cat_id))){ ?>
    <section id="seotext">
        <div class="container text-block">
            <?php echo category_description($cat_id); ?>
        </div>
    </section>
    <?php } ?>

<?php get_footer();?>