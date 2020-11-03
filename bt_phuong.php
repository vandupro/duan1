<?php
  class Hinh 
  {
      protected function tinhDienTich()
      {
      }
      protected function tinhchuvi()
      {
      }
  }
  class HinhVuong extends Hinh {
    private $canh;

    public function setCanh($canh){
        $this->canh = $canh;
    }

     public function getCanh(){
        return $this->canh;
     }

     public  function tinhDienTich()
     {
        return pow($this->canh, 2);
     }
     public function tinhchuvi()
     {
         return (($this->canh*4));
     }
}

class HinhTron extends Hinh {
    private $r;

    public function getR()
    {
        return $this->r;
    }


    public function setR($r)
    {
        $this->r = $r;
    }

    public function tinhDienTich()
    {
        return (pow($this->r, 2) * pi());
    }
    public function tinhchuvi()
    {
        return (($this->r*2*3.14));
    }
}

class HinhCn extends Hinh {
    private $a,$b;

    public function getCn()
    {
        return $this->a & $this->b;
    }


    public function setCn($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function tinhDienTich()
    {
        return ($this->a*$this->b);
    }
    public function tinhchuvi()
    {
        return (($this->a+$this->b)*2);
    }
}


$hinhvuong = new HinhVuong();

$hinhvuong->setCanh(4);
echo 'chu vi vuong :' .$hinhvuong->tinhchuvi()."<br>";
echo'dien tich vuong :' . $hinhvuong->tinhDienTich();
echo '<br>';
echo '<br>';
$ht = new HinhTron();
$ht->setR(3);
echo 'chu vi Tron :' .$ht->tinhchuvi()."<br>";
echo 'dien tich tron :' .$ht->tinhDienTich();
echo '<br>';
echo '<br>';
$cn = new HinhCn();
$cn->setCn(5,2);
echo 'chu vi Cn :' .$cn->tinhchuvi()."<br>";
echo 'dien tich Cn :' .$cn->tinhDienTich();
//output:
//16
//28.274333882308
?>