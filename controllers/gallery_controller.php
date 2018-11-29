<?php


  class GalleryController {
    
        public function index() {

      // we store all the images in a variable
      $images = Gallery::all();
      require_once('views/gallery/index.php');
    }



        public function browse() {
          echo ' in gallery browse section';
      require_once('views/gallery/preupload.php');
    }

        public function upload() {

        if($_FILES['file_upload']['error'] > 0){
          die('An error ocurred when uploading.');
          }

        if(!getimagesize($_FILES['file_upload']['tmp_name'])){
          die('Please ensure you are uploading an image.');
          }

        // Check filetype against the allowed types
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $detectedType = exif_imagetype($_FILES['file_upload']['tmp_name']);
        if( !in_array($detectedType, $allowedTypes)){
            die('Unsupported filetype uploaded.');
          }

        // Check if the file exists
        if(file_exists('upload/' . $_FILES['file_upload']['name'])){
            die('File with that name already exists.');
          }

        // Upload file

        if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], 'upload/' . $_FILES['file_upload']['name'])){
            die('Error uploading file - check destination is writeable.');
          }
         
         // Check Dimensions and reduce if required 
          $maxDim = 800;
          $file_name = $_FILES['file_upload']['name'];
          echo $file_name . "<br>";
          list($width, $height, $type, $attr) = getimagesize( 'upload/' . $file_name );

          if ( $width > $maxDim || $height > $maxDim ) {
            echo "Image Width : ". $width . " - Image Height : " . $height . "<br>";
            $target_filename = $file_name;
            $ratio = $width/$height;
              if( $ratio > 1) {
                $new_width = $maxDim;
                $new_height = $maxDim/$ratio;
              } else {
                $new_width = $maxDim*$ratio;
                $new_height = $maxDim;
              }
              echo "Image Width : ". $new_width . " - Image Height : " . $new_height . "<br>";
              $src = imagecreatefromstring( file_get_contents( 'upload/' . $file_name ) );
              $dst = imagecreatetruecolor( $new_width, $new_height );
              imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
              imagedestroy( $src );
              imagejpeg( $dst, $target_filename ); // adjust format as needed
              imagedestroy( $dst );
              $filename = 'upload/'.$target_filename;
            }else{
              $filename = 'upload/'.$_FILES['file_upload']['name'];
          }
          
        
        $latinname = $_POST['Latin_Name'];
        $species = $_POST['Species'];
        $image = Gallery::upload($filename ,$species, $latinname);
        echo 'Uploaded to Server <br>';
      require_once('views/gallery/upload.php');
    }


  }
?>