<?php
    class Account {
        protected $no;
        private $saldo_awal;

        //constructor class
        function __construct($no, $saldo_awal) {
            $this->no = $no;
            $this->saldo = $saldo_awal;
        }
        public function deposit($uang) {
            $this->saldo = $this->saldo + $uang;
        }
        public function withdraw($uang) {
            $this->saldo = $this->saldo - $uang;
        }
        public function cetak() {
            echo 'Nomor Account : '.$this->no;
            echo '<br/>Saldo : '.$this->saldo;
        }
    }

    class AccountBank extends Account {

        public $customer;

        function __construct($no, $saldo_awal, $customer) {
            parent::__construct($no, $saldo_awal);
            $this->customer = $customer;
        }

        public function transfer($ab_tujuan, $uang) {
            $this->withdraw($uang);
            $ab_tujuan->deposit($uang);
            $this->biayaTransfer();
        }

        private function biayaTransfer() {
            $this->withdraw(6000);
        }

        public function cetak() {
            parent::cetak();
            echo '<br/>Nama : '.$this->customer;
        }
        
    }

    $ac1 = new Account(123, 5000000);
    $ac2 = new Account(456, 3000000);

    echo $ac1->cetak();
    echo '<hr>';
    echo $ac2->cetak();

    $ab1 = new AccountBank(123, 5000000, 'Ian');
    $ab2 = new AccountBank(456, 9000000, 'Anna');

    echo '<hr/>';
    echo $ab1->cetak();
    echo '<hr/>';
    echo $ab2->cetak();

    echo '<hr style="color:red"/>';
    echo $ab1->transfer($ab2, 1000000);
    echo $ab1->cetak();
    echo '<hr/>';
    echo $ab2->cetak();    