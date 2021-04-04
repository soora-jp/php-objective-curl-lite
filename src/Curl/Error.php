<?php

namespace SooraJP\ObjectiveCurlLite\Curl;

trait Error
{
    public function errno() : int
    {
        return curl_errno($this->ch);
    }

    public function error() : string
    {
        return curl_error($this->ch);
    }
}