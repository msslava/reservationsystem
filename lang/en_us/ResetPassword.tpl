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
<p style="padding-left: 50px;">Ваш временный пароль для входа в Систему Планирования: {$TemporaryPassword}

<br/>

Ваш прежний пароль больше не работает.
<br/>

Пожалуйста, <a href="{$ScriptUrl}">войдите в Систему Планирования</a> и измените Ваш пароль как можно скорее.
<br/>	
{include file='..\..\tpl\Email\emailfooter.tpl'}