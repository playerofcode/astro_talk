<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model','model');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$config=[
		 	'upload_path'=>'./upload/',
		 	'allowed_types'=>'gif|jpg|png|jpeg|pdf'
		 ];
		 $this->load->library('upload',$config);
	}
	public function index()
	{
		$this->load->view('admin/login');
	}
	public function login()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		if($this->model->login($email,$password)->num_rows()>0)
			{
				$this->session->set_userdata('email', $email);
		  	 	return redirect(base_url().'admin/dashboard');
			}
			else
			{
				$this->session->set_flashdata('msg', "Email/Password is incorrect. Try again");
  				return redirect(base_url().'admin/index');
			}

	}
	public function check_login()
	{
		if(empty($this->session->userdata('email')))
		{
		$this->session->set_flashdata('msg', "Please login to continue");
		redirect(base_url().'admin/index');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('msg', "Logged out successfully");
		return redirect(base_url().'admin/index');
	}
	public function dashboard()
	{
		$this->check_login();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	public function category()
	{
		$data['category_list']=$this->model->blogCategoryList();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/category',$data);
		$this->load->view('admin/footer');
	}
	public function add_blog_category()
	{

		$cat_name=$this->input->post('cat_name');
		$data=array(
			'cat_name'=>$cat_name
		);
		if($this->model->addBlogCategory($data))
		{
			$this->session->set_flashdata('msg','Category added successfully');
			return redirect(base_url().'admin/category');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/category');	
		}
	}
	public function delete_blog_category()
	{
		$cat_id=$this->uri->segment(3);
		if($this->model->delete_blog_category($cat_id))
			{
			$this->session->set_flashdata('msg','Category deleted successfully');
			return redirect(base_url().'admin/category');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/category');	
		}
	}
	public function edit_blog_category()
	{
		$cat_id=$this->uri->segment(3);
		$data['category']=$this->model->blogCategoryList($cat_id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_category',$data);
		$this->load->view('admin/footer');	
	}
	public function  update_blog_category()
	{
		$cat_id=$this->input->post('cat_id');
		$cat_name=$this->input->post('cat_name');
		$data=array(
			'cat_name'=>$cat_name
		);
		if($this->model->update_blog_category($cat_id,$data))
		{
			$this->session->set_flashdata('msg','Category updated successfully');
			return redirect(base_url().'admin/category');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/category');	
		}
	}
	public function blog()
	{
		$data['category_list']=$this->model->blogCategoryList();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/blog',$data);
		$this->load->view('admin/footer');	
	}
	public function add_blog()
	{
		$this->form_validation->set_rules('cat_id', 'Category Name', 'required');
		$this->form_validation->set_rules('blog_title', 'Blog Title', 'required');
		$this->form_validation->set_rules('blog_description', 'Blog Description', 'required');
		if($this->form_validation->run() && $this->upload->do_upload('blog_image'))
		{
			$cat_id=$this->input->post('cat_id');
			$blog_title=$this->input->post('blog_title');
			$image=$this->upload->data();
			$blog_image="upload/".$image['raw_name'].$image['file_ext'];
			$blog_description=$this->input->post('blog_description');
			$data=array(
				'cat_id'=>$cat_id,
				'blog_title'=>$blog_title,
				'blog_image'=>$blog_image,
				'blog_description'=>$blog_description	
			);
			if($this->model->add_blog($data))
		{
			$this->session->set_flashdata('msg','Blog posted successfully');
			return redirect(base_url().'admin/blog');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/blog');	
		}

		}
		else
		{
		$data['blog_image']=$this->upload->display_errors('<p class="text-danger">', '</p>');
		$data['category_list']=$this->model->blogCategoryList();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/blog',$data);
		$this->load->view('admin/footer');	
		}
	}
	public function blog_list()
	{
		$data['blog_list']=$this->model->getBlogList();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/blog_list',$data);
		$this->load->view('admin/footer');
	}
	public function delete_blog()
	{
		$id=$this->uri->segment(3);
		$blog_info=$this->model->getBlogList($id);
		$blog_image=$blog_info[0]->blog_image;
		if(!empty($blog_image))
		{
			@unlink($blog_image);
		}
		if($this->model->delete_blog($id))
		{
			$this->session->set_flashdata('msg','Blog deleted successfully');
			return redirect(base_url().'admin/blog_list');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/blog_list');
		}
	}
	public function edit_blog()
	{
	$id=$this->uri->segment(3);
	$data['blog']=$this->model->getBlogList($id);
	$data['category_list']=$this->model->blogCategoryList();
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/edit_blog',$data);
	$this->load->view('admin/footer');
	}
	public function update_blog($id)
	{
		$blog_info=$this->model->getBlogList($id);
		$old_blog_image=$blog_info[0]->blog_image;
		if($this->upload->do_upload('blog_image'))
		{
			if(!empty($old_blog_image))
			{
				@unlink($old_blog_image);
			}
			$image=$this->upload->data();
			$blog_image="upload/".$image['raw_name'].$image['file_ext'];
		}
		else
		{
			$blog_image=$old_blog_image;
		}
		$cat_id=$this->input->post('cat_id');
		$blog_title=$this->input->post('blog_title');
		$blog_description=$this->input->post('blog_description');
		$data=array(
			'cat_id'=>$cat_id,
			'blog_title'=>$blog_title,
			'blog_image'=>$blog_image,
			'blog_description'=>$blog_description
		);
		if($this->model->update_blog($data,$id))
		{
			$this->session->set_flashdata('msg','Blog updated successfully');
			return redirect(base_url().'admin/blog_list');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/blog_list');
		}
	}
	public function enquiry()
	{
		$data['enquiry']=$this->model->enquiry();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/enquiry',$data);
		$this->load->view('admin/footer');
	}
	public function delete_enquiry($id)
	{
		if($this->model->delete_enquiry($id))
		{
			$this->session->set_flashdata('msg','Enquiry deleted successfully');
			return redirect(base_url().'admin/enquiry');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/enquiry');
		}	
	}
	public function quote()
	{
		$data['quote']=$this->model->quote();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/quote',$data);
		$this->load->view('admin/footer');
	}
	public function delete_quote($id)
	{
		if($this->model->delete_quote($id))
		{
			$this->session->set_flashdata('msg','Quote deleted successfully');
			return redirect(base_url().'admin/quote');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/quote');
		}	
	}
	public function change_password()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/change_password');
		$this->load->view('admin/footer');	
	}
	public function check_password()
	{
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('newpassword', 'New Password', 'required|min_length[5]');
		$this->form_validation->set_rules('cpassword', 'Confirm password', 'required|matches[newpassword]');
		if($this->form_validation->run())
		{
			$username=$this->session->userdata('email');
		$password=$this->input->post('password');
		$newpassword=$this->input->post('newpassword');
		$cpassword=$this->input->post('cpassword');
		if($this->model->checkpassword($username,$password)->num_rows())
		{
				if($newpassword == $cpassword)
				{
					if($this->model->changepassword($username,$newpassword))
					{
						$this->session->set_flashdata('msg', "Your Password successfully changed"); 
		   				redirect(base_url().'admin/change_password');
					}
					else
					{
						$this->session->set_flashdata('msg', "Something went wrong"); 
		   				redirect(base_url().'admin/change_password');
					}
				}
				else
				{
					$this->session->set_flashdata('msg', "New Password not matched!"); 
	   				redirect(base_url().'admin/change_password');
				}	
		}
		else
		{
			$this->session->set_flashdata('msg', "Old Password not matched."); 
	   				redirect(base_url().'admin/change_password');
		}
		}
		else
		{
			$this->change_password();
		}
	}
	public function enquiryform()
	{
		$data['enquiryform']=$this->model->get_enquiryform();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/enquiryform',$data);
		$this->load->view('admin/footer');
	}
	public function delete_enquiryform($id)
	{
		if($this->model->delete_enquiryform($id))
		{
			$this->session->set_flashdata('msg','Enquiry deleted successfully');
			return redirect(base_url().'admin/enquiryform');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/enquiryform');
		}	
	}
	public function hiring()
	{
		$data['hiring']=$this->model->hiring();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/hiring',$data);
		$this->load->view('admin/footer');
	}
	public function delete_hiring($id)
	{
		$data=$this->model->hiring($id);	
		$cv=$data[0]->cv;
		if(!empty($cv))
		{
			@unlink($cv);
		}
		if($this->model->delete_hiring($id))
		{
			$this->session->set_flashdata('msg','Deleted successfully');
			return redirect(base_url().'admin/hiring');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/hiring');
		}
	}
	public function team()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/team');
		$this->load->view('admin/footer');
	}
	public function add_team()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('position', 'Position', 'required');
		$this->form_validation->set_rules('facebook', 'Facebook Link', 'valid_url');
		$this->form_validation->set_rules('instagram', 'Instagram Link', 'valid_url');
		$this->form_validation->set_rules('twitter', 'Twitter Link', 'valid_url');
		$this->form_validation->set_rules('linkedin', 'LinkedIn Link', 'valid_url');
		if($this->form_validation->run() && $this->upload->do_upload('member_image'))
		{
			$name=$this->input->post('name');
			$position=$this->input->post('position');
			$facebook=$this->input->post('facebook');
			$instagram=$this->input->post('instagram');
			$twitter=$this->input->post('twitter');
			$linkedin=$this->input->post('linkedin');
			$image=$this->upload->data();
			$member_image="upload/".$image['raw_name'].$image['file_ext'];
			$data=array(
				'name'=>$name,
				'position'=>$position,
				'facebook'=>$facebook,
				'instagram'=>$instagram,
				'twitter'=>$twitter,
				'linkedin'=>$linkedin,
				'member_image'=>$member_image	
			);
			if($this->model->add_team($data))
		{
			$this->session->set_flashdata('msg','Team member added successfully');
			return redirect(base_url().'admin/team');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/team');	
		}

		}
		else
		{
		$data['member_image']=$this->upload->display_errors('<p class="text-danger">', '</p>');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/team',$data);
		$this->load->view('admin/footer');	
		}
	}
	public function all_team()
	{
		$data['team']=$this->model->get_team();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/all_team',$data);
		$this->load->view('admin/footer');
	}
	public function delete_team($id)
	{
		$data=$this->model->get_team($id);
		$member_image=$data[0]->member_image;
		if(!empty($member_image))
		{
			@unlink($member_image);
		}
		if($this->model->delete_team($id))
		{
			$this->session->set_flashdata('msg','Team member deleted successfully');
			return redirect(base_url().'admin/all_team');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/all_team');
		}
	}
	public function edit_team($id)
	{
	$data['team']=$this->model->get_team($id);
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/edit_team',$data);
	$this->load->view('admin/footer');
	}
	public function update_team($id)
	{
		$data=$this->model->get_team($id);
		$old_member_image=$data[0]->member_image;
		if($this->upload->do_upload('member_image'))
		{
			if(!empty($old_member_image))
			{
				@unlink($old_member_image);
			}
			$image=$this->upload->data();
			$member_image="upload/".$image['raw_name'].$image['file_ext'];	
		}
		else
		{
			$member_image=$old_member_image;
		}
		$name=$this->input->post('name');
		$position=$this->input->post('position');
		$facebook=$this->input->post('facebook');
		$instagram=$this->input->post('instagram');
		$twitter=$this->input->post('twitter');
		$linkedin=$this->input->post('linkedin');
		$data=array(
			'name'=>$name,
			'position'=>$position,
			'facebook'=>$facebook,
			'instagram'=>$instagram,
			'twitter'=>$twitter,
			'linkedin'=>$linkedin,
			'member_image'=>$member_image	
		);
		if($this->model->update_team($data,$id))
		{
			$this->session->set_flashdata('msg','Team member updated successful');
			return redirect(base_url().'admin/all_team');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/all_team');
		}

	}
	public function enquiry_popup()
	{
		$data['enquiry_popup']=$this->model->enquiry_popup();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/enquiry_popup',$data);
		$this->load->view('admin/footer');
	}
	public function change_enuqiry_popup_status()
	{
		$id=$this->input->post('id');
		$status=$this->input->post('status');
		if($this->model->change_enuqiry_popup_status($status,$id))
		{
			$this->session->set_flashdata('msg','Enquiry Popup Status updated successfully');
			return redirect(base_url().'admin/enquiry_popup');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/enquiry_popup');
		}
	}
	public function offer_popup()
	{
		$data['offer_popup']=$this->model->offer_popup();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/offer_popup',$data);
		$this->load->view('admin/footer');
	}
	public function post_offer_popup()
	{
		if($this->upload->do_upload('image'))	
		{
		$img=$this->upload->data();
		$image="upload/".$img['raw_name'].$img['file_ext'];
		if($this->model->post_offer_popup($image))
		{
			$this->session->set_flashdata('msg','Offer Popup posted successfully');
			return redirect(base_url().'admin/offer_popup');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong'.$this->upload->display_errors());
			return redirect(base_url().'admin/offer_popup');
		}
		}
	}
	public function delete_offer_popup($id)
	{
		$data=$this->model->offer_popup($id);
		$image=$data[0]->image;
		if(!empty($image))
		{
			@unlink($image);
		}
		if($this->model->delete_offer_popup($id))
		{
			$this->session->set_flashdata('msg','Offer Popup deleted successfully');
			return redirect(base_url().'admin/offer_popup');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong'.$this->upload->display_errors());
			return redirect(base_url().'admin/offer_popup');
		}
	}
	public function change_status_testimonial($id)
	{
		if($this->model->change_status_testimonial($id))
		{
			$this->session->set_flashdata('msg',"testimonial activated successfully");
			return redirect(base_url().'admin/all_testimonial');
		}
		else
		{
			$this->session->set_flashdata('msg',"Something went wrong");
			return redirect(base_url().'admin/all_testimonial');
		}
	}
	public function career()
	{
		$data['career']=$this->model->getCareer();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/career',$data);
		$this->load->view('admin/footer');
	}
	public function add_client()
	{
		$this->form_validation->set_rules('link', 'Link', 'required');
		if($this->form_validation->run() && $this->upload->do_upload('image'))
		{
			$link=$this->input->post('link');
			$img=$this->upload->data();
			$image="upload/".$img['raw_name'].$img['file_ext'];
			$data=array(
				'image'=>$image,
				'link'=>$link	
			);
			if($this->model->add_client($data))
			{
				$this->session->set_flashdata('msg','Client added successfully');
				return redirect(base_url().'admin/client');
			}
			else
			{
				$this->session->set_flashdata('msg','Something went wrong');
				return redirect(base_url().'admin/client');
			}
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong '.$this->upload->display_errors());
			return  redirect(base_url().'admin/client');		
		}
	}
	public function delete_career($id)
	{
		$data=$this->model->getCareer($id);
		$cv=$data[0]->cv;
		if(!empty($cv))
		{
			@unlink($cv);
		}
		if($this->model->delete_career($id))
		{
			$this->session->set_flashdata('msg',"Client deleted successfully");
			return redirect(base_url().'admin/career');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url(),'admin/career');
		}
	}
	public function employee()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/employee');
		$this->load->view('admin/footer');
	}
	public function add_employee()
	{
		$this->form_validation->set_rules('employee_name', 'Employee Name', 'required');
		$this->form_validation->set_rules('employee_designation', 'Employee Designation', 'required');
		$this->form_validation->set_rules('employee_mobno', 'Employee Mobile Number', 'required|min_length[10]');
		$this->form_validation->set_rules('employee_email', 'Employee Email', 'required|valid_email');
		$this->form_validation->set_rules('employee_current_address', 'Employee Address', 'required|min_length[20]');
		$this->form_validation->set_rules('employee_password', 'Employee Password', 'required|min_length[8]');
		$this->form_validation->set_rules('c_employee_password', 'Confirm  Password', 'matches[employee_password]');
		if($this->form_validation->run() && $this->upload->do_upload('employee_image') &&  $this->upload->do_upload('employee_adhar') )
		{
			$employee_name=$this->input->post('employee_name');
			$employee_designation=$this->input->post('employee_designation');
			$employee_join_date=$this->input->post('employee_join_date');
			$employee_mobno=$this->input->post('employee_mobno');
			$employee_email=$this->input->post('employee_email');
			$employee_current_address=$this->input->post('employee_current_address');
			$employee_password=$this->input->post('employee_password');
			if($this->upload->do_upload('employee_image'))
			{
			$image=$this->upload->data();
			$employee_image="upload/".$image['raw_name'].$image['file_ext'];	
			}
			if($this->upload->do_upload('employee_adhar'))
			{
			$image=$this->upload->data();
			$employee_adhar="upload/".$image['raw_name'].$image['file_ext'];	
			}
			$data=array(
				'employee_name'=>$employee_name,
				'employee_designation'=>$employee_designation,
				'employee_join_date'=>$employee_join_date,
				'employee_mobno'=>$employee_mobno,
				'employee_email'=>$employee_email,
				'employee_current_address'=>$employee_current_address,
				'employee_password'=>$employee_password,	
				'employee_image'=>$employee_image,	
				'employee_adhar'=>$employee_adhar
			);
			if($this->model->add_employee($data))
		{
			$this->session->set_flashdata('msg','Employee added successfully');
			return redirect(base_url().'admin/employee');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/employee');	
		}

		}
		else
		{
		$data['employee_image']=$this->upload->display_errors('<p class="text-danger">', '</p>');
		$data['employee_image']=$this->upload->display_errors('<p class="text-danger">', '</p>');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/employee',$data);
		$this->load->view('admin/footer');	
		}
	}
	public function all_employee()
	{
		$data['employee']=$this->model->get_employee();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/all_employee',$data);
		$this->load->view('admin/footer');	
	}
	public function delete_employee($employee_id)
	{
		$data=$this->model->get_employee($employee_id);
		$employee_image=$data[0]->employee_image;
		$employee_adhar=$data[0]->employee_adhar;
		if(!empty($employee_image))
		{
			@unlink($employee_image);
		}
		if(!empty($employee_adhar))
		{
			@unlink($employee_adhar);
		}
		if($this->model->delete_employee($employee_id))
		{
			$this->session->set_flashdata('msg','Employee deleted successfully');
			return redirect(base_url().'admin/all_employee');
		}	
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/all_employee');
		}	
	}
	public function edit_employee($employee_id)
	{
	$data['employee']=$this->model->get_employee($employee_id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_employee',$data);
		$this->load->view('admin/footer');
	}
	public function attendance()
	{
		$data['attendance']=$this->model->get_attendance();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/attendance',$data);
		$this->load->view('admin/footer');
	}
	public function employee_report()
	{
		$this->load->view('admin/header');	
		$this->load->view('admin/sidebar');	
		$this->load->view('admin/employee_report');	
		$this->load->view('admin/footer');	
	}
	public function generate_employee_report()
	{
		$employee_id=$this->input->post('employee_id');
		$start_date=$this->input->post('start_date');
		$end_date=$this->input->post('end_date');
		$data=$this->model->generate_employee_report($employee_id,$start_date,$end_date);
		$this->load->library('pdf');
		$html_content='<h1 align="center">Employee Report | Employee ID :'.$employee_id.'</h1><hr>';
		$html_content.=$this->model->generate_employee_report($employee_id,$start_date,$end_date);
		$this->pdf->loadHtml($html_content);
		$this->pdf->render();
		$this->pdf->stream("Report",array("Attachment"=>0));
	}
	public function change_blog_status($id)
	{
		if($this->model->change_blog_status($id))
		{
			$this->session->set_flashdata('msg','Blog activated successfully');
			return redirect(base_url().'admin/blog_list');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/blog_list');
		}
	}
	public function free_inspection()
	{
		$data['free_inspection']=$this->model->free_inspection();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/free_inspection',$data);
		$this->load->view('admin/footer');
	}
	public function delete_free_inspection($id)
	{
		if($this->model->delete_free_inspection($id))
		{
			$this->session->set_flashdata('msg','Request deleted successfully');
			return redirect(base_url().'admin/free_inspection');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/free_inspection');
		}
	}
	public function reply_ticket($id)
	{
		$data['ticket']=$this->model->getTicket($id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/reply_ticket',$data);
		$this->load->view('admin/footer');
	}
	public function add_reply_ticket()
	{
		$reply=$this->input->post('reply');
		$id=$this->input->post('id');
		if($this->model->add_reply_ticket($reply,$id))
		{
		$this->session->set_flashdata('msg','Reply added successfully');
			return redirect(base_url().'admin/ticket');
		}
		else
		{
			$this->load->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/ticket');
		}
	}
	public function update_employee($employee_id)
	{
		$data=$this->model->get_employee($employee_id);
		$old_employee_image=$data[0]->employee_image;
		$old_employee_adhar=$data[0]->employee_adhar;
		$this->form_validation->set_rules('employee_name', 'Employee Name', 'required');
		$this->form_validation->set_rules('employee_designation', 'Employee Designation', 'required');
		$this->form_validation->set_rules('employee_mobno', 'Employee Mobile Number', 'required|min_length[10]');
		$this->form_validation->set_rules('employee_email', 'Employee Email', 'required|valid_email');
		$this->form_validation->set_rules('employee_current_address', 'Employee Address', 'required|min_length[20]');
		$this->form_validation->set_rules('employee_password', 'Employee Password', 'required|min_length[8]');
		if($this->form_validation->run())
		{
			$employee_name=$this->input->post('employee_name');
			$employee_designation=$this->input->post('employee_designation');
			$employee_join_date=$this->input->post('employee_join_date');
			$employee_mobno=$this->input->post('employee_mobno');
			$employee_email=$this->input->post('employee_email');
			$employee_current_address=$this->input->post('employee_current_address');
			$employee_password=$this->input->post('employee_password');
			if($this->upload->do_upload('employee_image'))
			{
				if(!empty($old_employee_image))
				{
					@unlink($old_employee_image);
				}
			$image=$this->upload->data();
			$employee_image="upload/".$image['raw_name'].$image['file_ext'];
			}
			else
			{
				$employee_image=$old_employee_image;
			}
			if($this->upload->do_upload('employee_adhar'))
			{
				if(!empty($old_employee_adhar))
				{
					@unlink($old_employee_adhar);
				}
			$image=$this->upload->data();
			$employee_adhar="upload/".$image['raw_name'].$image['file_ext'];
			}
			else
			{
				$employee_adhar=$old_employee_adhar;
			}
			$data=array(
				'employee_name'=>$employee_name,
				'employee_designation'=>$employee_designation,
				'employee_join_date'=>$employee_join_date,
				'employee_mobno'=>$employee_mobno,
				'employee_email'=>$employee_email,
				'employee_current_address'=>$employee_current_address,
				'employee_password'=>$employee_password,	
				'employee_image'=>$employee_image,	
				'employee_adhar'=>$employee_adhar
			);
			if($this->model->update_employee($data,$employee_id))
			{
			$this->session->set_flashdata('msg','Employee Detail Updated Successfully');
			return redirect(base_url().'admin/all_employee');
			}
			else
			{
				$this->session->set_flashdata('msg','Something went wrong');
				return redirect(base_url().'admin/all_employee');
			}


		}
		else
		{
		$data['employee']=$this->model->get_employee($employee_id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_employee',$data);
		$this->load->view('admin/footer');
		}
	}
	public function service()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/service');
		$this->load->view('admin/footer');
	}
	public function add_service()
	{
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		if($this->form_validation->run() && $this->upload->do_upload('image'))
		{
			$title=$this->input->post('title');
			$description=$this->input->post('description');
			$img=$this->upload->data();
			$image="upload/".$img['raw_name'].$img['file_ext'];
			$data=array(
				'title'=>$title,
				'description'=>$description,
				'image'=>$image
			);
			if($this->model->add_service($data))
		{
			$this->session->set_flashdata('msg','Testimonial added successfully');
			return redirect(base_url().'admin/service');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/service');	
		}

		}
		else
		{
		$data['upload_error']=$this->upload->display_errors('<p class="text-danger">', '</p>');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/service',$data);
		$this->load->view('admin/footer');	
		}
	}
	public function all_service()
	{
		$data['service']=$this->model->getService();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/all_service',$data);
		$this->load->view('admin/footer');
	}
	public function delete_service($id)
	{
		$data=$this->model->getService($id);
		$image=$data[0]->image;
		if(!empty($image))
		{
			@unlink($image);
		}
		if($this->model->delete_service($id))
		{
			$this->session->set_flashdata('msg',"Service deleted successfully");
			return redirect(base_url().'admin/all_service');
		}
		else
		{
			$this->session->set_flashdata('msg',"Something went wrong");
			return redirect(base_url().'admin/all_service');
		}
	}
	public function edit_service($id)
	{
		$data['service']=$this->model->getService($id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_service',$data);
		$this->load->view('admin/footer');
	}
	public function update_service($id)
	{
		$data=$this->model->getService($id);
		$old_image=$data[0]->image;
		if($this->upload->do_upload('image'))
		{
			if(!empty($old_image))
			{
				@unlink($old_image);
			}
			$img=$this->upload->data();
			$image="upload/".$img['raw_name'].$img['file_ext'];	
		}
		else
		{
			$image=$old_image;
		}
		$data=array(
				'title'=>$this->input->post('title'),
				'description'=>$this->input->post('description'),
				'image'=>$image
			);
			if($this->model->update_service($data,$id))
		{
			$this->session->set_flashdata('msg','Service updated successfully');
			return redirect(base_url().'admin/all_service');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/all_service');	
		}
	}
	//Updated 11 July, 2021
	public function pooja_category()
	{
		$data['category']=$this->model->getPoojaCategry();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/pooja_category',$data);
		$this->load->view('admin/footer');
	}
	public function add_pooja_category()
	{
		$cat_name=$this->input->post('cat_name');
		$data=array(
			'cat_name'=>$cat_name
		);
		if($this->model->addPoojaCategory($data))
		{
			$this->session->set_flashdata('msg','Pooja category added successfully');
			return redirect(base_url().'admin/pooja_category');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/pooja_category');	
		}
	}
	public function delete_pooja_category($cat_id)
	{
		if($this->model->deletePoojaCategory($cat_id))
		{
			$this->session->set_flashdata('msg','Pooja category deleted successfully');
			return redirect(base_url().'admin/pooja_category');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/pooja_category');	
		}
	}	
	public function edit_pooja_category($cat_id)
	{
		$data['category']=$this->model->getPoojaCategry($cat_id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_pooja_category',$data);
		$this->load->view('admin/footer');
	}
	public function update_pooja_category($cat_id)
	{
		$cat_name=$this->input->post('cat_name');
		if($this->model->updatePoojaCategory($cat_id,$cat_name))
		{
			$this->session->set_flashdata('msg','Pooja category updated successfully');
			return redirect(base_url().'admin/pooja_category');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/pooja_category');	
		}
	}
	public function pooja()
	{
		$data['category']=$this->model->getPoojaCategry();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/pooja',$data);
		$this->load->view('admin/footer');
	}
	public function add_pooja()
	{
		$this->form_validation->set_rules('puja_name', 'Pooja Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		if($this->form_validation->run() && $this->upload->do_upload('puja_img'))
		{
			$cat_id=$this->input->post('cat_id');
			$puja_name=$this->input->post('puja_name');
			$description=$this->input->post('description');
			$price=$this->input->post('price');
			$img=$this->upload->data();
			$puja_img="upload/".$img['raw_name'].$img['file_ext'];
			$data=array(
				'cat_id'=>$cat_id,
				'puja_img'=>$puja_img,
				'puja_name'=>$puja_name,
				'description'=>$description,
				'price'=>$price
			);
			if($this->model->addPooja($data))
		{
			$this->session->set_flashdata('msg','Pooja added successfully');
			return redirect(base_url().'admin/pooja');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/pooja');	
		}

		}
		else
		{
		$data['category']=$this->model->getPoojaCategry();
		$data['upload_error']=$this->upload->display_errors('<p class="text-danger">', '</p>');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/pooja',$data);
		$this->load->view('admin/footer');	
		}
	}
	public function all_pooja()
	{
		$data['pooja']=$this->model->getPooja();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/all_pooja',$data);
		$this->load->view('admin/footer');
	}
	public function delete_pooja($puja_id)
	{
		$data=$this->model->getPooja($puja_id);
		$image=$data[0]->puja_img;
		if(!empty($image))
		{
			@unlink($image);
		}
		if($this->model->deletePuja($puja_id))
		{
			$this->session->set_flashdata('msg',"Pooja deleted successfully");
			return redirect(base_url().'admin/all_pooja');
		}
		else
		{
			$this->session->set_flashdata('msg',"Something went wrong");
			return redirect(base_url().'admin/all_pooja');
		}
	}
	public function edit_pooja($puja_id)
	{
		$data['category']=$this->model->getPoojaCategry();
		$data['pooja']=$this->model->getPooja($puja_id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_pooja',$data);
		$this->load->view('admin/footer');
	}
	public function update_pooja($puja_id)
	{
		$data=$this->model->getPooja($puja_id);
		$old_image=$data[0]->puja_img;
		if($this->upload->do_upload('puja_img'))
		{
			if(!empty($old_image))
			{
				@unlink($old_image);
			}
			$img=$this->upload->data();
			$puja_img="upload/".$img['raw_name'].$img['file_ext'];	
		}
		else
		{
			$puja_img=$old_image;
		}
		$data=array(
				'cat_id'=>$this->input->post('cat_id'),
				'puja_img'=>$puja_img,
				'puja_name'=>$this->input->post('puja_name'),
				'description'=>$this->input->post('description'),
				'price'=>$price
			);
		if($this->model->updatePooja($data,$puja_id))
		{
			$this->session->set_flashdata('msg','Pooja updated successfully');
			return redirect(base_url().'admin/all_pooja');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/all_pooja');	
		}
	}
	public function kundali()
	{
		$data['kundali']=$this->model->getKundali();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kundali',$data);
		$this->load->view('admin/footer');
	}
	public function delete_kundali_request($id)
	{
	if($this->model->deleteKundaliRequest($id))
		{
			$this->session->set_flashdata('msg','Kundali request deleted successfully');
			return redirect(base_url().'admin/kundali');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/kundali');	
		}
	}
	public function astrologer()
	{
		$data['astrologer']=$this->model->getAstrologer();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/astrologer',$data);
		$this->load->view('admin/footer');
	}
	public function astrologerInfo($id)
	{
		$data['astrologer']=$this->model->getAstrologer($id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/astrologer_info',$data);
		$this->load->view('admin/footer');
	}
	public function astro_mall_category()
	{
		$data['astro_mall_category']=$this->model->getAstroMallCategory();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/astro_mall_category',$data);
		$this->load->view('admin/footer');
	}
	public function add_astro_mall_category()
	{
		$cat_name=$this->input->post('cat_name');
		$data=array(
				'cat_name'=>$cat_name
		);
		if($this->model->addAstroMallCategory($data))
		{
			$this->session->set_flashdata('msg','Astro Mall Category added successfully');
			return redirect(base_url().'admin/astro_mall_category');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/astro_mall_category');	
		}
	}
	public function delete_astro_mall_category($cat_id)
	{
		if($this->model->deleteAstroMallCategory($cat_id))
		{
			$this->session->set_flashdata('msg','Astro Mall Category deleted successfully');
			return redirect(base_url().'admin/astro_mall_category');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/astro_mall_category');	
		}
	}
	public function edit_astro_mall_category($cat_id)
	{
		$data['astro_mall_category']=$this->model->getAstroMallCategory($cat_id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_astro_mall_category',$data);
		$this->load->view('admin/footer');
	}
	public function update_astro_mall_category($cat_id)
	{
		$cat_name=$this->input->post('cat_name');
		$data=array(
				'cat_name'=>$cat_name
		);
		if($this->model->updateAstroMallCategory($cat_id,$data))
		{
			$this->session->set_flashdata('msg','Astro Mall Category updated successfully');
			return redirect(base_url().'admin/astro_mall_category');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/astro_mall_category');	
		}
	}
	public function astro_mall_product()
	{
		$data['category']=$this->model->getAstroMallCategory();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/astro_mall_product',$data);
		$this->load->view('admin/footer');
	}
	public function add_astro_mall_product()
	{
		$this->form_validation->set_rules('cat_id', 'Category Name', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('quantity', 'Quantity', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		if($this->form_validation->run() && $this->upload->do_upload('image'))
		{
			$cat_id=$this->input->post('cat_id');
			$name=$this->input->post('name');
			$description=$this->input->post('description');
			$price=$this->input->post('price');
			$quantity=$this->input->post('quantity');
			$img=$this->upload->data();
			$image="upload/".$img['raw_name'].$img['file_ext'];
			$data=array(
				'cat_id'=>$cat_id,
				'name'=>$name,
				'image'=>$image,
				'quantity'=>$quantity,
				'description'=>$description,
				'price'=>$price
			);
		if($this->model->addAstroMallProduct($data))
		{
			$this->session->set_flashdata('msg','Product added successfully');
			return redirect(base_url().'admin/astro_mall_product');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/astro_mall_product');	
		}

		}
		else
		{
		$data['category']=$this->model->getAstroMallCategory();
		$data['upload_error']=$this->upload->display_errors('<p class="text-danger">', '</p>');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/astro_mall_product',$data);
		$this->load->view('admin/footer');	
		}
	}
	public function astro_mall_product_list()
	{
		$data['astro_mall_product']=$this->model->getAstroMallProduct();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/astro_mall_product_list',$data);
		$this->load->view('admin/footer');
	}
	public function delete_astro_mall_product($id)
	{
		$data=$this->model->getAstroMallProduct($id);
		$image=$data[0]->image;
		if(!empty($image))
		{
			@unlink($image);
		}
		if($this->model->deleteAstroMallProduct($id))
		{
			$this->session->set_flashdata('msg',"Astro Mall Product deleted successfully");
			return redirect(base_url().'admin/astro_mall_product_list');
		}
		else
		{
			$this->session->set_flashdata('msg',"Something went wrong");
			return redirect(base_url().'admin/astro_mall_product_list');
		}
	}
	public function edit_astro_mall_product($id)
	{
		$data['category']=$this->model->getAstroMallCategory();
		$data['astro_mall_product']=$this->model->getAstroMallProduct($id);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/edit_astro_mall_product',$data);
		$this->load->view('admin/footer');
	}
	public function update_astro_mall_product($id)
	{
		$old=$this->model->getAstroMallProduct($id);
		$old_image=$old[0]->image;
		if($this->upload->do_upload('image'))
		{
			if(!empty($old_image))
			{
				@unlink($old_image);
			}
			$img=$this->upload->data();
			$image="upload/".$img['raw_name'].$img['file_ext'];	
		}
		else
		{
			$image=$old_image;
		}
			$cat_id=$this->input->post('cat_id');
			$name=$this->input->post('name');
			$description=$this->input->post('description');
			$price=$this->input->post('price');
			$quantity=$this->input->post('quantity');
			$data=array(
				'cat_id'=>$cat_id,
				'name'=>$name,
				'image'=>$image,
				'quantity'=>$quantity,
				'description'=>$description,
				'price'=>$price
			);
		if($this->model->updateAstroMallProduct($data,$id))
		{
			$this->session->set_flashdata('msg','Product updated successfully');
			return redirect(base_url().'admin/astro_mall_product_list');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/astro_mall_product_list');	
		}
	}
	public function pooja_booking()
	{
		$data['pooja_booking']=$this->model->getPoojaBooking();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/pooja_booking',$data);
		$this->load->view('admin/footer');
	}
	public function confirm_booking_status($id)
	{
	if($this->model->confirmBookingStatus($id))
		{
			$this->session->set_flashdata('msg','Pooja Booking confirmed successfully');
			return redirect(base_url().'admin/pooja_booking');
		}
		else
		{
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'admin/pooja_booking');	
		}
	}
}







