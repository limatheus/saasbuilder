<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(["code" => "AF", "name" => addslashes("Afghanistan"), ]);
        Country::create(["code" => "AL", "name" => addslashes("Albania"), ]);
        Country::create(["code" => "DZ", "name" => addslashes("Algeria"), ]);
        Country::create(["code" => "AS", "name" => addslashes("American Samoa"), ]);
        Country::create(["code" => "AD", "name" => addslashes("Andorra"), ]);
        Country::create(["code" => "AO", "name" => addslashes("Angola"), ]);
        Country::create(["code" => "AI", "name" => addslashes("Anguilla"), ]);
        Country::create(["code" => "AQ", "name" => addslashes("Antarctica"), ]);
        Country::create(["code" => "AG", "name" => addslashes("Antigua and Barbuda"), ]);
        Country::create(["code" => "AR", "name" => addslashes("Argentina"), ]);
        Country::create(["code" => "AM", "name" => addslashes("Armenia"), ]);
        Country::create(["code" => "AW", "name" => addslashes("Aruba"), ]);
        Country::create(["code" => "AU", "name" => addslashes("Australia"), ]);
        Country::create(["code" => "AT", "name" => addslashes("Austria"), ]);
        Country::create(["code" => "AZ", "name" => addslashes("Azerbaijan"), ]);
        Country::create(["code" => "BS", "name" => addslashes("Bahamas (the)"), ]);
        Country::create(["code" => "BH", "name" => addslashes("Bahrain"), ]);
        Country::create(["code" => "BD", "name" => addslashes("Bangladesh"), ]);
        Country::create(["code" => "BB", "name" => addslashes("Barbados"), ]);
        Country::create(["code" => "BY", "name" => addslashes("Belarus"), ]);
        Country::create(["code" => "BE", "name" => addslashes("Belgium"), ]);
        Country::create(["code" => "BZ", "name" => addslashes("Belize"), ]);
        Country::create(["code" => "BJ", "name" => addslashes("Benin"), ]);
        Country::create(["code" => "BM", "name" => addslashes("Bermuda"), ]);
        Country::create(["code" => "BT", "name" => addslashes("Bhutan"), ]);
        Country::create(["code" => "BO", "name" => addslashes("Bolivia (Plurinational State of)"), ]);
        Country::create(["code" => "BQ", "name" => addslashes("Bonaire, Sint Eustatius and Saba"), ]);
        Country::create(["code" => "BA", "name" => addslashes("Bosnia and Herzegovina"), ]);
        Country::create(["code" => "BW", "name" => addslashes("Botswana"), ]);
        Country::create(["code" => "BV", "name" => addslashes("Bouvet Island"), ]);
        Country::create(["code" => "BR", "name" => addslashes("Brazil"), ]);
        Country::create(["code" => "IO", "name" => addslashes("British Indian Ocean Territory (the)"), ]);
        Country::create(["code" => "BN", "name" => addslashes("Brunei Darussalam"), ]);
        Country::create(["code" => "BG", "name" => addslashes("Bulgaria"), ]);
        Country::create(["code" => "BF", "name" => addslashes("Burkina Faso"), ]);
        Country::create(["code" => "BI", "name" => addslashes("Burundi"), ]);
        Country::create(["code" => "CV", "name" => addslashes("Cabo Verde"), ]);
        Country::create(["code" => "KH", "name" => addslashes("Cambodia"), ]);
        Country::create(["code" => "CM", "name" => addslashes("Cameroon"), ]);
        Country::create(["code" => "CA", "name" => addslashes("Canada"), ]);
        Country::create(["code" => "KY", "name" => addslashes("Cayman Islands (the)"), ]);
        Country::create(["code" => "CF", "name" => addslashes("Central African Republic (the)"), ]);
        Country::create(["code" => "TD", "name" => addslashes("Chad"), ]);
        Country::create(["code" => "CL", "name" => addslashes("Chile"), ]);
        Country::create(["code" => "CN", "name" => addslashes("China"), ]);
        Country::create(["code" => "CX", "name" => addslashes("Christmas Island"), ]);
        Country::create(["code" => "CC", "name" => addslashes("Cocos (Keeling) Islands (the)"), ]);
        Country::create(["code" => "CO", "name" => addslashes("Colombia"), ]);

        Country::create(["code" => "KM", "name" => addslashes("Comoros (the)"), ]);
        Country::create(["code" => "CD", "name" => addslashes("Congo (the Democratic Republic of the)"), ]);
        Country::create(["code" => "CG", "name" => addslashes("Congo (the)"), ]);
        Country::create(["code" => "CK", "name" => addslashes("Cook Islands (the)"), ]);
        Country::create(["code" => "CR", "name" => addslashes("Costa Rica"), ]);
        Country::create(["code" => "HR", "name" => addslashes("Croatia"), ]);
        Country::create(["code" => "CU", "name" => addslashes("Cuba"), ]);

        Country::create(["code" => "CW", "name" => addslashes("Curaçao"), ]);
        Country::create(["code" => "CY", "name" => addslashes("Cyprus"), ]);
        Country::create(["code" => "CZ", "name" => addslashes("Czechia"), ]);
        Country::create(["code" => "CI", "name" => addslashes("Côte d'Ivoire"), ]);
        Country::create(["code" => "DK", "name" => addslashes("Denmark"), ]);
        Country::create(["code" => "DJ", "name" => addslashes("Djibouti"), ]);
        Country::create(["code" => "DM", "name" => addslashes("Dominica"), ]);

        Country::create(["code" => "DO", "name" => addslashes("Dominican Republic (the)"), ]);
        Country::create(["code" => "EC", "name" => addslashes("Ecuador"), ]);
        Country::create(["code" => "EG", "name" => addslashes("Egypt"), ]);
        Country::create(["code" => "SV", "name" => addslashes("El Salvador"), ]);
        Country::create(["code" => "GQ", "name" => addslashes("Equatorial Guinea"), ]);
        Country::create(["code" => "ER", "name" => addslashes("Eritrea"), ]);
        Country::create(["code" => "EE", "name" => addslashes("Estonia"), ]);

        Country::create(["code" => "SZ", "name" => addslashes("Eswatini"), ]);
        Country::create(["code" => "ET", "name" => addslashes("Ethiopia"), ]);
        Country::create(["code" => "FK", "name" => addslashes("Falkland Islands (the) [Malvinas]"), ]);
        Country::create(["code" => "FO", "name" => addslashes("Faroe Islands (the)"), ]);
        Country::create(["code" => "FJ", "name" => addslashes("Fiji"), ]);
        Country::create(["code" => "FI", "name" => addslashes("Finland"), ]);
        Country::create(["code" => "FR", "name" => addslashes("France"), ]);

        Country::create(["code" => "GF", "name" => addslashes("French Guiana"), ]);
        Country::create(["code" => "PF", "name" => addslashes("French Polynesia"), ]);
        Country::create(["code" => "TF", "name" => addslashes("French Southern Territories (the)"), ]);
        Country::create(["code" => "GA", "name" => addslashes("Gabon"), ]);
        Country::create(["code" => "GM", "name" => addslashes("Gambia (the)"), ]);
        Country::create(["code" => "GE", "name" => addslashes("Georgia"), ]);
        Country::create(["code" => "DE", "name" => addslashes("Germany"), ]);

        Country::create(["code" => "GH", "name" => addslashes("Ghana"), ]);
        Country::create(["code" => "GI", "name" => addslashes("Gibraltar"), ]);
        Country::create(["code" => "GR", "name" => addslashes("Greece"), ]);
        Country::create(["code" => "GL", "name" => addslashes("Greenland"), ]);
        Country::create(["code" => "GD", "name" => addslashes("Grenada"), ]);
        Country::create(["code" => "GP", "name" => addslashes("Guadeloupe"), ]);
        Country::create(["code" => "GU", "name" => addslashes("Guam"), ]);

        Country::create(["code" => "GT", "name" => addslashes("Guatemala"), ]);
        Country::create(["code" => "GG", "name" => addslashes("Guernsey"), ]);
        Country::create(["code" => "GN", "name" => addslashes("Guinea"), ]);
        Country::create(["code" => "GW", "name" => addslashes("Guinea-Bissau"), ]);
        Country::create(["code" => "GY", "name" => addslashes("Guyana"), ]);
        Country::create(["code" => "HT", "name" => addslashes("Haiti"), ]);
        Country::create(["code" => "HM", "name" => addslashes("Heard Island and McDonald Islands"), ]);

        Country::create(["code" => "VA", "name" => addslashes("Holy See (the)"), ]);
        Country::create(["code" => "HN", "name" => addslashes("Honduras"), ]);
        Country::create(["code" => "HK", "name" => addslashes("Hong Kong"), ]);
        Country::create(["code" => "HU", "name" => addslashes("Hungary"), ]);
        Country::create(["code" => "IS", "name" => addslashes("Iceland"), ]);
        Country::create(["code" => "IN", "name" => addslashes("India"), ]);
        Country::create(["code" => "ID", "name" => addslashes("Indonesia"), ]);

        Country::create(["code" => "IR", "name" => addslashes("Iran (Islamic Republic of)"), ]);
        Country::create(["code" => "IQ", "name" => addslashes("Iraq"), ]);
        Country::create(["code" => "IE", "name" => addslashes("Ireland"), ]);
        Country::create(["code" => "IM", "name" => addslashes("Isle of Man"), ]);
        Country::create(["code" => "IL", "name" => addslashes("Israel"), ]);
        Country::create(["code" => "IT", "name" => addslashes("Italy"), ]);
        Country::create(["code" => "JM", "name" => addslashes("Jamaica"), ]);

        Country::create(["code" => "JP", "name" => addslashes("Japan"), ]);
        Country::create(["code" => "JE", "name" => addslashes("Jersey"), ]);
        Country::create(["code" => "JO", "name" => addslashes("Jordan"), ]);
        Country::create(["code" => "KZ", "name" => addslashes("Kazakhstan"), ]);
        Country::create(["code" => "KE", "name" => addslashes("Kenya"), ]);
        Country::create(["code" => "KI", "name" => addslashes("Kiribati"), ]);
        Country::create(["code" => "KP", "name" => addslashes("Korea (the Democratic People's Republic of)"), ]);

        Country::create(["code" => "KR", "name" => addslashes("Korea (the Republic of)"), ]);
        Country::create(["code" => "KW", "name" => addslashes("Kuwait"), ]);
        Country::create(["code" => "KG", "name" => addslashes("Kyrgyzstan"), ]);
        Country::create(["code" => "LA", "name" => addslashes("Lao People's Democratic Republic (the)"), ]);
        Country::create(["code" => "LV", "name" => addslashes("Latvia"), ]);
        Country::create(["code" => "LB", "name" => addslashes("Lebanon"), ]);
        Country::create(["code" => "LS", "name" => addslashes("Lesotho"), ]);

        Country::create(["code" => "LR", "name" => addslashes("Liberia"), ]);
        Country::create(["code" => "LY", "name" => addslashes("Libya"), ]);
        Country::create(["code" => "LI", "name" => addslashes("Liechtenstein"), ]);
        Country::create(["code" => "LT", "name" => addslashes("Lithuania"), ]);
        Country::create(["code" => "LU", "name" => addslashes("Luxembourg"), ]);
        Country::create(["code" => "MO", "name" => addslashes("Macao"), ]);
        Country::create(["code" => "MG", "name" => addslashes("Madagascar"), ]);

        Country::create(["code" => "MW", "name" => addslashes("Malawi"), ]);
        Country::create(["code" => "MY", "name" => addslashes("Malaysia"), ]);
        Country::create(["code" => "MV", "name" => addslashes("Maldives"), ]);
        Country::create(["code" => "ML", "name" => addslashes("Mali"), ]);
        Country::create(["code" => "MT", "name" => addslashes("Malta"), ]);
        Country::create(["code" => "MH", "name" => addslashes("Marshall Islands (the)"), ]);
        Country::create(["code" => "MQ", "name" => addslashes("Martinique"), ]);

        Country::create(["code" => "MR", "name" => addslashes("Mauritania"), ]);
        Country::create(["code" => "MU", "name" => addslashes("Mauritius"), ]);
        Country::create(["code" => "YT", "name" => addslashes("Mayotte"), ]);
        Country::create(["code" => "MX", "name" => addslashes("Mexico"), ]);
        Country::create(["code" => "FM", "name" => addslashes("Micronesia (Federated States of)"), ]);
        Country::create(["code" => "MD", "name" => addslashes("Moldova (the Republic of)"), ]);
        Country::create(["code" => "MC", "name" => addslashes("Monaco"), ]);

        Country::create(["code" => "MN", "name" => addslashes("Mongolia"), ]);
        Country::create(["code" => "ME", "name" => addslashes("Montenegro"), ]);
        Country::create(["code" => "MS", "name" => addslashes("Montserrat"), ]);
        Country::create(["code" => "MA", "name" => addslashes("Morocco"), ]);
        Country::create(["code" => "MZ", "name" => addslashes("Mozambique"), ]);
        Country::create(["code" => "MM", "name" => addslashes("Myanmar"), ]);
        Country::create(["code" => "NA", "name" => addslashes("Namibia"), ]);

        Country::create(["code" => "NR", "name" => addslashes("Nauru"), ]);
        Country::create(["code" => "NP", "name" => addslashes("Nepal"), ]);
        Country::create(["code" => "NL", "name" => addslashes("Netherlands (the)"), ]);
        Country::create(["code" => "NC", "name" => addslashes("New Caledonia"), ]);
        Country::create(["code" => "NZ", "name" => addslashes("New Zealand"), ]);
        Country::create(["code" => "NI", "name" => addslashes("Nicaragua"), ]);
        Country::create(["code" => "NE", "name" => addslashes("Niger (the)"), ]);

        Country::create(["code" => "NG", "name" => addslashes("Nigeria"), ]);
        Country::create(["code" => "NU", "name" => addslashes("Niue"), ]);
        Country::create(["code" => "NF", "name" => addslashes("Norfolk Island"), ]);
        Country::create(["code" => "MP", "name" => addslashes("Northern Mariana Islands (the)"), ]);
        Country::create(["code" => "NO", "name" => addslashes("Norway"), ]);
        Country::create(["code" => "OM", "name" => addslashes("Oman"), ]);
        Country::create(["code" => "PK", "name" => addslashes("Pakistan"), ]);

        Country::create(["code" => "PW", "name" => addslashes("Palau"), ]);
        Country::create(["code" => "PS", "name" => addslashes("Palestine, State of"), ]);
        Country::create(["code" => "PA", "name" => addslashes("Panama"), ]);
        Country::create(["code" => "PG", "name" => addslashes("Papua New Guinea"), ]);
        Country::create(["code" => "PY", "name" => addslashes("Paraguay"), ]);
        Country::create(["code" => "PE", "name" => addslashes("Peru"), ]);
        Country::create(["code" => "PH", "name" => addslashes("Philippines (the)"), ]);

        Country::create(["code" => "PN", "name" => addslashes("Pitcairn"), ]);
        Country::create(["code" => "PL", "name" => addslashes("Poland"), ]);
        Country::create(["code" => "PT", "name" => addslashes("Portugal"), ]);
        Country::create(["code" => "PR", "name" => addslashes("Puerto Rico"), ]);
        Country::create(["code" => "QA", "name" => addslashes("Qatar"), ]);
        Country::create(["code" => "MK", "name" => addslashes("Republic of North Macedonia"), ]);
        Country::create(["code" => "RO", "name" => addslashes("Romania"), ]);

        Country::create(["code" => "RU", "name" => addslashes("Russian Federation (the)"), ]);
        Country::create(["code" => "RW", "name" => addslashes("Rwanda"), ]);
        Country::create(["code" => "RE", "name" => addslashes("Réunion"), ]);
        Country::create(["code" => "BL", "name" => addslashes("Saint Barthélemy"), ]);
        Country::create(["code" => "SH", "name" => addslashes("Saint Helena, Ascension and Tristan da Cunha"), ]);
        Country::create(["code" => "KN", "name" => addslashes("Saint Kitts and Nevis"), ]);
        Country::create(["code" => "LC", "name" => addslashes("Saint Lucia"), ]);

        Country::create(["code" => "MF", "name" => addslashes("Saint Martin (French part)"), ]);
        Country::create(["code" => "PM", "name" => addslashes("Saint Pierre and Miquelon"), ]);
        Country::create(["code" => "VC", "name" => addslashes("Saint Vincent and the Grenadines"), ]);
        Country::create(["code" => "WS", "name" => addslashes("Samoa"), ]);
        Country::create(["code" => "SM", "name" => addslashes("San Marino"), ]);
        Country::create(["code" => "ST", "name" => addslashes("Sao Tome and Principe"), ]);
        Country::create(["code" => "SA", "name" => addslashes("Saudi Arabia"), ]);

        Country::create(["code" => "SN", "name" => addslashes("Senegal"), ]);
        Country::create(["code" => "RS", "name" => addslashes("Serbia"), ]);
        Country::create(["code" => "SC", "name" => addslashes("Seychelles"), ]);
        Country::create(["code" => "SL", "name" => addslashes("Sierra Leone"), ]);
        Country::create(["code" => "SG", "name" => addslashes("Singapore"), ]);
        Country::create(["code" => "SX", "name" => addslashes("Sint Maarten (Dutch part)"), ]);
        Country::create(["code" => "SK", "name" => addslashes("Slovakia"), ]);

        Country::create(["code" => "SI", "name" => addslashes("Slovenia"), ]);
        Country::create(["code" => "SB", "name" => addslashes("Solomon Islands"), ]);
        Country::create(["code" => "SO", "name" => addslashes("Somalia"), ]);
        Country::create(["code" => "ZA", "name" => addslashes("South Africa"), ]);
        Country::create(["code" => "GS", "name" => addslashes("South Georgia and the South Sandwich Islands"), ]);
        Country::create(["code" => "SS", "name" => addslashes("South Sudan"), ]);
        Country::create(["code" => "ES", "name" => addslashes("Spain"), ]);

        Country::create(["code" => "LK", "name" => addslashes("Sri Lanka"), ]);
        Country::create(["code" => "SD", "name" => addslashes("Sudan (the)"), ]);
        Country::create(["code" => "SR", "name" => addslashes("Suriname"), ]);
        Country::create(["code" => "SJ", "name" => addslashes("Svalbard and Jan Mayen"), ]);
        Country::create(["code" => "SE", "name" => addslashes("Sweden"), ]);
        Country::create(["code" => "CH", "name" => addslashes("Switzerland"), ]);
        Country::create(["code" => "SY", "name" => addslashes("Syrian Arab Republic"), ]);

        Country::create(["code" => "TW", "name" => addslashes("Taiwan (Province of China)"), ]);
        Country::create(["code" => "TJ", "name" => addslashes("Tajikistan"), ]);
        Country::create(["code" => "TZ", "name" => addslashes("Tanzania, United Republic of"), ]);
        Country::create(["code" => "TH", "name" => addslashes("Thailand"), ]);
        Country::create(["code" => "TL", "name" => addslashes("Timor-Leste"), ]);
        Country::create(["code" => "TG", "name" => addslashes("Togo"), ]);
        Country::create(["code" => "TK", "name" => addslashes("Tokelau"), ]);

        Country::create(["code" => "TO", "name" => addslashes("Tonga"), ]);
        Country::create(["code" => "TT", "name" => addslashes("Trinidad and Tobago"), ]);
        Country::create(["code" => "TN", "name" => addslashes("Tunisia"), ]);
        Country::create(["code" => "TR", "name" => addslashes("Turkey"), ]);
        Country::create(["code" => "TM", "name" => addslashes("Turkmenistan"), ]);
        Country::create(["code" => "TC", "name" => addslashes("Turks and Caicos Islands (the)"), ]);
        Country::create(["code" => "TV", "name" => addslashes("Tuvalu"), ]);

        Country::create(["code" => "UG", "name" => addslashes("Uganda"), ]);
        Country::create(["code" => "UA", "name" => addslashes("Ukraine"), ]);
        Country::create(["code" => "AE", "name" => addslashes("United Arab Emirates (the)"), ]);
        Country::create(["code" => "GB", "name" => addslashes("United Kingdom of Great Britain and Northern Ireland (the)"), ]);
        Country::create(["code" => "UM", "name" => addslashes("United States Minor Outlying Islands (the)"), ]);
        Country::create(["code" => "US", "name" => addslashes("United States of America (the)"), ]);
        Country::create(["code" => "UY", "name" => addslashes("Uruguay"), ]);

        Country::create(["code" => "UZ", "name" => addslashes("Uzbekistan"), ]);
        Country::create(["code" => "VU", "name" => addslashes("Vanuatu"), ]);
        Country::create(["code" => "VE", "name" => addslashes("Venezuela (Bolivarian Republic of)"), ]);
        Country::create(["code" => "VN", "name" => addslashes("Viet Nam"), ]);
        Country::create(["code" => "VG", "name" => addslashes("Virgin Islands (British)"), ]);
        Country::create(["code" => "VI", "name" => addslashes("Virgin Islands (U.S.)"), ]);
        Country::create(["code" => "WF", "name" => addslashes("Wallis and Futuna"), ]);

        Country::create(["code" => "EH", "name" => addslashes("Western Sahara"), ]);
        Country::create(["code" => "YE", "name" => addslashes("Yemen"), ]);
        Country::create(["code" => "ZM", "name" => addslashes("Zambia"), ]);
        Country::create(["code" => "ZW", "name" => addslashes("Zimbabwe"), ]);
        Country::create(["code" => "AX", "name" => addslashes("Åland Islands"), ]);
    }
}
