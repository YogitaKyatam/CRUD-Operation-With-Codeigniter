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
<?php echo form_open('crudcontroller/deleteData');?>
<table class="table table-strip"> 
        <tr>
            <th>Name</th>
            <th>Zip Code</th>
            <th>Email</th>
            <th>User Name</th>
            <th>Password</th> 
        </tr>
        <tbody>
            <?php  foreach($userdata as $uservalue): ?>            
            <tr>
                <td><?php echo $uservalue['name']; ?></td>
                <td><?php echo $uservalue['zipcode']; ?></td>
                <td><?php echo $uservalue['email']; ?></td>
                <td><?php echo $uservalue['username']; ?> </td>
                <td><?php echo $uservalue['password']; ?></td>
            </tr>   
            <?php  endforeach; ?>
       
    
    <div class="form-group">
      <input type="hidden" class="form-control" name="txtID" value="<?php echo $uservalue['id']; ?>">
    </div>
    <button type="submit" class="btn btn-danger">Delete</button>
    </tbody>
    </table>   

</div>
</body>
</html>