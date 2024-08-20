<?php


namespace App\Validation\Exceptions;


use Respect\Validation\Exceptions\ValidationException;



class ExistsInDatabaseException extends ValidationException
{

    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => 'That doesnot exists in database.',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => 'That already exists in the database.',
        ]
    ];


}