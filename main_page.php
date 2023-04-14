<?php //Template Name: Шаблон главной страницы ?>
<?php get_header(); ?>
<main class="front-container">
    <header class="background-image">
        <div class="grid-container">
            <div class="grid-x align-middle align-justify">
                <div class="cell shrink">
                    <a href="<?php echo get_home_url(); ?>" class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 740 181">
                            <path class="text_build" d="M338.928,119.856V78.06H355.4v41.8h19.331V61.106H319.6v58.75h19.331ZM381.2,90.481c0,16.87,10.674,30.718,31.853,30.718s31.854-13.848,31.854-30.718-10.674-30.718-31.854-30.718S381.2,73.611,381.2,90.481Zm43.788,0c0,8.057-4.37,13.177-11.935,13.177s-11.934-5.12-11.934-13.177S405.493,77.3,413.057,77.3,424.992,82.424,424.992,90.481Zm24.038,0.588c0,21.4,16.053,30.13,32.694,30.13a41.615,41.615,0,0,0,17.23-3.525V99.965c-3.026,2.686-8.657,4.2-14.708,4.2-7.733,0-15.3-3.861-15.3-13.093,0-10.491,7.648-14.52,15.717-14.52a26.011,26.011,0,0,1,13.868,4.029V63.288a42.58,42.58,0,0,0-17.314-3.525C465.083,59.763,448.946,68.744,449.03,91.069Zm53.538-29.963V78.06h15.8v41.8H537.7V78.06h15.8V61.106H502.568Zm56.395,0v58.75h19.414V104.5h6.3c14.96,0,26.391-5.2,26.391-21.653,0-16.534-11.431-21.738-26.391-21.738H558.963Zm32.862,21.738c0,4.029-2.858,5.707-7.312,5.707h-6.136v-11.5h6.136C588.967,77.053,591.825,78.731,591.825,82.844ZM614.6,90.481c0,16.87,10.674,30.718,31.854,30.718s31.854-13.848,31.854-30.718-10.674-30.718-31.854-30.718S614.6,73.611,614.6,90.481Zm43.789,0c0,8.057-4.37,13.177-11.935,13.177s-11.934-5.12-11.934-13.177S638.891,77.3,646.455,77.3,658.39,82.424,658.39,90.481Zm62.2,29.375V102.231a82.314,82.314,0,0,1,.5-9.9L701.17,119.856H684.781V61.106H704.2V78.647a84.191,84.191,0,0,1-.5,10.072l19.919-27.613H740v58.75H720.585Zm7.4-66.471v-12a28.936,28.936,0,0,1-15.212,3.861,28.743,28.743,0,0,1-15.213-3.861v12A29.173,29.173,0,0,0,727.981,53.385Z"/>
                            <path class="text_you_house" d="M318.986,157.738c0,11.99,9.174,17.027,18.4,17.027a22.722,22.722,0,0,0,9.8-2.111v-8.633c-1.921,1.87-5.091,2.926-8.549,2.926-5.236,0-10.519-2.686-10.519-9.209,0-7.291,5.283-10.217,10.615-10.217a13.112,13.112,0,0,1,8.213,2.734v-8.394a22.989,22.989,0,0,0-9.75-2.11C328.112,139.751,318.986,145.075,318.986,157.738Zm33.091-17.267v33.574h14.6c6.388,0,13.689-1.87,13.689-9.5,0-4.652-2.738-7.242-6.34-8.3a7.128,7.128,0,0,0,5-7.291c0-5.8-4.419-8.489-11.768-8.489H352.077Zm19.356,23.118c0,2.638-1.777,3.5-4.467,3.5h-6.052v-7h6.052C369.656,160.088,371.433,160.951,371.433,163.589Zm-1.3-13.046c0,1.918-1.345,3.118-3.7,3.118l-5.476-.048v-6.188h5.476C368.791,147.425,370.136,148.624,370.136,150.543Zm13.11,6.715c0,9.353,6,17.507,18.011,17.507s18.012-8.154,18.012-17.507-6-17.507-18.012-17.507S383.246,147.905,383.246,157.258Zm26.9,0c0,5.372-3.074,9.353-8.886,9.353s-8.885-3.981-8.885-9.353,3.073-9.353,8.885-9.353S410.143,151.886,410.143,157.258ZM445.3,174.045V160.328c0-1.823.048-3.933,0.193-5.516L432.33,174.045h-8.4V140.471h8.885v13.717c0,1.871-.048,3.981-0.192,5.564l13.161-19.281h8.405v33.574H445.3Zm1.682-37.651V130.35a16.594,16.594,0,0,1-15.851,0v6.044A15.34,15.34,0,0,0,446.98,136.394ZM476.034,181v-6.955h22.094V181h7.685V166.371H501.49v-25.9H477.475c0,8.873-.961,18.226-5.284,25.9h-3.842V181h7.685Zm9.606-32.615h6.965v17.986H481.557C484.2,161.479,485.16,154.956,485.64,148.385Zm22.283,8.873c0,9.353,6,17.507,18.012,17.507s18.011-8.154,18.011-17.507-6-17.507-18.011-17.507S507.923,147.905,507.923,157.258Zm26.9,0c0,5.372-3.074,9.353-8.885,9.353s-8.886-3.981-8.886-9.353,3.074-9.353,8.886-9.353S534.82,151.886,534.82,157.258Zm42.649-16.787L567.238,156.2l-10.231-15.732h-8.4v33.574h8.886v-17.89l7.2,11.079h5.092l7.2-11.031v17.842h8.886V140.471h-8.4Z"/>
                            <path class="bricks" d="M149.379,147.543l37.194-2.066a2.4,2.4,0,0,1,2.771,2.058l0.332,25.1a2.49,2.49,0,0,1-2.72,2.219H149.664a2.239,2.239,0,0,1-2.373-2.042l-0.237-23.1A2.33,2.33,0,0,1,149.379,147.543Zm-73.522,4.082,61.263-3.4a2.027,2.027,0,0,1,2.271,1.878l0.222,22.742a2.122,2.122,0,0,1-2.238,2.01H75.979a1.73,1.73,0,0,1-1.711-1.737l-0.1-19.664A1.824,1.824,0,0,1,75.857,151.625Zm-54.4,3.021,45.5-2.526a1.578,1.578,0,0,1,1.648,1.618l0.093,19.4a1.671,1.671,0,0,1-1.635,1.714H21.488a1.415,1.415,0,0,1-1.29-1.512l-0.024-17.115A1.506,1.506,0,0,1,21.457,154.646Zm91.288-36.57,73.352-9.15c1.506-.188,2.746.643,2.762,1.858l0.33,24.97a2.7,2.7,0,0,1-2.711,2.4l-73.535,5.1a1.813,1.813,0,0,1-2.026-1.744L110.752,120.2A2.246,2.246,0,0,1,112.745,118.076Zm-63.6,7.933,53.092-6.623A1.651,1.651,0,0,1,104.186,121l0.153,21a2.049,2.049,0,0,1-1.923,1.99l-53.193,3.691a1.441,1.441,0,0,1-1.494-1.518l-0.061-18.347A1.8,1.8,0,0,1,49.149,126.009ZM1.145,132l40.2-5.015a1.322,1.322,0,0,1,1.444,1.417l0.054,18.119a1.657,1.657,0,0,1-1.436,1.7L1.146,151.012A1.2,1.2,0,0,1,0,149.669v-16.11A1.517,1.517,0,0,1,1.145,132ZM148.673,79.718l36.951-7.158c1.5-.291,2.736.452,2.752,1.66L188.7,99.063a2.934,2.934,0,0,1-2.7,2.575l-37.047,5.133a1.9,1.9,0,0,1-2.359-1.7l-0.235-22.886A2.757,2.757,0,0,1,148.673,79.718ZM75.551,93.883l60.935-11.8a1.727,1.727,0,0,1,2.258,1.551l0.219,22.531a2.5,2.5,0,0,1-2.224,2.3l-61.066,8.461a1.462,1.462,0,0,1-1.7-1.489l-0.1-19.506A2.153,2.153,0,0,1,75.551,93.883Zm72.421-81.35L184.684,0.382c1.49-.493,2.717.074,2.733,1.271l0.325,24.59a3.48,3.48,0,0,1-2.683,2.923L148.252,39.331c-1.286.355-2.333-.255-2.344-1.362L145.675,15.3A3.273,3.273,0,0,1,147.972,12.533ZM75.248,36.6l60.611-20.062c1.227-.406,2.234.144,2.245,1.23L138.321,40.1a2.965,2.965,0,0,1-2.212,2.589L75.369,59.461a1.255,1.255,0,0,1-1.694-1.244l-0.1-19.35A2.549,2.549,0,0,1,75.248,36.6ZM21.382,104.377L66.691,95.6a1.341,1.341,0,0,1,1.641,1.38l0.092,19.248a1.97,1.97,0,0,1-1.627,1.927l-45.384,6.288a1.2,1.2,0,0,1-1.285-1.324L20.1,106.123A1.774,1.774,0,0,1,21.382,104.377Zm90.869-48.863,72.9-19.134c1.5-.392,2.726.262,2.742,1.465l0.327,24.716a3.193,3.193,0,0,1-2.693,2.749L112.448,80.473a1.545,1.545,0,0,1-2.015-1.452L110.27,57.9A2.661,2.661,0,0,1,112.251,55.514ZM48.963,72.125L101.8,58.256a1.418,1.418,0,0,1,1.936,1.33l0.151,20.82a2.422,2.422,0,0,1-1.913,2.24L49.037,93.63a1.226,1.226,0,0,1-1.488-1.3l-0.061-18.21A2.132,2.132,0,0,1,48.963,72.125Z"/>
                            <path class="home" d="M290.156,162.972v8.872a3,3,0,0,1-3,3H233.688a3,3,0,0,1-3-3V148.156a3,3,0,0,1,3-3h26.746V72.717l-74.3-45.411c-0.81-.561-0.449-2.48-0.449-2.48l-0.012-24.06a1.786,1.786,0,0,1,2.483-.448l40.766,24.7V8.521A1.783,1.783,0,0,1,230.7,6.739L256.866,20.4a1.783,1.783,0,0,1,1.784,1.782V43.031l30.393,18.415a3.124,3.124,0,0,1,1.121,1.727v99.8h-0.008Z"/>
                        </svg>
                    </a>
                </div>
                <div class="cell shrink">
                    <div class="callback">
                        <a href="tel:<?php the_field('phone_number',22); ?>" class="phone"><?php the_field('phone_number',22); ?></a>
                        <div class="working-mode">
                            <span>Сегодня работаем</span> с 9:00 до 18:00
                        </div>
                    </div>
                    <a href="#" class="button">Нужна помощь?</a>
                </div>
            </div>
        </div>
    </header>
    <?php if( have_rows('mp_slider_firstscreen') ): ?>
    <div class="mp_slider_firstscreen">
        <?php while( have_rows('mp_slider_firstscreen') ): the_row(); ?>
            <div class="image" style="background-image: url('<?php echo the_sub_field('mp_slider_firstscreen_image'); ?>')">
                <div class="eclipse">
                    <div class="grid-container">
                        <div class="grid-x align-middle">
                            <div class="cell large-8 shrink">
                                <h2><?php echo the_sub_field('mp_slider_firstscreen_title'); ?></h2>
                                <p><?php echo the_sub_field('mp_slider_firstscreen_text'); ?></p>
                                <a href="<?php echo the_sub_field('mp_slider_firstscreen_url'); ?>" class="button">
                                    <?php echo the_sub_field('mp_slider_firstscreen_button_text'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php if( have_rows('promo') ): ?>
    <div class="content promo">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-padding-x grid-padding-y">
                <?php while( have_rows('promo') ): the_row(); ?>
                <div class="card-item cell large-4">
                    <div class="image" style="background-image: url('<?php echo the_sub_field('promo_image'); ?>')"></div>
                    <a href="<?php echo the_sub_field('promo_url'); ?>" class="title">
                        <?php echo the_sub_field('promo_title'); ?>
                    </a>
                    <div class="text">
                        <?php echo the_sub_field('promo_text'); ?>
                    </div>
                    <a href="<?php echo the_sub_field('promo_url'); ?>" class="button expanded">Узнать подробнее</a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="content projects">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell small-12">
                    <h2>Популярные проекты</h2>
                </div>
                <div class="cell small-12">
                    <a class="button">переключатель</a>
                </div>
                <div class="cell"></div>
            </div>
        </div>
    </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>