<html>
    <body>

        <?php
            $fName = $_REQUEST["firstName"];
            $lName = $_REQUEST["lastName"];
            $uName = $_REQUEST["username"];
            $psw = $_REQUEST["password"];
            $gender = $_REQUEST["gender"];
            $aYear = $_REQUEST["academicYear"];
            $email = $_REQUEST["email"];
            $phone = $_REQUEST["phone"];
        ?>

        <table border="1">

            <tr>
                <td>First Name</td>
                <td><?php echo $fName ?></td>
            </tr>

            <tr>
                <td>Last Name</td>
                <td><?php echo $lName ?></td>
            </tr>

            <tr>
                <td>Userame</td>
                <td><?php echo $uName ?></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><?php echo $psw ?></td>
            </tr>

            <tr>
                <td>Gender</td>
                <td><?php echo $gender ?></td>
            </tr>

            <tr>
                <td>Academic Year</td>
                <td><?php echo $aYear ?></td>
            </tr>

            <tr>
                <td>Eamil</td>
                <td><?php echo $email ?></td>
            </tr>

            <tr>
                <td>Phone No</td>
                <td><?php echo $phone ?></td>
            </tr>

        </table>

    </body>
</html>