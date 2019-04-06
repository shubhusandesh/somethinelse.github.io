<?php
echo "<pre>";
function br($numberOfLines){
	for($i=0;$i<$numberOfLines;$i++){
		echo '<br>';
	}
}
	$names =['sandesh','nabin','prajesh'];
	echo count($names);
	br(5);
	sort($names);
	print_r($names);
	br(3);
	rsort($names);
	print_r($names);
	br(3);
	asort($names);
	print_r($names);
	br(3);
	arsort($names);
	print_r($names);

	br(2);
	$all_keys=['first','second',' third'];
	$all_values=['Ram','Shyam','Hari'];

	$array_assoc=array_combine($all_values,$all_keys);
	print_r($array_assoc);
	br(4);
	$old_keys= array_keys($array_assoc);
	print_r($old_keys);
	br(5);

	$old_array= ['snake','snake','monkey','spider','monkey','spider','dog','cat','mouse'];
	$new_array= ['dog','cat','mouse'];
	$unique_array = array_diff($old_array, $new_array);
	print_r($unique_array);
	br(5);
	echo 'array_count_values(input)';
	br(1);
	print_r(array_count_values($old_array));
	br(5);

	echo 'array_push';br(2);
	echo 'array_pop';br(2);
	echo 'array_shift';br(2);
	echo 'array_unshift';br(2);
	echo 'array_filter';br(2);
	echo 'array_merge';br(2);
	echo 'array_map';br(2);
	br(2);

	$grades=['grade A','grade B','grade C'];
	array_push($grades,'grade D');
	$last_value= array_pop($grades);
	print_r($grades);
	echo 'poped value is '.$last_value;
	br(1);
	$country=['China','Nepal','India','UAE'];
	array_shift($country);
	array_unshift($country, 'Brazil','mrNepal');
	print_r($country);


	br(5);
	$orderArray=['dal','bhaat','tarkari'];
	function addStarter($item,$orders){
		array_unshift($orders,$item);
	}
	function removeStarter($orders){
		array_shift($orders);
	}
	function addMainCourse($item,$orders){
		array_push($orders, $items);
	}
	function removeMainCourse($item,$orders){
		array_push($orders, $items);
	}

	br(4);
	echo('<h2>isset() vs array_key_exists()</h2>');
	br(2);

	$check_defined= isset($last_value);
	echo $check_defined.'here'; //concat with any string
	//array_key_exist() doesnot check undefined variable.
	br(3);
	$not_empty = null;
	echo 'null returns '.isset($not_empty);
	br(3);
	$boolean = false;
	echo 'false returns.'.isset($boolean);

	br(4);
	$classes=['a'=>"class A",'b'=>"class B"];
	echo 'for undefined key: '.isset($classes['c']);
	br(1);
	echo 'for defined key: '.isset($classes['a']);
	br(2);
	echo 'for undefined key: '.array_key_exists('d',$classes);
	br(1);
	echo 'for defined key: '.array_key_exists('b',$classes);
	br(4);
	$subjects= ['science'=> 10,
				'math'=> 100,
				'english'=> 80
			];
	if(!array_key_exists('nepali', $subjects)){
		echo "No nepali subject found.";
	}

	br(5);
	echo '<h2>implode</h2> implode(glue, pieces) turns array into string';
	$friends=['rakesh','visit','nishan','sagar'];
	$imploded = implode('-',$friends);
	br(1);
	echo $imploded;
	br(2);
	$src=['images','src','file.txt'];
	echo implode('/', $src);
	br(1);
	echo '<h2>explode</h2> explode(delimiter, string) turns string into array';
	$nayaString="this is it, my friend!";
	print_r(explode(',',$nayaString));
	br(2);
	$email = 'saandesh32@gmail.com';
	print_r(explode('@', $email));
	br(5);
	echo '<h2>in_array(needle, haystack)</h2>';
	br(1);
	echo in_array('images',$src);
	br(5);

	define('nam','john vai');
	echo nam;
	br(5);
	//array filter
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
	$newArr= array_filter($newAssociativeArray,function($single){
			return($single== 'third' || $single== 'second')? false: true;
			
	});
	print_r($newArr);

	//array_filter
	$fruits = ['apple','mango','Apricots','Banana','Cherries','Avocados','blueberries','Dragon fruit','Cantaloupse','Cucumber','Elderberry'];

	$newFruits = array_filter($fruits, function($fruit){
		$fruit = strtoupper($fruit);
		if(strpos($fruit,'A')=== 0){
			return true;
		}
	});
	print_r($newFruits);


	function checked($string){
		$string = strtoupper($string);
		return strpos($string,'A')!==0;
	}
	$new_arra= array_filter($fruits,'checked');
	print_r($new_arra);

	br(5);
	$firstArray=[1,3,null,5,9,null,10,11];
	function helloItsMe($number){
		// return ($number);
		return isset($number);
	}
	$secondArray= array_filter($firstArray,'helloItsMe');
	print_r($secondArray);
	br(3);
	//array_merge(array1)
	$arr1=[1,3,[1,4],2,1];
	$arr2=[10,11,12,13];
	$arr3=[14,15,16];
	$arrMerge= array_merge($arr1,$arr2,$arr3);
	print_r($arrMerge);
	//array_map(callback, arr1)
	$numbersArray= [23,45,78,33,9,10];
	$modified_numbers= array_map('returnThis', $numbersArray);
	function returnThis($num){
		return $num+1;
	}
	print_r($modified_numbers);
	br(5);
	$newArrayForMap= range('a', 'z');
	print_r($newArrayForMap);
	$mappedArray= array_map(function($item){
		$vowel=['a','e','i','o','u'];
		foreach ($vowel as $k => $v) {
			$item = str_replace($v, null, $item);
		}
		return $item;
	}
		, $newArrayForMap);
	print_r($mappedArray);

	//array_reduce(callback, arr1)
	$newA= range(1, 20);
	$new_modify=array_reduce($newA, 'returnReduced',0);
	function returnReduced($calculation,$num){
		$calculation+=$num;
		return $calculation;
	}
	print_r($new_modify);
	print_r($newA);
	br(5);
	$numberArray=range(1,100);
	$valueOdd= array_reduce($numberArray, function($oddNumbers,$num){
		if($num%2 !== 0){
			array_push($oddNumbers,$num);
		}
		return $oddNumbers;
	},[]);
	print_r($valueOdd);

?>