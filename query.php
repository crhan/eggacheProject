<?php
unset($sql);
switch($_REQUEST["a"]){
case "学年成绩统计":
    $sql="a";
    break;
case "学生名次排定":
    echo"<p>hoho</p>";
    break;
default:
    echo "<p>lala</p>";
}

echo "$sql";

function querySQL($query)
{

}
?>
