<?php require "vendor/autoload.php" ?>
<?php $users = new UserCommander(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Testni zadatak</title>
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>

	<div class="backgound_img">

	    <div class="container">

	        <div class="logo">
	           <img src="public/img/logo.png" width="220" height="84" alt="logo"/>
	        </div>

	        <h1 class="main_heading">Lista uposlenika</h1>

	    <div class="list_container">

			<table>
				<thead>
				<tr>
					<th>
						Ime
						<span class="arrow_up"></span>
					</th>

					<th>
						Prezime
						<span class="arrow_up"></span>
					</th>
					<th>
						Pozicija
						<span class="arrow_up"></span>
					</th>
					<th>
						Datum rođenja
						<span class="arrow_up"></span>
					</th>
					<th>
						Provedeno vrijeme u firmi
						<span class="arrow_up"></span>
					</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($users->getUsersObjects() as $user) :  ?>
					<tr>
					    <td><?php echo $user->name  		?></td>
					    <td><?php echo $user->surname  		?></td>
					    <td><?php echo $user->position  	?></td>
					    <td><?php echo $user->dateOfBirth  	?></td>
					    <td><?php echo $user->employed  	?></td>	
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
    </div>
</div>
</body>
</html>