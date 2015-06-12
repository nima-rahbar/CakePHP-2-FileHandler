<?php
#################################
#	Developed By Nima Rahbar	#
#	Eighth Art Designers		#
#	Version: 1.0				#
#################################

App::uses('Component', 'Controller');

class FileHandlerComponent extends Component {
	
	function fileAdd( $file ){
		#	Usage:
		#	$this->request->data['Model']['fieldname'] = $this->FileHandler->fileAdd(
		#		$this->request->data['Model']['fieldname']
		#	);
		if( $file['error'] == 0 && !empty($file) ){
			$rand = rand(10000, 999999999);
			if( move_uploaded_file($file['tmp_name'], 'files/'.$rand.'-'.$file['name']) ){
				return $rand.'-'.$file['name'];
			}
		}else{
			return NULL;
		}
	}
	
	function fileEdit( $record, $id, $file, $fieldname = "picture" ){
		#	Usage:
		#	$fields = $this->Model->read(NULL, $id);
		#	$this->request->data['Model']['field'] = $this->FileHandler->fileEdit(
		#		$fields['Model'],
		#		$id,
		#		$this->request->data['Model']['field'],
		#		$fieldname(optional)
		#	);
		if( !empty($record[$fieldname]) ){
			unlink('files/'.$record[$fieldname]);
		}
		if( $file['error'] == 0 && !empty($file) ){
			$rand = rand(10000, 999999999);
			if( move_uploaded_file($file['tmp_name'], 'files/'.$rand.'-'.$file['name']) ){
				return $rand.'-'.$file['name'];
			}
		}else{
			return NULL;
		}
	}
	
	function fileDelete($record, $fieldname = "picture"){
		#	Usage:
		#	$fields = $this->Model->read(NULL, $id);
		#	$this->FileHandler->fileEdit(
		#		$fields['Model'],
		#		$fieldname(optional)
		#	);
		
		if( !empty($record[$fieldname]) ){
			unlink('files/'.$record[$fieldname]);
		}
	}
	
}
