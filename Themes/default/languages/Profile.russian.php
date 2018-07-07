<?php
// Version: 1.41; Profile

global $scripturl, $context;

// Some of the things from the popup need their own descriptions
$txt['popup_summary'] = 'Профиль';
$txt['popup_showposts'] = 'Мои сообщения';
$txt['popup_ignore'] = 'Чёрный список';

$txt['no_profile_edit'] = 'Вы не можете изменять профиль данного пользователя.';
$txt['website_title'] = 'Название сайта';
$txt['website_url'] = 'URL-адрес сайта';
$txt['signature'] = 'Подпись';
$txt['profile_posts'] = 'Сообщений';
$txt['change_profile'] = 'Изменить профиль';
$txt['preview_signature'] = 'Предварительный просмотр подписи';
$txt['current_signature'] = 'Текущая подпись';
$txt['signature_preview'] = 'Просмотр подписи';
$txt['delete_user'] = 'Удалить пользователя';
$txt['current_status'] = 'Текущий статус:';
$txt['personal_picture'] = 'Аватар';
$txt['no_avatar'] = 'Без аватара';
$txt['choose_avatar_gallery'] = 'Выбрать аватар из галереи';
$txt['picture_text'] = 'Аватар/Подпись под аватаром';
$txt['reset_form'] = 'Очистить';
$txt['preferred_language'] = 'Предпочитаемый язык';
$txt['age'] = 'Возраст';
$txt['no_pic'] = '(нет аватара)';
$txt['latest_posts'] = 'Последние ответы: ';
$txt['additional_info'] = 'Дополнительная информация';
$txt['avatar_by_url'] = 'Укажите ссылку на свой аватар. (например: <em>http://www.mypage.com/mypic.gif</em>)';
$txt['my_own_pic'] = 'Укажите ссылку на аватар';
$txt['use_gravatar'] = 'Использовать мой граватар';
$txt['gravatar_alternateEmail'] = 'Обычно граватар привязан к вашему основному электронному адресу, но если вы хотите использовать другой адрес, укажите его здесь.';
$txt['gravatar_noAlternateEmail'] = 'Отображаемый граватар будет связан с вашим основным электронным адресом.';
$txt['timezone'] = 'Часовой пояс';
$txt['display_name_desc'] = 'Имя, которое будет отображаться пользователям.';
$txt['personal_time_offset'] = 'Количество часов +/- к времени сервера.';
$txt['dob'] = 'День рождения';
$txt['dob_month'] = 'Месяц (ММ)';
$txt['dob_day'] = 'День (ДД)';
$txt['dob_year'] = 'Год (ГГГГ)';
$txt['password_strength'] = 'В целях безопасности рекомендуется использовать не менее 6 символов, с использованием комбинации букв, цифр и спецсимволов.';
$txt['include_website_url'] = 'Название вашего сайта или форума.';
$txt['complete_url'] = 'Полный URL-адрес вашего сайта или форума. (например: <em>http://www.mypage.com</em>)';
$txt['sig_info'] = 'Этот текст будет отображаться под каждым вашим сообщением.<br>Для оформления можно использовать BB-теги и смайлы.';
$txt['no_signature_set'] = 'Подпись не задана.';
$txt['no_signature_preview'] = 'Нет подписи для отображения.';
$txt['max_sig_characters'] = 'Максимум символов: %1$d; осталось:';
$txt['send_member_pm'] = 'Отправить сообщение этому пользователю';
$txt['hidden'] = 'скрытый';
$txt['current_time'] = 'Текущее время форума';

$txt ['cust_skype'] = 'Ваше имя пользователя Skype.';
$txt ['cust_gplus'] = 'Ваш профиль Google+.';
$txt ['cust_fbook'] = 'Ваша учётная запись на Facebook.';
$txt ['cust_twitter'] = 'Ваша учётная запись Twitter.';
$txt ['cust_github'] = 'Ваша учётная запись Github.';

$txt['language'] = 'Язык';
$txt['avatar_too_big'] = 'Слишком большое изображение. Попробуйте уменьшить его размер (макс.';
$txt['invalid_registration'] = 'Неправильная дата регистрации. Пример:';
$txt['current_password'] = 'Ваш пароль';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'В целях безопасности для принятия изменений необходимо ввести пароль.';
$txt['email_change_logout'] = 'Если вы измените свой электронный адрес, вам потребуется заново активировать свой аккаунт. Сейчас вы принудительно выйдете с форума.';

$txt['timeoffset_autodetect'] = '(автоопределение)';

$txt['secret_question'] = 'Секретный вопрос';
$txt['secret_desc'] = 'Чтобы помочь в восстановлении пароля, введите здесь секретный вопрос и ответ, который знаете <strong>только</strong> вы.';
$txt['secret_desc2'] = 'Будьте осторожны, не допускайте простых вопросов, на которые можно легко дать ответ!';
$txt['secret_answer'] = 'Ответ';
$txt['secret_ask'] = 'Задать мне секретный вопрос';
$txt['cant_retrieve'] = 'Вы не можете узнать свой старый пароль, но можно установить новый, перейдя по ссылке полученной в письме. Кроме того, можно установить новый пароль, ответив на секретный вопрос.';
$txt['incorrect_answer'] = 'Вы не ввели правильную комбинацию секретного вопроса и ответа на него, указанного в профиле. Вернитесь назад и используйте стандартный метод восстановления пароля.';
$txt['enter_new_password'] = 'Введите ответ на вопрос и пароль, которым хотите пользоваться. Ваш пароль изменится, если вы верно ответите на вопрос.';
$txt['password_success'] = 'Ваш пароль был изменён.<br>Нажмите <a href="' . $scripturl . '?action=login">сюда</a>, чтобы войти на форум.';
$txt['secret_why_blank'] = 'почему пусто?';

$txt['authentication_reminder'] = 'Восстановление параметров авторизации';
$txt['password_reminder_desc'] = 'Если забыли свои параметры авторизации, не переживайте, их можно восстановить. Для этого введите, пожалуйста, ниже свое имя или пароль.';
$txt['authentication_options'] = 'Выберите одну из двух опций ниже';
$txt['authentication_password_email'] = 'Отправить мой новый пароль на электронный адрес';
$txt['authentication_password_secret'] = 'Установить новый пароль после ответа на мой &quot;секретный вопрос&quot;';
$txt['reminder_continue'] = 'Продолжить';

$txt['current_theme'] = 'Текущая тема оформления';
$txt['change'] = '(изменить)';
$txt['theme_preferences'] = 'Настройки темы оформления';
$txt['theme_forum_default'] = 'Тема оформления по умолчанию';
$txt['theme_forum_default_desc'] = 'Данная тема оформления используется на форуме по умолчанию.';

$txt['profileConfirm'] = 'Хотите удалить данного пользователя?';

$txt['lastLoggedIn'] = 'Последняя активность';

$txt['alert_prefs'] = 'Настройки уведомлений';
$txt['alert_prefs_desc'] = 'На этой странице вы можете настроить, когда и как получать уведомления и оповещения о новом содержимом на форуме.';
$txt['watched_topics'] = 'Подписки на темы';
$txt['watched_topics_desc'] = 'На этой страницы вы можете увидеть темы на которые подписаны. Когда появится ответ в теме, вы получите уведомление.';
$txt['watched_boards'] = 'Подписки на разделы';
$txt['watched_boards_desc'] = 'На этой страницы вы можете увидеть разделы на которые подписаны. Когда появится новое сообщение в разделе, вы получите уведомление.';

$txt['notification_general'] = 'Основные настройки';
$txt['notify_settings'] = 'Уведомлять:';
$txt['notify_save'] = 'Сохранить';
$txt['notify_important_email'] = 'Получать новости, объявления и важные уведомления форума по электронной почте';
$txt['notify_regularity'] = 'Включить уведомления в темах и разделах';
$txt['notify_regularity_instant'] = 'Немедленно';
$txt['notify_regularity_first_only'] = 'Немедленно &mdash; но только о первом непрочитанном сообщении';
$txt['notify_regularity_daily'] = 'Ежедневно';
$txt['notify_regularity_weekly'] = 'Еженедельно';
$txt['auto_notify'] = 'Включить уведомление сразу после создания новой темы, либо после ответа в другую тему';
$txt['notify_send_types'] = 'При включении уведомления в теме, уведомлять меня';
$txt['notify_send_type_everything'] = 'при ответе или изменении темы модератором';
$txt['notify_send_type_everything_own'] = 'при изменении темы модератором, если я автор темы и слежу за ней';
$txt['notify_send_type_only_replies'] = 'при появлении новых ответов';
$txt['notify_send_type_nothing'] = 'никогда';
$txt['notify_send_body'] = 'При уведомлении на электронную почту о новом сообщении в теме посылать мне это сообщение в теле письма';
$txt['notify_alert_timeout'] = 'Таймаут для уведомлений на рабочем столе';

$txt['notify_what_how'] = 'Настройки оповещений';
$txt['receive_alert'] = 'Получать оповещение';
$txt['receive_mail'] = 'Получать электронное сообщение';
$txt['alert_group_board'] = 'Разделы и темы';
$txt['alert_group_msg'] = 'Сообщения';
$txt['alert_opt_pm_notify'] = 'Если включено, уведомления на электронную почту для:';
$txt['alert_opt_msg_notify_type'] = 'Уведомлять меня:';
$txt['alert_opt_msg_auto_notify'] = 'Подписка на темы, которые я создаю и в которые отвечаю';
$txt['alert_opt_msg_receive_body'] = 'Присылать текст сообщения на электронную почту';
$txt['alert_opt_msg_notify_pref'] = 'Как часто уведомлять:';
$txt['alert_opt_msg_notify_pref_nothing'] = 'Никогда, просто как избранное';
$txt['alert_opt_msg_notify_pref_instant'] = 'Немедленно';
$txt['alert_opt_msg_notify_pref_first'] = 'Немедленно, но только о первом непрочитанном сообщении';
$txt['alert_opt_msg_notify_pref_daily'] = 'Отправлять ежедневную сводку';
$txt['alert_opt_msg_notify_pref_weekly'] = 'Отправлять еженедельную сводку';
$txt['alert_topic_notify'] = 'При ответе в теме, на которую есть подписка';
$txt['alert_board_notify'] = 'При создании темы в разделе, на который есть подписка';
$txt['alert_msg_mention'] = 'При упоминании моего @ника в сообщении';
$txt['alert_msg_quote'] = 'При цитировании моего сообщения (если нет подписки на тему)';
$txt['alert_msg_like'] = 'При отметке моего сообщения как понравившегося';
$txt['alert_unapproved_reply'] = 'При появлении ответа в моей неодобренной теме';
$txt['alert_group_pm'] = 'Личные сообщения';
$txt['alert_pm_new'] = 'При получении личного сообщения';
$txt['alert_pm_reply'] = 'При получении ответа на личное сообщение';
$txt['alert_group_groupr'] = 'Запросы на вступление в группы';
$txt['alert_groupr_approved'] = 'Когда мой запрос на присоединение к группе одобряется';
$txt['alert_groupr_rejected'] = 'Когда мой запрос на присоединение к группе отклоняется';
$txt['alert_group_moderation'] = 'Модерация';
$txt['alert_unapproved_post'] = 'При создании неодобренной темы';
$txt['alert_msg_report'] = 'При жалобе на сообщение';
$txt['alert_msg_report_reply'] = 'При получении ответа на жалобу на сообщение';
$txt['alert_group_members'] = 'Пользователи';
$txt['alert_member_register'] = 'При регистрации нового пользователя';
$txt['alert_warn_any'] = 'При получении пользователем предупреждения';
$txt['alert_buddy_request'] = 'При добавлении пользователем меня в друзья';
$txt['alert_group_calendar'] = 'Календарь';
$txt['alert_event_new'] = 'При создании нового события в календаре';
$txt['alert_request_group'] = 'При получении запроса в группу, которую я модерирую';
$txt['alert_birthday'] = 'Когда мой день рождения';
$txt['alert_member_report'] = 'При жалобе на профиль пользователя';
$txt['alert_member_report_reply'] = 'При получении ответа на жалобу на профиль пользователя';
$txt['alert_group_paidsubs'] = 'Платные подписки';
$txt['alert_paidsubs_expiring'] = 'При истечении срока платных подписок';
$txt['toggle_all'] = 'переключить все';


$txt['notifications_topics'] = 'Текущие уведомления в темах';
$txt['notifications_topics_list'] = 'Вы получаете уведомления из следующих тем';
$txt['notifications_topics_none'] = 'Вы не получаете уведомлений.';
$txt['notifications_topics_howto'] = 'Чтобы получать уведомления о новых сообщениях, нажмите на кнопку &quot;Уведомлять&quot; в нужной теме.';
$txt['notifications_boards'] = 'Текущие уведомления в разделах';
$txt['notifications_boards_list'] = 'Вы получаете уведомления из следующих разделов';
$txt['notifications_boards_none'] = 'Вы не получаете уведомлений.';
$txt['notifications_boards_howto'] = 'Чтобы получать уведомления о новых темах в разделе, нажмите на кнопку &quot;Уведомлять&quot; на главной странице нужного раздела.';
$txt['notifications_update'] = 'Отказаться от выбранных уведомлений';

$txt['statPanel_showStats'] = 'Статистика пользователя: ';
$txt['statPanel_users_votes'] = 'Количество голосов';
$txt['statPanel_users_polls'] = 'Количество созданных голосований';
$txt['statPanel_total_time_online'] = 'Общее время нахождения на форуме';
$txt['statPanel_noPosts'] = 'Нет сообщений';
$txt['statPanel_generalStats'] = 'Общая информация';
$txt['statPanel_posts'] = 'сообщений';
$txt['statPanel_topics'] = 'тем';
$txt['statPanel_total_posts'] = 'Всего сообщений';
$txt['statPanel_total_topics'] = 'Количество начатых тем';
$txt['statPanel_votes'] = 'голосов';
$txt['statPanel_polls'] = 'опросов';
$txt['statPanel_topBoards'] = 'Активность в разделах (кол-во сообщений)';
$txt['statPanel_topBoards_posts'] = '%1$d сообщений из %2$d в разделе (%3$01.2f%%)';
$txt['statPanel_topBoards_memberposts'] = '%1$d сообщений из %2$d сообщений пользователя (%3$01.2f%%)';
$txt['statPanel_topBoardsActivity'] = 'Активность в разделах (% сообщений)';
$txt['statPanel_activityTime'] = 'Средняя активность пользователя по часам';
$txt['statPanel_activityTime_posts'] = '%1$d сообщений (%2$d%%)';
$txt['statPanel_timeOfDay'] = 'часы дня';

$txt['deleteAccount_warning'] = 'Внимание! Данное действие нельзя отменить!';
$txt['deleteAccount_desc'] = 'На этой странице можно удалить учётную запись и все связанные с ней сообщения.';
$txt['deleteAccount_member'] = 'Удалить этого пользователя';
$txt['deleteAccount_posts'] = 'Удалить сообщения этого пользователя';
$txt['deleteAccount_all_posts'] = 'Все сообщения';
$txt['deleteAccount_topics'] = 'Темы и ответы';
$txt['deleteAccount_votes'] = 'Удалить голоса этого пользователя';
$txt['deleteAccount_confirm'] = 'Хотите удалить этого пользователя?';
$txt['deleteAccount_approval'] = 'Модераторы форума должны одобрить удаление пользователя, после чего его учётная запись будет удалена.';
$txt['deleteAccount_permanent'] = 'Окончательно удалить темы/сообщения вместо перемещения их в корзину?';

$txt['profile_of_username'] = 'Профиль пользователя %1$s';
$txt['profileInfo'] = 'Профиль пользователя';
$txt['showPosts'] = 'Просмотр сообщений';
$txt['showPosts_help'] = 'В этом разделе можно просмотреть все сообщения, сделанные этим пользователем.';
$txt['showMessages'] = 'Сообщения';
$txt['showTopics'] = 'Темы';
$txt['showUnwatched'] = 'Непросмотренные темы';
$txt['showAttachments'] = 'Вложения';
$txt['viewWarning_help'] = 'В этом разделе можно увидеть все предупреждения, вынесенные этому пользователю.';
$txt['statPanel'] = 'Статистика';
$txt['editBuddyIgnoreLists'] = 'Белый и чёрный списки';
$txt['could_not_add_person'] = 'Вы не можете добавить этого пользователя в свой список';
$txt['could_not_remove_person'] = 'Вы не можете удалить этого пользователя из своего списка';
$txt['editBuddies'] = 'Изменить список друзей';
$txt['editIgnoreList'] = 'Изменить чёрный список';
$txt['trackUser'] = 'Проверка пользователя';
$txt['trackActivity'] = 'Активность';
$txt['trackIP'] = 'Проверка IP';
$txt['trackLogins'] = 'Посещения';

$txt['account_info'] = 'На этой странице собрана информация, идентифицирующая вас на форуме. В целях безопасности, для изменения этой информации, необходимо ввести пароль.';
$txt['forumProfile_info'] = 'На этой странице можно изменить информацию о себе. Эти сведения будут отображаться на форуме. Если не считаете необходимым указывать какие-либо данные &mdash; просто пропустите их.';
$txt['theme_info'] = 'На этой странице можно изменить настройки внешнего вида форума.';
$txt['notification'] = 'Уведомления';
$txt['notification_info'] = 'Форум предоставляет возможность уведомлять об ответах, о новых темах и важных объявлениях. Здесь можно изменить эти настройки или пересмотреть темы и разделы, уведомления из которых получаете.';
$txt['groupmembership'] = 'Членство в группах';
$txt['groupMembership_info'] = 'В данном разделе можно изменять свою принадлежность к различным группам.';
$txt['ignoreboards'] = 'Игнорирование разделов';
$txt['ignoreboards_info'] = 'Эта страница позволяет игнорировать определённые разделы форума. Когда раздел игнорируется, индикатор новых сообщений не будет отображаться на главной странице. Новые сообщения не будут отображаться при использовании ссылки «Непрочитанные сообщения», тем не менее, игнорируемые разделы будут продолжать отображаться  в списке разделов и войдя в них, будет видно в каких темах есть новые сообщения. При использовании ссылки «Темы с непрочитанными ответами», новые сообщения в игнорируемых разделах всё равно будут показаны.';
$txt['alerts_show'] = 'Показать оповещения';

$txt['profileAction'] = 'Действия';
$txt['deleteAccount'] = 'Удалить учётную запись';
$txt['profileSendIm'] = 'Отправить личное сообщение';
$txt['profile_sendpm_short'] = 'Отправить личное сообщение';

$txt['profileBanUser'] = 'Банить пользователя';

$txt['display_name'] = 'Отображаемое имя';
$txt['enter_ip'] = 'Введите IP (диапазон)';
$txt['errors_by'] = 'Сообщения об ошибках пользователя &mdash; ';
$txt['errors_desc'] = 'В этой таблице отображаются сообщения об ошибках, вызванных данным пользователем.';
$txt['errors_from_ip'] = 'Сообщения об ошибках с IP-адреса';
$txt['errors_from_ip_desc'] = 'В этом поле отображаются сообщения об ошибках, полученные с IP-адреса.';
$txt['ip_address'] = 'IP-адрес';
$txt['ips_in_errors'] = 'Использованные IP-адреса в сообщениях об ошибках';
$txt['ips_in_messages'] = 'Использованные в последних сообщениях IP-адреса ';
$txt['members_from_ip'] = 'Пользователи с данного IP-адреса (диапазона)';
$txt['members_in_range'] = 'Пользователи с таким же IP-адресом';
$txt['messages_from_ip'] = 'Сообщения, оставленные с данного IP';
$txt['messages_from_ip_desc'] = 'В этом поле отображаются сообщения, оставленные с данного IP-адреса.';
$txt['trackLogins_desc'] = 'Ниже перечислены все авторизации данного аккаунта.';
$txt['most_recent_ip'] = 'Последний использованный IP-адрес';
$txt['why_two_ip_address'] = 'Почему здесь показано 2 IP-адреса?';
$txt['no_errors_from_ip'] = 'Не найдено ни одного сообщения об ошибках с данного IP-адреса';
$txt['no_errors_from_user'] = 'Не найдено ни одного сообщения об ошибках от данного пользователя';
$txt['no_members_from_ip'] = 'Не найдено пользователей с указанного IP-адреса';
$txt['no_messages_from_ip'] = 'Не найдено сообщений с указанного IP-адреса';
$txt['trackLogins_none_found'] = 'Недавних посещений не обнаружено';
$txt['none'] = 'Отсутствуют';
$txt['own_profile_confirm'] = 'Хотите удалить свою учётную запись?';
$txt['view_ips_by'] = 'Просмотр IP-адресов, использованных &mdash; ';

$txt['avatar_will_upload'] = 'Загрузить аватар';
$txt['avatar_max_size_wh'] = 'Максимальный размер: %1$spx на %2$spx';
$txt['avatar_max_size_w'] = 'Максимальный размер: %1$spx в ширину';
$txt['avatar_max_size_h'] = 'Максимальный размер: %2$spx в высоту';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'Невозможно отправить письмо с напоминанием пароля.';
$txt['send_email'] = 'Отправить электронное сообщение';
$txt['to_ask_password'] = 'для запроса пароля';

$txt['user_email'] = 'Ваше имя или электронный адрес';

// Use numeric entities in the below two strings.
$txt['reminder_subject'] = 'Новый пароль для ' . $context['forum_name'];
$txt['reminder_mail'] = 'Вы воспользовались функцией восстановления пароля для своей учётной записи. Для установки нового пароля проследуйте по ссылке';
$txt['reminder_sent'] = 'Письмо успешно отправлено на указанный электронный адрес. Нажмите на ссылку в полученном письме, чтобы установить новый пароль.';
$txt['reminder_set_password'] = 'Установка пароля';
$txt['reminder_password_set'] = 'Пароль успешно установлен';
$txt['reminder_error'] = '%1$s неправильно ответил на секретный вопрос при попытке восстановления забытого пароля.';

$txt['registration_not_approved'] = 'Извините, данная учётная запись пока не одобрена. Если хотите изменить свой электронный адрес, пожалуйста, нажмите <a href="%1$s">здесь</a>.';
$txt['registration_not_activated'] = 'Извините, данная учётная запись пока не активирована. Если необходимо повторно отправить письмо с кодом активации, пожалуйста, нажмите <a href="%1$s">здесь</a>';

$txt['primary_membergroup'] = 'Главная группа';
$txt['additional_membergroups'] = 'Дополнительные группы';
$txt['additional_membergroups_show'] = 'показать дополнительные группы';
$txt['no_primary_membergroup'] = '(нет главной группы)';
$txt['deadmin_confirm'] = 'Хотите снять с себя статус администратора? Это действие необратимо!';

$txt['account_activate_method_2'] = 'Учётную запись необходимо реактивировать после смены электронного адреса';
$txt['account_activate_method_3'] = 'Учётная запись не одобрена';
$txt['account_activate_method_4'] = 'Учётная запись ожидает одобрение на удаление';
$txt['account_activate_method_5'] = 'Учётная запись ожидает одобрение. Причина: возрастной ценз';
$txt['account_not_activated'] = 'Учётная запись не активирована';
$txt['account_activate'] = 'активировать';
$txt['account_approve'] = 'подтвердить';
$txt['user_is_banned'] = 'Пользователь забанен';
$txt['view_ban'] = 'Смотреть';
$txt['user_banned_by_following'] = 'Этот пользователь находится в бан листе.';
$txt['user_cannot_due_to'] = 'Пользователь не может %1$s в результате бана: &quot;%2$s&quot;';
$txt['ban_type_post'] = 'оставлять сообщения';
$txt['ban_type_register'] = 'регистрироваться';
$txt['ban_type_login'] = 'входить на форум';
$txt['ban_type_access'] = 'посещать форум';

$txt['show_online'] = 'Показывать другим пользователям ваш онлайн-статус на форуме?';

$txt['return_to_post'] = 'Возвращаться в тему после ответа';
$txt['posts_apply_ignore_list'] = 'Скрывать сообщения, написанные пользователями из вашего чёрного списка';
$txt['recent_posts_at_top'] = 'Показывать новые сообщения в разделах наверху.';
$txt['recent_pms_at_top'] = 'Показывать новые личные сообщения сверху';
$txt['wysiwyg_default'] = 'Показывать WYSIWYG редактор по умолчанию при редактировании сообщения';

$txt['time_and_data_display'] = 'Формат даты и времени';
$txt['forum_default'] = 'По умолчанию';
$txt['normal_date'] = 'Дата и время';
$txt['today_only'] = 'Только «Сегодня»';
$txt['today_yesterday'] = '«Сегодня» и «Вчера»';
$txt['relative_time_date'] = 'Относительные даты и время';

$txt['poster'] = 'Автор';

$txt['show_children'] = 'Показывать подразделы на каждой странице раздела, а не только на первой.';
$txt['show_no_avatars'] = 'Не показывать аватары других пользователей';
$txt['show_no_signatures'] = 'Не показывать подписи других пользователей';
$txt['show_no_censored'] = 'Оставить слова без цензуры';
$txt['topics_per_page'] = 'Количество тем на странице:';
$txt['messages_per_page'] = 'Количество сообщений на странице:';
$txt['per_page_default'] = 'по умолчанию';
$txt['calendar_start_day'] = 'Первый день недели в календаре';
$txt['display_quick_mod'] = 'Быстрое модерирование';

$txt['whois_title'] = 'Проверить IP-адрес через whois-сервер';
$txt['whois_afrinic'] = 'AfriNIC (Африка)';
$txt['whois_apnic'] = 'APNIC (Азиатско-Тихоокеанский регион)';
$txt['whois_arin'] = 'ARIN (Северная Америка, часть Карибских островов и Африка к югу от Сахары)';
$txt['whois_lacnic'] = 'LACNIC (Латинская Америка и Карибский регион)';
$txt['whois_ripe'] = 'RIPE (Европа, Ближний Восток и некоторые части Африки и Азии)';

$txt['moderator_why_missing'] = 'почему нет модератора разделов?';
$txt['username_change'] = 'изменить';
$txt['username_warning'] = 'Для изменения имен пользователей форум должен изменить их пароли, они будут отправлены пользователям с их новыми именами.';

$txt['show_member_posts'] = 'Просмотр сообщений пользователя';
$txt['show_member_topics'] = 'Просмотр тем пользователя';
$txt['show_member_attachments'] = 'Просмотр вложений пользователя';
$txt['show_posts_none'] = 'У пользователя нет ни одного сообщения.';
$txt['show_topics_none'] = 'Пользователь ещё не создал ни одной темы.';
$txt['unwatched_topics_none'] = 'В списке непросмотренных отсутствуют какие-либо темы.';
$txt['show_attachments_none'] = 'У пользователя нет ни одного вложения.';
$txt['show_attach_filename'] = 'Название файла';
$txt['show_attach_downloads'] = 'Скачан';
$txt['show_attach_posted'] = 'Автор';

$txt['showPermissions'] = 'Права пользователя';
$txt['showPermissions_status'] = 'Статус разрешения';
$txt['showPermissions_help'] = 'В этой секции можно просмотреть все разрешения для данного пользователя (то, что запрещено — <del>зачеркнуто</del>).';
$txt['showPermissions_given'] = 'Разрешено';
$txt['showPermissions_denied'] = 'Запрещено';
$txt['showPermissions_permission'] = 'Права доступа (запрещающие права <del>зачеркнуты</del>)';
$txt['showPermissions_none_general'] = 'Пользователь не имеет специально установленных прав.';
$txt['showPermissions_none_board'] = 'Пользователь не имеет специально установленных прав в разделе.';
$txt['showPermissions_all'] = 'Пользователь имеет все права, так как является администратором.';
$txt['showPermissions_select'] = 'Специальные права в разделе';
$txt['showPermissions_general'] = 'Основные права пользователя';
$txt['showPermissions_global'] = 'Все разделы';
$txt['showPermissions_restricted_boards'] = 'Недоступные разделы';
$txt['showPermissions_restricted_boards_desc'] = 'Следующие разделы недоступны для данного пользователя';

$txt['local_time'] = 'Время';
$txt['posts_per_day'] = 'в день';

$txt['buddy_ignore_desc'] = 'Этот раздел предназначен для управления друзьями и игнорируемыми пользователями. Добавление пользователей в эти списки позволит управлять получением от них личных и электронных сообщений, в зависимости от выбранных настроек.';

$txt['buddy_add'] = 'Добавить в список друзей';
$txt['buddy_remove'] = 'Удалить из списка друзей';
$txt['buddy_add_button'] = 'Добавить';
$txt['no_buddies'] = 'Ваш список друзей пуст';

$txt['ignore_add'] = 'Добавить в чёрный список';
$txt['ignore_remove'] = 'Удалить из чёрного списка';
$txt['ignore_add_button'] = 'Добавить';
$txt['no_ignore'] = 'Ваш чёрный список пуст';

$txt['regular_members'] = 'Зарегистрированные пользователи';
$txt['regular_members_desc'] = 'Любой пользователь форума без других знаков отличия или званий входит в эту группу.';
$txt['group_membership_msg_free'] = 'Ваше членство в группе пользователей обновлено.';
$txt['group_membership_msg_request'] = 'Ваш запрос обрабатывается, пожалуйста, подождите.';
$txt['group_membership_msg_primary'] = 'Ваша главная группа была обновлена';
$txt['current_membergroups'] = 'Текущие группы';
$txt['available_groups'] = 'Доступные группы';
$txt['join_group'] = 'Присоединиться к группе';
$txt['leave_group'] = 'Покинуть группу';
$txt['request_group'] = 'Запрос на членство в группу';
$txt['approval_pending'] = 'Ожидают одобрения';
$txt['make_primary'] = 'Сделать главной группой';

$txt['request_group_membership'] = 'Запрос на членство в группу пользователей';
$txt['request_group_membership_desc'] = 'Перед тем как присоединитесь к группе, запрос должен быть одобрен модератором. Пожалуйста, напишите причину, по которой хотите присоединиться именно к этой группе.';
$txt['submit_request'] = 'Отправить запрос';

$txt['profile_updated_own'] = 'Ваш профиль был обновлен.';
$txt['profile_updated_else'] = 'Профиль пользователя %1$s был обновлен.';

$txt['profile_error_signature_max_length'] = 'Подпись не может быть длиннее %1$d символов';
$txt['profile_error_signature_max_lines'] = 'Подпись не может содержать более %1$d строк';
$txt['profile_error_signature_max_image_size'] = 'Изображения в подписи не могут быть больше %1$dx%2$d пикселей';
$txt['profile_error_signature_max_image_width'] = 'Изображения в подписи не могут быть шире %1$d пикселей';
$txt['profile_error_signature_max_image_height'] = 'Изображения в подписи не могут быть выше %1$d пикселей';
$txt['profile_error_signature_max_image_count'] = 'Нельзя использовать в подписи более %1$d изображений';
$txt['profile_error_signature_max_font_size'] = 'Размер шрифта в подписи не может быть больше %1$s';
$txt['profile_error_signature_allow_smileys'] = 'Вам не разрешено использовать какие-либо смайлы в своей подписи';
$txt['profile_error_signature_max_smileys'] = 'Нельзя использовать в подписи более %1$d смайлов';
$txt['profile_error_signature_disabled_bbc'] = 'Следующие BB-теги запрещены в подписи: %1$s';

$txt['profile_view_warnings'] = 'Предупреждения';
$txt['profile_issue_warning'] = 'Предупреждения';
$txt['profile_warning_level'] = 'Уровень предупреждений';
$txt['profile_warning_desc'] = 'В данном разделе можно выставлять уровень предупреждения и при необходимости отправлять уведомление. Здесь также можно проследить историю предупреждений и посмотреть текущий уровень, выставленный администратором.';
$txt['profile_warning_name'] = 'Имя пользователя';
$txt['profile_warning_impact'] = 'Результат';
$txt['profile_warning_reason'] = 'Причина предупреждения';
$txt['profile_warning_reason_desc'] = 'Обязательно и будет записано.';
$txt['profile_warning_effect_none'] = 'Нет.';
$txt['profile_warning_effect_watch'] = 'Пользователь будет добавлен в список наблюдения модератором.';
$txt['profile_warning_effect_own_watched'] = 'Вы в списке наблюдения.';
$txt['profile_warning_is_watch'] = 'пользователь под наблюдением';
$txt['profile_warning_effect_moderation'] = 'Все сообщения пользователя будут модерируемыми.';
$txt['profile_warning_effect_own_moderated'] = 'Все ваши сообщения будут проверяться модераторами.';
$txt['profile_warning_is_moderation'] = 'сообщения пользователя проходят модерацию';
$txt['profile_warning_effect_mute'] = 'Пользователь не сможет оставлять сообщения.';
$txt['profile_warning_effect_own_muted'] = 'Вы не сможете отправлять сообщения.';
$txt['profile_warning_is_muted'] = 'пользователь не может отправлять сообщения';
$txt['profile_warning_effect_text'] = 'Уровень >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'Послать уведомление';
$txt['profile_warning_notify_template'] = 'Выбрать шаблон:';
$txt['profile_warning_notify_subject'] = 'Тема уведомления';
$txt['profile_warning_notify_body'] = 'Содержание уведомления';
$txt['profile_warning_notify_template_subject'] = 'Вы получили предупреждение';
// Use numeric entities in below string.
$txt['profile_warning_notify_template_outline'] = '{MEMBER},' . "\n\n" . 'Вы получили предупреждение за %1$s. Пожалуйста, соблюдайте правила форума, иначе мы предпримем другие меры.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_template_outline_post'] = '{MEMBER},' . "\n\n" . 'Вы получили предупреждение за %1$s в сообщении:' . "\n" . '{MESSAGE}.' . "\n\n" . 'Пожалуйста, соблюдайте правила форума, иначе мы предпримем другие меры.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_for_spamming'] = 'спам';
$txt['profile_warning_notify_title_spamming'] = 'СПАМ';
$txt['profile_warning_notify_for_offence'] = 'публикацию оскорбительного материала';
$txt['profile_warning_notify_title_offence'] = 'Публикация оскорбительного материала';
$txt['profile_warning_notify_for_insulting'] = 'оскорбление других пользователей и/или сотрудников';
$txt['profile_warning_notify_title_insulting'] = 'Оскорбление пользователей/сотрудников';
$txt['profile_warning_issue'] = 'Предупреждение';
$txt['profile_warning_max'] = '(Максимально 100)';
$txt['profile_warning_limit_attribute'] = 'Обратите внимание: нельзя увеличивать уровень предупреждения пользователя более чем на %1$d%% в течение суток.';
$txt['profile_warning_errors_occured'] = 'Предупреждение не было сделано по следующим причинам';
$txt['profile_warning_success'] = 'Предупреждение сделано';
$txt['profile_warning_new_template'] = 'Новый шаблон предупреждения.';

$txt['profile_warning_previous'] = 'Предыдущие предупреждения';
$txt['profile_warning_previous_none'] = 'Данный пользователь не получал предупреждений.';
$txt['profile_warning_previous_issued'] = 'Предупреждение от';
$txt['profile_warning_previous_time'] = 'Время';
$txt['profile_warning_previous_level'] = 'Баллы';
$txt['profile_warning_previous_reason'] = 'Причина';
$txt['profile_warning_previous_notice'] = 'Просмотреть уведомление, отправляемое пользователю';

$txt['viewwarning'] = 'Показать предупреждения';
$txt['profile_viewwarning_for_user'] = 'Предупреждения для %1$s';
$txt['profile_viewwarning_no_warnings'] = 'Пока ещё не было предупреждений.';
$txt['profile_viewwarning_desc'] = 'Ниже приводится краткая информация обо всех предупреждениях, которые были сделаны вам модераторами форума.';
$txt['profile_viewwarning_previous_warnings'] = 'Предыдущие предупреждения';
$txt['profile_viewwarning_impact'] = 'Последствия';

$txt['subscriptions'] = 'Платная подписка';

$txt['pm_settings_desc'] = 'В этом разделе можно изменять настройки личных сообщений, а также их отображение. Кроме того, можно создать список пользователей, чьи личные сообщения будут игнорироваться вами.';
$txt['email_notify'] = 'Уведомлять по электронной почте о появлении новых сообщений:';
$txt['email_notify_buddies'] = 'Друзей';
$txt['email_notify_all'] = 'Всех пользователей';

$txt['pm_receive_from'] = 'Получать личные сообщения:';
$txt['pm_receive_from_everyone'] = 'от всех пользователей';
$txt['pm_receive_from_ignore'] = 'от всех пользователей, за исключением игнорируемых';
$txt['pm_receive_from_admins'] = 'только от администраторов';
$txt['pm_receive_from_buddies'] = 'только от друзей и администраторов';

$txt['popup_messages'] = 'Всплывающее окно при появлении нового сообщения';
$txt['pm_remove_inbox_label'] = 'Убирать ярлык <em>Входящее</em> при добавлении другого ярлыка';
$txt['pm_display_mode'] = 'Отображение личных сообщений';
$txt['pm_display_mode_all'] = 'Все сразу';
$txt['pm_display_mode_one'] = 'По одному';
$txt['pm_display_mode_linked'] = 'В виде диалога';

$txt['tracking'] = 'Проверить пользователя';
$txt['tracking_description'] = 'Данный раздел позволяет отслеживать действия пользователя, а также его IP-адреса.';

$txt['trackEdits'] = 'Изменения профиля';
$txt['trackEdit_deleted_member'] = 'Пользователь удален';
$txt['trackEdit_no_edits'] = 'Для этого пользователя изменений не проводилось.';
$txt['trackEdit_action'] = 'Поле';
$txt['trackEdit_before'] = 'Предыдущее значение';
$txt['trackEdit_after'] = 'Последующее изменение';
$txt['trackEdit_applicator'] = 'Изменено';

$txt['trackEdit_action_real_name'] = 'Отображаемое имя пользователя';
$txt['trackEdit_action_usertitle'] = 'Надпись над аватаром';
$txt['trackEdit_action_member_name'] = 'Имя пользователя';
$txt['trackEdit_action_email_address'] = 'E-mail';
$txt['trackEdit_action_id_group'] = 'Основная группа';
$txt['trackEdit_action_additional_groups'] = 'Дополнительные группы';

$txt['trackGroupRequests'] = 'Запросы в группы';
$txt['trackGroupRequests_title'] = 'Запросы в группы для %1$s';
$txt['requested_group'] = 'Запрошенные группы';
$txt['requested_group_reason'] = 'Причина';
$txt['requested_group_time'] = 'Дата';
$txt['requested_group_outcome'] = 'Результат';
$txt['requested_none'] = 'Нет запросов от этого пользователя.';
$txt['outcome_pending'] = 'Ожидают';
$txt['outcome_approved'] = 'Одобрен %1$s для %2$s';
$txt['outcome_refused'] = 'Отклонен %1$s для %2$s';
$txt['outcome_refused_reason'] = 'Отклонен %1$s для %2$s, по причине: %3$s';

$txt['report_profile'] = 'Пожаловаться на этого пользователя';
$txt['notification_remove_pref'] = 'Использовать настройки по умолчанию';

$txt['tfa_profile_label'] = 'Двухфакторная авторизация';
$txt['tfa_profile_desc'] = 'Двухфакторная авторизация позволяет иметь дополнительный уровень безопасности, назначив отдельное устройство без которого никто не сможет войти в ваш аккаунт, даже если у него есть ваш логин и пароль';
$txt['tfa_profile_enable'] = 'Включить двухфакторную авторизацию';
$txt['tfa_profile_enabled'] = 'Двухфакторная авторизация включена. <a href="%s">Выключить</a>';
$txt['tfa_profile_disabled'] = 'Двухфакторная авторизация выключена';
$txt['tfa_title'] = 'Включить двухфакторную авторизацию через совместимое приложение';
$txt['tfa_desc'] = 'Для использования двухфакторной авторизации на вашем устройстве, вам может понадобиться совместимое приложение, такое как Google Authenticator. Если вы включите двухфакторную авторизацию для вашего аккаунта, вы должны будете вводить код отображаемый на спаренном устройстве, помимо логина и пароля. После включения двухфакторной авторизации вам будет предоставлен код восстановления, на случай утери вами спаренного с аккаунтом устройства.';
$txt['tfa_forced_desc'] = 'Администратор принудительно включил двухфакторную авторизацию для всех аккаунтов, для продолжения включите её здесь тоже';
$txt['tfa_step1'] = '1. Введите свой пароль';
$txt['tfa_step2'] = '2. Секретный код приложения';
$txt['tfa_step2_desc'] = 'Для настройки приложения, отсканируйте QR код справа или введите следующий код вручную: ';
$txt['tfa_step3'] = '3. Введите код сгенерированный приложением';
$txt['tfa_enable'] = 'Включить';
$txt['tfa_pass_invalid'] = 'Введен неправильный пароль, попробуйте ещё раз.';
$txt['tfa_code_invalid'] = 'Введен неправильный код, попробуйте ещё раз.';
$txt['tfa_backup_invalid'] = 'Введен неправильный код восстановления, попробуйте ещё раз.';
$txt['tfa_backup_title'] = 'Сохраните этот код восстановления в надежном месте!';
$txt['tfa_backup_used_desc'] = 'Вы ввели верный код восстановления и двухфакторная авторизация отключена. Если вы хотите использовать двухфакторную авторизацию снова, включите её здесь';
$txt['tfa_login_desc'] = 'Введите ниже код сгенерированный приложением на вашем спаренном устройстве';
$txt['tfa_backup'] = 'или используйте код восстановления';
$txt['tfa_code'] = 'Код';
$txt['tfa_preserve'] = 'Запомнить на этом компьютере на 30 дней (не рекомендуется для общедоступных компьтеров)';
$txt['tfa_backup_code'] = 'Код восстановления';
$txt['tfa_backup_desc'] = ' В случае утери спаренного устройства или приложения для авторизации, вы сможете использовать код восстановления, заданный при настройке двухфакторной авторизации. В случае утери и этого кода, свяжитесь с администратором форума.';
$txt['tfa_wait'] = 'Подождите около 2 минут, прежде чем пробовать войти снова через двухфакторную авторизацию';

$txt['gdrp_export'] = 'Экспорт данных';
$txt['gdrp_export_profile'] = 'Данные профиля';
$txt['gdrp_export_posts'] = 'Сообщения форума';
$txt['gdrp_export_fail'] = 'Вам не разрешено экспортировать данные этого пользователя!';

$txt['exp_uid'] = 'ID пользователя';
$txt['exp_username'] = 'Имя пользователя';
$txt['exp_realname'] = 'Отображаемое имя';
$txt['exp_email'] = 'E-mail';
$txt['exp_date_register'] = 'Дата регистрации';
$txt['exp_posts'] = 'Всего сообщений';
$txt['exp_gender'] = 'Пол';
$txt['exp_location'] = 'Расположение';
$txt['exp_pers_text'] = 'Подпись под аватаром';
$txt['exp_user_ttl'] = 'Надпись над аватаром';
$txt['exp_birstdate'] = 'Дата рождения';
$txt['exp_website_ttl'] = 'Сайт';
$txt['exp_wbsite_url'] = 'Адрес сайта';
$txt['exp_signature'] = 'Подпись';

$txt['exp_post_subject']  = 'Тема: ';
$txt['exp_post_date']  = 'Дата: ';
$txt['exp_post_body']  = 'Сообщение: ';

?>