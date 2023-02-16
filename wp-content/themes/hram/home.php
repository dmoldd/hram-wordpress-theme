<?php
/*
Template Name: Главная
*/
?>


<?php get_header();?>
      <section class="news-main">
        <div class="container">
          <h2 class="news-main__title">Новости</h2>
          <a class="news-main__link-other-news" href="news.html">Все материалы</a>
          <ul class="news-main__list">
            <li class="news-main__list-item">
              <a href="#" class="news-main__list-item-link">
                <p class="news-main__item-title"> В хуторе Новопокровском состоялся праздник Покрова Богородицы. Настоятеля Храма отца Григория, поздравили паства, а также клирики местных приходов: протоиерей Георгий Ефимов, иерей Глеб Бобков, иерей Артемий Ефимов.</p>
                <p class="news-main__date"><span>1</span><br> окт. 2022</p>
                <div class="news-main__img"><img src="<?php bloginfo('template_url'); ?> /assets/img/news/1n.jpg" alt="Новость"></div>
                <p class="news-main__link-see-more">Читать <i class="fa-solid fa-arrow-right-long"></i></p>
              </a>
            </li>
            <li class="news-main__list-item">
              <a href="#" class="news-main__list-item-link">
                <p class="news-main__item-title">В общине села Некрасовка состоялось знаменательное событие: открытие нового храма. Состоялось праздничное богослужение в честь престольного праздника Успения Богородицы.</p>
                <p class="news-main__date"><span>15</span><br> авг. 2022</p>
                <div class="news-main__img"><img src="<?php bloginfo('template_url'); ?> /assets/img/news/2n.jpg" alt="Новость"></div>
                <p class="news-main__link-see-more">Читать <i class="fa-solid fa-arrow-right-long"></i></p>
              </a>
            </li>
            <li class="news-main__list-item">
              <a href="#" class="news-main__list-item-link">
                <p class="news-main__item-title">На престольном празднике в Приморско-Ахтарске состоялась архииереская служба, которую возглавил владыка Никодим. Ему сослужили священство и клирики ближайших приходов. Также состоялось поставление двух священосцев.</p>
                <p class="news-main__date"><span>29</span><br> июн. 2022</p>
                <div class="news-main__img"><img src="<?php bloginfo('template_url'); ?> /assets/img/news/3n.jpg" alt="Новость"></div>
                <p class="news-main__link-see-more">Читать <i class="fa-solid fa-arrow-right-long"></i></p>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="priest-main">
        <div class="container">
          <h2 class="priest-main__title">Духовенство</h2>
          <ul class="priest-main__info">
            <li class="priest-main__info-title">иерей Артемий Ефимов</li>
            <li class="priest-main__desc">
              Является настоятелем храма Успения Пресвятой Богородицы села "Некрасовское" города Сочи Краснодарского Края. Воспитан в старообрядческой семье, принадлежащей к династии старообрядческого духовенства.
            </li>
            <li class="priest-main__desc priest-main__desc--tablet">
              Имеет высшее образование: закончил Курскую Сельскохозяйственную Академию, получив профессию агронома. Деятельность отца Артемия не ограничивается приходским попечением
              и окормлением общины.
            </li>
            <li class="priest-main__desc priest-main__desc--tablet">
              Помимо послушания церковного настоятеля, отец Артемий является одним из создателей и администраторов Фонда поддержки
              Православных Общин Юга России.Отцом Артемием регулярно совершаются службы в недавно отстроенном храме общины. Приглашаем на богослужение всех
              желающих.
            </li>
            <li class="priest-main__desc priest-main__desc--tablet">
              Пусть Господь Вас благословит!
            </li>
          </ul>
          <div class="sim-slider">
            <ul class="sim-slider-list">
              <li><img src="http://pvbk.spb.ru/inc/slider/imgs/no-image.gif" alt="screen"></li>    <!-- это экран -->
              <li class="sim-slider-element"><img src="<?php bloginfo('template_url'); ?> /assets/img/priest/priest1.jpg" alt="2"></li>
              <li class="sim-slider-element"><img src="<?php bloginfo('template_url'); ?> /assets/img/priest/priest2.jpg" alt="N"></li>
            </ul>
            <div class="sim-slider-arrow-left"></div>
            <div class="sim-slider-arrow-right"></div>
            <div class="sim-slider-dots"></div>
          </div>
        </div>
      </section>
      <section class="film-main">
        <div class="container">
          <h2 class="film-main__title">Фильм о нас</h2>
          <a class="film-main__link-other-videos" href="video.html">ВСЕ ВИДЕО</a>
          <div class="video-iframe">
            <a class="video-iframe__link" href="https://www.youtube.com/embed/y4Psizo1DsE">
              <img class="video-iframe__media" src="<?php bloginfo('template_url'); ?> /assets/img/film/maxresdefault.jpg" alt="Староверы Юга России. Документальный фильм">
            </a>
            <button class="video-iframe__button">
              <svg width="68" height="48" viewBox="0 0 68 48"><path class="video-iframe__button-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path><path class="video-iframe__button-icon" d="M 45,24 27,14 27,34"></path></svg>
            </button>
          </div>
        </div>
      </section>
      <section class="contacts-main">
        <div class="container">
          <h2 class="contacts-main__title">Контакты</h2>
          <div class="contacts-main__iframe" style="position:relative;overflow:hidden;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2898.904053982909!2d39.96583101494357!3d43.39993477678965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f59505ed073d6f%3A0x72d5b0178dafeb1a!2z0J7QsdGJ0LjQvdC90LDRjyDRg9C7LiwgMSwg0JLQtdGA0YXQvdC1LdCY0LzQtdGA0LXRgtC40L3RgdC60LDRjyDQkdGD0YXRgtCwLCDQmtGA0LDRgdC90L7QtNCw0YDRgdC60LjQuSDQutGA0LDQuSwgMzU0MzQ5!5e0!3m2!1sru!2sru!4v1671623049129!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>
      </main>
      <?php get_footer();?>