<div class="account-container">
    <h2>Compte</h2>
    <form action="#" method="post" class="account-form">
        <div class="form-group">
            <input type="text" name="prenom" placeholder="prenom">
            <input type="text" name="nom" placeholder="nom">
        </div>
        <div class="form-group">
            <input type="email" name="mail" placeholder="mail">
            <input type="text" name="telephone" placeholder="téléphone">
        </div>
        <div class="form-group">
            <input type="text" name="ville" placeholder="ville">
        </div>
        <div class="form-group">
            <input type="text" name="facebook" placeholder="facebook">
            <input type="text" name="discord" placeholder="discord">
        </div>
        <div class="form-actions">
            <button type="submit" class="update-button">mettre à jour</button>
            <div class="secondary-actions">
                <button type="button" class="password-button">changer mot de passe</button>
                <button type="button" class="delete-button">supprimer mon compte</button>
                <a href="controleurFrontal.php?action=afficherFormulaireConnexion&controleur=utilisateur"><button type="button" class="logout-button">déconnexion</button></a>
            </div>
        </div>
    </form>
</div>
