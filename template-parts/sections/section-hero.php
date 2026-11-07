<?php
/**
 * Section 1: Hero Banner
 *
 * @package Mat-I
 */

$mat_i_hero = get_option( 'mat_i_hero_settings', array() );
$hero_hdln  = ! empty( $mat_i_hero['headline'] ) ? $mat_i_hero['headline'] : 'Fostering Academic Excellence & Diligence in Every Classroom';
$hero_hdln  = str_replace( array( "\r\n", "\r", "\n" ), ' ', $hero_hdln );
$hero_para  = ! empty( $mat_i_hero['paragraph'] ) ? $mat_i_hero['paragraph'] : 'Inside MAT-I National High School: Dedicated learners focused on academic assessments, demonstrating the discipline, knowledge, and integrity that pave the way for a brighter future.';
$default_hero_img = get_template_directory_uri() . '/assets/images/gallery/762883149_2269467343810827_7376923528895751416_n.jpg';
$hero_img   = ( ! empty( $mat_i_hero['banner_image'] ) && false === strpos( $mat_i_hero['banner_image'], '/assets/images/hero.jpg' ) ) ? $mat_i_hero['banner_image'] : $default_hero_img;
$cta1_text  = ! empty( $mat_i_hero['cta1_text'] ) ? $mat_i_hero['cta1_text'] : 'Apply now';
$cta1_link  = ! empty( $mat_i_hero['cta1_link'] ) ? $mat_i_hero['cta1_link'] : '#enroll';
?>

<section class="hero-wrapper">
	<!-- Slide Backgrounds (Hero Banner Image) -->
	<div class="hero-slide-bg active" style="background-image: url('<?php echo esc_url( $hero_img ); ?>');"></div>
	<div class="hero-slide-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery/755128667_1560909172157301_7353550430619288290_n.jpg' ); ?>');"></div>
	<div class="hero-slide-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.jpg' ); ?>');"></div>

	<!-- Gradient Overlay (Bottom-Heavy / Left-Heavy) -->
	<div class="hero-overlay"></div>

	<div class="container hero-container">
		<div class="hero-content-bottom-left animate-fadeInUp">
			<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
				<div style="margin-bottom: 0.65rem;">
					<button type="button" class="btn-fast-edit-section" data-section="hero" title="Edit Hero Section" style="background: rgba(255,133,26,0.9); border: none; color: #FFFFFF; font-size: 11px; font-weight: 700; padding: 3px 10px; border-radius: 9999px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.25);">
						<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
						<span>Edit Hero</span>
					</button>
				</div>
			<?php endif; ?>

			<h1 class="hero-heading" id="heroSlideHeading"><?php echo esc_html( $hero_hdln ); ?></h1>
			<p class="hero-para" id="heroSlidePara">
				<?php echo esc_html( $hero_para ); ?>
			</p>
			<div class="hero-cta-buttons">
				<a href="<?php echo esc_url( $cta1_link ); ?>" class="btn-hero-primary btn-hero-pill open-beef-btn" id="heroCta1">
					<span><?php echo esc_html( $cta1_text ); ?></span>
					<span class="pill-arrow-circle">
						<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
					</span>
				</a>
			</div>
		</div>
	</div>

	<!-- Hero Slider Floating Side Arrows -->
	<button type="button" class="hero-nav-arrow hero-arrow-prev" aria-label="Previous slide">
		<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
	</button>
	<button type="button" class="hero-nav-arrow hero-arrow-next" aria-label="Next slide">
		<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
	</button>

	<!-- Hero Slider Navigation Dots -->
	<div class="hero-dots-container" aria-label="Hero slider navigation">
		<button type="button" class="hero-dot active" aria-label="Slide 1"></button>
		<button type="button" class="hero-dot" aria-label="Slide 2"></button>
		<button type="button" class="hero-dot" aria-label="Slide 3"></button>
	</div>
</section>
