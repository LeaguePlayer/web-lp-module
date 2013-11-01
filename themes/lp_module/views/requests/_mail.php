<h2><?=CHtml::encode(Requests::getActions($model->action))?></h2>
<table>
	<tr>
		<td><strong>Имя: </strong></td>
		<td><?=CHtml::encode($model->name)?></td>
	</tr>
	<tr>
		<td><strong>Телефон: </strong></td>
		<td><?=CHtml::encode($model->phone)?></td>
	</tr>
</table>