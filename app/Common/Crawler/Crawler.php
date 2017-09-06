<?php

namespace App\Common\Crawler;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Excpetion\GuzzleException;
use Symfony\Component\DomCrawler\Crawler as SymfonyCrawler;

class Crawler {

	public function __construct() {
	}

	public function crawl($crawlName, $data = NULL, $resultKeys = NULL) {
		$ret = NULL;
		try {
			$config = config("crawler.$crawlName", NULL);
			if(empty($config)) {
				return NULL;
			}
	    	$client = new HttpClient([
				'headers' => [
		        	'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36'
				]
			]);
			if($config['method'] == 'POST') {
				$data = ['form_params' => $data];
			} else {
				$data = ['query' => $data];
			}
			$resp = $client->request($config['method'], $config['url'], $data);
	        if($resp->getStatusCode() != 200) {
	            return NULL;
	        }

			$body = (string)$resp->getBody();

			$ret = [];
			if(isset($config['items'])) {
				$crawler = new SymfonyCrawler($body);
				foreach ($config['items'] as $k => $v) {
					if($v['type'] == 'xpath') {
						$ret[$k] = $crawler->filterXPath($v['rule'])->text();
					}
				}
			} else {
				$ret = $body;
			}

			$crawlerClass = __NAMESPACE__ . "\\$crawlName";
			if(class_exists($crawlerClass)) {
				$crawlObj = new $crawlerClass;
				$ret = $crawlObj->parse($ret);
			}
		} catch(GuzzleException $e) {

		}
		return $ret;
	}

	protected function parse($body) {
		return $body;
	}
}
