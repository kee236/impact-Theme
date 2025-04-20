<footer class="footer section pt-6 pt-md-8 pt-lg-10 pb-3 overflow-hidden">
    <div class="pattern pattern-soft top"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <a class="footer-brand mr-lg-5 d-flex" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url('assets/img/brand/light.svg'); ?>" height="35" class="mr-3" alt="<?php echo $this->config->item('product_name'); ?> Logo">
                </a>
                <p class="my-4"><?php echo $this->lang->line('FOOTER_DESCRIPTION'); ?></p>
                <div class="dropdown mb-4 mb-lg-0">
                    <a id="langsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle footer-language-link">
                        <img src="<?php echo base_url('assets/img/flags/') . $current_language_flag; ?>" alt="<?php echo $current_language_name; ?> Flag" class="language-flag"> <?php echo $current_language_name; ?>
                        <i class="fas fa-chevron-down ml-1"></i>
                    </a>
                    <div aria-labelledby="langsDropdown" class="dropdown-menu dropdown-menu-center">
                        <?php foreach ($available_languages as $lang_code => $lang_name): ?>
                            <a href="<?php echo base_url('home/change_language/' . $lang_code); ?>" class="dropdown-item text-gray text-sm">
                                <img src="<?php echo base_url('assets/img/flags/') . $lang_flags[$lang_code]; ?>" alt="<?php echo $lang_name; ?> Flag" class="language-flag"> <?php echo $lang_name; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                <h6><?php echo $this->lang->line('THEMESBERG'); ?></h6>
                <ul class="links-vertical">
                    <li><a target="_blank" href="<?php echo $this->config->item('themesberg_blog'); ?>"><?php echo $this->lang->line('BLOG'); ?></a></li>
                    <li><a target="_blank" href="<?php echo $this->config->item('themesberg_themes'); ?>"><?php echo $this->lang->line('THEMES'); ?></a></li>
                    <li><a target="_blank" href="<?php echo $this->config->item('themesberg_contact'); ?>"><?php echo $this->lang->line('CONTACT_US'); ?></a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                <h6><?php echo $this->lang->line('CREATIVE_TIM'); ?></h6>
                <ul class="links-vertical">
                    <li><a target="_blank" href="<?php echo $this->config->item('creative_tim_blog'); ?>"><?php echo $this->lang->line('BLOG'); ?></a></li>
                    <li><a target="_blank" href="<?php echo $this->config->item('creative_tim_products'); ?>"><?php echo $this->lang->line('PRODUCTS'); ?></a></li>
                    <li><a target="_blank" href="<?php echo $this->config->item('creative_tim_support'); ?>"><?php echo $this->lang->line('SUPPORT'); ?></a></li>
                    <li><a target="_blank" href="<?php echo $this->config->item('creative_tim_license'); ?>"><?php echo $this->lang->line('LICENSE'); ?></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h6><?php echo $this->lang->line('SUBSCRIBE'); ?></h6>
                <p class="font-small"><?php echo $this->lang->line('SUBSCRIBE_TEXT'); ?></p>
                <form action="<?php echo base_url('home/subscribe'); ?>" method="post">
                    <div class="form-row">
                        <div class="col-8">
                            <input type="email" class="form-control mb-2" placeholder="<?php echo $this->lang->line('EMAIL_ADDRESS'); ?>" name="email" required>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-secondary btn-block"><span><?php echo $this->lang->line('SUBSCRIBE'); ?></span></button>
                        </div>
                    </div>
                </form>
                <small class="mt-2 form-text"><?php echo $this->lang->line('PRIVACY_POLICY_TEXT'); ?> <a href="<?php echo base_url('home/privacy_policy'); ?>" class="font-weight-bold text-underline"><?php echo $this->lang->line('PRIVACY_POLICY'); ?></a></small>
            </div>
        </div>
        <hr class="my-4 my-lg-5">
        <div class="row">
            <div class="col pb-4 mb-md-0">
                <div class="d-flex text-center justify-content-center align-items-center">
                    <p class="font-weight-normal mb-0">© <a href="<?php echo $this->config->item('themesberg_url'); ?>" target="_blank">Themesberg</a> & <a href="<?php echo $this->config->item('creative_tim_url'); ?>">Creative Tim</a> <span class="current-year"><?php echo date("Y"); ?></span>. <?php echo $this->lang->line('ALL_RIGHTS_RESERVED'); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
