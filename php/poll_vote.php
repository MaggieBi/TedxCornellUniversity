<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$activism = $array[0];
$technology = $array[1];
$environment = $array[2];
$psychology = $array[3];
$other = $array[4];

if ($vote == 0)
  {
  $activism = $activism + 1;
  }
if ($vote == 1)
  {
  $technology = $technology + 1;
  }
if ($vote ==2)
  {
  $environment = $environment +1;
  }
if ($vote == 3)
  {
  $psychology = $psychology + 1;
  }
if ($vote == 4)
  $other = $other+1;
  
//insert votes to txt file
$insertvote = $activism."||".$technology . "||".$environment."||".$psychology."||".$other;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);

?>
<div id="pollresults">
<h2>Results:</h2>
<table>
<tr>
<td>Activism:</td>
<td>
<img src="Images/poll.gif"
width='<?php echo(100*round($activism/($activism+$technology+$environment+$psychology+$other),2)); ?>'
height='20'>
<?php echo(100*round($activism/($activism+$technology+$environment+$psychology+$other),2)); ?>%
</td>
</tr>
<tr>
<td>Technology:</td>
<td>
<img src="Images/poll.gif"
width='<?php echo(100*round($technology/($activism+$technology+$environment+$psychology+$other),2)); ?>'
height='20'>
<?php echo(100*round($technology/($activism+$technology+$environment+$psychology+$other),2)); ?>%
</td>
</tr>
<tr>
<td>Environment:</td>
<td>
<img src="Images/poll.gif"
width='<?php echo(100*round($environment/($activism+$technology+$environment+$psychology+$other),2)); ?>'
height='20'>
<?php echo(100*round($environment/($activism+$technology+$environment+$psychology+$other),2)); ?>%
</td>
</tr>
<tr>
<td>Psychology:</td>
<td>
<img src="Images/poll.gif"
width='<?php echo(100*round($psychology/($activism+$technology+$environment+$psychology+$other),2)); ?>'
height='20'>
<?php echo(100*round($psychology/($activism+$technology+$environment+$psychology+$other),2)); ?>%
</td>
</tr>
<tr>
<td>Other:</td>
<td>
<img src="Images/poll.gif"
width='<?php echo(100*round($other/($activism+$technology+$environment+$psychology+$other),2)); ?>'
height='20'>
<?php echo(100*round($other/($activism+$technology+$environment+$psychology+$other),2)); ?>%
</td>
</tr>
</table>    
</div>