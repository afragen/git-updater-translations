# Language Pack Maker

Uses `class Language_Pack_Maker` installed via composer into your local translation repository to create a directory of zip archives of translation .mo/.po/.json files and a `language-pack.json` file containing data to pass to [GitHub Updater](https://github.com/afragen/github-updater) or [Translations Updater library](https://github.com/afragen/translations-updater).

Install the package via composer.

Run the composer command: ```composer require afragen/language-pack-maker:dev-master```

## Requirements

This library requires all .po files to be in a `/originals` directory located in the repository root.

* It will copy all .po files from `/originals` to `/languages`.
* It can run `wp i18n make-json` given the proper repository `composer.json` to create .json translation files for your javascript.
* It will create/re-create .mo files from the .po files.
* It will create zipfiles in a `/packages` directory in the repository root.
* It will create a `language-pack.json` file in the repository root.

The format of the generated JSON file is as follows.

```json
[
  {
    "{language}": [
      {
        "type": "{plugin|theme} from GitHub Updater",
        "slug": "{$slug}",
        "language": "en_US",
        "version": "from GitHub Updater",
        "updated": "PO-Revision-Date from .po file header",
        "package": "/packages/github-updater-en_US.zip",
        "autoupdate": "1"
      }
    ]
  }
]
```

The update transient expects the `$transient->translations` in the following format.

```php
$transient->translations( array(
	0 => array(
		'type'       => 'plugin',
		'slug'       => 'akismet',
		'language'   => 'de_CH',
		'version'    => '3.1.11',
		'updated'    => '2016-05-12 18:04:38',
		'package'    => 'https://downloads.wordpress.org/translation/plugin/akismet/3.1.11/de_CH.zip',
		'autoupdate' => 1,

	),
) );
```

[GitHub Updater](https://github.com/afragen/github-updater) or the [Translations Updater library](https://github.com/afragen/translations-updater) will merge the correlative plugin or theme data with the data retrieved from the `language-pack.json` to add data to the update transient. Language updates will appear in the WordPress dashboard.

To utilize the Language Pack Creator, you will need to open and run `http://localhost/<my-translation-repo>/vendor/autoload.php` in localhost. This will create the necessary .mo, .json, zipfiles, and `language-pack.json`.

### If you have translations in javascript files you should also do the following.

With the following added to your `composer.json` file, it will run the sequence described above on `composer update`.

```
  "scripts": {
    "post-update-cmd": [
      "mkdir -p ./languages; cp -r ./originals/*.po ./languages/",
      "wp i18n make-json languages/",
      "php ./vendor/autoload.php"
    ]
  }
```
