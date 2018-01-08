<?php

    namespace App\Repositories;

    use GuzzleHttp\Client;
    const API_URI = 'https://poloniex.com/public?command=returnTicker';

    class PoloniexRepository
    {
        public function getData($coin, $base)
        {
            try {
                $client       = new Client();
                $query        = $client->request('get', API_URI);
                $data         = json_decode($query->getBody());
                $currencyPair = $coin . '_' . $base;
                $currencyPair = strtoupper($currencyPair);

                return $data[$currencyPair]['last'];
            } catch (\Exception $e) {
                return $e;
            }
        }
    }