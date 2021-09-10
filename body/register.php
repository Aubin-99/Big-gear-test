
<div id="id01" class="modal">
    <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Fermer la fenêtre">&times;</span> -->
    <span onclick="closeModal()" class="close" title="Fermer la fenêtre">&times;</span>
    <?php
    /*
   if (isset($_POST['submit'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = sha1(htmlspecialchars(trim($_POST['psw'])));//sha1() devant pour la secu
        $pswRepeat = sha1(htmlspecialchars(trim($_POST['psw-repeat'])));
        $insertion = "INSERT INTO users (name, email, password) VALUES($name, $email, $password)";
        $exe = $db->query($insertion);

       if (email_taken($email) == 1){
           $error_email = "L'adresse email hest déjà utilisée...";
       }else{
            register($name, $email, $password);
            $_SESSION['Biggeartest'] = $email;
            header("Location:index.php");

       }
    }
*/

    ?>
    <form method="post" id="modal-content" >
        <div class="popup">
            <h1 class="header">S'inscrire</h1>
            <p>Veuillez remplir ce formulaire pour créer un compte.</p>
            <hr>

            <div class="field">
                <label class="field-label" for="name">Votre nom d'utilisateur</label>
                <input class="field-input" type="text" name="name" placeholder="Nom d'utilisateur" id="username" required>
            </div>
            <div class="field">
                <label class="field-label" for="email">Votre adresse email</label>
                <input class="field-input" type="email" name="email" placeholder="Email" id="email" required>
            </div>
            <p class="errorEmail"><?php //echo (isset($error_email)) ? $error_email : ''; ?></p>
            <div class="field">
                <label class="field-label" for="psw">Votre mot de passe</label>
                <input class="field-input" type="password" name="psw" placeholder="Mot de Passe" id="psw" required>
                <div class="eye icon" onclick="showPassword()" id="eye"></div>
            </div>
            <div class="field">
                <label class="field-label" for="psw-repeat">Confirmer votre mot de passe</label>
                <input class="field-input" type="password" name="psw-repeat" placeholder="Répéter Mot de passe" id="psw-repeat" required>
                <div class="eye icon" id="eye" onclick="showPasswordBis()"></div>
            </div>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Se souvenir de moi
            </label>

            <p>En créant un compte, vous acceptez nos <a href="#" class="condition">Conditions d'utilisation et confidentialité</a>.</p>

            <div class="clearfix">
                <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="bu bu-cancelbtn">Annuler</button> -->
                <button type="button" href="javascript:void(0)" class="bu bu-cancelbtn" onclick="closeModal()">Annuler</button>
                <button type="submit" name="submit" class="bu bu-signupbtn"><span>S'inscrire</span></button>
            </div>
        </div>
    </form>
</div>
<script src="js/register.func.js"></script>