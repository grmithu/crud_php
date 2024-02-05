<?php include ("header.php"); ?>




<section class="forms">

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">

            <h3>Update User Information</h3>


            <?php
                if(isset($_GET['update'])){
                $the_user =  $_GET['update'];
                    
                $sql = "SELECT * FROM users WHERE id='the_user' ";
                    

                $userInfo = mysqli_query($db, $sql);

               
                while($row = mysqli_fetch_assoc($userInfo)){
                    $id = $row['id'];        
                    $firstname = $row['firstname'];        
                    $lastname = $row['lastname'];        
                    $username = $row['username'];        
                    $email = $row['email'];        
                    $phone = $row['phone'];        
                    $join_date = $row['join_date'];  
                       
                    ?>
                

                
              

                <form action="" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" autocomplete="off" required="required" value="<?php echo $firstname; ?>">
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" class="form-control" autocomplete="off" required="required" value="<?php echo $lastname; ?>">
                        </div>

                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" required="required" value="<?php echo $username; ?>">
                        </div>  


                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" autocomplete="off" required="required" value="<?php echo $email; ?>">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="off" required="required" >
                        </div>  


                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control" autocomplete="off" required="required" value="<?php echo $phone; ?>"> <br>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="userId" value="<?php echo $id; ?>">
                            <button type="submit" name="update" value="Save changes" class="btn btn-success" >Submit</button>
                        </div>

                </form>        

           

                <?php    
                }
            }             
            ?>

        <?php
            //Update user information
            if(isset($_POST['update'])){
                
                $id = $_POST['userId'];        
                $firstname = $_POST['firstname'];        
                $lastname = $_POST['lastname'];        
                $username = $_POST['username'];        
                $email = $_POST['email'];        
                $phone = $_POST['phone']; 

                $sql = "UPDATE users SET firstname='$fname', lastname='$lname', username='$username', email='$email', phone='$phone' WHERE id='$userId' ";
                $updateUserInfo = mysqli_query($db, $sql);

                if($updateUserInfo){
                    header("Location: allusers.php");
                }
                else{
                    die("Mysql Connection Error. ".mysqli_error($db));
                }



            }
        ?>


                 
            </div>
        </div>
    </div>
</section>





<?php include ("footer.php"); ?>





