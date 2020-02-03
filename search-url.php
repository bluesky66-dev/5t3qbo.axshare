<html lang="en">
<head>
    <meta charset="etf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/boostrap.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>
<body>
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Select file to upload:</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>

    </div>
    <div class="modal-body ">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#Home" data-toggle="tab">Home</a></li>
            <li><a href="#Product" data-toggle="tab">Product</a></li>

        </ul>
        <div class="tab-content">
            <div id="Home" class="tab-pane fade in active">
                <form id="upload" class="form-group" action="async/upload.php" method="POST" enctype="multipart/form-data">

                    <input class="form-control" type="text" name="fileName">
                    <!--                <input type="text" name="fileName">-->
                    <!--                <input type="hidden" name="fileType" value="ddddd">-->
                    <!--                <input type="password" name="fileSize">-->
                    <input id="upload" type="submit"  value="Upload Image" name="submit">
                </form>
            </div>
            <div id="Product" class="tab-pane fade">
                <input  type="file" name="fileToUpload" id="fileToUpload" style="margin: 30px 0px 20px 0px;"> </p>
            </div>
        </div>




    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
</body>
</html>