<?php

namespace SooraJP\ObjectiveCurlLite;

use CurlHandle;
use SooraJP\ObjectiveCurlLite\Curl\Error;
use SooraJP\ObjectiveCurlLite\Curl\Setopt;

class Curl
{
    use Setopt, Error;

    private CurlHandle $ch;

    public function __construct()
    {
        $this->init();
    }

    public function __destruct()
    {
        if($this->ch !== null)
        {
            $this->close();
        }
    }

    public function init() : bool
    {
        $ch = curl_init();

        if($ch === false)
        {
            $this->ch = null;
            return false;
        }
        else
        {
            $this->ch = $ch;
            return true;
        }
    }

    public function close() : void
    {
        curl_close($this->ch);
    }

    public function exec() : string | bool
    {
        return curl_exec($this->ch);
    }
}