{*
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
*}
{include file='..\..\tpl\Email\emailheader.tpl'}
	<br/>
<p style="padding-left: 50px;">	ДЕТАЛИ БРОНИРОВАНИЯ:
	<br/>
	<br/>
	<b><u>Пользователь</u></b>: {$UserName}<br/>
	<b><u>Начало</u></b>: {formatdate date=$StartDate key=reservation_email}<br/>
	<b><u>Окончание</u></b>: {formatdate date=$EndDate key=reservation_email}<br/>
	<b><u>Название проекта</b></u>: {$Title}<br/>
	<b><u>Описание</b></u>: {$Description|nl2br}<br/>
<br/>	
	{if $ResourceNames|count > 1}
		<b><u>Оборудование</b></u>:<br/>
		{foreach from=$ResourceNames item=resourceName}
			{$resourceName}<br/>
		{/foreach}
		{else}
		<b><u>Оборудование</b></u>: {$ResourceName}<br/>
	{/if}
<!--	{if $Accessories|count > 0}
		<br/>Аксессуары:<br/>
		{foreach from=$Accessories item=accessory}
			({$accessory->QuantityReserved}) {$accessory->Name}<br/>
		{/foreach}
	{/if} -->
	{if count($RepeatDates) gt 0}
		<br/>
		Следующие даты были удалены:
		<br/>
	{/if}
	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}
	<br/>
	<a href="{$ScriptUrl}">Войти в Систему Планирования</a>
	<br/></p>
{include file='..\..\tpl\Email\emailfooter.tpl'}