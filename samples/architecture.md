# Samples Architecture

`sync.php` at the repository root loads the implementation file from this folder.

The active flow is:

1. `api.php` receives a signed Unicorn request.
2. `sync.php` loads framework classes and the configured implementation.
3. `classes/class.config.php` resolves `samples/complete/sync.php`.
4. `samples/complete/sync.php` maps ApiWeb methods to OTTO-style marketplace operations.

