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
	<link href="css/bootstrap.v3.3" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/bbootstrap-united.min.css" rel="stylesheet">
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
	<br>
	<br>
	<br>
	<br>


<div class="container">
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
	<center>
	<a class="btn btn-info" href="input.php">
                <i class="glyphicon glyphicon-input icon-white"></i>
                Input
            </a>
			</center><br>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jenis Kelamin</th>
		<th>Pekerjaan</th>
		<th>Usia</th>
		<th>Pilihan</th>
	</tr>
	 </thead>
	 <tbody>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td><?php echo $x['jeniskelamin']; ?></td>
		<td><?php echo $x['pekerjaan']; ?></td>
		<td><?php echo $x['usia']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit
			 <i class="glyphicon glyphicon-edit icon-white"></i>
			 </a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus
			<i class="glyphicon glyphicon-trash icon-white"></i>
			</a>			
		</td>
	</tr>
	<?php 
	}
	?>
  </tr>
 </tbody>
    </table>
    </div>
    </div>
    </div>
	</div>
<script src="js/charisma.js"></script>
</body>
</html>