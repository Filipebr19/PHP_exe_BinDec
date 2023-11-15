<?php
namespace class;

class BinDec {
    protected string $numBin;

    public function __construct(string $num) {
        $this -> setNumBin($num);
    }

    private function setNumBin(string $numBin): void {
        $this -> numBin = $numBin;
    }

    public  function conversionBinDec(): int | float | string {
        $number = $this -> numBin;
        $decimal = 0;
        $j = strlen($number) - 1;

        for($i = 0; $i < strlen($number); $i++) {
            $num = $number[$i];
            if($num !== '0' && $num !== '1') {
                return '</br>Erro: Os números no campo so podem ser \'0\' ou \'1\'';
            };
        };

        for($i = 0; $i < strlen($number); $i++) {
            $n = $number[$i] * 2**$j;
            $decimal += $n;
            $j--;
        };

        return $decimal;
    }
};