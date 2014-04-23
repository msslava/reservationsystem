<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

$conf['settings']['server.timezone'] = 'Europe/Moscow';
$conf['settings']['allow.self.registration'] = 'true';
$conf['settings']['admin.email'] = 'musicman_08@mail.ru';
$conf['settings']['default.page.size'] = '50';
$conf['settings']['enable.email'] = 'true';
$conf['settings']['default.language'] = 'en_us';
$conf['settings']['script.url'] = 'http://sklad.eurokino.tv/Web';
$conf['settings']['password.pattern'] = '/^[^\\s]{6,}$/i';
$conf['settings']['schedule']['show.inaccessible.resources'] = 'false';
$conf['settings']['schedule']['reservation.label'] = '{name}';
$conf['settings']['schedule']['hide.blocked.periods'] = 'false';
$conf['settings']['image.upload.directory'] = 'http://sklad.eurokino.tv/Web/uploads/images';
$conf['settings']['image.upload.url'] = 'uploads/images';
$conf['settings']['cache.templates'] = 'true';
$conf['settings']['use.local.jquery'] = 'true';
$conf['settings']['registration.captcha.enabled'] = 'true';
$conf['settings']['registration.require.email.activation'] = 'true';
$conf['settings']['registration.auto.subscribe.email'] = 'true';
$conf['settings']['inactivity.timeout'] = '50';
$conf['settings']['name.format'] = '{first} {last}';
$conf['settings']['css.extension.file'] = '';
$conf['settings']['disable.password.reset'] = 'false';
$conf['settings']['home.url'] = 'http://sklad.eurokino.tv';
$conf['settings']['logout.url'] = '';
$conf['settings']['ics']['require.login'] = 'true';
$conf['settings']['ics']['subscription.key'] = 'qwerty';
$conf['settings']['ics']['import'] = 'false';
$conf['settings']['ics']['import.key'] = '';
$conf['settings']['privacy']['view.schedules'] = 'true';
$conf['settings']['privacy']['view.reservations'] = 'false';
$conf['settings']['privacy']['hide.user.details'] = 'false';
$conf['settings']['privacy']['hide.reservation.details'] = 'false';
$conf['settings']['reservation']['start.time.constraint'] = 'future';
$conf['settings']['reservation']['updates.require.approval'] = 'false';
$conf['settings']['reservation']['prevent.participation'] = 'false';
$conf['settings']['reservation']['prevent.recurrence'] = 'false';
$conf['settings']['reservation']['enable.reminders'] = 'true';
$conf['settings']['reservation.notify']['resource.admin.add'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.update'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['application.admin.add'] = 'true';
$conf['settings']['reservation.notify']['application.admin.update'] = 'true';
$conf['settings']['reservation.notify']['application.admin.delete'] = 'true';
$conf['settings']['reservation.notify']['group.admin.add'] = 'true';
$conf['settings']['reservation.notify']['group.admin.update'] = 'true';
$conf['settings']['reservation.notify']['group.admin.delete'] = 'true';
$conf['settings']['uploads']['enable.reservation.attachments'] = 'true';
$conf['settings']['uploads']['reservation.attachment.path'] = 'Web/uploads/reservation';
$conf['settings']['uploads']['reservation.attachment.extensions'] = 'txt,jpg,gif,png,doc,docx,pdf,xls,xlsx,ppt,pptx,csv';
$conf['settings']['database']['type'] = 'mysql';
$conf['settings']['database']['user'] = 'sklad';
$conf['settings']['database']['password'] = 'EeM7kahl';
$conf['settings']['database']['hostspec'] = 'localhost';
$conf['settings']['database']['name'] = 'sklad';
$conf['settings']['phpmailer']['mailer'] = 'smtp';
$conf['settings']['phpmailer']['smtp.host'] = 'smtp.mail.ru';
$conf['settings']['phpmailer']['smtp.port'] = '2525';
$conf['settings']['phpmailer']['smtp.secure'] = '';
$conf['settings']['phpmailer']['smtp.auth'] = 'true';
$conf['settings']['phpmailer']['smtp.username'] = 'musicman_08';
$conf['settings']['phpmailer']['smtp.password'] = 'adw73fgH34';
$conf['settings']['phpmailer']['sendmail.path'] = '/usr/sbin/sendmail';
$conf['settings']['phpmailer']['smtp.debug'] = 'false';
$conf['settings']['plugins']['Authentication'] = '';
$conf['settings']['plugins']['Authorization'] = '';
$conf['settings']['plugins']['Permission'] = '';
$conf['settings']['plugins']['PostRegistration'] = '';
$conf['settings']['plugins']['PreReservation'] = '';
$conf['settings']['plugins']['PostReservation'] = '';
$conf['settings']['install.password'] = 'adw73fgH34';
$conf['settings']['pages']['enable.configuration'] = 'false';
$conf['settings']['api']['enabled'] = 'true';
$conf['settings']['recaptcha']['enabled'] = 'true';
$conf['settings']['recaptcha']['public.key'] = '6LebyO4SAAAAAHPpzq2tO8pqmG4b5hZMutjMM2Rl';
$conf['settings']['recaptcha']['private.key'] = '6LebyO4SAAAAAPea0VxnU7ol1tfaRh-cIE9xW1Y1';
