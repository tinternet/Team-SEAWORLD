<?php
include_once( 'views/partials/header.php' );

$albums = Album::getAllAlbums();
$rows = ceil( count($albums) / 3 );
$userId = $_SESSION['user']->getID();
?>
<main class="container">
    <div class="row">
        <div class="col-md-12">
            <section>
                <?php for ($row = 0, $pics = 0; $row < $rows; $row++): ?>
                <div class="row">
                    <?php for($col = 0; $col < 3 && $pics < count($albums); $col++, $pics++) :
                    	$albumId = $albums[$pics]->getId();
						$sourcePath = $albums[$pics]->getFirstPic($userId,$albumId);
                    	?>
                        <div class="col-md-4">
                            <figure>
                                <a href="./albums.php?id=">
                                    <img class="img-responsive" src=<?= $sourcePath ?>>
                                </a>
                                <figcaption class="text-center">Album Name</figcaption>
                            </figure>
                        </div>
                    <?php endfor; ?>
                </div>
                <?php endfor; ?>
            </section>
        </div>
    </div>
</main>
<?php include_once( 'views/partials/footer.php' );