<div class="firstDiv">
    <a href="index.php" class="app-name">BIG GEAR TEST</a>
    <img class="imgLogo" src="images/biggeartestLogo.jpg" alt="logoBGT">
    <form class="topSearch">
        <input type="text" name="search" placeholder="Search.." class="topSearch-input" >
    </form>
</div>

<div class="topbar" id="topBar">
    <a href="index.php" class="active">Accueil</a>
    <?php
    //if(isLogged() == 1){
    ?>
    <a href="#">Lancer les mesures</a>
    <a href="index.php?page=resultats">Mes résulats</a>
    <?php
    //}else{
    ?>
    <a href="index.php?page=produits">Nos produits</a>
    <a href="#">Paramètres</a>
    <?php
    // }
    ?>
<div class="laroute"></div>


    <!-- <div class="dropdown"> Menu pour les langues à revoir
         <button class="dropbtn">Langues
             <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
             <a href="#">Français</a>
             <a href="#">Anglais</a>
             <a href="#">Espagnol</a>
             <a href="#">Allemand</a>
         </div>
     </div> -->
    <div class="login-container">
        <?php
        //if(isLogged() == 1){
        ?>
        <!-- <button><a href="index.php?page=logout">Déconnexion</a></button> -->
        <?php
        // }else{
        ?>
        <button type="submit" onclick="openModal2()">Connexion</button>
        <!-- <button onclick="document.getElementById('id01').style.display='block'" >Inscription</button> -->
        <button onclick="openModal()" >Inscription</button>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="topBarRespo()">&#9776;</a>
        <?php
        // }
        ?>

    </div>
</div>
<script src="js/topbar.js"></script>