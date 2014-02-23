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
<p style="padding-left: 50px;">Бронирование оборудования скоро завершится.<br/>
	Детали бронирования:
	<br/>
	<br/>
	<b><u>Начало</b></u>: {formatdate date=$StartDate key=reservation_email}<br/>
	<b><u>Окончание</b></u>: {formatdate date=$EndDate key=reservation_email}<br/>
	<b><u>Оборудование</b></u>: {$ResourceName}<br/>
	<b><u>Название</b></u>: {$Title}<br/>
	<b><u>Описание</b></u>: {$Description|nl2br}<br/>
<br/>
<a href="{$ScriptUrl}/{$ReservationUrl}">Посмотреть этот резевр</a> |
<a href="{$ScriptUrl}/{$ICalUrl}">Добавить в календарь</a> |
<a href="{$ScriptUrl}">Войти в Систему Планирования</a>
<br/></p>
{include file='..\..\tpl\Email\emailfooter.tpl'}