<!DOCTYPE php>
<head>
<meta charset="utf-8">
<a href="https://github.com/asghjaghga/login.php/blob/main/lmg.jj20.jpeg">
<title>请输入用户名和密码</title>
</head>
<style type="text/css">
<style="color:red;text-align:center">
<body>
用户名：<input type="text" id="us"><br>
密码：<input type="password" id="pass"><br>
登录：<input type="button" value="登录" id="ok">
<script type="text/javascript">
var ok=document.getElementById("ok");
ok.οnclick=function(){
var us=document.getElementById("us");
   var us=document.getElementById("pass");
   if (us.value&&us.value) {
    alert("正在登录，请稍后。。。");
   }else{
    alert("用户名或密码不能为空");
   }
}
</script>
</body>
</html>
