# Language Pack Maker

Uses `class Language_Pack_Maker` installed via composer into your local translation repository to create a directory of zip archives of translation .mo/.po files and a `language-pack.json` file containing data to pass to [GitHub Updater](https://github.com/afragen/github-updater) or [Translations Updater library](https://github.com/afragen/translations-updater).

Install the package via composer.

Run the composer command: ```composer require afragen/language-pack-maker:dev-master```

This library requires all .mo/.po files to be in a `/languages` directory located in the repository root. It will create zipfiles in a `/packages` directory in the repository root. It will create a `language-pack.json` file in the repository root.

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

To utilize the Language Pack Creator, you will need to open `http://localhost/my-translation-repo/vendor/afragen/language-pack-maker/index.php` in localhost in your browser. Once these packages and the JSON file are created, simply upload them to your public git repository of translations.
