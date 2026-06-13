<?php
declare(strict_types=1);

/**
 * Writes ApiWeb sample log entries to PHP's configured error log.
 */
final class ApiWebLogger
{
    private const LEVELS = array(
        'debug' => 10,
        'info' => 20,
        'warning' => 30,
        'error' => 40,
        'none' => 100
    );

    /**
     * Writes a debug log entry when debug logging is enabled.
     *
     * @param string $message Log message.
     * @param array $context Structured log context.
     * @return void
     */
    public static function debug(string $message, array $context = array()): void
    {
        self::write('debug', $message, $context);
    }

    /**
     * Writes an info log entry when info logging is enabled.
     *
     * @param string $message Log message.
     * @param array $context Structured log context.
     * @return void
     */
    public static function info(string $message, array $context = array()): void
    {
        self::write('info', $message, $context);
    }

    /**
     * Writes a warning log entry when warning logging is enabled.
     *
     * @param string $message Log message.
     * @param array $context Structured log context.
     * @return void
     */
    public static function warning(string $message, array $context = array()): void
    {
        self::write('warning', $message, $context);
    }

    /**
     * Writes an error log entry when error logging is enabled.
     *
     * @param string $message Log message.
     * @param array $context Structured log context.
     * @return void
     */
    public static function error(string $message, array $context = array()): void
    {
        self::write('error', $message, $context);
    }

    /**
     * Writes an exception log entry with class, file, and line context.
     *
     * @param Throwable $exception Exception to log.
     * @param string $message Log message.
     * @return void
     */
    public static function exception(Throwable $exception, string $message = 'Unhandled ApiWeb exception.'): void
    {
        self::write('error', $message, array(
            'exception' => get_class($exception),
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine()
        ));
    }

    /**
     * Writes one formatted log line when the configured log level allows it.
     *
     * @param string $level Log level name.
     * @param string $message Log message.
     * @param array $context Structured log context.
     * @return void
     */
    private static function write(string $level, string $message, array $context): void
    {
        if (!self::enabled($level)) {
            return;
        }

        $line = '[' . gmdate('c') . '] ' . strtoupper($level) . ' ' . $message;
        if (count($context) > 0) {
            $line .= ' ' . json_encode($context, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }

        error_log($line);
    }

    /**
     * Checks whether a log level is enabled by sample configuration.
     *
     * @param string $level Log level name to check.
     * @return bool True when the level should be written.
     */
    private static function enabled(string $level): bool
    {
        $configured = strtolower((string)ApiWebConfig::get('logLevel', 'info'));
        $configuredValue = self::LEVELS[$configured] ?? self::LEVELS['info'];
        $levelValue = self::LEVELS[$level] ?? self::LEVELS['info'];

        return $levelValue >= $configuredValue;
    }
}
