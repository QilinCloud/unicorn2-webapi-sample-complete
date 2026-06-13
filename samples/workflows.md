# Samples Workflows

Local start:

```powershell
php -S 127.0.0.1:18080 -t .
```

Request flow:

1. Configure credentials in `config.php` or `.env`.
2. Start the PHP built-in server from the repository root.
3. Send signed requests to `http://127.0.0.1:18080/api.php`.
4. Inspect `logs/apiweb-sample.log` when a negative response is returned.

