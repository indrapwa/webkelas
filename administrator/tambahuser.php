<h2 style="font-size: 14px;font-weight: bold;text-decoration: none;background: url('image/module-header-left-bg.gif') no-repeat scroll left top transparent; margin: 0;padding: 10px; margin-top: 10px; ">
<span>Tambah User</span>
</h2>
<form action="administrator/aksi.php?aksi=tambahuser" method="post" enctype="multipart/form-data">
<table class="table-modul" width="100%" cellspacing="0">
  <tr>
    <td width="15%">Nama</td>
    <td align="center" width="5%">:</td>
    <td width="80%"><input type="text" name="nama" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td align="center">:</td>
    <td><textarea name="alamat" class="input-textfield" cols="45" rows="5" style="width: 100%;"></textarea></td>
  </tr>
  <tr>
    <td width="15%">Telepon</td>
    <td align="center" width="5%">:</td>
    <td width="80%"><input type="text" name="telepon" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td>Username</td>
    <td align="center">:</td>
    <td><input type="text" name="username" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td width="15%">Password</td>
    <td align="center" width="5%">:</td>
    <td width="80%"><input type="text" name="password" class="input-field" style="width: 100%; height:25px;"></td>
  </tr>
  <tr>
    <td width="15%">Level</td>
    <td align="center" width="5%">:</td>
    <td width="80%"><input type="radio" name="level" value="1">Administrator <input type="radio" name="level" value="2">Anggota</td>
  </tr>
  <tr>
    <td colspan="3">
      <input type="submit" name="simpan" class="button" value="Simpan">
      <a href="javascript: history.back()"><input type="button" name="batal" class="button" value="Batal"></a>
    </td>
    </tr>
</table>
</form>
