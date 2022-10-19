<?php

class Calculator {
    //1 number_list – a property that accepts an array of numbers. 
    var $number_list = array(); 

    public function Add() 
    {
        //2 Add the number_list values;
        $result = 0;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $result += (int) $this->number_list[$i];
            return $result;
        }
        
    }
    
    public function Subtract()
    {
        //3 Substract the number_list values first two numbers;
        $result = (int) $this->number_list[0] - (int) $this->number_list[1];
        return result;
    }
    
    public function Divide() 
    {
      //4 Divide – a method that adds the numbers inside the number_list property and divides it by the number of items inside the number_list 
        $result = 1;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $result += (int) $this->number_list[$i];
        }
        $result = $result / count($this->number_list);
        return result;
    }
    public function Factorial()
    {
      
        //5 Factorial – a method that returns the factorial of each number inside the number_list 
        $result = 1;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $result *= (int) $this->number_list[$i];
            return $result;
        }
    }
    public function Prime()
    {
        //6 Prime – a method that returns an array of all prime numbers inside the number_list If no prime numbers are found, the method will return an empty array
        $notPrimeNumbers = false; 
        $result = array();
        for($i = 0; $i < count($this->number_list); $i++)
        {
            if($this->number_list[$i] < 2)
                $notPrimeNumbers = true;

            if($this->number_list[$i] % 2 == 0)
                array_push($result, $this->number_list[$i]);
            
        }
        if(count($result) < 1 && $notPrimeNumbers) echo $result; // return empty array.
        else return 'Prime Numbers: ' . $result;
    
    }
}
?>


