<?php

namespace NbpApi;

class NbpClient
{
    private $mid = 'http://api.nbp.pl/api/exchangerates/rates/a/%s/?format=json';
    private $bidask = 'http://api.nbp.pl/api/exchangerates/rates/c/%s/?format=json';

    public function getRateMid($currency)
    {
        $data = json_decode(file_get_contents(sprintf($this->mid, $currency)), true);
        return ['date' => $data['rates'][0]['effectiveDate'], 'rateMid' => $data['rates'][0]['mid']];
    }

    public function getRateBidAsk($currency)
    {
        $data = json_decode(file_get_contents(sprintf($this->bidask, $currency)), true);
        return ['date' => $data['rates'][0]['effectiveDate'], 'rateAsk' => $data['rates'][0]['ask'], 'rateBid' => $data['rates'][0]['bid']];
    }

    public function getRates($currency)
    {
        $data_mid = json_decode(file_get_contents(sprintf($this->mid, $currency)), true);
        $data_bidask = json_decode(file_get_contents(sprintf($this->bidask, $currency)), true);
        return [
            'date' => $data_mid['rates'][0]['effectiveDate'],
            'rateMid' => $data_mid['rates'][0]['mid'],
            'rateAsk' => $data_bidask['rates'][0]['ask'],
            'rateBid' => $data_bidask['rates'][0]['bid']
        ];
    }
}