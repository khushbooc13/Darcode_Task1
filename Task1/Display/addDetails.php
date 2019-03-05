<?php
    include("../Scripts/config.php");
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="" method="post">
            <h1 align="center" style="margin-top: 5%">Add Details</h1>
            <table align="center" style="margin-top:5%">
                <tr>
                    <td>Student ID </td>
                    <td><input type="text" name="studid" required></td>
                </tr>
                <tr>
                    <td>Student Name</td>
                    <td><input type="text" name="studname" required></td>
                </tr>
                <tr>
                    <td>Subject Name</td>
                    <td><select name="subjname">
                        <?php
                            $sql = mysqli_query($con, "SELECT subjectname From subjectdetails");
                            $row = mysqli_num_rows($sql);
                            echo "$row1";
                            while ($row = mysqli_fetch_array($sql)){
                                echo "<option value='". $row['subjectname'] ."'>" .$row['subjectname'] ."</option>" ;
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>