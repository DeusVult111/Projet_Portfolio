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
// Gestion de l'envoi du formulaire stats (création ou modification)
document.getElementById('statsForm').addEventListener('submit', function(event) {
  event.preventDefault();

  const id = document.getElementById('itemId').value;
  const icon = document.getElementById('icon').value;
  const value = document.getElementById('value').value;
  const title = document.getElementById('title').value;
  const description = document.getElementById('description').value;

  // Construction des paramètres pour l'appel AJAX
  let params = [
    id ? `id=${encodeURIComponent(id)}` : '',
    `field=icon&value=${encodeURIComponent(icon)}&table=stat`,
  ];

  // Pour la création, il faut envoyer tous les champs un par un
  const fields = [
    { field: 'icon', value: icon },
    { field: 'value', value: value },
    { field: 'title', value: title },
    { field: 'description', value: description }
  ];

  // Fonction pour envoyer chaque champ (création ou modification)
  function sendField(field, value, callback) {
    let body = (id ? `id=${encodeURIComponent(id)}&` : '') +
      `field=${encodeURIComponent(field)}&value=${encodeURIComponent(value)}&table=stat`;
    fetch('/' + window.WEBROOT2 + '/portfolios/ajaxUpdateField', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: body
    })
    .then(response => response.json())
    .then(callback)
    .catch(error => {
      showFlash('error', 'Erreur lors de la sauvegarde');
    });
  }

  // Si modification (id présent), on envoie chaque champ un par un
  if (id) {
    let done = 0;
    fields.forEach(({ field, value }) => {
      sendField(field, value, function(data) {
        done++;
        if (done === fields.length) {
          if (data.status === 'success') {
            showFlash('success', 'Modification réussie');
            setTimeout(() => location.reload(), 600);
          } else {
            showFlash('error', data.message || 'Erreur lors de la modification');
          }
        }
      });
    });
  } else {
    // Création : on envoie le premier champ, puis on récupère l'id créé et on enchaîne les autres
    sendField('icon', icon, function(data) {
      if (data.status === 'success') {
        // On suppose que le backend retourne l'id du nouvel item (à adapter côté PHP si besoin)
        let newId = data.id;
        let restFields = fields.slice(1);
        let done = 0;
        restFields.forEach(({ field, value }) => {
          let body = `id=${encodeURIComponent(newId)}&field=${encodeURIComponent(field)}&value=${encodeURIComponent(value)}&table=stat`;
          fetch('/' + window.WEBROOT2 + '/portfolios/ajaxUpdateField', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: body
          })
          .then(response => response.json())
          .then(function(data2) {
            done++;
            if (done === restFields.length) {
              if (data2.status === 'success') {
                showFlash('success', 'Création réussie');
                setTimeout(() => location.reload(), 600);
              } else {
                showFlash('error', data2.message || 'Erreur lors de la création');
              }
            }
          });
        });
      } else {
        showFlash('error', data.message || 'Erreur lors de la création');
      }
    });
  }
});