<?php

    namespace App\Console\Commands;

    use App\Models\Currency;
    use GuzzleHttp\Client;
    use Illuminate\Console\Command;

    class CurrencyRates extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'currency';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Get Currency Rates on a daily basis';

        /**
         * Create a new command instance.
         *
         * @return void
         */
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * Execute the console command.
         *
         * @return mixed
         */
        public function handle()
        {
            $client   = new Client();
            $response = $client->request('GET', 'http://apilayer.net/api/live?access_key=55533202600e9c7cb67dff36ac68795e&currencies=EUR,GBP,CAD,PLN,INR,JPY,CHF,AUD,SEK,HKD,SGD&source=USD&format=1');
            $results  = json_decode($response->getBody());

            foreach ($results->quotes as $key => $result) {
                Currency::firstOrCreate(['currency' => $key, 'rate' => $result]);
            }

        }
    }
