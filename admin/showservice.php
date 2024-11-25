<?php
require "header.php";
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Service Id</th>
            <th scope="col">Service 1</th>
            <th scope="col">Service 2</th>
            <th scope="col">Service 3</th>
            <th scope="col">Service 4</th>

            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "connection.php";
        $qry = "SELECT * FROM `homeservice`";
        $result = mysqli_query($conn, $qry);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $row['s_id'] ?>
                </td>

                <td>
                    <?php echo $row['s_quality'] ?>
                </td>
                <td>
                    <?php echo $row['s_shipping'] ?>
                </td>
                <td>
                    <?php echo $row['s_day'] ?>
                </td>
               
                <td>
                    <?php echo $row['s_support'] ?>
                </td>

                <td style="display: flex; gap: 10px;">
                    <a title="Edit" style="margin-right: 10px;height: 100px;" href="updateservice.php?updid=<?php echo $row['s_id'] ?>">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="deleteservice.php?dltid=<?php echo $row['s_id'] ?>" title="Delete">
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