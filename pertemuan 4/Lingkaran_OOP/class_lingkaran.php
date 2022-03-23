<?php
class lingkaran {
    public $jari;
    const PHI = 3.14;
    function __construct ($jari) {
        $this->jari =$jari;
    }
    public function getLuas() {
        return self::PHI * $this->jari * $this->jari;
    }
    public function getKeliling() {
        return 2 * self::PHI *$this->jari;
    }
}
?>