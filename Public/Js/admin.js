/**
 * 重置窗口函数
 * @return {[type]} [description]
 */
function resizeWindow() {
    var winheight = $(window).height() - 91;
    $("#left-content").height(winheight);
    $(".ifcontent").height(winheight).width($(document).width() - 161);
}
/**
 * 当窗口大小更改时，重置窗口
 * @return {[type]} [description]
 */
$(window).resize(function() {
    resizeWindow();
});


$(function() {
    //重置窗口
    resizeWindow();

    $(".navigation ul li").click(function() {
        //切换顶部选项卡
        $(".navigation ul li").removeClass('navigationtop');
        $(this).addClass('navigationtop');

        //切换左侧区域
        $("#left-content ul").addClass("hidden");

        var need = $(this).attr('need');
        $("ul[nav=" + need + "]").removeClass("hidden").css("display", "block");
        $("ul[nav=" + need + "]" + " li").removeClass("hover");
        $("ul[nav=" + need + "]" + " li:first").addClass('hover');

        $('iframe[name=ifcontent]').attr('src', CONTROL + '/Manage/' + need);


    });

    $("#left-content ul li").click(function() {
        // 获取子栏目导航路径
        var nav = $(this).parent().attr('nav');
        var subnav = $(this).attr('subnav');
        var url = nav + "/" + subnav;

        // 改变子栏目选中状态
        $(this).parent().find('li').removeClass('hover');
        $(this).addClass('hover');
        // 控制子栏目跳转菜单
        var jj = CONTROL + '/Manage/' + url;
        $('iframe[name=ifcontent]').attr('src', CONTROL + '/Manage/' + url);


    });

    $("input[name=txtStart],input[name=txtEnd]").focus(function() {
        $(this).datetimepicker();
    });
});