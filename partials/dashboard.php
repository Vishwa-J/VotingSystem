<?php
session_start();
if(!isset($_SESSION['id'])){
     header('location:../');
}
$data=$_SESSION['data'];

if($_SESSION['status']==1){
    $status='<b class="text-success">Voted</b>';
}
else{
    $status='<b class="text-danger">Not Voted</b>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-light text-dark px-3 mx-2">Back</button></a>
        <a href="logout.php"><button class="btn btn-light text-dark px-3 mx-2">Logout</button></a>
        <h1 class="my-4">Voting System</h1>

        <div class="row my-5">
            <div class="col-md-7">
                        <?php
                if(isset($_SESSION['groups'])){
                    $groups=$_SESSION['groups'];
                    for($i=0;$i<count($groups);$i++){
                        ?>
                        <!-- groups -->
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../uploads/<?php echo $groups[$i]['photo'] ?>" alt="Group image" class="img-fluid" style="max-width: 150px; max-height: 150px;">
                            </div>
                            <div class="col-md-8">
                                <strong class="text-light h5">Group Name:</strong>
                                <?php echo $groups[$i]['username'] ?>
                                <br>
                                <strong class="text-light h5">Votes:</strong>
                                <?php echo $groups[$i]['votes'] ?>
                                <br><br>
                            </div>
                        </div>
                        <form action="../actions/voting.php" method="POST">
                            <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes'] ?>">
                            <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id'] ?>">

                            <?php
                              if($_SESSION['status']==1){
                                ?>
                                <button class="bg-success my-4 text-white px-3">voted</button>
                                <?php
                              }
                                else{
                                    ?>
                                    <button class="bg-danger my-3 text-white px-3" type="submit">vote</button>
                        <hr>   
                                <?php
                                }
                              }  
                            ?>
                        </form>
                    <?php

                    }else{
                        ?>
                        <div class="container">
                            <p>No groups to display</p>
                        </div>
                        <?php
                    }
                ?>
               
            </div>
           
            <div class="col-md-5">
                <!-- user profile -->
                 <img src="../uploads/<?php echo $data['photo']?>" alt="User image" class="img-fluid" style="max-width: 150px; max-height: 150px;">
                 <br>
                 <br>
                 <strong class="text-light h5">Name: </strong>
                 <?php echo $data['username'] ?><br><br>
                 <strong class="text-light h5">Mobile: </strong>
                 <?php echo $data['mobile'] ?><br><br>
                 <strong class="text-light h5">Status: </strong>
                 <?php echo $status ?><br><br>
            </div>
            
        </div>
    </div>
</body>
</html>