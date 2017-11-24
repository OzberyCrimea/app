<?php

use yii\db\Migration;

/**
 * Class m171124_195151_create_table_country
 */
class m171124_195151_create_table_country extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%country}}', [
            'country_id' => $this->integer(11)->notNull(),
            'city_id' => $this->integer(11)->notNull()->defaultValue(0),
            'name' => $this->string(128)->notNull()->defaultValue(''),
            'alias' => $this->string(128)->notNull(),
        ], $tableOptions);

        $this->batchInsert('{{%country}}', ['country_id', 'city_id', 'name', 'alias'], [
            [1, 0, 'Азербайджан', 'azerbaydzhan'],
            [2, 0, 'Армения', 'armeniya'],
            [3, 0, 'Беларусь', 'belarus'],
            [4, 0, 'Грузия', 'gruziya'],
            [5, 0, 'Казахстан', 'kazahstan'],
            [6, 0, 'Киргызстан', 'kirgyzstan'],
            [7, 0, 'Молдова', 'moldova'],
            [8, 0, 'Россия', 'rossiya'],
            [9, 0, 'Таджикистан', 'tadzhikistan'],
            [10, 0, 'Туркменистан', 'turkmenistan'],
            [11, 0, 'Узбекистан', 'uzbekistan'],
            [12, 0, 'Украина', 'ukraina'],
            [13, 0, 'Туркмения', 'turkmeniya'],
            [14, 0, 'Пакистан', 'pakistan']
        ]);

    }

    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }
}