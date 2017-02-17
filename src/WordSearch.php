<?php
    class Search
    {
        function occurrence($word, $phrase)
        {
        $result;
        $word = strtolower($word);
        $phrase = strtolower($phrase);
        $matching_words = array();
        $full_words = explode(" ", $phrase);
        foreach ($full_words as $singleword) {
            if ($singleword === $word) {
                array_push($matching_words, $word);
            }
        }
        $count_array = array_count_values($matching_words);
        $number_of_matches = $count_array[$word];
        $result = $number_of_matches;
        return $result;

    }

    function save()
    {
        array_push($_SESSION['list_of_searches'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_searches'];
    }
}
?>
