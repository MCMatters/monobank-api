<?php

declare(strict_types=1);

namespace McMatters\MonobankApi\Helpers;

use const null;

use function strtoupper;

/**
 * Class CurrencyHelper
 *
 * @package McMatters\MonobankApi\Helpers
 */
class CurrencyHelper
{
    /**
     * Taken from https://www.iban.com/currency-codes
     * @var array
     */
    public static $currencies = [
        8 => [
            'code' => 'ALL',
            'name' => 'Lek',
            'country' => 'ALBANIA',
        ],
        12 => [
            'code' => 'DZD',
            'name' => 'Algerian Dinar',
            'country' => 'ALGERIA',
        ],
        32 => [
            'code' => 'ARS',
            'name' => 'Argentine Peso',
            'country' => 'ARGENTINA',
        ],
        36 => [
            'code' => 'AUD',
            'name' => 'Australian Dollar',
            'country' => 'TUVALU',
        ],
        44 => [
            'code' => 'BSD',
            'name' => 'Bahamian Dollar',
            'country' => 'BAHAMAS (THE)',
        ],
        48 => [
            'code' => 'BHD',
            'name' => 'Bahraini Dinar',
            'country' => 'BAHRAIN',
        ],
        50 => [
            'code' => 'BDT',
            'name' => 'Taka',
            'country' => 'BANGLADESH',
        ],
        51 => [
            'code' => 'AMD',
            'name' => 'Armenian Dram',
            'country' => 'ARMENIA',
        ],
        52 => [
            'code' => 'BBD',
            'name' => 'Barbados Dollar',
            'country' => 'BARBADOS',
        ],
        60 => [
            'code' => 'BMD',
            'name' => 'Bermudian Dollar',
            'country' => 'BERMUDA',
        ],
        64 => [
            'code' => 'BTN',
            'name' => 'Ngultrum',
            'country' => 'BHUTAN',
        ],
        68 => [
            'code' => 'BOB',
            'name' => 'Boliviano',
            'country' => 'BOLIVIA (PLURINATIONAL STATE OF)',
        ],
        72 => [
            'code' => 'BWP',
            'name' => 'Pula',
            'country' => 'BOTSWANA',
        ],
        84 => [
            'code' => 'BZD',
            'name' => 'Belize Dollar',
            'country' => 'BELIZE',
        ],
        90 => [
            'code' => 'SBD',
            'name' => 'Solomon Islands Dollar',
            'country' => 'SOLOMON ISLANDS',
        ],
        96 => [
            'code' => 'BND',
            'name' => 'Brunei Dollar',
            'country' => 'BRUNEI DARUSSALAM',
        ],
        104 => [
            'code' => 'MMK',
            'name' => 'Kyat',
            'country' => 'MYANMAR',
        ],
        108 => [
            'code' => 'BIF',
            'name' => 'Burundi Franc',
            'country' => 'BURUNDI',
        ],
        116 => [
            'code' => 'KHR',
            'name' => 'Riel',
            'country' => 'CAMBODIA',
        ],
        124 => [
            'code' => 'CAD',
            'name' => 'Canadian Dollar',
            'country' => 'CANADA',
        ],
        132 => [
            'code' => 'CVE',
            'name' => 'Cabo Verde Escudo',
            'country' => 'CABO VERDE',
        ],
        136 => [
            'code' => 'KYD',
            'name' => 'Cayman Islands Dollar',
            'country' => 'CAYMAN ISLANDS (THE)',
        ],
        144 => [
            'code' => 'LKR',
            'name' => 'Sri Lanka Rupee',
            'country' => 'SRI LANKA',
        ],
        152 => [
            'code' => 'CLP',
            'name' => 'Chilean Peso',
            'country' => 'CHILE',
        ],
        156 => [
            'code' => 'CNY',
            'name' => 'Yuan Renminbi',
            'country' => 'CHINA',
        ],
        170 => [
            'code' => 'COP',
            'name' => 'Colombian Peso',
            'country' => 'COLOMBIA',
        ],
        174 => [
            'code' => 'KMF',
            'name' => 'Comoro Franc',
            'country' => 'COMOROS (THE)',
        ],
        188 => [
            'code' => 'CRC',
            'name' => 'Costa Rican Colon',
            'country' => 'COSTA RICA',
        ],
        191 => [
            'code' => 'HRK',
            'name' => 'Kuna',
            'country' => 'CROATIA',
        ],
        192 => [
            'code' => 'CUP',
            'name' => 'Cuban Peso',
            'country' => 'CUBA',
        ],
        203 => [
            'code' => 'CZK',
            'name' => 'Czech Koruna',
            'country' => 'CZECH REPUBLIC (THE)',
        ],
        208 => [
            'code' => 'DKK',
            'name' => 'Danish Krone',
            'country' => 'GREENLAND',
        ],
        214 => [
            'code' => 'DOP',
            'name' => 'Dominican Peso',
            'country' => 'DOMINICAN REPUBLIC (THE)',
        ],
        222 => [
            'code' => 'SVC',
            'name' => 'El Salvador Colon',
            'country' => 'EL SALVADOR',
        ],
        230 => [
            'code' => 'ETB',
            'name' => 'Ethiopian Birr',
            'country' => 'ETHIOPIA',
        ],
        232 => [
            'code' => 'ERN',
            'name' => 'Nakfa',
            'country' => 'ERITREA',
        ],
        238 => [
            'code' => 'FKP',
            'name' => 'Falkland Islands Pound',
            'country' => 'FALKLAND ISLANDS (THE) [MALVINAS]',
        ],
        242 => [
            'code' => 'FJD',
            'name' => 'Fiji Dollar',
            'country' => 'FIJI',
        ],
        262 => [
            'code' => 'DJF',
            'name' => 'Djibouti Franc',
            'country' => 'DJIBOUTI',
        ],
        270 => [
            'code' => 'GMD',
            'name' => 'Dalasi',
            'country' => 'GAMBIA (THE)',
        ],
        292 => [
            'code' => 'GIP',
            'name' => 'Gibraltar Pound',
            'country' => 'GIBRALTAR',
        ],
        320 => [
            'code' => 'GTQ',
            'name' => 'Quetzal',
            'country' => 'GUATEMALA',
        ],
        324 => [
            'code' => 'GNF',
            'name' => 'Guinea Franc',
            'country' => 'GUINEA',
        ],
        328 => [
            'code' => 'GYD',
            'name' => 'Guyana Dollar',
            'country' => 'GUYANA',
        ],
        332 => [
            'code' => 'HTG',
            'name' => 'Gourde',
            'country' => 'HAITI',
        ],
        340 => [
            'code' => 'HNL',
            'name' => 'Lempira',
            'country' => 'HONDURAS',
        ],
        344 => [
            'code' => 'HKD',
            'name' => 'Hong Kong Dollar',
            'country' => 'HONG KONG',
        ],
        348 => [
            'code' => 'HUF',
            'name' => 'Forint',
            'country' => 'HUNGARY',
        ],
        352 => [
            'code' => 'ISK',
            'name' => 'Iceland Krona',
            'country' => 'ICELAND',
        ],
        356 => [
            'code' => 'INR',
            'name' => 'Indian Rupee',
            'country' => 'INDIA',
        ],
        360 => [
            'code' => 'IDR',
            'name' => 'Rupiah',
            'country' => 'INDONESIA',
        ],
        364 => [
            'code' => 'IRR',
            'name' => 'Iranian Rial',
            'country' => 'IRAN (ISLAMIC REPUBLIC OF)',
        ],
        368 => [
            'code' => 'IQD',
            'name' => 'Iraqi Dinar',
            'country' => 'IRAQ',
        ],
        376 => [
            'code' => 'ILS',
            'name' => 'New Israeli Sheqel',
            'country' => 'ISRAEL',
        ],
        388 => [
            'code' => 'JMD',
            'name' => 'Jamaican Dollar',
            'country' => 'JAMAICA',
        ],
        392 => [
            'code' => 'JPY',
            'name' => 'Yen',
            'country' => 'JAPAN',
        ],
        398 => [
            'code' => 'KZT',
            'name' => 'Tenge',
            'country' => 'KAZAKHSTAN',
        ],
        400 => [
            'code' => 'JOD',
            'name' => 'Jordanian Dinar',
            'country' => 'JORDAN',
        ],
        404 => [
            'code' => 'KES',
            'name' => 'Kenyan Shilling',
            'country' => 'KENYA',
        ],
        408 => [
            'code' => 'KPW',
            'name' => 'North Korean Won',
            'country' => 'KOREA (THE DEMOCRATIC PEOPLE’S REPUBLIC OF)',
        ],
        410 => [
            'code' => 'KRW',
            'name' => 'Won',
            'country' => 'KOREA (THE REPUBLIC OF)',
        ],
        414 => [
            'code' => 'KWD',
            'name' => 'Kuwaiti Dinar',
            'country' => 'KUWAIT',
        ],
        417 => [
            'code' => 'KGS',
            'name' => 'Som',
            'country' => 'KYRGYZSTAN',
        ],
        418 => [
            'code' => 'LAK',
            'name' => 'Kip',
            'country' => 'LAO PEOPLE’S DEMOCRATIC REPUBLIC (THE)',
        ],
        422 => [
            'code' => 'LBP',
            'name' => 'Lebanese Pound',
            'country' => 'LEBANON',
        ],
        426 => [
            'code' => 'LSL',
            'name' => 'Loti',
            'country' => 'LESOTHO',
        ],
        430 => [
            'code' => 'LRD',
            'name' => 'Liberian Dollar',
            'country' => 'LIBERIA',
        ],
        434 => [
            'code' => 'LYD',
            'name' => 'Libyan Dinar',
            'country' => 'LIBYA',
        ],
        446 => [
            'code' => 'MOP',
            'name' => 'Pataca',
            'country' => 'MACAO',
        ],
        454 => [
            'code' => 'MWK',
            'name' => 'Kwacha',
            'country' => 'MALAWI',
        ],
        458 => [
            'code' => 'MYR',
            'name' => 'Malaysian Ringgit',
            'country' => 'MALAYSIA',
        ],
        462 => [
            'code' => 'MVR',
            'name' => 'Rufiyaa',
            'country' => 'MALDIVES',
        ],
        480 => [
            'code' => 'MUR',
            'name' => 'Mauritius Rupee',
            'country' => 'MAURITIUS',
        ],
        484 => [
            'code' => 'MXN',
            'name' => 'Mexican Peso',
            'country' => 'MEXICO',
        ],
        496 => [
            'code' => 'MNT',
            'name' => 'Tugrik',
            'country' => 'MONGOLIA',
        ],
        498 => [
            'code' => 'MDL',
            'name' => 'Moldovan Leu',
            'country' => 'MOLDOVA (THE REPUBLIC OF)',
        ],
        504 => [
            'code' => 'MAD',
            'name' => 'Moroccan Dirham',
            'country' => 'WESTERN SAHARA',
        ],
        512 => [
            'code' => 'OMR',
            'name' => 'Rial Omani',
            'country' => 'OMAN',
        ],
        516 => [
            'code' => 'NAD',
            'name' => 'Namibia Dollar',
            'country' => 'NAMIBIA',
        ],
        524 => [
            'code' => 'NPR',
            'name' => 'Nepalese Rupee',
            'country' => 'NEPAL',
        ],
        532 => [
            'code' => 'ANG',
            'name' => 'Netherlands Antillean Guilder',
            'country' => 'SINT MAARTEN (DUTCH PART)',
        ],
        533 => [
            'code' => 'AWG',
            'name' => 'Aruban Florin',
            'country' => 'ARUBA',
        ],
        548 => [
            'code' => 'VUV',
            'name' => 'Vatu',
            'country' => 'VANUATU',
        ],
        554 => [
            'code' => 'NZD',
            'name' => 'New Zealand Dollar',
            'country' => 'TOKELAU',
        ],
        558 => [
            'code' => 'NIO',
            'name' => 'Cordoba Oro',
            'country' => 'NICARAGUA',
        ],
        566 => [
            'code' => 'NGN',
            'name' => 'Naira',
            'country' => 'NIGERIA',
        ],
        578 => [
            'code' => 'NOK',
            'name' => 'Norwegian Krone',
            'country' => 'SVALBARD AND JAN MAYEN',
        ],
        586 => [
            'code' => 'PKR',
            'name' => 'Pakistan Rupee',
            'country' => 'PAKISTAN',
        ],
        590 => [
            'code' => 'PAB',
            'name' => 'Balboa',
            'country' => 'PANAMA',
        ],
        598 => [
            'code' => 'PGK',
            'name' => 'Kina',
            'country' => 'PAPUA NEW GUINEA',
        ],
        600 => [
            'code' => 'PYG',
            'name' => 'Guarani',
            'country' => 'PARAGUAY',
        ],
        604 => [
            'code' => 'PEN',
            'name' => 'Nuevo Sol',
            'country' => 'PERU',
        ],
        608 => [
            'code' => 'PHP',
            'name' => 'Philippine Peso',
            'country' => 'PHILIPPINES (THE)',
        ],
        634 => [
            'code' => 'QAR',
            'name' => 'Qatari Rial',
            'country' => 'QATAR',
        ],
        643 => [
            'code' => 'RUB',
            'name' => 'Russian Ruble',
            'country' => 'RUSSIAN FEDERATION (THE)',
        ],
        646 => [
            'code' => 'RWF',
            'name' => 'Rwanda Franc',
            'country' => 'RWANDA',
        ],
        654 => [
            'code' => 'SHP',
            'name' => 'Saint Helena Pound',
            'country' => 'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA',
        ],
        682 => [
            'code' => 'SAR',
            'name' => 'Saudi Riyal',
            'country' => 'SAUDI ARABIA',
        ],
        690 => [
            'code' => 'SCR',
            'name' => 'Seychelles Rupee',
            'country' => 'SEYCHELLES',
        ],
        694 => [
            'code' => 'SLL',
            'name' => 'Leone',
            'country' => 'SIERRA LEONE',
        ],
        702 => [
            'code' => 'SGD',
            'name' => 'Singapore Dollar',
            'country' => 'SINGAPORE',
        ],
        704 => [
            'code' => 'VND',
            'name' => 'Dong',
            'country' => 'VIET NAM',
        ],
        706 => [
            'code' => 'SOS',
            'name' => 'Somali Shilling',
            'country' => 'SOMALIA',
        ],
        710 => [
            'code' => 'ZAR',
            'name' => 'Rand',
            'country' => 'SOUTH AFRICA',
        ],
        728 => [
            'code' => 'SSP',
            'name' => 'South Sudanese Pound',
            'country' => 'SOUTH SUDAN',
        ],
        748 => [
            'code' => 'SZL',
            'name' => 'Lilangeni',
            'country' => 'SWAZILAND',
        ],
        752 => [
            'code' => 'SEK',
            'name' => 'Swedish Krona',
            'country' => 'SWEDEN',
        ],
        756 => [
            'code' => 'CHF',
            'name' => 'Swiss Franc',
            'country' => 'SWITZERLAND',
        ],
        760 => [
            'code' => 'SYP',
            'name' => 'Syrian Pound',
            'country' => 'SYRIAN ARAB REPUBLIC',
        ],
        764 => [
            'code' => 'THB',
            'name' => 'Baht',
            'country' => 'THAILAND',
        ],
        776 => [
            'code' => 'TOP',
            'name' => 'Pa’anga',
            'country' => 'TONGA',
        ],
        780 => [
            'code' => 'TTD',
            'name' => 'Trinidad and Tobago Dollar',
            'country' => 'TRINIDAD AND TOBAGO',
        ],
        784 => [
            'code' => 'AED',
            'name' => 'UAE Dirham',
            'country' => 'UNITED ARAB EMIRATES (THE)',
        ],
        788 => [
            'code' => 'TND',
            'name' => 'Tunisian Dinar',
            'country' => 'TUNISIA',
        ],
        800 => [
            'code' => 'UGX',
            'name' => 'Uganda Shilling',
            'country' => 'UGANDA',
        ],
        807 => [
            'code' => 'MKD',
            'name' => 'Denar',
            'country' => 'REPUBLIC OF NORTH MACEDONIA',
        ],
        818 => [
            'code' => 'EGP',
            'name' => 'Egyptian Pound',
            'country' => 'EGYPT',
        ],
        826 => [
            'code' => 'GBP',
            'name' => 'Pound Sterling',
            'country' => 'UNITED KINGDOM OF GREAT BRITAIN AND NORTHERN IRELAND (THE)',
        ],
        834 => [
            'code' => 'TZS',
            'name' => 'Tanzanian Shilling',
            'country' => 'TANZANIA, UNITED REPUBLIC OF',
        ],
        840 => [
            'code' => 'USD',
            'name' => 'US Dollar',
            'country' => 'VIRGIN ISLANDS (U.S.)',
        ],
        858 => [
            'code' => 'UYU',
            'name' => 'Peso Uruguayo',
            'country' => 'URUGUAY',
        ],
        860 => [
            'code' => 'UZS',
            'name' => 'Uzbekistan Sum',
            'country' => 'UZBEKISTAN',
        ],
        882 => [
            'code' => 'WST',
            'name' => 'Tala',
            'country' => 'SAMOA',
        ],
        886 => [
            'code' => 'YER',
            'name' => 'Yemeni Rial',
            'country' => 'YEMEN',
        ],
        901 => [
            'code' => 'TWD',
            'name' => 'New Taiwan Dollar',
            'country' => 'TAIWAN (PROVINCE OF CHINA)',
        ],
        929 => [
            'code' => 'MRU',
            'name' => 'Ouguiya',
            'country' => 'MAURITANIA',
        ],
        930 => [
            'code' => 'STN',
            'name' => 'Dobra',
            'country' => 'SAO TOME AND PRINCIPE',
        ],
        931 => [
            'code' => 'CUC',
            'name' => 'Peso Convertible',
            'country' => 'CUBA',
        ],
        932 => [
            'code' => 'ZWL',
            'name' => 'Zimbabwe Dollar',
            'country' => 'ZIMBABWE',
        ],
        933 => [
            'code' => 'BYN',
            'name' => 'Belarussian Ruble',
            'country' => 'BELARUS',
        ],
        934 => [
            'code' => 'TMT',
            'name' => 'Turkmenistan New Manat',
            'country' => 'TURKMENISTAN',
        ],
        936 => [
            'code' => 'GHS',
            'name' => 'Ghana Cedi',
            'country' => 'GHANA',
        ],
        937 => [
            'code' => 'VEF',
            'name' => 'Bolivar',
            'country' => 'VENEZUELA (BOLIVARIAN REPUBLIC OF)',
        ],
        938 => [
            'code' => 'SDG',
            'name' => 'Sudanese Pound',
            'country' => 'SUDAN (THE)',
        ],
        940 => [
            'code' => 'UYI',
            'name' => 'Uruguay Peso en Unidades Indexadas (URUIURUI)',
            'country' => 'URUGUAY',
        ],
        941 => [
            'code' => 'RSD',
            'name' => 'Serbian Dinar',
            'country' => 'SERBIA',
        ],
        943 => [
            'code' => 'MZN',
            'name' => 'Mozambique Metical',
            'country' => 'MOZAMBIQUE',
        ],
        944 => [
            'code' => 'AZN',
            'name' => 'Azerbaijanian Manat',
            'country' => 'AZERBAIJAN',
        ],
        946 => [
            'code' => 'RON',
            'name' => 'Romanian Leu',
            'country' => 'ROMANIA',
        ],
        947 => [
            'code' => 'CHE',
            'name' => 'WIR Euro',
            'country' => 'SWITZERLAND',
        ],
        948 => [
            'code' => 'CHW',
            'name' => 'WIR Franc',
            'country' => 'SWITZERLAND',
        ],
        949 => [
            'code' => 'TRY',
            'name' => 'Turkish Lira',
            'country' => 'TURKEY',
        ],
        950 => [
            'code' => 'XAF',
            'name' => 'CFA Franc BEAC',
            'country' => 'GABON',
        ],
        951 => [
            'code' => 'XCD',
            'name' => 'East Caribbean Dollar',
            'country' => 'SAINT VINCENT AND THE GRENADINES',
        ],
        952 => [
            'code' => 'XOF',
            'name' => 'CFA Franc BCEAO',
            'country' => 'TOGO',
        ],
        953 => [
            'code' => 'XPF',
            'name' => 'CFP Franc',
            'country' => 'WALLIS AND FUTUNA',
        ],
        960 => [
            'code' => 'XDR',
            'name' => 'SDR (Special Drawing Right)',
            'country' => 'INTERNATIONAL MONETARY FUND (IMF)',
        ],
        965 => [
            'code' => 'XUA',
            'name' => 'ADB Unit of Account',
            'country' => 'MEMBER COUNTRIES OF THE AFRICAN DEVELOPMENT BANK GROUP',
        ],
        967 => [
            'code' => 'ZMW',
            'name' => 'Zambian Kwacha',
            'country' => 'ZAMBIA',
        ],
        968 => [
            'code' => 'SRD',
            'name' => 'Surinam Dollar',
            'country' => 'SURINAME',
        ],
        969 => [
            'code' => 'MGA',
            'name' => 'Malagasy Ariary',
            'country' => 'MADAGASCAR',
        ],
        970 => [
            'code' => 'COU',
            'name' => 'Unidad de Valor Real',
            'country' => 'COLOMBIA',
        ],
        971 => [
            'code' => 'AFN',
            'name' => 'Afghani',
            'country' => 'AFGHANISTAN',
        ],
        972 => [
            'code' => 'TJS',
            'name' => 'Somoni',
            'country' => 'TAJIKISTAN',
        ],
        973 => [
            'code' => 'AOA',
            'name' => 'Kwanza',
            'country' => 'ANGOLA',
        ],
        975 => [
            'code' => 'BGN',
            'name' => 'Bulgarian Lev',
            'country' => 'BULGARIA',
        ],
        976 => [
            'code' => 'CDF',
            'name' => 'Congolese Franc',
            'country' => 'CONGO (THE DEMOCRATIC REPUBLIC OF THE)',
        ],
        977 => [
            'code' => 'BAM',
            'name' => 'Convertible Mark',
            'country' => 'BOSNIA AND HERZEGOVINA',
        ],
        978 => [
            'code' => 'EUR',
            'name' => 'Euro',
            'country' => 'ÅLAND ISLANDS',
        ],
        979 => [
            'code' => 'MXV',
            'name' => 'Mexican Unidad de Inversion (UDI)',
            'country' => 'MEXICO',
        ],
        980 => [
            'code' => 'UAH',
            'name' => 'Hryvnia',
            'country' => 'UKRAINE',
        ],
        981 => [
            'code' => 'GEL',
            'name' => 'Lari',
            'country' => 'GEORGIA',
        ],
        984 => [
            'code' => 'BOV',
            'name' => 'Mvdol',
            'country' => 'BOLIVIA (PLURINATIONAL STATE OF)',
        ],
        985 => [
            'code' => 'PLN',
            'name' => 'Zloty',
            'country' => 'POLAND',
        ],
        986 => [
            'code' => 'BRL',
            'name' => 'Brazilian Real',
            'country' => 'BRAZIL',
        ],
        990 => [
            'code' => 'CLF',
            'name' => 'Unidad de Fomento',
            'country' => 'CHILE',
        ],
        994 => [
            'code' => 'XSU',
            'name' => 'Sucre',
            'country' => 'SISTEMA UNITARIO DE COMPENSACION REGIONAL DE PAGOS "SUCRE"',
        ],
        997 => [
            'code' => 'USN',
            'name' => 'US Dollar (Next day)',
            'country' => 'UNITED STATES OF AMERICA (THE)',
        ],
    ];

    /**
     * @param int $code
     *
     * @return array|null
     */
    public static function getInfo(int $code): ?array
    {
        return self::$currencies[$code] ?? null;
    }

    /**
     * @param int $code
     *
     * @return string|null
     */
    public static function getName(int $code): ?string
    {
        return self::$currencies[$code]['name'] ?? null;
    }

    /**
     * @param int $code
     *
     * @return string|null
     */
    public static function getCountry(int $code): ?string
    {
        return self::$currencies[$code]['country'] ?? null;
    }

    /**
     * @param string $code
     *
     * @return int|null
     */
    public static function getNumberByCode(string $code): ?int
    {
        $code = strtoupper($code);

        foreach (self::$currencies as $number => $info) {
            if ($info['code'] === $code) {
                return $number;
            }
        }

        return null;
    }
}
