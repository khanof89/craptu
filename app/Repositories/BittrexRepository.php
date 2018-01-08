<?php

    namespace App\Repositories;

    use App\Models\Ticker;
    use GuzzleHttp\Client;
    const API_URI = 'https://bittrex.com/api/v1.1/public/getmarketsummary?market=';

    class BittrexRepository
    {
        public function getData($coin, $base)
        {
            $symbol = 'bitcoin';
            try {
                $base = strtoupper($base);
                $coin = strtoupper($coin);
                if ($base == 'USD') {
                    $base .= 'T';
                }
                if ($coin == 'USD') {
                    $coin .= 'T';
                }
                $client = new Client();
                $url    = API_URI . $base . '-' . $coin;
                $query  = $client->request('get', $url);
                $result = json_decode($query->getBody());
                switch ($base) {
                    case 'USDT':
                        $symbol = 'dollar';
                        break;
                    case 'BTC':
                        $symbol = 'bitcoin';
                        break;
                    default:
                        //
                        break;
                }

                Ticker::create(['coin' => $coin, 'base' => $base, 'exchange' => 'bittrex', 'price' => $result->result[0]->Last]);

                return [
                    'symbol' => $symbol,
                    'price'  => $result->result[0]->Last,
                    'low'    => $result->result[0]->Low,
                    'high'   => $result->result[0]->High,
                    'volume' => $result->result[0]->Volume,
                ];
            } catch (\Exception $e) {
                return ['symbol' => $symbol, 'price' => 0, 'low' => 0,
                    'high'   => 0,
                    'volume' => 0];
            }
        }

        public function marketSummary($coin, $base)
        {
            $url = "https://bittrex.com/api/v1.1/public/getmarketsummary?market=$base-$coin";

            $client  = new Client();
            $query   = $client->request('get', $url);
            $results = json_decode($query->getBody());

            return ['low' => $results->result[0]->Low, 'high' => $results->result[0]->Low, 'volume' => $results->result[0]->Volume];
        }
    }