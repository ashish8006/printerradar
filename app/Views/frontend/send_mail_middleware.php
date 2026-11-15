
<?php 
require 'header.php';
require 'email_sender.php';
?>
<style>
    

#conatact_loader{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
    top: 140px;
    padding-bottom: 200px;
    z-index: 99999999999999;
}
</style>

<div id="conatact_loader">
          <img src="assets/images/loading.gif" alt="">
    </div>
   <div class="d-flex justify-content-center ">
   <h3 class="text-light text-center bg-primary p-3">Please Wait...</h3>

   </div>

<?php 
require 'footer.php';
?>


<script>
$(document).ready(function() {
        var formData = new FormData();
        var hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            console.log('hash', hash);
            formData.append(hash[0], hash[1]);
        }
        console.log('formData', formData);
        $.ajax({
            type: 'POST',
            url: 'submit_by_user.php', // Replace with the path to your PHP script
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('response',response); // You can display this response on the page or take any other action.
                $("#loader").hide();
            },
            error: function(xhr, status, error) {
                console.error(xhr, status, error);
                $("#loader").hide();
            }
        });
});
</script>
