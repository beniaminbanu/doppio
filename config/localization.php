<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Localization Country
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default country for localization. You are free
    | to set this value to any of the countries which will be supported
    | by the localization.
    */

    'country' => 'RO',

    /*
    |--------------------------------------------------------------------------
    | Localization Locale
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default locale for localization. You are free
    | to set this value to any of the locales which will be supported
    | by the default country and by the localization.
    */

    'locale' => 'ro',

    /*
    |--------------------------------------------------------------------------
    | Localization Currency
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default currency for localization. You are free
    | to set this value to any of the currencies which will be supported
    | by the default country and by the localization.
    */

    'currency' => 'RON',

    /*
    |--------------------------------------------------------------------------
    | Localization Timezones
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for localization. You are free
    | to set this value to any of the timezones which will be supported
    | by the localization.
    */

    'timezone' => 'Europe/Bucharest',

    /*
    |--------------------------------------------------------------------------
    | Localization Repository
    |--------------------------------------------------------------------------
    |
    | A localization repository provides all supported localization information
    | for your application. By default, it is used a repository that loads
    | data from this config file into memory. Feel free to implement any
    | other type of repository your application needs.
    |
    */

    'repository' => \CrossTimeTech\Laravel\Localization\Repositories\InMemoryRepository::class,
//    'repository' => \CrossTimeTech\Laravel\Localization\Repositories\DatabaseRepository::class,

    /*
    |--------------------------------------------------------------------------
    | Localization Storage
    |--------------------------------------------------------------------------
    |
    | A localization storage stores the current localization between requests.
    | By default, it is used a storage that stores the data in the session.
    | Feel free to implement any other type of storage your application
    | needs.
    |
    */

    'storage' => \CrossTimeTech\Laravel\Localization\Storages\SessionStorage::class,

    /*
    |--------------------------------------------------------------------------
    | Localization URL
    |--------------------------------------------------------------------------
    |
    | Here you may configure the localized URLs of your application.
    |
    */

    'url' => [

        /*
        |--------------------------------------------------------------------------
        | Localization URL Segment Presence
        |--------------------------------------------------------------------------
        |
        | Here you may specify if the URL segment for the default localization
        | should be hidden in the localized URLs. When this option is true,
        | for default locale "en" and default country "RO", the URL
        | "/en-ro/about" is the same as "/about".
        |
        */

        'hide_default_localization' => true,

        /*
        |--------------------------------------------------------------------------
        | Localization URL Segment
        |--------------------------------------------------------------------------
        |
        | Here you can configure what localization information the URL segment
        | should contain. You can choose between "/locale-country" ("/en-ro"),
        | or "/locale" ("/en") segments.
        |
        */

        'segment' => \CrossTimeTech\Laravel\Localization\Url\LocaleCountryUrlSegment::class,
//        'segment' => \CrossTimeTech\Laravel\Localization\Url\LocaleUrlSegment::class,

        /*
        |--------------------------------------------------------------------------
        | Localization URL Segment Formatters
        |--------------------------------------------------------------------------
        |
        | Here you can configure which formatters will be used to format the locale
        | and country from the URL segment before they are sent to Localization.
        |
        */

        'formatters' => [
            'locale' => \CrossTimeTech\Laravel\Localization\Formatters\LowerFormatter::class,
            'country' => \CrossTimeTech\Laravel\Localization\Formatters\UpperFormatter::class,
        ],

        /*
        |--------------------------------------------------------------------------
        | Localization URL Translation Key
        |--------------------------------------------------------------------------
        |
        | This option defines the prefix for the translation key. This value is
        | automatically prepended to the name of route to be translated.
        |
        */

        'translation_key' => 'routes',
    ],

    /*
    |--------------------------------------------------------------------------
    | Localization Callbacks
    |--------------------------------------------------------------------------
    |
    | Here are each of the callbacks that are called when the localization is
    | initiated or updated.
    |
    */

    'callbacks' => [
        \CrossTimeTech\Laravel\Localization\Callbacks\SetApplicationLocale::class,
        \CrossTimeTech\Laravel\Localization\Callbacks\SetPhpLocale::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Localization setlocale()
    |--------------------------------------------------------------------------
    |
    | Here you may configure the options for setlocale() built-in function.
    |
    */

    'setlocale' => [

        /*
        |--------------------------------------------------------------------------
        | setlocale() encoding
        |--------------------------------------------------------------------------
        |
        | This option defines the encoding for certain setlocale() categories, such
        | as LC_TIME or LC_MONETARY. The default value is "UTF-8" and you may need
        | to set blank on Windows systems, "utf8" on CentOS systems and similar.
        |
        */

        'encoding' => env('LOCALIZATION_SETLOCALE_ENCODING_SUFFIX', 'UTF-8'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Localization Database
    |--------------------------------------------------------------------------
    |
    | Here you may configure the database that you want to use for the
    | localization repository that stores data in the database.
    |
    */

    'database' => [

        /*
        |--------------------------------------------------------------------------
        | Localization Database Migrations
        |--------------------------------------------------------------------------
        |
        | If your application works with the database repository, make this option
        | "true" to automatically load the migrations that create the tables to
        | contain the supported localization data.
        |
        */

        'migrate' => false,

        /*
        |--------------------------------------------------------------------------
        | Localization Database Models
        |--------------------------------------------------------------------------
        |
        | Here you may specify the basic localization models.
        |
        */

        'models' => [
            'country' => \CrossTimeTech\Laravel\Localization\Database\LocalizationCountry::class,
            'locale' => \CrossTimeTech\Laravel\Localization\Database\LocalizationLocale::class,
            'currency' => \CrossTimeTech\Laravel\Localization\Database\LocalizationCurrency::class,
            'timezone' => \CrossTimeTech\Laravel\Localization\Database\LocalizationTimezone::class,
        ],

        /*
        |--------------------------------------------------------------------------
        | Localization Database Connection
        |--------------------------------------------------------------------------
        |
        | Here you may specify which database connection to use when migrating
        | the localization tables and working with database repository.
        |
        */

        'connection' => null,

        /*
        |--------------------------------------------------------------------------
        | Localization Database Tables
        |--------------------------------------------------------------------------
        |
        | Here you may specify the names of localization tables.
        |
        */

        'tables' => [
            'countries' => 'localization_countries',
            'locales' => 'localization_locales',
            'currencies' => 'localization_currencies',
            'timezones' => 'localization_timezones',
        ],

        /*
        |--------------------------------------------------------------------------
        | Localization Database Iso Codes Length
        |--------------------------------------------------------------------------
        |
        | Here you may specify how many characters the Iso Codes have. These
        | values will be applied to the length of all related columns in
        | the database.
        |
        */

        'iso_codes_length' => [
            'country' => 2,
            'locale' => 2,
            'currency' => 3,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Localization Supported Countries
    |--------------------------------------------------------------------------
    |
    | Here are each of the countries for your application. For each country,
    | you must specify the iso code, name, official name, primary locale
    | iso code, primary currency iso code and primary timezone.
    |
    | If you have to force the country to accept only certain locales and\or
    | certain currencies, list their iso codes to the "locales" and\or
    | the "currencies" arrays.
    |
    | If you have to translate the country name of official name, list their
    | translations as "locale-translations[]" pairs to the "translations"
    | array.
    */

    'countries' => [
        'BE' => [
            'name' => 'Belgium',
            'official' => 'The Kingdom of Belgium',
            'locale' => 'fr',
            'locales' => [],
            'currency' => 'EUR',
            'currencies' => [],
            'timezone' => 'Europe/Brussels',
            'translations' => [
                'en' => ['name' => 'English', 'official' => 'English'],
                'ro' => ['name' => 'Belgia', 'official' => 'Regatul Belgiei'],
            ],
        ],
        'FR' => [
            'name' => 'France',
            'official' => 'The French Republic',
            'locale' => 'fr',
            'locales' => [],
            'currency' => 'EUR',
            'currencies' => [],
            'timezone' => 'Europe/Paris',
            'translations' => [
                'en' => ['name' => 'English', 'official' => 'English'],
                'ro' => ['name' => 'Franţa', 'official' => 'Republica Franceză'],
            ],
        ],
        'GB' => [
            'name' => 'United Kingdom',
            'official' => 'The United Kingdom of Great Britain and Northern Ireland',
            'locale' => 'en',
            'locales' => [],
            'currency' => 'GBP',
            'currencies' => [],
            'timezone' => 'Europe/London',
            'translations' => [
                'en' => ['name' => 'English', 'official' => 'English'],
                'ro' => ['name' => 'Regatul Unit', 'official' => 'Regatul Unit al Marii Britanii și Irlandei de Nord'],
            ],
        ],
        'RO' => [
            'name' => 'Romania',
            'official' => 'Romania',
            'locale' => 'ro',
            'locales' => [],
            'currency' => 'RON',
            'currencies' => [],
            'timezone' => 'Europe/Bucharest',
            'translations' => [
                'en' => ['name' => 'English', 'official' => 'English'],
                'ro' => ['name' => 'România', 'official' => 'România'],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Localization Supported Locales
    |--------------------------------------------------------------------------
    |
    | Here are each of the locales for your application. For each locale,
    | you must specify the iso code, name, native name, regional,
    | script and direction.
    |
    | If you have to translate the locale name, add its translations as
    | "locale-translations[]" pairs to the "translations" array.
    |
    */

    'locales' => [
        'ro' => [
            'name' => 'Romanian',
            'native' => 'Română',
            'regional' => 'ro_RO',
            'script' => 'Latn',
            'direction' => 'ltr',
            'translations' => [
                'en' => ['name' => 'Engleză'],
                'ro' => ['name' => 'Română'],
            ],
        ],
        'en' => [
            'name' => 'English',
            'native' => 'English',
            'regional' => 'en_GB',
            'script' => 'Latn',
            'direction' => 'ltr',
            'translations' => [
                'en' => ['name' => 'English'],
                'ro' => ['name' => 'Romanian'],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Localization Supported Currencies
    |--------------------------------------------------------------------------
    |
    | Here are each of the locales for your application. For each locale,
    | you must specify the iso code, name, native name, regional,
    | script and direction.
    |
    | If you have to translate the locale name, add its translations as
    | "locale-translations[]" pairs to the "translations" array.
    |
    */

    'currencies' => [
        'EUR' => [
            'name' => 'Euro',
            'official' => 'Euro',
            'symbol' => '€',
            'translations' => [],
        ],
        'GBP' => [
            'name' => 'Pound sterling',
            'official' => 'Pound sterling',
            'symbol' => '£',
            'translations' => [
                'fr' => ['name' => 'Livre sterling', 'official' => 'Livre sterling'],
                'ro' => ['name' => 'Liră sterlină', 'official' => 'Liră sterlină'],
            ],
        ],
        'RON' => [
            'name' => 'Romanian Leu',
            'official' => 'Romanian Leu',
            'symbol' => 'Lei',
            'translations' => [
                'fr' => ['name' => 'Roumanie Leu', 'official' => 'Roumanie Leu'],
                'ro' => ['name' => 'Leu românesc', 'official' => 'Leu nou românesc'],
            ],
        ],
        'USD' => [
            'name' => 'US Dollar',
            'official' => 'United States Dollar',
            'symbol' => '$',
            'translations' => [
                'fr' => ['name' => 'Dollar américain', 'official' => 'Dollar États-Unis'],
                'ro' => ['name' => 'Dolar american', 'official' => 'Dolarul Statelor Unite'],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Localization Supported Timezones
    |--------------------------------------------------------------------------
    |
    | Here are each of the timezones for your application. For each timezone,
    | you must specify the identifier, name, gmt offset and gmt zone.
    |
    | If you have to translate the timezone name, add its translations as
    | "locale-translations[]" pairs to the "translations" array.
    |
    */

    'timezones' => [
        'UTC' => [
            'name' => 'UTC GMT+0',
            'gmt' => 0,
            'gmt_zone' => 'east',
            'translations' => [],
        ],
        'Europe/London' => [
            'name' => 'London GMT+1',
            'gmt' => 1,
            'gmt_zone' => 'east',
            'translations' => [
                'fr' => ['name' => 'Londres GMT+1'],
                'ro' => ['name' => 'Londra GMT+1'],
            ],
        ],
        'Europe/Brussels' => [
            'name' => 'Brussels GMT+2',
            'gmt' => 2,
            'gmt_zone' => 'east',
            'translations' => [
                'fr' => ['name' => 'Bruxelles GMT+2'],
                'ro' => ['name' => 'Bruxelles GMT+2'],
            ],
        ],
        'Europe/Paris' => [
            'name' => 'Paris GMT+2',
            'gmt' => 2,
            'gmt_zone' => 'east',
            'translations' => [],
        ],
        'Europe/Bucharest' => [
            'name' => 'Bucharest GMT+3',
            'gmt' => 3,
            'gmt_zone' => 'east',
            'translations' => [
                'fr' => ['name' => 'Bucarest GMT+3'],
                'ro' => ['name' => 'Bucureşti GMT+3'],
            ],
        ],
        'America/New_York' => [
            'name' => 'New York GMT-4',
            'gmt' => -4,
            'gmt_zone' => 'west',
            'translations' => [],
        ],
    ],
];
