<!-- These Pasge use sweetalert one -->
<script src="js/alert.js"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status'];?>",
            text: "<?php echo $_SESSION['status_message'];?>",
            icon: "<?php echo $_SESSION['status_code'];?>",
            button: "OK!",
        });
    </script>
<?php
    unset($_SESSION['status']);
}
?>