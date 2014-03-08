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
	<b><u>Начало</u></b>: {formatdate date=$StartDate key=reservation_email}<br/>
	<b><u>Окончание</u></b>: {formatdate date=$EndDate key=reservation_email}<br/>
	<b><u>Название проекта</u></b>: {$Title}<br/>
	<b><u>Описание</u></b>: {$Description|nl2br}<br/>
	<br/>
	{if $ResourceNames|count > 1}
		<b><u>Оборудование</u></b>:<br/>
		{foreach from=$ResourceNames item=resourceName}
			{$resourceName}<br/>
		{/foreach}
		{else}
		<b><u>Оборудование</u></b>: {$ResourceName}<br/>
	{/if}
	{if $Accessories|count > 0}
		<br/><b><u>Аксессуары</u></b>:<br/>
		{foreach from=$Accessories item=accessory}
			{$accessory->Name} - <font size="3" color="green"><i>{$accessory->QuantityReserved} шт.</i></font><br/>
		{/foreach}
	{/if}
	{*Custom Attribute output with manually inserted labels*}
	<br/><b><u>Аккумуляторы</u></b>:<br/>
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
			<font size="4" color="purple"><b><u>Предварительное резервирование</b></u>: {$customAtt ->Value}</font><br/>
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
		Некоторое зарезервированное оборудование требует утверждения. Это резервирование будет в ожидании, пока оно не будет одобрено.
	{/if}
	</p>
	<br/>
<!-- Это таблица для подписи -->
	<p style="padding-left: 50px;"><b>Подписи сторон:</b></p>
 	<table style="padding-left: 50px; border-left-width: 0px; border-top-width: 0px; border-bottom-width: 0px; border-right-width: 0px;" border="1">
   	<col class="col1">
   	<col span="19" class="coln">
   	<tr> 
    <td align="center" bgcolor="#C0C0C0"></td><td align="center"><b>Ф.И.О.</b></td><td align="center"><b>Подпись</b></td>
   	</tr>
   	<tr> 
    <td width="150px;" height="40px;" align="center">Комплектовщик</td><td width="150px;" height="40px;" align="center"></td><td width="150px;" height="40px;" align="center"></td>
   	</tr>
    <tr> 
    <td width="150px;" height="40px;" align="center">Видеоинженер</td><td width="150px;" height="40px;" align="center"></td><td width="150px;" height="40px;"></td>
   	</tr>
   	<tr> 
    <td width="150px;" height="40px;" align="center">Оператор</td><td width="150px;" height="40px;" align="center"></td><td width="150px;" height="40px;"></td>
   	</tr>
  </table> 
  	<br/>
	<p style="padding-left: 50px;">
	<a href="{$ScriptUrl}/{$ReservationUrl}">Посмотреть этот резерв</a> |
	<a href="{$ScriptUrl}/{$ICalUrl}">Добавить в календарь</a> |
	<a href="{$ScriptUrl}">Войти в Систему Планирования</a>
	</p>
{include file='..\..\tpl\Email\emailfooter.tpl'}