<?php

class Functionlist{

    private $DBHOST='localhost';
	private $DBUSER='root';
	private $DBPASS='';
	private $DBNAME='data';
	public $con;

    public function __construct(){
		$this->con = mysqli_connect($this->DBHOST, $this->DBUSER, $this->DBPASS, $this->DBNAME);
		if(!$this->con){
			return false;
		}
    } 

    public function validation($form_data){
        $form_data = mysqli_real_escape_string($this->con, trim(strip_tags($form_data)));
     // $form_data = trim( stripslashes( htmlspecialchars( $form_data ) ) );
        return $form_data;
    }     

    public function record_exits($tblname, $condition, $op="AND"){

		$field_data = "";
		foreach($condition as $d_key => $d_value){
			$field_data .= "$d_key='$d_value' $op ";
		}
		$field_data = rtrim($field_data,"$op ");

		$select = "SELECT * FROM $tblname WHERE $field_data";
		$select_fire = mysqli_query($this->con, $select);
		if(mysqli_num_rows($select_fire) == 1){
			return true;
		}
		else{
			return false;
		}

    }
    
    public function select_assoc($tblname, $condition, $op='AND'){

		$field_op = "";
		foreach ($condition as $q_key => $q_value) {
			$field_op = $field_op."$q_key='$q_value' $op ";
		}
		$field_op = rtrim($field_op,"$op ");

		$select_assoc = "SELECT * FROM $tblname WHERE $field_op";
		$select_assoc_query = mysqli_query($this->con, $select_assoc);
		if(mysqli_num_rows($select_assoc_query) > 0){
			if(mysqli_num_rows($select_assoc_query) == 1)
			{
				$select_assoc_fire = mysqli_fetch_assoc($select_assoc_query);
				if($select_assoc_fire){
					return $select_assoc_fire;
				}
				else{
					return false;
				}
			}
			else{
				return false;
			}
		}
		else{	
			return false;
		}

	}

}

?>