<?php

    namespace App\Repositories;

    use App\Models\Ticker;
    use GuzzleHttp\Client;
    const API_URL = 'https://api.bitfinex.com/v1/pubticker/';

    class BitfinexRepository
    {
        public function getData($coin, $base, $source = '')
        {
            $symbol = 'bitcoin';

            //check if this exchange has this currency pair
            if ($this->validateCurrency($coin . $base)) {
                try {
                    switch ($base) {
                        case 'usd':
                            $symbol = 'dollar';
                            break;
                        case 'btc':
                            $symbol = 'bitcoin';
                            break;
                        default:
                            //
                            break;
                    }


                    if ($source == 'console') {
                        $client  = new Client();
                        $url     = API_URL . $coin . $base;
                        $query   = $client->request('get', $url);
                        $results = json_decode($query->getBody());

                        Ticker::create([
                            'coin'     => $coin,
                            'base'     => $base,
                            'exchange' => 'bitfinex',
                            'price'    => $results->last_price,
                            'high'     => $results->high,
                            'low'      => $results->low,
                            'volume'   => $results->volume,
                        ]);
                        return [
                            'symbol' => $symbol,
                            'price'  => isset($results->last_price) ? $results->last_price : 0,
                            'low'    => isset($results->low) ? $results->low : 0,
                            'high'   => isset($results->high) ? $results->high : 0,
                            'volume' => isset($results->volume) ? $results->volume : 0,
                            'coin'   => $coin,
                            'base'   => $base,
                        ];
                    } else {
                        $results = Ticker::where(['coin' => $coin, 'base' => $base, 'exchange' => 'bitfinex'])->orderBy('id', 'DESC')->first();
                        return [
                            'symbol' => $symbol,
                            'price'  => isset($results->price) ? $results->price : 0,
                            'low'    => isset($results->low) ? $results->low : 0,
                            'high'   => isset($results->high) ? $results->high : 0,
                            'volume' => isset($results->volume) ? $results->volume : 0,
                            'coin'   => $coin,
                            'base'   => $base,
                        ];
                    }


                } catch (\Exception $e) {
                    return ['symbol' => $symbol, 'price' => 0];
                }
            } else {
                return ['symbol' => $symbol, 'price' => 0];
            }
        }

        public function validateCurrency($pair)
        {
            $data = [
                "btcusd",
                "ltcusd",
                "ltcbtc",
                "ethusd",
                "ethbtc",
                "etcbtc",
                "etcusd",
                "rrtusd",
                "rrtbtc",
                "zecusd",
                "zecbtc",
                "xmrusd",
                "xmrbtc",
                "dshusd",
                "dshbtc",
                "bccbtc",
                "bcubtc",
                "bccusd",
                "bcuusd",
                "xrpusd",
                "xrpbtc",
                "iotusd",
                "iotbtc",
                "ioteth",
                "eosusd",
                "eosbtc",
                "eoseth",
                "sanusd",
                "sanbtc",
                "saneth",
                "omgusd",
                "omgbtc",
                "omgeth",
                "bchusd",
                "bchbtc",
                "bcheth",
                "sntusd",
                "sntbtc",
                "snteth",
                "ioteur",
                "gnteth",
                "gntusd",
                "gntbtc",
                "yyweth",
                "yywusd",
                "yywbtc",
                "qsheth",
                "qshusd",
                "qshbtc",
                "dateth",
                "datusd",
                "datbtc"
            ];
            if (in_array($pair, $data)) {
                return true;
            }

            return false;
        }
    }