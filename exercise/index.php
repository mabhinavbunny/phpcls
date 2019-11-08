<!DOCTYPE html>
<html>
<body>
<?php
$cegeps = array(
    "Collège Ahuntsic"              => "http://www.collegeahuntsic.qc.ca/accueil/accueil.html",
    "Collège de Bois-de-Boulogne"   => "http://www.bdeb.qc.ca/",
    "Champlain Regional Collège"    => "http://www.crc-sher.qc.ca/home/",
    "Dawson College"                => "http://www.dawsoncollege.qc.ca/",
    "Collège Édouard-Montpetit"     => "http://www.college-em.qc.ca/",
    "John Abbott College"           => "http://www.johnabbott.qc.ca/",
    "Cégep régional de Lanaudière"  => "http://www.cegep-lanaudiere.qc.ca/",
    "Collège Lionel-Groulx"         => "http://www.clg.qc.ca/",
);

?>
<nav>
<?php 

  foreach($cegeps as $key=>$value){
   
	 echo "<a href='$value'>$key</a>";
 }
  ?>
</nav>

</body>
</html>