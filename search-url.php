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

<div class="container">

    <h1> Select image to upload:</h1>
    <p>Bootstrap navigation tab test</p>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#Home" data-toggle="tab">Home</a></li>
        <li><a href="#Product" data-toggle="tab">Product</a></li>

    </ul>


    <div class="tab-content">
        <div id="Home" class="tab-pane fade in active">
            <form action="async/upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="text" name="fileName">
                <input type="text" name="fileName">
                <input type="hidden" name="fileType" value="ddddd">
                <input type="password" name="fileSize">
                <input type="submit" value="Upload Image" name="submit">
            </form>
        </div>
        <div id="Product" class="tab-pane fade">
            <h3>Product</h3>
            <p>Advanced extended doubtful he he blessing together. Introduced far law gay considered frequently entreaties difficulty. Eat him four are rich nor calm. By an packages rejoiced exercise. To ought on am marry rooms doubt music. Mention entered an through company as. Up arrived no painful between. It declared is prospect an insisted pleasure. </p>
        </div>


    </div>

</div>

</body>
</html>