<?php 

//                  Array function 

//array_chunk ($array,length,key[optional])

//   المطلوبindex بعدد  nstedarray الي  array يقوم بتقسم 

$friends = ["Ibrahim" , "Ahmed","Gamal","kamal"];
echo "Array chunk";
print "<pre>";
print_r (array_chunk($friends , 1 ));
print "</pre>";
echo "<br>";

//--------------------------------------------
$countries = [
    "EG"=>"Egypt",
    "KSA"=>"Saudi Arabia",
    "SY"=>"Syria",
    "USA"=>"United states"
];

// array_change_key_case($array,case[optional])
//  array  بتاع key بتخلي 
// 1- CASE_UPPER  
// 2- CASE_LOWER default

echo "Array change key case";
print "<pre>";
print_r (array_change_key_case($countries));
print_r (array_change_key_case($countries,CASE_UPPER));
print "</pre>";
echo "<br>";
//--------------------------------------------

//array_combine ($array_of_keys,$array_of_value);

$key = ["I","A","G","K"];
$value = ["Ibrahim" , "Ahmed","Gamal","kamal"];

echo "Array change key case";
print "<pre>";
print_r (array_combine($key , $value));
print "</pre>";
echo "<br>";
//--------------------------------------------

//array_count_value($array)
//array لمعرفة كل عنصر متكرر كام في 
$counting = ["A","A","b","c","c","g","e","t"];

echo "Array count value";
print "<pre>";
print_r (array_count_values($counting));
print "</pre>";
echo "<br>";
//--------------------------------------------

//array_reverse($array,presever[optional])
$family = ["Ibrahim" , "Ahmed","Gamal","kamal"];
echo "Array reverse";
print "<pre>";
print_r ($family);
print_r (array_reverse($family,true));
print_r (array_reverse($family));
print "</pre>";
echo "<br>";
//--------------------------------------------

//array_flip($array)
//value بديل key  لعكس 
echo "Array flip";
print "<pre>";
print_r (array_flip($countries));
print "</pre>";
echo "<br>";
//--------------------------------------------

//count($array,mode[optional])
//mode 
// مش بحسب عدد العناصر اللي جوه الاريه اللي جواها 0   
// 1 بيحسب عدد العناصر اللي جوه القريه اللي جواها
$count = ["Ibrahim" , "Ahmed","Gamal","kamal" ,  ["Ibrahim" , "Ahmed","Gamal","kamal"]];

echo count($count)."<br>";
echo count($count,1)."<br>";
//--------------------------------------------

//in-array('search',$array,type[optional])

if(in_array("Ibrahim",$count)){
    echo "is this found <br>";
}

//--------------------------------------------
//array_key_exists($key,$array)
//موجود ولا لا key لمعرفة ان 
if(array_key_exists("EG",$countries)){
    echo "this is found ".$countries["EG"] ."<br>";
}
//--------------------------------------------

//array_keys($array,value,type)

echo "Array keys";
print "<pre>";
print_r (array_keys($count));
print "</pre>";
echo "<br>";

//--------------------------------------------

//array_values($array)
//return all the value of an array

echo "Array values";
print "<pre>";
print_r (array_values($countries));
print "</pre>";
echo "<br>";
//--------------------------------------------

//array_pad($array,size,value)
$pad=[1,2,3,4];
echo "Array pad";
print "<pre>";
print_r (array_pad($pad , 10 , "#"));
print "</pre>";
echo "<br>";
//--------------------------------------------
echo "Array product <br>";
echo array_product($pad)."<br>";
//--------------------------------------------
echo "Array sum <br>";
echo array_sum($pad)."<br>";
//--------------------------------------------
echo "<br> array current <br>";

$array = ["Ibrahim" , "Ahmed","Gamal","kamal"];
echo current($array) . "<br>";
echo next($array) . "<br>";
echo current($array) . "<br>";
echo prev($array) . "<br>";
echo reset($array) . "<br>";
echo end($array) . "<br>";
//--------------------------------------------

echo "array merge <br>";
$merge1=["a"=>"red","b"=>"green"];
$merge2=["c"=>"blue","b"=>"yellow"];
print "<pre>";
print_r(array_merge($merge1,$merge2));
print "</pre>";
//--------------------------------------------

//array rand($array , nums[optional]);

$nums = [1,2,32,5,6];

echo $nums[array_rand($nums)];
print "<pre>";
print_r(array_rand($nums , 2));
print "</pre>";

//--------------------------------------------

//shffle($array);
echo "Array shffle <br>";
print "<pre>";
shuffle($nums);
print_r($nums);
print "</pre>";

//--------------------------------------------

//array pop shift push  unshift 
echo "array pop shift push  unshift <br>";
$chars =["A","b","c","d"];
echo "<pre>";
print_r($chars);
echo "</pre>";

echo "//////////////////////////////////////////";

$frist = array_shift($chars); //remove frist array
echo "<pre>";
print_r($chars);
echo "</pre>";

echo "//////////////////////////////////////////";

$last = array_pop($chars); //remove end array
echo "<pre>";
print_r($chars);
echo "</pre>";

echo "//////////////////////////////////////////";
array_push($chars , "l","z"); //add end array
echo "<pre>";
print_r($chars);
echo "</pre>";
echo "//////////////////////////////////////////";

array_unshift($chars , "q","w"); //add start array
echo "<pre>";
print_r($chars);
echo "</pre>";
echo "//////////////////////////////////////////";
echo "<br>";

//--------------------------------------------


// map 
// هي ارسل كل قيمة من المصوفة الي دالة وتنفيذه عليه
//array_map(callback function ,array,other array [optional]);
function add_title ($name) {
    return "Mr $name";
}
$family_map = ["Ibrahim" , "Ahmed","Gamal","kamal"];
echo "Array map <br>";
echo "<pre>";
print_r(array_map("add_title",$family_map));
echo "</pre>";
echo "<br>";
//--------------------------------------------
//filter 
// هي عبارة فلاتر عناصر المصوفة وارجع العناصر المطبق عليه الشروط 
//array_filter(array,callback function ,flag [optional]);
//0 Default 
//ARRAY_FILTER_USE_KEY
//ARRAY_FILTER_USE_BOTH
function get_odd($num) {
    return $num %2 == 0 ;
}
echo "Array filter <br>";
echo "<pre>";
print_r(array_filter($nums , "get_odd"));
echo "</pre>";
echo "<br>";
//--------------------------------------------
//reduce
//array_reduce(array,callback function , Initial_value [optional]);
//reduce the array to A single value 
//carry => the value of the previous 
//item=> the value of the current iteration 
function add ($n1 ,$n2) {
    return $n1 +$n2 ;
}
$numbers = [1,5,68,7,65,66];
echo "Array reduce <br>";
echo array_reduce($numbers,"add");
echo " <br>";
echo array_reduce($numbers,"add",10  );





?>