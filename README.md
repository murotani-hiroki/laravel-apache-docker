## 環境構築手順
### 1. composerでLaravelをインストール
`
composer create-project --prefer-dist "laravel/laravel=7.*" laravel
`
### 2. Dockerfileを元にイメージを作成
`
docker build -t php:7.4-apache-laravel .
`

イメージ php:7.4-apache-laravel が作成される。

### 3. 作成されたイメージからコンテナを作成
`
docker run -dit --name php74apache -p 8080:80 -v `pwd`/laravel:/var/www/html php:7.4-apache-laravel
`
