<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CRUD and OOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.v3.3" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container" id="input"> 
<form id="contact" action="proses.php?aksi=tambah" method="post">
	
<h5>Nama</h5>
	<fieldset>
		<input type="text" name="nama">
	</fieldset>
	<h5>Alamat</h5>
	<fieldset>
		<input type="text" name="alamat">
	</fieldset>
	<h5>Jenis Kelamin</h5>
	<fieldset>
		<input type="text" name="jeniskelamin">
	</fieldset>
	<h5>Pekerjaan</h5>
	<fieldset>
		<input type="text" name="pekerjaan">
	</fieldset>
	<h5>Usia</h5>
	<fieldset>
		<input type="text" name="usia">
	</fieldset>
	
		<input id="contact-submit" type="submit" value="Simpan">
</form>
</div>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>