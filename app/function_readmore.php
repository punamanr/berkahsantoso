<?php 
function readmore($konten){
	$artikel = substr($konten, 0,200);
	$artikel .= ' ...';
  return $artikel;
}
?>