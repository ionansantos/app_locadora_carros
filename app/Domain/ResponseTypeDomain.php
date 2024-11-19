<?php

namespace App\Domain;

interface ResponseTypeDomain
{
    const ERROR = 'error';
    const WARNING = 'warning';
    const INFO = 'info';
    const SUCCESS = 'success';
}
