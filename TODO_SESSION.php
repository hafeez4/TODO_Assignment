<h3 style="color: blue;">Total Tasks</h3>
<?php
if(!empty($_SESSION['values']))
{
    foreach ($_SESSION['values'] as $key=>$value)
    {
        echo "<pre>";
        print_r($value);
        echo "<br>";
    }
 }    
else
{
    echo "No Tasks Exist.";
}    
?>

