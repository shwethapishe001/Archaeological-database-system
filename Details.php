<html>
 <head>
      <title>Add New Record in MySQL Database</title>
   </head>
   <link rel="stylesheet"href="deta.css">

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

               $Material_Id= addslashes ($_POST['Material_Id']);
                $Material_name= addslashes ($_POST['Material_name']);
                $Made_of= addslashes ($_POST['Made_of']);
                $Design= addslashes ($_POST['Design']);
                $Place= addslashes ($_POST['Place']);
                 $Estimated_year= addslashes ($_POST['Estimated_year']);


            }else {
               $Material_Id = $_POST['Material_Id'];
              $Material_name= $_POST['Material_name'];
               $Made_of= $_POST['Made_of'];
               $Design = $_POST['Design'];
               $Place= $_POST['Place'];
               $Estimated_year= $_POST['Estimated_year'];

            }



            $sql = "INSERT INTO details". "(Material_Id,Material_name,Made_of,Design,Place,Estimated_year,time) ". "VALUES('$Material_Id','$Material_name','$Made_of','$Design','$Place','$Estimated_year',NOW())";

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
                        <td width = "100">Made_of</td>
                        <td><input name = "Made_of" type = "text"
                           id = "Made_of"></td>
                     </tr>

                     <tr>
                        <td width = "100">Design</td>
                        <td><input name = "Design" type = "text"
                           id = "Design"></td>
                     </tr>

                     <tr>
                        <td width = "100">Place</td>
                        <td><input name = "Place" type = "text"
                           id = "Place"></td>
                     </tr>

                     <tr>
                        <td width = "100">Estimated_year</td>
                        <td><input name = "Estimated_year" type = "text"
                           id = "Estimated_year"></td>
                     </tr>





                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add"
                              value = "Add details">
                        </td>
                     </tr>

                  </table>
               </form>

            <?php
         }
      ?>

   </body>
</html>
