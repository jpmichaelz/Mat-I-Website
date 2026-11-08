<?php
/**
 * Section 5: Principal's Welcome & Leadership Spotlight
 *
 * @package Mat-I
 */

$mat_i_pr_data = get_option( 'mat_i_principal_settings', array() );
$pr_badge      = ! empty( $mat_i_pr_data['badge'] ) ? $mat_i_pr_data['badge'] : 'LEADERSHIP & VISION';
$pr_division   = ! empty( $mat_i_pr_data['division'] ) ? $mat_i_pr_data['division'] : 'Department of Education · Division of Misamis Oriental';
$pr_heading    = ! empty( $mat_i_pr_data['heading'] ) ? $mat_i_pr_data['heading'] : 'Dedicated to Quality Education and Empowered Youth';
$pr_quote      = ! empty( $mat_i_pr_data['quote'] ) ? $mat_i_pr_data['quote'] : '“At MAT-I National High School, we believe that education is the most transformative instrument for community empowerment. Our mission is to provide an inclusive, safe, and academically stimulating environment where every learner is guided towards critical thinking, moral uprightness, and lifelong excellence.”';
$pr_image      = ! empty( $mat_i_pr_data['image'] ) ? $mat_i_pr_data['image'] : get_template_directory_uri() . '/assets/images/Mat-i-logo.png';
$pr_btn1_text  = ! empty( $mat_i_pr_data['btn1_text'] ) ? $mat_i_pr_data['btn1_text'] : 'Meet Our Faculty & Staff (32+ Educators)';
$pr_btn1_link  = ! empty( $mat_i_pr_data['btn1_link'] ) ? $mat_i_pr_data['btn1_link'] : home_url( '/organigram/' );
$pr_btn2_text  = ! empty( $mat_i_pr_data['btn2_text'] ) ? $mat_i_pr_data['btn2_text'] : 'Read School History';
$pr_btn2_link  = ! empty( $mat_i_pr_data['btn2_link'] ) ? $mat_i_pr_data['btn2_link'] : home_url( '/history/' );
?>

<section id="principal-spotlight" class="principal-spotlight-section">
	<div class="principal-flat-layout">
		<!-- Principal Identity Wrap -->
		<div class="principal-avatar-wrap">
			<div class="principal-badge-seal">
				<img src="<?php echo esc_url( $pr_image ); ?>" id="principalAvatarImg" alt="Mat-I NHS Official Seal">
			</div>
			<div class="principal-division-title" id="principalDivision"><?php echo esc_html( $pr_division ); ?></div>
		</div>

		<!-- Principal Message -->
		<div class="principal-message-wrap">
			<div style="display: flex; align-items: center; gap: 8px;">
				<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;" id="principalBadge"><?php echo esc_html( $pr_badge ); ?></span>
				<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
					<button type="button" class="btn-fast-edit-section" data-section="principal" title="Edit Leadership Message" style="background: rgba(255,133,26,0.9); border: none; color: #FFFFFF; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 9999px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px;">
						<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
						<span>Edit Principal</span>
					</button>
				<?php endif; ?>
			</div>
			<h2 id="principalHeading" style="font-size: clamp(22px, 2.5vw, 28px); font-weight: 800; color: #FFFFFF; margin: 0.35rem 0 1.25rem;"><?php echo esc_html( $pr_heading ); ?></h2>
			<blockquote class="principal-message-text" id="principalQuote">
				<?php echo esc_html( $pr_quote ); ?>
				<footer class="principal-quote-author">
					<cite>— Office of the School Administration · MAT-I National High School</cite>
				</footer>
			</blockquote>
			<div class="principal-actions-row" style="display: flex; gap: 1rem; flex-wrap: wrap;">
				<a href="<?php echo esc_url( $pr_btn1_link ); ?>" class="btn-hero-primary" id="principalBtn1" style="font-size: 13px;">
					<span><?php echo esc_html( $pr_btn1_text ); ?></span>
					<span>&rarr;</span>
				</a>
				<a href="<?php echo esc_url( $pr_btn2_link ); ?>" class="btn-hero-secondary" id="principalBtn2" style="font-size: 13px;">
					<span><?php echo esc_html( $pr_btn2_text ); ?></span>
				</a>
			</div>
		</div>
	</div>
</section>

