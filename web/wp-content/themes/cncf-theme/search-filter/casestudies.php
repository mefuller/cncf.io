<?php
/**
 * Search & Filter Pro
 *
 * Sample Results Template
 *
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 *
 * Note: these templates are not full page templates, rather
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think
 * of it as a template part
 *
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs
 * and using template tags -
 *
 * http://codex.wordpress.org/Template_Tags
 */

if ( $query->have_posts() ) {
	if ( 'cncf_case_study_ch' === $query->query['post_type'] ) {
		echo '发现' . esc_html( $query->found_posts ) . '个案例研究';
	} else {
		echo 'Found ' . esc_html( $query->found_posts ) . ' Case Studies';
	}

	while ( $query->have_posts() ) {
		$query->the_post();
		?>
		<div class="result-item">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><br /><?php the_excerpt(); ?></p>
			<?php
			if ( has_post_thumbnail() ) {
				echo '<p>';
				the_post_thumbnail( 'small' );
				echo '</p>';
			}
			?>
			<p><?php the_category(); ?></p>
			<p><?php the_tags(); ?></p>
			<p><small><?php the_date(); ?></small></p>
		</div>
		<hr />
		<?php
	}
} else {
	echo 'No Results Found';
}
