<?php 
class FileWorker { 
	static function uploadFile($tmp_name, $name, $iduser) {
        if(!file_exists(__DIR__.'/../../files/'.$iduser)) {
            if(!mkdir(__DIR__.'/../../files/'.$iduser)) {
                throw new Exception('folder dosen\'t create');
            }
		}
		
        move_uploaded_file($tmp_name, __DIR__.'/../../files/'.$iduser.'/'.$name);

        return $iduser.'/'.$name;
    }
} 
?>