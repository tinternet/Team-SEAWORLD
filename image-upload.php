<?php
if((!isset($_SESSION['user']))) {
    header("Location:index.php");
}
?>
<?php include 'views/modals/file-upload.php'; ?>

<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#filesUpload">
    Upload files
</button>
