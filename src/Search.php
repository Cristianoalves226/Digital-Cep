<?php

namespace Xcris\DigitalCep;

use Xcris\DigitalCep\ws\ViaCep;

class Search
{


    public function getAddressFromZipeCode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        return $this->getFromServer($zipCode);
    }

    private function getFromServer($zipCode)
    {
        $get = new ViaCep();

        return $get->get($zipCode);
    }

    private function processData($data)
    {
        foreach ($data as $k => $v) {
            $data  = trim($v);
        }
    }
}
