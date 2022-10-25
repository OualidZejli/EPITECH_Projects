<?php

    function calc( string $operator, int $nbr1, int $nbr2 ){
        if ($operator=='+'){
            $result=$nbr1+$nbr2;
        }

        elseif ($operator=='-'){
            $result=$nbr1-$nbr2;
        }

        elseif ($operator=='*'){
            $result=$nbr1*$nbr2;
        }

        elseif ($operator=='/'){
            if ($nbr2==0){
                $result = 'Cannot divide by 0';
            }
            else{
            $result=$nbr1/$nbr2;}
        }
    
        elseif ($operator=='%'){
            $result=$nbr1%$nbr2;
        }

        else{
            $result = 'Unknown operator';
        }

        return $result;
    }

?>