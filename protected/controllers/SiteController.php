<?php

class SiteController extends FrontController
{
	public $layout = '//layouts/simple';
	
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$request_model = Requests::model();

		//meta tags
		if(Settings::getOption('meta_keys'))  Yii::app()->clientScript->registerMetaTag(CHtml::encode(Settings::getOption('meta_keys')), 'keywords');
		if(Settings::getOption('meta_description'))  Yii::app()->clientScript->registerMetaTag(CHtml::encode(Settings::getOption('meta_description')), 'description');

		$this->render('index', array('request_model' => $request_model));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
}