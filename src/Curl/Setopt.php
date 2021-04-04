<?php

namespace SooraJP\ObjectiveCurlLite\Curl;

trait Setopt
{
    public function setopt(int $option, mixed $value) : bool
    {
        return curl_setopt($this->ch, $option, $value);
    }

    public function setoptArray(array $options) : bool
    {
        return curl_setopt_array($this->ch, $options);
    }

    public function setoptHeader(bool $value = true) : bool
    {
        return $this->setopt(CURLOPT_HEADER, $value);
    }

    public function setoptHttpGET(bool $value = true) : bool
    {
        return $this->setopt(CURLOPT_HTTPGET, $value);
    }

    public function setoptNoBody(bool $value = true) : bool
    {
        return $this->setopt(CURLOPT_NOBODY, $value);
    }

    public function setoptPOST(bool $value = true) : bool
    {
        return $this->setopt(CURLOPT_POST, $value);
    }

    public function setoptReturnTransfer(bool $value = true) : bool
    {
        return $this->setopt(CURLOPT_RETURNTRANSFER, $value);
    }

    public function setoptHttpAuth(int $value) : bool
    {
        return $this->setopt(CURLOPT_HTTPAUTH, $value);
    }

    public function setoptPort(int $value) : bool
    {
        return $this->setopt(CURLOPT_PORT, $value);
    }

    public function setoptTcpKeepAlive(int $value = 1) : bool
    {
        return $this->setopt(CURLOPT_TCP_KEEPALIVE, $value);
    }

    public function setoptTimeOut(int $value) : bool
    {
        return $this->setopt(CURLOPT_TIMEOUT, $value);
    }

    public function setoptTimeOutMS(int $value) : bool
    {
        return $this->setopt(CURLOPT_TIMEOUT_MS, $value);
    }

    public function setoptPOSTFields(string $value) : bool
    {
        return $this->setopt(CURLOPT_POSTFIELDS, $value);
    }

    public function setoptUrl(string $url) : bool
    {
        return $this->setopt(CURLOPT_URL, $url);
    }

    public function setoptUserAgent(string $value) : bool
    {
        return $this->setopt(CURLOPT_USERAGENT, $value);
    }

    public function setoptUserName(string $username) : bool
    {
        return $this->setopt(CURLOPT_USERNAME, $username);
    }

    public function setoptUserPwd(string $username, string $password) : bool
    {
        return $this->setopt(CURLOPT_USERPWD, $username.':'.$password);
    }

    public function setoptHttpHeader(array $headers) : bool
    {
        return $this->setopt(CURLOPT_HTTPHEADER, $headers);
    }
}