            <div id="post-<?php the_ID(); ?>" class="grid-item col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <?php if ( has_post_thumbnail() )
                  the_post_thumbnail();
                ?>
                <div class="card-body">
                  <p class="card-text postmetadata">
                  	<?php the_category(' ') ?>
                  </p>
                  <h5 class="card-title"><a class="card-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                  <p class="card-text"><?php the_content('<p class="card-text">Leia mais</p>'); ?></p>
                  <p class="card-text postmetadata"><small class="text-muted"><?php the_time('F jS, Y') ?> por <?php the_author_link(); ?> | <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></small></p>
                </div>
              </div>
            </div>
         