FROM devwithlando/php:7.4-apache-2

RUN apt-get update -y && apt-get install -y
RUN curl -sL https://deb.nodesource.com/setup_15.x | bash - \
    && apt-get update -y && apt-get install -y nodejs
RUN npm install --global yarn
