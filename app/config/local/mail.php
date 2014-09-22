<?php

return array(
    'driver' => 'mail',
    'host' => 'smtp.mailgun.org',
    'port' => 587,
    'from' => array('address' => 'team@jobsboard.net', 'name' => null),
    'encryption' => 'tls',
    'username' => null,
    'password' => null,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
);
