<?php
require "header.php";
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Card Id</th>
            <th scope="col">Card Img</th>
            <th scope="col">Card Text</th>
            <th scope="col">Card Price</th>
            <th scope="col">Card Desc</th>

            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "connection.php";
        $qry = "SELECT * FROM `h_card`";
        $result = mysqli_query($conn, $qry);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $row['c_id'] ?>
                </td>

                <td>
                    <?php
                    $imagePath = $row['c_img'];
                    if (!empty($imagePath)) {
                        echo '<img src="' . $imagePath . '" alt="Product Image" style="max-width: 100px; max-height: 100px;">';
                    } else {
                        echo 'No Image';
                    }
                    ?>
                </td>

                <td>
                    <?php echo $row['c_text'] ?>
                </td>
                <td>
                    <?php echo $row['c_price'] ?>
                </td>
                <td>
                    <?php echo $row['c_desc'] ?>
                </td>


                <td style="display: flex; gap: 10px;">
                    <a title="Edit" style="margin-right: 10px;height: 100px;" href="updatecard.php?updid=<?php echo $row['c_id'] ?>">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="deletecard.php?dltid=<?php echo $row['c_id'] ?>" title="Delete">
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