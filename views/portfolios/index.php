<?php
// Inclure les sections du portfolio
require 'accueil.php';
require 'a_propos.php';
require 'competences.php';
require 'parcours.php';
require 'portfolio.php';
require 'savoir_faire.php';
require 'contact.php';
?>

<script>
  // Gestion de l'édition inline
  document.addEventListener('input', function(event) {
    if (event.target.hasAttribute('contenteditable')) {
      const field = event.target.getAttribute('data-field');
      const id = event.target.getAttribute('data-id');
      const value = event.target.textContent.trim();

      const xhttp = new XMLHttpRequest();
      xhttp.open("POST", "/<?= WEBROOT2 ?>/portfolio/ajaxUpdateField", true);
      xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhttp.onload = function() {
        if (this.status === 200) {
          alert("Mise à jour réussie");
        } else {
          alert("Erreur lors de la mise à jour");
        }
      };
      xhttp.send(`id=${id}&field=${field}&value=${encodeURIComponent(value)}`);
    }
  });
</script>