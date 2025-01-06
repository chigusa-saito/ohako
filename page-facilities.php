<?php
/**
 * OHAKO
 * page-facilities.php
 */
?>

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
