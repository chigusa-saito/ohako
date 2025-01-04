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
                $post_id = get_page_id03('information'); //ページのIDを取得
                echo esc_html(get_post_meta($post_id, 'bodytext1', true));
                ?>
              </p>
              <small>※飲食店営業許可を取っています。</small><br>
              <small>※提供する内容によっては別途保健所の許可が必要です。</small>
              <!-- <p>
                駅前に小さなお店を出す。<br>
                誰でも気軽にチャレンジできるOHAKOYAは皆さんのやりたいことを応援します。
              </p>
              <small>※飲食店営業許可を取っています。</small><br>
              <small>※提供する内容によっては別途保健所の許可が必要です。</small> -->
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
                $post_id = get_page_id03('information'); //ページのIDを取得
                echo esc_html(get_post_meta($post_id, 'bodytext2', true));
                ?>
              </p>
              <!-- <p>
                季節によっては、ラグを広げて日向ぼっこなんていうのも良いかもしれません。ライブなどのステージにも。<br>
                使い方は、皆さんのアイデア次第。
              </p> -->
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
              $post_id = get_page_id03('information'); //ページのIDを取得
              echo esc_html(get_post_meta($post_id, 'bodytext3', true));
              ?>
            </p>
            <!-- <p>無人販売所を使ったり、キッチンカーを出店したりイベントを実施したり、みんなで楽しくマルシェを開催したり。駅前立地を活用してみてください。</p> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /information -->
