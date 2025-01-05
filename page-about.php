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