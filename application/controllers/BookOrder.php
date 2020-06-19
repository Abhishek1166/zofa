<?php defined('BASEPATH') or exit('No direct script access allowed');
/** Load Order Pages & Queries */
class BookOrder extends CI_Controller
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

            'BookOrderModel',

        ]);
    }


    /** Load Default Index To Show 404 Error
     *
     * @return void */
    public function index()
    {
        return show_404();
    }
    public function list_data()

    {
        // die("vcg");
        // user_can('BookOrder_list') or show_404();
        // $BookOrderData = json_decode(json_encode([
        //     'type' => 'Orders'
        // ]));


        // die("ytd");


        $BookOrder = $this->BookOrderModel->all([
            'fields'     => ['book_order.*', 'products.title as p_title'],
            'conditions' => ['book_order.status!=' => '3'],
            'join'       => [
                'tableName' => 'products',
                'condition' => 'products.id = book_order.product_id'
            ],
            'order'      => [
                'by'   => 'book_order.id',
                'type' => 'ASC'
            ],
            'datatype' => 'json'
        ]);
        // print_r($BookOrder);
        // die();
        /* echo $this->db->last_query();
        echo '<pre>';
        print_r($BookOrder);
        echo '</pre>';
        die(); */
        // is($BookOrderData, 'array')
        //     and $BookOrderData = json_decode(json_encode([
        //         'type' => 'Orders',
        //         'data' => $BookOrderData
        //     ]));

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('book_order/list', compact('BookOrder'));
        $this->load->view('template/footer');
    }
    // ----------delete order started-------------------
    public function delete_order($id = null)
    {



        $bookorder = $this->BookOrderModel->updateTable([
            'status' => '3',
        ], ['id' => $id]);
        // print_r($bookorder);
        // die();
        // echo $this->db->last_query();
        // die();
    }
}

    /* End of file  BookOrder.php */
