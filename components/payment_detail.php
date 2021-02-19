<section class="parallax-window" data-parallax="scroll" data-image-src="static/img/payment.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1><?php $language->set($lang['payments_way'])?></h1>
            <p></p>
        </div>
    </div>
</section>
<!-- End Section -->

<main>

    <!-- end map-->



    <!-- End Position -->
    <div class="container margin_60">
        <div class="main_title">
            <h2><span><?php $language->set($lang['fill'])?></span></h2>

        </div>
        <div class="container margin_60">



            <div class="row">
                <div class="container">
                    <div class="form_title">
                        <h3><strong><i class="icon-pencil"></i></strong></h3>
                        <p>

                        </p>
                    </div>
                    <div class="step">

                        <div id="message-contact"></div>
                        <form method="post" action="" id="contactform">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label><?php $language->set($lang['name'])?></label>
                                        <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="<?php $language->set($lang['name'])?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label><?php $language->set($lang['tel'])?></label>
                                        <input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="<?php $language->set($lang['tel'])?>" required>
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label><?php $language->set($lang['payments_way'])?></label><br>
                                        <select class="form-control">
                                            <option value="<?php $language->set($lang['choose_payment'])?>"><?php $language->set($lang['choose_payment'])?></option>
                                            <option value="Payme">Payme</option>
                                            <option value="Click">Click</option>
                                            <option value="Paynet">Paynet</option>
                                            <option value="Visa">Visa</option>
                                            <option value="MasterCard">MasterCard</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                            </div>
                            <div class="col-sm-12">
                                <input type="submit" value="<?php $language->set($lang['send'])?>" class="btn_1"  id="submit-contact" style="width: 100%;">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End col-md-8 -->


                <!-- End col-md-4 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
</main>