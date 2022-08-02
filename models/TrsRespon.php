<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trs_respon".
 *
 * @property int $id
 * @property string $number
 * @property string $text
 * @property string $status
 */
class TrsRespon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trs_respon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'text', 'status'], 'required'],
            [['number', 'text', 'status'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'text' => 'Text',
            'status' => 'Status',
        ];
    }

    public static function webhook()
    {
        $webhookContent = '';

        $webhook = fopen('php://input', 'rb');

        while (!feof($webhook)) {
            $webhookContent .= fread($webhook, 4096);
        }
        fclose($webhook);

        error_log($webhookContent);

        return json_decode($webhookContent);
    }
}
