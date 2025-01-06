<?php
/**
 * OHAKO
 * front-page.php
 */
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>

  <main>
  <!-- MV -->
  <section class="mv">
    <div class="mv_title">
      <h2>
        <?php the_field('catchcopy');?>
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mapObject.svg" alt="mapObject" loading="lazy" width="" height="" class="mapObject">
    </div>
    <div class="mv_graphic">
      <img src="<?php the_field('mainvisual_sp');?>" alt="mv" loading="lazy" width="" height="" class="disp_sp">
      <div class="lead">
        <h3 class="mv_leadTitle">OHAKO BASE</h3>
        <p>
          JR八高線の箱根ケ崎駅西口ロータリー 横に<br>
          誰もがチャレンジできる場所として<br>
          OHAKO BASE（オハコ ベース）があります。
        </p>
        <p>使い方は様々、皆さんの得意な活動を応援します。</p>
      </div>
      <img src="<?php the_field('mainvisual_pc');?>" alt="mv" loading="lazy" width="" height="" class="disp_pc">
    </div>
  </section>
  <!-- /MV -->

  <!-- event -->
  <section class="event">
    <div class="wrapper">
      <div class="section_title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logoSimbol.png" alt="" loading="lazy" width="30" height="30">
        <span>Event</span>
        <h2>イベントのお知らせ</h2>
      </div>
      <div class="googlecalendar"><iframe src="https://calendar.google.com/calendar/embed?height=607&wkst=1&ctz=Asia%2FTokyo&showPrint=0&showTitle=0&src=b2hha29iYXNlQGdtYWlsLmNvbQ&src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%230B8043" style="border-width:0" width="811" height="607" frameborder="0" scrolling="no"></iframe></div>
        <!-- google calender -->
    </div>
  </section>
  <!-- /event -->

  <!-- about -->
  <section class="about">
    <div class="topArea">
      <div class="titleArea">
        <img src="
          <?php 
            $page_obj = get_page_by_path( 'about' );
            $page_id = $page_obj->ID;
            echo the_field('about_topImage', $page_id);
          ?>
        " alt="" loading="lazy" width="" height="" class="about_topImage">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logoText.svg" alt="OHAKO">とは…</h2>
      </div>
      <div class="textArea">
        <div class="wrapper">
          <h3>
            <?php 
            $page_obj = get_page_by_path( 'about' ); /* スラッグから投稿オブジェクトを取得 */
            $page_id = $page_obj->ID; /* 取得したオブジェクトからIDを取り出す */
            echo the_field('subtitle', $page_id);
            ?>
          </h3>
          <p>
          <?php 
            $page_obj = get_page_by_path( 'about' );
            $page_id = $page_obj->ID;
            echo the_field('bodytext_about', $page_id);?>
          </p>
        </div>
        <div class="imageArea1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mapObjectMizuho.svg" alt="Mizuho is Here!" loading="lazy" width="" height="" class="mapObjectMizuho">
          <img src="
            <?php 
              $page_obj = get_page_by_path( 'about' );
              $page_id = $page_obj->ID;
              echo the_field('about_image1', $page_id);
            ?>
          " alt="" loading="lazy" width="" height="" class="image1">
        </div>
      </div>
    </div>
    <div class="imageArea2">
      <img src="
        <?php 
          $page_obj = get_page_by_path( 'about' );
          $page_id = $page_obj->ID;
          echo the_field('about_image2', $page_id);
        ?>
      " alt="" loading="lazy" width="" height="" class="image2">
      <img src="
        <?php 
          $page_obj = get_page_by_path( 'about' );
          $page_id = $page_obj->ID;
          echo the_field('about_image3', $page_id);
        ?>
      " alt="" loading="lazy" width="" height="" class="image3">
    </div>
    <div class="cvAreaWrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/about_cvImage.jpg" alt="" loading="lazy" width="" height="" class="cvImage">
      <div class="cvArea">
        あなたも<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logoText.svg" alt="OHAKO">で<br>
        <span>出店してみませんか？</span>
        <a href="">お申し込みはこちら ▶︎</a>
      </div>
    </div>
  </section>
  <!-- /about -->

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

  <!-- facilities -->
  <section class="facilities wrapper">
    <h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/facilities_decorationLeft.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logoText.svg" alt="OHAKO" class="logo">
      <span>の</span>設備<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/facilities_decorationRight.svg" alt="">
    </h2>
    <ul>
      <li class="primary">
        <div class="title">
          <h3>
            オハコヤ
          </h3>
          <span>OHAKOYA</span>
        </div>
        <div class="spaceListWrapper">
          <ul class="spaceList">
            <li>
              <img src="
                <?php 
                  $page_obj = get_page_by_path( 'facilities' );
                  $page_id = $page_obj->ID;
                  echo the_field('ohakoya_image1', $page_id);
                ?>
              " alt="" class="facilitiesImage">
              <div>
                <h4>
                  <?php 
                    $page_obj = get_page_by_path( 'facilities' );
                    $page_id = $page_obj->ID;
                    echo the_field('space1', $page_id);
                  ?>
                </h4>
                <ul class="itemList">
                  <?php 
                    $page_obj = get_page_by_path( 'facilities' );
                    $page_id = $page_obj->ID;
                    echo the_field('ohakoya_item1', $page_id);
                  ?>

                  <!-- <li>IHコンロ1つ</li>
                  <li>シンク２つ</li>
                  <li>電気</li>
                  <li>水道</li>
                  <li>層式冷蔵庫２個</li>
                  <li>層式冷凍庫１個</li>
                  <li>コンセント１口</li>
                  <li>商品提供用小窓２個</li> -->
                </ul>
              </div>
            </li>
            <li>
              <img src="
                <?php 
                  $page_obj = get_page_by_path( 'facilities' );
                  $page_id = $page_obj->ID;
                  echo the_field('ohakoya_image2', $page_id);
                ?>
              " alt="" class="facilitiesImage">
              <div>
                <h4>
                  <?php 
                      $page_obj = get_page_by_path( 'facilities' );
                      $page_id = $page_obj->ID;
                      echo the_field('space2', $page_id);
                    ?>
                </h4>
                <ul class="itemList">
                  <?php 
                    $page_obj = get_page_by_path( 'facilities' );
                    $page_id = $page_obj->ID;
                    echo the_field('ohakoya_item2', $page_id);
                  ?>

                  <!-- <li>４人掛けテーブル</li>
                  <li>２人掛けカウンタ</li>
                  <li>靴入れ（６人分）</li>
                  <li>Wi-Fi</li>
                  <li>トイレ</li> -->
                </ul>
              </div>
            </li>
            <?php 
              $page_obj = get_page_by_path( 'facilities' );
              $page_id = $page_obj->ID;
              if(get_field('ohakoya_image3', $page_id) ):
            // if( get_field('ohakoya_image3') ): 
            ?>
            <li>
              <img src="
                <?php 
                  $page_obj = get_page_by_path( 'facilities' );
                  $page_id = $page_obj->ID;
                  echo the_field('ohakoya_image3', $page_id);
                ?>
              " alt="" class="facilitiesImage">
              <div>
                <h4>
                  <?php 
                      $page_obj = get_page_by_path( 'facilities' );
                      $page_id = $page_obj->ID;
                      echo the_field('space3', $page_id);
                    ?>
                </h4>
                <ul class="itemList">
                  <?php 
                    $page_obj = get_page_by_path( 'facilities' );
                    $page_id = $page_obj->ID;
                    echo the_field('ohakoya_item3', $page_id);
                  ?>

                  <!-- <li>４人掛けテーブル</li>
                  <li>２人掛けカウンタ</li>
                  <li>靴入れ（６人分）</li>
                  <li>Wi-Fi</li>
                  <li>トイレ</li> -->
                </ul>
              </div>
            </li>
            <?php else: ?>
            <?php endif; ?>
          </ul>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/ohakoya_deco.svg" alt="">
        </div>
      </li>
      <li class="secondary">
        <div class="title">
          <h3>オハコ デッキ</h3>
          <span>OHAKO DECK</span>
        </div>
        <div class="spaceListWrapper">
          <ul class="spaceList">
            <li>
            <img src="
                <?php 
                  $page_obj = get_page_by_path( 'facilities' );
                  $page_id = $page_obj->ID;
                  echo the_field('ohakodeck_image', $page_id);
                ?>
              " alt="" class="facilitiesImage">
              <div>
                <ul class="itemList">
                  <?php 
                    $page_obj = get_page_by_path( 'facilities' );
                    $page_id = $page_obj->ID;
                    echo the_field('ohakodeck_item', $page_id);
                  ?>
                  <!-- <li>電気（業務用ではありません）</li>
                  <li>ドラムコード</li> -->
                </ul>
              </div>
            </li>
          </ul>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/ohakoDeck_deco.svg" alt="">
        </div>
      </li>
      <li class="tertiary">
        <div class="title">
          <h3>オハコ ヤード</h3>
          <span>OHAKO YARD </span>
        </div>
        <div class="spaceListWrapper">
          <ul class="spaceList">
            <li>
            <img src="
                <?php 
                  $page_obj = get_page_by_path( 'facilities' );
                  $page_id = $page_obj->ID;
                  echo the_field('ohakoyard_image', $page_id);
                ?>
              " alt="" class="facilitiesImage">
              <div>
                <ul class="itemList">
                  <?php 
                    $page_obj = get_page_by_path( 'facilities' );
                    $page_id = $page_obj->ID;
                    echo the_field('ohakoyard_item', $page_id);
                  ?>

                  <!-- <li>無人販売所１台</li>
                  <li>屋台２台</li>
                  <li>人工芝（ 2m×5m×3枚）</li>
                  <li>木の椅子10脚</li>
                  <li>パイプ椅子40脚</li>
                  <li>テント３張り</li>
                  <li>ワイヤレススピーカー１個</li> -->
                </ul>
              </div>
            </li>
          </ul>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/ohakoYard_deco.svg" alt="">
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

  <!-- faq -->
  <section class="faq wrapper">
    <div class="section_title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logoSimbol.png" alt="" loading="lazy" width="30" height="30">
      <span>FAQ</span>
      <h2>よくある質問</h2>
    </div>
    <ul>
      <li>
        <p class="question">利用料金はかかりますか？</p>
        <p class="answer">2025年3月31日迄は電気、水道、出店料が無料です。</p>
      </li>
      <li>
        <p class="question">宣伝は何かしてくれるのですか？</p>
        <p class="answer">OHAKO BASE掲示板への掲出が2週間前から可能です。他ご希望の場合、<br>OHAKOオフィシャルInstagramでも告知が可能です。</p>
      </li>
      <li>
        <p class="question">出店内容に制限はありますか？</p>
        <p class="answer">基本的に制限はありません。<br>
          公序良俗に反する内容、ネットワーキング、宗教等の勧誘目的の出店はお断りいたします。</p>
      </li>
      <li>
        <p class="question">保健所の申請は必要ですか？</p>
        <p class="answer">OHAKOYAでは飲食店営業許可を取得していますが、出店内容によっては許可が必要な内容がございますので、出店者様ご自身で保健所にご確認ください。</p>
      </li>
      <li>
        <p class="question">前日の搬入は可能ですか？</p>
        <p class="answer">前日に出店者がいる可能性があるため、基本的に当日搬入でお願いしています。</p>
      </li>
    </ul>
  </section>
  <!-- /faq -->

  <!-- form -->
  <section class="form wrapper">
    <div class="formInner">
      <div class="form_title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logo.png" alt="OHAKO">
        <h2>出店のお申し込み</h2>
      </div>
      <p class="lead">出店のお申し込みをする場合は、以下の流れに沿って<br class="disp_pc">フォームの入力を完了したのち、<br class="disp_sp">お申し込みください。</p>
      <div class="step">
        <div class="stepTitle">
          <div class="step_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/formIcon_find.svg" alt="" loading="lazy" width="" height=""></div>
          <div class="stepItem">
            <div class="stepNo">STEP1</div>
            <p class="stepText">注意事項・提出書類の確認</p>
          </div>
        </div>
        <p>出店希望の方は、下記ファイルをダウンロードし、「注意事項」及び「鍵の借り受け、返却」をお読みの上、「出店内容の入力」へお進みください。</p>
        <ul class="downloadList">
          <li>ご出店者注意事項</li>
          <li>鍵の受け取り及び返却方法について</li>
          <li>開始時チェックリスト</li>
          <li>退出時チェックリスト</li>
          <li>出店者アンケート</li>
          <li>来場者アンケート  </li>
        </ul>
        <!-- download -->
      </div>
      <div class="step">
        <div class="stepTitle">
          <div class="step_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/formIcon_mail.svg" alt="" loading="lazy" width="" height=""></div>
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