<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
class pdfbaru
{
    protected $ci;

    public function __construct() 
    {
        $this->ci =& get_instance();
    }

    public function generate($view, $data = array(), $filename = 'Kuitansi', $paper = 'A4', $orientation = 'portrait'){
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orientation);
        // print_r($data['pesanan']['id_pes']);die;
        $id_pes = $data['pesanan']['id_pes'];

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream( $filename."_".$id_pes.".pdf", array("Attachment" => FALSE));
    }
    
}











?>