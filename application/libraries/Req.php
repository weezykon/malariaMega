<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class req
{
    public function __construct()
    {
        $this->ci = &get_instance();

    }

    public function getPOST($input)
    {
        $arr = json_decode($input);
        $arr = (array) $arr;
        // $res = array_map(array($this->CI->security, 'xss_clean'), $arr);
        return $arr;
    }

    public function validateAuthorization($input, $output)
    {
        $raw = $input->get_request_header('Authorization');
        $data = explode(" ", $raw);
        if ($data[0] === "Bearer") {
            $token = $data[1];
            if (!$token) {
                $response['response'] = array('status' => 'error', 'message' => 'Unauthorized');
                $this->ci->res->unauthorized($output, $response);
            }
            $merchantId = $this->ci->Auth_model->validateToken($token);
            if (!$merchantId) {
                $response['response'] = array('status' => 'error', 'message' => 'Unauthorized');
                $this->ci->res->unauthorized($output, $response);
            }
            return $merchantId;
        }
        $response['response'] = array('status' => 'error', 'message' => 'Unauthorized');
        $this->ci->res->unauthorized($output, $response);
    }

    public function validateAuthorizationUpbeat($input, $output)
    {
        $raw = $input->get_request_header('Authorization');
        $data = explode(" ", $raw);
        if ($data[0] === "Bearer") {
            $token = $data[1];
            if (!$token) {
                $response['response'] = array('status' => 'error', 'message' => 'Unauthorized');
                $this->ci->res->unauthorized($output, $response);
            }
            $this->ci->load->model("v1/Upbeat_model");
            $merchantId = $this->ci->Upbeat_model->validateToken($token);
            if (!$merchantId) {
                $response['response'] = array('status' => 'error', 'message' => 'Unauthorized');
                $this->ci->res->unauthorized($output, $response);
            }
            return $merchantId;
        }
        $response['response'] = array('status' => 'error', 'message' => 'Unauthorized');
        $this->ci->res->unauthorized($output, $response);
    }

    public function validateAuthorizationPost($token, $output)
    {
        if (!$token) {
            $response['response'] = array('status' => 'error', 'message' => 'Unauthorized');
            $this->ci->res->unauthorized($output, $response);
        }
        $merchantId = $this->ci->Auth_model->validateToken($token);
        if (!$merchantId) {
            $response['response'] = array('status' => 'error', 'message' => 'Unauthorized');
            $this->ci->res->unauthorized($output, $response);
        }
        return $merchantId;
    }
}
