<?php
/**
 * OHAKO
 * front-page.php
 */
?>

  <!-- flow -->
  <section class="flow">
    <div class="section_title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logoSimbol.png" alt="" loading="lazy" width="30" height="30">
      <span>Flow</span>
      <h2>出店の流れ</h2>
    </div>
    <ol class="step">
      <li>
        <div class="step_icon">
          <img src="
            <?php 
              $page_obj = get_page_by_path( 'flow' );
              $page_id = $page_obj->ID;
              echo the_field('icon_step1', $page_id);
            ?>
          " alt="">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            STEP1
            <?php 
              $page_obj = get_page_by_path( 'facilities' );
              $page_id = $page_obj->ID;
              echo the_field('space1', $page_id);
            ?>
          </div>
          <p class="stepText">希望日の空き予定を<br class="disp_sp">ご確認ください。</p>
          <?php if ( get_field( 'this_site1' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <li>
        <div class="step_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/icon_find.svg" alt=""></div>
        <div class="stepItem">
          <div class="stepNo">STEP2</div>
          <p class="stepText">下記【出店のお申込み】を<br class="disp_sp">ご確認ください。</p>
          <span class="badge">本サイトより行います</span>
        </div>
      </li>
      <li>
        <div class="step_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/icon_mail.svg" alt=""></div>
        <div class="stepItem">
          <div class="stepNo">STEP3</div>
          <p class="stepText">出店内容の入力をして<br class="disp_sp">お申し込みください。</p>
          <span class="badge">本サイトより行います</span>
        </div>
      </li>
      <li>
        <div class="step_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/icon_send.svg" alt=""></div>
        <div class="stepItem">
          <div class="stepNo">STEP4</div>
          <p class="stepText">３日前迄に<br class="disp_sp">申請書類をお送りください。</p>
          <small>※個別にご連絡差し上げます。</small>
        </div>
      </li>
      <li>
        <div class="step_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/icon_shop.svg" alt=""></div>
        <div class="stepItem">
          <div class="stepNo">STEP5</div>
          <p class="stepText">出店！</p>
        </div>
      </li>
    </ol>
  </section>
  <!-- /flow -->
