<div id="content">
        <h2>You may use this template in any manner you like. All I ask is that you leave the link back to my site at the bottom of the page. </h2>
        <p>&nbsp;</p>
                <p>&nbsp;</p>

        <?php while(have_posts()) : the_post();?>
                <h3> <a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>

                <?php if( is_single() ) : ?>
                        <p><?php the_content(); ?></p>
                <?php else: ?>
                        <?php 
                                $readmore = '<p><a href="'.get_permalink().'">read more </a></P>';
                                echo wp_trim_words(get_the_content(), 5, $readmore); ?>
                <p>&nbsp;</p>
                <?php endif; ?>
                                        
        <?php endwhile;?>