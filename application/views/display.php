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
        <h3><?php echo $title;?></h3>

    <table class="table table-strip"> 
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Zip Code</th>
            <th>Email</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <tbody>
            <?php  foreach($users as $uservalue): ?>            
            <tr>
                <td><img src="../assets/images/<?php echo $uservalue['post_image']; ?>" height="100px"></td>
                <td><?php echo $uservalue['name']; ?></td>
                <td><?php echo $uservalue['zipcode']; ?></td>
                <td><?php echo $uservalue['email']; ?></td>
                <td><?php echo $uservalue['username']; ?> </td>
                <td><?php echo $uservalue['password']; ?></td>
                <td><a href="<?php echo base_url('maincontroller/update/'.$uservalue["id"]);?>" class="btn btn-primary">Edit</a>&nbsp;&nbsp;
                <a href="<?php echo base_url('maincontroller/delete/'.$uservalue["id"]);?>" class="btn btn-danger">Delete</a> </td>
            </tr>   
            <?php   endforeach; ?>
        </tbody>
    </table>
    </div>
</body>
</html>