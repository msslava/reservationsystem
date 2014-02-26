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
<p style="padding-left: 50px;">	Детали бронирования: 
	<br/>
	<br/>
	<b><u>Пользователь</b></u>: {$UserName}<br/>
	<b><u>Начало</b></u>: {formatdate date=$StartDate key=reservation_email}<br/>
	<b><u>Окончание</b></u>: {formatdate date=$EndDate key=reservation_email}<br/>
	<b><u>Название проекта</b></u>: {$Title}<br/>
	<b><u>Описание</b></u>: {$Description}<br/>
	<br/>
	{if $ResourceNames|count > 1}
		<b><u>Оборудование</b></u>:<br/>
		{foreach from=$ResourceNames item=resourceName}
			{$resourceName}<br/>
		{/foreach}
		{else}
		<b><u>Оборудование</b></u>: {$ResourceName}<br/>
	{/if}
	{if $Accessories|count > 0}
		<br/><b><u>Аксессуары</b></u>:<br/>
		{foreach from=$Accessories item=accessory}
			({$accessory->QuantityReserved}) {$accessory->Name}<br/>
		{/foreach}
	{/if}
	{*Custom Attribute output with manually inserted labels*}
	<br/><b><u>Дополнительно</u></b>:<br/>
	{foreach from=$CustomAttributes key=k item=customAtt name=row}
		{if $smarty.foreach.row.index == 0}
			Аккумуляторы для Sony FS700: {$customAtt ->Value}<br/>
		{elseif $smarty.foreach.row.index == 1}
			Аккумуляторы для Canon D60: {$customAtt ->Value}<br/>
		{elseif $smarty.foreach.row.index == 2}
			Аккумуляторы для GoPro: {$customAtt ->Value}<br/>
		{elseif $smarty.foreach.row.index == 3}
			Аккумуляторы AA: {$customAtt ->Value}<br/>
			<br/>	
		{elseif $smarty.foreach.row.index == 4}
			<b><u>Предварительное резервирование</b></u>: {$customAtt ->Value}<br/>
		{/if}			
	{/foreach}
	{if count($RepeatDates) gt 0}
		<br/>
		Бронирование запланировано на следующие даты:
		<br/>
	{/if}
	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}
	{if $RequiresApproval}
		<br/>
		One or more of the resources reserved require approval before usage.  Please ensure that this reservation request is approved or rejected.
	{/if}
		<br/>
	<a href="{$ScriptUrl}/{$ReservationUrl}">Смотреть этот резерв</a> | <a href="{$ScriptUrl}">Войти в Систему Планирования</a>
		<br/></p>
{include file='..\..\tpl\Email\emailfooter.tpl'}