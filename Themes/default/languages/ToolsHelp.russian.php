<?php
// Version: 1.41; ToolsHelp

global $helptxt;

// Admin help messages
$helptxt['dont_use_lightbox'] = 'Если <strong>включено</strong>, изображения и вложения в сообщениях могут отображаться в увеличенном виде.<br>
При наличии нескольких изображений можно просматривать их в виде галереи.<br>Любое изображение или вложение можно отключить, добавив параметр <strong>expand=off</strong> к тегу IMG или ATTACH. Например: [img expand=off] или [attach expand=off]';

$helptxt['image_download'] = 'Если включено, пользователи с правами "просмотр вложений" могут скачивать прикреплённые изображения.<br>
В целях безопасности лучше не включайте эту опцию!';
$helptxt['image_addwatermark'] = 'Если включено, небольшой значок накладывается поверх скачиваемых изображений, в нижнем правом углу.<br>
	Для администраторов эта опция НЕ действует!';
$helptxt['watermark_image'] = 'Введите название водяного знака (файл формата .gif или .png).<br>
	<strong>Примечание:</strong> скопируйте изображение, которое будете использовать, в папку <strong>watermark</strong>.';

$helptxt['add_favicon_to_links'] = 'Эта настройка управляет добавлением иконки сайта (если она есть) к каждой ссылке с классом "bbc_link".';

$helptxt['ecl_enabled'] = 'Это позволит обеспечить совместимость вашего  портала с <strong>Законом Евросоюза о куки</strong>.<br>
Если включено, любой посетитель (включая пауков) должен будет принять соглашение об использовании куки-файлов, прежде чем сможет использовать форум в полной мере, если он находится в одной из стран Евросоюза.<br>
<strong>Для использования НЕОБХОДИМО включить кэширование. Если кэширование отключено, эта функция НЕ будет работать!</strong>';
$helptxt['ecl_nomodal'] = 'Обычно форум не доступен, пока пользователь не примет соглашение ECL.<br>
Если включить <strong>немодальный режим</strong>, сайт доступен и посетитель может просматривать страницы форума.
 <strong>Заметьте, в этом случае любые дополнительные скрипты или рекламный контент могут использовать свои куки!</strong>';
$helptxt['ecl_nomodal_mobile'] = 'На мобильных устройствах режим ECL обычно переключается на <strong>модальный</strong>. Здесь вы можете отключить это, чтобы использовался <strong>немодальный режим</strong>.';
$helptxt['ecl_topofs'] = 'Здесь регулируется расположение окна ECL в верхней части страниц. Значение 40 — хороший выбор.';

$helptxt['gdpr_enabled'] = 'Эта настройка делает ваш форум соответствующим <a href="https://gdpr-info.eu/"><strong>Общим правилам Евросоюза по защите данных (GDPR)</strong></a>.<br>
 Вы должны указать все необходимые контактные данные — как ваши, так и вашего хостера.
 Эти данные передаются на страницу для вызова во время выполнения.';
$helptxt['gdpr_last_update'] = 'Эта дата сохраняется в базе данных и будет использоваться для принятия решения о необходимости повторного отображения соглашения GDPR.
 Например, это произойдет, если вы изменили содержание соглашения.
 Это поле <strong>НЕОБХОДИМО</strong> заполнить, значение по умолчанию — 2018-05-25 (дата вступления в силу GDPR).';

 $helptxt['lang_autodetect'] = 'Эта функция используется для отображения страниц (насколько это возможно) на родном языке посетителя.
 <strong>Для использования НЕОБХОДИМО включить кэширование. Если кэширование отключено, эта функция НЕ будет работать!</strong>';
 $helptxt['geoip_enabled'] = 'Если определение языка браузера невозможно, воспользуйтесь сервисом <strong>GEOIP</strong> для распознавания языка посетителя.';
$helptxt['geoip_sslkey'] = 'Если вы приобрели <a href="http://www.geoplugin.com/webservices/ssl"><strong>SSL-ключ для GeoIP</strong></a>, укажите его здесь.';
 $helptxt['langdetect_log'] = 'Если включено, каждое определение языка (день, время, режим определения, код страны, IP-адрес, агент пользователя) записывается.
 Для этого в корневой директории форума создается поддиректория <strong>LangDetect</strong>.
 Там можно будет найти логи за каждый день (<strong>data-yyyy-mm-dd.log</strong>).
 Логи, созданные 7 дней назад, удаляются автоматически при каждом выполнении специальной задачи в <strong>Диспетчере задач</strong>.';

$helptxt['portal_enabled'] = 'Эта настройка задействует интеграцию <strong>портала</strong> с форумом.<br>
На форуме появятся <strong>Главная страница</strong>, <strong>Боковые панели</strong>, <strong>Категории</strong> и <strong>Статьи</strong>.';
$helptxt['webkit_scrollbars'] = 'Если включено, полосы прокрутки браузера приобретают уникальный дизайн.
 Чтобы внести свои правки в оформление, отредактируйте файл <strong>Themes/css/webkit.css</strong>.
 Обратите внимание, что это работает только с браузерами на движке WebKit (<strong>Chrome</strong> и <strong>Opera</strong>).';

$helptxt['google_site_verification'] = 'Если нужно подтвердить право собственности на сайт в Google Search Console, воспользуйтесь этим полем.
Строчка <strong>&lt;meta name="google-site-verification" content="ваш ключ" /&gt;</strong> отобразится в верхней части кода страниц.';

$helptxt['imprint_enabled'] = 'Здесь можно активировать страницу «О сайте» (imprint).
 На ней будут использоваться введённые вами данные (полное имя, улица и номер дома, почтовый индекс, местоположение, страна и электронный адрес).';
?>