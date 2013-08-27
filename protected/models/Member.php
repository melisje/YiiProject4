<?php

/**
 * This is the model class for table "tbl_Member".
 *
 * The followings are the available columns in table 'tbl_Member':
 * @property integer $ID
 * @property integer $GRP_ID
 * @property string $MEM_NAME
 * @property string $MEM_DESCRIPTION
 * @property integer $MEM_QTY
 * @property string $_CREATED
 *
 * The followings are the available model relations:
 * @property Group $gRP
 */
class Member extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_Member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GRP_ID, MEM_QTY', 'numerical', 'integerOnly'=>true),
			array('MEM_NAME', 'length', 'max'=>45),
			array('MEM_DESCRIPTION, _CREATED', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, GRP_ID, MEM_NAME, MEM_DESCRIPTION, MEM_QTY, _CREATED', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'gRP' => array(self::BELONGS_TO, 'Group', 'GRP_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'GRP_ID' => 'Grp',
			'MEM_NAME' => 'Mem Name',
			'MEM_DESCRIPTION' => 'Mem Description',
			'MEM_QTY' => 'Mem Qty',
			'_CREATED' => 'Created',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('GRP_ID',$this->GRP_ID);
		$criteria->compare('MEM_NAME',$this->MEM_NAME,true);
		$criteria->compare('MEM_DESCRIPTION',$this->MEM_DESCRIPTION,true);
		$criteria->compare('MEM_QTY',$this->MEM_QTY);
		$criteria->compare('_CREATED',$this->_CREATED,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
