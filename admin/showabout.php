<?php
require "header.php"
    ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">About Id</th>
            <th scope="col">About Head 1</th>
            <th scope="col">About Para 1</th>
            <th scope="col">About Head 2</th>
            <th scope="col">About Para 2</th>
            <th scope="col">About Point 1</th>
            <th scope="col">About Point 2</th>
            <th scope="col">About Point 3</th>
            <th scope="col">About Point 4</th>
            <th scope="col">About Head 3</th>
            <th scope="col">About Para 3</th>

            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            require "connection.php";
            $qry = "SELECT * FROM `abouttext`";
            $result = mysqli_query($conn, $qry);
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <th>
                    <?php echo $row['ab_id'] ?>
                </th>
                <td>
                    <?php echo $row['ab_head1'] ?>
                </td>
                <td>
                    <?php echo $row['ab_para1'] ?>
                </td>
                <td>
                    <?php echo $row['ab_head2'] ?>
                </td>
                <td>
                    <?php echo $row['ab_para2'] ?>
                </td>
                <td>
                    <?php echo $row['ab_point1'] ?>
                </td>
                <td>
                    <?php echo $row['ab_point2'] ?>
                </td>

                <td>
                    <?php echo $row['ab_point3'] ?>
                </td>
                <td>
                    <?php echo $row['ab_point4'] ?>
                </td>
                <td>
                    <?php echo $row['ab_head3'] ?>
                </td>
                <td>
                    <?php echo $row['ab_para3'] ?>
                </td>
                <td>
                    <a href="updateabout.php?updid=<?php echo $row['ab_id'] ?>">
                        <button class="btn btn-outline-info">
                            update
                        </button>
                    </a>

                    <a href="deleteabout.php?dltid=<?php echo $row['ab_id'] ?>">
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