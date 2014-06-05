<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class csv extends MY_Controller{


    public function index(){

        $this->load->view("upload");
    }
    public function readxls(){
        
        
        //$xls = BASEPATH."../resources/files/Book1.xlsx";
        $xls = BASEPATH."../resources/files/Book1.xls";
        $inputFileName = realpath($xls);
        $this->load->library("PHPExcel");
        
        
        
        $cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp;
        $cacheSettings = array('memoryCacheSize' => '20MB');
        //set php excel settings
        PHPExcel_Settings::setCacheStorageMethod(
                $cacheMethod, $cacheSettings
        );
        $arrayLabel = array("A", "B", "C", "D", "E");
        //=== set object reader
        //$objectReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objectReader = PHPExcel_IOFactory::createReader('Excel5');
        $objectReader->setReadDataOnly(true);

        $objPHPExcel = $objectReader->load($inputFileName);
        $objWorksheet = $objPHPExcel->setActiveSheetIndexbyName('Sheet1');

        $starting = 1;
        $end = 3;

        for ($i = $starting; $i <= $end; $i++) {

            for ($j = 0; $j < count($arrayLabel); $j++) {
                //== display each cell value
                echo $objWorksheet->getCell($arrayLabel[$j] . $i)->getValue();
            }
        }


    }
    public function upload_xls_form(){
        $this->load->view('upload_xls');
    }

    public function upload_xls(){
        exit('ccc');
        ini_set('auto_detect_line_endings', true);
        $upload_dir = realpath(BASEPATH."../resources/files/");
        $config['upload_path'] = $upload_dir;
        $config['allowed_types'] = 'xls';
        $config['max_size'] = "10240";
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('balances')){
            exit($this->upload->display_errors());
        }else{
            $data = $this->upload->data();
            $fullPath = $data['full_path'];
            if(($handle = fopen($fullPath, 'r')) !== false) {
                $row = 0;
                while(($row = fgetcsv($handle, 1000, ";")) !== false) {
                    print_r($row);exit();
                }
            }
            exit();
        }

        print_r($_POST);
        exit();
    }

    public function upload(){
        ini_set('auto_detect_line_endings', true);
        $upload_dir = realpath(BASEPATH."../resources/files/");
        $config['upload_path'] = $upload_dir;
        $config['allowed_types'] = 'csv';
        $config['max_size'] = "10240";
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('balances')){
            exit($this->upload->display_errors());
        }else{
            $data = $this->upload->data();
            $fullPath = $data['full_path'];
            if(($handle = fopen($fullPath, 'r')) !== false) {
                $row = 0;
                while(($row = fgetcsv($handle, 1000, ";")) !== false) {
                    print_r($row);exit();
                }
            }
            exit();
        }

        print_r($_POST);
        exit();
    }

    public function loadlib(){
        $this->load->library('dao');
        $this->dao->test();
    }

    public function showpdf(){
        $current_path = realpath(BASEPATH."../application/modules/".$this->getModuleName()."/views/pdf/");

        error_reporting(0);
        $content = $this->load->view('pdf/pdf_statement', array("current_path"=>$current_path), true);

        try {
            $param[] = 'P';
            $param[] = 'A4';
            $param[] = 'fr';
            $param[] = true;
            $param[] = 'UTF-8';
            $param[] = 0;

            $this->load->library("html2pdf", $param);
            $this->html2pdf->writeHTML($content, isset($_GET['vuehtml']));
            //$this->html2pdf->createIndex('Sommaire', 25, 12, false, true, 1);
            $this->html2pdf->Output('bookmark.pdf');
        } catch (HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
    }

    public function showpdf_preview(){
        $this->load->view("pdf_template");
    }


    public function loadblock(){
        $html = $this->load->view('pdf', array('myname'=>"Tran Hieu Dao"), true);
        $view_var = array("block_menu"=>$html);
        $this->load->view('pageview', $view_var);
    }
}


