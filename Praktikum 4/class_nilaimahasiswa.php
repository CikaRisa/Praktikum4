<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class NilaiMahasiswa {
    var $matakuliah;
    var $nilai;
    var $nim;

    function __construct($matkul,$nilai,$nim) {
        $this->matkul = $matkul; 
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function grade() {
        if($$this->nilai <= 35){
            return "E";
        }elseif($this->nilai <= 55){
            return "D";
        }elseif($this->nilai <= 69){
            return "C";
        }elseif($this->nilai <= 84){
            return "B";
        }elseif($this->nilai <= 100){
            return "A";
    }

    function hasil() {
        if ($this->nilai <= 56) {
            return "Tidak Lulus";
        }else{
            return "Lulus";
    }
}
?>

<form>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilih Matkul</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Data Warehouse">Data Warehouse</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Pemrograman Web">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
  $nim= $_POST ['nim'];
  $matkul= $_POST ['matkul'];
  $nilai= $_POST ['nilai'];
  $data = new NilaiMahasiswa( $matkul, $nilai, $nim);

  echo 'Matkul  : '. $data->matkul;
  echo 'NIM  : '. $data->nim;
  echo 'Nilai  : '. $data->nilai;

  echo 'Grade : '. $data->grade();
  echo 'Hasil :'. $data->hasil();
?>
</body>
</html>