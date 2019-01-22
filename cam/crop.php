  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/cropper.css">
  <script src="js/cropper.js"></script>

<img id="imga" style='width:250px;' src= <?php $var1 = $_GET['var1'];echo $var1; ?>
> 

     <script>
       $("#imga").cropper();
       function crop(){
        $("#imga").cropper('getCroppedCanvas').toBlob(function(blob){
          const formData = new FormData();

            formData.append('croppedImage', blob);

            // Use `jQuery.ajax` method
            $.ajax('upload.php', {
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success() {
                alert('Upload success');
              },
              error() {
                alert('Upload error');
              },
            });
        });
       }
     </script>

     <style>
       .cropper-crop{
        display: none;
       }
       .cropper-bg{
        background: none;
       }
     </style>
<button onclick="crop()">
  crop
</button>