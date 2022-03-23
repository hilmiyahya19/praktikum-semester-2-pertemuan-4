<?php
    class persegi_panjang {
        public $panjang;
        public $lebar;
        function __construct ($panjang, $lebar) {
            $this->panjang =$panjang;
            $this->lebar =$lebar;
    }
    public function getLuas() {
        return $this->panjang * $this->lebar;
    }
    public function getKeliling() {
        return ($this->panjang + $this->lebar) * 2;
    }
}
?>