FROM wendyourway/laravel-docker:latest
LABEL minhvnhho <hominh4078@gmail.com>

COPY --chown=sail . /var/www/html
COPY ./resources/docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80
