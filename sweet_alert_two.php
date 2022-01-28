<script src="js/alert.js"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
    <script>
        const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: '<?php echo $_SESSION['status_code']; ?>',
  title: '<?php echo $_SESSION['status']; ?>'
})
    </script>
<?php
    unset($_SESSION['status']);
}
?>





