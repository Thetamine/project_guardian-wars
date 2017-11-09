<?php include('header.php'); ?>
	<main id="register">
	<h2>Register / Login to Guardian Wars</h2>
		<section>
			<h3>Register for Guardian Wars</h3>
			<p>fields marked with * are required</p>
			<form id="register-form" class="simple-form" action="#">
				<label for="username">* Username: </label>
				<input type="text" name="username" placeholder="Enter your Username / PSN" required>

				<label for="password">* Password: </label>
				<input type="password" name="password" required>

				<label for="clan-name">Clan Name (if founder)</label>
				<input type="text" name="clan-name" placeholder="E.G. September's Very Own" >

				<input class="submit-button" type="submit" name="submit" value="submit">
			</form>
			<p>Returning member? <a href="#">Log in</a></p>
		</section>
		<section>
			<h3>Login to Guardian Wars</h3>
			<form action="#" id="login-form" class="simple-form">
				<label for="username">* Username: </label>
				<input type="text" name="username" placeholder="Enter your Username / PSN" required>

				<label for="password">* Password: </label>
				<input type="password" name="password" required>
				
				<input class="submit-button" type="submit" name="submit" value="submit">
			</form>
		</section>
	</main>
<?php include('footer.php'); ?>