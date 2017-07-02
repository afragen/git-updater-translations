# Language Pack Maker

Uses `class Fragen\Language_Pack_Maker\Language_Pack_Maker` installed via composer into your translation repository to create a directory of zip archives of translation .mo/.po files and a `language-pack.json` file containing data to pass to GitHub Updater.

Install the package via composer.

Run the composer command: ```composer require afragen/github-updater-language-pack-maker```


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

GitHub Updater will merge the correlative plugin or theme data with the data retrieved from the `language-pack.json` to add data to the update transient.

To utilize the Language Pack Creator, you will need to open `http://localhost/my-translation-repo/vendor/afragen/github-updater-language-pack-maker/index.php` in localhost in your browser.
