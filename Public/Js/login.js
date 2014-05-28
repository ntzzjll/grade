$(function() {

    // 用户登录按钮表单提交
    $('#btnlogin').click(function() {
        // 获取用户名、密码和验证码
        var username = $('#account').val();
        var password = $('#password').val();
        var verifycode = $('#verifycode').val();
        // 判断输入是否为空
        if (!username || !password || !verifycode) {
            alert('请输入完整信息!');
            return false;
        }
        // 异步提交数据检查输入是否正确
        $.post(CONTROL + '/checklogin', {
            verifycode: verifycode,
            account: username,
            password: password
        }, function(data) {
            switch (data) {
                case 'errorverify':
                    alert('验证码不匹配!');
                    return false;
                case 'erroraccount':
                    alert('用户名或密码错误!');
                    return false;
                case 'loginok':
                    $('form[name=frmlogin]').submit();
            }
        }, 'html');

        // $('form[name=frmlogin]').submit();
    });
})

// 验证码更新
function changecode(obj) {
    $("#code").attr('src', CONTROL + '/verify/' + Math.random());
    return false;
}