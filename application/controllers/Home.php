<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model','model');
		$config=[
		 	'upload_path'=>'./upload/',
		 	'allowed_types'=>'gif|jpg|png|jpeg'
		 ];
		 $this->load->library('upload',$config);
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		include APPPATH . 'third_party/src/Payment.php';
		include APPPATH . 'third_party/src/Validator.php';
		include APPPATH . 'third_party/src/Crypto.php';
	}
	public function index()
	{
		$data['astro_mall_product']=$this->model->getAstroMallProduct();
		$data['recent_blog']=$this->model->Recent_blog();
		$this->load->view('home/header');
		$this->load->view('home/index',$data);
		$this->load->view('home/footer');
	}
	public function about()
	{
		$this->load->view('home/header');
		$this->load->view('home/about');
		$this->load->view('home/footer');
	}
	public function blog()
	{
		$this->load->library('pagination');
		$config=[
			'attributes'=> array('class' => 'page-link'),
			'base_url'=>base_url('home/blog'),
			'per_page'=>4,
			'total_rows'=>$this->model->num_rows(),
			'full_tag_open'=>"<nav><ul class='pagination justify-content-center'>",
			'full_tag_close'=>"</ul></nav>",
			'prev_tag_open'=>"<li class='page-item'>",
			'prev_tag_close'=>"</li>",
			'next_tag_open'=>"<li class='page-item'>",
			'next_tag_close'=>"</li>",
			'num_tag_open'=>"<li class='page-item'>",
			'num_tag_close'=>"</li>",
			'cur_tag_open'=>"<li class='active'><a class='page-link'>",
			'cur_tag_close'=>"</a></li>"
		];
		$this->pagination->initialize($config);
		$data['blog']=$this->model->get_blog($config['per_page'],$this->uri->segment(3));
		$data['recent_blog']=$this->model->Recent_blog();
		$data['category']=$this->model->get_category();
		$this->load->view('home/header');
		$this->load->view('home/blog',$data);
		$this->load->view('home/footer');
	}
	public function blog_detail($id)
	{
		$data['blog']=$this->model->getBlogById($id);
		$data['recent_blog']=$this->model->Recent_blog();
		$data['category']=$this->model->get_category();
		$this->load->view('home/header');
		$this->load->view('home/blog_details',$data);
		$this->load->view('home/footer');
	}
	public function astro_mall()
	{
		$data['astro_mall_category']=$this->model->getAstroMallCategory();
		$data['astro_mall_product']=$this->model->getAstroMallProduct();
		$this->load->view('home/header');
		$this->load->view('home/astro_mall',$data);
		$this->load->view('home/footer');
	}
	public function product_info($id)
	{
		$data['astro_mall_product']=$this->model->getAstroMallProduct($id);
		$this->load->view('home/header');
		$this->load->view('home/product_info',$data);
		$this->load->view('home/footer');
	}
	public function kundali()
	{
		$this->load->view('home/header');
		$this->load->view('home/kundali');
		$this->load->view('home/footer');
	}
	public function horoscope()
	{
		$this->load->view('home/header');
		$this->load->view('home/horoscope');
		$this->load->view('home/footer');
	}
	public function cart()
	{
		$this->load->view('home/header');
		$this->load->view('home/cart');
		$this->load->view('home/footer');
	}
	public function pujas()
	{
		$this->load->view('home/header');
		$this->load->view('home/pujas');
		$this->load->view('home/footer');
	}
	public function puja_info()
	{
		$this->load->view('home/header');
		$this->load->view('home/puja_info');
		$this->load->view('home/footer');
	}
	public function register()
	{
		$this->load->view('home/header');
		$this->load->view('home/register');
		$this->load->view('home/footer');
	}
	public function login()
	{
		$this->load->view('home/header');
		$this->load->view('home/login');
		$this->load->view('home/footer');
	}
	public function contact()
	{
		$this->load->view('home/header');
		$this->load->view('home/contact');
		$this->load->view('home/footer');
	}
	public function create_user()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
		if($this->form_validation->run())
		{
			$data=array(
			'f_name'=>$this->input->post('fname'),
			'l_name'=>$this->input->post('lname'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password')
			);
			if($this->model->createUser($data))
			{
		  	 	$this->session->set_flashdata('msg', "You're registered successfully");
  				return redirect(base_url().'home/register');
			}
			else
			{
				$this->session->set_flashdata('msg', "Something went wrong");
  				return redirect(base_url().'home/register');
			}
			
		}
		else
		{
			$this->register();
		}
	}
	public function user_login()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		if($this->model->userLogin($email,$password)->num_rows()>0)
		{
			$this->session->set_userdata('email', $email);
	  	 	return redirect(base_url().'home/index');
		}
		else
		{
			$this->session->set_flashdata('msg', "Email/Password is incorrect. Try again");
				return redirect(base_url().'home/login');
		}
	}
	public function check_login()
	{
		if(empty($this->session->userdata('email')))
		{
		$this->session->set_flashdata('msg', "Please login to continue");
		redirect(base_url().'home/login');
		}
	}
	public function astro_signup()
	{
		$this->load->view('home/header');
		$this->load->view('home/astro_signup');
		$this->load->view('home/footer');
	}
	public function create_astrologer()
	{
	$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[astrologers.email]');
	$this->form_validation->set_rules('age', 'Age', 'trim|required');
	$this->form_validation->set_rules('phone_no', 'Phone No', 'trim|required|min_length[10]');
	$this->form_validation->set_rules('alternate_no', 'Alternate No', 'trim|required|min_length[10]');
	$this->form_validation->set_rules('dob', 'DOB', 'trim|required');
	$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
	$this->form_validation->set_rules('experience', 'Experience', 'trim|required');
	$this->form_validation->set_rules('city', 'City', 'trim|required');
	$this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[5]');
	$this->form_validation->set_rules('pan_card_no', 'Pan Card No', 'trim|required');
	$this->form_validation->set_rules('ac_no', 'Account No', 'trim|required');
	$this->form_validation->set_rules('ifsc_code', 'IFSC Code', 'trim|required');
	$this->form_validation->set_rules('ac_name', 'Bank Name', 'trim|required');
	$this->form_validation->set_rules('category', 'Category', 'trim|required');
	$this->form_validation->set_rules('short_bio', 'Short Bio', 'trim|required');
	$this->form_validation->set_rules('long_bio', 'Long Bio', 'trim|required');
	$this->form_validation->set_rules('skills', 'Skills', 'trim|required');
	$this->form_validation->set_rules('language', 'Language', 'trim|required');
	$this->form_validation->set_rules('report_charge', 'Report Charge', 'trim|required');
	$this->form_validation->set_rules('call_charge', 'Call Charge', 'trim|required');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
	$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
	if($this->form_validation->run() && $this->upload->do_upload('photo') && $this->upload->do_upload('id_proof'))
	{
		if($this->upload->do_upload('photo')):
		$image=$this->upload->data();
		$photo="upload/".$image['raw_name'].$image['file_ext'];
		endif;
		if($this->upload->do_upload('id_proof')):
		$image=$this->upload->data();
		$id_proof="upload/".$image['raw_name'].$image['file_ext'];
		endif;
		$form=$this->input->post();
		$data=array(
			'name'=>$form['name'],
			'email'=>$form['email'],
			'age'=>$form['age'],
			'phone_no'=>$form['phone_no'],
			'alternate_no'=>$form['alternate_no'],
			'dob'=>$form['dob'],
			'gender'=>$form['gender'],
			'experience'=>$form['experience'],
			'city'=>$form['city'],
			'address'=>$form['address'],
			'pan_card_no'=>$form['pan_card_no'],
			'ac_no'=>$form['ac_no'],
			'ifsc_code'=>$form['ifsc_code'],
			'ac_name'=>$form['ac_name'],
			'category'=>$form['category'],
			'short_bio'=>$form['short_bio'],
			'long_bio'=>$form['long_bio'],
			'skills'=>$form['skills'],
			'language'=>$form['language'],
			'photo'=>$photo,
			'id_proof'=>$id_proof,
			'password'=>$form['password'],
			'report_charge'=>$form['report_charge'],
			'call_charge'=>$form['call_charge']
		);
		if($this->model->createAstrologer($data))
		{
			$this->session->set_flashdata('msg','Registered successfully. Your account is under review.');
			return redirect(base_url().'home/astro_signup');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'home/astro_signup');	
		}
	}
	else
	{
		if ( ! $this->upload->do_upload('photo')):
		$error['photo']=$this->upload->display_errors('<p class="text-danger">', '</p>');
		endif;
		if ( ! $this->upload->do_upload('id_proof')):
		$error['id_proof']=$this->upload->display_errors('<p class="text-danger">', '</p>');
		endif;
		$this->load->view('home/header');
		$this->load->view('home/astro_signup',$error);
		$this->load->view('home/footer');
	}
	}
	public function create_kundali()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('date', 'Date', 'trim|required');
		$this->form_validation->set_rules('month', 'Month', 'trim|required');
		$this->form_validation->set_rules('year', 'Year', 'trim|required');
		$this->form_validation->set_rules('hour', 'Hour', 'trim|required');
		$this->form_validation->set_rules('minute', 'Minute', 'trim|required');
		$this->form_validation->set_rules('second', 'Second', 'trim|required');
		$this->form_validation->set_rules('birth_place', 'Birth Place', 'trim|required');
		if($this->form_validation->run())
		{
			$form=$this->input->post();
			$data=array(
				'name'=>$form['name'],
				'gender'=>$form['gender'],
				'date'=>$form['date'],
				'month'=>$form['month'],
				'year'=>$form['year'],
				'hour'=>$form['hour'],
				'minute'=>$form['minute'],
				'second'=>$form['second'],
				'birth_place'=>$form['birth_place']
			);
		if($this->model->createKundali($data))
		{
			$this->session->set_flashdata('msg','Your information received successfully. We will get in touch with you soon');
			return redirect(base_url().'home/kundali');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'home/kundali');	
		}
		}
		else
		{
			$this->kundali();
		}
	}
	public function talk_to_astrologer()
	{
		$data['astrologer']=$this->model->getAstrologer();
		$this->load->view('home/header');
		$this->load->view('home/talk_to_astrologer',$data);
		$this->load->view('home/footer');
	}
	public function chat_to_astrologer()
	{
		$data['astrologer']=$this->model->getAstrologer();
		$this->load->view('home/header');
		$this->load->view('home/chat_to_astrologer',$data);
		$this->load->view('home/footer');
	}
	public function getEnquiry()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$message=$this->input->post('message');
		$data=array(
			'name'=>$name,
			'email'=>$email,
			'message'=>$message
		);
		if($this->model->getEnquiry($data))
		{
			$this->session->set_flashdata('msg','Your query received successfully. We will get in touch with you soon');
			return redirect(base_url().'home/contact');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'home/contact');	
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		return redirect(base_url());
	}
	// Horoscope Start
	public function aries()
	{
		$this->load->view('home/header');
		$this->load->view('home/aries');
		$this->load->view('home/footer');
	}
	public function taurus()
	{
		$this->load->view('home/header');
		$this->load->view('home/taurus');
		$this->load->view('home/footer');
	}
	public function gemini()
	{
		$this->load->view('home/header');
		$this->load->view('home/gemini');
		$this->load->view('home/footer');
	}
	public function cancer()
	{
		$this->load->view('home/header');
		$this->load->view('home/cancer');
		$this->load->view('home/footer');
	}
	public function leo()
	{
		$this->load->view('home/header');
		$this->load->view('home/leo');
		$this->load->view('home/footer');
	}
	public function virgo()
	{
		$this->load->view('home/header');
		$this->load->view('home/virgo');
		$this->load->view('home/footer');
	}
	public function libra()
	{
		$this->load->view('home/header');
		$this->load->view('home/libra');
		$this->load->view('home/footer');
	}
	public function scorpio()
	{
		$this->load->view('home/header');
		$this->load->view('home/scorpio');
		$this->load->view('home/footer');
	}
	public function sagittairus()
	{
		$this->load->view('home/header');
		$this->load->view('home/sagittairus');
		$this->load->view('home/footer');
	}
	public function capricorn()
	{
		$this->load->view('home/header');
		$this->load->view('home/capricorn');
		$this->load->view('home/footer');
	}
	public function aquarius()
	{
		$this->load->view('home/header');
		$this->load->view('home/aquarius');
		$this->load->view('home/footer');
	}
	public function pisces()
	{
		$this->load->view('home/header');
		$this->load->view('home/pisces');
		$this->load->view('home/footer');
	}
	public function pooja()
	{
		$data['pooja']=$this->model->getPooja();
		$data['pooja_category']=$this->model->poojaCategory();
		$this->load->view('home/header');
		$this->load->view('home/pooja',$data);
		$this->load->view('home/footer');
	}
	public function pooja_info($puja_id)
	{
		$data['pooja']=$this->model->getPooja($puja_id);
		$this->load->view('home/header');
		$this->load->view('home/pooja_info',$data);
		$this->load->view('home/footer');
	}
	public function  book_pooja($puja_id)
	{
		$this->check_login();
		$data['pooja']=$this->model->getPooja($puja_id);
		$this->load->view('home/header');
		$this->load->view('home/book_pooja',$data);
		$this->load->view('home/footer');
	}
	public function confirm_pooja_booking()
	{
		@$current_balance=$this->model->getCurrentBalance($this->session->userdata('email'));
		if($current_balance)
		{
		$form=$this->input->post();
		if($current_balance>=$form['puja_price']):
			$remain_balance=$current_balance-$form['puja_price'];
			$data=array(
			'puja_name'=>$form['puja_name'],
			'puja_price'=>$form['puja_price'],
			'puja_location'=>$form['puja_location'],
			'priest_preference'=>$form['priest_preference'],
			'puja_date'=>$form['puja_date'],
			'puja_time'=>$form['puja_time'],
			'name'=>$form['name'],
			'mobno'=>$form['mobno'],
			'email'=>$form['email'],
			'country'=>$form['country'],
			'state'=>$form['state'],
			'city'=>$form['city'],
			'pincode'=>$form['pincode'],
			'note'=>$form['note']
		);
		if($this->model->confirmPoojaBooking($data))
		{
			if($this->model->updateRemainingBalance($this->session->userdata('email'),$remain_balance)):
			$wallet=array(
				'email'=>$this->session->userdata('email'),
				'description'=>$form['puja_name'],
				'amount'=>$form['puja_price']
			);
			if($this->model->addWalletHistory($wallet)):
			echo "<script>alert('Your Booking is successful.');window.location.href='".base_url('home/pooja')."';</script>";
			endif;
			endif;
		}
		else
		{
			echo "<script>alert('Something went wrong');window.location.href='".base_url('home/pooja')."';</script>";
		}
		else:
		echo "<script>alert('Insufficiant Balance.Add money to your wallet and try again.');window.location.href='".base_url('home/pooja')."';</script>";
		endif;
		}
		else
		{
		echo "<script>alert('Unable to fetch balance.Try again later.');window.location.href='".base_url('home/pooja')."';</script>";
		}
	}
	public function wallet()
	{
		$data['current_balance']=$this->model->getCurrentBalance($this->session->userdata('email'));
		$this->load->view('home/header');
		$this->load->view('home/wallet',$data);
		$this->load->view('home/footer');
	}
	public function add_balance()
	{
		$this->check_login();
		$form_amount=$this->input->post('amount');
		$fname          = '';
		$product_name   = 'Add Balance';
		$email          = $this->session->userdata('email');
		$amount         = $form_amount;
		$contact        = '';
		$country        = 'Índia';
		$state          = '';
		$city           = '';
		$postalcode     = '';
		$address        = '';
		$obj = new \Paykun\Checkout\Payment('907827924705710', '9ADEC6FF0C1804049C84F02B0871B3AC', 'CA4CF211861A319F3A993FE8A672CC72', false,true);
		// $successUrl = str_replace("request", "successs", $_SERVER['HTTP_REFERER']);
		// $failUrl 	= str_replace("request", "failed", $_SERVER['HTTP_REFERER']);
		$successUrl=base_url('home/successpayy');
		$failUrl =base_url('home/failurepayment');
		$microtime = str_replace('.', '', microtime(true));
		$p_id=substr($microtime, 0, 14);
		$obj->initOrder($p_id, $product_name,  $amount, $successUrl,  $failUrl, 'INR');
		$obj->addCustomer($fname, $email, $contact);
		$obj->addShippingAddress($country,$state,$city,$postalcode,$address);
		$obj->addBillingAddress($address,$city,$state,$country,$postalcode);
		//$obj->setCustomFields(array('udf_1' =>$custom_field_1.'0'));
		echo $obj->submit();
	}
	public function successpay()
	{
		$obj = new \Paykun\Checkout\Payment('907827924705710', '9ADEC6FF0C1804049C84F02B0871B3AC', 'CA4CF211861A319F3A993FE8A672CC72', false,true);
		$response = $obj->getTransactionInfo($_REQUEST['payment-id']);
		if(is_array($response) && !empty($response)) {
    	if($response['status'] && $response['data']['transaction']['status'] == "Success") {
    	$payment_id=$response['data']['transaction']['payment_id'];
		$payment_mode=$response['data']['transaction']['payment_mode'];
		$order_id=$response['data']['transaction']['order']['order_id'];
		//$payment_for=$response['data']['transaction']['order']['product_name'];
 	    //$payment_status=$response['data']['transaction']['status'];
		$gross_amount=$response['data']['transaction']['order']['gross_amount'];
		//$name=$response['data']['transaction']['customer']['name'];
		$email_id=$response['data']['transaction']['customer']['email_id'];
		//$mobno=$response['data']['transaction']['customer']['mobile_no'];
		$data=array(
			'payment_id'=>$payment_id,
			'payment_mode'=>$payment_mode,
			'order_id'=>$order_id,
			'gross_amount'=>$gross_amount,
			'email_id'=>$email_id
		);
		$current_balance=$this->model->getCurrentBalance($this->session->userdata('email'));
		$remain_balance=$current_balance+$gross_amount;
		if($this->model->updateRemainingBalance($this->session->userdata('email'),$remain_balance)):
			if($this->model->addTransactionHistory($data))
		    {
			$this->session->set_flashdata('msg', "Balance added successfully on your wallet."); 
			redirect(base_url().'home/wallet');
			}
		    else 
		    {
		      $this->session->set_flashdata('msg', "Transaction Failed"); 
					redirect(base_url().'home/wallet');
		    }
		endif;
        }
		}
		}
		public function failurepayment()
		{
			$obj = new \Paykun\Checkout\Payment('907827924705710', '9ADEC6FF0C1804049C84F02B0871B3AC', 'CA4CF211861A319F3A993FE8A672CC72', false,true);
				$response = $obj->getTransactionInfo($_REQUEST['payment-id']);
				if(is_array($response) && !empty($response)) {
				if($response['status'] && $response['data']['transaction']['status'] == "Failed") {
		        $this->session->set_flashdata('msg', "Transaction Failed"); 
					redirect(base_url().'home/wallet');
		    }
			}
		}
		public function history()
		{
			$this->check_login();
			$data['order_history']=$this->model->getOrderHistory($this->session->userdata('email'));
			$data['wallet_history']=$this->model->getWalletHistory($this->session->userdata('email'));
			$data['transaction_history']=$this->model->getTransactionHistory($this->session->userdata('email'));
			$this->load->view('home/header');
			$this->load->view('home/history',$data);
			$this->load->view('home/footer');
		}
		public function disclaimer()
		{
			$this->load->view('home/header');
			$this->load->view('home/disclaimer');
			$this->load->view('home/footer');
		}
}
