<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%properties}}".
 *
 * @property string $property_id
 * @property string $name
 * @property string $active
 */
class Properties extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%properties}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['active'], 'string'],
            [['name'], 'string', 'max' => 255],
			[['type'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'property_id' => Yii::t('app', 'Property ID'),
            'name' => Yii::t('app', 'Name'),
			'type' => Yii::t('app', 'Type'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

	public static function getAll() {

		return Properties::find()->all();
	}

}