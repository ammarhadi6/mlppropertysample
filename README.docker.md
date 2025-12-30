## Docker & Docker Compose (Production / Hosting)

Quick guide to build and run the app using the provided Docker configuration.

### Files added
- `Dockerfile` — multi-stage build (Node build + PHP-FPM).
- `docker-compose.yml` — services: `app`, `db`.
- `.dockerignore`

### Build & Run (local / simple hosting)
1. Copy your `.env` file or create one from `.env.example` and ensure DB vars match the `docker-compose.yml` DB service or set env vars externally.

2. Build and start services:

```bash
docker-compose up -d --build
```

3. Post-start setup:

```bash
# generate key (if not present)
docker-compose exec app php artisan key:generate

# run migrations (if needed)
docker-compose exec app php artisan migrate --force

# create storage symlink
docker-compose exec app php artisan storage:link
```

### Notes & Tips
- The `Dockerfile` builds frontend assets (`npm run build`) and copies them into `public/dist`.
- For local development with Vite HMR you may prefer to run `npm run dev` on the host and mount your files; you can modify `docker-compose.yml` to add ports for HMR.
- For production, use an external DB and proper env values; the `docker-compose.yml` DB service is convenient for local testing.

If you'd like, I can also:
- Add a `docker-compose.prod.yml` tailored strictly for production (no mounts, stronger security).
- Duplicate these files into `PropertyPage/` and adjust names/ports.
