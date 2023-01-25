<?php
/**
 * The template part for displaying a message that posts cannot be found.
 * @package Gym Training Coach
 */
?>

<header role="banner">
	<?php if( get_theme_mod('gym_training_coach_no_search_result_heading','Nothing Found') != ''){ ?>
		<h2 class="entry-title"><?php echo esc_html(get_theme_mod('gym_training_coach_no_search_result_heading',__('Nothing Found','gym-training-coach')));?></h2>
	<?php } ?>
</header>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.','gym-training-coach'), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html(get_theme_mod('gym_training_coach_no_search_result_text',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','gym-training-coach')));?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Dont worry it happens to the best of us.', 'gym-training-coach' ); ?></p><br />
	<div class="read-moresec my-5 mx-0">
		<a href="<?php echo esc_url( home_url() ); ?>" class="button mt-3 mx-0 mb-0 py-2 px-3"><?php esc_html_e( 'Back to Home Page', 'gym-training-coach' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page', 'gym-training-coach' ); ?></span></a>
	</div>
<?php endif; ?>