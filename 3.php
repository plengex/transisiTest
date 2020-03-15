<?php
    function unigram($sentence)
    {
        $words = explode(" ", strtolower($sentence));
        return implode(", ", $words);
    }
    
    function bigram($sentence)
    {
        $words	= explode(" ", strtolower($sentence));
        $bi		= [];
        for ($i=0; $i<count($words); $i+=2) { 
            $bi[] = $words[$i]." ".$words[$i+1];
        }
        return implode(", ", $bi);
    }
    
    function trigram($sentence)
    {
        $words	= explode(" ", strtolower($sentence));
        $bi		= [];
        for ($i=0; $i<count($words); $i+=3) { 
            $bi[] = $words[$i]." ".$words[$i+1]." ".$words[$i+2];
        }
        return implode(", ", $bi);
    }
    
    function nGrams($sentence, $n=1)
    {
        $words	= explode(" ", strtolower($sentence));
        $result	= [];	
    
        for($i=0; $i+$n<=count($words); $i+=$n){
            $string="";
            for($j=0; $j<$n; $j++){ 
                $string .= " ".$words[$j+$i]; 
            }
    
            $result[$i] = $string;
        }
    
        return implode(", ", $result);
    }
    
    
    $sentence = "Jakarta adalah ibukota negara Republik Indonesia";
    //echo unigram($sentence);
    //echo bigram($sentence);
    //echo trigram($sentence);
    //echo nGrams($sentence, 2);
?>