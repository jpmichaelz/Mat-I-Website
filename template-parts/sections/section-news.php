<?php
/**
 * Section 6: News & Official Bulletins
 *
 * @package Mat-I
 */
?>

<section id="news" class="news-section-bg">
	<div class="container">
		<div style="display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;">
			<div>
				<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;">OFFICIAL BULLETIN</span>
				<div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
					<h2 class="section-title-navy" style="margin-bottom: 0;">News & Announcements</h2>
					<?php if ( current_user_can( 'edit_posts' ) ) : ?>
						<button type="button" id="openAddNewsModalBtn" class="btn-pill-enroll" style="background: #102A57; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 5px; font-size: 11.5px; padding: 5px 12px; font-family: inherit;" title="Post an announcement directly">
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
							<span>+ Add News</span>
						</button>
					<?php endif; ?>
				</div>
				<p style="font-size: 13.5px; color: #64748B; margin-top: 0.35rem; margin-bottom: 0;">Latest institutional advisories, academic schedules, and student achievements.</p>
			</div>
			<div>
				<a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" style="color: #FF851A; font-size: 13px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
					<span>All Bulletins</span>
					<span>&rarr;</span>
				</a>
			</div>
		</div>

		<div class="news-cards-grid" id="newsCardsGrid">
			<?php
			$news_query = new WP_Query( array(
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'posts_per_page' => 3,
			) );

			if ( $news_query->have_posts() ) :
				while ( $news_query->have_posts() ) : $news_query->the_post();
					$post_id    = get_the_ID();
					$categories = get_the_category();
					$cat_name   = ! empty( $categories ) ? $categories[0]->name : 'General News';
					$image_meta = get_post_meta( $post_id, '_news_image_url', true );
					if ( ! empty( $image_meta ) ) {
						$image_url = $image_meta;
					} elseif ( has_post_thumbnail() ) {
						$image_url = get_the_post_thumbnail_url( $post_id, 'medium_large' );
					} else {
						$image_url = 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=400&fit=crop&auto=format';
					}
					$full_content = get_the_content();
					$excerpt      = wp_trim_words( $full_content, 22, '...' );
			?>
					<article class="news-card-item" id="news-card-<?php echo esc_attr( $post_id ); ?>" data-id="<?php echo esc_attr( $post_id ); ?>" data-category="<?php echo esc_attr( $cat_name ); ?>">
						<div class="news-card-img-wrap">
							<img src="<?php echo esc_url( $image_url ); ?>" class="news-card-img" alt="<?php the_title_attribute(); ?>">
							<span class="news-cat-badge"><?php echo esc_html( $cat_name ); ?></span>
							<?php if ( current_user_can( 'edit_posts' ) ) : ?>
								<div class="news-admin-actions">
									<button type="button" class="btn-news-ctrl btn-news-edit" data-id="<?php echo esc_attr( $post_id ); ?>" title="Edit this announcement">
										<svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
										<span>Edit</span>
									</button>
									<button type="button" class="btn-news-ctrl btn-news-delete" data-id="<?php echo esc_attr( $post_id ); ?>" title="Delete this announcement">
										<svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
										<span>Delete</span>
									</button>
								</div>
							<?php endif; ?>
						</div>
						<div class="news-card-body">
							<h3 class="news-card-title"><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h3>
							<p class="news-card-text"><?php echo esc_html( $excerpt ); ?></p>
							<div class="news-card-full-content" style="display: none;"><?php echo esc_html( $full_content ); ?></div>
							<div class="news-card-footer">
								<span class="news-card-date"><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></span>
								<a href="<?php the_permalink(); ?>" class="news-card-link">
									<span>Read More</span>
									<span aria-hidden="true">&rarr;</span>
								</a>
							</div>
						</div>
					</article>
			<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
		
		<div id="noNewsFound" style="display: none; text-align: center; padding: 2rem; color: #64748B; font-size: 14px;">
			No bulletins match your filter or search query.
		</div>

		<!-- View All News & Bulletins Link -->
		<div style="margin-top: 2.75rem; text-align: center;">
			<a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="btn-all-news" style="box-shadow: 0 4px 14px rgba(16, 42, 87, 0.08);">
				<span>View All Bulletins & Archive</span>
				<span style="color: #FF851A;">&rarr;</span>
			</a>
		</div>
	</div>
</section>

