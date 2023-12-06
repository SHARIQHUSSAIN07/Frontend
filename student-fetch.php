<?php
require("conn2.php");
$query="SELECT student.name,student.age,subject.subject,batch.batch
from student
INNER join subject
ON student.sub_id = subject.id
INNER JOIN batch
ON student.batch_id = batch.id";

$row = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,body{
            width: 100%;
            height: 100%;
        }
        
        #main{
            width: 100%;
            min-height: 100vh;
            padding:30px 60px;
        }

        .table-responsive{
            margin-top:30px;
        }

    </style>
</head>
<body>
    <div id="main">
        <h1>Students Record</h1>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>    
                <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Batch and Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                while ($data = mysqli_fetch_assoc($row)){
                    
                ?>
                    <tr class="">
                        <td><?php echo $data['name']?></td>
                        <td><?php echo $data['age']?></td>
                        <td><?php echo $data['subject']?></td>
                        <td><?php echo $data['batch']?></td>
                    </tr>
<?php
                }
?>
                </tbody>
            </table>
        </div>
        


    </div>
    

    <script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>