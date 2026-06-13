<?php
declare(strict_types=1);

/**
 * Reads and exposes ApiWeb sample configuration values.
 */
final class ApiWebConfig
{
    private static ?array $config = null;

    /**
     * Loads the full ApiWeb sample configuration once.
     *
     * @return array Complete sample configuration.
     */
    public static function all(): array
    {
        if (self::$config === null) {
            $config = require __DIR__ . '/../config.php';
            if (!is_array($config)) {
                throw new RuntimeException('ApiWeb config.php must return an array.');
            }

            self::$config = $config;
        }

        return self::$config;
    }

    /**
     * Reads a top-level configuration value.
     *
     * @param string $key Top-level configuration key.
     * @param mixed $fallback Value returned when the key is missing.
     * @return mixed Configured value or fallback.
     */
    public static function get(string $key, $fallback = null)
    {
        $config = self::all();
        return array_key_exists($key, $config) ? $config[$key] : $fallback;
    }

    /**
     * Reads a two-level nested configuration value.
     *
     * @param string $section Top-level section name.
     * @param string $key Nested key name.
     * @param mixed $fallback Value returned when the section or key is missing.
     * @return mixed Configured value or fallback.
     */
    public static function nested(string $section, string $key, $fallback = null)
    {
        $config = self::all();
        if (!isset($config[$section]) || !is_array($config[$section])) {
            return $fallback;
        }

        return array_key_exists($key, $config[$section]) ? $config[$section][$key] : $fallback;
    }

    /**
     * Resolves the configured sample implementation file.
     *
     * @return string Absolute path to the selected implementation sync.php.
     */
    public static function implementationPath(): string
    {
        $implementation = strtolower((string)self::get('implementation', 'complete'));
        $allowed = array('complete');

        if (!in_array($implementation, $allowed, true)) {
            throw new RuntimeException('Unsupported ApiWeb sample implementation: ' . $implementation);
        }

        return __DIR__ . '/../samples/' . $implementation . '/sync.php';
    }
}
