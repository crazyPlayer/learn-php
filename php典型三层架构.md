##php典型三层架构
**数据库**
```php
CREATE TABLE `t_user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(20) default NULL,
  `u_password` varchar(20) default NULL,
  PRIMARY KEY  (`u_id`)
)
```
**page文件夹(表现层)**

_userslist.php_
```php
<?php
include_once '../facade/usersAction.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户管理</title>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
  <td><a href="usersadd.php">添加用户</a></td>
 </tr>
 <tr>
  <td>
  <form action="userslist.php" method="post" id="Find">
  用户名:
  <input type="text" name="userName" id="userName" value="<?php echo $userName?>"> 
  <input type="submit" value="搜索"></form>
  </td>
 </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
  <td width="20%">用户id</td>
  <td width="20%">用户名</td>
  <td width="20%">用户密码</td>
 </tr>
 <?php
 for($i = 0; $i < sizeof ( $userlist ); $i ++) 
 {
  echo '<tr><td width="20%">' . $userlist[$i][0] . '</td><td>'.$userlist[$i][1].'</td><td>'.$userlist[$i][2].'<td/></tr>';
 }
 ?>
</table>
</body>
</html>
```
**facade文件夹(业务层)**

_usersAction.php_
```php
<?php
include_once '../DAL/usersDal.php';
if(isset($_POST["userName"])&&!$_POST["userName"]=='')
{
 $userlist = findUsers($_POST["userName"]);
 $userName = $_POST["userName"];
}
else
{
 $userlist = findUsers('');
 $userName = '';
}
?>
```
**DAL文件夹(数据层)**

_usersDal.php_
```php
<?php
function findUsers($usersName)
{
 //包含配置文件
 include_once '../config.php';
 
 //创建数据库连接
 $conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password); 
 mysql_select_db($mysql_database); 
 
 //执行查询
  $query="select * from t_user ";
 if(isset($usersName)&&!$usersName=='')
 {
  $query =  $query."where u_name = '".$usersName."'";
 }
    $result=mysql_query($query,$conn); 
    
    //将返回值放入数组
    $array = array();
    while($row=mysql_fetch_row($result))
    { 
        $array[] = $row; 
    } 
    
  //释放资源,关闭连接
    mysql_free_result($result);
    mysql_close();  
    
    //返回结果
    return $array;
}
?>
```
**配置文件**

_config.php_
```php
<?php
 $mysql_server_name="localhost:3306"; //数据库服务器名称
    $mysql_username="root"; // 连接数据库用户名
    $mysql_password="root"; // 连接数据库密码
    $mysql_database="network"; // 数据库的名字
?> 
```
