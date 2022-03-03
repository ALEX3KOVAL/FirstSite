function onIn() {
    $('.bord__block').css('border', 'solid 1px white');
    $('.image_about__block').css('border', '0.2rem solid rgb(22,22,215)');
}

function onOut() {
    $('.bord__block').css('border', 'solid 1px rgb(22,22,215)');
    $('.image_about__block').css('border', '0.2rem solid white');
}

function change_blocks() {
    let arr = document.getElementsByClassName("task3_res")[0].children, r = Math.floor(Math.random() * (256)), g = Math.floor(Math.random() * (256)), b = Math.floor(Math.random() * (256));
    for (let i = 0; i < arr.length; i++) {
        arr[i].style = "background: #ff9966";
    }
    arr[Math.floor(Math.random() * arr.length)].style = "background: #" + r.toString(16) + g.toString(16) + b.toString(16);
}

$(function(){
    var background_menu = $('.background__menu');
$(window).scroll(function(event){
    var top = $(this).scrollTop();
    if (top > 0) {
        background_menu.css('top', 21);
        background_menu.css('z-index', 100);
        background_menu.css('position', 'fixed');
        background_menu.css('width', 1532);
        $('.full-screen-preview').css('width', 1532);
        $('.home__block').css('width', 1530);
        $('.about__block').css('width', 1532);
        $('.preview__header').css('width', 1532);
        if (top > 617 && top < 1100) {
            $('.header__label').css('color', 'rgb(102,132,255)'); //синий
            $('.home').css('background', 'rgba(48,48,48,0)'); //серый
            $('.about__me').css('background', 'rgb(0,34,170)'); //темно-синий
            $('.rezume').css('background', 'rgba(48,48,48,0)');
            var new_stylesheet = "<style type='text/css' id='currentCSS'>.full-screen-preview::-webkit-scrollbar-thumb {width:4px;background:rgb(102,132,255); visibility:visible;} .full-screen-preview::-webkit-scrollbar {width:4px;visibility:visible;} .full-screen-preview::-webkit-scrollbar-track {width:4px;visibility:visible;}</style>";
            var existingStylesheet = $("#currentCSS");
            if (existingStylesheet.length) {
                existingStylesheet.replaceWith(new_stylesheet);
            } else {
                $(new_stylesheet).appendTo('head');
            }
        }
        else if (top > 0 && top < 617) {
            $('.header__label').css('color', '#7FFF00'); //зелёный
            $('.home').css('background', 'rgba(127,255,0,1)');
            $('.about__me').css('background', 'rgb(48,48,48,0)');
            var new_stylesheet = "<style type='text/css' id='currentCSS'>.full-screen-preview::-webkit-scrollbar-thumb {width:4px;background:rgb(127,255,0);visibility:visible;} .full-screen-preview::-webkit-scrollbar {width:4px;visibility:visible;} .full-screen-preview::-webkit-scrollbar-track {width:4px;visibility:visible;}</style>";
            var existingStylesheet = $("#currentCSS");
            if (existingStylesheet.length) {
                existingStylesheet.replaceWith(new_stylesheet);
            } else {
                $(new_stylesheet).appendTo('head');
            }
        }
        else if (top < 1675 && top > 1100) {
            $('.header__label').css('color', '#ff8cff'); //розовый
            $('.home').css('background', 'rgba(48,48,48,0)');
            $('.about__me').css('background', 'rgba(48,48,48,0)');
            $('.rezume').css('background', '#ff8cff');
            $('.tasks__js').css('background', 'rgba(48,48,48,0)');
            var new_stylesheet = "<style type='text/css' id='currentCSS'>.full-screen-preview::-webkit-scrollbar-thumb {width:4px;background:#ff8cff;visibility:visible;} .full-screen-preview::-webkit-scrollbar {width:4px;visibility:visible;} .full-screen-preview::-webkit-scrollbar-track {width:4px;visibility:visible;}</style>";
            var existingStylesheet = $("#currentCSS");
            if (existingStylesheet.length) {
                existingStylesheet.replaceWith(new_stylesheet);
            } else {
                $(new_stylesheet).appendTo('head');
            }
        }
        else if (top > 1675 && top < 2500) {
        	$('.header__label').css('color', '#ff9966'); //розово-оранжевый
            $('.home').css('background', 'rgba(48,48,48,0)');
            $('.about__me').css('background', 'rgba(48,48,48,0)');
            $('.rezume').css('background', 'rgba(48,48,48,0)');
            $('.tasks__js').css('background', '#ff9966');
            var new_stylesheet = "<style type='text/css' id='currentCSS'>.full-screen-preview::-webkit-scrollbar-thumb {width:4px;background:#ff9966;visibility:visible;} .full-screen-preview::-webkit-scrollbar {width:4px;visibility:visible;} .full-screen-preview::-webkit-scrollbar-track {width:4px;visibility:visible;}</style>";
            var existingStylesheet = $("#currentCSS");
            if (existingStylesheet.length) {
                existingStylesheet.replaceWith(new_stylesheet);
            } else {
                $(new_stylesheet).appendTo('head');
            }
        }
    }
    else if (top == 0) {
        $('.home').css('background', 'rgba(127,255,0,1)');
        $('.about__me').css('background', 'rgba(48,48,48,0)');
        background_menu.css('top', 719);
        background_menu.css('position', 'absolute');
        background_menu.css('bottom', 0);
        background_menu.css('width', 1535);
        $('.full-screen-preview').css('width', 1535);
        $('.home__block').css('width', 1534);
        $('.about__block').css('width', 1536);
        $('.preview__header').css('width', 1536);
        var new_stylesheet = "<style type='text/css' id='currentCSS'>.full-screen-preview::-webkit-scrollbar-thumb {width:0;visibility:hidden;} .full-screen-preview::-webkit-scrollbar {width:0;visibility:hidden;} .full-screen-preview::-webkit-scrollbar-track {width:0;visibility:hidden;}</style>";
        var existingStylesheet = $("#currentCSS");
        if (existingStylesheet.length) {
            existingStylesheet.replaceWith(new_stylesheet);
        } else {
            $(new_stylesheet).appendTo('head');
        }
    }
});
$('#image_about_class').hover(onIn, onOut);
$('.home').click(function(event) { window.scrollTo({top:0, behavior:'smooth'});})
$('.about__me').click(function(event) { window.scrollTo({top:743, behavior:'smooth'}); })
$('.rezume').click(function(event) { window.scrollTo({top:1367, behavior:'smooth'}); })
$('.tasks__js').click(function(event) { window.scrollTo({top:1935, behavior:'smooth'}); })
$('.contacts').click(function(event) {
    window.open('/php/quest1.php', '_blank');
})
$('.contacts').mousedown(function(event) {
    if(event.which == 3) {
        window.open('/php/books.php', '_blank');
    }
})
$('.task4_res').click(function(event) { 
txt = ""
do  {
    txt = prompt()
    const ol = document.querySelector("#task4");
    if (txt != null) {
        const li = document.createElement("li");
        li.className = "elemm";
        text = document.createTextNode(txt);
        li.appendChild(text);
        ol.appendChild(li);
    }  
} while (txt != null);
$('.elemm').mousedown(function(event) { if (event.which == 3) { if (confirm(`Вы действительно хотите удалить "${event.target.innerText}" ?`) == true) { event.target.parentNode.removeChild(event.target) }} event.stopPropagation();});
});
$('li slot="item" .sweet').click(function(event) {
    $(event.target).remove();
});
});