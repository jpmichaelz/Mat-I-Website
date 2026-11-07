<?php
/**
 * Interactive Modals & Toast: Strand Details, BEEF Enrollment Form, News Bulletin Admin Editor
 *
 * @package Mat-I
 */
?>

<!-- =========================================================================
     MODAL 1: STRAND CURRICULUM MODAL
     ========================================================================= -->
<div id="strandModal" class="mat-modal-backdrop hidden" aria-hidden="true" role="dialog">
	<div class="mat-modal-box">
		<div class="mat-modal-header">
			<div>
				<span id="modalTrackBadge" class="modal-dept-badge">Academic Track</span>
				<h3 id="modalStrandTitle" class="modal-title-text">STEM Strand</h3>
			</div>
			<button id="closeStrandModal" class="mat-modal-close" aria-label="Close modal">&times;</button>
		</div>
		<div class="mat-modal-body">
			<p id="modalStrandDesc" style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 1.25rem;"></p>
			
			<h4 style="font-size: 13px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Specialized Strand Subjects</h4>
			<ul id="modalSpecializedSubjects" class="modal-subjects-list" style="margin-bottom: 1.25rem;"></ul>

			<h4 style="font-size: 13px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Career & College Pathways</h4>
			<p id="modalPathways" style="font-size: 13.5px; color: #334155; line-height: 1.6; margin-bottom: 1.5rem;"></p>
		</div>
		<div class="mat-modal-footer">
			<button class="btn-hero-primary open-beef-btn" style="border: none; cursor: pointer; padding: 8px 16px; font-size: 13px; font-family: inherit;">Proceed to Enrollment</button>
		</div>
	</div>
</div>

<!-- =========================================================================
     MODAL 2: ADMISSIONS & BEEF FORM MODAL
     ========================================================================= -->
<div id="beefModal" class="mat-modal-backdrop hidden" aria-hidden="true" role="dialog">
	<div class="mat-modal-box">
		<div class="mat-modal-header">
			<div>
				<span class="modal-dept-badge">DepEd Official Form</span>
				<h3 class="modal-title-text">Basic Education Enrollment Form (BEEF)</h3>
			</div>
			<button id="closeBeefModal" class="mat-modal-close" aria-label="Close modal">&times;</button>
		</div>
		<div class="mat-modal-body">
			<div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 1rem; margin-bottom: 1.25rem;">
				<div style="font-weight: 700; font-size: 13.5px; color: #102A57; margin-bottom: 0.25rem;">MAT-I National High School</div>
				<div style="font-size: 12.5px; color: #64748B;">Department of Education · Division of Misamis Oriental · Claveria</div>
			</div>

			<h4 style="font-size: 13px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Document Checklist (Incoming Grade 7 & SHS)</h4>
			<ul class="modal-subjects-list" style="margin-bottom: 1.25rem;">
				<li>PSA Authenticated Birth Certificate (Original & 2 Photocopies)</li>
				<li>SF9 / Form 138 (Final Report Card with Learner Reference Number — LRN)</li>
				<li>Certificate of Good Moral Character from previous school</li>
				<li>2 pcs 2x2 Recent ID Pictures (White background with nametag)</li>
				<li>Duly accomplished DepEd BEEF Registration Form</li>
			</ul>

			<h4 style="font-size: 13px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">4-Step Enrollment Process</h4>
			<ol style="font-size: 13px; color: #475569; padding-left: 1.25rem; line-height: 1.7; margin: 0;">
				<li><strong>Form Submission:</strong> Accomplish and submit the BEEF form online or at the Registrar's Office.</li>
				<li><strong>Document Verification:</strong> Present credentials for LIS LRN validation.</li>
				<li><strong>Strand Assessment:</strong> Senior High learners undergo strand interview and guidance profiling.</li>
				<li><strong>Section Assignment:</strong> Receive official Certificate of Enrollment and class schedule.</li>
			</ol>
		</div>
		<div class="mat-modal-footer" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 0.5rem;">
			<span style="font-size: 12px; color: #64748B;">Registrar: mat-i.nhs@deped.gov.ph</span>
			<button onclick="window.print()" class="btn-hero-primary" style="border: none; cursor: pointer; padding: 8px 16px; font-size: 13px; font-family: inherit; display: inline-flex; align-items: center; gap: 6px;">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
				<span>Print Checklist / Form</span>
			</button>
		</div>
	</div>
</div>

<?php if ( current_user_can( 'edit_posts' ) ) : ?>
<!-- =========================================================================
     MODAL 3: INLINE NEWS BULLETIN EDITOR MODAL (ADMIN)
     ========================================================================= -->
<div id="newsAdminModal" class="mat-modal-backdrop hidden" aria-hidden="true" role="dialog">
	<div class="mat-modal-box news-admin-modal-box">
		<div class="mat-modal-header" style="align-items: center;">
			<div>
				<span id="newsModalActionBadge" class="modal-dept-badge">Create Announcement</span>
				<h3 id="newsModalTitle" class="modal-title-text">Add School Bulletin</h3>
			</div>
			<button type="button" id="closeNewsModal" class="mat-modal-close" aria-label="Close modal">&times;</button>
		</div>
		<form id="newsAdminForm" class="news-admin-form">
			<input type="hidden" id="newsFormPostId" name="post_id" value="">
			<div class="mat-modal-body" style="display: flex; flex-direction: column; gap: 1rem; padding: 1.25rem 1.5rem;">
				
				<!-- Title -->
				<div class="form-field-group">
					<label for="newsFormTitle" class="news-form-label">Bulletin Title <span style="color: #EF4444;">*</span></label>
					<input type="text" id="newsFormTitle" name="title" required placeholder="e.g., Enrollment for S.Y. 2025–2026 Now Open" class="news-form-input">
				</div>

				<!-- Category & Image URL Row -->
				<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
					<div class="form-field-group">
						<label for="newsFormCategory" class="news-form-label">Category</label>
						<select id="newsFormCategory" name="category" class="news-form-select">
							<option value="Admissions">Admissions</option>
							<option value="Academic Fair">Academic Fair</option>
							<option value="Student Honors">Student Honors</option>
							<option value="Faculty Research">Faculty Research</option>
							<option value="Facilities">Facilities</option>
							<option value="General News">General News</option>
						</select>
					</div>
					<div class="form-field-group">
						<label for="newsFormImageUrl" class="news-form-label">Cover Image URL (Optional)</label>
						<input type="url" id="newsFormImageUrl" name="image_url" placeholder="https://..." class="news-form-input">
					</div>
				</div>

				<!-- Content / Summary -->
				<div class="form-field-group">
					<label for="newsFormContent" class="news-form-label">Announcement Description / Details <span style="color: #EF4444;">*</span></label>
					<textarea id="newsFormContent" name="content" rows="4" required placeholder="Enter the official school advisory, updates, or details here..." class="news-form-textarea"></textarea>
				</div>

			</div>

			<div class="mat-modal-footer" style="display: flex; justify-content: flex-end; align-items: center; gap: 0.75rem; padding: 1rem 1.5rem; background: #F8FAFC; border-top: 1px solid #E2E8F0; border-radius: 0 0 16px 16px;">
				<button type="button" id="cancelNewsModalBtn" class="btn-news-cancel">Cancel</button>
				<button type="submit" id="saveNewsSubmitBtn" class="btn-news-save">
					<span id="saveNewsBtnText">Save Bulletin</span>
					<span id="saveNewsBtnSpinner" class="btn-spinner hidden"></span>
				</button>
			</div>
		</form>
	</div>
</div>

<!-- Floating Toast Alert -->
<div id="matIToast" class="mat-toast mat-toast-success">
	<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
	<span id="matIToastMessage">Announcement saved successfully!</span>
</div>
<?php endif; ?>

