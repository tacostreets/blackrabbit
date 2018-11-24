<?php include "config.php"?>
<?php 
 /*
 
 If day is passed via GET, show $day's coffee
 
 If it's today, shows $today's coffee
 
 Place a link to show today's coffee (if on another day)
 
 
 */
    
    
if(isset($_GET['day']))
{ //If day is passed via GET, show $day's coffee
    $today = $_GET['day'];
}else{//If it's today, shows $today's coffee
    $today = date('l');
}
   //daily switch code goes here


//$today = date('l');

//echo $today;
//die;

?>

<?php include "header.php"?>

<p><?=$today?>'s Special is Pumplin Spice!</p>

<p>Click below to find out what awesome flavors we have for each day of the week!</p>
<p><a href="daily.php?day=Sunday">Sunday</a></p>


<?php include "footer.php"?>