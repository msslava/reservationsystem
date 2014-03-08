{*
Copyright 2012 Nick Korbel

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
<div id="reservationParticipation">
	<ul class="no-style">
		<li>
			<label><b>{translate key="ParticipantList"}</b><br/>
				{translate key=Add} <input type="text" id="participantAutocomplete" class="input" style="width:250px;"/>
				или
				<button id="promptForParticipants" type="button" class="button" style="display:inline">
					<img src="img/user-plus.png"/>
				{translate key='AllUsers'}
				</button>
			</label>

			<div id="participantList">
				<ul/>
			</div>
			<div id="participantDialog" title="{translate key=AddParticipants}" class="dialog"></div>
		</li>
		<BR>
			<BR>
		<li>
			<label><b>{translate key="InvitationList"}</b><br/>
<!--				{translate key=Add} <input type="text" id="inviteeAutocomplete" class="input" style="width:250px;"/>
				or
				<button id="promptForInvitees" type="button" class="button" style="display:inline">
					{html_image src="user-plus.png"}
				{translate key='AllUsers'}
				</button> -->
			</label>
			<div id="inviteeList">
				<p><b>Видеооператор, принявший комплект оборудования перечисленный в данном перечне, несет ответственность за его сохранность и работоспособность в соответствии с п. 7.4. договора на выполнение работ и услуг.</b></p>
				<p><b>В случае выявления дефектов или неработоспособных элементов из данного перечня сотрудником, принимающим данное оборудование после проведения съемки, к ответственному лицу могут быть приняты санкции в соответствии с п. 7.3. договора на выполнение работ и услуг.</b></p>
				<ul/>
			</div>
			<div id="inviteeDialog" title="{translate key=InviteOthers}" class="dialog"></div>
		</li>
	</ul>
</div>