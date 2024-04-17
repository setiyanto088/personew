<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class FormGen {
	public function __construct()
	{
		$this->CI =& get_instance();
	}
	
	function array_to_object($array) {
		return (object) $array;
	}
	
    public function pageheader($id)
    {
		$form = $this->CI->load->model('dashboard_model','',TRUE);
		$ent = $form->getForm($id);
		//$head = (object)$ent[0];
		
		return $ent;
    }
	

			
			
	public function formgenerator($id='',$tp='',$var=''){
	
		$entity = $this->CI->load->model('dashboard_model','',TRUE);
        $entity = $entity->getForm($id);
        
        $json = $entity[0]['FORM_ENTITY'];
        $json = json_decode($json);
        
		//print_r($json);exit();
		
        foreach($json->entity as $data){
                $type = $data->type;
                switch($type){
                    case 'button':
						echo  '	<br />
								<div class="box-footer" id="hasilna">
									<button id="btn" '.$data->action.' type="'.$data->type.'" class="btn btn-primary">'.$data->value.'</button>
									
									<button id="btn" '.$data->action.' type="'.$data->type.'" class="btn btn-primary">Save As Draft</button>
								</div>
								
							   ';
						break;
                    case 'text':
                        echo '<div class="form-group">
                                    <label>'.$data->label.'</label>
                                    <input type="'.$data->type.'" class="'.$data->class.'" name="'.$data->id.'" id="'.$data->id.'" placeholder="'. $data->hint.'" '.$data->disabled.'/>
                        </div>';
                        break;
                    case 'textarea':
                        echo '
								<div class="form-group">
                                <label>'.$data->label.'</label>
                                        <textarea class="'.$data->class.'" name="'.$data->id.'" id="'.$data->id.'" placeholder="'.$data->hint.'" rows="3" '.$data->disabled.'></textarea>
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
                                        <input type="text" class="'.$data->class.'" name="'.$data->id.'" id="reservation" '.$data->disabled.'/>
                                    </div><!-- /.input group -->
                                </div>
                        ';
                        break;
                    case 'date' :
                        echo '<label>'.$data->label.'</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" id="datemask" class="'.$data->class.'" name="'.$data->id.'" data-inputmask="alias": "dd/mm/yyyy" data-mask '.$data->disabled.'/>
                               </div>
                        ';
                        break;
                    case 'checkbox' :
                        echo '<div class="checkbox"><label class="">
                                <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;">
                                    <input type="checkbox" class="'.$data->class.'" name="'.$data->id.'" style="position: absolute; opacity: 0;" '.$data->disabled.'>
                                    <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                                </div>
                                '.$data->label.'
                        </label></div>';
                        break;
                    case 'radio' :
                        echo '<div class="radio">
                                <label class="">
                                    <div class="iradio_minimal checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                                        <input type="radio" class="'.$data->class.'" name="'.$data->id.'" id="'.$data->id.'" value="'.$data->value.'" '.$data->checked.' style="position: absolute; opacity: 0;" '.$data->disabled.'>
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                                    </div>
                                    '.$data->label.'
                                </label>
                        </div>';
                        break;
                    case 'file' :
                        echo '<div class="form-group">
                                <label for="'.$data->id.'">'.$data->label.'</label>
                                <input class="'.$data->class.'" name="'.$data->id.'" type="file" id="'.$data->id.'">
                            </div>';
                        break;
                    case 'select' :
                        echo '	<div class="form-group">
                                <label>'.$data->label.'</label>
                                <select name="'.$data->id.'" '.$data->value.' class="'.$data->class.'" '.$data->disabled.'>';
                                    foreach($data->opsi as $deo){
                                        echo '<option value='.$deo->value.'>'.$deo->text.'</option>';
                                    }
                                echo '
                                </select>
                        </div>';
                        break;
					case 'table' :
						echo '<table id="'.$data->id.'" class="display" cellspacing="0" width="100%">
									<thead>
										<tr>';
										 foreach($data->field as $field){
											 echo '<th>'.$field.'</th>';
											}
						echo '			<th>ACTION</th>
										</tr>
									</thead>
							 
									
								</table>';
						break;
					case 'submit':
						echo  '	<br />
								<div class="box-footer" id="hasilna">
									<button id="btn" '.$data->action.' type="'.$data->type.'" name="btn" value="1" class="btn btn-primary">'.$data->value.'</button>
								<button id="btn" '.$data->action.' type="'.$data->type.'" name="btn" value="0 " class="btn btn-success">Save As Draft</button>	
								</div>																														
							   ';
						break;
                }
            }	
	
	
	}
	
	public function getLoadDatagrid(){
	$form = $this->CI->load->model('datagrid/datagrid_model','',TRUE);
	$hasil2 = $form->getDatagrid();
	$result2 = json_encode($hasil2, JSON_UNESCAPED_SLASHES);
		//print_r($result2);exit();
		$escapers =     array('\n',  '\r', '\"', '"{', '}"', '{"trans_data":', '"[', ']"', '}}');
		$replacements = array(" ", " ", '"', '{', '}',"", "", "", '}');
		$result3 = str_replace($escapers, $replacements, $result2);
		
		
		$result4 = json_decode($result3);
		$newdata = '{ "data" : [';
		
		foreach($result4 as $d=>$s){
			$newdata .=  '[' ;
				foreach($s as $r=>$b){
					$newdata .= '"'.$b.'",' ;
		
				}
						$newdata = substr_replace($newdata ,"",-1);
						$newdata .= ',"<a href=&quot; onclick = editData(3) >Edit</a> | <a href=&quot; onclick = deleteData(3) >Delete</a>"';
						$newdata .= '],';
					
		}
		$newdata = substr_replace($newdata ,"",-1);
		$newdata .= "]}";
		
		echo $newdata;
		
			}
	
	
	
	
}

/* End of file FormGen.php */