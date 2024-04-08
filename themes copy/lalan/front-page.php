<?php get_header() ?>
<!-- <h1><?php bloginfo( 'name' ); ?></h1>
<h2><?php bloginfo( 'description' ); ?></h2> -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="slider">
    <div class="container">
        <h1>Find your dream job now <span>.</span></h1>
        <span class="line"></span>
        <p>Building belonging through diversity, equity and inclusion. Join Us.</p>
        <a href="" class="btn-dicover">SIGN-UP NOW</a>
    </div>
    <div class="left-frame">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/women.png" alt="">
    </div>
</section>

<section class="search">
    <div class="left-frame">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/frame-right.png" alt="">
    </div>
    <div class="container">
        <div class="search-title">
            <div class="bg-title">
                JOBS
            </div>
            <h2>JOBS SEARCH</h2>
            <span>Search By Reference</span>
        </div>
        <div class="search-bar">
            <div class="search-input">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/search.png" alt="">
                </div>
                <input type="text" placeholder="Enter Search Keywords">
                
            </div>
            <div class="search-area">
            <div class="select-search">
                All Categories
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/b-arrow.png" alt="">
            </div>
            <div class="btn-search">
                Search
            </div>
            </div>
        </div>
        <div class="search-diversity">
            <h2>Select Your Diversity </h2>
            <div class="diversities">
                <a href="#" class="diversity">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/diversity-1.png" alt="">
                    </div>
                    <span class="title">
                    FEMALE
                    </span>
                </a>
                <a href="#"  class="diversity">
                    <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/diversity-2.png" alt="">
                    </div>
                    <span class="title">
                        QUEER
                    </span>
                </a>
                <a href="#"  class="diversity">
                    <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/diversity-3.png" alt="">
                    </div>
                    <span class="title">
                        ABLE
                    </span>
                </a>
                <a href="#"  class="diversity">
                    <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/diversity-4.png" alt="">
                    </div>
                    <span class="title">
                        VETERAN
                    </span>
                </a>
                <a href="#"  class="diversity">
                    <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/diversity-5.png" alt="">
                    </div>
                    <span class="title">
                        SILVERGEN
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="right-frame">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/frame-left.png" alt="">
    </div>
</section>
<section class="search-jobs">
    <div class="left-frame">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/bg-jobs-top.png" alt="">
    </div>
    <div class="container">
        <div class="search-jobs-title">
            <h2>JOBS</h2>
            <span>
                Recent Jobs
            </span>
        </div>
        <?php
                    $args_jobs = array(
                        'post_type' => 'job',
                        'posts_per_page' => 6
                        // Several more arguments could go here. Last one without a comma.
                    );
                    $jobs_query = new WP_Query($args_jobs);
                    // var_dump($jobs_query);
                    $index = 1;
                    ?>
        <div class="job-boxs">
            <?php while ($jobs_query->have_posts()) : $jobs_query->the_post();
            // $args_t = array(
            //     'post_type' => 'job',
            //     'taxonomy'  => 'company'
            //    );
            //    $comp = get_terms( $args_t );
            //    var_dump($comp);
            ?>

            <div class="job-box">
                <div class="icon">
                  
                    <?php $terms = wp_get_post_terms( $jobs_query->post->ID, array( 'company') ); ?>
                    <?php foreach ( $terms as $term ) : ?>
                    <?php $image = get_field('company_image', 'company' . '_' . $term->term_id); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_html( $term->name ); ?>">
                    <?php endforeach; ?>
                       
                </div>
                <h2><?php echo the_title(); ?></h2>
                <h3><?php  echo $exp = get_field('experience_required',  get_the_ID()); ?> Years of Experience</h3>
                <h3><?php  echo $exp = get_field('location',  get_the_ID()); ?> | <?php  echo $exp = get_field('type',  get_the_ID()); ?></h3>
                <a href="" class="btn-explore">EXPLORE</a>
            </div>
            <?php endwhile; ?>


      
        </div>
        <div class="search-jobs-btn">
            <a href="#" >FIND MORE</a>
        </div>
    </div>
    <div class="right-frame">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/bg-jobs-bottom.png" alt="">
    </div>
</section>
<section class="featured-companies">
            <div class="container">
                <h2>Featured Companies</h2>
                <?php 
// $term = get_field('company');
$terms = get_terms([
    'company' => $taxonomy,
    'taxonomy' => 'company',
    'hide_empty' => false,
]);
?>

                <div class="company-boxs">
                <?php if( $terms): ?>
                <?php foreach( $terms as $term ): ?>
                    <!-- <?php  //var_dump($term)?> -->

                    <?php if($term->term_id != 1): ?>
                    <a href="" class="company-box">
                        <?php $image = get_field('company_image', 'company' . '_' . $term->term_id); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_html( $term->name ); ?>">
                    </a>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>
                   
                </div>
            </div>
        </section>
        <section class="testimonials">
            <div class="container">
                <div class="left">
                    <div class="testemonial-title">
                       <div class="bg-title">
                            Testimonials
                       </div>
                       <h2>CLIENT TESTEMONIALS</h2>
                       <span>
                        What our clients <br> say about us
                       </span>
                    </div>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatibus tempore laborum nihil eum quibusdam. Quo, tenetur, voluptates nulla commodi labore id in, sequi magni minus consequatur quam ullam est!</p>
                    </div>
                    <div class="bg-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/imgs/vague.png" alt="">
                    </div>
                </div>
                <div class="right">
                    <?php
                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => 4
                        // Several more arguments could go here. Last one without a comma.
                    );
                    $obituary_query = new WP_Query($args);
                    $index = 1;
                    ?>
                    <div class="testimonial-boxs">
                        <?php while ($obituary_query->have_posts()) : $obituary_query->the_post(); ?>
                            
                        <div class="testimonial-box testimonial-box-<?php  echo $index ?>">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/imgs/q-testimonial.png" alt="">
                            </div>
                            <?php echo the_content(); ?></p>
                            <div class="testimonial-user">
                                <div class="icon">
                                <!-- <?php // echo the_post_thumbnail_url(); ?> -->
                                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                                </div>
                                <div class="content">
                                    <h2><?php echo the_title(); ?></h2>
                                    <span><?php echo the_excerpt(); ?></span>
                                </div>
                            </div>
                            <?php $index ++?>
                        </div>
                        <?php endwhile; ?>
                        
                      
                       
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="blog">
            <div class="left-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/line-left.png" alt="">
            </div>
            <div class="container">
                <div class="blog-title">
                    <div class="bg-title">
                        Blogposts
                    </div>
                    <h2>CONTENT</h2>
                    <span>Blog & Newsletter</span>
                </div>
                <div class="blog-newsletter-content">
                    <div class="tabs">
                        <a href="#" class="active">BLOGS<span></span></a>
                        <a href="#">NEWSLETTERS</a>
                    </div>
                    <div class="blogs">
                    <?php
                        $args_articles = array(
                        "numberposts" => 3,
                        // "orderby" => "comment_count"
                        );
                        $posts_array = get_posts($args_articles);
                        foreach($posts_array as $post) { ?>
                        <article class="article">
                            <div class="icon">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <h2><?php echo $post->post_title ?></h2>
                            <p><?php echo $post->post_excerpt ?></p>
                            <a href="<?php echo the_permalink();?>" class="blog-btn">
                                    READ MORE
                            </a>
                        </article>
                 
                        <?php } ?>
                       
                    </div>
                    <div class="newsletter">

                    </div>
                </div>
            </div>
            <div class="right-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/line-right.png" alt="">
            </div>
        </section>
        <section class="contact">
            <div class="left-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/frame-contact-left.png" alt="">
            </div>
            <div class="container">
                <div class="contact-title">
                    <div class="bg-title">
                        Contact
                    </div>
                    <h2>CONTACT FORM</h2>
                    <span>Get in touch with us</span>
                </div>
                <div class="contact-form">
                    <div class="input-box">
                        <label for="">NAME <span>*</span></label>
                        <input type="text" placeholder="your name">
                        <span></span>
                    </div>
                    <div class="input-box">
                        <label for="">EMAIL <span>*</span></label>
                        <input type="text" placeholder="email@email.com">
                        <span></span>
                    </div>
                    <div class="input-box">
                        <label for="">PHONE NUMBER <span>*</span></label>
                        <input type="text" placeholder="+49 136 456 789">
                        <span class="active"></span>
                    </div>
                    <div class="input-box">
                        <label for="">SUBJECT <span>*</span></label>
                        <input type="text" placeholder="subject">
                        <span></span>
                    </div>
                    <div class="input-box">
                        <label for="">MESSAGE <span>*</span></label>
                        <!-- <input type="text" placeholder="your name"> -->
                        <textarea name="" id="" cols="30" rows="2">Type in your message</textarea>
                        <span></span>
                    </div>
                    
                </div>
                <button type="submit"  class="btn-submit">SUBMIT</button>
            </div>
            <div class="right-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/frame-contact-right-1.png" alt="">
            </div>
        </section>

<?php endwhile; ?>


<?php endif; ?>

<?php get_footer() ?>