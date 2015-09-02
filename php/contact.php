<section class="con_right contact">

	<div class="form_container">	
		<h1>Neem contact op!</h1>

		<form id="con_form" method="POST" action="php/mail.php">
				<p>Name</p>
				<input type="text" name="name">

				<p>E-mail</p>
				<input type="text" name="email">

				<p>Message</p>
				<textarea name="message"></textarea>
				<br>

				<input type="checkbox" id="interested" style="display:none;">
				<input id="submit" type="submit" name="submit">
		</form>
	</div>
    	
</section>