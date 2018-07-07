<?php
// Version: 1.41; Admin

/**
 * PortaMx Forum
 * @package PortaMx
 * @author PortaMx
 * @copyright 2018 PortaMx
 *
 * Language file Admin.russian
 */

// Portal Center
$txt['pmx_admin_center'] = 'Центр управления порталом';
$txt['pmx_admin_main_welcome'] = 'Вы находитесь в центре управления порталом.
	Отсюда контролируются настройки, блоки, статьи и категории портала.
	Дополнительную информацию по возникающим вопросам можно получить, нажав на значке %s рядом с соответствующими функциями.';
$txt['pmx_admin_main_custom'] = 'Вы находитесь в центре управления порталом.
	Отсюда можно управлять различными настройками.
	Дополнительную информацию по возникающим вопросам можно получить, нажав на значке %s рядом с соответствующими функциями.';

$txt['pmx_center_mansettings'] = 'Управление настройками';
$txt['pmx_center_mansettings_desc'] = 'Изменение или установка настроек панелей, главной страницы и менеджера блоков.';
$txt['pmx_center_manblocks'] = 'Управление блоками';
$txt['pmx_center_manblocks_desc'] = 'Изменение или установка настроек блоков, создание новых, перемещение между панелями и удаление.';
$txt['pmx_center_mancategories'] = 'Управление категориями';
$txt['pmx_center_mancategories_desc'] = 'Изменение или установка настроек категорий, создание, перемещение, изменение и удаление категорий.';
$txt['pmx_center_manarticles'] = 'Управление статьями';
$txt['pmx_center_manarticles_desc'] = 'Изменение или установка настроек статей, создание, перемещение, изменение и удаление статей.';

$txt['pmx_allpanels'] = '<strong>Мобильное меню "Панели портала"</strong>';
$txt['pmx_allpanelSetting'] = '<strong>Мобильное меню "Настройка панелей портала"</strong>';
$txt['pmx_allsettings'] = '<strong>Мобильное меню "Настройки портала"</strong>';
$txt['mobile_portal_blocks'] = $txt['pmx_center_manblocks'] ;
$txt['mobile_portal_settings'] = $txt['pmx_center_mansettings'];

// AdminBlocks
$txt['pmx_admBlk_desc'] = 'Изменение, перемещение, клонирование, создание или удаление блоков.<br>
	На обзорной странице также имеется множество быстрых действий для редактирования блоков.';
$txt['pmx_blocks_mod'] = 'Модерация менеджера блоков PortaMx';
$txt['pmx_admBlk_sides'] = array(
	'front' => 'Главная страница',
	'head' => 'Шапка',
	'top' => 'Центр (верх)',
	'left' => 'Слева',
	'right' => 'Справа',
	'bottom' => 'Центр (низ)',
	'foot' => 'Подвал',
	'pages' => 'Отдельные страницы'
);

// default for access
$txt['pmx_guest'] = 'Гости';
$txt['pmx_ungroupedmembers'] = 'Обычные пользователи';

// panel / block overflow actions
$txt['pmx_overflow_actions'] = array(
	'' => 'нет',
	'auto' => 'позволить обработку браузером',
	'hidden' => 'обрезать по рамке');

// actions for panels and blocks
$txt['pmx_cache_autoclear'] = 'Очистка в день изменения';
$txt['pmx_action_names'] = array(
	'frontpage' => 'Главная страница',
	'pages' => 'Отдельные страницы',
	'articles' => 'Статьи',
	'categories' => 'Категории',
	'community' => 'Форум',
	'boards' => 'Разделы',
	'topics' => 'Темы',
	'admin' => 'Администрирование',
	'calendar' => 'Календарь',
	'login,login2,reminder' => 'Вход',
	'logout' => 'Выход',
	'moderate' => 'Модерация',
	'mlist' => 'Список пользователей',
	'pm' => 'Личные сообщения',
	'post' => 'Отправка темы',
	'profile' => 'Профиль',
	'recent' => 'Последние сообщения',
	'register,register2' => 'Регистрация',
	'stats' => 'Статистика',
	'search,search2' => 'Поиск',
	'unread' => 'Непрочитанные сообщения',
	'unreadreplies' => 'Непрочитанные ответы',
	'who' => 'Кто онлайн',
);

// Device settings
$txt['pmx_blocks_devices'] = 'Видимость на различных устройствах';
$txt['pmx_settings_devices'] = 'Видимость панели на различных устройствах:';
$txt['pmx_devices']['all'] = 'Показывать на всех устройствах';
$txt['pmx_devices']['desk'] = 'Показывать только на настольных компьютерах';
$txt['pmx_devices']['mobil'] = 'Показывать только на мобильных устройствах';

// default settings
$txt['settings_saved'] = 'Настройки были успешно сохранены';
$txt['pmx_defaultsettings'] = 'Этот тип блока не имеет настроек.';
$txt['pmx_default_header_none'] = 'Не показывать';
$txt['pmx_default_header_catbg'] = 'round';
$txt['pmx_default_header_titlebg'] = 'bar';
$txt['pmx_default_header_asbody'] = 'как основная часть';
$txt['pmx_default_none'] = 'нет';

$txt['pmx_information_icon'] = 'Подробней...';
$txt['pmx_actionfault'] = 'Получен неверный запрос!';
$txt['pmx_sysblock'] = 'Системный блок';
$txt['pmx_userblock'] = 'Пользовательский блок';

// popups
$txt['pmx_category_popup'] = 'Настройки категории';
$txt['pmx_article_information'] = 'Подробная информация о статье с id %s';
$txt['pmx_click_edit_ttl'] = 'Нажмите для изменения заголовка';
$txt['pmx_edit_titles'] = 'Настройки заголовка';
$txt['pmx_cat_clone'] = 'Клонировать категорию';
$txt['pmx_confirm_catclone'] = 'Хотите клонировать эту категорию?';
$txt['pmx_cat_delete'] = 'Удалить категорию';
$txt['pmx_confirm_catdelete'] = 'Хотите удалить эту категорию?';
$txt['pmx_art_delete'] = 'Удалить статью';
$txt['pmx_confirm_artdelete'] = 'Хотите удалить эту статью?';
$txt['pmx_art_clone'] = 'Клонировать статью';
$txt['pmx_confirm_artclone'] = 'Хотите клонировать эту статью?';

// Buttons
$txt['pmx_save'] = 'Сохранить';
$txt['pmx_create'] = 'Создать';
$txt['pmx_save_exit'] = 'Сохранить и выйти';
$txt['pmx_save_cont'] = 'Сохранить и продолжить';
$txt['pmx_savechanges'] = 'Сохранить изменения';
$txt['pmx_cancel'] = 'Отмена';
$txt['pmx_update_save'] = 'Обновить';
$txt['pmx_update_all'] =  'Обновить ВСЕ';
$txt['pmx_delete_button'] = 'Подтверждаю';

// Article Manager
$txt['pmx_articles_desc'] = 'В этом разделе доступны такие операции, как создание, изменение, клонирование или удаление статей.<br>
	На обзорной странице также имеется множество быстрых действий для редактирования статей.';
$txt['pmx_articles_disableHSimage'] = 'Отключить лайтбокс для изображений:';

// overview
$txt['pmx_articles_overview'] = 'Обзор статей';
$txt['pmx_articles_add'] = 'Добавить статью';
$txt['pmx_articles_title'] = 'Заголовок';
$txt['pmx_articles_type'] = 'Тип';
$txt['pmx_articles_catname'] = 'Категория';
$txt['pmx_edit_article'] = 'Нажмите для редактирования этой статьи';
$txt['pmx_articles_info'] = 'Нажмите для просмотра дополнительной информации';
$txt['pmx_chg_articlnocats'] = 'Нет категории';
$txt['pmx_chg_articlcats'] = ' - кликните для изменения';
$txt['pmx_status_activ'] = 'Активен';
$txt['pmx_status_inactiv'] = 'Неактивен';
$txt['pmx_status_change'] = 'Нажмите для изменения';
$txt['pmx_article_order'] = 'Порядок';
$txt['pmx_have_ecl_settings'] = 'Блок скрыт до тех пор, пока не будут приняты условия ECL';
$txt['pmx_have_artecl_settings'] = 'Статья скрыта до тех пор, пока не будут приняты условия ECL';
$txt['pmx_have_catecl_settings'] = 'Категория скрыта до тех пор, пока не будут приняты условия ECL';

$txt['pmx_rowmove_title'] = 'Задать новое расположение статьи';
$txt['pmx_rowmove'] = 'Переместить статью';
$txt['pmx_rowmove_to'] = 'Статья';
$txt['pmx_rowmove_place'] = '';
$txt['pmx_rowmove_before'] = 'перед';
$txt['pmx_rowmove_after'] = 'после';
$txt['pmx_rowmove_updown'] = 'Нажмите для перемещения статьи';
$txt['pmx_rowmove_error'] = 'Нельзя переместить статью саму в себя!';

$txt['pmx_chg_articleaccess'] = 'Нажмите для изменения настроек доступа статьи';
$txt['pmx_clone_article'] = 'Нажмите для клонирования этой статьи';
$txt['pmx_delete_article'] = 'Нажмите для удаления этой статьи';
$txt['pmx_article_groupaccess'] = 'Статья имеет настройки доступа';
$txt['pmx_article_modaccess'] = 'Статья имеет настройки модерации';
$txt['pmx_article_cssfile'] = 'Статья имеет собственный файл стилей';
$txt['pmx_article_approved'] = 'Статья проверена';
$txt['pmx_article_not_approved'] = 'Статья не проверена';

$txt['pmx_article_filter'] = 'Нажмите для установки фильтра статей';
$txt['pmx_article_setfilter'] = 'Установка фильтра';
$txt['pmx_article_filter_category'] = 'Показать категории:';
$txt['pmx_article_filter_categoryClr'] = 'сброс';
$txt['pmx_article_filter_approved'] = 'Показать неодобренные статьи:';
$txt['pmx_article_filter_active'] = 'Показать неактивные статьи:';
$txt['pmx_article_filter_myown'] = 'Показать мои статьи:';
$txt['pmx_article_filter_member'] = 'Показать статьи пользователя:';
$txt['pmx_article_filter_membername'] = '(имя)';
$txt['set_article_filter'] = 'Применить';

// Article types
// do not change the keys of this array !!
$txt['pmx_articles_types'] = array(
	'html' => 'HTML',
	'code' => 'Script',
	'bbc' => 'BBC',
	'php' => 'PHP',
);

// edit
$txt['pmx_article_edit'] = 'Редактирование &mdash; ';
$txt['pmx_article_edit_new'] = 'Создание статьи';
$txt['pmx_article_title'] = 'Заголовок:';
$txt['pmx_article_type'] = 'Тип статьи:';
$txt['pmx_article_cats'] = 'Категория:';
$txt['pmx_article_name'] = 'Название:';
$txt['pmx_article_settings_title'] = '&mdash; Настройки статьи';
$txt['pmx_article_groups'] = 'Настройки доступа';
$txt['pmx_article_moderate_title'] = 'Модерация статьи';
$txt['pmx_article_moderate'] = 'Разрешить модерацию:';
$txt['pmx_article_teaser'] = 'Количество %s в тизере:';
$txt['pmx_article_footer'] = 'Показывать автора, дату создания и обновления:';
$txt['pmx_settings_restorespeed_time'] = ' миллисекунд';

// access popup
$txt['pmx_acs_repl'] = 'Перезаписать';
$txt['pmx_acs_add'] = 'Добавить';
$txt['pmx_acs_rem'] = 'Удалить';

// Categories Manager
$txt['pmx_categories_desc'] = 'Создание, редактирование, перемещение, клонирование или удаление категорий — все эти действия доступны здесь.<br>
	На обзорной странице также имеется множество быстрых действий для редактирования категорий.';

// overview
$txt['pmx_categories_overview'] = 'Просмотр категорий';
$txt['pmx_categories_add'] = 'Добавить новую категорию';
$txt['pmx_categories_name'] = 'Название';
$txt['pmx_categories_order'] = '#';
$txt['pmx_categories_level'] = 'Уровень';
$txt['pmx_edit_categories'] = 'Нажмите для редактирования категории';
$txt['pmx_clone_categories'] = 'Нажмите для клонирования категории';
$txt['pmx_move_categories'] = 'Нажмите для перемещения категории';
$txt['pmx_editname_categories'] = ' - Нажмите для изменения названия';
$txt['pmx_categories_showarts'] = 'Статьи в категории';
$txt['pmx_delete_categories'] = 'Нажмите для удаления этой категории';
$txt['pmx_chg_categoriesaccess'] = 'Нажмите для изменения настроек доступа';
$txt['pmx_confirm_categoriesdelete'] = 'Хотите удалить эту категорию?';
$txt['pmx_confirm_categoriesclone'] = 'Хотите клонировать эту категорию?';
$txt['pmx_categories_groupaccess'] = 'Категория имеет настройки доступа';
$txt['pmx_categories_cssfile'] = 'Категория имеет собственный файл стилей';
$txt['pmx_categories_articles'] = 'Статей в категории: %s';
$txt['pmx_categories_none'] = '[нет]';
$txt['pmx_categories_setname'] = 'Изменение названия категория';
$txt['pmx_update_all'] =  'Обновить ВСЕ';

// popups
$txt['pmx_categories_popup'] = 'Настройки категории';
$txt['pmx_categories_movecat'] = 'Задать новое расположение категории';
$txt['pmx_categories_move'] = 'Переместить категорию';
$txt['pmx_categories_moveplace'] = '';
$txt['pmx_categories_tomovecat'] = 'Категория';
$txt['pmx_categories_move_error'] = 'Невозможно перемещение категории в саму себя!';

// cat infos
$txt['pmx_categories_root'] = 'Корневая категория';
$txt['pmx_categories_rootchild'] = 'Корневая категория с подкатегориями';
$txt['pmx_categories_childchild'] = 'Вложена в категорию &quot;%s&quot;, имеет другие подкатегории';
$txt['pmx_categories_child'] = 'Вложена в категорию &quot;%s&quot;';

// Category placement
// do not change the keys of this array !!
$txt['pmx_categories_places'] = array(
	'before' => 'Перед',
	'child' => 'Вложенная',
	'after' => 'После',
);

// showmodes
$txt['pmx_categories_modsidebar'] = 'Показывать самую первую статью и все заголовки в сайдбаре:';
$txt['pmx_categories_modpage'] = 'Показывать все статьи на одной странице:';
$txt['pmx_categories_modpage_count'] = 'Количество статей на странице:';
$txt['pmx_categories_modpage_pageindex'] = 'Всегда показывать пагинацию:';
$txt['pmx_categories_addsubcats'] = 'Добавлять подкатегории в сайдбар:';
$txt['pmx_categories_showsubcats'] = 'Показывать подкатегории в сайдбаре:';
$txt['pmx_categories_sidebarwith'] = 'Ширина сайдбара (в пикселах):';
$txt['pmx_categorie_inherit'] = 'Наследовать настройки доступа категории:';
$txt['pmx_categorie_articlesort'] = 'Сортировка статей:';
$txt['pmx_categories_sidebaralign'] = 'Выравнивание сайдбара:';
// do not change the keys of this array !!
$txt['pmx_categories_sbalign'] = array(
	0 => 'По левой стороне',
	1 => 'По правой стороне',
);

// Articles sort mode
// do not change the keys of this array !!
$txt['pmx_categories_artsort'] = array(
	'id' => 'По ID',
	'name' => 'По названию',
	'created' => 'По дате создания',
	'updated' => 'По дате обновления',
	'approved' => 'По дате одобрения',
	'owner' => 'По автору',
);
$txt['pmx_artsort'] = array(
	0 => ' (убыв.)',
	1 => ' (возр.)'
);

// Categories/Articles show mode
// do not change the keys of this array !!
$txt['pmx_categories_showmode'] = array(
	'both' => 'Показывать заголовок и рамку для категории и статей в ней:',
	'article' => 'Скрывать заголовок и рамку для категории, но показывать для статей:',
	'category' => 'Показывать заголовок и рамку для категории, но скрывать для статей:',
	'none' => 'Скрывать заголовок и рамку для категории и статей в ней:',
);
$txt['pmx_categories_visual'] = 'Используйте настройки заголовка/рамки для статей:';

// edit
$txt['pmx_categories_edit'] = 'Редактирование &mdash; ';
$txt['pmx_categories_edit_new'] = 'Создание новой категории';
$txt['pmx_categories_title'] = 'Заголовок:';
$txt['pmx_categories_type'] = 'Расположение:';
$txt['pmx_categories_cats'] = 'Категория:';
$txt['pmx_categories_settings_title'] = 'Настройки категории';
$txt['pmx_categories_groups'] = 'Настройки доступа';
$txt['pmx_categories_globalcat'] = 'Глобальный доступ';
$txt['pmx_categorie_global'] = 'Запретить глобальное использование:';
$txt['pmx_categorie_request'] = 'Отключить запрос категории:';

$txt['pmx_check_catelcmode'] = 'Скрывать категорию, пока не принято соглашение о хранении куки:';
$txt['pmx_check_catelcbots'] = 'Скрывать категорию для пауков:';
$txt['pmx_check_artelcmode'] = 'Скрывать статью, пока не принято соглашение о хранении куки:';
$txt['pmx_check_artelcbots'] = 'Скрывать статью для пауков:';

// common edit for Blocks, Articles, Categories
$txt['pmx_edit_title_helpalign'] = 'Нажмите для установки выравнивания заголовка';
$txt['pmx_editblock'] = 'Редактирование &mdash; ';
$txt['pmx_editblock_new'] = 'Создание блока ';
$txt['pmx_edit_title'] = 'Заголовок:';
$txt['pmx_edit_title_lang'] = 'Язык:';
$txt['pmx_edit_title_align'] = 'Выравнивание:';
$txt['pmx_edit_pagename'] = 'Название страницы:';
$txt['pmx_edit_titleicon'] = 'Иконка:';
$txt['pmx_edit_no_icon'] = 'нет иконки';
$txt['pmx_edit_content'] = 'Создание или изменение содержания';
$txt['pmx_settings_deviceshelp'] = 'Выберите тип устройства, на котором будет отображаться эта панель.';
$txt['pmx_boponews_disableYoutube'] = 'Отображать ролики с Youtube только как ссылки:';

$txt['pmx_block_move_error'] = 'Нельзя переместить блок внутрь его самого!';
$txt['namefielderror'] = 'Поле "%s" не заполнено!';
$txt['pmx_edit_title_align_types'] = array(
	'left' => 'По левому краю',
	'center' => 'По центру',
	'right' => 'По правому краю'
);

$txt['pmx_title'] = 'Заголовок';
$txt['pmx_status'] = 'Статус';
$txt['pmx_options'] = 'Опции';
$txt['pmx_functions'] = 'Действия';
$txt['pmx_edit_titles'] = 'Настройки заголовка';
$txt['pmx_toggle_language'] = 'Нажмите для переключения между языками';

$txt['pmx_edit_visuals'] = 'Настройки просмотра и стили CSS';
$txt['pmx_edit_cancollapse'] = 'Можно сворачивать:';
$txt['pmx_edit_overflow'] = 'Реакция на переполнение:';
$txt['pmx_pixel_blank'] = ' В пикселах или оставьте пустым';

$txt['pmx_edit_height'] = 'Фиксация высоты блока:';
$txt['pmx_edit_height_mode'] = array(
	'max-height' => 'max-height',
	'height' => 'height',
	'min-height' => 'min-height');

$txt['pmx_edit_collapse_state'] = 'Начальное состояние:';
$txt['pmx_collapse_mode'] = array(
	0 => 'по умолчанию',
	1 => 'свернутый',
	2 => 'развернутый');

$txt['pmx_edit_cssfilename'] = 'CSS-файл:';
$txt['pmx_edit_usedclass_type'] = 'Тип';
$txt['pmx_edit_usedclass_style'] = 'Назначенный класс';
$txt['pmx_edit_canhavecssfile'] = 'Укажите css-файл или оставьте без изменений';
$txt['pmx_edit_nocss_class'] = '[не определен для темы %s]';

$txt['pmx_edit_innerpad'] = 'Внутренний отступ:';
$txt['pmx_pixel'] = ' px';

$txt['pmx_htmlsettings_title'] = 'Настройки html-блока';
$txt['pmx_html_teaser'] = 'Использовать html-тизер:';

$txt['pmx_teasemode'] = array(
	0 => 'слов',
	1 => 'символов'
);

$txt['pmx_add_new_blocktype'] = 'Добавление нового блока';
$txt['pmx_blocks_blocktype'] = 'Тип блока:';
$txt['pmx_add_new_articletype'] = 'Добавление новой статьи';
$txt['pmx_articles_articletype'] = 'Выберите тип статьи:';
$txt['pmx_content_print'] = 'Показывать кнопку вывода на печать:';
$txt['close_window'] = 'Закрыть окно';
?>