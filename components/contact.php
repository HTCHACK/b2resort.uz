<main>

        <!-- end map-->



        <!-- End Position -->
        <div class="container margin_60" id="aloqa">
            <div class="main_title">
                <h2><span><?php $language->set($lang['contact_us'])?></span></h2>
                
            </div>
        <div class="container margin_60">

            

            <div class="row">
                <div class="col-md-8">
                    <div class="form_title">
                        <h3><strong><i class="icon-pencil"></i></strong></h3>
                        <p>
                            
                        </p>
                    </div>
                    <div class="step">

                        <div id="message-contact"></div>
                        <form method="post" action=""
                            id="contactform">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><?php $language->set($lang['name'])?></label>
                                        <input type="text" class="form-control" id="name_contact" name="name_contact"
                                            placeholder="<?php $language->set($lang['name'])?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><?php $language->set($lang['tel'])?></label>
                                        <input type="text" id="phone_contact" name="phone_contact" class="form-control"
                                            placeholder="<?php $language->set($lang['tel'])?>">
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label><?php $language->set($lang['send_message'])?></label>
                                        <textarea rows="5" id="message_contact" name="message_contact"
                                            class="form-control" placeholder="<?php $language->set($lang['send_message'])?>"
                                            style="height:254px;" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="submit" value="<?php $language->set($lang['send'])?>"  id="submit-contact" class="btn_1">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End col-md-8 -->

                <div class="col-md-4">
                    <div class="box_style_1">
                        <span class="tape"></span>
                        <h4><?php $language->set($lang['address'])?> <span><i class="icon_pin pull_right"></i></span></h4>
                        <p>
                        <?php $language->set($lang['location'])?>
                        </p>
                        <hr>
                        <h4><?php $language->set($lang['tel'])?> <span><i class="icon_phone"></i></span></h4>
                        <ul id="contact-info">
                            <li>+998-99-100-87-97 \ +998-99-000-50-03</li>
                            <li><a href=""></a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <!-- End col-md-4 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>