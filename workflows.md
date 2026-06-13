# Workflows

1. Configure `APIWEB_TEST_KEY`.
2. Start PHP with `php -S 127.0.0.1:18080 -t .`.
3. Configure Unicorn ApiWeb URL as `http://127.0.0.1:18080/api.php`.
4. Switch `APIWEB_OTTO_MODE=real` only after credentials are available.
