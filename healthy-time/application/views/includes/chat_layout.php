<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="http://localhost/healthy-time/healthy-time/application/assets/vendor/css/chat_layout.css" rel="stylesheet">
<div class="container">
    <div class="col-md-12 col-lg-6">
        <div class="panel">
            <!--Heading-->
            <div class="panel-heading">
                <div class="panel-control">
                    <div class="btn-group">
                        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#demo-chat-body"><i class="fa fa-chevron-down"></i></button>
                        <button type="button" class="btn btn-default" data-toggle="dropdown"><i class="fa fa-gear"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Available</a></li>
                            <li><a href="#">Busy</a></li>
                            <li><a href="#">Away</a></li>
                            <li class="divider"></li>
                            <li><a id="demo-connect-chat" href="#" class="disabled-link" data-target="#demo-chat-body">Connect</a></li>
                            <li><a id="demo-disconnect-chat" href="#" data-target="#demo-chat-body">Disconect</a></li>
                        </ul>
                    </div>
                </div>
                <h3 class="panel-title">Chat</h3>
            </div>

            <!--Widget body-->
            <div id="demo-chat-body" class="collapse in">
                <div class="nano has-scrollbar" style="height:380px">
                    <div class="nano-content pad-all" tabindex="0" style="right: -17px;">
                        <ul class="list-unstyled media-block">
                        <?php
                        foreach($messages as $message)
                        {   
                            $uid = $this->session->userdata('uid');
                            $avatar;
                            $position;
                            $formatting;
                            $name;
                            if($user_id == $message->user_id){
                                $position = "media-right"; 
                                $formatting = "speech-right";
                                $avatar = 2;
                                $name = "Me";
                            }
                            else{
                                $position = "media-left";
                                $formatting = "";
                                $avatar = 1;
                                $name = "John Doe";
                            }
                            echo <<<EOD
                            <li class="mar-btm">
                                <div class="$position">
                                    <img src="http://bootdey.com/img/Content/avatar/avatar$avatar.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor $formatting">
                                    <div class="speech">
                                        <a href="#" class="media-heading">$name</a>
                                        <p>$message->message </p>
                                        <p class="speech-time">
                                            <i class="fa fa-clock-o fa-fw"></i>$message->created_at
                                        </p>
                                    </div>
                                </div>
                            </li>                       
EOD;
                        }
                        ?>
                        </ul>
                    </div>
                    <div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>

                <!--Widget footer-->
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-9">
                            <input type="text" placeholder="Enter your text" class="form-control chat-input">
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-primary btn-block" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>