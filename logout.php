<?php
session_start();
session_destroy();
?>
<script>
    alert("Successfully log out!");
    window.location = "index.php";
</script>
