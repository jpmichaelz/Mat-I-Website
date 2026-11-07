<?php
/**
 * Section 4: Academic Programs & Curriculum Offerings
 *
 * @package Mat-I
 */
?>

<section id="programs" style="background: var(--page-bg); padding: 5rem 0; border-bottom: 1px solid var(--border-color);">
	<div class="container">
		<div style="max-width: 960px; margin: 0 auto 2rem; display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
			<div>
				<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;">CURRICULUM OFFERINGS</span>
				<h2 class="section-title-navy">Academic Programs (Grades 7–12)</h2>
				<p style="font-size: 13.5px; color: #64748B; margin-top: 0.35rem;">Comprehensive Junior High foundations and Senior High School specialized tracks.</p>
			</div>
			<button class="open-beef-btn" style="background: transparent; border: none; cursor: pointer; color: #FF851A; font-weight: 700; display: flex; align-items: center; gap: 0.25rem; font-size: 13px; font-family: inherit;">
				<span>Enrollment Prerequisites & Forms</span>
				<span>&rarr;</span>
			</button>
		</div>

		<!-- Junior High Highlight Card -->
		<div class="jhs-highlight-card">
			<div style="max-width: 680px;">
				<div style="display: inline-flex; align-items: center; gap: 6px; background: #EFF6FF; color: #102A57; padding: 3px 10px; border-radius: 6px; font-weight: 700; font-size: 11px; margin-bottom: 0.5rem; text-transform: uppercase; border: 1px solid #DBEAFE;">
					<span>Junior High School · Grades 7 to 10</span>
				</div>
				<h3 style="font-size: 18px; font-weight: 700; color: #102A57; margin-bottom: 0.25rem;">Standard DepEd Basic Secondary Curriculum</h3>
				<p style="font-size: 13px; color: #475569; line-height: 1.6;">Rigorous instruction in English, Science, Mathematics, Filipino, Araling Panlipunan, Values Education (EsP), MAPEH, and Technology & Livelihood Education (TLE).</p>
			</div>
			<button class="btn-hero-primary open-beef-btn" style="border: none; cursor: pointer; font-size: 13px; padding: 10px 20px; font-family: inherit;">
				<span>Enroll in Junior High</span>
			</button>
		</div>

		<!-- Senior High 2 Offerings Grid (Academic & Tech-Pro) -->
		<div class="programs-grid">
			<!-- Offering 1: Academic Track -->
			<div class="program-card-item">
				<div class="program-img-wrap">
					<img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&h=320&fit=crop&auto=format" alt="Academic Track Senior High School">
					<div class="program-img-overlay">
						<span class="program-dept-name">Academic Track</span>
					</div>
				</div>
				<div class="program-card-body">
					<h3 class="program-title">Academic Track</h3>
					<p class="program-desc">Comprehensive university preparation cultivating critical thinking, scientific inquiry, communication mastery, and foundational research for higher education and professional degree programs.</p>
					<div style="margin-top: auto; padding-top: 0.75rem; border-top: 1px solid #F1F5F9; display: flex; justify-content: space-between; align-items: center;">
						<span style="font-size: 11px; font-weight: 700; color: #102A57;">Pathways: University Degrees & Higher Ed</span>
						<button class="strand-details-btn" data-strand="academic" style="background: transparent; border: none; cursor: pointer; color: #FF851A; font-weight: 700; font-size: 12px; font-family: inherit;">Curriculum &rarr;</button>
					</div>
				</div>
			</div>

			<!-- Offering 2: Tech-Pro Track -->
			<div class="program-card-item">
				<div class="program-img-wrap">
					<img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=600&h=320&fit=crop&auto=format" alt="Tech-Pro Track Technical Workshop">
					<div class="program-img-overlay">
						<span class="program-dept-name">Tech-Voc Track</span>
					</div>
				</div>
				<div class="program-card-body">
					<h3 class="program-title">Tech-Pro Track (TVL)</h3>
					<p class="program-desc">Technical-Vocational-Livelihood & Professional specialization delivering hands-on competency training, workshop mastery, and TESDA National Certificate (NC II/III) qualifications for immediate career readiness.</p>
					<div style="margin-top: auto; padding-top: 0.75rem; border-top: 1px solid #F1F5F9; display: flex; justify-content: space-between; align-items: center;">
						<span style="font-size: 11px; font-weight: 700; color: #102A57;">Pathways: TESDA NC II/III, Tech Careers, Trade</span>
						<button class="strand-details-btn" data-strand="techpro" style="background: transparent; border: none; cursor: pointer; color: #FF851A; font-weight: 700; font-size: 12px; font-family: inherit;">Curriculum &rarr;</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

