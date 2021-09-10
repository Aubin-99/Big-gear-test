
<div id="contact_us" class="formulaire_contact">
    <h1 class="header">BGT : Nous contacter</h1>
    <p>Veuillez remplir ce formulaire pour nous envoyer un message.</p>
    <hr>
    <form id="modal-content" method="post">
        <div class="field">
            <label class="field-label" for="email_address">Votre adresse email :
            <input class="field-input" type="email" name="email_address" placeholder="Email" id="email_address" required>
            </label>
        </div>
        <div class="field">
            <label class="field-label" for="message_text">Veuillez écrire votre message :
            <input class="field-input" name="message_text" placeholder="Votre message..." id="message_contact" required>
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="copie_mail" style="margin-bottom:15px"> Envoyer une copie du mail ?
            </label>
        </div>
        <div>
            <input type="submit" name="send" value="Envoyer">
        </div>
    </form>
</div>