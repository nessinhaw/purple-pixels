        <div class="col-md-6">
          <div class="card flex-md-row-reverse mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <p class="card-text"><?php the_category(' ') ?></p>
              <h3 id="post-<?php the_ID(); ?> class="card-title"><a class="card-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
              <p class="card-text mb-2"><?php the_content('<p class="card-text pt-2 mb-auto"><a href="#" class="card-link">Leia mais</a></p>'); ?></p>
            </div>
            <?php if ( has_post_thumbnail() ) ?>
                  <img class="img-fluid flex-auto d-none d-lg-block"  src="<?php echo get_the_post_thumbnail_url( $post_id, '' ); ?>" alt="Card image">
          </div>
        </div>