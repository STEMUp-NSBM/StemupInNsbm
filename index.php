<?php include 'includes/head.php'; ?>

<div class="opening">
 <a href="home.php" id="link" class='glowing-btn'><span class='glowing-txt'>C<span class='faulty-letter'>L</span>ICK</span></a>
</div>
 

<script>
    $(document).ready(function() {
        $('#link').click(function(event) {
            event.preventDefault(); 
            var url = $(this).attr('href'); 
            $('body').fadeOut('slow', function() {
                window.location.href = url; 
            });
        });
    });
</script>
</body>