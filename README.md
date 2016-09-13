# PHP Slim Framework v3.5 Skeleton

Use this skeleton application to quickly setup and start working on a new Slim Framework v3.5 application.

This skeleton application was built for Composer. This makes setting up a new Slim Framework v3.5 application quick and easy.

[![Latest Stable Version](https://poser.pugx.org/ricardoper/slim3-skeleton/v/stable.svg)](https://packagist.org/packages/ricardoper/slim3-skeleton) [![Total Downloads](https://poser.pugx.org/ricardoper/slim3-skeleton/downloads.svg)](https://packagist.org/packages/ricardoper/slim3-skeleton) ![License](https://poser.pugx.org/ricardoper/slim3-skeleton/license.svg)

- [PSR-2](http://www.php-fig.org/psr/psr-2/ "PHP Framework Interop Group")
- [PSR-4](http://www.php-fig.org/psr/psr-4/ "PHP Framework Interop Group")
- PHP 5.5
- Namespaced
<br><br>
+ Helpers
+ Services
+ Twig Views
+ Flash Messages
+ Symfony VarDumper
+ Logging with Monolog
+ Folders structure with sense
+ Environment variables with Dotenv

## How to install this skeleton

Run this command from the directory in which you want to install your new Slim Framework v3.5 Skeleton.

```bash
composer create-project ricardoper/slim3-skeleton [my-app-name]
```

Replace ```[my-app-name]``` with the desired directory name for your new application. You'll want to:
- Point your virtual host document root to your new application's ```public/``` directory.
- Ensure ```storage/``` is web writeable.

## Most relevant skeleton folders

- /app : Application code (App Namespace)
  + ./Controllers : Add your controllers here
  + ./Middlewares : Add your middlewares here
  + ./Routes : Add your routes here
  + ./Services : Add your services here
  + ./Views : Add your Twig views here
- /config : Add/modify your configurations here
- /public : Add your assets files here

## Controllers methods

- getContainer() : Returns the Slim App container
- getService(string $service) : Returns service from container by name
- getRequest() : Returns HTTP Request
- getResponse() : Returns HTTP Response
- getView() : Returns Twig View
- render(string $template, array $data) : Renders Twig page stored in Views folder

## Middleware methods

- getContainer() : Returns the Slim App container
- getService(string $service) : Returns service from container by name

## Helpers methods

- d() : Symfony VarDumper and continue
- dd() : Symfony VarDumper and die
- env(string $variable, string $default) : Return environment variables with
- base_path() : Returns base path location
- app_path() : Returns app path location
- config_path() : Returns config path location
- public_path() : Returns public path location
- storage_path() : Returns storage path location

## Middlewares

You can add as many middlewares as you want in a clean way (```/app/Middlewares```).

After add your middleware, you can enable or disable it in ```config/middlewares.php``` configuration file.

## Routes

You can add as many routes files as you want (```/app/Routes```), but you need to enable these files in ```/apps/Routes/app.php``` file.

## Services

You can add as many services as you want in a clean way (```/app/Services```).

After add your service, you can enable or disable it in ```config/services.php``` configuration file.

## Configurations

You can add as many configurations files as you want (```/config```), but you need to enable these files in ```/config/app.php``` file.

## Twig Globals

flash : To get Flash Messages

## Demo pages

Try the skeleton demo pages.

#### Welcome page:
http(s)://virtualhost.int/

#### Hello user:
http(s)://virtualhost.int/hello/[name]

**NOTE:** Replace ```[name]``` with the desired User name

--

### Enjoy the simplicity :oP
