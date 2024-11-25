<?php
require "header.php";
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">News_id</th>
            <th scope="col">News_Name</th>
            <th scope="col">News_Mail</th>
            <th scope="col">News_time/date</th>

            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "connection.php";
        $qry = "SELECT * FROM `news`";
        $result = mysqli_query($conn, $qry);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $row['new_id'] ?>
                </td>
                <td>
                    <?php echo $row['new_name'] ?>
                </td>
                <td>
                    <?php echo $row['new_mail'] ?>
                </td>
                <td>
                    <?php echo $row['new_register'] ?>
                </td>
               
                <td style="display: flex; gap: 10px;">
                    <!-- <a title="Edit" style="margin-right: 10px;height: 100px;" href="productupdate.php?updid=<?php echo $row['log_id'] ?>">
                        <i class="fas fa-pencil-alt"  ></i>
                    </a> -->
                    <a href="deletenews.php?dltid=<?php echo $row['new_id'] ?>" title="Delete">
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