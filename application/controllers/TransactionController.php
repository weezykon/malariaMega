<?php
class TransactionController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function record(){
        if($this->input->post()){
            $req = $this->input->post();
            $cart = [];
            $carts = $this->Products_model->fetchCart($req['cartip']);
            $insurance = array('insured' => 0,'insured_type' => '', 'insured_price' => 0);
            $delivery = '';
            $lifeinsured = 0;
            $subtotal = 0;
            $amount_paid = 0;
            foreach ($carts as $key => $value) {
                $data['t_l_user'] = $req['user'];
                $data['t_l_product'] = $value['c_product'];
                $data['t_l_description'] = $value['p_name'].' - Color: '.$value['c_color'].' (x'.$value['c_quantity'].')';
                $data['t_l_quantity'] = $value['c_quantity'];
                $data['t_l_amount'] = $value['p_price'];
                $data['t_l_amount_paid'] = $req['amount'];
                $data['t_l_color'] = $value['c_color'];
                $data['t_l_reference'] = $req['paystacktrxref'];
                $data['t_l_delivery'] = $req['delivery'];
                $data['t_l_insured'] = $req['insured'];
                $data['t_l_insured_type'] = $req['insured_type'];
                $data['t_l_insured_price'] = $req['insured_price'];
                $data['t_l_life_insured'] = 0;
                if ($value['c_category'] === 'smartphones'|| $value['c_category'] === 'tablets') {
                    $data['t_l_life_insured'] = 1;
                    $lifeinsured = 1;
                }
                $data['t_l_rand'] = $this->functions->generate(10);
                $data['t_l_date'] = $this->functions->longdate();
                $insurance['insured'] = $req['insured'];
                $insurance['insured_type'] = $req['insured_type'];
                $insurance['insured_price'] = $req['insured_price'];
                $delivery = $req['delivery'];
                $subtotal += $value['p_price'];
                $amount_paid = $req['amount'];
                $this->Transaction_model->save($data);
                $current_stock = $this->Products_model->get_last_stock_quantity($value['c_product']);
                $stock = $current_stock - $value['c_quantity'];
                $product = array(
                    'p_s_product' => $value['c_product'], 
                    'p_s_stock' => $stock, 
                    'p_s_number' => $value['c_quantity'],
                    'p_s_reason' => 'Transaction '. $data['t_l_reference'],
                    'p_s_rand' => $this->functions->generate(10),
                    'p_s_date' =>  $this->functions->longdate()
                );
                $this->Products_model->create_stock($product);
                array_push($cart, $data);
            }
            $deliveryprice = $amount_paid - $subtotal - $insurance['insured_price'];
            $user = $this->Auth_model->getuserbyrand($req['user']);
            $maildata = array(
                "user" => $user,
                "invoices" => $cart,
                "reference" => $req['paystacktrxref'],
                "transaction_date" => $this->functions->longdate(),
                "subtotal" => $subtotal,
                "delivery" => $delivery,
                "lifeinsured" => $lifeinsured,
                "insurance" => $insurance,
                "deliveryprice" => $deliveryprice,
                'contact' => $this->Admin_model->fetch_contact(),
            );
            $subject = "Receipt No".$req['paystacktrxref'];
            $send = $this->mailer->send($subject, 'Samsung Experience Store', $user['u_email'], $maildata, 'mail/invoice.php', 'Samsung Experience Store', 'support@samsungexperiencestores.com', 'orders@samsungexperiencestores.com');
            $this->Transaction_model->deleteCart($req['cartip']);
        }
    }

    public function testmail()
    {
        $this->load->library('upbeatmail');
        $maildata = array(
            "body" => "Weezykon Free Cap reward has just been Approved",
        );
        $subject = "Reward Approved";
        $send = $this->upbeatmail->send($subject, 'Upbeatcentre', 'weezykon@gmail.com', $maildata, 'mail/confirm.php', 'Upbeatcentre', 'email@mail.upbeatcentre.com');
        var_dump($send);
    }
}