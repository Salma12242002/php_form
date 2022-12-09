<form method="post" action="data_form.php"?>
Nama            :<br><input type="textbox" id="nama" name="nama"><br>
Tempat Lahir    :<br><input type="textbox" id="tempatlahir" name="tempatlahir"><br>
Tanggal Lahir   :<br><input type="date" id="tanggallahir" name="tanggallahir"><br>
Alamat          :<br><textarea rows="5" cols="60" id="alamat" name="alamat"></textarea><br>
Jenis Kelamin   :<br>
                    <select name="sex">
                    <option value="laki-laki">Laki-laki<br> </option>
                    <option value="perempuan">Perempuan<br> </option>
                    <select><br>
Agama           :<br>
                    <input type="radio"id="agama" name="agama" value="Islam">Islam<br>
                    <input type="radio"id="agama" name="agama" value="lainnya">Lainnya<br>
                    <br>
<input type="submit" name="submit" value="save"> <input type="reset" name="reset" value="cancel"
</form>