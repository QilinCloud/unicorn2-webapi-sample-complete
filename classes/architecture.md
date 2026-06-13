# ApiWeb Sample Classes Architecture

The runtime classes are intentionally small and dependency-free so they run on common PHP hosting environments. `ApiWebSecurity` owns HMAC validation, `Request` owns envelope parsing, and `Answer` owns signed response output.

