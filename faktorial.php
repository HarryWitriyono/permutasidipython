<form method="post">
 Ketik jumlah obyek : 
 <input type="number" name="n">
 <input type="submit" name="bHit" value="Hitung Faktorial"><br>
</form>
<?php 
if (isset($_POST['bHit'])) {
	$n=$_POST['n'];
	$faktorial=1;
	for ($x=$faktorial;$x<=$n;$x++) {
		$faktorial=$faktorial*$x;
	}
	echo 'Nilai faktorial dari '.$n.' adalah : '.$faktorial;
}
?>