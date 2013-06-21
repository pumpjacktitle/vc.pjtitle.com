### Extensions

Extensions allows you to extend Platform 2 beyond its basic functionality. The
default extensions for Platform 2 are actually composer packages. If you want,
for example, to add a media library, you could add it as a composer package
and after running a composer install, it would get published to the
extensions folder on your Platform 2 application.

Extensions may also be part of your application's repo and not separate composer
packages. They may sit under the extensions or the workbench folder. Be sure to
adjust `extensions/.gitignore` file if you need.

An extension can hold views, controllers, migrations, models, languages files,
anything you'd normally create in the Laravel 4 `app` directory. This gives
you a nice and convenient way of separating your functionality which you
can later re-use in other applications. Most extensions can be managed
under the operations tab in the Platform 2 admin panel.

Cartalyst's Platform 2 heavily relies on extensions as most of its core functionality
are based on extensions.

> **Note:** All extensions present at the installation time will be installed.
There is no need to modify the installer for any custom extensions you may have.
This makes distributing your own apps or sites that run on Platform 2 a breeze.

### Requirements

**composer.json**

One requirement for Platform 2 to detect composer packages as extensions is to
place the following in your package's `composer.json` file:

	"type": "platform-extension",
	"require": {
		"cartalyst/composer-installers": "1.0.*"
	}

This will identify your package as a Platform 2 extension.

**extension.php**

This file, which resides in the root of your extension folder, defines all of
the info about your extension, like the current version, its authors, the
extension uri (for optional automatic controller routing), ... as well
as the extension routes, settings, menus and much more.