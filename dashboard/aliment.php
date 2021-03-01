<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/nav.php'; ?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row" style="padding-top:20px;">
			<ol class="breadcrumb" style="height:50px;padding-top:15px;">
				<li>
				<a href="#">
					<em class="fa fa-home"></em>
				</a>
				</li>
				<li class="active">Aliments</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Aliments</h1>
			</div>
		</div><!--/.row--><br>

		<div class="row col-lg-12" style="padding-bottom:30px;">
			<div class="col-lg-2 text-left" style="padding:0;">
				<a href="createAliment.php">
					<button type="submit"  class="btn btn-success">
						<span class="glyphicon glyphicon-plus" style="padding-right:8px;"></span>Nouveau Aliment
					</button>
				</a>
			</div>
			<!-- search feature begin here -->
			<div class="col-lg-6 text-right" style="padding:0;">
				<div class="col-lg-4" style="padding-right:10px;">
					<h5 class="text-right"><strong>RECH_ALIMENT</strong></h5>
				</div>
				<div class="col-lg-3" style="padding:0;">
					<select class="form-control" id="search">
						<option value="0"> ID</option>
						<option value="1"> Nom</option>
					</select>
				</div>
				<div class="col-lg-5" style="padding-left:5px;">
					<input style="height:34px;" class="input form-control" type="text" id="input" onkeyup="incrementalsearch('input','table')" placeholder="Search regex">
				</div>
			</div>
			<!-- search feature end here -->
		</div><!--/.row-->

		<table class="table table-striped" id="table" style="width:700px;">

		    <thead style="background-color:#ccc;">
				<tr>
					<th scope="col">ID_Aliment</th>
					<th scope="col">Aliment</th>
					<th scope="col">Province</th>
					<th scope="col">Prix</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
				<tbody>
				<?php require_once 'ussd/connect.php'; ?>
				<?php
                    $sql = "SELECT * FROM aliments";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            while($row = $result->fetch_array()){ ?>
					<tr>
						<td scope="row"> <?php echo $row['id']; ?> </td>
						<td> <?php echo $row['name']; ?> </td>
						<td> <?php echo $row['province']; ?> </td>
						<td> <?php echo $row['prix']; ?> </td>
						<td style="display:flex;">
							<a href="" style="padding-right:10px;">
								<button type="submit" class="btn btn-sm btn-primary">
								<span class="glyphicon glyphicon-edit"> Edit</span>
								</button>
							</a>

							<form action="" method="post">
								<button type="submit" onclick="return confirm('voulez-vous vraiment supprimer?')" class="btn btn-sm btn-danger">
								    <span class="glyphicon glyphicon-trash"> Delete</span>
								</button>
							</form>
						</td>
					</tr>
					<?php }}} ?>
				</tbody>
		</table>
	</div>
    
    <?php include 'includes/sidebar.php'; ?>
</body>
</html>