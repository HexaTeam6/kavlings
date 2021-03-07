var KTBootstrapMaxlength = function () {

 // Private functions
 var demos = function () {
  // minimum setup
  $('#nik').maxlength({
   warningClass: "label label-danger label-rounded label-inline",
   limitReachedClass: "label label-success label-rounded label-inline"
  });
 }

 return {
  // public functions
  init: function() {
   demos();
  }
 };
}();

jQuery(document).ready(function() {
 KTBootstrapMaxlength.init();
});