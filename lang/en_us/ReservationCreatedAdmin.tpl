{include file='..\..\tpl\Email\emailheader.tpl'}
<p align="right"><b>{$UserName}</b> | <a href="{$ScriptUrl}/{$ReservationUrl}">Посмотреть этот резерв</a> </p>
<TABLE BORDER="1"> 
<TR> 
 <TH width="25%" align="center" bgcolor="#C0C0C0">Карты памяти</TH>
 <TH width="25%" align="center" bgcolor="#C0C0C0">Номера КП</TH>
<TH width="25%" align="center" bgcolor="#C0C0C0">Название проекта</TH>
<TH width="25%" align="center" bgcolor="#C0C0C0">Время резервирования</TH>  
</TR> 
<TR> 
  	<TH style="font-weight : 100;" align="left">{foreach from=$CustomAttributes key=k item=customAtt name=row}
  		{if $smarty.foreach.row.index == 4}
			<input type="checkbox" style="margin-top: 0px;">КП (64ГБ): <font size="3" color="green"><i>{$customAtt ->Value}&nbsp;шт.</font></i><br/>
		{elseif $smarty.foreach.row.index == 6}
			<input type="checkbox" style="margin-top: 0px;">КП для GoPro: <font size="3" color="green"><i>{$customAtt ->Value}&nbsp;шт.</font></i><br/>{/if}			
	{/foreach}</TH>
  	<TH style="font-weight : 100;" align="center">{foreach from=$CustomAttributes key=k item=customAtt name=row}
  		{if $smarty.foreach.row.index == 5}
			<font size="4" color="purple"><i>{$customAtt ->Value}</font></i><br/>
		{elseif $smarty.foreach.row.index == 7}
			<font size="4" color="purple"><i>{$customAtt ->Value}</font></i><br/>{/if}			
	{/foreach}</TH>
	<TH style="font-weight : 100;">{$Title}</TH>
	<TH style="font-weight : 100;">{formatdate date=$StartDate key=reservation_email}<BR/>{formatdate date=$EndDate key=reservation_email}</TH> 
</TR>
<TR>
	<TH COLSPAN="2" align="center" bgcolor="#C0C0C0">Оборудование</TH>
	<TH COLSPAN="2" align="center" bgcolor="#C0C0C0">Аксессуары</TH>
</TR>
<TR>
	<TH COLSPAN="2" style="font-weight : 100;">{if $ResourceNames|count > 1}{foreach from=$ResourceNames item=resourceName}{$resourceName}<br/>{/foreach}{else}{$ResourceName}<br/>{/if}</TH>
	<TH COLSPAN="2" style="font-weight : 100;" align="left">{if $Accessories|count > 0}{foreach from=$Accessories item=accessory}
		 <input type="checkbox" style="margin-top: 0px;">{$accessory->Name} - <font size="3" color="green"><i>{$accessory->QuantityReserved} шт.</i></font><br/>
		{/foreach}
	{/if}</TH>
</TR>
<TR>
	<TH COLSPAN="2" align="center" bgcolor="#C0C0C0">Аккумуляторы</TH>
	<TH COLSPAN="2" align="center" bgcolor="#C0C0C0">Описание</TH>
</TR>
<TR>
	<TH COLSPAN="2" style="font-weight : 100;" align="left">{foreach from=$CustomAttributes key=k item=customAtt name=row}
		{if $smarty.foreach.row.index == 0}
			<input type="checkbox" style="margin-top: 0px;">Аккумуляторы для Sony FS700: <font size="3" color="green"><i>{$customAtt ->Value}&nbsp;шт.</font></i><br/>
		{elseif $smarty.foreach.row.index == 1}
			<input type="checkbox" style="margin-top: 0px;">Аккумуляторы для Canon D60: <font size="3" color="green"><i>{$customAtt ->Value}&nbsp;шт.</font></i><br/>
		{elseif $smarty.foreach.row.index == 2}
			<input type="checkbox" style="margin-top: 0px;">Аккумуляторы для GoPro: <font size="3" color="green"><i>{$customAtt ->Value}&nbsp;шт.</font></i><br/>
		{elseif $smarty.foreach.row.index == 3}
			<input type="checkbox" style="margin-top: 0px;">Аккумуляторы AA: <font size="3" color="green"><i>{$customAtt ->Value}&nbsp;шт.</font></i><br/>{/if}			
	{/foreach}<font></i></TH>
<TH COLSPAN="2" style="font-weight : 100;">{$Description}</TH>
<TR>
	<TH COLSPAN="2" align="center" bgcolor="#C0C0C0">Собрано (комплектовщик)</TH>
	<TH COLSPAN="2" align="center" bgcolor="#C0C0C0">Получено (оператор)</TH>
</TR>
<TR>
	<TH COLSPAN="2"><br/><br/></TH>
	<TH COLSPAN="2"><br/><br/></TH>
</TR>
<TR>
	<TH COLSPAN="4" align="center" bgcolor="#C0C0C0">Замечания</TH>
</TR>
<TR>
	<TH COLSPAN="2" align="left" style="font-weight : 100;"><u>Комплектовщик:<br/><br/><br/><br/></u></TH>
	<TH COLSPAN="2" align="left" style="font-weight : 100;"><u>Оператор:<br/><br/><br/><br/></u></TH>
</TR>
<TR>
	<TH COLSPAN="2" align="center" bgcolor="#C0C0C0">Принято на склад (комплектовщик)</TH>
	<TH COLSPAN="2" align="center" bgcolor="#C0C0C0">Сдано (оператор)</TH>
</TR>
<TR>
	<TH COLSPAN="2"><br/><br/></TH>
	<TH COLSPAN="2"><br/></br></TH>
</TR>
<TR width="100%">
	<TH COLSPAN="4" align="justify"><font size="1" color="red"><i>Видеооператор, принявший комплект оборудования перечисленный в данном перечне, несет ответственность за его сохранность и работоспособность в соответствии с п. 7.4. договора на выполнение работ и услуг. В случае выявления дефектов или неработоспособных элементов из данного перечня сотрудником, принимающим данное оборудование после проведения съемки, к ответственному лицу могут быть приняты санкции в соответствии с п. 7.3. договора на выполнение работ и услуг.</font></i></TH>
</TR>
</TABLE>
</p>