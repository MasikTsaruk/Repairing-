<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<section class="hero">
    <div class="container">
        <div class="hero-content">

            <span class="eyebrow">
                Electro Service Bratislava
            </span>

            <h1>
                Ремонт электроники без лишних сложностей
            </h1>

            <p class="hero-lead">
                Диагностика и ремонт смартфонов, ноутбуков,
                компьютеров и другой электроники в Братиславе.
                Сначала определяем неисправность и стоимость ремонта —
                затем приступаем к работе.
            </p>

            <div class="hero-actions">
                <a
                    class="button button-primary"
                    href="<?php echo esc_url(home_url('/services')); ?>">
                    Посмотреть услуги
                </a>

                <a
                    class="button button-secondary"
                    href="<?php echo esc_url(home_url('/about')); ?>">
                    Связаться с нами
                </a>
            </div>

            <ul class="hero-points">
                <li>Предварительная диагностика</li>
                <li>Гарантия на выполненные работы</li>
                <li>Понятная стоимость ремонта</li>
            </ul>

        </div>
    </div>
</section>




<section class="home-section">
    <div class="container">

        <div class="about-grid">

            <div>
                <span class="section-label">О сервисе</span>

                <h2>
                    Ремонтируем технику вместо того,
                    чтобы сразу отправлять её на замену
                </h2>

                <p>
                    Многие неисправности можно устранить значительно
                    дешевле покупки нового устройства. Наша задача —
                    найти причину проблемы и предложить ремонт только
                    тогда, когда он действительно имеет смысл.
                </p>

                <p>
                    Перед началом работы клиент получает информацию
                    о неисправности, предполагаемой стоимости и сроках.
                </p>
            </div>

            <div class="about-panel">
                <h3>Почему Electro Service</h3>

                <p>
                    Мы стараемся сделать процесс ремонта понятным
                    даже для человека, который ничего не знает
                    об устройстве электроники.
                </p>

                <ul class="about-list">
                    <li>Диагностика перед ремонтом</li>
                    <li>Согласование стоимости</li>
                    <li>Качественные комплектующие</li>
                    <li>Гарантия на выполненную работу</li>
                    <li>Консультация после ремонта</li>
                </ul>
            </div>

        </div>
    </div>
</section>


<section class="home-section">
    <div class="container">

        <div class="section-heading">
            <span class="section-label">Как это работает</span>

            <h2>Четыре шага до исправного устройства</h2>

            <p>
                Без непонятных дополнительных услуг и внезапных расходов.
            </p>
        </div>

        <div class="process-grid">

            <div class="process-step">
                <div class="process-number">ШАГ 01</div>
                <h3>Приносите устройство</h3>
                <p>
                    Рассказываете, что произошло и какие проблемы появились.
                </p>
            </div>

            <div class="process-step">
                <div class="process-number">ШАГ 02</div>
                <h3>Проводим диагностику</h3>
                <p>
                    Определяем причину неисправности и необходимые работы.
                </p>
            </div>

            <div class="process-step">
                <div class="process-number">ШАГ 03</div>
                <h3>Согласовываем ремонт</h3>
                <p>
                    Сообщаем стоимость и приступаем только после подтверждения.
                </p>
            </div>

            <div class="process-step">
                <div class="process-number">ШАГ 04</div>
                <h3>Возвращаем устройство</h3>
                <p>
                    Проверяем работу техники и передаём её владельцу.
                </p>
            </div>

        </div>
    </div>
</section>


<section class="cta-section">
    <div class="container">

        <div class="cta-box">

            <div>
                <h2>Техника перестала работать?</h2>

                <p>
                    Опишите проблему — мы подскажем,
                    имеет ли смысл ремонт и с чего начать.
                </p>
            </div>

            <a
                class="button button-primary"
                href="<?php echo esc_url(home_url('/about')); ?>">
                Связаться
            </a>

        </div>

    </div>
</section>


<?php
get_footer();
