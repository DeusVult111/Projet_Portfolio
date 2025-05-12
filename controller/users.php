<?php
class Users extends Controller {
    var $models = array('User');
    var $User;

    function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);

            $user = $this->User->getUser($login, $password);

            if ($user) {
                $this->Session->write('User', $user);
                $this->Session->setFlash('Connexion réussie !', '<i class="bi bi-check-circle"></i>', 'success');
                sleep(0.5); // Pause de 0.5 seconde pour éviter les attaques par force
                header('Location: /Projet_Portfolio/'); // Redirige vers la page d'accueil
                exit;
            } else {
                $this->Session->setFlash('Identifiants incorrects.', '<i class="bi bi-exclamation-circle"></i>', 'danger');
            }
        }
        $this->render('index'); // Utilise la vue `index.php` du dossier `users`
    }

    function logout() {
        $this->Session->write('User', null);
        $this->Session->setFlash('Déconnexion réussie.', '<i class="bi bi-check-circle"></i>', 'success');
        header('Location: /Projet_Portfolio/'); // Redirige vers la page d'accueil
        exit;
    }
}
