<?php
// Version: 1.4; ManagePermissions

$txt['permissions_title'] = 'Управление правами доступа пользователей';
$txt['permissions_modify'] = 'Изменить';
$txt['permissions_view'] = 'Просмотр';
$txt['permissions_allowed'] = 'Разрешить';
$txt['permissions_denied'] = 'Запретить';
$txt['permission_cannot_edit'] = '<strong>Обратите внимание:</strong> нельзя редактировать данный профиль прав доступа, поскольку это предопределенный профиль, включенный в состав программного обеспечения форума. Для изменения прав доступа в данном профиле необходимо создать дубликат данного профиля. Для выполнения данной задачи нажмите <a href="%1$s">здесь</a>.';

$txt['permissions_for_profile'] = 'Права доступа для профиля';
$txt['permissions_boards_desc'] = 'Ниже показан список прав доступа для каждого раздела форума. Можно изменить назначенные профиля прав доступа нажав на название раздела или выбрав &quot;изменить все&quot; вверху страницы. Для изменения профиля просто нажмите на название профиля.';
$txt['permissions_board_all'] = 'Изменить все';
$txt['permission_profile'] = 'Профиль прав доступа';
$txt['permission_profile_desc'] = '<a href="%1$s">Установить права доступа</a> на раздел.';
$txt['permission_profile_inherit'] = 'Наследуются от родительского раздела';

$txt['permissions_profile'] = 'Профиль';
$txt['permissions_profiles_desc'] = 'Профили прав доступа назначаются индивидуально для каждого раздела для упрощения управления настройками безопасности. В данном разделе можно создавать, редактировать и удалять профили прав доступа.';
$txt['permissions_profiles_change_for_board'] = 'Изменить профиль прав доступа для: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = 'По умолчанию';
$txt['permissions_profile_no_polls'] = 'Без голосований';
$txt['permissions_profile_reply_only'] = 'Только ответы';
$txt['permissions_profile_read_only'] = 'Только для чтения';

$txt['permissions_profile_rename'] = 'Переименовать';
$txt['permissions_profile_edit'] = 'Изменить профили';
$txt['permissions_profile_new'] = 'Новый профиль';
$txt['permissions_profile_new_create'] = 'Создать';
$txt['permissions_profile_name'] = 'Название профиля';
$txt['permissions_profile_used_by'] = 'Используется в';
$txt['permissions_profile_used_by_one'] = 'В одном разделе';
$txt['permissions_profile_used_by_many'] = '%1$d разделах';
$txt['permissions_profile_used_by_none'] = 'Не используется разделами';
$txt['permissions_profile_do_edit'] = 'Изменить';
$txt['permissions_profile_do_delete'] = 'Удалить';

$txt['permissionname_profile_signature'] = 'Редактирование подписи';
$txt['permissionhelp_profile_signature'] = 'Позволяет редактировать в профиле свою подпись.';
$txt['permissionname_profile_signature_own'] = 'Своя подпись';
$txt['permissionname_profile_signature_any'] = 'Любая подпись';
$txt['permissionname_profile_forum'] = 'Редактирование профиля';
$txt['permissionhelp_profile_forum'] = 'Позволяет редактировать свой профиль.';
$txt['permissionname_profile_forum_own'] = 'Свой профиль';
$txt['permissionname_profile_forum_any'] = 'Любой профиль';
$txt['permissionname_profile_other'] = 'Редактирование веб-сайта';
$txt['permissionhelp_profile_other'] = 'Разрешает пользователям редактировать поле «Веб-сайт» в профиле';
$txt['permissionname_profile_other_own'] = 'Свой профиль';
$txt['permissionname_profile_other_any'] = 'Любой профиль';
$txt['permissionname_profile_blurb'] = 'Редактирование подписи под аватаром';
$txt['permissionhelp_profile_blurb'] = 'Позволяет редактировать в профиле подпись под аватаром.';
$txt['permissionname_profile_blurb_own'] = 'Свой профиль';
$txt['permissionname_profile_blurb_any'] = 'Любой профиль';
$txt['permissions_profile_copy_from'] = 'Копировать права доступа из';

$txt['permissions_includes_inherited'] = 'Наследуемые группы';

$txt['permissions_all'] = 'все';
$txt['permissions_none'] = 'нет';
$txt['permissions_set_permissions'] = 'Установить';

$txt['permissions_advanced_options'] = 'Расширенные настройки';
$txt['permissions_with_selection'] = 'С выделенным';
$txt['permissions_apply_pre_defined'] = 'Применить предустановленный профиль прав доступа';
$txt['permissions_select_pre_defined'] = 'Выберите профиль';
$txt['permissions_copy_from_board'] = 'Копировать права доступа с этого раздела';
$txt['permissions_select_board'] = 'Выберите раздел';
$txt['permissions_like_group'] = 'Установить права доступа как у этой группы';
$txt['permissions_select_membergroup'] = 'Выбрать группу';
$txt['permissions_add'] = 'Разрешить';
$txt['permissions_remove'] = 'Сбросить права доступа';
$txt['permissions_deny'] = 'Запретить';
$txt['permissions_select_permission'] = 'Выберите права доступа';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Вы можете выбрать только одно действие при изменении прав доступа';
$txt['permissions_no_action'] = 'Действие не выбрано';
$txt['permissions_deny_dangerous'] = 'Вы собираетесь запретить одно или несколько действий.\\nЕщё раз всё проверьте, чтобы случайно не урезать кому-нибудь права.\\n\\nХотите продолжить?';
$txt['permissions_modify_group'] = 'Изменение прав пользователей';

$txt['permissions_general'] = 'Основные права';
$txt['permissions_board'] = 'Права для разделов с глобальными привилегиями';
$txt['permissions_board_desc'] = '<strong>Обратите внимание</strong>: изменение прав доступа для данного раздела затронет все разделы, которые используют профиль прав доступа &quot;По умолчанию&quot;. Остальных разделов эти изменения НЕ коснутся.';
$txt['permissions_commit'] = 'Сохранить';
$txt['permissions_on'] = 'в профиле';
$txt['permissions_local_for'] = 'Локальные права доступа для группы';
$txt['permissions_option_own'] = 'Свои';
$txt['permissions_option_any'] = 'Любые';
$txt['permissions_option_on'] = '+';
$txt['permissions_option_off'] = '-';
$txt['permissions_option_deny'] = 'Х';
$txt['permissions_option_desc'] = 'В качестве прав доступа можно установить \'Разрешить\' (+), \'Запретить\' (-), или <span style="color: red;">\'Отклонить\' (Х)</span>.<br><br>Помните, что если запретить права, любой пользователь &mdash; даже модератор или кто угодно, находящийся в этой группе, лишится этих прав.<br>Поэтому следует пользоваться запретом прав с осторожностью, только когда это <strong>действительно необходимо</strong>. Отклонение прав, с другой стороны, запрещает, если не разрешено другим правом.';

$txt['permissiongroup_general'] = 'Общие';
$txt['permissionname_view_stats'] = 'Просмотр статистики форума';
$txt['permissionhelp_view_stats'] = 'Статистика пользователей отображает общую информацию о форуме, такую как общее количество пользователей, количество оставленных сообщений, созданных тем&nbsp;и&nbsp;т.&nbsp;д.';
$txt['permissionname_view_mlist'] = 'Просмотр списков пользователей и групп';
$txt['permissionhelp_view_mlist'] = 'Список пользователей показывает всех пользователей, зарегистрированных на форуме. К списку может быть применена сортировка и поиск. Список пользователей доступен с главной страницы и со страницы со статистикой форума. Также, страницы групп пользователей являются мини списками пользователей входящих в них.';
$txt['permissionname_who_view'] = 'Просмотр списка "Сейчас на форуме"';
$txt['permissionhelp_who_view'] = 'В списке "Сейчас на форуме" отображаются пользователи, которые в данный момент находятся на форуме, а также их текущие действия или местоположение. Эти права доступа будут работать только если включить их в общих настройках форума. Чтобы просмотреть этот список, нажмите на ссылку <strong>Сейчас на форуме</strong>, на главной странице. Если запретить, пользователи смогут просматривать список, но не будут видеть, где находятся и что делают остальные пользователи.';
$txt['permissionname_search_posts'] = 'Поиск сообщений и тем';
$txt['permissionhelp_search_posts'] = 'Данные права позволяют пользователям использовать функцию поиска по форуму. Если разрешить эту функцию, на главной странице пользователи увидят кнопку ПОИСК.';

$txt['permissiongroup_pm'] = 'Личные сообщения';
$txt['permissionname_pm_read'] = 'Чтение личных сообщений';
$txt['permissionhelp_pm_read'] = 'Данные права доступа дают пользователям доступ в раздел личных сообщений. Без этих прав пользователи не смогут читать личные сообщения.';
$txt['permissionname_pm_send'] = 'Отправка личных сообщений';
$txt['permissionhelp_pm_send'] = 'Возможность отправки личных сообщений другим пользователям форума. Необходимы права для чтения личных сообщений.';

$txt['permissiongroup_calendar'] = 'Календарь';
$txt['permissionname_calendar_view'] = 'Просмотр календаря';
$txt['permissionhelp_calendar_view'] = 'Для каждого месяца года в календаре отображаются дни рождения, праздники или соответствующие события. Эти права доступа дают возможность просматривать календарь. При наличии данных прав пользователи увидят кнопку &laquo;Календарь&raquo; в главном меню форума. Не забудьте включить функцию календаря в настройках форума (Конфигурация => Основные настройки).';
$txt['permissionname_calendar_post'] = 'Создание событий в календаре';
$txt['permissionhelp_calendar_post'] = 'Событие это созданная тема, которая привязана к определенному дню календаря. Событие может быть создано, если пользователь имеет права создания новых тем на форуме.';
$txt['permissionname_calendar_edit'] = 'Редактирование событий в календаре';
$txt['permissionhelp_calendar_edit'] = 'Событие &mdash; это дата, связанная с определенной датой или диапазоном дат. Любое событие можно отредактировать, нажав на красную звездочку (*) рядом с ним. Для этого пользователь должен иметь право на редактирование первого сообщения в соответствующей теме.';
$txt['permissionname_calendar_edit_own'] = 'Собственные события';
$txt['permissionname_calendar_edit_any'] = 'Любые события';

$txt['permissiongroup_maintenance'] = 'Администрирование форума';
$txt['permissionname_admin_forum'] = 'Администрирование форума и базы данных';
$txt['permissionhelp_admin_forum'] = 'Это право позволяет пользователю:<ul><li>изменять настройки форума, базы данных и тем оформления </li><li>управлять пакетами модификаций</li><li> использовать функцию обслуживания форума</li><li> просматривать ошибки форума и журнал модераторских действий</li></ul> Используйте эти права доступа с осторожностью. Оно дает очень большие привилегии на форуме.';
$txt['permissionname_manage_boards'] = 'Управление разделами и категориями';
$txt['permissionhelp_manage_boards'] = 'Эти права доступа позволяют пользователям создавать, редактировать и удалять разделы и категории на форуме.';
$txt['permissionname_manage_attachments'] = 'Управление вложениями и аватарами';
$txt['permissionhelp_manage_attachments'] = 'Эти права доступа позволяют пользователям управлять вложениями и аватарами на форуме.';
$txt['permissionname_manage_smileys'] = 'Управление смайлами и иконками сообщений';
$txt['permissionhelp_manage_smileys'] = 'Эти права доступа позволяют пользователям управлять смайлами форума. Удалять, добавлять, редактировать смайлы и их наборы. Если разрешены дополнительные иконки сообщений, то добавлять и изменять их, тоже.';
$txt['permissionname_edit_news'] = 'Редактирование новостей';
$txt['permissionhelp_edit_news'] = 'Это право позволяет пользователям управлять новостями форума. Функция новостей должна быть включена в настройках форума.';
$txt['permissionname_access_mod_center'] = 'Доступ в центр модерации';
$txt['permissionhelp_access_mod_center'] = 'С данным правом доступа пользователи этой группы получат доступ в центр модерации, где будут иметь доступ ко всему функционалу. Обратите внимание данное право не даст привилегии модератора.';

$txt['permissiongroup_member_admin'] = 'Администрирование пользователей';
$txt['permissionname_moderate_forum'] = 'Управление пользователями форума';
$txt['permissionhelp_moderate_forum'] = 'Эти права доступа включают все важные функции модерирования, такие как:<ul class="normallist"><li>доступ к настройке регистрации</li><li>просмотр и удаление пользователей</li><li>просмотр информации пользователей, включающий проверку IP-адреса и (скрытый) онлайн статус</li><li>активацию учётных записей</li><li>получение уведомлений об одобрении учётной записи и возможность одобрить учётную запись</li><li>отправку личных сообщений пользователям, которые отказались от получения личных сообщений</li><li>некоторые другие функции</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Управление группами пользователей';
$txt['permissionhelp_manage_membergroups'] = 'Возможность редактировать группы пользователей, а также включать пользователей в эти группы.';
$txt['permissionname_manage_permissions'] = 'Управление правами доступа';
$txt['permissionhelp_manage_permissions'] = 'Это право позволяет пользователям менять права доступа у групп пользователей.';
$txt['permissionname_manage_bans'] = 'Редактирование списка банов';
$txt['permissionhelp_manage_bans'] = 'Это право позволяет пользователям редактировать список банов. Есть возможность очищать журнал попыток обращения забаненных пользователей к форуму.';
$txt['permissionname_send_mail'] = 'Отправка писем пользователям';
$txt['permissionhelp_send_mail'] = 'Это право позволяет делать массовую рассылку сообщений пользователям, либо некоторым группам пользователей. Можно отправлять электронные или личные сообщения.';
$txt['permissionname_issue_warning'] = 'Делать предупреждения пользователям';
$txt['permissionhelp_issue_warning'] = 'Это право позволяет делать предупреждения пользователям форума и изменять уровень предупреждения. Требуется включение системы предупреждений.';

$txt['permissiongroup_profile'] = 'Профили пользователей';
$txt['permissionname_profile_view'] = 'Просмотр профилей пользователей';
$txt['permissionhelp_profile_view'] = 'Это право позволяет просматривать профили зарегистрированных на форуме пользователей. Видеть общую информацию, некоторую статистику и сообщения пользователя.';
$txt['permissionname_profile_extra'] = 'Редактирование дополнительных настроек профиля';
$txt['permissionhelp_profile_extra'] = 'Дополнительные настройки учётной записи включают в себя настройку аватара, тем оформления, уведомлений и личных сообщений.';
$txt['permissionname_profile_extra_own'] = 'Собственный профиль';
$txt['permissionname_profile_extra_any'] = 'Любой профиль';
$txt['permissionname_profile_title'] = 'Установка надписи над аватаром';
$txt['permissionhelp_profile_title'] = 'Эта надпись отображается в каждой теме, над профилем каждого пользователя.';
$txt['permissionname_profile_title_own'] = 'Собственный профиль';
$txt['permissionname_profile_title_any'] = 'Любой профиль';
$txt['permissionname_profile_server_avatar'] = 'Использование аватаров форума';
$txt['permissionhelp_profile_server_avatar'] = 'Это право позволяет пользователям использовать аватары, установленные на форуме.';
$txt['permissionname_profile_upload_avatar'] = 'Загрузка аватаров на сервер';
$txt['permissionhelp_profile_upload_avatar'] = 'Это право позволяет пользователям загружать собственные аватары на сервер.';
$txt['permissionname_profile_remote_avatar'] = 'Установка удаленных аватаров';
$txt['permissionhelp_profile_remote_avatar'] = 'Это право позволит пользователям указывать ссылки на аватары, расположенные на другом сервере. В целях безопасности, не стоит разрешать использовать данную функцию непроверенным пользователям.';

$txt['permissiongroup_profile_account'] = 'Учётные записи';
$txt['permissionname_profile_identity'] = 'Изменение настроек учётной записи';
$txt['permissionhelp_profile_identity'] = 'Настройки учётной записи включают в себя основные настройки: изменение пароля, адреса электронной почты, языка&nbsp;и&nbsp;т.&nbsp;д.';
$txt['permissionname_profile_identity_own'] = 'Собственный профиль';
$txt['permissionname_profile_identity_any'] = 'Любой профиль';
$txt['permissionname_profile_displayed_name'] = 'Редактирование отображаемого имени';
$txt['permissionhelp_profile_displayed_name'] = 'Позволяет редактировать в профиле отображаемое имя.';
$txt['permissionname_profile_displayed_name_own'] = 'Собственный профиль';
$txt['permissionname_profile_displayed_name_any'] = 'Любой профиль';
$txt['permissionname_profile_password'] = 'Менять пароль';
$txt['permissionhelp_profile_password'] = 'Позволяет менять пароль или секретный вопрос.';
$txt['permissionname_profile_password_own'] = 'Собственный профиль';
$txt['permissionname_profile_password_any'] = 'Любой профиль';
$txt['permissionname_profile_remove'] = 'Удаление учётной записи';
$txt['permissionhelp_profile_remove'] = 'Это право позволяет пользователям удалять собственные учётные записи с форума.';
$txt['permissionname_profile_remove_own'] = 'Собственный профиль';
$txt['permissionname_profile_remove_any'] = 'Любой профиль';
$txt['permissionname_view_warning'] = 'Просмотр статуса предупреждений';
$txt['permissionname_view_warning_own'] = 'Собственный профиль';
$txt['permissionname_view_warning_any'] = 'Любой профиль';
$txt['permissionhelp_view_warning'] = 'Позволяет видеть статус предупреждений и его историю.';

$txt['permissionname_report_user'] = 'Отправлять жалобы на профили пользователей';
$txt['permissionhelp_report_user'] = 'Позволяет отправлять жалобы администраторам на содержимое профилей пользователей, чтобы уведомить о спаме и прочем неприемлемом содержимом.';

$txt['permissiongroup_general_board'] = 'Общие';
$txt['permissionname_moderate_board'] = 'Модерирование раздела';
$txt['permissionhelp_moderate_board'] = 'Это право добавляет некоторые небольшие функции модерирования в разделах. Например, ответ в закрытую тему, изменение времени окончания голосования и просмотр результатов голосования.';

$txt['permissiongroup_topic'] = 'Темы';
$txt['permissionname_post_new'] = 'Создание новых тем';
$txt['permissionhelp_post_new'] = 'Это право позволяет пользователям создавать новые темы. По умолчанию, оно не позволяет отвечать в темы. То есть если у пользователя нет прав отвечать в теме, он сможет только её создать.';
$txt['permissionname_merge_any'] = 'Объединение тем';
$txt['permissionhelp_merge_any'] = 'Это право позволяет пользователям объединять две темы в одну. Главной темой получится та, у которой первое сообщение создано раньше по времени.';
$txt['permissionname_split_any'] = 'Разделение тем';
$txt['permissionhelp_split_any'] = 'Это право позволяет пользователям разделять темы';
$txt['permissionname_make_sticky'] = 'Прикрепление тем';
$txt['permissionhelp_make_sticky'] = 'Это право позволяет пользователям прикреплять темы.';
$txt['permissionname_move'] = 'Перемещение тем';
$txt['permissionhelp_move'] = 'Это право позволяет перемещать тему из одного раздела в другой.';
$txt['permissionname_move_own'] = 'Собственная тема';
$txt['permissionname_move_any'] = 'Любая тема';
$txt['permissionname_lock'] = 'Закрытие тем';
$txt['permissionhelp_lock'] = 'Это право позволяет пользователям закрывать темы. После этого в них могут отписываться только модераторы или администратор.';
$txt['permissionname_lock_own'] = 'Собственная тема';
$txt['permissionname_lock_any'] = 'Любая тема';
$txt['permissionname_remove'] = 'Удаление тем';
$txt['permissionhelp_remove'] = 'Это право позволяет пользователям удалять темы.';
$txt['permissionname_remove_own'] = 'Собственная тема';
$txt['permissionname_remove_any'] = 'Любая тема';
$txt['permissionname_post_reply'] = 'Отправка сообщений в тему';
$txt['permissionhelp_post_reply'] = 'Это право позволяет пользователям отвечать в темы';
$txt['permissionname_post_reply_own'] = 'Собственная тема';
$txt['permissionname_post_reply_any'] = 'Любая тема';
$txt['permissionname_modify_replies'] = 'Редактирование любых ответов в собственной теме';
$txt['permissionhelp_modify_replies'] = 'Это право позволяет автору темы изменять ответы в собственной теме.';
$txt['permissionname_delete_replies'] = 'Удаление любых ответов в собственной теме';
$txt['permissionhelp_delete_replies'] = 'Это право позволяет автору темы удалять ответы в собственной теме.';
$txt['permissionname_announce_topic'] = 'Объявление пользователей о теме';
$txt['permissionhelp_announce_topic'] = 'Это право позволяет отправлять электронные уведомления о теме зарегистрированным пользователям или только выбранным группам пользователей.';

$txt['permissiongroup_post'] = 'Сообщения';
$txt['permissionname_delete'] = 'Удаление сообщений';
$txt['permissionhelp_delete'] = 'Это право позволяет пользователям удалять сообщение в темах, кроме самого первого сообщения.';
$txt['permissionname_delete_own'] = 'Собственное сообщение';
$txt['permissionname_delete_any'] = 'Любое сообщение';
$txt['permissionname_modify'] = 'Редактирование сообщений';
$txt['permissionhelp_modify'] = 'Редактирование сообщений';
$txt['permissionname_modify_own'] = 'Собственное сообщение';
$txt['permissionname_modify_any'] = 'Любое сообщение';
$txt['permissionname_report_any'] = 'Оповещение модераторов';
$txt['permissionhelp_report_any'] = 'Это право предоставляет в каждом ответе ссылку для оповещения модераторов. После оповещения все модераторы раздела получат электронное уведомление со ссылкой на тему и вашим комментарием.';

$txt['permissiongroup_likes'] = 'Лайки';
$txt['permissionname_likes_view'] = 'Просмотр лайков';
$txt['permissionhelp_likes_view'] = 'Позволяет видеть любые лайки. Без этого разрешения пользователь будет видеть только лайки, которые поставил он сам.';
$txt['permissionname_likes_like'] = 'Ставить лайки';
$txt['permissionhelp_likes_like'] = 'Позволяет пользователям ставить лайки сообщениям. Пользователи не могут ставить лайки собственным сообщениям.';

$txt['permissiongroup_mentions'] = 'Упоминания';
$txt['permissionname_mention'] = 'Упоминание других пользователей через @ник';
$txt['permissionhelp_mention'] = 'Позволяет упоминать других пользователей в своих сообщениях, используя @ник. Например, пользователя Jack можно упомянуть, используя @Jack, если вы обладаете правом на упоминания.';

$txt['permissiongroup_poll'] = 'Голосования';
$txt['permissionname_poll_view'] = 'Просмотр голосований';
$txt['permissionhelp_poll_view'] = 'Это право позволяет пользователям просматривать голосования. Без этого права они увидят одну тему (без голосования).';
$txt['permissionname_poll_vote'] = 'Возможность голосовать';
$txt['permissionhelp_poll_vote'] = 'Позволяет зарегистрированным пользователям участвовать в голосованиях.<br><br><strong>Примечание по гостям:</strong> PortaMx Forum использует куки для попытки предотвращения повторных голосований тем же гостем. Тем не менее, имейте в виду, что это не гарантирует, что один и тот же гость не сможет проголосовать несколько раз. Также голосование для гостей должно быть дополнительно разрешено при создании каждого голосования.';
$txt['permissionname_poll_post'] = 'Создание голосований';
$txt['permissionhelp_poll_post'] = 'Это право позволяет пользователю создавать голосования. Пользователь также должен иметь право на создание новых тем. ';
$txt['permissionname_poll_add'] = 'Добавление голосований в тему';
$txt['permissionhelp_poll_add'] = 'Это право позволяет добавлять голосование в тему, которая уже была создана. Это право требует права редактирования первого сообщения в теме.';
$txt['permissionname_poll_add_own'] = 'Собственная тема';
$txt['permissionname_poll_add_any'] = 'Любая тема';
$txt['permissionname_poll_edit'] = 'Редактирование голосований';
$txt['permissionhelp_poll_edit'] = 'Это право позволяет редактировать варианты ответов в голосовании и сбрасывать счетчик голосов. Для установки количества максимальных сообщений и время голосования пользователь должен иметь права на  \'Модерирование раздела\'.';
$txt['permissionname_poll_edit_own'] = 'Собственное голосование';
$txt['permissionname_poll_edit_any'] = 'Любое голосование';
$txt['permissionname_poll_lock'] = 'Закрытие голосований';
$txt['permissionhelp_poll_lock'] = 'Это право позволяет пользователям закрывать голосования.';
$txt['permissionname_poll_lock_own'] = 'Собственное голосование';
$txt['permissionname_poll_lock_any'] = 'Любое голосование';
$txt['permissionname_poll_remove'] = 'Удаление голосований';
$txt['permissionhelp_poll_remove'] = 'Это право позволяет пользователям удалять голосования.';
$txt['permissionname_poll_remove_own'] = 'Собственное голосование';
$txt['permissionname_poll_remove_any'] = 'Любое голосование';

$txt['permissionname_post_draft'] = 'Сохранение черновиков сообщений';
$txt['permissionhelp_post_draft'] = 'Позволяет сохранять черновики сообщений, чтобы дописать их позже.';
$txt['permissionname_pm_draft'] = 'Сохранение черновиков личных сообщений';
$txt['permissionhelp_pm_draft'] = 'Позволяет сохранять черновики личных сообщений, чтобы дописать их позже.';

$txt['permissiongroup_approval'] = 'Премодерация сообщений';
$txt['permissionname_approve_posts'] = 'Одобрение элементов, ожидающих проверки';
$txt['permissionhelp_approve_posts'] = 'Это право позволяет пользователю одобрять все элементы в разделе, требующие проверки.';
$txt['permissionname_post_unapproved_replies'] = 'Оставлять сообщения в неодобренных темах';
$txt['permissionhelp_post_unapproved_replies'] = 'Это право позволяет пользователям оставлять сообщения в темах. Ответы не будут отображаться, пока их не одобрит модератор.';
$txt['permissionname_post_unapproved_replies_own'] = 'Собственная тема';
$txt['permissionname_post_unapproved_replies_any'] = 'Любая тема';
$txt['permissionname_post_unapproved_topics'] = 'Создание тем, требующих одобрения';
$txt['permissionhelp_post_unapproved_topics'] = 'Это право позволяет пользователю создавать новые темы, требующие одобрения перед публикацией на форуме.';
$txt['permissionname_post_unapproved_attachments'] = 'Оставлять вложения, требующие одобрения';
$txt['permissionhelp_post_unapproved_attachments'] = 'Это право позволяет пользователю оставлять вложения в своих сообщения. Прикрепленные файлы будут требовать одобрения, перед тем как другие пользователи смогут их увидеть.';

$txt['permissiongroup_attachment'] = 'Вложения';
$txt['permissionname_view_attachments'] = 'Просмотр вложений';
$txt['permissionhelp_view_attachments'] = 'Вложения &mdash; это файлы, прикрепленные пользователями к своим сообщениям. Данную функцию можно включить и настроить в разделе <em>Вложения и аватары</em>. Поскольку вложения не доступны напрямую, их можно защитить от скачивания пользователями без соответствующих полномочий.';
$txt['permissionname_post_attachment'] = 'Отправка вложений';
$txt['permissionhelp_post_attachment'] = 'Вложения &mdash; это файлы, которые пользователь прикрепил к своему сообщению. Это право позволят прикреплять вложения к сообщению. В одном сообщении может быть несколько вложений.';

$txt['permissionname_download_attach_image'] = 'Скачивание прикреплённых изображений';
$txt['permissionhelp_download_attach_image'] = 'Обычно прикреплённые изображения нельзя скачивать, их можно лишь просматривать в полном размере. Включите эту опцию, чтобы разрешить пользователям и скачивание тоже. Изображение может быть защищено водяным знаком.';
$txt['permissionname_download_attach_file'] = 'Скачивание прикреплённых файлов';
$txt['permissionhelp_download_attach_file'] = 'Это разрешит пользователям скачку файлов, прикреплённых к сообщениям.';

$txt['permission_settings_title'] = 'Настройка прав доступа';
$txt['groups_manage_permissions'] = 'Группа пользователей, имеющая право изменять права доступа';
$txt['permission_settings_submit'] = 'Сохранить';
$txt['permission_settings_enable_deny'] = 'Включить использование запрещающих прав для групп';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Выключение этой функции сбросит все запрещающие права пользователей.';
$txt['permission_by_board_desc'] = 'Здесь можно установить какие права будет использовать раздел, глобальные или локальные. Использование локальных разрешений подразумевает, что для групп пользователей в этом разделе действуют свои определенные права, возможно отличающиеся от глобальных.';
$txt['permission_settings_desc'] = 'Здесь можно выбрать, кто имеет право изменять права в разделах.';
$txt['permission_settings_enable_postgroups'] = 'Включить использование прав для групп, основанных на количестве сообщений';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Выключение этой функции сбросит все выставленные права доступа для групп, основанных на количестве сообщений.';

$txt['permissions_post_moderation_desc'] = 'На этой странице можно выбрать, сообщения пользователей из каких групп должны премодерироваться  в соответствии с выбранным профилем разрешений и какие группы пользователей могут одобрять сообщения. Пользователи будут видеть свои сообщения до одобрения их модераторами и ответы модераторов на них.';
$txt['permissions_post_moderation_enable'] = 'Включить премодерацию сообщений';
$txt['permissions_post_moderation_deny_note'] = 'Обратите внимание, что хотя включены расширенные права доступа, нельзя применять «запрещающие» права на этой странице. Пожалуйста, отредактируйте нужные права напрямую.';
$txt['permissions_post_moderation_select'] = 'Выбрать профиль';
$txt['permissions_post_moderation_new_topics'] = 'Новые темы';
$txt['permissions_post_moderation_replies_own'] = 'Свои сообщения';
$txt['permissions_post_moderation_replies_any'] = 'Любые сообщения';
$txt['permissions_post_moderation_attachments'] = 'Вложения';
$txt['permissions_post_moderation_legend'] = 'История';
$txt['permissions_post_moderation_allow'] = 'Возможность создать';
$txt['permissions_post_moderation_moderate'] = 'Возможность создать, но требует одобрения';
$txt['permissions_post_moderation_disallow'] = 'Создать нельзя';
$txt['permissions_post_moderation_group'] = 'Группа';

$txt['auto_approve_topics'] = 'Создание новых тем, без запроса на одобрение';
$txt['auto_approve_replies'] = 'Создание сообщений, без запроса на одобрение';
$txt['auto_approve_attachments'] = 'Оставлять вложения, без запроса на одобрение';

?>