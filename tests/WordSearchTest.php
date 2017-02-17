<?php

    require_once "src/WordSearch.php";

    class SearchTest extends PHPUnit_Framework_TestCase
    {

        function test_occurrence_singleWord()
        {
            //Arrange
            $test_Search = new Search;
            $word = "is";
            $phrase = "is";

            //Act
            $result = $test_Search->occurrence($word, $phrase);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_occurrence_multipleWords()
        {
            //Arrange
            $test_Search = new Search;
            $word = "is";
            $phrase = "substr_count is a pretty cool function";

            //Act
            $result = $test_Search->occurrence($word, $phrase);

            //Assert
            $this->assertEquals(1, $result);
        }
    }




?>
