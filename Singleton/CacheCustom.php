<?php

class CacheCustom {
    private static CacheCustom $instance;
    private array $cache;

    private function __construct() {
        $this->cache = [];
    }

    public static function getInstance(): CacheCustom
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get(string $key)
    {
        return $this->cache[$key] ?? null;
    }

    public function set(string $key, $value): void
    {
        $this->cache[$key] = $value;
    }
}