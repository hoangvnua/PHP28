<?php
  class SinhVien
  {
    protected $hoTen;
    private $gioiTinh;
    private $ngaySinh;
    private $queQuan;

    //set
    function setHoTen($value){
      $this->hoTen = $value;
    }
    function setGioiTinh($value){
      $this->gioiTinh = $value;
    }
    function setNgaySinh($value){
      $this->ngaySinh = $value;
    }
    function setQueQuan($value){
      $this->queQuan = $value;
    }

    //get
    function getHoTen(){
      return $this->hoTen;
    }
    function getGioiTinh(){
      return $this->gioiTinh;
    }
    function getNgaySinh(){
      return $this->ngaySinh;
    }
    function getQueQuan(){
      return $this->queQuan;
    }

  }

  $SV = new SinhVien();
  $SV->setHoTen('Nguyễn Văn Hoàng');
  $SV->setGioiTinh('Nam');
  $SV->setNgaySinh('17/10/2000');
  $SV->setQueQuan('Bắc Ninh');

  echo "Họ Tên: ".$SV->getHoTen();
  echo "<br>Giới tính: ".$SV->getGioiTinh();
  echo "<br>Ngày sinh: ".$SV->getNgaySinh();
  echo "<br>Quê quán: ".$SV->getQueQuan();

 ?>
