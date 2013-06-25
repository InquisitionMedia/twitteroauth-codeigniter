<?php if (!defined('BASEPATH')) die('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		$this->load->view('test_view');
	}

	function twitter_feed()
	{

		$this->load->library('twitteroauth');

		$twitteruser = "Your_Twitter_Handle";
		$notweets = 10;
		$consumerkey = "";
		$consumersecret = "";
		$accesstoken = "";
		$accesstokensecret = "";

		$connection = $this->getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

		$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
		
		echo json_encode($tweets);
 
	}

	function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
		
		$connection = new twitteroauth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
		return $connection;

	}
}