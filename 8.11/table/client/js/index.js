$(function(){
    //加载数据

    $(".wait").css("display","block");
    $.ajax({
        url:"tableserver/select.php",
        dataType:"json",
        success:function(e){
            
            for(var i=0;i<e.length;i++){
                
                $(`<tr><td>${e[i].name}</td><td>${e[i].sex}</td><td>${e[i].age}</td><td> <a href="javascript:;" class="btn btn-danger">删除</a><a href="javascript:;" class="btn btn-success">编辑</a></td></tr>`).appendTo(tbody);

                $(".wait").css("display","none");
            }
        }
    })

    //添加
    $(".add").click(function(){
        $.ajax({
            url:"add.php",
            success:function(e){
                if(e==0||e){
                    alert("成功");
                    $(`<tr><td></td><td></td><td></td><td></td><a href="javascript:;" class="btn btn-danger">删除</a><a href="javascript:;" class="btn btn-success">编辑</a></td></tr>`).appendTo(tbody);

                }
            }
        })
    })







    //删除
    $("tbody"). on("click",".btn-danger",function () {
        var id=$(this).parents("tr").attr("attr");

        var that=$(this);

        $.ajax({
            url:"../server/del.php",
            data:{id:id},
            success:function (e) {
                if(e=="ok"){
                    that.parents("tr").remove();
                    alert("删除成功");
                }
            }
        })
    })


})