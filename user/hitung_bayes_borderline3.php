<?php
require_once '../inc/config.php';
require_once '../inc/function.php';
include '../template/header.php';

	$q['all'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."';");
	$ambil = mysql_fetch_array($q['all']);
	$no1 = $ambil['no1'];
	$no2 = $ambil['no2'];
	$no3 = $ambil['no3'];
	$no4 = $ambil['no4'];
	$no5 = $ambil['no5'];
	$no6 = $ambil['no6'];
	$no7 = $ambil['no7'];
	$no8 = $ambil['no8'];
	$no9 = $ambil['no9'];
	$no10 = $ambil['no10'];
	$no11 = $ambil['no11'];
	$no12 = $ambil['no12'];
	$no13 = $ambil['no13'];
	$no14 = $ambil['no14'];
	$no15 = $ambil['no15'];
	$no16 = $ambil['no16'];
	$kelas = $ambil['klas_borderline'];
	
	$q['all'] = mysql_query("SELECT * FROM questioner2;");
	$count['all'] = mysql_num_rows($q['all']);

	//HITUNG NILAI kuat (klas_borderline = Kuat)
	$q['kuat'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat';");
	$count['kuat'] = mysql_num_rows($q['kuat']);
	
	//HITUNG NILAI kuat (klas_borderline = Sedang)
	$q['sedang'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang';");
	$count['sedang'] = mysql_num_rows($q['sedang']);
	
	//HITUNG NILAI kuat (klas_borderline = Lemah)
	$q['lemah'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah';");
	$count['lemah'] = mysql_num_rows($q['lemah']);
	
	//No1
	$q['no1_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no1='1';");
	$count['no1_kuat_ya'] = mysql_num_rows($q['no1_kuat_ya']);
	$q['no1_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no1='1';");
	$count['no1_sedang_ya'] = mysql_num_rows($q['no1_sedang_ya']);
	$q['no1_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no1='1';");
	$count['no1_lemah_ya'] = mysql_num_rows($q['no1_lemah_ya']);
	
	$q['no1_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no1='0';");
	$count['no1_kuat_tidak'] = mysql_num_rows($q['no1_kuat_tidak']);
	$q['no1_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no1='0';");
	$count['no1_sedang_tidak'] = mysql_num_rows($q['no1_sedang_tidak']);
	$q['no1_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no1='0';");
	$count['no1_lemah_tidak'] = mysql_num_rows($q['no1_lemah_tidak']);
	
	echo "No 1 Kuat Ya: $count[no1_kuat_ya]/$count[kuat]<br>";
	echo "No 1 Sedang Ya: $count[no1_sedang_ya]/$count[sedang]<br>";
	echo "No 1 Lemah Ya: $count[no1_lemah_ya]/$count[lemah]<br>";
	
	echo "No 1 Kuat Tidak: $count[no1_kuat_tidak]/$count[kuat]<br>";
	echo "No 1 Sedang Tidak: $count[no1_sedang_tidak]/$count[sedang]<br>";
	echo "No 1 Lemah Tidak: $count[no1_lemah_tidak]/$count[lemah]<br><br>";
	
	//no2
	$q['no2_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no2='1';");
	$count['no2_kuat_ya'] = mysql_num_rows($q['no2_kuat_ya']);
	$q['no2_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no2='1';");
	$count['no2_sedang_ya'] = mysql_num_rows($q['no2_sedang_ya']);
	$q['no2_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no2='1';");
	$count['no2_lemah_ya'] = mysql_num_rows($q['no2_lemah_ya']);
	
	$q['no2_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no2='0';");
	$count['no2_kuat_tidak'] = mysql_num_rows($q['no2_kuat_tidak']);
	$q['no2_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no2='0';");
	$count['no2_sedang_tidak'] = mysql_num_rows($q['no2_sedang_tidak']);
	$q['no2_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no2='0';");
	$count['no2_lemah_tidak'] = mysql_num_rows($q['no2_lemah_tidak']);
	
	echo "No 2 Kuat Ya: $count[no2_kuat_ya]/$count[kuat]<br>";
	echo "No 2 Sedang Ya: $count[no2_sedang_ya]/$count[sedang]<br>";
	echo "No 2 Lemah Ya: $count[no2_lemah_ya]/$count[lemah]<br>";
	
	echo "No 2 Kuat Tidak: $count[no2_kuat_tidak]/$count[kuat]<br>";
	echo "No 2 Sedang Tidak: $count[no2_sedang_tidak]/$count[sedang]<br>";
	echo "No 2 Lemah Tidak: $count[no2_lemah_tidak]/$count[lemah]<br><br>";
	
	//no3
	$q['no3_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no3='1';");
	$count['no3_kuat_ya'] = mysql_num_rows($q['no3_kuat_ya']);
	$q['no3_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no3='1';");
	$count['no3_sedang_ya'] = mysql_num_rows($q['no3_sedang_ya']);
	$q['no3_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no3='1';");
	$count['no3_lemah_ya'] = mysql_num_rows($q['no3_lemah_ya']);
	
	$q['no3_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no3='0';");
	$count['no3_kuat_tidak'] = mysql_num_rows($q['no3_kuat_tidak']);
	$q['no3_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no3='0';");
	$count['no3_sedang_tidak'] = mysql_num_rows($q['no3_sedang_tidak']);
	$q['no3_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no3='0';");
	$count['no3_lemah_tidak'] = mysql_num_rows($q['no3_lemah_tidak']);
	
	echo "No 3 Kuat Ya: $count[no3_kuat_ya]/$count[kuat]<br>";
	echo "No 3 Sedang Ya: $count[no3_sedang_ya]/$count[sedang]<br>";
	echo "No 3 Lemah Ya: $count[no3_lemah_ya]/$count[lemah]<br>";
	
	echo "No 3 Kuat Tidak: $count[no3_kuat_tidak]/$count[kuat]<br>";
	echo "No 3 Sedang Tidak: $count[no3_sedang_tidak]/$count[sedang]<br>";
	echo "No 3 Lemah Tidak: $count[no3_lemah_tidak]/$count[lemah]<br><br>";
	
	//no4
	$q['no4_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no4='1';");
	$count['no4_kuat_ya'] = mysql_num_rows($q['no4_kuat_ya']);
	$q['no4_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no4='1';");
	$count['no4_sedang_ya'] = mysql_num_rows($q['no4_sedang_ya']);
	$q['no4_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no4='1';");
	$count['no4_lemah_ya'] = mysql_num_rows($q['no4_lemah_ya']);
	
	$q['no4_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no4='0';");
	$count['no4_kuat_tidak'] = mysql_num_rows($q['no4_kuat_tidak']);
	$q['no4_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no4='0';");
	$count['no4_sedang_tidak'] = mysql_num_rows($q['no4_sedang_tidak']);
	$q['no4_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no4='0';");
	$count['no4_lemah_tidak'] = mysql_num_rows($q['no4_lemah_tidak']);
	
	echo "No 4 Kuat Ya: $count[no4_kuat_ya]/$count[kuat]<br>";
	echo "No 4 Sedang Ya: $count[no4_sedang_ya]/$count[sedang]<br>";
	echo "No 4 Lemah Ya: $count[no4_lemah_ya]/$count[lemah]<br>";
	
	echo "No 4 Kuat Tidak: $count[no4_kuat_tidak]/$count[kuat]<br>";
	echo "No 4 Sedang Tidak: $count[no4_sedang_tidak]/$count[sedang]<br>";
	echo "No 4 Lemah Tidak: $count[no4_lemah_tidak]/$count[lemah]<br><br>";
	
	//no5
	$q['no5_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no5='1';");
	$count['no5_kuat_ya'] = mysql_num_rows($q['no5_kuat_ya']);
	$q['no5_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no5='1';");
	$count['no5_sedang_ya'] = mysql_num_rows($q['no5_sedang_ya']);
	$q['no5_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no5='1';");
	$count['no5_lemah_ya'] = mysql_num_rows($q['no5_lemah_ya']);
	
	$q['no5_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no5='0';");
	$count['no5_kuat_tidak'] = mysql_num_rows($q['no5_kuat_tidak']);
	$q['no5_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no5='0';");
	$count['no5_sedang_tidak'] = mysql_num_rows($q['no5_sedang_tidak']);
	$q['no5_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no5='0';");
	$count['no5_lemah_tidak'] = mysql_num_rows($q['no5_lemah_tidak']);
	
	echo "No 5 Kuat Ya: $count[no5_kuat_ya]/$count[kuat]<br>";
	echo "No 5 Sedang Ya: $count[no5_sedang_ya]/$count[sedang]<br>";
	echo "No 5 Lemah Ya: $count[no5_lemah_ya]/$count[lemah]<br>";
	
	echo "No 5 Kuat Tidak: $count[no5_kuat_tidak]/$count[kuat]<br>";
	echo "No 5 Sedang Tidak: $count[no5_sedang_tidak]/$count[sedang]<br>";
	echo "No 5 Lemah Tidak: $count[no5_lemah_tidak]/$count[lemah]<br><br>";
	
	//no6
	$q['no6_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no6='1';");
	$count['no6_kuat_ya'] = mysql_num_rows($q['no6_kuat_ya']);
	$q['no6_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no6='1';");
	$count['no6_sedang_ya'] = mysql_num_rows($q['no6_sedang_ya']);
	$q['no6_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no6='1';");
	$count['no6_lemah_ya'] = mysql_num_rows($q['no6_lemah_ya']);
	
	$q['no6_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no6='0';");
	$count['no6_kuat_tidak'] = mysql_num_rows($q['no6_kuat_tidak']);
	$q['no6_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no6='0';");
	$count['no6_sedang_tidak'] = mysql_num_rows($q['no6_sedang_tidak']);
	$q['no6_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no6='0';");
	$count['no6_lemah_tidak'] = mysql_num_rows($q['no6_lemah_tidak']);
	
	echo "No 6 Kuat Ya: $count[no6_kuat_ya]/$count[kuat]<br>";
	echo "No 6 Sedang Ya: $count[no6_sedang_ya]/$count[sedang]<br>";
	echo "No 6 Lemah Ya: $count[no6_lemah_ya]/$count[lemah]<br>";
	
	echo "No 6 Kuat Tidak: $count[no6_kuat_tidak]/$count[kuat]<br>";
	echo "No 6 Sedang Tidak: $count[no6_sedang_tidak]/$count[sedang]<br>";
	echo "No 6 Lemah Tidak: $count[no6_lemah_tidak]/$count[lemah]<br><br>";
	
	//no7
	$q['no7_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no7='1';");
	$count['no7_kuat_ya'] = mysql_num_rows($q['no7_kuat_ya']);
	$q['no7_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no7='1';");
	$count['no7_sedang_ya'] = mysql_num_rows($q['no7_sedang_ya']);
	$q['no7_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no7='1';");
	$count['no7_lemah_ya'] = mysql_num_rows($q['no7_lemah_ya']);
	
	$q['no7_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no7='0';");
	$count['no7_kuat_tidak'] = mysql_num_rows($q['no7_kuat_tidak']);
	$q['no7_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no7='0';");
	$count['no7_sedang_tidak'] = mysql_num_rows($q['no7_sedang_tidak']);
	$q['no7_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no7='0';");
	$count['no7_lemah_tidak'] = mysql_num_rows($q['no7_lemah_tidak']);
	
	echo "No 7 Kuat Ya: $count[no7_kuat_ya]/$count[kuat]<br>";
	echo "No 7 Sedang Ya: $count[no7_sedang_ya]/$count[sedang]<br>";
	echo "No 7 Lemah Ya: $count[no7_lemah_ya]/$count[lemah]<br>";
	
	echo "No 7 Kuat Tidak: $count[no7_kuat_tidak]/$count[kuat]<br>";
	echo "No 7 Sedang Tidak: $count[no7_sedang_tidak]/$count[sedang]<br>";
	echo "No 7 Lemah Tidak: $count[no7_lemah_tidak]/$count[lemah]<br><br>";
	
	//no8
	$q['no8_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no8='1';");
	$count['no8_kuat_ya'] = mysql_num_rows($q['no8_kuat_ya']);
	$q['no8_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no8='1';");
	$count['no8_sedang_ya'] = mysql_num_rows($q['no8_sedang_ya']);
	$q['no8_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no8='1';");
	$count['no8_lemah_ya'] = mysql_num_rows($q['no8_lemah_ya']);
	
	$q['no8_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no8='0';");
	$count['no8_kuat_tidak'] = mysql_num_rows($q['no8_kuat_tidak']);
	$q['no8_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no8='0';");
	$count['no8_sedang_tidak'] = mysql_num_rows($q['no8_sedang_tidak']);
	$q['no8_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no8='0';");
	$count['no8_lemah_tidak'] = mysql_num_rows($q['no8_lemah_tidak']);
	
	echo "No 8 Kuat Ya: $count[no8_kuat_ya]/$count[kuat]<br>";
	echo "No 8 Sedang Ya: $count[no8_sedang_ya]/$count[sedang]<br>";
	echo "No 8 Lemah Ya: $count[no8_lemah_ya]/$count[lemah]<br>";
	
	echo "No 8 Kuat Tidak: $count[no8_kuat_tidak]/$count[kuat]<br>";
	echo "No 8 Sedang Tidak: $count[no8_sedang_tidak]/$count[sedang]<br>";
	echo "No 8 Lemah Tidak: $count[no8_lemah_tidak]/$count[lemah]<br><br>";
	
	//no9
	$q['no9_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no9='1';");
	$count['no9_kuat_ya'] = mysql_num_rows($q['no9_kuat_ya']);
	$q['no9_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no9='1';");
	$count['no9_sedang_ya'] = mysql_num_rows($q['no9_sedang_ya']);
	$q['no9_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no9='1';");
	$count['no9_lemah_ya'] = mysql_num_rows($q['no9_lemah_ya']);
	
	$q['no9_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no9='0';");
	$count['no9_kuat_tidak'] = mysql_num_rows($q['no9_kuat_tidak']);
	$q['no9_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no9='0';");
	$count['no9_sedang_tidak'] = mysql_num_rows($q['no9_sedang_tidak']);
	$q['no9_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no9='0';");
	$count['no9_lemah_tidak'] = mysql_num_rows($q['no9_lemah_tidak']);
	
	echo "No 9 Kuat Ya: $count[no9_kuat_ya]/$count[kuat]<br>";
	echo "No 9 Sedang Ya: $count[no9_sedang_ya]/$count[sedang]<br>";
	echo "No 9 Lemah Ya: $count[no9_lemah_ya]/$count[lemah]<br>";
	
	echo "No 9 Kuat Tidak: $count[no9_kuat_tidak]/$count[kuat]<br>";
	echo "No 9 Sedang Tidak: $count[no9_sedang_tidak]/$count[sedang]<br>";
	echo "No 9 Lemah Tidak: $count[no9_lemah_tidak]/$count[lemah]<br><br>";
	
	//no10
	$q['no10_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no10='1';");
	$count['no10_kuat_ya'] = mysql_num_rows($q['no10_kuat_ya']);
	$q['no10_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no10='1';");
	$count['no10_sedang_ya'] = mysql_num_rows($q['no10_sedang_ya']);
	$q['no10_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no10='1';");
	$count['no10_lemah_ya'] = mysql_num_rows($q['no10_lemah_ya']);
	
	$q['no10_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no10='0';");
	$count['no10_kuat_tidak'] = mysql_num_rows($q['no10_kuat_tidak']);
	$q['no10_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no10='0';");
	$count['no10_sedang_tidak'] = mysql_num_rows($q['no10_sedang_tidak']);
	$q['no10_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no10='0';");
	$count['no10_lemah_tidak'] = mysql_num_rows($q['no10_lemah_tidak']);
	
	echo "No 10 Kuat Ya: $count[no10_kuat_ya]/$count[kuat]<br>";
	echo "No 10 Sedang Ya: $count[no10_sedang_ya]/$count[sedang]<br>";
	echo "No 10 Lemah Ya: $count[no10_lemah_ya]/$count[lemah]<br>";
	
	echo "No 10 Kuat Tidak: $count[no10_kuat_tidak]/$count[kuat]<br>";
	echo "No 10 Sedang Tidak: $count[no10_sedang_tidak]/$count[sedang]<br>";
	echo "No 10 Lemah Tidak: $count[no10_lemah_tidak]/$count[lemah]<br><br>";
	
	//no11
	$q['no11_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no11='1';");
	$count['no11_kuat_ya'] = mysql_num_rows($q['no11_kuat_ya']);
	$q['no11_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no11='1';");
	$count['no11_sedang_ya'] = mysql_num_rows($q['no11_sedang_ya']);
	$q['no11_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no11='1';");
	$count['no11_lemah_ya'] = mysql_num_rows($q['no11_lemah_ya']);
	
	$q['no11_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no11='0';");
	$count['no11_kuat_tidak'] = mysql_num_rows($q['no11_kuat_tidak']);
	$q['no11_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no11='0';");
	$count['no11_sedang_tidak'] = mysql_num_rows($q['no11_sedang_tidak']);
	$q['no11_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no11='0';");
	$count['no11_lemah_tidak'] = mysql_num_rows($q['no11_lemah_tidak']);
	
	echo "No 11 Kuat Ya: $count[no11_kuat_ya]/$count[kuat]<br>";
	echo "No 11 Sedang Ya: $count[no11_sedang_ya]/$count[sedang]<br>";
	echo "No 11 Lemah Ya: $count[no11_lemah_ya]/$count[lemah]<br>";
	
	echo "No 11 Kuat Tidak: $count[no11_kuat_tidak]/$count[kuat]<br>";
	echo "No 11 Sedang Tidak: $count[no11_sedang_tidak]/$count[sedang]<br>";
	echo "No 11 Lemah Tidak: $count[no11_lemah_tidak]/$count[lemah]<br><br>";
	
	//no12
	$q['no12_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no12='1';");
	$count['no12_kuat_ya'] = mysql_num_rows($q['no12_kuat_ya']);
	$q['no12_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no12='1';");
	$count['no12_sedang_ya'] = mysql_num_rows($q['no12_sedang_ya']);
	$q['no12_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no12='1';");
	$count['no12_lemah_ya'] = mysql_num_rows($q['no12_lemah_ya']);
	
	$q['no12_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no12='0';");
	$count['no12_kuat_tidak'] = mysql_num_rows($q['no12_kuat_tidak']);
	$q['no12_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no12='0';");
	$count['no12_sedang_tidak'] = mysql_num_rows($q['no12_sedang_tidak']);
	$q['no12_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no12='0';");
	$count['no12_lemah_tidak'] = mysql_num_rows($q['no12_lemah_tidak']);
	
	echo "No 12 Kuat Ya: $count[no12_kuat_ya]/$count[kuat]<br>";
	echo "No 12 Sedang Ya: $count[no12_sedang_ya]/$count[sedang]<br>";
	echo "No 12 Lemah Ya: $count[no12_lemah_ya]/$count[lemah]<br>";
	
	echo "No 12 Kuat Tidak: $count[no12_kuat_tidak]/$count[kuat]<br>";
	echo "No 12 Sedang Tidak: $count[no12_sedang_tidak]/$count[sedang]<br>";
	echo "No 12 Lemah Tidak: $count[no12_lemah_tidak]/$count[lemah]<br><br>";
	
	//no13
	$q['no13_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no13='1';");
	$count['no13_kuat_ya'] = mysql_num_rows($q['no13_kuat_ya']);
	$q['no13_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no13='1';");
	$count['no13_sedang_ya'] = mysql_num_rows($q['no13_sedang_ya']);
	$q['no13_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no13='1';");
	$count['no13_lemah_ya'] = mysql_num_rows($q['no13_lemah_ya']);
	
	$q['no13_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no13='0';");
	$count['no13_kuat_tidak'] = mysql_num_rows($q['no13_kuat_tidak']);
	$q['no13_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no13='0';");
	$count['no13_sedang_tidak'] = mysql_num_rows($q['no13_sedang_tidak']);
	$q['no13_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no13='0';");
	$count['no13_lemah_tidak'] = mysql_num_rows($q['no13_lemah_tidak']);
	
	echo "No 13 Kuat Ya: $count[no13_kuat_ya]/$count[kuat]<br>";
	echo "No 13 Sedang Ya: $count[no13_sedang_ya]/$count[sedang]<br>";
	echo "No 13 Lemah Ya: $count[no13_lemah_ya]/$count[lemah]<br>";
	
	echo "No 13 Kuat Tidak: $count[no13_kuat_tidak]/$count[kuat]<br>";
	echo "No 13 Sedang Tidak: $count[no13_sedang_tidak]/$count[sedang]<br>";
	echo "No 13 Lemah Tidak: $count[no13_lemah_tidak]/$count[lemah]<br><br>";
	
	//no14
	$q['no14_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no14='1';");
	$count['no14_kuat_ya'] = mysql_num_rows($q['no14_kuat_ya']);
	$q['no14_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no14='1';");
	$count['no14_sedang_ya'] = mysql_num_rows($q['no14_sedang_ya']);
	$q['no14_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no14='1';");
	$count['no14_lemah_ya'] = mysql_num_rows($q['no14_lemah_ya']);
	
	$q['no14_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no14='0';");
	$count['no14_kuat_tidak'] = mysql_num_rows($q['no14_kuat_tidak']);
	$q['no14_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no14='0';");
	$count['no14_sedang_tidak'] = mysql_num_rows($q['no14_sedang_tidak']);
	$q['no14_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no14='0';");
	$count['no14_lemah_tidak'] = mysql_num_rows($q['no14_lemah_tidak']);
	
	echo "No 14 Kuat Ya: $count[no14_kuat_ya]/$count[kuat]<br>";
	echo "No 14 Sedang Ya: $count[no14_sedang_ya]/$count[sedang]<br>";
	echo "No 14 Lemah Ya: $count[no14_lemah_ya]/$count[lemah]<br>";
	
	echo "No 14 Kuat Tidak: $count[no14_kuat_tidak]/$count[kuat]<br>";
	echo "No 14 Sedang Tidak: $count[no14_sedang_tidak]/$count[sedang]<br>";
	echo "No 14 Lemah Tidak: $count[no14_lemah_tidak]/$count[lemah]<br><br>";
	
	//no15
	$q['no15_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no15='1';");
	$count['no15_kuat_ya'] = mysql_num_rows($q['no15_kuat_ya']);
	$q['no15_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no15='1';");
	$count['no15_sedang_ya'] = mysql_num_rows($q['no15_sedang_ya']);
	$q['no15_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no15='1';");
	$count['no15_lemah_ya'] = mysql_num_rows($q['no15_lemah_ya']);
	
	$q['no15_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no15='0';");
	$count['no15_kuat_tidak'] = mysql_num_rows($q['no15_kuat_tidak']);
	$q['no15_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no15='0';");
	$count['no15_sedang_tidak'] = mysql_num_rows($q['no15_sedang_tidak']);
	$q['no15_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no15='0';");
	$count['no15_lemah_tidak'] = mysql_num_rows($q['no15_lemah_tidak']);
	
	echo "No 15 Kuat Ya: $count[no15_kuat_ya]/$count[kuat]<br>";
	echo "No 15 Sedang Ya: $count[no15_sedang_ya]/$count[sedang]<br>";
	echo "No 15 Lemah Ya: $count[no15_lemah_ya]/$count[lemah]<br>";
	
	echo "No 15 Kuat Tidak: $count[no15_kuat_tidak]/$count[kuat]<br>";
	echo "No 15 Sedang Tidak: $count[no15_sedang_tidak]/$count[sedang]<br>";
	echo "No 15 Lemah Tidak: $count[no15_lemah_tidak]/$count[lemah]<br><br>";
	
	//no16
	$q['no16_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no16='1';");
	$count['no16_kuat_ya'] = mysql_num_rows($q['no16_kuat_ya']);
	$q['no16_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no16='1';");
	$count['no16_sedang_ya'] = mysql_num_rows($q['no16_sedang_ya']);
	$q['no16_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no16='1';");
	$count['no16_lemah_ya'] = mysql_num_rows($q['no16_lemah_ya']);
	
	$q['no16_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Kuat' and no16='0';");
	$count['no16_kuat_tidak'] = mysql_num_rows($q['no16_kuat_tidak']);
	$q['no16_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Sedang' and no16='0';");
	$count['no16_sedang_tidak'] = mysql_num_rows($q['no16_sedang_tidak']);
	$q['no16_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where klas_borderline='Lemah' and no16='0';");
	$count['no16_lemah_tidak'] = mysql_num_rows($q['no16_lemah_tidak']);
	
	echo "No 16 Kuat Ya: $count[no16_kuat_ya]/$count[kuat]<br>";
	echo "No 16 Sedang Ya: $count[no16_sedang_ya]/$count[sedang]<br>";
	echo "No 16 Lemah Ya: $count[no16_lemah_ya]/$count[lemah]<br>";
	
	echo "No 16 Kuat Tidak: $count[no16_kuat_tidak]/$count[kuat]<br>";
	echo "No 16 Sedang Tidak: $count[no16_sedang_tidak]/$count[sedang]<br>";
	echo "No 16 Lemah Tidak: $count[no16_lemah_tidak]/$count[lemah]<br><br>";
	
	//Peluang No1
	$p_no1_kuat_ya = $count['no1_kuat_ya'] / $count['kuat'];
	$p_no1_sedang_ya = $count['no1_sedang_ya'] / $count['sedang'];
	$p_no1_lemah_ya = $count['no1_lemah_ya'] / $count['lemah'];
	if($p_no1_kuat_ya == 0){
		$p_no1_kuat_ya = 0.3;
	}
	if($p_no1_sedang_ya == 0){
		$p_no1_sedang_ya = 0.3;
	}
	if($p_no1_lemah_ya == 0){
		$p_no1_lemah_ya = 0.3;
	}
	
	$p_no1_kuat_tidak = $count['no1_kuat_tidak'] / $count['kuat'];
	$p_no1_sedang_tidak = $count['no1_sedang_tidak'] / $count['sedang'];
	$p_no1_lemah_tidak = $count['no1_lemah_tidak'] / $count['lemah'];
	if($p_no1_kuat_tidak == 0){
		$p_no1_kuat_tidak = 0.3;
	}
	if($p_no1_sedang_tidak == 0){
		$p_no1_sedang_tidak = 0.3;
	}
	if($p_no1_lemah_tidak == 0){
		$p_no1_lemah_tidak = 0.3;
	}
	
	//Peluang no2
	$p_no2_kuat_ya = $count['no2_kuat_ya'] / $count['kuat'];
	$p_no2_sedang_ya = $count['no2_sedang_ya'] / $count['sedang'];
	$p_no2_lemah_ya = $count['no2_lemah_ya'] / $count['lemah'];
	if($p_no2_kuat_ya == 0){
		$p_no2_kuat_ya = 0.3;
	}
	if($p_no2_sedang_ya == 0){
		$p_no2_sedang_ya = 0.3;
	}
	if($p_no2_lemah_ya == 0){
		$p_no2_lemah_ya = 0.3;
	}
	
	$p_no2_kuat_tidak = $count['no2_kuat_tidak'] / $count['kuat'];
	$p_no2_sedang_tidak = $count['no2_sedang_tidak'] / $count['sedang'];
	$p_no2_lemah_tidak = $count['no2_lemah_tidak'] / $count['lemah'];
	if($p_no2_kuat_tidak == 0){
		$p_no2_kuat_tidak = 0.3;
	}
	if($p_no2_sedang_tidak == 0){
		$p_no2_sedang_tidak = 0.3;
	}
	if($p_no2_lemah_tidak == 0){
		$p_no2_lemah_tidak = 0.3;
	}
	
	//Peluang no3
	$p_no3_kuat_ya = $count['no3_kuat_ya'] / $count['kuat'];
	$p_no3_sedang_ya = $count['no3_sedang_ya'] / $count['sedang'];
	$p_no3_lemah_ya = $count['no3_lemah_ya'] / $count['lemah'];
	if($p_no3_kuat_ya == 0){
		$p_no3_kuat_ya = 0.3;
	}
	if($p_no3_sedang_ya == 0){
		$p_no3_sedang_ya = 0.3;
	}
	if($p_no3_lemah_ya == 0){
		$p_no3_lemah_ya = 0.3;
	}
	
	$p_no3_kuat_tidak = $count['no3_kuat_tidak'] / $count['kuat'];
	$p_no3_sedang_tidak = $count['no3_sedang_tidak'] / $count['sedang'];
	$p_no3_lemah_tidak = $count['no3_lemah_tidak'] / $count['lemah'];
	if($p_no3_kuat_tidak == 0){
		$p_no3_kuat_tidak = 0.3;
	}
	if($p_no3_sedang_tidak == 0){
		$p_no3_sedang_tidak = 0.3;
	}
	if($p_no3_lemah_tidak == 0){
		$p_no3_lemah_tidak = 0.3;
	}
	
	//Peluang no4
	$p_no4_kuat_ya = $count['no4_kuat_ya'] / $count['kuat'];
	$p_no4_sedang_ya = $count['no4_sedang_ya'] / $count['sedang'];
	$p_no4_lemah_ya = $count['no4_lemah_ya'] / $count['lemah'];
	if($p_no4_kuat_ya == 0){
		$p_no4_kuat_ya = 0.3;
	}
	if($p_no4_sedang_ya == 0){
		$p_no4_sedang_ya = 0.3;
	}
	if($p_no4_lemah_ya == 0){
		$p_no4_lemah_ya = 0.3;
	}
	
	$p_no4_kuat_tidak = $count['no4_kuat_tidak'] / $count['kuat'];
	$p_no4_sedang_tidak = $count['no4_sedang_tidak'] / $count['sedang'];
	$p_no4_lemah_tidak = $count['no4_lemah_tidak'] / $count['lemah'];
	if($p_no4_kuat_tidak == 0){
		$p_no4_kuat_tidak = 0.3;
	}
	if($p_no4_sedang_tidak == 0){
		$p_no4_sedang_tidak = 0.3;
	}
	if($p_no4_lemah_tidak == 0){
		$p_no4_lemah_tidak = 0.3;
	}
	
	//Peluang no5
	$p_no5_kuat_ya = $count['no5_kuat_ya'] / $count['kuat'];
	$p_no5_sedang_ya = $count['no5_sedang_ya'] / $count['sedang'];
	$p_no5_lemah_ya = $count['no5_lemah_ya'] / $count['lemah'];
	if($p_no5_kuat_ya == 0){
		$p_no5_kuat_ya = 0.3;
	}
	if($p_no5_sedang_ya == 0){
		$p_no5_sedang_ya = 0.3;
	}
	if($p_no5_lemah_ya == 0){
		$p_no5_lemah_ya = 0.3;
	}
	
	$p_no5_kuat_tidak = $count['no5_kuat_tidak'] / $count['kuat'];
	$p_no5_sedang_tidak = $count['no5_sedang_tidak'] / $count['sedang'];
	$p_no5_lemah_tidak = $count['no5_lemah_tidak'] / $count['lemah'];
	if($p_no5_kuat_tidak == 0){
		$p_no5_kuat_tidak = 0.3;
	}
	if($p_no5_sedang_tidak == 0){
		$p_no5_sedang_tidak = 0.3;
	}
	if($p_no5_lemah_tidak == 0){
		$p_no5_lemah_tidak = 0.3;
	}
	
	//Peluang no6
	$p_no6_kuat_ya = $count['no6_kuat_ya'] / $count['kuat'];
	$p_no6_sedang_ya = $count['no6_sedang_ya'] / $count['sedang'];
	$p_no6_lemah_ya = $count['no6_lemah_ya'] / $count['lemah'];
	if($p_no6_kuat_ya == 0){
		$p_no6_kuat_ya = 0.3;
	}
	if($p_no6_sedang_ya == 0){
		$p_no6_sedang_ya = 0.3;
	}
	if($p_no6_lemah_ya == 0){
		$p_no6_lemah_ya = 0.3;
	}
	
	$p_no6_kuat_tidak = $count['no6_kuat_tidak'] / $count['kuat'];
	$p_no6_sedang_tidak = $count['no6_sedang_tidak'] / $count['sedang'];
	$p_no6_lemah_tidak = $count['no6_lemah_tidak'] / $count['lemah'];
	if($p_no6_kuat_tidak == 0){
		$p_no6_kuat_tidak = 0.3;
	}
	if($p_no6_sedang_tidak == 0){
		$p_no6_sedang_tidak = 0.3;
	}
	if($p_no6_lemah_tidak == 0){
		$p_no6_lemah_tidak = 0.3;
	}
	
	//Peluang no7
	$p_no7_kuat_ya = $count['no7_kuat_ya'] / $count['kuat'];
	$p_no7_sedang_ya = $count['no7_sedang_ya'] / $count['sedang'];
	$p_no7_lemah_ya = $count['no7_lemah_ya'] / $count['lemah'];
	if($p_no7_kuat_ya == 0){
		$p_no7_kuat_ya = 0.3;
	}
	if($p_no7_sedang_ya == 0){
		$p_no7_sedang_ya = 0.3;
	}
	if($p_no7_lemah_ya == 0){
		$p_no7_lemah_ya = 0.3;
	}
	
	$p_no7_kuat_tidak = $count['no7_kuat_tidak'] / $count['kuat'];
	$p_no7_sedang_tidak = $count['no7_sedang_tidak'] / $count['sedang'];
	$p_no7_lemah_tidak = $count['no7_lemah_tidak'] / $count['lemah'];
	if($p_no7_kuat_tidak == 0){
		$p_no7_kuat_tidak = 0.3;
	}
	if($p_no7_sedang_tidak == 0){
		$p_no7_sedang_tidak = 0.3;
	}
	if($p_no7_lemah_tidak == 0){
		$p_no7_lemah_tidak = 0.3;
	}
	
	//Peluang no8
	$p_no8_kuat_ya = $count['no8_kuat_ya'] / $count['kuat'];
	$p_no8_sedang_ya = $count['no8_sedang_ya'] / $count['sedang'];
	$p_no8_lemah_ya = $count['no8_lemah_ya'] / $count['lemah'];
	if($p_no8_kuat_ya == 0){
		$p_no8_kuat_ya = 0.3;
	}
	if($p_no8_sedang_ya == 0){
		$p_no8_sedang_ya = 0.3;
	}
	if($p_no8_lemah_ya == 0){
		$p_no8_lemah_ya = 0.3;
	}
	
	$p_no8_kuat_tidak = $count['no8_kuat_tidak'] / $count['kuat'];
	$p_no8_sedang_tidak = $count['no8_sedang_tidak'] / $count['sedang'];
	$p_no8_lemah_tidak = $count['no8_lemah_tidak'] / $count['lemah'];
	if($p_no8_kuat_tidak == 0){
		$p_no8_kuat_tidak = 0.3;
	}
	if($p_no8_sedang_tidak == 0){
		$p_no8_sedang_tidak = 0.3;
	}
	if($p_no8_lemah_tidak == 0){
		$p_no8_lemah_tidak = 0.3;
	}
	
	//Peluang no9
	$p_no9_kuat_ya = $count['no9_kuat_ya'] / $count['kuat'];
	$p_no9_sedang_ya = $count['no9_sedang_ya'] / $count['sedang'];
	$p_no9_lemah_ya = $count['no9_lemah_ya'] / $count['lemah'];
	if($p_no9_kuat_ya == 0){
		$p_no9_kuat_ya = 0.3;
	}
	if($p_no9_sedang_ya == 0){
		$p_no9_sedang_ya = 0.3;
	}
	if($p_no9_lemah_ya == 0){
		$p_no9_lemah_ya = 0.3;
	}
	
	$p_no9_kuat_tidak = $count['no9_kuat_tidak'] / $count['kuat'];
	$p_no9_sedang_tidak = $count['no9_sedang_tidak'] / $count['sedang'];
	$p_no9_lemah_tidak = $count['no9_lemah_tidak'] / $count['lemah'];
	if($p_no9_kuat_tidak == 0){
		$p_no9_kuat_tidak = 0.3;
	}
	if($p_no9_sedang_tidak == 0){
		$p_no9_sedang_tidak = 0.3;
	}
	if($p_no9_lemah_tidak == 0){
		$p_no9_lemah_tidak = 0.3;
	}
	
	//Peluang no10
	$p_no10_kuat_ya = $count['no10_kuat_ya'] / $count['kuat'];
	$p_no10_sedang_ya = $count['no10_sedang_ya'] / $count['sedang'];
	$p_no10_lemah_ya = $count['no10_lemah_ya'] / $count['lemah'];
	if($p_no10_kuat_ya == 0){
		$p_no10_kuat_ya = 0.3;
	}
	if($p_no10_sedang_ya == 0){
		$p_no10_sedang_ya = 0.3;
	}
	if($p_no10_lemah_ya == 0){
		$p_no10_lemah_ya = 0.3;
	}
	
	$p_no10_kuat_tidak = $count['no10_kuat_tidak'] / $count['kuat'];
	$p_no10_sedang_tidak = $count['no10_sedang_tidak'] / $count['sedang'];
	$p_no10_lemah_tidak = $count['no10_lemah_tidak'] / $count['lemah'];
	if($p_no10_kuat_tidak == 0){
		$p_no10_kuat_tidak = 0.3;
	}
	if($p_no10_sedang_tidak == 0){
		$p_no10_sedang_tidak = 0.3;
	}
	if($p_no10_lemah_tidak == 0){
		$p_no10_lemah_tidak = 0.3;
	}
	
	//Peluang no11
	$p_no11_kuat_ya = $count['no11_kuat_ya'] / $count['kuat'];
	$p_no11_sedang_ya = $count['no11_sedang_ya'] / $count['sedang'];
	$p_no11_lemah_ya = $count['no11_lemah_ya'] / $count['lemah'];
	if($p_no11_kuat_ya == 0){
		$p_no11_kuat_ya = 0.3;
	}
	if($p_no11_sedang_ya == 0){
		$p_no11_sedang_ya = 0.3;
	}
	if($p_no11_lemah_ya == 0){
		$p_no11_lemah_ya = 0.3;
	}
	
	$p_no11_kuat_tidak = $count['no11_kuat_tidak'] / $count['kuat'];
	$p_no11_sedang_tidak = $count['no11_sedang_tidak'] / $count['sedang'];
	$p_no11_lemah_tidak = $count['no11_lemah_tidak'] / $count['lemah'];
	if($p_no11_kuat_tidak == 0){
		$p_no11_kuat_tidak = 0.3;
	}
	if($p_no11_sedang_tidak == 0){
		$p_no11_sedang_tidak = 0.3;
	}
	if($p_no11_lemah_tidak == 0){
		$p_no11_lemah_tidak = 0.3;
	}
	
	//Peluang no12
	$p_no12_kuat_ya = $count['no12_kuat_ya'] / $count['kuat'];
	$p_no12_sedang_ya = $count['no12_sedang_ya'] / $count['sedang'];
	$p_no12_lemah_ya = $count['no12_lemah_ya'] / $count['lemah'];
	if($p_no12_kuat_ya == 0){
		$p_no12_kuat_ya = 0.3;
	}
	if($p_no12_sedang_ya == 0){
		$p_no12_sedang_ya = 0.3;
	}
	if($p_no12_lemah_ya == 0){
		$p_no12_lemah_ya = 0.3;
	}
	
	$p_no12_kuat_tidak = $count['no12_kuat_tidak'] / $count['kuat'];
	$p_no12_sedang_tidak = $count['no12_sedang_tidak'] / $count['sedang'];
	$p_no12_lemah_tidak = $count['no12_lemah_tidak'] / $count['lemah'];
	if($p_no12_kuat_tidak == 0){
		$p_no12_kuat_tidak = 0.3;
	}
	if($p_no12_sedang_tidak == 0){
		$p_no12_sedang_tidak = 0.3;
	}
	if($p_no12_lemah_tidak == 0){
		$p_no12_lemah_tidak = 0.3;
	}
	
	//Peluang no13
	$p_no13_kuat_ya = $count['no13_kuat_ya'] / $count['kuat'];
	$p_no13_sedang_ya = $count['no13_sedang_ya'] / $count['sedang'];
	$p_no13_lemah_ya = $count['no13_lemah_ya'] / $count['lemah'];
	if($p_no13_kuat_ya == 0){
		$p_no13_kuat_ya = 0.3;
	}
	if($p_no13_sedang_ya == 0){
		$p_no13_sedang_ya = 0.3;
	}
	if($p_no13_lemah_ya == 0){
		$p_no13_lemah_ya = 0.3;
	}
	
	$p_no13_kuat_tidak = $count['no13_kuat_tidak'] / $count['kuat'];
	$p_no13_sedang_tidak = $count['no13_sedang_tidak'] / $count['sedang'];
	$p_no13_lemah_tidak = $count['no13_lemah_tidak'] / $count['lemah'];
	if($p_no13_kuat_tidak == 0){
		$p_no13_kuat_tidak = 0.3;
	}
	if($p_no13_sedang_tidak == 0){
		$p_no13_sedang_tidak = 0.3;
	}
	if($p_no13_lemah_tidak == 0){
		$p_no13_lemah_tidak = 0.3;
	}
	
	//Peluang no14
	$p_no14_kuat_ya = $count['no14_kuat_ya'] / $count['kuat'];
	$p_no14_sedang_ya = $count['no14_sedang_ya'] / $count['sedang'];
	$p_no14_lemah_ya = $count['no14_lemah_ya'] / $count['lemah'];
	if($p_no14_kuat_ya == 0){
		$p_no14_kuat_ya = 0.3;
	}
	if($p_no14_sedang_ya == 0){
		$p_no14_sedang_ya = 0.3;
	}
	if($p_no14_lemah_ya == 0){
		$p_no14_lemah_ya = 0.3;
	}
	
	$p_no14_kuat_tidak = $count['no14_kuat_tidak'] / $count['kuat'];
	$p_no14_sedang_tidak = $count['no14_sedang_tidak'] / $count['sedang'];
	$p_no14_lemah_tidak = $count['no14_lemah_tidak'] / $count['lemah'];
	if($p_no14_kuat_tidak == 0){
		$p_no14_kuat_tidak = 0.3;
	}
	if($p_no14_sedang_tidak == 0){
		$p_no14_sedang_tidak = 0.3;
	}
	if($p_no14_lemah_tidak == 0){
		$p_no14_lemah_tidak = 0.3;
	}
	
	//Peluang no15
	$p_no15_kuat_ya = $count['no15_kuat_ya'] / $count['kuat'];
	$p_no15_sedang_ya = $count['no15_sedang_ya'] / $count['sedang'];
	$p_no15_lemah_ya = $count['no15_lemah_ya'] / $count['lemah'];
	if($p_no15_kuat_ya == 0){
		$p_no15_kuat_ya = 0.3;
	}
	if($p_no15_sedang_ya == 0){
		$p_no15_sedang_ya = 0.3;
	}
	if($p_no15_lemah_ya == 0){
		$p_no15_lemah_ya = 0.3;
	}
	
	$p_no15_kuat_tidak = $count['no15_kuat_tidak'] / $count['kuat'];
	$p_no15_sedang_tidak = $count['no15_sedang_tidak'] / $count['sedang'];
	$p_no15_lemah_tidak = $count['no15_lemah_tidak'] / $count['lemah'];
	if($p_no15_kuat_tidak == 0){
		$p_no15_kuat_tidak = 0.3;
	}
	if($p_no15_sedang_tidak == 0){
		$p_no15_sedang_tidak = 0.3;
	}
	if($p_no15_lemah_tidak == 0){
		$p_no15_lemah_tidak = 0.3;
	}
	
	//Peluang no16
	$p_no16_kuat_ya = $count['no16_kuat_ya'] / $count['kuat'];
	$p_no16_sedang_ya = $count['no16_sedang_ya'] / $count['sedang'];
	$p_no16_lemah_ya = $count['no16_lemah_ya'] / $count['lemah'];
	if($p_no16_kuat_ya == 0){
		$p_no16_kuat_ya = 0.3;
	}
	if($p_no16_sedang_ya == 0){
		$p_no16_sedang_ya = 0.3;
	}
	if($p_no16_lemah_ya == 0){
		$p_no16_lemah_ya = 0.3;
	}
	
	$p_no16_kuat_tidak = $count['no16_kuat_tidak'] / $count['kuat'];
	$p_no16_sedang_tidak = $count['no16_sedang_tidak'] / $count['sedang'];
	$p_no16_lemah_tidak = $count['no16_lemah_tidak'] / $count['lemah'];
	if($p_no16_kuat_tidak == 0){
		$p_no16_kuat_tidak = 0.3;
	}
	if($p_no16_sedang_tidak == 0){
		$p_no16_sedang_tidak = 0.3;
	}
	if($p_no16_lemah_tidak == 0){
		$p_no16_lemah_tidak = 0.3;
	}
	
	// Kelas kuat ya
	echo "P(No 1 = Ya, Kelas Anti Sosial = Kuat) = $p_no1_kuat_ya<br>";
	echo "P(No 2 = Ya, Kelas Anti Sosial = Kuat) = $p_no2_kuat_ya<br>";
	echo "P(No 3 = Ya, Kelas Anti Sosial = Kuat) = $p_no3_kuat_ya<br>";
	echo "P(No 4 = Ya, Kelas Anti Sosial = Kuat) = $p_no4_kuat_ya<br>";
	echo "P(No 5 = Ya, Kelas Anti Sosial = Kuat) = $p_no5_kuat_ya<br>";
	echo "P(No 6 = Ya, Kelas Anti Sosial = Kuat) = $p_no6_kuat_ya<br>";
	echo "P(No 7 = Ya, Kelas Anti Sosial = Kuat) = $p_no7_kuat_ya<br>";
	echo "P(No 8 = Ya, Kelas Anti Sosial = Kuat) = $p_no8_kuat_ya<br>";
	echo "P(No 9 = Ya, Kelas Anti Sosial = Kuat) = $p_no9_kuat_ya<br>";
	echo "P(No 10 = Ya, Kelas Anti Sosial = Kuat) = $p_no10_kuat_ya<br>";
	echo "P(No 11 = Ya, Kelas Anti Sosial = Kuat) = $p_no11_kuat_ya<br>";
	echo "P(No 12 = Ya, Kelas Anti Sosial = Kuat) = $p_no12_kuat_ya<br>";
	echo "P(No 13 = Ya, Kelas Anti Sosial = Kuat) = $p_no13_kuat_ya<br>";
	echo "P(No 14 = Ya, Kelas Anti Sosial = Kuat) = $p_no14_kuat_ya<br>";
	echo "P(No 15 = Ya, Kelas Anti Sosial = Kuat) = $p_no15_kuat_ya<br>";
	echo "P(No 16 = Ya, Kelas Anti Sosial = Kuat) = $p_no16_kuat_ya<br><br>";
	
	// Kelas sedang ya
	echo "P(No 1 = Ya, Kelas Anti Sosial = Sedang) = $p_no1_sedang_ya<br>";
	echo "P(No 2 = Ya, Kelas Anti Sosial = Sedang) = $p_no2_sedang_ya<br>";
	echo "P(No 3 = Ya, Kelas Anti Sosial = Sedang) = $p_no3_sedang_ya<br>";
	echo "P(No 4 = Ya, Kelas Anti Sosial = Sedang) = $p_no4_sedang_ya<br>";
	echo "P(No 5 = Ya, Kelas Anti Sosial = Sedang) = $p_no5_sedang_ya<br>";
	echo "P(No 6 = Ya, Kelas Anti Sosial = Sedang) = $p_no6_sedang_ya<br>";
	echo "P(No 7 = Ya, Kelas Anti Sosial = Sedang) = $p_no7_sedang_ya<br>";
	echo "P(No 8 = Ya, Kelas Anti Sosial = Sedang) = $p_no8_sedang_ya<br>";
	echo "P(No 9 = Ya, Kelas Anti Sosial = Sedang) = $p_no9_sedang_ya<br>";
	echo "P(No 10 = Ya, Kelas Anti Sosial = Sedang) = $p_no10_sedang_ya<br>";
	echo "P(No 11 = Ya, Kelas Anti Sosial = Sedang) = $p_no11_sedang_ya<br>";
	echo "P(No 12 = Ya, Kelas Anti Sosial = Sedang) = $p_no12_sedang_ya<br>";
	echo "P(No 13 = Ya, Kelas Anti Sosial = Sedang) = $p_no13_sedang_ya<br>";
	echo "P(No 14 = Ya, Kelas Anti Sosial = Sedang) = $p_no14_sedang_ya<br>";
	echo "P(No 15 = Ya, Kelas Anti Sosial = Sedang) = $p_no15_sedang_ya<br>";
	echo "P(No 16 = Ya, Kelas Anti Sosial = Sedang) = $p_no16_sedang_ya<br><br>";
	
	// Kelas lemah ya
	echo "P(No 1 = Ya, Kelas Anti Sosial = Lemah) = $p_no1_lemah_ya<br>";
	echo "P(No 2 = Ya, Kelas Anti Sosial = Lemah) = $p_no2_lemah_ya<br>";
	echo "P(No 3 = Ya, Kelas Anti Sosial = Lemah) = $p_no3_lemah_ya<br>";
	echo "P(No 4 = Ya, Kelas Anti Sosial = Lemah) = $p_no4_lemah_ya<br>";
	echo "P(No 5 = Ya, Kelas Anti Sosial = Lemah) = $p_no5_lemah_ya<br>";
	echo "P(No 6 = Ya, Kelas Anti Sosial = Lemah) = $p_no6_lemah_ya<br>";
	echo "P(No 7 = Ya, Kelas Anti Sosial = Lemah) = $p_no7_lemah_ya<br>";
	echo "P(No 8 = Ya, Kelas Anti Sosial = Lemah) = $p_no8_lemah_ya<br>";
	echo "P(No 9 = Ya, Kelas Anti Sosial = Lemah) = $p_no9_lemah_ya<br>";
	echo "P(No 10 = Ya, Kelas Anti Sosial = Lemah) = $p_no10_lemah_ya<br>";
	echo "P(No 11 = Ya, Kelas Anti Sosial = Lemah) = $p_no11_lemah_ya<br>";
	echo "P(No 12 = Ya, Kelas Anti Sosial = Lemah) = $p_no12_lemah_ya<br>";
	echo "P(No 13 = Ya, Kelas Anti Sosial = Lemah) = $p_no13_lemah_ya<br>";
	echo "P(No 14 = Ya, Kelas Anti Sosial = Lemah) = $p_no14_lemah_ya<br>";
	echo "P(No 15 = Ya, Kelas Anti Sosial = Lemah) = $p_no15_lemah_ya<br>";
	echo "P(No 16 = Ya, Kelas Anti Sosial = Lemah) = $p_no16_lemah_ya<br><br>";
	
	// Kelas kuat tidak
	echo "P(No 1 = Tidak, Kelas Anti Sosial = Kuat) = $p_no1_kuat_tidak<br>";
	echo "P(No 2 = Tidak, Kelas Anti Sosial = Kuat) = $p_no2_kuat_tidak<br>";
	echo "P(No 3 = Tidak, Kelas Anti Sosial = Kuat) = $p_no3_kuat_tidak<br>";
	echo "P(No 4 = Tidak, Kelas Anti Sosial = Kuat) = $p_no4_kuat_tidak<br>";
	echo "P(No 5 = Tidak, Kelas Anti Sosial = Kuat) = $p_no5_kuat_tidak<br>";
	echo "P(No 6 = Tidak, Kelas Anti Sosial = Kuat) = $p_no6_kuat_tidak<br>";
	echo "P(No 7 = Tidak, Kelas Anti Sosial = Kuat) = $p_no7_kuat_tidak<br>";
	echo "P(No 8 = Tidak, Kelas Anti Sosial = Kuat) = $p_no8_kuat_tidak<br>";
	echo "P(No 9 = Tidak, Kelas Anti Sosial = Kuat) = $p_no9_kuat_tidak<br>";
	echo "P(No 10 = Tidak, Kelas Anti Sosial = Kuat) = $p_no10_kuat_tidak<br>";
	echo "P(No 11 = Tidak, Kelas Anti Sosial = Kuat) = $p_no11_kuat_tidak<br>";
	echo "P(No 12 = Tidak, Kelas Anti Sosial = Kuat) = $p_no12_kuat_tidak<br>";
	echo "P(No 13 = Tidak, Kelas Anti Sosial = Kuat) = $p_no13_kuat_tidak<br>";
	echo "P(No 14 = Tidak, Kelas Anti Sosial = Kuat) = $p_no14_kuat_tidak<br>";
	echo "P(No 15 = Tidak, Kelas Anti Sosial = Kuat) = $p_no15_kuat_tidak<br>";
	echo "P(No 16 = Tidak, Kelas Anti Sosial = Kuat) = $p_no16_kuat_tidak<br><br>";
	
	// Kelas sedang tidak
	echo "P(No 1 = Tidak, Kelas Anti Sosial = Sedang) = $p_no1_sedang_tidak<br>";
	echo "P(No 2 = Tidak, Kelas Anti Sosial = Sedang) = $p_no2_sedang_tidak<br>";
	echo "P(No 3 = Tidak, Kelas Anti Sosial = Sedang) = $p_no3_sedang_tidak<br>";
	echo "P(No 4 = Tidak, Kelas Anti Sosial = Sedang) = $p_no4_sedang_tidak<br>";
	echo "P(No 5 = Tidak, Kelas Anti Sosial = Sedang) = $p_no5_sedang_tidak<br>";
	echo "P(No 6 = Tidak, Kelas Anti Sosial = Sedang) = $p_no6_sedang_tidak<br>";
	echo "P(No 7 = Tidak, Kelas Anti Sosial = Sedang) = $p_no7_sedang_tidak<br>";
	echo "P(No 8 = Tidak, Kelas Anti Sosial = Sedang) = $p_no8_sedang_tidak<br>";
	echo "P(No 9 = Tidak, Kelas Anti Sosial = Sedang) = $p_no9_sedang_tidak<br>";
	echo "P(No 10 = Tidak, Kelas Anti Sosial = Sedang) = $p_no10_sedang_tidak<br>";
	echo "P(No 11 = Tidak, Kelas Anti Sosial = Sedang) = $p_no11_sedang_tidak<br>";
	echo "P(No 12 = Tidak, Kelas Anti Sosial = Sedang) = $p_no12_sedang_tidak<br>";
	echo "P(No 13 = Tidak, Kelas Anti Sosial = Sedang) = $p_no13_sedang_tidak<br>";
	echo "P(No 14 = Tidak, Kelas Anti Sosial = Sedang) = $p_no14_sedang_tidak<br>";
	echo "P(No 15 = Tidak, Kelas Anti Sosial = Sedang) = $p_no15_sedang_tidak<br>";
	echo "P(No 16 = Tidak, Kelas Anti Sosial = Sedang) = $p_no16_sedang_tidak<br><br>";
	
	// Kelas lemah tidak
	echo "P(No 1 = Tidak, Kelas Anti Sosial = Lemah) = $p_no1_lemah_tidak<br>";
	echo "P(No 2 = Tidak, Kelas Anti Sosial = Lemah) = $p_no2_lemah_tidak<br>";
	echo "P(No 3 = Tidak, Kelas Anti Sosial = Lemah) = $p_no3_lemah_tidak<br>";
	echo "P(No 4 = Tidak, Kelas Anti Sosial = Lemah) = $p_no4_lemah_tidak<br>";
	echo "P(No 5 = Tidak, Kelas Anti Sosial = Lemah) = $p_no5_lemah_tidak<br>";
	echo "P(No 6 = Tidak, Kelas Anti Sosial = Lemah) = $p_no6_lemah_tidak<br>";
	echo "P(No 7 = Tidak, Kelas Anti Sosial = Lemah) = $p_no7_lemah_tidak<br>";
	echo "P(No 8 = Tidak, Kelas Anti Sosial = Lemah) = $p_no8_lemah_tidak<br>";
	echo "P(No 9 = Tidak, Kelas Anti Sosial = Lemah) = $p_no9_lemah_tidak<br>";
	echo "P(No 10 = Tidak, Kelas Anti Sosial = Lemah) = $p_no10_lemah_tidak<br>";
	echo "P(No 11 = Tidak, Kelas Anti Sosial = Lemah) = $p_no11_lemah_tidak<br>";
	echo "P(No 12 = Tidak, Kelas Anti Sosial = Lemah) = $p_no12_lemah_tidak<br>";
	echo "P(No 13 = Tidak, Kelas Anti Sosial = Lemah) = $p_no13_lemah_tidak<br>";
	echo "P(No 14 = Tidak, Kelas Anti Sosial = Lemah) = $p_no14_lemah_tidak<br>";
	echo "P(No 15 = Tidak, Kelas Anti Sosial = Lemah) = $p_no15_lemah_tidak<br>";
	echo "P(No 16 = Tidak, Kelas Anti Sosial = Lemah) = $p_no16_lemah_tidak<br><br>";
	
	//pos no1
	if($no1 == 1 && $kelas == 'Kuat'){
		$pos_no1_kuat_ya = $p_no1_kuat_ya;
		$pos_no1_kuat_tidak = $p_no1_kuat_tidak;
	}
	else if ($no1 == 0 && $kelas == 'Kuat'){
		$pos_no1_kuat_ya = $p_no1_kuat_tidak;
		$pos_no1_kuat_tidak = $p_no1_kuat_ya;
	}
	else if($no1 == 1 && $kelas == 'Sedang'){
		$pos_no1_sedang_ya = $p_no1_sedang_ya;
		$pos_no1_sedang_tidak = $p_no1_sedang_tidak;
	}
	else if ($no1 == 0 && $kelas == 'Sedang'){
		$pos_no1_sedang_ya = $p_no1_sedang_tidak;
		$pos_no1_sedang_tidak = $p_no1_sedang_ya;
	}
	else if($no1 == 1 && $kelas == 'Lemah'){
		$pos_no1_lemah_ya = $p_no1_lemah_ya;
		$pos_no1_lemah_tidak = $p_no1_lemah_tidak;
	}
	else{
		$pos_no1_lemah_ya = $p_no1_lemah_tidak;
		$pos_no1_lemah_tidak = $p_no1_lemah_ya;
	}
	
	//pos no2
	if($no2 == 1 && $kelas == 'Kuat'){
		$pos_no2_kuat_ya = $p_no2_kuat_ya;
		$pos_no2_kuat_tidak = $p_no2_kuat_tidak;
	}
	else if ($no2 == 0 && $kelas == 'Kuat'){
		$pos_no2_kuat_ya = $p_no2_kuat_tidak;
		$pos_no2_kuat_tidak = $p_no2_kuat_ya;
	}
	else if($no2 == 1 && $kelas == 'Sedang'){
		$pos_no2_sedang_ya = $p_no2_sedang_ya;
		$pos_no2_sedang_tidak = $p_no2_sedang_tidak;
	}
	else if ($no2 == 0 && $kelas == 'Sedang'){
		$pos_no2_sedang_ya = $p_no2_sedang_tidak;
		$pos_no2_sedang_tidak = $p_no2_sedang_ya;
	}
	else if($no2 == 1 && $kelas == 'Lemah'){
		$pos_no2_lemah_ya = $p_no2_lemah_ya;
		$pos_no2_lemah_tidak = $p_no2_lemah_tidak;
	}
	else{
		$pos_no2_lemah_ya = $p_no2_lemah_tidak;
		$pos_no2_lemah_tidak = $p_no2_lemah_ya;
	}
	
	//pos no3
	if($no3 == 1 && $kelas == 'Kuat'){
		$pos_no3_kuat_ya = $p_no3_kuat_ya;
		$pos_no3_kuat_tidak = $p_no3_kuat_tidak;
	}
	else if ($no3 == 0 && $kelas == 'Kuat'){
		$pos_no3_kuat_ya = $p_no3_kuat_tidak;
		$pos_no3_kuat_tidak = $p_no3_kuat_ya;
	}
	else if($no3 == 1 && $kelas == 'Sedang'){
		$pos_no3_sedang_ya = $p_no3_sedang_ya;
		$pos_no3_sedang_tidak = $p_no3_sedang_tidak;
	}
	else if ($no3 == 0 && $kelas == 'Sedang'){
		$pos_no3_sedang_ya = $p_no3_sedang_tidak;
		$pos_no3_sedang_tidak = $p_no3_sedang_ya;
	}
	else if($no3 == 1 && $kelas == 'Lemah'){
		$pos_no3_lemah_ya = $p_no3_lemah_ya;
		$pos_no3_lemah_tidak = $p_no3_lemah_tidak;
	}
	else{
		$pos_no3_lemah_ya = $p_no3_lemah_tidak;
		$pos_no3_lemah_tidak = $p_no3_lemah_ya;
	}
	
	//pos no4
	if($no4 == 1 && $kelas == 'Kuat'){
		$pos_no4_kuat_ya = $p_no4_kuat_ya;
		$pos_no4_kuat_tidak = $p_no4_kuat_tidak;
	}
	else if ($no4 == 0 && $kelas == 'Kuat'){
		$pos_no4_kuat_ya = $p_no4_kuat_tidak;
		$pos_no4_kuat_tidak = $p_no4_kuat_ya;
	}
	else if($no4 == 1 && $kelas == 'Sedang'){
		$pos_no4_sedang_ya = $p_no4_sedang_ya;
		$pos_no4_sedang_tidak = $p_no4_sedang_tidak;
	}
	else if ($no4 == 0 && $kelas == 'Sedang'){
		$pos_no4_sedang_ya = $p_no4_sedang_tidak;
		$pos_no4_sedang_tidak = $p_no4_sedang_ya;
	}
	else if($no4 == 1 && $kelas == 'Lemah'){
		$pos_no4_lemah_ya = $p_no4_lemah_ya;
		$pos_no4_lemah_tidak = $p_no4_lemah_tidak;
	}
	else{
		$pos_no4_lemah_ya = $p_no4_lemah_tidak;
		$pos_no4_lemah_tidak = $p_no4_lemah_ya;
	}
	
	//pos no5
	if($no5 == 1 && $kelas == 'Kuat'){
		$pos_no5_kuat_ya = $p_no5_kuat_ya;
		$pos_no5_kuat_tidak = $p_no5_kuat_tidak;
	}
	else if ($no5 == 0 && $kelas == 'Kuat'){
		$pos_no5_kuat_ya = $p_no5_kuat_tidak;
		$pos_no5_kuat_tidak = $p_no5_kuat_ya;
	}
	else if($no5 == 1 && $kelas == 'Sedang'){
		$pos_no5_sedang_ya = $p_no5_sedang_ya;
		$pos_no5_sedang_tidak = $p_no5_sedang_tidak;
	}
	else if ($no5 == 0 && $kelas == 'Sedang'){
		$pos_no5_sedang_ya = $p_no5_sedang_tidak;
		$pos_no5_sedang_tidak = $p_no5_sedang_ya;
	}
	else if($no5 == 1 && $kelas == 'Lemah'){
		$pos_no5_lemah_ya = $p_no5_lemah_ya;
		$pos_no5_lemah_tidak = $p_no5_lemah_tidak;
	}
	else{
		$pos_no5_lemah_ya = $p_no5_lemah_tidak;
		$pos_no5_lemah_tidak = $p_no5_lemah_ya;
	}
	
	//pos no6
	if($no6 == 1 && $kelas == 'Kuat'){
		$pos_no6_kuat_ya = $p_no6_kuat_ya;
		$pos_no6_kuat_tidak = $p_no6_kuat_tidak;
	}
	else if ($no6 == 0 && $kelas == 'Kuat'){
		$pos_no6_kuat_ya = $p_no6_kuat_tidak;
		$pos_no6_kuat_tidak = $p_no6_kuat_ya;
	}
	else if($no6 == 1 && $kelas == 'Sedang'){
		$pos_no6_sedang_ya = $p_no6_sedang_ya;
		$pos_no6_sedang_tidak = $p_no6_sedang_tidak;
	}
	else if ($no6 == 0 && $kelas == 'Sedang'){
		$pos_no6_sedang_ya = $p_no6_sedang_tidak;
		$pos_no6_sedang_tidak = $p_no6_sedang_ya;
	}
	else if($no6 == 1 && $kelas == 'Lemah'){
		$pos_no6_lemah_ya = $p_no6_lemah_ya;
		$pos_no6_lemah_tidak = $p_no6_lemah_tidak;
	}
	else{
		$pos_no6_lemah_ya = $p_no6_lemah_tidak;
		$pos_no6_lemah_tidak = $p_no6_lemah_ya;
	}
	
	//pos no7
	if($no7 == 1 && $kelas == 'Kuat'){
		$pos_no7_kuat_ya = $p_no7_kuat_ya;
		$pos_no7_kuat_tidak = $p_no7_kuat_tidak;
	}
	else if ($no7 == 0 && $kelas == 'Kuat'){
		$pos_no7_kuat_ya = $p_no7_kuat_tidak;
		$pos_no7_kuat_tidak = $p_no7_kuat_ya;
	}
	else if($no7 == 1 && $kelas == 'Sedang'){
		$pos_no7_sedang_ya = $p_no7_sedang_ya;
		$pos_no7_sedang_tidak = $p_no7_sedang_tidak;
	}
	else if ($no7 == 0 && $kelas == 'Sedang'){
		$pos_no7_sedang_ya = $p_no7_sedang_tidak;
		$pos_no7_sedang_tidak = $p_no7_sedang_ya;
	}
	else if($no7 == 1 && $kelas == 'Lemah'){
		$pos_no7_lemah_ya = $p_no7_lemah_ya;
		$pos_no7_lemah_tidak = $p_no7_lemah_tidak;
	}
	else{
		$pos_no7_lemah_ya = $p_no7_lemah_tidak;
		$pos_no7_lemah_tidak = $p_no7_lemah_ya;
	}
	
	//pos no8
	if($no8 == 1 && $kelas == 'Kuat'){
		$pos_no8_kuat_ya = $p_no8_kuat_ya;
		$pos_no8_kuat_tidak = $p_no8_kuat_tidak;
	}
	else if ($no8 == 0 && $kelas == 'Kuat'){
		$pos_no8_kuat_ya = $p_no8_kuat_tidak;
		$pos_no8_kuat_tidak = $p_no8_kuat_ya;
	}
	else if($no8 == 1 && $kelas == 'Sedang'){
		$pos_no8_sedang_ya = $p_no8_sedang_ya;
		$pos_no8_sedang_tidak = $p_no8_sedang_tidak;
	}
	else if ($no8 == 0 && $kelas == 'Sedang'){
		$pos_no8_sedang_ya = $p_no8_sedang_tidak;
		$pos_no8_sedang_tidak = $p_no8_sedang_ya;
	}
	else if($no8 == 1 && $kelas == 'Lemah'){
		$pos_no8_lemah_ya = $p_no8_lemah_ya;
		$pos_no8_lemah_tidak = $p_no8_lemah_tidak;
	}
	else{
		$pos_no8_lemah_ya = $p_no8_lemah_tidak;
		$pos_no8_lemah_tidak = $p_no8_lemah_ya;
	}
	
	//pos no9
	if($no9 == 1 && $kelas == 'Kuat'){
		$pos_no9_kuat_ya = $p_no9_kuat_ya;
		$pos_no9_kuat_tidak = $p_no9_kuat_tidak;
	}
	else if ($no9 == 0 && $kelas == 'Kuat'){
		$pos_no9_kuat_ya = $p_no9_kuat_tidak;
		$pos_no9_kuat_tidak = $p_no9_kuat_ya;
	}
	else if($no9 == 1 && $kelas == 'Sedang'){
		$pos_no9_sedang_ya = $p_no9_sedang_ya;
		$pos_no9_sedang_tidak = $p_no9_sedang_tidak;
	}
	else if ($no9 == 0 && $kelas == 'Sedang'){
		$pos_no9_sedang_ya = $p_no9_sedang_tidak;
		$pos_no9_sedang_tidak = $p_no9_sedang_ya;
	}
	else if($no9 == 1 && $kelas == 'Lemah'){
		$pos_no9_lemah_ya = $p_no9_lemah_ya;
		$pos_no9_lemah_tidak = $p_no9_lemah_tidak;
	}
	else{
		$pos_no9_lemah_ya = $p_no9_lemah_tidak;
		$pos_no9_lemah_tidak = $p_no9_lemah_ya;
	}
	
	//pos no10
	if($no10 == 1 && $kelas == 'Kuat'){
		$pos_no10_kuat_ya = $p_no10_kuat_ya;
		$pos_no10_kuat_tidak = $p_no10_kuat_tidak;
	}
	else if ($no10 == 0 && $kelas == 'Kuat'){
		$pos_no10_kuat_ya = $p_no10_kuat_tidak;
		$pos_no10_kuat_tidak = $p_no10_kuat_ya;
	}
	else if($no10 == 1 && $kelas == 'Sedang'){
		$pos_no10_sedang_ya = $p_no10_sedang_ya;
		$pos_no10_sedang_tidak = $p_no10_sedang_tidak;
	}
	else if ($no10 == 0 && $kelas == 'Sedang'){
		$pos_no10_sedang_ya = $p_no10_sedang_tidak;
		$pos_no10_sedang_tidak = $p_no10_sedang_ya;
	}
	else if($no10 == 1 && $kelas == 'Lemah'){
		$pos_no10_lemah_ya = $p_no10_lemah_ya;
		$pos_no10_lemah_tidak = $p_no10_lemah_tidak;
	}
	else{
		$pos_no10_lemah_ya = $p_no10_lemah_tidak;
		$pos_no10_lemah_tidak = $p_no10_lemah_ya;
	}
	
	//pos no11
	if($no11 == 1 && $kelas == 'Kuat'){
		$pos_no11_kuat_ya = $p_no11_kuat_ya;
		$pos_no11_kuat_tidak = $p_no11_kuat_tidak;
	}
	else if ($no11 == 0 && $kelas == 'Kuat'){
		$pos_no11_kuat_ya = $p_no11_kuat_tidak;
		$pos_no11_kuat_tidak = $p_no11_kuat_ya;
	}
	else if($no11 == 1 && $kelas == 'Sedang'){
		$pos_no11_sedang_ya = $p_no11_sedang_ya;
		$pos_no11_sedang_tidak = $p_no11_sedang_tidak;
	}
	else if ($no11 == 0 && $kelas == 'Sedang'){
		$pos_no11_sedang_ya = $p_no11_sedang_tidak;
		$pos_no11_sedang_tidak = $p_no11_sedang_ya;
	}
	else if($no11 == 1 && $kelas == 'Lemah'){
		$pos_no11_lemah_ya = $p_no11_lemah_ya;
		$pos_no11_lemah_tidak = $p_no11_lemah_tidak;
	}
	else{
		$pos_no11_lemah_ya = $p_no11_lemah_tidak;
		$pos_no11_lemah_tidak = $p_no11_lemah_ya;
	}
	
	//pos no12
	if($no12 == 1 && $kelas == 'Kuat'){
		$pos_no12_kuat_ya = $p_no12_kuat_ya;
		$pos_no12_kuat_tidak = $p_no12_kuat_tidak;
	}
	else if ($no12 == 0 && $kelas == 'Kuat'){
		$pos_no12_kuat_ya = $p_no12_kuat_tidak;
		$pos_no12_kuat_tidak = $p_no12_kuat_ya;
	}
	else if($no12 == 1 && $kelas == 'Sedang'){
		$pos_no12_sedang_ya = $p_no12_sedang_ya;
		$pos_no12_sedang_tidak = $p_no12_sedang_tidak;
	}
	else if ($no12 == 0 && $kelas == 'Sedang'){
		$pos_no12_sedang_ya = $p_no12_sedang_tidak;
		$pos_no12_sedang_tidak = $p_no12_sedang_ya;
	}
	else if($no12 == 1 && $kelas == 'Lemah'){
		$pos_no12_lemah_ya = $p_no12_lemah_ya;
		$pos_no12_lemah_tidak = $p_no12_lemah_tidak;
	}
	else{
		$pos_no12_lemah_ya = $p_no12_lemah_tidak;
		$pos_no12_lemah_tidak = $p_no12_lemah_ya;
	}
	
	//pos no13
	if($no13 == 1 && $kelas == 'Kuat'){
		$pos_no13_kuat_ya = $p_no13_kuat_ya;
		$pos_no13_kuat_tidak = $p_no13_kuat_tidak;
	}
	else if ($no13 == 0 && $kelas == 'Kuat'){
		$pos_no13_kuat_ya = $p_no13_kuat_tidak;
		$pos_no13_kuat_tidak = $p_no13_kuat_ya;
	}
	else if($no13 == 1 && $kelas == 'Sedang'){
		$pos_no13_sedang_ya = $p_no13_sedang_ya;
		$pos_no13_sedang_tidak = $p_no13_sedang_tidak;
	}
	else if ($no13 == 0 && $kelas == 'Sedang'){
		$pos_no13_sedang_ya = $p_no13_sedang_tidak;
		$pos_no13_sedang_tidak = $p_no13_sedang_ya;
	}
	else if($no13 == 1 && $kelas == 'Lemah'){
		$pos_no13_lemah_ya = $p_no13_lemah_ya;
		$pos_no13_lemah_tidak = $p_no13_lemah_tidak;
	}
	else{
		$pos_no13_lemah_ya = $p_no13_lemah_tidak;
		$pos_no13_lemah_tidak = $p_no13_lemah_ya;
	}
	
	//pos no14
	if($no14 == 1 && $kelas == 'Kuat'){
		$pos_no14_kuat_ya = $p_no14_kuat_ya;
		$pos_no14_kuat_tidak = $p_no14_kuat_tidak;
	}
	else if ($no14 == 0 && $kelas == 'Kuat'){
		$pos_no14_kuat_ya = $p_no14_kuat_tidak;
		$pos_no14_kuat_tidak = $p_no14_kuat_ya;
	}
	else if($no14 == 1 && $kelas == 'Sedang'){
		$pos_no14_sedang_ya = $p_no14_sedang_ya;
		$pos_no14_sedang_tidak = $p_no14_sedang_tidak;
	}
	else if ($no14 == 0 && $kelas == 'Sedang'){
		$pos_no14_sedang_ya = $p_no14_sedang_tidak;
		$pos_no14_sedang_tidak = $p_no14_sedang_ya;
	}
	else if($no14 == 1 && $kelas == 'Lemah'){
		$pos_no14_lemah_ya = $p_no14_lemah_ya;
		$pos_no14_lemah_tidak = $p_no14_lemah_tidak;
	}
	else{
		$pos_no14_lemah_ya = $p_no14_lemah_tidak;
		$pos_no14_lemah_tidak = $p_no14_lemah_ya;
	}
	
	//pos no15
	if($no15 == 1 && $kelas == 'Kuat'){
		$pos_no15_kuat_ya = $p_no15_kuat_ya;
		$pos_no15_kuat_tidak = $p_no15_kuat_tidak;
	}
	else if ($no15 == 0 && $kelas == 'Kuat'){
		$pos_no15_kuat_ya = $p_no15_kuat_tidak;
		$pos_no15_kuat_tidak = $p_no15_kuat_ya;
	}
	else if($no15 == 1 && $kelas == 'Sedang'){
		$pos_no15_sedang_ya = $p_no15_sedang_ya;
		$pos_no15_sedang_tidak = $p_no15_sedang_tidak;
	}
	else if ($no15 == 0 && $kelas == 'Sedang'){
		$pos_no15_sedang_ya = $p_no15_sedang_tidak;
		$pos_no15_sedang_tidak = $p_no15_sedang_ya;
	}
	else if($no15 == 1 && $kelas == 'Lemah'){
		$pos_no15_lemah_ya = $p_no15_lemah_ya;
		$pos_no15_lemah_tidak = $p_no15_lemah_tidak;
	}
	else{
		$pos_no15_lemah_ya = $p_no15_lemah_tidak;
		$pos_no15_lemah_tidak = $p_no15_lemah_ya;
	}
	
	//pos no16
	if($no16 == 1 && $kelas == 'Kuat'){
		$pos_no16_kuat_ya = $p_no16_kuat_ya;
		$pos_no16_kuat_tidak = $p_no16_kuat_tidak;
	}
	else if ($no16 == 0 && $kelas == 'Kuat'){
		$pos_no16_kuat_ya = $p_no16_kuat_tidak;
		$pos_no16_kuat_tidak = $p_no16_kuat_ya;
	}
	else if($no16 == 1 && $kelas == 'Sedang'){
		$pos_no16_sedang_ya = $p_no16_sedang_ya;
		$pos_no16_sedang_tidak = $p_no16_sedang_tidak;
	}
	else if ($no16 == 0 && $kelas == 'Sedang'){
		$pos_no16_sedang_ya = $p_no16_sedang_tidak;
		$pos_no16_sedang_tidak = $p_no16_sedang_ya;
	}
	else if($no16 == 1 && $kelas == 'Lemah'){
		$pos_no16_lemah_ya = $p_no16_lemah_ya;
		$pos_no16_lemah_tidak = $p_no16_lemah_tidak;
	}
	else{
		$pos_no16_lemah_ya = $p_no16_lemah_tidak;
		$pos_no16_lemah_tidak = $p_no16_lemah_ya;
	}
	
	$kuat = round((($pos_no1_kuat_ya * $pos_no2_kuat_ya * $pos_no3_kuat_ya * $pos_no4_kuat_ya * $pos_no5_kuat_ya
			* $pos_no6_kuat_ya * $pos_no7_kuat_ya * $pos_no8_kuat_ya * $pos_no9_kuat_ya * $pos_no10_kuat_ya
			 * $pos_no11_kuat_ya * $pos_no12_kuat_ya * $pos_no13_kuat_ya * $pos_no14_kuat_ya * $pos_no15_kuat_ya
			  * $pos_no16_kuat_ya) * ($count['kuat']/$count['all'])),4);
			  
	$sedang = round((($pos_no1_sedang_ya * $pos_no2_sedang_ya * $pos_no3_sedang_ya * $pos_no4_sedang_ya * $pos_no5_sedang_ya
			* $pos_no6_sedang_ya * $pos_no7_sedang_ya * $pos_no8_sedang_ya * $pos_no9_sedang_ya * $pos_no10_sedang_ya
			 * $pos_no11_sedang_ya * $pos_no12_sedang_ya * $pos_no13_sedang_ya * $pos_no14_sedang_ya * $pos_no15_sedang_ya
			  * $pos_no16_sedang_ya) * ($count['sedang']/$count['all'])),4);
			  
	$lemah = round((($pos_no1_lemah_ya * $pos_no2_lemah_ya * $pos_no3_lemah_ya * $pos_no4_lemah_ya * $pos_no5_lemah_ya
			* $pos_no6_lemah_ya * $pos_no7_lemah_ya * $pos_no8_lemah_ya * $pos_no9_lemah_ya * $pos_no10_lemah_ya
			 * $pos_no11_lemah_ya * $pos_no12_lemah_ya * $pos_no13_lemah_ya * $pos_no14_lemah_ya * $pos_no15_lemah_ya
			  * $pos_no16_lemah_ya) * ($count['lemah']/$count['all'])),4);
	
	echo "Kuat : $kuat<br>";
	echo "Sedang : $sedang<br>";
	echo "Lemah : $lemah<br><br>";
	
	if (($kuat > $sedang) && ($kuat > $lemah))
	{
		echo "Berdasarkan hasil diatas, bahwa nilai probabilitas tertinggi adalah kelas kuat sehingga dapat disimpulkan bahwa pasien tersebut masuk dalam klasifikasi KUAT";
	}
	else if (($sedang > $kuat) && ($sedang > $lemah))
	{
		echo "Berdasarkan hasil diatas, bahwa nilai probabilitas tertinggi adalah kelas sedang sehingga dapat disimpulkan bahwa pasien tersebut masuk dalam klasifikasi SEDANG";
	}
	else
	{
		echo "Berdasarkan hasil diatas, bahwa nilai probabilitas tertinggi adalah kelas lemah sehingga dapat disimpulkan bahwa pasien tersebut masuk dalam klasifikasi LEMAH";
	}
	
	
	http://localhost/phpmyadmin/sql.php?db=crud&table=questioner2&printview=1&sql_query=SELECT+%2A+FROM+%60questioner2%60&display_text=F&token=73a37f52ac8f2e4ff1efbc621d4fb17a