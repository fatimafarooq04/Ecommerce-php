<?php
require "header.php"
    ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Contact Id</th>
            <th scope="col">Contact Name</th>
            <th scope="col">Contact Mail</th>
            <th scope="col">Contact Subject</th>
            <th scope="col">Contact Message</th>

            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            require "connection.php";
            $qry = "SELECT * FROM `feedback`";
            $result = mysqli_query($conn, $qry);
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <th>
                    <?php echo $row['con_id'] ?>
                </th>
                <td>
                    <?php echo $row['con_name'] ?>
                </td>
                <td>
                    <?php echo $row['con_mail'] ?>
                </td>
                <td>
                    <?php echo $row['con_sub'] ?>
                </td>
                <td>
                    <?php echo $row['con_msg'] ?>
                </td>
                
                <td>
                    <!-- <a href="contactupdate.php?updid=<?php echo $row['con_id'] ?>">
                        <button class="btn btn-outline-info">
                            update
                        </button>
                    </a> -->

                    <a href="contactdelete.php?dltid=<?php echo $row['con_id'] ?>">
                        <button class="btn btn-outline-danger">
                            delete
                        </button>
                    </a>
                </td>

            </tr>
            <?php
            } ?>
        </tr>

    </tbody>
</table>
<?php
require "footer.php"
    ?>