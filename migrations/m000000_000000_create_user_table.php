<?php

use yii\db\Migration;

class m000000_000000_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password_hash' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
