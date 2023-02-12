<?php

$sql = "SELECT * from categories";
$result = $conn->query($sql);

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="?module=category&action=category_form" class="btn btn-sm btn-outline-primary">Create Category</a>

            </div>

        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            
            </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) { ?>

                <?php
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td></td>
                    </tr>

                <?php
                } ?>

            <?php
            } ?>
            </tbody>
        </table>
    </div>
</main>