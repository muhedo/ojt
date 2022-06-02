// Edit cluster
$(function () {
  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": ["copy", "excel", "pdf", "print", "colvis"]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});

function edit_cluster(id_cluster, nama) {
  $("#nm_cluster").val(nama);
  $("#kat_cluster").val(kategori);
  $("#id_cluster").val(id_cluster);
}

function clear_cluster() {

}