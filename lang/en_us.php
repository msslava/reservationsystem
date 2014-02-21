<?php
/**
Copyright 2011-2013 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('Language.php');

class en_us extends Language
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @return array
	 */
	protected function _LoadDates()
	{
		$dates = array();

		$dates['general_date'] = 'd.m.Y';
		$dates['general_datetime'] = 'd.m.Y H:i:s';
		$dates['schedule_daily'] = 'l, d.m.Y';
		$dates['reservation_email'] = 'd.m.Y @ H:i (e)';
		$dates['res_popup'] = 'd.m.Y H:i';
		$dates['dashboard'] = 'l, d.m.Y H:i';
		$dates['period_time'] = 'H:i';
		$dates['general_date_js'] = 'dd.mm.yy';
		$dates['calendar_time'] = 'HH:mm';
		$dates['calendar_dates'] = 'd.M';

		$this->Dates = $dates;

		return $this->Dates;
	}

	/**
	 * @return array
	 */
	protected function _LoadStrings()
	{
		$strings = array();

		$strings['FirstName'] = 'Фамилия';
		$strings['LastName'] = 'Имя';
		$strings['Timezone'] = 'Часовой пояс';
		$strings['Edit'] = 'Редактировать';
		$strings['Change'] = 'Изменить';
		$strings['Rename'] = 'Переименовать';
		$strings['Remove'] = 'Удалить';
		$strings['Delete'] = 'Удалить';
		$strings['Update'] = 'Обновить';
		$strings['Cancel'] = 'Отменить';
		$strings['Add'] = 'Добавить';
		$strings['Name'] = 'Имя';
		$strings['Yes'] = 'Да';
		$strings['No'] = 'Нет';
		$strings['FirstNameRequired'] = 'Введите фамилию.';
		$strings['LastNameRequired'] = 'Введите имя.';
		$strings['PwMustMatch'] = 'Пароли не совпадают.';
		$strings['PwComplexity'] = 'Пароль должен содержать 6 знаков включая буквы, цифры и символы.';
		$strings['ValidEmailRequired'] = 'Требуется настоящий email адрес.';
		$strings['UniqueEmailRequired'] = 'Email адрес уже зарегистрирован.';
		$strings['UniqueUsernameRequired'] = 'Пользователь уже зарегистрирован.';
		$strings['UserNameRequired'] = 'Введите имя пользователя.';
		$strings['CaptchaMustMatch'] = 'Пожалуйста, введите проверочный код.';
		$strings['Today'] = 'Сегодня';
		$strings['Week'] = 'Неделя';
		$strings['Month'] = 'Месяц';
		$strings['BackToCalendar'] = 'Назад в календарь';
		$strings['BeginDate'] = 'Начало';
		$strings['EndDate'] = 'Окончание';
		$strings['Username'] = 'Ник';
		$strings['Password'] = 'Пароль';
		$strings['PasswordConfirmation'] = 'Подтвердить пароль';
		$strings['DefaultPage'] = 'Страница по-умолчанию';
		$strings['MyCalendar'] = 'Мой календарь';
		$strings['ScheduleCalendar'] = 'График';
		$strings['Registration'] = 'Регистрация';
		$strings['NoAnnouncements'] = 'Объявлений нет';
		$strings['Announcements'] = 'Объявления';
		$strings['NoUpcomingReservations'] = 'У Вас нет предстоящих событий';
		$strings['UpcomingReservations'] = 'Следующие резервы';
		$strings['ShowHide'] = 'Показать/Скрыть';
		$strings['Error'] = 'Ошибка';
		$strings['ReturnToPreviousPage'] = 'Вернуться на предыдущую страницу';
		$strings['UnknownError'] = 'Неизвестная ошибка';
		$strings['InsufficientPermissionsError'] = 'Вы не имеете права доступа к этому оборудованию';
		$strings['MissingReservationResourceError'] = 'Оборудование не было выбрано';
		$strings['MissingReservationScheduleError'] = 'График не был выбран';
		$strings['DoesNotRepeat'] = 'Не повторять';
		$strings['Daily'] = 'Ежедневно';
		$strings['Weekly'] = 'Еженедельно';
		$strings['Monthly'] = 'Ежемесячно';
		$strings['Yearly'] = 'Ежегодно';
		$strings['RepeatPrompt'] = 'Повторить';
		$strings['hours'] = 'часы';
		$strings['days'] = 'дни';
		$strings['weeks'] = 'недели';
		$strings['months'] = 'месяцы';
		$strings['years'] = 'годы';
		$strings['day'] = 'день';
		$strings['week'] = 'неделя';
		$strings['month'] = 'месяц';
		$strings['year'] = 'год';
		$strings['repeatDayOfMonth'] = 'день месяца';
		$strings['repeatDayOfWeek'] = 'день недели';
		$strings['RepeatUntilPrompt'] = 'До';
		$strings['RepeatEveryPrompt'] = 'Каждый';
		$strings['RepeatDaysPrompt'] = 'С';
		$strings['CreateReservationHeading'] = 'Создать новый резерв';
		$strings['EditReservationHeading'] = 'Редактирование резерва %s';
		$strings['ViewReservationHeading'] = 'Просмотр резерва %s';
		$strings['ReservationErrors'] = 'Изменить резерв';
		$strings['Create'] = 'Создать';
		$strings['ThisInstance'] = 'Only This Instance';
		$strings['AllInstances'] = 'All Instances';
		$strings['FutureInstances'] = 'Future Instances';
		$strings['Print'] = 'Распечатать';
		$strings['ShowHideNavigation'] = 'Показать/Скрыть навигацию';
		$strings['ReferenceNumber'] = 'Номер';
		$strings['Tomorrow'] = 'Вчера';
		$strings['LaterThisWeek'] = 'Позже на этой неделе';
		$strings['NextWeek'] = 'Следующая неделя';
		$strings['SignOut'] = 'Выход';
		$strings['LayoutDescription'] = 'Начало в %s, показывать %s дней в неделю';
		$strings['AllResources'] = 'Все оборудование';
		$strings['TakeOffline'] = 'Сделать неактивным';
		$strings['BringOnline'] = 'Сделать активным';
		$strings['AddImage'] = 'Добавить изображение';
		$strings['NoImage'] = 'Изображение не присвоено';
		$strings['Move'] = 'Переместить';
		$strings['AppearsOn'] = 'Появляется в %s';
		$strings['Location'] = 'Расположение';
		$strings['NoLocationLabel'] = '(расположение не установлено)';
		$strings['Contact'] = 'Контакты';
		$strings['NoContactLabel'] = '(нет контактной информации)';
		$strings['Description'] = 'Описание';
		$strings['NoDescriptionLabel'] = '(нет описания)';
		$strings['Notes'] = 'Примечания';
		$strings['NoNotesLabel'] = '(нет примечаний)';
		$strings['NoTitleLabel'] = '(без названия)';
		$strings['UsageConfiguration'] = 'Настройка использования';
		$strings['ChangeConfiguration'] = 'Изменить конфигурацию';
		$strings['ResourceMinLength'] = 'Бронирование должно продолжаться не менее %s';
		$strings['ResourceMinLengthNone'] = 'Минимальная продолжительность бронирования не установлена';
		$strings['ResourceMaxLength'] = 'Бронирование не может длиться более %s';
		$strings['ResourceMaxLengthNone'] = 'Максимальная продолжительность бронирования не установлена';
		$strings['ResourceRequiresApproval'] = 'Бронирование должно быть одобрено';
		$strings['ResourceRequiresApprovalNone'] = 'Бронирование не требует одобрения';
		$strings['ResourcePermissionAutoGranted'] = 'Полномочия предоставляются автоматически';
		$strings['ResourcePermissionNotAutoGranted'] = 'Полномочия не предоставляются автоматически';
		$strings['ResourceMinNotice'] = 'Резервирование должно быть сделано за %s до начала';
		$strings['ResourceMinNoticeNone'] = 'Бронирование может быть сделано с текущего времени';
		$strings['ResourceMaxNotice'] = 'Резервирование не должно заканчиваться позже %s от текущего времени';
		$strings['ResourceMaxNoticeNone'] = 'Бронирование может быть завершено в любой момент';
		$strings['ResourceAllowMultiDay'] = 'Бронировать можно на несколько дней вперед';
		$strings['ResourceNotAllowMultiDay'] = 'Бронирование не может быть сделано на несколько дней';
		$strings['ResourceCapacity'] = 'Это оборудование может использовать %s человек';
		$strings['ResourceCapacityNone'] = 'Оборудование не имеет лимита по количеству';
		$strings['AddNewResource'] = 'Добавить новое оборудование';
		$strings['AddNewUser'] = 'Добавить нового пользователя';
		$strings['AddUser'] = 'Добавить пользователя';
		$strings['Schedule'] = 'График';
		$strings['AddResource'] = 'Добавить оборудование';
		$strings['Capacity'] = 'Количество';
		$strings['Access'] = 'Доступ';
		$strings['Duration'] = 'Продолжительность';
		$strings['Active'] = 'Активные';
		$strings['Inactive'] = 'Неактивные';
		$strings['ResetPassword'] = 'Сброс пароля';
		$strings['LastLogin'] = 'Последний вход';
		$strings['Search'] = 'Поиск';
		$strings['ResourcePermissions'] = 'Права';
		$strings['Reservations'] = 'Бронирование';
		$strings['Groups'] = 'Группы';
		$strings['ResetPassword'] = 'Сброс пароля';
		$strings['AllUsers'] = 'Все пользователи';
		$strings['AllGroups'] = 'Все группы';
		$strings['AllSchedules'] = 'Все графики';
		$strings['UsernameOrEmail'] = 'Ник или Email';
		$strings['Members'] = 'Члены';
		$strings['QuickSlotCreation'] = 'Создать периоды каждые %s минут между %s и %s';
		$strings['ApplyUpdatesTo'] = 'Применить обновления к';
		$strings['CancelParticipation'] = 'Отменить участие';
		$strings['Attending'] = 'Attending';
		$strings['QuotaConfiguration'] = 'On %s for %s users in %s are limited to %s %s per %s';
		$strings['reservations'] = 'брони';
		$strings['ChangeCalendar'] = 'Изменить календарь';
		$strings['AddQuota'] = 'Добавить квоту';
		$strings['FindUser'] = 'Найти пользователя';
		$strings['Created'] = 'Было создано';
		$strings['LastModified'] = 'Последнее изменение';
		$strings['GroupName'] = 'Название группы';
		$strings['GroupMembers'] = 'Члены группы';
		$strings['GroupRoles'] = 'Роли группы';
		$strings['GroupAdmin'] = 'Администратор группы';
		$strings['Actions'] = 'Действия';
		$strings['CurrentPassword'] = 'Текущий пароль';
		$strings['NewPassword'] = 'Новый пароль';
		$strings['InvalidPassword'] = 'Текущий пароль введен неверно';
		$strings['PasswordChangedSuccessfully'] = 'Ваш пароль был успешно изменен';
		$strings['SignedInAs'] = 'Вы - ';
		$strings['NotSignedIn'] = 'Вы еще не вошли';
		$strings['ReservationTitle'] = 'Название съемки';
		$strings['ReservationDescription'] = 'Подробности';
		$strings['ResourceList'] = 'Следующее оборудование будет зарезервировано:';
		$strings['Accessories'] = 'Аксессуары:';
		$strings['ParticipantList'] = 'Список участников';
		$strings['InvitationList'] = 'Соглашения сторон: ';
		$strings['AccessoryName'] = 'Название аксессуара';
		$strings['QuantityAvailable'] = 'Доступное колличество';
		$strings['Resources'] = 'Оборудование';
		$strings['Participants'] = 'Участники';
		$strings['User'] = 'Пользователь';
		$strings['Resource'] = 'Оборудование';
		$strings['Status'] = 'Статус';
		$strings['Approve'] = 'Утвердить';
		$strings['Page'] = 'Страница';
		$strings['Rows'] = 'Строки';
		$strings['Unlimited'] = 'Неограничено';
		$strings['Email'] = 'Email';
		$strings['EmailAddress'] = 'Email';
		$strings['Phone'] = 'Телефон';
		$strings['Organization'] = 'Организация';
		$strings['Position'] = 'Должность';
		$strings['Language'] = 'Язык';
		$strings['Permissions'] = 'Полномочия';
		$strings['Reset'] = 'Сброс';
		$strings['FindGroup'] = 'Найти группу';
		$strings['Manage'] = 'Управление';
		$strings['None'] = 'Нет';
		$strings['AddToOutlook'] = 'Добавить в календарь';
		$strings['Done'] = 'Готово';
		$strings['RememberMe'] = 'Запомнить меня';
		$strings['FirstTimeUser?'] = 'Первый раз здесь?';
		$strings['CreateAnAccount'] = 'Создать учетную запись';
		$strings['ViewSchedule'] = 'Смотреть график';
		$strings['ForgotMyPassword'] = 'Я забыл свой пароль';
		$strings['YouWillBeEmailedANewPassword'] = 'Вам будет выслан новый случайно сгенерированный пароль';
		$strings['Close'] = 'Закрыть';
		$strings['ExportToCSV'] = 'Экспортировать в CSV';
		$strings['OK'] = 'OK';
		$strings['Working'] = 'В работе...';
		$strings['Login'] = 'Вход';
		$strings['AdditionalInformation'] = 'Дополнительная информация';
		$strings['AllFieldsAreRequired'] = 'заполнение всех полей обязательно';
		$strings['Optional'] = 'опции';
		$strings['YourProfileWasUpdated'] = 'Ваш профиль был обновлен';
		$strings['YourSettingsWereUpdated'] = 'Ваши настройки были обновлены';
		$strings['Register'] = 'Регистрация';
		$strings['SecurityCode'] = 'Секретный код';
		$strings['ReservationCreatedPreference'] = 'Когда я создаю резерв или резерв создан на мое имя';
		$strings['ReservationUpdatedPreference'] = 'Когда я обновляю резерв или резерв обновлен на мое имя';
		$strings['ReservationDeletedPreference'] = 'Когда я удаляю резерв или резевр удален на мое имя';
		$strings['ReservationApprovalPreference'] = 'Когда мой резерв, ожидающий проверку - утвержден';
		$strings['PreferenceSendEmail'] = 'Отправить сообщение на email';
		$strings['PreferenceNoEmail'] = 'Не уведомлять меня';
		$strings['ReservationCreated'] = 'Оборудование успешно забронировано!';
		$strings['ReservationUpdated'] = 'Ваш резерв был успешно обновлен!';
		$strings['ReservationRemoved'] = 'Резерв будет удален';
		$strings['YourReferenceNumber'] = 'Номер Вашего резерва %s';
		$strings['UpdatingReservation'] = 'Обновить резервирование';
		$strings['ChangeUser'] = 'Изменить пользователя';
		$strings['MoreResources'] = 'добавить еще';
		$strings['ReservationLength'] = 'Продолжительность резерва:';
		$strings['ParticipantList'] = 'Список участников';
		$strings['AddParticipants'] = 'Добавить участников';
		$strings['InviteOthers'] = 'Invite Others';
		$strings['AddResources'] = 'Добавить оборудование';
		$strings['AddAccessories'] = 'Добавить аксессуары';
		$strings['Accessory'] = 'Аксессуар';
		$strings['QuantityRequested'] = 'Требуемое количество';
		$strings['CreatingReservation'] = 'Создание резервирования';
		$strings['UpdatingReservation'] = 'Обновление резервирования';
		$strings['DeleteWarning'] = 'Это действие необратимо и безвозвратно!';
		$strings['DeleteAccessoryWarning'] = 'Удаление этого аксессуара удалит его из всех резервирований.';
		$strings['AddAccessory'] = 'Добавить аксессуар';
		$strings['AddBlackout'] = 'Добавить нерабочее время';
		$strings['AllResourcesOn'] = 'Все оборудование в ';
		$strings['Reason'] = 'Причина';
		$strings['BlackoutShowMe'] = 'Показывать мне конфликты бронирования';
		$strings['BlackoutDeleteConflicts'] = 'Удалять конфликты бронирования';
		$strings['Filter'] = 'Фильтр';
		$strings['Between'] = 'Интервал';
		$strings['CreatedBy'] = 'Создатель';
		$strings['BlackoutCreated'] = 'Blackout Created!';
		$strings['BlackoutNotCreated'] = 'Blackout could not be created!';
		$strings['BlackoutConflicts'] = 'There are conflicting blackout times';
		$strings['ReservationConflicts'] = 'Конфликт времени резервирования';
		$strings['UsersInGroup'] = 'Пользователи в этой группе';
		$strings['Browse'] = 'Выбрать';
		$strings['DeleteGroupWarning'] = 'Удаление этой группы приведет к удалению всех связанных разрешений оборудования.  Пользователи в этой группе могут потерять доступ к оборудованию.';
		$strings['WhatRolesApplyToThisGroup'] = 'Какую роль присвоить этой группе?';
		$strings['WhoCanManageThisGroup'] = 'Кто может управлять этой группой?';
		$strings['WhoCanManageThisSchedule'] = 'Кто может управлять этим расписанием?';
		$strings['AddGroup'] = 'Добавить группу';
		$strings['AllQuotas'] = 'Все квоты';
		$strings['QuotaReminder'] = 'Помните: Квоты применяются в соответствии с графиком\'ами часового пояса.';
		$strings['AllReservations'] = 'Все брони';
		$strings['PendingReservations'] = 'Резервирование в ожидании';
		$strings['Approving'] = 'Утверждение';
		$strings['MoveToSchedule'] = 'Переместить в расписание';
		$strings['DeleteResourceWarning'] = 'Удаление этого оборудования удалит все связанные данные, в том числе ';
		$strings['DeleteResourceWarningReservations'] = 'все прошедшие, текущие и будущие бронирования, ассоциированные с ним';
		$strings['DeleteResourceWarningPermissions'] = 'все назначенные разрешения';
		$strings['DeleteResourceWarningReassign'] = 'Пожалуйста, переназначьте все, что не должно быть удалено, прежде чем приступить';
		$strings['ScheduleLayout'] = 'Шаблон (все время %s)';
		$strings['ReservableTimeSlots'] = 'Временные отрезки для бронирования';
		$strings['BlockedTimeSlots'] = 'Блокировать время для бронирования';
		$strings['ThisIsTheDefaultSchedule'] = 'Это график по-умолчанию';
		$strings['DefaultScheduleCannotBeDeleted'] = 'График по-умолчанию не может быть удален';
		$strings['MakeDefault'] = 'По-умолчанию';
		$strings['BringDown'] = 'Bring Down';
		$strings['ChangeLayout'] = 'Изменение шаблона';
		$strings['AddSchedule'] = 'Добавить график';
		$strings['StartsOn'] = 'Начало';
		$strings['NumberOfDaysVisible'] = 'Чилсло дней доступности';
		$strings['UseSameLayoutAs'] = 'Использовать также как';
		$strings['Format'] = 'Формат';
		$strings['OptionalLabel'] = 'Дополнительное название';
		$strings['LayoutInstructions'] = 'Введите один период в одну строку.  Периоды должны быть созданы для всех 24-х часов, начиная и заканчивая с 00:00.';
		$strings['AddUser'] = 'Добавить пользователя';
		$strings['UserPermissionInfo'] = 'Фактический доступ к оборудованию может отличаться в зависимости от роли пользователя, группы и настройки разрешений';
		$strings['DeleteUserWarning'] = 'Удаление этого пользователя удалит все его прошлые, текущие и будущие брони.';
		$strings['AddAnnouncement'] = 'Добавить объявление';
		$strings['Announcement'] = 'Объявление';
		$strings['Priority'] = 'Приоритет';
		$strings['Reservable'] = 'Доступно';
		$strings['Unreservable'] = 'Запрещено';
		$strings['Reserved'] = 'Зарезервировано';
		$strings['MyReservation'] = 'Моя бронь';
		$strings['Pending'] = 'В ожидании';
		$strings['Past'] = 'Прошло';
		$strings['Restricted'] = 'Ограничено';
		$strings['ViewAll'] = 'Посмотреть все';
		$strings['MoveResourcesAndReservations'] = 'Move resources and reservations to';
		$strings['TurnOffSubscription'] = 'Отключить подписку на календарь';
		$strings['TurnOnSubscription'] = 'Разрешить подписку на этот календарь';
		$strings['SubscribeToCalendar'] = 'Подписаться на этот календарь';
		$strings['SubscriptionsAreDisabled'] = 'Администратор отключил подписку на этот календарь';
		$strings['NoResourceAdministratorLabel'] = '(Нет Администратора Оборудования)';
		$strings['WhoCanManageThisResource'] = 'Кто может управлять этим оборудованием?';
		$strings['ResourceAdministrator'] = 'Администратор Оборудования';
		$strings['Private'] = 'Private';
		$strings['Accept'] = 'Принять';
		$strings['Decline'] = 'Decline';
		$strings['ShowFullWeek'] = 'Показать полную неделю';
		$strings['CustomAttributes'] = 'Свои атрибуты';
		$strings['AddAttribute'] = 'Добавить атрибут';
		$strings['EditAttribute'] = 'Обновить атрибут';
		$strings['DisplayLabel'] = 'Отображаемое имя';
		$strings['Type'] = 'Тип';
		$strings['Required'] = 'Обязательно';
		$strings['ValidationExpression'] = 'Проверка выражения';
		$strings['PossibleValues'] = 'Возможные значения';
		$strings['SingleLineTextbox'] = 'Однострочное текстовое поле';
		$strings['MultiLineTextbox'] = 'Многострочное текстовое поле';
		$strings['Checkbox'] = 'Чекбокс';
		$strings['SelectList'] = 'Выбор из списка';
		$strings['CommaSeparated'] = 'разделенные запятой';
		$strings['Category'] = 'Категория';
		$strings['CategoryReservation'] = 'Резервирование';
		$strings['CategoryGroup'] = 'Группа';
		$strings['SortOrder'] = 'Сортировка';
		$strings['Title'] = 'Название съемки';
		$strings['AdditionalAttributes'] = 'Вам может понадобиться:';
		$strings['True'] = 'TRUE';
		$strings['False'] = 'FALSE';
		$strings['ForgotPasswordEmailSent'] = 'Письмо было отправлено по адресу с инструкцией по смене пароля';
		$strings['ActivationEmailSent'] = 'Вам были посланы инструкции по активации вашего аккаунта.';
		$strings['AccountActivationError'] = 'Извините, мы не можем активировать ваш аккаунт.';
		$strings['Attachments'] = 'Прикреплено';
		$strings['AttachFile'] = 'Прикрепить файл';
		$strings['Maximum'] = 'Максимум';
		$strings['NoScheduleAdministratorLabel'] = 'Нет администратора графика';
		$strings['ScheduleAdministrator'] = 'Администратор графика';
		$strings['Total'] = 'Всего';
		$strings['QuantityReserved'] = 'Количество зарезервированного';
		$strings['AllAccessories'] = 'Все аксессуары';
		$strings['GetReport'] = 'Получить отчет';
		$strings['NoResultsFound'] = 'Совпадений не найдено';
		$strings['SaveThisReport'] = 'Сохранить этот отчет';
		$strings['ReportSaved'] = 'Отчет сохранен!';
		$strings['EmailReport'] = 'Email Отчет';
		$strings['ReportSent'] = 'Отчет отправлен!';
		$strings['RunReport'] = 'Показать отчет';
		$strings['NoSavedReports'] = 'Вы не имеете сохраненных отчетов.';
		$strings['CurrentWeek'] = 'Текущая неделя';
		$strings['CurrentMonth'] = 'Текущий месяц';
		$strings['AllTime'] = 'Все время';
		$strings['FilterBy'] = 'Фильтр';
		$strings['Select'] = 'Выбрать';
		$strings['List'] = 'Список';
		$strings['TotalTime'] = 'Итоговое время';
		$strings['Count'] = 'Считать';
		$strings['Usage'] = 'Использование';
		$strings['AggregateBy'] = 'Aggregate By';
		$strings['Range'] = 'Диапазон';
		$strings['Choose'] = 'Выбрать';
		$strings['All'] = 'Все';
		$strings['ViewAsChart'] = 'Посмотреть диаграмму';
		$strings['ReservedResources'] = 'Зарезервированное оборудование';
		$strings['ReservedAccessories'] = 'Зарезервированные аксессуары';
		$strings['ResourceUsageTimeBooked'] = 'Использование оборудования - Время';
		$strings['ResourceUsageReservationCount'] = 'Использование оборудования - График';
		$strings['Top20UsersTimeBooked'] = 'Топ 20 пользователей - Время';
		$strings['Top20UsersReservationCount'] = 'Топ 20 пользователей - График';
		$strings['ConfigurationUpdated'] = 'Конфигурационный файл был обновлен';
		$strings['ConfigurationUiNotEnabled'] = 'Эта страница недоступна, потому что $conf[\'settings\'][\'pages\'][\'enable.configuration\'] установлен в false или отсутствует.';
		$strings['ConfigurationFileNotWritable'] = 'Файл конфигурации недоступен для записи. Пожалуйста, проверьте права на файл и повторите снова.';
		$strings['ConfigurationUpdateHelp'] = 'Обратитесь к разделу КОНФИГУРАЦИЯ <a target=_blank href=http://sklad.eurokino.tv/Web/help.php?ht=admin>Help File</a> для изучения документации по этим вопросам.';
		$strings['GeneralConfigSettings'] = 'Настройки';
		$strings['UseSameLayoutForAllDays'] = 'Использовать этот шаблон для всех дней';
		$strings['LayoutVariesByDay'] = 'Шаблон варьируется, в зависимости от дня';
		$strings['ManageReminders'] = 'Напоминания';
		$strings['ReminderUser'] = 'ID Пользователя';
		$strings['ReminderMessage'] = 'Сообщение';
		$strings['ReminderAddress'] = 'Адреса';
		$strings['ReminderSendtime'] = 'Время отправления';
		$strings['ReminderRefNumber'] = 'Номер резервирования';
		$strings['ReminderSendtimeDate'] = 'Дата напоминания';
		$strings['ReminderSendtimeTime'] = 'Время напоминания (HH:MM)';
		$strings['ReminderSendtimeAMPM'] = 'AM / PM';
		$strings['AddReminder'] = 'Добавить напоминание';
		$strings['DeleteReminderWarning'] = 'Вы уверены в этом?';
		$strings['NoReminders'] = 'У Вас нет предстоящих напоминаний.';
		$strings['Reminders'] = 'Напоминания';
		$strings['SendReminder'] = 'Послать напоминание за';
		$strings['minutes'] = 'минуты';
		$strings['hours'] = 'часы';
		$strings['days'] = 'дни';
		$strings['ReminderBeforeStart'] = 'до начала события';
		$strings['ReminderBeforeEnd'] = 'до окончания события';
		$strings['Logo'] = 'Логотип';
		$strings['CssFile'] = 'CSS файл';
		$strings['ThemeUploadSuccess'] = 'Ваши изменения были сохранены. Обновите страницу, чтобы изменения вступили в силу.';
		$strings['MakeDefaultSchedule'] = 'Сделать эту страницу по-умолчанию';
		$strings['DefaultScheduleSet'] = 'Это сейчас график по-умолчанию';
		$strings['FlipSchedule'] = 'Другой вариант отображения';
		$strings['Next'] = 'Дальше';
		$strings['Success'] = 'Успешно';
		$strings['Participant'] = 'Участник';
		// End Strings

		// Install
		$strings['InstallApplication'] = 'Установка Системы Планирования (MySQL only)';
		$strings['IncorrectInstallPassword'] = 'Извините, неправильный пароль.';
		$strings['SetInstallPassword'] = 'Вы должны создать пароль перед установкой Системы Планирования.';
		$strings['InstallPasswordInstructions'] = 'In %s please set %s to a password which is random and difficult to guess, then return to this page.<br/>You can use %s';
		$strings['NoUpgradeNeeded'] = 'Необходимые обновления отсутствуют. Запуск процесса установки удалит все существующие данные и установит новую копию Системы Планирования!';
		$strings['ProvideInstallPassword'] = 'Пожалуйста, введите установочный пароль.';
		$strings['InstallPasswordLocation'] = 'Это может быть изменено в %s в секции %s.';
		$strings['VerifyInstallSettings'] = 'Проверьте следующие настройки по-умолчанию, прежде чем продолжить. Или измените их в %s.';
		$strings['DatabaseName'] = 'Database Name';
		$strings['DatabaseUser'] = 'Database User';
		$strings['DatabaseHost'] = 'Database Host';
		$strings['DatabaseCredentials'] = 'Вы должны предоставить учетные данные пользователя MySQL с правами для создания баз данных. Если вы не знаете, обратитесь к администратору базы данных. Во многих случаях, root будет работать.';
		$strings['MySQLUser'] = 'MySQL User';
		$strings['InstallOptionsWarning'] = 'Следующие параметры могут не работать при установке на хостинге. Если Вы устанавливаете на хостинге, используйте MySQL wizard tools для следующих операций.';
		$strings['CreateDatabase'] = 'Создание базы данных';
		$strings['CreateDatabaseUser'] = 'Создание пользователя базы данных';
		$strings['PopulateExampleData'] = 'Импорт sample data. Создание Администратора: admin/password и Пользователя: user/password';
		$strings['DataWipeWarning'] = 'Внимание: эта операция удалит все существующие данные';
		$strings['RunInstallation'] = 'Запуск установки';
		$strings['UpgradeNotice'] = 'Вы обновляетесь из версии <b>%s</b> в версию <b>%s</b>';
		$strings['RunUpgrade'] = 'Запустить обновление';
		$strings['Executing'] = 'Выполнение';
		$strings['StatementFailed'] = 'Не удалось. Подробности:';
		$strings['SQLStatement'] = 'SQL Statement:';
		$strings['ErrorCode'] = 'Код Ошибки:';
		$strings['ErrorText'] = 'Текст Ошибки:';
		$strings['InstallationSuccess'] = 'Установка успешно завершена!';
		$strings['RegisterAdminUser'] = 'Зарегистрируйте администратора Системы Планирования. Это необходимо если Вы не импортировали sample data. Убедитесь, что $conf[\'settings\'][\'allow.self.registration\'] = \'true\' в Вашем %s файле.';
		$strings['LoginWithSampleAccounts'] = 'Если Вы импортировали sample data, тогда войдите с admin/password для Администратора или user/password для обычного пользователя.';
		$strings['InstalledVersion'] = 'Сейчас запущена версия %s Системы Планирования';
		$strings['InstallUpgradeConfig'] = 'Рекомендуется обновить Конфигурационный файл';
		$strings['InstallationFailure'] = 'Возникли проблемы с установкой.  Пожалуйста, исправьте их и повторите установку.';
		$strings['ConfigureApplication'] = 'Конфигурирование Системы Планирования';
		$strings['ConfigUpdateSuccess'] = 'Ваш Конфигурационный файл сейчас обновлен!';
		$strings['ConfigUpdateFailure'] = 'Мы не можем автоматически обновить ваш Конфигурационный файл. Пожалуйста, перезапишите содержимое config.php следующим:';
		// End Install

		// Errors
		$strings['LoginError'] = 'Имя пользователя и пароль не соответствуют';
		$strings['ReservationFailed'] = 'Нельзя забронировать';
		$strings['MinNoticeError'] = 'This reservation requires advance notice.  The earliest date and time that can be reserved is %s.';
		$strings['MaxNoticeError'] = 'Это резервирование не может быть сделано так рано.  Вы можете сделать этот резерв не ранее %s.';
		$strings['MinDurationError'] = 'Это резервирование должно длиться не менее %s.';
		$strings['MaxDurationError'] = 'Это резервирование не может длиться более %s.';
		$strings['ConflictingAccessoryDates'] = 'There are not enough of the following accessories:';
		$strings['NoResourcePermission'] = 'Вы не имеете разрешений на доступ к одному или более из запрашиваемого оборудования';
		$strings['ConflictingReservationDates'] = 'Конфликт бронирования с другой датой:';
		$strings['StartDateBeforeEndDateRule'] = 'Дата и время начала должны предшествовать дате и времени окончания';
		$strings['StartIsInPast'] = 'Дата и время начала не могут быть прошедшеми';
		$strings['EmailDisabled'] = 'Администратор Системы Планирования запретил уведомления по электронной почте';
		$strings['ValidLayoutRequired'] = 'Временные интервалы должны быть обеспечены для всех 24 часов суток, начиная и заканчивая в 00:00.';
		$strings['CustomAttributeErrors'] = 'Проблемы с дополнительными атрибутами:';
		$strings['CustomAttributeRequired'] = '%s обязательное поле';
		$strings['CustomAttributeInvalid'] = 'The value provided for %s is invalid';
		$strings['AttachmentLoadingError'] = 'Извините, проблема загрузки требуемого файла.';
		$strings['InvalidAttachmentExtension'] = 'Вы можете загружать только файлы типа: %s';
		$strings['InvalidStartSlot'] = 'The start date and time requested is not valid.';
		$strings['InvalidEndSlot'] = 'The end date and time requested is not valid.';
		$strings['MaxParticipantsError'] = '%s can only support %s participants.';
		$strings['ReservationCriticalError'] = 'Это была критическая ошибка сохранения Вашего резервирования. Если это повторится, свяжитесь с Администратором Системы Планирования.';
		$strings['InvalidStartReminderTime'] = 'The start reminder time is not valid.';
		$strings['InvalidEndReminderTime'] = 'The end reminder time is not valid.';
		// End Errors

		// Page Titles
		$strings['CreateReservation'] = 'Забронировать';
		$strings['EditReservation'] = 'Редактировать бронирование';
		$strings['LogIn'] = 'Вход';
		$strings['ManageReservations'] = 'Управление бронированием';
		$strings['AwaitingActivation'] = 'Ожидающие активации';
		$strings['PendingApproval'] = 'Ожидающие утверждения';
		$strings['ManageSchedules'] = 'Управление графиками';
		$strings['ManageResources'] = 'Управление оборудованием';
		$strings['ManageAccessories'] = 'Управление аксессуарами';
		$strings['ManageUsers'] = 'Управление пользователями';
		$strings['ManageGroups'] = 'Управление группами';
		$strings['ManageQuotas'] = 'Управление квотами';
		$strings['ManageBlackouts'] = 'Управление нерабочими часами';
		$strings['MyDashboard'] = 'Информация';
		$strings['ServerSettings'] = 'Настройки сервера';
		$strings['Dashboard'] = 'Информация';
		$strings['Help'] = 'Помощь';
		$strings['Administration'] = 'Administration';
		$strings['About'] = 'About';
		$strings['Bookings'] = 'Резервирование';
		$strings['Schedule'] = 'График';
		$strings['Reservations'] = 'Брони';
		$strings['Account'] = 'Account';
		$strings['EditProfile'] = 'Edit My Profile';
		$strings['FindAnOpening'] = 'Find An Opening';
		$strings['OpenInvitations'] = 'Open Invitations';
		$strings['MyCalendar'] = 'Мой календарь';
		$strings['ResourceCalendar'] = 'Календарь оборудования';
		$strings['Reservation'] = 'New Reservation';
		$strings['Install'] = 'Installation';
		$strings['ChangePassword'] = 'Изменить пароль';
		$strings['MyAccount'] = 'Профиль';
		$strings['Profile'] = 'Профиль';
		$strings['ApplicationManagement'] = 'Управление приложением';
		$strings['ForgotPassword'] = 'Я забыл(а) свой пароль';
		$strings['NotificationPreferences'] = 'Настройка уведомлений';
		$strings['ManageAnnouncements'] = 'Объявления';
		$strings['Responsibilities'] = 'Обязанности';
		$strings['GroupReservations'] = 'Резервирования группы';
		$strings['ResourceReservations'] = 'Resource Reservations';
		$strings['Customization'] = 'Индивидуальные настройки';
		$strings['Attributes'] = 'Атрибуты';
		$strings['AccountActivation'] = 'Активация аккаунта';
		$strings['ScheduleReservations'] = 'График резервов';
		$strings['Reports'] = 'Отчеты';
		$strings['GenerateReport'] = 'Создать новый отчет';
		$strings['MySavedReports'] = 'Мои сохраненные отчеты';
		$strings['CommonReports'] = 'Общие отчеты';
		$strings['ViewDay'] = 'Смотреть день';
		$strings['Group'] = 'Группа';
		$strings['ManageConfiguration'] = 'Настройка приложения';
		$strings['LookAndFeel'] = 'Внешний вид';
		// End Page Titles

		// Day representations
		$strings['DaySundaySingle'] = 'Воск';
		$strings['DayMondaySingle'] = 'Пон';
		$strings['DayTuesdaySingle'] = 'Вт';
		$strings['DayWednesdaySingle'] = 'Ср';
		$strings['DayThursdaySingle'] = 'Чет';
		$strings['DayFridaySingle'] = 'Пят';
		$strings['DaySaturdaySingle'] = 'Суб';

		$strings['DaySundayAbbr'] = 'Воск';
		$strings['DayMondayAbbr'] = 'Пон';
		$strings['DayTuesdayAbbr'] = 'Втор';
		$strings['DayWednesdayAbbr'] = 'Среда';
		$strings['DayThursdayAbbr'] = 'Чет';
		$strings['DayFridayAbbr'] = 'Пят';
		$strings['DaySaturdayAbbr'] = 'Суб';
		// End Day representations

		// Email Subjects
		$strings['ReservationApprovedSubject'] = 'Ваше бронирование было одобрено';
		$strings['ReservationCreatedSubject'] = 'Ваше бронирование было создано';
		$strings['ReservationUpdatedSubject'] = 'Ваше бронирование было обновлено';
		$strings['ReservationDeletedSubject'] = 'Ваше бронирование было удалено';
		$strings['ReservationCreatedAdminSubject'] = 'Уведомление: Бронирование было создано';
		$strings['ReservationUpdatedAdminSubject'] = 'Уведомление: Бронирование было обновлено';
		$strings['ReservationDeleteAdminSubject'] = 'Уведомление: Бронирование было удалено';
		$strings['ParticipantAddedSubject'] = 'Уведомление об участии в бронировании';
		$strings['ParticipantDeletedSubject'] = 'Бронирование удалено';
		$strings['InviteeAddedSubject'] = 'Приглашение к бронированию';
		$strings['ResetPassword'] = 'Требуется сброс пароля';
		$strings['ActivateYourAccount'] = 'Активация пользователя';
		$strings['ReportSubject'] = 'Ваш запрос обработан (%s)';
		$strings['ReservationStartingSoonSubject'] = 'Резерв для %s скоро начнется';
		$strings['ReservationEndingSoonSubject'] = 'Резерв для %s скоро закончится';
		// End Email Subjects

		$this->Strings = $strings;

		return $this->Strings;
	}

	/**
	 * @return array
	 */
	protected function _LoadDays()
	{
		$days = array();

		/***
		DAY NAMES
		All of these arrays MUST start with Sunday as the first element
		and go through the seven day week, ending on Saturday
		 ***/
		// The full day name
		$days['full'] = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота');
		// The three letter abbreviation
		$days['abbr'] = array('Воск', 'Пон', 'Втор', 'Сре', 'Чет', 'Пят', 'Суб');
		// The two letter abbreviation
		$days['two'] = array('Во', 'По', 'Вт', 'Ср', 'Че', 'Пя', 'Су');
		// The one letter abbreviation
		$days['letter'] = array('Во', 'По', 'Вт', 'Ср', 'Че', 'Пя', 'Су');

		$this->Days = $days;

		return $this->Days;
	}

	/**
	 * @return array
	 */
	protected function _LoadMonths()
	{
		$months = array();

		/***
		MONTH NAMES
		All of these arrays MUST start with January as the first element
		and go through the twelve months of the year, ending on December
		 ***/
		// The full month name
		$months['full'] = array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
		// The three letter month name
		$months['abbr'] = array('Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек');

		$this->Months = $months;

		return $this->Months;
	}

	/**
	 * @return array
	 */
	protected function _LoadLetters()
	{
		$this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

		return $this->Letters;
	}

	protected function _GetHtmlLangCode()
	{
		return 'en';
	}
}

?>
