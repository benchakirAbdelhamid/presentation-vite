<h1>Add Customer</h1>

<form action="" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="id" placeholder="id"><br>
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="gender" placeholder="gender"><br>
    <input type="text" name="address" placeholder="address"><br>
    <button type="submit">Add Customer</button>
</form><?php /**PATH C:\xampp\htdocs\tp laravel methode mysql\resources\views/addCustomer.blade.php ENDPATH**/ ?>