## [unreleased]

## 3.0.0 / 2019-12-10
* process .json files in the framework
* added WP-CLI _loader_ as composer module, [fork of polevaultweb/phpunit-wp-cli-runner](https://github.com/polevaultweb/phpunit-wp-cli-runner)
* cleanup temp directory afterwards

## 2.0.0 / 2019-11-26
* fix processing of .json files, thanks @ahmader
* use gettext/gettext to parse translation headers for 'PO-Revision-Date'
* create the .mo files from the .po files with gettext/gettext

## 1.8.0 / 2019-11-24
* put version info in composer.json
* add .json files to processing for `wp_set_script_translations`

## 1.6.0 / 2018-09-11
* moved action from constructor
* update README
* update composer.json

## 1.5.0 / 2017-12-09
* renamed on GitHub

## 1.4.0 / 2017-07-02
* changed namespace to `Fragen\Language_Pack_Maker`
* minor linting improvements

## 1.3.0 / 2016-09-24
* get updated date from .po file header

## 1.2.0 / 2016-09-19
* use single `glob()` in `list_directory()`

## 1.1.0 / 2016-09-18
* use `glob()` in `list_directory()`

## 1.0.0 / 2016-09-12
* initial commit
