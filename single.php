<?php 
/**
 * Single.php
 *
 * @package Carte Blanche
 * @since 2014
 */
get_header();
if( have_posts() ): while( have_posts() ): the_post();?>
<div class="row-fluid page-contents single-contents">

</div>
<?php

endwhile;
else:

	get_template_part( 'templates/not-found' );

endif;
get_footer();?>