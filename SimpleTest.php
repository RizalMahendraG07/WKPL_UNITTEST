<?php
// path to run./vendor/bin/phpunit -- bootstrap vendor/autoload.php Filename.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// class yang mau ditest wordcount.php
require_once "wordcount.php";
// class  untuk run testing
class SimpleTest extends TestCase
{
    public  function testCountWords()
    {
        // Kita pakai class yang mau kita test
        $wc = new WordCount();
        // kita masukkan parameter 4 kata, yang harusnya dapat output 4.
        $testSentence = "My Name is Rizal"; // 4kata
        $WordCount = $wc->countWords($testSentence);

        // kita assert equal, ekspektasi nya harus 4, jikabenar berarti wordcount berfungsi dengan baik
        $this->assertEquals(4, $WordCount);
    }

}



?>