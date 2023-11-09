<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="myscript.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Javascript</title>
</head>

<body>
    <div class="container-fluid">
        <div class="form-group w-50 m-4">
            <label for="bil1">Bilangan 1 :</label>
            <input type="number" class="form-control" id="bil1">
        </div>
        <div class="form-group w-50 m-4">
            <label for="bil2">Bilangan 2 :</label>
            <input type="number" class="form-control" id="bil2">
        </div>
        <h1 class="m-4">Hasil Operasi : <div id="hasil"></div></h1>
        <input onclick="tambah();" type="button" value="Penjumlahan" class="btn btn-success ml-4">
        <input onclick="kali();" type="button" value="Perkalian" class="btn btn-warning">
    </div>
</body>

</html>