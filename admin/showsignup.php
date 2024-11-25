<?php
require "header.php";
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Userrole</th>
            <th scope="col">User Image</th>
            <th scope="col">Date/Time</th>

            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "connection.php";
        $qry = "SELECT * FROM `admin`";
        $result = mysqli_query($conn, $qry);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $row['id'] ?>
                </td>
                <td>
                    <?php echo $row['firstname'] ?>
                </td>
                <td>
                    <?php echo $row['lastname'] ?>
                </td>
                <td>
                    <?php echo $row['email'] ?>
                </td>
                <td>
                    <?php echo $row['password'] ?>
                </td>
                <td>
                    <?php echo $row['userrole'] ?>
                </td>
                <td>
                    <?php
                    $imagePath = $row['userimage'];
                    if (!empty($imagePath)) {
                        echo '<img src="' . $imagePath . '" alt="User Image" style="max-width: 100px; max-height: 100px;">';
                    } else {
                        echo 'No Image';
                    }
                    ?>
                </td>
                <td>
                    <?php echo $row['registration_date'] ?>
                </td>

                <td style="display: flex; gap: 10px;">
                    <a title="Edit" style="margin-right: 10px;height: 100px;" href="updatesignup.php?updid=<?php echo $row['id'] ?>">
                        <i class="fas fa-pencil-alt"  ></i>
                    </a>
                    <a href="deletesignup.php?dltid=<?php echo $row['id'] ?>" title="Delete">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            <?php
        } ?>
    </tbody>
</table>

<?php
require "footer.php";
?>