<?php
    $data =array();
    miterm_exam($data);
    function miterm_exam(&$data){
        $function = 'view';
        if(isset($_GET['action'])){
            $function =$_GET['action'];
        }
        $function($data);
    }

    function view(&$data){
        $data['view'] =m_view();
        $data['miterm_exam'] ='pages/view';
    }

    function add_form(&$data){
        $data['miterm_exam'] ='pages/add';
    }

    function add_data(&$data){
        $addinfo = m_add($_POST);
        if($addinfo){
            $output = "view";
        }else{
            $output ="add_data";
        }
        header("Location:index.php?action=$output");
    }
?>