<?php include('header.php'); ?>
	<main>
	<h2 class="centered-text">Register Your Fireteam</h2>
		<section id="register-fireteam">
			<p>Add Guardians To your Fireteam.</p>
			<form action="#">
				<input type="text" name="guardian-search-bar" placeholder="Enter Username" required>
				<input type="submit" name="add-guardian" value="add Guardian">
			</form>
		</section>
		<div class="border-box-main">
			<section id="fireteam-1" class="fireteam-list">
				<h3>{{Guardian's}} Fireteam</h3>
				<ul>
					<li>
						<a href="#">Guardian 1</a>
					</li>
					<li>
						<a href="#">Guardian 2</a>
					</li>
					<li>
						<a href="#">Guardian 3</a>
					</li>
					<li>
						<a href="#">Guardian 4</a>
					</li>
				</ul>
			</section>
		</div>
	</main>
<?php include('footer.php'); ?>