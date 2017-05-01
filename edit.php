<?php 
include 'database.php';
$db = new database();
?>
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
<form id="contact" action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<h5>Nama</h5>
	<fieldset>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" style="width:100%;" name="nama" value="<?php echo $d['nama'] ?>">
			</fieldset>
			<h5>Alamat</h5>
		<fieldset>
		<input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
		</fieldset>
		<h5>Jenis Kelamin</h5>
		<fieldset>
		<input type="text" name="jeniskelamin" value="<?php echo $d['jeniskelamin'] ?>"></td>
</fieldset>
<h5>Pekerjaan</h5>
<fieldset>
		<input type="text" name="pekerjaan" value="<?php echo $d['pekerjaan'] ?>"></td>
		</fieldset>
		<h5>Usia</h5>
<fieldset>
		<input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
</fieldset>
		<input id="contact-submit" type="submit" value="Simpan">
<?php } ?>
</form>
</div>
<script src="js/charisma.js"></script>


</body>
</html>