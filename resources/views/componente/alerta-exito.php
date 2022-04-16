<?php
    $titulo = session('titulo');
    $message = session('message');
?>
<script>
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

 var titulo = "<?= $titulo ?>";
 var message = "<?= $message ?>";
 
 swalWithBootstrapButtons.fire(
      titulo,
      message,
      'success'
    );
</script>
