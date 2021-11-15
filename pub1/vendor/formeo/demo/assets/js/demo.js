'use strict';


let container = document.querySelector('#build-form');
let renderContainer = document.querySelector('.render-form');
let formeoOpts1 = {
  container: container,
  i18n: {
    preloaded: {
      'ru-RU': {'row.makeInputGroup': ' Repeatable Region'}
    }
  },
  // allowEdit: false,
  controls: {
    sortable: false,
    groupOrder: [
      'common',
      'html',
    ],
    elements: [
//     {
//   tag: 'input',
//   attrs: {
//     type: 'radio',
//     required: false
//   },
//   config: {
//     label: 'Radio Group',
//     disabledAttrs: ['type']
//   },
//   meta: {
//     group: 'common',
//     icon: 'radio-group',
//     id: 'radio'
//   },
//   options: (() => {
//     let options = [1, 2, 3].map(i => {
//       return {
//         label: 'Radio ' + i,
//         value: 'radio-' + i,
//         selected: false
//       };
//     });
//     let otherOption = {
//         label: 'Other',
//         value: 'other',
//         selected: false
//       };
//     options.push(otherOption);
//     return options;
//   })(),
//   action: {
//     mouseover: evt => {
//       console.log(evt);
//       const {target} = evt;
//       if (target.value === 'other') {
//         const otherInput = target.cloneNode(true);
//         otherInput.type = 'text';
//         target.parentElement.appendChild(otherInput);
//       }
//     }
//   }
// },

    ],
    elementOrder: {
      common: [
      'button',
      'checkbox',
      'date-input',
      'hidden',
      'upload',
      'number',
      'radio',
      'select',
      'text-input',
      'textarea',
      ]
    }
  },
  events: {
    // onUpdate: console.log,
    // onSave: console.log
  },
  svgSprite: 'https://draggable.github.io/formeo/assets/img/formeo-sprite.svg',
  // debug: true,
  sessionStorage: true,
  editPanelOrder: ['attrs', 'options']
};

const formeo = new window.Formeo({
    container: container,
    i18n: {
        preloaded: {
            'ru-RU': {'row.makeInputGroup': ' Repeatable Region'}
        }
    }
},$('#fjson').val());

let editing = true;

// let debugWrap = document.getElementById('debug-wrap');
// let debugBtn = document.getElementById('debug-demo');
let localeSelect = document.getElementById('locale');
let toggleEdit = document.getElementById('renderForm');
let viewDataBtn = document.getElementById('viewData');
let resetDemo = document.getElementById('reloadBtn');

// debugBtn.onclick = function() {
//   debugWrap.classList.toggle('open');
// };

resetDemo.onclick = function() {
  window.sessionStorage.removeItem('formData');
  location.reload();
};

toggleEdit.onclick = evt => {
  document.body.classList.toggle('form-rendered', editing);
  if (editing) {
    formeo.render(renderContainer) ;
    evt.target.innerHTML = 'Edit Form';

$('#ffffff').html(formeo.formData);

 var   dataout={
      id:$('#widget_id').val(),
        json_form:$('.render-form').html(),
        html_form:formeo.formData,
        name:$('#name_form').val(),
        widget_fid:$('#widget_form_id').val()

    }
      $.ajax({
          type: "POST",
          url: '/widget/doform/safe',
          data:dataout,
          success: function (html1) {


                  $.jGrowl('Изменения успешно сохранены', {
                      header: 'Успешно!',
                      theme: 'bg-success'
                  });

                  $('#widget_form_id').val(html1)

          }
      })

  } else {
    evt.target.innerHTML = 'Render Form';
  }

  return editing = !editing;
};

viewDataBtn.onclick = evt => {
  console.log(formeo.formData);
};


let formeoLocale = window.sessionStorage.getItem('formeo-locale');
if (formeoLocale) {
  localeSelect.value = formeoLocale;
}
//formeo.i18n.setLang('ru-RU');
localeSelect.addEventListener('change', function() {
  window.sessionStorage.setItem('formeo-locale', localeSelect.value);

});

document.getElementById('control-filter')
.addEventListener('input', function(e) {
  formeo.controls.actions.filter(e.target.value);
});


