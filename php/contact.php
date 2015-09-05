<section class="con_right contact">

    <!--	<div class="form_container">	-->
    <!--		<h1>Neem contact op.</h1>-->

    <form id="con_form" method="POST" action="php/mail.php">
        <div class="naam">
            <p>Naam</p>
            <input type="text" name="name">
        </div>
        <div class="email">
            <p>E-mail</p>
            <input type="text" name="email">
        </div>
            <div class="bericht">
                <p>Bericht</p>
                <textarea name="message"></textarea>
            </div>
            <input type="checkbox" id="interested" style="display:none;">
            <input id="submit" value="Verder" type="submit" name="submit">
    </form>
    <!--	</div>-->

</section>