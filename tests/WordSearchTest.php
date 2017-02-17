<?php

    require_once "src/WordSearch.php";

    class SearchTest extends PHPUnit_Framework_TestCase
    {

        function test_occurrence()
        {
            //Arrange
            $test_Search = new Search;
            $word = "is";
            $phrase = "is";

            //Act
            $result = $test_Search->occurence($word, $phrase);

            //Assert
            $this->assertEquals(1, $result);
        }
    }




?>
