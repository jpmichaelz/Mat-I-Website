<?php
/**
 * Section 7: Admissions & 4-Step Enrollment Guide
 *
 * @package Mat-I
 */

$mat_i_adm_data = get_option( 'mat_i_admissions_settings', array() );
$adm_badge      = ! empty( $mat_i_adm_data['badge'] ) ? $mat_i_adm_data['badge'] : 'OFFICIAL ADMISSIONS';
$adm_title      = ! empty( $mat_i_adm_data['title'] ) ? $mat_i_adm_data['title'] : 'Enroll at MAT-I National High School';
$adm_desc       = ! empty( $mat_i_adm_data['description'] ) ? $mat_i_adm_data['description'] : 'Join a nurturing public academic community committed to character formation, scholastic competence, and leadership development.';
$adm_img        = ! empty( $mat_i_adm_data['image_url'] ) ? $mat_i_adm_data['image_url'] : 'https://images.unsplash.com/photo-1736496503629-2d64fafca24e?w=800&h=600&fit=crop&auto=format';
$adm_steps      = ! empty( $mat_i_adm_data['steps'] ) && is_array( $mat_i_adm_data['steps'] ) ? $mat_i_adm_data['steps'] : array(
	array( 'num' => '1', 'title' => 'Submit BEEF Form', 'desc' => 'Accomplish the official DepEd registration form.' ),
	array( 'num' => '2', 'title' => 'Document Check', 'desc' => 'Present PSA Birth Certificate & Form 138/SF9.' ),
	array( 'num' => '3', 'title' => 'Strand Interview', 'desc' => 'Career profiling for Senior High applicants.' ),
	array( 'num' => '4', 'title' => 'Section Assignment', 'desc' => 'Receive official certificate of enrollment.' ),
);
?>

<section id="enroll" class="enrollment-panel-grid">
	<div class="enrollment-left-img" id="enrollmentBgImg" style="background-image: url('<?php echo esc_url( $adm_img ); ?>');">
		<div class="enrollment-img-overlay-tint"></div>
		<div class="enrollment-floating-badge">
			<div class="enrollment-badge-pulse-row">
				<span class="enrollment-pulse-dot"></span>
				<span class="enrollment-pulse-text">S.Y. 2025–2026 Admissions Open</span>
			</div>
			<div class="enrollment-badge-sub">DepEd Free Secondary Public Education · No Collection Policy</div>
		</div>
	</div>
	<div class="enrollment-right-navy">
		<div style="display: flex; align-items: center; gap: 8px; margin-bottom: 0.4rem;">
			<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;" id="admissionsBadge"><?php echo esc_html( $adm_badge ); ?></span>
			<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
				<button type="button" class="btn-fast-edit-section" data-section="admissions" title="Edit Admissions Process" style="background: rgba(255,133,26,0.9); border: none; color: #FFFFFF; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 9999px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px;">
					<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
					<span>Edit Admissions</span>
				</button>
			<?php endif; ?>
		</div>
		<h2 id="admissionsTitle" style="font-size: clamp(22px, 3vw, 32px); font-weight: 700; color: #FFFFFF; line-height: 1.25; margin-bottom: 0.85rem;"><?php echo esc_html( $adm_title ); ?></h2>
		<p id="admissionsDesc" style="color: rgba(255,255,255,0.85); font-size: 14px; line-height: 1.6; margin-bottom: 1.5rem; max-width: 540px;">
			<?php echo esc_html( $adm_desc ); ?>
		</p>

		<!-- 4-Step On-Page Visual Pathway (2x2 Grid with Interactive Triggers) -->
		<div class="enroll-steps-grid enroll-steps-2x2" id="admissionsStepsGrid">
			<?php foreach ( $adm_steps as $step_idx => $step ) :
				$step_num = ! empty( $step['num'] ) ? $step['num'] : ( $step_idx + 1 );
				$is_beef   = ( '1' == $step_num );
				$is_strand = ( '3' == $step_num );
				$extra_class = $is_beef ? 'open-beef-btn' : ( $is_strand ? 'strand-details-btn' : '' );
				$extra_attr  = $is_strand ? 'data-strand="academic"' : '';
			?>
				<div class="enroll-step-item <?php echo esc_attr( $extra_class ); ?>" <?php echo $extra_attr; ?> <?php if ( $is_beef || $is_strand ) echo 'role="button" tabindex="0" title="Click to view details"'; ?>>
					<div class="enroll-step-header">
						<div class="enroll-step-num"><?php echo esc_html( $step_num ); ?></div>
						<?php if ( $is_beef ) : ?>
							<span class="enroll-step-action-tag">Open Form &rarr;</span>
						<?php elseif ( $is_strand ) : ?>
							<span class="enroll-step-action-tag">View Tracks &rarr;</span>
						<?php endif; ?>
					</div>
					<div class="enroll-step-title"><?php echo esc_html( $step['title'] ); ?></div>
					<div class="enroll-step-desc"><?php echo esc_html( $step['desc'] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>

		<div style="display: flex; gap: 0.75rem; flex-wrap: wrap; margin-top: 1rem;">
			<button class="btn-hero-primary open-beef-btn" style="border: none; cursor: pointer; font-family: inherit;">
				<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
				<span>Download BEEF Form & Checklist</span>
			</button>
			<a href="<?php echo esc_url( home_url( '/mission-vision/' ) ); ?>" class="btn-hero-secondary">View School Profile</a>
		</div>
	</div>
</section>

