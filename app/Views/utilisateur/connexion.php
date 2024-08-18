<div class="login-container">
    <h2>Connexion</h2>
    <form action="#" method="post" class="login-form">
        <div class="form-group">
            <input type="email" name="mail" placeholder="mail" required>
        </div>
        <div class="form-group">
            <input type="password" name="mot_de_passe" placeholder="mot de passe" required>
        </div>
        <button type="submit" class="login-button">connexion</button>
    </form>
</div>

<style>
    .login-container {
        padding: 40px;
        max-width: 400px;
        margin: 0 auto;
        text-align: center;
    }

    .login-container h2 {
        margin-bottom: 30px;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group input {
        padding: 15px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .login-button {
        padding: 15px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

</style>
