{*
Copyright 2013 Nick Korbel

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
*}
{include file='..\..\tpl\Email\emailheader.tpl'}
<br/>
<p style="padding-left: 50px;">Ваше бронирование скоро начнется.<br/>
	Детали бронирования:
	<br/>
	<br/>
	Начало: {formatdate date=$StartDate key=reservation_email}<br/>
	Окончание: {formatdate date=$EndDate key=reservation_email}<br/>
	Оборудование: {$ResourceName}<br/>
	Название проекта: {$Title}<br/>
	Описание: {$Description|nl2br}<br/>
<br/>
<a href="{$ScriptUrl}/{$ReservationUrl}">Посмотреть это бронирование</a> |
<a href="{$ScriptUrl}/{$ICalUrl}">Добавить в календарь</a> |
<a href="{$ScriptUrl}">Войти в СИСТЕМУ ПЛАНИРОВАНИЯ</a>
<br/></p>
{include file='..\..\tpl\Email\emailfooter.tpl'}