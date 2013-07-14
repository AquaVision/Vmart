<?php

class My_items extends CI_Controller 
{

    public $select_data = array();
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Add_item_model');
        $this->load->library('form_validation');
        $this->load->library("pagination");

        
        $this->select_data['seller_categories'] = $this->Add_item_model->get_seller_categories(getUserID(),'ACTIVE');
        $this->select_data['vmart_categories'] = $this->Add_item_model->get_vmart_categories();

    }
    
    public function index() 
    {   
        $items_summary = array();
        
        $config = array();
        $config["base_url"] = base_url() . "My_items/index";
        $config["total_rows"] = $this->Add_item_model->view_items_count(getUserID());
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        
        $config['full_tag_open'] = '<div class="pagination pagination-small pagination-centered"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['prev_link'] = '&lt; Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->select_data["view_items_data"] = $this->Add_item_model->view_items(getUserID(),$config["per_page"],$page);
        $this->select_data["pag_links"] = $this->pagination->create_links();
        
        //$this->load->view("pagination_view", $data);
        $suspended_items = 0;
        $deleted_items = 0;
        $popular_items = 0;
        array_push($items_summary,$config["total_rows"]);
        array_push($items_summary,$suspended_items);
        array_push($items_summary,$deleted_items);
        array_push($items_summary,$popular_items);
        
        
        $this->select_data["item_summary"] = $items_summary;

        $this->load->view('my_items',$this->select_data);
    }
    
    public function add_item()
    {
        $cat_id = $this->Add_item_model->get_cat_id($this->input->post('category'));
        $vmart_cat_id = $this->Add_item_model->get_vcat_id($this->input->post('vcategory'));
        
        $newitemdata = array(
            'cat_id'        => $cat_id['cat_id']->cat_id,
            'userid'        => getUserID(),
            'title'         => $this->input->post('title'),
            'similar'       => $this->input->post('similar'),
            'price'         => $this->input->post('price_no'),
            'price_currancy'=> $this->input->post('price_currency'),
            'Qty'           => $this->input->post('quantity'),
            'breif_description' => $this->input->post('description'),
            'complete_description' => $this->input->post('more_info'),
            'item_created'  => get_date_time(),
            'rating'        => 5,
            'status'        => 'ACTIVE',
            'vmartCatcatid' => $vmart_cat_id['catid']->catid , 
        );
        
        $last_insert = $this->Add_item_model->add_item($newitemdata);
        $folder_path = getUserFolder();
        
        if($last_insert!=0)
        {
            $filenames = do_image_upload($folder_path);
            
            if($filenames->count() > 0)
            {
                $this->Add_item_model->add_item_images($last_insert,$filenames);

                if($this->Add_item_model->update_store_item($last_insert,$filenames[0]) > 0)
                {
                    echo "Success";
                }
                else
                {
                    echo "Updating Item images Unsuccessful";
                    die();
                }
            }
            else
            {
                echo "Updloading files Unsuccessful";
                die();
            }
        }
        
        $this->index();
    }
    
    public function view_items()
    {
        $config = array();
        $config["base_url"] = base_url() . "My_items/view_items";
        $config["total_rows"] = $this->Add_item_model->view_items_count(getUserID());
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->Add_item_model->view_items(getUserID(),$config["per_page"],$page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("pagination_view", $data);
    }
    
}
?>
