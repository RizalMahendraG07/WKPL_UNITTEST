<?php
// path to run./vendor/bin/phpunit -- bootstrap vendor/autoload.php Filename.php
// Butuh Framework PHPUnit

use PHPUnit\Framework\TestCase; //mengimpor framework testcase yang ada didalam phpunit

// class yang mau ditest wordcount.php
// menggunakan require_once yang berfungsi memanggil sekali saja
require_once "wordcount.php";
// class  untuk run testing
class SimpleTest extends TestCase
{
    public  function testCountWords()
    {
        // Kita membuat class yang mau kita test dengan kode dibawah
        // 
        $wc = new WordCount();
        // kita masukkan parameter untuk variabel testSentence 4 kata, yang harusnya dap    at output 4.
        $testSentence = "My Name is Rizal"; // 4kata
        $WordCount = $wc->countWords($testSentence);

        // kita assert equal, ekspektasi nya harus 4, jika benar berarti wordcount berfungsi dengan baik
        //Variabel $this merupakan variabel khusus PHP dalam OOP yang digunakan untuk menunjuk sebuah objek, 
        //ketika kita mau mengaksesnya dalam sebuah class. $this juga sering disebut dengan pseuo-variable
        $this->assertEquals(4, $WordCount);
    }

}



?>
