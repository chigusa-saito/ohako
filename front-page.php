<?php
/**
 * OHAKO
 * front-page.php
 */
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>

<?php get_template_part('template-parts/site-header'); ?>

  <main>
  <!-- MV -->
  <section class="mv">
    <div class="mv_title">
      <h2>
        <?php the_field_without_wpautop('catchcopy');?>
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mapObject.svg" alt="mapObject" width="153" height="86" class="mapObject">
    </div>
    <div class="mv_graphic effect-onload">
      <img src="<?php the_field('mainvisual_sp');?>" alt="mv" width="355" height="358" class="disp_sp fuwat_mv">
      <div class="lead">
        <h3 class="mv_leadTitle"><?php the_field('subtitle_top');?></h3>
        <div>
          <?php the_field('lead_top');?>
        </div>
      </div>
      <img src="<?php the_field('mainvisual_pc');?>" alt="mv" width="721" height="538" class="disp_pc fadein move-to-top">
    </div>
  </section>
  <!-- /MV -->

  <!-- event -->
  <section class="event">
    <div class="wrapper">
      <div class="section_title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logoSimbol.png" alt="" width="30" height="30">
        <span>Event</span>
        <h2>イベントのお知らせ</h2>
      </div>
      <div class="googlecalendar"><iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FTokyo&showPrint=0&src=b2hha29iYXNlQGdtYWlsLmNvbQ&src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%230B8043" style="border:solid 1px #777" width="811" height="607" frameborder="0" scrolling="no"></iframe></div>
      <div class="message"><a href="https://calendar.google.com/calendar/embed?src=ohakobase%40gmail.com&ctz=Asia%2FTokyo">カレンダーが表示されない場合はこちらのリンクからご覧ください。</a></div>
        <!-- google calender -->
    </div>
  </section>
  <!-- /event -->

  <!-- about -->
  <section class="about">
    <div class="about_contents">
      <div class="topArea">
        <div class="titleArea" id="about">
          <img src="<?php the_field('about_topImage');?>" alt="" loading="lazy" width="331" height="268" class="about_topImage">
          <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logoText.svg" loading="lazy" alt="OHAKO">とは…</h2>
        </div>
        <div class="textArea">
          <div class="wrapper">
            <h3><?php the_field('subtitle');?></h3>
            <div><?php the_field('bodytext_about');?></div>
          </div>
          <div class="imageArea1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mapObjectMizuho.svg" alt="Mizuho is Here!" loading="lazy" width="499" height="252" class="mapObjectMizuho">
            <img src="<?php the_field('about_image1');?>" alt="" loading="lazy" width="227" height="167" class="image1">
          </div>
        </div>
      </div>
      <div class="imageArea2">
        <img src="<?php the_field('about_image2');?>" alt="" loading="lazy" width="165" height="121" class="image2">
        <img src="<?php the_field('about_image3');?>" alt="" loading="lazy" width="134" height="98" class="image3">
      </div>
      <div class="cvAreaWrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/about_cvImage.jpg" alt="" loading="lazy" width="164" height="120" class="cvImage">
        <div class="cvArea">
          あなたも<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logoText.svg" alt="OHAKO" loading="lazy" width="118" height="24">で<br>
          <span>出店してみませんか？</span>
          <a href="#contact">お申し込みはこちら ▶︎</a>
        </div>
      </div>
    </div>
    <div class="background_image">
      <div class="scroll-infinity">
        <div class="scroll-infinity__wrap">
          <ul class="scroll-infinity__list scroll-infinity__list--left">
            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/text-slider.svg" alt="" loading="lazy" width="1164" height="236"></li>
          </ul>
          <ul class="scroll-infinity__list scroll-infinity__list--left">
            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/text-slider.svg" alt="" loading="lazy" width="1164" height="236"></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->

  <!-- information -->
  <section class="information" id="information">
    <div class="section_title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logoSimbol.png" alt="" loading="lazy" width="30" height="30">
      <span>Information</span>
      <h2>施設情報</h2>
    </div>
    <div class="allMap">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/informationMap_sp.png" alt="全体図" loading="lazy" width="687" height="580" class="disp_sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/informationMap_pc.png" alt="全体図" loading="lazy" width="671" height="661" class="disp_pc">
      <div class="list">
        <div class="right">
          <div class="primary">
            <div class="informationMap"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/informationMap_detail1.png" alt="オハコヤ" loading="lazy" width="210" height="67"></div>
            <div>
              <div class="listNoWrapper">
                <div class="listNo">1</div>
                <div class="listItem">
                  <p class="japanese">オハコヤ</p>
                  <p class="alphabet">OHAKOYA</p>
                </div>
              </div>
              <div><?php the_field('ohakoya');?></div>
              <?php if(get_field('memo_ohakoya') ): ?>
              <div class="small"><?php the_field('memo_ohakoya');?></div>
              <?php else: ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="secondary">
            <div class="informationMap"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/informationMap_detail2.png" alt="オハコ デッキ" loading="lazy" width="115" height="105"></div>
            <div>
              <div class="listNoWrapper">
                <div class="listNo">2</div>
                <div class="listItem">
                  <p class="japanese">オハコ デッキ</p>
                  <p class="alphabet">OHAKO DECK</p>
                </div>
              </div>
              <div><?php the_field('ohakodeck');?></div>
              <?php if(get_field('memo_ohakodeck') ): ?>
              <div class="small"><?php the_field('memo_ohakodeck');?></div>
              <?php else: ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="tertiary left">
          <div class="informationMap"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/informationMap_detail3.png" alt="オハコ ヤード" loading="lazy" width="150" height="153"></div>
          <div>
            <div class="listNoWrapper">
              <div class="listNo">3</div>
              <div class="listItem">
                <p class="japanese">オハコ ヤード</p>
                <p class="alphabet">OHAKO YARD</p>
              </div>
            </div>
            <div><?php the_field('ohakoyard');?></div>
            <?php if(get_field('memo_ohakoyard') ): ?>
              <div class="small"><?php the_field('memo_ohakoyard');?></div>
              <?php else: ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /information -->

  <!-- facilities -->
  <section class="facilities wrapper">
    <h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/facilities_decorationLeft.svg" alt="" loading="lazy" width="23" height="26" class="decoration_left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logoText.svg" alt="OHAKO" loading="lazy" width="120" height="24" class="logo">
      <span>の</span>設備<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/facilities_decorationRight.svg" alt="" loading="lazy" width="23" height="26" class="decoration_right">
    </h2>
    <ul>
      <li class="primary fuwat">
        <div class="title">
          <h3>
            オハコヤ
          </h3>
          <span>OHAKOYA</span>
        </div>
        <div class="spaceListWrapper">
          <ul class="spaceList">
            <li>
              <img src="<?php the_field('ohakoya_image1');?>" alt="" loading="lazy" width="299" height="202" class="facilitiesImage">
              <div class="item_info">
                <h4><?php the_field('space1');?></h4>
                <?php the_field('ohakoya_item1');?>
              </div>
            </li>
            <li>
              <img src="<?php the_field('ohakoya_image2');?>" alt="" loading="lazy" width="299" height="202" class="facilitiesImage">
              <div class="item_info">
                <h4><?php the_field('space2');?></h4>
                <?php the_field('ohakoya_item2');?>
              </div>
            </li>
            <?php if(get_field('ohakoya_image3') ): ?>
            <li>
              <img src="<?php the_field('ohakoya_image3');?>" alt="" loading="lazy" width="299" height="202" class="facilitiesImage">
              <div class="item_info">
                <h4><?php the_field('space3');?></h4>
                <?php the_field('ohakoya_item3');?>
              </div>
            </li>
            <?php else: ?>
            <?php endif; ?>
          </ul>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/ohakoya_deco.svg" alt="" loading="lazy" width="83" height="150">
        </div>
      </li>
      <li class="secondary fuwat">
        <div class="title">
          <h3>オハコ デッキ</h3>
          <span>OHAKO DECK</span>
        </div>
        <div class="spaceListWrapper">
          <ul class="spaceList">
            <li>
            <img src="<?php the_field('ohakodeck_image');?>" alt="" loading="lazy" width="299" height="202" class="facilitiesImage">
              <div class="item_info">
                <?php the_field('ohakodeck_item');?>
              </div>
            </li>
          </ul>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/ohakoDeck_deco.svg" alt="" loading="lazy" width="95" height="99">
        </div>
      </li>
      <li class="tertiary fuwat">
        <div class="title">
          <h3>オハコ ヤード</h3>
          <span>OHAKO YARD </span>
        </div>
        <div class="spaceListWrapper">
          <ul class="spaceList">
            <li>
            <img src="<?php the_field('ohakoyard_image');?>" alt="" loading="lazy" class="facilitiesImage">
              <div class="item_info">
                <?php the_field('ohakoyard_item');?>
              </div>
            </li>
          </ul>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/ohakoYard_deco.svg" alt="" loading="lazy" width="91" height="54">
        </div>
      </li>
    </ul>
  </section>
  <!-- /facilities -->

  <!-- disclaimer -->
  <section class="disclaimer">
    <div>
      <h2>免責事項</h3>
      <section>
        <h3><?php the_field('disclaimer_title1');?></h3>
        <?php the_field('disclaimer_body1');?>
        <h3><?php the_field('disclaimer_title2');?></h3>
        <?php the_field('disclaimer_body2');?>
        <h3><?php the_field('disclaimer_title3');?></h3>
        <?php the_field('disclaimer_body3');?>
        <h3><?php the_field('disclaimer_title4');?></h3>
        <?php the_field('disclaimer_body4');?>
        <?php if(get_field('disclaimer_title5') ): ?>
        <h3><?php the_field('disclaimer_title5');?></h3>
        <?php the_field('disclaimer_body5');?>
        <?php else: ?>
        <?php endif; ?>
        <?php if(get_field('disclaimer_title6') ): ?>
        <h3><?php the_field('disclaimer_title6');?></h3>
        <?php the_field('disclaimer_body6');?>
        <?php else: ?>
        <?php endif; ?>
        <?php if(get_field('disclaimer_title7') ): ?>
        <h3><?php the_field('disclaimer_title7');?></h3>
        <?php the_field('disclaimer_body7');?>
        <?php else: ?>
        <?php endif; ?>
        <?php if(get_field('disclaimer_title8') ): ?>
        <h3><?php the_field('disclaimer_title8');?></h3>
        <?php the_field('disclaimer_body8');?>
        <?php else: ?>
        <?php endif; ?>
        <?php if(get_field('disclaimer_title9') ): ?>
        <h3><?php the_field('disclaimer_title9');?></h3>
        <?php the_field('disclaimer_body9');?>
        <?php else: ?>
        <?php endif; ?>
        <?php if(get_field('disclaimer_title10') ): ?>
        <h3><?php the_field('disclaimer_title10');?></h3>
        <?php the_field('disclaimer_body10');?>
        <?php else: ?>
        <?php endif; ?>
      </section>
    </div>
  </section>
  <!-- /disclaimer -->

  <!-- flow -->
  <section class="flow" id="flow">
    <div class="section_title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logoSimbol.png" alt="" loading="lazy" width="30" height="30">
      <span>Flow</span>
      <h2>出店の流れ</h2>
    </div>
    <ol class="step">
      <li>
        <div class="step_icon">
          <img src="<?php the_field('icon_step1');?>" alt="" loading="lazy" width="69" height="68">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            <?php the_field('no_step1');?>
          </div>
          <div class="stepText"><?php the_field('title_step1');?></div>
          <?php if ( get_field( 'this_site1' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <li>
        <div class="step_icon">
          <img src="<?php the_field('icon_step2');?>" alt="" loading="lazy" width="69" height="68">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            <?php the_field('no_step2');?>
          </div>
          <div class="stepText"><?php the_field('title_step2');?></div>
          <?php if ( get_field( 'this_site2' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <li>
        <div class="step_icon">
          <img src="<?php the_field('icon_step3');?>" alt="" loading="lazy" width="69" height="68">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            <?php the_field('no_step3');?>
          </div>
          <div class="stepText"><?php the_field('title_step3');?></div>
          <?php if ( get_field( 'this_site3' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <li>
        <div class="step_icon">
          <img src="<?php the_field('icon_step4');?>" alt="" loading="lazy" width="69" height="68">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            <?php the_field('no_step4');?>
          </div>
          <div class="stepText"><?php the_field('title_step4');?></div>
          <?php if ( get_field( 'this_site4' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <li>
        <div class="step_icon">
          <img src="<?php the_field('icon_step5');?>" alt="" loading="lazy" width="69" height="68">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            <?php the_field('no_step5');?>
          </div>
          <div class="stepText"><?php the_field('title_step5');?></div>
          <?php if ( get_field( 'this_site5' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <?php if(get_field('icon_step6') ): ?>
      <li>
        <div class="step_icon">
          <img src="<?php the_field('icon_step6');?>" alt="" loading="lazy" width="69" height="68">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            <?php the_field('no_step6');?>
          </div>
          <div class="stepText"><?php the_field('title_step6');?></div>
          <?php if ( get_field( 'this_site6' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <?php else: ?>
      <?php endif; ?>

      <?php if(get_field('icon_step7') ): ?>
      <li>
        <div class="step_icon">
          <img src="<?php the_field('icon_step7');?>" alt="" loading="lazy" width="69" height="68">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            <?php the_field('no_step7');?>
          </div>
          <div class="stepText"><?php the_field('title_step7');?></div>
          <?php if ( get_field( 'this_site7' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <?php else: ?>
      <?php endif; ?>

      <?php if(get_field('icon_step8') ): ?>
      <li>
        <div class="step_icon">
          <img src="<?php the_field('icon_step8');?>" alt="" loading="lazy" width="69" height="68">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            <?php the_field('no_step8');?>
          </div>
          <div class="stepText"><?php the_field('title_step8');?></div>
          <?php if ( get_field( 'this_site8' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <?php else: ?>
      <?php endif; ?>

      <?php if(get_field('icon_step9') ): ?>
      <li>
        <div class="step_icon">
          <img src="<?php the_field('icon_step9');?>" alt="" loading="lazy" width="69" height="68">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            <?php the_field('no_step9');?>
          </div>
          <div class="stepText"><?php the_field('title_step9');?></div>
          <?php if ( get_field( 'this_site9' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <?php else: ?>
      <?php endif; ?>

      <?php if(get_field('icon_step10') ): ?>
      <li>
        <div class="step_icon">
          <img src="<?php the_field('icon_step10');?>" alt="" loading="lazy" width="69" height="68">
        </div>
        <div class="stepItem">
          <div class="stepNo">
            <?php the_field('no_step10');?>
          </div>
          <div class="stepText"><?php the_field('title_step10');?></div>
          <?php if ( get_field( 'this_site10' ) ): ?>
          <span class="badge">本サイトより行います</span>
          <?php else: ?>
          <?php endif; ?>
        </div>
      </li>
      <?php else: ?>
      <?php endif; ?>
    </ol>
  </section>
  <!-- /flow -->

  <!-- faq -->
  <section class="faq wrapper" id="faq">
    <div class="section_title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logoSimbol.png" alt="" loading="lazy" width="30" height="30">
      <span>FAQ</span>
      <h2>よくある質問</h2>
    </div>
    <ul>
      <li>
        <p class="question"><?php the_field('question1');?></p>
        <div class="answer"><?php the_field('answer1');?></div>
      </li>
      <li>
        <p class="question"><?php the_field('question2');?></p>
        <div class="answer"><?php the_field('answer2');?></div>
      </li>
      <li>
        <p class="question"><?php the_field('question3');?></p>
        <div class="answer"><?php the_field('answer3');?></div>
      </li>
      <li>
        <p class="question"><?php the_field('question4');?></p>
        <div class="answer"><?php the_field('answer4');?></div>
      </li>
      <?php if(get_field('question5') ): ?>
      <li>
        <p class="question"><?php the_field('question5');?></p>
        <div class="answer"><?php the_field('answer5');?></div>
      </li>
      <?php else: ?>
      <?php endif; ?>
      <?php if(get_field('question6') ): ?>
      <li>
        <p class="question"><?php the_field('question6');?></p>
        <div class="answer"><?php the_field('answer6');?></div>
      </li>
      <?php else: ?>
      <?php endif; ?>
      <?php if(get_field('question7') ): ?>
      <li>
        <p class="question"><?php the_field('question7');?></p>
        <div class="answer"><?php the_field('answer7');?></div>
      </li>
      <?php else: ?>
      <?php endif; ?>
      <?php if(get_field('question8') ): ?>
      <li>
        <p class="question"><?php the_field('question8');?></p>
        <div class="answer"><?php the_field('answer8');?></div>
      </li>
      <?php else: ?>
      <?php endif; ?>
      <?php if(get_field('question9') ): ?>
      <li>
        <p class="question"><?php the_field('question9');?></p>
        <div class="answer"><?php the_field('answer9');?></div>
      </li>
      <?php else: ?>
      <?php endif; ?>
      <?php if(get_field('question10') ): ?>
      <li>
        <p class="question"><?php the_field('question10');?></p>
        <div class="answer"><?php the_field('answer10');?></div>
      </li>
      <?php else: ?>
      <?php endif; ?>
    </ul>
  </section>
  <!-- /faq -->

  <!-- form -->
  <section class="form wrapper" id="contact">
    <div class="formInner">
      <div class="form_title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logo.png" alt="OHAKO" loading="lazy" width="149" height="39">
        <h2>出店のお申し込み</h2>
      </div>
      <p class="lead">出店のお申し込みをする場合は、以下の流れに沿って<br class="disp_pc">フォームの入力を完了したのち、<br class="disp_sp">お申し込みください。</p>
      <div class="step">
        <div class="stepTitle">
          <div class="step_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/formIcon_find.svg" alt="" loading="lazy" width="46" height="44"></div>
          <div class="stepItem">
            <div class="stepNo">STEP1</div>
            <p class="stepText">注意事項・提出書類の確認</p>
          </div>
        </div>
        <p>出店希望の方は、下記ファイルをダウンロードし、「注意事項」及び「鍵の借り受け、返却」をお読みの上、「出店内容の入力」へお進みください。</p>
        <ul class="downloadList">
          <li><a href="<?php the_field('pdf_download1');?>" download><?php the_field('filename1');?></a></li>
          <?php if(get_field('pdf_download2') ): ?>
            <li><a href="<?php the_field('pdf_download2');?>" download><?php the_field('filename2');?></a></li>
          <?php else: ?>
          <?php endif; ?>
          <?php if(get_field('pdf_download3') ): ?>
            <li><a href="<?php the_field('pdf_download3');?>" download><?php the_field('filename3');?></a></li>
          <?php else: ?>
          <?php endif; ?>
          <?php if(get_field('pdf_download4') ): ?>
            <li><a href="<?php the_field('pdf_download4');?>" download><?php the_field('filename4');?></a></li>
          <?php else: ?>
          <?php endif; ?>
          <?php if(get_field('pdf_download5') ): ?>
            <li><a href="<?php the_field('pdf_download5');?>" download><?php the_field('filename5');?></a></li>
          <?php else: ?>
          <?php endif; ?>
          <?php if(get_field('pdf_download6') ): ?>
            <li><a href="<?php the_field('pdf_download6');?>" download><?php the_field('filename6');?></a></li>
          <?php else: ?>
          <?php endif; ?>
          <?php if(get_field('pdf_download7') ): ?>
            <li><a href="<?php the_field('pdf_download7');?>" download><?php the_field('filename7');?></a></li>
          <?php else: ?>
          <?php endif; ?>
          <?php if(get_field('pdf_download8') ): ?>
            <li><a href="<?php the_field('pdf_download8');?>" download><?php the_field('filename8');?></a></li>
          <?php else: ?>
          <?php endif; ?>
          <?php if(get_field('pdf_download9') ): ?>
            <li><a href="<?php the_field('pdf_download9');?>" download><?php the_field('filename9');?></a></li>
          <?php else: ?>
          <?php endif; ?>
          <?php if(get_field('pdf_download10') ): ?>
            <li><a href="<?php the_field('pdf_download10');?>" download><?php the_field('filename10');?></a></li>
          <?php else: ?>
          <?php endif; ?>
        </ul>
        <!-- download -->
      </div>
      <div class="step">
        <div class="stepTitle">
          <div class="step_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/formIcon_mail.svg" alt="" loading="lazy" width="46" height="44"></div>
          <div class="stepItem">
            <div class="stepNo">STEP2</div>
            <p class="stepText">出店内容の入力</p>
            <small>＊全て必須項目です</small>
          </div>
        </div>
        
        <!-- contactページを挿入 -->
        <?php 
          $post = get_page_by_path ( 'contact' );
          echo apply_filters ( 'the_content', $post -> post_content );
        ?>
      </div>
    </div>
  </section>
  <!-- /form -->

  </main>

  <?php get_template_part('template-parts/site-footer'); ?>

  <?php get_footer(); ?>

</body>
</html>