<?php
// Version: 1.3; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
// Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it. You may
// translate the description of the variable. Do not translate @description:, however you may translate the rest of that line.

// Do not use block comments in this file, they will have special meaning.

global $txtBirthdayEmails;

$txt['scheduled_approval_email_topic'] = 'Следующие темы ожидают одобрения:';
$txt['scheduled_approval_email_msg'] = 'Следующие сообщения ожидают сообщения:';
$txt['scheduled_approval_email_attach'] = 'Следующие вложения ожидают одобрения:';
$txt['scheduled_approval_email_event'] = 'Следующие события ожидают одобрения:';

/**
	@additional_params: resend_activate_message
		REALNAME: The display name for the member receiving the email.
		USERNAME:  The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONCODE:  The code needed to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['resend_activate_message_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['resend_activate_message_body'] = 'Спасибо за регистрацию на {FORUMNAME}.

Ваш логин:
{USERNAME}

Если вы забыли свой пароль, можете изменить его:
{FORGOTPASSWORDLINK}.

Перед тем как войти на форум, вы должны активировать свою учётную запись:
{ACTIVATIONLINK}

Если возникнут проблемы с активацией, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: resend_pending_message
		REALNAME: The display name for the member receiving the email.
		USERNAME:  The user name for the member receiving the email.
	@description:
*/
$txt['resend_pending_message_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['resend_pending_message_body'] = 'Привет, {REALNAME}.

Ваш запрос на регистрацию на {FORUMNAME} был получен.

Ваш логин:
{USERNAME}

Перед тем, как вы сможете войти на форум, ваш запрос должен быть одобрен. Вы получите другое письмо с подтверждением с этого адреса.

{REGARDS}';

/**
	@additional_params: mc_group_approve
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was accepted into.
	@description: The request to join a particular membergroup has been accepted.
*/
$txt['mc_group_approve_subject'] = 'Одобрение запроса на вступление в группу';
$txt['mc_group_approve_body'] = '{USERNAME}, ваша учётная запись обновлена.

Поздравляем, ваш запрос на вступление в группу "{GROUPNAME}" на {FORUMNAME} был одобрен.

{REGARDS}';

/**
	@additional_params: mc_group_reject
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was rejected from.
	@description: The request to join a particular membergroup has been rejected.
*/
$txt['mc_group_reject_subject'] = 'Отклонение запроса на вступление в группу';
$txt['mc_group_reject_body'] = '{USERNAME},
Сожалеем, но ваш запрос на вступление в группу "{GROUPNAME}" на {FORUMNAME} был отклонен.

{REGARDS}';

/**
	@additional_params: mc_group_reject_reason
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was rejected from.
		REASON: Reason for the rejection.
	@description: The request to join a particular membergroup has been rejected with a reason given.
*/
$txt['mc_group_reject_reason_subject'] = 'Отклонение запроса на вступление в группу';
$txt['mc_group_reject_reason_body'] = '{USERNAME},
Сожалеем, но ваш запрос на вступление в группу "{GROUPNAME}" на {FORUMNAME} был отклонен.

Причина: {REASON}

{REGARDS}';

/**
	@additional_params: admin_approve_accept
		NAME: The display name of the member.
		USERNAME: The user name for the member receiving the email.
		PROFILELINK: The URL of the profile page.
		FORGOTPASSWORDLINK: The URL of the "forgot password" page.
	@description:
*/
$txt['admin_approve_accept_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_approve_accept_body'] = 'Добро пожаловать, {NAME}!

Ваша учётная запись была активирована, теперь можно пользоваться форумом.

Ваш логин:
{USERNAME}

Если забыли свой пароль, можете изменить его:
{FORGOTPASSWORDLINK}.

{REGARDS}';

/**
	@additional_params: admin_approve_activation
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_approve_activation_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_approve_activation_body'] = 'Добро пожаловать, {USERNAME}!

Ваша учётная запись на {FORUMNAME} была одобрена, теперь её нужно активировать. Для активации перейдите по ссылке:
{ACTIVATIONLINK}

При возникновении каких-либо проблем с активацией перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: admin_approve_reject
		USERNAME: The user name for the member receiving the email.
	@description:
*/
$txt['admin_approve_reject_subject'] = 'Регистрация отклонена';
$txt['admin_approve_reject_body'] = '{USERNAME},
К сожалению, ваша заявка на регистрацию на {FORUMNAME} была отклонена.

{REGARDS}';

/**
	@additional_params: admin_approve_delete
		USERNAME: The user name for the member receiving the email.
	@description:
*/
$txt['admin_approve_delete_subject'] = 'Удален аккаунт';
$txt['admin_approve_delete_body'] = '{USERNAME},
Ваша учётная запись на {FORUMNAME} была удалена.

Возможно, вы долго не активировали свою учётную запись, в этом случае зарегистрируйтесь заново.

{REGARDS}';

/**
	@additional_params: admin_approve_remind
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_approve_remind_subject'] = 'Напоминание о регистрации';
$txt['admin_approve_remind_body'] = '{USERNAME},
Вы до сих пор не активировали свою учётную запись на форуме {FORUMNAME}.

Для активации перейдите по ссылке:
{ACTIVATIONLINK}

При возникновении каких-либо проблем с активацией перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params:
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_register_activate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_register_activate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин {USERNAME} и пароль {PASSWORD}.

Перед тем как войти на форум, вы должны активировать свою учётную запись, пройдя по ссылке:

{ACTIVATIONLINK}

Если возникнут проблемы с активацией, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}';

$txt['admin_register_immediate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_register_immediate_body'] = 'Спасибо за регистрацию на {FORUMNAME}.

Ваш логин:
{USERNAME}

пароль:
{PASSWORD}

Адрес форума: {SCRIPTURL}.

{REGARDS}';

/**
	@additional_params: new_announcement
		TOPICSUBJECT: The subject of the topic being announced.
		MESSAGE: The message body of the first post of the announced topic.
		TOPICLINK: A link to the topic being announced.
	@description:
*/
$txt['new_announcement_subject'] = 'Новое объявление: {TOPICSUBJECT}';
$txt['new_announcement_body'] = '{MESSAGE}

Чтобы отписаться от таких уведомлений, авторизуйтесь на форуме и снимите пометку «Получать новости, объявления и важные уведомления форума по электронной почте» в своем профиле.

Посмотреть полный анонс:
{TOPICLINK}

{REGARDS}';

/**
	@additional_params: notify_boards_once_body
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		MESSAGE: This is the body of the message.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_once_body_subject'] = 'Новая тема: {TOPICSUBJECT} ';
$txt['notify_boards_once_body_body'] = 'Появилась новая тема \'{TOPICSUBJECT}\' в разделе, на который вы подписаны.

Посмотреть тему:
{TOPICLINK}

Тем может быть больше, но вы не будете получать других уведомлений, пока не посетите раздел.

Текст темы:
{MESSAGE}

Отписаться от этого раздела:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards_once
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_once_subject'] = 'Новая тема: {TOPICSUBJECT}';
$txt['notify_boards_once_body'] = 'Появилась новая тема \'{TOPICSUBJECT}\' в разделе, на который вы подписаны.

Посмотреть тему:
{TOPICLINK}

Тем может быть больше, но вы не будете получать других уведомлений, пока не посетите раздел.

Отписаться от этого раздела:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards_body
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		MESSAGE: This is the body of the message.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_body_subject'] = 'Новая тема: {TOPICSUBJECT}';
$txt['notify_boards_body_body'] = 'Появилась новая тема \'{TOPICSUBJECT}\' в разделе, на который вы подписаны.

Посмотреть тему:
{TOPICLINK}

Текст темы:
{MESSAGE}

Отписаться от этого раздела:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_subject'] = 'Новая тема: {TOPICSUBJECT}';
$txt['notify_boards_body'] = 'Появилась новая тема \'{TOPICSUBJECT}\' в разделе, на который вы подписаны.

Посмотреть тему:
{TOPICLINK}

Отписаться от этого раздела:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: alert_unapproved_reply
		SUBJECT: The subject of the topic causing the notification
		LINK: A link to the topic.
	@description:
*/
$txt['alert_unapproved_reply_subject'] = 'Новый ответ: {SUBJECT}';
$txt['alert_unapproved_reply_body'] = 'Появился ответ от {POSTERNAME} в теме {SUBJECT}.

Прочитать ответ:
{LINK}

{REGARDS}';

/**
	@additional_params: alert_unapproved_post
		SUBJECT: The subject of the topic causing the notification
		LINK: A link to the topic.
	@description:
*/
$txt['alert_unapproved_post_subject'] = 'Новое неодобренное сообщение: {SUBJECT}';
$txt['alert_unapproved_post_body'] = 'Появилось новое сообщение \'{SUBJECT}\', требующее одобрения.

Одобрить или отклонить сообщение:
{LINK}

{REGARDS}';

/**
	@additional_params: alert_unapproved_topic
		SUBJECT: The subject of the topic causing the notification
		LINK: A link to the topic.
	@description:
*/
$txt['alert_unapproved_topic_subject'] = 'Новая неодобренная тема: {SUBJECT}';
$txt['alert_unapproved_topic_body'] = 'Требует одобрения новая тема \'{SUBJECT}\'

Одобрить или отклонить тему:
{LINK}

{REGARDS}';

/**
	@additional_params: request_membership
		RECPNAME: The name of the person recieving the email
		APPYNAME: The name of the person applying for group membership
		GROUPNAME: The name of the group being applied to.
		REASON: The reason given by the applicant for wanting to join the group.
		MODLINK: Link to the group moderation page.
	@description:
*/
$txt['request_membership_subject'] = 'Новый запрос на вступление в группу';
$txt['request_membership_body'] = '{RECPNAME},
{APPYNAME} подал запрос на вступление в группу "{GROUPNAME}".

Пользователь указал следующую причину:
{REASON}

Одобрить или отклонить запрос:
{MODLINK}

{REGARDS}';

/**
	@additional_params: scheduled_approval
		REALNAME: The real (display) name of the person receiving the email.
		PROFILE_LINK: Link to profile of member receiving email where can renew.
		SUBSCRIPTION: Name of the subscription.
		END_DATE: Date it expires.
	@description:
*/
$txt['paid_subscription_reminder_subject'] = 'Платная подписка на {FORUMNAME} скоро истечет';
$txt['paid_subscription_reminder_body'] = '{REALNAME},
Срок платной подписки на {FORUMNAME} почти вышел. Если у вас включено автопродление, ничего делать не нужно, в противном случае вам следует продлить подписку. Детали платной подписки ниже:

Подписка: {SUBSCRIPTION}
Истекает: {END_DATE}

Отредактировать подписку:
{PROFILE_LINK}

{REGARDS}';

/**
	@additional_params: activate_reactivate
		ACTIVATIONLINK:  The url link to reactivate the member's account.
		ACTIVATIONCODE:  The code needed to reactivate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
	@description:
*/
$txt['activate_reactivate_subject'] = 'С возвращением на {FORUMNAME}';
$txt['activate_reactivate_body'] = 'Для перепроверки адреса электронной почты ваша учётная запись была деактивирована.

Активировать заново:
{ACTIVATIONLINK}

Если возникнут проблемы с активацией, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: forgot_password
		REALNAME: The real (display) name of the person receiving the reminder.
		REMINDLINK: The link to reset the password.
		IP: The IP address of the requester.
		MEMBERNAME:
	@description:
*/
$txt['forgot_password_subject'] = 'Новый пароль для {FORUMNAME}';
$txt['forgot_password_body'] = '{REALNAME},
Вы получили это сообщение потому, что для вашей учётной записи была использована опция восстановления пароля.

Установить новый пароль:
{REMINDLINK}

IP: {IP}
Username: {MEMBERNAME}

{REGARDS}';

/**
	@additional_params: scheduled_approval
		REALNAME: The real (display) name of the person receiving the email.
		BODY: The generated body of the mail.
	@description:
*/
$txt['scheduled_approval_subject'] = 'Список сообщений ожидающих одобрения на {FORUMNAME}';
$txt['scheduled_approval_body'] = '{REALNAME},
Это письмо содержит список элементов, ожидающих одобрения на {FORUMNAME}.

{BODY}

Авторизуйтесь на форуме для просмотра этих элементов.
{SCRIPTURL}

{REGARDS}';

/**
	@additional_params: send_email
		EMAILSUBJECT: The subject the user wants to email.
		EMAILBODY: The body the user wants to email.
		SENDERNAME: The name of the member sending the email.
		RECPNAME: The name of the person receiving the email.
	@description:
*/
$txt['send_email_subject'] = '{EMAILSUBJECT} ';
$txt['send_email_body'] = '{EMAILBODY}';

/**
	@additional_params: report_to_moderator
		TOPICSUBJECT: The subject of the reported post.
		POSTERNAME: The reported post's author's name.
		REPORTERNAME: The name of the person reporting the post.
		TOPICLINK: The url of the post that is being reported.
		REPORTLINK: The url of the moderation center report.
		COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
	@description: When a user reports a post this email is sent out to moderators and admins of that board.
*/
$txt['report_to_moderator_subject'] = 'Жалоба на сообщение: {TOPICSUBJECT} от {POSTERNAME}';
$txt['report_to_moderator_body'] = 'В разделе, который вы модерируете, на сообщение "{TOPICSUBJECT}" от {POSTERNAME} поступила жалоба от {REPORTERNAME}.

Тема: {TOPICLINK}
Центр модерации: {REPORTLINK}

Комментарий к жалобе:
{COMMENT}

{REGARDS}';

/**
	@additional_params: report_to_moderator
		TOPICSUBJECT: The subject of the reported post.
		POSTERNAME: The reported post's author's name.
		COMMENTERNAME: The name of the person who replied to the report.
		TOPICLINK: The url of the post that is being reported.
		REPORTLINK: The url of the moderation center report.
	@description: When a moderator replies to a moderation report, this can be sent to the other moderators who previously replied.
*/
$txt['reply_to_moderator_subject'] = 'Перейти к сообщению {TOPICSUBJECT}, на которое пришла жалоба от {POSTERNAME}';
$txt['reply_to_moderator_body'] = 'На тему "{TOPICSUBJECT}" поступила жалоба.

{COMMENTERNAME} добавил комментарий к отчёту. Дополнительную информацию смотрите на форуме.

Тема: {TOPICLINK}
Центр модерации: {REPORTLINK}

{REGARDS}';

/**
	@additional_params: report_user_profile
		MEMBERNAME: The display name of the reported user
		REPORTERNAME: The name of the person reporting the profile
		PROFILELINK: The link to the profile that was reported
		COMMENT: The comment left by the reporter.
	@description: When a user's profile is reported
*/
$txt['report_member_profile_subject'] = 'Жалоба на профиль: {MEMBERNAME}';
$txt['report_member_profile_body'] = 'На профиль "{MEMBERNAME}" поступила жалоба от {REPORTERNAME}.

Профиль: {PROFILELINK}
Центр модерации: {REPORTLINK}

Комментарий к жалобе:
{COMMENT}

{REGARDS}';

/**
	@additional_params: report_user_profile
		MEMBERNAME: The display name of the reported user
		COMMENTERNAME: The name of the person who added the comment
		PROFILELINK: The link to the profile that was reported
	@description: When someone replies to a report about a profile, this can be sent to others who replied
*/
$txt['reply_to_member_report_subject'] = 'Перейти к профилю {MEMBERNAME}, на который пришла жалоба';
$txt['reply_to_member_report_body'] = 'На профиль "{MEMBERNAME}" поступила жалоба.

{COMMENTERNAME} добавил комментарий к отчёту. Дополнительную информацию смотрите на форуме.

Профиль: {PROFILELINK}
Центр модерации: {REPORTLINK}

{REGARDS}';

/**
	@additional_params: change_password
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
	@description:
*/
$txt['change_password_subject'] = 'Новый пароль';
$txt['change_password_body'] = '{USERNAME}

Ваш логин на {FORUMNAME} был изменен, а пароль сброшен.

Новый логин:
{USERNAME}

Новый пароль:
{PASSWORD}.

Изменить их можно в своем профиле:
{SCRIPTURL}?action=profile

{REGARDS}';

/**
	@additional_params: register_activate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		ACTIVATIONLINK:  The url link to reactivate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE:  The code needed to reactivate the member's account.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_activate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_activate_body'] = 'Спасибо за регистрацию на {FORUMNAME}.

Ваш логин:
{USERNAME}

Если вы забыли свой пароль, можете изменить его:
{FORGOTPASSWORDLINK}.

Перед тем как войти на форум, вы должны активировать свою учётную запись:
{ACTIVATIONLINK}

Если возникнут проблемы с активацией, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: register_coppa
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		COPPALINK:  The url link to the coppa form.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_coppa_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_coppa_body'] = 'Спасибо за регистрацию на {FORUMNAME}.

Ваш логин:
{USERNAME}

Если вы забыли свой пароль, можете изменить его:
{FORGOTPASSWORDLINK}.

Перед тем как вы сможете войти на форум, администратор должен получить согласие вашего родителя/опекуна:
{COPPALINK}.

{REGARDS}';

/**
	@additional_params: register_immediate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_immediate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_immediate_body'] = 'Спасибо за регистрацию на {FORUMNAME}.

Ваш логин:
{USERNAME}

Если вы забыли свой пароль, можете изменить его:
{FORGOTPASSWORDLINK}.

{REGARDS}';

/**
	@additional_params: register_pending
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_pending_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_pending_body'] = 'Ваш запрос о регистрации на форуме {FORUMNAME} принят, {REALNAME}.

Ваш логин:
{USERNAME}

Если забыли свой пароль, можете восстановить его:
{FORGOTPASSWORDLINK}.

Подождите, пока ваш запрос одобрят. Когда это произойдет, придет другое письмо с данного адреса, и Вы сможете войти на форум.

{REGARDS}';

/**
	@additional_params: notification_reply
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
	@description:
*/
$txt['notification_reply_subject'] = 'Новый ответ в теме: {TOPICSUBJECT}';
$txt['notification_reply_body'] = 'Появился ответ от {POSTERNAME} в теме, на которую вы подписаны.

Прочитать ответ:
{TOPICLINK}

Отписаться от этой темы:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_reply_body
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
		MESSAGE:
	@description:
*/
$txt['notification_reply_body_subject'] = 'Новый ответ в теме: {TOPICSUBJECT}';
$txt['notification_reply_body_body'] = 'Появился ответ от {POSTERNAME} в теме, на которую вы подписаны.

Прочитать ответ:
{TOPICLINK}

Отписаться от этой темы:
{UNSUBSCRIBELINK}

Текст ответа:
{MESSAGE}

{REGARDS}';

/**
	@additional_params: notification_reply_once
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
	@description:
*/
$txt['notification_reply_once_subject'] = 'Новый ответ в теме: {TOPICSUBJECT}';
$txt['notification_reply_once_body'] = 'Появился ответ от {POSTERNAME} в теме, на которую вы подписаны.

Прочитать ответ:
{TOPICLINK}

Отписаться от этой темы:
{UNSUBSCRIBELINK}

Ответов может быть больше, но вы получаете уведомления только о первом непрочитанном.

{REGARDS}';

/**
	@additional_params: notification_reply_body_once
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
		MESSAGE:
	@description:
*/
$txt['notification_reply_body_once_subject'] = 'Новый ответ в теме: {TOPICSUBJECT}';
$txt['notification_reply_body_once_body'] = 'Появился ответ от {POSTERNAME} в теме, на которую вы подписаны.

Прочитать ответ:
{TOPICLINK}

Отписаться от этой темы:
{UNSUBSCRIBELINK}

Текст ответа:
{MESSAGE}

Ответов может быть больше, но вы получаете уведомления только о первом непрочитанном.

{REGARDS}';

/**
	@additional_params: notification_sticky
	@description:
*/
$txt['notification_sticky_subject'] = 'Тема закреплена: {TOPICSUBJECT}';
$txt['notification_sticky_body'] = 'Тема, на которую вы подписаны, была закреплена.

Посмотреть тему:
{TOPICLINK}

Отписаться от темы:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_lock
	@description:
*/
$txt['notification_lock_subject'] = 'Тема заблокирована: {TOPICSUBJECT}';
$txt['notification_lock_body'] = 'Тема, на которую вы подписаны, была заблокирована.

Посмотреть тему:
{TOPICLINK}

Отписаться от темы:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_unlock
	@description:
*/
$txt['notification_unlock_subject'] = 'Тема разблокирована: {TOPICSUBJECT} ';
$txt['notification_unlock_body'] = 'Тема, на которую вы подписаны, была разблокирована.

Посмотреть тему:
{TOPICLINK}

Отписаться от темы:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_remove
	@description:
*/
$txt['notification_remove_subject'] = 'Удалена тема: {TOPICSUBJECT}';
$txt['notification_remove_body'] = 'Удалена тема, на которую вы подписаны.

{REGARDS}';

/**
	@additional_params: notification_move
	@description:
*/
$txt['notification_move_subject'] = 'Перенесена тема: {TOPICSUBJECT}';
$txt['notification_move_body'] = 'Тема, на которую вы подписаны, была перенесена в другой раздел.

Посмотреть тему:
{TOPICLINK}

Отписаться от темы:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_merged
	@description:
*/
$txt['notification_merge_subject'] = 'Объединена тема: {TOPICSUBJECT}';
$txt['notification_merge_body'] = 'Тема, на которую вы подписаны, была объединена с другой темой.

Посмотреть объединенную тему:
{TOPICLINK}

Отписаться от темы:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_split
	@description:
*/
$txt['notification_split_subject'] = 'Разделена тема: {TOPICSUBJECT} ';
$txt['notification_split_body'] = 'Тема, на которую вы подписаны, была разделена на несколько тем.

Посмотреть остаток от темы:
{TOPICLINK}

Отписаться от темы:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: admin_notify
		USERNAME:
		PROFILELINK:
	@description:
*/
$txt['admin_notify_subject'] = 'Зарегистрирован новый пользователь';
$txt['admin_notify_body'] = 'На вашем форуме зарегистрирован новый пользователь: {USERNAME}.

Просмотреть профиль:
{PROFILELINK}

{REGARDS}';

/**
	@additional_params: admin_notify_approval
		USERNAME:
		PROFILELINK:
		APPROVALLINK:
	@description:
*/
$txt['admin_notify_approval_subject'] = 'Зарегистрирован новый пользователь';
$txt['admin_notify_approval_body'] = 'На вашем форуме зарегистрирован новый пользователь: {USERNAME}.

Просмотреть профиль:
{PROFILELINK}

Прежде чем пользователь сможет отправлять сообщения, учётную запись нужно одобрить:
{APPROVALLINK}

{REGARDS}';

/**
	@additional_params: admin_attachments_full
		REALNAME:
	@description:
*/
$txt['admin_attachments_full_subject'] = 'Внимание! Каталог вложений почти заполнен';
$txt['admin_attachments_full_body'] = '{REALNAME},
Папка вложений на {FORUMNAME} почти заполнена. Посетите форум для решения проблемы.

Если размер папки достигнет максимально допустимого значения, пользователи не смогут загружать вложения и аватары.

{REGARDS}';

/**
	@additional_params: paid_subscription_refund
		NAME: Subscription title.
		REALNAME: Recipients name
		REFUNDUSER: Username who took out the subscription.
		REFUNDNAME: User's display name who took out the subscription.
		DATE: Today's date.
		PROFILELINK: Link to members profile.
	@description:
*/
$txt['paid_subscription_refund_subject'] = 'Возврат по платной подписке';
$txt['paid_subscription_refund_body'] = '{REALNAME},
Пользователь получил возврат средств по платной подписке. Детали ниже:

	Подписка: {NAME}
	Пользователь: {REFUNDNAME} ({REFUNDUSER})
	Дата: {DATE}

Профиль пользователя:
{PROFILELINK}

{REGARDS}';

/**
	@additional_params: paid_subscription_new
		NAME: Subscription title.
		REALNAME: Recipients name
		SUBEMAIL: Email address of the user who took out the subscription
		SUBUSER: Username who took out the subscription.
		SUBNAME: User's display name who took out the subscription.
		DATE: Today's date.
		PROFILELINK: Link to members profile.
	@description:
*/
$txt['paid_subscription_new_subject'] = 'Новая платная подписка';
$txt['paid_subscription_new_body'] = '{REALNAME},
Пользователь оплатил платную подписку. Детали ниже:

	Подписка: {NAME}
	Пользователь: {SUBNAME} ({SUBUSER})
	E-mail: {SUBEMAIL}
	Цена: {PRICE}
	Дата: {DATE}

Профиль пользователя:
{PROFILELINK}

{REGARDS}';

/**
	@additional_params: paid_subscription_error
		ERROR: Error message.
		REALNAME: Recipients name
	@description:
*/
$txt['paid_subscription_error_subject'] = 'Произошла ошибка платной подписки';
$txt['paid_subscription_error_body'] = '{REALNAME},
Следующая ошибка произошла при оплате подписки
---------------------------------------------------------------
{ERROR}

{REGARDS}';

/**
	@additional_params: new_pm
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		READLINK:  The link to directly access the read page.
		REPLYLINK:  The link to directly access the reply page.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_body'] = 'Вы получили личное сообщение от {SENDER} на {FORUMNAME}

ВНИМАНИЕ: Помните, что это только уведомление. Не отвечайте на это письмо.

Прочитать сообщение:
{READLINK}

Ответить на сообщение:
{REPLYLINK} ';

/**
	@additional_params: new_pm_body
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		MESSAGE:  The text of the personal message.
		REPLYLINK:  The link to directly access the reply page.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_body_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_body_body'] = 'Вы получили личное сообщение от {SENDER} на {FORUMNAME}

ВНИМАНИЕ: Помните, что это только уведомление. Не отвечайте на это письмо.

Текст сообщения:
{MESSAGE}

Ответить на сообщение:
{REPLYLINK}';

/**
	@additional_params: new_pm_tolist
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		READLINK:  The link to directly access the read page.
		REPLYLINK:  The link to directly access the reply page.
		TOLIST:  The list of users that will receive the personal message.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_tolist_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_tolist_body'] = 'Вы и {TOLIST} получили личное сообщение от {SENDER} на {FORUMNAME}

ВНИМАНИЕ: Помните, что это только уведомление. Не отвечайте на это письмо.

Прочитать сообщение:
{READLINK}

Ответить на сообщение (только отправителю):
{REPLYLINK} ';

/**
	@additional_params: new_pm_body_tolist
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		MESSAGE:  The text of the personal message.
		REPLYLINK:  The link to directly access the reply page.
		TOLIST:  The list of users that will receive the personal message.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_body_tolist_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_body_tolist_body'] = 'Вы и {TOLIST} получили личное сообщение от {SENDER} на {FORUMNAME}

ВНИМАНИЕ: Помните, что это только уведомление. Не отвечайте на это письмо.

Текст сообщения:
{MESSAGE}

Ответить на сообщение (только отправителю):
{REPLYLINK}';

/**
	@additional_params: msg_quote
		CONTENTSUBJECT: The post subject.
		QUOTENAME:  The user name for the member creating the quote
		MEMBERNAME:  The user name for the member being quoted
		CONTENTLINK:  The post's link
	@description: A notification email sent to the members who've been quoted in a post
 */
$txt['msg_quote_subject'] = 'Вы были процитированы в сообщении: {CONTENTSUBJECT}';
$txt['msg_quote_body'] = 'Привет, {MEMBERNAME}!

Вы были процитированы {QUOTENAME} в сообщении "{CONTENTSUBJECT}".

Прочитать сообщение:
{CONTENTLINK}

{REGARDS}';

/**
	@additional_params: msg_mention
		CONTENTSUBJECT: The post subject.
		MENTIONNAME:  The user name for the member creating the mention
		MEMBERNAME:  The user name for the member being mentioned
		CONTENTLINK:  The post's link
	@description: A notification email sent to the members who've been mentioned in a post
 */
$txt['msg_mention_subject'] = 'Упоминание в сообщении: {CONTENTSUBJECT}';
$txt['msg_mention_body'] = 'Привет, {MEMBERNAME}!

Вы были упомянуты {MENTIONNAME} в сообщении "{CONTENTSUBJECT}".

Прочитать сообщение:
{CONTENTLINK}

{REGARDS}';

/**
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$txtBirthdayEmails['happy_birthday_subject'] = 'Поздравление с днём рождения от {FORUMNAME}.';
$txtBirthdayEmails['happy_birthday_body'] = 'Ув. {REALNAME},

Мы, команда {FORUMNAME}, хотели бы поздравить Вас с днём рождения. Пусть этот день и весь последующий год будут полны радости.

{REGARDS}

:: Это сообщение было создано автоматически ::';
$txtBirthdayEmails['happy_birthday_author'] = 'Unknown';

$txtBirthdayEmails['birthday_second_subject'] = 'В ваш день рождения, {REALNAME}';
$txtBirthdayEmails['birthday_second_body'] = 'Примите наши скромные поздравления!

Мы желаем Вам больше красивых моментов в жизни, больше друзей и успехов во всех делах.

Команда {FORUMNAME}';
$txtBirthdayEmails['birthday_second_author'] = 'Unknown';

$txtBirthdayEmails['birthday_third_subject'] = 'С днём рождения!';
$txtBirthdayEmails['birthday_third_body'] = 'Желаем Вам много счастья, радости и удачи!

Команда {FORUMNAME}';
$txtBirthdayEmails['birthday_third_author'] = 'Unknown';

?>