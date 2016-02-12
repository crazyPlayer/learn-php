#前端MVC小实例
随着前端Ajax兴起、前端开发工作进一步划分：js程序员和ue页面制作、另外从整个前端项目的清晰明朗以可扩展性角度来看，
MVC的应用也越来越必要，特别是对大的项目。

#####例如：需要给一个页面上的button注册一个onclick事件。

1、我们可以有如下最简洁的写法：（view和model control完全混合）
```html
<HTML>
<HEAD>
<TITLE> example </TITLE>
</HEAD>
<BODY>
<input type="button" value="baidu" onclick="alert(this.value);"/>
</BODY>
</HTML>
```
2、将html和js代码进行适当分离：（view和model control在同一页面适当分离）
```html
<HTML>
<HEAD>
<TITLE> example </TITLE>
</HEAD>
<BODY>
<input type="button" value="baidu" onclick="tipInfo(this);"/>
<SCRIPT LANGUAGE="JavaScript">
    function tipInfo(o){
           alert(o.value);
    }
</SCRIPT>
</BODY>
</HTML>
```
3、将html和js代码彻底分离：（view和model control完全分离）
```html
<HTML>
<HEAD>
<TITLE> example </TITLE>
</HEAD>
<BODY>
<input type="button" value="baidu" id="baidu"/>
</BODY>
<script src="example.js"></script>
</HTML>
```
分离出来的模型model和控制control的综合example.js代码：
```JavaScript
var o = document.getElementById("baidu");
o.onclick = function(){
       alert(this.value);
  }
```
4、符合MVC框架的实现：（view、mode和control完全分离）
>View视图的view.html代码：
```html
<HTML>
<HEAD>
<TITLE> example </TITLE>
</HEAD>
<BODY>
<input type="button" value="baidu" id="baidu"/>
</BODY>
    <script src="model.js"></script>
<script src="control.js"></script>
</HTML>
```
>实现control控制功能的control.js代码：
```javascript
function G(id){
       return document.getElementById(id);
}
var UI = new Object();
UI.register = function(id,even,fun,arr){
       if(G(id)) G(id)["on"+even] = function(){ fun(arr);};
}
UI.register("baidu","click",tipInfo,[1,2]);
 ```
 >具体的函数操作，可以放到model模块中执行:
 ```
 function tipInfo(arr){
           alert(arr[1]);
           //实现其他组件功能，例如popup、form等。都属于model模型
    }
    ```
