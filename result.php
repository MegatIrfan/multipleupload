<?php
include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <!-- Bootstrap CSS -->
    
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
         body {
            font-family: 'DM Sans', sans-serif;
        }
        
        .table-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mt-5">Image Gallery</h2>

    <div class="table-container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query = $db->query("SELECT * FROM images ORDER BY id DESC");

            if ($query->num_rows > 0) {
                $counter = 1;
                while ($row = $query->fetch_assoc()) {
                    $imageURL = 'uploads/' . $row["file_name"];
                    ?>
                    <tr>
                        <th scope="row"><?php echo $counter; ?></th>
                        <td><img src="<?php echo $imageURL; ?>" class="img-thumbnail" alt=""></td>
                    </tr>
                    <?php
                    $counter++;
                }
            } else {
                ?>
                <tr>
                    <td colspan="2" class="text-center">No image(s) found...</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
