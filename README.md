# Git Updater Translations

**Official Language Pack Repository for Git Updater plugin**

Translators, please make PRs here. You only need to submit PRs for the .po files, .mo files will be generated automatically. Please add the .po files to the `languages` folder. Thanks.

Uses [`Language_Pack_Maker`](https://github.com/afragen/language-pack-maker) installed via composer to create a directory of zip archives of translation .mo/.po/.json files and a `language-pack.json` file containing data to pass to GitHub Updater.

The format of the generated JSON file is as follows.

```json
[
  {
    "translations": [
      {
        "type": "(plugin|theme) from Git Updater",
        "slug": "{$slug}",
        "language": "en_US",
        "version": "from Git Updater",
        "updated": "PO-Revision-Date from .po file header",
        "package": "/packages/git-updater-en_US.zip",
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

Git Updater merges the correlative plugin or theme data with the data retrieved from the `language-pack.json` to add data to the update transient.

## Add-On Translations

Translation repositories for the Add-Ons are located in the following individual repositories. The above instructions apply.

* [Git Updater PRO translations](https://github.com/afragen/git-updater-pro-translations)
* [Git Updater Additions translations](https://github.com/afragen/git-updater-additions-translations)
* [Git Remote Updater translations](https://github.com/afragen/git-remote-updater-translations)

* [Git Updater - Bitbucket translations](https://github.com/afragen/git-updater-bitbucket-translations)
* [Git Updater - GitLab translations](https://github.com/afragen/git-updater-gitlab-translations)
* [Git Updater - Gitea translations](https://github.com/afragen/git-updater-gitea-translations)
* [Git Updater - Gist translations](https://github.com/afragen/git-updater-gist-translations)
