// JavaScript Document

/*-------------------------
モバイルの時のボタン
--------------------------*/
$(function () {
  $(".btn-trigger").click(function(){
    $(".btn-trigger").toggleClass("active");
  });
  $(".btn-trigger").click(function(){
    $(".navigation").toggleClass("open");
  });
})


//PageTopボタン　すぅっと現れる
jQuery(function() {
    var pagetop = $('#page_top');   
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {  //100pxスクロールしたら表示
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500); //0.5秒かけてトップへ移動
        return false;
    });
});

/*-------------------------
select space指定
--------------------------*/
//初期値
// $('.selectBox__output').each(function () {
//   const defaultText = $(this).next('.selectBox__selector').children('.selectBox__selectorItem:first-child').text()
//   $(this).text(defaultText);
// })

//出力の枠をクリックした時の動作
$('.selectBox__output').on('click', function (e) {
  e.stopPropagation();
  if ($(this).hasClass('open')) {
    $(this).next('.selectBox__selector').slideUp();
  } else {
    $(this).next('.selectBox__selector').slideDown();
  }
  $(this).toggleClass('open');
  $(".selectSpace").toggleClass('open');
});

$(function () {
  $(".selectBox__output").click(function(){
    $(".selectSpace").toggleClass("open");
  });
})


//選択肢をクリックした時の動作
$('.selectBox__selectorItem').on('click', function () {
  const selectVal = $(this).data('select');
  const selectText = $(this).text();
  $(this).parent('.selectBox__selector').prev('.selectBox__output').text(selectText);
  $(this).parent('.selectBox__selector').slideUp();
  $(this).parents('.selectBox__output').slideDown();
  $(this).parent('.selectBox__selector').next('select').val(selectVal);
});

/*-------------------------
select 時間指定
--------------------------*/
//初期値
$('.selectBox__output_time').each(function () {
  const defaultText = $(this).next('.selectBox__selector').children('.selectBox__selectorItem:first-child').text()
  $(this).text(defaultText);
})

//出力の枠をクリックした時の動作
$('.selectBox__output_time').on('click', function (e) {
  e.stopPropagation();
  if ($(this).hasClass('open')) {
    $(this).next('.selectBox__selector').slideUp();
  } else {
    $(this).next('.selectBox__selector').slideDown();
  }
  $(this).toggleClass('open');
  $(".selectSpace").toggleClass('open');
});

$(function () {
  $(".selectBox__output_time").click(function(){
    $(".selectSpace").toggleClass("open");
  });
})


//選択肢をクリックした時の動作
$('.selectBox__selectorItem').on('click', function () {
  const selectVal = $(this).data('select');
  const selectText = $(this).text();
  $(this).parent('.selectBox__selector').prev('.selectBox__output_time').text(selectText);
  $(this).parent('.selectBox__selector').slideUp();
  $(this).parents('.selectBox__output_time').slideDown();
  $(this).parent('.selectBox__selector').next('select').val(selectVal);
});

