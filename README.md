# pustaka-anti-suntikan-PHP
Pustaka ieu di jieun ajang nyaring inputan anu teu pararuguh.

###Cara ngagunakeun
- Panggil heula class na $as = new Anti_Suntikan;
- Kadua tinggal terapkeun kana php siga kieu conto na $as->jaga($_POST['name']);
 
###Contoh Full
<form method="POST">
  <input type="text" name="ngaran" placeholder="input teks di dieu">
  <input type="submit" name="simpen" value="kirimkeun">
</form>
<?php
  $as = new Anti_Suntikan;
  ngaran = $as->jaga($_POST['ngaran']);
  if($_POST['simpen']){
    mysql_query("INSERT INTO tabel (data_ngaran) VALUES ($ngaran)");
  }
?>
  
