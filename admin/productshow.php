<?php
require "header.php";
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">productid</th>
            <th scope="col">productname</th>
            <th scope="col">productprice</th>
            <th scope="col">productimages</th>
            <th scope="col">producttype</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "connection.php";
        $qry = "SELECT p.*, pt.product_type FROM `product_items` p
                JOIN `product_type` pt ON p.product_type_id = pt.id";
        $result = mysqli_query($conn, $qry);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td>
                    <?php
                    $imagePath = $row['image'];
                    if (!empty($imagePath)) {
                        echo '<img src="' . $imagePath . '" alt="Product Image" style="max-width: 100px; max-height: 100px;">';
                    } else {
                        echo 'No Image';
                    }
                    ?>
                </td>
                <td><?php echo $row['product_type'] ?></td>
                <td style="display: flex; gap: 10px;">
                    <a title="Edit" style="margin-right: 10px;height: 100px;" href="productupdate.php?updid=<?php echo $row['id'] ?>">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="productdelete.php?dltid=<?php echo $row['id'] ?>" title="Delete">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                    <a href="#" title="View Description" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $row['id'] ?>">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal_<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">product Description</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-dialog modal-dialog-centered">
                            <?php echo $row['description'] ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        } ?>
    </tbody>
</table>

<?php
require "footer.php";
?>
