<?php

use yii\db\Migration;

class m170524_090151_init_user extends Migration
{
    public function safeUp()
    {
        $test_user = [
            'username' => 'bayer.hudson',
            'auth_key' => 'HP187Mvq7Mmm3CTU80dLkGmni_FUH_lR',
            //password_0
            'password_hash' => '$2y$13$EjaPFBnZOQsHdGuHI.xvhuDp1fHpo8hKRSk6yshqa9c5EG8s3C3lO',
            'password_reset_token' => 'ExzkCOaYc1L8IOBs4wdTGGbgNiG3Wz1I_1402312317',
            'created_at' => '1402312317',
            'updated_at' => '1402312317',
            'email' => 'nicole.paucek@schultz.info',
        ];
        //'username' => 'bayer.hudson',
        //'password' => 'password_0',
        $this->insert('user',$test_user);
    }

    public function safeDown()
    {
        echo "m170524_090151_init_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170524_090151_init_user cannot be reverted.\n";

        return false;
    }
    */
}
