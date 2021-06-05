<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
       
        <h2 class="text-center"><?php echo $title;?></h2>

<?php echo validation_errors();?>
<?php echo form_open_multipart('crudcontroller/insertData');?>

    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="txtName">
    </div>
    <br>
    <div class="form-group">
        <label>ZipCode</label>
      <input type="text" class="form-control" name="txtZipCode">
    </div>
    <br>
    <div class="form-group">
        <label>Email</label>
      <input type="text" class="form-control" name="txtEmail">
    </div>
    <br>
    <div class="form-group">
        <label>User Name</label>
      <input type="text" class="form-control" name="txtUserName">
    </div>
    <br>
    <div class="form-group">
        <label>Password</label>
      <input type="text" class="form-control" name="txtPassword">
    </div>
    <br>
    <div class="form-group">
        <label>Upload Image</label>
      <input type="file" class="form-control" name="userfile">
    </div>
    <br>
    
    <button type="submit" class="btn btn-primary">Submit</button>
 
<?php echo form_close();?>
    </div>
</body>
</html>