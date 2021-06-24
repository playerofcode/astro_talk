<?php 

class Admin_model extends CI_model
{
	public function login($email,$password)
	{
		return  $this->db->get_where('admin', array('email' => $email,'password'=>$password));
	}
	public function addBlogCategory($data)
	{
		return $this->db->insert('blog_category',$data);
	}
	public function blogCategoryList($cat_id='')
	{
		if($cat_id)
		{
			return $this->db->get_where('blog_category',array('cat_id'=>$cat_id))->result();
		}
		else
		{
		$this->db->order_by('cat_id','DESC');
		return $this->db->get('blog_category')->result();
		}
		
	}
	public function delete_blog_category($cat_id)
	{
		return $this->db->delete('blog_category',array('cat_id'=>$cat_id));
	}
	public function update_blog_category($cat_id,$data)
	{
		$this->db->where('cat_id',$cat_id);
		return $this->db->update('blog_category',$data);
	}
	public function add_blog($data)
	{
		return $this->db->insert('blog',$data);
	}
	public function getBlogList($id='')
	{
		if($id)
		{
			return $this->db->get_where('blog',array('id'=>$id))->result();
		}
		else
		{
			$this->db->order_by('id','DESC');
			return $this->db->get('blog')->result();
		}
	}
	public function delete_blog($id)
	{
		return $this->db->delete('blog',array('id'=>$id));
	}
	public function update_blog($data,$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('blog',$data);
	}
	public function enquiry()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('contact')->result();
	}
	public function delete_enquiry($id)
	{
		return $this->db->delete('contact',array('id'=>$id));
	}
	public function quote()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('quote')->result();
	}
	public function delete_quote($id)
	{
		return $this->db->delete('quote',array('id'=>$id));
	}
	public function checkpassword($username,$password)
 	{
 		return $this->db->get_where('admin', array('email' => $username,'password'=>$password));
 	}
 	public function changepassword($username,$newpassword)
 	{
 		$this->db->where('email', $username);
		return $this->db->update('admin', array('password' => $newpassword));
 	}
 	public function get_enquiryform()
 	{
 		$this->db->order_by('id','DESC');
 		return $this->db->get('enquiryform')->result();
 	}
 	public function delete_enquiryform($id)
 	{
 		return $this->db->delete('enquiryform',array('id'=>$id));
 	}
 	public function hiring($id='')
	 {
 	if($id)
 	{
 		return $this->db->get_where('hiring',array('id'=>$id))->result();
 	}
	 $this->db->order_by('id','DESC');
	 return $this->db->get('hiring')->result();
	 }
	 public  function delete_hiring($id)
	 {
	 	return $this->db->delete('hiring',array('id'=>$id));
	 }
	 public function add_team($data)
	 {
	 	return $this->db->insert('team',$data);
	 }
	 public function get_team($id='')
	 {
	 	if($id)
	 	{
	 		return $this->db->get_where('team',array('id'=>$id))->result();
	 	}
	 	else{
	 		$this->db->order_by('id','DESC');
	 		return $this->db->get('team')->result();
	 	}
	 }
	 public function delete_team($id)
	 {
	 	return $this->db->delete('team',array('id'=>$id));
	 }
	 public function update_team($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('team',$data);
	 }
	 public function enquiry_popup()
	 {
	 	return $this->db->get('enquiry_popup')->result();
	 }
	 public function change_enuqiry_popup_status($status,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('enquiry_popup',array('status'=>$status));
	 }
	 public function offer_popup($id='')
	 {
	 	if($id)
	 	{
	 		return $this->db->get_where('offer_popup',array('id'=>$id))->result();
	 	}
	 	return $this->db->get('offer_popup')->result();
	 }
	 public function post_offer_popup($image)
	 {
	 	return $this->db->insert('offer_popup',array('image'=>$image));
	 }
	 public function delete_offer_popup($id)
	 {
	 	return $this->db->delete('offer_popup',array('id'=>$id));
	 }
	 public function  add_testimonial($data)
	 {
	 	return $this->db->insert('testimonials',$data);
	 }
	 public function testimonial($id='')
	 {
	 	if($id)
	 	{
	 		return $this->db->get_where('testimonials',array('id'=>$id))->result();
	 	}
	 	else
	 	{
	 		$this->db->order_by('id','DESC');
	 		return $this->db->get('testimonials')->result();
	 	}
	 }	
	 public function delete_testimonial($id)
	 {
	 	return $this->db->delete('testimonials',array('id'=>$id));
	 }
	 public function change_status_testimonial($id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('testimonials',array('status'=>'active'));
	 }
	 public function add_client($data)
	 {
	 	return $this->db->insert('client',$data);
	 }
	 public function add_employee($data)
	 {
	 	return $this->db->insert('employee_mgmt',$data);
	 }
	 public function get_employee($employee_id='')
	 {
	 	if($employee_id)
	 	{
	 		return $this->db->get_where('employee_mgmt',array('employee_id'=>$employee_id))->result();
	 	}
	 	$this->db->order_by('employee_id','DESC');
	 	return $this->db->get('employee_mgmt')->result();
	 }
	 public function delete_employee($employee_id)
	 {
	 	return $this->db->delete('employee_mgmt',array('employee_id'=>$employee_id));
	 }
	 public function get_attendance($employee_id='')
	 {
	 	if($employee_id)
	 	{
	 		return $this->db->get_where('attendance',array('employee_id'=>$employee_id))->result();
	 	}
	 	else
	 	{
	 		$this->db->order_by('id','DESC');
	 		$this->db->join('employee_mgmt', 'employee_mgmt.employee_id = attendance.employee_id', 'left');
	 		return $this->db->get('attendance')->result();
	 	}
	 }
	 public function generate_employee_report($employee_id,$start_date,$end_date)
	 {
	 	$this->db->where('employee_id',$employee_id);
	 	$this->db->where('date >=',$start_date); 
		$this->db->where('date <=',$end_date);
		$data=$this->db->get('attendance')->result();
		$i=1;
		$output ='<table border="1" cellpadding="5" cellspacing="0" width="100%">';
		$output.='<tr>
	    			<td>S.No.</td>
	    			<td>Date</td>
					<td>Start Work</td>
					<td>Break Time</td>
					<td>Break End</td>
					<td>Tea Time Start</td>
					<td>Tea Time End</td>
					<td>End Work</td>
					</tr>';
		foreach ($data as $key) {
		$output.='<tr>
						<td>'.$i.'</td>
						<td>'.$key->date.'</td>
						<td>'.$key->start_time.'</td>
						<td>'.$key->break_start.'</td>
						<td>'.$key->break_end.'</td>
						<td>'.$key->tea_break_start.'</td>
						<td>'.$key->tea_break_end.'</td>
						<td>'.$key->end_time.'</td>
				  </tr>';
				  $i++;
		}
		return $output;
	 }
	 public function change_blog_status($id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('blog',array('status'=>'active'));
	 }
	 public function getTicket($id='')
	 {
	 	if($id)
	 	{
	 	return $this->db->get_where('ticket',array('id'=>$id))->result();
	 	}
	 	else
	 	{
	 		$this->db->order_by('id','DESC');
	 		return $this->db->get('ticket')->result();
	 	}
	 }
	 public function add_reply_ticket($reply,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('ticket',array('reply'=>$reply));
	 }
	 public function send_chat_message($data)
	{
		return $this->db->insert('chat',$data);
	}
	 public function update_employee($data,$employee_id)
	 {
	 	$this->db->where('employee_id',$employee_id);
	 	return $this->db->update('employee_mgmt',$data);
	 }
	 //New Code Here 26/05/2020
	 public function free_inspection()
	 {
	 	$this->db->order_by('id','DESC');
	 	return $this->db->get('free_inspection')->result();
	 }
	 public function delete_free_inspection($id)
	 {
	 	return $this->db->delete('free_inspection',array('id'=>$id));
	 }
	 public function getCareer($id='')
	 {
	 	if($id)
	 	{
	 		return $this->db->get_where('career',array('id'=>$id))->result();
	 	}
	 	else
	 	{
	 	$this->db->order_by('id','DESC');
	 	return $this->db->get('career')->result();	
	 	}
	 }
	 public function delete_career($id)
	 {
	 	return $this->db->delete('career',array('id'=>$id));
	 }
	 //updated 27/05/2021
	 public function add_service($data)
	 {
	 	return $this->db->insert('services',$data);
	 }
	 public function getService($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('services',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','DESC');
	 		return $this->db->get('services')->result();
	 	endif;
	 }
	 public function delete_service($id)
	 {
	 	return $this->db->delete('services',array('id'=>$id));
	 }
	 public function update_service($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('services',$data);
	 }
	 //Updated 10 July, 2021
	 public function getPoojaCategry($cat_id='')
	 {
	 	if($cat_id):
	 		return $this->db->get_where('puja_category',array('cat_id'=>$cat_id))->result();
	 	endif;
	 	return $this->db->get('puja_category')->result();
	 }
	 public function addPoojaCategory($data)
	 {
	 	return $this->db->insert('puja_category',$data);
	 }
	 public function deletePoojaCategory($cat_id)
	 {
	 	return $this->db->delete('puja_category',array('cat_id'=>$cat_id));
	 }
	 public function updatePoojaCategory($cat_id,$cat_name)
	 {
	 	$this->db->where('cat_id',$cat_id);
		return $this->db->update('puja_category',array('cat_name'=>$cat_name));
	 }
	 public function addPooja($data)
	 {
	 	return $this->db->insert('pujas',$data);
	 }
	 public function getPooja($puja_id='')
	 {
	 	if($puja_id):
	 	return $this->db->get_where('pujas',array('puja_id'=>$puja_id))->result();
	 	endif;
	 	return $this->db->get('pujas')->result();
	 }
	 public function deletePuja($puja_id)
	 {
	 	return $this->db->delete('pujas',array('puja_id'=>$puja_id));
	 }
	 public function updatePooja($data,$puja_id)
	 {
	 	$this->db->where('puja_id',$puja_id);
	 	return $this->db->update('pujas',$data);
	 }
	 public function getKundali()
	 {
	 	$this->db->order_by('id','desc');
	 	return $this->db->get('kundali')->result();
	 }
	 public function deleteKundaliRequest($id)
	 {
	 	return $this->db->delete('kundali',array('id'=>$id));
	 }
	 public function getAstrologer($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('astrologers',array('id'=>$id))->result();
	 	endif;
	 	$this->db->order_by('id','desc');
	 	return $this->db->get('astrologers')->result();
	 }
	 public function getAstroMallCategory($id="")
	 {
	 	if($id):
	 	return $this->db->get_where('astro_mall_category',array('cat_id'=>$id))->result();
	 	endif;
	 	$this->db->order_by('cat_id','DESC');
	 	return $this->db->get('astro_mall_category')->result();
	 }
	 public function addAstroMallCategory($data)
	 {
	 	return $this->db->insert('astro_mall_category',$data);
	 }
	 public function deleteAstroMallCategory($cat_id)
	 {
	 	return $this->db->delete('astro_mall_category',array('cat_id'=>$cat_id));
	 }
	 public function updateAstroMallCategory($cat_id,$data)
	 {
	 	$this->db->where('cat_id',$cat_id);
	 	return $this->db->update('astro_mall_category',$data);
	 }
	 public function addAstroMallProduct($data)
	 {
	 	return $this->db->insert('astro_mall',$data);
	 }
	 public function getAstroMallProduct($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('astro_mall',array('id'=>$id))->result();
	 	endif;
	 	$this->db->order_by('id','DESC');
	 	return $this->db->get('astro_mall')->result();
	 }
	 public function deleteAstroMallProduct($id)
	 {
	 	return $this->db->delete('astro_mall',array('id'=>$id));
	 }
	 public function updateAstroMallProduct($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('astro_mall',$data);
	 }
}

?>















