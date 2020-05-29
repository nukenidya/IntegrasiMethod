<html>
<body>
    <?php
require_once './controller/controller.php';

?>

    <form action="">
        id :   <input type="text" name="id"><br>
        nama :   <input type="text" name="nama"><br>
        deskripsi :  <input type="text" name="deskripsi"> <br>
        <input type='submit' name='simpan' value='simpan'>
        <p>Create = Isi nama dan deskripsi
        <p>Update = Isi id dan Ubah nama dan deskripsi
        <p>Delete = Hapus Id
    </form>
</body>
</html>