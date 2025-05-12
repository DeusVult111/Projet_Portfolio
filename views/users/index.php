<section class="login">
    <div class="container">
        <div class="form-container">
            <h2>Connexion</h2>
				<div class="container">
  					<?= $this->Session->flash() ?>
				</div>
            <form method="POST" action="/<?= WEBROOT2; ?>/users">
                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Identifiant</span>
                    <input type="text" name="login" class="form-control" aria-label="Identifiant" aria-describedby="inputGroup-sizing-lg" autocomplete="off" value="admin" required>
                </div>
                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Mot de Passe</span>
                    <input type="password" name="password" class="form-control" aria-label="Mot de Passe" aria-describedby="inputGroup-sizing-lg" autocomplete="off" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" value="Envoyer" class="btn btn-primary">Se connecter</button>
                    <a href="<?= WEBROOT2; ?>" class="btn btn-secondary">Retour</a>
                </div>
            </form>
        </div>
    </div>
</section>