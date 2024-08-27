<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Afghanistan
        State::create(["country_code" => "AF", "code" =>"BDS", "name" => "Badakhshan",]);
        State::create(["country_code" => "AF", "code" =>"BDG", "name" => "Badghis",]);
        State::create(["country_code" => "AF", "code" =>"BGL", "name" => "Baghlan",]);
        State::create(["country_code" => "AF", "code" =>"BAL", "name" => "Balkh",]);
        State::create(["country_code" => "AF", "code" =>"BAM", "name" => "Bamyan",]);
        State::create(["country_code" => "AF", "code" =>"DAY", "name" => "Daykundi",]);
        State::create(["country_code" => "AF", "code" =>"FRA", "name" => "Farah",]);
        State::create(["country_code" => "AF", "code" =>"FYB", "name" => "Faryab",]);
        State::create(["country_code" => "AF", "code" =>"GHA", "name" => "Ghazni",]);
        State::create(["country_code" => "AF", "code" =>"GHO", "name" => "Ghōr",]);
        State::create(["country_code" => "AF", "code" =>"HEL", "name" => "Helmand",]);
        State::create(["country_code" => "AF", "code" =>"HER", "name" => "Herat",]);
        State::create(["country_code" => "AF", "code" =>"JOW", "name" => "Jowzjan",]);
        State::create(["country_code" => "AF", "code" =>"KAB", "name" => "Kabul",]);
        State::create(["country_code" => "AF", "code" =>"KAN", "name" => "Kandahar",]);
        State::create(["country_code" => "AF", "code" =>"KAP", "name" => "Kapisa",]);
        State::create(["country_code" => "AF", "code" =>"KHO", "name" => "Khost",]);
        State::create(["country_code" => "AF", "code" =>"KNR", "name" => "Kunar",]);
        State::create(["country_code" => "AF", "code" =>"KDZ", "name" => "Kunduz",]);
        State::create(["country_code" => "AF", "code" =>"LAG", "name" => "Laghman",]);
        State::create(["country_code" => "AF", "code" =>"LOG", "name" => "Logar",]);
        State::create(["country_code" => "AF", "code" =>"NAN", "name" => "Nangarhar",]);
        State::create(["country_code" => "AF", "code" =>"NIM", "name" => "Nimruz",]);
        State::create(["country_code" => "AF", "code" =>"NUR", "name" => "Nuristan",]);
        State::create(["country_code" => "AF", "code" =>"PKA", "name" => "Paktika",]);
        State::create(["country_code" => "AF", "code" =>"PIA", "name" => "Paktia",]);
        State::create(["country_code" => "AF", "code" =>"PAN", "name" => "Panjshir",]);
        State::create(["country_code" => "AF", "code" =>"PAR", "name" => "Parwan",]);
        State::create(["country_code" => "AF", "code" =>"SAM", "name" => "Samangan",]);
        State::create(["country_code" => "AF", "code" =>"SAR", "name" => "Sar-e Pol",]);
        State::create(["country_code" => "AF", "code" =>"TAK", "name" => "Takhar",]);
        State::create(["country_code" => "AF", "code" =>"URU", "name" => "Urozgan",]);
        State::create(["country_code" => "AF", "code" =>"WAR", "name" => "Maidan Wardak",]);
        State::create(["country_code" => "AF", "code" =>"ZAB", "name" => "Zabul",]);

        // Åland Islands (The Åland Islands, an autonomous region of Finland)
        State::create(["country_code" => "AX", "code" =>"01", "name" => "Ahvenanmaan maakunta",]);

        // Albania
        State::create(["country_code" => "AL", "code" =>"01", "name" => "Berat",]);
        State::create(["country_code" => "AL", "code" =>"02", "name" => "Dibër",]);
        State::create(["country_code" => "AL", "code" =>"03", "name" => "Durrës",]);
        State::create(["country_code" => "AL", "code" =>"04", "name" => "Elbasan",]);
        State::create(["country_code" => "AL", "code" =>"05", "name" => "Fier",]);
        State::create(["country_code" => "AL", "code" =>"06", "name" => "Gjirokastër",]);
        State::create(["country_code" => "AL", "code" =>"07", "name" => "Korçë",]);
        State::create(["country_code" => "AL", "code" =>"08", "name" => "Kukës",]);
        State::create(["country_code" => "AL", "code" =>"09", "name" => "Lezhë",]);
        State::create(["country_code" => "AL", "code" =>"10", "name" => "Shkodër",]);
        State::create(["country_code" => "AL", "code" =>"11", "name" => "Tiranë",]);
        State::create(["country_code" => "AL", "code" =>"12", "name" => "Vlorë",]);

        // Algeria
        State::create(["country_code" => "DZ", "code" => "01", "name" => "Adrar",]);
        State::create(["country_code" => "DZ", "code" => "44", "name" => "Aïn Defla",]);
        State::create(["country_code" => "DZ", "code" => "46", "name" => "Aïn Témouchent",]);
        State::create(["country_code" => "DZ", "code" => "16", "name" => "Alger",]);
        State::create(["country_code" => "DZ", "code" => "23", "name" => "Annaba",]);
        State::create(["country_code" => "DZ", "code" => "05", "name" => "Batna",]);
        State::create(["country_code" => "DZ", "code" => "08", "name" => "Béchar",]);
        State::create(["country_code" => "DZ", "code" => "06", "name" => "Béjaïa",]);
        State::create(["country_code" => "DZ", "code" => "07", "name" => "Biskra",]);
        State::create(["country_code" => "DZ", "code" => "09", "name" => "Blida",]);
        State::create(["country_code" => "DZ", "code" => "34", "name" => "Bordj Bou Arréridj",]);
        State::create(["country_code" => "DZ", "code" => "10", "name" => "Bouira",]);
        State::create(["country_code" => "DZ", "code" => "35", "name" => "Boumerdès",]);
        State::create(["country_code" => "DZ", "code" => "02", "name" => "Chlef",]);
        State::create(["country_code" => "DZ", "code" => "25", "name" => "Constantine",]);
        State::create(["country_code" => "DZ", "code" => "17", "name" => "Djelfa",]);
        State::create(["country_code" => "DZ", "code" => "32", "name" => "El Bayadh",]);
        State::create(["country_code" => "DZ", "code" => "39", "name" => "El Oued",]);
        State::create(["country_code" => "DZ", "code" => "36", "name" => "El Tarf",]);
        State::create(["country_code" => "DZ", "code" => "47", "name" => "Ghardaïa",]);
        State::create(["country_code" => "DZ", "code" => "24", "name" => "Guelma",]);
        State::create(["country_code" => "DZ", "code" => "33", "name" => "Illizi",]);
        State::create(["country_code" => "DZ", "code" => "18", "name" => "Jijel",]);
        State::create(["country_code" => "DZ", "code" => "40", "name" => "Khenchela",]);
        State::create(["country_code" => "DZ", "code" => "03", "name" => "Laghouat",]);
        State::create(["country_code" => "DZ", "code" => "28", "name" => "M'sila",]);
        State::create(["country_code" => "DZ", "code" => "29", "name" => "Mascara",]);
        State::create(["country_code" => "DZ", "code" => "26", "name" => "Médéa",]);
        State::create(["country_code" => "DZ", "code" => "43", "name" => "Mila",]);
        State::create(["country_code" => "DZ", "code" => "27", "name" => "Mostaganem",]);
        State::create(["country_code" => "DZ", "code" => "45", "name" => "Naama",]);
        State::create(["country_code" => "DZ", "code" => "31", "name" => "Oran",]);
        State::create(["country_code" => "DZ", "code" => "30", "name" => "Ouargla",]);
        State::create(["country_code" => "DZ", "code" => "04", "name" => "Oum el Bouaghi",]);
        State::create(["country_code" => "DZ", "code" => "48", "name" => "Relizane",]);
        State::create(["country_code" => "DZ", "code" => "20", "name" => "Saïda",]);
        State::create(["country_code" => "DZ", "code" => "19", "name" => "Sétif",]);
        State::create(["country_code" => "DZ", "code" => "22", "name" => "Sidi Bel Abbès",]);
        State::create(["country_code" => "DZ", "code" => "21", "name" => "Skikda",]);
        State::create(["country_code" => "DZ", "code" => "41", "name" => "Souk Ahras",]);
        State::create(["country_code" => "DZ", "code" => "11", "name" => "Tamanrasset",]);
        State::create(["country_code" => "DZ", "code" => "12", "name" => "Tébessa",]);
        State::create(["country_code" => "DZ", "code" => "14", "name" => "Tiaret",]);
        State::create(["country_code" => "DZ", "code" => "37", "name" => "Tindouf",]);
        State::create(["country_code" => "DZ", "code" => "42", "name" => "Tipaza",]);
        State::create(["country_code" => "DZ", "code" => "38", "name" => "Tissemsilt",]);
        State::create(["country_code" => "DZ", "code" => "15", "name" => "Tizi Ouzou",]);
        State::create(["country_code" => "DZ", "code" => "13", "name" => "Tlemcen",]);

        // American Samoa (American Samoa, an outlying area of the United States)
        State::create(["country_code" => "AS", "code" => "AS", "name" => "American Samoa",]);

        // Andorra
        State::create(["country_code" => "AD", "code" =>"07", "name" => "Andorra la Vella",]);
        State::create(["country_code" => "AD", "code" =>"02", "name" => "Canillo",]);
        State::create(["country_code" => "AD", "code" =>"03", "name" => "Encamp",]);
        State::create(["country_code" => "AD", "code" =>"08", "name" => "Escaldes-Engordany",]);
        State::create(["country_code" => "AD", "code" =>"04", "name" => "La Massana",]);
        State::create(["country_code" => "AD", "code" =>"05", "name" => "Ordino",]);
        State::create(["country_code" => "AD", "code" =>"06", "name" => "Sant Julià de Lòria",]);

        // Angola
        State::create(["country_code" => "AO", "code" => "BGO", "name" => "Bengo",]);
        State::create(["country_code" => "AO", "code" => "BGU", "name" => "Benguela",]);
        State::create(["country_code" => "AO", "code" => "BIE", "name" => "Bié",]);
        State::create(["country_code" => "AO", "code" => "CAB", "name" => "Cabinda",]);
        State::create(["country_code" => "AO", "code" => "CNN", "name" => "Cunene",]);
        State::create(["country_code" => "AO", "code" => "HUA", "name" => "Huambo",]);
        State::create(["country_code" => "AO", "code" => "HUI", "name" => "Huíla",]);
        State::create(["country_code" => "AO", "code" => "CCU", "name" => "Kuando Kubango",]);
        State::create(["country_code" => "AO", "code" => "CNO", "name" => "Kwanza Norte",]);
        State::create(["country_code" => "AO", "code" => "CUS", "name" => "Kwanza Sul",]);
        State::create(["country_code" => "AO", "code" => "LUA", "name" => "Luanda",]);
        State::create(["country_code" => "AO", "code" => "LNO", "name" => "Lunda Norte",]);
        State::create(["country_code" => "AO", "code" => "LSU", "name" => "Lunda Sul",]);
        State::create(["country_code" => "AO", "code" => "MAL", "name" => "Malange",]);
        State::create(["country_code" => "AO", "code" => "MOX", "name" => "Moxico",]);
        State::create(["country_code" => "AO", "code" => "NAM", "name" => "Namibe",]);
        State::create(["country_code" => "AO", "code" => "UIG", "name" => "Uíge",]);
        State::create(["country_code" => "AO", "code" => "ZAI", "name" => "Zaire",]);

        // Anguilla (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "AI", "code" => "AI", "name" => "Anguilla",]);

        // Antarctica (Currently no ISO 3166-2 codes are defined for Antarctica.)
        State::create(["country_code" => "AQ", "code" => "AQ", "name" => "Antarctica",]);

        // Antigua and Barbuda
        State::create(["country_code" => "AG", "code" => "03", "name" => "Saint George",]);
        State::create(["country_code" => "AG", "code" => "04", "name" => "Saint John",]);
        State::create(["country_code" => "AG", "code" => "05", "name" => "Saint Mary",]);
        State::create(["country_code" => "AG", "code" => "06", "name" => "Saint Paul",]);
        State::create(["country_code" => "AG", "code" => "07", "name" => "Saint Peter",]);
        State::create(["country_code" => "AG", "code" => "08", "name" => "Saint Philip",]);
        State::create(["country_code" => "AG", "code" => "10", "name" => "Barbuda",]);
        State::create(["country_code" => "AG", "code" => "11", "name" => "Redonda",]);

        // Argentina
        State::create(["country_code" => "AR", "code" => "C", "name" => "Ciudad Autónoma de Buenos Aires",]);
        State::create(["country_code" => "AR", "code" => "B", "name" => "Buenos Aires",]);
        State::create(["country_code" => "AR", "code" => "K", "name" => "Catamarca",]);
        State::create(["country_code" => "AR", "code" => "H", "name" => "Chaco",]);
        State::create(["country_code" => "AR", "code" => "U", "name" => "Chubut",]);
        State::create(["country_code" => "AR", "code" => "X", "name" => "Córdoba",]);
        State::create(["country_code" => "AR", "code" => "W", "name" => "Corrientes",]);
        State::create(["country_code" => "AR", "code" => "E", "name" => "Entre Ríos",]);
        State::create(["country_code" => "AR", "code" => "P", "name" => "Formosa",]);
        State::create(["country_code" => "AR", "code" => "Y", "name" => "Jujuy",]);
        State::create(["country_code" => "AR", "code" => "L", "name" => "La Pampa",]);
        State::create(["country_code" => "AR", "code" => "F", "name" => "La Rioja",]);
        State::create(["country_code" => "AR", "code" => "M", "name" => "Mendoza",]);
        State::create(["country_code" => "AR", "code" => "N", "name" => "Misiones",]);
        State::create(["country_code" => "AR", "code" => "Q", "name" => "Neuquén",]);
        State::create(["country_code" => "AR", "code" => "R", "name" => "Río Negro",]);
        State::create(["country_code" => "AR", "code" => "A", "name" => "Salta",]);
        State::create(["country_code" => "AR", "code" => "J", "name" => "San Juan",]);
        State::create(["country_code" => "AR", "code" => "D", "name" => "San Luis",]);
        State::create(["country_code" => "AR", "code" => "Z", "name" => "Santa Cruz",]);
        State::create(["country_code" => "AR", "code" => "S", "name" => "Santa Fe",]);
        State::create(["country_code" => "AR", "code" => "G", "name" => "Santiago del Estero",]);
        State::create(["country_code" => "AR", "code" => "V", "name" => "Tierra del Fuego",]);
        State::create(["country_code" => "AR", "code" => "T", "name" => "Tucumán",]);

        // Armenia
        State::create(["country_code" => "AM", "code" => "ER", "name" => "Erevan",]);
        State::create(["country_code" => "AM", "code" => "AG", "name" => "Aragac̣otn",]);
        State::create(["country_code" => "AM", "code" => "AR", "name" => "Ararat",]);
        State::create(["country_code" => "AM", "code" => "AV", "name" => "Armavir",]);
        State::create(["country_code" => "AM", "code" => "GR", "name" => "Geġark'unik'",]);
        State::create(["country_code" => "AM", "code" => "KT", "name" => "Kotayk'",]);
        State::create(["country_code" => "AM", "code" => "LO", "name" => "Loṙi",]);
        State::create(["country_code" => "AM", "code" => "SH", "name" => "Širak",]);
        State::create(["country_code" => "AM", "code" => "SU", "name" => "Syunik'",]);
        State::create(["country_code" => "AM", "code" => "TV", "name" => "Tavuš",]);
        State::create(["country_code" => "AM", "code" => "VD", "name" => "Vayoć Jor",]);

        // Aruba (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "AW", "code" => "AW", "name" => "Aruba",]);

        // Australia
        State::create(["country_code" => "AU", "code" => "NSW", "name" => "New South Wales",]);
        State::create(["country_code" => "AU", "code" => "QLD", "name" => "Queensland",]);
        State::create(["country_code" => "AU", "code" => "SA", "name" => "South Australia",]);
        State::create(["country_code" => "AU", "code" => "TAS", "name" => "Tasmania",]);
        State::create(["country_code" => "AU", "code" => "VIC", "name" => "Victoria",]);
        State::create(["country_code" => "AU", "code" => "WA", "name" => "Western Australia",]);
        State::create(["country_code" => "AU", "code" => "ACT", "name" => " Australian Capital Territory",]);
        State::create(["country_code" => "AU", "code" => "NT", "name" => "Northern Territory",]);

        // Austria
        State::create(["country_code" => "AT", "code" =>"1", "name" => "Burgenland",]);
        State::create(["country_code" => "AT", "code" =>"2", "name" => "Carinthia",]);
        State::create(["country_code" => "AT", "code" =>"3", "name" => "Lower Austria",]);
        State::create(["country_code" => "AT", "code" =>"4", "name" => "Upper Austria",]);
        State::create(["country_code" => "AT", "code" =>"5", "name" => "Salzburg",]);
        State::create(["country_code" => "AT", "code" =>"6", "name" => "Styria",]);
        State::create(["country_code" => "AT", "code" =>"7", "name" => "Tyrol",]);
        State::create(["country_code" => "AT", "code" =>"8", "name" => "Vorarlberg",]);
        State::create(["country_code" => "AT", "code" =>"9", "name" => "Vienna",]);

        // Azerbaijan
        State::create(["country_code" => "AZ", "code" => "BA", "name" => "Bakı",]);
        State::create(["country_code" => "AZ", "code" => "GA", "name" => "Gəncə",]);
        State::create(["country_code" => "AZ", "code" => "LA", "name" => "Lənkəran",]);
        State::create(["country_code" => "AZ", "code" => "MI", "name" => "Mingəçevir",]);
        State::create(["country_code" => "AZ", "code" => "NA", "name" => "Naftalan",]);
        State::create(["country_code" => "AZ", "code" => "NV", "name" => "Naxçıvan",]);
        State::create(["country_code" => "AZ", "code" => "SA", "name" => "Şəki",]);
        State::create(["country_code" => "AZ", "code" => "SR", "name" => "Şirvan",]);
        State::create(["country_code" => "AZ", "code" => "SM", "name" => "Sumqayıt",]);
        State::create(["country_code" => "AZ", "code" => "XA", "name" => "Xankəndi",]);
        State::create(["country_code" => "AZ", "code" => "YE", "name" => "Yevlax",]);
        State::create(["country_code" => "AZ", "code" => "ABS", "name" => "Abşeron",]);
        State::create(["country_code" => "AZ", "code" => "AGC", "name" => "Ağcabədi",]);
        State::create(["country_code" => "AZ", "code" => "AGM", "name" => "Ağdam",]);
        State::create(["country_code" => "AZ", "code" => "AGS", "name" => "Ağdaş",]);
        State::create(["country_code" => "AZ", "code" => "AGA", "name" => "Ağstafa",]);
        State::create(["country_code" => "AZ", "code" => "AGU", "name" => "Ağsu",]);
        State::create(["country_code" => "AZ", "code" => "AST", "name" => "Astara",]);
        State::create(["country_code" => "AZ", "code" => "BAB", "name" => "Babək",]);
        State::create(["country_code" => "AZ", "code" => "BAL", "name" => "Balakən",]);
        State::create(["country_code" => "AZ", "code" => "BAR", "name" => "Bərdə",]);
        State::create(["country_code" => "AZ", "code" => "BEY", "name" => "Beyləqan",]);
        State::create(["country_code" => "AZ", "code" => "BIL", "name" => "Biləsuvar",]);
        State::create(["country_code" => "AZ", "code" => "CAB", "name" => "Cəbrayıl",]);
        State::create(["country_code" => "AZ", "code" => "CAL", "name" => "Cəlilabad",]);
        State::create(["country_code" => "AZ", "code" => "CUL", "name" => "Culfa",]);
        State::create(["country_code" => "AZ", "code" => "DAS", "name" => "Daşkəsən",]);
        State::create(["country_code" => "AZ", "code" => "FUZ", "name" => "Füzuli",]);
        State::create(["country_code" => "AZ", "code" => "GAD", "name" => "Gədəbəy",]);
        State::create(["country_code" => "AZ", "code" => "GOR", "name" => "Goranboy",]);
        State::create(["country_code" => "AZ", "code" => "GOY", "name" => "Göyçay",]);
        State::create(["country_code" => "AZ", "code" => "GYG", "name" => "Göygöl",]);
        State::create(["country_code" => "AZ", "code" => "HAC", "name" => "Hacıqabul",]);
        State::create(["country_code" => "AZ", "code" => "IMI", "name" => "İmişli",]);
        State::create(["country_code" => "AZ", "code" => "ISM", "name" => "İsmayıllı",]);
        State::create(["country_code" => "AZ", "code" => "KAL", "name" => "Kəlbəcər",]);
        State::create(["country_code" => "AZ", "code" => "KAN", "name" => "Kǝngǝrli",]);
        State::create(["country_code" => "AZ", "code" => "KUR", "name" => "Kürdəmir",]);
        State::create(["country_code" => "AZ", "code" => "LAC", "name" => "Laçın",]);
        State::create(["country_code" => "AZ", "code" => "LAN", "name" => "Lənkəran",]);
        State::create(["country_code" => "AZ", "code" => "LER", "name" => "Lerik",]);
        State::create(["country_code" => "AZ", "code" => "MAS", "name" => "Masallı",]);
        State::create(["country_code" => "AZ", "code" => "NEF", "name" => "Neftçala",]);
        State::create(["country_code" => "AZ", "code" => "OGU", "name" => "Oğuz",]);
        State::create(["country_code" => "AZ", "code" => "ORD", "name" => "Ordubad",]);
        State::create(["country_code" => "AZ", "code" => "QAB", "name" => "Qəbələ",]);
        State::create(["country_code" => "AZ", "code" => "QAX", "name" => "Qax",]);
        State::create(["country_code" => "AZ", "code" => "QAZ", "name" => "Qazax",]);
        State::create(["country_code" => "AZ", "code" => "QOB", "name" => "Qobustan",]);
        State::create(["country_code" => "AZ", "code" => "QBA", "name" => "Quba",]);
        State::create(["country_code" => "AZ", "code" => "QBI", "name" => "Qubadlı",]);
        State::create(["country_code" => "AZ", "code" => "QUS", "name" => "Qusar",]);
        State::create(["country_code" => "AZ", "code" => "SAT", "name" => "Saatlı",]);
        State::create(["country_code" => "AZ", "code" => "SAB", "name" => "Sabirabad",]);
        State::create(["country_code" => "AZ", "code" => "SBN", "name" => "Şabran",]);
        State::create(["country_code" => "AZ", "code" => "SAD", "name" => "Sədərək",]);
        State::create(["country_code" => "AZ", "code" => "SAH", "name" => "Şahbuz",]);
        State::create(["country_code" => "AZ", "code" => "SAK", "name" => "Şəki",]);
        State::create(["country_code" => "AZ", "code" => "SAL", "name" => "Salyan",]);
        State::create(["country_code" => "AZ", "code" => "SMI", "name" => "Şamaxı",]);
        State::create(["country_code" => "AZ", "code" => "SKR", "name" => "Şəmkir",]);
        State::create(["country_code" => "AZ", "code" => "SMX", "name" => "Samux",]);
        State::create(["country_code" => "AZ", "code" => "SAR", "name" => "Şərur",]);
        State::create(["country_code" => "AZ", "code" => "SIY", "name" => "Siyəzən",]);
        State::create(["country_code" => "AZ", "code" => "SUS", "name" => "Şuşa",]);
        State::create(["country_code" => "AZ", "code" => "TAR", "name" => "Tərtər",]);
        State::create(["country_code" => "AZ", "code" => "TOV", "name" => "Tovuz",]);
        State::create(["country_code" => "AZ", "code" => "UCA", "name" => "Ucar",]);
        State::create(["country_code" => "AZ", "code" => "XAC", "name" => "Xaçmaz",]);
        State::create(["country_code" => "AZ", "code" => "XIZ", "name" => "Xızı",]);
        State::create(["country_code" => "AZ", "code" => "XCI", "name" => "Xocalı",]);
        State::create(["country_code" => "AZ", "code" => "XVD", "name" => "Xocavənd",]);
        State::create(["country_code" => "AZ", "code" => "YAR", "name" => "Yardımlı",]);
        State::create(["country_code" => "AZ", "code" => "YEV", "name" => "Yevlax",]);
        State::create(["country_code" => "AZ", "code" => "ZAN", "name" => "Zəngilan",]);
        State::create(["country_code" => "AZ", "code" => "ZAQ", "name" => "Zaqatala",]);
        State::create(["country_code" => "AZ", "code" => "ZAR", "name" => "Zərdab",]);

        // Bahamas
        State::create(["country_code" => "BS", "code" => "AK", "name" => "Acklins",]);
        State::create(["country_code" => "BS", "code" => "BY", "name" => "Berry Islands",]);
        State::create(["country_code" => "BS", "code" => "BI", "name" => "Bimini",]);
        State::create(["country_code" => "BS", "code" => "BP", "name" => "Black Point",]);
        State::create(["country_code" => "BS", "code" => "CI", "name" => "Cat Island",]);
        State::create(["country_code" => "BS", "code" => "CO", "name" => "Central Abaco",]);
        State::create(["country_code" => "BS", "code" => "CS", "name" => "Central Andros",]);
        State::create(["country_code" => "BS", "code" => "CE", "name" => "Central Eleuthera",]);
        State::create(["country_code" => "BS", "code" => "FP", "name" => "City of Freeport",]);
        State::create(["country_code" => "BS", "code" => "CK", "name" => "Crooked Island and Long Cay",]);
        State::create(["country_code" => "BS", "code" => "EG", "name" => "East Grand Bahama",]);
        State::create(["country_code" => "BS", "code" => "EX", "name" => "Exuma",]);
        State::create(["country_code" => "BS", "code" => "GC", "name" => "Grand Cay",]);
        State::create(["country_code" => "BS", "code" => "HI", "name" => "Harbour Island",]);
        State::create(["country_code" => "BS", "code" => "HT", "name" => "Hope Town",]);
        State::create(["country_code" => "BS", "code" => "IN", "name" => "Inagua",]);
        State::create(["country_code" => "BS", "code" => "LI", "name" => "Long Island",]);
        State::create(["country_code" => "BS", "code" => "MC", "name" => "Mangrove Cay",]);
        State::create(["country_code" => "BS", "code" => "MG", "name" => "Mayaguana",]);
        State::create(["country_code" => "BS", "code" => "MI", "name" => "Moore's Island",]);
        State::create(["country_code" => "BS", "code" => "NP", "name" => "New Providence",]);
        State::create(["country_code" => "BS", "code" => "NO", "name" => "North Abaco",]);
        State::create(["country_code" => "BS", "code" => "NS", "name" => "North Andros",]);
        State::create(["country_code" => "BS", "code" => "NE", "name" => "North Eleuthera",]);
        State::create(["country_code" => "BS", "code" => "RI", "name" => "Ragged Island",]);
        State::create(["country_code" => "BS", "code" => "RC", "name" => "Rum Cay",]);
        State::create(["country_code" => "BS", "code" => "SS", "name" => "San Salvador",]);
        State::create(["country_code" => "BS", "code" => "SO", "name" => "South Abaco",]);
        State::create(["country_code" => "BS", "code" => "SA", "name" => "South Andros",]);
        State::create(["country_code" => "BS", "code" => "SE", "name" => "South Eleuthera",]);
        State::create(["country_code" => "BS", "code" => "SW", "name" => "Spanish Wells",]);
        State::create(["country_code" => "BS", "code" => "WG", "name" => "West Grand Bahama",]);

        // Bahrain
        State::create(["country_code" => "BH", "code" => "13", "name" => "Al ‘Āşimah",]);
        State::create(["country_code" => "BH", "code" => "14", "name" => "Al Janūbīyah",]);
        State::create(["country_code" => "BH", "code" => "15", "name" => "Al Muḩarraq",]);
        State::create(["country_code" => "BH", "code" => "17", "name" => "Ash Shamālīyah",]);

        // Bangladesh
        State::create(["country_code" => "BD", "code" => "A", "name" => "Barisal",]);
        State::create(["country_code" => "BD", "code" => "B", "name" => "Chittagong",]);
        State::create(["country_code" => "BD", "code" => "C", "name" => "Dhaka",]);
        State::create(["country_code" => "BD", "code" => "D", "name" => "Khulna",]);
        State::create(["country_code" => "BD", "code" => "H", "name" => "Mymensingh",]);
        State::create(["country_code" => "BD", "code" => "E", "name" => "Rajshahi",]);
        State::create(["country_code" => "BD", "code" => "F", "name" => "Rangpur",]);
        State::create(["country_code" => "BD", "code" => "G", "name" => "Sylhet",]);

        // Barbados
        State::create(["country_code" => "BB", "code" => "01", "name" => "Christ Church",]);
        State::create(["country_code" => "BB", "code" => "02", "name" => "Saint Andrew",]);
        State::create(["country_code" => "BB", "code" => "03", "name" => "Saint George",]);
        State::create(["country_code" => "BB", "code" => "04", "name" => "Saint James",]);
        State::create(["country_code" => "BB", "code" => "05", "name" => "Saint John",]);
        State::create(["country_code" => "BB", "code" => "06", "name" => "Saint Joseph",]);
        State::create(["country_code" => "BB", "code" => "07", "name" => "Saint Lucy",]);
        State::create(["country_code" => "BB", "code" => "08", "name" => "Saint Michael",]);
        State::create(["country_code" => "BB", "code" => "09", "name" => "Saint Peter",]);
        State::create(["country_code" => "BB", "code" => "10", "name" => "Saint Philip",]);
        State::create(["country_code" => "BB", "code" => "11", "name" => "Saint Thomas",]);

        // Belarus
        State::create(["country_code" => "BY", "code" => "BR", "name" => "Brestskaya voblasts'",]);
        State::create(["country_code" => "BY", "code" => "HO", "name" => "Homyel'skaya voblasts'",]);
        State::create(["country_code" => "BY", "code" => "HR", "name" => "Hrodzenskaya voblasts'",]);
        State::create(["country_code" => "BY", "code" => "MA", "name" => "Mahilyowskaya voblasts'",]);
        State::create(["country_code" => "BY", "code" => "MI", "name" => "Minskaya voblasts'",]);
        State::create(["country_code" => "BY", "code" => "VI", "name" => "Vitsyebskaya voblasts'",]);
        State::create(["country_code" => "BY", "code" => "HM", "name" => "Horad Minsk",]);

        // Belgium
        State::create(["country_code" => "BE", "code" =>"BRU", "name" => "Brussels Hoofdstedelijk Gewest",]);
        State::create(["country_code" => "BE", "code" =>"VAN", "name" => "Antwerpen",]);
        State::create(["country_code" => "BE", "code" =>"WBR", "name" => "Brabant wallon",]);
        State::create(["country_code" => "BE", "code" =>"WHT", "name" => "Hainaut",]);
        State::create(["country_code" => "BE", "code" =>"WLG", "name" => "Liège",]);
        State::create(["country_code" => "BE", "code" =>"VLI", "name" => "Limburg",]);
        State::create(["country_code" => "BE", "code" =>"WLX", "name" => "Luxembourg",]);
        State::create(["country_code" => "BE", "code" =>"WNA", "name" => "Namur",]);
        State::create(["country_code" => "BE", "code" =>"VOV", "name" => "Oost-Vlaanderen",]);
        State::create(["country_code" => "BE", "code" =>"VBR", "name" => "Vlaams-Brabant",]);
        State::create(["country_code" => "BE", "code" =>"VWV", "name" => "West-Vlaanderen",]);

        // Belize
        State::create(["country_code" => "BZ", "code" => "BZ", "name" => "Belize",]);
        State::create(["country_code" => "BZ", "code" => "CY", "name" => "Cayo",]);
        State::create(["country_code" => "BZ", "code" => "CZL", "name" => "Corozal",]);
        State::create(["country_code" => "BZ", "code" => "OW", "name" => "Orange Walk",]);
        State::create(["country_code" => "BZ", "code" => "SC", "name" => "Stann Creek",]);
        State::create(["country_code" => "BZ", "code" => "TOL", "name" => "Toledo",]);

        // Benin
        State::create(["country_code" => "BJ", "code" => "AL", "name" => "Alibori",]);
        State::create(["country_code" => "BJ", "code" => "AK", "name" => "Atacora",]);
        State::create(["country_code" => "BJ", "code" => "AQ", "name" => "Atlantique",]);
        State::create(["country_code" => "BJ", "code" => "BO", "name" => "Borgou",]);
        State::create(["country_code" => "BJ", "code" => "CO", "name" => "Collines",]);
        State::create(["country_code" => "BJ", "code" => "KO", "name" => "Couffo",]);
        State::create(["country_code" => "BJ", "code" => "DO", "name" => "Donga",]);
        State::create(["country_code" => "BJ", "code" => "LI", "name" => "Littoral",]);
        State::create(["country_code" => "BJ", "code" => "MO", "name" => "Mono",]);
        State::create(["country_code" => "BJ", "code" => "OU", "name" => "Ouémé",]);
        State::create(["country_code" => "BJ", "code" => "PL", "name" => "Plateau",]);
        State::create(["country_code" => "BJ", "code" => "ZO", "name" => "Zou",]);

        // Bermuda (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "BM", "code" => "BM", "name" => "Bermuda",]);

        // Bhutan
        State::create(["country_code" => "BT", "code" => "33", "name" => "Bumthang",]);
        State::create(["country_code" => "BT", "code" => "12", "name" => "Chhukha",]);
        State::create(["country_code" => "BT", "code" => "22", "name" => "Dagana",]);
        State::create(["country_code" => "BT", "code" => "GA", "name" => "Gasa",]);
        State::create(["country_code" => "BT", "code" => "13", "name" => "Haa",]);
        State::create(["country_code" => "BT", "code" => "44", "name" => "Lhuentse",]);
        State::create(["country_code" => "BT", "code" => "42", "name" => "Monggar",]);
        State::create(["country_code" => "BT", "code" => "11", "name" => "Paro",]);
        State::create(["country_code" => "BT", "code" => "43", "name" => "Pemagatshel",]);
        State::create(["country_code" => "BT", "code" => "23", "name" => "Punakha",]);
        State::create(["country_code" => "BT", "code" => "45", "name" => "Samdrup Jongkhar",]);
        State::create(["country_code" => "BT", "code" => "14", "name" => "Samtse",]);
        State::create(["country_code" => "BT", "code" => "31", "name" => "Sarpang",]);
        State::create(["country_code" => "BT", "code" => "15", "name" => "Thimphu",]);
        State::create(["country_code" => "BT", "code" => "41", "name" => "Trashigang",]);
        State::create(["country_code" => "BT", "code" => "TY", "name" => "Trashi Yangtse",]);
        State::create(["country_code" => "BT", "code" => "32", "name" => "Trongsa",]);
        State::create(["country_code" => "BT", "code" => "21", "name" => "Tsirang",]);
        State::create(["country_code" => "BT", "code" => "24", "name" => "Wangdue Phodrang",]);
        State::create(["country_code" => "BT", "code" => "34", "name" => "Zhemgang",]);

        // Bolivia, Plurinational State of
        State::create(["country_code" => "BO", "code" => "C", "name" => "Cochabamba",]);
        State::create(["country_code" => "BO", "code" => "H", "name" => "Chuquisaca",]);
        State::create(["country_code" => "BO", "code" => "B", "name" => "El Beni",]);
        State::create(["country_code" => "BO", "code" => "L", "name" => "La Paz",]);
        State::create(["country_code" => "BO", "code" => "O", "name" => "Oruro",]);
        State::create(["country_code" => "BO", "code" => "N", "name" => "Pando",]);
        State::create(["country_code" => "BO", "code" => "P", "name" => "Potosí",]);
        State::create(["country_code" => "BO", "code" => "S", "name" => "Santa Cruz",]);
        State::create(["country_code" => "BO", "code" => "T", "name" => "Tarija",]);

        // Bonaire, Sint Eustatius and Saba
        State::create(["country_code" => "BQ", "code" => "BO", "name" => "Bonaire",]);
        State::create(["country_code" => "BQ", "code" => "SA", "name" => "Saba",]);
        State::create(["country_code" => "BQ", "code" => "SE", "name" => "Sint Eustatius",]);

        // Bosnia and Herzegovina
        State::create(["country_code" => "BA", "code" =>"BIH", "name" => "Federacija Bosna i Hercegovina",]);
        State::create(["country_code" => "BA", "code" =>"SRP", "name" => "Republika Srpska",]);
        State::create(["country_code" => "BA", "code" =>"BRC", "name" => "Brčko District",]);

        // Botswana
        State::create(["country_code" => "BW", "code" => "CE", "name" => "Central",]);
        State::create(["country_code" => "BW", "code" => "CH", "name" => "Chobe",]);
        State::create(["country_code" => "BW", "code" => "FR", "name" => "Francistown",]);
        State::create(["country_code" => "BW", "code" => "GA", "name" => "Gaborone",]);
        State::create(["country_code" => "BW", "code" => "GH", "name" => "Ghanzi",]);
        State::create(["country_code" => "BW", "code" => "JW", "name" => "Jwaneng",]);
        State::create(["country_code" => "BW", "code" => "KG", "name" => "Kgalagadi",]);
        State::create(["country_code" => "BW", "code" => "KL", "name" => "Kgatleng",]);
        State::create(["country_code" => "BW", "code" => "KW", "name" => "Kweneng",]);
        State::create(["country_code" => "BW", "code" => "LO", "name" => "Lobatse",]);
        State::create(["country_code" => "BW", "code" => "NE", "name" => "North East",]);
        State::create(["country_code" => "BW", "code" => "NW", "name" => "North West",]);
        State::create(["country_code" => "BW", "code" => "SP", "name" => "Selibe Phikwe",]);
        State::create(["country_code" => "BW", "code" => "SE", "name" => "South East",]);
        State::create(["country_code" => "BW", "code" => "SO", "name" => "Southern",]);
        State::create(["country_code" => "BW", "code" => "ST", "name" => "Sowa Town",]);

        // Bouvet Island (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "BV", "code" => "BV", "name" => "Bouvet Island",]);

        // Brazil
        State::create(["country_code" => "BR", "code" => "AC", "name" => "Acre",]);
        State::create(["country_code" => "BR", "code" => "AL", "name" => "Alagoas",]);
        State::create(["country_code" => "BR", "code" => "AP", "name" => "Amapá",]);
        State::create(["country_code" => "BR", "code" => "AM", "name" => "Amazonas",]);
        State::create(["country_code" => "BR", "code" => "BA", "name" => "Bahia",]);
        State::create(["country_code" => "BR", "code" => "CE", "name" => "Ceará",]);
        State::create(["country_code" => "BR", "code" => "DF", "name" => "Distrito Federal",]);
        State::create(["country_code" => "BR", "code" => "ES", "name" => "Espírito Santo",]);
        State::create(["country_code" => "BR", "code" => "GO", "name" => "Goiás",]);
        State::create(["country_code" => "BR", "code" => "MA", "name" => "Maranhão",]);
        State::create(["country_code" => "BR", "code" => "MT", "name" => "Mato Grosso",]);
        State::create(["country_code" => "BR", "code" => "MS", "name" => "Mato Grosso do Sul",]);
        State::create(["country_code" => "BR", "code" => "MG", "name" => "Minas Gerais",]);
        State::create(["country_code" => "BR", "code" => "PA", "name" => "Pará",]);
        State::create(["country_code" => "BR", "code" => "PB", "name" => "Paraíba",]);
        State::create(["country_code" => "BR", "code" => "PR", "name" => "Paraná",]);
        State::create(["country_code" => "BR", "code" => "PE", "name" => "Pernambuco",]);
        State::create(["country_code" => "BR", "code" => "PI", "name" => "Piauí",]);
        State::create(["country_code" => "BR", "code" => "RJ", "name" => "Rio de Janeiro",]);
        State::create(["country_code" => "BR", "code" => "RN", "name" => "Rio Grande do Norte",]);
        State::create(["country_code" => "BR", "code" => "RS", "name" => "Rio Grande do Sul",]);
        State::create(["country_code" => "BR", "code" => "RO", "name" => "Rondônia",]);
        State::create(["country_code" => "BR", "code" => "RR", "name" => "Roraima",]);
        State::create(["country_code" => "BR", "code" => "SC", "name" => "Santa Catarina",]);
        State::create(["country_code" => "BR", "code" => "SP", "name" => "São Paulo",]);
        State::create(["country_code" => "BR", "code" => "SE", "name" => "Sergipe",]);
        State::create(["country_code" => "BR", "code" => "TO", "name" => "Tocantins",]);

        // British Indian Ocean Territory (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "IO", "code" => "IO", "name" => "British Indian Ocean Territory",]);

        // Brunei Darussalam
        State::create(["country_code" => "BN", "code" => "BE", "name" => "Belait",]);
        State::create(["country_code" => "BN", "code" => "BM", "name" => "Brunei-Muara",]);
        State::create(["country_code" => "BN", "code" => "TE", "name" => "Temburong",]);
        State::create(["country_code" => "BN", "code" => "TU", "name" => "Tutong",]);

        // Bulgaria
        State::create(["country_code" => "BG", "code" =>"01", "name" => "Blagoevgrad",]);
        State::create(["country_code" => "BG", "code" =>"02", "name" => "Burgas",]);
        State::create(["country_code" => "BG", "code" =>"08", "name" => "Dobrich",]);
        State::create(["country_code" => "BG", "code" =>"07", "name" => "Gabrovo",]);
        State::create(["country_code" => "BG", "code" =>"26", "name" => "Haskovo",]);
        State::create(["country_code" => "BG", "code" =>"09", "name" => "Kardzhali",]);
        State::create(["country_code" => "BG", "code" =>"10", "name" => "Kyustendil",]);
        State::create(["country_code" => "BG", "code" =>"11", "name" => "Lovech",]);
        State::create(["country_code" => "BG", "code" =>"12", "name" => "Montana",]);
        State::create(["country_code" => "BG", "code" =>"13", "name" => "Pazardzhik",]);
        State::create(["country_code" => "BG", "code" =>"14", "name" => "Pernik",]);
        State::create(["country_code" => "BG", "code" =>"15", "name" => "Pleven",]);
        State::create(["country_code" => "BG", "code" =>"16", "name" => "Plovdiv",]);
        State::create(["country_code" => "BG", "code" =>"17", "name" => "Razgrad",]);
        State::create(["country_code" => "BG", "code" =>"18", "name" => "Ruse",]);
        State::create(["country_code" => "BG", "code" =>"27", "name" => "Shumen",]);
        State::create(["country_code" => "BG", "code" =>"19", "name" => "Silistra",]);
        State::create(["country_code" => "BG", "code" =>"20", "name" => "Sliven",]);
        State::create(["country_code" => "BG", "code" =>"21", "name" => "Smolyan",]);
        State::create(["country_code" => "BG", "code" =>"23", "name" => "Sofia",]);
        State::create(["country_code" => "BG", "code" =>"22", "name" => "Sofia (stolitsa)",]);
        State::create(["country_code" => "BG", "code" =>"24", "name" => "Stara Zagora",]);
        State::create(["country_code" => "BG", "code" =>"25", "name" => "Targovishte",]);
        State::create(["country_code" => "BG", "code" =>"03", "name" => "Varna",]);
        State::create(["country_code" => "BG", "code" =>"04", "name" => "Veliko Tarnovo",]);
        State::create(["country_code" => "BG", "code" =>"05", "name" => "Vidin",]);
        State::create(["country_code" => "BG", "code" =>"06", "name" => "Vratsa",]);
        State::create(["country_code" => "BG", "code" =>"28", "name" => "Yambol",]);

        // Burkina Faso
        State::create(["country_code" => "BF", "code" => "BAL", "name" => "Balé",]);
        State::create(["country_code" => "BF", "code" => "BAM", "name" => "Bam",]);
        State::create(["country_code" => "BF", "code" => "BAN", "name" => "Banwa",]);
        State::create(["country_code" => "BF", "code" => "BAZ", "name" => "Bazèga",]);
        State::create(["country_code" => "BF", "code" => "BGR", "name" => "Bougouriba",]);
        State::create(["country_code" => "BF", "code" => "BLG", "name" => "Boulgou",]);
        State::create(["country_code" => "BF", "code" => "BLK", "name" => "Boulkiemdé",]);
        State::create(["country_code" => "BF", "code" => "COM", "name" => "Comoé",]);
        State::create(["country_code" => "BF", "code" => "GAN", "name" => "Ganzourgou",]);
        State::create(["country_code" => "BF", "code" => "GNA", "name" => "Gnagna",]);
        State::create(["country_code" => "BF", "code" => "GOU", "name" => "Gourma",]);
        State::create(["country_code" => "BF", "code" => "HOU", "name" => "Houet",]);
        State::create(["country_code" => "BF", "code" => "IOB", "name" => "Ioba",]);
        State::create(["country_code" => "BF", "code" => "KAD", "name" => "Kadiogo",]);
        State::create(["country_code" => "BF", "code" => "KEN", "name" => "Kénédougou",]);
        State::create(["country_code" => "BF", "code" => "KMD", "name" => "Komondjari",]);
        State::create(["country_code" => "BF", "code" => "KMP", "name" => "Kompienga",]);
        State::create(["country_code" => "BF", "code" => "KOS", "name" => "Kossi",]);
        State::create(["country_code" => "BF", "code" => "KOP", "name" => "Koulpélogo",]);
        State::create(["country_code" => "BF", "code" => "KOT", "name" => "Kouritenga",]);
        State::create(["country_code" => "BF", "code" => "KOW", "name" => "Kourwéogo",]);
        State::create(["country_code" => "BF", "code" => "LER", "name" => "Léraba",]);
        State::create(["country_code" => "BF", "code" => "LOR", "name" => "Loroum",]);
        State::create(["country_code" => "BF", "code" => "MOU", "name" => "Mouhoun",]);
        State::create(["country_code" => "BF", "code" => "NAO", "name" => "Nahouri",]);
        State::create(["country_code" => "BF", "code" => "NAM", "name" => "Namentenga",]);
        State::create(["country_code" => "BF", "code" => "NAY", "name" => "Nayala",]);
        State::create(["country_code" => "BF", "code" => "NOU", "name" => "Noumbiel",]);
        State::create(["country_code" => "BF", "code" => "OUB", "name" => "Oubritenga",]);
        State::create(["country_code" => "BF", "code" => "OUD", "name" => "Oudalan",]);
        State::create(["country_code" => "BF", "code" => "PAS", "name" => "Passoré",]);
        State::create(["country_code" => "BF", "code" => "PON", "name" => "Poni",]);
        State::create(["country_code" => "BF", "code" => "SNG", "name" => "Sanguié",]);
        State::create(["country_code" => "BF", "code" => "SMT", "name" => "Sanmatenga",]);
        State::create(["country_code" => "BF", "code" => "SEN", "name" => "Séno",]);
        State::create(["country_code" => "BF", "code" => "SIS", "name" => "Sissili",]);
        State::create(["country_code" => "BF", "code" => "SOM", "name" => "Soum",]);
        State::create(["country_code" => "BF", "code" => "SOR", "name" => "Sourou",]);
        State::create(["country_code" => "BF", "code" => "TAP", "name" => "Tapoa",]);
        State::create(["country_code" => "BF", "code" => "TUI", "name" => "Tuy",]);
        State::create(["country_code" => "BF", "code" => "YAG", "name" => "Yagha",]);
        State::create(["country_code" => "BF", "code" => "YAT", "name" => "Yatenga",]);
        State::create(["country_code" => "BF", "code" => "ZIR", "name" => "Ziro",]);
        State::create(["country_code" => "BF", "code" => "ZON", "name" => "Zondoma",]);
        State::create(["country_code" => "BF", "code" => "ZOU", "name" => "Zoundwéogo",]);

        // Burundi
        State::create(["country_code" => "BI", "code" => "BB", "name" => "Bubanza",]);
        State::create(["country_code" => "BI", "code" => "BM", "name" => "Bujumbura Mairie",]);
        State::create(["country_code" => "BI", "code" => "BL", "name" => "Bujumbura Rural",]);
        State::create(["country_code" => "BI", "code" => "BR", "name" => "Bururi",]);
        State::create(["country_code" => "BI", "code" => "CA", "name" => "Cankuzo",]);
        State::create(["country_code" => "BI", "code" => "CI", "name" => "Cibitoke",]);
        State::create(["country_code" => "BI", "code" => "GI", "name" => "Gitega",]);
        State::create(["country_code" => "BI", "code" => "KR", "name" => "Karuzi",]);
        State::create(["country_code" => "BI", "code" => "KY", "name" => "Kayanza",]);
        State::create(["country_code" => "BI", "code" => "KI", "name" => "Kirundo",]);
        State::create(["country_code" => "BI", "code" => "MA", "name" => "Makamba",]);
        State::create(["country_code" => "BI", "code" => "MU", "name" => "Muramvya",]);
        State::create(["country_code" => "BI", "code" => "MY", "name" => "Muyinga",]);
        State::create(["country_code" => "BI", "code" => "MW", "name" => "Mwaro",]);
        State::create(["country_code" => "BI", "code" => "NG", "name" => "Ngozi",]);
        State::create(["country_code" => "BI", "code" => "RM", "name" => "Rumonge",]);
        State::create(["country_code" => "BI", "code" => "RT", "name" => "Rutana",]);
        State::create(["country_code" => "BI", "code" => "RY", "name" => "Ruyigi",]);

        // Cambodia
        State::create(["country_code" => "KH", "code" => "12", "name" => "Phnom Penh",]);
        State::create(["country_code" => "KH", "code" => "2", "name" => "Baat Dambang",]);
        State::create(["country_code" => "KH", "code" => "1", "name" => "Banteay Mean Chey",]);
        State::create(["country_code" => "KH", "code" => "3", "name" => "Kampong Chaam",]);
        State::create(["country_code" => "KH", "code" => "4", "name" => "Kampong Chhnang",]);
        State::create(["country_code" => "KH", "code" => "5", "name" => "Kampong Spueu",]);
        State::create(["country_code" => "KH", "code" => "6", "name" => "Kampong Thum",]);
        State::create(["country_code" => "KH", "code" => "7", "name" => "Kampot",]);
        State::create(["country_code" => "KH", "code" => "8", "name" => "Kandaal",]);
        State::create(["country_code" => "KH", "code" => "9", "name" => "Kaoh Kong",]);
        State::create(["country_code" => "KH", "code" => "10", "name" => "Kracheh",]);
        State::create(["country_code" => "KH", "code" => "23", "name" => "Kaeb",]);
        State::create(["country_code" => "KH", "code" => "24", "name" => "Pailin",]);
        State::create(["country_code" => "KH", "code" => "18", "name" => "Preah Sihanouk",]);
        State::create(["country_code" => "KH", "code" => "11", "name" => "Mondol Kiri",]);
        State::create(["country_code" => "KH", "code" => "22", "name" => "Otdar Mean Chey",]);
        State::create(["country_code" => "KH", "code" => "15", "name" => "Pousaat",]);
        State::create(["country_code" => "KH", "code" => "13", "name" => "Preah Vihear",]);
        State::create(["country_code" => "KH", "code" => "14", "name" => "Prey Veaeng",]);
        State::create(["country_code" => "KH", "code" => "16", "name" => "Rotanak Kiri",]);
        State::create(["country_code" => "KH", "code" => "17", "name" => "Siem Reab",]);
        State::create(["country_code" => "KH", "code" => "19", "name" => "Stueng Traeng",]);
        State::create(["country_code" => "KH", "code" => "20", "name" => "Svaay Rieng",]);
        State::create(["country_code" => "KH", "code" => "21", "name" => "Taakaev",]);
        State::create(["country_code" => "KH", "code" => "25", "name" => "Tbong Khmum",]);

        // Cameroon
        State::create(["country_code" => "CM", "code" => "AD", "name" => "Adamaoua",]);
        State::create(["country_code" => "CM", "code" => "CE", "name" => "Centre",]);
        State::create(["country_code" => "CM", "code" => "ES", "name" => "East",]);
        State::create(["country_code" => "CM", "code" => "EN", "name" => "Far North",]);
        State::create(["country_code" => "CM", "code" => "LT", "name" => "Littoral",]);
        State::create(["country_code" => "CM", "code" => "NO", "name" => "North",]);
        State::create(["country_code" => "CM", "code" => "NW", "name" => "North-West",]);
        State::create(["country_code" => "CM", "code" => "SU", "name" => "South",]);
        State::create(["country_code" => "CM", "code" => "SW", "name" => "South-West",]);
        State::create(["country_code" => "CM", "code" => "OU", "name" => "West",]);

        // Canada
        State::create(["country_code" => "CA", "code" =>"AB", "name" => "Alberta",]);
        State::create(["country_code" => "CA", "code" =>"BC", "name" => "British Columbia",]);
        State::create(["country_code" => "CA", "code" =>"MB", "name" => "Manitoba",]);
        State::create(["country_code" => "CA", "code" =>"NB", "name" => "New Brunswick",]);
        State::create(["country_code" => "CA", "code" =>"NL", "name" => "Newfoundland and Labrador",]);
        State::create(["country_code" => "CA", "code" =>"NS", "name" => "Nova Scotia",]);
        State::create(["country_code" => "CA", "code" =>"ON", "name" => "Ontario",]);
        State::create(["country_code" => "CA", "code" =>"PE", "name" => "Prince Edward Island",]);
        State::create(["country_code" => "CA", "code" =>"QC", "name" => "Quebec",]);
        State::create(["country_code" => "CA", "code" =>"SK", "name" => "Saskatchewan",]);
        State::create(["country_code" => "CA", "code" =>"NT", "name" => "Northwest Territories",]);
        State::create(["country_code" => "CA", "code" =>"NU", "name" => "Nunavut",]);
        State::create(["country_code" => "CA", "code" =>"YT", "name" => "Yukon",]);

        // Cape Verde
        State::create(["country_code" => "CV", "code" => "BV", "name" => "Boa Vista",]);
        State::create(["country_code" => "CV", "code" => "BR", "name" => "Brava",]);
        State::create(["country_code" => "CV", "code" => "MA", "name" => "Maio",]);
        State::create(["country_code" => "CV", "code" => "MO", "name" => "Mosteiros",]);
        State::create(["country_code" => "CV", "code" => "PA", "name" => "Paul",]);
        State::create(["country_code" => "CV", "code" => "PN", "name" => "Porto Novo",]);
        State::create(["country_code" => "CV", "code" => "PR", "name" => "Praia",]);
        State::create(["country_code" => "CV", "code" => "RB", "name" => "Ribeira Brava",]);
        State::create(["country_code" => "CV", "code" => "RG", "name" => "Ribeira Grande",]);
        State::create(["country_code" => "CV", "code" => "RS", "name" => "Ribeira Grande de Santiago",]);
        State::create(["country_code" => "CV", "code" => "SL", "name" => "Sal",]);
        State::create(["country_code" => "CV", "code" => "CA", "name" => "Santa Catarina",]);
        State::create(["country_code" => "CV", "code" => "CF", "name" => "Santa Catarina do Fogo",]);
        State::create(["country_code" => "CV", "code" => "CR", "name" => "Santa Cruz",]);
        State::create(["country_code" => "CV", "code" => "SD", "name" => "São Domingos",]);
        State::create(["country_code" => "CV", "code" => "SF", "name" => "São Filipe",]);
        State::create(["country_code" => "CV", "code" => "SO", "name" => "São Lourenço dos Órgãos",]);
        State::create(["country_code" => "CV", "code" => "SM", "name" => "São Miguel",]);
        State::create(["country_code" => "CV", "code" => "SS", "name" => "São Salvador do Mundo",]);
        State::create(["country_code" => "CV", "code" => "SV", "name" => "São Vicente",]);
        State::create(["country_code" => "CV", "code" => "TA", "name" => "Tarrafal",]);
        State::create(["country_code" => "CV", "code" => "TS", "name" => "Tarrafal de São Nicolau",]);

        // Cayman Islands (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "KY", "code" => "KY", "name" => "Cayman Islands",]);

        // Central African Republic
        State::create(["country_code" => "CF", "code" => "BGF", "name" => "Bangui",]);
        State::create(["country_code" => "CF", "code" => "BB", "name" => "Bamingui-Bangoran",]);
        State::create(["country_code" => "CF", "code" => "BK", "name" => "Basse-Kotto",]);
        State::create(["country_code" => "CF", "code" => "HK", "name" => "Haute-Kotto",]);
        State::create(["country_code" => "CF", "code" => "HM", "name" => "Haut-Mbomou",]);
        State::create(["country_code" => "CF", "code" => "HS", "name" => "Haute-Sangha/Mambéré-Kadéï",]);
        State::create(["country_code" => "CF", "code" => "KG", "name" => "Kémo-Gribingui",]);
        State::create(["country_code" => "CF", "code" => "LB", "name" => "Lobaye",]);
        State::create(["country_code" => "CF", "code" => "MB", "name" => "Mbomou",]);
        State::create(["country_code" => "CF", "code" => "NM", "name" => "Nana-Mambéré",]);
        State::create(["country_code" => "CF", "code" => "MP", "name" => "Ombella-Mpoko",]);
        State::create(["country_code" => "CF", "code" => "UK", "name" => "Ouaka",]);
        State::create(["country_code" => "CF", "code" => "AC", "name" => "Ouham",]);
        State::create(["country_code" => "CF", "code" => "OP", "name" => "Ouham-Pendé",]);
        State::create(["country_code" => "CF", "code" => "VK", "name" => "Vakaga",]);
        State::create(["country_code" => "CF", "code" => "KB", "name" => "Gribingui",]);
        State::create(["country_code" => "CF", "code" => "SE", "name" => "Sangha",]);

        // Chad
        State::create(["country_code" => "TD", "code" => "BA", "name" => "Al Baţḩah",]);
        State::create(["country_code" => "TD", "code" => "LC", "name" => "Al Buḩayrah",]);
        State::create(["country_code" => "TD", "code" => "BG", "name" => "Baḩr al Ghazāl",]);
        State::create(["country_code" => "TD", "code" => "BO", "name" => "Būrkū",]);
        State::create(["country_code" => "TD", "code" => "HL", "name" => "Ḩajjar Lamīs",]);
        State::create(["country_code" => "TD", "code" => "EE", "name" => "Ennedi-Est",]);
        State::create(["country_code" => "TD", "code" => "EO", "name" => "Ennedi-Ouest",]);
        State::create(["country_code" => "TD", "code" => "KA", "name" => "Kānim",]);
        State::create(["country_code" => "TD", "code" => "LO", "name" => "Lūqūn al Gharbī",]);
        State::create(["country_code" => "TD", "code" => "LR", "name" => "Lūqūn ash Sharqī",]);
        State::create(["country_code" => "TD", "code" => "ND", "name" => "Madīnat Injamīnā",]);
        State::create(["country_code" => "TD", "code" => "MA", "name" => "Māndūl",]);
        State::create(["country_code" => "TD", "code" => "MO", "name" => "Māyū Kībbī al Gharbī",]);
        State::create(["country_code" => "TD", "code" => "ME", "name" => "Māyū Kībbī ash Sharqī",]);
        State::create(["country_code" => "TD", "code" => "GR", "name" => "Qīrā",]);
        State::create(["country_code" => "TD", "code" => "SA", "name" => "Salāmāt",]);
        State::create(["country_code" => "TD", "code" => "MC", "name" => "Shārī al Awsaţ",]);
        State::create(["country_code" => "TD", "code" => "CB", "name" => "Shārī Bāqirmī",]);
        State::create(["country_code" => "TD", "code" => "SI", "name" => "Sīlā",]);
        State::create(["country_code" => "TD", "code" => "TA", "name" => "Tānjilī",]);
        State::create(["country_code" => "TD", "code" => "TI", "name" => "Tibastī",]);
        State::create(["country_code" => "TD", "code" => "OD", "name" => "Waddāy",]);
        State::create(["country_code" => "TD", "code" => "WF", "name" => "Wādī Fīrā",]);

        // Chile
        State::create(["country_code" => "CL", "code" => "AI", "name" => "Aisén del General Carlos Ibañez del Campo",]);
        State::create(["country_code" => "CL", "code" => "AN", "name" => "Antofagasta",]);
        State::create(["country_code" => "CL", "code" => "AP", "name" => "Arica y Parinacota",]);
        State::create(["country_code" => "CL", "code" => "AR", "name" => "La Araucanía",]);
        State::create(["country_code" => "CL", "code" => "AT", "name" => "Atacama",]);
        State::create(["country_code" => "CL", "code" => "BI", "name" => "Biobío",]);
        State::create(["country_code" => "CL", "code" => "CO", "name" => "Coquimbo",]);
        State::create(["country_code" => "CL", "code" => "LI", "name" => "Libertador General Bernardo O'Higgins",]);
        State::create(["country_code" => "CL", "code" => "LL", "name" => "Los Lagos",]);
        State::create(["country_code" => "CL", "code" => "LR", "name" => "Los Ríos",]);
        State::create(["country_code" => "CL", "code" => "MA", "name" => "Magallanes",]);
        State::create(["country_code" => "CL", "code" => "ML", "name" => "Maule",]);
        State::create(["country_code" => "CL", "code" => "NB", "name" => "Ñuble",]);
        State::create(["country_code" => "CL", "code" => "RM", "name" => "Región Metropolitana de Santiago",]);
        State::create(["country_code" => "CL", "code" => "TA", "name" => "Tarapacá",]);
        State::create(["country_code" => "CL", "code" => "VS", "name" => "Valparaíso",]);

        // China
        State::create(["country_code" => "CN", "code" => "AH", "name" => "Anhui Sheng",]);
        State::create(["country_code" => "CN", "code" => "BJ", "name" => "Beijing Shi",]);
        State::create(["country_code" => "CN", "code" => "CQ", "name" => "Chongqing Shi",]);
        State::create(["country_code" => "CN", "code" => "FJ", "name" => "Fujian Sheng",]);
        State::create(["country_code" => "CN", "code" => "GD", "name" => "Guangdong Sheng",]);
        State::create(["country_code" => "CN", "code" => "GS", "name" => "Gansu Sheng",]);
        State::create(["country_code" => "CN", "code" => "GX", "name" => "Guangxi Zhuangzu Zizhiqu",]);
        State::create(["country_code" => "CN", "code" => "GZ", "name" => "Guizhou Sheng",]);
        State::create(["country_code" => "CN", "code" => "HA", "name" => "Henan Sheng",]);
        State::create(["country_code" => "CN", "code" => "HB", "name" => "Hubei Sheng",]);
        State::create(["country_code" => "CN", "code" => "HE", "name" => "Hebei Sheng",]);
        State::create(["country_code" => "CN", "code" => "HI", "name" => "Hainan Sheng",]);
        State::create(["country_code" => "CN", "code" => "HK", "name" => "Hong Kong SAR",]);
        State::create(["country_code" => "CN", "code" => "HL", "name" => "Heilongjiang Sheng",]);
        State::create(["country_code" => "CN", "code" => "HN", "name" => "Hunan Sheng",]);
        State::create(["country_code" => "CN", "code" => "JL", "name" => "Jilin Sheng",]);
        State::create(["country_code" => "CN", "code" => "JS", "name" => "Jiangsu Sheng",]);
        State::create(["country_code" => "CN", "code" => "JX", "name" => "Jiangxi Sheng",]);
        State::create(["country_code" => "CN", "code" => "LN", "name" => "Liaoning Sheng",]);
        State::create(["country_code" => "CN", "code" => "MO", "name" => "Macao SAR",]);
        State::create(["country_code" => "CN", "code" => "NM", "name" => "Nei Mongol Zizhiqu",]);
        State::create(["country_code" => "CN", "code" => "NX", "name" => "Ningxia Huizi Zizhiqu",]);
        State::create(["country_code" => "CN", "code" => "QH", "name" => "Qinghai Sheng",]);
        State::create(["country_code" => "CN", "code" => "SC", "name" => "Sichuan Sheng",]);
        State::create(["country_code" => "CN", "code" => "SD", "name" => "Shandong Sheng",]);
        State::create(["country_code" => "CN", "code" => "SH", "name" => "Shanghai Shi",]);
        State::create(["country_code" => "CN", "code" => "SN", "name" => "Shaanxi Sheng",]);
        State::create(["country_code" => "CN", "code" => "SX", "name" => "Shanxi Sheng",]);
        State::create(["country_code" => "CN", "code" => "TJ", "name" => "Tianjin Shi",]);
        State::create(["country_code" => "CN", "code" => "TW", "name" => "Taiwan Sheng",]);
        State::create(["country_code" => "CN", "code" => "XJ", "name" => "Xinjiang Uygur Zizhiqu",]);
        State::create(["country_code" => "CN", "code" => "XZ", "name" => "Xizang Zizhiqu",]);
        State::create(["country_code" => "CN", "code" => "YN", "name" => "Yunnan Sheng",]);
        State::create(["country_code" => "CN", "code" => "ZJ", "name" => "Zhejiang Sheng",]);

        // Christmas Island (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "CX", "code" => "CX", "name" => "Christmas Island",]);

        // Cocos (Keeling) Islands (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "CC", "code" => "CC", "name" => "Cocos (Keeling) Islands",]);

        // Colombia
        State::create(["country_code" => "CO", "code" => "DC", "name" => "Distrito Capital de Bogotá",]);
        State::create(["country_code" => "CO", "code" => "AMA", "name" => "Amazonas",]);
        State::create(["country_code" => "CO", "code" => "ANT", "name" => "Antioquia",]);
        State::create(["country_code" => "CO", "code" => "ARA", "name" => "Arauca",]);
        State::create(["country_code" => "CO", "code" => "ATL", "name" => "Atlántico",]);
        State::create(["country_code" => "CO", "code" => "BOL", "name" => "Bolívar",]);
        State::create(["country_code" => "CO", "code" => "BOY", "name" => "Boyacá",]);
        State::create(["country_code" => "CO", "code" => "CAL", "name" => "Caldas",]);
        State::create(["country_code" => "CO", "code" => "CAQ", "name" => "Caquetá",]);
        State::create(["country_code" => "CO", "code" => "CAS", "name" => "Casanare",]);
        State::create(["country_code" => "CO", "code" => "CAU", "name" => "Cauca",]);
        State::create(["country_code" => "CO", "code" => "CES", "name" => "Cesar",]);
        State::create(["country_code" => "CO", "code" => "COR", "name" => "Córdoba",]);
        State::create(["country_code" => "CO", "code" => "CUN", "name" => "Cundinamarca",]);
        State::create(["country_code" => "CO", "code" => "CHO", "name" => "Chocó",]);
        State::create(["country_code" => "CO", "code" => "GUA", "name" => "Guainía",]);
        State::create(["country_code" => "CO", "code" => "GUV", "name" => "Guaviare",]);
        State::create(["country_code" => "CO", "code" => "HUI", "name" => "Huila",]);
        State::create(["country_code" => "CO", "code" => "LAG", "name" => "La Guajira",]);
        State::create(["country_code" => "CO", "code" => "MAG", "name" => "Magdalena",]);
        State::create(["country_code" => "CO", "code" => "MET", "name" => "Meta",]);
        State::create(["country_code" => "CO", "code" => "NAR", "name" => "Nariño",]);
        State::create(["country_code" => "CO", "code" => "NSA", "name" => "Norte de Santander",]);
        State::create(["country_code" => "CO", "code" => "PUT", "name" => "Putumayo",]);
        State::create(["country_code" => "CO", "code" => "QUI", "name" => "Quindío",]);
        State::create(["country_code" => "CO", "code" => "RIS", "name" => "Risaralda",]);
        State::create(["country_code" => "CO", "code" => "SAP", "name" => "San Andrés, Providencia y Santa Catalina",]);
        State::create(["country_code" => "CO", "code" => "SAN", "name" => "Santander",]);
        State::create(["country_code" => "CO", "code" => "SUC", "name" => "Sucre",]);
        State::create(["country_code" => "CO", "code" => "TOL", "name" => "Tolima",]);
        State::create(["country_code" => "CO", "code" => "VAC", "name" => "Valle del Cauca",]);
        State::create(["country_code" => "CO", "code" => "VAU", "name" => "Vaupés",]);
        State::create(["country_code" => "CO", "code" => "VID", "name" => "Vichada",]);

        // Comoros
        State::create(["country_code" => "KM", "code" => "G", "name" => "Grande Comore",]);
        State::create(["country_code" => "KM", "code" => "A", "name" => "Anjouan",]);
        State::create(["country_code" => "KM", "code" => "M", "name" => "Mohéli",]);

        // Congo
        State::create(["country_code" => "CG", "code" => "BZV", "name" => "Brazzaville",]);
        State::create(["country_code" => "CG", "code" => "11", "name" => "Bouenza",]);
        State::create(["country_code" => "CG", "code" => "8", "name" => "Cuvette",]);
        State::create(["country_code" => "CG", "code" => "15", "name" => "Cuvette-Ouest",]);
        State::create(["country_code" => "CG", "code" => "5", "name" => "Kouilou",]);
        State::create(["country_code" => "CG", "code" => "2", "name" => "Lékoumou",]);
        State::create(["country_code" => "CG", "code" => "7", "name" => "Likouala",]);
        State::create(["country_code" => "CG", "code" => "9", "name" => "Niari",]);
        State::create(["country_code" => "CG", "code" => "14", "name" => "Plateaux",]);
        State::create(["country_code" => "CG", "code" => "16", "name" => "Pointe-Noire",]);
        State::create(["country_code" => "CG", "code" => "12", "name" => "Pool",]);
        State::create(["country_code" => "CG", "code" => "13", "name" => "Sangha",]);

        // Congo, the Democratic Republic of the
        State::create(["country_code" => "CD", "code" => "KN", "name" => "Kinshasa",]);
        State::create(["country_code" => "CD", "code" => "BC", "name" => "Kongo Central",]);
        State::create(["country_code" => "CD", "code" => "EQ", "name" => "Equator",]);
        State::create(["country_code" => "CD", "code" => "KE", "name" => "Kasai-Oriental",]);
        State::create(["country_code" => "CD", "code" => "MA", "name" => "Maniema",]);
        State::create(["country_code" => "CD", "code" => "NK", "name" => "North Kivu",]);
        State::create(["country_code" => "CD", "code" => "SK", "name" => "South Kivu",]);
        State::create(["country_code" => "CD", "code" => "BU", "name" => "Bas-Uele",]);
        State::create(["country_code" => "CD", "code" => "HK", "name" => "Haut-Katanga",]);
        State::create(["country_code" => "CD", "code" => "HL", "name" => "Haut-Lomami",]);
        State::create(["country_code" => "CD", "code" => "HU", "name" => "Haut-Uele",]);
        State::create(["country_code" => "CD", "code" => "IT", "name" => "Ituri",]);
        State::create(["country_code" => "CD", "code" => "KC", "name" => "Kasai Central",]);
        State::create(["country_code" => "CD", "code" => "KG", "name" => "Kwango",]);
        State::create(["country_code" => "CD", "code" => "KL", "name" => "Kwilu",]);
        State::create(["country_code" => "CD", "code" => "KS", "name" => "Kasai",]);
        State::create(["country_code" => "CD", "code" => "LO", "name" => "Lomami",]);
        State::create(["country_code" => "CD", "code" => "LU", "name" => "Lualaba",]);
        State::create(["country_code" => "CD", "code" => "MN", "name" => "Mai-Ndombe",]);
        State::create(["country_code" => "CD", "code" => "MO", "name" => "Mongala",]);
        State::create(["country_code" => "CD", "code" => "NU", "name" => "North Ubangi",]);
        State::create(["country_code" => "CD", "code" => "SA", "name" => "Sankuru",]);
        State::create(["country_code" => "CD", "code" => "SU", "name" => "South Ubangi",]);
        State::create(["country_code" => "CD", "code" => "TA", "name" => "Tanganyika",]);
        State::create(["country_code" => "CD", "code" => "TO", "name" => "Tshopo",]);
        State::create(["country_code" => "CD", "code" => "TU", "name" => "Tshuapa",]);

        // Cook Islands (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "CK", "code" => "CK", "name" => "Cook Islands",]);

        // Costa Rica
        State::create(["country_code" => "CR", "code" => "A", "name" => "Alajuela",]);
        State::create(["country_code" => "CR", "code" => "C", "name" => "Cartago",]);
        State::create(["country_code" => "CR", "code" => "G", "name" => "Guanacaste",]);
        State::create(["country_code" => "CR", "code" => "H", "name" => "Heredia",]);
        State::create(["country_code" => "CR", "code" => "L", "name" => "Limón",]);
        State::create(["country_code" => "CR", "code" => "P", "name" => "Puntarenas",]);
        State::create(["country_code" => "CR", "code" => "SJ", "name" => "San José",]);

        // Côte d'Ivoire
        State::create(["country_code" => "CI", "code" => "AB", "name" => "Abidjan",]);
        State::create(["country_code" => "CI", "code" => "BS", "name" => "Bas-Sassandra",]);
        State::create(["country_code" => "CI", "code" => "CM", "name" => "Comoé",]);
        State::create(["country_code" => "CI", "code" => "DN", "name" => "Denguélé",]);
        State::create(["country_code" => "CI", "code" => "GD", "name" => "Gôh-Djiboua",]);
        State::create(["country_code" => "CI", "code" => "LC", "name" => "Lacs",]);
        State::create(["country_code" => "CI", "code" => "LG", "name" => "Lagunes",]);
        State::create(["country_code" => "CI", "code" => "MG", "name" => "Montagnes",]);
        State::create(["country_code" => "CI", "code" => "SM", "name" => "Sassandra-Marahoué",]);
        State::create(["country_code" => "CI", "code" => "SV", "name" => "Savanes",]);
        State::create(["country_code" => "CI", "code" => "VB", "name" => "Vallée du Bandama",]);
        State::create(["country_code" => "CI", "code" => "WR", "name" => "Woroba",]);
        State::create(["country_code" => "CI", "code" => "YM", "name" => "Yamoussoukro",]);
        State::create(["country_code" => "CI", "code" => "ZZ", "name" => "Zanzan",]);

        // Croatia
        State::create(["country_code" => "HR", "code" => "21", "name" => "Grad Zagreb",]);
        State::create(["country_code" => "HR", "code" => "07", "name" => "Bjelovarsko-bilogorska županija",]);
        State::create(["country_code" => "HR", "code" => "12", "name" => "Brodsko-posavska županija",]);
        State::create(["country_code" => "HR", "code" => "19", "name" => "Dubrovačko-neretvanska županija",]);
        State::create(["country_code" => "HR", "code" => "18", "name" => "Istarska županija",]);
        State::create(["country_code" => "HR", "code" => "04", "name" => "Karlovačka županija",]);
        State::create(["country_code" => "HR", "code" => "06", "name" => "Koprivničko-križevačka županija",]);
        State::create(["country_code" => "HR", "code" => "02", "name" => "Krapinsko-zagorska županija",]);
        State::create(["country_code" => "HR", "code" => "09", "name" => "Ličko-senjska županija",]);
        State::create(["country_code" => "HR", "code" => "20", "name" => "Međimurska županija",]);
        State::create(["country_code" => "HR", "code" => "14", "name" => "Osječko-baranjska županija",]);
        State::create(["country_code" => "HR", "code" => "11", "name" => "Požeško-slavonska županija",]);
        State::create(["country_code" => "HR", "code" => "08", "name" => "Primorsko-goranska županija",]);
        State::create(["country_code" => "HR", "code" => "03", "name" => "Sisačko-moslavačka županija",]);
        State::create(["country_code" => "HR", "code" => "17", "name" => "Splitsko-dalmatinska županija",]);
        State::create(["country_code" => "HR", "code" => "15", "name" => "Šibensko-kninska županija",]);
        State::create(["country_code" => "HR", "code" => "05", "name" => "Varaždinska županija",]);
        State::create(["country_code" => "HR", "code" => "10", "name" => "Virovitičko-podravska županija",]);
        State::create(["country_code" => "HR", "code" => "16", "name" => "Vukovarsko-srijemska županija",]);
        State::create(["country_code" => "HR", "code" => "13", "name" => "Zadarska županija",]);
        State::create(["country_code" => "HR", "code" => "01", "name" => "Zagrebačka županija",]);

        // Cuba
        State::create(["country_code" => "CU", "code" => "15", "name" => "Artemisa",]);
        State::create(["country_code" => "CU", "code" => "09", "name" => "Camagüey",]);
        State::create(["country_code" => "CU", "code" => "08", "name" => "Ciego de Ávila",]);
        State::create(["country_code" => "CU", "code" => "06", "name" => "Cienfuegos",]);
        State::create(["country_code" => "CU", "code" => "12", "name" => "Granma",]);
        State::create(["country_code" => "CU", "code" => "14", "name" => "Guantánamo",]);
        State::create(["country_code" => "CU", "code" => "11", "name" => "Holguín",]);
        State::create(["country_code" => "CU", "code" => "03", "name" => "La Habana",]);
        State::create(["country_code" => "CU", "code" => "10", "name" => "Las Tunas",]);
        State::create(["country_code" => "CU", "code" => "04", "name" => "Matanzas",]);
        State::create(["country_code" => "CU", "code" => "16", "name" => "Mayabeque",]);
        State::create(["country_code" => "CU", "code" => "01", "name" => "Pinar del Río",]);
        State::create(["country_code" => "CU", "code" => "07", "name" => "Sancti Spíritus",]);
        State::create(["country_code" => "CU", "code" => "13", "name" => "Santiago de Cuba",]);
        State::create(["country_code" => "CU", "code" => "05", "name" => "Villa Clara",]);
        State::create(["country_code" => "CU", "code" => "99", "name" => "Isla de la Juventud",]);

        // Curaçao (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "CW", "code" => "CW", "name" => "Curaçao",]);

        // Cyprus
        State::create(["country_code" => "CY", "code" =>"04", "name" => "Famagusta",]);
        State::create(["country_code" => "CY", "code" =>"06", "name" => "Kyrenia",]);
        State::create(["country_code" => "CY", "code" =>"03", "name" => "Larnaca",]);
        State::create(["country_code" => "CY", "code" =>"01", "name" => "Nicosia",]);
        State::create(["country_code" => "CY", "code" =>"02", "name" => "Limassol",]);
        State::create(["country_code" => "CY", "code" =>"05", "name" => "Paphos",]);

        // Czech Republic
        State::create(["country_code" => "CZ", "code" =>"31", "name" => "Jihočeský kraj",]);
        State::create(["country_code" => "CZ", "code" =>"64", "name" => "Jihomoravský kraj",]);
        State::create(["country_code" => "CZ", "code" =>"41", "name" => "Karlovarský kraj",]);
        State::create(["country_code" => "CZ", "code" =>"52", "name" => "Královéhradecký kraj",]);
        State::create(["country_code" => "CZ", "code" =>"51", "name" => "Liberecký kraj",]);
        State::create(["country_code" => "CZ", "code" =>"80", "name" => "Moravskoslezský kraj",]);
        State::create(["country_code" => "CZ", "code" =>"71", "name" => "Olomoucký kraj",]);
        State::create(["country_code" => "CZ", "code" =>"53", "name" => "Pardubický kraj",]);
        State::create(["country_code" => "CZ", "code" =>"32", "name" => "Plzeňský kraj",]);
        State::create(["country_code" => "CZ", "code" =>"10", "name" => "Praha, Hlavní město",]);
        State::create(["country_code" => "CZ", "code" =>"20", "name" => "Středočeský kraj",]);
        State::create(["country_code" => "CZ", "code" =>"42", "name" => "Ústecký kraj",]);
        State::create(["country_code" => "CZ", "code" =>"63", "name" => "Kraj Vysočina",]);
        State::create(["country_code" => "CZ", "code" =>"72", "name" => "Zlínský kraj",]);

        // Denmark
        State::create(["country_code" => "DK", "code" =>"84", "name" => "Hovedstaden",]);
        State::create(["country_code" => "DK", "code" =>"82", "name" => "Midtjylland",]);
        State::create(["country_code" => "DK", "code" =>"81", "name" => "Nordjylland",]);
        State::create(["country_code" => "DK", "code" =>"85", "name" => "Sjælland",]);
        State::create(["country_code" => "DK", "code" =>"83", "name" => "Syddanmark",]);

        // Djibouti
        State::create(["country_code" => "DJ", "code" =>"AS", "name" => "Ali Sabieh",]);
        State::create(["country_code" => "DJ", "code" =>"AR", "name" => "Arta",]);
        State::create(["country_code" => "DJ", "code" =>"DI", "name" => "Dikhil",]);
        State::create(["country_code" => "DJ", "code" =>"OB", "name" => "Obock",]);
        State::create(["country_code" => "DJ", "code" =>"TA", "name" => "Tadjourah",]);
        State::create(["country_code" => "DJ", "code" =>"DJ", "name" => "Djibouti",]);

        // Dominica
        State::create(["country_code" => "DM", "code" => "02", "name" => "Saint Andrew",]);
        State::create(["country_code" => "DM", "code" => "03", "name" => "Saint David",]);
        State::create(["country_code" => "DM", "code" => "04", "name" => "Saint George",]);
        State::create(["country_code" => "DM", "code" => "05", "name" => "Saint John",]);
        State::create(["country_code" => "DM", "code" => "06", "name" => "Saint Joseph",]);
        State::create(["country_code" => "DM", "code" => "07", "name" => "Saint Luke",]);
        State::create(["country_code" => "DM", "code" => "08", "name" => "Saint Mark",]);
        State::create(["country_code" => "DM", "code" => "09", "name" => "Saint Patrick",]);
        State::create(["country_code" => "DM", "code" => "10", "name" => "Saint Paul",]);
        State::create(["country_code" => "DM", "code" => "11", "name" => "Saint Peter",]);

        // Dominican Republic
        State::create(["country_code" => "DO", "code" => "01", "name" => "Distrito Nacional",]);
        State::create(["country_code" => "DO", "code" => "02", "name" => "Azua",]);
        State::create(["country_code" => "DO", "code" => "03", "name" => "Baoruco",]);
        State::create(["country_code" => "DO", "code" => "04", "name" => "Barahona",]);
        State::create(["country_code" => "DO", "code" => "05", "name" => "Dajabón",]);
        State::create(["country_code" => "DO", "code" => "06", "name" => "Duarte",]);
        State::create(["country_code" => "DO", "code" => "08", "name" => "El Seibo",]);
        State::create(["country_code" => "DO", "code" => "09", "name" => "Espaillat",]);
        State::create(["country_code" => "DO", "code" => "30", "name" => "Hato Mayor",]);
        State::create(["country_code" => "DO", "code" => "10", "name" => "Independencia",]);
        State::create(["country_code" => "DO", "code" => "11", "name" => "La Altagracia",]);
        State::create(["country_code" => "DO", "code" => "07", "name" => "Elías Piña",]);
        State::create(["country_code" => "DO", "code" => "12", "name" => "La Romana",]);
        State::create(["country_code" => "DO", "code" => "13", "name" => "La Vega",]);
        State::create(["country_code" => "DO", "code" => "14", "name" => "María Trinidad Sánchez",]);
        State::create(["country_code" => "DO", "code" => "28", "name" => "Monseñor Nouel",]);
        State::create(["country_code" => "DO", "code" => "15", "name" => "Monte Cristi",]);
        State::create(["country_code" => "DO", "code" => "29", "name" => "Monte Plata",]);
        State::create(["country_code" => "DO", "code" => "16", "name" => "Pedernales",]);
        State::create(["country_code" => "DO", "code" => "17", "name" => "Peravia",]);
        State::create(["country_code" => "DO", "code" => "18", "name" => "Puerto Plata",]);
        State::create(["country_code" => "DO", "code" => "19", "name" => "Hermanas Mirabal",]);
        State::create(["country_code" => "DO", "code" => "20", "name" => "Samaná",]);
        State::create(["country_code" => "DO", "code" => "21", "name" => "San Cristóbal",]);
        State::create(["country_code" => "DO", "code" => "31", "name" => "San José de Ocoa",]);
        State::create(["country_code" => "DO", "code" => "22", "name" => "San Juan",]);
        State::create(["country_code" => "DO", "code" => "23", "name" => "San Pedro de Macorís",]);
        State::create(["country_code" => "DO", "code" => "24", "name" => "Sánchez Ramírez",]);
        State::create(["country_code" => "DO", "code" => "25", "name" => "Santiago",]);
        State::create(["country_code" => "DO", "code" => "26", "name" => "Santiago Rodríguez",]);
        State::create(["country_code" => "DO", "code" => "32", "name" => "Santo Domingo",]);
        State::create(["country_code" => "DO", "code" => "27", "name" => "Valverde",]);

        // Ecuador
        State::create(["country_code" => "EC", "code" => "A", "name" => "Azuay",]);
        State::create(["country_code" => "EC", "code" => "B", "name" => "Bolívar",]);
        State::create(["country_code" => "EC", "code" => "F", "name" => "Cañar",]);
        State::create(["country_code" => "EC", "code" => "C", "name" => "Carchi",]);
        State::create(["country_code" => "EC", "code" => "H", "name" => "Chimborazo",]);
        State::create(["country_code" => "EC", "code" => "X", "name" => "Cotopaxi",]);
        State::create(["country_code" => "EC", "code" => "O", "name" => "El Oro",]);
        State::create(["country_code" => "EC", "code" => "E", "name" => "Esmeraldas",]);
        State::create(["country_code" => "EC", "code" => "W", "name" => "Galápagos",]);
        State::create(["country_code" => "EC", "code" => "G", "name" => "Guayas",]);
        State::create(["country_code" => "EC", "code" => "I", "name" => "Imbabura",]);
        State::create(["country_code" => "EC", "code" => "L", "name" => "Loja",]);
        State::create(["country_code" => "EC", "code" => "R", "name" => "Los Ríos",]);
        State::create(["country_code" => "EC", "code" => "M", "name" => "Manabí",]);
        State::create(["country_code" => "EC", "code" => "S", "name" => "Morona Santiago",]);
        State::create(["country_code" => "EC", "code" => "N", "name" => "Napo",]);
        State::create(["country_code" => "EC", "code" => "D", "name" => "Orellana",]);
        State::create(["country_code" => "EC", "code" => "Y", "name" => "Pastaza",]);
        State::create(["country_code" => "EC", "code" => "P", "name" => "Pichincha",]);
        State::create(["country_code" => "EC", "code" => "SE", "name" => "Santa Elena",]);
        State::create(["country_code" => "EC", "code" => "SD", "name" => "Santo Domingo de los Tsáchilas",]);
        State::create(["country_code" => "EC", "code" => "U", "name" => "Sucumbíos",]);
        State::create(["country_code" => "EC", "code" => "T", "name" => "Tungurahua",]);
        State::create(["country_code" => "EC", "code" => "Z", "name" => "Zamora Chinchipe",]);

        // Egypt
        State::create(["country_code" => "EG", "code" => "DK", "name" => "Dakahlia",]);
        State::create(["country_code" => "EG", "code" => "BA", "name" => "Red Sea",]);
        State::create(["country_code" => "EG", "code" => "BH", "name" => "Beheira",]);
        State::create(["country_code" => "EG", "code" => "FYM", "name" => "Faiyum",]);
        State::create(["country_code" => "EG", "code" => "GH", "name" => "Gharbia",]);
        State::create(["country_code" => "EG", "code" => "ALX", "name" => "Alexandria",]);
        State::create(["country_code" => "EG", "code" => "IS", "name" => "Ismailia",]);
        State::create(["country_code" => "EG", "code" => "GZ", "name" => "Giza",]);
        State::create(["country_code" => "EG", "code" => "MNF", "name" => "Monufia",]);
        State::create(["country_code" => "EG", "code" => "MN", "name" => "Minya",]);
        State::create(["country_code" => "EG", "code" => "C", "name" => "Cairo",]);
        State::create(["country_code" => "EG", "code" => "KB", "name" => "Qalyubia",]);
        State::create(["country_code" => "EG", "code" => "LX", "name" => "Luxor",]);
        State::create(["country_code" => "EG", "code" => "WAD", "name" => "New Valley",]);
        State::create(["country_code" => "EG", "code" => "SUZ", "name" => "Suez",]);
        State::create(["country_code" => "EG", "code" => "SHR", "name" => "Al Sharqia",]);
        State::create(["country_code" => "EG", "code" => "ASN", "name" => "Aswan",]);
        State::create(["country_code" => "EG", "code" => "AST", "name" => "Asyut",]);
        State::create(["country_code" => "EG", "code" => "BNS", "name" => "Beni Suef",]);
        State::create(["country_code" => "EG", "code" => "PTS", "name" => "Port Said",]);
        State::create(["country_code" => "EG", "code" => "DT", "name" => "Damietta",]);
        State::create(["country_code" => "EG", "code" => "JS", "name" => "South Sinai",]);
        State::create(["country_code" => "EG", "code" => "KFS", "name" => "Kafr el-Sheikh",]);
        State::create(["country_code" => "EG", "code" => "MT", "name" => "Matrouh",]);
        State::create(["country_code" => "EG", "code" => "KN", "name" => "Qena",]);
        State::create(["country_code" => "EG", "code" => "SIN", "name" => "North Sinai",]);
        State::create(["country_code" => "EG", "code" => "SHG", "name" => "Sohag",]);

        // El Salvador
        State::create(["country_code" => "SV", "code" => "AH", "name" => "Ahuachapán",]);
        State::create(["country_code" => "SV", "code" => "CA", "name" => "Cabañas",]);
        State::create(["country_code" => "SV", "code" => "CH", "name" => "Chalatenango",]);
        State::create(["country_code" => "SV", "code" => "CU", "name" => "Cuscatlán",]);
        State::create(["country_code" => "SV", "code" => "LI", "name" => "La Libertad",]);
        State::create(["country_code" => "SV", "code" => "PA", "name" => "La Paz",]);
        State::create(["country_code" => "SV", "code" => "UN", "name" => "La Unión",]);
        State::create(["country_code" => "SV", "code" => "MO", "name" => "Morazán",]);
        State::create(["country_code" => "SV", "code" => "SM", "name" => "San Miguel",]);
        State::create(["country_code" => "SV", "code" => "SS", "name" => "San Salvador",]);
        State::create(["country_code" => "SV", "code" => "SV", "name" => "San Vicente",]);
        State::create(["country_code" => "SV", "code" => "SA", "name" => "Santa Ana",]);
        State::create(["country_code" => "SV", "code" => "SO", "name" => "Sonsonate",]);
        State::create(["country_code" => "SV", "code" => "US", "name" => "Usulután",]);

        // Equatorial Guinea
        State::create(["country_code" => "GQ", "code" => "AN", "name" => "Annobón",]);
        State::create(["country_code" => "GQ", "code" => "BN", "name" => "Bioko Norte",]);
        State::create(["country_code" => "GQ", "code" => "BS", "name" => "Bioko Sur",]);
        State::create(["country_code" => "GQ", "code" => "CS", "name" => "Centro Sur",]);
        State::create(["country_code" => "GQ", "code" => "KN", "name" => "Kié-Ntem",]);
        State::create(["country_code" => "GQ", "code" => "LI", "name" => "Litoral",]);
        State::create(["country_code" => "GQ", "code" => "WN", "name" => "Wele-Nzas",]);

        // Eritrea
        State::create(["country_code" => "ER", "code" => "MA", "name" => "Maekel",]);
        State::create(["country_code" => "ER", "code" => "DU", "name" => "Debub",]);
        State::create(["country_code" => "ER", "code" => "AN", "name" => "Anseba",]);
        State::create(["country_code" => "ER", "code" => "DK", "name" => "Southern Red Sea",]);
        State::create(["country_code" => "ER", "code" => "GB", "name" => "Gash-Barka",]);
        State::create(["country_code" => "ER", "code" => "SK", "name" => "Northern Red Sea",]);

        // Estonia
        State::create(["country_code" => "EE", "code" =>"37", "name" => "Harjumaa",]);
        State::create(["country_code" => "EE", "code" =>"39", "name" => "Hiiumaa",]);
        State::create(["country_code" => "EE", "code" =>"44", "name" => "Ida-Virumaa",]);
        State::create(["country_code" => "EE", "code" =>"49", "name" => "Jõgevamaa",]);
        State::create(["country_code" => "EE", "code" =>"51", "name" => "Järvamaa",]);
        State::create(["country_code" => "EE", "code" =>"57", "name" => "Läänemaa",]);
        State::create(["country_code" => "EE", "code" =>"59", "name" => "Lääne-Virumaa",]);
        State::create(["country_code" => "EE", "code" =>"65", "name" => "Põlvamaa",]);
        State::create(["country_code" => "EE", "code" =>"67", "name" => "Pärnumaa",]);
        State::create(["country_code" => "EE", "code" =>"70", "name" => "Raplamaa",]);
        State::create(["country_code" => "EE", "code" =>"74", "name" => "Saaremaa",]);
        State::create(["country_code" => "EE", "code" =>"78", "name" => "Tartumaa",]);
        State::create(["country_code" => "EE", "code" =>"82", "name" => "Valgamaa",]);
        State::create(["country_code" => "EE", "code" =>"84", "name" => "Viljandimaa",]);
        State::create(["country_code" => "EE", "code" =>"86", "name" => "Võrumaa",]);
        // Ethiopia
        State::create(["country_code" => "ET", "code" => "AA", "name" => "Addis Ababa",]);
        State::create(["country_code" => "ET", "code" => "DD", "name" => "Dire Dawa",]);
        State::create(["country_code" => "ET", "code" => "AF", "name" => "Afar",]);
        State::create(["country_code" => "ET", "code" => "AM", "name" => "Amara",]);
        State::create(["country_code" => "ET", "code" => "BE", "name" => "Benshangul-Gumaz",]);
        State::create(["country_code" => "ET", "code" => "GA", "name" => "Gambela Peoples",]);
        State::create(["country_code" => "ET", "code" => "HA", "name" => "Harari People",]);
        State::create(["country_code" => "ET", "code" => "OR", "name" => "Oromia",]);
        State::create(["country_code" => "ET", "code" => "SO", "name" => "Somali",]);
        State::create(["country_code" => "ET", "code" => "TI", "name" => "Tigrai",]);
        State::create(["country_code" => "ET", "code" => "SN", "name" => "Southern Nations, Nationalities and Peoples",]);

        // Falkland Islands (Malvinas) (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "FK", "code" => "FK", "name" => "Falkland Islands (Malvinas)",]);

        // Faroe Islands (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "FO", "code" => "FO", "name" => "Faroe Islands",]);

        // Fiji
        State::create(["country_code" => "FJ", "code" => "01", "name" => "Ba",]);
        State::create(["country_code" => "FJ", "code" => "02", "name" => "Bua",]);
        State::create(["country_code" => "FJ", "code" => "03", "name" => "Cakaudrove",]);
        State::create(["country_code" => "FJ", "code" => "04", "name" => "Kadavu",]);
        State::create(["country_code" => "FJ", "code" => "05", "name" => "Lau",]);
        State::create(["country_code" => "FJ", "code" => "06", "name" => "Lomaiviti",]);
        State::create(["country_code" => "FJ", "code" => "07", "name" => "Macuata",]);
        State::create(["country_code" => "FJ", "code" => "08", "name" => "Nadroga and Navosa",]);
        State::create(["country_code" => "FJ", "code" => "09", "name" => "Naitasiri",]);
        State::create(["country_code" => "FJ", "code" => "10", "name" => "Namosi",]);
        State::create(["country_code" => "FJ", "code" => "11", "name" => "Ra",]);
        State::create(["country_code" => "FJ", "code" => "12", "name" => "Rewa",]);
        State::create(["country_code" => "FJ", "code" => "13", "name" => "Serua",]);
        State::create(["country_code" => "FJ", "code" => "14", "name" => "Tailevu",]);

        // Finland
        State::create(["country_code" => "FI", "code" =>"01", "name" => "Ahvenanmaan maakunta",]);
        State::create(["country_code" => "FI", "code" =>"02", "name" => "Etelä-Karjala",]);
        State::create(["country_code" => "FI", "code" =>"03", "name" => "Etelä-Pohjanmaa",]);
        State::create(["country_code" => "FI", "code" =>"04", "name" => "Etelä-Savo",]);
        State::create(["country_code" => "FI", "code" =>"05", "name" => "Kainuu",]);
        State::create(["country_code" => "FI", "code" =>"06", "name" => "Kanta-Häme",]);
        State::create(["country_code" => "FI", "code" =>"07", "name" => "Keski-Pohjanmaa",]);
        State::create(["country_code" => "FI", "code" =>"08", "name" => "Keski-Suomi",]);
        State::create(["country_code" => "FI", "code" =>"09", "name" => "Kymenlaakso",]);
        State::create(["country_code" => "FI", "code" =>"10", "name" => "Lappi",]);
        State::create(["country_code" => "FI", "code" =>"11", "name" => "Pirkanmaa",]);
        State::create(["country_code" => "FI", "code" =>"12", "name" => "Pohjanmaa",]);
        State::create(["country_code" => "FI", "code" =>"13", "name" => "Pohjois-Karjala",]);
        State::create(["country_code" => "FI", "code" =>"14", "name" => "Pohjois-Pohjanmaa",]);
        State::create(["country_code" => "FI", "code" =>"15", "name" => "Pohjois-Savo",]);
        State::create(["country_code" => "FI", "code" =>"16", "name" => "Päijät-Häme",]);
        State::create(["country_code" => "FI", "code" =>"17", "name" => "Satakunta",]);
        State::create(["country_code" => "FI", "code" =>"18", "name" => "Uusimaa",]);
        State::create(["country_code" => "FI", "code" =>"19", "name" => "Varsinais-Suomi",]);

        // France
        State::create(["country_code" => "FR", "code" =>"ARA", "name" => "Auvergne-Rhône-Alpes",]);
        State::create(["country_code" => "FR", "code" =>"BFC", "name" => "Bourgogne-Franche-Comté",]);
        State::create(["country_code" => "FR", "code" =>"BRE", "name" => "Bretagne",]);
        State::create(["country_code" => "FR", "code" =>"CVL", "name" => "Centre-Val de Loire",]);
        State::create(["country_code" => "FR", "code" =>"COR", "name" => "Corse",]);
        State::create(["country_code" => "FR", "code" =>"GES", "name" => "Grand-Est",]);
        State::create(["country_code" => "FR", "code" =>"GUA", "name" => "Guadeloupe",]);
        State::create(["country_code" => "FR", "code" =>"HDF", "name" => "Hauts-de-France",]);
        State::create(["country_code" => "FR", "code" =>"IDF", "name" => "Île-de-France",]);
        State::create(["country_code" => "FR", "code" =>"MAY", "name" => "Mayotte",]);
        State::create(["country_code" => "FR", "code" =>"NOR", "name" => "Normandie",]);
        State::create(["country_code" => "FR", "code" =>"NAQ", "name" => "Nouvelle-Aquitaine",]);
        State::create(["country_code" => "FR", "code" =>"OCC", "name" => "Occitanie",]);
        State::create(["country_code" => "FR", "code" =>"PDL", "name" => "Pays-de-la-Loire",]);
        State::create(["country_code" => "FR", "code" =>"PAC", "name" => "Provence-Alpes-Côte-d’Azur",]);
        State::create(["country_code" => "FR", "code" =>"LRE", "name" => "La Réunion",]);

        // French Guiana (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "GF", "code" => "GF", "name" => "French Guiana",]);

        // French Polynesia (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "PF", "code" => "PF", "name" => "French Polynesia",]);

        // French Southern Territories (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "TF", "code" => "TF", "name" => "French Southern Territories",]);

        // Gabon
        State::create(["country_code" => "GA", "code" => "1", "name" => "Estuaire",]);
        State::create(["country_code" => "GA", "code" => "2", "name" => "Haut-Ogooué",]);
        State::create(["country_code" => "GA", "code" => "3", "name" => "Moyen-Ogooué",]);
        State::create(["country_code" => "GA", "code" => "4", "name" => "Ngounié",]);
        State::create(["country_code" => "GA", "code" => "5", "name" => "Nyanga",]);
        State::create(["country_code" => "GA", "code" => "6", "name" => "Ogooué-Ivindo",]);
        State::create(["country_code" => "GA", "code" => "7", "name" => "Ogooué-Lolo",]);
        State::create(["country_code" => "GA", "code" => "8", "name" => "Ogooué-Maritime",]);
        State::create(["country_code" => "GA", "code" => "9", "name" => "Woleu-Ntem",]);

        // Gambia
        State::create(["country_code" => "GM", "code" => "B", "name" => "Banjul",]);
        State::create(["country_code" => "GM", "code" => "M", "name" => "Central River",]);
        State::create(["country_code" => "GM", "code" => "L", "name" => "Lower River",]);
        State::create(["country_code" => "GM", "code" => "N", "name" => "North Bank",]);
        State::create(["country_code" => "GM", "code" => "U", "name" => "Upper River",]);
        State::create(["country_code" => "GM", "code" => "W", "name" => "Western",]);

        // Georgia
        State::create(["country_code" => "GE", "code" =>"AB", "name" => "Abkhazia",]);
        State::create(["country_code" => "GE", "code" =>"AJ", "name" => "Ajaria",]);
        State::create(["country_code" => "GE", "code" =>"TB", "name" => "Tbilisi",]);
        State::create(["country_code" => "GE", "code" =>"GU", "name" => "Guria",]);
        State::create(["country_code" => "GE", "code" =>"IM", "name" => "Imereti",]);
        State::create(["country_code" => "GE", "code" =>"KA", "name" => "K'akheti",]);
        State::create(["country_code" => "GE", "code" =>"KK", "name" => "Kvemo Kartli",]);
        State::create(["country_code" => "GE", "code" =>"MM", "name" => "Mtskheta-Mtianeti",]);
        State::create(["country_code" => "GE", "code" =>"RL", "name" => "Rach'a-Lechkhumi-Kvemo Svaneti",]);
        State::create(["country_code" => "GE", "code" =>"SZ", "name" => "Samegrelo-Zemo Svaneti",]);
        State::create(["country_code" => "GE", "code" =>"SJ", "name" => "Samtskhe-Javakheti",]);
        State::create(["country_code" => "GE", "code" =>"SK", "name" => "Shida Kartli",]);

        // Germany
        State::create(["country_code" => "DE", "code" =>"BW", "name" => "Baden-Württemberg",]);
        State::create(["country_code" => "DE", "code" =>"BY", "name" => "Bayern",]);
        State::create(["country_code" => "DE", "code" =>"BE", "name" => "Berlin",]);
        State::create(["country_code" => "DE", "code" =>"BB", "name" => "Brandenburg",]);
        State::create(["country_code" => "DE", "code" =>"HB", "name" => "Bremen",]);
        State::create(["country_code" => "DE", "code" =>"HH", "name" => "Hamburg",]);
        State::create(["country_code" => "DE", "code" =>"HE", "name" => "Hessen",]);
        State::create(["country_code" => "DE", "code" =>"MV", "name" => "Mecklenburg-Vorpommern",]);
        State::create(["country_code" => "DE", "code" =>"NI", "name" => "Niedersachsen",]);
        State::create(["country_code" => "DE", "code" =>"NW", "name" => "Nordrhein-Westfalen",]);
        State::create(["country_code" => "DE", "code" =>"RP", "name" => "Rheinland-Pfalz",]);
        State::create(["country_code" => "DE", "code" =>"SL", "name" => "Saarland",]);
        State::create(["country_code" => "DE", "code" =>"SN", "name" => "Sachsen",]);
        State::create(["country_code" => "DE", "code" =>"ST", "name" => "Sachsen-Anhalt",]);
        State::create(["country_code" => "DE", "code" =>"SH", "name" => "Schleswig-Holstein",]);
        State::create(["country_code" => "DE", "code" =>"TH", "name" => "Thüringen",]);

        // Ghana
        State::create(["country_code" => "GH", "code" => "AF", "name" => "Ahafo",]);
        State::create(["country_code" => "GH", "code" => "AH", "name" => "Ashanti",]);
        State::create(["country_code" => "GH", "code" => "BO", "name" => "Bono",]);
        State::create(["country_code" => "GH", "code" => "BE", "name" => "Bono East",]);
        State::create(["country_code" => "GH", "code" => "CP", "name" => "Central",]);
        State::create(["country_code" => "GH", "code" => "EP", "name" => "Eastern",]);
        State::create(["country_code" => "GH", "code" => "AA", "name" => "Greater Accra",]);
        State::create(["country_code" => "GH", "code" => "NE", "name" => "North East",]);
        State::create(["country_code" => "GH", "code" => "NP", "name" => "Northern",]);
        State::create(["country_code" => "GH", "code" => "OT", "name" => "Oti",]);
        State::create(["country_code" => "GH", "code" => "SV", "name" => "Savannah",]);
        State::create(["country_code" => "GH", "code" => "UE", "name" => "Upper East",]);
        State::create(["country_code" => "GH", "code" => "UW", "name" => "Upper West",]);
        State::create(["country_code" => "GH", "code" => "TV", "name" => "Volta",]);
        State::create(["country_code" => "GH", "code" => "WP", "name" => "Western",]);
        State::create(["country_code" => "GH", "code" => "WN", "name" => "Western North",]);

        // Gibraltar (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "GI", "code" => "GI", "name" => "Gibraltar",]);

        // Greece
        State::create(["country_code" => "GR", "code" =>"A", "name" => "Anatolikí Makedonía kai Thráki",]);
        State::create(["country_code" => "GR", "code" =>"I", "name" => "Attikí",]);
        State::create(["country_code" => "GR", "code" =>"G", "name" => "Dytikí Elláda",]);
        State::create(["country_code" => "GR", "code" =>"C", "name" => "Dytikí Makedonía",]);
        State::create(["country_code" => "GR", "code" =>"F", "name" => "Ionía Nísia",]);
        State::create(["country_code" => "GR", "code" =>"D", "name" => "Ípeiros",]);
        State::create(["country_code" => "GR", "code" =>"B", "name" => "Kentrikí Makedonía",]);
        State::create(["country_code" => "GR", "code" =>"M", "name" => "Kríti",]);
        State::create(["country_code" => "GR", "code" =>"L", "name" => "Nótio Aigaío",]);
        State::create(["country_code" => "GR", "code" =>"J", "name" => "Pelopónnisos",]);
        State::create(["country_code" => "GR", "code" =>"H", "name" => "Stereá Elláda",]);
        State::create(["country_code" => "GR", "code" =>"E", "name" => "Thessalía",]);
        State::create(["country_code" => "GR", "code" =>"K", "name" => "Vóreio Aigaío",]);
        State::create(["country_code" => "GR", "code" =>"69", "name" => "Ágion Óros",]);

        // Greenland
        State::create(["country_code" => "GL", "code" =>"AV", "name" => "Avannaata Kommunia",]);
        State::create(["country_code" => "GL", "code" =>"KU", "name" => "Kommune Kujalleq",]);
        State::create(["country_code" => "GL", "code" =>"QT", "name" => "Kommune Qeqertalik",]);
        State::create(["country_code" => "GL", "code" =>"SM", "name" => "Kommuneqarfik Sermersooq",]);
        State::create(["country_code" => "GL", "code" =>"QE", "name" => "Qeqqata Kommunia",]);

        // Grenada
        State::create(["country_code" => "GD", "code" =>"01", "name" => "Saint Andrew",]);
        State::create(["country_code" => "GD", "code" =>"02", "name" => "Saint David",]);
        State::create(["country_code" => "GD", "code" =>"03", "name" => "Saint George",]);
        State::create(["country_code" => "GD", "code" =>"04", "name" => "Saint John",]);
        State::create(["country_code" => "GD", "code" =>"05", "name" => "Saint Mark",]);
        State::create(["country_code" => "GD", "code" =>"06", "name" => "Saint Patrick",]);
        State::create(["country_code" => "GD", "code" =>"10", "name" => "Southern Grenadine Islands",]);

        // Guadeloupe (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "GP", "code" => "GP", "name" => "Guadeloupe",]);

        // Guam (Guam IS an outlying area of the United States)
        State::create(["country_code" => "GU", "code" => "GU", "name" => "Guam",]);

        // Guatemala
        State::create(["country_code" => "GT", "code" => "AV", "name" => "Alta Verapaz",]);
        State::create(["country_code" => "GT", "code" => "BV", "name" => "Baja Verapaz",]);
        State::create(["country_code" => "GT", "code" => "CM", "name" => "Chimaltenango",]);
        State::create(["country_code" => "GT", "code" => "CQ", "name" => "Chiquimula",]);
        State::create(["country_code" => "GT", "code" => "PR", "name" => "El Progreso",]);
        State::create(["country_code" => "GT", "code" => "ES", "name" => "Escuintla",]);
        State::create(["country_code" => "GT", "code" => "GU", "name" => "Guatemala",]);
        State::create(["country_code" => "GT", "code" => "HU", "name" => "Huehuetenango",]);
        State::create(["country_code" => "GT", "code" => "IZ", "name" => "Izabal",]);
        State::create(["country_code" => "GT", "code" => "JA", "name" => "Jalapa",]);
        State::create(["country_code" => "GT", "code" => "JU", "name" => "Jutiapa",]);
        State::create(["country_code" => "GT", "code" => "PE", "name" => "Petén",]);
        State::create(["country_code" => "GT", "code" => "QZ", "name" => "Quetzaltenango",]);
        State::create(["country_code" => "GT", "code" => "QC", "name" => "Quiché",]);
        State::create(["country_code" => "GT", "code" => "RE", "name" => "Retalhuleu",]);
        State::create(["country_code" => "GT", "code" => "SA", "name" => "Sacatepéquez",]);
        State::create(["country_code" => "GT", "code" => "SM", "name" => "San Marcos",]);
        State::create(["country_code" => "GT", "code" => "SR", "name" => "Santa Rosa",]);
        State::create(["country_code" => "GT", "code" => "SO", "name" => "Sololá",]);
        State::create(["country_code" => "GT", "code" => "SU", "name" => "Suchitepéquez",]);
        State::create(["country_code" => "GT", "code" => "TO", "name" => "Totonicapán",]);
        State::create(["country_code" => "GT", "code" => "ZA", "name" => "Zacapa",]);

        // Guernsey (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "GG", "code" => "GG", "name" => "Guernsey",]);

        // Guinea
        State::create(["country_code" => "GN", "code" => "B", "name" => "Boké",]);
        State::create(["country_code" => "GN", "code" => "F", "name" => "Faranah",]);
        State::create(["country_code" => "GN", "code" => "K", "name" => "Kankan",]);
        State::create(["country_code" => "GN", "code" => "D", "name" => "Kindia",]);
        State::create(["country_code" => "GN", "code" => "L", "name" => "Labé",]);
        State::create(["country_code" => "GN", "code" => "M", "name" => "Mamou",]);
        State::create(["country_code" => "GN", "code" => "N", "name" => "Nzérékoré",]);
        State::create(["country_code" => "GN", "code" => "C", "name" => "Conakry",]);

        // Guinea-Bissau
        State::create(["country_code" => "GW", "code" => "BS", "name" => "Bissau",]);
        State::create(["country_code" => "GW", "code" => "BA", "name" => "Bafatá",]);
        State::create(["country_code" => "GW", "code" => "BM", "name" => "Biombo",]);
        State::create(["country_code" => "GW", "code" => "BL", "name" => "Bolama",]);
        State::create(["country_code" => "GW", "code" => "CA", "name" => "Cacheu",]);
        State::create(["country_code" => "GW", "code" => "GA", "name" => "Gabú",]);
        State::create(["country_code" => "GW", "code" => "OI", "name" => "Oio",]);
        State::create(["country_code" => "GW", "code" => "QU", "name" => "Quinara",]);
        State::create(["country_code" => "GW", "code" => "TO", "name" => "Tombali",]);

        // Guyana
        State::create(["country_code" => "GY", "code" => "BA", "name" => "Barima-Waini",]);
        State::create(["country_code" => "GY", "code" => "CU", "name" => "Cuyuni-Mazaruni",]);
        State::create(["country_code" => "GY", "code" => "DE", "name" => "Demerara-Mahaica",]);
        State::create(["country_code" => "GY", "code" => "EB", "name" => "East Berbice-Corentyne",]);
        State::create(["country_code" => "GY", "code" => "ES", "name" => "Essequibo Islands-West Demerara",]);
        State::create(["country_code" => "GY", "code" => "MA", "name" => "Mahaica-Berbice",]);
        State::create(["country_code" => "GY", "code" => "PM", "name" => "Pomeroon-Supenaam",]);
        State::create(["country_code" => "GY", "code" => "PT", "name" => "Potaro-Siparuni",]);
        State::create(["country_code" => "GY", "code" => "UD", "name" => "Upper Demerara-Berbice",]);
        State::create(["country_code" => "GY", "code" => "UT", "name" => "Upper Takutu-Upper Essequibo",]);

        // Haiti
        State::create(["country_code" => "HT", "code" => "AR", "name" => "Artibonite",]);
        State::create(["country_code" => "HT", "code" => "CE", "name" => "Centre",]);
        State::create(["country_code" => "HT", "code" => "GA", "name" => "Grande’Anse",]);
        State::create(["country_code" => "HT", "code" => "NI", "name" => "Nippes",]);
        State::create(["country_code" => "HT", "code" => "ND", "name" => "Nord",]);
        State::create(["country_code" => "HT", "code" => "NE", "name" => "Nord-Est",]);
        State::create(["country_code" => "HT", "code" => "NO", "name" => "Nord-Ouest",]);
        State::create(["country_code" => "HT", "code" => "OU", "name" => "Ouest",]);
        State::create(["country_code" => "HT", "code" => "SD", "name" => "Sud",]);
        State::create(["country_code" => "HT", "code" => "SE", "name" => "Sud-Est",]);

        // Heard Island and McDonald Islands (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "HM", "code" => "HM", "name" => "Heard Island and McDonald Islands",]);

        // Holy See (Vatican City State)
        State::create(["country_code" => "VA", "code" => "VA", "name" => "Holy See (Vatican City State)",]);

        // Honduras
        State::create(["country_code" => "HN", "code" => "AT", "name" => "Atlántida",]);
        State::create(["country_code" => "HN", "code" => "CH", "name" => "Choluteca",]);
        State::create(["country_code" => "HN", "code" => "CL", "name" => "Colón",]);
        State::create(["country_code" => "HN", "code" => "CM", "name" => "Comayagua",]);
        State::create(["country_code" => "HN", "code" => "CP", "name" => "Copán",]);
        State::create(["country_code" => "HN", "code" => "CR", "name" => "Cortés",]);
        State::create(["country_code" => "HN", "code" => "EP", "name" => "El Paraíso",]);
        State::create(["country_code" => "HN", "code" => "FM", "name" => "Francisco Morazán",]);
        State::create(["country_code" => "HN", "code" => "GD", "name" => "Gracias a Dios",]);
        State::create(["country_code" => "HN", "code" => "IN", "name" => "Intibucá",]);
        State::create(["country_code" => "HN", "code" => "IB", "name" => "Islas de la Bahía",]);
        State::create(["country_code" => "HN", "code" => "LP", "name" => "La Paz",]);
        State::create(["country_code" => "HN", "code" => "LE", "name" => "Lempira",]);
        State::create(["country_code" => "HN", "code" => "OC", "name" => "Ocotepeque",]);
        State::create(["country_code" => "HN", "code" => "OL", "name" => "Olancho",]);
        State::create(["country_code" => "HN", "code" => "SB", "name" => "Santa Bárbara",]);
        State::create(["country_code" => "HN", "code" => "VA", "name" => "Valle",]);
        State::create(["country_code" => "HN", "code" => "YO", "name" => "Yoro",]);

        // Hong Kong (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "HK", "code" => "HK", "name" => "Hong Kong",]);

        // Hungary
        State::create(["country_code" => "HU", "code" =>"BU", "name" => "Budapest",]);
        State::create(["country_code" => "HU", "code" =>"BK", "name" => "Bács-Kiskun",]);
        State::create(["country_code" => "HU", "code" =>"BA", "name" => "Baranya",]);
        State::create(["country_code" => "HU", "code" =>"BE", "name" => "Békés",]);
        State::create(["country_code" => "HU", "code" =>"BZ", "name" => "Borsod-Abaúj-Zemplén",]);
        State::create(["country_code" => "HU", "code" =>"CS", "name" => "Csongrád",]);
        State::create(["country_code" => "HU", "code" =>"FE", "name" => "Fejér",]);
        State::create(["country_code" => "HU", "code" =>"GS", "name" => "Győr-Moson-Sopron",]);
        State::create(["country_code" => "HU", "code" =>"HB", "name" => "Hajdú-Bihar",]);
        State::create(["country_code" => "HU", "code" =>"HE", "name" => "Heves",]);
        State::create(["country_code" => "HU", "code" =>"JN", "name" => "Jász-Nagykun-Szolnok",]);
        State::create(["country_code" => "HU", "code" =>"KE", "name" => "Komárom-Esztergom",]);
        State::create(["country_code" => "HU", "code" =>"NO", "name" => "Nógrád",]);
        State::create(["country_code" => "HU", "code" =>"PE", "name" => "Pest",]);
        State::create(["country_code" => "HU", "code" =>"SO", "name" => "Somogy",]);
        State::create(["country_code" => "HU", "code" =>"SZ", "name" => "Szabolcs-Szatmár-Bereg",]);
        State::create(["country_code" => "HU", "code" =>"TO", "name" => "Tolna",]);
        State::create(["country_code" => "HU", "code" =>"VA", "name" => "Vas",]);
        State::create(["country_code" => "HU", "code" =>"VE", "name" => "Veszprém",]);
        State::create(["country_code" => "HU", "code" =>"ZA", "name" => "Zala",]);

        // Iceland
        State::create(["country_code" => "IS", "code" =>"1", "name" => "Höfuðborgarsvæði",]);
        State::create(["country_code" => "IS", "code" =>"2", "name" => "Suðurnes",]);
        State::create(["country_code" => "IS", "code" =>"3", "name" => "Vesturland",]);
        State::create(["country_code" => "IS", "code" =>"4", "name" => "Vestfirðir",]);
        State::create(["country_code" => "IS", "code" =>"5", "name" => "Norðurland vestra",]);
        State::create(["country_code" => "IS", "code" =>"6", "name" => "Norðurland eystra",]);
        State::create(["country_code" => "IS", "code" =>"7", "name" => "Austurland",]);
        State::create(["country_code" => "IS", "code" =>"8", "name" => "Suðurland",]);

        // India
        State::create(["country_code" => "IN", "code" => "AP", "name" => "Andhra Pradesh",]);
        State::create(["country_code" => "IN", "code" => "AR", "name" => "Arunachal Pradesh",]);
        State::create(["country_code" => "IN", "code" => "AS", "name" => "Assam",]);
        State::create(["country_code" => "IN", "code" => "BR", "name" => "Bihar",]);
        State::create(["country_code" => "IN", "code" => "CT", "name" => "Chhattisgarh",]);
        State::create(["country_code" => "IN", "code" => "GA", "name" => "Goa",]);
        State::create(["country_code" => "IN", "code" => "GJ", "name" => "Gujarat",]);
        State::create(["country_code" => "IN", "code" => "HR", "name" => "Haryana",]);
        State::create(["country_code" => "IN", "code" => "HP", "name" => "Himachal Pradesh",]);
        State::create(["country_code" => "IN", "code" => "JH", "name" => "Jharkhand",]);
        State::create(["country_code" => "IN", "code" => "KA", "name" => "Karnataka",]);
        State::create(["country_code" => "IN", "code" => "KL", "name" => "Kerala",]);
        State::create(["country_code" => "IN", "code" => "MP", "name" => "Madhya Pradesh",]);
        State::create(["country_code" => "IN", "code" => "MH", "name" => "Maharashtra",]);
        State::create(["country_code" => "IN", "code" => "MN", "name" => "Manipur",]);
        State::create(["country_code" => "IN", "code" => "ML", "name" => "Meghalaya",]);
        State::create(["country_code" => "IN", "code" => "MZ", "name" => "Mizoram",]);
        State::create(["country_code" => "IN", "code" => "NL", "name" => "Nagaland",]);
        State::create(["country_code" => "IN", "code" => "OR", "name" => "Odisha",]);
        State::create(["country_code" => "IN", "code" => "PB", "name" => "Punjab",]);
        State::create(["country_code" => "IN", "code" => "RJ", "name" => "Rajasthan",]);
        State::create(["country_code" => "IN", "code" => "SK", "name" => "Sikkim",]);
        State::create(["country_code" => "IN", "code" => "TN", "name" => "Tamil Nadu",]);
        State::create(["country_code" => "IN", "code" => "TG", "name" => "Telangana",]);
        State::create(["country_code" => "IN", "code" => "TR", "name" => "Tripura",]);
        State::create(["country_code" => "IN", "code" => "UT", "name" => "Uttarakhand",]);
        State::create(["country_code" => "IN", "code" => "UP", "name" => "Uttar Pradesh",]);
        State::create(["country_code" => "IN", "code" => "WB", "name" => "West Bengal",]);
        State::create(["country_code" => "IN", "code" => "AN", "name" => "Andaman and Nicobar Islands",]);
        State::create(["country_code" => "IN", "code" => "CH", "name" => "Chandigarh",]);
        State::create(["country_code" => "IN", "code" => "DN", "name" => "Dadra and Nagar Haveli",]);
        State::create(["country_code" => "IN", "code" => "DD", "name" => "Daman and Diu",]);
        State::create(["country_code" => "IN", "code" => "DL", "name" => "Delhi",]);
        State::create(["country_code" => "IN", "code" => "JK", "name" => "Jammu and Kashmir",]);
        State::create(["country_code" => "IN", "code" => "LA", "name" => "Ladakh",]);
        State::create(["country_code" => "IN", "code" => "LD", "name" => "Lakshadweep",]);
        State::create(["country_code" => "IN", "code" => "PY", "name" => "Puducherry",]);

        // Indonesia
        State::create(["country_code" => "ID", "code" => "AC", "name" => "Aceh",]);
        State::create(["country_code" => "ID", "code" => "BA", "name" => "Bali",]);
        State::create(["country_code" => "ID", "code" => "BB", "name" => "Bangka Belitung Islands",]);
        State::create(["country_code" => "ID", "code" => "BT", "name" => "Banten",]);
        State::create(["country_code" => "ID", "code" => "BE", "name" => "Bengkulu",]);
        State::create(["country_code" => "ID", "code" => "GO", "name" => "Gorontalo",]);
        State::create(["country_code" => "ID", "code" => "JA", "name" => "Jambi",]);
        State::create(["country_code" => "ID", "code" => "JB", "name" => "West Java",]);
        State::create(["country_code" => "ID", "code" => "JT", "name" => "Central Java",]);
        State::create(["country_code" => "ID", "code" => "JI", "name" => "East Java",]);
        State::create(["country_code" => "ID", "code" => "KB", "name" => "West Kalimantan",]);
        State::create(["country_code" => "ID", "code" => "KS", "name" => "South Kalimantan",]);
        State::create(["country_code" => "ID", "code" => "KT", "name" => "Central Kalimantan",]);
        State::create(["country_code" => "ID", "code" => "KI", "name" => "East Kalimantan",]);
        State::create(["country_code" => "ID", "code" => "KU", "name" => "North Kalimantan",]);
        State::create(["country_code" => "ID", "code" => "KR", "name" => "Riau Islands",]);
        State::create(["country_code" => "ID", "code" => "LA", "name" => "Lampung",]);
        State::create(["country_code" => "ID", "code" => "MA", "name" => "Maluku",]);
        State::create(["country_code" => "ID", "code" => "MU", "name" => "North Maluku",]);
        State::create(["country_code" => "ID", "code" => "NB", "name" => "West Nusa Tenggara",]);
        State::create(["country_code" => "ID", "code" => "NT", "name" => "East Nusa Tenggara",]);
        State::create(["country_code" => "ID", "code" => "PA", "name" => "Papua",]);
        State::create(["country_code" => "ID", "code" => "PB", "name" => "West Papua",]);
        State::create(["country_code" => "ID", "code" => "RI", "name" => "Riau",]);
        State::create(["country_code" => "ID", "code" => "SR", "name" => "West Sulawesi",]);
        State::create(["country_code" => "ID", "code" => "SN", "name" => "South Sulawesi",]);
        State::create(["country_code" => "ID", "code" => "ST", "name" => "Central Sulawesi",]);
        State::create(["country_code" => "ID", "code" => "SG", "name" => "Southeast Sulawesi",]);
        State::create(["country_code" => "ID", "code" => "SA", "name" => "North Sulawesi",]);
        State::create(["country_code" => "ID", "code" => "SB", "name" => "West Sumatra",]);
        State::create(["country_code" => "ID", "code" => "SS", "name" => "South Sumatra",]);
        State::create(["country_code" => "ID", "code" => "SU", "name" => "North Sumatra",]);
        State::create(["country_code" => "ID", "code" => "JK", "name" => "Jakarta",]);
        State::create(["country_code" => "ID", "code" => "YO", "name" => "Yogyakarta",]);

        // Iran, Islamic Republic of
        State::create(["country_code" => "IR", "code" => "32", "name" => "Alborz",]);
        State::create(["country_code" => "IR", "code" => "03", "name" => "Ardabīl",]);
        State::create(["country_code" => "IR", "code" => "02", "name" => "Āz̄ārbāyjān-e Ghārbī",]);
        State::create(["country_code" => "IR", "code" => "01", "name" => "Āz̄ārbāyjān-e Shārqī",]);
        State::create(["country_code" => "IR", "code" => "06", "name" => "Būshehr",]);
        State::create(["country_code" => "IR", "code" => "08", "name" => "Chahār Maḩāl va Bakhtīārī",]);
        State::create(["country_code" => "IR", "code" => "04", "name" => "Eşfahān",]);
        State::create(["country_code" => "IR", "code" => "14", "name" => "Fārs",]);
        State::create(["country_code" => "IR", "code" => "19", "name" => "Gīlān",]);
        State::create(["country_code" => "IR", "code" => "27", "name" => "Golestān",]);
        State::create(["country_code" => "IR", "code" => "24", "name" => "Hamadān",]);
        State::create(["country_code" => "IR", "code" => "23", "name" => "Hormozgān",]);
        State::create(["country_code" => "IR", "code" => "05", "name" => "Īlām",]);
        State::create(["country_code" => "IR", "code" => "15", "name" => "Kermān",]);
        State::create(["country_code" => "IR", "code" => "17", "name" => "Kermānshāh",]);
        State::create(["country_code" => "IR", "code" => "29", "name" => "Khorāsān-e Jonūbī",]);
        State::create(["country_code" => "IR", "code" => "30", "name" => "Khorāsān-e Raẕavī",]);
        State::create(["country_code" => "IR", "code" => "31", "name" => "Khorāsān-e Shomālī",]);
        State::create(["country_code" => "IR", "code" => "10", "name" => "Khūzestān",]);
        State::create(["country_code" => "IR", "code" => "18", "name" => "Kohgīlūyeh va Bowyer Aḩmad",]);
        State::create(["country_code" => "IR", "code" => "16", "name" => "Kordestān",]);
        State::create(["country_code" => "IR", "code" => "20", "name" => "Lorestān",]);
        State::create(["country_code" => "IR", "code" => "22", "name" => "Markazī",]);
        State::create(["country_code" => "IR", "code" => "21", "name" => "Māzandarān",]);
        State::create(["country_code" => "IR", "code" => "28", "name" => "Qazvīn",]);
        State::create(["country_code" => "IR", "code" => "26", "name" => "Qom",]);
        State::create(["country_code" => "IR", "code" => "12", "name" => "Semnān",]);
        State::create(["country_code" => "IR", "code" => "13", "name" => "Sīstān va Balūchestān",]);
        State::create(["country_code" => "IR", "code" => "07", "name" => "Tehrān",]);
        State::create(["country_code" => "IR", "code" => "25", "name" => "Yazd",]);
        State::create(["country_code" => "IR", "code" => "11", "name" => "Zanjān",]);

        // Iraq
        State::create(["country_code" => "IQ", "code" => "AN", "name" => "Al Anbār",]);
        State::create(["country_code" => "IQ", "code" => "BA", "name" => "Al Başrah",]);
        State::create(["country_code" => "IQ", "code" => "MU", "name" => "Al Muthanná",]);
        State::create(["country_code" => "IQ", "code" => "QA", "name" => "Al Qādisīyah",]);
        State::create(["country_code" => "IQ", "code" => "NA", "name" => "An Najaf",]);
        State::create(["country_code" => "IQ", "code" => "AR", "name" => "Arbīl",]);
        State::create(["country_code" => "IQ", "code" => "SU", "name" => "As Sulaymānīyah",]);
        State::create(["country_code" => "IQ", "code" => "BB", "name" => "Bābil",]);
        State::create(["country_code" => "IQ", "code" => "BG", "name" => "Baghdād",]);
        State::create(["country_code" => "IQ", "code" => "DA", "name" => "Dahūk",]);
        State::create(["country_code" => "IQ", "code" => "DQ", "name" => "Dhī Qār",]);
        State::create(["country_code" => "IQ", "code" => "DI", "name" => "Diyālá",]);
        State::create(["country_code" => "IQ", "code" => "KA", "name" => "Karbalā’",]);
        State::create(["country_code" => "IQ", "code" => "KI", "name" => "Kirkūk",]);
        State::create(["country_code" => "IQ", "code" => "MA", "name" => "Maysān",]);
        State::create(["country_code" => "IQ", "code" => "NI", "name" => "Nīnawá",]);
        State::create(["country_code" => "IQ", "code" => "SD", "name" => "Şalāḩ ad Dīn",]);
        State::create(["country_code" => "IQ", "code" => "WA", "name" => "Wāsiţ",]);
        State::create(["country_code" => "IQ", "code" => "HA", "name" => "Halabja",]);

        // Ireland
        State::create(["country_code" => "IE", "code" =>"CW", "name" => "Carlow",]);
        State::create(["country_code" => "IE", "code" =>"CN", "name" => "Cavan",]);
        State::create(["country_code" => "IE", "code" =>"CE", "name" => "Clare",]);
        State::create(["country_code" => "IE", "code" =>"CO", "name" => "Cork",]);
        State::create(["country_code" => "IE", "code" =>"DL", "name" => "Donegal",]);
        State::create(["country_code" => "IE", "code" =>"D", "name" => "Dublin",]);
        State::create(["country_code" => "IE", "code" =>"G", "name" => "Galway",]);
        State::create(["country_code" => "IE", "code" =>"KY", "name" => "Kerry",]);
        State::create(["country_code" => "IE", "code" =>"KE", "name" => "Kildare",]);
        State::create(["country_code" => "IE", "code" =>"KK", "name" => "Kilkenny",]);
        State::create(["country_code" => "IE", "code" =>"LS", "name" => "Laois",]);
        State::create(["country_code" => "IE", "code" =>"LM", "name" => "Leitrim",]);
        State::create(["country_code" => "IE", "code" =>"LK", "name" => "Limerick",]);
        State::create(["country_code" => "IE", "code" =>"LD", "name" => "Longford",]);
        State::create(["country_code" => "IE", "code" =>"LH", "name" => "Louth",]);
        State::create(["country_code" => "IE", "code" =>"MO", "name" => "Mayo",]);
        State::create(["country_code" => "IE", "code" =>"MH", "name" => "Meath",]);
        State::create(["country_code" => "IE", "code" =>"MN", "name" => "Monaghan",]);
        State::create(["country_code" => "IE", "code" =>"OY", "name" => "Offaly",]);
        State::create(["country_code" => "IE", "code" =>"RN", "name" => "Roscommon",]);
        State::create(["country_code" => "IE", "code" =>"SO", "name" => "Sligo",]);
        State::create(["country_code" => "IE", "code" =>"TA", "name" => "Tipperary",]);
        State::create(["country_code" => "IE", "code" =>"WD", "name" => "Waterford",]);
        State::create(["country_code" => "IE", "code" =>"WH", "name" => "Westmeath",]);
        State::create(["country_code" => "IE", "code" =>"WX", "name" => "Wexford",]);
        State::create(["country_code" => "IE", "code" =>"WW", "name" => "Wicklow",]);

        // Isle of Man (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "IM", "code" => "IM", "name" => "Isle of Man",]);

        // Israel
        State::create(["country_code" => "IL", "code" =>"D", "name" => "HaDarom",]);
        State::create(["country_code" => "IL", "code" =>"M", "name" => "HaMerkaz",]);
        State::create(["country_code" => "IL", "code" =>"Z", "name" => "HaTsafon",]);
        State::create(["country_code" => "IL", "code" =>"HA", "name" => "H̱efa",]);
        State::create(["country_code" => "IL", "code" =>"TA", "name" => "Tel Aviv",]);
        State::create(["country_code" => "IL", "code" =>"JM", "name" => "Yerushalayim",]);

        // Italy
        State::create(["country_code" => "IT", "code" =>"AG", "name" => "Agrigento",]);
        State::create(["country_code" => "IT", "code" =>"AL", "name" => "Alessandria",]);
        State::create(["country_code" => "IT", "code" =>"AN", "name" => "Ancona",]);
        State::create(["country_code" => "IT", "code" =>"AR", "name" => "Arezzo",]);
        State::create(["country_code" => "IT", "code" =>"AP", "name" => "Ascoli Piceno",]);
        State::create(["country_code" => "IT", "code" =>"AT", "name" => "Asti",]);
        State::create(["country_code" => "IT", "code" =>"AV", "name" => "Avellino",]);
        State::create(["country_code" => "IT", "code" =>"BT", "name" => "Barletta-Andria-Trani",]);
        State::create(["country_code" => "IT", "code" =>"BL", "name" => "Belluno",]);
        State::create(["country_code" => "IT", "code" =>"BN", "name" => "Benevento",]);
        State::create(["country_code" => "IT", "code" =>"BG", "name" => "Bergamo",]);
        State::create(["country_code" => "IT", "code" =>"BI", "name" => "Biella",]);
        State::create(["country_code" => "IT", "code" =>"BZ", "name" => "Bolzano",]);
        State::create(["country_code" => "IT", "code" =>"BS", "name" => "Brescia",]);
        State::create(["country_code" => "IT", "code" =>"BR", "name" => "Brindisi",]);
        State::create(["country_code" => "IT", "code" =>"CL", "name" => "Caltanissetta",]);
        State::create(["country_code" => "IT", "code" =>"CB", "name" => "Campobasso",]);
        State::create(["country_code" => "IT", "code" =>"CE", "name" => "Caserta",]);
        State::create(["country_code" => "IT", "code" =>"CZ", "name" => "Catanzaro",]);
        State::create(["country_code" => "IT", "code" =>"CH", "name" => "Chieti",]);
        State::create(["country_code" => "IT", "code" =>"CO", "name" => "Como",]);
        State::create(["country_code" => "IT", "code" =>"CS", "name" => "Cosenza",]);
        State::create(["country_code" => "IT", "code" =>"CR", "name" => "Cremona",]);
        State::create(["country_code" => "IT", "code" =>"KR", "name" => "Crotone",]);
        State::create(["country_code" => "IT", "code" =>"CN", "name" => "Cuneo",]);
        State::create(["country_code" => "IT", "code" =>"EN", "name" => "Enna",]);
        State::create(["country_code" => "IT", "code" =>"FM", "name" => "Fermo",]);
        State::create(["country_code" => "IT", "code" =>"FE", "name" => "Ferrara",]);
        State::create(["country_code" => "IT", "code" =>"FG", "name" => "Foggia",]);
        State::create(["country_code" => "IT", "code" =>"FC", "name" => "Forlì-Cesena",]);
        State::create(["country_code" => "IT", "code" =>"FR", "name" => "Frosinone",]);
        State::create(["country_code" => "IT", "code" =>"GR", "name" => "Grosseto",]);
        State::create(["country_code" => "IT", "code" =>"IM", "name" => "Imperia",]);
        State::create(["country_code" => "IT", "code" =>"IS", "name" => "Isernia",]);
        State::create(["country_code" => "IT", "code" =>"SP", "name" => "La Spezia",]);
        State::create(["country_code" => "IT", "code" =>"AQ", "name" => "L'Aquila",]);
        State::create(["country_code" => "IT", "code" =>"LT", "name" => "Latina",]);
        State::create(["country_code" => "IT", "code" =>"LE", "name" => "Lecce",]);
        State::create(["country_code" => "IT", "code" =>"LC", "name" => "Lecco",]);
        State::create(["country_code" => "IT", "code" =>"LI", "name" => "Livorno",]);
        State::create(["country_code" => "IT", "code" =>"LO", "name" => "Lodi",]);
        State::create(["country_code" => "IT", "code" =>"LU", "name" => "Lucca",]);
        State::create(["country_code" => "IT", "code" =>"MC", "name" => "Macerata",]);
        State::create(["country_code" => "IT", "code" =>"MN", "name" => "Mantova",]);
        State::create(["country_code" => "IT", "code" =>"MS", "name" => "Massa-Carrara",]);
        State::create(["country_code" => "IT", "code" =>"MT", "name" => "Matera",]);
        State::create(["country_code" => "IT", "code" =>"MO", "name" => "Modena",]);
        State::create(["country_code" => "IT", "code" =>"MB", "name" => "Monza e Brianza",]);
        State::create(["country_code" => "IT", "code" =>"NO", "name" => "Novara",]);
        State::create(["country_code" => "IT", "code" =>"NU", "name" => "Nuoro",]);
        State::create(["country_code" => "IT", "code" =>"OR", "name" => "Oristano",]);
        State::create(["country_code" => "IT", "code" =>"PD", "name" => "Padova",]);
        State::create(["country_code" => "IT", "code" =>"PR", "name" => "Parma",]);
        State::create(["country_code" => "IT", "code" =>"PV", "name" => "Pavia",]);
        State::create(["country_code" => "IT", "code" =>"PG", "name" => "Perugia",]);
        State::create(["country_code" => "IT", "code" =>"PU", "name" => "Pesaro e Urbino",]);
        State::create(["country_code" => "IT", "code" =>"PE", "name" => "Pescara",]);
        State::create(["country_code" => "IT", "code" =>"PC", "name" => "Piacenza",]);
        State::create(["country_code" => "IT", "code" =>"PI", "name" => "Pisa",]);
        State::create(["country_code" => "IT", "code" =>"PT", "name" => "Pistoia",]);
        State::create(["country_code" => "IT", "code" =>"PZ", "name" => "Potenza",]);
        State::create(["country_code" => "IT", "code" =>"PO", "name" => "Prato",]);
        State::create(["country_code" => "IT", "code" =>"RG", "name" => "Ragusa",]);
        State::create(["country_code" => "IT", "code" =>"RA", "name" => "Ravenna",]);
        State::create(["country_code" => "IT", "code" =>"RE", "name" => "Reggio Emilia",]);
        State::create(["country_code" => "IT", "code" =>"RI", "name" => "Rieti",]);
        State::create(["country_code" => "IT", "code" =>"RN", "name" => "Rimini",]);
        State::create(["country_code" => "IT", "code" =>"RO", "name" => "Rovigo",]);
        State::create(["country_code" => "IT", "code" =>"SA", "name" => "Salerno",]);
        State::create(["country_code" => "IT", "code" =>"SS", "name" => "Sassari",]);
        State::create(["country_code" => "IT", "code" =>"SV", "name" => "Savona",]);
        State::create(["country_code" => "IT", "code" =>"SI", "name" => "Siena",]);
        State::create(["country_code" => "IT", "code" =>"SR", "name" => "Siracusa",]);
        State::create(["country_code" => "IT", "code" =>"SO", "name" => "Sondrio",]);
        State::create(["country_code" => "IT", "code" =>"SD", "name" => "Sud Sardegna",]);
        State::create(["country_code" => "IT", "code" =>"TA", "name" => "Taranto",]);
        State::create(["country_code" => "IT", "code" =>"TE", "name" => "Teramo",]);
        State::create(["country_code" => "IT", "code" =>"TR", "name" => "Terni",]);
        State::create(["country_code" => "IT", "code" =>"TP", "name" => "Trapani",]);
        State::create(["country_code" => "IT", "code" =>"TN", "name" => "Trento",]);
        State::create(["country_code" => "IT", "code" =>"TV", "name" => "Treviso",]);
        State::create(["country_code" => "IT", "code" =>"VA", "name" => "Varese",]);
        State::create(["country_code" => "IT", "code" =>"VB", "name" => "Verbano-Cusio-Ossola",]);
        State::create(["country_code" => "IT", "code" =>"VC", "name" => "Vercelli",]);
        State::create(["country_code" => "IT", "code" =>"VR", "name" => "Verona",]);
        State::create(["country_code" => "IT", "code" =>"VV", "name" => "Vibo Valentia",]);
        State::create(["country_code" => "IT", "code" =>"VI", "name" => "Vicenza",]);
        State::create(["country_code" => "IT", "code" =>"VT", "name" => "Viterbo",]);

        // Jamaica
        State::create(["country_code" => "JM", "code" =>"13", "name" => "Clarendon",]);
        State::create(["country_code" => "JM", "code" =>"09", "name" => "Hanover",]);
        State::create(["country_code" => "JM", "code" =>"01", "name" => "Kingston",]);
        State::create(["country_code" => "JM", "code" =>"12", "name" => "Manchester",]);
        State::create(["country_code" => "JM", "code" =>"04", "name" => "Portland",]);
        State::create(["country_code" => "JM", "code" =>"02", "name" => "Saint Andrew",]);
        State::create(["country_code" => "JM", "code" =>"06", "name" => "Saint Ann",]);
        State::create(["country_code" => "JM", "code" =>"14", "name" => "Saint Catherine",]);
        State::create(["country_code" => "JM", "code" =>"11", "name" => "Saint Elizabeth",]);
        State::create(["country_code" => "JM", "code" =>"08", "name" => "Saint James",]);
        State::create(["country_code" => "JM", "code" =>"05", "name" => "Saint Mary",]);
        State::create(["country_code" => "JM", "code" =>"03", "name" => "Saint Thomas",]);
        State::create(["country_code" => "JM", "code" =>"07", "name" => "Trelawny",]);
        State::create(["country_code" => "JM", "code" =>"10", "name" => "Westmoreland",]);

        // Japan
        State::create(["country_code" => "JP", "code" => "23", "name" => "Aiti",]);
        State::create(["country_code" => "JP", "code" => "05", "name" => "Akita",]);
        State::create(["country_code" => "JP", "code" => "02", "name" => "Aomori",]);
        State::create(["country_code" => "JP", "code" => "38", "name" => "Ehime",]);
        State::create(["country_code" => "JP", "code" => "21", "name" => "Gihu",]);
        State::create(["country_code" => "JP", "code" => "10", "name" => "Gunma",]);
        State::create(["country_code" => "JP", "code" => "34", "name" => "Hirosima",]);
        State::create(["country_code" => "JP", "code" => "01", "name" => "Hokkaidô",]);
        State::create(["country_code" => "JP", "code" => "18", "name" => "Hukui",]);
        State::create(["country_code" => "JP", "code" => "40", "name" => "Hukuoka",]);
        State::create(["country_code" => "JP", "code" => "07", "name" => "Hukusima",]);
        State::create(["country_code" => "JP", "code" => "28", "name" => "Hyôgo",]);
        State::create(["country_code" => "JP", "code" => "08", "name" => "Ibaraki",]);
        State::create(["country_code" => "JP", "code" => "17", "name" => "Isikawa",]);
        State::create(["country_code" => "JP", "code" => "03", "name" => "Iwate",]);
        State::create(["country_code" => "JP", "code" => "37", "name" => "Kagawa",]);
        State::create(["country_code" => "JP", "code" => "46", "name" => "Kagosima",]);
        State::create(["country_code" => "JP", "code" => "14", "name" => "Kanagawa",]);
        State::create(["country_code" => "JP", "code" => "39", "name" => "Kôti",]);
        State::create(["country_code" => "JP", "code" => "43", "name" => "Kumamoto",]);
        State::create(["country_code" => "JP", "code" => "26", "name" => "Kyôto",]);
        State::create(["country_code" => "JP", "code" => "24", "name" => "Mie",]);
        State::create(["country_code" => "JP", "code" => "04", "name" => "Miyagi",]);
        State::create(["country_code" => "JP", "code" => "45", "name" => "Miyazaki",]);
        State::create(["country_code" => "JP", "code" => "20", "name" => "Nagano",]);
        State::create(["country_code" => "JP", "code" => "42", "name" => "Nagasaki",]);
        State::create(["country_code" => "JP", "code" => "29", "name" => "Nara",]);
        State::create(["country_code" => "JP", "code" => "15", "name" => "Niigata",]);
        State::create(["country_code" => "JP", "code" => "44", "name" => "Ôita",]);
        State::create(["country_code" => "JP", "code" => "33", "name" => "Okayama",]);
        State::create(["country_code" => "JP", "code" => "47", "name" => "Okinawa",]);
        State::create(["country_code" => "JP", "code" => "27", "name" => "Ôsaka",]);
        State::create(["country_code" => "JP", "code" => "41", "name" => "Saga",]);
        State::create(["country_code" => "JP", "code" => "11", "name" => "Saitama",]);
        State::create(["country_code" => "JP", "code" => "25", "name" => "Siga",]);
        State::create(["country_code" => "JP", "code" => "32", "name" => "Simane",]);
        State::create(["country_code" => "JP", "code" => "22", "name" => "Sizuoka",]);
        State::create(["country_code" => "JP", "code" => "12", "name" => "Tiba",]);
        State::create(["country_code" => "JP", "code" => "09", "name" => "Totigi",]);
        State::create(["country_code" => "JP", "code" => "36", "name" => "Tokusima",]);
        State::create(["country_code" => "JP", "code" => "13", "name" => "Tôkyô",]);
        State::create(["country_code" => "JP", "code" => "31", "name" => "Tottori",]);
        State::create(["country_code" => "JP", "code" => "16", "name" => "Toyama",]);
        State::create(["country_code" => "JP", "code" => "30", "name" => "Wakayama",]);
        State::create(["country_code" => "JP", "code" => "06", "name" => "Yamagata",]);
        State::create(["country_code" => "JP", "code" => "35", "name" => "Yamaguti",]);
        State::create(["country_code" => "JP", "code" => "19", "name" => "Yamanasi",]);

        // Jersey (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "JE", "code" => "JE", "name" => "Jersey",]);

        // Jordan
        State::create(["country_code" => "JO", "code" => "AJ", "name" => "‘Ajlūn",]);
        State::create(["country_code" => "JO", "code" => "AQ", "name" => "Al ‘Aqabah",]);
        State::create(["country_code" => "JO", "code" => "AM", "name" => "Al ‘A̅şimah",]);
        State::create(["country_code" => "JO", "code" => "BA", "name" => "Al Balqā’",]);
        State::create(["country_code" => "JO", "code" => "KA", "name" => "Al Karak",]);
        State::create(["country_code" => "JO", "code" => "MA", "name" => "Al Mafraq",]);
        State::create(["country_code" => "JO", "code" => "AT", "name" => "Aţ Ţafīlah",]);
        State::create(["country_code" => "JO", "code" => "AZ", "name" => "Az Zarqā’",]);
        State::create(["country_code" => "JO", "code" => "IR", "name" => "Irbid",]);
        State::create(["country_code" => "JO", "code" => "JA", "name" => "Jarash",]);
        State::create(["country_code" => "JO", "code" => "MN", "name" => "Ma‘ān",]);
        State::create(["country_code" => "JO", "code" => "MD", "name" => "Mādabā",]);

        // Kazakhstan
        State::create(["country_code" => "KZ", "code" => "ALA", "name" => "Almaty",]);
        State::create(["country_code" => "KZ", "code" => "ALM", "name" => "Almaty oblysy",]);
        State::create(["country_code" => "KZ", "code" => "AKM", "name" => "Aqmola oblysy",]);
        State::create(["country_code" => "KZ", "code" => "AKT", "name" => "Aqtöbe oblysy",]);
        State::create(["country_code" => "KZ", "code" => "AST", "name" => "Astana",]);
        State::create(["country_code" => "KZ", "code" => "ATY", "name" => "Atyraū oblysy",]);
        State::create(["country_code" => "KZ", "code" => "ZAP", "name" => "Batys Qazaqstan oblysy",]);
        State::create(["country_code" => "KZ", "code" => "BAY", "name" => "Bayqongyr",]);
        State::create(["country_code" => "KZ", "code" => "MAN", "name" => "Mangghystaū oblysy",]);
        State::create(["country_code" => "KZ", "code" => "PAV", "name" => "Pavlodar oblysy",]);
        State::create(["country_code" => "KZ", "code" => "KAR", "name" => "Qaraghandy oblysy",]);
        State::create(["country_code" => "KZ", "code" => "KUS", "name" => "Qostanay oblysy",]);
        State::create(["country_code" => "KZ", "code" => "KZY", "name" => "Qyzylorda oblysy",]);
        State::create(["country_code" => "KZ", "code" => "VOS", "name" => "Shyghys Qazaqstan oblysy",]);
        State::create(["country_code" => "KZ", "code" => "SHY", "name" => "Shymkent",]);
        State::create(["country_code" => "KZ", "code" => "SEV", "name" => "Soltüstik Qazaqstan oblysy",]);
        State::create(["country_code" => "KZ", "code" => "YUZ", "name" => "Türkistan oblysy",]);
        State::create(["country_code" => "KZ", "code" => "ZHA", "name" => "Zhambyl oblysy",]);

        // Kenya
        State::create(["country_code" => "KE", "code" => "01", "name" => "Baringo",]);
        State::create(["country_code" => "KE", "code" => "02", "name" => "Bomet",]);
        State::create(["country_code" => "KE", "code" => "03", "name" => "Bungoma",]);
        State::create(["country_code" => "KE", "code" => "04", "name" => "Busia",]);
        State::create(["country_code" => "KE", "code" => "05", "name" => "Elgeyo/Marakwet",]);
        State::create(["country_code" => "KE", "code" => "06", "name" => "Embu",]);
        State::create(["country_code" => "KE", "code" => "07", "name" => "Garissa",]);
        State::create(["country_code" => "KE", "code" => "08", "name" => "Homa Bay",]);
        State::create(["country_code" => "KE", "code" => "09", "name" => "Isiolo",]);
        State::create(["country_code" => "KE", "code" => "10", "name" => "Kajiado",]);
        State::create(["country_code" => "KE", "code" => "11", "name" => "Kakamega",]);
        State::create(["country_code" => "KE", "code" => "12", "name" => "Kericho",]);
        State::create(["country_code" => "KE", "code" => "13", "name" => "Kiambu",]);
        State::create(["country_code" => "KE", "code" => "14", "name" => "Kilifi",]);
        State::create(["country_code" => "KE", "code" => "15", "name" => "Kirinyaga",]);
        State::create(["country_code" => "KE", "code" => "16", "name" => "Kisii",]);
        State::create(["country_code" => "KE", "code" => "17", "name" => "Kisumu",]);
        State::create(["country_code" => "KE", "code" => "18", "name" => "Kitui",]);
        State::create(["country_code" => "KE", "code" => "19", "name" => "Kwale",]);
        State::create(["country_code" => "KE", "code" => "20", "name" => "Laikipia",]);
        State::create(["country_code" => "KE", "code" => "21", "name" => "Lamu",]);
        State::create(["country_code" => "KE", "code" => "22", "name" => "Machakos",]);
        State::create(["country_code" => "KE", "code" => "23", "name" => "Makueni",]);
        State::create(["country_code" => "KE", "code" => "24", "name" => "Mandera",]);
        State::create(["country_code" => "KE", "code" => "25", "name" => "Marsabit",]);
        State::create(["country_code" => "KE", "code" => "26", "name" => "Meru",]);
        State::create(["country_code" => "KE", "code" => "27", "name" => "Migori",]);
        State::create(["country_code" => "KE", "code" => "28", "name" => "Mombasa",]);
        State::create(["country_code" => "KE", "code" => "29", "name" => "Murang'a",]);
        State::create(["country_code" => "KE", "code" => "30", "name" => "Nairobi City",]);
        State::create(["country_code" => "KE", "code" => "31", "name" => "Nakuru",]);
        State::create(["country_code" => "KE", "code" => "32", "name" => "Nandi",]);
        State::create(["country_code" => "KE", "code" => "33", "name" => "Narok",]);
        State::create(["country_code" => "KE", "code" => "34", "name" => "Nyamira",]);
        State::create(["country_code" => "KE", "code" => "35", "name" => "Nyandarua",]);
        State::create(["country_code" => "KE", "code" => "36", "name" => "Nyeri",]);
        State::create(["country_code" => "KE", "code" => "37", "name" => "Samburu",]);
        State::create(["country_code" => "KE", "code" => "38", "name" => "Siaya",]);
        State::create(["country_code" => "KE", "code" => "39", "name" => "Taita/Taveta",]);
        State::create(["country_code" => "KE", "code" => "40", "name" => "Tana River",]);
        State::create(["country_code" => "KE", "code" => "41", "name" => "Tharaka-Nithi",]);
        State::create(["country_code" => "KE", "code" => "42", "name" => "Trans Nzoia",]);
        State::create(["country_code" => "KE", "code" => "43", "name" => "Turkana",]);
        State::create(["country_code" => "KE", "code" => "44", "name" => "Uasin Gishu",]);
        State::create(["country_code" => "KE", "code" => "45", "name" => "Vihiga",]);
        State::create(["country_code" => "KE", "code" => "46", "name" => "Wajir",]);
        State::create(["country_code" => "KE", "code" => "47", "name" => "West Pokot",]);

        // Kiribati
        State::create(["country_code" => "KI", "code" => "G", "name" => "Gilbert Islands",]);
        State::create(["country_code" => "KI", "code" => "L", "name" => "Line Islands",]);
        State::create(["country_code" => "KI", "code" => "P", "name" => "Phoenix Islands",]);

        // Korea, Democratic People's Republic of
        State::create(["country_code" => "KP", "code" => "01", "name" => "Pyongyang",]);
        State::create(["country_code" => "KP", "code" => "13", "name" => "Rason",]);
        State::create(["country_code" => "KP", "code" => "14", "name" => "Nampo",]);
        State::create(["country_code" => "KP", "code" => "02", "name" => "South Pyongan",]);
        State::create(["country_code" => "KP", "code" => "03", "name" => "North Pyongan",]);
        State::create(["country_code" => "KP", "code" => "04", "name" => "Chagang",]);
        State::create(["country_code" => "KP", "code" => "05", "name" => "South Hwanghae",]);
        State::create(["country_code" => "KP", "code" => "06", "name" => "North Hwanghae",]);
        State::create(["country_code" => "KP", "code" => "07", "name" => "Kangwon",]);
        State::create(["country_code" => "KP", "code" => "08", "name" => "South Hamgyong",]);
        State::create(["country_code" => "KP", "code" => "09", "name" => "North Hamgyong",]);
        State::create(["country_code" => "KP", "code" => "10", "name" => "Ryanggang",]);

        // Korea, Republic of
        State::create(["country_code" => "KR", "code" => "11", "name" => "Seoul",]);
        State::create(["country_code" => "KR", "code" => "26", "name" => "Busan",]);
        State::create(["country_code" => "KR", "code" => "27", "name" => "Daegu",]);
        State::create(["country_code" => "KR", "code" => "30", "name" => "Daejeon",]);
        State::create(["country_code" => "KR", "code" => "29", "name" => "Gwangju",]);
        State::create(["country_code" => "KR", "code" => "28", "name" => "Incheon",]);
        State::create(["country_code" => "KR", "code" => "31", "name" => "Ulsan",]);
        State::create(["country_code" => "KR", "code" => "43", "name" => "North Chungcheong",]);
        State::create(["country_code" => "KR", "code" => "44", "name" => "South Chungcheong",]);
        State::create(["country_code" => "KR", "code" => "42", "name" => "Gangwon",]);
        State::create(["country_code" => "KR", "code" => "41", "name" => "Gyeonggi",]);
        State::create(["country_code" => "KR", "code" => "47", "name" => "North Gyeongsang",]);
        State::create(["country_code" => "KR", "code" => "48", "name" => "South Gyeongsang",]);
        State::create(["country_code" => "KR", "code" => "45", "name" => "North Jeolla",]);
        State::create(["country_code" => "KR", "code" => "46", "name" => "South Jeolla",]);
        State::create(["country_code" => "KR", "code" => "49", "name" => "Jeju",]);
        State::create(["country_code" => "KR", "code" => "50", "name" => "Sejong",]);

        // Kuwait
        State::create(["country_code" => "KW", "code" => "AH", "name" => "Al Aḩmadī",]);
        State::create(["country_code" => "KW", "code" => "FA", "name" => "Al Farwānīyah",]);
        State::create(["country_code" => "KW", "code" => "JA", "name" => "Al Jahrā’",]);
        State::create(["country_code" => "KW", "code" => "KU", "name" => "Al ‘Āşimah",]);
        State::create(["country_code" => "KW", "code" => "HA", "name" => "Ḩawallī",]);
        State::create(["country_code" => "KW", "code" => "MU", "name" => "Mubārak al Kabīr",]);

        // Kyrgyzstan
        State::create(["country_code" => "KG", "code" => "GB", "name" => "Bishkek",]);
        State::create(["country_code" => "KG", "code" => "GO", "name" => "Osh",]);
        State::create(["country_code" => "KG", "code" => "B", "name" => "Batken",]);
        State::create(["country_code" => "KG", "code" => "C", "name" => "Chüy",]);
        State::create(["country_code" => "KG", "code" => "J", "name" => "Jalal-Abad",]);
        State::create(["country_code" => "KG", "code" => "N", "name" => "Naryn",]);
        State::create(["country_code" => "KG", "code" => "O", "name" => "Osh",]);
        State::create(["country_code" => "KG", "code" => "T", "name" => "Talas",]);
        State::create(["country_code" => "KG", "code" => "Y", "name" => "Ysyk-Köl",]);

        // Lao People's Democratic Republic
        State::create(["country_code" => "LA", "code" => "VT", "name" => "Viangchan",]);
        State::create(["country_code" => "LA", "code" => "AT", "name" => "Attapu",]);
        State::create(["country_code" => "LA", "code" => "BK", "name" => "Bokèo",]);
        State::create(["country_code" => "LA", "code" => "BL", "name" => "Bolikhamxai",]);
        State::create(["country_code" => "LA", "code" => "CH", "name" => "Champasak",]);
        State::create(["country_code" => "LA", "code" => "HO", "name" => "Houaphan",]);
        State::create(["country_code" => "LA", "code" => "KH", "name" => "Khammouan",]);
        State::create(["country_code" => "LA", "code" => "LM", "name" => "Louang Namtha",]);
        State::create(["country_code" => "LA", "code" => "LP", "name" => "Louangphabang",]);
        State::create(["country_code" => "LA", "code" => "OU", "name" => "Oudômxai",]);
        State::create(["country_code" => "LA", "code" => "PH", "name" => "Phôngsali",]);
        State::create(["country_code" => "LA", "code" => "SL", "name" => "Salavan",]);
        State::create(["country_code" => "LA", "code" => "SV", "name" => "Savannakhét",]);
        State::create(["country_code" => "LA", "code" => "VI", "name" => "Viangchan",]);
        State::create(["country_code" => "LA", "code" => "XA", "name" => "Xaignabouli",]);
        State::create(["country_code" => "LA", "code" => "XE", "name" => "Xékong",]);
        State::create(["country_code" => "LA", "code" => "XI", "name" => "Xiangkhouang",]);
        State::create(["country_code" => "LA", "code" => "XS", "name" => "Xaisômboun",]);

        // Latvia
        State::create(["country_code" => "LV", "code" =>"001", "name" => "Aglonas novads",]);
        State::create(["country_code" => "LV", "code" =>"002", "name" => "Aizkraukles novads",]);
        State::create(["country_code" => "LV", "code" =>"003", "name" => "Aizputes novads",]);
        State::create(["country_code" => "LV", "code" =>"004", "name" => "Aknīstes novads",]);
        State::create(["country_code" => "LV", "code" =>"005", "name" => "Alojas novads",]);
        State::create(["country_code" => "LV", "code" =>"006", "name" => "Alsungas novads",]);
        State::create(["country_code" => "LV", "code" =>"007", "name" => "Alūksnes novads",]);
        State::create(["country_code" => "LV", "code" =>"008", "name" => "Amatas novads",]);
        State::create(["country_code" => "LV", "code" =>"009", "name" => "Apes novads",]);
        State::create(["country_code" => "LV", "code" =>"010", "name" => "Auces novads",]);
        State::create(["country_code" => "LV", "code" =>"011", "name" => "Ādažu novads",]);
        State::create(["country_code" => "LV", "code" =>"012", "name" => "Babītes novads",]);
        State::create(["country_code" => "LV", "code" =>"013", "name" => "Baldones novads",]);
        State::create(["country_code" => "LV", "code" =>"014", "name" => "Baltinavas novads",]);
        State::create(["country_code" => "LV", "code" =>"015", "name" => "Balvu novads",]);
        State::create(["country_code" => "LV", "code" =>"016", "name" => "Bauskas novads",]);
        State::create(["country_code" => "LV", "code" =>"017", "name" => "Beverīnas novads",]);
        State::create(["country_code" => "LV", "code" =>"018", "name" => "Brocēnu novads",]);
        State::create(["country_code" => "LV", "code" =>"019", "name" => "Burtnieku novads",]);
        State::create(["country_code" => "LV", "code" =>"020", "name" => "Carnikavas novads",]);
        State::create(["country_code" => "LV", "code" =>"021", "name" => "Cesvaines novads",]);
        State::create(["country_code" => "LV", "code" =>"022", "name" => "Cēsu novads",]);
        State::create(["country_code" => "LV", "code" =>"023", "name" => "Ciblas novads",]);
        State::create(["country_code" => "LV", "code" =>"024", "name" => "Dagdas novads",]);
        State::create(["country_code" => "LV", "code" =>"025", "name" => "Daugavpils novads",]);
        State::create(["country_code" => "LV", "code" =>"026", "name" => "Dobeles novads",]);
        State::create(["country_code" => "LV", "code" =>"027", "name" => "Dundagas novads",]);
        State::create(["country_code" => "LV", "code" =>"028", "name" => "Durbes novads",]);
        State::create(["country_code" => "LV", "code" =>"029", "name" => "Engures novads",]);
        State::create(["country_code" => "LV", "code" =>"030", "name" => "Ērgļu novads",]);
        State::create(["country_code" => "LV", "code" =>"031", "name" => "Garkalnes novads",]);
        State::create(["country_code" => "LV", "code" =>"032", "name" => "Grobiņas novads",]);
        State::create(["country_code" => "LV", "code" =>"033", "name" => "Gulbenes novads",]);
        State::create(["country_code" => "LV", "code" =>"034", "name" => "Iecavas novads",]);
        State::create(["country_code" => "LV", "code" =>"035", "name" => "Ikšķiles novads",]);
        State::create(["country_code" => "LV", "code" =>"036", "name" => "Ilūkstes novads",]);
        State::create(["country_code" => "LV", "code" =>"037", "name" => "Inčukalna novads",]);
        State::create(["country_code" => "LV", "code" =>"038", "name" => "Jaunjelgavas novads",]);
        State::create(["country_code" => "LV", "code" =>"039", "name" => "Jaunpiebalgas novads",]);
        State::create(["country_code" => "LV", "code" =>"040", "name" => "Jaunpils novads",]);
        State::create(["country_code" => "LV", "code" =>"041", "name" => "Jelgavas novads",]);
        State::create(["country_code" => "LV", "code" =>"042", "name" => "Jēkabpils novads",]);
        State::create(["country_code" => "LV", "code" =>"043", "name" => "Kandavas novads",]);
        State::create(["country_code" => "LV", "code" =>"044", "name" => "Kārsavas novads",]);
        State::create(["country_code" => "LV", "code" =>"045", "name" => "Kocēnu novads",]);
        State::create(["country_code" => "LV", "code" =>"046", "name" => "Kokneses novads",]);
        State::create(["country_code" => "LV", "code" =>"047", "name" => "Krāslavas novads",]);
        State::create(["country_code" => "LV", "code" =>"048", "name" => "Krimuldas novads",]);
        State::create(["country_code" => "LV", "code" =>"049", "name" => "Krustpils novads",]);
        State::create(["country_code" => "LV", "code" =>"050", "name" => "Kuldīgas novads",]);
        State::create(["country_code" => "LV", "code" =>"051", "name" => "Ķeguma novads",]);
        State::create(["country_code" => "LV", "code" =>"052", "name" => "Ķekavas novads",]);
        State::create(["country_code" => "LV", "code" =>"053", "name" => "Lielvārdes novads",]);
        State::create(["country_code" => "LV", "code" =>"054", "name" => "Limbažu novads",]);
        State::create(["country_code" => "LV", "code" =>"055", "name" => "Līgatnes novads",]);
        State::create(["country_code" => "LV", "code" =>"056", "name" => "Līvānu novads",]);
        State::create(["country_code" => "LV", "code" =>"057", "name" => "Lubānas novads",]);
        State::create(["country_code" => "LV", "code" =>"058", "name" => "Ludzas novads",]);
        State::create(["country_code" => "LV", "code" =>"059", "name" => "Madonas novads",]);
        State::create(["country_code" => "LV", "code" =>"060", "name" => "Mazsalacas novads",]);
        State::create(["country_code" => "LV", "code" =>"061", "name" => "Mālpils novads",]);
        State::create(["country_code" => "LV", "code" =>"062", "name" => "Mārupes novads",]);
        State::create(["country_code" => "LV", "code" =>"063", "name" => "Mērsraga novads",]);
        State::create(["country_code" => "LV", "code" =>"064", "name" => "Naukšēnu novads",]);
        State::create(["country_code" => "LV", "code" =>"065", "name" => "Neretas novads",]);
        State::create(["country_code" => "LV", "code" =>"066", "name" => "Nīcas novads",]);
        State::create(["country_code" => "LV", "code" =>"067", "name" => "Ogres novads",]);
        State::create(["country_code" => "LV", "code" =>"068", "name" => "Olaines novads",]);
        State::create(["country_code" => "LV", "code" =>"069", "name" => "Ozolnieku novads",]);
        State::create(["country_code" => "LV", "code" =>"070", "name" => "Pārgaujas novads",]);
        State::create(["country_code" => "LV", "code" =>"071", "name" => "Pāvilostas novads",]);
        State::create(["country_code" => "LV", "code" =>"072", "name" => "Pļaviņu novads",]);
        State::create(["country_code" => "LV", "code" =>"073", "name" => "Preiļu novads",]);
        State::create(["country_code" => "LV", "code" =>"074", "name" => "Priekules novads",]);
        State::create(["country_code" => "LV", "code" =>"075", "name" => "Priekuļu novads",]);
        State::create(["country_code" => "LV", "code" =>"076", "name" => "Raunas novads",]);
        State::create(["country_code" => "LV", "code" =>"077", "name" => "Rēzeknes novads",]);
        State::create(["country_code" => "LV", "code" =>"078", "name" => "Riebiņu novads",]);
        State::create(["country_code" => "LV", "code" =>"079", "name" => "Rojas novads",]);
        State::create(["country_code" => "LV", "code" =>"080", "name" => "Ropažu novads",]);
        State::create(["country_code" => "LV", "code" =>"081", "name" => "Rucavas novads",]);
        State::create(["country_code" => "LV", "code" =>"082", "name" => "Rugāju novads",]);
        State::create(["country_code" => "LV", "code" =>"083", "name" => "Rundāles novads",]);
        State::create(["country_code" => "LV", "code" =>"084", "name" => "Rūjienas novads",]);
        State::create(["country_code" => "LV", "code" =>"085", "name" => "Salas novads",]);
        State::create(["country_code" => "LV", "code" =>"086", "name" => "Salacgrīvas novads",]);
        State::create(["country_code" => "LV", "code" =>"087", "name" => "Salaspils novads",]);
        State::create(["country_code" => "LV", "code" =>"088", "name" => "Saldus novads",]);
        State::create(["country_code" => "LV", "code" =>"089", "name" => "Saulkrastu novads",]);
        State::create(["country_code" => "LV", "code" =>"090", "name" => "Sējas novads",]);
        State::create(["country_code" => "LV", "code" =>"091", "name" => "Siguldas novads",]);
        State::create(["country_code" => "LV", "code" =>"092", "name" => "Skrīveru novads",]);
        State::create(["country_code" => "LV", "code" =>"093", "name" => "Skrundas novads",]);
        State::create(["country_code" => "LV", "code" =>"094", "name" => "Smiltenes novads",]);
        State::create(["country_code" => "LV", "code" =>"095", "name" => "Stopiņu novads",]);
        State::create(["country_code" => "LV", "code" =>"096", "name" => "Strenču novads",]);
        State::create(["country_code" => "LV", "code" =>"097", "name" => "Talsu novads",]);
        State::create(["country_code" => "LV", "code" =>"098", "name" => "Tērvetes novads",]);
        State::create(["country_code" => "LV", "code" =>"099", "name" => "Tukuma novads",]);
        State::create(["country_code" => "LV", "code" =>"100", "name" => "Vaiņodes novads",]);
        State::create(["country_code" => "LV", "code" =>"101", "name" => "Valkas novads",]);
        State::create(["country_code" => "LV", "code" =>"102", "name" => "Varakļānu novads",]);
        State::create(["country_code" => "LV", "code" =>"103", "name" => "Vārkavas novads",]);
        State::create(["country_code" => "LV", "code" =>"104", "name" => "Vecpiebalgas novads",]);
        State::create(["country_code" => "LV", "code" =>"105", "name" => "Vecumnieku novads",]);
        State::create(["country_code" => "LV", "code" =>"106", "name" => "Ventspils novads",]);
        State::create(["country_code" => "LV", "code" =>"107", "name" => "Viesītes novads",]);
        State::create(["country_code" => "LV", "code" =>"108", "name" => "Viļakas novads",]);
        State::create(["country_code" => "LV", "code" =>"109", "name" => "Viļānu novads",]);
        State::create(["country_code" => "LV", "code" =>"110", "name" => "Zilupes novads",]);

        // Lebanon
        State::create(["country_code" => "LB", "code" => "AK", "name" => "Aakkâr",]);
        State::create(["country_code" => "LB", "code" => "BH", "name" => "Baalbek-Hermel",]);
        State::create(["country_code" => "LB", "code" => "BI", "name" => "Béqaa",]);
        State::create(["country_code" => "LB", "code" => "BA", "name" => "Beyrouth",]);
        State::create(["country_code" => "LB", "code" => "AS", "name" => "Liban-Nord",]);
        State::create(["country_code" => "LB", "code" => "JA", "name" => "Liban-Sud",]);
        State::create(["country_code" => "LB", "code" => "JL", "name" => "Mont-Liban",]);
        State::create(["country_code" => "LB", "code" => "NA", "name" => "Nabatîyé",]);

        // Lesotho
        State::create(["country_code" => "LS", "code" => "D", "name" => "Berea",]);
        State::create(["country_code" => "LS", "code" => "B", "name" => "Butha-Buthe",]);
        State::create(["country_code" => "LS", "code" => "C", "name" => "Leribe",]);
        State::create(["country_code" => "LS", "code" => "E", "name" => "Mafeteng",]);
        State::create(["country_code" => "LS", "code" => "A", "name" => "Maseru",]);
        State::create(["country_code" => "LS", "code" => "F", "name" => "Mohale's Hoek",]);
        State::create(["country_code" => "LS", "code" => "J", "name" => "Mokhotlong",]);
        State::create(["country_code" => "LS", "code" => "H", "name" => "Qacha's Nek",]);
        State::create(["country_code" => "LS", "code" => "G", "name" => "Quthing",]);
        State::create(["country_code" => "LS", "code" => "K", "name" => "Thaba-Tseka",]);

        // Liberia
        State::create(["country_code" => "LR", "code" => "BM", "name" => "Bomi",]);
        State::create(["country_code" => "LR", "code" => "BG", "name" => "Bong",]);
        State::create(["country_code" => "LR", "code" => "GP", "name" => "Gbarpolu",]);
        State::create(["country_code" => "LR", "code" => "GB", "name" => "Grand Bassa",]);
        State::create(["country_code" => "LR", "code" => "CM", "name" => "Grand Cape Mount",]);
        State::create(["country_code" => "LR", "code" => "GG", "name" => "Grand Gedeh",]);
        State::create(["country_code" => "LR", "code" => "GK", "name" => "Grand Kru",]);
        State::create(["country_code" => "LR", "code" => "LO", "name" => "Lofa",]);
        State::create(["country_code" => "LR", "code" => "MG", "name" => "Margibi",]);
        State::create(["country_code" => "LR", "code" => "MY", "name" => "Maryland",]);
        State::create(["country_code" => "LR", "code" => "MO", "name" => "Montserrado",]);
        State::create(["country_code" => "LR", "code" => "NI", "name" => "Nimba",]);
        State::create(["country_code" => "LR", "code" => "RI", "name" => "River Cess",]);
        State::create(["country_code" => "LR", "code" => "RG", "name" => "River Gee",]);
        State::create(["country_code" => "LR", "code" => "SI", "name" => "Sinoe",]);

        // Libya
        State::create(["country_code" => "LY", "code" => "BU", "name" => "Al Buţnān",]);
        State::create(["country_code" => "LY", "code" => "JA", "name" => "Al Jabal al Akhḑar",]);
        State::create(["country_code" => "LY", "code" => "JG", "name" => "Al Jabal al Gharbī",]);
        State::create(["country_code" => "LY", "code" => "JI", "name" => "Al Jafārah",]);
        State::create(["country_code" => "LY", "code" => "JU", "name" => "Al Jufrah",]);
        State::create(["country_code" => "LY", "code" => "KF", "name" => "Al Kufrah",]);
        State::create(["country_code" => "LY", "code" => "MJ", "name" => "Al Marj",]);
        State::create(["country_code" => "LY", "code" => "MB", "name" => "Al Marqab",]);
        State::create(["country_code" => "LY", "code" => "WA", "name" => "Al Wāḩāt",]);
        State::create(["country_code" => "LY", "code" => "NQ", "name" => "An Nuqāţ al Khams",]);
        State::create(["country_code" => "LY", "code" => "ZA", "name" => "Az Zāwiyah",]);
        State::create(["country_code" => "LY", "code" => "BA", "name" => "Banghāzī",]);
        State::create(["country_code" => "LY", "code" => "DR", "name" => "Darnah",]);
        State::create(["country_code" => "LY", "code" => "GT", "name" => "Ghāt",]);
        State::create(["country_code" => "LY", "code" => "MI", "name" => "Mişrātah",]);
        State::create(["country_code" => "LY", "code" => "MQ", "name" => "Murzuq",]);
        State::create(["country_code" => "LY", "code" => "NL", "name" => "Nālūt",]);
        State::create(["country_code" => "LY", "code" => "SB", "name" => "Sabhā",]);
        State::create(["country_code" => "LY", "code" => "SR", "name" => "Surt",]);
        State::create(["country_code" => "LY", "code" => "TB", "name" => "Ţarābulus",]);
        State::create(["country_code" => "LY", "code" => "WD", "name" => "Wādī al Ḩayāt",]);
        State::create(["country_code" => "LY", "code" => "WS", "name" => "Wādī ash Shāţi’",]);

        // Liechtenstein
        State::create(["country_code" => "LI", "code" =>"01", "name" => "Balzers",]);
        State::create(["country_code" => "LI", "code" =>"02", "name" => "Eschen",]);
        State::create(["country_code" => "LI", "code" =>"03", "name" => "Gamprin",]);
        State::create(["country_code" => "LI", "code" =>"04", "name" => "Mauren",]);
        State::create(["country_code" => "LI", "code" =>"05", "name" => "Planken",]);
        State::create(["country_code" => "LI", "code" =>"06", "name" => "Ruggell",]);
        State::create(["country_code" => "LI", "code" =>"07", "name" => "Schaan",]);
        State::create(["country_code" => "LI", "code" =>"08", "name" => "Schellenberg",]);
        State::create(["country_code" => "LI", "code" =>"09", "name" => "Triesen",]);
        State::create(["country_code" => "LI", "code" =>"10", "name" => "Triesenberg",]);
        State::create(["country_code" => "LI", "code" =>"11", "name" => "Vaduz",]);

        // Lithuania
        State::create(["country_code" => "LT", "code" =>"AL", "name" => "Alytaus apskritis",]);
        State::create(["country_code" => "LT", "code" =>"KU", "name" => "Kauno apskritis",]);
        State::create(["country_code" => "LT", "code" =>"KL", "name" => "Klaipėdos apskritis",]);
        State::create(["country_code" => "LT", "code" =>"MR", "name" => "Marijampolės apskritis",]);
        State::create(["country_code" => "LT", "code" =>"PN", "name" => "Panevėžio apskritis",]);
        State::create(["country_code" => "LT", "code" =>"SA", "name" => "Šiaulių apskritis",]);
        State::create(["country_code" => "LT", "code" =>"TA", "name" => "Tauragės apskritis",]);
        State::create(["country_code" => "LT", "code" =>"TE", "name" => "Telšių apskritis",]);
        State::create(["country_code" => "LT", "code" =>"UT", "name" => "Utenos apskritis",]);
        State::create(["country_code" => "LT", "code" =>"VL", "name" => "Vilniaus apskritis",]);

        // Luxembourg
        State::create(["country_code" => "LU", "code" =>"CA", "name" => "Capellen",]);
        State::create(["country_code" => "LU", "code" =>"CL", "name" => "Clervaux",]);
        State::create(["country_code" => "LU", "code" =>"DI", "name" => "Diekirch",]);
        State::create(["country_code" => "LU", "code" =>"EC", "name" => "Echternach",]);
        State::create(["country_code" => "LU", "code" =>"ES", "name" => "Esch-sur-Alzette",]);
        State::create(["country_code" => "LU", "code" =>"GR", "name" => "Grevenmacher",]);
        State::create(["country_code" => "LU", "code" =>"LU", "name" => "Luxembourg",]);
        State::create(["country_code" => "LU", "code" =>"ME", "name" => "Mersch",]);
        State::create(["country_code" => "LU", "code" =>"RD", "name" => "Redange",]);
        State::create(["country_code" => "LU", "code" =>"RM", "name" => "Remich",]);
        State::create(["country_code" => "LU", "code" =>"VD", "name" => "Vianden",]);
        State::create(["country_code" => "LU", "code" =>"WI", "name" => "Wiltz",]);

        // Macao (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "MO", "code" => "MO", "name" => "Macao",]);

        // Macedonia, the Former Yugoslav Republic of
        State::create(["country_code" => "MK", "code" =>"801", "name" => "Aerodrom",]);
        State::create(["country_code" => "MK", "code" =>"802", "name" => "Aračinovo",]);
        State::create(["country_code" => "MK", "code" =>"201", "name" => "Berovo",]);
        State::create(["country_code" => "MK", "code" =>"501", "name" => "Bitola",]);
        State::create(["country_code" => "MK", "code" =>"401", "name" => "Bogdanci",]);
        State::create(["country_code" => "MK", "code" =>"601", "name" => "Bogovinje",]);
        State::create(["country_code" => "MK", "code" =>"402", "name" => "Bosilovo",]);
        State::create(["country_code" => "MK", "code" =>"602", "name" => "Brvenica",]);
        State::create(["country_code" => "MK", "code" =>"803", "name" => "Butel",]);
        State::create(["country_code" => "MK", "code" =>"814", "name" => "Centar",]);
        State::create(["country_code" => "MK", "code" =>"313", "name" => "Centar Župa",]);
        State::create(["country_code" => "MK", "code" =>"815", "name" => "Čair",]);
        State::create(["country_code" => "MK", "code" =>"109", "name" => "Čaška",]);
        State::create(["country_code" => "MK", "code" =>"210", "name" => "Češinovo-Obleševo",]);
        State::create(["country_code" => "MK", "code" =>"816", "name" => "Čučer-Sandevo",]);
        State::create(["country_code" => "MK", "code" =>"303", "name" => "Debar",]);
        State::create(["country_code" => "MK", "code" =>"304", "name" => "Debarca",]);
        State::create(["country_code" => "MK", "code" =>"203", "name" => "Delčevo",]);
        State::create(["country_code" => "MK", "code" =>"502", "name" => "Demir Hisar",]);
        State::create(["country_code" => "MK", "code" =>"103", "name" => "Demir Kapija",]);
        State::create(["country_code" => "MK", "code" =>"406", "name" => "Dojran",]);
        State::create(["country_code" => "MK", "code" =>"503", "name" => "Dolneni",]);
        State::create(["country_code" => "MK", "code" =>"804", "name" => "Gazi Baba",]);
        State::create(["country_code" => "MK", "code" =>"405", "name" => "Gevgelija",]);
        State::create(["country_code" => "MK", "code" =>"805", "name" => "Gjorče Petrov",]);
        State::create(["country_code" => "MK", "code" =>"604", "name" => "Gostivar",]);
        State::create(["country_code" => "MK", "code" =>"102", "name" => "Gradsko",]);
        State::create(["country_code" => "MK", "code" =>"807", "name" => "Ilinden",]);
        State::create(["country_code" => "MK", "code" =>"606", "name" => "Jegunovce",]);
        State::create(["country_code" => "MK", "code" =>"205", "name" => "Karbinci",]);
        State::create(["country_code" => "MK", "code" =>"808", "name" => "Karpoš",]);
        State::create(["country_code" => "MK", "code" =>"104", "name" => "Kavadarci",]);
        State::create(["country_code" => "MK", "code" =>"307", "name" => "Kičevo",]);
        State::create(["country_code" => "MK", "code" =>"809", "name" => "Kisela Voda",]);
        State::create(["country_code" => "MK", "code" =>"206", "name" => "Kočani",]);
        State::create(["country_code" => "MK", "code" =>"407", "name" => "Konče",]);
        State::create(["country_code" => "MK", "code" =>"701", "name" => "Kratovo",]);
        State::create(["country_code" => "MK", "code" =>"702", "name" => "Kriva Palanka",]);
        State::create(["country_code" => "MK", "code" =>"504", "name" => "Krivogaštani",]);
        State::create(["country_code" => "MK", "code" =>"505", "name" => "Kruševo",]);
        State::create(["country_code" => "MK", "code" =>"703", "name" => "Kumanovo",]);
        State::create(["country_code" => "MK", "code" =>"704", "name" => "Lipkovo",]);
        State::create(["country_code" => "MK", "code" =>"105", "name" => "Lozovo",]);
        State::create(["country_code" => "MK", "code" =>"207", "name" => "Makedonska Kamenica",]);
        State::create(["country_code" => "MK", "code" =>"308", "name" => "Makedonski Brod",]);
        State::create(["country_code" => "MK", "code" =>"607", "name" => "Mavrovo i Rostuše",]);
        State::create(["country_code" => "MK", "code" =>"506", "name" => "Mogila",]);
        State::create(["country_code" => "MK", "code" =>"106", "name" => "Negotino",]);
        State::create(["country_code" => "MK", "code" =>"507", "name" => "Novaci",]);
        State::create(["country_code" => "MK", "code" =>"408", "name" => "Novo Selo",]);
        State::create(["country_code" => "MK", "code" =>"310", "name" => "Ohrid",]);
        State::create(["country_code" => "MK", "code" =>"208", "name" => "Pehčevo",]);
        State::create(["country_code" => "MK", "code" =>"810", "name" => "Petrovec",]);
        State::create(["country_code" => "MK", "code" =>"311", "name" => "Plasnica",]);
        State::create(["country_code" => "MK", "code" =>"508", "name" => "Prilep",]);
        State::create(["country_code" => "MK", "code" =>"209", "name" => "Probištip",]);
        State::create(["country_code" => "MK", "code" =>"409", "name" => "Radoviš",]);
        State::create(["country_code" => "MK", "code" =>"705", "name" => "Rankovce",]);
        State::create(["country_code" => "MK", "code" =>"509", "name" => "Resen",]);
        State::create(["country_code" => "MK", "code" =>"107", "name" => "Rosoman",]);
        State::create(["country_code" => "MK", "code" =>"811", "name" => "Saraj",]);
        State::create(["country_code" => "MK", "code" =>"812", "name" => "Sopište",]);
        State::create(["country_code" => "MK", "code" =>"706", "name" => "Staro Nagoričane",]);
        State::create(["country_code" => "MK", "code" =>"312", "name" => "Struga",]);
        State::create(["country_code" => "MK", "code" =>"410", "name" => "Strumica",]);
        State::create(["country_code" => "MK", "code" =>"813", "name" => "Studeničani",]);
        State::create(["country_code" => "MK", "code" =>"108", "name" => "Sveti Nikole",]);
        State::create(["country_code" => "MK", "code" =>"211", "name" => "Štip",]);
        State::create(["country_code" => "MK", "code" =>"817", "name" => "Šuto Orizari",]);
        State::create(["country_code" => "MK", "code" =>"608", "name" => "Tearce",]);
        State::create(["country_code" => "MK", "code" =>"609", "name" => "Tetovo",]);
        State::create(["country_code" => "MK", "code" =>"403", "name" => "Valandovo",]);
        State::create(["country_code" => "MK", "code" =>"404", "name" => "Vasilevo",]);
        State::create(["country_code" => "MK", "code" =>"101", "name" => "Veles",]);
        State::create(["country_code" => "MK", "code" =>"301", "name" => "Vevčani",]);
        State::create(["country_code" => "MK", "code" =>"202", "name" => "Vinica",]);
        State::create(["country_code" => "MK", "code" =>"603", "name" => "Vrapčište",]);
        State::create(["country_code" => "MK", "code" =>"806", "name" => "Zelenikovo",]);
        State::create(["country_code" => "MK", "code" =>"204", "name" => "Zrnovci",]);
        State::create(["country_code" => "MK", "code" =>"605", "name" => "Želino",]);

        // Madagascar
        State::create(["country_code" => "MG", "code" => "T", "name" => "Antananarivo",]);
        State::create(["country_code" => "MG", "code" => "D", "name" => "Antsiranana",]);
        State::create(["country_code" => "MG", "code" => "F", "name" => "Fianarantsoa",]);
        State::create(["country_code" => "MG", "code" => "M", "name" => "Mahajanga",]);
        State::create(["country_code" => "MG", "code" => "A", "name" => "Toamasina",]);
        State::create(["country_code" => "MG", "code" => "U", "name" => "Toliara",]);

        // Malawi
        State::create(["country_code" => "MW", "code" => "BA", "name" => "Balaka",]);
        State::create(["country_code" => "MW", "code" => "BL", "name" => "Blantyre",]);
        State::create(["country_code" => "MW", "code" => "CK", "name" => "Chikwawa",]);
        State::create(["country_code" => "MW", "code" => "CR", "name" => "Chiradzulu",]);
        State::create(["country_code" => "MW", "code" => "CT", "name" => "Chitipa",]);
        State::create(["country_code" => "MW", "code" => "DE", "name" => "Dedza",]);
        State::create(["country_code" => "MW", "code" => "DO", "name" => "Dowa",]);
        State::create(["country_code" => "MW", "code" => "KR", "name" => "Karonga",]);
        State::create(["country_code" => "MW", "code" => "KS", "name" => "Kasungu",]);
        State::create(["country_code" => "MW", "code" => "LK", "name" => "Likoma",]);
        State::create(["country_code" => "MW", "code" => "LI", "name" => "Lilongwe",]);
        State::create(["country_code" => "MW", "code" => "MH", "name" => "Machinga",]);
        State::create(["country_code" => "MW", "code" => "MG", "name" => "Mangochi",]);
        State::create(["country_code" => "MW", "code" => "MC", "name" => "Mchinji",]);
        State::create(["country_code" => "MW", "code" => "MU", "name" => "Mulanje",]);
        State::create(["country_code" => "MW", "code" => "MW", "name" => "Mwanza",]);
        State::create(["country_code" => "MW", "code" => "MZ", "name" => "Mzimba",]);
        State::create(["country_code" => "MW", "code" => "NE", "name" => "Neno",]);
        State::create(["country_code" => "MW", "code" => "NB", "name" => "Nkhata Bay",]);
        State::create(["country_code" => "MW", "code" => "NK", "name" => "Nkhotakota",]);
        State::create(["country_code" => "MW", "code" => "NS", "name" => "Nsanje",]);
        State::create(["country_code" => "MW", "code" => "NU", "name" => "Ntcheu",]);
        State::create(["country_code" => "MW", "code" => "NI", "name" => "Ntchisi",]);
        State::create(["country_code" => "MW", "code" => "PH", "name" => "Phalombe",]);
        State::create(["country_code" => "MW", "code" => "RU", "name" => "Rumphi",]);
        State::create(["country_code" => "MW", "code" => "SA", "name" => "Salima",]);
        State::create(["country_code" => "MW", "code" => "TH", "name" => "Thyolo",]);
        State::create(["country_code" => "MW", "code" => "ZO", "name" => "Zomba",]);

        // Malaysia
        State::create(["country_code" => "MY", "code" => "14", "name" => "Wilayah Persekutuan Kuala Lumpur",]);
        State::create(["country_code" => "MY", "code" => "15", "name" => "Wilayah Persekutuan Labuan",]);
        State::create(["country_code" => "MY", "code" => "16", "name" => "Wilayah Persekutuan Putrajaya",]);
        State::create(["country_code" => "MY", "code" => "01", "name" => "Johor",]);
        State::create(["country_code" => "MY", "code" => "02", "name" => "Kedah",]);
        State::create(["country_code" => "MY", "code" => "03", "name" => "Kelantan",]);
        State::create(["country_code" => "MY", "code" => "04", "name" => "Melaka",]);
        State::create(["country_code" => "MY", "code" => "05", "name" => "Negeri Sembilan",]);
        State::create(["country_code" => "MY", "code" => "06", "name" => "Pahang",]);
        State::create(["country_code" => "MY", "code" => "08", "name" => "Perak",]);
        State::create(["country_code" => "MY", "code" => "09", "name" => "Perlis",]);
        State::create(["country_code" => "MY", "code" => "07", "name" => "Pulau Pinang",]);
        State::create(["country_code" => "MY", "code" => "12", "name" => "Sabah",]);
        State::create(["country_code" => "MY", "code" => "13", "name" => "Sarawak",]);
        State::create(["country_code" => "MY", "code" => "10", "name" => "Selangor",]);
        State::create(["country_code" => "MY", "code" => "11", "name" => "Terengganu",]);

        // Maldives
        State::create(["country_code" => "MV", "code" => "01", "name" => "Addu City",]);
        State::create(["country_code" => "MV", "code" => "MLE", "name" => "Male",]);
        State::create(["country_code" => "MV", "code" => "02", "name" => "North Ari Atoll",]);
        State::create(["country_code" => "MV", "code" => "00", "name" => "South Ari Atoll",]);
        State::create(["country_code" => "MV", "code" => "20", "name" => "South Maalhosmadulu",]);
        State::create(["country_code" => "MV", "code" => "17", "name" => "South Nilandhe Atoll",]);
        State::create(["country_code" => "MV", "code" => "14", "name" => "North Nilandhe Atoll",]);
        State::create(["country_code" => "MV", "code" => "27", "name" => "North Huvadhu Atoll",]);
        State::create(["country_code" => "MV", "code" => "28", "name" => "South Huvadhu Atoll",]);
        State::create(["country_code" => "MV", "code" => "29", "name" => "Fuvammulah",]);
        State::create(["country_code" => "MV", "code" => "07", "name" => "North Thiladhunmathi",]);
        State::create(["country_code" => "MV", "code" => "23", "name" => "South Thiladhunmathi",]);
        State::create(["country_code" => "MV", "code" => "26", "name" => "Male Atoll",]);
        State::create(["country_code" => "MV", "code" => "05", "name" => "Hahdhunmathi",]);
        State::create(["country_code" => "MV", "code" => "03", "name" => "Faadhippolhu",]);
        State::create(["country_code" => "MV", "code" => "12", "name" => "Mulaku Atoll",]);
        State::create(["country_code" => "MV", "code" => "25", "name" => "South Miladhunmadulu",]);
        State::create(["country_code" => "MV", "code" => "13", "name" => "North Maalhosmadulu",]);
        State::create(["country_code" => "MV", "code" => "24", "name" => "North Miladhunmadulu",]);
        State::create(["country_code" => "MV", "code" => "08", "name" => "Kolhumadulu",]);
        State::create(["country_code" => "MV", "code" => "04", "name" => "Felidhu Atoll",]);

        // Mali
        State::create(["country_code" => "ML", "code" => "BKO", "name" => "Bamako",]);
        State::create(["country_code" => "ML", "code" => "7", "name" => "Gao",]);
        State::create(["country_code" => "ML", "code" => "1", "name" => "Kayes",]);
        State::create(["country_code" => "ML", "code" => "8", "name" => "Kidal",]);
        State::create(["country_code" => "ML", "code" => "2", "name" => "Koulikoro",]);
        State::create(["country_code" => "ML", "code" => "9", "name" => "Ménaka",]);
        State::create(["country_code" => "ML", "code" => "5", "name" => "Mopti",]);
        State::create(["country_code" => "ML", "code" => "4", "name" => "Ségou",]);
        State::create(["country_code" => "ML", "code" => "3", "name" => "Sikasso",]);
        State::create(["country_code" => "ML", "code" => "10", "name" => "Taoudénit",]);
        State::create(["country_code" => "ML", "code" => "6", "name" => "Tombouctou",]);

        // Malta
        State::create(["country_code" => "MT", "code" =>"01", "name" => "Attard",]);
        State::create(["country_code" => "MT", "code" =>"02", "name" => "Balzan",]);
        State::create(["country_code" => "MT", "code" =>"03", "name" => "Birgu",]);
        State::create(["country_code" => "MT", "code" =>"04", "name" => "Birkirkara",]);
        State::create(["country_code" => "MT", "code" =>"05", "name" => "Birżebbuġa",]);
        State::create(["country_code" => "MT", "code" =>"06", "name" => "Bormla",]);
        State::create(["country_code" => "MT", "code" =>"07", "name" => "Dingli",]);
        State::create(["country_code" => "MT", "code" =>"08", "name" => "Fgura",]);
        State::create(["country_code" => "MT", "code" =>"09", "name" => "Floriana",]);
        State::create(["country_code" => "MT", "code" =>"10", "name" => "Fontana",]);
        State::create(["country_code" => "MT", "code" =>"11", "name" => "Gudja",]);
        State::create(["country_code" => "MT", "code" =>"12", "name" => "Gżira",]);
        State::create(["country_code" => "MT", "code" =>"13", "name" => "Għajnsielem",]);
        State::create(["country_code" => "MT", "code" =>"14", "name" => "Għarb",]);
        State::create(["country_code" => "MT", "code" =>"15", "name" => "Għargħur",]);
        State::create(["country_code" => "MT", "code" =>"16", "name" => "Għasri",]);
        State::create(["country_code" => "MT", "code" =>"17", "name" => "Għaxaq",]);
        State::create(["country_code" => "MT", "code" =>"18", "name" => "Ħamrun",]);
        State::create(["country_code" => "MT", "code" =>"19", "name" => "Iklin",]);
        State::create(["country_code" => "MT", "code" =>"20", "name" => "Isla",]);
        State::create(["country_code" => "MT", "code" =>"21", "name" => "Kalkara",]);
        State::create(["country_code" => "MT", "code" =>"22", "name" => "Kerċem",]);
        State::create(["country_code" => "MT", "code" =>"23", "name" => "Kirkop",]);
        State::create(["country_code" => "MT", "code" =>"24", "name" => "Lija",]);
        State::create(["country_code" => "MT", "code" =>"25", "name" => "Luqa",]);
        State::create(["country_code" => "MT", "code" =>"26", "name" => "Marsa",]);
        State::create(["country_code" => "MT", "code" =>"27", "name" => "Marsaskala",]);
        State::create(["country_code" => "MT", "code" =>"28", "name" => "Marsaxlokk",]);
        State::create(["country_code" => "MT", "code" =>"29", "name" => "Mdina",]);
        State::create(["country_code" => "MT", "code" =>"30", "name" => "Mellieħa",]);
        State::create(["country_code" => "MT", "code" =>"31", "name" => "Mġarr",]);
        State::create(["country_code" => "MT", "code" =>"32", "name" => "Mosta",]);
        State::create(["country_code" => "MT", "code" =>"33", "name" => "Mqabba",]);
        State::create(["country_code" => "MT", "code" =>"34", "name" => "Msida",]);
        State::create(["country_code" => "MT", "code" =>"35", "name" => "Mtarfa",]);
        State::create(["country_code" => "MT", "code" =>"36", "name" => "Munxar",]);
        State::create(["country_code" => "MT", "code" =>"37", "name" => "Nadur",]);
        State::create(["country_code" => "MT", "code" =>"38", "name" => "Naxxar",]);
        State::create(["country_code" => "MT", "code" =>"39", "name" => "Paola",]);
        State::create(["country_code" => "MT", "code" =>"40", "name" => "Pembroke",]);
        State::create(["country_code" => "MT", "code" =>"41", "name" => "Pietà",]);
        State::create(["country_code" => "MT", "code" =>"42", "name" => "Qala",]);
        State::create(["country_code" => "MT", "code" =>"43", "name" => "Qormi",]);
        State::create(["country_code" => "MT", "code" =>"44", "name" => "Qrendi",]);
        State::create(["country_code" => "MT", "code" =>"45", "name" => "Rabat Gozo",]);
        State::create(["country_code" => "MT", "code" =>"46", "name" => "Rabat Malta",]);
        State::create(["country_code" => "MT", "code" =>"47", "name" => "Safi",]);
        State::create(["country_code" => "MT", "code" =>"48", "name" => "Saint Julian's",]);
        State::create(["country_code" => "MT", "code" =>"49", "name" => "Saint John",]);
        State::create(["country_code" => "MT", "code" =>"50", "name" => "Saint Lawrence",]);
        State::create(["country_code" => "MT", "code" =>"51", "name" => "Saint Paul's Bay",]);
        State::create(["country_code" => "MT", "code" =>"52", "name" => "Sannat",]);
        State::create(["country_code" => "MT", "code" =>"53", "name" => "Saint Lucia's",]);
        State::create(["country_code" => "MT", "code" =>"54", "name" => "Santa Venera",]);
        State::create(["country_code" => "MT", "code" =>"55", "name" => "Siġġiewi",]);
        State::create(["country_code" => "MT", "code" =>"56", "name" => "Sliema",]);
        State::create(["country_code" => "MT", "code" =>"57", "name" => "Swieqi",]);
        State::create(["country_code" => "MT", "code" =>"58", "name" => "Ta' Xbiex",]);
        State::create(["country_code" => "MT", "code" =>"59", "name" => "Tarxien",]);
        State::create(["country_code" => "MT", "code" =>"60", "name" => "Valletta",]);
        State::create(["country_code" => "MT", "code" =>"61", "name" => "Xagħra",]);
        State::create(["country_code" => "MT", "code" =>"62", "name" => "Xewkija",]);
        State::create(["country_code" => "MT", "code" =>"63", "name" => "Xgħajra",]);
        State::create(["country_code" => "MT", "code" =>"64", "name" => "Żabbar",]);
        State::create(["country_code" => "MT", "code" =>"65", "name" => "Żebbuġ Gozo",]);
        State::create(["country_code" => "MT", "code" =>"66", "name" => "Żebbuġ Malta",]);
        State::create(["country_code" => "MT", "code" =>"67", "name" => "Żejtun",]);
        State::create(["country_code" => "MT", "code" =>"68", "name" => "Żurrieq",]);

        // Marshall Islands
        State::create(["country_code" => "MH", "code" => "L", "name" => "Ralik chain",]);
        State::create(["country_code" => "MH", "code" => "T", "name" => "Ratak chain",]);
        State::create(["country_code" => "MH", "code" => "ALL", "name" => "Ailinglaplap",]);
        State::create(["country_code" => "MH", "code" => "ALK", "name" => "Ailuk",]);
        State::create(["country_code" => "MH", "code" => "ARN", "name" => "Arno",]);
        State::create(["country_code" => "MH", "code" => "AUR", "name" => "Aur",]);
        State::create(["country_code" => "MH", "code" => "KIL", "name" => "Bikini & Kili",]);
        State::create(["country_code" => "MH", "code" => "EBO", "name" => "Ebon",]);
        State::create(["country_code" => "MH", "code" => "ENI", "name" => "Enewetak & Ujelang",]);
        State::create(["country_code" => "MH", "code" => "JAB", "name" => "Jabat",]);
        State::create(["country_code" => "MH", "code" => "JAL", "name" => "Jaluit",]);
        State::create(["country_code" => "MH", "code" => "KWA", "name" => "Kwajalein",]);
        State::create(["country_code" => "MH", "code" => "LAE", "name" => "Lae",]);
        State::create(["country_code" => "MH", "code" => "LIB", "name" => "Lib",]);
        State::create(["country_code" => "MH", "code" => "LIK", "name" => "Likiep",]);
        State::create(["country_code" => "MH", "code" => "MAJ", "name" => "Majuro",]);
        State::create(["country_code" => "MH", "code" => "MAL", "name" => "Maloelap",]);
        State::create(["country_code" => "MH", "code" => "MEJ", "name" => "Mejit",]);
        State::create(["country_code" => "MH", "code" => "MIL", "name" => "Mili",]);
        State::create(["country_code" => "MH", "code" => "NMK", "name" => "Namdrik",]);
        State::create(["country_code" => "MH", "code" => "NMU", "name" => "Namu",]);
        State::create(["country_code" => "MH", "code" => "RON", "name" => "Rongelap",]);
        State::create(["country_code" => "MH", "code" => "UJA", "name" => "Ujae",]);
        State::create(["country_code" => "MH", "code" => "UTI", "name" => "Utrik",]);
        State::create(["country_code" => "MH", "code" => "WTH", "name" => "Wotho",]);
        State::create(["country_code" => "MH", "code" => "WTJ", "name" => "Wotje",]);

        // Martinique (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "MQ", "code" => "MQ", "name" => "Martinique",]);

        // Mauritania
        State::create(["country_code" => "MR", "code" => "07", "name" => "Adrar",]);
        State::create(["country_code" => "MR", "code" => "03", "name" => "Assaba",]);
        State::create(["country_code" => "MR", "code" => "05", "name" => "Brakna",]);
        State::create(["country_code" => "MR", "code" => "08", "name" => "Dakhlet Nouâdhibou",]);
        State::create(["country_code" => "MR", "code" => "04", "name" => "Gorgol",]);
        State::create(["country_code" => "MR", "code" => "10", "name" => "Guidimaka",]);
        State::create(["country_code" => "MR", "code" => "01", "name" => "Hodh ech Chargui",]);
        State::create(["country_code" => "MR", "code" => "02", "name" => "Hodh el Gharbi",]);
        State::create(["country_code" => "MR", "code" => "12", "name" => "Inchiri",]);
        State::create(["country_code" => "MR", "code" => "14", "name" => "Nuwākshūţ ash Shamālīyah",]);
        State::create(["country_code" => "MR", "code" => "13", "name" => "Nuwākshūţ al Gharbīyah",]);
        State::create(["country_code" => "MR", "code" => "15", "name" => "Nuwākshūţ al Janūbīyah",]);
        State::create(["country_code" => "MR", "code" => "09", "name" => "Tagant",]);
        State::create(["country_code" => "MR", "code" => "11", "name" => "Tiris Zemmour",]);
        State::create(["country_code" => "MR", "code" => "06", "name" => "Trarza",]);

        // Mauritius
        State::create(["country_code" => "MU", "code" => "BR", "name" => "Beau Bassin-Rose Hill",]);
        State::create(["country_code" => "MU", "code" => "CU", "name" => "Curepipe",]);
        State::create(["country_code" => "MU", "code" => "PU", "name" => "Port Louis",]);
        State::create(["country_code" => "MU", "code" => "QB", "name" => "Quatre Bornes",]);
        State::create(["country_code" => "MU", "code" => "VP", "name" => "Vacoas-Phoenix",]);
        State::create(["country_code" => "MU", "code" => "AG", "name" => "Agalega Islands",]);
        State::create(["country_code" => "MU", "code" => "CC", "name" => "Cargados Carajos Shoals",]);
        State::create(["country_code" => "MU", "code" => "RO", "name" => "Rodrigues Island",]);
        State::create(["country_code" => "MU", "code" => "BL", "name" => "Black River",]);
        State::create(["country_code" => "MU", "code" => "FL", "name" => "Flacq",]);
        State::create(["country_code" => "MU", "code" => "GP", "name" => "Grand Port",]);
        State::create(["country_code" => "MU", "code" => "MO", "name" => "Moka",]);
        State::create(["country_code" => "MU", "code" => "PA", "name" => "Pamplemousses",]);
        State::create(["country_code" => "MU", "code" => "PW", "name" => "Plaines Wilhems",]);
        State::create(["country_code" => "MU", "code" => "PL", "name" => "Port Louis",]);
        State::create(["country_code" => "MU", "code" => "RR", "name" => "Rivière du Rempart",]);
        State::create(["country_code" => "MU", "code" => "SA", "name" => "Savanne",]);

        // Mayotte (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "YT", "code" => "YT", "name" => "Mayotte",]);

        // Mexico
        State::create(["country_code" => "MX", "code" =>"CMX", "name" => "Ciudad de México",]);
        State::create(["country_code" => "MX", "code" =>"AGU", "name" => "Aguascalientes",]);
        State::create(["country_code" => "MX", "code" =>"BCN", "name" => "Baja California",]);
        State::create(["country_code" => "MX", "code" =>"BCS", "name" => "Baja California Sur",]);
        State::create(["country_code" => "MX", "code" =>"CAM", "name" => "Campeche",]);
        State::create(["country_code" => "MX", "code" =>"COA", "name" => "Coahuila de Zaragoza",]);
        State::create(["country_code" => "MX", "code" =>"COL", "name" => "Colima",]);
        State::create(["country_code" => "MX", "code" =>"CHP", "name" => "Chiapas",]);
        State::create(["country_code" => "MX", "code" =>"CHH", "name" => "Chihuahua",]);
        State::create(["country_code" => "MX", "code" =>"DUR", "name" => "Durango",]);
        State::create(["country_code" => "MX", "code" =>"GUA", "name" => "Guanajuato",]);
        State::create(["country_code" => "MX", "code" =>"GRO", "name" => "Guerrero",]);
        State::create(["country_code" => "MX", "code" =>"HID", "name" => "Hidalgo",]);
        State::create(["country_code" => "MX", "code" =>"JAL", "name" => "Jalisco",]);
        State::create(["country_code" => "MX", "code" =>"MEX", "name" => "México",]);
        State::create(["country_code" => "MX", "code" =>"MIC", "name" => "Michoacán de Ocampo",]);
        State::create(["country_code" => "MX", "code" =>"MOR", "name" => "Morelos",]);
        State::create(["country_code" => "MX", "code" =>"NAY", "name" => "Nayarit",]);
        State::create(["country_code" => "MX", "code" =>"NLE", "name" => "Nuevo León",]);
        State::create(["country_code" => "MX", "code" =>"OAX", "name" => "Oaxaca",]);
        State::create(["country_code" => "MX", "code" =>"PUE", "name" => "Puebla",]);
        State::create(["country_code" => "MX", "code" =>"QUE", "name" => "Querétaro",]);
        State::create(["country_code" => "MX", "code" =>"ROO", "name" => "Quintana Roo",]);
        State::create(["country_code" => "MX", "code" =>"SLP", "name" => "San Luis Potosí",]);
        State::create(["country_code" => "MX", "code" =>"SIN", "name" => "Sinaloa",]);
        State::create(["country_code" => "MX", "code" =>"SON", "name" => "Sonora",]);
        State::create(["country_code" => "MX", "code" =>"TAB", "name" => "Tabasco",]);
        State::create(["country_code" => "MX", "code" =>"TAM", "name" => "Tamaulipas",]);
        State::create(["country_code" => "MX", "code" =>"TLA", "name" => "Tlaxcala",]);
        State::create(["country_code" => "MX", "code" =>"VER", "name" => "Veracruz de Ignacio de la Llave",]);
        State::create(["country_code" => "MX", "code" =>"YUC", "name" => "Yucatán",]);
        State::create(["country_code" => "MX", "code" =>"ZAC", "name" => "Zacatecas",]);

        // Micronesia, Federated States of
        State::create(["country_code" => "FM", "code" =>"TRK", "name" => "Chuuk",]);
        State::create(["country_code" => "FM", "code" =>"KSA", "name" => "Kosrae",]);
        State::create(["country_code" => "FM", "code" =>"PNI", "name" => "Pohnpei",]);
        State::create(["country_code" => "FM", "code" =>"YAP", "name" => "Yap",]);

        // Moldova, Republic of
        State::create(["country_code" => "MD", "code" =>"GA", "name" => "Găgăuzia",]);
        State::create(["country_code" => "MD", "code" =>"BA", "name" => "Bălți",]);
        State::create(["country_code" => "MD", "code" =>"BD", "name" => "Bender",]);
        State::create(["country_code" => "MD", "code" =>"CU", "name" => "Chișinău",]);
        State::create(["country_code" => "MD", "code" =>"AN", "name" => "Anenii Noi",]);
        State::create(["country_code" => "MD", "code" =>"BS", "name" => "Basarabeasca",]);
        State::create(["country_code" => "MD", "code" =>"BR", "name" => "Briceni",]);
        State::create(["country_code" => "MD", "code" =>"CA", "name" => "Cahul",]);
        State::create(["country_code" => "MD", "code" =>"CT", "name" => "Cantemir",]);
        State::create(["country_code" => "MD", "code" =>"CL", "name" => "Călărași",]);
        State::create(["country_code" => "MD", "code" =>"CS", "name" => "Căușeni",]);
        State::create(["country_code" => "MD", "code" =>"CM", "name" => "Cimișlia",]);
        State::create(["country_code" => "MD", "code" =>"CR", "name" => "Criuleni",]);
        State::create(["country_code" => "MD", "code" =>"DO", "name" => "Dondușeni",]);
        State::create(["country_code" => "MD", "code" =>"DR", "name" => "Drochia",]);
        State::create(["country_code" => "MD", "code" =>"DU", "name" => "Dubăsari",]);
        State::create(["country_code" => "MD", "code" =>"ED", "name" => "Edineț",]);
        State::create(["country_code" => "MD", "code" =>"FA", "name" => "Fălești",]);
        State::create(["country_code" => "MD", "code" =>"FL", "name" => "Florești",]);
        State::create(["country_code" => "MD", "code" =>"GL", "name" => "Glodeni",]);
        State::create(["country_code" => "MD", "code" =>"HI", "name" => "Hîncești",]);
        State::create(["country_code" => "MD", "code" =>"IA", "name" => "Ialoveni",]);
        State::create(["country_code" => "MD", "code" =>"LE", "name" => "Leova",]);
        State::create(["country_code" => "MD", "code" =>"NI", "name" => "Nisporeni",]);
        State::create(["country_code" => "MD", "code" =>"OC", "name" => "Ocnița",]);
        State::create(["country_code" => "MD", "code" =>"OR", "name" => "Orhei",]);
        State::create(["country_code" => "MD", "code" =>"RE", "name" => "Rezina",]);
        State::create(["country_code" => "MD", "code" =>"RI", "name" => "Rîșcani",]);
        State::create(["country_code" => "MD", "code" =>"SI", "name" => "Sîngerei",]);
        State::create(["country_code" => "MD", "code" =>"SO", "name" => "Soroca",]);
        State::create(["country_code" => "MD", "code" =>"ST", "name" => "Strășeni",]);
        State::create(["country_code" => "MD", "code" =>"SD", "name" => "Șoldănești",]);
        State::create(["country_code" => "MD", "code" =>"SV", "name" => "Ștefan Vodă",]);
        State::create(["country_code" => "MD", "code" =>"TA", "name" => "Taraclia",]);
        State::create(["country_code" => "MD", "code" =>"TE", "name" => "Telenești",]);
        State::create(["country_code" => "MD", "code" =>"UN", "name" => "Ungheni",]);
        State::create(["country_code" => "MD", "code" =>"SN", "name" => "Stînga Nistrului, unitatea teritorială din",]);

        // Monaco
        State::create(["country_code" => "MC", "code" =>"FO", "name" => "Fontvieille",]);
        State::create(["country_code" => "MC", "code" =>"JE", "name" => "Jardin Exotique",]);
        State::create(["country_code" => "MC", "code" =>"CL", "name" => "La Colle",]);
        State::create(["country_code" => "MC", "code" =>"CO", "name" => "La Condamine",]);
        State::create(["country_code" => "MC", "code" =>"GA", "name" => "La Gare",]);
        State::create(["country_code" => "MC", "code" =>"SO", "name" => "La Source",]);
        State::create(["country_code" => "MC", "code" =>"LA", "name" => "Larvotto",]);
        State::create(["country_code" => "MC", "code" =>"MA", "name" => "Malbousquet",]);
        State::create(["country_code" => "MC", "code" =>"MO", "name" => "Monaco-Ville",]);
        State::create(["country_code" => "MC", "code" =>"MG", "name" => "Moneghetti",]);
        State::create(["country_code" => "MC", "code" =>"MC", "name" => "Monte-Carlo",]);
        State::create(["country_code" => "MC", "code" =>"MU", "name" => "Moulins",]);
        State::create(["country_code" => "MC", "code" =>"PH", "name" => "Port-Hercule",]);
        State::create(["country_code" => "MC", "code" =>"SR", "name" => "Saint-Roman",]);
        State::create(["country_code" => "MC", "code" =>"SD", "name" => "Sainte-Dévote",]);
        State::create(["country_code" => "MC", "code" =>"SP", "name" => "Spélugues",]);
        State::create(["country_code" => "MC", "code" =>"VR", "name" => "Vallon de la Rousse",]);

        // Mongolia
        State::create(["country_code" => "MN", "code" =>"1", "name" => "Ulaanbaatar",]);
        State::create(["country_code" => "MN", "code" =>"073", "name" => "Arhangay",]);
        State::create(["country_code" => "MN", "code" =>"069", "name" => "Bayanhongor",]);
        State::create(["country_code" => "MN", "code" =>"071", "name" => "Bayan-Ölgiy",]);
        State::create(["country_code" => "MN", "code" =>"067", "name" => "Bulgan",]);
        State::create(["country_code" => "MN", "code" =>"037", "name" => "Darhan uul",]);
        State::create(["country_code" => "MN", "code" =>"061", "name" => "Dornod",]);
        State::create(["country_code" => "MN", "code" =>"063", "name" => "Dornogovĭ",]);
        State::create(["country_code" => "MN", "code" =>"059", "name" => "Dundgovĭ",]);
        State::create(["country_code" => "MN", "code" =>"057", "name" => "Dzavhan",]);
        State::create(["country_code" => "MN", "code" =>"065", "name" => "Govĭ-Altay",]);
        State::create(["country_code" => "MN", "code" =>"064", "name" => "Govĭ-Sümber",]);
        State::create(["country_code" => "MN", "code" =>"039", "name" => "Hentiy",]);
        State::create(["country_code" => "MN", "code" =>"043", "name" => "Hovd",]);
        State::create(["country_code" => "MN", "code" =>"041", "name" => "Hövsgöl",]);
        State::create(["country_code" => "MN", "code" =>"053", "name" => "Ömnögovĭ",]);
        State::create(["country_code" => "MN", "code" =>"035", "name" => "Orhon",]);
        State::create(["country_code" => "MN", "code" =>"055", "name" => "Övörhangay",]);
        State::create(["country_code" => "MN", "code" =>"049", "name" => "Selenge",]);
        State::create(["country_code" => "MN", "code" =>"051", "name" => "Sühbaatar",]);
        State::create(["country_code" => "MN", "code" =>"047", "name" => "Töv",]);
        State::create(["country_code" => "MN", "code" =>"046", "name" => "Uvs",]);

        // Montenegro
        State::create(["country_code" => "ME", "code" =>"01", "name" => "Andrijevica",]);
        State::create(["country_code" => "ME", "code" =>"02", "name" => "Bar",]);
        State::create(["country_code" => "ME", "code" =>"03", "name" => "Berane",]);
        State::create(["country_code" => "ME", "code" =>"04", "name" => "Bijelo Polje",]);
        State::create(["country_code" => "ME", "code" =>"05", "name" => "Budva",]);
        State::create(["country_code" => "ME", "code" =>"06", "name" => "Cetinje",]);
        State::create(["country_code" => "ME", "code" =>"07", "name" => "Danilovgrad",]);
        State::create(["country_code" => "ME", "code" =>"08", "name" => "Herceg-Novi",]);
        State::create(["country_code" => "ME", "code" =>"09", "name" => "Kolašin",]);
        State::create(["country_code" => "ME", "code" =>"10", "name" => "Kotor",]);
        State::create(["country_code" => "ME", "code" =>"11", "name" => "Mojkovac",]);
        State::create(["country_code" => "ME", "code" =>"12", "name" => "Nikšić",]);
        State::create(["country_code" => "ME", "code" =>"13", "name" => "Plav",]);
        State::create(["country_code" => "ME", "code" =>"14", "name" => "Pljevlja",]);
        State::create(["country_code" => "ME", "code" =>"15", "name" => "Plužine",]);
        State::create(["country_code" => "ME", "code" =>"16", "name" => "Podgorica",]);
        State::create(["country_code" => "ME", "code" =>"17", "name" => "Rožaje",]);
        State::create(["country_code" => "ME", "code" =>"18", "name" => "Šavnik",]);
        State::create(["country_code" => "ME", "code" =>"19", "name" => "Tivat",]);
        State::create(["country_code" => "ME", "code" =>"20", "name" => "Ulcinj",]);
        State::create(["country_code" => "ME", "code" =>"21", "name" => "Žabljak",]);
        State::create(["country_code" => "ME", "code" =>"22", "name" => "Gusinje",]);
        State::create(["country_code" => "ME", "code" =>"23", "name" => "Petnjica",]);
        State::create(["country_code" => "ME", "code" =>"24", "name" => "Tuzi",]);

        // Montserrat (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "MS", "code" => "MS", "name" => "Montserrat",]);

        // Morocco
        State::create(["country_code" => "MA", "code" => "AGD", "name" => "Agadir-Ida-Ou-Tanane",]);
        State::create(["country_code" => "MA", "code" => "AOU", "name" => "Aousserd",]);
        State::create(["country_code" => "MA", "code" => "ASZ", "name" => "Assa-Zag",]);
        State::create(["country_code" => "MA", "code" => "AZI", "name" => "Azilal",]);
        State::create(["country_code" => "MA", "code" => "BEM", "name" => "Béni Mellal",]);
        State::create(["country_code" => "MA", "code" => "BES", "name" => "Benslimane",]);
        State::create(["country_code" => "MA", "code" => "BER", "name" => "Berkane",]);
        State::create(["country_code" => "MA", "code" => "BRR", "name" => "Berrechid",]);
        State::create(["country_code" => "MA", "code" => "BOD", "name" => "Boujdour",]);
        State::create(["country_code" => "MA", "code" => "BOM", "name" => "Boulemane",]);
        State::create(["country_code" => "MA", "code" => "CAS", "name" => "Casablanca",]);
        State::create(["country_code" => "MA", "code" => "CHE", "name" => "Chefchaouen",]);
        State::create(["country_code" => "MA", "code" => "CHI", "name" => "Chichaoua",]);
        State::create(["country_code" => "MA", "code" => "CHT", "name" => "Chtouka-Ait Baha",]);
        State::create(["country_code" => "MA", "code" => "DRI", "name" => "Driouch",]);
        State::create(["country_code" => "MA", "code" => "ERR", "name" => "Errachidia",]);
        State::create(["country_code" => "MA", "code" => "ESM", "name" => "Es-Semara",]);
        State::create(["country_code" => "MA", "code" => "ESI", "name" => "Essaouira",]);
        State::create(["country_code" => "MA", "code" => "FAH", "name" => "Fahs-Anjra",]);
        State::create(["country_code" => "MA", "code" => "FES", "name" => "Fès",]);
        State::create(["country_code" => "MA", "code" => "FIG", "name" => "Figuig",]);
        State::create(["country_code" => "MA", "code" => "FQH", "name" => "Fquih Ben Salah",]);
        State::create(["country_code" => "MA", "code" => "GUE", "name" => "Guelmim",]);
        State::create(["country_code" => "MA", "code" => "GUF", "name" => "Guercif",]);
        State::create(["country_code" => "MA", "code" => "HAJ", "name" => "El Hajeb",]);
        State::create(["country_code" => "MA", "code" => "HAO", "name" => "Al Haouz",]);
        State::create(["country_code" => "MA", "code" => "HOC", "name" => "Al Hoceïma",]);
        State::create(["country_code" => "MA", "code" => "IFR", "name" => "Ifrane",]);
        State::create(["country_code" => "MA", "code" => "INE", "name" => "Inezgane-Ait Melloul",]);
        State::create(["country_code" => "MA", "code" => "JDI", "name" => "El Jadida",]);
        State::create(["country_code" => "MA", "code" => "JRA", "name" => "Jerada",]);
        State::create(["country_code" => "MA", "code" => "KES", "name" => "El Kelâa des Sraghna",]);
        State::create(["country_code" => "MA", "code" => "KEN", "name" => "Kénitra",]);
        State::create(["country_code" => "MA", "code" => "KHE", "name" => "Khemisset",]);
        State::create(["country_code" => "MA", "code" => "KHN", "name" => "Khenifra",]);
        State::create(["country_code" => "MA", "code" => "KHO", "name" => "Khouribga",]);
        State::create(["country_code" => "MA", "code" => "LAA", "name" => "Laâyoune",]);
        State::create(["country_code" => "MA", "code" => "LAR", "name" => "Larache",]);
        State::create(["country_code" => "MA", "code" => "MAR", "name" => "Marrakech",]);
        State::create(["country_code" => "MA", "code" => "MDF", "name" => "M’diq-Fnideq",]);
        State::create(["country_code" => "MA", "code" => "MED", "name" => "Médiouna",]);
        State::create(["country_code" => "MA", "code" => "MEK", "name" => "Meknès",]);
        State::create(["country_code" => "MA", "code" => "MID", "name" => "Midelt",]);
        State::create(["country_code" => "MA", "code" => "MOH", "name" => "Mohammadia",]);
        State::create(["country_code" => "MA", "code" => "MOU", "name" => "Moulay Yacoub",]);
        State::create(["country_code" => "MA", "code" => "NAD", "name" => "Nador",]);
        State::create(["country_code" => "MA", "code" => "NOU", "name" => "Nouaceur",]);
        State::create(["country_code" => "MA", "code" => "OUA", "name" => "Ouarzazate",]);
        State::create(["country_code" => "MA", "code" => "OUD", "name" => "Oued Ed-Dahab ",]);
        State::create(["country_code" => "MA", "code" => "OUZ", "name" => "Ouezzane",]);
        State::create(["country_code" => "MA", "code" => "OUJ", "name" => "Oujda-Angad",]);
        State::create(["country_code" => "MA", "code" => "RAB", "name" => "Rabat",]);
        State::create(["country_code" => "MA", "code" => "REH", "name" => "Rehamna",]);
        State::create(["country_code" => "MA", "code" => "SAF", "name" => "Safi",]);
        State::create(["country_code" => "MA", "code" => "SAL", "name" => "Salé",]);
        State::create(["country_code" => "MA", "code" => "SEF", "name" => "Sefrou",]);
        State::create(["country_code" => "MA", "code" => "SET", "name" => "Settat",]);
        State::create(["country_code" => "MA", "code" => "SIB", "name" => "Sidi Bennour",]);
        State::create(["country_code" => "MA", "code" => "SIF", "name" => "Sidi Ifni",]);
        State::create(["country_code" => "MA", "code" => "SIK", "name" => "Sidi Kacem",]);
        State::create(["country_code" => "MA", "code" => "SIL", "name" => "Sidi Slimane",]);
        State::create(["country_code" => "MA", "code" => "SKH", "name" => "Skhirate-Témara",]);
        State::create(["country_code" => "MA", "code" => "TNT", "name" => "Tan-Tan",]);
        State::create(["country_code" => "MA", "code" => "TNG", "name" => "Tanger-Assilah",]);
        State::create(["country_code" => "MA", "code" => "TAO", "name" => "Taounate",]);
        State::create(["country_code" => "MA", "code" => "TAI", "name" => "Taourirt",]);
        State::create(["country_code" => "MA", "code" => "TAF", "name" => "Tarfaya",]);
        State::create(["country_code" => "MA", "code" => "TAR", "name" => "Taroudant",]);
        State::create(["country_code" => "MA", "code" => "TAT", "name" => "Tata",]);
        State::create(["country_code" => "MA", "code" => "TAZ", "name" => "Taza",]);
        State::create(["country_code" => "MA", "code" => "TET", "name" => "Tétouan",]);
        State::create(["country_code" => "MA", "code" => "TIN", "name" => "Tinghir",]);
        State::create(["country_code" => "MA", "code" => "TIZ", "name" => "Tiznit",]);
        State::create(["country_code" => "MA", "code" => "YUS", "name" => "Youssoufia",]);
        State::create(["country_code" => "MA", "code" => "ZAG", "name" => "Zagora",]);

        // Mozambique
        State::create(["country_code" => "MZ", "code" => "MPM", "name" => "Maputo",]);
        State::create(["country_code" => "MZ", "code" => "P", "name" => "Cabo Delgado",]);
        State::create(["country_code" => "MZ", "code" => "G", "name" => "Gaza",]);
        State::create(["country_code" => "MZ", "code" => "I", "name" => "Inhambane",]);
        State::create(["country_code" => "MZ", "code" => "B", "name" => "Manica",]);
        State::create(["country_code" => "MZ", "code" => "L", "name" => "Maputo",]);
        State::create(["country_code" => "MZ", "code" => "N", "name" => "Nampula",]);
        State::create(["country_code" => "MZ", "code" => "A", "name" => "Niassa",]);
        State::create(["country_code" => "MZ", "code" => "S", "name" => "Sofala",]);
        State::create(["country_code" => "MZ", "code" => "T", "name" => "Tete",]);
        State::create(["country_code" => "MZ", "code" => "Q", "name" => "Zambézia",]);

        // Myanmar
        State::create(["country_code" => "MM", "code" => "07", "name" => "Ayeyarwady",]);
        State::create(["country_code" => "MM", "code" => "02", "name" => "Bago",]);
        State::create(["country_code" => "MM", "code" => "03", "name" => "Magway",]);
        State::create(["country_code" => "MM", "code" => "04", "name" => "Mandalay",]);
        State::create(["country_code" => "MM", "code" => "01", "name" => "Sagaing",]);
        State::create(["country_code" => "MM", "code" => "05", "name" => "Tanintharyi",]);
        State::create(["country_code" => "MM", "code" => "06", "name" => "Yangon",]);
        State::create(["country_code" => "MM", "code" => "14", "name" => "Chin",]);
        State::create(["country_code" => "MM", "code" => "11", "name" => "Kachin",]);
        State::create(["country_code" => "MM", "code" => "12", "name" => "Kayah",]);
        State::create(["country_code" => "MM", "code" => "13", "name" => "Kayin",]);
        State::create(["country_code" => "MM", "code" => "15", "name" => "Mon",]);
        State::create(["country_code" => "MM", "code" => "16", "name" => "Rakhine",]);
        State::create(["country_code" => "MM", "code" => "17", "name" => "Shan",]);
        State::create(["country_code" => "MM", "code" => "18", "name" => "Nay Pyi Taw",]);

        // Namibia
        State::create(["country_code" => "NA", "code" => "ER", "name" => "Erongo",]);
        State::create(["country_code" => "NA", "code" => "HA", "name" => "Hardap",]);
        State::create(["country_code" => "NA", "code" => "KA", "name" => "Karas",]);
        State::create(["country_code" => "NA", "code" => "KE", "name" => "Kavango East",]);
        State::create(["country_code" => "NA", "code" => "KW", "name" => "Kavango West",]);
        State::create(["country_code" => "NA", "code" => "KH", "name" => "Khomas",]);
        State::create(["country_code" => "NA", "code" => "KU", "name" => "Kunene",]);
        State::create(["country_code" => "NA", "code" => "OW", "name" => "Ohangwena",]);
        State::create(["country_code" => "NA", "code" => "OH", "name" => "Omaheke",]);
        State::create(["country_code" => "NA", "code" => "OS", "name" => "Omusati",]);
        State::create(["country_code" => "NA", "code" => "ON", "name" => "Oshana",]);
        State::create(["country_code" => "NA", "code" => "OT", "name" => "Oshikoto",]);
        State::create(["country_code" => "NA", "code" => "OD", "name" => "Otjozondjupa",]);
        State::create(["country_code" => "NA", "code" => "CA", "name" => "Zambezi",]);

        // Nauru
        State::create(["country_code" => "NR", "code" => "01", "name" => "Aiwo",]);
        State::create(["country_code" => "NR", "code" => "02", "name" => "Anabar",]);
        State::create(["country_code" => "NR", "code" => "03", "name" => "Anetan",]);
        State::create(["country_code" => "NR", "code" => "04", "name" => "Anibare",]);
        State::create(["country_code" => "NR", "code" => "05", "name" => "Baitsi",]);
        State::create(["country_code" => "NR", "code" => "06", "name" => "Boe",]);
        State::create(["country_code" => "NR", "code" => "07", "name" => "Buada",]);
        State::create(["country_code" => "NR", "code" => "08", "name" => "Denigomodu",]);
        State::create(["country_code" => "NR", "code" => "09", "name" => "Ewa",]);
        State::create(["country_code" => "NR", "code" => "10", "name" => "Ijuw",]);
        State::create(["country_code" => "NR", "code" => "11", "name" => "Meneng",]);
        State::create(["country_code" => "NR", "code" => "12", "name" => "Nibok",]);
        State::create(["country_code" => "NR", "code" => "13", "name" => "Uaboe",]);
        State::create(["country_code" => "NR", "code" => "14", "name" => "Yaren",]);

        // Nepal
        State::create(["country_code" => "NP", "code" => "P1", "name" => "Pradesh 1",]);
        State::create(["country_code" => "NP", "code" => "P2", "name" => "Pradesh 2",]);
        State::create(["country_code" => "NP", "code" => "P3", "name" => "Bagmati Pradesh",]);
        State::create(["country_code" => "NP", "code" => "P4", "name" => "Gandaki Pradesh",]);
        State::create(["country_code" => "NP", "code" => "P5", "name" => "Pradesh 5",]);
        State::create(["country_code" => "NP", "code" => "P6", "name" => "Karnali Pradesh",]);
        State::create(["country_code" => "NP", "code" => "P7", "name" => "Sudurpashchim Pradesh",]);

        // Netherlands
        State::create(["country_code" => "NL", "code" => "DR", "name" => "Drenthe",]);
        State::create(["country_code" => "NL", "code" => "FL", "name" => "Flevoland",]);
        State::create(["country_code" => "NL", "code" => "FR", "name" => "Fryslân (fy)",]);
        State::create(["country_code" => "NL", "code" => "GE", "name" => "Gelderland",]);
        State::create(["country_code" => "NL", "code" => "GR", "name" => "Groningen",]);
        State::create(["country_code" => "NL", "code" => "LI", "name" => "Limburg",]);
        State::create(["country_code" => "NL", "code" => "NB", "name" => "Noord-Brabant",]);
        State::create(["country_code" => "NL", "code" => "NH", "name" => "Noord-Holland",]);
        State::create(["country_code" => "NL", "code" => "OV", "name" => "Overijssel",]);
        State::create(["country_code" => "NL", "code" => "UT", "name" => "Utrecht",]);
        State::create(["country_code" => "NL", "code" => "ZE", "name" => "Zeeland",]);
        State::create(["country_code" => "NL", "code" => "ZH", "name" => "Zuid-Holland",]);

        // New Caledonia (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "NC", "code" => "NC", "name" => "New Caledonia",]);

        // New Zealand
        State::create(["country_code" => "NZ", "code" => "AUK", "name" => "Auckland",]);
        State::create(["country_code" => "NZ", "code" => "BOP", "name" => "Bay of Plenty",]);
        State::create(["country_code" => "NZ", "code" => "CAN", "name" => "Canterbury",]);
        State::create(["country_code" => "NZ", "code" => "GIS", "name" => "Gisborne",]);
        State::create(["country_code" => "NZ", "code" => "HKB", "name" => "Hawke's Bay",]);
        State::create(["country_code" => "NZ", "code" => "MBH", "name" => "Marlborough",]);
        State::create(["country_code" => "NZ", "code" => "MWT", "name" => "Manawatu-Wanganui",]);
        State::create(["country_code" => "NZ", "code" => "NSN", "name" => "Nelson",]);
        State::create(["country_code" => "NZ", "code" => "NTL", "name" => "Northland",]);
        State::create(["country_code" => "NZ", "code" => "OTA", "name" => "Otago",]);
        State::create(["country_code" => "NZ", "code" => "STL", "name" => "Southland",]);
        State::create(["country_code" => "NZ", "code" => "TAS", "name" => "Tasman",]);
        State::create(["country_code" => "NZ", "code" => "TKI", "name" => "Taranaki",]);
        State::create(["country_code" => "NZ", "code" => "WKO", "name" => "Waikato",]);
        State::create(["country_code" => "NZ", "code" => "WGN", "name" => "Wellington",]);
        State::create(["country_code" => "NZ", "code" => "WTC", "name" => "West Coast",]);
        State::create(["country_code" => "NZ", "code" => "CIT", "name" => "Chatham Islands Territory",]);

        // Nicaragua
        State::create(["country_code" => "NI", "code" => "BO", "name" => "Boaco",]);
        State::create(["country_code" => "NI", "code" => "CA", "name" => "Carazo",]);
        State::create(["country_code" => "NI", "code" => "CI", "name" => "Chinandega",]);
        State::create(["country_code" => "NI", "code" => "CO", "name" => "Chontales",]);
        State::create(["country_code" => "NI", "code" => "ES", "name" => "Estelí",]);
        State::create(["country_code" => "NI", "code" => "GR", "name" => "Granada",]);
        State::create(["country_code" => "NI", "code" => "JI", "name" => "Jinotega",]);
        State::create(["country_code" => "NI", "code" => "LE", "name" => "León",]);
        State::create(["country_code" => "NI", "code" => "MD", "name" => "Madriz",]);
        State::create(["country_code" => "NI", "code" => "MN", "name" => "Managua",]);
        State::create(["country_code" => "NI", "code" => "MS", "name" => "Masaya",]);
        State::create(["country_code" => "NI", "code" => "MT", "name" => "Matagalpa",]);
        State::create(["country_code" => "NI", "code" => "NS", "name" => "Nueva Segovia",]);
        State::create(["country_code" => "NI", "code" => "SJ", "name" => "Río San Juan",]);
        State::create(["country_code" => "NI", "code" => "RI", "name" => "Rivas",]);
        State::create(["country_code" => "NI", "code" => "AN", "name" => "Costa Caribe Norte",]);
        State::create(["country_code" => "NI", "code" => "AS", "name" => "Costa Caribe Sur",]);

        // Niger
        State::create(["country_code" => "NE", "code" => "8", "name" => "Niamey",]);
        State::create(["country_code" => "NE", "code" => "1", "name" => "Agadez",]);
        State::create(["country_code" => "NE", "code" => "2", "name" => "Diffa",]);
        State::create(["country_code" => "NE", "code" => "3", "name" => "Dosso",]);
        State::create(["country_code" => "NE", "code" => "4", "name" => "Maradi",]);
        State::create(["country_code" => "NE", "code" => "5", "name" => "Tahoua",]);
        State::create(["country_code" => "NE", "code" => "6", "name" => "Tillabéri",]);
        State::create(["country_code" => "NE", "code" => "7", "name" => "Zinder",]);

        // Nigeria
        State::create(["country_code" => "NG", "code" => "FC", "name" => "Abuja Federal Capital Territory",]);
        State::create(["country_code" => "NG", "code" => "AB", "name" => "Abia",]);
        State::create(["country_code" => "NG", "code" => "AD", "name" => "Adamawa",]);
        State::create(["country_code" => "NG", "code" => "AK", "name" => "Akwa Ibom",]);
        State::create(["country_code" => "NG", "code" => "AN", "name" => "Anambra",]);
        State::create(["country_code" => "NG", "code" => "BA", "name" => "Bauchi",]);
        State::create(["country_code" => "NG", "code" => "BY", "name" => "Bayelsa",]);
        State::create(["country_code" => "NG", "code" => "BE", "name" => "Benue",]);
        State::create(["country_code" => "NG", "code" => "BO", "name" => "Borno",]);
        State::create(["country_code" => "NG", "code" => "CR", "name" => "Cross River",]);
        State::create(["country_code" => "NG", "code" => "DE", "name" => "Delta",]);
        State::create(["country_code" => "NG", "code" => "EB", "name" => "Ebonyi",]);
        State::create(["country_code" => "NG", "code" => "ED", "name" => "Edo",]);
        State::create(["country_code" => "NG", "code" => "EK", "name" => "Ekiti",]);
        State::create(["country_code" => "NG", "code" => "EN", "name" => "Enugu",]);
        State::create(["country_code" => "NG", "code" => "GO", "name" => "Gombe",]);
        State::create(["country_code" => "NG", "code" => "IM", "name" => "Imo",]);
        State::create(["country_code" => "NG", "code" => "JI", "name" => "Jigawa",]);
        State::create(["country_code" => "NG", "code" => "KD", "name" => "Kaduna",]);
        State::create(["country_code" => "NG", "code" => "KN", "name" => "Kano",]);
        State::create(["country_code" => "NG", "code" => "KT", "name" => "Katsina",]);
        State::create(["country_code" => "NG", "code" => "KE", "name" => "Kebbi",]);
        State::create(["country_code" => "NG", "code" => "KO", "name" => "Kogi",]);
        State::create(["country_code" => "NG", "code" => "KW", "name" => "Kwara",]);
        State::create(["country_code" => "NG", "code" => "LA", "name" => "Lagos",]);
        State::create(["country_code" => "NG", "code" => "NA", "name" => "Nasarawa",]);
        State::create(["country_code" => "NG", "code" => "NI", "name" => "Niger",]);
        State::create(["country_code" => "NG", "code" => "OG", "name" => "Ogun",]);
        State::create(["country_code" => "NG", "code" => "ON", "name" => "Ondo",]);
        State::create(["country_code" => "NG", "code" => "OS", "name" => "Osun",]);
        State::create(["country_code" => "NG", "code" => "OY", "name" => "Oyo",]);
        State::create(["country_code" => "NG", "code" => "PL", "name" => "Plateau",]);
        State::create(["country_code" => "NG", "code" => "RI", "name" => "Rivers",]);
        State::create(["country_code" => "NG", "code" => "SO", "name" => "Sokoto",]);
        State::create(["country_code" => "NG", "code" => "TA", "name" => "Taraba",]);
        State::create(["country_code" => "NG", "code" => "YO", "name" => "Yobe",]);
        State::create(["country_code" => "NG", "code" => "ZA", "name" => "Zamfara",]);

        // Niue (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "NU", "code" => "NU", "name" => "Niue",]);

        // Norfolk Island (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "NF", "code" => "NF", "name" => "Norfolk Island",]);

        // Northern Mariana Islands (The Northern Mariana Islands, an outlying area of the United States)
        State::create(["country_code" => "MP", "code" => "MP", "name" => "Northern Mariana Islands",]);

        // Norway
        State::create(["country_code" => "NO", "code" => "02", "name" => "Akershus",]);
        State::create(["country_code" => "NO", "code" => "09", "name" => "Aust-Agder",]);
        State::create(["country_code" => "NO", "code" => "06", "name" => "Buskerud",]);
        State::create(["country_code" => "NO", "code" => "20", "name" => "Finnmark",]);
        State::create(["country_code" => "NO", "code" => "04", "name" => "Hedmark",]);
        State::create(["country_code" => "NO", "code" => "12", "name" => "Hordaland",]);
        State::create(["country_code" => "NO", "code" => "15", "name" => "Møre og Romsdal",]);
        State::create(["country_code" => "NO", "code" => "18", "name" => "Nordland",]);
        State::create(["country_code" => "NO", "code" => "05", "name" => "Oppland",]);
        State::create(["country_code" => "NO", "code" => "03", "name" => "Oslo",]);
        State::create(["country_code" => "NO", "code" => "11", "name" => "Rogaland",]);
        State::create(["country_code" => "NO", "code" => "14", "name" => "Sogn og Fjordane",]);
        State::create(["country_code" => "NO", "code" => "08", "name" => "Telemark",]);
        State::create(["country_code" => "NO", "code" => "19", "name" => "Troms",]);
        State::create(["country_code" => "NO", "code" => "50", "name" => "Trøndelag",]);
        State::create(["country_code" => "NO", "code" => "10", "name" => "Vest-Agder",]);
        State::create(["country_code" => "NO", "code" => "07", "name" => "Vestfold",]);
        State::create(["country_code" => "NO", "code" => "01", "name" => "Østfold",]);
        State::create(["country_code" => "NO", "code" => "22", "name" => "Jan Mayen",]);
        State::create(["country_code" => "NO", "code" => "21", "name" => "Svalbard",]);

        // Oman
        State::create(["country_code" => "OM", "code" => "DA", "name" => "Ad Dākhilīyah",]);
        State::create(["country_code" => "OM", "code" => "BS", "name" => "Shamāl al Bāţinah",]);
        State::create(["country_code" => "OM", "code" => "BJ", "name" => "Janūb al Bāţinah",]);
        State::create(["country_code" => "OM", "code" => "WU", "name" => "Al Wusţá",]);
        State::create(["country_code" => "OM", "code" => "SS", "name" => "Shamāl ash Sharqīyah",]);
        State::create(["country_code" => "OM", "code" => "SJ", "name" => "Janūb ash Sharqīyah",]);
        State::create(["country_code" => "OM", "code" => "ZA", "name" => "Az̧ Z̧āhirah",]);
        State::create(["country_code" => "OM", "code" => "BU", "name" => "Al Buraymī",]);
        State::create(["country_code" => "OM", "code" => "MA", "name" => "Masqaţ",]);
        State::create(["country_code" => "OM", "code" => "MU", "name" => "Musandam",]);
        State::create(["country_code" => "OM", "code" => "ZU", "name" => "Z̧ufār",]);

        // Pakistan
        State::create(["country_code" => "PK", "code" => "IS", "name" => "Islamabad",]);
        State::create(["country_code" => "PK", "code" => "BA", "name" => "Balochistan",]);
        State::create(["country_code" => "PK", "code" => "KP", "name" => "Khyber Pakhtunkhwa",]);
        State::create(["country_code" => "PK", "code" => "PB", "name" => "Punjab",]);
        State::create(["country_code" => "PK", "code" => "SD", "name" => "Sindh",]);
        State::create(["country_code" => "PK", "code" => "JK", "name" => "Azad Jammu and Kashmir",]);
        State::create(["country_code" => "PK", "code" => "GB", "name" => "Gilgit-Baltistan",]);

        // Palau
        State::create(["country_code" => "PW", "code" => "002", "name" => "Aimeliik",]);
        State::create(["country_code" => "PW", "code" => "004", "name" => "Airai",]);
        State::create(["country_code" => "PW", "code" => "010", "name" => "Angaur",]);
        State::create(["country_code" => "PW", "code" => "050", "name" => "Hatohobei",]);
        State::create(["country_code" => "PW", "code" => "100", "name" => "Kayangel",]);
        State::create(["country_code" => "PW", "code" => "150", "name" => "Koror",]);
        State::create(["country_code" => "PW", "code" => "212", "name" => "Melekeok",]);
        State::create(["country_code" => "PW", "code" => "214", "name" => "Ngaraard",]);
        State::create(["country_code" => "PW", "code" => "218", "name" => "Ngarchelong",]);
        State::create(["country_code" => "PW", "code" => "222", "name" => "Ngardmau",]);
        State::create(["country_code" => "PW", "code" => "224", "name" => "Ngatpang",]);
        State::create(["country_code" => "PW", "code" => "226", "name" => "Ngchesar",]);
        State::create(["country_code" => "PW", "code" => "227", "name" => "Ngeremlengui",]);
        State::create(["country_code" => "PW", "code" => "228", "name" => "Ngiwal",]);
        State::create(["country_code" => "PW", "code" => "350", "name" => "Peleliu",]);
        State::create(["country_code" => "PW", "code" => "370", "name" => "Sonsorol",]);

        // Palestine, State of
        State::create(["country_code" => "PS", "code" => "BTH", "name" => "Bethlehem",]);
        State::create(["country_code" => "PS", "code" => "DEB", "name" => "Deir El Balah",]);
        State::create(["country_code" => "PS", "code" => "GZA", "name" => "Gaza",]);
        State::create(["country_code" => "PS", "code" => "HBN", "name" => "Hebron",]);
        State::create(["country_code" => "PS", "code" => "JEN", "name" => "Jenin",]);
        State::create(["country_code" => "PS", "code" => "JRH", "name" => "Jericho and Al Aghwar",]);
        State::create(["country_code" => "PS", "code" => "JEM", "name" => "Jerusalem",]);
        State::create(["country_code" => "PS", "code" => "KYS", "name" => "Khan Yunis",]);
        State::create(["country_code" => "PS", "code" => "NBS", "name" => "Nablus",]);
        State::create(["country_code" => "PS", "code" => "NGZ", "name" => "North Gaza",]);
        State::create(["country_code" => "PS", "code" => "QQA", "name" => "Qalqilya",]);
        State::create(["country_code" => "PS", "code" => "RFH", "name" => "Rafah",]);
        State::create(["country_code" => "PS", "code" => "RBH", "name" => "Ramallah",]);
        State::create(["country_code" => "PS", "code" => "SLT", "name" => "Salfit",]);
        State::create(["country_code" => "PS", "code" => "TBS", "name" => "Tubas",]);
        State::create(["country_code" => "PS", "code" => "TKM", "name" => "Tulkarm",]);

        // Panama
        State::create(["country_code" => "PA", "code" => "1", "name" => "Bocas del Toro",]);
        State::create(["country_code" => "PA", "code" => "4", "name" => "Chiriquí",]);
        State::create(["country_code" => "PA", "code" => "2", "name" => "Coclé",]);
        State::create(["country_code" => "PA", "code" => "3", "name" => "Colón",]);
        State::create(["country_code" => "PA", "code" => "5", "name" => "Darién",]);
        State::create(["country_code" => "PA", "code" => "EM", "name" => "Emberá",]);
        State::create(["country_code" => "PA", "code" => "KY", "name" => "Guna Yala",]);
        State::create(["country_code" => "PA", "code" => "6", "name" => "Herrera",]);
        State::create(["country_code" => "PA", "code" => "7", "name" => "Los Santos",]);
        State::create(["country_code" => "PA", "code" => "NB", "name" => "Ngöbe-Buglé",]);
        State::create(["country_code" => "PA", "code" => "8", "name" => "Panamá",]);
        State::create(["country_code" => "PA", "code" => "10", "name" => "Panamá Oeste",]);
        State::create(["country_code" => "PA", "code" => "9", "name" => "Veraguas",]);

        // Papua New Guinea
        State::create(["country_code" => "PG", "code" => "NCD", "name" => "National Capital District",]);
        State::create(["country_code" => "PG", "code" => "CPM", "name" => "Central",]);
        State::create(["country_code" => "PG", "code" => "CPK", "name" => "Chimbu",]);
        State::create(["country_code" => "PG", "code" => "EHG", "name" => "Eastern Highlands",]);
        State::create(["country_code" => "PG", "code" => "EBR", "name" => "East New Britain",]);
        State::create(["country_code" => "PG", "code" => "ESW", "name" => "East Sepik",]);
        State::create(["country_code" => "PG", "code" => "EPW", "name" => "Enga",]);
        State::create(["country_code" => "PG", "code" => "GPK", "name" => "Gulf",]);
        State::create(["country_code" => "PG", "code" => "HLA", "name" => "Hela",]);
        State::create(["country_code" => "PG", "code" => "JWK", "name" => "Jiwaka",]);
        State::create(["country_code" => "PG", "code" => "MPM", "name" => "Madang",]);
        State::create(["country_code" => "PG", "code" => "MRL", "name" => "Manus",]);
        State::create(["country_code" => "PG", "code" => "MBA", "name" => "Milne Bay",]);
        State::create(["country_code" => "PG", "code" => "MPL", "name" => "Morobe",]);
        State::create(["country_code" => "PG", "code" => "NIK", "name" => "New Ireland",]);
        State::create(["country_code" => "PG", "code" => "NPP", "name" => "Northern",]);
        State::create(["country_code" => "PG", "code" => "SAN", "name" => "West Sepik",]);
        State::create(["country_code" => "PG", "code" => "SHM", "name" => "Southern Highlands",]);
        State::create(["country_code" => "PG", "code" => "WPD", "name" => "Western",]);
        State::create(["country_code" => "PG", "code" => "WHM", "name" => "Western Highlands",]);
        State::create(["country_code" => "PG", "code" => "WBK", "name" => "West New Britain",]);
        State::create(["country_code" => "PG", "code" => "NSB", "name" => "Bougainville",]);

        // Paraguay
        State::create(["country_code" => "PY", "code" => "ASU", "name" => "Asunción",]);
        State::create(["country_code" => "PY", "code" => "16", "name" => "Alto Paraguay",]);
        State::create(["country_code" => "PY", "code" => "10", "name" => "Alto Paraná",]);
        State::create(["country_code" => "PY", "code" => "13", "name" => "Amambay",]);
        State::create(["country_code" => "PY", "code" => "19", "name" => "Boquerón",]);
        State::create(["country_code" => "PY", "code" => "5", "name" => "Caaguazú",]);
        State::create(["country_code" => "PY", "code" => "6", "name" => "Caazapá",]);
        State::create(["country_code" => "PY", "code" => "14", "name" => "Canindeyú",]);
        State::create(["country_code" => "PY", "code" => "11", "name" => "Central",]);
        State::create(["country_code" => "PY", "code" => "1", "name" => "Concepción",]);
        State::create(["country_code" => "PY", "code" => "3", "name" => "Cordillera",]);
        State::create(["country_code" => "PY", "code" => "4", "name" => "Guairá",]);
        State::create(["country_code" => "PY", "code" => "7", "name" => "Itapúa",]);
        State::create(["country_code" => "PY", "code" => "8", "name" => "Misiones",]);
        State::create(["country_code" => "PY", "code" => "12", "name" => "Ñeembucú",]);
        State::create(["country_code" => "PY", "code" => "9", "name" => "Paraguarí",]);
        State::create(["country_code" => "PY", "code" => "15", "name" => "Presidente Hayes",]);
        State::create(["country_code" => "PY", "code" => "2", "name" => "San Pedro",]);

        // Peru
        State::create(["country_code" => "PE", "code" => "LMA", "name" => "Municipalidad Metropolitana de Lima",]);
        State::create(["country_code" => "PE", "code" => "AMA", "name" => "Amazonas",]);
        State::create(["country_code" => "PE", "code" => "ANC", "name" => "Ancash",]);
        State::create(["country_code" => "PE", "code" => "APU", "name" => "Apurímac",]);
        State::create(["country_code" => "PE", "code" => "ARE", "name" => "Arequipa",]);
        State::create(["country_code" => "PE", "code" => "AYA", "name" => "Ayacucho",]);
        State::create(["country_code" => "PE", "code" => "CAJ", "name" => "Cajamarca",]);
        State::create(["country_code" => "PE", "code" => "CUS", "name" => "Cusco",]);
        State::create(["country_code" => "PE", "code" => "CAL", "name" => "El Callao",]);
        State::create(["country_code" => "PE", "code" => "HUV", "name" => "Huancavelica",]);
        State::create(["country_code" => "PE", "code" => "HUC", "name" => "Huánuco",]);
        State::create(["country_code" => "PE", "code" => "ICA", "name" => "Ica",]);
        State::create(["country_code" => "PE", "code" => "JUN", "name" => "Junín",]);
        State::create(["country_code" => "PE", "code" => "LAL", "name" => "La Libertad",]);
        State::create(["country_code" => "PE", "code" => "LAM", "name" => "Lambayeque",]);
        State::create(["country_code" => "PE", "code" => "LIM", "name" => "Lima",]);
        State::create(["country_code" => "PE", "code" => "LOR", "name" => "Loreto",]);
        State::create(["country_code" => "PE", "code" => "MDD", "name" => "Madre de Dios",]);
        State::create(["country_code" => "PE", "code" => "MOQ", "name" => "Moquegua",]);
        State::create(["country_code" => "PE", "code" => "PAS", "name" => "Pasco",]);
        State::create(["country_code" => "PE", "code" => "PIU", "name" => "Piura",]);
        State::create(["country_code" => "PE", "code" => "PUN", "name" => "Puno",]);
        State::create(["country_code" => "PE", "code" => "SAM", "name" => "San Martín",]);
        State::create(["country_code" => "PE", "code" => "TAC", "name" => "Tacna",]);
        State::create(["country_code" => "PE", "code" => "TUM", "name" => "Tumbes",]);
        State::create(["country_code" => "PE", "code" => "UCA", "name" => "Ucayali",]);

        // Philippines
        State::create(["country_code" => "PH", "code" => "ABR", "name" => "Abra",]);
        State::create(["country_code" => "PH", "code" => "AGN", "name" => "Agusan del Norte",]);
        State::create(["country_code" => "PH", "code" => "AGS", "name" => "Agusan del Sur",]);
        State::create(["country_code" => "PH", "code" => "AKL", "name" => "Aklan",]);
        State::create(["country_code" => "PH", "code" => "ALB", "name" => "Albay",]);
        State::create(["country_code" => "PH", "code" => "ANT", "name" => "Antique",]);
        State::create(["country_code" => "PH", "code" => "APA", "name" => "Apayao",]);
        State::create(["country_code" => "PH", "code" => "AUR", "name" => "Aurora",]);
        State::create(["country_code" => "PH", "code" => "BAS", "name" => "Basilan",]);
        State::create(["country_code" => "PH", "code" => "BAN", "name" => "Bataan",]);
        State::create(["country_code" => "PH", "code" => "BTN", "name" => "Batanes",]);
        State::create(["country_code" => "PH", "code" => "BTG", "name" => "Batangas",]);
        State::create(["country_code" => "PH", "code" => "BEN", "name" => "Benguet",]);
        State::create(["country_code" => "PH", "code" => "BIL", "name" => "Biliran",]);
        State::create(["country_code" => "PH", "code" => "BOH", "name" => "Bohol",]);
        State::create(["country_code" => "PH", "code" => "BUK", "name" => "Bukidnon",]);
        State::create(["country_code" => "PH", "code" => "BUL", "name" => "Bulacan",]);
        State::create(["country_code" => "PH", "code" => "CAG", "name" => "Cagayan",]);
        State::create(["country_code" => "PH", "code" => "CAN", "name" => "Camarines Norte",]);
        State::create(["country_code" => "PH", "code" => "CAS", "name" => "Camarines Sur",]);
        State::create(["country_code" => "PH", "code" => "CAM", "name" => "Camiguin",]);
        State::create(["country_code" => "PH", "code" => "CAP", "name" => "Capiz",]);
        State::create(["country_code" => "PH", "code" => "CAT", "name" => "Catanduanes",]);
        State::create(["country_code" => "PH", "code" => "CAV", "name" => "Cavite",]);
        State::create(["country_code" => "PH", "code" => "CEB", "name" => "Cebu",]);
        State::create(["country_code" => "PH", "code" => "COM", "name" => "Compostela Valley",]);
        State::create(["country_code" => "PH", "code" => "NCO", "name" => "Cotabato",]);
        State::create(["country_code" => "PH", "code" => "DAV", "name" => "Davao del Norte",]);
        State::create(["country_code" => "PH", "code" => "DAS", "name" => "Davao del Sur",]);
        State::create(["country_code" => "PH", "code" => "DVO", "name" => "Davao Occidental",]);
        State::create(["country_code" => "PH", "code" => "DAO", "name" => "Davao Oriental",]);
        State::create(["country_code" => "PH", "code" => "DIN", "name" => "Dinagat Islands",]);
        State::create(["country_code" => "PH", "code" => "EAS", "name" => "Eastern Samar",]);
        State::create(["country_code" => "PH", "code" => "GUI", "name" => "Guimaras",]);
        State::create(["country_code" => "PH", "code" => "IFU", "name" => "Ifugao",]);
        State::create(["country_code" => "PH", "code" => "ILN", "name" => "Ilocos Norte",]);
        State::create(["country_code" => "PH", "code" => "ILS", "name" => "Ilocos Sur",]);
        State::create(["country_code" => "PH", "code" => "ILI", "name" => "Iloilo",]);
        State::create(["country_code" => "PH", "code" => "ISA", "name" => "Isabela",]);
        State::create(["country_code" => "PH", "code" => "KAL", "name" => "Kalinga",]);
        State::create(["country_code" => "PH", "code" => "LUN", "name" => "La Union",]);
        State::create(["country_code" => "PH", "code" => "LAG", "name" => "Laguna",]);
        State::create(["country_code" => "PH", "code" => "LAN", "name" => "Lanao del Norte",]);
        State::create(["country_code" => "PH", "code" => "LAS", "name" => "Lanao del Sur",]);
        State::create(["country_code" => "PH", "code" => "LEY", "name" => "Leyte",]);
        State::create(["country_code" => "PH", "code" => "MAG", "name" => "Maguindanao",]);
        State::create(["country_code" => "PH", "code" => "MAD", "name" => "Marinduque",]);
        State::create(["country_code" => "PH", "code" => "MAS", "name" => "Masbate",]);
        State::create(["country_code" => "PH", "code" => "MDC", "name" => "Mindoro Occidental",]);
        State::create(["country_code" => "PH", "code" => "MDR", "name" => "Mindoro Oriental",]);
        State::create(["country_code" => "PH", "code" => "MSC", "name" => "Misamis Occidental",]);
        State::create(["country_code" => "PH", "code" => "MSR", "name" => "Misamis Oriental",]);
        State::create(["country_code" => "PH", "code" => "MOU", "name" => "Mountain Province",]);
        State::create(["country_code" => "PH", "code" => "NEC", "name" => "Negros Occidental",]);
        State::create(["country_code" => "PH", "code" => "NER", "name" => "Negros Oriental",]);
        State::create(["country_code" => "PH", "code" => "NSA", "name" => "Northern Samar",]);
        State::create(["country_code" => "PH", "code" => "NUE", "name" => "Nueva Ecija",]);
        State::create(["country_code" => "PH", "code" => "NUV", "name" => "Nueva Vizcaya",]);
        State::create(["country_code" => "PH", "code" => "PLW", "name" => "Palawan",]);
        State::create(["country_code" => "PH", "code" => "PAM", "name" => "Pampanga",]);
        State::create(["country_code" => "PH", "code" => "PAN", "name" => "Pangasinan",]);
        State::create(["country_code" => "PH", "code" => "QUE", "name" => "Quezon",]);
        State::create(["country_code" => "PH", "code" => "QUI", "name" => "Quirino",]);
        State::create(["country_code" => "PH", "code" => "RIZ", "name" => "Rizal",]);
        State::create(["country_code" => "PH", "code" => "ROM", "name" => "Romblon",]);
        State::create(["country_code" => "PH", "code" => "WSA", "name" => "Samar",]);
        State::create(["country_code" => "PH", "code" => "SAR", "name" => "Sarangani",]);
        State::create(["country_code" => "PH", "code" => "SIG", "name" => "Siquijor",]);
        State::create(["country_code" => "PH", "code" => "SOR", "name" => "Sorsogon",]);
        State::create(["country_code" => "PH", "code" => "SCO", "name" => "South Cotabato",]);
        State::create(["country_code" => "PH", "code" => "SLE", "name" => "Southern Leyte",]);
        State::create(["country_code" => "PH", "code" => "SUK", "name" => "Sultan Kudarat",]);
        State::create(["country_code" => "PH", "code" => "SLU", "name" => "Sulu",]);
        State::create(["country_code" => "PH", "code" => "SUN", "name" => "Surigao del Norte",]);
        State::create(["country_code" => "PH", "code" => "SUR", "name" => "Surigao del Sur",]);
        State::create(["country_code" => "PH", "code" => "TAR", "name" => "Tarlac",]);
        State::create(["country_code" => "PH", "code" => "TAW", "name" => "Tawi-Tawi",]);
        State::create(["country_code" => "PH", "code" => "ZMB", "name" => "Zambales",]);
        State::create(["country_code" => "PH", "code" => "ZAN", "name" => "Zamboanga del Norte",]);
        State::create(["country_code" => "PH", "code" => "ZAS", "name" => "Zamboanga del Sur",]);
        State::create(["country_code" => "PH", "code" => "ZSI", "name" => "Zamboanga Sibugay",]);

        // Pitcairn (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "PN", "code" => "PN", "name" => "Pitcairn",]);

        // Poland
        State::create(["country_code" => "PL", "code" => "02", "name" => "Dolnośląskie",]);
        State::create(["country_code" => "PL", "code" => "04", "name" => "Kujawsko-pomorskie",]);
        State::create(["country_code" => "PL", "code" => "06", "name" => "Lubelskie",]);
        State::create(["country_code" => "PL", "code" => "08", "name" => "Lubuskie",]);
        State::create(["country_code" => "PL", "code" => "10", "name" => "Łódzkie",]);
        State::create(["country_code" => "PL", "code" => "12", "name" => "Małopolskie",]);
        State::create(["country_code" => "PL", "code" => "14", "name" => "Mazowieckie",]);
        State::create(["country_code" => "PL", "code" => "16", "name" => "Opolskie",]);
        State::create(["country_code" => "PL", "code" => "18", "name" => "Podkarpackie",]);
        State::create(["country_code" => "PL", "code" => "20", "name" => "Podlaskie",]);
        State::create(["country_code" => "PL", "code" => "22", "name" => "Pomorskie",]);
        State::create(["country_code" => "PL", "code" => "24", "name" => "Śląskie",]);
        State::create(["country_code" => "PL", "code" => "26", "name" => "Świętokrzyskie",]);
        State::create(["country_code" => "PL", "code" => "28", "name" => "Warmińsko-mazurskie",]);
        State::create(["country_code" => "PL", "code" => "30", "name" => "Wielkopolskie",]);
        State::create(["country_code" => "PL", "code" => "32", "name" => "Zachodniopomorskie",]);

        // Portugal
        State::create(["country_code" => "PT", "code" => "01", "name" => "Aveiro",]);
        State::create(["country_code" => "PT", "code" => "02", "name" => "Beja",]);
        State::create(["country_code" => "PT", "code" => "03", "name" => "Braga",]);
        State::create(["country_code" => "PT", "code" => "04", "name" => "Bragança",]);
        State::create(["country_code" => "PT", "code" => "05", "name" => "Castelo Branco",]);
        State::create(["country_code" => "PT", "code" => "06", "name" => "Coimbra",]);
        State::create(["country_code" => "PT", "code" => "07", "name" => "Évora",]);
        State::create(["country_code" => "PT", "code" => "08", "name" => "Faro",]);
        State::create(["country_code" => "PT", "code" => "09", "name" => "Guarda",]);
        State::create(["country_code" => "PT", "code" => "10", "name" => "Leiria",]);
        State::create(["country_code" => "PT", "code" => "11", "name" => "Lisboa",]);
        State::create(["country_code" => "PT", "code" => "12", "name" => "Portalegre",]);
        State::create(["country_code" => "PT", "code" => "13", "name" => "Porto",]);
        State::create(["country_code" => "PT", "code" => "14", "name" => "Santarém",]);
        State::create(["country_code" => "PT", "code" => "15", "name" => "Setúbal",]);
        State::create(["country_code" => "PT", "code" => "16", "name" => "Viana do Castelo",]);
        State::create(["country_code" => "PT", "code" => "17", "name" => "Vila Real",]);
        State::create(["country_code" => "PT", "code" => "18", "name" => "Viseu",]);
        State::create(["country_code" => "PT", "code" => "20", "name" => "Região Autónoma dos Açores",]);
        State::create(["country_code" => "PT", "code" => "30", "name" => "Região Autónoma da Madeira",]);

        // Puerto Rico (Puerto Rico, an outlying area of the United States)
        State::create(["country_code" => "PR", "code" => "PR", "name" => "Puerto Rico",]);

        // Qatar
        State::create(["country_code" => "QA", "code" => "DA", "name" => "Ad Dawḩah",]);
        State::create(["country_code" => "QA", "code" => "KH", "name" => "Al Khawr wa adh Dhakhīrah",]);
        State::create(["country_code" => "QA", "code" => "WA", "name" => "Al Wakrah",]);
        State::create(["country_code" => "QA", "code" => "RA", "name" => "Ar Rayyān",]);
        State::create(["country_code" => "QA", "code" => "MS", "name" => "Ash Shamāl",]);
        State::create(["country_code" => "QA", "code" => "SH", "name" => "Ash Shīḩānīyah",]);
        State::create(["country_code" => "QA", "code" => "ZA", "name" => "Az̧ Z̧a‘āyin",]);
        State::create(["country_code" => "QA", "code" => "US", "name" => "Umm Şalāl",]);

        // Réunion (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "RE", "code" => "RE", "name" => "Réunion",]);

        // Romania
        State::create(["country_code" => "RO", "code" => "AB", "name" => "Alba",]);
        State::create(["country_code" => "RO", "code" => "AR", "name" => "Arad",]);
        State::create(["country_code" => "RO", "code" => "AG", "name" => "Argeș",]);
        State::create(["country_code" => "RO", "code" => "BC", "name" => "Bacău",]);
        State::create(["country_code" => "RO", "code" => "BH", "name" => "Bihor",]);
        State::create(["country_code" => "RO", "code" => "BN", "name" => "Bistrița-Năsăud",]);
        State::create(["country_code" => "RO", "code" => "BT", "name" => "Botoșani",]);
        State::create(["country_code" => "RO", "code" => "BV", "name" => "Brașov",]);
        State::create(["country_code" => "RO", "code" => "BR", "name" => "Brăila",]);
        State::create(["country_code" => "RO", "code" => "BZ", "name" => "Buzău",]);
        State::create(["country_code" => "RO", "code" => "CS", "name" => "Caraș-Severin",]);
        State::create(["country_code" => "RO", "code" => "CL", "name" => "Călărași",]);
        State::create(["country_code" => "RO", "code" => "CJ", "name" => "Cluj",]);
        State::create(["country_code" => "RO", "code" => "CT", "name" => "Constanța",]);
        State::create(["country_code" => "RO", "code" => "CV", "name" => "Covasna",]);
        State::create(["country_code" => "RO", "code" => "DB", "name" => "Dâmbovița",]);
        State::create(["country_code" => "RO", "code" => "DJ", "name" => "Dolj",]);
        State::create(["country_code" => "RO", "code" => "GL", "name" => "Galați",]);
        State::create(["country_code" => "RO", "code" => "GR", "name" => "Giurgiu",]);
        State::create(["country_code" => "RO", "code" => "GJ", "name" => "Gorj",]);
        State::create(["country_code" => "RO", "code" => "HR", "name" => "Harghita",]);
        State::create(["country_code" => "RO", "code" => "HD", "name" => "Hunedoara",]);
        State::create(["country_code" => "RO", "code" => "IL", "name" => "Ialomița",]);
        State::create(["country_code" => "RO", "code" => "IS", "name" => "Iași",]);
        State::create(["country_code" => "RO", "code" => "IF", "name" => "Ilfov",]);
        State::create(["country_code" => "RO", "code" => "MM", "name" => "Maramureș",]);
        State::create(["country_code" => "RO", "code" => "MH", "name" => "Mehedinți",]);
        State::create(["country_code" => "RO", "code" => "MS", "name" => "Mureș",]);
        State::create(["country_code" => "RO", "code" => "NT", "name" => "Neamț",]);
        State::create(["country_code" => "RO", "code" => "OT", "name" => "Olt",]);
        State::create(["country_code" => "RO", "code" => "PH", "name" => "Prahova",]);
        State::create(["country_code" => "RO", "code" => "SM", "name" => "Satu Mare",]);
        State::create(["country_code" => "RO", "code" => "SJ", "name" => "Sălaj",]);
        State::create(["country_code" => "RO", "code" => "SB", "name" => "Sibiu",]);
        State::create(["country_code" => "RO", "code" => "SV", "name" => "Suceava",]);
        State::create(["country_code" => "RO", "code" => "TR", "name" => "Teleorman",]);
        State::create(["country_code" => "RO", "code" => "TM", "name" => "Timiș",]);
        State::create(["country_code" => "RO", "code" => "TL", "name" => "Tulcea",]);
        State::create(["country_code" => "RO", "code" => "VS", "name" => "Vaslui",]);
        State::create(["country_code" => "RO", "code" => "VL", "name" => "Vâlcea",]);
        State::create(["country_code" => "RO", "code" => "VN", "name" => "Vrancea",]);
        State::create(["country_code" => "RO", "code" => "B", "name" => "București",]);

        // Russian Federation
        State::create(["country_code" => "RU", "code" => "AD", "name" => "Adygeya, Respublika",]);
        State::create(["country_code" => "RU", "code" => "AL", "name" => "Altay, Respublika",]);
        State::create(["country_code" => "RU", "code" => "BA", "name" => "Bashkortostan, Respublika",]);
        State::create(["country_code" => "RU", "code" => "BU", "name" => "Buryatiya, Respublika",]);
        State::create(["country_code" => "RU", "code" => "CE", "name" => "Chechenskaya Respublika",]);
        State::create(["country_code" => "RU", "code" => "CU", "name" => "Chuvashskaya Respublika",]);
        State::create(["country_code" => "RU", "code" => "DA", "name" => "Dagestan, Respublika",]);
        State::create(["country_code" => "RU", "code" => "IN", "name" => "Ingushetiya, Respublika",]);
        State::create(["country_code" => "RU", "code" => "KB", "name" => "Kabardino-Balkarskaya Respublika",]);
        State::create(["country_code" => "RU", "code" => "KL", "name" => "Kalmykiya, Respublika",]);
        State::create(["country_code" => "RU", "code" => "KC", "name" => "Karachayevo-Cherkesskaya Respublika",]);
        State::create(["country_code" => "RU", "code" => "KR", "name" => "Kareliya, Respublika",]);
        State::create(["country_code" => "RU", "code" => "KK", "name" => "Khakasiya, Respublika",]);
        State::create(["country_code" => "RU", "code" => "KO", "name" => "Komi, Respublika",]);
        State::create(["country_code" => "RU", "code" => "ME", "name" => "Mariy El, Respublika",]);
        State::create(["country_code" => "RU", "code" => "MO", "name" => "Mordoviya, Respublika",]);
        State::create(["country_code" => "RU", "code" => "SA", "name" => "Saha, Respublika",]);
        State::create(["country_code" => "RU", "code" => "SE", "name" => "Severnaya Osetiya, Respublika",]);
        State::create(["country_code" => "RU", "code" => "TA", "name" => "Tatarstan, Respublika",]);
        State::create(["country_code" => "RU", "code" => "TY", "name" => "Tyva, Respublika",]);
        State::create(["country_code" => "RU", "code" => "UD", "name" => "Udmurtskaya Respublika",]);
        State::create(["country_code" => "RU", "code" => "ALT", "name" => "Altayskiy kray",]);
        State::create(["country_code" => "RU", "code" => "KAM", "name" => "Kamchatskiy kray",]);
        State::create(["country_code" => "RU", "code" => "KHA", "name" => "Khabarovskiy kray",]);
        State::create(["country_code" => "RU", "code" => "KDA", "name" => "Krasnodarskiy kray",]);
        State::create(["country_code" => "RU", "code" => "KYA", "name" => "Krasnoyarskiy kray",]);
        State::create(["country_code" => "RU", "code" => "PER", "name" => "Permskiy kray",]);
        State::create(["country_code" => "RU", "code" => "PRI", "name" => "Primorskiy kray",]);
        State::create(["country_code" => "RU", "code" => "STA", "name" => "Stavropol'skiy kray",]);
        State::create(["country_code" => "RU", "code" => "ZAB", "name" => "Zabaykal'skiy kray",]);
        State::create(["country_code" => "RU", "code" => "AMU", "name" => "Amurskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "ARK", "name" => "Arkhangel'skaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "AST", "name" => "Astrakhanskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "BEL", "name" => "Belgorodskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "BRY", "name" => "Bryanskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "CHE", "name" => "Chelyabinskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "IRK", "name" => "Irkutskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "IVA", "name" => "Ivanovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "KGD", "name" => "Kaliningradskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "KLU", "name" => "Kaluzhskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "KEM", "name" => "Kemerovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "KIR", "name" => "Kirovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "KOS", "name" => "Kostromskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "KGN", "name" => "Kurganskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "KRS", "name" => "Kurskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "LEN", "name" => "Leningradskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "LIP", "name" => "Lipetskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "MAG", "name" => "Magadanskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "MOS", "name" => "Moskovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "MUR", "name" => "Murmanskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "NIZ", "name" => "Nizhegorodskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "NGR", "name" => "Novgorodskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "NVS", "name" => "Novosibirskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "OMS", "name" => "Omskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "ORE", "name" => "Orenburgskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "ORL", "name" => "Orlovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "PNZ", "name" => "Penzenskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "PSK", "name" => "Pskovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "ROS", "name" => "Rostovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "RYA", "name" => "Ryazanskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "SAK", "name" => "Sakhalinskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "SAM", "name" => "Samarskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "SAR", "name" => "Saratovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "SMO", "name" => "Smolenskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "SVE", "name" => "Sverdlovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "TAM", "name" => "Tambovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "TOM", "name" => "Tomskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "TUL", "name" => "Tul'skaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "TVE", "name" => "Tverskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "TYU", "name" => "Tyumenskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "ULY", "name" => "Ul'yanovskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "VLA", "name" => "Vladimirskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "VGG", "name" => "Volgogradskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "VLG", "name" => "Vologodskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "VOR", "name" => "Voronezhskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "YAR", "name" => "Yaroslavskaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "MOW", "name" => "Moskva",]);
        State::create(["country_code" => "RU", "code" => "SPE", "name" => "Sankt-Peterburg",]);
        State::create(["country_code" => "RU", "code" => "YEV", "name" => "Yevreyskaya avtonomnaya oblast'",]);
        State::create(["country_code" => "RU", "code" => "CHU", "name" => "Chukotskiy avtonomnyy okrug",]);
        State::create(["country_code" => "RU", "code" => "KHM", "name" => "Khanty-Mansiyskiy avtonomnyy okrug",]);
        State::create(["country_code" => "RU", "code" => "NEN", "name" => "Nenetskiy avtonomnyy okrug",]);
        State::create(["country_code" => "RU", "code" => "YAN", "name" => "Yamalo-Nenetskiy avtonomnyy okrug",]);

        // Rwanda
        State::create(["country_code" => "RW", "code" => "01", "name" => "City of Kigali",]);
        State::create(["country_code" => "RW", "code" => "02", "name" => "Eastern",]);
        State::create(["country_code" => "RW", "code" => "03", "name" => "Northern",]);
        State::create(["country_code" => "RW", "code" => "04", "name" => "Western",]);
        State::create(["country_code" => "RW", "code" => "05", "name" => "Southern",]);

        // Saint Barthélemy (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "BL", "code" => "BL", "name" => "Saint Barthélemy",]);

        // Saint Helena, Ascension and Tristan da Cunha
        State::create(["country_code" => "SH", "code" => "AC", "name" => "Ascension",]);
        State::create(["country_code" => "SH", "code" => "HL", "name" => "Saint Helena",]);
        State::create(["country_code" => "SH", "code" => "TA", "name" => "Tristan da Cunha",]);

        // Saint Kitts and Nevis
        State::create(["country_code" => "KN", "code" => "01", "name" => "Christ Church Nichola Town",]);
        State::create(["country_code" => "KN", "code" => "02", "name" => "Saint Anne Sandy Point",]);
        State::create(["country_code" => "KN", "code" => "03", "name" => "Saint George Basseterre",]);
        State::create(["country_code" => "KN", "code" => "04", "name" => "Saint George Gingerland",]);
        State::create(["country_code" => "KN", "code" => "05", "name" => "Saint James Windward",]);
        State::create(["country_code" => "KN", "code" => "06", "name" => "Saint John Capisterre",]);
        State::create(["country_code" => "KN", "code" => "07", "name" => "Saint John Figtree",]);
        State::create(["country_code" => "KN", "code" => "08", "name" => "Saint Mary Cayon",]);
        State::create(["country_code" => "KN", "code" => "09", "name" => "Saint Paul Capisterre",]);
        State::create(["country_code" => "KN", "code" => "10", "name" => "Saint Paul Charlestown",]);
        State::create(["country_code" => "KN", "code" => "11", "name" => "Saint Peter Basseterre",]);
        State::create(["country_code" => "KN", "code" => "12", "name" => "Saint Thomas Lowland",]);
        State::create(["country_code" => "KN", "code" => "13", "name" => "Saint Thomas Middle Island",]);
        State::create(["country_code" => "KN", "code" => "15", "name" => "Trinity Palmetto Point",]);

        // Saint Lucia
        State::create(["country_code" => "LC", "code" => "01", "name" => "Anse la Raye",]);
        State::create(["country_code" => "LC", "code" => "12", "name" => "Canaries",]);
        State::create(["country_code" => "LC", "code" => "02", "name" => "Castries",]);
        State::create(["country_code" => "LC", "code" => "03", "name" => "Choiseul",]);
        State::create(["country_code" => "LC", "code" => "05", "name" => "Dennery",]);
        State::create(["country_code" => "LC", "code" => "06", "name" => "Gros Islet",]);
        State::create(["country_code" => "LC", "code" => "07", "name" => "Laborie",]);
        State::create(["country_code" => "LC", "code" => "08", "name" => "Micoud",]);
        State::create(["country_code" => "LC", "code" => "10", "name" => "Soufrière",]);
        State::create(["country_code" => "LC", "code" => "11", "name" => "Vieux Fort",]);

        // Saint Martin (French part) (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "MF", "code" => "MF", "name" => "Saint Martin (French part)",]);

        // Saint Pierre and Miquelon (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "PM", "code" => "PM", "name" => "Saint Pierre and Miquelon",]);

        // Saint Vincent and the Grenadines
        State::create(["country_code" => "VC", "code" => "01", "name" => "Charlotte",]);
        State::create(["country_code" => "VC", "code" => "06", "name" => "Grenadines",]);
        State::create(["country_code" => "VC", "code" => "02", "name" => "Saint Andrew",]);
        State::create(["country_code" => "VC", "code" => "03", "name" => "Saint David",]);
        State::create(["country_code" => "VC", "code" => "04", "name" => "Saint George",]);
        State::create(["country_code" => "VC", "code" => "05", "name" => "Saint Patrick",]);

        // Samoa
        State::create(["country_code" => "WS", "code" => "AA", "name" => "A'ana",]);
        State::create(["country_code" => "WS", "code" => "AL", "name" => "Aiga-i-le-Tai",]);
        State::create(["country_code" => "WS", "code" => "AT", "name" => "Atua",]);
        State::create(["country_code" => "WS", "code" => "FA", "name" => "Fa'asaleleaga",]);
        State::create(["country_code" => "WS", "code" => "GE", "name" => "Gaga'emauga",]);
        State::create(["country_code" => "WS", "code" => "GI", "name" => "Gagaifomauga",]);
        State::create(["country_code" => "WS", "code" => "PA", "name" => "Palauli",]);
        State::create(["country_code" => "WS", "code" => "SA", "name" => "Satupa'itea",]);
        State::create(["country_code" => "WS", "code" => "TU", "name" => "Tuamasaga",]);
        State::create(["country_code" => "WS", "code" => "VF", "name" => "Va'a-o-Fonoti",]);
        State::create(["country_code" => "WS", "code" => "VS", "name" => "Vaisigano",]);

        // San Marino
        State::create(["country_code" => "SM", "code" => "01", "name" => "Acquaviva",]);
        State::create(["country_code" => "SM", "code" => "06", "name" => "Borgo Maggiore",]);
        State::create(["country_code" => "SM", "code" => "02", "name" => "Chiesanuova",]);
        State::create(["country_code" => "SM", "code" => "03", "name" => "Domagnano",]);
        State::create(["country_code" => "SM", "code" => "04", "name" => "Faetano",]);
        State::create(["country_code" => "SM", "code" => "05", "name" => "Fiorentino",]);
        State::create(["country_code" => "SM", "code" => "08", "name" => "Montegiardino",]);
        State::create(["country_code" => "SM", "code" => "07", "name" => "San Marino",]);
        State::create(["country_code" => "SM", "code" => "09", "name" => "Serravalle",]);

        // Sao Tome and Principe
        State::create(["country_code" => "ST", "code" => "P", "name" => "Príncipe",]);
        State::create(["country_code" => "ST", "code" => "S", "name" => "São Tomé",]);

        // Saudi Arabia
        State::create(["country_code" => "SA", "code" => "11", "name" => "Al Bāḩah",]);
        State::create(["country_code" => "SA", "code" => "08", "name" => "Al Ḩudūd ash Shamālīyah",]);
        State::create(["country_code" => "SA", "code" => "12", "name" => "Al Jawf",]);
        State::create(["country_code" => "SA", "code" => "03", "name" => "Al Madīnah al Munawwarah",]);
        State::create(["country_code" => "SA", "code" => "05", "name" => "Al Qaşīm",]);
        State::create(["country_code" => "SA", "code" => "01", "name" => "Ar Riyāḑ",]);
        State::create(["country_code" => "SA", "code" => "04", "name" => "Ash Sharqīyah",]);
        State::create(["country_code" => "SA", "code" => "14", "name" => "'Asīr",]);
        State::create(["country_code" => "SA", "code" => "06", "name" => "Ḩā'il",]);
        State::create(["country_code" => "SA", "code" => "09", "name" => "Jāzān",]);
        State::create(["country_code" => "SA", "code" => "02", "name" => "Makkah al Mukarramah",]);
        State::create(["country_code" => "SA", "code" => "10", "name" => "Najrān",]);
        State::create(["country_code" => "SA", "code" => "07", "name" => "Tabūk",]);

        // Senegal
        State::create(["country_code" => "SN", "code" => "DK", "name" => "Dakar",]);
        State::create(["country_code" => "SN", "code" => "DB", "name" => "Diourbel",]);
        State::create(["country_code" => "SN", "code" => "FK", "name" => "Fatick",]);
        State::create(["country_code" => "SN", "code" => "KA", "name" => "Kaffrine",]);
        State::create(["country_code" => "SN", "code" => "KL", "name" => "Kaolack",]);
        State::create(["country_code" => "SN", "code" => "KE", "name" => "Kédougou",]);
        State::create(["country_code" => "SN", "code" => "KD", "name" => "Kolda",]);
        State::create(["country_code" => "SN", "code" => "LG", "name" => "Louga",]);
        State::create(["country_code" => "SN", "code" => "MT", "name" => "Matam",]);
        State::create(["country_code" => "SN", "code" => "SL", "name" => "Saint-Louis",]);
        State::create(["country_code" => "SN", "code" => "SE", "name" => "Sédhiou",]);
        State::create(["country_code" => "SN", "code" => "TC", "name" => "Tambacounda",]);
        State::create(["country_code" => "SN", "code" => "TH", "name" => "Thiès",]);
        State::create(["country_code" => "SN", "code" => "ZG", "name" => "Ziguinchor",]);

        // Serbia
        State::create(["country_code" => "RS", "code" => "00", "name" => "Beograd",]);
        State::create(["country_code" => "RS", "code" => "14", "name" => "Borski okrug",]);
        State::create(["country_code" => "RS", "code" => "11", "name" => "Braničevski okrug",]);
        State::create(["country_code" => "RS", "code" => "23", "name" => "Jablanički okrug",]);
        State::create(["country_code" => "RS", "code" => "06", "name" => "Južnobački okrug",]);
        State::create(["country_code" => "RS", "code" => "04", "name" => "Južnobanatski okrug",]);
        State::create(["country_code" => "RS", "code" => "09", "name" => "Kolubarski okrug",]);
        State::create(["country_code" => "RS", "code" => "25", "name" => "Kosovski okrug",]);
        State::create(["country_code" => "RS", "code" => "28", "name" => "Kosovsko-Mitrovački okrug",]);
        State::create(["country_code" => "RS", "code" => "29", "name" => "Kosovsko-Pomoravski okrug",]);
        State::create(["country_code" => "RS", "code" => "08", "name" => "Mačvanski okrug",]);
        State::create(["country_code" => "RS", "code" => "17", "name" => "Moravički okrug",]);
        State::create(["country_code" => "RS", "code" => "20", "name" => "Nišavski okrug",]);
        State::create(["country_code" => "RS", "code" => "24", "name" => "Pčinjski okrug",]);
        State::create(["country_code" => "RS", "code" => "26", "name" => "Pećki okrug",]);
        State::create(["country_code" => "RS", "code" => "22", "name" => "Pirotski okrug",]);
        State::create(["country_code" => "RS", "code" => "10", "name" => "Podunavski okrug",]);
        State::create(["country_code" => "RS", "code" => "13", "name" => "Pomoravski okrug",]);
        State::create(["country_code" => "RS", "code" => "27", "name" => "Prizrenski okrug",]);
        State::create(["country_code" => "RS", "code" => "19", "name" => "Rasinski okrug",]);
        State::create(["country_code" => "RS", "code" => "18", "name" => "Raški okrug",]);
        State::create(["country_code" => "RS", "code" => "01", "name" => "Severnobački okrug",]);
        State::create(["country_code" => "RS", "code" => "03", "name" => "Severnobanatski okrug",]);
        State::create(["country_code" => "RS", "code" => "02", "name" => "Srednjebanatski okrug",]);
        State::create(["country_code" => "RS", "code" => "07", "name" => "Sremski okrug",]);
        State::create(["country_code" => "RS", "code" => "12", "name" => "Šumadijski okrug",]);
        State::create(["country_code" => "RS", "code" => "21", "name" => "Toplički okrug",]);
        State::create(["country_code" => "RS", "code" => "15", "name" => "Zaječarski okrug",]);
        State::create(["country_code" => "RS", "code" => "05", "name" => "Zapadnobački okrug",]);
        State::create(["country_code" => "RS", "code" => "16", "name" => "Zlatiborski okrug",]);

        // Seychelles
        State::create(["country_code" => "SC", "code" => "01", "name" => "Anse aux Pins",]);
        State::create(["country_code" => "SC", "code" => "02", "name" => "Anse Boileau",]);
        State::create(["country_code" => "SC", "code" => "03", "name" => "Anse Etoile",]);
        State::create(["country_code" => "SC", "code" => "05", "name" => "Anse Royale",]);
        State::create(["country_code" => "SC", "code" => "04", "name" => "Au Cap",]);
        State::create(["country_code" => "SC", "code" => "06", "name" => "Baie Lazare",]);
        State::create(["country_code" => "SC", "code" => "07", "name" => "Baie Sainte Anne",]);
        State::create(["country_code" => "SC", "code" => "08", "name" => "Beau Vallon",]);
        State::create(["country_code" => "SC", "code" => "09", "name" => "Bel Air",]);
        State::create(["country_code" => "SC", "code" => "10", "name" => "Bel Ombre",]);
        State::create(["country_code" => "SC", "code" => "11", "name" => "Cascade",]);
        State::create(["country_code" => "SC", "code" => "12", "name" => "Glacis",]);
        State::create(["country_code" => "SC", "code" => "13", "name" => "Grand Anse Mahe",]);
        State::create(["country_code" => "SC", "code" => "14", "name" => "Grand Anse Praslin",]);
        State::create(["country_code" => "SC", "code" => "15", "name" => "La Digue",]);
        State::create(["country_code" => "SC", "code" => "16", "name" => "English River",]);
        State::create(["country_code" => "SC", "code" => "24", "name" => "Les Mamelles",]);
        State::create(["country_code" => "SC", "code" => "17", "name" => "Mont Buxton",]);
        State::create(["country_code" => "SC", "code" => "18", "name" => "Mont Fleuri",]);
        State::create(["country_code" => "SC", "code" => "19", "name" => "Plaisance",]);
        State::create(["country_code" => "SC", "code" => "20", "name" => "Pointe Larue",]);
        State::create(["country_code" => "SC", "code" => "21", "name" => "Port Glaud",]);
        State::create(["country_code" => "SC", "code" => "25", "name" => "Roche Caiman",]);
        State::create(["country_code" => "SC", "code" => "22", "name" => "Saint Louis",]);
        State::create(["country_code" => "SC", "code" => "23", "name" => "Takamaka",]);

        // Sierra Leone
        State::create(["country_code" => "SL", "code" => "W", "name" => "Western Area",]);
        State::create(["country_code" => "SL", "code" => "E", "name" => "Eastern",]);
        State::create(["country_code" => "SL", "code" => "N", "name" => "Northern",]);
        State::create(["country_code" => "SL", "code" => "NW", "name" => "North Western",]);
        State::create(["country_code" => "SL", "code" => "S", "name" => "Southern",]);

        // Singapore
        State::create(["country_code" => "SG", "code" => "01", "name" => "Central Singapore",]);
        State::create(["country_code" => "SG", "code" => "02", "name" => "North East",]);
        State::create(["country_code" => "SG", "code" => "03", "name" => "North West",]);
        State::create(["country_code" => "SG", "code" => "04", "name" => "South East",]);
        State::create(["country_code" => "SG", "code" => "05", "name" => "South West",]);

        // Sint Maarten (Dutch part) (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "SX", "code" => "SX", "name" => "Sint Maarten (Dutch part)",]);

        // Slovakia
        State::create(["country_code" => "SK", "code" => "BC", "name" => "Banskobystrický kraj",]);
        State::create(["country_code" => "SK", "code" => "BL", "name" => "Bratislavský kraj",]);
        State::create(["country_code" => "SK", "code" => "KI", "name" => "Košický kraj",]);
        State::create(["country_code" => "SK", "code" => "NI", "name" => "Nitriansky kraj",]);
        State::create(["country_code" => "SK", "code" => "PV", "name" => "Prešovský kraj",]);
        State::create(["country_code" => "SK", "code" => "TC", "name" => "Trenčiansky kraj",]);
        State::create(["country_code" => "SK", "code" => "TA", "name" => "Trnavský kraj",]);
        State::create(["country_code" => "SK", "code" => "ZI", "name" => "Žilinský kraj",]);

        // Slovenia
        State::create(["country_code" => "SI", "code" => "001", "name" => "Ajdovščina",]);
        State::create(["country_code" => "SI", "code" => "213", "name" => "Ankaran",]);
        State::create(["country_code" => "SI", "code" => "195", "name" => "Apače",]);
        State::create(["country_code" => "SI", "code" => "002", "name" => "Beltinci",]);
        State::create(["country_code" => "SI", "code" => "148", "name" => "Benedikt",]);
        State::create(["country_code" => "SI", "code" => "149", "name" => "Bistrica ob Sotli",]);
        State::create(["country_code" => "SI", "code" => "003", "name" => "Bled",]);
        State::create(["country_code" => "SI", "code" => "150", "name" => "Bloke",]);
        State::create(["country_code" => "SI", "code" => "004", "name" => "Bohinj",]);
        State::create(["country_code" => "SI", "code" => "005", "name" => "Borovnica",]);
        State::create(["country_code" => "SI", "code" => "006", "name" => "Bovec",]);
        State::create(["country_code" => "SI", "code" => "151", "name" => "Braslovče",]);
        State::create(["country_code" => "SI", "code" => "007", "name" => "Brda",]);
        State::create(["country_code" => "SI", "code" => "008", "name" => "Brezovica",]);
        State::create(["country_code" => "SI", "code" => "009", "name" => "Brežice",]);
        State::create(["country_code" => "SI", "code" => "152", "name" => "Cankova",]);
        State::create(["country_code" => "SI", "code" => "011", "name" => "Celje",]);
        State::create(["country_code" => "SI", "code" => "012", "name" => "Cerklje na Gorenjskem",]);
        State::create(["country_code" => "SI", "code" => "013", "name" => "Cerknica",]);
        State::create(["country_code" => "SI", "code" => "014", "name" => "Cerkno",]);
        State::create(["country_code" => "SI", "code" => "153", "name" => "Cerkvenjak",]);
        State::create(["country_code" => "SI", "code" => "196", "name" => "Cirkulane",]);
        State::create(["country_code" => "SI", "code" => "015", "name" => "Črenšovci",]);
        State::create(["country_code" => "SI", "code" => "016", "name" => "Črna na Koroškem",]);
        State::create(["country_code" => "SI", "code" => "017", "name" => "Črnomelj",]);
        State::create(["country_code" => "SI", "code" => "018", "name" => "Destrnik",]);
        State::create(["country_code" => "SI", "code" => "019", "name" => "Divača",]);
        State::create(["country_code" => "SI", "code" => "154", "name" => "Dobje",]);
        State::create(["country_code" => "SI", "code" => "020", "name" => "Dobrepolje",]);
        State::create(["country_code" => "SI", "code" => "155", "name" => "Dobrna",]);
        State::create(["country_code" => "SI", "code" => "021", "name" => "Dobrova-Polhov Gradec",]);
        State::create(["country_code" => "SI", "code" => "156", "name" => "Dobrovnik",]);
        State::create(["country_code" => "SI", "code" => "022", "name" => "Dol pri Ljubljani",]);
        State::create(["country_code" => "SI", "code" => "157", "name" => "Dolenjske Toplice",]);
        State::create(["country_code" => "SI", "code" => "023", "name" => "Domžale",]);
        State::create(["country_code" => "SI", "code" => "024", "name" => "Dornava",]);
        State::create(["country_code" => "SI", "code" => "025", "name" => "Dravograd",]);
        State::create(["country_code" => "SI", "code" => "026", "name" => "Duplek",]);
        State::create(["country_code" => "SI", "code" => "027", "name" => "Gorenja vas-Poljane",]);
        State::create(["country_code" => "SI", "code" => "028", "name" => "Gorišnica",]);
        State::create(["country_code" => "SI", "code" => "207", "name" => "Gorje",]);
        State::create(["country_code" => "SI", "code" => "029", "name" => "Gornja Radgona",]);
        State::create(["country_code" => "SI", "code" => "030", "name" => "Gornji Grad",]);
        State::create(["country_code" => "SI", "code" => "031", "name" => "Gornji Petrovci",]);
        State::create(["country_code" => "SI", "code" => "158", "name" => "Grad",]);
        State::create(["country_code" => "SI", "code" => "032", "name" => "Grosuplje",]);
        State::create(["country_code" => "SI", "code" => "159", "name" => "Hajdina",]);
        State::create(["country_code" => "SI", "code" => "160", "name" => "Hoče-Slivnica",]);
        State::create(["country_code" => "SI", "code" => "161", "name" => "Hodoš",]);
        State::create(["country_code" => "SI", "code" => "162", "name" => "Horjul",]);
        State::create(["country_code" => "SI", "code" => "034", "name" => "Hrastnik",]);
        State::create(["country_code" => "SI", "code" => "035", "name" => "Hrpelje-Kozina",]);
        State::create(["country_code" => "SI", "code" => "036", "name" => "Idrija",]);
        State::create(["country_code" => "SI", "code" => "037", "name" => "Ig",]);
        State::create(["country_code" => "SI", "code" => "038", "name" => "Ilirska Bistrica",]);
        State::create(["country_code" => "SI", "code" => "039", "name" => "Ivančna Gorica",]);
        State::create(["country_code" => "SI", "code" => "040", "name" => "Izola",]);
        State::create(["country_code" => "SI", "code" => "041", "name" => "Jesenice",]);
        State::create(["country_code" => "SI", "code" => "163", "name" => "Jezersko",]);
        State::create(["country_code" => "SI", "code" => "042", "name" => "Juršinci",]);
        State::create(["country_code" => "SI", "code" => "043", "name" => "Kamnik",]);
        State::create(["country_code" => "SI", "code" => "044", "name" => "Kanal",]);
        State::create(["country_code" => "SI", "code" => "045", "name" => "Kidričevo",]);
        State::create(["country_code" => "SI", "code" => "046", "name" => "Kobarid",]);
        State::create(["country_code" => "SI", "code" => "047", "name" => "Kobilje",]);
        State::create(["country_code" => "SI", "code" => "048", "name" => "Kočevje",]);
        State::create(["country_code" => "SI", "code" => "049", "name" => "Komen",]);
        State::create(["country_code" => "SI", "code" => "164", "name" => "Komenda",]);
        State::create(["country_code" => "SI", "code" => "050", "name" => "Koper",]);
        State::create(["country_code" => "SI", "code" => "197", "name" => "Kosanjevica na Krki",]);
        State::create(["country_code" => "SI", "code" => "165", "name" => "Kostel",]);
        State::create(["country_code" => "SI", "code" => "051", "name" => "Kozje",]);
        State::create(["country_code" => "SI", "code" => "052", "name" => "Kranj",]);
        State::create(["country_code" => "SI", "code" => "053", "name" => "Kranjska Gora",]);
        State::create(["country_code" => "SI", "code" => "166", "name" => "Križevci",]);
        State::create(["country_code" => "SI", "code" => "054", "name" => "Krško",]);
        State::create(["country_code" => "SI", "code" => "055", "name" => "Kungota",]);
        State::create(["country_code" => "SI", "code" => "056", "name" => "Kuzma",]);
        State::create(["country_code" => "SI", "code" => "057", "name" => "Laško",]);
        State::create(["country_code" => "SI", "code" => "058", "name" => "Lenart",]);
        State::create(["country_code" => "SI", "code" => "059", "name" => "Lendava",]);
        State::create(["country_code" => "SI", "code" => "060", "name" => "Litija",]);
        State::create(["country_code" => "SI", "code" => "061", "name" => "Ljubljana",]);
        State::create(["country_code" => "SI", "code" => "062", "name" => "Ljubno",]);
        State::create(["country_code" => "SI", "code" => "063", "name" => "Ljutomer",]);
        State::create(["country_code" => "SI", "code" => "208", "name" => "Log-Dragomer",]);
        State::create(["country_code" => "SI", "code" => "064", "name" => "Logatec",]);
        State::create(["country_code" => "SI", "code" => "065", "name" => "Loška Dolina",]);
        State::create(["country_code" => "SI", "code" => "066", "name" => "Loški Potok",]);
        State::create(["country_code" => "SI", "code" => "167", "name" => "Lovrenc na Pohorju",]);
        State::create(["country_code" => "SI", "code" => "067", "name" => "Luče",]);
        State::create(["country_code" => "SI", "code" => "068", "name" => "Lukovica",]);
        State::create(["country_code" => "SI", "code" => "069", "name" => "Majšperk",]);
        State::create(["country_code" => "SI", "code" => "198", "name" => "Makole",]);
        State::create(["country_code" => "SI", "code" => "070", "name" => "Maribor",]);
        State::create(["country_code" => "SI", "code" => "168", "name" => "Markovci",]);
        State::create(["country_code" => "SI", "code" => "071", "name" => "Medvode",]);
        State::create(["country_code" => "SI", "code" => "072", "name" => "Mengeš",]);
        State::create(["country_code" => "SI", "code" => "073", "name" => "Metlika",]);
        State::create(["country_code" => "SI", "code" => "074", "name" => "Mežica",]);
        State::create(["country_code" => "SI", "code" => "169", "name" => "Miklavž na Dravskem Polju",]);
        State::create(["country_code" => "SI", "code" => "075", "name" => "Miren-Kostanjevica",]);
        State::create(["country_code" => "SI", "code" => "212", "name" => "Mirna",]);
        State::create(["country_code" => "SI", "code" => "170", "name" => "Mirna Peč",]);
        State::create(["country_code" => "SI", "code" => "076", "name" => "Mislinja",]);
        State::create(["country_code" => "SI", "code" => "199", "name" => "Mokronog-Trebelno",]);
        State::create(["country_code" => "SI", "code" => "077", "name" => "Moravče",]);
        State::create(["country_code" => "SI", "code" => "078", "name" => "Moravske Toplice",]);
        State::create(["country_code" => "SI", "code" => "079", "name" => "Mozirje",]);
        State::create(["country_code" => "SI", "code" => "080", "name" => "Murska Sobota",]);
        State::create(["country_code" => "SI", "code" => "081", "name" => "Muta",]);
        State::create(["country_code" => "SI", "code" => "082", "name" => "Naklo",]);
        State::create(["country_code" => "SI", "code" => "083", "name" => "Nazarje",]);
        State::create(["country_code" => "SI", "code" => "084", "name" => "Nova Gorica",]);
        State::create(["country_code" => "SI", "code" => "085", "name" => "Novo Mesto",]);
        State::create(["country_code" => "SI", "code" => "086", "name" => "Odranci",]);
        State::create(["country_code" => "SI", "code" => "171", "name" => "Oplotnica",]);
        State::create(["country_code" => "SI", "code" => "087", "name" => "Ormož",]);
        State::create(["country_code" => "SI", "code" => "088", "name" => "Osilnica",]);
        State::create(["country_code" => "SI", "code" => "089", "name" => "Pesnica",]);
        State::create(["country_code" => "SI", "code" => "090", "name" => "Piran",]);
        State::create(["country_code" => "SI", "code" => "091", "name" => "Pivka",]);
        State::create(["country_code" => "SI", "code" => "092", "name" => "Podčetrtek",]);
        State::create(["country_code" => "SI", "code" => "172", "name" => "Podlehnik",]);
        State::create(["country_code" => "SI", "code" => "093", "name" => "Podvelka",]);
        State::create(["country_code" => "SI", "code" => "200", "name" => "Poljčane",]);
        State::create(["country_code" => "SI", "code" => "173", "name" => "Polzela",]);
        State::create(["country_code" => "SI", "code" => "094", "name" => "Postojna",]);
        State::create(["country_code" => "SI", "code" => "174", "name" => "Prebold",]);
        State::create(["country_code" => "SI", "code" => "095", "name" => "Preddvor",]);
        State::create(["country_code" => "SI", "code" => "175", "name" => "Prevalje",]);
        State::create(["country_code" => "SI", "code" => "096", "name" => "Ptuj",]);
        State::create(["country_code" => "SI", "code" => "097", "name" => "Puconci",]);
        State::create(["country_code" => "SI", "code" => "098", "name" => "Rače-Fram",]);
        State::create(["country_code" => "SI", "code" => "099", "name" => "Radeče",]);
        State::create(["country_code" => "SI", "code" => "100", "name" => "Radenci",]);
        State::create(["country_code" => "SI", "code" => "101", "name" => "Radlje ob Dravi",]);
        State::create(["country_code" => "SI", "code" => "102", "name" => "Radovljica",]);
        State::create(["country_code" => "SI", "code" => "103", "name" => "Ravne na Koroškem",]);
        State::create(["country_code" => "SI", "code" => "176", "name" => "Razkrižje",]);
        State::create(["country_code" => "SI", "code" => "209", "name" => "Rečica ob Savinji",]);
        State::create(["country_code" => "SI", "code" => "201", "name" => "Renče-Vogrsko",]);
        State::create(["country_code" => "SI", "code" => "104", "name" => "Ribnica",]);
        State::create(["country_code" => "SI", "code" => "177", "name" => "Ribnica na Pohorju",]);
        State::create(["country_code" => "SI", "code" => "106", "name" => "Rogaška Slatina",]);
        State::create(["country_code" => "SI", "code" => "105", "name" => "Rogašovci",]);
        State::create(["country_code" => "SI", "code" => "107", "name" => "Rogatec",]);
        State::create(["country_code" => "SI", "code" => "108", "name" => "Ruše",]);
        State::create(["country_code" => "SI", "code" => "178", "name" => "Selnica ob Dravi",]);
        State::create(["country_code" => "SI", "code" => "109", "name" => "Semič",]);
        State::create(["country_code" => "SI", "code" => "110", "name" => "Sevnica",]);
        State::create(["country_code" => "SI", "code" => "111", "name" => "Sežana",]);
        State::create(["country_code" => "SI", "code" => "112", "name" => "Slovenj Gradec",]);
        State::create(["country_code" => "SI", "code" => "113", "name" => "Slovenska Bistrica",]);
        State::create(["country_code" => "SI", "code" => "114", "name" => "Slovenske Konjice",]);
        State::create(["country_code" => "SI", "code" => "179", "name" => "Sodražica",]);
        State::create(["country_code" => "SI", "code" => "180", "name" => "Solčava",]);
        State::create(["country_code" => "SI", "code" => "202", "name" => "Središče ob Dravi",]);
        State::create(["country_code" => "SI", "code" => "115", "name" => "Starše",]);
        State::create(["country_code" => "SI", "code" => "203", "name" => "Straža",]);
        State::create(["country_code" => "SI", "code" => "181", "name" => "Sveta Ana",]);
        State::create(["country_code" => "SI", "code" => "204", "name" => "Sveta Trojica v Slovenskih Goricah",]);
        State::create(["country_code" => "SI", "code" => "182", "name" => "Sveti Andraž v Slovenskih Goricah",]);
        State::create(["country_code" => "SI", "code" => "116", "name" => "Sveti Jurij",]);
        State::create(["country_code" => "SI", "code" => "210", "name" => "Sveti Jurij v Slovenskih Goricah",]);
        State::create(["country_code" => "SI", "code" => "205", "name" => "Sveti Tomaž",]);
        State::create(["country_code" => "SI", "code" => "033", "name" => "Šalovci",]);
        State::create(["country_code" => "SI", "code" => "183", "name" => "Šempeter-Vrtojba",]);
        State::create(["country_code" => "SI", "code" => "117", "name" => "Šenčur",]);
        State::create(["country_code" => "SI", "code" => "118", "name" => "Šentilj",]);
        State::create(["country_code" => "SI", "code" => "119", "name" => "Šentjernej",]);
        State::create(["country_code" => "SI", "code" => "120", "name" => "Šentjur",]);
        State::create(["country_code" => "SI", "code" => "211", "name" => "Šentrupert",]);
        State::create(["country_code" => "SI", "code" => "121", "name" => "Škocjan",]);
        State::create(["country_code" => "SI", "code" => "122", "name" => "Škofja Loka",]);
        State::create(["country_code" => "SI", "code" => "123", "name" => "Škofljica",]);
        State::create(["country_code" => "SI", "code" => "124", "name" => "Šmarje pri Jelšah",]);
        State::create(["country_code" => "SI", "code" => "206", "name" => "Šmarješke Toplice",]);
        State::create(["country_code" => "SI", "code" => "125", "name" => "Šmartno ob Paki",]);
        State::create(["country_code" => "SI", "code" => "194", "name" => "Šmartno pri Litiji",]);
        State::create(["country_code" => "SI", "code" => "126", "name" => "Šoštanj",]);
        State::create(["country_code" => "SI", "code" => "127", "name" => "Štore",]);
        State::create(["country_code" => "SI", "code" => "184", "name" => "Tabor",]);
        State::create(["country_code" => "SI", "code" => "010", "name" => "Tišina",]);
        State::create(["country_code" => "SI", "code" => "128", "name" => "Tolmin",]);
        State::create(["country_code" => "SI", "code" => "129", "name" => "Trbovlje",]);
        State::create(["country_code" => "SI", "code" => "130", "name" => "Trebnje",]);
        State::create(["country_code" => "SI", "code" => "185", "name" => "Trnovska Vas",]);
        State::create(["country_code" => "SI", "code" => "186", "name" => "Trzin",]);
        State::create(["country_code" => "SI", "code" => "131", "name" => "Tržič",]);
        State::create(["country_code" => "SI", "code" => "132", "name" => "Turnišče",]);
        State::create(["country_code" => "SI", "code" => "133", "name" => "Velenje",]);
        State::create(["country_code" => "SI", "code" => "187", "name" => "Velika Polana",]);
        State::create(["country_code" => "SI", "code" => "134", "name" => "Velike Lašče",]);
        State::create(["country_code" => "SI", "code" => "188", "name" => "Veržej",]);
        State::create(["country_code" => "SI", "code" => "135", "name" => "Videm",]);
        State::create(["country_code" => "SI", "code" => "136", "name" => "Vipava",]);
        State::create(["country_code" => "SI", "code" => "137", "name" => "Vitanje",]);
        State::create(["country_code" => "SI", "code" => "138", "name" => "Vodice",]);
        State::create(["country_code" => "SI", "code" => "139", "name" => "Vojnik",]);
        State::create(["country_code" => "SI", "code" => "189", "name" => "Vransko",]);
        State::create(["country_code" => "SI", "code" => "140", "name" => "Vrhnika",]);
        State::create(["country_code" => "SI", "code" => "141", "name" => "Vuzenica",]);
        State::create(["country_code" => "SI", "code" => "142", "name" => "Zagorje ob Savi",]);
        State::create(["country_code" => "SI", "code" => "143", "name" => "Zavrč",]);
        State::create(["country_code" => "SI", "code" => "144", "name" => "Zreče",]);
        State::create(["country_code" => "SI", "code" => "190", "name" => "Žalec",]);
        State::create(["country_code" => "SI", "code" => "146", "name" => "Železniki",]);
        State::create(["country_code" => "SI", "code" => "191", "name" => "Žetale",]);
        State::create(["country_code" => "SI", "code" => "147", "name" => "Žiri",]);
        State::create(["country_code" => "SI", "code" => "192", "name" => "Žirovnica",]);
        State::create(["country_code" => "SI", "code" => "193", "name" => "Žužemberk",]);

        // Solomon Islands
        State::create(["country_code" => "SB", "code" => "CT", "name" => "Capital Territory",]);
        State::create(["country_code" => "SB", "code" => "CE", "name" => "Central",]);
        State::create(["country_code" => "SB", "code" => "CH", "name" => "Choiseul",]);
        State::create(["country_code" => "SB", "code" => "GU", "name" => "Guadalcanal",]);
        State::create(["country_code" => "SB", "code" => "IS", "name" => "Isabel",]);
        State::create(["country_code" => "SB", "code" => "MK", "name" => "Makira-Ulawa",]);
        State::create(["country_code" => "SB", "code" => "ML", "name" => "Malaita",]);
        State::create(["country_code" => "SB", "code" => "RB", "name" => "Rennell and Bellona",]);
        State::create(["country_code" => "SB", "code" => "TE", "name" => "Temotu",]);
        State::create(["country_code" => "SB", "code" => "WE", "name" => "Western",]);

        // Somalia
        State::create(["country_code" => "SO", "code" => "AW", "name" => "Awdal",]);
        State::create(["country_code" => "SO", "code" => "BK", "name" => "Bakool",]);
        State::create(["country_code" => "SO", "code" => "BN", "name" => "Banaadir",]);
        State::create(["country_code" => "SO", "code" => "BR", "name" => "Bari",]);
        State::create(["country_code" => "SO", "code" => "BY", "name" => "Bay",]);
        State::create(["country_code" => "SO", "code" => "GA", "name" => "Galguduud",]);
        State::create(["country_code" => "SO", "code" => "GE", "name" => "Gedo",]);
        State::create(["country_code" => "SO", "code" => "HI", "name" => "Hiiraan",]);
        State::create(["country_code" => "SO", "code" => "JD", "name" => "Jubbada Dhexe",]);
        State::create(["country_code" => "SO", "code" => "JH", "name" => "Jubbada Hoose",]);
        State::create(["country_code" => "SO", "code" => "MU", "name" => "Mudug",]);
        State::create(["country_code" => "SO", "code" => "NU", "name" => "Nugaal",]);
        State::create(["country_code" => "SO", "code" => "SA", "name" => "Sanaag",]);
        State::create(["country_code" => "SO", "code" => "SD", "name" => "Shabeellaha Dhexe",]);
        State::create(["country_code" => "SO", "code" => "SH", "name" => "Shabeellaha Hoose",]);
        State::create(["country_code" => "SO", "code" => "SO", "name" => "Sool",]);
        State::create(["country_code" => "SO", "code" => "TO", "name" => "Togdheer",]);
        State::create(["country_code" => "SO", "code" => "WO", "name" => "Woqooyi Galbeed",]);

        // South Africa
        State::create(["country_code" => "ZA", "code" => "EC", "name" => "Eastern Cape",]);
        State::create(["country_code" => "ZA", "code" => "FS", "name" => "Free State",]);
        State::create(["country_code" => "ZA", "code" => "GP", "name" => "Gauteng",]);
        State::create(["country_code" => "ZA", "code" => "KZN", "name" => "Kwazulu-Natal",]);
        State::create(["country_code" => "ZA", "code" => "LP", "name" => "Limpopo",]);
        State::create(["country_code" => "ZA", "code" => "MP", "name" => "Mpumalanga",]);
        State::create(["country_code" => "ZA", "code" => "NC", "name" => "Northern Cape",]);
        State::create(["country_code" => "ZA", "code" => "NW", "name" => "North-West",]);
        State::create(["country_code" => "ZA", "code" => "WC", "name" => "Western Cape",]);

        // South Georgia and the South Sandwich Islands (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "GS", "code" => "GS", "name" => "South Georgia and the South Sandwich Islands",]);

        // South Sudan
        State::create(["country_code" => "SS", "code" => "EC", "name" => "Central Equatoria",]);
        State::create(["country_code" => "SS", "code" => "EE", "name" => "Eastern Equatoria",]);
        State::create(["country_code" => "SS", "code" => "JG", "name" => "Jonglei",]);
        State::create(["country_code" => "SS", "code" => "LK", "name" => "Lakes",]);
        State::create(["country_code" => "SS", "code" => "BN", "name" => "Northern Bahr el Ghazal",]);
        State::create(["country_code" => "SS", "code" => "UY", "name" => "Unity",]);
        State::create(["country_code" => "SS", "code" => "NU", "name" => "Upper Nile",]);
        State::create(["country_code" => "SS", "code" => "WR", "name" => "Warrap",]);
        State::create(["country_code" => "SS", "code" => "BW", "name" => "Western Bahr el Ghazal",]);
        State::create(["country_code" => "SS", "code" => "EW", "name" => "Western Equatoria",]);

        // Spain
        State::create(["country_code" => "ES", "code" => "C", "name" => "A Coruña",]);
        State::create(["country_code" => "ES", "code" => "VI", "name" => "Álava",]);
        State::create(["country_code" => "ES", "code" => "AB", "name" => "Albacete",]);
        State::create(["country_code" => "ES", "code" => "A", "name" => "Alicante",]);
        State::create(["country_code" => "ES", "code" => "AL", "name" => "Almería",]);
        State::create(["country_code" => "ES", "code" => "O", "name" => "Asturias",]);
        State::create(["country_code" => "ES", "code" => "AV", "name" => "Ávila",]);
        State::create(["country_code" => "ES", "code" => "BA", "name" => "Badajoz",]);
        State::create(["country_code" => "ES", "code" => "PM", "name" => "Balears",]);
        State::create(["country_code" => "ES", "code" => "B", "name" => "Barcelona",]);
        State::create(["country_code" => "ES", "code" => "BI", "name" => "Bizkaia",]);
        State::create(["country_code" => "ES", "code" => "BU", "name" => "Burgos",]);
        State::create(["country_code" => "ES", "code" => "CC", "name" => "Cáceres",]);
        State::create(["country_code" => "ES", "code" => "CA", "name" => "Cádiz",]);
        State::create(["country_code" => "ES", "code" => "S", "name" => "Cantabria",]);
        State::create(["country_code" => "ES", "code" => "CS", "name" => "Castellón",]);
        State::create(["country_code" => "ES", "code" => "CR", "name" => "Ciudad Real",]);
        State::create(["country_code" => "ES", "code" => "CO", "name" => "Córdoba",]);
        State::create(["country_code" => "ES", "code" => "CU", "name" => "Cuenca",]);
        State::create(["country_code" => "ES", "code" => "SS", "name" => "Gipuzkoa",]);
        State::create(["country_code" => "ES", "code" => "GI", "name" => "Girona",]);
        State::create(["country_code" => "ES", "code" => "GR", "name" => "Granada",]);
        State::create(["country_code" => "ES", "code" => "GU", "name" => "Guadalajara",]);
        State::create(["country_code" => "ES", "code" => "H", "name" => "Huelva",]);
        State::create(["country_code" => "ES", "code" => "HU", "name" => "Huesca",]);
        State::create(["country_code" => "ES", "code" => "J", "name" => "Jaén",]);
        State::create(["country_code" => "ES", "code" => "LO", "name" => "La Rioja",]);
        State::create(["country_code" => "ES", "code" => "GC", "name" => "Las Palmas",]);
        State::create(["country_code" => "ES", "code" => "LE", "name" => "León",]);
        State::create(["country_code" => "ES", "code" => "L", "name" => "Lleida",]);
        State::create(["country_code" => "ES", "code" => "LU", "name" => "Lugo",]);
        State::create(["country_code" => "ES", "code" => "M", "name" => "Madrid",]);
        State::create(["country_code" => "ES", "code" => "MA", "name" => "Málaga",]);
        State::create(["country_code" => "ES", "code" => "MU", "name" => "Murcia",]);
        State::create(["country_code" => "ES", "code" => "NA", "name" => "Navarra",]);
        State::create(["country_code" => "ES", "code" => "OR", "name" => "Ourense",]);
        State::create(["country_code" => "ES", "code" => "P", "name" => "Palencia",]);
        State::create(["country_code" => "ES", "code" => "PO", "name" => "Pontevedra",]);
        State::create(["country_code" => "ES", "code" => "SA", "name" => "Salamanca",]);
        State::create(["country_code" => "ES", "code" => "TF", "name" => "Santa Cruz de Tenerife",]);
        State::create(["country_code" => "ES", "code" => "SG", "name" => "Segovia",]);
        State::create(["country_code" => "ES", "code" => "SE", "name" => "Sevilla",]);
        State::create(["country_code" => "ES", "code" => "SO", "name" => "Soria",]);
        State::create(["country_code" => "ES", "code" => "T", "name" => "Tarragona",]);
        State::create(["country_code" => "ES", "code" => "TE", "name" => "Teruel",]);
        State::create(["country_code" => "ES", "code" => "TO", "name" => "Toledo",]);
        State::create(["country_code" => "ES", "code" => "V", "name" => "Valencia",]);
        State::create(["country_code" => "ES", "code" => "VA", "name" => "Valladolid",]);
        State::create(["country_code" => "ES", "code" => "ZA", "name" => "Zamora",]);
        State::create(["country_code" => "ES", "code" => "Z", "name" => "Zaragoza",]);

        // Sri Lanka
        State::create(["country_code" => "LK", "code" => "11", "name" => "Colombo",]);
        State::create(["country_code" => "LK", "code" => "12", "name" => "Gampaha",]);
        State::create(["country_code" => "LK", "code" => "13", "name" => "Kalutara",]);
        State::create(["country_code" => "LK", "code" => "21", "name" => "Kandy",]);
        State::create(["country_code" => "LK", "code" => "22", "name" => "Matale",]);
        State::create(["country_code" => "LK", "code" => "23", "name" => "Nuwara Eliya",]);
        State::create(["country_code" => "LK", "code" => "31", "name" => "Galle",]);
        State::create(["country_code" => "LK", "code" => "32", "name" => "Matara",]);
        State::create(["country_code" => "LK", "code" => "33", "name" => "Hambantota",]);
        State::create(["country_code" => "LK", "code" => "41", "name" => "Jaffna",]);
        State::create(["country_code" => "LK", "code" => "42", "name" => "Kilinochchi",]);
        State::create(["country_code" => "LK", "code" => "43", "name" => "Mannar",]);
        State::create(["country_code" => "LK", "code" => "44", "name" => "Vavuniya",]);
        State::create(["country_code" => "LK", "code" => "45", "name" => "Mullaittivu",]);
        State::create(["country_code" => "LK", "code" => "51", "name" => "Batticaloa",]);
        State::create(["country_code" => "LK", "code" => "52", "name" => "Ampara",]);
        State::create(["country_code" => "LK", "code" => "53", "name" => "Trincomalee",]);
        State::create(["country_code" => "LK", "code" => "61", "name" => "Kurunegala",]);
        State::create(["country_code" => "LK", "code" => "62", "name" => "Puttalam",]);
        State::create(["country_code" => "LK", "code" => "71", "name" => "Anuradhapura",]);
        State::create(["country_code" => "LK", "code" => "72", "name" => "Polonnaruwa",]);
        State::create(["country_code" => "LK", "code" => "81", "name" => "Badulla",]);
        State::create(["country_code" => "LK", "code" => "82", "name" => "Monaragala",]);
        State::create(["country_code" => "LK", "code" => "91", "name" => "Ratnapura",]);
        State::create(["country_code" => "LK", "code" => "92", "name" => "Kegalla",]);

        // Sudan
        State::create(["country_code" => "SD", "code" => "RS", "name" => "Al Baḩr al Aḩmar",]);
        State::create(["country_code" => "SD", "code" => "GZ", "name" => "Al Jazīrah",]);
        State::create(["country_code" => "SD", "code" => "KH", "name" => "Al Kharţūm",]);
        State::create(["country_code" => "SD", "code" => "GD", "name" => "Al Qaḑārif",]);
        State::create(["country_code" => "SD", "code" => "NR", "name" => "Nahr an Nīl",]);
        State::create(["country_code" => "SD", "code" => "NW", "name" => "An Nīl al Abyaḑ",]);
        State::create(["country_code" => "SD", "code" => "NB", "name" => "An Nīl al Azraq",]);
        State::create(["country_code" => "SD", "code" => "NO", "name" => "Ash Shamālīyah",]);
        State::create(["country_code" => "SD", "code" => "DW", "name" => "Gharb Dārfūr",]);
        State::create(["country_code" => "SD", "code" => "GK", "name" => "Gharb Kurdufān",]);
        State::create(["country_code" => "SD", "code" => "DS", "name" => "Janūb Dārfūr",]);
        State::create(["country_code" => "SD", "code" => "KS", "name" => "Janūb Kurdufān",]);
        State::create(["country_code" => "SD", "code" => "KA", "name" => "Kassalā",]);
        State::create(["country_code" => "SD", "code" => "DN", "name" => "Shamāl Dārfūr",]);
        State::create(["country_code" => "SD", "code" => "KN", "name" => "Shiamāl Kurdufān",]);
        State::create(["country_code" => "SD", "code" => "DE", "name" => "Sharq Dārfūr",]);
        State::create(["country_code" => "SD", "code" => "SI", "name" => "Sinnār",]);
        State::create(["country_code" => "SD", "code" => "DC", "name" => "Wasaţ Dārfūr Zālinjay",]);

        // Suriname
        State::create(["country_code" => "SR", "code" => "BR", "name" => "Brokopondo",]);
        State::create(["country_code" => "SR", "code" => "CM", "name" => "Commewijne",]);
        State::create(["country_code" => "SR", "code" => "CR", "name" => "Coronie",]);
        State::create(["country_code" => "SR", "code" => "MA", "name" => "Marowijne",]);
        State::create(["country_code" => "SR", "code" => "NI", "name" => "Nickerie",]);
        State::create(["country_code" => "SR", "code" => "PR", "name" => "Para",]);
        State::create(["country_code" => "SR", "code" => "PM", "name" => "Paramaribo",]);
        State::create(["country_code" => "SR", "code" => "SA", "name" => "Saramacca",]);
        State::create(["country_code" => "SR", "code" => "SI", "name" => "Sipaliwini",]);
        State::create(["country_code" => "SR", "code" => "WA", "name" => "Wanica",]);

        // Svalbard and Jan Mayen (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "SJ", "code" => "SJ", "name" => "Svalbard and Jan Mayen",]);

        // Swaziland / Eswatini
        State::create(["country_code" => "SZ", "code" => "HH", "name" => "Hhohho",]);
        State::create(["country_code" => "SZ", "code" => "LU", "name" => "Lubombo",]);
        State::create(["country_code" => "SZ", "code" => "MA", "name" => "Manzini",]);
        State::create(["country_code" => "SZ", "code" => "SH", "name" => "Shiselweni",]);

        // Sweden
        State::create(["country_code" => "SE", "code" => "K", "name" => "Blekinge län",]);
        State::create(["country_code" => "SE", "code" => "W", "name" => "Dalarnas län",]);
        State::create(["country_code" => "SE", "code" => "I", "name" => "Gotlands län",]);
        State::create(["country_code" => "SE", "code" => "X", "name" => "Gävleborgs län",]);
        State::create(["country_code" => "SE", "code" => "N", "name" => "Hallands län",]);
        State::create(["country_code" => "SE", "code" => "Z", "name" => "Jämtlands län",]);
        State::create(["country_code" => "SE", "code" => "F", "name" => "Jönköpings län",]);
        State::create(["country_code" => "SE", "code" => "H", "name" => "Kalmar län",]);
        State::create(["country_code" => "SE", "code" => "G", "name" => "Kronobergs län",]);
        State::create(["country_code" => "SE", "code" => "BD", "name" => "Norrbottens län",]);
        State::create(["country_code" => "SE", "code" => "M", "name" => "Skåne län",]);
        State::create(["country_code" => "SE", "code" => "AB", "name" => "Stockholms län",]);
        State::create(["country_code" => "SE", "code" => "D", "name" => "Södermanlands län",]);
        State::create(["country_code" => "SE", "code" => "C", "name" => "Uppsala län",]);
        State::create(["country_code" => "SE", "code" => "S", "name" => "Värmlands län",]);
        State::create(["country_code" => "SE", "code" => "AC", "name" => "Västerbottens län",]);
        State::create(["country_code" => "SE", "code" => "Y", "name" => "Västernorrlands län",]);
        State::create(["country_code" => "SE", "code" => "U", "name" => "Västmanlands län",]);
        State::create(["country_code" => "SE", "code" => "O", "name" => "Västra Götalands län",]);
        State::create(["country_code" => "SE", "code" => "T", "name" => "Örebro län",]);
        State::create(["country_code" => "SE", "code" => "E", "name" => "Östergötlands län",]);

        // Switzerland
        State::create(["country_code" => "CH", "code" => "AG", "name" => "Aargau",]);
        State::create(["country_code" => "CH", "code" => "AR", "name" => "Appenzell Ausserrhoden",]);
        State::create(["country_code" => "CH", "code" => "AI", "name" => "Appenzell Innerrhoden",]);
        State::create(["country_code" => "CH", "code" => "BL", "name" => "Basel-Landschaft ",]);
        State::create(["country_code" => "CH", "code" => "BS", "name" => "Basel-Stadt",]);
        State::create(["country_code" => "CH", "code" => "BE", "name" => "Berne",]);
        State::create(["country_code" => "CH", "code" => "FR", "name" => "Freiburg",]);
        State::create(["country_code" => "CH", "code" => "GE", "name" => "Genève",]);
        State::create(["country_code" => "CH", "code" => "GL", "name" => "Glarus",]);
        State::create(["country_code" => "CH", "code" => "GR", "name" => "Graubünden",]);
        State::create(["country_code" => "CH", "code" => "JU", "name" => "Jura",]);
        State::create(["country_code" => "CH", "code" => "LU", "name" => "Luzern",]);
        State::create(["country_code" => "CH", "code" => "NE", "name" => "Neuchâtel",]);
        State::create(["country_code" => "CH", "code" => "NW", "name" => "Nidwalden",]);
        State::create(["country_code" => "CH", "code" => "OW", "name" => "Obwalden",]);
        State::create(["country_code" => "CH", "code" => "SG", "name" => "Sankt Gallen",]);
        State::create(["country_code" => "CH", "code" => "SH", "name" => "Schaffhausen",]);
        State::create(["country_code" => "CH", "code" => "SZ", "name" => "Schwyz",]);
        State::create(["country_code" => "CH", "code" => "SO", "name" => "Solothurn",]);
        State::create(["country_code" => "CH", "code" => "TG", "name" => "Thurgau",]);
        State::create(["country_code" => "CH", "code" => "TI", "name" => "Ticino",]);
        State::create(["country_code" => "CH", "code" => "UR", "name" => "Uri",]);
        State::create(["country_code" => "CH", "code" => "VS", "name" => "Valais",]);
        State::create(["country_code" => "CH", "code" => "VD", "name" => "Vaud",]);
        State::create(["country_code" => "CH", "code" => "ZG", "name" => "Zug",]);
        State::create(["country_code" => "CH", "code" => "ZH", "name" => "Zürich",]);

        // Syrian Arab Republic
        State::create(["country_code" => "SY", "code" => "HA", "name" => "Al Ḩasakah",]);
        State::create(["country_code" => "SY", "code" => "LA", "name" => "Al Lādhiqīyah",]);
        State::create(["country_code" => "SY", "code" => "QU", "name" => "Al Qunayţirah",]);
        State::create(["country_code" => "SY", "code" => "RA", "name" => "Ar Raqqah",]);
        State::create(["country_code" => "SY", "code" => "SU", "name" => "As Suwaydā'",]);
        State::create(["country_code" => "SY", "code" => "DR", "name" => "Dar'ā",]);
        State::create(["country_code" => "SY", "code" => "DY", "name" => "Dayr az Zawr",]);
        State::create(["country_code" => "SY", "code" => "DI", "name" => "Dimashq",]);
        State::create(["country_code" => "SY", "code" => "HL", "name" => "Ḩalab",]);
        State::create(["country_code" => "SY", "code" => "HM", "name" => "Ḩamāh",]);
        State::create(["country_code" => "SY", "code" => "HI", "name" => "Ḩimş",]);
        State::create(["country_code" => "SY", "code" => "ID", "name" => "Idlib",]);
        State::create(["country_code" => "SY", "code" => "RD", "name" => "Rīf Dimashq",]);
        State::create(["country_code" => "SY", "code" => "TA", "name" => "Ţarţūs",]);

        // Taiwan, Province of China
        State::create(["country_code" => "TW", "code" => "CHA", "name" => "Changhua",]);
        State::create(["country_code" => "TW", "code" => "CYI", "name" => "Chiayi",]);
        State::create(["country_code" => "TW", "code" => "CYQ", "name" => "Chiayi",]);
        State::create(["country_code" => "TW", "code" => "HSZ", "name" => "Hsinchu",]);
        State::create(["country_code" => "TW", "code" => "HSQ", "name" => "Hsinchu",]);
        State::create(["country_code" => "TW", "code" => "HUA", "name" => "Hualien",]);
        State::create(["country_code" => "TW", "code" => "KHH", "name" => "Kaohsiung",]);
        State::create(["country_code" => "TW", "code" => "KEE", "name" => "Keelung",]);
        State::create(["country_code" => "TW", "code" => "KIN", "name" => "Kinmen",]);
        State::create(["country_code" => "TW", "code" => "LIE", "name" => "Lienchiang",]);
        State::create(["country_code" => "TW", "code" => "MIA", "name" => "Miaoli",]);
        State::create(["country_code" => "TW", "code" => "NAN", "name" => "Nantou",]);
        State::create(["country_code" => "TW", "code" => "NWT", "name" => "New Taipei",]);
        State::create(["country_code" => "TW", "code" => "PEN", "name" => "Penghu",]);
        State::create(["country_code" => "TW", "code" => "PIF", "name" => "Pingtung",]);
        State::create(["country_code" => "TW", "code" => "TXG", "name" => "Taichung",]);
        State::create(["country_code" => "TW", "code" => "TNN", "name" => "Tainan",]);
        State::create(["country_code" => "TW", "code" => "TPE", "name" => "Taipei",]);
        State::create(["country_code" => "TW", "code" => "TTT", "name" => "Taitung",]);
        State::create(["country_code" => "TW", "code" => "TAO", "name" => "Taoyuan",]);
        State::create(["country_code" => "TW", "code" => "ILA", "name" => "Yilan",]);
        State::create(["country_code" => "TW", "code" => "YUN", "name" => "Yunlin",]);

        // Tajikistan
        State::create(["country_code" => "TJ", "code" => "DU", "name" => "Dushanbe",]);
        State::create(["country_code" => "TJ", "code" => "GB", "name" => "Kŭhistoni Badakhshon",]);
        State::create(["country_code" => "TJ", "code" => "KT", "name" => "Khatlon",]);
        State::create(["country_code" => "TJ", "code" => "SU", "name" => "Sughd",]);
        State::create(["country_code" => "TJ", "code" => "RA", "name" => "nohiyahoi tobei jumhurí",]);

        // Tanzania, United Republic of
        State::create(["country_code" => "TZ", "code" => "01", "name" => "Arusha",]);
        State::create(["country_code" => "TZ", "code" => "02", "name" => "Dar es Salaam",]);
        State::create(["country_code" => "TZ", "code" => "03", "name" => "Dodoma",]);
        State::create(["country_code" => "TZ", "code" => "27", "name" => "Geita",]);
        State::create(["country_code" => "TZ", "code" => "04", "name" => "Iringa",]);
        State::create(["country_code" => "TZ", "code" => "05", "name" => "Kagera",]);
        State::create(["country_code" => "TZ", "code" => "06", "name" => "Kaskazini Pemba",]);
        State::create(["country_code" => "TZ", "code" => "07", "name" => "Kaskazini Unguja",]);
        State::create(["country_code" => "TZ", "code" => "28", "name" => "Katavi",]);
        State::create(["country_code" => "TZ", "code" => "08", "name" => "Kigoma",]);
        State::create(["country_code" => "TZ", "code" => "09", "name" => "Kilimanjaro",]);
        State::create(["country_code" => "TZ", "code" => "10", "name" => "Kusini Pemba",]);
        State::create(["country_code" => "TZ", "code" => "11", "name" => "Kusini Unguja",]);
        State::create(["country_code" => "TZ", "code" => "12", "name" => "Lindi",]);
        State::create(["country_code" => "TZ", "code" => "26", "name" => "Manyara",]);
        State::create(["country_code" => "TZ", "code" => "13", "name" => "Mara",]);
        State::create(["country_code" => "TZ", "code" => "14", "name" => "Mbeya",]);
        State::create(["country_code" => "TZ", "code" => "15", "name" => "Mjini Magharibi",]);
        State::create(["country_code" => "TZ", "code" => "16", "name" => "Morogoro",]);
        State::create(["country_code" => "TZ", "code" => "17", "name" => "Mtwara",]);
        State::create(["country_code" => "TZ", "code" => "18", "name" => "Mwanza",]);
        State::create(["country_code" => "TZ", "code" => "29", "name" => "Njombe",]);
        State::create(["country_code" => "TZ", "code" => "19", "name" => "Pwani",]);
        State::create(["country_code" => "TZ", "code" => "20", "name" => "Rukwa",]);
        State::create(["country_code" => "TZ", "code" => "21", "name" => "Ruvuma",]);
        State::create(["country_code" => "TZ", "code" => "22", "name" => "Shinyanga",]);
        State::create(["country_code" => "TZ", "code" => "30", "name" => "Simiyu",]);
        State::create(["country_code" => "TZ", "code" => "23", "name" => "Singida",]);
        State::create(["country_code" => "TZ", "code" => "31", "name" => "Songwe",]);
        State::create(["country_code" => "TZ", "code" => "24", "name" => "Tabora",]);
        State::create(["country_code" => "TZ", "code" => "25", "name" => "Tanga",]);

        // Thailand
        State::create(["country_code" => "TH", "code" => "10", "name" => "Krung Thep Maha Nakhon",]);
        State::create(["country_code" => "TH", "code" => "S", "name" => "Phatthaya",]);
        State::create(["country_code" => "TH", "code" => "37", "name" => "Amnat Charoen",]);
        State::create(["country_code" => "TH", "code" => "15", "name" => "Ang Thong",]);
        State::create(["country_code" => "TH", "code" => "38", "name" => "Bueng Kan",]);
        State::create(["country_code" => "TH", "code" => "31", "name" => "Buri Ram",]);
        State::create(["country_code" => "TH", "code" => "24", "name" => "Chachoengsao",]);
        State::create(["country_code" => "TH", "code" => "18", "name" => "Chai Nat",]);
        State::create(["country_code" => "TH", "code" => "36", "name" => "Chaiyaphum",]);
        State::create(["country_code" => "TH", "code" => "22", "name" => "Chanthaburi",]);
        State::create(["country_code" => "TH", "code" => "50", "name" => "Chiang Mai",]);
        State::create(["country_code" => "TH", "code" => "57", "name" => "Chiang Rai",]);
        State::create(["country_code" => "TH", "code" => "20", "name" => "Chon Buri",]);
        State::create(["country_code" => "TH", "code" => "86", "name" => "Chumphon",]);
        State::create(["country_code" => "TH", "code" => "46", "name" => "Kalasin",]);
        State::create(["country_code" => "TH", "code" => "62", "name" => "Kamphaeng Phet",]);
        State::create(["country_code" => "TH", "code" => "71", "name" => "Kanchanaburi",]);
        State::create(["country_code" => "TH", "code" => "40", "name" => "Khon Kaen",]);
        State::create(["country_code" => "TH", "code" => "81", "name" => "Krabi",]);
        State::create(["country_code" => "TH", "code" => "52", "name" => "Lampang",]);
        State::create(["country_code" => "TH", "code" => "51", "name" => "Lamphun",]);
        State::create(["country_code" => "TH", "code" => "42", "name" => "Loei",]);
        State::create(["country_code" => "TH", "code" => "16", "name" => "Lop Buri",]);
        State::create(["country_code" => "TH", "code" => "58", "name" => "Mae Hong Son",]);
        State::create(["country_code" => "TH", "code" => "44", "name" => "Maha Sarakham",]);
        State::create(["country_code" => "TH", "code" => "49", "name" => "Mukdahan",]);
        State::create(["country_code" => "TH", "code" => "26", "name" => "Nakhon Nayok",]);
        State::create(["country_code" => "TH", "code" => "73", "name" => "Nakhon Pathom",]);
        State::create(["country_code" => "TH", "code" => "48", "name" => "Nakhon Phanom",]);
        State::create(["country_code" => "TH", "code" => "30", "name" => "Nakhon Ratchasima",]);
        State::create(["country_code" => "TH", "code" => "60", "name" => "Nakhon Sawan",]);
        State::create(["country_code" => "TH", "code" => "80", "name" => "Nakhon Si Thammarat",]);
        State::create(["country_code" => "TH", "code" => "55", "name" => "Nan",]);
        State::create(["country_code" => "TH", "code" => "96", "name" => "Narathiwat",]);
        State::create(["country_code" => "TH", "code" => "39", "name" => "Nong Bua Lam Phu",]);
        State::create(["country_code" => "TH", "code" => "43", "name" => "Nong Khai",]);
        State::create(["country_code" => "TH", "code" => "12", "name" => "Nonthaburi",]);
        State::create(["country_code" => "TH", "code" => "13", "name" => "Pathum Thani",]);
        State::create(["country_code" => "TH", "code" => "94", "name" => "Pattani",]);
        State::create(["country_code" => "TH", "code" => "82", "name" => "Phangnga",]);
        State::create(["country_code" => "TH", "code" => "93", "name" => "Phatthalung",]);
        State::create(["country_code" => "TH", "code" => "56", "name" => "Phayao",]);
        State::create(["country_code" => "TH", "code" => "67", "name" => "Phetchabun",]);
        State::create(["country_code" => "TH", "code" => "76", "name" => "Phetchaburi",]);
        State::create(["country_code" => "TH", "code" => "66", "name" => "Phichit",]);
        State::create(["country_code" => "TH", "code" => "65", "name" => "Phitsanulok",]);
        State::create(["country_code" => "TH", "code" => "54", "name" => "Phrae",]);
        State::create(["country_code" => "TH", "code" => "14", "name" => "Phra Nakhon Si Ayutthaya",]);
        State::create(["country_code" => "TH", "code" => "83", "name" => "Phuket",]);
        State::create(["country_code" => "TH", "code" => "25", "name" => "Prachin Buri",]);
        State::create(["country_code" => "TH", "code" => "77", "name" => "Prachuap Khiri Khan",]);
        State::create(["country_code" => "TH", "code" => "85", "name" => "Ranong",]);
        State::create(["country_code" => "TH", "code" => "70", "name" => "Ratchaburi",]);
        State::create(["country_code" => "TH", "code" => "21", "name" => "Rayong",]);
        State::create(["country_code" => "TH", "code" => "45", "name" => "Roi Et",]);
        State::create(["country_code" => "TH", "code" => "27", "name" => "Sa Kaeo",]);
        State::create(["country_code" => "TH", "code" => "47", "name" => "Sakon Nakhon",]);
        State::create(["country_code" => "TH", "code" => "11", "name" => "Samut Prakan",]);
        State::create(["country_code" => "TH", "code" => "74", "name" => "Samut Sakhon",]);
        State::create(["country_code" => "TH", "code" => "75", "name" => "Samut Songkhram",]);
        State::create(["country_code" => "TH", "code" => "19", "name" => "Saraburi",]);
        State::create(["country_code" => "TH", "code" => "91", "name" => "Satun",]);
        State::create(["country_code" => "TH", "code" => "17", "name" => "Sing Buri",]);
        State::create(["country_code" => "TH", "code" => "33", "name" => "Si Sa Ket",]);
        State::create(["country_code" => "TH", "code" => "90", "name" => "Songkhla",]);
        State::create(["country_code" => "TH", "code" => "64", "name" => "Sukhothai",]);
        State::create(["country_code" => "TH", "code" => "72", "name" => "Suphan Buri",]);
        State::create(["country_code" => "TH", "code" => "84", "name" => "Surat Thani",]);
        State::create(["country_code" => "TH", "code" => "32", "name" => "Surin",]);
        State::create(["country_code" => "TH", "code" => "63", "name" => "Tak",]);
        State::create(["country_code" => "TH", "code" => "92", "name" => "Trang",]);
        State::create(["country_code" => "TH", "code" => "23", "name" => "Trat",]);
        State::create(["country_code" => "TH", "code" => "34", "name" => "Ubon Ratchathani",]);
        State::create(["country_code" => "TH", "code" => "41", "name" => "Udon Thani",]);
        State::create(["country_code" => "TH", "code" => "61", "name" => "Uthai Thani",]);
        State::create(["country_code" => "TH", "code" => "53", "name" => "Uttaradit",]);
        State::create(["country_code" => "TH", "code" => "95", "name" => "Yala",]);
        State::create(["country_code" => "TH", "code" => "35", "name" => "Yasothon",]);

        // Timor-Leste
        State::create(["country_code" => "TL", "code" => "AL", "name" => "Aileu",]);
        State::create(["country_code" => "TL", "code" => "AN", "name" => "Ainaro",]);
        State::create(["country_code" => "TL", "code" => "BA", "name" => "Baucau",]);
        State::create(["country_code" => "TL", "code" => "BO", "name" => "Bobonaro",]);
        State::create(["country_code" => "TL", "code" => "CO", "name" => "Cova Lima",]);
        State::create(["country_code" => "TL", "code" => "DI", "name" => "Díli",]);
        State::create(["country_code" => "TL", "code" => "ER", "name" => "Ermera",]);
        State::create(["country_code" => "TL", "code" => "LA", "name" => "Lautém",]);
        State::create(["country_code" => "TL", "code" => "LI", "name" => "Liquiça",]);
        State::create(["country_code" => "TL", "code" => "MT", "name" => "Manatuto",]);
        State::create(["country_code" => "TL", "code" => "MF", "name" => "Manufahi",]);
        State::create(["country_code" => "TL", "code" => "OE", "name" => "Oé-Cusse Ambeno",]);
        State::create(["country_code" => "TL", "code" => "VI", "name" => "Viqueque",]);

        // Togo
        State::create(["country_code" => "TG", "code" => "C", "name" => "Centrale",]);
        State::create(["country_code" => "TG", "code" => "K", "name" => "Kara",]);
        State::create(["country_code" => "TG", "code" => "M", "name" => "Maritime",]);
        State::create(["country_code" => "TG", "code" => "P", "name" => "Plateaux",]);
        State::create(["country_code" => "TG", "code" => "S", "name" => "Savanes",]);

        // Tokelau (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "TK", "code" => "TK", "name" => "Tokelau",]);

        // Tonga
        State::create(["country_code" => "TO", "code" => "01", "name" => "'Eua",]);
        State::create(["country_code" => "TO", "code" => "02", "name" => "Ha'apai",]);
        State::create(["country_code" => "TO", "code" => "03", "name" => "Niuas",]);
        State::create(["country_code" => "TO", "code" => "04", "name" => "Tongatapu",]);
        State::create(["country_code" => "TO", "code" => "05", "name" => "Vava'u",]);

        // Trinidad and Tobago
        State::create(["country_code" => "TT", "code" => "CTT", "name" => "Couva–Tabaquite–Talparo",]);
        State::create(["country_code" => "TT", "code" => "DMN", "name" => "Diego Martin",]);
        State::create(["country_code" => "TT", "code" => "MRC", "name" => "Mayaro-Rio Claro",]);
        State::create(["country_code" => "TT", "code" => "PED", "name" => "Penal-Debe",]);
        State::create(["country_code" => "TT", "code" => "PRT", "name" => "Princes Town",]);
        State::create(["country_code" => "TT", "code" => "SJL", "name" => "San Juan-Laventille",]);
        State::create(["country_code" => "TT", "code" => "SGE", "name" => "Sangre Grande",]);
        State::create(["country_code" => "TT", "code" => "SIP", "name" => "Siparia",]);
        State::create(["country_code" => "TT", "code" => "TUP", "name" => "Tunapuna-Piarco",]);
        State::create(["country_code" => "TT", "code" => "ARI", "name" => "Arima",]);
        State::create(["country_code" => "TT", "code" => "CHA", "name" => "Chaguanas",]);
        State::create(["country_code" => "TT", "code" => "PTF", "name" => "Point Fortin",]);
        State::create(["country_code" => "TT", "code" => "POS", "name" => "Port of Spain",]);
        State::create(["country_code" => "TT", "code" => "SFO", "name" => "San Fernando",]);
        State::create(["country_code" => "TT", "code" => "TOB", "name" => "Tobago",]);

        // Tunisia
        State::create(["country_code" => "TN", "code" => "31", "name" => "Béja",]);
        State::create(["country_code" => "TN", "code" => "13", "name" => "Ben Arous",]);
        State::create(["country_code" => "TN", "code" => "23", "name" => "Bizerte",]);
        State::create(["country_code" => "TN", "code" => "81", "name" => "Gabès",]);
        State::create(["country_code" => "TN", "code" => "71", "name" => "Gafsa",]);
        State::create(["country_code" => "TN", "code" => "32", "name" => "Jendouba",]);
        State::create(["country_code" => "TN", "code" => "41", "name" => "Kairouan",]);
        State::create(["country_code" => "TN", "code" => "42", "name" => "Kasserine",]);
        State::create(["country_code" => "TN", "code" => "73", "name" => "Kébili",]);
        State::create(["country_code" => "TN", "code" => "12", "name" => "L'Ariana",]);
        State::create(["country_code" => "TN", "code" => "14", "name" => "La Manouba",]);
        State::create(["country_code" => "TN", "code" => "33", "name" => "Le Kef",]);
        State::create(["country_code" => "TN", "code" => "53", "name" => "Mahdia",]);
        State::create(["country_code" => "TN", "code" => "82", "name" => "Médenine",]);
        State::create(["country_code" => "TN", "code" => "52", "name" => "Monastir",]);
        State::create(["country_code" => "TN", "code" => "21", "name" => "Nabeul",]);
        State::create(["country_code" => "TN", "code" => "61", "name" => "Sfax",]);
        State::create(["country_code" => "TN", "code" => "43", "name" => "Sidi Bouzid",]);
        State::create(["country_code" => "TN", "code" => "34", "name" => "Siliana",]);
        State::create(["country_code" => "TN", "code" => "51", "name" => "Sousse",]);
        State::create(["country_code" => "TN", "code" => "83", "name" => "Tataouine",]);
        State::create(["country_code" => "TN", "code" => "72", "name" => "Tozeur",]);
        State::create(["country_code" => "TN", "code" => "11", "name" => "Tunis",]);
        State::create(["country_code" => "TN", "code" => "22", "name" => "Zaghouan",]);

        // Turkey
        State::create(["country_code" => "TR", "code" => "01", "name" => "Adana",]);
        State::create(["country_code" => "TR", "code" => "02", "name" => "Adıyaman",]);
        State::create(["country_code" => "TR", "code" => "03", "name" => "Afyonkarahisar",]);
        State::create(["country_code" => "TR", "code" => "04", "name" => "Ağrı",]);
        State::create(["country_code" => "TR", "code" => "68", "name" => "Aksaray",]);
        State::create(["country_code" => "TR", "code" => "05", "name" => "Amasya",]);
        State::create(["country_code" => "TR", "code" => "06", "name" => "Ankara",]);
        State::create(["country_code" => "TR", "code" => "07", "name" => "Antalya",]);
        State::create(["country_code" => "TR", "code" => "75", "name" => "Ardahan",]);
        State::create(["country_code" => "TR", "code" => "08", "name" => "Artvin",]);
        State::create(["country_code" => "TR", "code" => "09", "name" => "Aydın",]);
        State::create(["country_code" => "TR", "code" => "10", "name" => "Balıkesir",]);
        State::create(["country_code" => "TR", "code" => "74", "name" => "Bartın",]);
        State::create(["country_code" => "TR", "code" => "72", "name" => "Batman",]);
        State::create(["country_code" => "TR", "code" => "69", "name" => "Bayburt",]);
        State::create(["country_code" => "TR", "code" => "11", "name" => "Bilecik",]);
        State::create(["country_code" => "TR", "code" => "12", "name" => "Bingöl",]);
        State::create(["country_code" => "TR", "code" => "13", "name" => "Bitlis",]);
        State::create(["country_code" => "TR", "code" => "14", "name" => "Bolu",]);
        State::create(["country_code" => "TR", "code" => "15", "name" => "Burdur",]);
        State::create(["country_code" => "TR", "code" => "16", "name" => "Bursa",]);
        State::create(["country_code" => "TR", "code" => "17", "name" => "Çanakkale",]);
        State::create(["country_code" => "TR", "code" => "18", "name" => "Çankırı",]);
        State::create(["country_code" => "TR", "code" => "19", "name" => "Çorum",]);
        State::create(["country_code" => "TR", "code" => "20", "name" => "Denizli",]);
        State::create(["country_code" => "TR", "code" => "21", "name" => "Diyarbakır",]);
        State::create(["country_code" => "TR", "code" => "81", "name" => "Düzce",]);
        State::create(["country_code" => "TR", "code" => "22", "name" => "Edirne",]);
        State::create(["country_code" => "TR", "code" => "23", "name" => "Elazığ",]);
        State::create(["country_code" => "TR", "code" => "24", "name" => "Erzincan",]);
        State::create(["country_code" => "TR", "code" => "25", "name" => "Erzurum",]);
        State::create(["country_code" => "TR", "code" => "26", "name" => "Eskişehir",]);
        State::create(["country_code" => "TR", "code" => "27", "name" => "Gaziantep",]);
        State::create(["country_code" => "TR", "code" => "28", "name" => "Giresun",]);
        State::create(["country_code" => "TR", "code" => "29", "name" => "Gümüşhane",]);
        State::create(["country_code" => "TR", "code" => "30", "name" => "Hakkâri",]);
        State::create(["country_code" => "TR", "code" => "31", "name" => "Hatay",]);
        State::create(["country_code" => "TR", "code" => "76", "name" => "Iğdır",]);
        State::create(["country_code" => "TR", "code" => "32", "name" => "Isparta",]);
        State::create(["country_code" => "TR", "code" => "34", "name" => "İstanbul",]);
        State::create(["country_code" => "TR", "code" => "35", "name" => "İzmir",]);
        State::create(["country_code" => "TR", "code" => "46", "name" => "Kahramanmaraş",]);
        State::create(["country_code" => "TR", "code" => "78", "name" => "Karabük",]);
        State::create(["country_code" => "TR", "code" => "70", "name" => "Karaman",]);
        State::create(["country_code" => "TR", "code" => "36", "name" => "Kars",]);
        State::create(["country_code" => "TR", "code" => "37", "name" => "Kastamonu",]);
        State::create(["country_code" => "TR", "code" => "38", "name" => "Kayseri",]);
        State::create(["country_code" => "TR", "code" => "71", "name" => "Kırıkkale",]);
        State::create(["country_code" => "TR", "code" => "39", "name" => "Kırklareli",]);
        State::create(["country_code" => "TR", "code" => "40", "name" => "Kırşehir",]);
        State::create(["country_code" => "TR", "code" => "79", "name" => "Kilis",]);
        State::create(["country_code" => "TR", "code" => "41", "name" => "Kocaeli",]);
        State::create(["country_code" => "TR", "code" => "42", "name" => "Konya",]);
        State::create(["country_code" => "TR", "code" => "43", "name" => "Kütahya",]);
        State::create(["country_code" => "TR", "code" => "44", "name" => "Malatya",]);
        State::create(["country_code" => "TR", "code" => "45", "name" => "Manisa",]);
        State::create(["country_code" => "TR", "code" => "47", "name" => "Mardin",]);
        State::create(["country_code" => "TR", "code" => "33", "name" => "Mersin",]);
        State::create(["country_code" => "TR", "code" => "48", "name" => "Muğla",]);
        State::create(["country_code" => "TR", "code" => "49", "name" => "Muş",]);
        State::create(["country_code" => "TR", "code" => "50", "name" => "Nevşehir",]);
        State::create(["country_code" => "TR", "code" => "51", "name" => "Niğde",]);
        State::create(["country_code" => "TR", "code" => "52", "name" => "Ordu",]);
        State::create(["country_code" => "TR", "code" => "80", "name" => "Osmaniye",]);
        State::create(["country_code" => "TR", "code" => "53", "name" => "Rize",]);
        State::create(["country_code" => "TR", "code" => "54", "name" => "Sakarya",]);
        State::create(["country_code" => "TR", "code" => "55", "name" => "Samsun",]);
        State::create(["country_code" => "TR", "code" => "56", "name" => "Siirt",]);
        State::create(["country_code" => "TR", "code" => "57", "name" => "Sinop",]);
        State::create(["country_code" => "TR", "code" => "58", "name" => "Sivas",]);
        State::create(["country_code" => "TR", "code" => "63", "name" => "Şanlıurfa",]);
        State::create(["country_code" => "TR", "code" => "73", "name" => "Şırnak",]);
        State::create(["country_code" => "TR", "code" => "59", "name" => "Tekirdağ",]);
        State::create(["country_code" => "TR", "code" => "60", "name" => "Tokat",]);
        State::create(["country_code" => "TR", "code" => "61", "name" => "Trabzon",]);
        State::create(["country_code" => "TR", "code" => "62", "name" => "Tunceli",]);
        State::create(["country_code" => "TR", "code" => "64", "name" => "Uşak",]);
        State::create(["country_code" => "TR", "code" => "65", "name" => "Van",]);
        State::create(["country_code" => "TR", "code" => "77", "name" => "Yalova",]);
        State::create(["country_code" => "TR", "code" => "66", "name" => "Yozgat",]);
        State::create(["country_code" => "TR", "code" => "67", "name" => "Zonguldak",]);

        // Turkmenistan
        State::create(["country_code" => "TM", "code" => "A", "name" => "Ahal",]);
        State::create(["country_code" => "TM", "code" => "B", "name" => "Balkan",]);
        State::create(["country_code" => "TM", "code" => "D", "name" => "Daşoguz",]);
        State::create(["country_code" => "TM", "code" => "L", "name" => "Lebap",]);
        State::create(["country_code" => "TM", "code" => "M", "name" => "Mary",]);
        State::create(["country_code" => "TM", "code" => "S", "name" => "Aşgabat",]);

        // Turks and Caicos Islands (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "TC", "code" => "TC", "name" => "Turks and Caicos Islands",]);

        // Tuvalu
        State::create(["country_code" => "TV", "code" => "FUN", "name" => "Funafuti",]);
        State::create(["country_code" => "TV", "code" => "NMG", "name" => "Nanumaga",]);
        State::create(["country_code" => "TV", "code" => "NMA", "name" => "Nanumea",]);
        State::create(["country_code" => "TV", "code" => "NIT", "name" => "Niutao",]);
        State::create(["country_code" => "TV", "code" => "NUI", "name" => "Nui",]);
        State::create(["country_code" => "TV", "code" => "NKF", "name" => "Nukufetau",]);
        State::create(["country_code" => "TV", "code" => "NKL", "name" => "Nukulaelae",]);
        State::create(["country_code" => "TV", "code" => "VAI", "name" => "Vaitupu",]);

        // Uganda
        State::create(["country_code" => "UG", "code" => "C", "name" => "Central",]);
        State::create(["country_code" => "UG", "code" => "E", "name" => "Eastern",]);
        State::create(["country_code" => "UG", "code" => "N", "name" => "Northern",]);
        State::create(["country_code" => "UG", "code" => "W", "name" => "Western",]);

        // Ukraine
        State::create(["country_code" => "UA", "code" => "71", "name" => "Cherkaska oblast",]);
        State::create(["country_code" => "UA", "code" => "74", "name" => "Chernihivska oblast",]);
        State::create(["country_code" => "UA", "code" => "77", "name" => "Chernivetska oblast",]);
        State::create(["country_code" => "UA", "code" => "12", "name" => "Dnipropetrovska oblast",]);
        State::create(["country_code" => "UA", "code" => "14", "name" => "Donetska oblast",]);
        State::create(["country_code" => "UA", "code" => "26", "name" => "Ivano-Frankivska oblast",]);
        State::create(["country_code" => "UA", "code" => "63", "name" => "Kharkivska oblast",]);
        State::create(["country_code" => "UA", "code" => "65", "name" => "Khersonska oblast",]);
        State::create(["country_code" => "UA", "code" => "68", "name" => "Khmelnytska oblast",]);
        State::create(["country_code" => "UA", "code" => "35", "name" => "Kirovohradska oblast",]);
        State::create(["country_code" => "UA", "code" => "32", "name" => "Kyivska oblast",]);
        State::create(["country_code" => "UA", "code" => "09", "name" => "Luhanska oblast",]);
        State::create(["country_code" => "UA", "code" => "46", "name" => "Lvivska oblast",]);
        State::create(["country_code" => "UA", "code" => "48", "name" => "Mykolaivska oblast",]);
        State::create(["country_code" => "UA", "code" => "51", "name" => "Odeska oblast",]);
        State::create(["country_code" => "UA", "code" => "53", "name" => "Poltavska oblast",]);
        State::create(["country_code" => "UA", "code" => "56", "name" => "Rivnenska oblast",]);
        State::create(["country_code" => "UA", "code" => "59", "name" => "Sumska oblast",]);
        State::create(["country_code" => "UA", "code" => "61", "name" => "Ternopilska oblast",]);
        State::create(["country_code" => "UA", "code" => "05", "name" => "Vinnytska oblast",]);
        State::create(["country_code" => "UA", "code" => "07", "name" => "Volynska oblast",]);
        State::create(["country_code" => "UA", "code" => "21", "name" => "Zakarpatska oblast",]);
        State::create(["country_code" => "UA", "code" => "23", "name" => "Zaporizka oblast",]);
        State::create(["country_code" => "UA", "code" => "18", "name" => "Zhytomyrska oblast",]);
        State::create(["country_code" => "UA", "code" => "43", "name" => "Avtonomna Respublika Krym",]);
        State::create(["country_code" => "UA", "code" => "30", "name" => "Kyiv",]);
        State::create(["country_code" => "UA", "code" => "40", "name" => "Sevastopol",]);

        // United Arab Emirates
        State::create(["country_code" => "AE", "code" => "AZ", "name" => "Abū Z̧aby",]);
        State::create(["country_code" => "AE", "code" => "AJ", "name" => "‘Ajmān",]);
        State::create(["country_code" => "AE", "code" => "FU", "name" => "Al Fujayrah",]);
        State::create(["country_code" => "AE", "code" => "SH", "name" => "Ash Shāriqah",]);
        State::create(["country_code" => "AE", "code" => "DU", "name" => "Dubayy",]);
        State::create(["country_code" => "AE", "code" => "RK", "name" => "Ra’s al Khaymah",]);
        State::create(["country_code" => "AE", "code" => "UQ", "name" => "Umm al Qaywayn",]);

        // United Kingdom
        State::create(["country_code" => "GB", "code" => "BKM", "name" => "Buckinghamshire",]);
        State::create(["country_code" => "GB", "code" => "CAM", "name" => "Cambridgeshire",]);
        State::create(["country_code" => "GB", "code" => "CMA", "name" => "Cumbria",]);
        State::create(["country_code" => "GB", "code" => "DBY", "name" => "Derbyshire",]);
        State::create(["country_code" => "GB", "code" => "DEV", "name" => "Devon",]);
        State::create(["country_code" => "GB", "code" => "DOR", "name" => "Dorset",]);
        State::create(["country_code" => "GB", "code" => "ESX", "name" => "East Sussex",]);
        State::create(["country_code" => "GB", "code" => "ESS", "name" => "Essex",]);
        State::create(["country_code" => "GB", "code" => "GLS", "name" => "Gloucestershire",]);
        State::create(["country_code" => "GB", "code" => "HAM", "name" => "Hampshire",]);
        State::create(["country_code" => "GB", "code" => "HRT", "name" => "Hertfordshire",]);
        State::create(["country_code" => "GB", "code" => "KEN", "name" => "Kent",]);
        State::create(["country_code" => "GB", "code" => "LAN", "name" => "Lancashire",]);
        State::create(["country_code" => "GB", "code" => "LEC", "name" => "Leicestershire",]);
        State::create(["country_code" => "GB", "code" => "LIN", "name" => "Lincolnshire",]);
        State::create(["country_code" => "GB", "code" => "NFK", "name" => "Norfolk",]);
        State::create(["country_code" => "GB", "code" => "NYK", "name" => "North Yorkshire",]);
        State::create(["country_code" => "GB", "code" => "NTH", "name" => "Northamptonshire",]);
        State::create(["country_code" => "GB", "code" => "NTT", "name" => "Nottinghamshire",]);
        State::create(["country_code" => "GB", "code" => "OXF", "name" => "Oxfordshire",]);
        State::create(["country_code" => "GB", "code" => "SOM", "name" => "Somerset",]);
        State::create(["country_code" => "GB", "code" => "STS", "name" => "Staffordshire",]);
        State::create(["country_code" => "GB", "code" => "SFK", "name" => "Suffolk",]);
        State::create(["country_code" => "GB", "code" => "SRY", "name" => "Surrey",]);
        State::create(["country_code" => "GB", "code" => "WAR", "name" => "Warwickshire",]);
        State::create(["country_code" => "GB", "code" => "WSX", "name" => "West Sussex",]);
        State::create(["country_code" => "GB", "code" => "WOR", "name" => "Worcestershire",]);
        State::create(["country_code" => "GB", "code" => "LND", "name" => "London, City of",]);
        State::create(["country_code" => "GB", "code" => "BDG", "name" => "Barking and Dagenham",]);
        State::create(["country_code" => "GB", "code" => "BNE", "name" => "Barnet",]);
        State::create(["country_code" => "GB", "code" => "BEX", "name" => "Bexley",]);
        State::create(["country_code" => "GB", "code" => "BEN", "name" => "Brent",]);
        State::create(["country_code" => "GB", "code" => "BRY", "name" => "Bromley",]);
        State::create(["country_code" => "GB", "code" => "CMD", "name" => "Camden",]);
        State::create(["country_code" => "GB", "code" => "CRY", "name" => "Croydon",]);
        State::create(["country_code" => "GB", "code" => "EAL", "name" => "Ealing",]);
        State::create(["country_code" => "GB", "code" => "ENF", "name" => "Enfield",]);
        State::create(["country_code" => "GB", "code" => "GRE", "name" => "Greenwich",]);
        State::create(["country_code" => "GB", "code" => "HCK", "name" => "Hackney",]);
        State::create(["country_code" => "GB", "code" => "HMF", "name" => "Hammersmith and Fulham",]);
        State::create(["country_code" => "GB", "code" => "HRY", "name" => "Haringey",]);
        State::create(["country_code" => "GB", "code" => "HRW", "name" => "Harrow",]);
        State::create(["country_code" => "GB", "code" => "HAV", "name" => "Havering",]);
        State::create(["country_code" => "GB", "code" => "HIL", "name" => "Hillingdon",]);
        State::create(["country_code" => "GB", "code" => "HNS", "name" => "Hounslow",]);
        State::create(["country_code" => "GB", "code" => "ISL", "name" => "Islington",]);
        State::create(["country_code" => "GB", "code" => "KEC", "name" => "Kensington and Chelsea",]);
        State::create(["country_code" => "GB", "code" => "KTT", "name" => "Kingston upon Thames",]);
        State::create(["country_code" => "GB", "code" => "LBH", "name" => "Lambeth",]);
        State::create(["country_code" => "GB", "code" => "LEW", "name" => "Lewisham",]);
        State::create(["country_code" => "GB", "code" => "MRT", "name" => "Merton",]);
        State::create(["country_code" => "GB", "code" => "NWM", "name" => "Newham",]);
        State::create(["country_code" => "GB", "code" => "RDB", "name" => "Redbridge",]);
        State::create(["country_code" => "GB", "code" => "RIC", "name" => "Richmond upon Thames",]);
        State::create(["country_code" => "GB", "code" => "SWK", "name" => "Southwark",]);
        State::create(["country_code" => "GB", "code" => "STN", "name" => "Sutton",]);
        State::create(["country_code" => "GB", "code" => "TWH", "name" => "Tower Hamlets",]);
        State::create(["country_code" => "GB", "code" => "WFT", "name" => "Waltham Forest",]);
        State::create(["country_code" => "GB", "code" => "WND", "name" => "Wandsworth",]);
        State::create(["country_code" => "GB", "code" => "WSM", "name" => "Westminster",]);
        State::create(["country_code" => "GB", "code" => "BNS", "name" => "Barnsley",]);
        State::create(["country_code" => "GB", "code" => "BIR", "name" => "Birmingham",]);
        State::create(["country_code" => "GB", "code" => "BOL", "name" => "Bolton",]);
        State::create(["country_code" => "GB", "code" => "BRD", "name" => "Bradford",]);
        State::create(["country_code" => "GB", "code" => "BUR", "name" => "Bury",]);
        State::create(["country_code" => "GB", "code" => "CLD", "name" => "Calderdale",]);
        State::create(["country_code" => "GB", "code" => "COV", "name" => "Coventry",]);
        State::create(["country_code" => "GB", "code" => "DNC", "name" => "Doncaster",]);
        State::create(["country_code" => "GB", "code" => "DUD", "name" => "Dudley",]);
        State::create(["country_code" => "GB", "code" => "GAT", "name" => "Gateshead",]);
        State::create(["country_code" => "GB", "code" => "KIR", "name" => "Kirklees",]);
        State::create(["country_code" => "GB", "code" => "KWL", "name" => "Knowsley",]);
        State::create(["country_code" => "GB", "code" => "LDS", "name" => "Leeds",]);
        State::create(["country_code" => "GB", "code" => "LIV", "name" => "Liverpool",]);
        State::create(["country_code" => "GB", "code" => "MAN", "name" => "Manchester",]);
        State::create(["country_code" => "GB", "code" => "NET", "name" => "Newcastle upon Tyne",]);
        State::create(["country_code" => "GB", "code" => "NTY", "name" => "North Tyneside",]);
        State::create(["country_code" => "GB", "code" => "OLD", "name" => "Oldham",]);
        State::create(["country_code" => "GB", "code" => "RCH", "name" => "Rochdale",]);
        State::create(["country_code" => "GB", "code" => "ROT", "name" => "Rotherham",]);
        State::create(["country_code" => "GB", "code" => "SHN", "name" => "St. Helens",]);
        State::create(["country_code" => "GB", "code" => "SLF", "name" => "Salford",]);
        State::create(["country_code" => "GB", "code" => "SAW", "name" => "Sandwell",]);
        State::create(["country_code" => "GB", "code" => "SFT", "name" => "Sefton",]);
        State::create(["country_code" => "GB", "code" => "SHF", "name" => "Sheffield",]);
        State::create(["country_code" => "GB", "code" => "SOL", "name" => "Solihull",]);
        State::create(["country_code" => "GB", "code" => "STY", "name" => "South Tyneside",]);
        State::create(["country_code" => "GB", "code" => "SKP", "name" => "Stockport",]);
        State::create(["country_code" => "GB", "code" => "SND", "name" => "Sunderland",]);
        State::create(["country_code" => "GB", "code" => "TAM", "name" => "Tameside",]);
        State::create(["country_code" => "GB", "code" => "TRF", "name" => "Trafford",]);
        State::create(["country_code" => "GB", "code" => "WKF", "name" => "Wakefield",]);
        State::create(["country_code" => "GB", "code" => "WLL", "name" => "Walsall",]);
        State::create(["country_code" => "GB", "code" => "WGN", "name" => "Wigan",]);
        State::create(["country_code" => "GB", "code" => "WRL", "name" => "Wirral",]);
        State::create(["country_code" => "GB", "code" => "WLV", "name" => "Wolverhampton",]);
        State::create(["country_code" => "GB", "code" => "BAS", "name" => "Bath and North East Somerset",]);
        State::create(["country_code" => "GB", "code" => "BDF", "name" => "Bedford",]);
        State::create(["country_code" => "GB", "code" => "BBD", "name" => "Blackburn with Darwen",]);
        State::create(["country_code" => "GB", "code" => "BPL", "name" => "Blackpool",]);
        State::create(["country_code" => "GB", "code" => "BMH", "name" => "Bournemouth",]);
        State::create(["country_code" => "GB", "code" => "BRC", "name" => "Bracknell Forest",]);
        State::create(["country_code" => "GB", "code" => "BNH", "name" => "Brighton and Hove",]);
        State::create(["country_code" => "GB", "code" => "BST", "name" => "Bristol, City of",]);
        State::create(["country_code" => "GB", "code" => "CBF", "name" => "Central Bedfordshire",]);
        State::create(["country_code" => "GB", "code" => "CHE", "name" => "Cheshire East",]);
        State::create(["country_code" => "GB", "code" => "CHW", "name" => "Cheshire West and Chester",]);
        State::create(["country_code" => "GB", "code" => "CON", "name" => "Cornwall",]);
        State::create(["country_code" => "GB", "code" => "DAL", "name" => "Darlington",]);
        State::create(["country_code" => "GB", "code" => "DER", "name" => "Derby",]);
        State::create(["country_code" => "GB", "code" => "DUR", "name" => "Durham County",]);
        State::create(["country_code" => "GB", "code" => "ERY", "name" => "East Riding of Yorkshire",]);
        State::create(["country_code" => "GB", "code" => "HAL", "name" => "Halton",]);
        State::create(["country_code" => "GB", "code" => "HPL", "name" => "Hartlepool",]);
        State::create(["country_code" => "GB", "code" => "HEF", "name" => "Herefordshire",]);
        State::create(["country_code" => "GB", "code" => "IOW", "name" => "Isle of Wight",]);
        State::create(["country_code" => "GB", "code" => "IOS", "name" => "Isles of Scilly",]);
        State::create(["country_code" => "GB", "code" => "KHL", "name" => "Kingston upon Hull",]);
        State::create(["country_code" => "GB", "code" => "LCE", "name" => "Leicester",]);
        State::create(["country_code" => "GB", "code" => "LUT", "name" => "Luton",]);
        State::create(["country_code" => "GB", "code" => "MDW", "name" => "Medway",]);
        State::create(["country_code" => "GB", "code" => "MDB", "name" => "Middlesbrough",]);
        State::create(["country_code" => "GB", "code" => "MIK", "name" => "Milton Keynes",]);
        State::create(["country_code" => "GB", "code" => "NEL", "name" => "North East Lincolnshire",]);
        State::create(["country_code" => "GB", "code" => "NLN", "name" => "North Lincolnshire",]);
        State::create(["country_code" => "GB", "code" => "NSM", "name" => "North Somerset",]);
        State::create(["country_code" => "GB", "code" => "NBL", "name" => "Northumberland",]);
        State::create(["country_code" => "GB", "code" => "NGM", "name" => "Nottingham",]);
        State::create(["country_code" => "GB", "code" => "PTE", "name" => "Peterborough",]);
        State::create(["country_code" => "GB", "code" => "PLY", "name" => "Plymouth",]);
        State::create(["country_code" => "GB", "code" => "POL", "name" => "Poole",]);
        State::create(["country_code" => "GB", "code" => "POR", "name" => "Portsmouth",]);
        State::create(["country_code" => "GB", "code" => "RDG", "name" => "Reading",]);
        State::create(["country_code" => "GB", "code" => "RCC", "name" => "Redcar and Cleveland",]);
        State::create(["country_code" => "GB", "code" => "RUT", "name" => "Rutland",]);
        State::create(["country_code" => "GB", "code" => "SHR", "name" => "Shropshire",]);
        State::create(["country_code" => "GB", "code" => "SLG", "name" => "Slough",]);
        State::create(["country_code" => "GB", "code" => "SGC", "name" => "South Gloucestershire",]);
        State::create(["country_code" => "GB", "code" => "STH", "name" => "Southampton",]);
        State::create(["country_code" => "GB", "code" => "SOS", "name" => "Southend-on-Sea",]);
        State::create(["country_code" => "GB", "code" => "STT", "name" => "Stockton-on-Tees",]);
        State::create(["country_code" => "GB", "code" => "STE", "name" => "Stoke-on-Trent",]);
        State::create(["country_code" => "GB", "code" => "SWD", "name" => "Swindon",]);
        State::create(["country_code" => "GB", "code" => "TFW", "name" => "Telford and Wrekin",]);
        State::create(["country_code" => "GB", "code" => "THR", "name" => "Thurrock",]);
        State::create(["country_code" => "GB", "code" => "TOB", "name" => "Torbay",]);
        State::create(["country_code" => "GB", "code" => "WRT", "name" => "Warrington",]);
        State::create(["country_code" => "GB", "code" => "WBK", "name" => "West Berkshire",]);
        State::create(["country_code" => "GB", "code" => "WIL", "name" => "Wiltshire",]);
        State::create(["country_code" => "GB", "code" => "WNM", "name" => "Windsor and Maidenhead",]);
        State::create(["country_code" => "GB", "code" => "WOK", "name" => "Wokingham",]);
        State::create(["country_code" => "GB", "code" => "YOR", "name" => "York",]);
        State::create(["country_code" => "GB", "code" => "ANN", "name" => "Antrim and Newtownabbey",]);
        State::create(["country_code" => "GB", "code" => "AND", "name" => "Ards and North Down",]);
        State::create(["country_code" => "GB", "code" => "ABC", "name" => "Armagh City, Banbridge and Craigavon",]);
        State::create(["country_code" => "GB", "code" => "BFS", "name" => "Belfast",]);
        State::create(["country_code" => "GB", "code" => "CCG", "name" => "Causeway Coast and Glens",]);
        State::create(["country_code" => "GB", "code" => "DRS", "name" => "Derry City and Strabane",]);
        State::create(["country_code" => "GB", "code" => "FMO", "name" => "Fermanagh and Omagh",]);
        State::create(["country_code" => "GB", "code" => "LBC", "name" => "Lisburn and Castlereagh",]);
        State::create(["country_code" => "GB", "code" => "MEA", "name" => "Mid and East Antrim",]);
        State::create(["country_code" => "GB", "code" => "MUL", "name" => "Mid Ulster",]);
        State::create(["country_code" => "GB", "code" => "NMD", "name" => "Newry, Mourne and Down",]);
        State::create(["country_code" => "GB", "code" => "ABE", "name" => "Aberdeen City",]);
        State::create(["country_code" => "GB", "code" => "ABD", "name" => "Aberdeenshire",]);
        State::create(["country_code" => "GB", "code" => "ANS", "name" => "Angus",]);
        State::create(["country_code" => "GB", "code" => "AGB", "name" => "Argyll and Bute",]);
        State::create(["country_code" => "GB", "code" => "CLK", "name" => "Clackmannanshire",]);
        State::create(["country_code" => "GB", "code" => "DGY", "name" => "Dumfries and Galloway",]);
        State::create(["country_code" => "GB", "code" => "DND", "name" => "Dundee City",]);
        State::create(["country_code" => "GB", "code" => "EAY", "name" => "East Ayrshire",]);
        State::create(["country_code" => "GB", "code" => "EDU", "name" => "East Dunbartonshire",]);
        State::create(["country_code" => "GB", "code" => "ELN", "name" => "East Lothian",]);
        State::create(["country_code" => "GB", "code" => "ERW", "name" => "East Renfrewshire",]);
        State::create(["country_code" => "GB", "code" => "EDH", "name" => "Edinburgh, City of",]);
        State::create(["country_code" => "GB", "code" => "ELS", "name" => "Eilean Siar",]);
        State::create(["country_code" => "GB", "code" => "FAL", "name" => "Falkirk",]);
        State::create(["country_code" => "GB", "code" => "FIF", "name" => "Fife",]);
        State::create(["country_code" => "GB", "code" => "GLG", "name" => "Glasgow City",]);
        State::create(["country_code" => "GB", "code" => "HLD", "name" => "Highland",]);
        State::create(["country_code" => "GB", "code" => "IVC", "name" => "Inverclyde",]);
        State::create(["country_code" => "GB", "code" => "MLN", "name" => "Midlothian",]);
        State::create(["country_code" => "GB", "code" => "MRY", "name" => "Moray",]);
        State::create(["country_code" => "GB", "code" => "NAY", "name" => "North Ayrshire",]);
        State::create(["country_code" => "GB", "code" => "NLK", "name" => "North Lanarkshire",]);
        State::create(["country_code" => "GB", "code" => "ORK", "name" => "Orkney Islands",]);
        State::create(["country_code" => "GB", "code" => "PKN", "name" => "Perth and Kinross",]);
        State::create(["country_code" => "GB", "code" => "RFW", "name" => "Renfrewshire",]);
        State::create(["country_code" => "GB", "code" => "SCB", "name" => "Scottish Borders, The",]);
        State::create(["country_code" => "GB", "code" => "ZET", "name" => "Shetland Islands",]);
        State::create(["country_code" => "GB", "code" => "SAY", "name" => "South Ayrshire",]);
        State::create(["country_code" => "GB", "code" => "SLK", "name" => "South Lanarkshire",]);
        State::create(["country_code" => "GB", "code" => "STG", "name" => "Stirling",]);
        State::create(["country_code" => "GB", "code" => "WDU", "name" => "West Dunbartonshire",]);
        State::create(["country_code" => "GB", "code" => "WLN", "name" => "West Lothian",]);
        State::create(["country_code" => "GB", "code" => "BGW", "name" => "Blaenau Gwent",]);
        State::create(["country_code" => "GB", "code" => "BGE", "name" => "Bridgend",]);
        State::create(["country_code" => "GB", "code" => "CAY", "name" => "Caerphilly",]);
        State::create(["country_code" => "GB", "code" => "CRF", "name" => "Cardiff",]);
        State::create(["country_code" => "GB", "code" => "CMN", "name" => "Carmarthenshire",]);
        State::create(["country_code" => "GB", "code" => "CGN", "name" => "Ceredigion",]);
        State::create(["country_code" => "GB", "code" => "CWY", "name" => "Conwy",]);
        State::create(["country_code" => "GB", "code" => "DEN", "name" => "Denbighshire",]);
        State::create(["country_code" => "GB", "code" => "FLN", "name" => "Flintshire",]);
        State::create(["country_code" => "GB", "code" => "GWN", "name" => "Gwynedd",]);
        State::create(["country_code" => "GB", "code" => "AGY", "name" => "Isle of Anglesey",]);
        State::create(["country_code" => "GB", "code" => "MTY", "name" => "Merthyr Tydfil",]);
        State::create(["country_code" => "GB", "code" => "MON", "name" => "Monmouthshire",]);
        State::create(["country_code" => "GB", "code" => "NTL", "name" => "Neath Port Talbot",]);
        State::create(["country_code" => "GB", "code" => "NWP", "name" => "Newport",]);
        State::create(["country_code" => "GB", "code" => "PEM", "name" => "Pembrokeshire",]);
        State::create(["country_code" => "GB", "code" => "POW", "name" => "Powys",]);
        State::create(["country_code" => "GB", "code" => "RCT", "name" => "Rhondda, Cynon, Taff",]);
        State::create(["country_code" => "GB", "code" => "SWA", "name" => "Swansea",]);
        State::create(["country_code" => "GB", "code" => "TOF", "name" => "Torfaen",]);
        State::create(["country_code" => "GB", "code" => "VGL", "name" => "Vale of Glamorgan, The",]);
        State::create(["country_code" => "GB", "code" => "WRX", "name" => "Wrexham",]);

        // United States
        State::create(["country_code" => "US", "code" => "AL", "name" => "Alabama",]);
        State::create(["country_code" => "US", "code" => "AK", "name" => "Alaska",]);
        State::create(["country_code" => "US", "code" => "AZ", "name" => "Arizona",]);
        State::create(["country_code" => "US", "code" => "AR", "name" => "Arkansas",]);
        State::create(["country_code" => "US", "code" => "CA", "name" => "California",]);
        State::create(["country_code" => "US", "code" => "CO", "name" => "Colorado",]);
        State::create(["country_code" => "US", "code" => "CT", "name" => "Connecticut",]);
        State::create(["country_code" => "US", "code" => "DE", "name" => "Delaware",]);
        State::create(["country_code" => "US", "code" => "FL", "name" => "Florida",]);
        State::create(["country_code" => "US", "code" => "GA", "name" => "Georgia",]);
        State::create(["country_code" => "US", "code" => "HI", "name" => "Hawaii",]);
        State::create(["country_code" => "US", "code" => "ID", "name" => "Idaho",]);
        State::create(["country_code" => "US", "code" => "IL", "name" => "Illinois",]);
        State::create(["country_code" => "US", "code" => "IN", "name" => "Indiana",]);
        State::create(["country_code" => "US", "code" => "IA", "name" => "Iowa",]);
        State::create(["country_code" => "US", "code" => "KS", "name" => "Kansas",]);
        State::create(["country_code" => "US", "code" => "KY", "name" => "Kentucky",]);
        State::create(["country_code" => "US", "code" => "LA", "name" => "Louisiana",]);
        State::create(["country_code" => "US", "code" => "ME", "name" => "Maine",]);
        State::create(["country_code" => "US", "code" => "MD", "name" => "Maryland",]);
        State::create(["country_code" => "US", "code" => "MA", "name" => "Massachusetts",]);
        State::create(["country_code" => "US", "code" => "MI", "name" => "Michigan",]);
        State::create(["country_code" => "US", "code" => "MN", "name" => "Minnesota",]);
        State::create(["country_code" => "US", "code" => "MS", "name" => "Mississippi",]);
        State::create(["country_code" => "US", "code" => "MO", "name" => "Missouri",]);
        State::create(["country_code" => "US", "code" => "MT", "name" => "Montana",]);
        State::create(["country_code" => "US", "code" => "NE", "name" => "Nebraska",]);
        State::create(["country_code" => "US", "code" => "NV", "name" => "Nevada",]);
        State::create(["country_code" => "US", "code" => "NH", "name" => "New Hampshire",]);
        State::create(["country_code" => "US", "code" => "NJ", "name" => "New Jersey",]);
        State::create(["country_code" => "US", "code" => "NM", "name" => "New Mexico",]);
        State::create(["country_code" => "US", "code" => "NY", "name" => "New York",]);
        State::create(["country_code" => "US", "code" => "NC", "name" => "North Carolina",]);
        State::create(["country_code" => "US", "code" => "ND", "name" => "North Dakota",]);
        State::create(["country_code" => "US", "code" => "OH", "name" => "Ohio",]);
        State::create(["country_code" => "US", "code" => "OK", "name" => "Oklahoma",]);
        State::create(["country_code" => "US", "code" => "OR", "name" => "Oregon",]);
        State::create(["country_code" => "US", "code" => "PA", "name" => "Pennsylvania",]);
        State::create(["country_code" => "US", "code" => "RI", "name" => "Rhode Island",]);
        State::create(["country_code" => "US", "code" => "SC", "name" => "South Carolina",]);
        State::create(["country_code" => "US", "code" => "SD", "name" => "South Dakota",]);
        State::create(["country_code" => "US", "code" => "TN", "name" => "Tennessee",]);
        State::create(["country_code" => "US", "code" => "TX", "name" => "Texas",]);
        State::create(["country_code" => "US", "code" => "UT", "name" => "Utah",]);
        State::create(["country_code" => "US", "code" => "VT", "name" => "Vermont",]);
        State::create(["country_code" => "US", "code" => "VA", "name" => "Virginia",]);
        State::create(["country_code" => "US", "code" => "WA", "name" => "Washington",]);
        State::create(["country_code" => "US", "code" => "WV", "name" => "West Virginia",]);
        State::create(["country_code" => "US", "code" => "WI", "name" => "Wisconsin",]);
        State::create(["country_code" => "US", "code" => "WY", "name" => "Wyoming",]);
        State::create(["country_code" => "US", "code" => "DC", "name" => "District of Columbia",]);

        // United States Minor Outlying Islands
        State::create(["country_code" => "UM", "code" => "81", "name" => "Baker Island",]);
        State::create(["country_code" => "UM", "code" => "84", "name" => "Howland Island",]);
        State::create(["country_code" => "UM", "code" => "86", "name" => "Jarvis Island",]);
        State::create(["country_code" => "UM", "code" => "67", "name" => "Johnston Atoll",]);
        State::create(["country_code" => "UM", "code" => "89", "name" => "Kingman Reef",]);
        State::create(["country_code" => "UM", "code" => "71", "name" => "Midway Islands",]);
        State::create(["country_code" => "UM", "code" => "76", "name" => "Navassa Island",]);
        State::create(["country_code" => "UM", "code" => "95", "name" => "Palmyra Atoll",]);
        State::create(["country_code" => "UM", "code" => "79", "name" => "Wake Island",]);

        // Uruguay
        State::create(["country_code" => "UY", "code" => "AR", "name" => "Artigas",]);
        State::create(["country_code" => "UY", "code" => "CA", "name" => "Canelones",]);
        State::create(["country_code" => "UY", "code" => "CL", "name" => "Cerro Largo",]);
        State::create(["country_code" => "UY", "code" => "CO", "name" => "Colonia",]);
        State::create(["country_code" => "UY", "code" => "DU", "name" => "Durazno",]);
        State::create(["country_code" => "UY", "code" => "FS", "name" => "Flores",]);
        State::create(["country_code" => "UY", "code" => "FD", "name" => "Florida",]);
        State::create(["country_code" => "UY", "code" => "LA", "name" => "Lavalleja",]);
        State::create(["country_code" => "UY", "code" => "MA", "name" => "Maldonado",]);
        State::create(["country_code" => "UY", "code" => "MO", "name" => "Montevideo",]);
        State::create(["country_code" => "UY", "code" => "PA", "name" => "Paysandú",]);
        State::create(["country_code" => "UY", "code" => "RN", "name" => "Río Negro",]);
        State::create(["country_code" => "UY", "code" => "RV", "name" => "Rivera",]);
        State::create(["country_code" => "UY", "code" => "RO", "name" => "Rocha",]);
        State::create(["country_code" => "UY", "code" => "SA", "name" => "Salto",]);
        State::create(["country_code" => "UY", "code" => "SJ", "name" => "San José",]);
        State::create(["country_code" => "UY", "code" => "SO", "name" => "Soriano",]);
        State::create(["country_code" => "UY", "code" => "TA", "name" => "Tacuarembó",]);
        State::create(["country_code" => "UY", "code" => "TT", "name" => "Treinta y Tres",]);

        // Uzbekistan
        State::create(["country_code" => "UZ", "code" => "TK", "name" => "Toshkent",]);
        State::create(["country_code" => "UZ", "code" => "AN", "name" => "Andijon",]);
        State::create(["country_code" => "UZ", "code" => "BU", "name" => "Buxoro",]);
        State::create(["country_code" => "UZ", "code" => "FA", "name" => "Farg‘ona",]);
        State::create(["country_code" => "UZ", "code" => "JI", "name" => "Jizzax",]);
        State::create(["country_code" => "UZ", "code" => "NG", "name" => "Namangan",]);
        State::create(["country_code" => "UZ", "code" => "NW", "name" => "Navoiy",]);
        State::create(["country_code" => "UZ", "code" => "QA", "name" => "Qashqadaryo",]);
        State::create(["country_code" => "UZ", "code" => "SA", "name" => "Samarqand",]);
        State::create(["country_code" => "UZ", "code" => "SI", "name" => "Sirdaryo",]);
        State::create(["country_code" => "UZ", "code" => "SU", "name" => "Surxondaryo",]);
        State::create(["country_code" => "UZ", "code" => "TO", "name" => "Toshkent",]);
        State::create(["country_code" => "UZ", "code" => "XO", "name" => "Xorazm",]);
        State::create(["country_code" => "UZ", "code" => "QR", "name" => "Qoraqalpog‘iston Respublikasi",]);
        // Vanuatu
        State::create(["country_code" => "VU", "code" => "MAP", "name" => "Malampa",]);
        State::create(["country_code" => "VU", "code" => "PAM", "name" => "Pénama",]);
        State::create(["country_code" => "VU", "code" => "SAM", "name" => "Sanma",]);
        State::create(["country_code" => "VU", "code" => "SEE", "name" => "Shéfa",]);
        State::create(["country_code" => "VU", "code" => "TAE", "name" => "Taféa",]);
        State::create(["country_code" => "VU", "code" => "TOB", "name" => "Torba",]);

        // Venezuela, Bolivarian Republic of
        State::create(["country_code" => "VE", "code" => "W", "name" => "Dependencias Federales",]);
        State::create(["country_code" => "VE", "code" => "A", "name" => "Distrito Capital",]);
        State::create(["country_code" => "VE", "code" => "Z", "name" => "Amazonas",]);
        State::create(["country_code" => "VE", "code" => "B", "name" => "Anzoátegui",]);
        State::create(["country_code" => "VE", "code" => "C", "name" => "Apure",]);
        State::create(["country_code" => "VE", "code" => "D", "name" => "Aragua",]);
        State::create(["country_code" => "VE", "code" => "E", "name" => "Barinas",]);
        State::create(["country_code" => "VE", "code" => "F", "name" => "Bolívar",]);
        State::create(["country_code" => "VE", "code" => "G", "name" => "Carabobo",]);
        State::create(["country_code" => "VE", "code" => "H", "name" => "Cojedes",]);
        State::create(["country_code" => "VE", "code" => "Y", "name" => "Delta Amacuro",]);
        State::create(["country_code" => "VE", "code" => "I", "name" => "Falcón",]);
        State::create(["country_code" => "VE", "code" => "J", "name" => "Guárico",]);
        State::create(["country_code" => "VE", "code" => "K", "name" => "Lara",]);
        State::create(["country_code" => "VE", "code" => "L", "name" => "Mérida",]);
        State::create(["country_code" => "VE", "code" => "M", "name" => "Miranda",]);
        State::create(["country_code" => "VE", "code" => "N", "name" => "Monagas",]);
        State::create(["country_code" => "VE", "code" => "O", "name" => "Nueva Esparta",]);
        State::create(["country_code" => "VE", "code" => "P", "name" => "Portuguesa",]);
        State::create(["country_code" => "VE", "code" => "R", "name" => "Sucre",]);
        State::create(["country_code" => "VE", "code" => "S", "name" => "Táchira",]);
        State::create(["country_code" => "VE", "code" => "T", "name" => "Trujillo",]);
        State::create(["country_code" => "VE", "code" => "X", "name" => "Vargas",]);
        State::create(["country_code" => "VE", "code" => "U", "name" => "Yaracuy",]);
        State::create(["country_code" => "VE", "code" => "V", "name" => "Zulia",]);

        // Viet Nam
        State::create(["country_code" => "VN", "code" => "44", "name" => "An Giang",]);
        State::create(["country_code" => "VN", "code" => "43", "name" => "Bà Rịa - Vũng Tàu",]);
        State::create(["country_code" => "VN", "code" => "54", "name" => "Bắc Giang",]);
        State::create(["country_code" => "VN", "code" => "53", "name" => "Bắc Kạn",]);
        State::create(["country_code" => "VN", "code" => "55", "name" => "Bạc Liêu",]);
        State::create(["country_code" => "VN", "code" => "56", "name" => "Bắc Ninh",]);
        State::create(["country_code" => "VN", "code" => "50", "name" => "Bến Tre",]);
        State::create(["country_code" => "VN", "code" => "31", "name" => "Bình Định",]);
        State::create(["country_code" => "VN", "code" => "57", "name" => "Bình Dương",]);
        State::create(["country_code" => "VN", "code" => "58", "name" => "Bình Phước",]);
        State::create(["country_code" => "VN", "code" => "40", "name" => "Bình Thuận",]);
        State::create(["country_code" => "VN", "code" => "59", "name" => "Cà Mau",]);
        State::create(["country_code" => "VN", "code" => "04", "name" => "Cao Bằng",]);
        State::create(["country_code" => "VN", "code" => "33", "name" => "Đắk Lắk",]);
        State::create(["country_code" => "VN", "code" => "72", "name" => "Đắk Nông",]);
        State::create(["country_code" => "VN", "code" => "71", "name" => "Điện Biên",]);
        State::create(["country_code" => "VN", "code" => "39", "name" => "Đồng Nai",]);
        State::create(["country_code" => "VN", "code" => "45", "name" => "Đồng Tháp",]);
        State::create(["country_code" => "VN", "code" => "30", "name" => "Gia Lai",]);
        State::create(["country_code" => "VN", "code" => "03", "name" => "Hà Giang",]);
        State::create(["country_code" => "VN", "code" => "63", "name" => "Hà Nam",]);
        State::create(["country_code" => "VN", "code" => "23", "name" => "Hà Tĩnh",]);
        State::create(["country_code" => "VN", "code" => "61", "name" => "Hải Dương",]);
        State::create(["country_code" => "VN", "code" => "73", "name" => "Hậu Giang",]);
        State::create(["country_code" => "VN", "code" => "14", "name" => "Hòa Bình",]);
        State::create(["country_code" => "VN", "code" => "66", "name" => "Hưng Yên",]);
        State::create(["country_code" => "VN", "code" => "34", "name" => "Khánh Hòa",]);
        State::create(["country_code" => "VN", "code" => "47", "name" => "Kiến Giang",]);
        State::create(["country_code" => "VN", "code" => "28", "name" => "Kon Tum",]);
        State::create(["country_code" => "VN", "code" => "01", "name" => "Lai Châu",]);
        State::create(["country_code" => "VN", "code" => "35", "name" => "Lâm Đồng",]);
        State::create(["country_code" => "VN", "code" => "09", "name" => "Lạng Sơn",]);
        State::create(["country_code" => "VN", "code" => "02", "name" => "Lào Cai",]);
        State::create(["country_code" => "VN", "code" => "41", "name" => "Long An",]);
        State::create(["country_code" => "VN", "code" => "67", "name" => "Nam Định",]);
        State::create(["country_code" => "VN", "code" => "22", "name" => "Nghệ An",]);
        State::create(["country_code" => "VN", "code" => "18", "name" => "Ninh Bình",]);
        State::create(["country_code" => "VN", "code" => "36", "name" => "Ninh Thuận",]);
        State::create(["country_code" => "VN", "code" => "68", "name" => "Phú Thọ",]);
        State::create(["country_code" => "VN", "code" => "32", "name" => "Phú Yên",]);
        State::create(["country_code" => "VN", "code" => "24", "name" => "Quảng Bình",]);
        State::create(["country_code" => "VN", "code" => "27", "name" => "Quảng Nam",]);
        State::create(["country_code" => "VN", "code" => "29", "name" => "Quảng Ngãi",]);
        State::create(["country_code" => "VN", "code" => "13", "name" => "Quảng Ninh",]);
        State::create(["country_code" => "VN", "code" => "25", "name" => "Quảng Trị",]);
        State::create(["country_code" => "VN", "code" => "52", "name" => "Sóc Trăng",]);
        State::create(["country_code" => "VN", "code" => "05", "name" => "Sơn La",]);
        State::create(["country_code" => "VN", "code" => "37", "name" => "Tây Ninh",]);
        State::create(["country_code" => "VN", "code" => "20", "name" => "Thái Bình",]);
        State::create(["country_code" => "VN", "code" => "69", "name" => "Thái Nguyên",]);
        State::create(["country_code" => "VN", "code" => "21", "name" => "Thanh Hóa",]);
        State::create(["country_code" => "VN", "code" => "26", "name" => "Thừa Thiên-Huế",]);
        State::create(["country_code" => "VN", "code" => "46", "name" => "Tiền Giang",]);
        State::create(["country_code" => "VN", "code" => "51", "name" => "Trà Vinh",]);
        State::create(["country_code" => "VN", "code" => "07", "name" => "Tuyên Quang",]);
        State::create(["country_code" => "VN", "code" => "49", "name" => "Vĩnh Long",]);
        State::create(["country_code" => "VN", "code" => "70", "name" => "Vĩnh Phúc",]);
        State::create(["country_code" => "VN", "code" => "06", "name" => "Yên Bái",]);
        State::create(["country_code" => "VN", "code" => "CT", "name" => "Can Tho",]);
        State::create(["country_code" => "VN", "code" => "DN", "name" => "Da Nang",]);
        State::create(["country_code" => "VN", "code" => "HN", "name" => "Ha Noi",]);
        State::create(["country_code" => "VN", "code" => "HP", "name" => "Hai Phong",]);
        State::create(["country_code" => "VN", "code" => "SG", "name" => "Ho Chi Minh",]);

        // Virgin Islands, British (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "VG", "code" => "VG", "name" => "Virgin Islands, British",]);

        // Virgin Islands, U.S. (The United States Virgin Islands, an outlying area of the United States)
        State::create(["country_code" => "VI", "code" => "VI", "name" => "U.S. Virgin Islands",]);

        // Wallis and Futuna
        State::create(["country_code" => "WF", "code" => "AL", "name" => "Alo",]);
        State::create(["country_code" => "WF", "code" => "SG", "name" => "Sigave",]);
        State::create(["country_code" => "WF", "code" => "UV", "name" => "Uvea",]);

        // Western Sahara (Currently no ISO 3166-2 codes are defined for this country.)
        State::create(["country_code" => "EH", "code" => "EH", "name" => "Western Sahara",]);

        // Yemen
        State::create(["country_code" => "YE", "code" => "SA", "name" => "Amānat al ‘Āşimah",]);
        State::create(["country_code" => "YE", "code" => "AB", "name" => "Abyan",]);
        State::create(["country_code" => "YE", "code" => "AD", "name" => "‘Adan",]);
        State::create(["country_code" => "YE", "code" => "DA", "name" => "Aḑ Ḑāli‘",]);
        State::create(["country_code" => "YE", "code" => "BA", "name" => "Al Bayḑā’",]);
        State::create(["country_code" => "YE", "code" => "HU", "name" => "Al Ḩudaydah",]);
        State::create(["country_code" => "YE", "code" => "JA", "name" => "Al Jawf",]);
        State::create(["country_code" => "YE", "code" => "MR", "name" => "Al Mahrah",]);
        State::create(["country_code" => "YE", "code" => "MW", "name" => "Al Maḩwīt",]);
        State::create(["country_code" => "YE", "code" => "AM", "name" => "‘Amrān",]);
        State::create(["country_code" => "YE", "code" => "SU", "name" => "Arkhabīl Suquţrá",]);
        State::create(["country_code" => "YE", "code" => "DH", "name" => "Dhamār",]);
        State::create(["country_code" => "YE", "code" => "HD", "name" => "Ḩaḑramawt",]);
        State::create(["country_code" => "YE", "code" => "HJ", "name" => "Ḩajjah",]);
        State::create(["country_code" => "YE", "code" => "IB", "name" => "Ibb",]);
        State::create(["country_code" => "YE", "code" => "LA", "name" => "Laḩij",]);
        State::create(["country_code" => "YE", "code" => "MA", "name" => "Ma’rib",]);
        State::create(["country_code" => "YE", "code" => "RA", "name" => "Raymah",]);
        State::create(["country_code" => "YE", "code" => "SD", "name" => "Şāʻdah",]);
        State::create(["country_code" => "YE", "code" => "SN", "name" => "Şanʻā’",]);
        State::create(["country_code" => "YE", "code" => "SH", "name" => "Shabwah",]);
        State::create(["country_code" => "YE", "code" => "TA", "name" => "Tāʻizz",]);

        // Zambia
        State::create(["country_code" => "ZM", "code" => "02", "name" => "Central",]);
        State::create(["country_code" => "ZM", "code" => "08", "name" => "Copperbelt",]);
        State::create(["country_code" => "ZM", "code" => "03", "name" => "Eastern",]);
        State::create(["country_code" => "ZM", "code" => "04", "name" => "Luapula",]);
        State::create(["country_code" => "ZM", "code" => "09", "name" => "Lusaka",]);
        State::create(["country_code" => "ZM", "code" => "05", "name" => "Northern",]);
        State::create(["country_code" => "ZM", "code" => "06", "name" => "North-Western",]);
        State::create(["country_code" => "ZM", "code" => "07", "name" => "Southern",]);
        State::create(["country_code" => "ZM", "code" => "01", "name" => "Western",]);
        State::create(["country_code" => "ZM", "code" => "10", "name" => "Muchinga",]);

        // Zimbabwe
        State::create(["country_code" => "ZW", "code" =>"BU", "name" => "Bulawayo",]);
        State::create(["country_code" => "ZW", "code" =>"HA", "name" => "Harare",]);
        State::create(["country_code" => "ZW", "code" =>"MA", "name" => "Manicaland",]);
        State::create(["country_code" => "ZW", "code" =>"MC", "name" => "Mashonaland Central",]);
        State::create(["country_code" => "ZW", "code" =>"ME", "name" => "Mashonaland East",]);
        State::create(["country_code" => "ZW", "code" =>"MW", "name" => "Mashonaland West",]);
        State::create(["country_code" => "ZW", "code" =>"MV", "name" => "Masvingo",]);
        State::create(["country_code" => "ZW", "code" =>"MN", "name" => "Matabeleland North",]);
        State::create(["country_code" => "ZW", "code" =>"MS", "name" => "Matabeleland South",]);
        State::create(["country_code" => "ZW", "code" =>"MI", "name" => "Midlands",]);

    }

}
