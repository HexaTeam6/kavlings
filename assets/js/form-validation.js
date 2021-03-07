FormValidation.formValidation(
 document.getElementById('kt_form_1'),
 {
  fields: {
   nik: {
    validators: {
     notEmpty: {
      message: 'NIK belum diisi'
     },
     stringLength: {
      min:16,
      max:16,
      message: 'Nomor NIK harus 16 digit'
     }
    }
   },

   nama_pelanggan: {
    validators: {
     notEmpty: {
      message: 'Nama Pelanggan belum diisi'
     }
    }
   },

   alamat: {
    validators: {
     notEmpty: {
      message: 'Alamat Pelanggan belum diisi'
     }
    }
   },

   phone: {
    validators: {
     notEmpty: {
      message: 'Nomor telepon belum diisi'
     }
    }
   },

  },

  plugins: {
   trigger: new FormValidation.plugins.Trigger(),
   // Bootstrap Framework Integration
   bootstrap: new FormValidation.plugins.Bootstrap(),
   // Validate fields when clicking the Submit button
   submitButton: new FormValidation.plugins.SubmitButton(),
            // Submit the form when all fields are valid
   defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
  }
 }
);