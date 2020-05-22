<html>

   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
   <link rel="stylesheet" href="cos.css">

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
               $Bill_id= addslashes ($_POST['Bill_id']);

                $Cost= addslashes ($_POST['Cost']);
                $Material_Id= addslashes ($_POST['Material_Id']);


            }
            else {
               $Bill_id = $_POST['Bill_id'];

               $Cost= $_POST['Cost'];
               $Material_Id= $_POST['Material_Id'];
            }



            $sql = "INSERT INTO cost". "(Bill_id,Cost,Material_Id,time) ". "VALUES('$Bill_id','$Cost','$Material_Id',NOW())";

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
                  <table width = "400" border = "0" cellspacing = "1"
                     cellpadding = "2" >

                     <tr>
                        <td width = "100">Bill_id</td>
                        <td><input name = "Bill_id" type= "text"
                           id = "Bill_id"></td>
                     </tr>



                     <tr>
                        <td width = "100">Cost</td>
                        <td><input name = "Cost" type = "text"
                           id = "Cost"></td>
                     </tr>

                     <tr>
                        <td width = "100">Material_Id</td>
                        <td><input name = "Material_Id" type = "text"
                           id = "Material_Id"></td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add"
                              value = "Add cost">
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
