<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();

        ?>

        <div class="container single py-5">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <article>
                        <?php the_title(); ?>
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
        </div>

        <?php

    endwhile;
endif;

get_footer();
