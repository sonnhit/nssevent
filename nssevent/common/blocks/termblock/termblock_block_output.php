<?php if($this->display_type==TermBlock::DISPLAY_TYPE_HOMEPAGE) : ?>
		<?php
				//So I get the first content list and want to return as a Data Provider

								$content_list_data_provider = $provider;
								//Get the current content List model
                if (isset($content_list_data_provider) && $content_list_data_provider != null) : ?>
                	 	<?php
                    	$this->widget('zii.widgets.CListView',
                                  array
                                  (
                                  	'viewData'=>array('asset'=>$this->layout_asset),
                                    'dataProvider'=>$content_list_data_provider,
                                    'itemView'=>'common.blocks.termblock.item_render',
                                    'summaryText'=>'',
                                    'ajaxUpdate'=>true,
                                    'enablePagination'=> true,
                                    'enableSorting'=>false,
                                    'sortableAttributes'=>array(),

																	)
                                  );
                		?>
	            <?php endif; ?>

<?php endif; ?>
