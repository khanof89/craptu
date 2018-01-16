<?php

    namespace App\Console\Commands;

    use App\Models\Coin;
    use GuzzleHttp\Client;
    use Illuminate\Console\Command;

    class FetchCoinInfo extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'coin-info';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Command description';

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
            $coins = Coin::get();

            foreach ($coins as $coin) {
                $client       = new Client();
                $result       = $client->request('GET', $coin->api);
                $result       = json_decode($result->getBody());
                $coin->supply = $result[0]->available_supply;
                $coin->save();
            }
        }
    }
