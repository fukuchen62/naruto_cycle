"use strict";

/* ---------------文字回転アニメーション---------------  */
// const before = $('.text');
// const text = before.text();
// const textArray = text.split('');

// let after = '';
// $.each(textArray,function(index,val){
// after += "<span>" + val + "</span>";
// });

// before.html(after);

// const textcnt = textArray.length;
// const circleR = ($('.circle').height()) / 2;
// const fontH = ($('.inner').height());
// const dist = circleR - fontH;

// $('span').each(function(index) {
// const num = index + 1;
//   const radX = Math.sin(360 / textcnt * num * (Math.PI / 180));
//   const radY = Math.sin((90 - (360 / textcnt * num)) * (Math.PI / 180));
//   $(this).css('transform', 'translate(' + dist * radX + 'px, ' + -(dist * radY) + 'px) rotate(' + 360 / textcnt * num + 'deg)');
// });
