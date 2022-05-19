# 環境構築手順
## dockerコマンド使用
### 1. composerでLaravelをインストール
`
composer create-project --prefer-dist "laravel/laravel=7.*" laravel
`
### 2. Dockerfileを元にイメージを作t成
`
docker build -t php:7.4-apache-laravel .
`

イメージ php:7.4-apache-laravel が作成される。

### 3. 作成されたイメージからWebコンテナを作成
`
docker run -dit --name php74apache -p 8080:80 -v `pwd`/laravel:/var/www/html php:7.4-apache-laravel
`

### 4. PostgreSQLコンテナを作成
`
docker run --name postgres13 -e POSTGRES_PASSWORD=muro1968 -p 54321:5432 -v psql13_volume:/var/lib/postgresql/data -d postgres:latest
`



## docker-compose 使用
### 1. composerでLaravelをインストール
`
composer create-project --prefer-dist "laravel/laravel=7.*" laravel
`
### 2. docker-compose でイメージ作成〜コンテナ作成
`
docker-compose up -d
`

<br/>  

### DB／テーブル作成〜初期データインポート
`
psql -U postgres -h 127.0.0.1 -p 54321 -f ddl.sql


### VSCode のlaunch.jsonを作成してpathMappingsを追加
`
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "pathMappings": {
                "/var/www/html":"/Users/hmurotani/Documents/workspace_php/laravel-apache-docker8/src"
            }
        },
`


`
