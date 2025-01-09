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


// about背景パララックス
//指定エリア内に要素を追従させる関数（追従要素,追従エリア）
const areaFixedFunk = (fixedElm,fixedArea) => {
	//エリアチェック
	const areas = document.querySelectorAll(fixedArea);
	if(areas.length === 0) {
		return;
	}

	//追従チェック関数
	const checkFixed = (target,area) => {
		//要素の位置と高さを取得
		const startPosi = area.getBoundingClientRect().top;
		const targetHeight = target.clientHeight;
		const areaHeight = area.clientHeight;
		const endPosi = startPosi + areaHeight;

		//エリア内の処理
		if(0 > startPosi && targetHeight < endPosi) {
			target.classList.add('is-fixed');
			target.style.top = '';

		//エリアより上の処理
		} else if(0 <= startPosi) {
			target.classList.remove('is-fixed');
			target.style.top = '';

		//エリアより下の処理
		} else {
			target.classList.remove('is-fixed');
			//停止位置を設定
			target.style.top = (areaHeight - targetHeight - 100) + 'px';
		}
	}

	//エリア毎に処理
	areas.forEach((area) => {
		//エリア内に追従要素が存在する場合のみ処理する
		const target = area.querySelector(fixedElm);
		if(target) {
			checkFixed(target,area);
			window.addEventListener('resize', ()=> {
				checkFixed(target,area);
			});
			window.addEventListener('scroll', ()=> {
				checkFixed(target,area);
			}, {passive: true});
		}
	});
}

//関数呼び出し（追従要素,追従エリア）
areaFixedFunk('.js-fixed-elm','.js-fixed-area');
