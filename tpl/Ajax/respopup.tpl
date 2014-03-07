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
{if $authorized}
<div class="res_popup_details" style="margin:0">
	<div class="user">
		{if $hideUserInfo}
			{translate key=Private}
		{else}
			{$fullName}
		{/if}
	</div>
	<div class="dates">{formatdate date=$startDate key=res_popup} - {formatdate date=$endDate key=res_popup}</div>	

	{if !$hideDetails}
    <div class="title">{if $title neq ''}{$title}{else}{translate key=NoTitleLabel}{/if}</div>
	{/if}

	<div class="resources">
	{translate key="Resources"} ({$resources|@count})
	{foreach from=$resources item=resource name=resource_loop}
		{$resource->Name()}
		{if !$smarty.foreach.resource_loop.last},{/if}
	{/foreach}
	</div>

	{if !$hideUserInfo}
	<div class="users">
	{translate key="Participants"} ({$participants|@count})
	{foreach from=$participants item=user name=participant_loop}
		{if !$user->IsOwner()}
			{fullname first=$user->FirstName last=$user->LastName}
		{/if}
		{if !$smarty.foreach.participant_loop.last},{/if}
	{/foreach}
	</div>
	{/if}

	<div class="accessories">
	{translate key="Accessories"} ({$accessories|@count})
	{foreach from=$accessories item=accessory name=accessory_loop}
		<br /><font size="1.5" color="green"><i>{$accessory->QuantityReserved}шт.</i></font> - {$accessory->Name} 
		{if !$smarty.foreach.accessory_loop.last},{/if}
	{/foreach}
	</div>

	{if !$hideDetails}
	<div class="summary">{if $summary neq ''}{$summary|truncate:300:"..."|nl2br}{else}{translate key=NoDescriptionLabel}{/if}</div>
	{/if}
	<!-- {$ReservationId} -->
</div>
<br/>
<!-- На всякий случай можно ввести этот код, если будут проблемы
<div class="attributes">
            {foreach from=$attributes item=attribute name=attribute_loop}
		{$attribute->AttributeLabel}: {$attribute->Value}
		{if !$smarty.foreach.attribute_loop.last}<br />{/if}
            {/foreach}
	</div> -->
<div class="attributes">
            {foreach from=$attributes item=attribute name=row}
		{if $smarty.foreach.row.index == 3}
			Аккумуляторы для Sony FS700: {$attribute ->Value}<br/>
		{elseif $smarty.foreach.row.index == 1}
			Аккумуляторы для Canon D60: {$attribute ->Value}<br/>
		{elseif $smarty.foreach.row.index == 2}
			Аккумуляторы для GoPro: {$attribute ->Value}<br/>
		{elseif $smarty.foreach.row.index == 4}
			Аккумуляторы AA: {$attribute ->Value}<br/>	
			<br/>
		{elseif $smarty.foreach.row.index == 0}
			<font size="2" color="purple"><b><u>Предварительное резервирование</b></u>: {$attribute ->Value}</font><br/>
			<br/>
		{/if}			
            {/foreach}
	</div>
{else}
	{translate key='InsufficientPermissionsError'}
{/if}
