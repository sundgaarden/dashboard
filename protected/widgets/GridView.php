<?php
Yii::import('zii.widgets.grid.CGridView');

/**
 * Adds an id attribute to a gridview table row if defined
 * @author Lennart Borregaard
 * @version 1.0
 * @package 
 */
class GridView extends CGridView
{
	public $modelIdColumn = '';

	public function renderTableRow($row)
	{
		if($this->rowCssClassExpression!==null)
		{
			$data=$this->dataProvider->data[$row];
			echo '<tr class="'.$this->evaluateExpression($this->rowCssClassExpression,array('row'=>$row,'data'=>$data)).'"';
		}
		else if(is_array($this->rowCssClass) && ($n=count($this->rowCssClass))>0)
			echo '<tr class="'.$this->rowCssClass[$row%$n].'"';
		else
			echo '<tr';
		if ($this->modelIdColumn!='') {
			$data=$this->dataProvider->data[$row];
			echo ' id="'.$this->getId().'_'.$data[$this->modelIdColumn].'"';
		}
		echo '>';
		foreach($this->columns as $column)
			$column->renderDataCell($row);
		echo "</tr>\n";
	}
}