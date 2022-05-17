<?php
    $titulo = session('titulo');
    $message = session('message');
    $status = session('status');
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
 var status = "<?= $status ?>";
 
 swalWithBootstrapButtons.fire(
      titulo,
      message,
      status
    );
</script>
