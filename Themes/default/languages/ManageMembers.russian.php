<?php
// Version: 1.41; ManageMembers

global $context;

$txt['groups'] = 'Группы';
$txt['viewing_groups'] = 'Просмотр групп пользователей';

$txt['membergroups_title'] = 'Управление группами пользователей';
$txt['membergroups_description'] = 'Группы пользователей имеют определенные параметры и права доступа. Некоторые группы зависят от количества сообщений. Нужная группа назначается в профиле пользователя, в настройках учётной записи.';
$txt['membergroups_modify'] = 'Изменить';

$txt['membergroups_add_group'] = 'Добавить группу';
$txt['membergroups_regular'] = 'Основные группы';
$txt['membergroups_post'] = 'Группы, основанные на количестве сообщений';
$txt['membergroups_guests_na'] = 'недоступно';

$txt['membergroups_group_name'] = 'Название новой группы';
$txt['membergroups_new_board'] = 'Доступные разделы';
$txt['membergroups_new_board_desc'] = 'Разделы, доступные для данной группы пользователей';
$txt['membergroups_new_board_post_groups'] = '<em>Примечание: обычно для того чтобы оставить сообщение, не требуется особенных прав, потому как группа по умолчанию предоставляет эти права.</em>';
$txt['membergroups_new_as_inherit'] = 'наследовать из';
$txt['membergroups_new_as_type'] = 'по типу';
$txt['membergroups_new_as_copy'] = 'базируемая на';
$txt['membergroups_new_copy_none'] = '(нет)';
$txt['membergroups_can_edit_later'] = 'Можно отредактировать это позднее.';
$txt['membergroups_can_manage_access'] = 'Этой группе доступны все разделы, потому что она имеет права на управление разделами.';

$txt['membergroups_cannot_delete_paid'] = 'Эта группа не может быть удалена потому, что она используется в платных подписках: %1$s';

$txt['membergroups_edit_group'] = 'Редактирование группы';
$txt['membergroups_edit_name'] = 'Название группы';
$txt['membergroups_edit_inherit_permissions'] = 'Наследуемые права доступа';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Выберите &quot;Нет&quot;, чтобы разрешить группе иметь свои права доступа.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Нет - Использовать уникальные права доступа';
$txt['membergroups_edit_inherit_permissions_from'] = 'Наследовать от';
$txt['membergroups_edit_hidden'] = 'Видимость';
$txt['membergroups_edit_hidden_no'] = 'Видимая';
$txt['membergroups_edit_hidden_boardindex'] = 'Видимая (кроме списка групп)';
$txt['membergroups_edit_hidden_all'] = 'Невидимая';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Хотите запретить назначение этой группы в качестве основной?\\n\\nЭто ограничит назначение группы только в качестве дополнительной и изменит эту группу на дополнительную у всех пользователей входящих в нее.\\n\\nТакже, группа будет удалена из групп модераторов в разделах, где она была назначена.';
$txt['membergroups_edit_desc'] = 'Описание группы пользователей';
$txt['membergroups_edit_group_type'] = 'Тип группы пользователей';
$txt['membergroups_edit_select_group_type'] = 'Выбрать тип группы пользователей';
$txt['membergroups_group_type_private'] = 'Приватная <span class="smalltext">(Членство в группе присваивается вручную)</span>';
$txt['membergroups_group_type_protected'] = 'Защищено <span class="smalltext">(Только администраторы могут управлять составом группы)</span>';
$txt['membergroups_group_type_request'] = 'По запросу <span class="smalltext">(Пользователь может сделать запрос на членство в группе)</span>';
$txt['membergroups_group_type_free'] = 'Свободная <span class="smalltext">(Пользователь может сам присоединиться к данной группе)</span>';
$txt['membergroups_group_type_post'] = 'Основанная на количестве сообщений <span class="smalltext">(Членство в группе основано на количестве сообщений)</span>';
$txt['membergroups_min_posts'] = 'Требуемое количество сообщений';
$txt['membergroups_online_color'] = 'Цвет в списке онлайн';
$txt['membergroups_icon_count'] = 'Количество изображений с иконками';
$txt['membergroups_icon_image'] = 'Имя файла с иконкой';
$txt['membergroups_icon_image_note'] = 'Вы можете загрузить свои изображения в директорию темы по умолчанию, чтобы использовать их здесь. Разные изображения могут быть использованы в разных темах, просто дайте им одинаковые имена.';
$txt['membergroups_max_messages'] = 'Максимальное количество личных сообщений';
$txt['membergroups_max_messages_note'] = '0 - неограниченно';
$txt['membergroups_tfa_force'] = 'Принудительная двухфакторная (2FA) авторизация для этой группы';
$txt['membergroups_tfa_force_note'] = 'Убедитесь, что вы предупредили пользователей, перед включением этой функции!';
$txt['membergroups_edit_save'] = 'Сохранить';
$txt['membergroups_delete'] = 'Удалить';
$txt['membergroups_confirm_delete'] = 'Хотите удалить эту группу?!';
$txt['membergroups_confirm_delete_mod'] = 'Эта группа назначена как группа модераторов для одного или нескольких разделов. Хотите удалить ее?';
$txt['membergroups_swap_mod'] = 'Эта группа назначена как группа модераторов для одного или нескольких разделов. Если изменить её тип на группу зависящую от количества сообщений, она перестанет быть группой модераторов для тех разделов.';

$txt['membergroups_members_title'] = 'Показать всех пользователей группы';
$txt['membergroups_members_group_members'] = 'Пользователи группы';
$txt['membergroups_members_no_members'] = 'Эта группа сейчас пуста';
$txt['membergroups_members_add_title'] = 'Добавить пользователя в эту группу';
$txt['membergroups_members_add_desc'] = 'Выбрать пользователей';
$txt['membergroups_members_add'] = 'Добавить';
$txt['membergroups_members_remove'] = 'Удалить из группы';
$txt['membergroups_members_last_active'] = 'Последняя активность';
$txt['membergroups_members_additional_only'] = 'Добавить только как дополнительную группу.';
$txt['membergroups_members_group_moderators'] = 'Модераторы группы';
$txt['membergroups_members_description'] = 'Описание';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Хотите удалить самого себя из группы администраторов?';

$txt['membergroups_postgroups'] = 'Группы пользователей, имеющие права на отсылку сообщений';
$txt['membergroups_settings'] = 'Свойства групп пользователей';
$txt['groups_manage_membergroups'] = 'Группы с правом изменять остальные';
$txt['membergroups_select_permission_type'] = 'Установить права';
$txt['membergroups_images_url'] = 'Themes/default/images/membericons/ ';
$txt['membergroups_select_visible_boards'] = 'выбрать разделы';
$txt['membergroups_members_top'] = 'Пользователи';
$txt['membergroups_name'] = 'Название группы';
$txt['membergroups_icons'] = 'Иконки';

$txt['admin_browse_approve'] = 'Пользователи, учётные записи которых ожидают одобрения';
$txt['admin_browse_approve_desc'] = 'Здесь можно управлять всеми пользователями, учётные записи которых ожидают одобрения.';
$txt['admin_browse_activate'] = 'Учётные записи пользователей, ожидающих активации';
$txt['admin_browse_activate_desc'] = 'Список пользователей, ожидающих активации.';
$txt['admin_browse_awaiting_approval'] = 'Ожидают одобрения (%1$d)';
$txt['admin_browse_awaiting_activate'] = 'Ожидают активации (%1$d)';

$txt['admin_browse_username'] = 'Имя пользователя';
$txt['admin_browse_email'] = 'Электронный адрес';
$txt['admin_browse_ip'] = 'IP-адрес';
$txt['admin_browse_registered'] = 'Зарегистрирован';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'С выделенными';
$txt['admin_browse_no_members_approval'] = 'Нет пользователей, ожидающих одобрения.';
$txt['admin_browse_no_members_activate'] = 'Нет пользователей, ожидающих активации.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'всех выделенных пользователей?';
$txt['admin_browse_outstanding_warn'] = 'всех пользователей, к которым применимо?';
$txt['admin_browse_w_approve'] = 'Подтвердить';
$txt['admin_browse_w_activate'] = 'Активировать';
$txt['admin_browse_w_delete'] = 'Удалить';
$txt['admin_browse_w_reject'] = 'Отклонить';
$txt['admin_browse_w_remind'] = 'Уведомить';
$txt['admin_browse_w_approve_deletion'] = 'Подтвердить (удаление учётной записи)';
$txt['admin_browse_w_email'] = 'и отправить электронное сообщение';
$txt['admin_browse_w_approve_require_activate'] = 'Одобрить и потребовать активацию';

$txt['admin_browse_filter_by'] = 'Фильтровать по';
$txt['admin_browse_filter_show'] = 'Отображение';
$txt['admin_browse_filter_type_0'] = 'Неактивированные учётные записи';
$txt['admin_browse_filter_type_2'] = 'Неактивированные изменения электронного адреса';
$txt['admin_browse_filter_type_3'] = 'Неодобренные новые учётные записи';
$txt['admin_browse_filter_type_4'] = 'Неодобренные запросы на удаление учётных записей';
$txt['admin_browse_filter_type_5'] = 'Неодобренные учётные записи, не подходящие под возрастной ценз';

$txt['admin_browse_outstanding'] = 'Неактивированные пользователи';
$txt['admin_browse_outstanding_days_1'] = 'Со всеми пользователями, зарегистрированными более';
$txt['admin_browse_outstanding_days_2'] = 'дней назад';
$txt['admin_browse_outstanding_perform'] = 'Выполнить следующие действия';
$txt['admin_browse_outstanding_go'] = 'Выполнить действие';

$txt['check_for_duplicate'] = 'Проверить на двойников';
$txt['dont_check_for_duplicate'] = 'Не проверять на двойников';
$txt['duplicates'] = 'Двойники';

$txt['not_activated'] = 'Не активированы';
?>