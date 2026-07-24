# Architecture

EventOS uses a small PHP foundation organized around clear application boundaries.

## Initial Layers

- `app/Core`: low-level application primitives.
- `config`: environment-driven configuration.
- `routes`: HTTP route definitions.
- `modules`: optional domain modules.
- `public`: web server document root.

The architecture will evolve toward modular domains without turning the core into a heavy framework.
