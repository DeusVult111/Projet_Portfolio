<?php
class controller {
    var $vars = array();
    protected $Session;
    protected $models;
    var $layout = "default";
    function __construct() {
        if (isset($this->models)) {
            foreach ($this->models as $m) {
                $this->load($m);
            }
        }
        $this->Session = new Session();
    }

    function render($filename) {
        // On passe les données à la vue
        extract($this->vars);
        if ($this->Session->isLogged()) {
            $this->layout = 'admin';
        } else {
            $this->layout = 'default';
        }
        ob_start();
        $viewFile = ROOT . 'views/' . get_class($this) . '/' . $filename . '.php';
        if (!file_exists($viewFile)) {
            throw new Exception("Vue introuvable : $viewFile");
        }
        require $viewFile;
        $content_for_layout = ob_get_clean();
        if ($this->layout === false) {
            echo $content_for_layout; // Si aucun layout n'est défini, affichez directement la vue
            echo $content_for_layout;
        } else {
            $layoutFile = ROOT . 'views/layout/' . $this->layout . '.php';
            if (!file_exists($layoutFile)) {
                throw new Exception("Layout introuvable : $layoutFile");
            }
            require $layoutFile;
        }
    }
    
    

    function set ($d) {
        //fusion des données a envoyer avec les données 
        //deja presenté dans $vars
        $this ->vars = array_merge($this->vars, $d);
    }
    
    function load($name) {
        require "model/" . strtolower($name) . ".php";
        $this->$name = new $name();
    }
}

