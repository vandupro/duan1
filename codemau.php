<?php
    // tạo 1 class abstract cho lớp hình
    abstract class Hinh {
        // khai báo phương thức tính chu vi
        abstract function tinhChuVi();
        // khai báo phương thức tính diện tích
        abstract function tinhDienTich();
    }

    // tạo class hình vuông, chữ nhật, tròn kế thừa class Hinh
    class hinhVuong extends Hinh {
        var $canh;
        // khởi tạo constructor
        function __construct($canh)
        {
            $this->canh = $canh;
        }
        // overwrite lại các method ở lóp cha
        function tinhChuVi()
        {
            return $this->canh * 4;
        }
        function tinhDienTich()
        {
            return $this->canh * $this->canh;
        }
    }
    class hinhCN extends Hinh {
        var $chieuDai;
        var $chieuRong;
        function __construct($dai, $rong)
        {
            $this->chieuDai = $dai;
            $this->chieuRong = $rong;
        }
        function tinhChuVi()
        {
            return ($this->chieuRong + $this->chieuRong) * 2;
        }
        function tinhDienTich()
        {
            return $this->chieuRong * $this->chieuDai;
        }
    }
    class hinhTron extends Hinh {
        var $banKinh;
        function __construct($r)
        {
            $this->banKinh = $r;
        }
        function tinhChuVi()
        {
            return 2*3.14*$this->banKinh;
        }
        function tinhDienTich()
        {
            return 3.14 * $this->banKinh * $this->banKinh / 4;
        }
    }

    // tạo đối tượng cho từng class
    $hinhVuongA = new hinhVuong(3);
    echo 'chu vi hình vuong cạnh 3: ' . $hinhVuongA->tinhChuVi();
    echo '<br> diện tích hình vuông cạnh 3: ' . $hinhVuongA->tinhDienTich();
    // các th còn lại tương tự
    // note: trong class abstract các properties k được để abstract, từ khóa var <=> public
?>