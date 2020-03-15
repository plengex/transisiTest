<?php
    function enkripsi($text)
    {
        $alphabet	= range("A", "Z");
        $text		= strtoupper($text);
        $textCount	= strlen($text);
        $result		= [];
        for ($i=0; $i<$textCount; $i++) { 
            if ($i%2 === 0) {
                $result[] = $alphabet[$i+1+array_search($text[$i], $alphabet)];
            }
            else {
                $result[] = $alphabet[array_search($text[$i], $alphabet)-($i+1)];
            }
        }
        return implode("", $result);
    }
    
    echo enkripsi("DFHKNQ");
?>