<html>
    <head>
        <meta charset="UTF-8">
        <title>array</title>
    </head>
    <body style="background-color: rgb(212, 167, 216)">
        <h1 style="background-color: white" align="center" ><i>ARRAY</i></h1>
        
        <?php
        echo "<ul>";
        echo "<li>";
        //Method 1://Numerical Array
        echo "<h3 style='background-color:yellow'>Numeric array</h3>";
        $b[0] = 20;
        $b[1] = 30.5;
        $b[2] = "vanshi";
        $b[3] = 3.16;
        $b[4] = "22";
        for($c=0;$c<=4;$c++){
            echo "<br>".$b[$c];
        }
        echo "<hr>";
        echo "</li>";
        
        echo "<li>";
        //Method 2://Dynamic Array(index is dynamic)
        echo "<h3 style='background-color:yellow'>Dynamic array</h3>";
        $a[] = 20;
        $a[] = 30.5;
        $a[] = "vanshi";
        $a[] = 3.16;
        $a[] = "22";
        for($d=0;$d<count($a);$d++){
            echo "<br>".$a[$d];
        }
        echo "<hr>";
        echo "</li>";
        
        echo "<li>";
        //Method:3
        $e = array(20,30.5,"vanshi",3.16,"22");
        echo"<br>Following shows the value stored in particular index of array :";
        echo $e[3];
        echo "</li>";
        
        echo "<li>";
        echo "<hr>";
        
        echo "To display value of whole array";
        for($i=0;$i<count($e);$i++){
            echo "<br>value at index ".$i." is ".$e[$i];
        }
        echo "<hr>";
        echo "</li>";
        
        echo "<li>";
        //Associative Array
        //key=value
        echo "<h3 style='background-color:yellow'>Associative Array</h3>";
        echo "<ol>";
            echo "<li>";
            echo "<h4><i>Method1</i></h4>";
            $f[0] = 10;
            $f['pie'] = 3.14;
            $f['golden ratio'] = "Sacred ratio";
            $f[1.0] = 1;
            $f[20] = 20.10;
        
            echo "<br>The value of pie is <b>".$f['pie']."</b>";
            echo "<br>The value entered inside index 0 is <b>".$f[-0]."</b>";
            
            echo "<h3 style='background-color: powderblue'>use of foreach</h3>";
                echo "<ul>";
                echo "<li>";
                echo "Displaying only values for each index in array";
                foreach($f as $value){
                    echo "<br>Value is ".$value;
                }
                echo "</li>";
                
                echo "<li>";
                echo "Displaying keys and values of an array";
                foreach($f as $key => $value){
                    echo "<br>For key $key The value is ".$value;
                }

                echo "</li>";
                echo "</ul>";
            echo "</li>";
            
            echo "<li>";
            echo "<h4><i>Method2</i></h4>";
                $f = array(
                        0 => 10,
                        'pie' => 3.14,
                        'golden ratio' => "Sacred ratio",
                        1.0 => 1,
                        20=> 20.00
                    );
        
            echo "<br>Another name of golden ratio is <b>".$f['golden ratio']."</b>";
            
            echo "<h3 style='background-color:powderblue'>use of foreach</h3>";
                echo "<ul>";
                echo "<li>";
                echo "Displaying only values for each index in array";
                foreach($f as $value){
                    echo "<br>Value is ".$value;
                }
                echo "</li>";
                
                echo "<li>";
                echo "Displaying keys and values of an array";
                foreach($f as $key => $value){
                    echo "<br>For key $key The value is ".$value;
                }

                echo "</li>";
                echo "</ul>";
            
           
            echo "</li>";
            echo "</ol>";
            echo "<hr>";
            
        echo "</li>";
        
        echo "<li>";
        //inbuilt functions to debug an array 
        echo "<h3 style='background-color:yellow'>Inbuilt functions to debug an array </h3>";
        
            echo "<ul>";
                echo "<li>";
                echo "<pre>";
                print_r($a);
                echo "<pre>";
                echo "</li>";
                
                echo "<li>";
                echo "<pre>";
                var_dump($a);
                echo "<pre>";
                echo "</li>";
            echo "</ul>";
        echo "<hr>";
        echo "</li>";
        
        echo "</ul>";
        ?>
        
    </body>
</html>
