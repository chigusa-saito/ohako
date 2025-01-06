<?php
/**
 * OHAKO
 * page-disclaimer.php
 */
?>

  <!-- disclaimer -->
  <section class="disclaimer">
    <div>
      <h2>免責事項</h3>
      <section>
        <h3>
          <?php 
            $page_obj = get_page_by_path( 'disclaimer' );
            $page_id = $page_obj->ID;
            echo the_field('disclaimer_title1', $page_id);
          ?>
        </h3>
        <?php 
          $page_obj = get_page_by_path( 'disclaimer' );
          $page_id = $page_obj->ID;
          echo the_field('disclaimer_body1', $page_id);
        ?>
        <h3>
          <?php 
            $page_obj = get_page_by_path( 'disclaimer' );
            $page_id = $page_obj->ID;
            echo the_field('disclaimer_title2', $page_id);
          ?>
        </h3>
        <?php 
          $page_obj = get_page_by_path( 'disclaimer' );
          $page_id = $page_obj->ID;
          echo the_field('disclaimer_body2', $page_id);
        ?>
        <h3>
          <?php 
            $page_obj = get_page_by_path( 'disclaimer' );
            $page_id = $page_obj->ID;
            echo the_field('disclaimer_title3', $page_id);
          ?>
        </h3>
        <?php 
          $page_obj = get_page_by_path( 'disclaimer' );
          $page_id = $page_obj->ID;
          echo the_field('disclaimer_body3', $page_id);
        ?>
        <h3>
          <?php 
            $page_obj = get_page_by_path( 'disclaimer' );
            $page_id = $page_obj->ID;
            echo the_field('disclaimer_title4', $page_id);
          ?>
        </h3>
        <?php 
          $page_obj = get_page_by_path( 'disclaimer' );
          $page_id = $page_obj->ID;
          echo the_field('disclaimer_body4', $page_id);
        ?>
        <?php 
          $page_obj = get_page_by_path( 'disclaimer' );
          $page_id = $page_obj->ID;
          if(get_field('disclaimer_title5', $page_id) ):
        // if( get_field('ohakoya_image3') ): 
        ?>
        <h3>
          <?php 
            $page_obj = get_page_by_path( 'disclaimer' );
            $page_id = $page_obj->ID;
            echo the_field('disclaimer_title5', $page_id);
          ?>
        </h3>
        <?php 
          $page_obj = get_page_by_path( 'disclaimer' );
          $page_id = $page_obj->ID;
          echo the_field('disclaimer_body5', $page_id);
        ?>
        <?php else: ?>
        <?php endif; ?>
      </section>
    </div>
  </section>
  <!-- /disclaimer -->
