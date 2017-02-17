<?php
    class Search
    {
        function occurrence($word, $phrase)
        {
        $result;
        $number = substr_count($phrase, $word);
        $result = $number;
        return $result;

    }
}



?>
