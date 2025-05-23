document.addEventListener('DOMContentLoaded', function () {
// Sélectionne tous les éléments éditables

//---------------------------------------------------------------
// Gestion de la modale d'édition des étapes
//---------------------------------------------------------------
     // Initialisation des étapes à partir du span .typed
    const typedSpan = document.querySelector('.typed[data-typed-items]');
    if (!typedSpan) return;

    let steps = typedSpan.getAttribute('data-typed-items').split(',').map(s => s.trim());

    function renderSteps() {
      const list = document.getElementById('accueil-steps-list');
      list.innerHTML = '';
      steps.forEach((step, idx) => {
        const div = document.createElement('div');
        div.className = 'input-group mb-2';
        div.innerHTML = `
          <input type="text" class="form-control" value="${step.replace(/"/g, '&quot;')}" data-idx="${idx}">
          <button type="button" class="btn btn-outline-danger btn-sm remove-step-btn" data-idx="${idx}" title="Supprimer"><i class="bi bi-trash"></i></button>
        `;
        list.appendChild(div);
      });
    }

    // Ouvre la modal et affiche les étapes actuelles depuis la base
    const editBtn = document.querySelector('[data-bs-target="#editAccueilContentModal"]');
    if (editBtn) {
      editBtn.addEventListener('click', function () {
        // Récupère la valeur depuis la base (attribut data-steps)
        let dbSteps = editBtn.getAttribute('data-steps') || '';
        steps = dbSteps.split(',').map(s => s.trim());
        renderSteps();
      });
    }

    // Ajouter une étape
    document.getElementById('add-step-btn').addEventListener('click', function () {
      steps.push('');
      renderSteps();
    });

    // Supprimer une étape
    document.getElementById('accueil-steps-list').addEventListener('click', function (e) {
      if (e.target.closest('.remove-step-btn')) {
        const idx = e.target.closest('.remove-step-btn').getAttribute('data-idx');
        steps.splice(idx, 1);
        renderSteps();
      }
    });

    // Modifier une étape
    document.getElementById('accueil-steps-list').addEventListener('input', function (e) {
      if (e.target.matches('input[type="text"]')) {
        const idx = e.target.getAttribute('data-idx');
        steps[idx] = e.target.value;
      }
    });

    // Envoi du formulaire
    document.getElementById('editAccueilContentForm').addEventListener('submit', function (e) {
      e.preventDefault();
      // Nettoyage des étapes vides
      const cleanSteps = steps.map(s => s.trim()).filter(Boolean);
      if (cleanSteps.length === 0) {
        showFlash('error', 'Veuillez saisir au moins une étape.');
        return;
      }
      // Envoi AJAX
      fetch('/' + window.WEBROOT2 + '/portfolios/ajaxUpdateField', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `id=1&field=content&value=${encodeURIComponent(cleanSteps.join(','))}&table=accueil`
      })
      .then(r => r.json())
      .then(data => {
        if (data.status === 'success') {
          typedSpan.setAttribute('data-typed-items', cleanSteps.join(','));
          typedSpan.textContent = cleanSteps[0];
          editBtn.setAttribute('data-steps', cleanSteps.join(','));
          showFlash('success', 'Texte d’animation mis à jour !');
          // Ferme la modal AVANT de recharger
          const modalEl = document.getElementById('editAccueilContentModal');
          let modalInstance = null;
          if (window.bootstrap && bootstrap.Modal && typeof bootstrap.Modal.getInstance === 'function') {
            modalInstance = bootstrap.Modal.getInstance(modalEl);
          }
          if (!modalInstance && window.bootstrap && bootstrap.Modal) {
            modalInstance = new bootstrap.Modal(modalEl);
          }
          if (modalInstance) modalInstance.hide();
          setTimeout(() => { location.reload(); }, 400);
        } else {
          showFlash('error', data.message || 'Erreur lors de la modification');
        }
    })
      .catch(() => showFlash('error', 'Erreur réseau'));
    });
    
//---------------------------------------------------------------
// Gestion de l'édition inline
//---------------------------------------------------------------
    // Sélectionne tous les éléments avec contenteditable, data-field, data-id
    const editables = document.querySelectorAll('[contenteditable][data-field][data-id]');

    editables.forEach(function (el) {
      el.addEventListener('blur', function () {
        const field = el.getAttribute('data-field');
        const id = el.getAttribute('data-id');
        const table = el.getAttribute('data-table');
        const value = el.textContent.trim();

        if (!field || !id || !table) {
          console.error('Données invalides');
          return;
        }

        fetch('/' + window.WEBROOT2 + '/portfolios/ajaxUpdateField', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: `id=${encodeURIComponent(id)}&field=${encodeURIComponent(field)}&value=${encodeURIComponent(value)}&table=${encodeURIComponent(table)}`
        })
        .then(response => response.json())
        .then(data => {
          if (data.status === 'success') {
            console.log('Mise à jour réussie');
          } else {
            console.error('Erreur : ' + data.message);
          }
        })
        .catch(error => {
          console.error('Erreur réseau', error);
        });
      });
    });
});

//---------------------------------------------------------------
// Gestion de la modale d'édition des statistiques
//---------------------------------------------------------------
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
    fetch('/' + window.WEBROOT2 + '/portfolio/ajaxSaveStat', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.status === 'success') {
        showFlash('success', data.message || 'Modification réussie');
      } else {
        showFlash('error', data.message || 'Erreur lors de la modification');
      }
    })
    .catch(error => {
      console.error('Erreur:', error);
      alert('Erreur lors de l\'enregistrement.');
    });
});