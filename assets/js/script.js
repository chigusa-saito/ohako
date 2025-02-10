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
  $("nav a").click(function(){
    $(".navButton").toggleClass("active");
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
$(".custom-select").each(function() {
  var classes = $(this).attr("class"),
      id      = $(this).attr("id"),
      name    = $(this).attr("name");
  var template =  '<div class="' + classes + '">';
     template += '<span class="custom-select-trigger">' + "(3つの中からお選びください)"  + '</span>';
      template += '<div class="custom-options">';
      
      $(this).find("option").each(function() {
        template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
      });
  template += '</div></div>';
  
  $(this).wrap('<div class="custom-select-wrapper"></div>');
  $(this).hide();
  $(this).after(template);
});
$(".custom-option:first-of-type").hover(function() {
  $(this).parents(".custom-options").addClass("option-hover");
}, function() {
  $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-trigger").on("click", function() {
  $('html').one('click',function() {
    $(".custom-select").removeClass("opened");
  });
  $(this).parents(".custom-select").toggleClass("opened");
  event.stopPropagation();
});
$(".custom-option").on("click", function() {
  $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
  $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
  $(this).addClass("selection");
  $(this).parents(".custom-select").removeClass("opened");
  $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
});


/*-------------------------
select time指定
--------------------------*/
$(".custom-select-time").each(function() {
  var classes = $(this).attr("class"),
      id      = $(this).attr("id"),
      name    = $(this).attr("name");
  var template =  '<div class="' + classes + '">';
      // template += '<span class="custom-select-trigger">';
      $(this).find("option").each(function(num) {
        if(num==0){
        template += '<span class="custom-select-trigger-time ' + $(this).attr("value") + '">' + $(this).html() + '</span>';
      }});
    //  template += '<span class="custom-select-trigger">' + "(3つの中からお選びください)"  + '</span>';
      template += '<div class="custom-options">';
      
      $(this).find("option").each(function() {
        template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
      });
  template += '</div></div>';
  
  $(this).wrap('<div class="custom-select-wrapper"></div>');
  $(this).hide();
  $(this).after(template);
});
$(".custom-option:first-of-type").hover(function() {
  $(this).parents(".custom-options").addClass("option-hover");
}, function() {
  $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-trigger-time").on("click", function() {
  $('html').one('click',function() {
    $(".custom-select-time").removeClass("opened");
  });
  $(this).parents(".custom-select-time").toggleClass("opened");
  event.stopPropagation();
});
$(".custom-option").on("click", function() {
  $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
  $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
  $(this).addClass("selection");
  $(this).parents(".custom-select-time").removeClass("opened");
  $(this).parents(".custom-select-time").find(".custom-select-trigger-time").text($(this).text());
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

// ページ内遷移でURLからIDを削除
$('a[href^="#"]').click(function(){
  var href= $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $("html, body").animate({scrollTop:position},  "swing");
  return false;
});
