<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style type="text/css">
        *{
            margin:0;
            padding: 0;
            font-family: 'Lato', sans-serif;
        }
        
    
        nav{ /*this is the navigation bar*/
            width: 100%;
            background-color: rgba(0,0,0,0.7);
            overflow:hidden;
        }
        nav ul{
            list-style-type: none; /*this is to remove the bullet pts*/
            float: right;
            margin-top:7px;
        }
        nav ul li{
            display:inline-block; /*elements will be shown in a single line*/

        }
        nav ul li a{ /*styling anchors*/
            text-decoration:none;
            padding: 20px 35px;
            text-align:center ;
            color: #fff;
            display:block;
            font-weight: 700;
        }
    
   </style>
</head>

<body>
<nav>
            <!-- <div class="logo">
                <img src="logo.png" width="50" height="50">
            </div> -->
            <ul>
             
                <li><a href="index.php">Register </a></li>
                <li><a href="index.php">Login </a></li>
            </ul>
        </nav>

	<div class="container">
        <h2 class="text-center pt-4">User Details</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">name</th>
                <th class="text-center">email</th>
                
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';

            $sql ="select * from login";
            
            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['id']; ?></td>
            <td class="py-2"><?php echo $rows['name']; ?></td>
            <td class="py-2"><?php echo $rows['email']; ?></td>
          
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>