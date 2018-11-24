<?php
/*
    config.php
    
    Stores configuration data for our application
    
    
    */

//echo basename ($_SERVER['PHP_SELF']); 
define('THIS_PAGE',basename ($_SERVER['PHP_SELF']));

//echo 'the constant is storing: ' . THIS_PAGE;

//die; 




/*
below is an array of images to be used on contact.php in the function named randomize()
*/

$heros[] = '<img src="images/coulson.png" />';
$heros[] = '<img src="images/fury.png" />';
$heros[] = '<img src="images/hulk.png" />';
$heros[] = '<img src="images/thor.png" />';
$heros[] = '<img src="images/black-widow.png" />';
$heros[] = '<img src="images/captain-america.png" />';
$heros[] = '<img src="images/machine.png" />';
$heros[] = '<img src="images/iron-man.png" />';
$heros[] = '<img src="images/loki.png" />';
$heros[] = '<img src="images/giant.png" />';
$heros[] = '<img src="images/hawkeye.png" />';

//default page valuew
$title = THIS_PAGE;
$siteName = 'Site Name';
$slogan = 'Whatever it is you do, we do it better.';
$pageHeader = 'The developer forgot to put in a pageHeader';
$subHeader = 'The developer forgot to put in a subHeader';
$sloganIcon = ''; //will be replace in contact.php by hero icons


switch(THIS_PAGE) {
    
    case 'template.php':
        $title = 'My template page';
        $pageHeader = 'Put PageID here';
        $subHeader = 'Put more info about page here';
    break;
        
    case 'daily.php':
        $title = 'My daily page';
        $pageHeader = 'Daily pups';
        $subHeader = 'All our pups are special';
    break;
    
        
     case 'contact.php':
        $title = 'My contact page';
        $pageHeader = 'Please contact us';
        $subHeader = 'We appreciate your feedback';
        $sloganIcon = randomiz($heros);
    break;
}



  /**
 * returns a random item from an array sent to it.
 *
 * Uses count of array to determine highest legal random number.
 *
 * Used to show random HTML segments in sidebar, etc.
 *
 * <code>
 * $arr[] = '<img src="mypic1.jpg" />';
 * $arr[] = '<img src="mypic2.jpg" />';
 * $arr[] = '<img src="mypic3.jpg" />';  
 * echo randomize($arr); #will show one of three random images
 * </code>
 *
 * @param array array of HTML strings to display randomly
 * @return string HTML at random index of array
 * @see rotate() 
 * @todo none
 */
function randomize ($arr)
{//randomize function is called in the right sidebar - an example of random (on page reload)
	if(is_array($arr))
	{//Generate random item from array and return it
		return $arr[mt_rand(0, count($arr) - 1)];
	}else{
		return $arr;
	}
}#end randomize()

/**
 * returns a daily item from an array sent to it.
 *
 * Uses count of array to determine highest legal rotated item.
 *
 * Uses day of month and modulus to rotate through daily items in sidebar, etc.
 *
 * <code>
 * 

?>  
