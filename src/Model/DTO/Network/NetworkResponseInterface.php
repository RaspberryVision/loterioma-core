<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20.03.20
 * Time: 19:07
 */

namespace App\Model\DTO\Network;

interface NetworkResponseInterface
{
    /**
     * Get response body.
     *
     * @return string|null
     */
    public function getBody(): ?string ;

    /**
     * Get response status code.
     *
     * @return int
     */
    public function getStatusCode(): int;

    /**
     * Get hash (unique random alphanumerical string) of specific request.
     *
     * @return mixed
     */
    public function getRequestHash(): string;
}