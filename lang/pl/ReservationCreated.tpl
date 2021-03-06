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
	
	Szczegóły rezerwacji:
	<br/>
	<br/>
	
	Początek: {formatdate date=$StartDate key=reservation_email}<br/>
	Koniec: {formatdate date=$EndDate key=reservation_email}<br/>
	{if $ResourceNames|count > 1}
		Zasoby:<br/>
		{foreach from=$ResourceNames item=resourceName}
			{$resourceName}<br/>
		{/foreach}
		{else}
		Zasób: {$ResourceName}<br/>
	{/if}

	Tytuł: {$Title}<br/>
	Opis: {$Description|nl2br}<br/>
	
	{if count($RepeatDates) gt 0}
		<br/>		
		Rezerwacja nastąpi w następujących terminach:
		<br/>
	{/if}
	
	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}

	{if $Accessories|count > 0}
		<br/>Akcesoria:<br/>
		{foreach from=$Accessories item=accessory}
			({$accessory->QuantityReserved}) {$accessory->Name}<br/>
		{/foreach}
	{/if}

	{if $RequiresApproval}
		<br/>		
		Co najmniej jeden z zasobów wymaga zatwierdzenia. Ta rezerwacja będzie oczekiwała na zatwierdzenie.
	{/if}
	
	<br/>
	<a href="{$ScriptUrl}/{$ReservationUrl}">Podgląd rezerwacji</a> |
	<a href="{$ScriptUrl}/{$ICalUrl}">Dodaj do Outlook'a</a> |
	<a href="{$ScriptUrl}">Zaloguj się do phpScheduleIt</a>
	
{include file='..\..\tpl\Email\emailfooter.tpl'}