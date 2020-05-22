<html>

   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
     <link rel="stylesheet" href="dis.css">

   <body>


      <?php



         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

            if(! $conn ) {
               die('Could not connect: ' . mysqli_error($conn));
            }

            if(! get_magic_quotes_gpc() ) {
               $Discoverer_Id= addslashes ($_POST['Discoverer_Id']);
               $Discoverer_Name= addslashes ($_POST['Discoverer_Name']);
                $Phone= addslashes ($_POST['Phone']);
                $Address= addslashes ($_POST['Address']);
                $Date_of_birth= addslashes ($_POST['Date_of_birth']);
                 $Deptid= addslashes ($_POST['Deptid']);


            }else {
               $Discoverer_Id = $_POST['Discoverer_Id'];
               $Discoverer_Name= $_POST['Discoverer_Name'];
               $Phone= $_POST['Phone'];
               $Address = $_POST['Address'];
               $Date_of_birth= $_POST['Date_of_birth'];
               $Deptid= $_POST['Deptid'];

            }



            $sql = "INSERT INTO discoverers". "(Discoverer_Id,Discoverer_Name,Phone,Address,Date_of_birth,Deptid,time) ". "VALUES('$Discoverer_Id','$Discoverer_Name','$Phone','$Address','$Date_of_birth','$Deptid', NOW())";

            mysqli_select_db($conn,'archeaology');
            $retval = mysqli_query($conn,$sql );

            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }

            echo "Entered data successfully\n";

            mysqli_close($conn);
         }else {
            ?>
              <div class="container">
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "800" border = "0" cellspacing = "2"
                     cellpadding = "2">

                     <tr>
                        <td width = "100">Discoverer_Id</td>
                        <td><input name = "Discoverer_Id" type= "text"
                           id = "Discoverer_Id"></td>
                     </tr>

                     <tr>
                        <td width = "100">Discoverer_Name</td>
                        <td><input name ="Discoverer_Name" type = "text"
                           id = "Discoverer_Name"></td>
                     </tr>

                     <tr>
                        <td width = "100">Phone</td>
                        <td><input name = "Phone" type = "text"
                           id = "Phone"></td>
                     </tr>

                     <tr>
                        <td width = "100">Address</td>
                        <td><input name = "Address" type = "text"
                           id = "Address"></td>
                     </tr>

                     <tr>
                        <td width = "100">Date_of_birth</td>
                        <td><input name = "Date_of_birth" type = "text"
                           id = "Date_of_birth"></td>
                     </tr>



                     <tr>
                        <td width = "100">Deptid</td>
                        <td><input name = "Deptid" type = "text"
                           id = "Deptid"></td>
                     </tr>





                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add"
                              value = "Add discoverers">
                        </td>
                     </tr>

                  </table>
               </form>
             </div>

            <?php
         }
      ?>

   </body>
</html>
