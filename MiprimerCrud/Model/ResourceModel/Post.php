<?php
namespace Tresdadv\MiprimerCrud\Model\ResourceModel;


class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('tresdadv_miprimercrud_post', 'post_id');
	}
	
}
