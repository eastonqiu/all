<?php

namespace App\Common\Crawler;

use GuzzleHttp\Client as HttpClient;
use Symfony\Component\DomCrawler\Crawler as SymfonyCrawler;

class ScanPort extends Crawler {

	protected function parse($body) {
		$body = json_decode($body, true);
		if(! ($body && isset($body['status']) && $body['status'] && isset($body['items']))) {
			return NULL;
		}

		return $body['items'];
	}
}
