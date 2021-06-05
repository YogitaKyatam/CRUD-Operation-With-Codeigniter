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
    <h2><?php echo $title;?></h2>
    <br>
<?php echo validation_errors();?>
<?php echo form_open_multipart('crudcontroller/updateData');?>
<?php  foreach($userdata as $uservalue): ?>   
    
    <div class="form-group">
      <input type="hidden" class="form-control" name="txtID" value="<?php echo $uservalue['id']; ?>">
    </div>
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="txtName" value="<?php echo $uservalue['name']; ?>">
    </div>
    <br>
    <div class="form-group">
        <label>ZipCode</label>
      <input type="text" class="form-control" name="txtZipCode" value="<?php echo $uservalue['zipcode']; ?>">
    </div>
    <br>
    <div class="form-group">
        <label>Email</label>
      <input type="text" class="form-control" name="txtEmail" value="<?php echo $uservalue['email']; ?>">
    </div>
    <br>
    <div class="form-group">
        <label>User Name</label>
      <input type="text" class="form-control" name="txtUserName" value="<?php echo $uservalue['username']; ?>">
    </div>
    <br>
    <div class="form-group">
        <label>Password</label>
      <input type="text" class="form-control" name="txtPassword" value="<?php echo $uservalue['password']; ?>"> 
    </div>
    <br>
    <div class="form-group">
        <label>Upload Image</label>
      <input type="file" class="form-control" name="userfile">
    </div>
    <br>
    <?php   endforeach; ?>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</body>
</html>