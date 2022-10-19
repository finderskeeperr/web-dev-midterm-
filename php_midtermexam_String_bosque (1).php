<?php
class strings{
    public $string_var;

function number_of_characters(){
    return strlen($this->strings);
}
function RemoveSpecialChars(){
    return preg_replace('/[^A-Za-z0-9\-]/', '', $this->strings); 
}
function GroupStrInto(){
    return explode(",", "vigilant", 3 );
    // return (explode(',' ($this->strings, 3));
}
function FindCharOccurence(){
    foreach (count_chars($this->strings, 1) as $i => $val) {
     echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n<br>";
    }
}
function ReplaceChar($first, $second){
    return str_replace($first, $second, $this->strings);
}

}

$strings = new strings();
$strings->strings="vigilant";
echo "String:".$strings->strings;
echo "</br>";
echo "NumberOfChars:" .$strings->number_of_characters();
echo "</br>";
echo "RemovingSpecialCharacters:" .$strings->RemoveSpecialChars();
echo "</br>";
// echo "GroupStrInto:" .$strings->GroupStrInto();
echo "FindCharOccurence:" .$strings->FindCharOccurence();
echo "</br>";
echo "ReplaceChar:" .$strings->ReplaceChar("i","R");
?>
