<?php

namespace Avn\Symfony\Email\DTO;

interface SendEmailRequestInterface
{
    public function getTo(): string;

    public function getSubject(): string;

    public function getTextContent(): string;

    public function getHtmlContent(): string;
}