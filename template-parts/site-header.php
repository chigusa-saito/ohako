<?php
/**
 * OHAKO
 * template-parts/site-header.php
 */
?>

<header>
  <!-- header -->
  <a href="/">
    <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logo.png" alt="OHAKO" width="345" height="90"></h1>
  </a>
  <!-- menu -->
  <nav>
    <div>
      <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/logo.png" alt="OHAKO" width="345" height="90" class="disp_sp"></a>
      <ul>
        <li>
          <a href="#about">
            <p>OHAKOとは</p>
          </a>
        </li>
        <li>
          <a href="#information">
            <p>施設情報</p>
          </a>
        </li>
        <li>
          <a href="#flow">
            <p>出店の流れ</p>
          </a>
        </li>
        <li>
          <a href="#faq">
            <p>よくある質問</p>
          </a>
        </li>
      </ul>
      <a href="#contact" class="cvButton">出店のお申し込み</a>
    </div>
  </nav>
  <!-- /menu -->
  <button class="navButton disp_sp">
    <span></span>
    <span></span>
  </button>
  <!-- header -->
</header>