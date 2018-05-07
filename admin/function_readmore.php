<?php
function selengkapnya($konten){
  $i = strpos($konten, '<!--selengkapnya-->');
  if ($i !== false) {
   $i += strlen('<!--selengkapnya-->');
	return substr($konten, 0, $i);
  }
 else return $konten;
}

function readmore($konten){
	$artikel = substr($konten, 0,200);
  $artikel .= ' ...';
  return $artikel;
}

function readmore2($konten){
  $string = strip_tags($konten);
  if (strlen($string) > 200) {

      // truncate string
      $stringCut = substr($string, 0, 200);
      $endPoint = strrpos($stringCut, ' ');

      //if the string doesn't contain any space then it will cut without word basis.
      $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
      $string .= '... <a href="#">Read More</a>';
  }
  echo $string;
}
?>