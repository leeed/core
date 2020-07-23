<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 21/07/2017
 * Time: 23:14.
 */

declare(strict_types=1);

namespace Greenter\Model\Response;

/**
 * Class Error.
 */
class Error
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $message;

    /**
     * Error constructor.
     */
    public function __construct(?string $code = '', ?string $message = '')
    {
        $this->code = $code;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return Error
     */
    public function setCode(?string $code): Error
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return Error
     */
    public function setMessage(?string $message): Error
    {
        $this->message = $message;

        return $this;
    }
}
