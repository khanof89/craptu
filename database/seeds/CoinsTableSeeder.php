<?php

    use Illuminate\Database\Seeder;

    class CoinsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            \DB::table('coins')->insert([
                [
                    'name'    => 'Bitcoin',
                    'symbol'  => 'btc',
                    'supply'  => '0',
                    'divider' => '1',
                    'api'     => 'https://api.coinmarketcap.com/v1/ticker/bitcoin/',
                ],
                [
                    'name'    => 'Ethereum',
                    'symbol'  => 'eth',
                    'supply'  => '0',
                    'divider' => '1',
                    'api'     => 'https://api.coinmarketcap.com/v1/ticker/ethereum/',
                ],
                [
                    'name'    => 'Litecoin',
                    'symbol'  => 'ltc',
                    'supply'  => '0',
                    'divider' => '1',
                    'api'     => 'https://api.coinmarketcap.com/v1/ticker/litecoin/',
                ],
                [
                    'name'    => 'IOTA',
                    'symbol'  => 'iot',
                    'supply'  => '0',
                    'divider' => '1',
                    'api'     => 'https://api.coinmarketcap.com/v1/ticker/iota/',
                ],
                [
                    'name'    => 'Ethereum Classic',
                    'symbol'  => 'etc',
                    'supply'  => '0',
                    'divider' => '1',
                    'api'     => 'https://api.coinmarketcap.com/v1/ticker/ethereum-classic/',
                ],
                [
                    'name'    => 'Ripple',
                    'symbol'  => 'xrp',
                    'supply'  => '0',
                    'divider' => '1',
                    'api'     => 'https://api.coinmarketcap.com/v1/ticker/ripple/',
                ],
                [
                    'name'    => 'EOS',
                    'symbol'  => 'eos',
                    'supply'  => '0',
                    'divider' => '1',
                    'api'     => 'https://api.coinmarketcap.com/v1/ticker/eos/',
                ],
                [
                    'name'    => 'SAN',
                    'symbol'  => 'san',
                    'supply'  => '0',
                    'divider' => '1',
                    'api'     => 'https://api.coinmarketcap.com/v1/ticker/santiment/',
                ],
                [
                    'name'    => 'OmiseGo',
                    'symbol'  => 'omg',
                    'supply'  => '0',
                    'divider' => '1',
                    'api'     => 'https://api.coinmarketcap.com/v1/ticker/omisego/',
                ],
                [
                    'name'    => 'Status',
                    'symbol'  => 'snt',
                    'supply'  => '0',
                    'divider' => '1',
                    'api'     => 'https://api.coinmarketcap.com/v1/ticker/status/',
                ],

            ]);
        }
    }
