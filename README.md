# swoft-chatroom

#### 介绍
基于swoft开发的简易聊天室

#### 软件架构

**[中文说明](README_CN.md)**

## Introduction

The first high-performance PHP coroutine full-stack componentization framework based on Swoole native coroutine, built-in coroutine web server and commonly-used coroutine client, resident memory, which has no dependency on PHP-FPM, asynchronous non-blocking IO implementation, similar to synchronous client style of writing to achieve the use of asynchronous clients, without complex asynchronous callback, no tedious yield, similar  Go language coroutines, flexible annotations framework, a powerful global dependency injection container base on annotations, and great service governance , flexible and powerful AOP, PSR specification implementation, etc., could be used to build high-performance Web systems, APIs, middleware, basic services, microservice and so on.

- Base on Swoole extension
- Built-in HTTP, TCP, WebSocket Coroutine Server
- Powerful AOP (Aspect Oriented Programming)
- Flexible and comprehensive annotations framework
- Global dependency injection container
- PSR-7 based HTTP message implementation
- PSR-14 based event manager
- PSR-15 based middleware
- PSR-16 based cache design
- Scalable high performance RPC
- Holistic service governance, fallback, load balance, service registration and discovery
- Database ORM
- Universal connection pools
- Mysql, Redis, RPC, HTTP Coroutine Clients
- Coroutine driver client and blocking driver client seamlessly switch automatically
- Coroutine and asynchronous task delivery
- Custom user processes
- RESTful supported
- Internationalization (i18n) supported
- High performance router
- Fast and flexible parameter validator
- Alias mechanism
- Powerful log component
- Cross-platform application auto-reload mechanism


## Document

[**Chinese Document**](https://doc.swoft.org)  
[**English Document**](https://doc.swoft.org) Not yet, please help us to complete it.

QQ Group1: 548173319      
QQ Group2: 778656850

## Environmental Requirements

1. PHP 7.0 +
2. [Swoole 2.1.3](https://github.com/swoole/swoole-src/releases) + ( >= 4.1 is better), *coroutine* and *async redis client* options are required
3. [Hiredis](https://github.com/redis/hiredis/releases)
4. [Composer](https://getcomposer.org/)

## Install

### Manual Installation

* Clone project
* Install requires `composer install`

### Install by Composer

* `composer create-project swoft/swoft swoft`

### Install by Docker

* `docker run -p 80:80 swoft/swoft`

### Install by Docker-Compose

* `cd swoft`
* `docker-compose up`

## Configuration

If automatically copied `.env` file operation fails when `composer install` was executed, the `.env.example` that in root directory can be manually copied and named `.env`. Note that `composer update` will not trigger related copy operations.

```
# Server
PFILE=/tmp/swoft.pid
PNAME=php-swoft
TCPABLE=true
CRONABLE=false
AUTO_RELOAD=true

# HTTP
HTTP_HOST=0.0.0.0
HTTP_PORT=80

# WebSocket
WS_ENABLE_HTTP=true

# TCP
TCP_HOST=0.0.0.0
TCP_PORT=8099
TCP_PACKAGE_MAX_LENGTH=2048
TCP_OPEN_EOF_CHECK=false

# Crontab
CRONTAB_TASK_COUNT=1024
CRONTAB_TASK_QUEUE=2048

# Settings
WORKER_NUM=1
MAX_REQUEST=10000
DAEMONIZE=0
DISPATCH_MODE=2
LOG_FILE=@runtime/swoole.log
TASK_WORKER_NUM=1
```

## Management

### Help command

```text
[root@swoft]# php bin/swoft -h
 ____                __ _
/ ___|_      _____  / _| |_
\___ \ \ /\ / / _ \| |_| __|
 ___) \ V  V / (_) |  _| |_
|____/ \_/\_/ \___/|_|  \__|

Usage:
  php bin/swoft {command} [arguments ...] [options ...]

Commands:
  entity  The group command list of database entity
  gen     Generate some common application template classes
  rpc     The group command list of rpc server
  server  The group command list of http-server
  ws      There some commands for manage the webSocket server

Options:
  -v, --version  show version
  -h, --help     show help
```

### Start HTTP Server

```bash
// Start HTTP Server
php bin/swoft start

// Start Daemonize HTTP Server
php bin/swoft start -d

// Restart HTTP server
php bin/swoft restart

// Reload HTTP server
php bin/swoft reload

// Stop HTTP server
php bin/swoft stop
```

### Start WebSocket Server

Start WebSocket Server, optional whether to support HTTP processing.

```bash
// Star WebSocket Server
php bin/swoft ws:start

// Start Daemonize WebSocket Server
php bin/swoft ws:start -d

// Restart WebSocket server
php bin/swoft ws:restart

// Reload WebSocket server
php bin/swoft ws:reload

// Stop WebSocket server
php bin/swoft ws:stop
```

### Start RPC Server

Start an independent RPC Server.

```bash
// Start RPC Server
php bin/swoft rpc:start

// Start Daemonize RPC Server
php bin/swoft rpc:start -d

// Restart RPC Server
php bin/swoft rpc:restart

// Reload RPC Server
php bin/swoft rpc:reload

// Stop RPC Server
php bin/swoft rpc:stop
```

## Changelog

[Changelog](changelog.md)

## License

Swoft is an open-source software licensed under the [LICENSE](LICENSE)



#### 安装教程

1. xxxx
2. xxxx
3. xxxx

#### 使用说明

1. xxxx
2. xxxx
3. xxxx

#### 参与贡献

1. Fork 本仓库
2. 新建 Feat_xxx 分支
3. 提交代码
4. 新建 Pull Request


#### 码云特技

1. 使用 Readme\_XXX.md 来支持不同的语言，例如 Readme\_en.md, Readme\_zh.md
2. 码云官方博客 [blog.gitee.com](https://blog.gitee.com)
3. 你可以 [https://gitee.com/explore](https://gitee.com/explore) 这个地址来了解码云上的优秀开源项目
4. [GVP](https://gitee.com/gvp) 全称是码云最有价值开源项目，是码云综合评定出的优秀开源项目
5. 码云官方提供的使用手册 [https://gitee.com/help](https://gitee.com/help)
6. 码云封面人物是一档用来展示码云会员风采的栏目 [https://gitee.com/gitee-stars/](https://gitee.com/gitee-stars/)