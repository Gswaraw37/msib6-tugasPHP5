<?php
    class Mahasiswa{
        public $nim;
        public $nama;
        public $kuliah;
        public $matkul;
        public $nilai;
        public $status;
        public $grade;
        public $predikat;

        public function __construct($nim, $nama, $kuliah, $matkul, $nilai){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->kuliah = $kuliah;
            $this->matkul = $matkul;
            $this->nilai = $nilai;
            $this->status();
            $this->grade();
            $this->predikat();
        }

        public function status(){
            $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Gagal';
            return $this->status;
        }

        public function grade(){
            if ($this->nilai >= 85) {
                $this->grade = 'A';
            } elseif ($this->nilai >= 75) {
                $this->grade = 'B';
            } elseif ($this->nilai >= 60) {
                $this->grade = 'C';
            } elseif ($this->nilai >= 40) {
                $this->grade = 'D';
            } else {
                $this->grade = 'E';
            }
            return $this->grade;
        }

        public function predikat(){
            switch ($this->grade) {
                case 'A':
                    $this->predikat = 'Sangat Memuaskan';
                    break;
                case 'B':
                    $this->predikat = 'Memuaskan';
                    break;
                case 'C':
                    $this->predikat = 'Cukup';
                    break;
                case 'D':
                    $this->predikat = 'Kurang';
                    break;
                default:
                    $this->predikat = 'Sangat Kurang';
                    break;
            }
            return $this->predikat;
        }
    }
?>