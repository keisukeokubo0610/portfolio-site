import './bootstrap';

import { gsap } from "gsap";



var livePattern = {
    canvas: null,
    context: null,
    cols: 0,
    rows: 0,
    colors: [252, 251, 249, 248, 241, 240],
    triangleColors: [],
    destColors: [],

    init: function () {
        this.canvas = document.getElementById('canvas');
        this.context = this.canvas.getContext('2d');
        this.cols = Math.floor(document.body.clientWidth / 24);
        this.rows = Math.floor(document.body.clientHeight / 24) + 1;

        this.canvas.width = document.body.clientWidth;
        this.canvas.height = document.body.clientHeight;

        this.drawBackground();
        this.animate();
    },

    drawTriangle: function (x, y, color, inverted) {
        inverted = inverted == undefined ? false : inverted;

        this.context.beginPath();
        this.context.moveTo(x, y);
        this.context.lineTo(inverted ? x - 22 : x + 22, y + 11);
        this.context.lineTo(x, y + 22);
        this.context.fillStyle = "rgb(" + color + "," + color + "," + color + ")";
        this.context.fill();
        this.context.closePath();
    },

    getColor: function () {
        return this.colors[(Math.floor(Math.random() * 6))];
    },

    drawBackground: function () {
        var eq = null;
        var x = this.cols;
        var destY = 0;
        var color, y;

        while (x--) {
            eq = x % 2;
            y = this.rows;

            while (y--) {
                destY = Math.round((y - 0.5) * 24);

                this.drawTriangle(x * 24 + 2, eq == 1 ? destY : y * 24, this.getColor());
                this.drawTriangle(x * 24, eq == 1 ? destY : y * 24, this.getColor(), true);
            }
        }
    },

    animate: function () {
        var me = this;

        var x = Math.floor(Math.random() * this.cols);
        var y = Math.floor(Math.random() * this.rows);
        var eq = x % 2;

        if (eq == 1) {
            me.drawTriangle(x * 24, Math.round((y - 0.5) * 24), this.getColor(), true);
        } else {
            me.drawTriangle(x * 24 + 2, y * 24, this.getColor());
        }

        setTimeout(function () {
            me.animate.call(me);
        }, 10);
    },
};

!function () { livePattern.init(); }()

// // オープニングアニメーション
// window.addEventListener("DOMContentLoaded", () => {
//     // gsap.defaults({
//     //     repeat: 0, 
//     //     repeatDelay: 0.5, // 繰り返し時に0.5秒の待機
//     // });

//     const container = document.querySelector(".opening-container");
//     const gap = 5; // 要素間のギャップ（ピクセル）

//     // 1vwのピクセル値を計算
//     const vw = window.innerWidth / 100;
//     // div要素の幅と高さをピクセルで計算
//     const rectSize = 3 * vw + gap; // 3vw + ギャップ

//     // 必要な列数と行数を計算
//     const columns = Math.floor(window.innerWidth / rectSize);
//     const rows = Math.floor(window.innerHeight / rectSize);

//     // 必要なdiv要素の総数を計算
//     const totalRects = columns * rows;

//     for (let i = 0; i < totalRects; i++) {
//         const rect = document.createElement("div");
//         rect.classList.add("rect");
//         container.appendChild(rect);
//     }

//     // 格子状に適用
//     gsap.from(".rect", {
//         scale: 0,
//         duration: 0.5,
//         ease: "power4.out",
//         stagger: {
//             each: 0.05,
//             from: "center", // 中央から
//             grid: "auto", // 格子状に開始
//             ease: "power4.out", // 間隔に対するイージング
//         },
//         onComplete: () => {
//             const tl = gsap.timeline({ repeat: 0, repeatDelay: 1 });
//             tl.to(".rect", {
//                 duration: 1, // 2秒間アニメーション
//                 borderRadius: "50%", // 角丸10px

//                 onComplete: () => {
//                     document.querySelector(".rect").style.display = "none";
//                 }
//             });
//             tl.to(".opening-container", {
//                 duration: 1, // フェードアウトにかかる時間（秒）
//                 autoAlpha: 0, // 100%透過

//                 // onComplete: () => {
//                 //     document.querySelector(".opening-container").style.display = "none";
//                 // }
//             });


//         }
//     });
// });



var $section = $('.js-section'); // 各スライド
var $pager = $('#js-pager'); // ページャー枠

// scrollifyのオプション設定
var option = {
    section: '.js-section',
    easing: "swing",
    scrollSpeed: 600,
    scrollbars: true,
    updateHash: false, // スクロール時アドレスバーのURLを更新
    // standardScrollElements: '.section-0', //通常スクロール要素    
    before: function (index, section) {
        setCurrent(index); // 現在のsectionにクラスを設定
        pagerCurrent(index); // ページャーに対応する順番にクラス名を付与
    },
    afterRender: function () {
        createPager(); // ページャーの作成
        setCurrent(); // 現在のsectionにクラスを設定
    }
};

$(function () {
    $.scrollify(option); // scrollifyの実行
});



// ==============================
// functions
// ------------------------------

// 現在のsectionにクラスを設定
function setCurrent(index = 0) {
    // 一旦、すべてのsectionのクラスをとる
    $section.removeClass('is-show');
    // 現在のsectionのみにクラスを付与
    $section.eq(index).addClass('is-show');
}

// ページャーに対応する順番にクラス名を付与
function pagerCurrent(index = 0) {
    var $li = $pager.find('li');
    $li.removeClass('is-current');
    $li.eq(index).addClass('is-current');
}

// ページャーの作成
function createPager() {
    $section.each(function (i, e) {
        // ページ内リンク先の作成
        var sectionName = $(e).attr('data-section-name');
        // 最初のliにはクラスを付与
        var addClass = '';
        if (i === 0) {
            addClass = 'is-current';
        }
        // liのHTML作成
        var html = '';
        html += '<li class="' + addClass + '">';
        html += '<a href="#' + sectionName + '"></a>';
        html += '</li>';
        $pager.append(html);
    });

    pagerLink();
}

// ページャーでaタグをクリックされたらスクロールする
function pagerLink() {
    $pager.find('a').on('click', function () {
        $.scrollify.move($(this).attr("href"));
    });
}

//2用：アニメーション属性を持つ要素を非表示、animated属性を追加
$('*[animation]').addClass('invisible animated');

$(window).scroll(function () {
    $('*[animation]').each(function () {
        //アニメーションをさせる要素の上の位置
        var imgPos = $(this).offset().top;
        //ウインドウ上部の位置
        var scroll = $(window).scrollTop();
        //アニメーションを発火させる位置
        var position = imgPos - window.innerHeight + window.innerHeight / 5;

        //animation属性に記載されたアニメーション名を取得
        if (this.hasAttribute('animation')) {
            var animation = this.getAttribute('animation');
        }
        //発火位置まで来たら要素を表示し、アニメーションをclass名に追加
        if (scroll > position) {
            $(this).removeClass('invisible').addClass(animation);
        }
        //ページのトップまでスクロールしたら要素を非表示（リセット）
        if (scroll < 10) {
            $(this).removeClass(animation).addClass('invisible');
        }
    });
});


$(window).on('resize', function () {
    var windowHeight = $(window).height(); // ウィンドウの高さを取得
    var sectionHeight = $('.js-section').height(); // 最初のセクションの高さを取得

    if (windowHeight > sectionHeight) {
        // ウィンドウの高さがセクションの高さを超えた場合
        $('.section').css('padding', '0px'); // paddingの調整
    } else {
        $('.section').css('padding', '60px 0'); // paddingの調整
    }
}).trigger('resize'); // 初回読み込み時にも実行


$(document).ready(function () {
    var $magic = $(".magic"),
        magicWHalf = $magic.width() / 2;

    // .section-0の範囲内でのみmousemoveイベントを処理する
    $(".section-0").on("mousemove", function (e) {
        // 拡大アニメーションを追加

        // .section-0の範囲内のマウスの相対位置を計算
        var relX = e.pageX - $(this).offset().left;
        var relY = e.pageY - $(this).offset().top;

        // .magicクラスの要素をマウスの位置に合わせて動かす
        // ただし、.section-0内の相対位置を基に設定
        $magic.css({ "left": relX - magicWHalf, "top": relY - magicWHalf });
    });
});

$(document).ready(function () {
    var $magic = $(".magic")
    $('#scrollButton').click(function () {
        setTimeout(function () {
            $magic.addClass("expand");
        }, 200); // 0.6秒後に拡大

        $('html, body').animate({
            scrollTop: $('#targetElement').offset().top
        }, 1600); // 1000ミリ秒（1秒）かけてスクロール
    });
});
