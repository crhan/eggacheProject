<?php
unset($sql);
switch($_REQUEST["a"]){
case "学生名次排定":
    $sql="select * from Crhan_mingci;";
    echo "<table class='query' ><tr><th>学号crh</th><th>姓名crh</th><th>课程名crh</th><th>分数crh</th><th>教师名crh</th></tr>";
    querySQL($sql);
    break;
case "学生学分统计":
    $sql="SELECT crh_Sno, crh_Sname, crh_Spoint FROM Crhan_Students order by crh_Spoint desc";
    echo "<table class='query'>
        <tr>
        <th>学号crh</th>
        <th>姓名crh</th>
        <th>学分总数crh</th>
        </tr>
        ";
    querySQL($sql);
    break;
case "课程平均成绩":
    $sql="SELECT Crhan_Courses.crh_Cono, crh_Coname, ROUND( AVG( crh_Rgrade ) , 2 ) 
        FROM Crhan_Courses, Crhan_Report
        WHERE Crhan_Report.crh_Cono = Crhan_Courses.crh_Cono
        GROUP BY Crhan_Courses.crh_Cono, crh_Coname";
    echo "<table class='query'>
        <tr>
        <th>课程号crh</th>
        <th>课程名crh</th>
        <th>平均成绩crh</th>
        ";
    querySQL($sql);
    break;
case "班级开课查询":
    $sql="select Crhan_Class.crh_Clno,Crhan_Courses.crh_Cono, crh_Coname 
        from Crhan_Class,Crhan_Courses,Crhan_Report,Crhan_Students
        where Crhan_Report.crh_Sno=Crhan_Students.crh_Sno
        and Crhan_Report.crh_Cono=Crhan_Courses.crh_Cono
        and Crhan_Students.crh_Clno=Crhan_Class.crh_Clno
        group by Crhan_Courses.crh_Cono";
    echo "<table class='query'>
        <tr>
        <th>班级号crh</th>
        <th>课程号crh</th>
        <th>课程名crh</th>
        </tr>
        ";
    querySQL($sql);
    break;
case "教师任课查询":
    $sql="select Crhan_Teachers.crh_Tno,crh_Tname,Crhan_Courses.crh_Cono,crh_Coname
        from Crhan_Teachers,Crhan_Report,Crhan_Courses
        where Crhan_Teachers.crh_Tno=Crhan_Report.crh_Tno
        and Crhan_Courses.crh_Cono=Crhan_Report.crh_Cono
        group by crh_Tname";
    echo "<table class='query'>
        <tr>
        <th>教师号crh</th>
        <th>教师姓名crh</th>
        <th>课程号crh</th>
        <th>课程名crh</th>
        </tr>
        ";
    querySQL($sql);
    break;
case "学生成绩查询":
    $sql="select Crhan_Report.crh_Sno,crh_Sname,crh_Coname,crh_Rgrade
        from Crhan_Report,Crhan_Students,Crhan_Courses
        where Crhan_Report.crh_Sno=Crhan_Students.crh_Sno
        and Crhan_Report.crh_Cono=Crhan_Courses.crh_Cono
        order by Crhan_Report.crh_Sno,crh_Rgrade desc";
    echo "<table class='query'>
        <tr>
        <th>学好号crh</th>
        <th>姓名crh</th>
        <th>课程名crh</th>
        <th>成绩crh</th>";
    querySQL($sql);
    break;
case "学年成绩统计":
    $sql="select left(crh_Cosem,4),crh_Coname,crh_Tname, round(avg(crh_Rgrade),2)
        from Crhan_Courses,Crhan_Report,Crhan_Teachers
        where Crhan_Courses.crh_Cono=Crhan_Report.crh_Cono
        and Crhan_Teachers.crh_Tno=Crhan_Report.crh_Tno
        group by Crhan_Report.crh_Cono,Crhan_Report.crh_Tno;";
    echo "<table class='query'>
        <tr>
        <th>学年crh</th>
        <th>课程crh</th>
        <th>任课教师crh</th>
        <th>平均成绩crh</th>
        ";
    querySQL($sql);
    break;
case "专业注册":
    if($_REQUEST["daihao"]!="" && $_REQUEST["zhuanyeming"]!=""){
        $sql="insert into Crhan_Subject values('$_REQUEST[daihao]','$_REQUEST[zhuanyeming]')";
        insertSQL($sql);
    }
    $sql="select * from Crhan_Subject";
    echo "<table class='query'>
        <tr>
        <th>专业代号crh</th>
        <th>专业名crh</th>
        </tr>
        ";
    querySQL($sql);
    break;
default:
}

function insertSQL($query)
{
    $con=mysql_connect("localhost","phptest","phpTest");
    mysql_select_db("phptest",$con);
    mysql_query("SET NAMES 'UTF8'");
    $result=mysql_query($query);
    
    mysql_close($con);
}
function querySQL($query)
{
    $con=mysql_connect("localhost","phptest","phpTest");
    mysql_select_db("phptest",$con);
    mysql_query("SET NAMES 'UTF8'");
    $result=mysql_query($query);

    while($row=mysql_fetch_array($result)){
        echo "<tr>";
        for($i=0;$i<=count($row)/2-1;$i++){
        echo "<td>$row[$i]</td>";
        }
        echo "</tr>";
    }

    mysql_close($con);
    echo "</table>";
    
}
?>
