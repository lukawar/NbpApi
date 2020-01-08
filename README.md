# NbpApi
Simple NBP Api

usage

$currency = new NbpApiClient();

//all rates
var_dump($currency->getRates('usd'));

//only mid rates
var_dump($currency->getRateMid('usd'));

//bid & ask rates
var_dump($currency->getRateBidAsk('usd'));
