<?php include ("header.php"); ?>




<section class="forms">

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">

            <h3>User Registration Form</h3>

            <form action="" method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" autocomplete="off" required="required">
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" autocomplete="off" required="required">
                </div>

                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="uname" class="form-control" autocomplete="off" required="required">
                </div>  


                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" autocomplete="off" required="required">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="off" required="required">
                </div>  


                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="phone" class="form-control" autocomplete="off" required="required"> <br>
                </div>

                <div class="form-group">
                    <button type="submit" name="register" value="Register Member" class="btn btn-success">Submit</button>
                </div>

            </form>

         
        <?php
            if(isset($_POST['register'])){
                $fname = $_POST['fname'];            
                $lname = $_POST['lname'];            
                $uname = $_POST['uname'];                      
                $email = $_POST['email'];
                $password = $_POST['password'];              
                $phone = $_POST['phone'];   


            //Password encryption        
            $hassedPass = sha1($password);
                
            // how to insert a query for database     
            $query = " INSERT INTO users(firstname, lastname, username, email, password, phone, join_date) VALUES('$fname', '$lname', '$uname','$email', '$hassedPass',  '$phone', now() )";

            $registerUser = mysqli_query($db, $query);

            if($registerUser){
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



