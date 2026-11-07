<?php
/**
 * Section 3: School Services & Citizen's Charter Hub (Architectural Contiguous Grid)
 *
 * @package Mat-I
 */

$services_list = array(
	array(
		'tag'   => 'Official Records',
		'title' => 'Form 137 / Form 138 (SF9 & SF10)',
		'desc'  => 'Issuance and release of permanent records, official transcript of records, and report cards for transferees or graduates.',
		'url'   => home_url( '/services/' ),
	),
	array(
		'tag'   => 'Certifications',
		'title' => 'Good Moral & Enrollment Certificate',
		'desc'  => 'Certification of enrollment status, good moral character, CAV requirements, and graduation credentials.',
		'url'   => home_url( '/services/' ),
	),
	array(
		'tag'   => 'Admissions',
		'title' => 'Learner Registration & LIS Validation',
		'desc'  => 'Learner Reference Number (LRN) validation, transferee verification, and basic education enrollment processing.',
		'url'   => home_url( '/services/' ),
	),
	array(
		'tag'   => 'Student Support',
		'title' => 'Guidance Counseling & Facilities Booking',
		'desc'  => 'Individual learner guidance, career path consultation, psychological support, and institutional facility booking.',
		'url'   => home_url( '/services/' ),
	),
);
?>

<section id="services-hub" class="services-hub-architectural">
	<div class="services-fw-header">
		<span class="services-fw-eyebrow">STUDENT & ALUMNI ASSISTANCE</span>
		<h2 class="services-fw-heading">Frontline School Services & Citizen's Charter</h2>
		<p class="services-fw-desc">Access transparent, standardized, and free official school services under Republic Act 11032.</p>
	</div>

	<!-- Full-Width 4-Column Architectural Contiguous Grid (Columns Sticking Together) -->
	<div class="services-fw-grid">
		<?php foreach ( $services_list as $svc ) : ?>
			<a href="<?php echo esc_url( $svc['url'] ); ?>" class="services-fw-col">
				<div class="services-col-top-row">
					<span class="services-col-tag"><?php echo esc_html( $svc['tag'] ); ?></span>
				</div>

				<div class="services-col-content">
					<h3 class="services-col-title"><?php echo esc_html( $svc['title'] ); ?></h3>
					<p class="services-col-desc"><?php echo esc_html( $svc['desc'] ); ?></p>
				</div>

				<div class="services-col-bottom">
					<span class="services-col-btn">
						<span>Proceed</span>
						<span aria-hidden="true">&rarr;</span>
					</span>
				</div>
				<div class="services-col-accent-bar" aria-hidden="true"></div>
			</a>
		<?php endforeach; ?>
	</div>
</section>
