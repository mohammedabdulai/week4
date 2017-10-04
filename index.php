<?php
/**********************
** MOHAMMED ABDULAI  **
** WEEK 4            **
***********************

//Question 1
echo "<h3>Question 1</h3>";
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

//Question 2
echo "<h3>Question 2</h3>";
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

//Question 3
echo "<h3>Question 3</h3>";
$datetime1 = date_create('2009-10-11');
$datetime2 = date_create('2009-10-13');
$interval = date_diff($datetime1, $datetime2);

if ($interval > 0) {
	echo "<br>The Futre";
} 
elseif ($interval < 0) {
	echo "<br>The Past";
} 
elseif ($interval == 0) {
	echo "<br>Oops";
}
//Question 4
echo "<h3>Question 4</h3>";
echo strpos($date,"/");

*****/
$date =  date('Y-m-d', time());
$word = "I'm loving this course already";
echo "The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
{
echo "<br> <br>1. Replaced '-' with '/' in date <br>";
$date1 = str_replace("-", "/","$date");
echo "The value of \$date: ".$date1."<br>";
echo "<br>";
}
{
echo "2.To compare date & tar and print accordingly";
if (strcmp($date1, $tar) > 0)
echo "<br> The future<br><br>";
elseif  (strcmp($date1, $tar) < 0)
echo "<br> the past";
else  echo "<br> oops";
}
echo "3. print the position of / in date <br>";
for($i=0;$i<strlen($date1);$i++)
{
if($date1[$i]=='/')
{
echo " ".$i;
}
}
{
echo "<br><br>4.To print number of words in date and print it";
echo "<br>" .str_word_count($date);
}
{
echo "<br><br>#<u> I'm loving this course already</u>"."<br>";
echo "5.The length of the above sentence is:";
echo strlen($word)."<br>";
}
{
echo "<br>6. ASCII value of first character of above underlined sentence is";
echo "<br>" .ord ($word)."<br>";
}
{
echo "<br>7. To return the last two charcters of date";
echo "<br>".substr("$date", -2);
}
echo "<br> 8.Convert date into array & delimit '/' it with space<br>";
$dateElements=explode("/",$date1);
for($i=0;$i<count($dateElements);$i++)
{
echo $dateElements[$i]." ";
}
echo "<br>";
findLeapYearforeach($year);
findLeapYearwhile($year);
function findLeapYearforeach($year)
{
echo "<br>9. Done with FOREACH function";
foreach($year as $value)
{
if(((int)$value)%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
echo "<br>";
}
}
function findLeapYearwhile($year)
{
echo "<br>10.Done with WHILE function";
$i=0;
while($i<count($year))
{
if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
++$i;
echo "<br>";
}
}
echo "<br> 11. Done with SWITCH case";
for ($i=0;$i<count($year);$i++)
{echo "<br>";
switch ($year{$i})
{
case "2012": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
break;
case "396": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
break;
case "300": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
break;
case "2000": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
break;
case "1089": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
break;
case "1100": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
break;
}
}


?>
