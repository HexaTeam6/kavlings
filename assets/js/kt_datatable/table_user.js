'use strict';
// Class definition

var KTDatatableHtmlTableDemo = function() {
  // Private functions

  // demo initializer
  var demo = function() {

    var datatable = $('#kt_datatable').KTDatatable({
      data: {
        saveState: {cookie: false},
      },
      search: {
        input: $('#kt_datatable_search_query'),
        key: 'generalSearch',
      },
      layout: {
        class: 'datatable-bordered',
      },
      columns: [
        {
          field: 'Opsi',
          type: '',
          textAlign: 'center',
        },
        {
          field: 'OrderDate',
          type: 'date',
          format: 'YYYY-MM-DD',
        }, {
          field: 'Role',
          title: 'Role',
          autoHide: false,
          // callback function support for column rendering
          template: function(row) {
            var status = {
              1: {
                'title': 'Super Admin',
                'class': ' label-light-info',
              },
              2: {
                'title': 'Admin',
                'class': ' label-light-success',
              },
            };
            return '<span class="label font-weight-bold label-lg' + status[row.Role].class + ' label-inline">' + status[row.Role].title + '</span>';
          },
        }, {
          field: 'Status',
          title: 'Status',
          autoHide: false,
          // callback function support for column rendering
          template: function(row) {
            var status = {
              1: {
                'title': 'Aktif',
                'state': 'primary',
              },
              0: {
                'title': 'Tidak Aktif',
                'state': 'danger',
              },
            };
            return '<span class="label label-' + status[row.Status].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' + status[row.Status].state + '">' + status[row.Status].title + '</span>';
          },
        },
      ],
    });

    $('#kt_datatable_search_role').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'Role');
    });

    $('#kt_datatable_search_status').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'Status');
    });

    $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

  };

  return {
    // Public functions
    init: function() {
      // init dmeo
      demo();
    },
  };
}();

jQuery(document).ready(function() {
  KTDatatableHtmlTableDemo.init();
});
