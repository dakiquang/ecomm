<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $alternateName
 * @property string $description
 * @property string $name
 * @property integer $manufacturerID
 * @property string $manufacturerPartNumber
 * @property double $cost
 * @property double $price
 * @property string $DateCreated
 * @property string $LastUpdated
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alternateName', 'description', 'name'], 'required'],
            [['description'], 'string'],
            [['manufacturerID'], 'integer'],
            [['cost', 'price'], 'number'],
            [['DateCreated', 'LastUpdated'], 'safe'],
            [['alternateName', 'name'], 'string', 'max' => 255],
            [['manufacturerPartNumber'], 'string', 'max' => 45],
            [['alternateName'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alternateName' => 'Alternate Name',
            'description' => 'Description',
            'name' => 'Name',
            'manufacturerID' => 'Manufacturer ID',
            'manufacturerPartNumber' => 'Manufacturer Part Number',
            'cost' => 'Cost',
            'price' => 'Price',
            'DateCreated' => 'Date Created',
            'LastUpdated' => 'Last Updated',
        ];
    }
}
