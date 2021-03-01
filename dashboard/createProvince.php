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
                <li class="active">Provinces</li>
            </ol>
        </div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ajouter Province</h1>
			</div>
		</div><!--/.row--><br>

		<form role="form" action="actions/crudProvince.php" method="post">
			<div class="form-group">
				<label style="padding-left:10px;">Nom du Province</label>
				<input type="text" class="form-control" name="name" placeholder="Name Province" required><br>
			</div>

			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-save" style="padding-right:8px;"> </span>Enregistrer
			</button>

		</form>
	</div>
    <?php include 'includes/sidebar.php'; ?>
</body>

</html>