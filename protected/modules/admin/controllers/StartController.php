<?php

class StartController extends AdminController{

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionSettings()
    {
        if (isset($_POST['Settings'])) {
            foreach ( $_POST['Settings'] as $option => $value ) {
                Settings::setOption($option, $value);
            }
            Yii::app()->user->setFlash('success', "Изменения сохранены.");
            $this->redirect('settings');
        }
        $this->render('settings', array('settings' => Settings::model()->findAll()));
    }
}