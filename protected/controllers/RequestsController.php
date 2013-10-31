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

			Yii::app()->end();
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Requests the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Requests::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Requests $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='requests-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
