<div class="chat_messages">
 <!-- Three Line List with secondary info and action -->
<style>
.demo-list-three {
  width: 40%;
  height: 200px;
  margin: 20px;
}

.other{
    position:relative;
    left:700px;
    margin-bottom: 10px;
    background: rgba(26, 188, 156,0.8);
    border-radius: 69px;
}

.me {
    background: rgba(46, 204, 113,0.9);
    border-radius: 69px;
    margin-bottom: 10px; 
    
}
</style>

<ul class="demo-list-three mdl-list" id="messageList">
                        <?php
                        foreach($messages as $message)
                        {   
                            $uid = $this->session->userdata('uid');

                            if($user_id == $message->user_id){
                                $position = "other"; 
                            }
                            else{
                                $position = "me";
                            }
                            echo <<<EOD
                             <li class="mdl-list__item mdl-list__item--three-line $position">
                                <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-avatar">person</i>
                                <span></span>
                                <span class="mdl-list__item-text-body">
                                    $message->message
                                </span>
                                </span>
                                <span class="mdl-list__item-secondary-content">
                                </span>
                            </li>
                        
EOD;
                        }
                        ?>
</ul>
</div>

<div class="chat_box">
    <form id='form'>
    <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="message">
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
        position: absolute;
        left: 0;
        bottom: 0;
        height: 100px;
        width: 100%;
    }

    body {
        margin: 0 0 100px;
        height: 100%;
    }

    footer {
        display:none !important;
    }
</style>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script async defer>
    $('footer').hide();
    $('#form').on('submit', function(event) {
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
                        <li class="mdl-list__item mdl-list__item--three-line $position">
                                <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-avatar">person</i>
                                <span>Bryan Cranston</span>
                                <span class="mdl-list__item-text-body">
                                    ${data.message}
                                </span>
                                </span>
                                <span class="mdl-list__item-secondary-content">
                                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                                </span>
                            </li>`;
                $('#messageList').append(template);

            },
            error: function(err) {
                console.log(err);
            }
        })

    })
</script>
