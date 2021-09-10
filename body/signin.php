<link rel="stylesheet" href="css/signin.css">
<div id="id02">
    <span onclick="closeModal2()" class="close" title="Fermer la fenêtre">&times;</span>
    <div class="modal-contener">
        <form id="modal-content" method="post">
            <div class="popup">
                <h1 class="header">Se connecter</h1>
                <hr>
                <div class="field">
                    <label class="field-label" for="email">Votre adresse email</label>
                    <input class="field-input" type="text" name="email" placeholder="Email" id="email" required>
                </div>
                <div class="field">
                    <label class="field-label" for="psw">Votre mot de passe</label>
                    <input class="field-input" type="password" name="psw" placeholder="Mot de Passe" id="psw" required>
                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Se souvenir de moi
                    </label>
                    <div class="clearfix">
                        <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="bu bu-cancelbtn">Annuler</button> -->
                        <button type="button" href="javascript:void(0)" class="bu bu-cancelbtn" onclick="closeModal2()">Annuler</button>
                        <button type="submit" class="bu bu-signupbtn"><span>Se Connecter</span></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="js/signin.func.js"></script>