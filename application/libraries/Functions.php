<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class functions
{
    public function __construct()
    {
        $this->ci = &get_instance();

    }

    public function cleanNull(&$arr, $params)
    {
        $count = 0;
        foreach ($params as $value) {
            if ($arr[$value] == null) {
                $arr[$value] = "";
            }
            $count++;
        }
    }

    public function cleanNullZero(&$arr)
    {
        $count = 0;
        $len = sizeof($arr);
        for ($i = 0; $i < $len; $i++) {
            if ($arr[$i] == null) {
                $arr[$i] = 0;
            }
            $count++;
        }
    }

    public function hashed_password($val)
    {
        $val = md5($val);
        $val = sha1($val);
        return $val;
    }

    public function generate($max = 32)
    {
        $max = $max - 1;
        $baseStr = time() . rand(0, 1000000) . rand(0, 1000000);
        $md5Hash = md5($baseStr);
        if ($max < 32) {
            $md5Hash = substr($md5Hash, 0, $max);
        }
        return rand(1, 9) . $md5Hash;
    }

    public function longdate()
    {
        return strtotime(date("Y-m-d H:i:s"));
    }

    public function gen_token(){
        $date = strtotime(date('Y-m-d H:i:s'));
        $key = 'Samsung_SECRET_XXXX';
        $token = "ss_fg_" . md5(hash_hmac('sha512', $date, $key));
        return $token;
    }
}
