<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class paystacksub
{ 
    function __construct()
	{
		$this->ci =& get_instance();
		$this->paystackid = '100041'; // PayStack Merchant ID
        // $this->paystackkey = 'jsdlksaa3e6f1737804dc5d1f9c39202'; // PayStack Secret Key
        $this->paystackchargeurl = 'https://api.paystack.co/transaction/charge_authorization'; // PayStack Charge Url
        $this->paystackverifyurl = 'https://api.paystack.co/transaction/verify/';

        $this->paystackkey = 'sk_live_e73ca09c594d51e9e0048616d4f797dab2e38d4f'; //CityCard PayStack Secret Key
        $this->paystacklivekey = 'pk_live_8d3201464ca5c5b5b095c99296b454dd49718482'; //CityCard PayStack Live Key

        $this->newpaystackkey = 'sk_live_e9fc3d3efd6e0fd912984b6f4978932d0a4d5948'; //CityTech PayStack New Secret Key
        $this->newpaystacklivekey = 'pk_live_ea8f237546e63c2fdbd0831ff483ab5dac379858'; //CityTech PayStack New Live Key

        $this->newTestpaystackkey = 'sk_test_6bc3f5d5e4c991a785f2b7a25dfb1e77dbca1e23'; //CityTech test PayStack Test Secret Key
        $this->newTestpaystacklivekey = 'pk_test_24c45d1279cb664a535e64b13508fba495a1077a'; //CityTech test PayStack Test Live Key
    }

    private function curl($url, $use_post, $post_data=[]){
        $curl = curl_init();

        $headers = [
            "Authorization: Bearer {$this->newpaystackkey}",
            // "Authorization: Bearer {$this->newTestpaystackkey}",
            'Content-Type: application/json'
        ];
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        
        if($use_post){
            curl_setopt($curl, CURLOPT_POST, TRUE);
            curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($post_data));
        }
        $response = curl_exec($curl);
        return $response;
    }

    function ver($transaction_reference){
        //https://api.paystack.co/transaction/verify/:reference
        $url = "https://api.paystack.co/transaction/verify/".$transaction_reference;
        
        //curl($url, $use_post, $post_data=[])
        return json_decode($this->curl($url, FALSE));
    }

    function chargeReturningCustomer($auth_code, $amount_in_kobo, $email, $ref){
        
        if($auth_code && $amount_in_kobo && $email){
            $url = "https://api.paystack.co/transaction/charge_authorization";
                
            $post_data = [
                'authorization_code'=>$auth_code,
                'amount'=>$amount_in_kobo,
                'email'=>$email,
                'reference'=>$ref
            ];
            $response = $this->curl($url, TRUE, $post_data);
            if($response){                
                return json_decode($response);
            }
            
            return FALSE;
        }
        
        return FALSE;
    }

    function verify($ref){
        require 'Paystack.php';
        $key = $_SERVER['HTTP_HOST'] == "localhost" ? $this->newTestpaystackkey : $this->newpaystackkey;
        // $paystack = new Paystack('sk_live_e9fc3d3efd6e0fd912984b6f4978932d0a4d5948');
        $paystack = new Paystack($key);
        // the code below throws an exception if there was a problem completing the request, 
        // else returns an object created from the json response
        $trx = $paystack->transaction->verify(
            [
            'reference'=>$ref
            ]
        );
        // status should be true if there was a successful call
        if(!$trx->status){
            exit($trx->message);
        }
        return $trx;
    }
}
