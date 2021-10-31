<html>
<?php 
session_start();
if(isset($_POST['ADD']))
{
$_val = $_POST['taskText'];
if(!empty($_val))
{
    $_array = array($_val);
}
else
{
    $_array =array();
}
if(isset($_SESSION['values']))
{
    $_array = array_merge($_SESSION['values'],$_array);
}
$_SESSION['values'] = $_array;
}
if(isset($_POST['CLEAR']))
{
    include ("clearSession.php");
}
?>
    <head>
    <title>TODO PAGE</title>
    </head>
    <form method="POST">
    <h4 style="color:purple;">To Do List Assignment</h4>
    <h4 style="color:green;">Assigned By: Sir Gulsher Ligari</h4>
    <h4 style="color:blue;">Designed by: 2K18/CSM/39</h4>
    <input id="textbox" type="text" placeholder="Enter Task " name="taskText" />
    <input style="color:yellow; background:green;" type="submit" name="ADD" value="ADD TASK"/>
    <input style="color:yellow; background:green;" type="submit" name="CLEAR" value="CLEAR ALL"/>
</form>
</html>