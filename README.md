# GitHub Updater Translations

**Official Language Pack Repository for GitHub Updater plugin**

Translators, please make PRs here. You only need to submit PRs for the .po/.mo files. Thanks.

Uses [`Language_Pack_Maker`](https://github.com/afragen/language-pack-maker) installed via composer to create a directory of zip archives of translation .mo/.po files and a `language-pack.json` file containing data to pass to GitHub Updater.

The format of the generated JSON file is as follows.

```json
[
  {
    "translations": [
      {
        "type": "(plugin|theme) from GitHub Updater",
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

GitHub Updater merges the correlative plugin or theme data with the data retrieved from the `language-pack.json` to add data to the update transient.

To utilize the Language Pack Creator, you will need to open and run `http://localhost/<my-translation-repo>/vendor/autoload.php` in localhost. This will create the necessary zipfiles and `language-pack.json`.
