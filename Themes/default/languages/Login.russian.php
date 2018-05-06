<?php
// Version: 1.3; Login

global $context;

// Registration agreement page.
$txt['registration_agreement'] = 'Регистрационное соглашение';
$txt['agreement_agree'] = 'Я принимаю соглашение';
$txt['agreement_agree_coppa_above'] = 'Я принимаю соглашение и я старше %1$d лет';
$txt['agreement_agree_coppa_below'] = 'Я принимаю соглашение и я младше %1$d лет';
$txt['agree_coppa_above'] = 'Мне как минимум %1$d лет.';
$txt['agree_coppa_below'] = 'Мне меньше %1$d лет.';

// Registration form.
$txt['registration_form'] = 'Регистрационная форма';
$txt['need_username'] = 'Вы не ввели имя пользователя.';
$txt['no_password'] = 'Вы не ввели пароль.';
$txt['incorrect_password'] = 'Неверный пароль';
$txt['choose_username'] = 'Имя пользователя';
$txt['maintain_mode'] = 'Техническое обслуживание';
$txt['registration_successful'] = 'Регистрация прошла успешно';
$txt['now_a_member'] = 'Поздравляем! Теперь вы полноправный пользователь форума.';
// Use numeric entities in the below string.
$txt['your_password'] = 'и ваш пароль';
$txt['valid_email_needed'] = 'Пожалуйста, введите действительный электронный адрес, %1$s.';
$txt['required_info'] = 'Необходимая информация';
$txt['identification_by_smf'] = 'Используется только для идентификации форумом.';
$txt['additional_information'] = 'Дополнительная информация';
$txt['warning'] = 'Внимание!';
$txt['only_members_can_access'] = 'Только зарегистрированные пользователи имеют доступ в этот раздел.';
$txt['login_below'] = 'Пожалуйста, авторизуйтесь.';
$txt['login_below_or_register'] = 'Авторизуйтесь или <a href="%1$s">зарегистрируйтесь</a> на %2$s';

// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Вы можете изменить это после того как зайдете в настройки своего профиля, или посетите эту страницу после входа:';
$txt['your_username_is'] = 'Имя пользователя: ';

$txt['login_hash_error'] = 'Политика безопасности паролей была изменена. Введите свой пароль ещё раз, чтобы обновить его.';

$txt['ban_register_prohibited'] = 'По какой-то причине, для вас запрещена регистрация на этом форуме.';

$txt['activate_account'] = 'Активация учётной записи';
$txt['activate_success'] = 'Ваша учётная запись успешно активирована. Можете войти на форум.';
$txt['activate_not_completed1'] = 'Перед тем как сможете войти, ваш электронный адрес должен быть проверен.';
$txt['activate_not_completed2'] = 'Отправить повторно письмо для активации?';
$txt['activate_after_registration'] = 'Благодарим за регистрацию. Скоро придёт письмо с ссылкой для активации учётной записи. Если вы не получите письмо через какое-то время, проверьте папку со спамом в своей почте.';
$txt['invalid_userid'] = 'Пользователь не существует';
$txt['invalid_activation_code'] = 'Неправильный код активации';
$txt['invalid_activation_username'] = 'Имя пользователя или электронный адрес';
$txt['invalid_activation_new'] = 'Если при регистрации был указан неправильный адрес электронной почты, введите новый и укажите свой пароль.';
$txt['invalid_activation_new_email'] = 'Новый электронный адрес';
$txt['invalid_activation_password'] = 'Старый пароль';
$txt['invalid_activation_resend'] = 'Отправить повторно код активации';
$txt['invalid_activation_known'] = 'Если знаете код активации, пожалуйста, укажите его здесь.';
$txt['invalid_activation_retry'] = 'Код активации';
$txt['invalid_activation_submit'] = 'Активировать';

$txt['coppa_no_concent'] = 'Администратор ещё не получил согласия на вашу регистрацию от родителей/опекуна.';
$txt['coppa_need_more_details'] = 'Нужны подробные детали?';

$txt['awaiting_delete_account'] = 'Ваша учётная запись была отмечена на удаление!<br>Если хотите восстановить её, отметьте пункт &quot;Реактивировать мою учётную запись&quot; и войдите снова.';
$txt['undelete_account'] = 'Активировать мою учётную запись';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Информация о новом пароле';
$txt['change_password_login'] = 'Информация для входа на';
$txt['change_password_new'] = 'был изменен и пароль сброшен. Ниже приведена информация для входа.';

$txt['in_maintain_mode'] = 'Форум находится на Техническом Обслуживании.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Перед регистрацией, прочтите и подтвердите соглашение .';
$txt['register_passwords_differ_js'] = 'Пароли не совпадают!';

$txt['approval_after_registration'] = 'Благодарим вас за регистрацию. Вы сможете использовать свою учётную запись после того, как её проверит и одобрит администратор, о чём вы получите уведомление.';

$txt['admin_settings_desc'] = 'Здесь можно изменить настройки, связанные с регистрацией новых пользователей.';

$txt['setting_registration_method'] = 'Метод регистрации для новых пользователей';
$txt['setting_registration_disabled'] = 'Регистрация запрещена';
$txt['setting_registration_standard'] = 'Мгновенная регистрация';
$txt['setting_registration_activate'] = 'Активация по электронной почте';
$txt['setting_registration_approval'] = 'Одобрение администратором';
$txt['setting_send_welcomeEmail'] = 'Отправлять приветствие новым пользователям';
$txt['setting_requireAgreement'] = 'Показывать и требовать принятия регистрационного соглашения при регистрации';

$txt['setting_coppaAge'] = 'Минимальный возраст пользователя для успешной регистрации';
$txt['setting_coppaType'] = 'Действия, выполняемые при регистрации пользователя моложе указанного возраста';
$txt['setting_coppaType_reject'] = 'Отменить регистрацию';
$txt['setting_coppaType_approval'] = 'Запросить подтверждение у родителей/опекуна';
$txt['setting_coppaPost'] = 'Электронный адрес, на который должно быть прислано одобрение о разрешении регистрации';
$txt['setting_coppaPost_desc'] = 'Только предупредить, если пользователь моложе установленного возраста';
$txt['setting_coppaFax'] = 'Номер факса, на который должно быть прислано одобрение о разрешении регистрации';
$txt['setting_coppaPhone'] = 'Ваш контактный номер для связи с родителями';

$txt['admin_register'] = 'Регистрация нового пользователя';
$txt['admin_register_desc'] = 'Здесь можно вручную зарегистрировать новых пользователей и, при желании, отправить им их регистрационные данные.';
$txt['admin_register_username'] = 'Имя пользователя';
$txt['admin_register_email'] = 'E-mail';
$txt['admin_register_password'] = 'Пароль';
$txt['admin_register_username_desc'] = 'Имя нового пользователя';
$txt['admin_register_email_desc'] = 'Электронный адрес пользователя';
$txt['admin_register_password_desc'] = 'Пароль нового пользователя';
$txt['admin_register_email_detail'] = 'Отправить новый пароль пользователю';
$txt['admin_register_email_detail_desc'] = 'Требуется действительный электронный адрес';
$txt['admin_register_email_activate'] = 'Требовать активации учётной записи';
$txt['admin_register_group'] = 'Основная группа';
$txt['admin_register_group_desc'] = 'Группа, к которой будет принадлежать новый пользователь';
$txt['admin_register_group_none'] = '(нет основной группы)';
$txt['admin_register_done'] = 'Пользователь %1$s успешно зарегистрирован!';

$txt['coppa_title'] = 'Форум с ограничением по возрасту';
$txt['coppa_after_registration'] = 'Спасибо за регистрацию на форуме ' . $context['forum_name_html_safe'] . '.<br><br>Но, так как вам меньше {MINIMUM_AGE} лет, мы должны получить от ваших родителей или опекуна разрешение, чтобы вы могли использовать этот форум. Чтобы активировать учётную запись, пожалуйста, распечатайте эту форму:';
$txt['coppa_form_link_popup'] = 'Открыть форму в новом окне';
$txt['coppa_form_link_download'] = 'Загрузить форму как текстовый файл';
$txt['coppa_send_to_one_option'] = 'Попроси родителей/опекунов заполнить форму:';
$txt['coppa_send_to_two_options'] = 'Попроси родителей/опекунов отправить заполненную форму на электронный адрес или факс, указанные ниже:';
$txt['coppa_send_by_post'] = 'Отправить по следующему адресу:';
$txt['coppa_send_by_fax'] = 'Отправить факс по следующему номеру:';
$txt['coppa_send_by_phone'] = 'Альтернатива: пусть родители позвонят администратору форума по телефону {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Форма одобрения для регистрации на ' . $context['forum_name_html_safe'];
$txt['coppa_form_address'] = 'Адрес';
$txt['coppa_form_date'] = 'Дата';
$txt['coppa_form_body'] = 'Я {PARENT_NAME},<br><br> разрешаю {CHILD_NAME} (имя ребенка) зарегистрироваться на форуме: ' . $context['forum_name_html_safe'] . ', с именем пользователя: {USER_NAME}.<br><br>Я понимаю, что введенная личная информация {USER_NAME} может быть показана другим пользователям форума.<br><br>Подпись:<br>{PARENT_NAME} (Родитель/Опекун).';

$txt['visual_verification_sound_again'] = 'Проиграть снова';
$txt['visual_verification_sound_close'] = 'Закрыть окно';
$txt['visual_verification_sound_direct'] = 'Проблемы с прослушиванием? Попробуйте прямую ссылку для прослушивания';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Имя пользователя доступно';
$txt['registration_username_unavailable'] = 'Имя пользователя не доступно';
$txt['registration_username_check'] = 'Проверить доступность имени пользователя';
$txt['registration_password_short'] = 'Пароль слишком короткий';
$txt['registration_password_reserved'] = 'Ваш пароль содержит имя пользователя/электронный адрес';
$txt['registration_password_numbercase'] = 'Пароль должен содержать большие и маленькие буквы, а также цифры';
$txt['registration_password_no_match'] = 'Пароли не совпадают';
$txt['registration_password_valid'] = 'Пароль правильный';

$txt['registration_errors_occurred'] = 'Следующие ошибки были обнаружены при регистрации. Пожалуйста, исправьте их:';

?>