<!DOCTYPE html>
<html>
<head>
	<title>Kayla - PWEB B</title>
</head>
<body>
	<h1>Tutorial Controller - PWEB B</h1> 
	<p>
        Nama : {{ $nama }} <br>
        Alamat : {{ $alamat }} <br>
        Umur : {{ $umur }} <br>
    </p>

    <a href="showjam/{{ date('G:i:s')}}"> Klik Disini </a>

</body>
</html>