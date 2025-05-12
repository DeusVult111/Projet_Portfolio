<?php
// Inclure les sections du portfolio
require 'accueil.php';
require 'a_propos.php';
require 'stats.php';
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
          const response = JSON.parse(this.responseText);
          if (response.status === 'success') {
            alert("Mise à jour réussie");
          } else {
            alert("Erreur : " + response.message);
          }
        } else {
          alert("Erreur lors de la mise à jour");
        }
      };
      xhttp.send(`id=${id}&field=${field}&value=${encodeURIComponent(value)}`);
    }
  });

  // Pré-remplir le formulaire pour la modification
  function editStat(id, icon, value, title, description) {
    document.getElementById('itemId').value = id;
    document.getElementById('icon').value = icon;
    document.getElementById('value').value = value;
    document.getElementById('title').value = title;
    document.getElementById('description').value = description;
    const modal = new bootstrap.Modal(document.getElementById('statsModal'));
    modal.show();
  }

  // Gestion de l'envoi du formulaire
  document.getElementById('statsForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    fetch('/<?= WEBROOT2 ?>/portfolio/ajaxSaveStat', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.status === 'success') {
        alert('Item enregistré avec succès.');
        location.reload(); // Recharge la page pour afficher les modifications
      } else {
        alert('Erreur : ' + data.message);
      }
    })
    .catch(error => {
      console.error('Erreur:', error);
      alert('Erreur lors de l\'enregistrement.');
    });
  });
</script>