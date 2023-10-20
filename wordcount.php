<?php 
class WordCount {
 //membuat fungsi countwords dengan parameter variabel sentece
 public function countWords($sentence) {
  //fungsi explode adalah untuk memisahkan string dan string yang sudah dipecah akan menjadi array
    return count(explode(" ",$sentence));
 }

}

?>
