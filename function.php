<html>
    <head>
        <title>array functions</title>
    </head>
    <body style="background-color: rgb(189, 241, 141)">
        <h1 style="background-color: pink" align="center"><i>ARRAY FUNCTIONS</i></h1>
       <?php
       echo "<ul>";
            echo "<li>";
            echo "<h2>count()</h2>";
            echo " The count() array function in PHP will count the number of elements in an array.";
            $a = array('air','wind','water','fire');
            echo "No of elements in array are <b>".count($a)."</b>";
            echo "</li>";
            ////////////////////////////////////////////////////////////////////////
            echo "<li>";
            echo "<h2>array_count_values()</h2>";
            echo "The function will return an associative array with the array values as keys,
                and their count is the value. It will only list distinct values as keys, and count
                all matches found for particular values in the array";
            $b = array("air","water","air","fire","water","leaf");
            $newb = array_count_values($b);
            foreach ($newb as $key => $value) {
            echo "<br/>$key - <strong>$value</strong> ";
            }
           echo "</li>";
           /////////////////////////////////////////////////////////////////////
           echo "<li>";
           echo "<h2>array_sum()</h2>";
           echo "The array_sum() array function in PHP will calculate the sum of all values
                within an array";
           $c = array(10,40,30,20,44);
           echo "<br>Sum= <b>".array_sum($c)."</b>";
           echo "</li>";
           //////////////////////////////////////////////////////////////////////////
           echo "<li>";
           echo "<h2>array_product()</h2>";
           echo "The array_product() array function in PHP will find the product of the
                target array by multiplying each value as it evaluates the array,
                compounding the values";
           $d = array(10,40,30,20,44);
           echo "<br>Product = <b>".array_product($d)."</b>";
           echo "</li>";
           ///////////////////////////////////////////////////////////////////////////
           echo "<li>";
           echo "<h2>array_reverse()</h2>";
           echo "The array_reverse() array function in PHP will reverse the elements in an
                array.";
            $e = array('air','wind','water','fire');
            $rev = array_reverse($e);
            echo "<br>";
            print_r($rev);
           echo "</li>";
           ///////////////////////////////////////////////////////////////////////////
           echo "<li>";
           echo "<h2>in_array()</h2>";
           echo "The in_array() array function in PHP is used when we wish to look inside of an array
                 to see if a certain value exists. This function will return either 'true'(1) or 'false(0)'";
           $f = array("air","water","wind","fire");
           $temp = in_array("wind",$f);
           echo "<br>If entered string is found '1' else '0'=><b>".$temp."</b>";
           echo "</li>";
           ////////////////////////////////////////////////////////////////////////////////////////
           echo "<li>";
           echo "<h2>array_rand()</h2>";
           echo "The array_rand() array function in PHP will select one or more keys from an
                array at random.";
           $g = array('air','wind','water','fire');
           $random = array_rand($g);
           echo "<br>Randomly selected <b>".$g[$random]."</b>";
           
           
                echo "<ul>";
                echo "<li>";
                        echo "<h3>Select multiple keys at random</h3>";
                        $h = array('air','water','wind','fire'); 
                        $ran = array_rand($h,2);
                        foreach ($ran as $key => $value) {
                                echo "<br />$key - <strong>" . $h[$value] . "</strong>";
                        };
                echo "</li>";
                echo "</ul>";
          echo "</li>";
          ////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_unique()</h2>";
          echo "The array_unique() array function in PHP will remove all duplicate values from within an array<br>";
          $i = array("air","water","wind","air","fire");
          echo "<br>".print_r(array_unique($i));
          echo "</li>";
          ///////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_merge()</h2>";
          echo "The array_merge() array function in PHP will merge multiple arrays.";
          $j = array("air","water","wind","air","fire");
          $k = array(10,20,30,40,50);
          $merge = array_merge($j,$k);
          echo "<br>".print_r($merge);
          echo "</li>";
          //////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_search()</h2>";
          echo "The array_search() array function in PHP will search in an array for a specific value. If found it will return the corresponding key for that value. It is a good way to check to see if a value exists in an array.";
          $l = array("air","water","wind","fire");
          $check = array_search("wind",$l);
          echo "Search is applied this will show index number of string which is searched <b>".$check."</b>";
          echo "</li>";
          /////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>range()</h2>";
          echo "The range() array function in PHP will create a new array using a specified range. You can use letter or number ranges.";
          $m = range("11","20");
          foreach($m as $key => $value){
              echo "<br> $key - $value";
          }
                echo "<ul>";
                echo "<li>";
                    echo "A program on range of year";
                    $year = range(1900,2020);
                    echo "<br>*<select>";
                    foreach ($year as $value) {
                        echo "<option>$value</option>";
                    }
                    echo "</select>";
                echo "</li>";
                echo "</ul>";
          echo "</li>";
          /////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>sort()</h2>";
          echo "The sort() array function in PHP will sort an array by its values from lowest to highest. It will sort letters and numbers in an ascending order.";
          echo "<br>";
          $n = array(44,23,400,30,62,1,20);
          sort($n);
          echo "<br>".print_r($n);
          echo "</li>";
          /////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>rsort()</h2>";
          echo "The rsort() array function in PHP will sort an array in reverse or descending order. This function behaves opposite the sort() function.";
          echo "<br>";
          $o = array(44,23,400,30,62,1,20);
          rsort($o);
          echo "<br>".print_r($o);
          echo "</li>";
          //////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>asort()</h2>";
          echo "The asort() array function in PHP will sort all of the elements in an array in ascending order according to the values. The indexes will be preserved.";
          echo "<br>";
          $p = array(44,23,400,30,62,1,20);
          asort($p);
          echo "<br>".print_r($p);
          echo "</li>";
          /////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>ksort()[Key sort]</h2>";
          echo "The ksort() array function in PHP will sort an array in ascending order according to the keys.";
          echo "<br>";
          $q = array(44,23,400,30,62,1,20);
          ksort($q);
          echo "<br>".print_r($q);
          
          echo "<ul>";
          echo "<li>";
          echo "program of sorting on basis of key";
          $fruit = array( 
              "Banana" => "Yellow",
              "Apple" => "Red",
              "Mango" => "Green"
              ); 
          ksort($fruit); 
          foreach ($fruit as $key => $value) {
                  echo "<br />$key - $value "; 
                  
              }
          echo "</li>";
          echo "</ul>";    
          echo "</li>";
          /////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>krsort()[Key reverse sort]</h2>";
          echo "The krsort() array function in PHP will sort an array in reverse according to the keys.";
          echo "<br>";
          $fruit1 = array( 
              "Banana" => "Yellow",
              "Apple" => "Red",
              "Mango" => "Green"
              ); 
          krsort($fruit); 
          foreach ($fruit as $key => $value) {
                  echo "<br />$key - $value "; 
                  
              }
          echo "</li>";
          ///////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>shuffle()</h2>";
          echo "The shuffle() array function in PHP will randomly shuffle the order of the elements in an array.";
          $r = array("Football", "Baseball", "Hockey", "Tennis", "Boxing");
          shuffle($r);      
          foreach( $r as $key => $value){
              echo "<br> $value";
          }
          echo "</li>";
          ///////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_key_exists()</h2>";
          echo "The array_key_exists() array function in PHP will return either 'true' or 'false' when it runs. It takes two parameters to operate. The first parameter is the key that you wish to find out if it exists, and the second parameter is the target array to search in for that key or index.";
          $s = array(
              "j" => "java",
              "p" => "python"
              );
          echo "<br>".array_key_exists('j',$s);
          echo "</li>";
          ///////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_change_key_case()</h2>";
          echo "The array_change_key_case() function is used to change all keys of a given array to lower case or upper case. array_change_key_case (input_array, input_case) . Either CASE_UPPER or CASE_LOWER. Default value : CASE_LOWER ";
          echo "<br>";
          $t = array(
              "java" => "red",
              "pytho" => "blue",
              "django"=>"green"
              );
          $uppercase = array_change_key_case($t,CASE_UPPER);
          echo "<br>".print_r($uppercase);
          echo "</li>";          
          ///////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_combine()</h2>";
          echo "The array_combine() function is used to creates an array by using one array for keys and another for its values. array_combine(array_keys, array_values)";
          //both array elements must be equal.
          echo "<br>";
          $u = array("bill","warren","steve" );
          $v = array("gates","buffett","jobs");
          $combine = array_combine($u,$v);
          print_r($combine);
          echo "</li>";
          ///////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>end()</h2>";
          echo "The end() array function in PHP will return the value of the last element in an array.";
          echo "<br>";
          $w = array("air","water","fire","wind","leaf");
          echo "last value entered is <b>".end($w)."</b>";
          echo "</li>";
          ////////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>compact()</h2>";
          echo "Create an array from variables and their values: ";
          echo "<br>";
          $name = "steve";
          $surname = "jobs";
          $x = compact("name", "surname");
          print_r($x); 
          echo "</li>";
          ////////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_flip()</h2>";
          echo "Flip all keys with their associated values in an array:";
          $y = array(
              "js"=>"javascript",
              "cpu"=>"processor",
              "www"=>"worldwideweb"
          );
          $store = array_flip($y);
          echo "<br>Flipped array :".print_r($store);
          echo "</li>";
          ///////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_diff()</h2>";
          echo "Compare the values of two arrays, and return the differences";
          echo "<br>";
          $arr1 = array("green","blue","red","peach","yellow","pink");
          $arr2 = array("peach","blue","red");
          $diff = array_diff($arr1,$arr2);
          print_r($diff);
          echo "</li>";
          ////////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_intersect()</h2>";
          echo "The  array function in PHP will create a new array from comparing arrays against each other to see if any values match. It will return an associative array with all of the matches found in the arrays you compare.";
          echo "<br>";
          $arr3 = array(
              "0"=>"green",
              "1"=>"blue",
              "2"=>"red",
              "3"=>"peach",
              "4"=>"yellow",
              "5"=>"pink"
              );
          $arr4 = array(
              "6"=>"peach",
              "7"=>"blue",
              "8"=>"red"
              );
          $intersect = array_intersect($arr3,$arr4);
          print_r($intersect);
          echo "</li>";
          /////////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_values()</h2>";
          echo "The array_values() array function in PHP will return a new array made up of the values from a target array. The resulting array will be a numerically indexed array.";
          $arr5 = array(
              "processor"=>"assembly",
              "machine learning"=>"python",
              "web development"=>"php"
              );
          $arr6 = array_values($arr5); 
          foreach($arr6 as $key => $value) {
              echo " <br />$key - $value"; 
          }
          echo "</li>";
          //////////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_push()</h2>";
          echo "The array_push() function inserts one or more elements to the end of a Numerical array. array_push(array,value1,value2...)";
          echo "<br>";
          $z=array("aasembly","machine");
          array_push($z,"java","php","python"); 
          print_r($z);

          echo "</li>";
          //////////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>array_pop()</h2>";
          echo "The array_pop() function deletes the last element of an array.array_pop(array)";
          echo "<br>";
          $pop = array("c", "c++", "Java", "PHP", "ASP"); 
          array_pop($pop); 
          print_r($pop);
          echo "<br>";
          array_pop($pop); 
          print_r($pop);
          echo "</li>";
          ///////////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>explode()</h2>";
          //echo "Explode function is used to break a string into an array.String to Array explode($delimiter, $string);";
          echo "<br>";
          $string1 = "I Love my life and i am living my life";
          $arr8 =  explode(" ",$string1);
          print_r($arr8);

          echo "</li>";
          //////////////////////////////////////////////////////////////////////////////
          echo "<li>";
          echo "<h2>implode()</h2>";
          echo "Php implode function is used to convert an array into string. It return output as a string. Array to String;";
          echo "<br>";
          $arr9 = array("i","love","my","life","and","i","am","living","my","life","to","the","fullest"); 
          $string2 = implode(" ", $arr9); 
          echo "<b>".$string2."</b>";

          echo "</li>";
       echo"</ul>"
       ?>
    </body>
</html>

