
//---------------------------------------------------------------
// Gestion ouverture de la modale 
//---------------------------------------------------------------
function openModal(modalId) {
  const modalEl = document.getElementById(modalId);
  let modalInstance = null;
  if (window.bootstrap && bootstrap.Modal && typeof bootstrap.Modal.getInstance === 'function') {
    modalInstance = bootstrap.Modal.getInstance(modalEl);
  }
  if (!modalInstance && window.bootstrap && bootstrap.Modal) {
    modalInstance = new bootstrap.Modal(modalEl);
  }
  modalInstance.show();
}

//---------------------------------------------------------------
// Gestion stats
//---------------------------------------------------------------
window.editStat = function(id, icon, value, title, description) {
  openModal('statsModal');
  document.getElementById('itemId').value = id;
  document.getElementById('icon').value = icon;
  document.getElementById('value').value = value;
  document.getElementById('title').value = title;
  document.getElementById('description').value = description;
};

const addStatBtn = document.getElementById('add-stat-btn');
if (addStatBtn) {
    addStatBtn.addEventListener('click', function () {
      document.getElementById('itemId').value = '';
      document.getElementById('icon').value = '';
      document.getElementById('value').value = '';
      document.getElementById('title').value = '';
      document.getElementById('description').value = '';
      openModal('statsModal');
    });
  }

window.deleteItem = function(id) {
  if (!confirm('Voulez-vous vraiment supprimer cet item ?')) return;
  fetch('/' + window.WEBROOT2 + '/portfolios/ajaxDeleteItem', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `id=${encodeURIComponent(id)}&table=stat`
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      showFlash('success', 'Suppression réussie');
      setTimeout(() => location.reload(), 600);
    } else {
      showFlash('error', data.message || 'Erreur lors de la suppression');
    }
  })
  .catch(() => showFlash('error', 'Erreur réseau'));
}

//---------------------------------------------------------------
// Gestion des compétences
//---------------------------------------------------------------

window.editCompetenceItem = function(id, name, value) {
  openModal('competenceModal');
  document.getElementById('competenceItemId').value = id;
  document.getElementById('competenceName').value = name;
  document.getElementById('competenceValue').value = value;
};

const addCompetenceBtn = document.getElementById('add-competence-btn');
if (addCompetenceBtn) {
  addCompetenceBtn.addEventListener('click', function () {
    document.getElementById('competenceItemId').value = '';
    document.getElementById('competenceName').value = '';
    document.getElementById('competenceValue').value = '';
    openModal('competenceModal');
  });
}
window.deleteCompetenceItem = function(id) {
  if (!confirm('Voulez-vous vraiment supprimer cette compétence ?')) return;
  fetch('/' + window.WEBROOT2 + '/portfolios/ajaxDeleteItem', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `id=${encodeURIComponent(id)}&table=competences_item`
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      showFlash('success', 'Suppression réussie');
      setTimeout(() => location.reload(), 600);
    } else {
      showFlash('error', data.message || 'Erreur lors de la suppression');
    }
  })
  .catch(() => showFlash('error', 'Erreur réseau'));
}

//---------------------------------------------------------------
// Gestion des boutons "supprimer" de parcours de formation et expérience professionnelle
//---------------------------------------------------------------
// Ouvre la modale pour édition/ajout formation
window.deleteParcoursFormation = function(id) {
  if (!confirm('Voulez-vous vraiment supprimer cette formation ?')) return;
  fetch('/' + window.WEBROOT2 + '/portfolios/ajaxDeleteItem', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `id=${encodeURIComponent(id)}&table=parcours_formation`
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      showFlash('success', 'Suppression réussie');
      setTimeout(() => location.reload(), 600);
    } else {
      showFlash('error', data.message || 'Erreur lors de la suppression');
    }
  })
  .catch(() => showFlash('error', 'Erreur réseau'));
};
window.deleteParcoursXppro = function(id) {
  if (!confirm('Voulez-vous vraiment supprimer cette expérience ?')) return;
  fetch('/' + window.WEBROOT2 + '/portfolios/ajaxDeleteItem', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `id=${encodeURIComponent(id)}&table=parcours_xppro`
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      showFlash('success', 'Suppression réussie');
      setTimeout(() => location.reload(), 600);
    } else {
      showFlash('error', data.message || 'Erreur lors de la suppression');
    }
  })
  .catch(() => showFlash('error', 'Erreur réseau'));
};

//---------------------------------------------------------------
// Gestion des boutons "supprimer" de portfolio
//---------------------------------------------------------------
// Suppression
window.deletePortfolioItem = function(id) {
  if (!confirm('Voulez-vous vraiment supprimer ce projet ?')) return;
  fetch('/' + window.WEBROOT2 + '/portfolios/ajaxDeleteItem', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `id=${encodeURIComponent(id)}&table=portfolio_item`
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      showFlash('success', 'Suppression réussie');
      setTimeout(() => location.reload(), 600);
    } else {
      showFlash('error', data.message || 'Erreur lors de la suppression');
    }
  })
  .catch(() => showFlash('error', 'Erreur réseau'));
};

//---------------------------------------------------------------

document.addEventListener('DOMContentLoaded', function () {

//---------------------------------------------------------------
// Gestion édition inline (contenteditable)
//---------------------------------------------------------------
  // Sélectionne tous les éléments éditables inline
  document.querySelectorAll('[contenteditable][data-field][data-id][data-table]').forEach(function (el) {
    // Sauvegarde la valeur initiale
    el.dataset.oldValue = el.innerText;

    // Sauvegarde au blur ou sur Entrée
    function saveInlineEdit(e) {
      // Sur Enter, empêche le retour à la ligne
      if (e.type === 'keydown' && e.key !== 'Enter') return;
      if (e.type === 'keydown') e.preventDefault();

      const value = el.innerText.trim();
      const oldValue = el.dataset.oldValue;
      if (value === oldValue) return; // Rien à faire

      el.dataset.oldValue = value; // Met à jour la valeur initiale

      const id = el.getAttribute('data-id');
      const field = el.getAttribute('data-field');
      const table = el.getAttribute('data-table');

      fetch('/' + window.WEBROOT2 + '/portfolios/ajaxUpdateField', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `id=${encodeURIComponent(id)}&field=${encodeURIComponent(field)}&value=${encodeURIComponent(value)}&table=${encodeURIComponent(table)}`
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          showFlash('success', 'Modification enregistrée');
        } else {
          showFlash('error', data.message || 'Erreur lors de la modification');
        }
      })
      .catch(() => showFlash('error', 'Erreur réseau'));
    }

    // Sauvegarde au blur
    el.addEventListener('blur', saveInlineEdit);

    // Sauvegarde sur Entrée
    el.addEventListener('keydown', function (e) {
      if (e.key === 'Enter') {
        saveInlineEdit(e);
        el.blur();
      }
    });
  });
//---------------------------------------------------------------
// Gestion de la modale d'édition des étapes (Accueil)
//---------------------------------------------------------------
const typedSpan = document.querySelector('.typed[data-typed-items]');
if (typedSpan) {
  // Initialisation des étapes à partir du span .typed
    const typedSpan = document.querySelector('.typed[data-typed-items]');

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
        openModal('editAccueilContentModal'); // Ouvre la modale proprement
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
}

//---------------------------------------------------------------
// Gestion de la modale d'édition des statistiques
//---------------------------------------------------------------


// Gestion de l'envoi du formulaire stats (création ou modification)
const statsForm = document.getElementById('statsForm');
if (statsForm) {
  statsForm.addEventListener('submit', function(event) {
    event.preventDefault();

    const id = document.getElementById('itemId').value;
    const icon = document.getElementById('icon').value;
    const value = document.getElementById('value').value;
    const title = document.getElementById('title').value;
    const description = document.getElementById('description').value;

    const fields = [
      { field: 'icon', value: icon },
      { field: 'value', value: value },
      { field: 'title', value: title },
      { field: 'description', value: description }
    ];

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

    // Ici commence la logique d'envoi (modification/création)
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
          let newId = data.id; // Utilisable pour la suite
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
}

//---------------------------------------------------------------
// Gestion de la modale d'édition des compétences
//---------------------------------------------------------------

  const competenceForm = document.getElementById('competenceForm');
  if (competenceForm) {
    competenceForm.addEventListener('submit', function(event) {
      event.preventDefault();
      const id = document.getElementById('competenceItemId').value;
      const name = document.getElementById('competenceName').value;
      const value = document.getElementById('competenceValue').value;

      function sendFields(data, callback) {
        let body = Object.entries(data)
          .map(([key, val]) => `${encodeURIComponent(key)}=${encodeURIComponent(val)}`)
          .join('&');
        body += '&table=competences_item';
        fetch('/' + window.WEBROOT2 + '/portfolios/ajaxUpdateField', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: body
        })
        .then(response => response.json())
        .then(callback)
        .catch(() => {
          showFlash('error', 'Erreur lors de la sauvegarde');
        });
      }

      if (id) {
        // Modification : envoie les deux champs en une seule fois
        sendFields({ id, name, value }, function(data) {
          if (data.status === 'success') {
            showFlash('success', 'Modification réussie');
            setTimeout(() => location.reload(), 100);
          } else {
            showFlash('error', data.message || 'Erreur lors de la modification');
          }
        });
      } else {
        // Création : envoie les deux champs en une seule fois
        sendFields({ name, value }, function(data) {
          if (data.status === 'success') {
            showFlash('success', 'Création réussie');
            setTimeout(() => location.reload(), 100);
          } else {
            showFlash('error', data.message || 'Erreur lors de la création');
          }
        });
      }
    });
  }

  // Boutons d'ajout
document.getElementById('add-parcours-formation-btn')?.addEventListener('click', function() {
  document.getElementById('parcoursItemId').value = '';
  document.getElementById('parcoursTitle').value = '';
  document.getElementById('parcoursDate').value = '';
  document.getElementById('parcoursContent').value = '';
  document.getElementById('parcoursTable').value = 'parcours_formation';
  openModal('parcoursModal');
});
document.getElementById('add-parcours-xppro-btn')?.addEventListener('click', function() {
  document.getElementById('parcoursItemId').value = '';
  document.getElementById('parcoursTitle').value = '';
  document.getElementById('parcoursDate').value = '';
  document.getElementById('parcoursContent').value = '';
  document.getElementById('parcoursTable').value = 'parcours_xppro';
  openModal('parcoursModal');
});

//---------------------------------------------------------------
// Gestion de la modale d'édition des parcours de formation et expérience professionnelle
//---------------------------------------------------------------
// Gestion du submit
const parcoursForm = document.getElementById('parcoursForm');
if (parcoursForm) {
  parcoursForm.addEventListener('submit', function(event) {
    event.preventDefault();
    const id = document.getElementById('parcoursItemId').value;
    const title = document.getElementById('parcoursTitle').value;
    const date_range = document.getElementById('parcoursDate').value;
    const content = document.getElementById('parcoursContent').value;
    const table = document.getElementById('parcoursTable').value;

    function sendFields(data, callback) {
      let body = Object.entries(data)
        .map(([key, val]) => `${encodeURIComponent(key)}=${encodeURIComponent(val)}`)
        .join('&');
      body += `&table=${encodeURIComponent(table)}`;
      fetch('/' + window.WEBROOT2 + '/portfolios/ajaxUpdateField', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: body
      })
      .then(response => response.json())
      .then(callback)
      .catch(() => {
        showFlash('error', 'Erreur lors de la sauvegarde');
      });
    }

    if (id) {
      sendFields({ id, title, date_range, content }, function(data) {
        if (data.status === 'success') {
          showFlash('success', 'Modification réussie');
          setTimeout(() => location.reload(), 100);
        } else {
          showFlash('error', data.message || 'Erreur lors de la modification');
        }
      });
    } else {
      sendFields({ title, date_range, content }, function(data) {
        if (data.status === 'success') {
          showFlash('success', 'Création réussie');
          setTimeout(() => location.reload(), 100);
        } else {
          showFlash('error', data.message || 'Erreur lors de la création');
        }
      });
    }
  });
}

//---------------------------------------------------------------
// Gestion des boutons "Modifier" pour parcours de formation et expérience professionnelle
//---------------------------------------------------------------
// Gestion des boutons "Modifier" pour expérience pro
document.querySelectorAll('.edit-xppro-btn').forEach(function(btn) {
  btn.addEventListener('click', function() {
    document.getElementById('parcoursItemId').value = btn.dataset.id;
    document.getElementById('parcoursTitle').value = btn.dataset.title;
    document.getElementById('parcoursDate').value = btn.dataset.date_range;
    document.getElementById('parcoursContent').value = btn.dataset.content;
    document.getElementById('parcoursTable').value = 'parcours_xppro';
    openModal('parcoursModal');
  });
});

// Gestion des boutons "Modifier" pour formation
document.querySelectorAll('.edit-formation-btn').forEach(function(btn) {
  btn.addEventListener('click', function() {
    document.getElementById('parcoursItemId').value = btn.dataset.id;
    document.getElementById('parcoursTitle').value = btn.dataset.title;
    document.getElementById('parcoursDate').value = btn.dataset.date_range;
    document.getElementById('parcoursContent').value = btn.dataset.content;
    document.getElementById('parcoursTable').value = 'parcours_formation';
    openModal('parcoursModal');
  });
});

//---------------------------------------------------------------
// Gestion modification/ajout portfolio
//---------------------------------------------------------------

document.getElementById('add-portfolio-btn')?.addEventListener('click', function() {
  fetch('/' + window.WEBROOT2 + '/portfolios/ajaxUpdateField', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'table=portfolio_item'
      + '&title=' + encodeURIComponent('-- Titre du projet --')
      + '&content=' + encodeURIComponent('-- Description du projet --')
      + '&technology=' + encodeURIComponent('-- Champs à remplir --')
      + '&year=0000'
      + '&model=' + encodeURIComponent('-- Champs à remplir --')
      + '&link=' + encodeURIComponent('-- Champs à remplir --')
      + '&category=php'
      + '&img_link=' + encodeURIComponent('webroot/img/portfolio/photo-vide.png')
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success' && data.id) {
      window.location.href = '/' + WEBROOT2 + '/portfolios/detail/' + data.id;
    } else {
      showFlash('error', data.message || 'Erreur lors de la création');
    }
  });
});

//----------------------------------------------------------------
// Gestion de la modale d'édition des images du portfolio
//----------------------------------------------------------------
// Ouvre la modale
document.getElementById('edit-images-btn')?.addEventListener('click', function() {
  openModal('editImagesModal');
});

// Ajout image
document.getElementById('addImageForm')?.addEventListener('submit', function(e) {
  e.preventDefault();
  const formData = new FormData(this);
  fetch('/' + window.WEBROOT2 + '/portfolios/ajaxAddPortfolioImage', {
    method: 'POST',
    body: formData
  })
  .then(r => r.json())
  .then(data => {
    if (data.status === 'success') location.reload();
    else showFlash('error', data.message || 'Erreur lors de l\'ajout');
  });
});

// Suppression image
document.querySelectorAll('.delete-image-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    if (!confirm('Supprimer cette image ?')) return;
    fetch('/' + window.WEBROOT2 + '/portfolios/ajaxDeletePortfolioImage', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: 'image_id=' + encodeURIComponent(this.dataset.id)
    })
    .then(r => r.json())
    .then(data => {
      if (data.status === 'success') location.reload();
      else showFlash('error', data.message || 'Erreur lors de la suppression');
    });
  });
});


});
