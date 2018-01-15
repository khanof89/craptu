<?php

    namespace App\Repositories;

    use App\Models\Currency;
    use App\Models\Ticker;
    use GuzzleHttp\Client;
    const API_URL = 'https://api.bitfinex.com/v1/pubticker/';

    class BitfinexRepository
    {
        public function getData($coin, $base, $symbol, $source = '')
        {
            if (in_array($base, ['eur', 'gbp', 'cad', 'pln', 'inr', 'jpy', 'chf', 'aud', 'sek', 'hkd', 'sgd'])) {
                $price = Currency::where('currency', "usd$base")->first();
                $price = $price->rate;
                $base  = 'usd';
            }
            //check if this exchange has this currency pair
            //if ($this->validateCurrency($coin . $base)) {

            try {
                switch ($symbol) {
                    case 'usd':
                        $symbol = 'dollar';
                        break;
                    case 'btc':
                        $symbol = 'bitcoin';
                        break;
                    case 'inr':
                        $symbol = 'inr';
                        break;
                    case 'GBP':
                        $symbol = 'gbp';
                        break;
                    case 'CAD':
                        $symbol = 'dollar';
                        break;
                    case 'eur':
                        $symbol = 'eur';
                        break;
                    case 'jpy':
                        $symbol = 'jpy';
                        break;
                    case 'chf':
                        $symbol = 'CHF';
                        break;
                    case 'sek':
                        $symbol = 'SEK';
                        break;
                    case 'hkd' :
                        $symbol = 'HKD';
                        break;
                    case 'sgd':
                        $symbol = 'SGD';
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

                    if (isset($price)) {
                        $results->price = $results->price * $price;
                        $results->low   = $results->low * $price;
                        $results->high  = $results->high * $price;
                    }

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
            /*} else {
                return ['symbol' => $symbol, 'price' => 0];
            }*/
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
                "datbtc",
            ];
            if (in_array($pair, $data)) {
                return true;
            }

            return false;
        }
    }