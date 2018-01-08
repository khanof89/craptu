# Cryptocurrency ticker with chatrooms

This repository shows cryptocurrency tickers using bitfinex(primary) exchange and can be configured for few other exchanges e.g coinbase, bittrex, poloniex. This repository also have chat module using pusher which lets traders chat real time

1. Clone repo
2. Copy the env file from .env.example to .env `cp .env.example .env`
3. Change your database and pusher settings in .env file 
4. Run migration `php artisan migrate`
5. Run the seeder `php artisan db:seed --class=GroupsSeeder`
6. Configure your environment variables for Pusher and Laravel by copying the `.env.example` to `.env`
7. Configure your Pusher key in the `resources/assets/js/bootstrap.js` file
8. Install composer dependencies
9. Run npm install
10. Do not forget to run the queue listener to broadcast the events
