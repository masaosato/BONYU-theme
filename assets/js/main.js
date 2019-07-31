//munu
$(function(){
    //.accordion1の中のp要素がクリックされたら
	$('.topMenu p').click(function(){
		//クリックされた.accordion1の中のp要素に隣接するul要素が開いたり閉じたりする。
		$(this).next('ul').slideToggle();
	});
});

//onclickでアニメーション
//topCloudLeft
// $(function(){
//     $('#topCloudLeft').hover(
//         function(){
//             $(this).addClass("animated fadeOut");
//         },
//         function() {
//             $(this).removeClass("animated fadeOut");
//         }
//     );
// });
//topCloudCenter
// $(function(){
//     $('#topCloudCenter').hover(
//         function(){
//             $(this).addClass("animated fadeOut");
//         },
//         function() {
//             $(this).removeClass("animated fadeOut");
//         }
//     );
// });
//topCloudRight
// $(function(){
//     $('#topCloudRight').hover(
//         function(){
//             $(this).addClass("animated fadeOut");
//         },
//         function() {
//             $(this).removeClass("animated fadeOut");
//         }
//     );
// });
//circleMenu
// $(function(){
//     $('#menuListCont1').hover(
//         function(){
//             $(this).addClass("animated fadeOut");
//         },
//         function() {
//             $(this).removeClass("animated fadeOut");
//         }
//     );
// });
// $(function(){
//     $('#menuListCont2').hover(
//         function(){
//             $(this).addClass("animated fadeOut");
//         },
//         function() {
//             $(this).removeClass("animated fadeOut");
//         }
//     );
// });
// $(function(){
//     $('#menuListCont3').hover(
//         function(){
//             $(this).addClass("animated fadeOut");
//         },
//         function() {
//             $(this).removeClass("animated fadeOut");
//         }
//     );
// });
// $(function(){
//     $('#menuListCont4').hover(
//         function(){
//             $(this).addClass("animated fadeOut");
//         },
//         function() {
//             $(this).removeClass("animated fadeOut");
//         }
//     );
// });
// $(function(){
//     $('#menuListCont5').hover(
//         function(){
//             $(this).addClass("animated fadeOut");
//         },
//         function() {
//             $(this).removeClass("animated fadeOut");
//         }
//     );
// });
// $(function(){
//     $('#menuListCont6').hover(
//         function(){
//             $(this).addClass("animated fadeOut");
//         },
//         function() {
//             $(this).removeClass("animated fadeOut");
//         }
//     );
// });

// burgar menu
function toggleNav() {
  var body = document.body;
  var hamburger = document.getElementById('js-hamburger');
  var blackBg = document.getElementById('js-black-bg');

  hamburger.addEventListener('click', function() {
    body.classList.toggle('nav-open');
  });
  blackBg.addEventListener('click', function() {
    body.classList.remove('nav-open');
  });
}
toggleNav();
