<?php
Yii::import('zii.widgets.grid.CCheckBoxColumn');

/**
 * Overwrites common checkboxcolumn behavior to not include a check all check box in the header
 * @author Lennart Borregaard
 * @version 1.0
 * @package 
 */
class ACheckBoxColumn extends CCheckBoxColumn {
	protected function renderHeaderCellContent() {
		CGridColumn::renderHeaderCellContent();
	}
}