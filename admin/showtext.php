<?php
require "header.php"
    ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Head Id</th>
            <th scope="col">Head 1</th>
            <th scope="col">Head Para</th>
            <th scope="col">Head 2</th>
            <th scope="col">Head Address</th>
            <th scope="col">Head Mail</th>
            <th scope="col">Head Phone</th>

            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            require "connection.php";
            $qry = "SELECT * FROM `contacttext`";
            $result = mysqli_query($conn, $qry);
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <th>
                    <?php echo $row['head_id'] ?>
                </th>
                <td>
                    <?php echo $row['head_1'] ?>
                </td>
                <td>
                    <?php echo $row['head_p'] ?>
                </td>
                <td>
                    <?php echo $row['head_2'] ?>
                </td>
                <td>
                    <?php echo $row['head_add'] ?>
                </td>
                <td>
                    <?php echo $row['head_mail'] ?>
                </td>
                <td>
                    <?php echo $row['head_num'] ?>
                </td>
                <td>
                    <a href="textupdate.php?updid=<?php echo $row['head_id'] ?>">
                        <button class="btn btn-outline-info">
                            update
                        </button>
                    </a>

                    <a href="textdelete.php?dltid=<?php echo $row['head_id'] ?>">
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