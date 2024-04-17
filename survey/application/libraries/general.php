<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class General {
    public function __construct() {
        $this->CI =& get_instance();
    }
    public function session_check()
    {
        $CI =& get_instance();
        $CI->user_id	= $CI->session->userdata('id_user');
        $CI->user_name	= $CI->session->userdata('nickname');
        $CI->user_kode	= $CI->session->userdata('kode');
        $CI->user_nama	= $CI->session->userdata('nama_user');
        $CI->user_group	= $CI->session->userdata('profile_user');
        $CI->user_waktu	= $CI->session->userdata('waktu_login');
        $CI->user_ip	= $CI->session->userdata('user_ip'); 

        if ($CI->user_id=="") {
                redirect(site_url("login/logout")); 
        }
    }

    public function session_check2()
    {
        $CI =& get_instance();
        $CI->user_id	= $CI->session->userdata('id_user');
        $url = "yahoo.com";
        if ($CI->user_id=="") {
                return $url; 
        }else{
                return $url='';
        }
    }
        
    public function gridFild($id='') {
        $entity2 = $this->CI->load->model('dashboard_model','',TRUE);
        $entity2 = $entity2->getTable($id);
    
        $jsonData2 = json_decode($entity2[0]['FORM_ENTITY']);

        foreach($jsonData2->entity as $jsn2){
            
            $type = $jsn2->type;						

            switch($type){
                case 'grid':
                    echo '
                        <div class="box-body table-responsive">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-xs-6"><div id="example1_length" class="dataTables_length"><label><select size="1" name="example1_length" aria-controls="example1"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-xs-6"><div class="dataTables_filter" id="example1_filter"><label>Search: <input type="text" aria-controls="example1"></label></div></div></div><table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">';
                                foreach($jsn2->fild as $fild){
                                    echo '<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="'.$fild.': activate to sort column descending" style="width: 190px;">'.$fild.'</th>';
                                }
                                echo '</tr>
                            </thead>

                            <tfoot>
                                <tr>';
                                foreach($jsn2->fild as $fild){
                                    echo '<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="'.$fild.': activate to sort column descending" style="width: 190px;">'.$fild.'</th>';
                                }
                                echo '</tr>
                            </tfoot>
                            <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class=" ">Firefox 1.0</td>
                                    <td class=" ">Win 98+ / OSX.2+</td>
                                    <td class=" ">1.7</td>
                                    <td class=" ">A</td>
                                </tr><tr class="even">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class=" ">Firefox 1.5</td>
                                    <td class=" ">Win 98+ / OSX.2+</td>
                                    <td class=" ">1.8</td>
                                    <td class=" ">A</td>                                
                                </tr><tr class="even">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class=" ">Mozilla 1.0</td>
                                    <td class=" ">Win 95+ / OSX.1+</td>
                                    <td class=" ">1</td>
                                    <td class=" ">A</td>
                                </tr>
                            </tbody></table><div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example1_info">Showing 1 to 10 of 57 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
                    </div>';
                break;
            }
        }
    }

    public function formFild($id='',$tp='',$var=''){
//        print_r($var);
//        exit;
        echo '<form role="form" name="myform" id="myform" action="" >';
        if($tp==1){
            if(!empty($var)){
                foreach($var as $d){
                    $type = $d->tabname;
                    switch($type){
                        case 'button':
                            echo  '	<br />
                                <div class="box-footer" id="hasilna">
                                    <button id="btn" '.$d->entity->action.' type="'.$d->entity->type.'" class="'.$d->entity->class.'">'.$d->entity->value.'</button>
                                </div>
                            ';
                        break;
                        case 'text':
                            echo '<div class="form-group">
                                    <label>'.$d->entity->label.'</label>
                                    <input type="'.$d->entity->type.'" class="'.$d->entity->class.'" name="'.$d->entity->id.'" id="'.$d->entity->id.'" placeholder="'. $d->entity->hint.'" '.$d->entity->disabled.'/>
                            </div>';
                        break;
                        case 'textarea':
                            echo '<div class="form-group">
                                <label>'.$d->entity->label.'</label>
                                        <textarea class="'.$d->entity->class.'" name="'.$d->entity->id.'" id="'.$d->entity->id.'" placeholder="'.$d->entity->hint.'" rows="3" '.$d->entity->disabled.'></textarea>
                                </div>
                            ';
                        break;
                        case 'ddate':
                            echo '
                                <div class="form-group">
                                    <label>Date range:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="'.$d->entity->class.'" name="'.$d->entity->id.'" id="reservation" '.$d->entity->disabled.'/>
                                    </div><!-- /.input group -->
                                </div>
                            ';
                        break;
                        case 'date' :
                            echo '<label>'.$d->entity->label.'</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" id="datemask" class="'.$d->entity->class.'" name="'.$d->entity->id.'" data-inputmask="alias": "dd/mm/yyyy" data-mask '.$d->entity->disabled.'/>
                               </div>
                            ';
                         break;
                        case 'checkbox' :
                            echo '<div class="checkbox"><label class="">
                                <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;">
                                    <input type="checkbox" class="'.$d->entity->class.'" name="'.$d->entity->id.'" style="position: absolute; opacity: 0;" '.$d->entity->disabled.'>
                                    <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                                </div>
                                '.$d->entity->label.'
                            </label></div>';
                        break;
                        case 'radio' :
                            echo '<div class="radio">
                                <label class="">
                                    <div class="iradio_minimal checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                                        <input type="radio" class="'.$d->entity->class.'" name="'.$d->entity->id.'" id="'.$d->entity->id.'" value="'.$d->entity->value.'" '.$d->entity->checked.' style="position: absolute; opacity: 0;" '.$d->entity->disabled.'>
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                                    </div>
                                    '.$d->entity->label.'
                                </label>
                            </div>';
                        break;
                        case 'file' :
                            echo '<div class="form-group">
                                    <label for="'.$d->entity->id.'">'.$d->entity->label.'</label>
                                    <input class="'.$d->entity->class.'" name="'.$d->entity->id.'" type="file" id="'.$d->entity->id.'">
                                </div>';
                            break;
                        case 'select' :
                            echo '	<div class="form-group">
                                <label>'.$d->entity->label.'</label>
                                <select name="'.$d->entity->id.'" '.$d->entity->value.' class="'.$d->entity->class.'" '.$d->entity->disabled.'>';
                                    foreach($d->entity->opsi as $deo){
                                        echo '<option value='.$deo->value.'>'.$deo->text.'</option>';
                                    }
                                echo '
                                </select>
                            </div>';
                        break;
                    }
                }
            }
            
        }else{
        
        $entity = $this->CI->load->model('dashboard_model','',TRUE);
        $entity = $entity->getForm($id);
        
        $json = $entity[0]['FORM_ENTITY'];
        $json = json_decode($json);
        
        foreach($json->tab_entity as $data){
                $type = $data->tabname;
                switch($type){
                    case 'button':
                        echo  '	<br />
                                <div class="box-footer" id="hasilna">
                                    <button id="btn" '.$data->entity->action.' type="'.$data->entity->type.'" class="'.$data->entity->class.'">'.$data->entity->value.'</button>
                                </div>
                        ';
                        break;
                    case 'text':
                        echo '<div class="form-group">
                                    <label>'.$data->entity->label.'</label>
                                    <input type="'.$data->entity->type.'" class="'.$data->entity->class.'" name="'.$data->entity->id.'" id="'.$data->entity->id.'" placeholder="'. $data->entity->hint.'" '.$data->entity->disabled.'/>
                        </div>';
                        break;
                    case 'textarea':
                        echo '
                                <label>'.$data->entity->label.'</label>
                                        <textarea class="'.$data->entity->class.'" name="'.$data->entity->id.'" id="'.$data->entity->id.'" placeholder="'.$data->entity->hint.'" rows="3" '.$data->entity->disabled.'></textarea>
                                </div>
                        ';
                        break;
                    case 'ddate':
                        echo '
                                <div class="form-group">
                                    <label>Date range:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="'.$data->entity->class.'" name="'.$data->entity->id.'" id="reservation" '.$data->entity->disabled.'/>
                                    </div><!-- /.input group -->
                                </div>
                        ';
                        break;
                    case 'date' :
                        echo '<label>'.$data->entity->label.'</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" id="datemask" class="'.$data->entity->class.'" name="'.$data->entity->id.'" data-inputmask="alias": "dd/mm/yyyy" data-mask '.$data->entity->disabled.'/>
                               </div>
                        ';
                        break;
                    case 'checkbox' :
                        echo '<div class="checkbox"><label class="">
                                <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;">
                                    <input type="checkbox" class="'.$data->entity->class.'" name="'.$data->entity->id.'" style="position: absolute; opacity: 0;" '.$data->entity->disabled.'>
                                    <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                                </div>
                                '.$data->entity->label.'
                        </label></div>';
                        break;
                    case 'radio' :
                        echo '<div class="radio">
                                <label class="">
                                    <div class="iradio_minimal checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                                        <input type="radio" class="'.$data->entity->class.'" name="'.$data->entity->id.'" id="'.$data->entity->id.'" value="'.$data->entity->value.'" '.$data->entity->checked.' style="position: absolute; opacity: 0;" '.$data->entity->disabled.'>
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                                    </div>
                                    '.$data->entity->label.'
                                </label>
                        </div>';
                        break;
                    case 'file' :
                        echo '<div class="form-group">
                                <label for="'.$data->entity->id.'">'.$data->entity->label.'</label>
                                <input class="'.$data->entity->class.'" name="'.$data->entity->id.'" type="file" id="'.$data->entity->id.'">
                            </div>';
                        break;
                    case 'select' :
                        echo '	<div class="form-group">
                                <label>'.$data->entity->label.'</label>
                                <select name="'.$data->entity->id.'" '.$data->entity->value.' class="'.$data->entity->class.'" '.$data->entity->disabled.'>';
                                    foreach($data->entity->opsi as $deo){
                                        echo '<option value='.$deo->value.'>'.$deo->text.'</option>';
                                    }
                                echo '
                                </select>
                        </div>';
                        break;
                }
            }
        }
        echo '</form>';
    }
    
    public function getFildForm(){
        $entity2 = $this->CI->load->model('dashboard_model','',TRUE);
        $entity2 = $entity2->getFildForm(1);
        
//        $var =  json_decode(trim($entity2));
        
//        print_r($entity2);
        foreach($entity2 as $entt){
            $var =  json_decode(trim($entt['class']));
//            print_r($var);
//            exit;
            foreach($var->tab_entity as $data){
                #print_r($data);
                $this->formFild('', 1, $data);
            }
        }
        
    }
    
    public function tab_page($id=''){
        
        $entity2 = $this->CI->load->model('dashboard_model','',TRUE);
        $entity2 = $entity2->getTable($id);
        
        $jsonData2 = json_decode($entity2[0]['FORM_ENTITY']);

        foreach($jsonData2->entity as $jsD){
            $type = $jsD->type;						

            switch($type){
                case 'grid':
                    #$this->gridFild(2);
                    break;
                case 'tab': ?>
                    <div class="col-md-12">
                    <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <?php foreach($jsD->data as $fild){ ?>
                                    <li class="<?php echo $fild->class;?>"><a href="#<?php echo $fild->href;?>" data-toggle="tab"><?php echo $fild->tab;?></a></li>
                                <?php } ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach($jsD->data as $fild2){ ?>
                                <div class="tab-pane <?php echo $fild2->class;?>" id="<?php echo $fild2->href;?>">
                                    <?php #print_r($fild2);?>

                                    <?php
                                    $type = $fild2->content->include;
                                    switch($type){
                                        case 'grid':
                                            $this->gridFild(2);
                                            break;
                                        case 'form':
                                            $this->formFild('', 1, $fild2->content->fild);
                                        break;
                                    }
                                    ?>

                                    <?php echo $fild2->content->text;?>
                                </div><!-- /.tab-pane -->
                                <?php } ?>
                            </div><!-- /.tab-content -->
                        </div><!-- nav-tabs-custom -->
                    </div>
                    <?php break;
            }
        }
    }
}