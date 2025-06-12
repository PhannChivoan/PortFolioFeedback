#!/bin/bash
set -e

# Run Laravel migrations automatically
php artisan migrate --force
php artisan db:seed --force

# Start Apache in the foreground
apache2-foreground
