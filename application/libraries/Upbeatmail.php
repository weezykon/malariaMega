<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class upbeatmail
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
        date_default_timezone_set('Africa/Lagos');

        $data['o:dkim'] = "yes";
        $data['o:tracking'] = "yes";
        $data['o:tracking-clicks'] = "yes";
        $data['o:tracking-opens'] = "yes";

        $requestContent = http_build_query($data);

        $request = array(
            "http" => array(
                "method" => "POST",
                "content" => $requestContent,
                "header" => implode(
                    "\r\n", array(
                        'Content-Type: application/x-www-form-urlencoded',
                        'Authorization: Basic ' . base64_encode("api:d8fd01d60fc9ed0cf01010e2a18b190c-fd0269a6-89e7f364"),
                    )
                ),
            ),
        );
        $url = "https://api.mailgun.net/v3/mail.upbeatcentre.com/messages";
        $requestContext = stream_context_create($request);
        $trresult = file_get_contents($url, false, $requestContext);

        return $trresult;
    }

    public function send($subject, $from, $to, $body, $template, $replyname, $replyto = null, $bcc = null)
    {
        $data['subject'] = $subject;

        $data['to'] = $_SERVER['HTTP_HOST'] == "localhost" ? "weezykon@gmail.com" : $to;

        $data['from'] = $this->format_email_name("email@mail.upbeatcentre.com", $from);

        $data["h:Reply-To"] = is_null($replyto) ? $this->format_email_name("rewards@upbeatcentre.com", "Upbeat") : $this->format_email_name($replyto, $replyname);

        $data['bcc'] = is_null($bcc) ? implode(",", array("rewards@upbeatcentre.com")) : $bcc;

        $data['html'] = $this->ci->parser->parse($template, $body, true);

        return $this->mailgun_send($data);
    }
}