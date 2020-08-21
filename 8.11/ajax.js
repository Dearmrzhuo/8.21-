/*
*实现ajax异步过程函数
* options json对象

        url: string ajax请求的地址
        type:string ajax请求的方式(get, post)
        data string |json请求服务的数据
        dataType: string 返回数据的格式(text, json,xml); 
        success(e): funtien e代表返回的数据，success函数，就是返回数据后要执行的函数
        error(e): funtion  e代表错误的消息，error函数，就是ajax发生错误后，要执行的函数
*/

function ajax (options) {
    /*参数初始化 */
    if(typeof options!="object"){
        console.error("参数的类型必须是json对象");
        return;
    }


    //初始化url
    var url=options.url
    if(!url){
        console.error("请使用url属性指定地址");
        return;
    }
    //初始化请求方式
    var type=options.type||"get";

    //初始化请求的数据格式
    var data="";
    if(typeof options.data=="string"){
        data=options.data;
    }else {
        for(var i in options.data){
            data+=i+"="+options.data[i]+"&"
        }
        data=data.slice(0,-1)
    }


    //初始化数据返回的格式
    var dataType=options.dataType||"json";

    //初始化 成功函数

    var success=options.success;
    if(typeof success!=="function"){
        console.error("缺少成功后的处理函数")
    }

    //初始化  失败的函数
    var error =options.error||function(e){
        console.log(e);
    }

    //开始ajax
    //1.创建ajax对象

    var xml= new XMLHttpRequest();

    //2.监听

    //ajax responseType  [text,json,]
    if(dataType=="text"||dataType=="json") {
        xml.responseType=dataType;
    }

    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            if(xml.status==200){
                if(dataType=="xml"){
                    var data=xml.responseXML;
                }else{
                    var data=xml.response;
                }
                success(data);
            }else{
                error("ajax错误")
            }
        }
    }


    //3.指定ajax传递数据的方式以及数据
    if(type=="get"){
        xml.open(type,url+"?"+data);
        xml.send();
    }else if(type=="post"){
        xml.open(type,url);
        xml.setRequestHeader("Content-type","application/ x-www-form-urlencoded");
        xml.send(data);
    }









}