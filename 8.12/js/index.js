$(function () {
    $(".wait").css("display", "block");
    $.ajax({
        url: "serve/select.php",
        dataType: "json",
        success: function (e) {
            if (e.length == 0) {
                $("<tr class='none'><td >没有数据</td></tr>").appendTo($("tbody:eq(1)"));
            }
            for (var i = 0; i < e.length; i++) {
                $('<tr attrid=' + i + '><td attra="name">' + e[i].name + '</td><td attra="age">' + e[i].age + '</td><td attra="sex">' + e[i].sex + '</td><td attra="class">' + e[i].class + '</td><td class="opts">  <a href="javascript:;" class="btn btn-danger remove" style="margin-right:5px">删除</a><a href = "javascript:;" class= "btn btn-success"> 修改</a></td></tr>').appendTo($("tbody:eq(1)"));

            }
            $(".wait").css("display", "none");
        }
    })
    //添加
    $(".add").click(function () {
        //1.数据库里面添加一条信息，视觉上添加一行，数据库里面添加
        $.ajax({
            url: "serve/add.php",
            success: function (e) {
                if (e || e == 0) {
                    message("添加成功"); //数据库添加成功
                    $('<tr attrid=' + e + '><td attra="name"></td><td attra="age"></td><td attra="sex"></td><td attra="class"></td><td class="opts"><a href="javascript:;" class="btn btn-danger remove" style="margin-right:5px">删除</a><a href = "javascript:;" class= "btn btn-success"> 修改</a></td></tr>').appendTo("tbody:eq(1)")
                    $(".none").remove();
                } else {
                    message("添加失败！");
                }
            }
        })
    })

    //删除
    $("tbody:eq(1)").on("click", ".remove", function () {
        $(".wait").css("display", "block");
        var id = $(this).parent().parent().attr("attrid");
        var that = $(this);
        $.ajax({
            url: "serve/del.php",
            data: {
                id: id
            },
            success: function (e) {
                if (e == "ok") {
                    that.parents("tr").remove();
                    $(".wait").css("display", "none");
                    message("删除成功")
                } else {
                    $(".wait").css("display", "none");
                    message("删除失败")
                }
            }
        })

    })
    //阻止浏览器的默认行为 
    function stopDefault(e) {
        //阻止默认浏览器动作(W3C) 
        if (e && e.preventDefault)
            e.preventDefault();
        //IE中阻止函数器默认动作的方式 
        else
            window.event.returnValue = false;
        return false;
    }
    //编辑
    var oldval;
    $("tbody:eq(1)").on("dblclick", "td:not(.opts)", function (e) {
        stopDefault(e);
        oldval = $(this).text();
        $(this).attr("contenteditable", true);
        $(this).focus();
    })
    $("tbody:eq(1)").on("blur", "td:not(.opts)", function () {
        var that = $(this);
        $(".wait").css("display", "block");
        var attr = $(this).attr("attra");
        var id = $(this).parents("tr").attr("attrid");
        var val = $(this).text();
        console.log(attr, id);
        $(this).removeAttr("contenteditable");
        if (oldval != val) {
            $.ajax({
                url: "serve/edit.php",
                data: {
                    attr: attr,
                    id: id,
                    val: val
                },
                success: function (e) {
                    if (e == "ok") {
                        $(".wait").css("display", "none");
                        message("修改成功");
                    } else if (e == "same") {
                        $(".wait").css("display", "none");
                        message("该姓名已经存在");
                        that.html(oldval);
                    } else {
                        $(".wait").css("display", "none");
                        message("修改失败")
                    }
                }
            })
        } else {
            $(".wait").css("display", "none");
        }
    })

    function message(message) {
        $(".message").css("visibility", "visible").html(message).animate({
            opacity: 1
        }).delay(2).animate({
            opacity: 0
        }, function () {
            $(".message").css("visibility", "hidden");
        });
    }
})