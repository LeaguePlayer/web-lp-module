<?php

class RequestsController extends FrontController
{

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionSend()
	{
		$model=new Requests;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Requests']))
		{
			$model->attributes=$_POST['Requests'];
			$model->save();
			//$this->renderPartial('_mail', array('model' => $model));
			SiteHelper::sendMail(Requests::getActions($model->action), $this->renderPartial('_mail', array('model' => $model), true), Settings::getOption('email'));

			Yii::app()->end();
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Requests::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='requests-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
