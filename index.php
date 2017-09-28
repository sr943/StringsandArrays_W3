


<?php

  $obj = new main();
 
  $text2 = "Shubhangi";
  $obj->strings($text2);
  
  
  $array = array(1,2,3,4,5,6,7);
  $X=array("A","B","C","D","E","F","G");
  $Y=array("A","C","E","G");
  $obj->arrays($array,$X,$Y);

  echo "<body style='background-color:FFBB33'>";

  class main {

    public function __construct() {

      echo '<h1><u><u><center>Strings and Array functions <center></u></u></h1></br>';

    }

    public function strings($text2) {

      echo '<h2><u>STRINGS-</u></h2></br>';

      echo '<h3>This function will give the string length which is :</h3> </br>';
      echo strlen("Shubhangi");
      echo '<hr>';
    
      echo '<h3>This function will count the words in given string which is :</h3> </br>';
      echo str_word_count("Shubhangi Rakhe");
      echo '<hr>';

      echo '<h3>This function will replace string from the given string :</h3> </br>';
      echo str_replace("Rakhe", "Dinesh Rakhe", "Shubhangi Rakhe");
      echo '<hr>';
  
      echo '<h3>This function will split the string into smaller chunks :</h3> </br>';
      echo chunk_split($text2,2,"+");
      echo '<hr>';
  
      echo '<h3>This function will give the ASCII value of first character :</h3> </br>';
      echo ord("Shubhangi");
      echo '<hr>';
  
     echo '<h3> Phonetic coding system intended to suppress spelling variations: </h3></br>';
     echo soundex($text2);
     echo '<hr>';

     echo '<h3> This function parse a query string into variables:</h3>("name=Shubhangi&age=25")</br>';
     parse_str("name=Shubhangi&age=25");
     echo $name."<br>";
     echo $age;
     echo '<hr>';

     echo '<h3>The function calculates the similarity between two strings.</h3>("Shubhangi Rakhe","Shubhangi Dinesh Rakhe")</br>';
     echo similar_text("Shubhangi Rakhe","Shubhangi Dinesh Rakhe");
     echo '<hr>';

     echo '<h3>The function add to the right side of the string, to a new length of x characters:</h3>(here x=14)</br>';
     $str = "Hello";
     echo str_pad($str,14,"Shubhangi");
     echo '<hr>';
     
     echo '<h3>This function calculates the metaphone key of a string. A metaphone key represents how a string sounds if said by an English speaking person.</h3></br>';
     echo metaphone($text2);
     echo '<hr>';

   }


    public function arrays($array,$X,$Y) {

      echo '<h2><u>ARRAYS-</u></h2></br>';


      echo '<h3>Array print function</h3>';
      print_r($array);
      echo '<hr>';

      echo '<h3>The array_chunk() function splits an array into chunks of new arrays.</h3>';
      print_r(array_chunk($array, 3));
      echo '<hr>';

      echo '<h3>The array_combine() function creates an array by using the elements from one keys array and one values array.</h3>';
      $c=array_combine($X,$array);
      print_r($c);
      echo '<hr>';

      echo '<h3>The array_combine() function creates an array by using the elements from one keys array and one values array.</h3>';
      $c=array_combine($X,$array);
      print_r($c);
      echo '<hr>';

      echo '<h3>The array_diff() function compares the values of two (or more) arrays, and returns the differences.</h3>';
      $result=array_diff($X,$Y);
      print_r($result);
      echo '<hr>';

      echo '<h3>The array_fill_keys() function fills an array with values, specifying keys.</h3>';
      $result=array_fill_keys($array,"Hello");
      print_r($result);
      echo '<hr>';

      echo '<h3>The array_slice() function returns selected parts of an array.</h3>';
      print_r(array_slice($array,3));
      echo '<hr>';

      echo '<h3>The array_sum() function returns the sum of all the values in the array.</h3>';
      echo array_sum($array);
      echo '<hr>';

      echo '<h3>The sizeof() function returns the number of elements in an array.</h3>';
      echo sizeof($X);
      echo '<hr>';


      echo '<h3>The current() function returns the value of the current element in an array.</h3>';
      echo current($X);
      echo '<hr>';
    }
    


    
    public function __destruct() {

      echo '<h1></br> <center>Finish </center></h1>';

    }


  }


