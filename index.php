<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Upload Form</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }
     
    </style>
</head>
<body>

<div class="container mt-5">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileInput" class="form-label">Select Image Files to Upload:</label>
        <input type="file" class="form-control" id="fileInput" name="files[]" multiple required>
        <button type="submit" class="btn btn-primary mt-3" name="submit">UPLOAD</button>
    </form>
</div>


<footer class="mt-5 text-center">
    <p>Developed by <a href="https://megatirfan.com" target="_blank">Megat Irfan</a></p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
