<?php
/**
 * OHAKO
 * page-about.php
 */
?>

  <!-- about -->
  <section class="about">
    <div class="topArea">
      <div class="titleArea">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/about_topImage.jpg" alt="OHAKO" loading="lazy" width="" height="" class="about_topImage">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logoText.svg" alt="OHAKO">とは…</h2>
      </div>
      <div class="textArea">
        <div class="wrapper">
          <h3>
            <?php
            $post_id = get_page_id02('about'); //ページのIDを取得
            echo esc_html(get_post_meta($post_id, 'subtitle', true));
            ?>
          </h3>
          <!-- <h3>瑞穂町に新しいコンセプトで誕生した町の施設、OHAKO BASE（オハコベース）</h3> -->
          <p>
            <?php
            $post_id = get_page_id02('about'); //ページのIDを取得
            echo esc_html(get_post_meta($post_id, 'bodytext', true));
            ?>
          </p>
          <!-- <p>
            カフェをやってみたい、お弁当を販売したい、お料理を広めたい、自社商品のPRとして自分で作った雑貨を販売してみたい。<br>
            商品の意見をたくさんの人に聞いてみたい。自分のお店のサテライトショップとして使いたい。みんなで楽しくマルシェをやりたい。<br>
            アロマやヨガのスクールをやってみたい。読書会やサークル活動をやりたいなど。
          </p>
          <p>皆さんのやりたいこと、やってみたいことを実現するOHAKO BASEで、一緒に瑞穂町を盛り上げてみませんか？</p> -->
        </div>
        <div class="imageArea1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mapObjectMizuho.svg" alt="Mizuho is Here!" loading="lazy" width="" height="" class="mapObjectMizuho">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/about_image1.jpg" alt="" loading="lazy" width="" height="" class="image1">
        </div>
      </div>
    </div>
    <div class="imageArea2">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/about_image2.jpg" alt="" loading="lazy" width="" height="" class="image2">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/about_image3.jpg" alt="" loading="lazy" width="" height="" class="image3">
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