<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Abhaya Libre' rel='stylesheet'>
</head>
<style>
body {
    font-family: 'abhaya libre';font-size: 22px;
}
</style>
<body>
<div class="container">
<div class="row d-flex justify-content-center align-items-center ">
<div class="col-sm-1 col-md-4 col-lg-1 col-xl-4">
    <form class="" action="send.php" method="post" enctype="multipart/form-data">
        <label><b> To Email</b></label> 
        <input type="email" class="form-control form-control-sm" name="email" value="">
        <!-- <label><b>Subject</b></label>
         <input type="text" class="form-control form-control-sm" name="subject" value=""> -->
        <label>Message</label>
        <input type="text" class="form-control form-control-sm" name="message" value="">
        <label><b>Document</b></label>
        <input name="file" multiple="multiple" class="form-control form-control-sm" type="file" id="file"><br>
        <div class="text-center">
        <button class="btn btn-primary btn-sm" type="submit" name="send">Send a Mail</button>
    </div>
    </form>
  </div>
</div>
</div>
</body>
</html>