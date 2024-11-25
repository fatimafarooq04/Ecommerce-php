<?php
require "header.php";
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">product type id</th>
            <th scope="col">product type name</th>
            <th scope="col">category</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "connection.php";
        $qry = "SELECT * FROM `product_type`";
        $result = mysqli_query($conn, $qry);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['product_type'] ?></td>

                <?php
                // Fetch category name based on cat_id
                $categoryId = $row['cat_id'];
                $categoryQuery = "SELECT `cat_name` FROM `categories` WHERE `cat_id` = $categoryId";
                $categoryResult = mysqli_query($conn, $categoryQuery);
                $categoryRow = mysqli_fetch_assoc($categoryResult);
                ?>
                <td><?php echo $categoryRow['cat_name'] ?></td>

                <td style="display: flex; gap: 10px;">
                    <a title="Edit" style="margin-right: 10px;" href="producttypeypdate.php?updid=<?php echo $row['id'] ?>">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="producttypedelete.php?dltid=<?php echo $row['id'] ?>" title="Delete">
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
