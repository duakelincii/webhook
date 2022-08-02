<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trs_reply".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $text
 * @property int $ordering
 */
class TrsReply extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trs_reply';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['ordering'], 'required'],
            [['ordering'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'ordering' => 'Ordering',
        ];
    }
}
