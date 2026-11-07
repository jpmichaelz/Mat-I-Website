<?php
/**
 * The front page template for MAT-I National High School
 *
 * @package Mat-I
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	// Section 1: Hero Banner
	get_template_part( 'template-parts/sections/section', 'hero' );

	// Section 2: Core Values & DepEd Pillars
	get_template_part( 'template-parts/sections/section', 'core-values' );

	// Section 3: School Services & Citizen's Charter Hub
	get_template_part( 'template-parts/sections/section', 'services-hub' );

	// Section 4: Academic Programs & Curriculum Offerings
	get_template_part( 'template-parts/sections/section', 'programs' );

	// Section 5: Principal's Welcome & Leadership Spotlight
	get_template_part( 'template-parts/sections/section', 'principal' );

	// Section 6: News & Official Bulletins
	get_template_part( 'template-parts/sections/section', 'news' );

	// Section 7: Admissions & 4-Step Enrollment Guide
	get_template_part( 'template-parts/sections/section', 'admissions' );

	// Interactive Modals (Strand, BEEF, News Admin)
	get_template_part( 'template-parts/sections/section', 'modals' );
	?>

</main><!-- #main -->

<?php
get_footer();
