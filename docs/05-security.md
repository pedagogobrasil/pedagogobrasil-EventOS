# Security

Security is a cross-cutting requirement in EventOS.

Baseline requirements:

- Prepared statements for database access.
- CSRF protection for unsafe HTTP actions.
- Output escaping by default.
- Secure password hashing.
- Session hardening.
- Rate limiting on sensitive endpoints.
- Audit logs for administrative actions.
- Dependency auditing in CI.
