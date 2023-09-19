<?php

/**
 * send function.
 *
 * this method is used to send emails.
 *
 * @param string $from - sender's mail.
 * @param string $to - recipient's mail.
 * @param string $subject - subject line.
 * @param string $message - message body.
 * @return bool
 */
function send(string $from, string $to, string $subject, string $message)
{
    $email = \Config\Services::email();

    $config = [
        'mailType' => 'html',
        'charset' => 'utf-8',
        'crlf' => "\r\n",
        'newline' => "\r\n",
    ];

    $email->initialize($config);

    $email->setFrom($from);

    $email->setTo($to);

    // Set a subject.
    $email->setSubject($subject);
    // Set a body.
    $email->setMessage($message);

    return $email->send();
}
