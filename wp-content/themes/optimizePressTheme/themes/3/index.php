<?php get_header(); ?>
			<div class="op-page-header cf">
            	<?php
	            if( have_posts() ){
					$title = '';
					$text = '';
					if(is_tag()){
						$title = sprintf( __( 'Etiqueta: %s', OP_SN ), '<span>' . single_tag_title( '', false ) . '</span>' );
						$tag_description = tag_description();
						if ( ! empty( $tag_description ) )
							$text = apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
					} elseif(is_author()){
						the_post();
						$title = sprintf( __( 'Autor: %s', OP_SN ), '<span class="vcard">' . get_the_author() . '</span>' );
						rewind_posts();
					} elseif(is_category()){
						$title = sprintf( __( 'Categoría: %s', OP_SN ), '<span>' . single_cat_title( '', false ) . '</span>' );
						$category_description = category_description();
						if ( ! empty( $category_description ) )
							$text = apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
					} elseif(is_archive()){
						$dtstr = '';
						if(is_day()){
							$title = sprintf( __( 'Daily Archives: %s', OP_SN ), '<span>' . get_the_date() . '</span>' );
						} elseif(is_month()){
							$title = sprintf( __( 'Monthly Archives: %s', OP_SN ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
						} elseif(is_year()){
							$title = sprintf( __( 'Yearly Archives: %s', OP_SN ), '<span>' . get_the_date( 'Y' ) . '</span>' );
						} else {
							$title = __('Blog Archives', OP_SN);
						}
					}
				} else {
					$title = __( 'Nothing Found', OP_SN );
				}
				echo '<h2 class="the-title title-cat">'.$title.'</h2>';
				//<p>Archive</p>
				?>
			</div>
			<?php
			$class = op_default_attr('column_layout','option');
			$add_sidebar = true;
			if(defined('OP_SIDEBAR')){
				if(OP_SIDEBAR === FALSE){
					$class = 'no-sidebar';
					$add_sidebar = false;
				} else {
					$class = OP_SIDEBAR;
				}
			}
			?>
			<!--
			<div class="main-content content-width cf <?php //echo $class ?>"> -->
		    	<div id="publicaciones_sae"> 
					<?php //echo $add_sidebar ? '<div class="sidebar-bg"></div>' : '' ?>

                    <div class="row"><!-- main-content-area -->
                    	<div class="bloque_posts">
                    		<ul class="small-block-grid-3">
		                        <?php
		                        op_mod('advertising')->display(array('advertising', 'pages', 'top'));
		                        if( have_posts() ): ?>

		                        <?php op_theme_file('loop'); ?>
		                        <?php else: ?>
		                        <div class="entry-content">
		                            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', OP_SN ); ?></p>
		                            <?php get_search_form(); ?>
		                        </div>
		                        <?php endif ?>
		                        <?php op_mod('advertising')->display(array('advertising', 'pages', 'bottom')); ?>
	                        </ul>
                        </div>
                    </div>
                    <?php //op_sidebar() ?>
                </div>
            <!--</div>-->

<?php get_footer(); ?>