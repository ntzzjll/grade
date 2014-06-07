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
    var level1, level2;

    // 主菜单栏选项卡切换效果
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

        // 更改当前位置
        level1 = $(this).find('span').html();
        $("span[name=location]").html(level1);
        var jj = CONTROL + '/' + GROUPNAME + '/' + need;
        // 中间iframe窗口内容切换
        $('iframe[name=ifcontent]').attr('src', jj);
    });

    // 左侧子栏目选项卡效果切换
    $("#left-content ul li").click(function() {
        // 获取子栏目导航路径
        var nav = $(this).parent().attr('nav');
        var subnav = $(this).attr('subnav');
        var url = nav + "/" + subnav;

        // 改变子栏目选中状态
        $(this).parent().find('li').removeClass('hover');
        $(this).addClass('hover');

        // 更改当前位置
        level2 = $(this).html();
        $("span[name=location]").html(level1 + '>' + level2);

        // 控制子栏目跳转菜单
        var jj = CONTROL + '/' + GROUPNAME + '/' + url;
        $('iframe[name=ifcontent]').attr('src', jj);
    });

    // 选择日期控件
    $("input[name=txtStart],input[name=txtEnd]").focus(function() {
        $(this).datetimepicker();
    });

});