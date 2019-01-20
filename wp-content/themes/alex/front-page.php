<?php get_header(); ?>
        <main>
            <section id='leistungen'>
                <h2>Leistungen</h2>
                <article>
                    <h3>Design</h3>
                    <img src='<?php echo get_template_directory_uri(); ?>/images/design.svg' alt='Malutensilien'>
                </article>
                <article>
                    <h3>Strategie</h3>
                    <img src='<?php echo get_template_directory_uri(); ?>/images/strategy.svg' alt='Zielscheibe'>
                </article>
                <article>
                    <h3>Consulting</h3>
                    <img src='<?php echo get_template_directory_uri(); ?>/images/consulting.svg' alt='Consulting'>
                </article>
            </section>

            <section id='news'>
                <h2>News</h2>
                <?php
                $news_query = new WP_Query( 'order=ASC&category_name=news&limit=3' );
                if ( $news_query->have_posts() ) :
                    while ( $news_query->have_posts()  ) : $news_query->the_post(); ?>
                    <article>
                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> – </h3> <?php the_content("[mehr erfahren]"); ?>
                    </article>
                    <?php endwhile;
                else : ?>
                    <p>Erster News-Beitrag demnächst...</p>
                <?php endif; 
                wp_reset_postdata();?>
            </section>

            <section id='referenzen'>
                <h2>Referenzen</h2>
                <?php
                $referenzen_query = new WP_Query( 'order=ASC&category_name=referenz&limit=3' );
                if ( $referenzen_query->have_posts() ) :
                    while ( $referenzen_query->have_posts()  ) : $referenzen_query->the_post(); ?>
                    <article>
                        <?php the_post_thumbnail(); ?>
                <p><cite><?php the_title(); ?><br><?php the_field('firma'); ?></cite></p>
                        <blockquote>
                        <p><?php the_field('zitat');?></p>
                        <?php edit_post_link();?>
                        </blockquote>
                    </article>
                    <?php endwhile;
                else : ?>
                    <p>Erste Referenz demnächst...</p>
                <?php endif; 
                wp_reset_postdata();?>
                <div class='bluebox'></div>
            </section>
        </main>
        <footer>
    <div class='footerlayout'>
        <div>
            <p>&copy; Alex Mayer 2018</p>
        </div>
        <div>
            <a href='/index.php/impressum/'>Impressum</a>
            <a href='index.php/privacy-policy/'>Datenschutzerklärung</a>
        </div>
        <div>
            <p>Demo-Wordpress-Seite im Rahmen der LV ‚Content Mangagement Systeme‘ an der FH Salzburg von Vorname Nachname und Vorname Nachname</p> 
            <p>Alle Inhalte frei erfunden</p>
        </div>
    </div>
    <h2>Bildnachweis</h2>
    </div>
    <h3>Fotos</h3>
    <ul>
        <li>Herofoto Tastatur: Aman Anderson, http://de.freeimages.com/photo/illuminated-keyboard-124228</li>
        <li>Foto Thomas Meyer-Hermann By Thomas Meyer-Hermann (Thomas Meyer-Hermann) [GFDL (http://www.gnu.org/copyleft/fdl.html), CC BY-SA 3.0 (https://creativecommons.org/licenses/by-sa/3.0) or CC BY-SA 3.0 de (https://creativecommons.org/licenses/by-sa/3.0/de/deed.en)], via Wikimedia Commons https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Thomas_Meyer-Hermann_1.jpg/407px-Thomas_Meyer-Hermann_1.jpg</li>
        <li>Foto Vorstand Sparkasse Ülzen [[File:SKUelzen Vorstand 2015.jpg|SKUelzen Vorstand 2015]] https://upload.wikimedia.org/wikipedia/commons/3/3e/SKUelzen_Vorstand_2015.jpg</li>
    </ul>
    <h3>Icons</h3>
    <ul>
        <li>Freepik (http://www.freepik.com) / www.flaticon.com</li>
    </ul>
</footer>

        <?php wp_footer(); ?>
</body>
</html>

