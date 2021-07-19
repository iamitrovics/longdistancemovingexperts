<div class="quote-form">
    <div class="quote-form-in">
        <span class="form-title"><?php the_field('form_main_title', 'options'); ?></span>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#q1"><span class="icon-home-lg"></span><span><?php the_field('tab_1_title', 'options'); ?></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#q2"><span class="icon-car"></span><span><?php the_field('tab_2_title', 'options'); ?></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#q3"><span class="icon-car-garage"></span><span><?php the_field('tab_3_title', 'options'); ?></span></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="q1">
                <?php the_field('tab_1_form_code', 'options'); ?>
            </div>
            <div class="tab-pane" id="q2">
                <?php the_field('tab_2_form_code', 'options'); ?>
            </div>
            <div class="tab-pane" id="q3">
                <?php the_field('tab_3_form_code', 'options'); ?>
            </div>
        </div>
    </div>
    <!-- /.quote-form-in -->
</div>
<!-- /.quote-form -->