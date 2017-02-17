<?php
    class Search
    {
        function occurrence($word, $phrase)
        {
        $result;
        $matching_words = array();
        $full_words = explode(" ", $phrase);
        foreach ($full_words as $singleword) {
            if ($singleword === $word) {
                array_push($matching_words, $word);
            }
        }
        $count_array = array_count_values($matching_words);
        $number_of_matches = $count_array[$word];
        // $number = substr_count($phrase, $word);
        $result = $number_of_matches;
        return $result;

    }
}
?>
