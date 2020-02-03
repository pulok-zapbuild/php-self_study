<?php
    $str ="Php 'Devel'oper!!!! PhiiP";
    echo $str."<br>";

    #usind addcslashes() to add slash
    $str1=addcslashes($str,'e');
    echo $str1."<br>";
    $str2 = addslashes($str);#use addslashes()
    echo $str2."<br>";

    #:::different encoding function:::
    $str3 = bin2hex($str);#use bin2hex for binary to hexadecimal encoding
    echo $str3."<br>";
    $str4 = pack("H*",$str3);#use to reverse the above process
    echo $str."<br>";
    echo "<br>".hex2bin($str3)."<br>";#use hex2bin() to do the reverse
    echo convert_uuencode($str)."<br>";#use to do unix to unix encoding
    echo convert_uudecode(convert_uuencode($str))."<br>";#use to do utu decoding
    echo md5($str)."<br>";#use to do encode a string using MD5 techniqe
    
    #chr() is use to convert the ASCII value to char
    for($i=123;$i<=135;$i++)
    {
        $str6 = chr($i);
        echo $str6;
    }

    #function to break the string at different points
    $str5 = chop($str,"hii");
    echo $str5."<br>";
    #divide the string with a saperator
    echo chunk_split($str,3,"-")."<br>";
    #convert string into array
    print_r(explode(" ",$str));
    #convert array into string
    $arr = array('first','second','third');
    $str7 = implode(" ",$arr);
    echo $str7."<br>";
    echo join("+",$arr)."<br>";#same as implode()

    #function to change the case of the string 
    echo lcfirst($str)."<br>";#lowercase the first char
    echo ucfirst($str)."<br>";#uppercase the first char
    echo ucwords($str,"'")."<br>";#upper case all the words of string
    echo strtoupper($str)."<br>";#lowercase whole string
    echo strtolower($str)."<br>";#upper case whole string

    #warp a string into new file after specific length
    echo wordwrap($str,11,"<br>",true)."<br>";
    
    #delete the spaces or predefined words form starting and the end of string
    echo trim($str,"P")."<br>";#delete form both side 
    echo rtrim($str,"P")."<br>";#delete from right side
    echo ltrim($str,"P")."<br>";#delete from left side

    #the operations on substring using function
    $str8 = "php dev";
    echo substr($str,4,-5)."<br>";#to create a substring
    echo substr_compare($str,$str8,0,2,true)."<br>";#to compare differnt string
    echo substr_count($str,"e",7,2)."<br>";#count number of repeatance of a string
    echo substr_replace($str,"p",0,3)."<br>";#to replace a substring
    echo strtr($str,"php","PHP")."<br>";#to replace 


    #this funtion is use to divide a srting using specified symbol
    echo strtok($str,"'")."<br>";#it also keep track where it stops 
    echo strtok("'")."<br>";#so it will print next line when callled again


    echo strstr($str,"ev")."<br>";##stristr()is used to search insensetive
    echo strchr($str,"ve")."<br>";#work same as above

    echo strpos($str,"p",4)."<br>";#it tells the position of substring in string
    echo strripos($str,"p")."<br>";#it also tells the position but fron right side
    echo strrpos($str,"p")."<br>";#it does the samework as the first func does

    echo strrev($str)."<br>";#use to reverse the string
    echo strrchr($str,"Dev")."<br>";#search for the string in string


    #comparision of string
    #case-sensetive
    echo strcmp($str,strtolower($str))."<br>";
    echo strcoll($str,$str)."<br>";
    #case-insensetive
    echo strcasecmp($str,strtolower($str))."<br>";


    #this is use to count the different words in a string
    echo str_word_count($str)."<br>";
    print_r(str_word_count($str,1))."<br>";#return array
    print_r(str_word_count($str,2))."<br>";#return array with actual key value
    print_r(str_word_count($str,2,"!"))."<br>";#also include "! special char"


    print_r(str_split($str))."<br>";#covert string into array
    print_r(str_split($str,5))."<br>";#convert string into array in group of 5 charracter


    echo str_replace("h","$",$str)."<br>";#replace the existed substring
    echo str_ireplace("p","@",$str)."<br>";#replace the existed sustring(case-insensitive)
    
    
    echo str_pad($str,30,"%",STR_PAD_BOTH)."<br>";#it is use to done the padding in both side of a string


    var_dump(str_getcsv($str))."<br>";#convert string into csv file

    #use to decode the html entities
    $str9 = '&lt;a href=&quot;claculator.html&quot;&gt;calci&lt;/a&gt;';
    echo html_entity_decode($str9)."<br>";
    echo htmlspecialchars_decode($str9)."<br>";
    #use to convert the html in encoded form
    $str10 = '<a href="calculator.html">calci</a>';
    echo htmlentities($str10)."<br>";
    echo htmlspecialchars($str10)."<br>";

?>