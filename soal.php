<!DOCTYPE html>
<html>
<head>
	<title>Quiz Ilmu Komputer</title>
	<style>
		body{background: #7fffd4; text-align: center; font-size: 30;}
	</style>
</head>
<body>
<?php
class oop{
	public function s1(){return "<br>1. Komputer bekerja dengan brainware, hardware dan...<br>";}
	public function s2(){return "<br>2. Bahasa yang dimengerti komputer merupakan bahasa mesin yang berisi angka...<br>";}
	public function s3(){return "<br>3. Perhitungan komputer terdapat 4 Sistem bilangan, yaitu Desimal, ..., Heksadesimal, dan biner<br>";}
	public function s4(){return "<br>4. Gerbang logika jika masukan bernilai sama maka hasilnya 0, dan jika masukan berbeda nilai maka hasilnya 1, nama Gerbang tersebut adalah...<br>";}
	public function s5(){return "<br>5. Lambang gerbang AND jika disimbolkan maka simbol yang tepat adalah...<br>";}
}
class udt{
	private $score;
	private $nama;
	public function setters($score){$this->score+=$score;}
	public function settern($nama){$this->nama=$nama;}
	public function getters(){return $this->score;}
	public function gettern(){return $this->nama;}
}
$score = new udt;
$nama = $_POST['nama'];
$score->settern($nama);
echo "Selamat datang di Quiz Ilmu Komputer, ". $score->gettern() .". Silahkan kerjakan soal-soal dibawah ini.<br>";
$i=0;
$soal = new oop;
?>
		<form method="post" name="frm" action="">
			<input type=<?php echo $nama;?> name="nama">
			<?php
do{
switch ($i) {
	case 0:{
		echo $soal->s1();
		?>
		<select name="a"/>
			<option value = "browser">browser</option>
			<option value = "software">software</option>
			<option value = "Operating System">OS</option>
			<option value = "web">web</option>
		</select>
		<?php
		$jawab = $_POST['a'];
		if($jawab == "software"){
			$score->setters(20);
		}
		$i++;
		break;
	}
	case 1:{
		echo $soal->s2();
		?>
		<select name="b"/>
			<option value = "hepta">hepta</option>
			<option value = "penta">penta</option>
			<option value = "biner">biner</option>
			<option value = "pecahan">pecahn</option>
		</select>
		<?php
		$jawab = $_POST['b'];
		if($jawab == "biner"){
			$score->setters(20);
		}
		$i++;
		break;
	}
	case 2:{
		echo $soal->s3();
		?>
		<select name="c"/>
			<option value = "hepta">
			<option value = "penta">
			<option value = "Operating System">
			<option value = "web">
		</select>
		<?php
		$jawab = $_POST['c'];
		if($jawab == "oktal"){
			$score->setters(20);
		}
		$i++;
		break;
	}
	case 3:{
		echo $soal->s4();
		?>
		<input name="d" type="text" />
		<?php
		$jawab = $_POST['d'];
		if($jawab == "xor"){
			$score->setters(20);
		}
		$i++;
		break;
	}
	case 4:{
		echo $soal->s5();
		?>
		<input name="e" type="text" />
		<?php
		$jawab = $_POST['e'];
		if($jawab == "&&"){
			$score->setters(20);
		}
		$i++;
		break;
	}
	default:{

	?>
		<input type="submit" name="answer" value="kirim" />
	</form>
	<?php
		echo "<br> Nilai anda adalah ". $score->getters() ." Poin.";
		$i++;# code...
		break;
	}
}
} while ($i<6);	
?>
</body>
</html>