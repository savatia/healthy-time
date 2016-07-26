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

.chat_messages{
    height: 800px;
    width: 100%;
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
