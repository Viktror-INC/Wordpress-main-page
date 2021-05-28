<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 24.03.2020
     * Time: 15:48
     */
get_header();
    $category = get_queried_object();
    $cat_id = $category->term_id;
    if($cat_id=='7') {
        include get_template_directory() . '/archive-service.php';
    }
    else{
    ?>
    <section class="blog-header">
        <div class="container">
            <div class="header">
                <h1><?= get_cat_name($cat_id); ?></h1>
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' ▷ '); ?>
            </div>
        </div>
    </section>
    <main>
        <div class="container">
            <div class="tags">
                <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                    <?php
                    if( $terms = get_terms( array( 'taxonomy' => 'post_tag', 'orderby' => 'name' ) ) ) :
                        $count = 0;
                        foreach ( $terms as $term ){
                            $count++;
                            echo '<label for="tax-'.$count.'"><input type="radio" id="tax-'.$count.'" name="categoryfilter"  value="' . $term->term_id . '"/>' . $term->name . '</label>';
                        }
                    endif;
                    ?>
                    <input type="hidden" name="action" value="myfilter">
                </form>
            </div>
            <?php
            $params = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $all_posts = get_posts($params);?>
            <div id="articles_list">
                <?php if(!empty($all_posts) ){
                    foreach( $all_posts as $post_single ){ ?>
                    <article>
                        <?php
                        if(!empty(get_the_post_thumbnail_url($post_single->ID))){ ?>
                            <div class="img-thumbnail" style="background: url('<?= get_the_post_thumbnail_url($post_single->ID);?>') center no-repeat;background-size:cover;"></div>
                        <?php } else { ?>
                        <div class="img-thumbnail"></div>
                        <?php } ?>

                        <div class="article-block">
                            <div class="article-info">
                                <div class="article-author">
                                    <?php $author_id = $post_single->post_author; ?>
                                    <div class="img-author"><?= get_avatar(get_the_author_meta($post_single->ID)); ?></div>
                                    <p><?= get_the_author_meta('display_name', $author_id);?></p>
                                </div>
                                <div class="article-title">
                                    <h2><?= get_the_title($post_single); ?></h2>
                                    <div class="article-details">
                                        <p><i class="icon-date"></i><?= get_the_date( 'd.m.Y', $post_single->ID);?></p><p><i class="icon-view"></i><?php echo get_post_meta($post_single->ID,'views',true); ?></p>
                                    </div>
                                </div>
                            </div>
                            <p><?= get_the_excerpt($post_single->ID);?></p>
                            <div class="article-footer">
                                <?php
                                $post_tags = get_the_tags($post_single);
                                echo '<ul>';
                                foreach( $post_tags as $tagpost ) {
                                    echo '<li>' . $tagpost->name . '</li>';
                                }
                                echo '</ul>';
                                ?>
                                <a href="<?php the_permalink($post_single->ID); ?>" class="btn">Подробнее</a>
                            </div>
                        </div>
                    </article>
                <?php } } else { echo "<h2>Записей нет.</h2>"; }?>
            </div>
            <div class="short-product-block">
                <div class="thumbnail"></div>
                <h2>Submit</h2>
                <p><strong>Более 300 площадок</strong> для сабмита, которые обеспечат вашему проекту стартовое ссылочное – именно ту необходимую подушку, что бы потом строить анкорные ссылки и не ссать что фильтранет за анкор.</p>
                <a href="https://t.me/linkotop" class="btn btn-order">Заказать</a>
            </div>
<!--            <a href="#" class="btn btn-archive">Архив</a>-->
        </div>


    </main>
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
            </div>
        </section>
<?php }
get_footer();
?>

