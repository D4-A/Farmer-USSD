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
						<em class="fa fa-user-md"></em>
					</a>
				</li>
				<li class="active">Utilisateurs</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Liste des Utilisateurs</h1>
			</div>
		</div><!--/.row--><br>

		<div class="row col-lg-12" style="padding-bottom:30px;">
			
			<!-- search feature begin here -->
			<div class="col-lg-6 text-right" style="padding:0;">
				<div class="col-lg-4" style="padding-right:10px;">
					<h5 class="text-right"><strong>RECHERCHE PAR</strong></h5>
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

		<table class="table table-striped" id="table" style="width:600px;">

			<thead style="background-color:#ccc;">
				<tr>
					<th scope="col" style="text-align:center;">ID </th>
					<th scope="col">Nom</th>
					<th scope="col">Tél</th>
					<th scope="col">Email</th>
				</tr>
			</thead>
			<tbody>
				<?php  ?>
					<tr>
						<td scope="row" style="text-align:center;">  </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
					</tr>
				<?php  ?>
			</tbody>

        </table>
	</div>
    
    <?php include 'includes/sidebar.php'; ?>
</body>
</html>