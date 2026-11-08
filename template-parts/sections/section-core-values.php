<?php
/**
 * Section 2: DepEd Core Values & Institutional Pillars (Clean Modern Grid)
 *
 * @package Mat-I
 */

$mat_i_cv_data = get_option( 'mat_i_core_values', array() );
$cv_heading    = ! empty( $mat_i_cv_data['heading'] ) ? $mat_i_cv_data['heading'] : 'DepEd Core Values';
$cv_desc       = ! empty( $mat_i_cv_data['description'] ) ? $mat_i_cv_data['description'] : 'Anchored in Republic Act No. 8491, MAT-I National High School cultivates learners who champion academic diligence, moral uprightness, and dedicated citizenship.';
$cv_values     = ! empty( $mat_i_cv_data['values'] ) && is_array( $mat_i_cv_data['values'] ) ? $mat_i_cv_data['values'] : array(
	array( 'key' => 'diyos', 'title' => 'Maka-Diyos', 'desc' => 'Cultivating spiritual grounding, moral discernment, truthfulness, and ethical responsibility in daily school life.' ),
	array( 'key' => 'tao', 'title' => 'Makatao', 'desc' => 'Fostering empathy, inclusivity, peer respect, and collaborative spirit that celebrates diverse learner potentials.' ),
	array( 'key' => 'kalikasan', 'title' => 'Makakalikasan', 'desc' => 'Championing ecological stewardship, clean habits, campus greening, and community disaster preparedness.' ),
	array( 'key' => 'bansa', 'title' => 'Makabansa', 'desc' => 'Inspiring national pride, cultural appreciation, civic awareness, and selfless service to the Filipino nation.' ),
);

$cv_theme_classes = array(
	0 => 'cv-gold',
	1 => 'cv-navy',
	2 => 'cv-green',
	3 => 'cv-maroon',
);

$cv_icons = array(
	0 => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>',
	1 => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
	2 => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>',
	3 => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>',
);
?>

<section id="about-overview" class="institutional-section">
	<div class="container">
		<!-- Section Header -->
		<div class="institutional-header">
			<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
				<div class="institutional-badge-row">
					<button type="button" class="btn-fast-edit-section" data-section="core_values" title="Edit DepEd Core Values" style="background: rgba(16,42,87,0.08); border: 1px solid rgba(16,42,87,0.18); color: #102A57; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 9999px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px; vertical-align: middle;">
						<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
						<span>Edit Values</span>
					</button>
				</div>
			<?php endif; ?>
			<h2 class="institutional-title-navy" id="coreValuesHeading"><?php echo esc_html( $cv_heading ); ?></h2>
			<div class="institutional-accent-dashes" aria-hidden="true">
				<span class="dash-gold"></span>
				<span class="dash-navy"></span>
				<span class="dash-green"></span>
				<span class="dash-maroon"></span>
			</div>
			<p class="institutional-subtitle" id="coreValuesDesc"><?php echo esc_html( $cv_desc ); ?></p>
		</div>

		<!-- 4 Core Values Flow Grid -->
		<div class="core-values-flow-wrapper">
			<div class="core-values-grid core-values-flow-grid" id="coreValuesGrid">
				<?php 
				$total_vals = count( $cv_values );
				foreach ( $cv_values as $idx => $val ) : 
					$theme_cls  = isset( $cv_theme_classes[ $idx ] ) ? $cv_theme_classes[ $idx ] : '';
					$is_top_arc = ( 0 === ( $idx % 2 ) );
				?>
					<div class="core-value-node <?php echo esc_attr( $theme_cls ); ?>" data-flow="<?php echo $is_top_arc ? 'top' : 'bottom'; ?>">
						<!-- Continuous Connecting Arc Line -->
						<svg class="cv-arc-track" viewBox="0 0 270 270" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
							<?php if ( $is_top_arc ) : ?>
								<path class="cv-arc-path" d="M 0 135 A 135 135 0 0 1 270 135" />
							<?php else : ?>
								<path class="cv-arc-path" d="M 0 135 A 135 135 0 0 0 270 135" />
							<?php endif; ?>
						</svg>

						<!-- Circular Core Value Card -->
						<div class="core-value-card <?php echo esc_attr( $theme_cls ); ?>" id="coreValueCard-<?php echo esc_attr( $idx ); ?>">
							<div class="core-value-icon">
								<?php echo isset( $cv_icons[ $idx ] ) ? $cv_icons[ $idx ] : ''; ?>
							</div>
							<h3 class="core-value-title"><?php echo esc_html( $val['title'] ); ?></h3>
							<p class="core-value-desc"><?php echo esc_html( $val['desc'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
