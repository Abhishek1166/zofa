<?php defined('BASEPATH') or exit('No direct script access allowed');
/** Load Order Pages & Queries */
class Ordr extends CI_Controller
{





    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        flash_message(
            'dashboard/login',
            is_login(),
            'unsuccess',
            'Please Login Then Try Again'
        );

        $this->load->helper('string');
        $this->load->model([

            'OrdrModel',

        ]);
    }

    /** Load Default Index To Show 404 Error
     *
     * @return void */
    public function index()
    {
        return show_404();
    }


    //------------ add order----------------------
    public function creatorder()
    {
        flash_message(
            'dashboard/login',
            is_login(),
            'unsuccess',
            'Please Login Then Try Again'
        );

        user_can('order_add') or show_404();

        if ($this->input->post('creatorder')) {

            flash_message(
                'add/order',
                $this->input->post('ordr'),
                is_array($this->input->post('ordr'))
                    and $this->input->post('Firstname')
                    and $this->input->post('Lastname')
                    and $this->input->post('Email')
                    and $this->input->post('Mobile')
                    and $this->input->post('Product_id')
                    and $this->input->post('Category_id'),
                'unsuccess',
                'Something Went Wrong',
                'Look like Form Not Fill Properly, Please Fill & Try Again.'
            );
        }

        $ordr = $this->OrdrModel->save([
            'Firstname'      => $this->input->first_name,
            'Lastname'       => $this->input->last_name,
            'Email'          => $this->input->email,
            'Mobile'         => $this->input->mobile,
            'Product_id'     => $this->input->Product_id,
            'Category_id'    => $this->input->Category_id,



        ]);


        // flash_message(
        //     'list/orders',
        //     $ordr_id,
        //     'unsuccess',
        //     'Something Went Wrong'
        // );

        // flash_message(
        //     'list/orders',
        //     $ordr_id,
        //     'success',
        //     'Order Added Successfully'
        // );






        $this->load->view('ordr');
    }

    // ------------------show order-------------------
    public function show()
    {
        flash_message(
            'dashboard/login',
            is_login(),
            'unsuccess',
            'Please Login Then Try Again'
        );



        $ordr = $this->OrdrModel->all([
            'fields'     => ['ordr.*', 'first_name', 'last_name', 'email', 'mobile', 'Category_id', 'Product_id'],
            'conditions' => "orders.status != '3' GROUP BY ordr.ordr_id",

            'order'      => [
                'by'   => 'id',
                'type' => 'DESC'
            ],
            'datatype' => 'json'
        ]);



        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('order/list', compact('orderData'));
        $this->load->view('template/footer');
    }

    //--------------------edit order-------------------
    public function editordr()
    {
        empty($ordr_id) and show_404();

        flash_message(
            'dashboard/login',
            is_login(),
            'unsuccess',
            'Please Login Then Try Again'
        );

        user_can('order_edit') or show_404();

        if ($this->input->post('editOrder')) {

            flash_message(
                'edit/order/' . $ordr_id,
                $this->input->post('ordr'),
                is_array($this->input->post('ordr'))
                    and $this->input->post('Firstname')
                    and $this->input->post('Lastname')
                    and $this->input->post('Email')
                    and $this->input->post('Mobile')
                    and $this->input->post('Product_id')
                    and $this->input->post('Category_id'),
                'unsuccess',
                'Something Went Wrong',
                'Look like Form Not Fill Properly, Please Fill & Try Again.'
            );




            $order = $this->OrdrModel->save([
                'Firstname'      => $this->input->first_name,
                'Lastname'       => $this->input->last_name,
                'Email'          => $this->input->email,
                'Mobile'         => $this->input->mobile,
                'Product_id'     => $this->input->Product_id,
                'Category_id'    => $this->input->Category_id,
            ]);
        }

        flash_message(
            'list/orders',
            $ordr_id,
            'unsuccess',
            'Something Went Wrong'
        );

        flash_message(
            'list/orders',
            $ordr_id,
            'success',
            'Order Added Successfully'
        );



        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('order/edit', compact('orders', 'products', 'users', 'payments', 'delivery'));
        $this->load->view('template/footer');
    }
}
    /* End of file  Ordr.php */
