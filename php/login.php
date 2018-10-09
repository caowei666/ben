<?php

    header("Content-Type:text/html;charset=utf-8;");
    #1. 从前端拿来数据;
    $username = @$_POST["username"];
    $password = @$_POST["password"];
    if($username == "" || $password == ""){
        die("参数不全");
    }
    #2. 把数据放入到数据库之中;
    // 1. 如何连接数据;
    // mysql_connect(servername,username,password);
    $con = mysql_connect("localhost","root","123456");
    if(!$con){
        // echo "数据库连接成功";
        die("数据库连接失败");
    }
    mysql_select_db("userlist", $con);
    // 判定是否存在相同用户名;
    // $result = mysql_query("SELECT * FROM detaillist");
    $result = mysql_query(
                "SELECT username,password FROM 
                jdlist WHERE username='$username'"
    );
    // echo $result;
    $password = md5($password);
    if($row = mysql_fetch_array($result)){
       if($row['password'] == $password){
           echo "登录成功";
       }else{
           echo "密码错误";
       }
    }else{
        echo "账户不存在";
    }
?>