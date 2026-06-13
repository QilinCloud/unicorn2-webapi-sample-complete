# Architecture

`api.php` receives signed Unicorn requests, validates HMAC headers, dispatches
to `samples/complete/sync.php`, and signs the JSON response. `classes/class.otto.php`
contains OTTO transport, token handling, endpoint versions and error mapping.
