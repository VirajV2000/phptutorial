<?php
echo "Welcome to the php tutorial of functions<br> ";
function processMarks($marksArr)
{
    $sum=0;
    foreach($marksArr as $value)
    {
        $sum+=$value;
    }
    return $sum;
}
function averageMarks($marksArr)
{
    $sum=0;
    $i=1;
    foreach($marksArr as $value)
    {
        $sum+=$value;
        $i++;
    }
    return $sum/$i;
}
$viraj=[89,90,76,89,100,78];
$sumMarks=processMarks($viraj);
echo "Total marks scored by viraj out of 600 is $sumMarks<br>";
$avgMarks=averageMarks($viraj);
echo "Average of marks is:$avgMarks";
?>