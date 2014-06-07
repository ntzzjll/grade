$(function() {
    //使用异步获得所选择学期相对应的班级列表
    $('select[name=selterm]').change(function() {
        var termid = $(this).val();
        $.post(
            CONTROL + '/getClassList', {
                termid: termid,
            },
            function(data) {
                $('select[name=selclass]').children().remove().end().append("<option value='0'>--请选择班级--</option>");
                $('select[name=selcourse]').children().remove().end().append("<option value='0'>--请选择课程--</option>");
                if (data) {
                    for (var i = 0; i < data.length; i++) {
                        $('select[name=selclass]').append("<option value='" + data[i]['clsid'] + "''>" + data[i]['ccode'] + '</option>');
                    }
                }
            },
            'json'
        );
    });

    // 使用异步获得所选择班级的对应课程列表
    $('select[name=selclass]').change(function() {
        var classid = $(this).val();
        var termid = $('select[name=selterm]').val();

        $.post(
            CONTROL + '/getCourseList', {
                classid: classid,
                termid: termid
            }, function(data) {
                $('select[name=selcourse]').children().remove().end().append("<option value='0'>--请选择课程--</option>");
                if (data) {
                    for (var i = 0; i < data.length; i++) {
                        $('select[name=selcourse]').append("<option value='" + data[i]['courseid'] + "'>" + data[i]['cname'] + "</option>");
                    }
                }
            }, 'json'
        )
    });

})