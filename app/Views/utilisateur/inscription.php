<div class="register-container">
    <h2>Inscription</h2>
    <form action="#" method="post" class="register-form">
        <div class="form-group">
            <input type="text" name="prenom" placeholder="prenom" required>
            <input type="text" name="nom" placeholder="nom" required>
        </div>
        <div class="form-group">
            <input type="email" name="mail" placeholder="mail" required>
            <input type="text" name="telephone" placeholder="téléphone" required>
        </div>
        <div class="form-group">
            <input type="password" name="mot_de_passe" placeholder="mot de passe" required>
        </div>
        <div class="form-group">
            <input type="password" name="confirmation_mot_de_passe" placeholder="confirmation mot de passe" required>
        </div>
        <div class="form-terms">
            <input type="checkbox" name="conditions" id="conditions" required>
            <label for="conditions">J'accepte les conditions d'utilisations *</label>
        </div>
        <button type="submit" class="register-button">créer compte</button>
    </form>
</div>

<style>

    .register-container {
        padding: 40px;
        max-width: 500px;
        margin: 0 auto;
        text-align: center;
    }

    .register-container h2 {
        margin-bottom: 30px;
    }

    .register-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-group {
        display: flex;
        gap: 20px;
    }

    .form-group input {
        padding: 15px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .form-terms {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
    }

    .form-terms input[type="checkbox"] {
        margin-right: 10px;
    }

    .register-button {
        padding: 15px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
    }


</style>