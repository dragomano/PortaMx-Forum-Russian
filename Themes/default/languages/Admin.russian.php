<?php
// Version: 1.4; Admin

global $settings, $scripturl;

$txt['settings_saved'] = 'Настройки успешно сохранены';
$txt['settings_not_saved'] = 'Ваши изменения не были сохранены по причине: %1$s';

$txt['admin_boards'] = 'Разделы и категории';
$txt['admin_users'] = 'Пользователи';
$txt['admin_newsletters'] = 'Рассылки';
$txt['admin_edit_news'] = 'Новости';
$txt['admin_groups'] = 'Группы пользователей';
$txt['admin_members'] = 'Управление пользователями';
$txt['admin_members_list'] = 'Ниже приведен список всех зарегистрированных пользователей форума.';
$txt['admin_next'] = 'Продолжить';
$txt['admin_censored_words'] = 'Нецензурные слова';
$txt['admin_censored_where'] = 'Напишите в левом поле нецензурное слово, а в правом &mdash; его замену.';
$txt['admin_censored_desc'] = 'В силу того, что форум является общественным, возможно, есть некоторые слова, которые хотелось бы запретить к использованию пользователями. Ниже можно указать эти слова.<br>Пустое поле справа удалит слово.';
$txt['admin_reserved_names'] = 'Зарезервированные имена';
$txt['admin_template_edit'] = 'Редактировать темы оформления вашего форума';
$txt['admin_modifications'] = 'Настройки модов';
$txt['admin_server'] = 'Сервер';
$txt['admin_server_settings'] = 'Настройки';
$txt['admin_reserved_set'] = 'Зарезервированные имена';
$txt['admin_reserved_line'] = 'Одно зарезервированное имя в строке.';
$txt['admin_basic_settings'] = 'На этой странице можно изменить основные настройки форума. Будьте очень осторожны, поскольку неправильные настройки могут привести форум в нерабочее состояние.';
$txt['admin_maintain'] = 'Поставить форум на техобслуживание';
$txt['admin_title'] = 'Название форума';
$txt['cookie_name'] = 'Имя куки';
$txt['admin_webmaster_email'] = 'Электронная почта веб-мастера';
$txt['cachedir'] = 'Директория для кэша';
$txt['admin_news'] = 'Отображать новости';
$txt['admin_guest_post'] = 'Разрешить гостям оставлять сообщения';
$txt['admin_manage_members'] = 'Пользователи';
$txt['admin_main'] = 'Начало';
$txt['admin_config'] = 'Конфигурация';
$txt['admin_version_check'] = 'Детальная проверка версии';
$txt['admin_pmxfile'] = 'Файлы PortaMx Forum';
$txt['admin_pmxpackage'] = 'Дистрибутив PortaMx Forum';
$txt['admin_logoff'] = 'Завершить сессию администратора';
$txt['admin_maintenance'] = 'Обслуживание';
$txt['admin_image_text'] = 'Показывать кнопки вместо текста';
$txt['admin_credits'] = 'Благодарности';
$txt['admin_agreement'] = 'Показывать и требовать принятия регистрационного соглашения';
$txt['admin_agreement_default'] = 'По умолчанию';
$txt['admin_agreement_select_language'] = 'Язык для редактирования';
$txt['admin_agreement_select_language_change'] = 'Изменить';
$txt['admin_agreement_not_saved'] = 'Не удалось сохранить регистрационное соглашение. Возможно, установлены неверные права доступа к файлу.';
$txt['admin_delete_members'] = 'Удалить выбранных пользователей';
$txt['admin_repair'] = 'Восстановить все разделы и темы';
$txt['admin_main_welcome'] = 'Это ваш &quot;%1$s&quot;. Здесь можно управлять настройками, обслуживать форум, просматривать различные журналы, устанавливать пакеты модификаций, изменять темы оформления и многое другое.<br><br>При возникновении проблем, пожалуйста, посетите страницу &quot;Поддержка и благодарности&quot;. Если эта информация не помогла, попробуйте обратиться со своей проблемой на <a href="https://www.portamx.com" target="_blank" rel="noopener" class="new_win">официальный форум поддержки</a>.<br>Кроме того, можно получить подсказку, нажав на значок <span class="generic_icons help" title="%3$s"></span> рядом с интересующей опцией.';
$txt['admin_news_desc'] = 'Пожалуйста, размещайте в каждой ячейке только одну новость. Некоторые ББ-теги &mdash; такие как <span title="Жирный">[b]</span>, <span title="Наклонный">[i]</span> и <span title="Подчеркнутый">[u]</span>, а также смайлы &mdash; разрешены в новостях.<br>Чтобы убрать новость, просто удалите текст в соответствующей ячейке и сохраните изменения.';
$txt['administrators'] = 'Администраторы форума';
$txt['admin_reserved_desc'] = 'Зарезервированные имена нельзя будет использовать при регистрации пользователей или же при выборе отображаемого имени. Выберите настройки, которые будете использовать, перед тем как принять изменения.';
$txt['admin_activation_email'] = 'Отправлять электронные сообщения с кодом активации новым пользователям после регистрации';
$txt['admin_match_whole'] = 'Полное совпадение слова.';
$txt['admin_match_case'] = 'C учетом регистра.';
$txt['admin_check_user'] = 'Проверять имя пользователя.';
$txt['admin_check_display'] = 'Проверять отображаемое имя.';
$txt['admin_newsletter_send'] = 'На этой странице можно отправить письмо любому пользователю. Адреса выбранных пользователей будут показаны ниже, но их можно добавлять или удалять по своему желанию. Убедитесь в том, что каждый адрес разделен, как это показано на примере: \'адрес1; адрес2\'.';
$txt['admin_fader_delay'] = 'Задержка между показами новостей в новостной ленте';
$txt['additional_options_collapsable'] = 'Разрешить сворачивание секции &quot;Вложения и другие параметры &quot; в редакторе сообщений';
$txt['zero_for_no_limit'] = '(0 &mdash; без ограничений)';
$txt['zero_to_disable'] = '(Задайте 0 для отключения.)';
$txt['dont_show_attach_under_post'] = 'Не выводить вложения под сообщением, если они уже вставлены в него.';
$txt['dont_show_attach_under_post_sub'] = 'Включите, если не хотите чтобы вложения выводились дважды. Вложения, вставленные в сообщения, по-прежнему подчиняются лимитам и продолжают обрабатываться как обычные вложения.';
$txt['admin_backup_fail'] = 'Невозможно создать резервную копию Settings.php &mdash; убедитесь, что файл Settings_bak.php существует и является записываемым.';
$txt['registration_agreement'] = 'Регистрационное соглашение';
$txt['registration_agreement_desc'] = 'Это соглашение показывается пользователям при регистрации на форуме и должно быть принято, прежде чем пользователи смогут продолжить регистрацию.';
$txt['errors_list'] = 'Просмотр ошибок форума';
$txt['errors_found'] = 'Обнаружены следующие ошибки';
$txt['errors_fix'] = 'Хотите исправить эти ошибки';
$txt['errors_do_recount'] = 'Все ошибки исправлены, был создан раздел для потерянных сообщений! Пожалуйста, нажмите на кнопку ниже, чтобы пересчитать некоторые ключевые данные статистики.';
$txt['errors_recount_now'] = 'Пересчитать статистику';
$txt['errors_fixing'] = 'Исправление ошибок форума';
$txt['errors_fixed'] = 'Все ошибки исправлены! Пожалуйста, проверьте любые созданные категории, форумы или темы.';
$txt['attachments_avatars'] = 'Вложения и аватары';
$txt['attachments_desc'] = 'Здесь можно администрировать вложенные файлы. Можно удалять вложения по размеру, по дате публикации. Статистика по вложениям предоставлена ниже.';
$txt['attachment_stats'] = 'Статистика вложенных файлов';
$txt['attachment_integrity_check'] = 'Проверка вложенных файлов';
$txt['attachment_integrity_check_desc'] = 'Эта функция проверяет целостность и размеры вложений, а также имена файлов, перечисленные в базе данных. При необходимости найденные ошибки исправляются.';
$txt['attachment_check_now'] = 'Запустить проверку';
$txt['attachment_pruning'] = 'Удаление вложений';
$txt['attachment_pruning_message'] = 'Текст будет добавлен в сообщение';
$txt['attachment_pruning_warning'] = 'Уверены в том, что хотите удалить эти вложения?\\nДействие не может быть отменено!';

$txt['attachment_total'] = 'Всего вложений';
$txt['attachmentdir_size'] = 'Общий размер папки вложений';
$txt['attachmentdir_size_current'] = 'Общий размер текущей папки вложений';
$txt['attachmentdir_files_current'] = 'Всего файлов в текущей папке вложений';
$txt['attachment_space'] = 'Всего доступного места в папке вложений';
$txt['attachment_files'] = 'Доступно ещё файлов';
$txt['attachment_not_asigned'] = '<strong>Нет назначенного сообщения</strong> - ';

$txt['attachment_options'] = 'Управление вложенными файлами';
$txt['attachment_log'] = 'Журнал вложений';
$txt['attachment_remove_old'] = 'Удалить вложения с датой создания, превышающей';
$txt['attachment_remove_size'] = 'Удалить вложения с размером более';
$txt['attachment_name'] = 'Имя файла';
$txt['attachment_file_size'] = 'Размер файла';
$txt['attachmentdir_size_not_set'] = 'Максимальный размер папки не установлен';
$txt['attachmentdir_files_not_set'] = 'Лимит на количество файлов в папке не установлен';
$txt['attachment_delete_admin'] = '[вложение удалено администратором]';
$txt['live'] = 'Новости с Simple Machines...';
$txt['remove_all'] = 'Удалить все';
$txt['approve_new_members'] = 'Администратор должен одобрить всех новых пользователей';
$txt['agreement_not_writable'] = 'Внимание &mdash; agreement.txt не доступен для записи, любые произведённые изменения НЕ будут сохранены.';

$txt['version_check_desc'] = 'Здесь показываются текущие версии установленных файлов, а напротив &mdash; их последние версии. Если любой из этих файлов устарел, необходимо обновить его до последней версии с <a href="https://www.portamx.com/" target="_blank" rel="noopener" class="new_win">portamx.com</a>.';
$txt['version_check_more'] = '(подробнее)';

$txt['lfyi'] = 'Невозможно соединиться с portamx.com для получения последних новостей.';

$txt['manage_calendar'] = 'Календарь';
$txt['manage_search'] = 'Поиск';

$txt['smileys_manage'] = 'Смайлы и иконки';
$txt['theme_admin'] = 'Темы оформления';
$txt['registration_center'] = 'Регистрация';

$txt['viewmembers_name'] = 'Имя пользователя (отображаемое)';
$txt['viewmembers_online'] = 'Последний визит';
$txt['viewmembers_today'] = 'Сегодня';
$txt['viewmembers_day_ago'] = 'день назад';
$txt['viewmembers_days_ago'] = 'дней назад';

$txt['display_name'] = 'Отображаемое имя';
$txt['email_address'] = 'E-mail';
$txt['ip_address'] = 'IP-адрес';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'неизвестно';
$txt['security_wrong'] = '<strong>Попытка войти под администратором!</strong>' . "\n" . 'Referer: %1$s' . "\n" . 'User agent: %2$s' . "\n" . 'IP: %3$s';

$txt['email_preview_warning'] = 'Предпросмотр точен не на 100%. Для сохранения разметки этой страницы обрабатываются только базовые теги HTML';
$txt['email_as_html'] = 'Отправлять в HTML-формате (возможность использовать теги HTML в электронных сообщениях)';
$txt['email_parsed_html'] = 'Добавить &lt;br /&gt; и &amp;nbsp теги в это сообщение.';
$txt['email_variables'] = 'В этом сообщении можно использовать некоторые "специальные" переменные. Нажмите <a href="' . $scripturl . '?action=helpadmin;help=email_members" onclick="return reqOverlayDiv(this.href);" class="help">здесь</a> для просмотра подробной информации.';
$txt['email_force'] = 'Отправить сообщение даже тем пользователям, которые отказались от получения новостей.';
$txt['email_as_pms'] = 'Отправить сообщение этим группам через систему ЛС.';
$txt['email_continue'] = 'Продолжить';
$txt['email_done'] = 'готово.';

$txt['warnings'] = 'Предупреждения';
$txt['warnings_desc'] = 'Эта система позволяет администраторам и модераторам выносить предупреждения пользователям и налагать автоматические ограничения на права пользователей при достижении заданных лимитов. Для использования всех возможностей этой системы, должна быть включена &quot;Премодерация&quot;.';

$txt['ban_title'] = 'Список банов';
$txt['ban_ip'] = 'Бан по IP: (пример 192.168.12.213 или 128.0.*.*) &mdash; одно значение на строку';
$txt['ban_email'] = 'Бан по e-mail: (пример badguy@somewhere.com) &mdash; одно значение на строку';
$txt['ban_username'] = 'Бан по имени пользователя: (пример l33tuser) &mdash; одно значение на строку';

$txt['ban_errors_detected'] = 'Произошла ошибка при создании или редактировании бана';
$txt['ban_description'] = 'Здесь можно блокировать пользователей по IP, имени хоста, имени пользователя или по адресу электронной почты.';
$txt['ban_add_new'] = 'Добавить бан';
$txt['ban_banned_entity'] = 'Забаненные объекты';
$txt['ban_on_ip'] = 'Бан по IP (пример 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Бан по имени хоста (пример *.mil)';
$txt['ban_on_email'] = 'Бан по e-mail (пример *@badsite.com)';
$txt['ban_on_username'] = 'Бан по имени пользователя';
$txt['ban_notes'] = 'Примечания';
$txt['ban_restriction'] = 'Тип бана';
$txt['ban_full_ban'] = 'Полный бан';
$txt['ban_partial_ban'] = 'Частичный бан';
$txt['ban_cannot_post'] = 'Нельзя оставлять сообщения';
$txt['ban_cannot_register'] = 'Нельзя регистрироваться';
$txt['ban_cannot_login'] = 'Нельзя входить';
$txt['ban_add'] = 'Добавить';
$txt['ban_edit_list'] = 'Список банов';
$txt['ban_type'] = 'Тип банов';
$txt['ban_days'] = 'день (дней)';
$txt['ban_will_expire_within'] = 'Бан истекает через';
$txt['ban_added'] = 'Добавлено';
$txt['ban_expires'] = 'Заканчивается';
$txt['ban_hits'] = 'Хитов';
$txt['ban_actions'] = 'Действия';
$txt['ban_expiration'] = 'Заканчивается';
$txt['ban_reason_desc'] = 'Описание бана, отображается заблокированному пользователю.';
$txt['ban_notes_desc'] = 'Примечание может помочь другим пользователям, имеющим доступ к управлению банами.';
$txt['ban_remove_selected'] = 'Удалить выбранное';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'Хотите удалить выделенные баны?';
$txt['ban_modify'] = 'Изменить';
$txt['ban_name'] = 'Имя';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Редактировать бан';
$txt['ban_add_notes'] = '<strong>Примечание</strong>: после создания бана в него можно добавить дополнительные параметры, такие как IP, имя хоста, адрес электронной почты.';
$txt['ban_expired'] = 'Срок истек/отменен';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Ограничение не выбрано.';

$txt['ban_triggers'] = 'Параметры';
$txt['ban_add_trigger'] = 'Условие активации бана';
$txt['ban_add_trigger_submit'] = 'Добавить';
$txt['ban_edit_trigger'] = 'Изменить';
$txt['ban_edit_trigger_title'] = 'Редактировать бан';
$txt['ban_edit_trigger_submit'] = 'Изменить';
$txt['ban_remove_selected_triggers'] = 'Удалить выделенные параметры банов';
$txt['ban_no_entries'] = 'В настоящее время нет ни одного действующего бана.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Хотите удалить выбранные баны?';
$txt['ban_trigger_browse'] = 'Параметры бана';
$txt['ban_trigger_browse_description'] = 'Здесь показаны все элементы бана, сгруппированные по IP, имени хоста, адресу электронной почты и по имени пользователя.';

$txt['ban_log'] = 'Журнал банов';
$txt['ban_log_description'] = 'В этих записях отображается, какие заблокированные пользователи входили на форум (\'полный бан\' и \'без возможности зарегистрироваться\').';
$txt['ban_log_no_entries'] = 'Записей не найдено.';
$txt['ban_log_ip'] = 'IP-адрес';
$txt['ban_log_email'] = 'E-mail';
$txt['ban_log_member'] = 'Пользователь';
$txt['ban_log_date'] = 'Дата';
$txt['ban_log_remove_all'] = 'Удалить все';
$txt['ban_log_remove_all_confirm'] = 'Хотите удалить все записи?';
$txt['ban_log_remove_selected'] = 'Удалить выделенные';
$txt['ban_log_remove_selected_confirm'] = 'Хотите удалить выделенные записи?';
$txt['ban_no_triggers'] = 'Нет параметров бана.';

$txt['settings_not_writable'] = 'Эти настройки не могут быть изменены, потому что Settings.php доступен только для чтения.';

$txt['maintain_title'] = 'Обслуживание форума';
$txt['maintain_info'] = 'Оптимизация таблиц в базе данных, создание резервных копий, проверка на ошибки и очистка форума.';
$txt['maintain_sub_database'] = 'База данных';
$txt['maintain_sub_routine'] = 'Ремонт';
$txt['maintain_sub_members'] = 'Пользователи';
$txt['maintain_sub_topics'] = 'Удаление и перенос тем';
$txt['maintain_done'] = 'Задача \'%1$s\' успешно выполнена.';
$txt['maintain_no_errors'] = 'Ошибок не найдено!';

$txt['maintain_tasks'] = 'Диспетчер задач';
$txt['maintain_tasks_desc'] = 'Управление всеми задачами PortaMx Forum.';

$txt['scheduled_log'] = 'Журнал диспетчера задач';
$txt['scheduled_log_desc'] = 'Этот список показывает все запланированные задачи, которые были выполнены.';
$txt['admin_log'] = 'Журнал администрирования';
$txt['admin_log_desc'] = 'Список административных действий, выполненных администраторами форума.';
$txt['moderation_log'] = 'Журнал модерации';
$txt['moderation_log_desc'] = 'Список модераторских действий, выполненных модераторами форума.';
$txt['spider_log_desc'] = 'Обзор записей, относящихся к деятельности пауков на данном форуме.';
$txt['log_settings_desc'] = 'Используйте эти опции для настройки системы журналов на форуме.';
$txt['modlog_enabled'] = 'Вести журнал действий модераторов';
$txt['adminlog_enabled'] = 'Вести журнал действий администраторов';
$txt['userlog_enabled'] = 'Вести журнал редактирования профилей';

$txt['mailqueue_title'] = 'Очередь сообщений';

$txt['db_error_send'] = 'Уведомлять об ошибках соединения с MySQL';
$txt['db_persist'] = 'Использовать постоянное соединение с MySQL';
$txt['ssi_db_user'] = 'Имя пользователя базы данных для SSI:';
$txt['ssi_db_passwd'] = 'Пароль базы данных для SSI:';

$txt['default_language'] = 'Язык форума по умолчанию:';
$txt['default_errloglang'] = 'Язык по умолчанию для записи ошибок';

$txt['maintenance_subject'] = 'Заголовок';
$txt['maintenance_message'] = 'Сообщение';

$txt['errlog_desc'] = 'Журнал ошибок содержит записи обо всех обнаруженных в работе форума ошибках.<br>
	Для удаления записи об ошибке выберите её и нажмите кнопку <strong>Удалить выбранное</strong> внизу страницы.<br>
	Для полного очищения журнала ошибок нажмите на кнопку <strong>Удалить все</strong>.';
$txt['errlog_no_entries'] = 'Записей не найдено.';

$txt['theme_settings'] = 'Свойства темы оформления';
$txt['theme_current_settings'] = 'Текущая тема оформления';
$txt['theme_settings_info'] = 'На данной странице изменяются настройки, относящиеся к используемой теме оформления: директория тем, URL-адрес, а также параметры, влияющие на макет темы.<br>Большинство тем будут иметь различные настраиваемые пользователем параметры, позволяющие адаптировать тему согласно личным предпочтениям владельца форума.';
$txt['theme_modify'] = 'Просмотр файлов используемой темы, изменение CSS или создание копии выбранной темы.';

$txt['dvc_your'] = 'Ваша версия';
$txt['dvc_current'] = 'Последняя версия';
$txt['dvc_sources'] = 'Исходные коды';
$txt['dvc_default'] = 'Стандартная тема оформления';
$txt['dvc_templates'] = 'Текущая версия темы оформления';
$txt['dvc_languages'] = 'Языковые файлы';
$txt['dvc_tasks'] = 'Периодические задачи';

$txt['smileys_default_set_for_theme'] = 'Выбрать смайлы по умолчанию для этой темы';
$txt['smileys_no_default'] = '(использовать смайлы по умолчанию)';

$txt['censor_test'] = 'Тестировать нецензурные слова';
$txt['censor_test_save'] = 'Тестировать';
$txt['censor_case'] = 'Не учитывать регистр букв';
$txt['censor_whole_words'] = 'Только слова целиком';

$txt['admin_confirm_password'] = '(повторите пароль)';
$txt['admin_incorrect_password'] = 'Некорректный пароль';

$txt['date_format'] = '<br>(ГГГГ-ММ-ДД)';
$txt['undefined_gender'] = 'не указан';
$txt['age'] = 'Возраст пользователя';
$txt['activation_status'] = 'Статус активации';
$txt['activated'] = 'Активирован';
$txt['not_activated'] = 'Не активирован';
$txt['is_banned'] = 'Забанен';

$txt['primary'] = 'Основная';
$txt['additional'] = 'Добавочная';
$txt['wild_cards_allowed'] = 'символы * и ? разрешены';
$txt['search_for'] = 'Поиск';
$txt['search_match'] = 'Соответсвует';
$txt['member_part_of_these_membergroups'] = 'Пользователь входит в группу';
$txt['membergroups'] = 'Группы пользователей';
$txt['confirm_delete_members'] = 'Хотите удалить выбранных пользователей?';

$txt['support_credits_title'] = 'Поддержка и благодарности';
$txt['support_title'] = 'Информационная поддержка';
$txt['support_versions_current'] = 'Последняя версия';
$txt['support_versions_forum'] = 'Версия форума';
$txt['support_versions_php'] = 'Версия PHP';
$txt['support_versions_db'] = 'Версия %1$s';
$txt['support_versions_db_engine'] = 'База данных %1$s ';
$txt['support_versions_server'] = 'Версия Web сервера';
$txt['support_versions_gd'] = 'Версия GD';
$txt['support_versions_imagemagick'] = 'Версия ImageMagick ';
$txt['support_versions'] = 'Информация о версиях';
$txt['support_resources'] = 'Средства поддержки';

$txt['membergroups_members'] = 'Обычные пользователи';
$txt['membergroups_guests'] = 'Гости';
$txt['membergroups_add_group'] = 'Добавить группу';
$txt['membergroups_permissions'] = 'Права доступа';

$txt['permitgroups_restrict'] = 'Ограниченный';
$txt['permitgroups_standard'] = 'Стандартный';
$txt['permitgroups_moderator'] = 'Модератор';
$txt['permitgroups_maintenance'] = 'Технический';
$txt['permitgroups_inherit'] = 'Наследовать';

$txt['confirm_delete_attachments_all'] = 'Хотите удалить все вложения?';
$txt['confirm_delete_attachments'] = 'Хотите удалить все выделенные вложения?';
$txt['attachment_manager_browse_files'] = 'Просмотр файлов';
$txt['attachment_manager_repair'] = 'Обслуживание';
$txt['attachment_manager_avatars'] = 'Аватары';
$txt['attachment_manager_attachments'] = 'Вложения';
$txt['attachment_manager_thumbs'] = 'Эскизы';
$txt['attachment_manager_last_active'] = 'Последняя активность';
$txt['attachment_manager_member'] = 'Пользователь';
$txt['attachment_manager_avatars_older'] = 'Удалить аватары пользователей, неактивных на протяжении более';
$txt['attachment_manager_total_avatars'] = 'Всего аватаров';

$txt['attachment_manager_avatars_no_entries'] = 'Аватар нет.';
$txt['attachment_manager_attachments_no_entries'] = 'Вложений нет.';
$txt['attachment_manager_thumbs_no_entries'] = 'Эскизов нет.';

$txt['attachment_manager_settings'] = 'Свойства вложений';
$txt['attachment_manager_avatar_settings'] = 'Свойства аватаров';
$txt['attachment_manager_browse'] = 'Просмотр файлов';
$txt['attachment_manager_maintenance'] = 'Обслуживание файлов';
$txt['attachment_manager_save'] = 'Сохранить';

$txt['attachmentEnable'] = 'Вложения';
$txt['attachmentEnable_deactivate'] = 'Запретить вложения';
$txt['attachmentEnable_enable_all'] = 'Разрешить все вложения';
$txt['attachmentEnable_disable_new'] = 'Запретить новые вложения';
$txt['attachmentCheckExtensions'] = 'Проверять расширения вложений';
$txt['attachmentExtensions'] = 'Доступные расширения вложений';
$txt['attachmentShowImages'] = 'Отображать миниатюры вложений под сообщением';
$txt['attachmentUploadDir'] = 'Папка вложений';
$txt['attachmentUploadDir_multiple_configure'] = 'Настройка нескольких папок вложений';
$txt['attachmentDirSizeLimit'] = 'Максимальный размер папки вложений';
$txt['attachmentPostLimit'] = 'Максимальный размер всех вложений в одном сообщении';
$txt['attachmentSizeLimit'] = 'Максимальный размер каждого вложения';
$txt['attachmentNumPerPostLimit'] = 'Максимальное количество вложений в сообщении';
$txt['attachment_img_enc_warning'] = 'Не установлено ни одной из поддерживаемых библиотек работы с графикой — GD, IMagick или MagickWand. Обработка изображений невозможна.';
$txt['attachment_postsize_warning'] = 'Установленный в php.ini размер \'post_max_size\' превышен.';
$txt['attachment_filesize_warning'] = 'Установленный в php.ini размер \'upload_max_filesize\' превышен.';
$txt['attachment_image_reencode'] = 'Обрабатывать потенциально опасные прикрепленные изображения';
$txt['attachment_image_reencode_note'] = '(требуется GD-модуль или ImageMagick с расширением IMagick или MagickWand)';
$txt['attachment_image_paranoid_warning'] = 'Данная функция может привести к большому количеству непринятых вложений!';
$txt['attachment_image_paranoid'] = 'Выполнять экстенсивную проверку загружаемых вложений';
$txt['attachmentThumbnails'] = 'Изменять размер изображения, при отображении под сообщением';
$txt['attachment_thumb_png'] = 'Сохранять миниатюры в формате PNG';
$txt['attachment_thumb_memory'] = 'Адаптивное использование памяти при создании миниатюр';
$txt['attachmentThumbWidth'] = 'Максимальная ширина эскиза';
$txt['attachmentThumbHeight'] = 'Максимальная высота эскиза';
$txt['attachment_thumbnail_settings'] = 'Настройки миниатюр';
$txt['attachment_security_settings'] = 'Настройки безопасности вложений';

$txt['attach_dir_does_not_exist'] = 'Не существует';
$txt['attach_dir_not_writable'] = 'Незаписываемая';
$txt['attach_dir_files_missing'] = 'Файлы потеряны (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Восстановить</a>)';
$txt['attach_dir_unused'] = 'Не используется';
$txt['attach_dir_empty'] = 'Пустая';
$txt['attach_dir_ok'] = 'ОК';
$txt['attach_dir_basedir'] = 'Базовая папка';
$txt['attach_dir_desc'] = 'Создавайте новые папки или изменяйте существующие в секции ниже. <br>Чтобы создать новую новую папку в корневой папке форума, просто введите её имя. <br>Чтобы удалить папку, сотрите путь в поле ввода. Только опустые папки могут быть удалены. Чтобы удостоверится, что папка пустая, проверьте указанное в скобках количество файлов или вложенных папок. <br> Чтобы переименовать папку, просто измените её имя в поле ввода. Только папки без вложенных папок могут быть переименованы.';
$txt['attach_dir_base_desc'] = 'Ниже, вы можете изменить базовую папку или создать новую. Новые базовые директории будут добавлены в список папок вложений. Так же, вы можете назначить существующую папку базовой.';
$txt['attach_dir_save_problem'] = 'Похоже, здесь есть проблема.';
$txt['attachments_no_create'] = 'Невозможно создать новую папку вложений. Сделайте это, используя фтп или файл менеджер панели хостинга.';
$txt['attachments_no_write'] = 'Эта папка создана, но недоступна для записи.  Сделайте это, используя фтп или файл менеджер панели хостинга.';
$txt['attach_dir_duplicate_msg'] = 'Невозможно добавить. Такая папка уже существует.';
$txt['attach_dir_exists_msg'] = 'Невозможно перенести. Уже существует папка по этому пути.';
$txt['attach_dir_base_dupe_msg'] = 'Невозможно добавить. Такая базовая папка уже создана.';
$txt['attach_dir_base_no_create'] = 'Невозможно создать. Проверьте, правильно ли указан путь. Или создайте папку используя фтп или файл менеджер панели хостинга.';
$txt['attach_dir_no_rename'] = 'Невозможно перенести или переименовать. Проверьте, что путь указан правильно и папка не содержит вложенных папок.';
$txt['attach_dir_no_delete'] = 'Не может быть удалена, так как не пустая. Сделайте это, используя фтп или файл менеджер панели хостинга.';
$txt['attach_dir_no_remove'] = 'Не может быть удалена, так как содержит файлы или выбрана как базовая.';
$txt['attach_dir_is_current'] = 'Невозможно перенести папку, пока она выбрана как текущая.';
$txt['attach_dir_is_current_bd'] = 'Невозможно перенести папку, пока она выбрана как текущая базовая.';
$txt['attach_dir_invalid'] = 'Неверная папка';
$txt['attach_last_dir'] = 'Последня активная папка вложений';
$txt['attach_current_dir'] = 'Текущая папка';
$txt['attach_current'] = 'Текущая';
$txt['attach_path_manage'] = 'Управление путями папок вложений';
$txt['attach_directories'] = 'Папки вложений';
$txt['attach_paths'] = 'Путь папки вложений';
$txt['attach_path'] = 'Путь';
$txt['attach_current_size'] = 'Текущий размер (КБ)';
$txt['attach_num_files'] = 'Файлов';
$txt['attach_dir_status'] = 'Статус';
$txt['attach_add_path'] = 'Добавить путь';
$txt['attach_path_current_bad'] = 'Текущий путь папки вложений не существует.';
$txt['attachmentDirFileLimit'] = 'Максимальное количество файлов в каждой папке';

$txt['attach_base_paths'] = 'Путь к базовой директории';
$txt['attach_num_dirs'] = 'Папки';
$txt['max_image_width'] = 'Максимальная ширина вложенных или вставленных изображений';
$txt['max_image_height'] = 'Максимальная ширина вложенных или вставленных изображений';

$txt['automanage_attachments'] = 'Выберите метод управления папками вложений';
$txt['attachments_normal'] = '(Ручной) Стандартный вариант PortaMx Forum';
$txt['attachments_auto_years'] = '(Авто) Вложенные папки по годам';
$txt['attachments_auto_months'] = '(Авто) Вложенные папки по годам и месяцам';
$txt['attachments_auto_days'] = '(Авто) Вложенные папки по годам, месяцам и дням';
$txt['attachments_auto_16'] = '(Авто) 16 папок со случайными названиями';
$txt['attachments_auto_16x16'] = '(Авто) 16 папок со случайными названиями с 16 вложенными папками';
$txt['attachments_auto_space'] = '(Авто) Только когда достигается лимит на свободное место в текущей папке.';

$txt['use_subdirectories_for_attachments'] = 'Создавать новые папки внутри базовой';
$txt['use_subdirectories_for_attachments_note'] = 'Иначе, новые папки будут создаваться в корневой папке форума.';
$txt['basedirectory_for_attachments'] = 'Установить базовую папку для вложений';
$txt['basedirectory_for_attachments_current'] = 'Текущая базовая папка';
$txt['basedirectory_for_attachments_warning'] = '<div class="smalltext">Эта папка указана неверно. <br>(<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Попробовать исправить</a>)</div>';
$txt['attach_current_dir_warning'] = '<div class="smalltext">Похоже, что есть проблема с этой папкой. <br>(<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Поробовать исправить</a>)</div>';

$txt['attachment_transfer'] = 'Перенос вложений';
$txt['attachment_transfer_desc'] = 'Перенос файлов между папками.';
$txt['attachment_transfer_select'] = 'Выберите папку';
$txt['attachment_transfer_now'] = 'Перенести';
$txt['attachment_transfer_from'] = 'Перенести файлы из';
$txt['attachment_transfer_auto'] = 'автоматически, в зависимости от размера и количества файлов';
$txt['attachment_transfer_auto_select'] = 'Выберите базовую папку';
$txt['attachment_transfer_to'] = 'или в указанную папку';
$txt['attachment_transfer_empty'] = 'Очистить исходную папку';
$txt['attachment_transfer_no_base'] = 'Нет доступных базовых папок.';
$txt['attachment_transfer_forum_root'] = 'Корневая папка форума.';
$txt['attachment_transfer_no_room'] = 'Достигнут лимит на размер или количество файлов.';
$txt['attachment_transfer_no_find'] = 'Не выбраны файлы для переноса.';
$txt['attachments_transferred'] = '%1$d файлов было перенесено в %2$s';
$txt['attachments_not_transferred'] = '%1$d файлов не перенсено.';
$txt['attachment_transfer_no_dir'] = 'Не выбрана исходная или папка назначения.';
$txt['attachment_transfer_same_dir'] = 'Нельзя выбрать одну и ту же папку как исходную и папку назначения.';
$txt['attachment_transfer_progress'] = 'Подождите. Идет перенос.';

$txt['mods_cat_avatars'] = 'Аватары';
$txt['avatar_directory'] = 'Папка аватаров (локальный путь)';
$txt['avatar_directory_wrong'] = 'Папка аватаров указана неверно. Это может вызвать проблемы.';
$txt['avatar_url'] = 'URL-адрес папки аватаров';
$txt['avatar_max_width_external'] = 'Максимальная ширина внешнего аватара';
$txt['avatar_max_height_external'] = 'Максимальная высота внешнего аватара';
$txt['avatar_action_too_large'] = 'Если аватар слишком большой...';
$txt['option_refuse'] = 'Запретить отображение';
$txt['option_css_resize'] = 'Изменить размер средствами браузеров';
$txt['option_download_and_resize'] = 'Загрузить и изменить размер';
$txt['avatar_max_width_upload'] = 'Максимальная ширина загруженного аватара';
$txt['avatar_max_height_upload'] = 'Максимальная высота загруженного аватара';
$txt['avatar_resize_upload'] = 'Изменять размеры больших аватаров';
$txt['avatar_resize_upload_note'] = '(требуется GD-модуль или ImageMagick с расширением IMagick или MagickWand)';
$txt['avatar_download_png'] = 'Использовать формат PNG для аватара с измененными размерами';
$txt['avatar_img_enc_warning'] = 'Не установлено ни одной из поддерживаемых библиотек работы с графикой — GD, IMagick или MagickWand.. Некоторые возможности работы с аватарами отключены.';
$txt['avatar_external'] = 'Внешние аватары';
$txt['avatar_upload'] = 'Загружаемые аватары';
$txt['avatar_server_stored'] = 'Аватары, расположенные на сервере';
$txt['avatar_server_stored_groups'] = 'Группы пользователей, которым разрешено устанавливать аватары с сервера';
$txt['avatar_upload_groups'] = 'Группы пользователей, которым разрешено закачивать аватары на сервер';
$txt['avatar_external_url_groups'] = 'Группы пользователей, которым разрешено загружать аватары с внешнего URL-адреса';
$txt['avatar_select_permission'] = 'Выбор групп';
$txt['avatar_download_external'] = 'Загрузка аватаров с внешних источников (URL)';
$txt['option_attachment_dir'] = 'Папку вложений';
$txt['option_specified_dir'] = 'Другую папку';
$txt['custom_avatar_dir_wrong'] = 'Папка вложений указана неверно. Вложения не будут работать.';
$txt['custom_avatar_dir'] = 'Папка загрузки';
$txt['custom_avatar_dir_desc'] = 'Не должна совпадать с папкой на сервере.';
$txt['custom_avatar_url'] = 'URL-адрес загрузки';
$txt['custom_avatar_check_empty'] = 'Выбранная директория для аватаров, возможно, пуста или задана неверно. Пожалуйста, проверьте правильность указанных данных.';
$txt['avatar_reencode'] = 'Обрабатывать потенциально опасные аватары';
$txt['avatar_reencode_note'] = '(требуется GD-модуль или ImageMagick с расширением IMagick или MagickWand)';
$txt['avatar_paranoid_warning'] = 'Данная функция может привести к большому количеству непринятых аватаров!';
$txt['avatar_paranoid'] = 'Выполнять экстенсивную проверку загружаемых аватаров';
$txt['gravatar_settings'] = 'Граватары (глобальные аватары)';
$txt['gravatarEnabled'] = 'Включить граватары для пользователей?';
$txt['gravatarOverride'] = 'Принудительно использовать граватары вместо стандартных аватаров?';
$txt['gravatarAllowExtraEmail'] = 'Разрешить использование дополнительного адреса электронной почты для граватара?';
$txt['gravatarMaxRating'] = 'Допустимый рейтинг изображений?';
$txt['gravatar_maxG'] = 'G (Для любого использования)';
$txt['gravatar_maxPG'] = 'PG (Под родительским присмотром)';
$txt['gravatar_maxR'] = 'R (Ограниченное использование)';
$txt['gravatar_maxX'] = 'X (Откровенные)';
$txt['gravatarDefault'] = 'Выберите стиль по умолчанию, когда с адресом электронной почты не связан ни один граватар ';
$txt['gravatar_mm'] = 'Загадочный человек &mdash; абстрактный силуэт одинаковый для всех';
$txt['gravatar_identicon'] = 'Геометрические рисунки';
$txt['gravatar_monsterid'] = 'Сгенерированные монстры с разными лицами, цветом и другими свойствами';
$txt['gravatar_wavatar'] = 'Сгенерированные рисованные лица с разными чертами';
$txt['gravatar_retro'] = 'Сгенерированные пикселизованные лица в стиле 8-битных аркад';
$txt['gravatar_blank'] = 'Прозрачный PNG';

$txt['repair_attachments'] = 'Обслуживание вложений';
$txt['repair_attachments_complete'] = 'Обслуживание закончено';
$txt['repair_attachments_complete_desc'] = 'Все выделенные ошибки были исправлены';
$txt['repair_attachments_no_errors'] = 'Ошибок не найдено!';
$txt['repair_attachments_error_desc'] = 'В ходе обслуживания были найдены ошибки. Выделите те из них, которые хотите исправить, и нажмите "Продолжить".';
$txt['repair_attachments_continue'] = 'Продолжить';
$txt['repair_attachments_cancel'] = 'Отмена';
$txt['attach_repair_missing_thumbnail_parent'] = 'Эскизов, не ассоциированных со своими полноразмерными изображениями: %1$d';
$txt['attach_repair_parent_missing_thumbnail'] = 'Изображений, не имеющих эскизов (хотя указано обратное): %1$d';
$txt['attach_repair_file_missing_on_disk'] = 'Вложений/аватаров, имеющих ассоциативные ссылки, но отсутствующих на сервере: %1$d';
$txt['attach_repair_file_wrong_size'] = 'Вложений/аватаров с неправильным размером: %1$d';
$txt['attach_repair_file_size_of_zero'] = 'Вложений/аватаров с нулевым размером: %1$d (подлежат удалению)';
$txt['attach_repair_attachment_no_msg'] = 'Вложений, не ассоциированных с сообщением: %1$d';
$txt['attach_repair_avatar_no_member'] = 'Аватаров, не ассоциированных с пользователем: %1$d';
$txt['attach_repair_wrong_folder'] = 'Вложений в несуществующей папке: %1$d';
$txt['attach_repair_files_without_attachment'] = '%1$d файлов не имеют записей в базе данных. (Они будут удалены)';

$txt['news_title'] = 'Новости и рассылка';
$txt['news_settings_desc'] = 'Здесь можно изменить настройки и права доступа для новостей и рассылок.';
$txt['news_settings_submit'] = 'Сохранить';
$txt['news_mailing_desc'] = 'Здесь можно отправлять сообщения всем зарегистрированным пользователям. Можно настроить список рассылки или отправить сообщение всем. Полезно для рассылки важной информации и новостей.';
$txt['news_error_no_news'] = 'Ничего не добавлено';
$txt['groups_edit_news'] = 'Группы, которым разрешено редактировать новости';
$txt['groups_send_mail'] = 'Группы, которым разрешено рассылать новостные сообщения с форума';
$txt['xmlnews_enable'] = 'Разрешить XML/RSS новости';
$txt['xmlnews_maxlen'] = 'Максимальная длина сообщения:<div class="smalltext">(0 &mdash; без ограничений, но это плохая идея)</div>';
$txt['xmlnews_maxlen_note'] = '(0 &mdash; отключить ограничения, но это плохая идея.)';
$txt['editnews_clickadd'] = 'Нажмите сюда для добавления другого пункта.';
$txt['editnews_remove_selected'] = 'Удалить выделенные';
$txt['editnews_remove_confirm'] = 'Хотите удалить выделенные новости?';
$txt['censor_clickadd'] = 'Нажмите сюда для добавления другого слова.';

$txt['layout_controls'] = 'Форум';
$txt['logs'] = 'Журналы';
$txt['generate_reports'] = 'Генератор отчётов';

$txt['update_available'] = 'Доступно обновление!';
$txt['update_message'] = 'Вы используете устаревшую версию PortaMx Forum, содержащую некоторые ошибки, которые уже исправлены в новой версии.
Рекомендуем <a href="#" id="update-link">обновить форум</a> до последней версии. Это займет всего несколько минут!';

$txt['manageposts'] = 'Сообщения и темы';
$txt['manageposts_title'] = 'Управление сообщениями и темами';
$txt['manageposts_description'] = 'Здесь можно управлять всеми настройками, связанными с темами и сообщениями.';

$txt['manageposts_seconds'] = 'секунд';
$txt['manageposts_minutes'] = 'минут';
$txt['manageposts_characters'] = 'знаков';
$txt['manageposts_days'] = 'дней';
$txt['manageposts_posts'] = 'сообщений';
$txt['manageposts_topics'] = 'тем';

$txt['manageposts_settings'] = 'Настройки сообщений';
$txt['manageposts_settings_description'] = 'Здесь можно настроить всё, что связано с сообщениями и их отправкой.';
$txt['manageposts_settings_submit'] = 'Сохранить';

$txt['manageposts_bbc_settings'] = 'ББ-теги';
$txt['manageposts_bbc_settings_description'] = 'ББ-код может использоваться для оформления сообщений. Пример жирного выделения слова \'лошадь\': можно написать так: [b]лошадь[/b]. Все ББ-теги обрамлены квадратными скобками (\'[\' и \']\').';
$txt['manageposts_bbc_settings_title'] = 'Настройка ББ кода';
$txt['manageposts_bbc_settings_submit'] = 'Сохранить';

$txt['manageposts_topic_settings'] = 'Настройки тем';
$txt['manageposts_topic_settings_description'] = 'Здесь можно установить все настройки, касающиеся тем.';
$txt['manageposts_topic_settings_submit'] = 'Сохранить';

$txt['managedrafts_settings'] = 'Настройки черновиков';
$txt['managedrafts_settings_description'] = 'Здесь можно установить все настройки, касающиеся черновиков.';
$txt['managedrafts_submit'] = 'Сохранить';
$txt['manage_drafts'] = 'Черновики';

$txt['removeNestedQuotes'] = 'Удалять вложенные цитаты при отправке сообщения';
$txt['enableEmbeddedFlash'] = 'Разрешить Flash в сообщениях';
$txt['enableEmbeddedFlash_warning'] = 'Может возникнуть угроза безопасности!';
$txt['enableSpellChecking'] = 'Разрешить проверку орфографии';
$txt['enableSpellChecking_warning'] = 'работает не на всех серверах!';
$txt['disable_wysiwyg'] = 'Запретить редактор WYSIWYG';
$txt['max_messageLength'] = 'Максимальный размер сообщения';
$txt['max_messageLength_zero'] = '0 &mdash; без ограничений';
$txt['convert_to_mediumtext'] = 'Ваша база данных не позволяет хранить сообщения размером более 65535 символов. Используйте раздел <a href="%1$s">База данных</a> в обслуживании форума для конвертирования в MEDIUMTEXT и после этого, увеличивайте максимальный размер сообщений.';
$txt['topicSummaryPosts'] = 'Количество отображаемых сообщений под полной формой ответа';
$txt['spamWaitTime'] = 'Время между отправкой сообщений с одного IP';
$txt['edit_wait_time'] = 'Время редактирования сообщения';
$txt['edit_disable_time'] = 'Время, в течение которого разрешено редактировать сообщение';
$txt['preview_characters'] = 'Максимальный размер превью первого/последнего сообщения';
$txt['preview_characters_units'] = 'символов';
$txt['message_index_preview_first'] = 'При использовании превью сообщений, показывать текст первого сообщения';
$txt['message_index_preview_first_desc'] = 'Оставьте выключенным, если хотите показывать текст последнего сообщения';
$txt['show_user_images'] = 'Показывать аватары пользователей в сообщениях';
$txt['show_blurb'] = 'Показывать надписи под аватаром в сообщениях';
$txt['hide_post_group'] = 'Скрывать в сообщениях названия групп основанных на количестве сообщений';
$txt['hide_post_group_desc'] = 'При включении, названия групп основанных на количестве сообщений не будут показываться в сообщениях, если пользователь входит в какие-то другие группы.';
$txt['subject_toggle'] = 'Показывать темы сообщений.';
$txt['show_profile_buttons'] = 'Показывать кнопку перехода в профиль пользователя под сообщенями';
$txt['show_modify'] = 'Показывать дату последнего редактирования сообщения';

$txt['enableBBC'] = 'Разрешить ББ-теги';
$txt['enablePostHTML'] = 'Разрешить <em>основной</em> HTML в сообщениях';
$txt['autoLinkUrls'] = 'Автоматически вставлять ссылки URL';
$txt['disabledBBC'] = 'Разрешенные ББ-теги';
$txt['bbcTagsToUse'] = 'Разрешить ББ-теги';
$txt['bbcTagsToUse_select'] = 'Выберите теги, которые можно использовать';
$txt['bbcTagsToUse_select_all'] = 'Выбрать все теги';

$txt['enableParticipation'] = 'Показывать специальные иконки напротив тем с сообщениями пользователя';
$txt['avatars_on_boardIndex'] = 'Показывать маленькие аватары на индексных страницах разделов и тем';

$txt['oldTopicDays'] = 'Время, после которого тема считается устаревшей';
$txt['defaultMaxTopics'] = 'Количество тем на странице';
$txt['defaultMaxMessages'] = 'Количество сообщений на странице темы';
$txt['disable_print_topic'] = 'Запретить просмотр печатной версии страниц';
$txt['enableAllMessages'] = 'Максимальный размер темы для отображения &quot;всех&quot; сообщений';
$txt['enableAllMessages_zero'] = '0 никогда не показывать &quot;Все&quot;';
$txt['disableCustomPerPage'] = 'Запретить индивидуальную настройку кол-ва тем/сообщений на странице';
$txt['enablePreviousNext'] = 'Показывать ссылки &laquo;предыдущая тема/следующая тема&raquo;';

$txt['not_done_title'] = 'Не готово!';
$txt['not_done_reason'] = 'Чтобы избежать перегрузки сервера, процесс временно приостановлен. Он автоматически продолжится через несколько секунд. Если это не произошло, нажмите на кнопку &quot;Продолжить&quot; ниже.';
$txt['not_done_continue'] = 'Продолжить';

$txt['general_settings'] = 'Общие';
$txt['database_settings'] = 'База данных';
$txt['cookies_sessions_settings'] = 'Куки-файлы и сессии';
$txt['security_settings'] = 'Безопасность';
$txt['caching_settings'] = 'Кэширование';
$txt['load_balancing_settings'] = 'Балансировка нагрузки';
$txt['sef_settings'] = 'Настройки ЧПУ';
$txt['sef_settings_description'] = 'В этом разделе редактируются настройки дружелюбных URL-адресов (ЧПУ).<br>
	ЧПУ-движок конвертирует все запросы вида ?action=search, ?topic=1.0, ?board=1 в названия областей, тем и разделов.<br>
	Запрос <strong>/index.php?topic=2.5</strong> преобразуется в <strong>/board-name/first-topic-subject/5/</strong>, а запрос <strong>/index.php?action=search</strong> — в <strong>/search/</strong><br>
	Дубликаты названий обнаруживаются автоматически, поэтому если у вас есть тема с заголовком "Search", она преобразуется в "search#", где знак # — число (от 1 до n).';

$txt['phpinfo_settings'] = 'PHP Info';
$txt['phpinfo_localsettings'] = 'Текущие настройки';
$txt['phpinfo_defaultsettings'] = 'Настройки по умолчанию';
$txt['phpinfo_itemsettings'] = 'Настройки';

$txt['language_configuration'] = 'Настройка языков';
$txt['language_description'] = 'В этом разделе можно редактировать установленные языки и устанавливать новые, скачанные с сайта разработчиков.';
$txt['language_edit'] = 'Изменить язык';
$txt['language_add'] = 'Добавить язык';
$txt['language_settings'] = 'Настройки';
$txt['could_not_language_backup'] = 'Не удалось сделать резервную копию перед удалением языкового пакета. Никакие изменения не были произведены (измените права доступа к файлам, чтобы разрешить запись в Packages/backup или отключите создание резервных копий - не рекомендуется)';

$txt['advanced'] = 'Расширенный';
$txt['simple'] = 'Простой';

$txt['admin_news_newsletter_queue_done'] = 'Рассылка добавлена в очередь.';
$txt['admin_news_select_recipients'] = 'Пожалуйста, выберите получателей новостей';
$txt['admin_news_select_group'] = 'Группы пользователей';
$txt['admin_news_select_group_desc'] = 'Пожалуйста, отметьте группы пользователей, которые должны получить новости.';
$txt['admin_news_select_members'] = 'Пользователи';
$txt['admin_news_select_members_desc'] = 'Дополнительные пользователи, которым будут отправлены новости.';
$txt['admin_news_select_excluded_members'] = 'За исключением пользователей';
$txt['admin_news_select_excluded_members_desc'] = 'Пользователи, которые не должны получать новости.';
$txt['admin_news_select_excluded_groups'] = 'За исключением групп';
$txt['admin_news_select_excluded_groups_desc'] = 'Выберите группы пользователей, которые не должны получать новости.';
$txt['admin_news_select_email'] = 'Электронные адреса';
$txt['admin_news_select_email_desc'] = 'Список электронных адресов, разделенных точкой с запятой, на которые будут отправляться уведомления (например address1@email.tld; address2@email.tld). Это дополнение к группам, указанным ниже.';
$txt['admin_news_select_override_notify'] = 'Отправить сообщение всем пользователям, без исключения';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'Вы не можете отправлять личные сообщения на адреса электронной почты. Если продолжите, все введенные адреса будут проигнорированы.\\n\\nХотите сделать это?';

$txt['mailqueue_browse'] = 'Обзор очереди';
$txt['mailqueue_settings'] = 'Настройки почты';

$txt['admin_search'] = 'Быстрый поиск';
$txt['admin_search_type_internal'] = 'Задача/Настройка';
$txt['admin_search_type_member'] = 'Пользователь';
$txt['admin_search_type_online'] = 'Документация онлайн';
$txt['admin_search_go'] = 'Искать';
$txt['admin_search_results'] = 'Результаты поиска';
$txt['admin_search_results_desc'] = 'Результаты для поиска: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Искать снова';
$txt['admin_search_results_none'] = 'Результатов не найдено!';

$txt['admin_search_section_sections'] = 'Секция';
$txt['admin_search_section_settings'] = 'Настройки';

$txt['mods_cat_features'] = 'Общие настройки';
$txt['antispam_title'] = 'Антиспам';
$txt['mods_cat_modifications_misc'] = 'Настройки модификаций';
$txt['mods_cat_layout'] = 'Отображение';
$txt['moderation_settings_short'] = 'Предупреждения';
$txt['signature_settings_short'] = 'Подписи';
$txt['custom_profile_shorttitle'] = 'Поля профиля';
$txt['pruning_title'] = 'Очистка журналов';
$txt['pruning_desc'] = 'Следующие опции предназначены для защиты от разрастания файлов журналов в размерах. Обычно не требуется хранить слишком старые записи.';
$txt['log_settings'] = 'Настройки журналов';
$txt['log_ban_hits'] = 'Включить запись срабатывания банов';

$txt['boardsEdit'] = 'Управление разделами';
$txt['mboards_new_cat'] = 'Создать категорию';
$txt['manage_holidays'] = 'Управление праздниками';
$txt['calendar_settings'] = 'Настройки календаря';
$txt['search_weights'] = 'Параметры поиска';
$txt['search_method'] = 'Поисковое индексирование';

$txt['smiley_sets'] = 'Установленные смайлы';
$txt['smileys_add'] = 'Добавить смайлы';
$txt['smileys_edit'] = 'Изменить смайлы';
$txt['smileys_set_order'] = 'Порядок смайлов';
$txt['icons_edit_message_icons'] = 'Иконки сообщений';

$txt['membergroups_new_group'] = 'Добавить группу';
$txt['membergroups_edit_groups'] = 'Редактирование групп';
$txt['permissions_groups'] = 'Права доступа по группам';
$txt['permissions_boards'] = 'Права доступа по разделам';
$txt['permissions_profiles'] = 'Изменение профилей';
$txt['permissions_post_moderation'] = 'Премодерация сообщений';

$txt['browse_packages'] = 'Обзор пакетов';
$txt['download_packages'] = 'Загрузка пакетов';
$txt['installed_packages'] = 'Установленные пакеты';
$txt['package_file_perms'] = 'Права доступа на файлы';
$txt['package_settings'] = 'Настройки';
$txt['themeadmin_admin_title'] = 'Управление и установка';
$txt['themeadmin_list_title'] = 'Настройки тем оформления';
$txt['themeadmin_reset_title'] = 'Настройки пользователей';
$txt['themeadmin_edit_title'] = 'Изменение темы оформления';
$txt['admin_browse_register_new'] = 'Ручная регистрация';

$txt['search_engines'] = 'Поисковые системы';
$txt['spiders'] = 'Пауки';
$txt['spider_logs'] = 'Журнал пауков';
$txt['spider_stats'] = 'Статистика';

$txt['paid_subscriptions'] = 'Платные подписки';
$txt['paid_subs_view'] = 'Просмотр подписок';

$txt['hooks_title_list'] = 'Хуки интеграции';
$txt['hooks_field_hook_name'] = 'Имя хука';
$txt['hooks_field_function_name'] = 'Имя функции';
$txt['hooks_field_function_method'] = 'Функция является методом и его класс инстанцирован';
$txt['hooks_field_function'] = 'Функция';
$txt['hooks_field_included_file'] = 'Подключен файл';
$txt['hooks_field_file_name'] = 'Имя файла';
$txt['hooks_field_hook_exists'] = 'Статус';
$txt['hooks_active'] = 'Существует';
$txt['hooks_disabled'] = 'Отключен';
$txt['hooks_missing'] = 'Не найден';
$txt['hooks_no_hooks'] = 'Нет ни одного хука.';
$txt['hooks_button_remove'] = 'Удалить';
$txt['hooks_disable_instructions'] = 'Кликните на иконку статуса, что включить /выключить хук';
$txt['hooks_disable_legend'] = 'Подсказка';
$txt['hooks_disable_legend_exists'] = 'хук существует и активен';
$txt['hooks_disable_legend_disabled'] = 'хук существует, но выключен';
$txt['hooks_disable_legend_missing'] = 'хук не найден';
$txt['hooks_reset_filter'] = 'Без фильтра';

$txt['board_perms_allow'] = 'Разрешить';
$txt['board_perms_ignore'] = 'Игнорировать';
$txt['board_perms_deny'] = 'Отклонить';
$txt['all_boards_in_cat'] = 'Все разделы в категории';

$txt['likes_like'] = 'Группы, которым разрешено лайкать сообщения';
$txt['likes_view'] = 'Группы, которым разрешено видеть лайки';

$txt['mention'] = 'Группы, которым разрешено упоминать пользователей';

$txt['notifications'] = 'Уведомления';
$txt['notify_settings'] = 'Настройки уведомлений';
$txt['notifications_desc'] = 'На этой странице можно задать для пользователей настройки уведомлений по умолчанию.';

// sef settings
$txt['sef_enabled'] = 'Включить ЧПУ:';
$txt['sef_lowercase'] = 'Нижний регистр для всех адресов:';
$txt['sef_autosave'] = 'Автоматически сохранять новые области (actions):';
$txt['sef_spacechar'] = 'Символ, используемый для замены пробелов:';
$txt['sef_stripchars'] = 'Символы, удаляемые из адресов:';
$txt['sef_actions'] = 'Все области форума:';
$txt['sef_ignoreactions'] = 'Игнорируемые области:';

?>