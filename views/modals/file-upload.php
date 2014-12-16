<?php include_once 'image-upload.php'; ?>
<div class="modal fade" id="filesUpload" tabindex="-1" role="dialog" aria-labelledby="FilesUpload" aria-hidden="true">
    <form id="uploadForm" action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Upload images</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div>
                        <input type="submit" class="btn btn-danger btn-tg pull-left" name="submit"/>
                    </div>
                    <div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>