<?php 

namespace App\DataObjects;

use App\Domain\ResponseTypeDomain;

class ResponseDataObject 
{
    private bool $error;
    private int $errorCode;
    private string $title;
    private string $message;
    private string $type;
    private $data;
    private array $errors;

    public function __construct( )
    {
        $this->setError(false);
        $this->setErrorCode(200);
        $this->setTitle('');
        $this->setMessage('');
        $this->setType(ResponseTypeDomain::SUCCESS);
        $this->setData([]);
        $this->setErrorsFormatRequestValidate([]);
    }

    public function setError(bool $value) : void
    {
        $this->error = $value;
    }
    public function setErrorCode(int $value) : void
    {
        $this->errorCode = $value;
    }
    public function setTitle(string $value) : void
    {
        $this->title = $value;
    }
    public function setMessage(string $value) : void
    {
        $this->message = $value;
    }
    public function setType(string $value) : void
    {
        $this->type = $value;
    }
    public function setData($value) : void
    {
        $this->data = $value;
    }
    public function setErrorsFormatRequestValidate(array $value) : void
    {
        $this->errors = $value;
    }

    public function getError() : bool
    {
        return $this->error;
    }
    public function getErrorCode() : int
    {
        return $this->errorCode;
    }
    public function getTitle() : string
    {
        return $this->title;
    }
    public function getMessage() : string
    {
        return $this->message;
    }
    public function getType() : string
    {
        return $this->type;
    }
    public function getData()
    {
        return $this->data;
    }
    public function getErrorsFormatRequestValidate()
    {
        return $this->errors;
    }

    public function response()
    {
        return response([
            'error' => $this->getError(),
            'title' => $this->getTitle(),
            'message' => $this->getMessage(),
            'type' => $this->getType(),
            'data' => $this->getData(),
            'errors' => $this->getErrorsFormatRequestValidate()
        ], $this->getErrorCode());
 
    }
}