<?php

namespace EnvLoader\Trait;

/**
 * EnvLoaderのGetterを管理する
 * 
 * @package EnvLoader\Trait
 */
trait Getter
{
    /**
     * .envファイルの内容を取得する
     * 
     * @param string $key
     * @return string|null
     */
    protected function getEnv(string $key): ?string
    {
        return $_ENV[$key] ?? null;
    }

    /**
     * .envファイルの内容を文字列として取得する
     * 
     * @param string $key
     * @param string $default
     * @return string
     */
    protected function getEnvString(string $key, string $default = ""): string
    {
        return $this->getEnv($key) ?? $default;
    }

    /**
     * .envファイルの内容を文字列として取得する
     * keyが存在しない場合はnullを返す
     * 
     * @param string $key
     * @return string|null
     */
    protected function getEnvStringNullable(string $key): ?string
    {
        return $this->getEnv($key);
    }

    /**
     * .envファイルの内容を整数として取得する
     * 
     * @param string $key
     * @param int $default
     * @return int
     */
    protected function getEnvInt(string $key, int $default = 0): int
    {
        $value = $this->getEnv($key);

        return is_null($value) ? $default : intval($value);
    }

    /**
     * .envファイルの内容を整数として取得する
     * keyが存在しない場合はnullを返す
     * 
     * @param string $key
     * @return int|null
     */
    protected function getEnvIntNullable(string $key): ?int
    {
        $value = $this->getEnv($key);

        return is_null($value) ? null : intval($value);
    }

    /**
     * .envファイルの内容を真偽値として取得する
     * 
     * @param string $key
     * @param bool $default
     * @return bool
     */
    protected function getEnvBool(string $key, bool $default = false): bool
    {
        $value = $this->getEnv($key);

        return is_null($value) ? $default : boolval($value);
    }

    /**
     * .envファイルの内容を真偽値として取得する
     * keyが存在しない場合はnullを返す
     * 
     * @param string $key
     * @return bool|null
     */
    protected function getEnvBoolNullable(string $key): ?bool
    {
        $value = $this->getEnv($key);

        return is_null($value) ? null : boolval($value);
    }

    /**
     * .envファイルの内容を浮動小数点数として取得する
     * 
     * @param string $key
     * @param float $default
     * @return float
     */
    protected function getEnvFloat(string $key, float $default = 0.0): float
    {
        $value = $this->getEnv($key);

        return is_null($value) ? $default : floatval($value);
    }

    /**
     * .envファイルの内容を浮動小数点数として取得する
     * keyが存在しない場合はnullを返す
     * 
     * @param string $key
     * @return float|null
     */
    protected function getEnvFloatNullable(string $key): ?float
    {
        $value = $this->getEnv($key);

        return is_null($value) ? null : floatval($value);
    }
}
