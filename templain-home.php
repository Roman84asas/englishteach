<?php

/*
 * Template name: Главная траница
 */

get_header();

    while ( have_posts() ) :
        the_post(); ?>


    <section class="info_sect">
        <div class="wrapper">
            <div class="info_data font_nav">
                <h2>Репетитор по английскому</h2>
                <p class="description">Обучение английскому, немецкому языку с основ и до свободного владения. Помощь в подготовке к ЕГЭ и бакалавриату.</p>
                <a href="#box_subscribe" class="button" id="button"><span>Узнать больше</span></a>
            </div>

        </div>
    </section>

    <section class="services_icon">
        <div class="item">
            <div class="image_holder">
                <img src="./assets/img/icon1.png" alt="">
            </div>
            <h3>Английский с нуля</h3>
            <p>Обучение английскому языку с нуля и до необходимого Вам уровня. Подход к каждому обучаемому индивидуален.</p>
        </div>

        <div class="item">
            <div class="image_holder">
                <img src="assets/img/icon2.png" alt="">
            </div>
            <h3>Подготовка к экзаменам</h3>
            <p>Поэтапная подготовка к ЕГЭ, бакалавриату с учетом требований школьной или лицейской программы.</p>
        </div>

        <div class="item">
            <div class="image_holder">
                <img src="assets/img/icon3.png" alt="">
            </div>
            <h3>Разговорный английский</h3>
            <p>Обучение разговорному ангийскому языку как для повседневного общения, так и для деловых разговоров.</p>
        </div>

        <div class="item">
            <div class="image_holder">
                <img src="assets/img/icon4.png" alt="">
            </div>
            <h3>IELTS, TOEFL, Cambridge ESOL</h3>
            <p>В зависимости от необходимого Вам результата, подбирается индивидуальная программа к каждому тесту.</p>
        </div>
    </section>

    <section class="about_posts" id="about_posts">
        <div class="wrapper">
            <h2 class="block_title font_nav">Обо мне</h2>

            <div class="about_list">
                <div class="about_item">
                    <img src="assets/img/about1.jpg" alt="">
                    <div class="data_line">
                        <span class="about_img"><img src="assets/img/finger.png" alt=""></span>
                        <span class="line"></span>
                    </div>
                    <h3 class="about_data font_nav">
Более 10 лет опыта работы
</h3>

                </div>

                <div class="about_item">
                    <img src="assets/img/about2.jpg" alt="">
                    <div class="data_line">
                        <span class="about_img"><img src="assets/img/finger.png" alt=""></span>
                        <span class="line"></span>
                    </div>
                    <h3 class="about_data font_nav">
Свободное владение пятью языками
</h3>

                </div>

                <div class="about_item">
                    <img src="assets/img/about3.jpg" alt="">
                    <div class="data_line">
                        <span class="about_img"><img src="assets/img/finger.png" alt=""></span>
                        <span class="line"></span>
                    </div>
                    <h3 class="about_data font_nav">
Опыт работы с разными возрастными группами
</h3>

                </div>

                <div class="about_item">
                    <img src="assets/img/about4.jpg" alt="">
                    <div class="data_line">
                        <span class="about_img"><img src="assets/img/finger.png" alt=""></span>
                        <span class="line"></span>
                    </div>
                    <h3 class="about_data font_nav">
Гибкий график занятий
</h3>

                </div>
            </div>

        </div>
    </section>

    <section class="services_list" id="services_list">
        <div class="wrapper">

            <h2 class="block_title font_nav">Сервис услуг</h2>
            <p class="sub_title font_nav">Перечень условий проведения занятий, способов проведения и целей.</p>

            <div class="product_list cf">

                <div class="product">
                    <div class="image_holder">
                        <img src="assets/img/service_img1.png" alt="">
                    </div>

                    <div class="data_holder">
                        <span class="catig">Что Вам необходимо</span>
                        <h3>Иностранный язык</h3>
                        <p>Обучение ангийскому и немецкому языку по индивидуальной прграмме и в соответствии с Вашими целями.</p>

                    </div>
                </div>

                <div class="product">
                    <div class="image_holder">
                        <img src="assets/img/service_img2.png" alt="">
                    </div>

                    <div class="data_holder">
                        <span class="catig">Индивидуальный подход</span>
                        <h3>Подход к преподaванию</h3>
                        <p>В зависимости от ситуации, как преподавание на дому, так и выезд по месту жительства обучаемого.</p>
                    </div>
                </div>

                <div class="product">
                    <div class="image_holder">
                        <img src="assets/img/service_img3.png" alt="">
                    </div>

                    <div class="data_holder">
                        <span class="catig">Колличествo</span>
                        <h3>Возможно группой</h3>
                        <p>Обучение ангийскому и немецкому языку возможно вести не только индивидуально с обучаемым, но и группой.</p>

                    </div>
                </div>

                <div class="product">
                    <div class="image_holder">
                        <img src="assets/img/service_img4.png" alt="">
                    </div>

                    <div class="data_holder">
                        <span class="catig">График</span>
                        <h3>Как Вам удобно</h3>
                        <p>Обучение осуществляется на основе гибкого графика и с учетом свободного времени клиента.</p>
                    </div>
                </div>

                <div class="product">
                    <div class="image_holder">
                        <img src="assets/img/service_img5.png" alt="">
                    </div>

                    <div class="data_holder">
                        <span class="catig">Законно</span>
                        <h3>Официальная деятельность</h3>
                        <p>Обучение языкам осуществляется законно, в соответствии с требованиями Республиканского патента на преподование.</p>
                    </div>
                </div>
            </div>

            <div class="all_products">
                <a href="#" class="font_nav">Все услуги</a>
            </div>
        </div>
    </section>

    <section class="box_subscribe" id="box_subscribe">
        <div class="wrapper">
            <div class="left_subscribe">
                <span class="category">Английский и немецкий язык</span>
                <h2 class="block_title font_nav">Подпишитесь на нас</h2>
                <p class="description">Подпишитесь на нас и получите всю информацию о занятиях. Все изменения и новости будут рассылаться незамедлительно.</p>
                <form class="form_subscribe" action="" >
                    <input type="email" class="email" placeholder="Введите Ваш email" name="">
                    <span class="separator"></span>
                    <input type="submit" value="">
                </form>
            </div>

            <div class="right_subscribe">
                <figure>
                    <figcaption>
                        <img class="mask" src="assets/img/feather.png" alt="">
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="slider_info" id="slider_info">
        <div class="left_box">
            <img src="assets/img/english.jpg" alt="">
        </div>
        <div class="right_box">
            <div class="data_holder">
                <span class="category">Языки для всех</span>
                <h3 class="font_nav">Английский и немецкий языки</h3>
                <p class="description">Обучениу с нуля и до необходимого уровня. Подготовка к бакалавриату или экзаменам.</p>
            </div>
        </div>
        <div class="product_img">
            <img src="assets/img/teach.jpg" alt="">
        </div>
    </section>

<?php
    endwhile;

get_footer();