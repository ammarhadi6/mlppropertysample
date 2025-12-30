## Dockerfile (PHP 8.2) — added for deployment on platforms like Railway

This repository now includes a production-ready Dockerfile that:
- Builds the frontend with Node / Vite (Node 18)
- Uses PHP 8.2 FPM for the backend
- Runs nginx + php-fpm together via supervisord so the container serves HTTP on port 80

Quick commands:

Build locally:
  docker build -t mlppropertysample:local .

Run locally:
  docker run -p 80:80 mlppropertysample:local

Notes:
- This Dockerfile is useful for platforms that don't provide a matching PHP runtime or require a container with an HTTP port exposed.
- For development you might prefer to run `npm run dev` and `php artisan serve` on your host instead of using the container.
