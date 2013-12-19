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
		$dates['calendar_dates'] = 'd/M';

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
		$strings['Remove'] = 'Remove';
		$strings['Delete'] = 'Удалить';
		$strings['Update'] = 'Обновить';
		$strings['Cancel'] = 'Отменить';
		$strings['Add'] = 'Добавить';
		$strings['Name'] = 'Имя';
		$strings['Yes'] = 'Да';
		$strings['No'] = 'Нет';
		$strings['FirstNameRequired'] = 'First name is required.';
		$strings['LastNameRequired'] = 'Last name is required.';
		$strings['PwMustMatch'] = 'Password confirmation must match password.';
		$strings['PwComplexity'] = 'Пароль должен содержать 6 знаков включая буквы, цифры и символы.';
		$strings['ValidEmailRequired'] = 'A valid email address is required.';
		$strings['UniqueEmailRequired'] = 'That email address is already registered.';
		$strings['UniqueUsernameRequired'] = 'That user name is already registered.';
		$strings['UserNameRequired'] = 'User name is required.';
		$strings['CaptchaMustMatch'] = 'Please enter the letters from security image exactly as shown.';
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
		$strings['InsufficientPermissionsError'] = 'You do not have permission to access this resource';
		$strings['MissingReservationResourceError'] = 'A resource was not selected';
		$strings['MissingReservationScheduleError'] = 'A schedule was not selected';
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
		$strings['repeatDayOfMonth'] = 'day of month';
		$strings['repeatDayOfWeek'] = 'day of week';
		$strings['RepeatUntilPrompt'] = 'Until';
		$strings['RepeatEveryPrompt'] = 'Every';
		$strings['RepeatDaysPrompt'] = 'On';
		$strings['CreateReservationHeading'] = 'Создать новый резерв';
		$strings['EditReservationHeading'] = 'Редактирование резерва %s';
		$strings['ViewReservationHeading'] = 'Просмотр резерва %s';
		$strings['ReservationErrors'] = 'Изменить резерв';
		$strings['Create'] = 'Создать';
		$strings['ThisInstance'] = 'Only This Instance';
		$strings['AllInstances'] = 'All Instances';
		$strings['FutureInstances'] = 'Future Instances';
		$strings['Print'] = 'Распечатать';
		$strings['ShowHideNavigation'] = 'Show/Hide Navigation';
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
		$strings['ResourceMinLength'] = 'Reservations must last at least %s';
		$strings['ResourceMinLengthNone'] = 'Минимальная продолжительность бронирования не установлена';
		$strings['ResourceMaxLength'] = 'Reservations cannot last more than %s';
		$strings['ResourceMaxLengthNone'] = 'Максимальная продолжительность бронирования не установлена';
		$strings['ResourceRequiresApproval'] = 'Reservations must be approved';
		$strings['ResourceRequiresApprovalNone'] = 'Бронирование не требует подтверждения';
		$strings['ResourcePermissionAutoGranted'] = 'Полномочия предоставляются автоматически';
		$strings['ResourcePermissionNotAutoGranted'] = 'Permission is not automatically granted';
		$strings['ResourceMinNotice'] = 'Reservations must be made at least %s prior to start time';
		$strings['ResourceMinNoticeNone'] = 'Бронирование может быть сделано с текущего времени';
		$strings['ResourceMaxNotice'] = 'Reservations must not end more than %s from the current time';
		$strings['ResourceMaxNoticeNone'] = 'Бронирование может быть завершено в любой момент';
		$strings['ResourceAllowMultiDay'] = 'Бронировать можно на несколько дней вперед';
		$strings['ResourceNotAllowMultiDay'] = 'Reservations cannot be made across days';
		$strings['ResourceCapacity'] = 'Это оборудование может использовать %s человек';
		$strings['ResourceCapacityNone'] = 'Оборудование не имеет лимита по количеству';
		$strings['AddNewResource'] = 'Добавить новое оборудование';
		$strings['AddNewUser'] = 'Добавить нового пользователя';
		$strings['AddUser'] = 'Добавить пользователя';
		$strings['Schedule'] = 'График';
		$strings['AddResource'] = 'Добавить оборудование';
		$strings['Capacity'] = 'Количество';
		$strings['Access'] = 'Access';
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
		$strings['Members'] = 'Members';
		$strings['QuickSlotCreation'] = 'Create slots every %s minutes between %s and %s';
		$strings['ApplyUpdatesTo'] = 'Apply Updates To';
		$strings['CancelParticipation'] = 'Cancel Participation';
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
		$strings['InvitationList'] = 'Invitees';
		$strings['AccessoryName'] = 'Accessory Name';
		$strings['QuantityAvailable'] = 'Quantity Available';
		$strings['Resources'] = 'Оборудование';
		$strings['Participants'] = 'Участники';
		$strings['User'] = 'Пользователь';
		$strings['Resource'] = 'Оборудование';
		$strings['Status'] = 'Статус';
		$strings['Approve'] = 'Утвердить';
		$strings['Page'] = 'Страница';
		$strings['Rows'] = 'Строки';
		$strings['Unlimited'] = 'Unlimited';
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
		$strings['ForgotMyPassword'] = 'Я забыл свой пароль (Я - Маша Растеряша)';
		$strings['YouWillBeEmailedANewPassword'] = 'Вам будет выслан новый случайно сгенерированный пароль';
		$strings['Close'] = 'Закрыть';
		$strings['ExportToCSV'] = 'Экспортировать в CSV';
		$strings['OK'] = 'OK';
		$strings['Working'] = 'Working';
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
		$strings['UpdatingReservation'] = 'Updating reservation';
		$strings['ChangeUser'] = 'Change User';
		$strings['MoreResources'] = 'добавить еще';
		$strings['ReservationLength'] = 'Продолжительность резерва:';
		$strings['ParticipantList'] = 'Список участников';
		$strings['AddParticipants'] = 'Добавить участников';
		$strings['InviteOthers'] = 'Invite Others';
		$strings['AddResources'] = 'Добавить оборудование';
		$strings['AddAccessories'] = 'Добавить аксессуары';
		$strings['Accessory'] = 'Аксессуар';
		$strings['QuantityRequested'] = 'Quantity Requested';
		$strings['CreatingReservation'] = 'Creating Reservation';
		$strings['UpdatingReservation'] = 'Updating Reservation';
		$strings['DeleteWarning'] = 'Это действие необратимо и безвозвратно!';
		$strings['DeleteAccessoryWarning'] = 'Deleting this accessory will remove it from all reservations.';
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
		$strings['ReservationConflicts'] = 'There are conflicting reservations times';
		$strings['UsersInGroup'] = 'Users in this group';
		$strings['Browse'] = 'Browse';
		$strings['DeleteGroupWarning'] = 'Deleting this group will remove all associated resource permissions.  Users in this group may lose access to resources.';
		$strings['WhatRolesApplyToThisGroup'] = 'Which roles apply to this group?';
		$strings['WhoCanManageThisGroup'] = 'Who can manage this group?';
		$strings['WhoCanManageThisSchedule'] = 'Who can manage this schedule?';
		$strings['AddGroup'] = 'Добавить группу';
		$strings['AllQuotas'] = 'Все квоты';
		$strings['QuotaReminder'] = 'Помните: Квоты применяются в соответствии с графиком\'ами часового пояса.';
		$strings['AllReservations'] = 'Все брони';
		$strings['PendingReservations'] = 'Резервирование в ожидании';
		$strings['Approving'] = 'Approving';
		$strings['MoveToSchedule'] = 'Move to schedule';
		$strings['DeleteResourceWarning'] = 'Deleting this resource will delete all associated data, including';
		$strings['DeleteResourceWarningReservations'] = 'all past, current and future reservations associated with it';
		$strings['DeleteResourceWarningPermissions'] = 'all permission assignments';
		$strings['DeleteResourceWarningReassign'] = 'Please reassign anything that you do not want to be deleted before proceeding';
		$strings['ScheduleLayout'] = 'Макет (все время %s)';
		$strings['ReservableTimeSlots'] = 'Временные отрезки для бронирования';
		$strings['BlockedTimeSlots'] = 'Блокировать время для бронирования';
		$strings['ThisIsTheDefaultSchedule'] = 'Это график по-умолчанию';
		$strings['DefaultScheduleCannotBeDeleted'] = 'График по-умолчанию не может быть удален';
		$strings['MakeDefault'] = 'Make Default';
		$strings['BringDown'] = 'Bring Down';
		$strings['ChangeLayout'] = 'Изменение макета';
		$strings['AddSchedule'] = 'Добавить график';
		$strings['StartsOn'] = 'Начало';
		$strings['NumberOfDaysVisible'] = 'Чилсло дней доступности';
		$strings['UseSameLayoutAs'] = 'Использовать также как';
		$strings['Format'] = 'Format';
		$strings['OptionalLabel'] = 'Optional Label';
		$strings['LayoutInstructions'] = 'Enter one slot per line.  Slots must be provided for all 24 hours of the day beginning and ending at 12:00 AM.';
		$strings['AddUser'] = 'Добавить пользователя';
		$strings['UserPermissionInfo'] = 'Actual access to resource may be different depending on user role, group permissions, or external permission settings';
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
		$strings['SubscribeToCalendar'] = 'Subscribe to this Calendar';
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
		$strings['SingleLineTextbox'] = 'Single Line Textbox';
		$strings['MultiLineTextbox'] = 'Multiple Line Textbox';
		$strings['Checkbox'] = 'Checkbox';
		$strings['SelectList'] = 'Select List';
		$strings['CommaSeparated'] = 'comma separated';
		$strings['Category'] = 'Category';
		$strings['CategoryReservation'] = 'Резервирование';
		$strings['CategoryGroup'] = 'Группа';
		$strings['SortOrder'] = 'Сортировка';
		$strings['Title'] = 'Название съемки';
		$strings['AdditionalAttributes'] = 'Дополнительные параметры';
		$strings['True'] = 'True';
		$strings['False'] = 'False';
		$strings['ForgotPasswordEmailSent'] = 'Письмо было отправлено по адресу с инструкцией по смене пароля';
		$strings['ActivationEmailSent'] = 'Вам были посланы инструкции по активации вашего аккаунта.';
		$strings['AccountActivationError'] = 'Извините, мы не можем активировать ваш аккаунт.';
		$strings['Attachments'] = 'Прикреплено';
		$strings['AttachFile'] = 'Прикрепить файл';
		$strings['Maximum'] = 'max';
		$strings['NoScheduleAdministratorLabel'] = 'Нет администратора графика';
		$strings['ScheduleAdministrator'] = 'Администратор графика';
		$strings['Total'] = 'Total';
		$strings['QuantityReserved'] = 'Quantity Reserved';
		$strings['AllAccessories'] = 'All Accessories';
		$strings['GetReport'] = 'Получить отчет';
		$strings['NoResultsFound'] = 'Совпадений не найдено';
		$strings['SaveThisReport'] = 'Save This Report';
		$strings['ReportSaved'] = 'Report Saved!';
		$strings['EmailReport'] = 'Email Report';
		$strings['ReportSent'] = 'Report Sent!';
		$strings['RunReport'] = 'Run Report';
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
		$strings['ViewAsChart'] = 'View As Chart';
		$strings['ReservedResources'] = 'Зарезервированное оборудование';
		$strings['ReservedAccessories'] = 'Зарезервированные аксессуары';
		$strings['ResourceUsageTimeBooked'] = 'Использование оборудования - Время';
		$strings['ResourceUsageReservationCount'] = 'Использование оборудования - График';
		$strings['Top20UsersTimeBooked'] = 'Топ 20 пользователей - Время';
		$strings['Top20UsersReservationCount'] = 'Топ 20 пользователей - График';
		$strings['ConfigurationUpdated'] = 'The configuration file was updated';
		$strings['ConfigurationUiNotEnabled'] = 'This page cannot be accessed because $conf[\'settings\'][\'pages\'][\'enable.configuration\'] is set to false or missing.';
		$strings['ConfigurationFileNotWritable'] = 'The config file is not writable. Please check the permissions of this file and try again.';
		$strings['ConfigurationUpdateHelp'] = 'Обратитесь к разделу КОНФИГУРАЦИЯ <a target=_blank href=http://localhost/reservationsystem/Web/help.php?ht=admin>Help File</a> для изучения документации по этим вопросам.';
		$strings['GeneralConfigSettings'] = 'settings';
		$strings['UseSameLayoutForAllDays'] = 'Use the same layout for all days';
		$strings['LayoutVariesByDay'] = 'Layout varies by day';
		$strings['ManageReminders'] = 'Reminders';
		$strings['ReminderUser'] = 'User ID';
		$strings['ReminderMessage'] = 'Message';
		$strings['ReminderAddress'] = 'Addresses';
		$strings['ReminderSendtime'] = 'Time To Send';
		$strings['ReminderRefNumber'] = 'Reservation Reference Number';
		$strings['ReminderSendtimeDate'] = 'Date of Reminder';
		$strings['ReminderSendtimeTime'] = 'Time of Reminder (HH:MM)';
		$strings['ReminderSendtimeAMPM'] = 'AM / PM';
		$strings['AddReminder'] = 'Add Reminder';
		$strings['DeleteReminderWarning'] = 'You sure about this?';
		$strings['NoReminders'] = 'You have no upcoming reminders.';
		$strings['Reminders'] = 'Reminders';
		$strings['SendReminder'] = 'Послать напоминание за';
		$strings['minutes'] = 'минуты';
		$strings['hours'] = 'часы';
		$strings['days'] = 'дни';
		$strings['ReminderBeforeStart'] = 'до начала события';
		$strings['ReminderBeforeEnd'] = 'до окончания события';
		$strings['Logo'] = 'Логотип';
		$strings['CssFile'] = 'CSS File';
		$strings['ThemeUploadSuccess'] = 'Your changes have been saved. Refresh the page for changes to take effect.';
		$strings['MakeDefaultSchedule'] = 'Сделать эту страницу по-умолчанию';
		$strings['DefaultScheduleSet'] = 'Это сейчас график по-умолчанию';
		$strings['FlipSchedule'] = 'Другой вариант отображения';
		$strings['Next'] = 'Next';
		$strings['Success'] = 'Success';
		$strings['Participant'] = 'Участник';
		// End Strings

		// Install
		$strings['InstallApplication'] = 'Install phpScheduleIt (MySQL only)';
		$strings['IncorrectInstallPassword'] = 'Sorry, that password was incorrect.';
		$strings['SetInstallPassword'] = 'You must set an install password before the installation can be run.';
		$strings['InstallPasswordInstructions'] = 'In %s please set %s to a password which is random and difficult to guess, then return to this page.<br/>You can use %s';
		$strings['NoUpgradeNeeded'] = 'There is no upgrade needed. Running the installation process will delete all existing data and install a new copy of phpScheduleIt!';
		$strings['ProvideInstallPassword'] = 'Please provide your installation password.';
		$strings['InstallPasswordLocation'] = 'This can be found at %s in %s.';
		$strings['VerifyInstallSettings'] = 'Verify the following default settings before continuing. Or you can change them in %s.';
		$strings['DatabaseName'] = 'Database Name';
		$strings['DatabaseUser'] = 'Database User';
		$strings['DatabaseHost'] = 'Database Host';
		$strings['DatabaseCredentials'] = 'You must provide credentials of a MySQL user who has privileges to create databases. If you do not know, contact your database admin. In many cases, root will work.';
		$strings['MySQLUser'] = 'MySQL User';
		$strings['InstallOptionsWarning'] = 'The following options will probably not work in a hosted environment. If you are installing in a hosted environment, use the MySQL wizard tools to complete these steps.';
		$strings['CreateDatabase'] = 'Create the database';
		$strings['CreateDatabaseUser'] = 'Create the database user';
		$strings['PopulateExampleData'] = 'Import sample data. Creates admin account: admin/password and user account: user/password';
		$strings['DataWipeWarning'] = 'Warning: This will delete any existing data';
		$strings['RunInstallation'] = 'Run Installation';
		$strings['UpgradeNotice'] = 'You are upgrading from version <b>%s</b> to version <b>%s</b>';
		$strings['RunUpgrade'] = 'Run Upgrade';
		$strings['Executing'] = 'Executing';
		$strings['StatementFailed'] = 'Failed. Details:';
		$strings['SQLStatement'] = 'SQL Statement:';
		$strings['ErrorCode'] = 'Error Code:';
		$strings['ErrorText'] = 'Error Text:';
		$strings['InstallationSuccess'] = 'Installation completed successfully!';
		$strings['RegisterAdminUser'] = 'Register your admin user. This is required if you did not import the sample data. Ensure that $conf[\'settings\'][\'allow.self.registration\'] = \'true\' in your %s file.';
		$strings['LoginWithSampleAccounts'] = 'If you imported the sample data, you can log in with admin/password for admin user or user/password for basic user.';
		$strings['InstalledVersion'] = 'You are now running version %s of phpScheduleIt';
		$strings['InstallUpgradeConfig'] = 'It is recommended to upgrade your config file';
		$strings['InstallationFailure'] = 'There were problems with the installation.  Please correct them and retry the installation.';
		$strings['ConfigureApplication'] = 'Configure phpScheduleIt';
		$strings['ConfigUpdateSuccess'] = 'Your config file is now up to date!';
		$strings['ConfigUpdateFailure'] = 'We could not automatically update your config file. Please overwrite the contents of config.php with the following:';
		// End Install

		// Errors
		$strings['LoginError'] = 'Имя пользователя и пароль не соответствуют';
		$strings['ReservationFailed'] = 'Нельзя забронировать';
		$strings['MinNoticeError'] = 'This reservation requires advance notice.  The earliest date and time that can be reserved is %s.';
		$strings['MaxNoticeError'] = 'This reservation cannot be made this far in the future.  The latest date and time that can be reserved is %s.';
		$strings['MinDurationError'] = 'This reservation must last at least %s.';
		$strings['MaxDurationError'] = 'This reservation cannot last longer than %s.';
		$strings['ConflictingAccessoryDates'] = 'There are not enough of the following accessories:';
		$strings['NoResourcePermission'] = 'You do not have permission to access one or more of the requested resources';
		$strings['ConflictingReservationDates'] = 'Конфликт бронирования с другой датой:';
		$strings['StartDateBeforeEndDateRule'] = 'The start date and time must be before the end date and time';
		$strings['StartIsInPast'] = 'The start date and time cannot be in the past';
		$strings['EmailDisabled'] = 'The administrator has disabled email notifications';
		$strings['ValidLayoutRequired'] = 'Slots must be provided for all 24 hours of the day beginning and ending at 12:00 AM.';
		$strings['CustomAttributeErrors'] = 'Проблемы с дополнительными атрибутами:';
		$strings['CustomAttributeRequired'] = '%s обязательное поле';
		$strings['CustomAttributeInvalid'] = 'The value provided for %s is invalid';
		$strings['AttachmentLoadingError'] = 'Sorry, there was a problem loading the requested file.';
		$strings['InvalidAttachmentExtension'] = 'You can only upload files of type: %s';
		$strings['InvalidStartSlot'] = 'The start date and time requested is not valid.';
		$strings['InvalidEndSlot'] = 'The end date and time requested is not valid.';
		$strings['MaxParticipantsError'] = '%s can only support %s participants.';
		$strings['ReservationCriticalError'] = 'There was a critical error saving your reservation. If this continues, contact your system administrator.';
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
		$strings['Responsibilities'] = 'Responsibilities';
		$strings['GroupReservations'] = 'Group Reservations';
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
		$strings['DaySundaySingle'] = 'В';
		$strings['DayMondaySingle'] = 'Пон';
		$strings['DayTuesdaySingle'] = 'В';
		$strings['DayWednesdaySingle'] = 'Ср';
		$strings['DayThursdaySingle'] = 'Ч';
		$strings['DayFridaySingle'] = 'Пят';
		$strings['DaySaturdaySingle'] = 'Су';

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
		$strings['ReportSubject'] = 'Your Requested Report (%s)';
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
		$days['two'] = array('В', 'По', 'Вт', 'Ср', 'Че', 'Пя', 'Су');
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