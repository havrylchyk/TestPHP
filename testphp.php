<?php

echo "Перше завдання\n";
$number = 1234;
$sum = 0;
while ($number != 0)
{
  $sum += ($number % 10);
  $number /= 10;
}
echo $sum;
echo "\nДруге завдання\n";
$num = 442158755745;
$count = 0;
while ($num != 0)
{
    $temp = $num % 10;
    if($temp == 5)
        $count++;
    $num /= 10;
}
echo $count;
echo "\nТретє завдання\n";
$sum_ = 0;
for($i = 20; $i <= 45; $i++)
{
    if(fmod($i,5) == 0)
        $sum_ += $i;
}
echo $sum_;
echo "\nЧетверте завдання\n";
$arr = array();
$total = 10;

for ($i = 0; $i < $total; $i++)
    array_push($arr, rand(2, 100));

for($i=1; $i<count($arr); $i++) {
    echo $arr[$i];
    echo " ";
}
echo "\n";
$max = max($arr);
$min = min($arr);
$index_max = 0;
$index_min = 0;
for($i = 0; $i < count($arr); $i++)
	{
        if($max == $arr[$i]) {
            $index_max = $i;
        }
        if($min == $arr[$i]) {
            $index_min = $i;
        }
    }
$temp = $arr[$index_max];
$temp1 = $arr[$index_min];
$arr[$index_max] = $temp1;
$arr[$index_min] = $temp;
for($i=1; $i < count($arr); $i++)
{
    echo $arr[$i];
    echo " ";
}