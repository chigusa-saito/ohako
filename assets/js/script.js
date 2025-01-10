// JavaScript Document

/*-------------------------
モバイルの時のボタン
--------------------------*/
$(function () {
  $(".navButton").click(function(){
    $(".navButton").toggleClass("active");
  });
  $(".navButton").click(function(){
    $("nav").toggleClass("open");
  });
  $("nav a").click(function(){
    $("nav").toggleClass("open");
  });
})


/*-------------------------
ふわっと表示
--------------------------*/
jQuery(function(){
  jQuery('.fuwat').css('visibility','hidden');
  jQuery(window).scroll(function(){
   var windowHeight = jQuery(window).height(),
       topWindow = jQuery(window).scrollTop();
   jQuery('.fuwat').each(function(){
    var objectPosition = jQuery(this).offset().top;
    if(topWindow > objectPosition - windowHeight + 200){
     jQuery(this).addClass("fuwatAnime");
    }
   });
  });
});

// mv
$(function(){
  var effectTargetRoot  = '.effect-onload';
  var effectTargetClass = ['.fadein'];
  $.each(effectTargetClass, function(i, value) {
    var effectTarget = $(effectTargetRoot + ' ' + value);
    //console.log('effectTarget= ' + i + '：' + effectTargetRoot + ' ' + value);
    $(document).ready(function (){
      effectTarget.each(function(){
        $(this).addClass("active");
      });
    });
  });
});


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
  const selectVal = $(this).data('selectspace');
  const selectText = $(this).text();
  $(this).parent('.selectBox__selector').prev('.selectBox__output').text(selectText);
  $(this).parent('.selectBox__selector').slideUp();
  $(this).parents('.selectBox__output').slideDown();
  $(this).parent('.selectBox__selector').next('selectspace').val(selectVal);
  $(".selectSpace").toggleClass('open');
});

/*-------------------------
select 時間指定for
--------------------------*/
//初期値
$('.selectBox__output_timefor').each(function () {
  const defaultText = $(this).next('.selectBox__selector').children('.selectBox__selectortimefor:first-child').text()
  $(this).text(defaultText);
})

//出力の枠をクリックした時の動作
$('.selectBox__output_timefor').on('click', function (e) {
  e.stopPropagation();
  if ($(this).hasClass('open')) {
    $(this).next('.selectBox__selector').slideUp();
  } else {
    $(this).next('.selectBox__selector').slideDown();
  }
  $(this).toggleClass('open');
  $(".selectTimefor").toggleClass('open');
});

$(function () {
  $(".selectBox__output_timefor").click(function(){
    $(".selectTimefor").toggleClass("open");
  });
})

//選択肢をクリックした時の動作
$('.selectBox__selectortimefor').on('click', function () {
  const selectVal = $(this).data('selecttimefor');
  const selectText = $(this).text();
  $(this).parent('.selectBox__selector').prev('.selectBox__output_timefor').text(selectText);
  $(this).parent('.selectBox__selector').slideUp();
  $(this).parents('.selectBox__output_timefor').slideDown();
  $(this).parent('.selectBox__selector').next('selecttimefor').val(selectVal);
  $(".selectBox__output_timefor").toggleClass('open');
});


/*-------------------------
select 時間指定to
--------------------------*/
//初期値
$('.selectBox__output_timeto').each(function () {
  const defaultText = $(this).next('.selectBox__selector').children('.selectBox__selectortimeto:first-child').text()
  $(this).text(defaultText);
})

//出力の枠をクリックした時の動作
$('.selectBox__output_timeto').on('click', function (e) {
  e.stopPropagation();
  if ($(this).hasClass('open')) {
    $(this).next('.selectBox__selector').slideUp();
  } else {
    $(this).next('.selectBox__selector').slideDown();
  }
  $(this).toggleClass('open');
  $(".selectTimeto").toggleClass('open');
});

$(function () {
  $(".selectBox__output_timeto").click(function(){
    $(".selectTimeto").toggleClass("open");
  });
})

//選択肢をクリックした時の動作
$('.selectBox__selectortimeto').on('click', function () {
  const selectVal = $(this).data('selecttimeto');
  const selectText = $(this).text();
  $(this).parent('.selectBox__selector').prev('.selectBox__output_timeto').text(selectText);
  $(this).parent('.selectBox__selector').slideUp();
  $(this).parents('.selectBox__output_timeto').slideDown();
  $(this).parent('.selectBox__selector').next('selecttimeto').val(selectVal);
  $(".selectBox__output_timeto").toggleClass('open');
});


// datepicker初期表示時の文字色変更
$(window).on('load', function ()
	{
		$.each($('input[type=date]'), (index, datebox) =>
			{
				datebox.style.color = (datebox.value) ? '#080404' : 'transparent';
			}
		);
	}
);

$(function ()
	{
		// フォーカス取得時は入力用にいったん色を付ける
		$('input[type=date]').focus(function (event)
			{
				this.style.color = '#080404';
			}
		);

		// フォーカス喪失後の文字色変更
		$('input[type=date]').blur(function (event)
			{
				this.style.color = (this.value) ? '#080404' : '#080404';
			}
		);
	}
);
