            <div class="<?php $terms = get_the_terms( $post->ID , 'category' );
							foreach ( $terms as $term ) {
								echo $term->slug;
								echo ' ';
							}
						?>grid-item col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <?php if ( has_post_thumbnail() )
                  the_post_thumbnail();
                ?>
                <div class="card-body">
                  <p class="card-text postmetadata">
                  	<?php the_category(' ') ?>
                    <i class="icon-sticky float-right fab fa-hotjar"></i>
                  </p>
                  <h5 id="post-<?php the_ID(); ?>" class="card-title"><a class="card-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                  <p class="card-text"><?php the_content('<p class="card-text">Leia mais</p>'); ?></p>
                  <p class="card-text postmetadata"><small class="text-muted"><?php the_time('F jS, Y') ?> por <?php the_author_link(); ?> | <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></small></p>
                </div>
              </div>
            </div>