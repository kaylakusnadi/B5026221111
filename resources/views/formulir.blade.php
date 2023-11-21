<!DOCTYPE html>
<html>
<head>
	<title>Tutorial P-WEB 5 - Kayla Kirani Kusnadi</title>
</head>
<body>
 
	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<input type = "hidden" name = "nrp" value = "5026221111">
      
      	Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
        NRP :
		<input type="text" name="nrp"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>