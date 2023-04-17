<!DOCTYPE html>
<html">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>

    <body>
        <div class="container pt-5">
            <h1>Customer Data Insert</h1>
            <form action="dataInsert" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name : </label>
                    <input name="name" id="name" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Password : </label>
                    <input name="phone" id="phone" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address : </label>
                    <input name="address" id="address" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age : </label>
                    <input name="age" id="age" type="number" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="submit">
            </form>

        </div>
    </body>

    </html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/Home.blade.php ENDPATH**/ ?>