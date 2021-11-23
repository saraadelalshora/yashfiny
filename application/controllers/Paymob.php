<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paymob extends CI_Controller{

public function getToken(){
        $link = 'https://accept.paymobsolutions.com/api/auth/tokens';
        $data = [
            "api_key"     => 'ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2libUZ0WlNJNkltbHVhWFJwWVd3aUxDSndjbTltYVd4bFgzQnJJam94TkRFMk1qSjkuVVpjUXJXYnFoSnpNRUhBUVdQYkc3NENucDFvSEoydmpiREwwbWRucGZTdmN3c3pheW04Ylp2Vkt0T3BIRkJVdzFwQkhqWmdERVRmYkdsX01ST1ozaHc='
        ];
        return $this->callPostApi($link,$data)['token'];
    }

public function orderRegistration($token,$amount,$merchantRefNumber){

        $link = 'https://accept.paymobsolutions.com/api/ecommerce/orders';
        $data = [
            "auth_token"        => $token,
            "delivery_needed"   => false,
            "merchant_id"       => '141622',
            "amount_cents"      => $amount * 100,
            "currency"          => 'EGP',
            "merchant_order_id" => $merchantRefNumber
        ];
        return $this->callPostApi($link,$data);
    }

public function getPaymentKey($token,$amount,$order){

        $user = $this->db->get_where('patient', array('patient_id' =>$this->session->userdata['patient_id']))->row_array();
        $link = 'https://accept.paymobsolutions.com/api/acceptance/payment_keys';
        $data = [
            "auth_token"           => $token,
            "amount_cents"         => $amount,
            "expiration"           => 3600,
            "order_id"             => $order,
            "currency"             => 'EGP',
            "integration_id"       => 1610938,
            "lock_order_when_paid" => "false",
            "billing_data"         => [
                "apartment"        => "NA",
                "email"            => $user['email'],
                "floor"            => "NA",
                "first_name"       => $user['firstname'],
                "street"           => "NA",
                "building"         => "NA",
                "phone_number"     => $user['phone'],
                "shipping_method"  => "NA",
                "postal_code"      => "NA",
                "city"             => "NA",
                "country"          => "NA",
                "last_name"        => $user['lastname'],
                "state"            => "NA"
            ],
        ];

//        dd($this->callPostApi($link,$data));
        /*if(isset($this->callPostApi($link,$data)['token'])){
            return $this->callPostApi($link,$data)['token'];
        }else{
               $this->session->set_flashdata('flash_message','an_error_occurred_during_payment');
            return redirect('home', 'refresh');
        }*/


      /*  echo "<pre>";
              var_dump($data);
        echo "</pre>";*/
    }
    public function acceptPaymentKey($paymentToken)
    {
        //    $link = 'https://accept.paymobsolutions.com/api/acceptance/iframes/149508';

        //    $data = [
        //        "payment_token"   => $paymentToken,
        //    ];
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => "https://accept.paymobsolutions.com/api/acceptance/iframes/149508?payment_token=".$paymentToken,
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => "",
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 30,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => "GET",
        //   CURLOPT_POSTFIELDS => "{\r\n    \"api_key\": \"ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2libUZ0WlNJNkltbHVhWFJwWVd3aUxDSndjbTltYVd4bFgzQnJJam95TnpNeWZRLm9YRE5qVjZoT0VxaUMxMmxscXJydzI0b1Z1UkxtSWNqV0JUaDE0SFljUnRwdmk0NFlRWHUtRkxSbHFlVkFsZG9aZE9vNlQxbmFGWGRiRVJKQ1M5Wi1R\"\r\n}",
        //   CURLOPT_HTTPHEADER => array(
        //     "cache-control: no-cache",
        //     "content-type: application/json",
        //     "postman-token: 73bb45ef-47a2-cc9c-9835-c3916615ec8a"
        //   ),
        // ));

        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        // // dd($response);
        // curl_close($curl);

        // if ($err) {
        //   echo "cURL Error #:" . $err;
        // } else {
        //   return $response;
        // }
    }

    public function callPostApi($url,$fields)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        $result = json_decode($result,true);
        curl_close($ch);
        return $result;
    }


    // PAYPAL CHECKOUT ACTIONS
    public function paymob_checkout(){

    //   if ($this->session->userdata('user_login') != 1 && $payment_request != 'true')
        //    redirect('home', 'refresh');

        //checking price
        if ($this->input->post('total_price_of_checking_out')) :
            $total_price_of_checking_out = $this->input->post('total_price_of_checking_out');
        else :
            $total_price_of_checking_out = $this->session->userdata('total_price_of_checking_out');
        endif;



        if ($this->input->post('phone')) {

            $data['phone'] = $this->input->post('phone');
            $this->db->where('id',$this->session->userdata('patient_id'));
            $this->db->update('patient',$data);

        }

        $this->db->where('id',$this->session->userdata('patient_id'));
        $user_data = $this->db->get('patient')->row();



        $merchantRefNumber = rand(000000, 999999);
        $token             = $this->getToken();
        $orderRegistration = $this->orderRegistration($token,$total_price_of_checking_out,$merchantRefNumber);
        $paymentKey        = $this->getPaymentKey($token,$orderRegistration['amount_cents'],$orderRegistration['id']);

       redirect('https://accept.paymob.com/api/acceptance/iframe/317209?token='.$paymentKey);

// echo "<pre>";
//       var_dump($_SESSION);
// echo "</pre>";

    }
    public function paymob_callback()
    {
        $request = $_GET;
       if($request['success'] == true){
           if($request['is_3d_secure']){
               if(isset($request['txn_response_code'])){
                   if($request['txn_response_code'] != 'APPROVED' || ! isset($this->session->userdata['user_id'])){
                       $this->session->set_flashdata('flash_message', site_phrase('an_error_occurred_during_payment'));
                       redirect('home/shopping_cart', 'refresh');
                   }
                   $user_id = $this->session->userdata['user_id'];

                   $amount_paid = "";
                   $this->crud_model->enrol_student($user_id);

                   if (isset($this->session->userdata['coupon'])){

                       $coupon = $this->session->userdata['coupon'];
                       $coupon_data = $this->crud_model->get_coupon_details_by_code($coupon);
                       if ($coupon_data->num_rows() > 0){
                           $data['used_numbers'] = $coupon_data->row()->used_numbers + 1;
                           $this->db->where('code', $coupon);
                           $this->db->update('coupon', $data);
                       }
                   }

                   $this->crud_model->course_purchase($user_id, 'credit', $amount_paid);
                   $this->email_model->course_purchase_notification($user_id, 'credit', $amount_paid);

                   $this->session->set_flashdata('flash_message', site_phrase('payment_successfully_done'));
                   $this->session->set_userdata('cart_items', array());
                   redirect('home/my_courses', 'refresh');
               }

           }else{
               $this->session->set_flashdata('flash_message', site_phrase('an_error_occurred_during_payment'));
               redirect('home/shopping_cart', 'refresh');
           }

       }else{
           $this->session->set_flashdata('flash_message', site_phrase('an_error_occurred_during_payment'));
           redirect('home/shopping_cart', 'refresh');
       }

    }




}
