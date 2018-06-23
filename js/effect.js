/*
    各种特效
    By Sparrow
*/
jQuery(document).ready(function($) {
   
    $("input,textarea").keypress(function() {
        $(this).animate({top: "3px"},50);
    });
    $("input,textarea").keyup(function() {
        $(this).animate({top: "0px"},50);
    });
    //处理欢迎页面自适应字体颜色
    var welcomeimg = $(".welcome-banner");
    if(welcomeimg != null) {
    //获得背景图片URL
    bgurl = welcomeimg.css('background-image');
    bgurl = bgurl.replace('url(','').replace(')','').replace(/\"/gi, "");
    console.log(bgurl)
    
    //使用创建图片对象&获得字体颜色
    var img = new Image();
        img.src = bgurl;
        //img.setAttribute('src', '//archive.sparrow.moe/tools/api/php-random-img/')
        img.crossOrigin = '';
        img.addEventListener('load', function () {
            var vibrant = new Vibrant(img);
            var swatches = vibrant.swatches()
            /*
            for (var swatch in swatches)
                if (swatches.hasOwnProperty(swatch) && swatches[swatch])
                    console.log(swatch, swatches[swatch].getHex())
            */
                    
            /*
             * Results into:
             * Vibrant #7a4426
             * Muted #7b9eae
             * DarkVibrant #348945
             * DarkMuted #141414
             * LightVibrant #f3ccb4
             */
            //设置字体颜色

            $("#welcome-title").css("color",swatches["LightVibrant"].getHex())
            $("#welcome-description").css("color",swatches["DarkVibrant"].getHex())
            welcomeimg.css("text-shadow","1px 1px 1px "+swatches["DarkMuted"].getHex());
            /*
            $("#a1").css("color",swatches["Vibrant"].getHex())
            $("#a2").css("color",swatches["Muted"].getHex())
            $("#a3").css("color",swatches["DarkVibrant"].getHex())
            $("#a4").css("color",swatches["DarkMuted"].getHex())
            $("#a5").css("color",swatches["LightVibrant"].getHex())
            */
    });
    
    }


    
});
