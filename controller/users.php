<?php
class Users extends Controller {
    var $models = array('User');
    var $User;

    function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            $user = $this->User->authenticate($username, $password);

            if ($user) {
                $this->Session->write('User', $user);
                $this->Session->setFlash('Connexion réussie !', '<i class="bi bi-check-circle"></i>', 'success');
                header('Location: /');
                exit;
            } else {
                $this->Session->setFlash('Identifiants incorrects.', '<i class="bi bi-exclamation-circle"></i>', 'danger');
            }
        }
        $this->render('login');
    }

    function logout() {
        $this->Session->write('User', null);
        $this->Session->setFlash('Déconnexion réussie.', '<i class="bi bi-check-circle"></i>', 'success');
        header('Location: /');
        exit;
    }
}
