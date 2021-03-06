<?php

use yii\db\Migration;

/**
 * Class m171124_195140_create_table_region
 */
class m171124_195140_create_table_region extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%region}}', [
            'region_id' => $this->integer(11)->notNull(),
            'country_id' => $this->integer(11)->notNull()->defaultValue(0),
            'city_id' => $this->integer(11)->notNull()->defaultValue(0),
            'name' => $this->string(64)->notNull()->defaultValue(''),
            'alias' => $this->string(128)->notNull(),
        ], $tableOptions);

        $this->batchInsert('{{%region}}', ['region_id', 'country_id', 'city_id', 'name', 'alias'], [
            [82, 1, 0, 'Азербайджан', 'azerbaydzhan'],
            [164, 1, 0, 'Нагорный Карабах', 'nagornyy-karabah'],
            [167, 1, 0, 'Нахичеванская обл.', 'nahichevanskaya-obl'],
            [246, 2, 0, 'Ереванская область', 'erevanskaya-oblast'],
            [249, 3, 0, 'Брестская обл.', 'brestskaya-obl'],
            [272, 3, 0, 'Витебская обл.', 'vitebskaya-obl'],
            [304, 3, 0, 'Гомельская обл.', 'gomel-skaya-obl'],
            [330, 3, 0, 'Гродненская обл.', 'grodnenskaya-obl'],
            [349, 3, 0, 'Минская обл.', 'minskaya-obl'],
            [377, 3, 0, 'Могилевская обл.', 'mogilevskaya-obl'],
            [1281, 4, 0, 'Абхазия', 'abhaziya'],
            [1292, 4, 0, 'Аджария', 'adzhariya'],
            [1296, 4, 0, 'Грузия', 'gruziya'],
            [1363, 4, 0, 'Южная Осетия', 'yuzhnaya-osetiya'],
            [1895, 5, 0, 'Актюбинская обл.', 'aktyubinskaya-obl'],
            [1911, 5, 0, 'Алма-Атинская обл.', 'alma-atinskaya-obl'],
            [1924, 5, 0, 'Восточно-Казахстанская обл.', 'vostochno-kazahstanskaya-obl'],
            [1942, 5, 0, 'Гурьевская обл.', 'gur-evskaya-obl'],
            [1954, 5, 0, 'Джамбулская обл.', 'dzhambulskaya-obl'],
            [1974, 5, 0, 'Джезказганская обл.', 'dzhezkazganskaya-obl'],
            [1994, 5, 0, 'Карагандинская обл.', 'karagandinskaya-obl'],
            [2010, 5, 0, 'Кзыл-Ординская обл.', 'kzyl-ordinskaya-obl'],
            [2021, 5, 0, 'Кокчетавская обл.', 'kokchetavskaya-obl'],
            [2040, 5, 0, 'Кустанайская обл.', 'kustanayskaya-obl'],
            [2055, 5, 0, 'Мангышлакская обл.', 'mangyshlakskaya-obl'],
            [2061, 5, 0, 'Павлодарская обл.', 'pavlodarskaya-obl'],
            [2074, 5, 0, 'Северо-Казахстанская обл.', 'severo-kazahstanskaya-obl'],
            [2084, 5, 0, 'Семипалатинская обл.', 'semipalatinskaya-obl'],
            [2105, 5, 0, 'Талды-Курганская обл.', 'taldy-kurganskaya-obl'],
            [2120, 5, 0, 'Тургайская обл.', 'turgayskaya-obl'],
            [2128, 5, 0, 'Целиноградская обл.', 'celinogradskaya-obl'],
            [2146, 5, 0, 'Чимкентская обл.', 'chimkentskaya-obl'],
            [2304, 6, 0, 'Иссык-Кульская обл.', 'issyk-kul-skaya-obl'],
            [2316, 6, 0, 'Кыргызстан', 'kyrgyzstan'],
            [2327, 6, 0, 'Нарынская обл.', 'narynskaya-obl'],
            [2340, 6, 0, 'Ошская обл.', 'oshskaya-obl'],
            [2365, 6, 0, 'Таласская обл.', 'talasskaya-obl'],
            [2789, 7, 0, 'Молдова', 'moldova'],
            [3160, 8, 0, 'Алтайский край', 'altayskiy-kray'],
            [3223, 8, 0, 'Амурская обл.', 'amurskaya-obl'],
            [3251, 8, 0, 'Архангельская обл.', 'arhangel-skaya-obl'],
            [3282, 8, 0, 'Астраханская обл.', 'astrahanskaya-obl'],
            [3296, 8, 0, 'Башкортостан[Башкирия]', 'bashkortostan-bashkiriya'],
            [3352, 8, 0, 'Белгородская обл.', 'belgorodskaya-obl'],
            [3371, 8, 0, 'Брянская обл.', 'bryanskaya-obl'],
            [3407, 8, 0, 'Бурятия', 'buryatiya'],
            [3437, 8, 0, 'Владимирская обл.', 'vladimirskaya-obl'],
            [3468, 8, 0, 'Волгоградская обл.', 'volgogradskaya-obl'],
            [3503, 8, 0, 'Вологодская обл.', 'vologodskaya-obl'],
            [3529, 8, 0, 'Воронежская обл.', 'voronezhskaya-obl'],
            [3563, 8, 0, 'Нижегородская [Горьковская]', 'nizhegorodskaya-gor-kovskaya'],
            [3630, 8, 0, 'Дагестан', 'dagestan'],
            [3673, 8, 0, 'Еврейская обл.', 'evreyskaya-obl'],
            [3675, 8, 0, 'Ивановская обл.', 'ivanovskaya-obl'],
            [3703, 8, 0, 'Иркутская обл.', 'irkutskaya-obl'],
            [3751, 8, 0, 'Кабардино-Балкария', 'kabardino-balkariya'],
            [3761, 8, 0, 'Калининградская обл.', 'kaliningradskaya-obl'],
            [3784, 8, 0, 'Тверская обл.', 'tverskaya-obl'],
            [3827, 8, 0, 'Калмыкия', 'kalmykiya'],
            [3841, 8, 0, 'Калужская обл.', 'kaluzhskaya-obl'],
            [3872, 8, 0, 'Камчатская обл.', 'kamchatskaya-obl'],
            [3892, 8, 0, 'Карелия', 'kareliya'],
            [3921, 8, 0, 'Кемеровская обл.', 'kemerovskaya-obl'],
            [3952, 8, 0, 'Кировская обл.', 'kirovskaya-obl'],
            [3994, 8, 0, 'Коми', 'komi'],
            [4026, 8, 0, 'Костромская обл.', 'kostromskaya-obl'],
            [4052, 8, 0, 'Краснодарский край', 'krasnodarskiy-kray'],
            [4105, 8, 0, 'Красноярский край', 'krasnoyarskiy-kray'],
            [4176, 8, 0, 'Курганская обл.', 'kurganskaya-obl'],
            [4198, 8, 0, 'Курская обл.', 'kurskaya-obl'],
            [4227, 8, 0, 'Липецкая обл.', 'lipeckaya-obl'],
            [4243, 8, 0, 'Магаданская обл.', 'magadanskaya-obl'],
            [4270, 8, 0, 'Марий Эл', 'mariy-el'],
            [4287, 8, 0, 'Мордовия', 'mordoviya'],
            [4312, 8, 0, 'Москва и Московская обл.', 'moskva-i-moskovskaya-obl'],
            [4481, 8, 0, 'Мурманская обл.', 'murmanskaya-obl'],
            [4503, 8, 0, 'Новгородская обл.', 'novgorodskaya-obl'],
            [4528, 8, 0, 'Новосибирская обл.', 'novosibirskaya-obl'],
            [4561, 8, 0, 'Омская обл.', 'omskaya-obl'],
            [4593, 8, 0, 'Оренбургская обл.', 'orenburgskaya-obl'],
            [4633, 8, 0, 'Орловская обл.', 'orlovskaya-obl'],
            [4657, 8, 0, 'Пензенская обл.', 'penzenskaya-obl'],
            [4689, 8, 0, 'Пермская обл.', 'permskaya-obl'],
            [4734, 8, 0, 'Приморский край', 'primorskiy-kray'],
            [4773, 8, 0, 'Псковская обл.', 'pskovskaya-obl'],
            [4800, 8, 0, 'Ростовская обл.', 'rostovskaya-obl'],
            [4861, 8, 0, 'Рязанская обл.', 'ryazanskaya-obl'],
            [4891, 8, 0, 'Самарская обл.', 'samarskaya-obl'],
            [4925, 8, 0, 'Санкт-Петербург и область', 'sankt-peterburg-i-oblast'],
            [4969, 8, 0, 'Саратовская обл.', 'saratovskaya-obl'],
            [5011, 8, 0, 'Саха [Якутия]', 'saha-yakutiya'],
            [5052, 8, 0, 'Сахалин', 'sahalin'],
            [5080, 8, 0, 'Свердловская обл.', 'sverdlovskaya-obl'],
            [5151, 8, 0, 'Северная Осетия', 'severnaya-osetiya'],
            [5161, 8, 0, 'Смоленская обл.', 'smolenskaya-obl'],
            [5191, 8, 0, 'Ставропольский край', 'stavropol-skiy-kray'],
            [5225, 8, 0, 'Тамбовская обл.', 'tambovskaya-obl'],
            [5246, 8, 0, 'Татарстан', 'tatarstan'],
            [5291, 8, 0, 'Томская обл.', 'tomskaya-obl'],
            [5312, 8, 0, 'Тува [Тувинская Респ.]', 'tuva-tuvinskaya-resp'],
            [5326, 8, 0, 'Тульская обл.', 'tul-skaya-obl'],
            [5356, 8, 0, 'Тюменская обл.', 'tyumenskaya-obl'],
            [5404, 8, 0, 'Удмуртия', 'udmurtiya'],
            [5432, 8, 0, 'Ульяновская обл.', 'ul-yanovskaya-obl'],
            [5458, 8, 0, 'Уральская обл.', 'ural-skaya-obl'],
            [5473, 8, 0, 'Хабаровский край', 'habarovskiy-kray'],
            [5507, 8, 0, 'Челябинская обл.', 'chelyabinskaya-obl'],
            [5543, 8, 0, 'Чечено-Ингушетия', 'checheno-ingushetiya'],
            [5555, 8, 0, 'Читинская обл.', 'chitinskaya-obl'],
            [5600, 8, 0, 'Чувашия', 'chuvashiya'],
            [5625, 8, 0, 'Ярославская обл.', 'yaroslavskaya-obl'],
            [9576, 9, 0, 'Горно-Бадахшанская обл.', 'gorno-badahshanskaya-obl'],
            [9589, 9, 0, 'Кулябская обл.', 'kulyabskaya-obl'],
            [9596, 9, 0, 'Курган-Тюбинская обл.', 'kurgan-tyubinskaya-obl'],
            [9605, 9, 0, 'Согдийская обл.', 'sogdiyskaya-obl'],
            [9627, 9, 0, 'Таджикистан', 'tadzhikistan'],
            [9639, 10, 0, 'Ашхабадская обл.', 'ashhabadskaya-obl'],
            [9653, 10, 0, 'Красноводская обл.', 'krasnovodskaya-obl'],
            [9670, 10, 0, 'Марыйская обл.', 'maryyskaya-obl'],
            [9682, 10, 0, 'Ташаузская обл.', 'tashauzskaya-obl'],
            [9685, 10, 0, 'Чарджоуская обл.', 'chardzhouskaya-obl'],
            [9788, 11, 0, 'Андижанская обл.', 'andizhanskaya-obl'],
            [9796, 11, 0, 'Бухарская обл.', 'buharskaya-obl'],
            [9806, 11, 0, 'Джизакская обл.', 'dzhizakskaya-obl'],
            [9813, 11, 0, 'Каракалпакия', 'karakalpakiya'],
            [9825, 11, 0, 'Кашкадарьинская обл.', 'kashkadar-inskaya-obl'],
            [9832, 11, 0, 'Навоийская обл.', 'navoiyskaya-obl'],
            [9836, 11, 0, 'Наманганская обл.', 'namanganskaya-obl'],
            [9844, 11, 0, 'Самаркандская обл.', 'samarkandskaya-obl'],
            [9851, 11, 0, 'Сурхандарьинская обл.', 'surhandar-inskaya-obl'],
            [9859, 11, 0, 'Сырдарьинская обл.', 'syrdar-inskaya-obl'],
            [9869, 11, 0, 'Ташкентская обл.', 'tashkentskaya-obl'],
            [9892, 11, 0, 'Ферганская обл.', 'ferganskaya-obl'],
            [9905, 11, 0, 'Хорезмская обл.', 'horezmskaya-obl'],
            [9909, 12, 0, 'Винницкая обл.', 'vinnickaya-obl'],
            [9943, 12, 0, 'Волынская обл.', 'volynskaya-obl'],
            [9964, 12, 0, 'Днепропетровская обл.', 'dnepropetrovskaya-obl'],
            [10002, 12, 0, 'Донецкая обл.', 'doneckaya-obl'],
            [10061, 12, 0, 'Житомирская обл.', 'zhitomirskaya-obl'],
            [10094, 12, 0, 'Закарпатская обл.', 'zakarpatskaya-obl'],
            [10111, 12, 0, 'Запорожская обл.', 'zaporozhskaya-obl'],
            [10133, 12, 0, 'Ивано-Франковская обл.', 'ivano-frankovskaya-obl'],
            [10165, 12, 0, 'Киевская обл.', 'kievskaya-obl'],
            [10201, 12, 0, 'Кировоградская обл.', 'kirovogradskaya-obl'],
            [10227, 12, 0, 'Крымская обл.', 'krymskaya-obl'],
            [10259, 12, 0, 'Луганская обл.', 'luganskaya-obl'],
            [10318, 12, 0, 'Львовская обл.', 'l-vovskaya-obl'],
            [10354, 12, 0, 'Николаевская обл.', 'nikolaevskaya-obl'],
            [10373, 12, 0, 'Одесская обл.', 'odesskaya-obl'],
            [10407, 12, 0, 'Полтавская обл.', 'poltavskaya-obl'],
            [10437, 12, 0, 'Ровенская обл.', 'rovenskaya-obl'],
            [10455, 12, 0, 'Сумская обл.', 'sumskaya-obl'],
            [10480, 12, 0, 'Тернопольская обл.', 'ternopol-skaya-obl'],
            [10504, 12, 0, 'Харьковская обл.', 'har-kovskaya-obl'],
            [10535, 12, 0, 'Херсонская обл.', 'hersonskaya-obl'],
            [10559, 12, 0, 'Хмельницкая обл.', 'hmel-nickaya-obl'],
            [10583, 12, 0, 'Черкасская обл.', 'cherkasskaya-obl'],
            [10607, 12, 0, 'Черниговская обл.', 'chernigovskaya-obl'],
            [10633, 12, 0, 'Черновицкая обл.', 'chernovickaya-obl'],
            [277570, 13, 0, 'Туркмения', 'turkmeniya'],
            [277654, 2, 0, 'Армения', 'armeniya'],
            [277655, 5, 0, 'Казахстан', 'kazahstan'],
            [277656, 12, 0, 'Украина', 'ukraina'],
            [1934356, 5, 0, 'Западно-Казахстанская обл.', 'zapadno-kazahstanskaya-obl'],
            [1998532, 8, 0, 'Адыгея', 'adygeya'],
            [2316497, 8, 0, 'Хакасия', 'hakasiya'],
            [2415585, 8, 0, 'Чукотский АО', 'chukotskiy-ao'],
            [2499002, 8, 0, 'Ханты-Мансийский АО', 'hanty-mansiyskiy-ao'],
            [2564700, 5, 0, 'Акмолинская обл.', 'akmolinskaya-obl'],
            [5019394, 8, 0, 'Ямало-Ненецкий АО', 'yamalo-neneckiy-ao'],
            [7593366, 14, 0, 'Пакистан', 'pakistan']
        ]);

    }

    public function safeDown()
    {
        $this->dropTable('{{%region}}');
    }
}