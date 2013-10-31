<?php

/**
* This is the model class for table "{{requests}}".
*
* The followings are the available columns in table '{{requests}}':
    * @property integer $id
    * @property integer $action
    * @property string $name
    * @property string $phone
    * @property integer $status
    * @property integer $sort
    * @property string $create_time
    * @property string $update_time
*/
class Requests extends EActiveRecord
{
    public function tableName()
    {
        return '{{requests}}';
    }


    public function rules()
    {
        return array(
            array('name, phone, create_time', 'required'),
            array('action, status, sort', 'numerical', 'integerOnly'=>true),
            array('name, phone', 'length', 'max'=>255),
            array('update_time', 'safe'),
            // The following rule is used by search().
            array('id, action, name, phone, status, sort, create_time, update_time', 'safe', 'on'=>'search'),
        );
    }


    public function relations()
    {
        return array(
        );
    }


    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'action' => 'Действие',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'status' => 'Статус',
            'sort' => 'Вес для сортировки',
            'create_time' => 'Дата создания',
            'update_time' => 'Дата последнего редактирования',
        );
    }




    public function search()
    {
        $criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('action',$this->action);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
        $criteria->order = 'sort';

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function translition()
    {
        return 'Заявки';
    }


}
