<h1>here is login page</h1>
<form action="users" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="username" placeholder="user name"><br>
    <input type="password" name="userpassword" placeholder="password"><br>
    <button type="submit">Login</button>
</form><?php /**PATH C:\xampp\htdocs\example-app\resources\views/login.blade.php ENDPATH**/ ?>