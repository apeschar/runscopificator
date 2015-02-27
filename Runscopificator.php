<?php

class Runscopificator {
    private $key;

    public function __construct($key) {
        $this->key = $key;
    }

    public function url($url) {
        return preg_replace_callback('~(^https?://)([a-z0-9._-]+)~i', array($this, 'hostname'), $url);
    }

    public function hostname($match) {
        list(, $prepend, $hostname) = $match;
        $hostname = str_replace('-', '--', $hostname);
        $hostname = str_replace('.', '-', $hostname);
        return $prepend . $hostname . '-' . $this->key . '.runscope.net';
    }
}
