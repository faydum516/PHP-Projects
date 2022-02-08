<?php
    $names = array("David", "Amy", "John");
    echo $names[1]."<br/>";
	
	// or

	$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
	$people['David'] = "27";
	$people['Amy'] = "21";
	$people['John'] = "42";
	echo $people['John']."<br/>";
	
	//or
	
	$people = array(
	    'online'=> array('David', 'Amy'),
	    'offline'=> array('John', 'Rob', 'Jack'),
	    'away'=> array('Arthur', 'Daniel')
	);
	echo $people['away'][1]."<br/>";
	
	//or
	
	$array[0] = "the mall";
    $array[1] = "David";
    $array[2] = "brother";
    $array[3] = "the store";
    $array[4] = "Rob";
    echo "$array[1] went to $array[3]<br/>";
	include 'foreach.php';
?>