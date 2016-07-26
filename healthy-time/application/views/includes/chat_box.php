<div class="chat_box">
    <form id='chat_form' action='<?php echo base_url(); ?>chat/reply' method='post'>
    <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="message" name="message">
        <label class="mdl-textfield__label" for="message">Message...</label>
    </div>
    <button id="submitButton" type="submit" class="mdl-button mdl-js-button mdl-button--icon">
        <i class="material-icons">speaker_notes</i>
    </button>
    </form>
</div>



<style>

    div.chat_box {
        text-align: center;
        left: 0;
        bottom: 0x;
        height: 100px;
        width: 100%;
        top: 0px;
    }

    body {
        margin: 0 0 100px;
        height: 100%;
    }

    footer {
        display:none !important;
    }
</style>

<?php ?>

<script src="<?php echo base_url() ?>/application/assets/vendor/js/jquery.min.js" /> </script>
<script async defer>
    $('footer').hide();
    $('#chat_form').on('submit', function(event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: "<?php echo base_url()."chat/reply/"; ?>",
            data:"message="+ $("#message").val(),

            success: function(data) {
                console.log('0K');
                $('#message').val('');
                data = $.parseJSON(data);
                
                template = `
                <li class="mdl-list__item mdl-list__item--three-line other">
                                <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-avatar">person</i>
                                <span></span>
                                <span class="mdl-list__item-text-body">
                                    ${data.message}
                                </span>
                                </span>
                                <span class="mdl-list__item-secondary-content">
                                </span>
                            </li>`;
                $('#messageList').append(template);

            },
            error: function(err) {
                console.log(err);
            }
        });
        

    });
</script>
