

<?php
$JS_file = $_SERVER['DOCUMENT_ROOT'] . "/spiffy/admin/assets/js/" . CURRENT_PAGE . ".js";

if (file_exists($JS_file)) {
    echo "<script src='" . ADMIN_URL . "assets/js/" . CURRENT_PAGE . ".js?ver=".FILE_VERSION."'></script>";
}
?>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="<?=ADMIN_URL?>assets/js/main.js?ver=<?=FILE_VERSION?>"></script>
</body>
</html>