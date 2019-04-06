<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>array_functions</title>
	<style>
	body{
		background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
		background-attachment: fixed;
		color : white;
		padding-left:30vw;
	}
	h2{
		color: #3a3c3d;
	
	}
</style>
</head>
<body>
	<?php
echo '<pre>';
function br($lines){
	for($i=0; $i<$lines; $i++ ){
		echo "<br>";
	}
}
function title($content){
	echo '<h2>'.$content.'</h2>';
}


echo '<h1> Array Function(PHP) </h1>';
$newArray = ['sandesh','prajesh','nikita','sanjita'];

title('count(var)');
	$numberOfItems= count($newArray);
	echo 'Number of items in array is '.$numberOfItems.'.';
	br(1);
	echo "count() function is an array function which return the number of items in the array.";
	br(1);
	echo "It takes the array to be counted as parameter";

	br(4);
title('sort(array)');
	echo 'sort() is also an array function in PHP which sorts the items from ascending(default).';
	br(1);
	echo 'It takes the array to be sorted as parameter and sorts the items.';
	br(1);
	echo 'Item before sorting: ';
	print_r($newArray);
	br(2);
	sort($newArray);
	echo 'Item after sorting:';
	print_r($newArray);

br(5);
title('Type of sort functions');
br(2);
title('sort() - sort arrays in ascending order');
	br(2);
	$newArray1 = [9,4,1,8,5];
	echo 'Item before sorting: ';
	print_r($newArray1);
	br(2);
	sort($newArray1);
	echo 'Item after sorting:';
	print_r($newArray1);

title('rsort() - sort arrays in descending order');
	br(2);
	$newArray2 = [1,9,4,10,0];
	echo 'Item before sorting: ';
	print_r($newArray1);
	br(2);
	rsort($newArray2);
	echo 'Item after sorting:';
	print_r($newArray2);
	br(2);
title('asort() - sort associative arrays in ascending order, according to the value');
	br(2);
	$newArray3 = [8,2,1,13,10,1,5];
	echo 'Item before sorting: ';
	print_r($newArray3);
	br(2);
	asort($newArray3);
	echo 'Item after sorting:';
	print_r($newArray3);
br(2);
title('ksort() - sort associative arrays in ascending order, according to the key');
	br(2);
	$newArray4 = [2=>19,1=>1,10=>20,3=>22,5=>17,8=>10,6=>0];
	echo 'Item before sorting: ';
	print_r($newArray4);
	br(2);
	ksort($newArray4);
	echo 'Item after sorting:';
	print_r($newArray4);
br(2);
title('arsort() - sort associative arrays in descending order, according to the value');
	br(2);
	$newArray4 = [2=>19,1=>1,10=>20,3=>22,5=>17,8=>10,6=>0];
	echo 'Item before sorting: ';
	print_r($newArray4);
	br(2);
	arsort($newArray4);
	echo 'Item after sorting:';
	print_r($newArray4);
br(2);
title('krsort() - sort associative arrays in descending order, according to the key');
	br(2);
	$newArray4 = [2=>19,1=>1,10=>20,3=>22,5=>17,8=>10,6=>0];
	echo 'Item before sorting: ';
	print_r($newArray4);
	br(2);
	krsort($newArray4);
	echo 'Item after sorting:';
	print_r($newArray4);
br(2);
title('array_combine(keys, values)');
	br(1);
	echo 'Creates an array by using the elements from one "keys" array and one "values" array:';
	br(2);
	$keyArray=['first','second','third','fourth'];
	$valueArray=['book','bag','duster','safari'];
	echo 'arrays before combine function:';
	br(1);
	print_r($keyArray);
	print_r($valueArray);
	br(2);
	echo 'Array after combine function: ';
	$combine = array_combine($keyArray, $valueArray);
	print_r($combine);
	br(3);
title('array_keys(input)');
	br(1);
	echo 'array before keys function :';
	br(1);
	print_r($combine);
	br(1);
	$keys= array_keys($combine);
	echo 'array after keys function:';
	print_r($keys);
	br(3);

title('array_values(input)');
	br(1);
	echo 'array before values function :';
	br(1);
	print_r($combine);
	br(1);
	$values= array_values($combine);
	echo 'array after values function:';
	print_r($values);
	br(3);

title('array_diff(array1, array2)');
	br(2);
	$array1=['snake','snake','monkey','spider','monkey','spider','dog','cat','mouse'];
	$array2= ['dog','cat','mouse'];
	echo 'array1 : ';
	print_r($array1);
	br(1);
	echo 'array2: ';
	print_r($array2);
	br(1);
	echo 'after array_diff function :';
	print_r(array_diff($array1, $array2));
	br(3);
title('array_count_values(input)');
	echo 'counts the number of same items in the array and return an array:';
	br(1);
	echo 'Items are keys and values are the number of repitition.';
	br(1);
	print_r(array_count_values($array1));
	br(3);
title('array_push(array, var)');
	br(1);
	echo 'array before: ';
	br(1);
	print_r($array2);
	br(1);
	echo 'array after push: ';
	print_r(array_push($array2, 'horse'));
	br(1);
	print_r($array2);
	br(3);
title('array_pop(array)');
	br(1);
	echo 'array before: ';
	br(1);
	print_r($array2);
	br(1);
	echo 'array after pop: ';
	print_r(array_pop($array2));
	br(1);
	print_r($array2);
	br(3);
title('array_shift(array)');
	br(1);
	echo 'array before: ';
	br(1);
	print_r($array2);
	br(1);
	echo 'array after shift: ';
	print_r(array_shift($array2));
	br(1);
	print_r($array2);
	br(3);
title('array_unshift(array, var)');
	br(1);
	echo 'array before: ';
	br(1);
	print_r($array2);
	br(1);
	echo 'array after unshift: returns length ';
	echo (array_unshift($array2,'nayaAnimal'));
	br(1);
	print_r($array2);
	br(3);
title('array_filter');
	br(1);
	$newAssociativeArray=[
							'live'=>'first',
							'die'=>'second',
							'fly'=>'third',
							'walk'=>'fourth',
							'dance'=>'fifth',
							'swim'=>'sixth',
							'1'=>'first',
							'2'=>'second',
							'3'=>'third',
							'4'=>'fourth',
							'5'=>'fifth',
							'6'=>'sixth'
	];
	echo 'array before filter: ';
	br(1);
	print_r($newAssociativeArray);
	br(1);
	echo 'array after filter function';
	br(1);
	$newArr= array_filter($newAssociativeArray,function($single){
			return($single== 'third' || $single== 'second')? false: true;
			
	});
	print_r($newArr);
	br(3);
title('isset()');
	br(2);
	$check_defined= isset($array1);
	echo "returns 1 is true(value exist else returns false)";
	br(1);
	echo $check_defined;
	//concat with any string
	//array_key_exist() doesnot check undefined variable.
	br(3);
	$not_empty = null;
	echo 'null returns(false) '.isset($not_empty);
	br(3);
	$boolean = false;
	echo 'false returns(true) '.isset($boolean);
	br(5);
	$rooms=['a'=>"room111",'b'=>"room715"];
	echo 'for undefined key(false): '.isset($rooms['c']);
	br(1);
	echo 'for defined key(true): '.isset($rooms['a']);
	br(2);
	echo 'for undefined key(array_key_exists): '.array_key_exists('d',$rooms);
	br(1);
	echo 'for defined key(array_key_exists): '.array_key_exists('b',$rooms);
	br(4);
	$fruits= ['mangoes'=> 10,
				'apple'=> 100,
				'guava'=> 80
			];
	print_r($fruits);
	br(1);	
	if(!array_key_exists('banana', $fruits)){
		echo "No guava found.";
	}
	br(5);
title('implode(glue, pieces)- turns array into string');
	br(1);
	$friends=['rakesh','visit','nishan','sagar'];
	echo 'before implode';
	br(1);
	print_r($friends);
	br(3);
	$imploded = implode('-',$friends);
	br(1);
	echo $imploded;
	br(5);
title('explode(delimiter, string)-turns string into array');
	$nayaString="This is it, my friend!";
	echo 'before explode:';
	br(1);
	echo "<h4>${nayaString}</h4>";
	echo 'after explode function:';
	br(1);
	print_r(explode(',',$nayaString));
	br(2);
	$email = 'saandesh32@gmail.com';
	echo 'before explode: ';
	echo "<h4>${email}</h4>";
	echo 'after explode:';
	br(1);
	print_r(explode('@', $email));
	br(5);

title('in_array(needle, haystack):boolean value');
	$array_inArray=[1,2,3,4,5];
	echo 'checks the value in the array if found returns true else false';
	br(1);
	$result = in_array(3, $array_inArray);
	echo 'main array is: ';
	br(1);
	print_r($array_inArray);
	br(1);
	echo 'in_array(3, $array_inArray) returns : '.$result;
	br(1);
	echo 'in_array(8, $array_inArray) returns : '.in_array(8, $array_inArray);
	br(1);
	echo 'the value is false so it echo\'s empty string';
	br(3);
title('define(name, value): constant in php');
	echo 'It is used to define a constant value to a string.';
	br(1);
	define('defineThis','defined');
	echo"define('defineThis','defined')";
	br(1);
	echo 'echo defineThis echo\'s the value: '.defineThis;
	br(3);
title('array_filter(input)');
	$toBefilteredArray=['item1'=>'sold',
						'item2'=>'in stock',
						'item3'=>'sold',
						'item4'=>'in stock',
						'item5'=>'in stock',
						'item6'=>'in stock',
						'item7'=>'sold',
						'item8'=>'in stock',
						'item9'=>'sold',
						'item10'=>'in stock',
						'item11'=>'in stock',
						'item12'=>'in stock',
						];
	$filteredArray1= array_filter($toBefilteredArray, function($status){
		return($status === 'in stock')? true : false;
	});
	echo 'In stock items are : ';
	print_r($filteredArray1);
	$soldArray= array_filter($toBefilteredArray, function($status){
		return($status === 'sold')? true: false;
	});
	br(1);
	echo 'Sold items are : ';
	print_r($soldArray);
	br(3);
title('array_merge(array1,array2)');
	echo 'Merges two or more array into a single array sequentially.';
	br(1);
	$toBeMergedArray1 = ['first'=> 'apple','second'=>'watermelon','third'=>'orange','four'=>'cherries'];
	$toBeMergedArray2 = ['fifth'=>'grapes','sixth'=>'peach'];
	$toBeMergedArray3 = ['seventh'=>'starfruit','eight'=>'plum','ninth'=>'banana'];
	print_r($toBeMergedArray1);
	print_r($toBeMergedArray2);
	print_r($toBeMergedArray3);
	br(1);
	$mergedArray = array_merge($toBeMergedArray1, $toBeMergedArray2, $toBeMergedArray3);
	echo 'merged array is: ';
	print_r($mergedArray);
	br(3);

title('array_map(callback, arr1)');
	echo 'It is used to modify each item of the array by use of callback function and return\'s a new array.';
	$arrayUnmap = [1,2,3,4,5,6];
	// define('multi',2);
	$multi = 2;
	$arrayMapped = array_map(function($item) use($multi){
		if($item %2 !=0){
	$item *= $multi;//confusion on why doesn't work with variable(undefined error)
		}
		return $item;
	}, $arrayUnmap);
	br(1);
	echo 'unmapped array is : ';
	print_r($arrayUnmap);
	br(1);
	echo 'mapped array is : ';
	print_r($arrayMapped);
	br(3);
title('range(low, high)');
	echo 'A inbuilt function in PHP which is used to create an array of elements <br> of any kind such as integer, alphabets within a given range(from low to high) i.e, list’s <br>  first element is considered as low and last one is considered as high.';
	br(1);
	$oneToTen= range(1, 10);
	$aToZ = range('a', 'z');
	print_r($oneToTen);
	print_r($aToZ);
	br(3);
title('array_reduce(input, function, initials)');
	echo 'Array function which reduce the array to a single value using a callback function.';
	br(1);
	$arrayToReduce= [1,10,4,5,20,14,22];
	echo 'initial array is ';
	print_r($arrayToReduce);
	$reducedArray = array_reduce($arrayToReduce, function($calculation, $item){
			if($calculation < $item){
				$calculation *= $item;
			}
			return $calculation;
	},1);
	print_r($reducedArray);

?>
</body>
</html>


