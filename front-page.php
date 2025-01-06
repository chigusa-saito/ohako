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

  <!-- aboutページを挿入 -->
  <?php get_template_part( 'page-about'); ?>

  <!-- informationページを挿入 -->
  <?php get_template_part( 'page-information'); ?>

  <!-- facilitiesページを挿入 -->
  <?php get_template_part( 'page-facilities'); ?>

  <!-- facilitiesページを挿入 -->
  <?php get_template_part( 'page-disclaimer'); ?>

  <!-- facilitiesページを挿入 -->
  <?php get_template_part( 'page-flow'); ?>

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