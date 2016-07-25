







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script async defer>

    $('#sendButton').on('click', function(event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: "<?php echo base_url()."chat/reply/"; ?>",
            data:"message="+ $("#message").val(),

            success: function(data) {
                console.log('0K');
                console.log(data);
            },
            error: function(err) {
                console.log(err);
            }
        })

    })
</script>
