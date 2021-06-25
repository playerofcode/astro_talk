
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function createUser($data)
	{
     return $this->db->insert('users',$data);
	}
	public function createAstrologer($data)
	{
     return $this->db->insert('astrologers',$data);
	}
	public function createKundali($data)
	{
     return $this->db->insert('kundali',$data);
	}
	public function userLogin($email,$password)
	{
		return  $this->db->get_where('users', array('email' => $email,'password'=>$password));
	}
	public function num_rows()
	{
		return $this->db->get('blog')->num_rows();
	}
	public function get_blog($limit,$offset)
	{				
		$this->db->where('status','active');
		$this->db->order_by('id','DESC');
		$this->db->limit($limit,$offset);
		return $this->db->get('blog')->result();
	}
	public function get_blog_by_category($cat_id)
	{
		$this->db->order_by('id','DESC');
		return $this->db->get_where('blog',array('cat_id'=>$cat_id))->result();
	}
	public function Recent_blog()
	{
		$this->db->order_by('id','DESC');
		$this->db->limit(5);
		return $this->db->get('blog')->result();
	}
	public function get_category()
	{
		return $this->db->get('blog_category')->result();
	}
	public function getBlogById($id)
	{
		return $this->db->get_where('blog',array('id'=>$id))->result();
	}
	public function getAstrologer($id='')
	{
		if($id):
		return $this->db->get_where('astrologers',array('id'=>$id))->result();
		endif;
		return $this->db->get('astrologers')->result();
	}
	public function getEnquiry($data)
	{
		return $this->db->insert('contact',$data);
	}
	public function getAstroMallCategory()
	{
		return $this->db->get('astro_mall_category')->result();
	}
	public function getAstroMallProduct($id='')
	{
		if($id):
		return $this->db->get_where('astro_mall',array('id'=>$id))->result();
		endif;
		return $this->db->get('astro_mall')->result();
	}
	public function getPooja($puja_id='')
	{
		if($puja_id):
			return $this->db->get_where('pujas',array('puja_id'=>$puja_id))->result();
		endif;
		$this->db->order_by('puja_id','DESC');
		return $this->db->get('pujas')->result();
	}
	public function poojaCategory($cat_id='')
	{
		if($cat_id):
			return $this->db->get_where('puja_category',array('cat_id'=>$cat_id))->result();
		endif;
		$this->db->order_by('cat_id','DESC');
		return $this->db->get('puja_category')->result();
	}
	//24 July, 2021
	public function getCurrentBalance($email)
	{
		return $this->db->get_where('users',array('email'=>$email))->row()->balance;
	}
	public function confirmPoojaBooking($data)
	{
		return $this->db->insert('booking',$data);
	}
	public function updateRemainingBalance($email,$remain_balance)
	{
		$this->db->where('email',$email);
		return $this->db->update('users',array('balance'=>$remain_balance));
	}
	public function addWalletHistory($wallet)
	{
		return $this->db->insert('wallet_history',$wallet);
	}
	public function addTransactionHistory($data)
	{
		return $this->db->insert('transaction_history',$data);
	}
	public function getOrderHistory($email)
	{
		$this->db->order_by('id','desc');
		return $this->db->get_where('booking',array('email'=>$email))->result();
	}
	public function getWalletHistory($email)
	{
		$this->db->order_by('id','desc');
		return $this->db->get_where('wallet_history',array('email'=>$email))->result();
	}
	public function getTransactionHistory($email)
	{
		$this->db->order_by('id','desc');
		return $this->db->get_where('transaction_history',array('email_id'=>$email))->result();
	}
}




