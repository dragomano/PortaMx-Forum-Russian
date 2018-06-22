<?php
// Version: 1.4; PersonalMessage

global $context;

// Things for the popup
$txt['pm_unread'] = 'Непрочитанные';
$txt['pm_sent_short'] = 'Отправленные';
$txt['pm_new_short'] = 'Новое';
$txt['pm_drafts_short'] = 'Черновики';
$txt['pm_settings_short'] = 'Настройки';
$txt['pm_no_unread'] = 'Нет непрочитанных.';
$txt['pm_was_sent_to_you'] = 'Пришло сообщение.';
$txt['pm_you_were_replied_to'] = 'Ваши сообщения, на которые были ответы.';

$txt['pm_head_text'] = '<strong>Мобильное меню "Мои сообщения"</strong>';
$txt['pm_inbox'] = 'Личные сообщения';
$txt['send_message'] = 'Отправить';
$txt['pm_add'] = 'Добавить';
$txt['make_bcc'] = 'Скрытая копия';
$txt['pm_to'] = 'Кому';
$txt['pm_bcc'] = 'Копия';
$txt['inbox'] = 'Входящие';
$txt['conversation'] = 'Диалог';
$txt['messages'] = 'Сообщения';
$txt['sent_items'] = 'Отправленные';
$txt['new_message'] = 'Новое сообщение';
$txt['delete_message'] = 'Удалить сообщения';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Удалить все личные сообщения';
$txt['delete_all_confirm'] = 'Хотите удалить все сообщения?';
$txt['recipient'] = 'Получатель';

$txt['delete_selected_confirm'] = 'Хотите удалить все выделенные личные сообщения?';

$txt['sent_to'] = 'Получатель';
$txt['reply_to_all'] = 'Ответить всем';
$txt['delete_conversation'] = 'Удалить диалог';
$txt['remove_conversation'] = 'Удалить все сообщения в этом диалоге?';

$txt['pm_capacity'] = 'Количество';
$txt['pm_currently_using'] = '%1$s сообщений, заполнен на %2$s%%.';
$txt['pm_sent'] = 'Ваше сообщение успешно отправлено.';

$txt['pm_error_user_not_found'] = 'Не найден пользователь \'%1$s\'.';
$txt['pm_error_ignored_by_user'] = 'Пользователь \'%1$s\' заблокировал ваше личное сообщение.';
$txt['pm_error_data_limit_reached'] = 'Сообщение не может быть отправлено пользователю \'%1$s\', так как его ящик переполнен!';
$txt['pm_error_user_cannot_read'] = 'Пользователь \'%1$s\' не может получать личные сообщения.';
$txt['pm_successfully_sent'] = 'Личное сообщение успешно отправлено пользователю \'%1$s\'.';
$txt['pm_send_report'] = 'Отправить отчёт';
$txt['pm_undisclosed_recipients'] = 'Скрытые получатели';
$txt['pm_too_many_recipients'] = 'Вы не можете отсылать личные сообщения более чем %1$d получателям за один раз.';

$txt['pm_read'] = 'Прочитать';
$txt['pm_replied'] = 'Ответить';

// Message Pruning.
$txt['pm_prune'] = 'Удалить сообщения';
$txt['pm_prune_desc1'] = 'Удалить все личные сообщения старше чем';
$txt['pm_prune_desc2'] = 'дней.';
$txt['pm_prune_warning'] = 'Хотите удалить свои личные сообщения? Их невозможно будет восстановить!';
$txt['pm_remove_all'] = 'Удалить все личные сообщения (это очистит входящие и отправленные сообщения).';
$txt['pm_remove_all_warning'] = 'Вы действительно уверены в том, что хотите удалить все личные сообщения? Их нельзя будет восстановить!';
$txt['delete_all_prune'] = 'Удалить все';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Дальнейшие действия';
$txt['pm_actions_delete_selected'] = 'Удалить выделенные';
$txt['pm_actions_filter_by_label'] = 'Фильтровать по ярлыкам';
$txt['pm_actions_go'] = 'Отправить';

// Manage Labels Screen.
$txt['pm_apply'] = 'Принять';
$txt['pm_manage_labels'] = 'Управление ярлыками';
$txt['pm_labels_delete'] = 'Хотите удалить выделенные ярлыки?';
$txt['pm_labels_desc'] = 'Здесь можно добавлять, редактировать и удалять ярлыки для своих личных сообщений.';
$txt['pm_label_add_new'] = 'Добавить новый ярлык';
$txt['pm_label_name'] = 'Имя ярлыка';
$txt['pm_labels_no_exist'] = 'У вас нет созданных ярлыков!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Ярлык';
$txt['pm_msg_label_title'] = 'Изменить ярлыки';
$txt['pm_msg_label_apply'] = 'Добавить ярлык';
$txt['pm_msg_label_remove'] = 'Убрать ярлык';
$txt['pm_msg_label_inbox'] = 'Входящие';
$txt['pm_sel_label_title'] = 'Ярлыки для выделенных';

// Menu headings.
$txt['pm_labels'] = 'Ярлыки';
$txt['pm_messages'] = 'Сообщения';
$txt['pm_actions'] = 'Действия';
$txt['pm_preferences'] = 'Предпочтения';
$txt['pm_is_replied_to'] = 'Вы ответили на это сообщение.';
$txt['pm_sent_is_replied_to'] = 'Получатель ответил на это сообщение или переслал его';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Сообщить администрации';
$txt['pm_report_title'] = 'Жалоба на сообщение';
$txt['pm_report_desc'] = 'Здесь можно оформить жалобу на личное сообщение другого пользователя. Ваша жалоба будет отправлена на рассмотрение администрации форума, вместе с содержанием оригинального сообщения.';
$txt['pm_report_admins'] = 'Сообщить администрации';
$txt['pm_report_all_admins'] = 'Отправить всем администраторам форума';
$txt['pm_report_reason'] = 'Причина';
$txt['pm_report_message'] = 'Отправить';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[Отчёт] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} отправил отчёт о личном сообщении, отправленном {SENDER}, по следующим причинам:';
$txt['pm_report_pm_other_recipients'] = 'Другие получатели сообщения:';
$txt['pm_report_pm_hidden'] = 'Скрытые получатели (%1$d):';
$txt['pm_report_pm_unedited_below'] = 'Ниже содержание личного сообщения, о котором посылали отчёт:';
$txt['pm_report_pm_sent'] = 'Отправители:';

$txt['pm_report_done'] = 'Благодарим за отправленную жалобу. В скором времени вы должны получить ответ от администрации.';
$txt['pm_report_return'] = 'Вернуться во входящие';

$txt['pm_search_title'] = 'Поиск личных сообщений';
$txt['pm_search_bar_title'] = 'Поиск сообщений';
$txt['pm_search_text'] = 'Поиск';
$txt['pm_search_go'] = 'Искать';
$txt['pm_search_advanced'] = 'Расширенный поиск';
$txt['pm_search_user'] = 'По пользователю';
$txt['pm_search_match_all'] = 'Содержащее все слова';
$txt['pm_search_match_any'] = 'Содержащее любые слова';
$txt['pm_search_options'] = 'Свойства';
$txt['pm_search_post_age'] = 'По давности';
$txt['pm_search_show_complete'] = 'Показывать в результатах сообщения целиком.';
$txt['pm_search_subject_only'] = 'Поиск только по теме и автору.';
$txt['pm_search_between'] = 'между';
$txt['pm_search_between_and'] = 'и';
$txt['pm_search_between_days'] = 'дней';
$txt['pm_search_order'] = 'Сортировка результатов';
$txt['pm_search_choose_label'] = 'Выберите параметры поиска или поиск всего';

$txt['pm_search_results'] = 'Результаты поиска';
$txt['pm_search_none_found'] = 'Сообщений не найдено';

$txt['pm_search_orderby_relevant_first'] = 'Подходящие первыми';
$txt['pm_search_orderby_recent_first'] = 'Последние первыми';
$txt['pm_search_orderby_old_first'] = 'Старые первыми';

$txt['pm_visual_verification_label'] = 'Визуальная проверка';
$txt['pm_visual_verification_desc'] = 'Пожалуйста, введите код на изображении, прежде чем отправите личное сообщение.';

$txt['pm_settings'] = 'Изменить настройки';
$txt['pm_change_view'] = 'Изменить вид';

$txt['pm_manage_rules'] = 'Управление фильтрами';
$txt['pm_manage_rules_desc'] = 'Фильтры сообщений позволяют автоматически сортировать входящие сообщения по выбранным условиям. Ниже предоставлен список всех установленных фильтров. Для изменения фильтра просто нажмите на его название.';
$txt['pm_rules_none'] = 'Не создано ни одного фильтра для сообщений.';
$txt['pm_rule_title'] = 'Фильтр';
$txt['pm_add_rule'] = 'Добавить новый фильтр';
$txt['pm_apply_rules'] = 'Применить фильтр сейчас';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Хотите применить текущие фильтры ко всем личным сообщения?';
$txt['pm_edit_rule'] = 'Изменить фильтр';
$txt['pm_rule_save'] = 'Сохранить фильтр';
$txt['pm_delete_selected_rule'] = 'Удалить выбранные фильтры';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Хотите удалить выделенные фильтры?';
$txt['pm_rule_name'] = 'Название';
$txt['pm_rule_name_desc'] = 'Название фильтра для запоминания';
$txt['pm_rule_name_default'] = '[НАЗВАНИЕ]';
$txt['pm_rule_description'] = 'Описание';
$txt['pm_rule_not_defined'] = 'Добавьте несколько условий, чтобы построить описание фильтра.';
$txt['pm_rule_js_disabled'] = 'Примечание: убедитесь, что в браузере включен JavaScript, для использования этой функции.';
$txt['pm_rule_criteria'] = 'Условия';
$txt['pm_rule_criteria_add'] = 'Добавить условие';
$txt['pm_rule_criteria_pick'] = 'Выбрать условие';
$txt['pm_rule_mid'] = 'Имя отправителя';
$txt['pm_rule_gid'] = 'Группа отправителя';
$txt['pm_rule_sub'] = 'Тема сообщения';
$txt['pm_rule_msg'] = 'Тело сообщения содержит';
$txt['pm_rule_bud'] = 'Отправитель друг';
$txt['pm_rule_sel_group'] = 'Выбрать группу';
$txt['pm_rule_logic'] = 'Чтобы выполнился фильтр';
$txt['pm_rule_logic_and'] = 'Все условия должны совпадать';
$txt['pm_rule_logic_or'] = 'Достаточно совпадения любого условия';
$txt['pm_rule_actions'] = 'Действия';
$txt['pm_rule_sel_action'] = 'Выбрать действие';
$txt['pm_rule_add_action'] = 'Добавить действие';
$txt['pm_rule_label'] = 'Пометить ярлыком';
$txt['pm_rule_sel_label'] = 'Выберите ярлык';
$txt['pm_rule_delete'] = 'Удалить сообщение';
$txt['pm_rule_no_name'] = 'Вы забыли ввести названия фильтра.';
$txt['pm_rule_no_criteria'] = 'Фильтр должен содержать хотя бы одно условие и одно действие.';
$txt['pm_rule_too_complex'] = 'Созданный фильтр слишком велик для PortaMx Forum. Попробуйте создать фильтр поменьше.';

$txt['pm_readable_and'] = '<em>и</em>';
$txt['pm_readable_or'] = '<em>или</em>';
$txt['pm_readable_start'] = 'Если ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'сообщение от пользователя &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'отправитель из группы &quot;{GROUP}&quot;';
$txt['pm_readable_subject'] = 'тема сообщения содержит &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'тело сообщения содержит &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'отправитель — друг';
$txt['pm_readable_label'] = 'пометить ярлыком &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'удалить сообщение';
$txt['pm_readable_then'] = '<strong>тогда</strong>';
$txt['pm_remove_message'] = 'Удалить все сообщения';

?>