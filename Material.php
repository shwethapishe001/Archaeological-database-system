<html>

   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
       <link rel="stylesheet" href="mat.css">
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
               $Material_Id = addslashes ($_POST['Material_Id']);
                $Material_name = addslashes ($_POST['Material_name']);
               $Color = addslashes ($_POST['Color']);

               $Shape = addslashes ($_POST['Shape']);
               $Weight = addslashes ($_POST['Weight']);
               $Deptid = addslashes ($_POST['Deptid']);


            }else {
              $Material_Id = $_POST['Material_Id'];
                $Material_name = $_POST['Material_name'];
              $Color = $_POST['Color'];

              $Shape = $_POST['Shape'];
              $Weight = $_POST['Weight'];
              $Deptid = $_POST['Deptid'];

            }



            $sql = "INSERT INTO Material ". "(Material_Id,Material_name,Color,
               Shape,Weight,Deptid,time) ". "VALUES('$Material_Id','$Material_name','$Color','$Shape','$Weight','$Deptid',NOW())";

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
                        <td width = "100">Material_Id</td>
                        <td><input name = "Material_Id" type = "text"
                           id = "Material_Id"></td>
                     </tr>

                     <tr>
                        <td width = "100">Material_name</td>
                        <td><input name = "Material_name" type = "text"
                           id = "Material_name"></td>
                     </tr>

                     <tr>
                        <td width = "100">Color</td>
                        <td><input name = "Color" type = "text"
                           id = "Color"></td>
                     </tr>



                     <tr>
                        <td width = "100">Shape</td>
                        <td><input name = "Shape" type = "text"
                           id = "Shape"></td>
                     </tr>

                     <tr>
                        <td width = "100">Weight</td>
                        <td><input name = "Weight" type = "text"
                           id = "Weight"></td>
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
                              value = "Add Material">
                        </td>
                     </tr>

                  </table>
               </form>

            <?php
         }
      ?>

   </body>
</html>
