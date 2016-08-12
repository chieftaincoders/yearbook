<!DOCTYPE html>
<html>
<head>
    <?php require_once("../../lib/head-utils.php");?>
    <link rel="stylesheet" href="lib/css/slideNav.css"/>
</head>
<body>
<?php require_once("../../lib/slideNav.php");?>
<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php require_once("../../lib/stickyFooter.php");?>
</body>
</html>