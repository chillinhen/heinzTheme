        <article id="post-404">
            <?php
            $headline404 = get_field('404_headline', 'option');
            $text404 = get_field('404_text', 'option');
            $link404 = get_field('404_link', 'option');
            
            echo '<h1>'. $headline404 .'</h1>';
            echo $text404;
            
            ?>

            <footer>
                <a href="<?php echo home_url(); ?>"><?php echo $link404; ?></a>
            </footer>

        </article>