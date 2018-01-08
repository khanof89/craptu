<?php

    namespace App\Http\Controllers;

    use App\Models\Ticker;
    use App\Repositories\BitfinexRepository;
    use App\User;
    use GuzzleHttp\Client;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class CurrencyController extends Controller
    {

        public function index()
        {
            return view('welcome');
        }

        /**
         * Display a listing of the resource.
         *
         * @param $coin
         * @param $base
         * @param $exchange
         *
         * @return \Illuminate\Http\Response
         */
        public function getCoinPrice($exchange, $coin, $base, Request $request)
        {
            if ($exchange) {
                if (!$this->validExchanges($exchange)) {
                    $exchange = 'Bittrex';
                }
            } else {
                $exchange = 'Bittrex';
            }

            $repository = "App\\Repositories\\" . ucfirst($exchange) . 'Repository';
            $dataSource = new $repository;
            $data       = ['symbol' => 'dollar', 'last_price' => '0'];
            $data       = $dataSource->getData($coin, $base);

            if ($request->ajax()) {
                return json_encode($data);
            }

            if(\Auth::check()) {
                $groups = auth()->user()->groups;

                $users = User::where('id', '<>', auth()->user()->id)->get();
                $user  = auth()->user();
            }

            return view('welcome', compact('data', 'exchange', 'coin', 'base', 'groups', 'users', 'user'));

        }

        public function getExchangePrice($coin, $base, $exchange = '')
        {
            $client = new Client();
            $query  = '';
        }

        public function validExchanges($exchange)
        {
            $data = [
                'poloniex',
                'kraken',
                'bittrex',
                'bitfinex',
            ];
            if (in_array($exchange, $data)) {
                return true;
            }

            return false;
        }

        public function graph($exchange, $coin, $base)
        {
            $stats   = Ticker::where(['exchange' => $exchange, 'coin' => $coin, 'base' => $base])->get();
            $results = [];
            foreach ($stats as $stat) {
                $results[] = ['y' => date('Y-m-d H:i:s', strtotime($stat->created_at)), 'a' => $stat->price];
            }

            return json_encode($stats);
        }
    }
