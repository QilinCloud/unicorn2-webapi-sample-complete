# Unicorn 2 ApiWeb OTTO Complete Sample

This repository is a standalone ApiWeb connector sample. It implements the
Unicorn 2 ApiWeb protocol and forwards the broad method surface to OTTO markets
style endpoints.

Public protocol documentation:

- https://webservice.marcos-software.de/index.html
- https://webservice.marcos-software.de/endpoints.html
- https://webservice.marcos-software.de/samples.html
- https://webservice.marcos-software.de/openapi.yaml

## What this sample contains

- `api.php`: HTTP entry point for Unicorn 2.
- `sync.php`: shared ApiWeb helper functions and runtime bootstrap.
- `config.php`: all configurable values, including log level and OTTO credentials.
- `classes/`: protocol runtime, HMAC signing, DTOs, enums and the OTTO sample client.
- `samples/complete/sync.php`: complete OTTO-backed method implementation.
- `openapi.yaml`: local copy of the ApiWeb envelope contract.

No OTTO secret is hardcoded. Put credentials into environment variables or into
protected hosting configuration.

## Local start

```powershell
$env:APIWEB_TEST_KEY='local-dev-api-key-2026'
$env:APIWEB_OTTO_MODE='demo'
php -S 127.0.0.1:18080 -t .
```

In Unicorn 2 configure the ApiWeb URL as:

```text
http://127.0.0.1:18080/api.php
```

## Real OTTO mode

```powershell
$env:APIWEB_OTTO_MODE='real'
$env:OTTO_ENVIRONMENT='live'
$env:OTTO_AUTH_MODE='bearer'
$env:OTTO_ACCESS_TOKEN='your-token'
php -S 127.0.0.1:18080 -t .
```

Supported auth modes are `bearer`, `oauth2Installation` and `legacyPassword`.
Prefer `bearer` or `oauth2Installation` where possible.

## Negative tests

```powershell
$env:APIWEB_FAILURE_MODE='invalid_credentials'
$env:APIWEB_FAILURE_MODE='getOrders:quota'
$env:APIWEB_FAILURE_MODE='getOrders:api_down'
$env:APIWEB_FAILURE_MODE='getOrders:unknown'
```

These modes return realistic ApiWeb failures so Unicorn can log useful messages
without the endpoint process crashing.
