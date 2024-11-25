<?php
require "header.php"
    ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">productid</th>
            <th scope="col">productname</th>


            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            require "connection.php";
            $qry = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $qry);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <th>
                    <?php echo $row['cat_id'] ?>
                </th>
                <td>
                    <?php echo $row['cat_name'] ?>
                </td>
                <td style="display: flex; gap: 10px;">
                    <a title="Edit" style="margin-right: 10px;" href="categoryupdate.php?updid=<?php echo $row['cat_id'] ?>"> 
                    <i class="fas fa-pencil-alt"></i>
                </a>
                    <a href="categorydelete.php?dltid=<?php echo $row['cat_id'] ?>" title="Delete"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr>

            </tr>
            <?php
            } ?>
        </tr>

    </tbody>
</table>
<?php
require "footer.php"
    ?>