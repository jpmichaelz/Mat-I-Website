<?php
/**
 * Section 2: DepEd Core Values & Institutional Pillars (Light Executive Layout)
 *
 * @package Mat-I
 */

$mat_i_cv_data = get_option( 'mat_i_core_values', array() );
$cv_badge      = ! empty( $mat_i_cv_data['badge'] ) ? $mat_i_cv_data['badge'] : 'FOUNDATION OF CHARACTER';
$cv_heading    = ! empty( $mat_i_cv_data['heading'] ) ? $mat_i_cv_data['heading'] : 'DepEd Core Values & Institutional Foundations';
$cv_desc       = ! empty( $mat_i_cv_data['description'] ) ? $mat_i_cv_data['description'] : 'Anchored in Republic Act No. 8491, MAT-I National High School cultivates learners who champion academic diligence, moral uprightness, and dedicated citizenship in every classroom.';
$cv_values     = ! empty( $mat_i_cv_data['values'] ) && is_array( $mat_i_cv_data['values'] ) ? $mat_i_cv_data['values'] : array(
	array( 'key' => 'diyos', 'title' => 'Maka-Diyos', 'desc' => 'Cultivating spiritual grounding, moral discernment, truthfulness, and ethical responsibility in daily school life.' ),
	array( 'key' => 'tao', 'title' => 'Makatao', 'desc' => 'Fostering empathy, inclusivity, peer respect, and collaborative spirit that celebrates diverse learner potentials.' ),
	array( 'key' => 'kalikasan', 'title' => 'Makakalikasan', 'desc' => 'Championing ecological stewardship, clean habits, campus greening, and community disaster preparedness.' ),
	array( 'key' => 'bansa', 'title' => 'Makabansa', 'desc' => 'Inspiring national pride, cultural appreciation, civic awareness, and selfless service to the Filipino nation.' ),
);

$cv_subtitles = array(
	0 => 'Spiritual & Moral Foundation',
	1 => 'Human Dignity & Empathy',
	2 => 'Environmental Stewardship',
	3 => 'Patriotism & Civic Duty',
);

$cv_roman = array(
	0 => '01',
	1 => '02',
	2 => '03',
	3 => '04',
);

$cv_links_lbl = ! empty( $mat_i_cv_data['links_label'] ) ? $mat_i_cv_data['links_label'] : 'Explore MAT-I National High School:';
$cv_links     = ! empty( $mat_i_cv_data['links'] ) && is_array( $mat_i_cv_data['links'] ) ? $mat_i_cv_data['links'] : array(
	array( 'label' => 'Vision & Mission', 'url' => home_url( '/mission-vision/' ) ),
	array( 'label' => 'School History (1980)', 'url' => home_url( '/history/' ) ),
	array( 'label' => 'School Seal & Logo', 'url' => home_url( '/school-logo/' ) ),
	array( 'label' => 'Faculty & Organigram', 'url' => home_url( '/organigram/' ) ),
);
?>

<section id="about-overview" class="institutional-section">
	<div class="container">
		<!-- Section Header -->
		<div class="institutional-header">
			<div class="institutional-badge-row">
				<span class="institutional-eyebrow" id="coreValuesBadge"><?php echo esc_html( $cv_badge ); ?></span>
				<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
					<button type="button" class="btn-fast-edit-section" data-section="core_values" title="Edit DepEd Core Values" style="background: rgba(16,42,87,0.08); border: 1px solid rgba(16,42,87,0.18); color: #102A57; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 9999px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px; vertical-align: middle;">
						<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
						<span>Edit Values</span>
					</button>
				<?php endif; ?>
			</div>
			<h2 class="institutional-title-navy" id="coreValuesHeading"><?php echo esc_html( $cv_heading ); ?></h2>
			<p class="institutional-subtitle" id="coreValuesDesc"><?php echo esc_html( $cv_desc ); ?></p>
		</div>

		<!-- 4 Core Values Grid -->
		<div class="core-values-grid" id="coreValuesGrid">
			<?php foreach ( $cv_values as $idx => $val ) : 
				$roman    = isset( $cv_roman[ $idx ] ) ? $cv_roman[ $idx ] : sprintf( '%02d', $idx + 1 );
				$subtitle = isset( $cv_subtitles[ $idx ] ) ? $cv_subtitles[ $idx ] : '';
			?>
				<div class="core-value-card" id="coreValueCard-<?php echo esc_attr( $idx ); ?>">
					<div class="core-value-top-row">
						<span class="core-value-num"><?php echo esc_html( $roman ); ?></span>
						<div class="core-value-dot-accent" aria-hidden="true"></div>
					</div>
					<h3 class="core-value-title"><?php echo esc_html( $val['title'] ); ?></h3>
					<?php if ( ! empty( $subtitle ) ) : ?>
						<div class="core-value-subtitle"><?php echo esc_html( $subtitle ); ?></div>
					<?php endif; ?>
					<p class="core-value-desc"><?php echo esc_html( $val['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Institutional Links Bar -->
		<div class="institutional-links-bar">
			<div style="display: flex; align-items: center; gap: 0.6rem;">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FF851A" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
				<span style="font-size: 13.5px; font-weight: 700; color: #102A57;" id="coreValuesLinksLabel"><?php echo esc_html( $cv_links_lbl ); ?></span>
			</div>
			<div class="institutional-links-group" id="coreValuesLinksGroup">
				<?php foreach ( $cv_links as $l_item ) : ?>
					<a href="<?php echo esc_url( $l_item['url'] ); ?>" class="institutional-btn-pill">
						<span><?php echo esc_html( $l_item['label'] ); ?></span>
						<span>&rarr;</span>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
