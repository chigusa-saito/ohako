<?php
/**
 * OHAKO
 * page-information.php
 */
?>

  <!-- information -->
  <section class="information">
    <div class="section_title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logoSimbol.png" alt="" loading="lazy" width="30" height="30">
      <span>Information</span>
      <h2>施設情報</h2>
    </div>
    <div class="allMap">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/informationMap_sp.png" alt="全体図" loading="lazy" width="" height="" class="disp_sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/informationMap_pc.png" alt="全体図" loading="lazy" width="" height="" class="disp_pc">
      <div class="list">
        <div class="right">
          <div class="primary">
            <div class="informationMap"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/informationMap_detail1.png" alt="オハコヤ" loading="lazy" width="" height=""></div>
            <div>
              <div class="listNoWrapper">
                <div class="listNo">1</div>
                <div class="listItem">
                  <p class="japanese">オハコヤ</p>
                  <p class="alphabet">OHAKOYA</p>
                </div>
              </div>
              <p>
                <?php 
                  $page_obj = get_page_by_path( 'information' );
                  $page_id = $page_obj->ID;
                  echo the_field('ohakoya', $page_id);
                ?>
              </p>
            </div>
          </div>
          <div class="secondary">
            <div class="informationMap"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/informationMap_detail2.png" alt="オハコ デッキ" loading="lazy" width="" height=""></div>
            <div>
              <div class="listNoWrapper">
                <div class="listNo">2</div>
                <div class="listItem">
                  <p class="japanese">オハコ デッキ</p>
                  <p class="alphabet">OHAKO DECK</p>
                </div>
              </div>
              <p>
                <?php 
                  $page_obj = get_page_by_path( 'information' );
                  $page_id = $page_obj->ID;
                  echo the_field('ohakodeck', $page_id);
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="tertiary left">
          <div class="informationMap"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/informationMap_detail3.png" alt="オハコ ヤード" loading="lazy" width="" height=""></div>
          <div>
            <div class="listNoWrapper">
              <div class="listNo">3</div>
              <div class="listItem">
                <p class="japanese">オハコ ヤード</p>
                <p class="alphabet">OHAKO YARD</p>
              </div>
            </div>
            <p>
              <?php 
                $page_obj = get_page_by_path( 'information' );
                $page_id = $page_obj->ID;
                echo the_field('ohakoyard', $page_id);
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /information -->
