<?php

/*
*
** Por @acestrycker<t.me/acestrycker>
*
*/
ini_set("error_log", "erros.txt");
class SMSActivate  {

	private $endpoint = 'https://sms-activate.org/stubs/handler_api.php';
	private $api_key = '';

	function __construct ($api_key)
	{
		$this->api_key = $api_key;
	}

	public function getRentServicesAndCountries ($country = null, $operator = null, $time = null)
	{

		$data = [
			'action' => __FUNCTION__,
			'rent_time' => $time,
			'operator' => $operator,
			'country' => $country
		];

		return $this->request ($data);

	}

	public function getPrices ($country = null, $service = null)
	{

		$data = [
			'action' => __FUNCTION__,
			'service' => $service,
			'country' => $country
		];

		return $this->request ($data);

	}

	public function getNumber ($service, $country, $forward = null, $operator = null, $ref = null, $phoneException = null)
	{

		$data = [
			'action' => __FUNCTION__,
			'service' => $service,
			'country' => $country,
			'forward' => $forward,
			'operator' => $operator,
			'ref' => $ref,
			'phoneException' => $phoneException,
			'owner' => 'site'
		];

		return $this->request ($data);
		
	}

	public function getStatus ($id)
	{

		$data = [
			'action' => __FUNCTION__,
			'id' => $id
		];

		return $this->request ($data);
		
	}

	// action = setStatus & status = $ status & id = $ id & forward = $ forward
	// 3 para receber outro sms, 

	public function setStatus ($status, $id, $forward = null)
	{

		$data = [
			'action' => __FUNCTION__,
			'status' => $status,
			'id' => $id,
			'forward' => $forward
		];

		return $this->request ($data);
		
	}

	public function getBalanceAndCashBack ()
	{

		$data = [
			'action' => __FUNCTION__,
		];

		return $this->request ($data);
		
	}

	public function getBalance ()
	{

		$data = [
			'action' => __FUNCTION__,
		];

		$texto = $this->request ($data);
		$saldo = explode (':', $texto)[1];

		return $saldo ?? 0;
		
	}

	public function getFullSms ($id)
	{

		$data = [
			'action' => __FUNCTION__,
			'id' => $id
		];

		return $this->request ($data);
		
	}
	
	public function getCurrentActivationsDataTables ($length = 50, $start = 0, $order = 'id', $orderBy = 'asc')
	{

		$curl = curl_init ();
		curl_setopt ($curl, CURLOPT_URL, $this->endpoint);
		curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt ($curl, CURLOPT_SSL_VERIFYSTATUS, false);
		curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($curl, CURLOPT_POST, true);
		curl_setopt ($curl, CURLOPT_POSTFIELDS, "action=getCurrentActivationsDataTables&api_key={$this->api_key}&start={$start}}&length={$length}&order={$order}&orderBy={$orderBy}&typeAction=0&noStat=0");
		curl_setopt ($curl, CURLOPT_HTTPHEADER, [
			'accept: application/json, text/javascript, */*; q=0.01',
			'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
			'cache-control: no-cache',
			'content-type: application/x-www-form-urlencoded; charset=UTF-8',
			'origin: https://sms-activate.org',
			'pragma: no-cache',
			'referer: https://sms-activate.org/en/getNumber',
			'sec-fetch-dest: empty',
			'sec-fetch-mode: cors',
			'sec-fetch-site: same-origin',
			'sec-gpc: 1',
			'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36',
			'x-requested-with: XMLHttpRequest'
		]);

		$exec = curl_exec ($curl);

		return $exec;
		
	}

	function getOperators ($country){

		$this->setEndpoint ('https://sms-activate.org/stubs/handler_api.php');

		$request = $this->request ("act=countryChange&data={$country}", 'POST', [
			'authority: sms-activate.org',
			'accept: application/json, text/javascript, */*; q=0.01',
			'x-requested-with: XMLHttpRequest',
			'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36',
			'content-type: application/x-www-form-urlencoded; charset=UTF-8',
			'origin: https://sms-activate.org',
			'sec-fetch-site: same-origin',
			'sec-fetch-mode: cors',
			'sec-fetch-dest: empty',
			'referer: https://sms-activate.org/en/getNumber',
			'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7'
		]);

			return $request;

	}

	public function setEndpoint ($url){
		$this->endpoint = $url;
	}

	public function request ($data, $method = 'GET', $headers = [])
	{

		if ($method == 'GET'){

			$data_query = http_build_query($data);
			$url = $this->endpoint."?api_key={$this->api_key}&{$data_query}";

		}else {

			$url = $this->endpoint."?api_key={$this->api_key}";

		}

		$curl = curl_init ();
		curl_setopt ($curl, CURLOPT_URL, $url);
		curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt ($curl, CURLOPT_SSL_VERIFYSTATUS, false);
		curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);

		if ($method == 'POST'){
			curl_setopt ($curl, CURLOPT_POST, true);
			curl_setopt ($curl, CURLOPT_POSTFIELDS, $data);
		}

		curl_setopt ($curl, CURLOPT_HTTPHEADER, $headers);

		$exec = curl_exec ($curl);

			return $exec;
	}
}