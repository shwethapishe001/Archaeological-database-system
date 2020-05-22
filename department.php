<html>

   <head>
      <title>Add New Record in MySQL Database</title>
       <link rel="stylesheet"href="dep.css">
   </head>

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
               $Deptid= addslashes ($_POST['Deptid']);
               $DName= addslashes ($_POST['DName']);
                $Address= addslashes ($_POST['Address']);

            }else {
               $Deptid = $_POST['Deptid'];
               $DName= $_POST['DName'];
               $Address= $_POST['Address'];

            }



            $sql = "INSERT INTO department". "(Deptid,DName,
            Address,time ) ". "VALUES('$Deptid','$DName','$Address', NOW())";

            mysqli_select_db($conn,'archeaology');
            $retval = mysqli_query($conn,$sql );

            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }

            echo "Entered data successfully\n";

            mysqli_close($conn);
         }else {
            ?>

               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1"
                     cellpadding = "2">

                     <tr>
                        <td width = "100">Deptid</td>
                        <td><input name = "Deptid" type= "text"
                           id = "Deptid"></td>
                     </tr>

                     <tr>
                        <td width = "100">DName</td>
                        <td><input name = "DName" type = "text"
                           id = "Dname"></td>
                     </tr>

                     <tr>
                        <td width = "100">Address</td>
                        <td><input name = "Address" type = "text"
                           id = "Address"></td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add"
                              value = "Add department">
                        </td>
                     </tr>

                  </table>
               </form>

            <?php
         }
      ?>

   </body>
</html>
