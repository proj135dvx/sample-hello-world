<?php
class Hello extends CI_Controller {
    /**
     * Index Page for this controller.
     * Maps to the following URL
     * http://example.com/index.php/hello
     * or
     * http://example.com/index.php/hello/index
     * or
     * since this controller is set as the default
     * controller in config/routes.php, it's displayed
     * at http://example.com/
     * So any other public methods not prefixed with underscore
     * will map to /welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        // Note that $view_params is optional
        // we can use $this->load->view('helloview'); as well.
        // if the view doesn't use php variables
        // The $view_params is extracted in the view script to php
        // variables $key=$value
        // In this example, three variables will be generated by CI in the
        // view page
        // helloview.php with variable $mega_title
        // value: 'Codeigniter - Hello World'
        // variable: $title with value: 'Welcome to Codeigniter'
        // variable: $message with value: 'Hello World'

        $view_params=array(
            'mega_title'=>'Code-igniter - Hello World',
            'title'=>'Welcome to Codeigniter',
            'message'=>'Hello World'
        );

        $this->load->view('helloview',$view_params);
    }
} // Closing the class definition
/* End of file hello.php */
/* Location: ./application/controllers/welcome.php */
