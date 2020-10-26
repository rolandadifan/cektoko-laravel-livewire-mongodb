
// tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// data table
// $(document).ready( function () {
//     $('#myTable').DataTable();
// } );

// $('#modal-product').on('shown.bs.modal', function () {
//   $('#exampleModal').trigger('focus')
// })


window.on('ProductStored',()=>{
  $('#exampleModal').modal('hide');
})