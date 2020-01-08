# NbpApi
#### Simple NBP Api

##### usage
~~~~
use NbpApi\NbpClient;

$currency = new NbpClient();
~~~~
_all rates_
~~~~
var_dump($currency->getRates('usd'));
~~~~
_only mid rates_
~~~~
var_dump($currency->getRateMid('usd'));
~~~~
_bid & ask rates_
~~~~
var_dump($currency->getRateBidAsk('usd'));
~~~~
