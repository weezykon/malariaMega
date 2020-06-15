<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class mailer
{

    public $_to = "";
    public $_cc = "";
    public $_bcc = "";
    public $_from = "";
    public $_subject = "";
    public $_message = "";
    public $_attachments = array();

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->library('parser');
    }

    public function to($to)
    {
        $this->_to = $to;
        return $this;
    }

    public function cc($cc)
    {
        $this->_cc = $cc;
        return $this;
    }

    public function bcc($bcc)
    {
        $this->_bcc = $bcc;
        return $this;
    }

    public function from($from)
    {
        $this->_from = $from;
        return $this;
    }

    public function subject($subject)
    {
        $this->_subject = $subject;
        return $this;
    }

    public function message($message)
    {
        $this->_message = $message;
        return $this;
    }

    public function attachments($attachments)
    {
        $this->_attachments[] = $attachments;
        return $this;
    }

    public function attach($attachment)
    {
        return $this->attachments($attachment);
    }

    protected function format_email_name($email, $name = "")
    {
        return '"' . $name . '" <' . $email . '>';
    }

    public function mailgun_send($data)
    {
        // date_default_timezone_set('TIMEZONE');
        date_default_timezone_set('africa/lagos');
        $url = "https://api.mailgun.net/v3/mail.cerveapp.com/messages";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: multipart/form-data',
        ));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, "api:" . "key-51248a6b6958268c2a4880239dd23691");
        curl_setopt($ch, CURLOPT_POST, 1);

        $data['o:dkim'] = "yes";
        $data['o:tracking'] = "no";
        $data['o:tracking-clicks'] = "no";
        $data['o:tracking-opens'] = "no";

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        return true;
    }

    public function send($subject, $from, $to, $body, $template, $replyname, $replyto = null, $bcc = null)
    {
        $data['subject'] = $subject;

        $data['to'] = $_SERVER['HTTP_HOST'] == "localhost" ? "weezykon@gmail.com" : $to;

        $data['from'] = $this->format_email_name("support@samsungexperiencestores.com", $from);

        $data["h:Reply-To"] = is_null($replyto) ? $this->format_email_name("support@samsungexperiencestores.com", "Samsung Experience Store") : $this->format_email_name($replyto, $replyname);

        $data['bcc'] = is_null($bcc) ? implode(",", array("contact@samsungexperiencestores.com")) : $bcc;

        $data['html'] = $this->ci->parser->parse($template, $body, true);

        $send=  $this->mailgun_send($data);

        if ($send) {
            return $data['to'];
        }
    }
}