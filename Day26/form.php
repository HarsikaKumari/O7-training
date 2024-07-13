<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Uploading practice</title>
</head>
<body>
    <form action="./insertion.php" method="post" enctype="multipart/form-data">
        <label style="padding: 10px;" for="name">Name</label>
        <input type="text" placeholder="Name" name="name" id="name"> <br>
        <label style="padding: 10px;" for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password"> <br>
        <label style="padding: 10px;" for="image">Image</label>
        <input type="file" name="image" id="image"> <br>
        <Button type="submit">Submit</Button>
    </form>
</body>
</html>
