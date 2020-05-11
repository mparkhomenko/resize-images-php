<?php
    class ImageWorker {
        function add() {
            $imagePath = [];
            $idUser = 1;
            foreach($_FILES["userfile"]["name"] as $key => $value) {
    
                $tmp_name = $_FILES["userfile"]["tmp_name"][$key];
                if (!$tmp_name) continue;
                
                $name = basename($_FILES["userfile"]["name"][$key]);
    
                if ($error == UPLOAD_ERR_OK)
                {
                    $a = FileWorker::uploadFile($tmp_name, $name, $idUser);
    
                    $extension = pathinfo($name, PATHINFO_EXTENSION);
        
                    $path = explode('.', $name);
                    $new_name = $idUser.'/'.$path[0].'320.'.$extension;
        
                    copy(__DIR__.'/../../files/'.$a, __DIR__.'/../../files/'.$new_name);
        
                    ImageResizeHelper::resizeImage(__DIR__.'/../../files/'.$a, 1920, 1080);
                    ImageResizeHelper::resizeImage(__DIR__.'/../../files/'.$new_name, 320, 240);
        
                    $i = [];
                    $i['1080p'] = 'files/'.$a;
                    $i['240p'] = 'files/'.$new_name;
        
                    array_push($imagePath, $i);
                }
            }

            print_r($imagePath);
        }
    }
?>
