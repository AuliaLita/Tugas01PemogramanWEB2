
<form name="grade" method="post">
<input type="text" name="txtnilai">
<input type="submit" name="hitung" value="Konversi">
</form>

<?php 

if (isset($_POST['hitung'])){
$nilai = $_POST['txtnilai'];
if ($nilai >= 80 ){ $grade='A';} else
if ($nilai > 70 ){ $grade='B';} else
if ($nilai > 60 ){ $grade='C';} else
if ($nilai > 50 ){ $grade='D';} else
if ($nilai <= 50){ $grade='E';}

echo "Grade = $grade";

}
?>
