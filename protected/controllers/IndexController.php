<?php
/**
 * Index Controller
 * 
 * @author wengebin
 * @date 2013-12-31
 */
class IndexController extends BaseController
{
	private $_redis;

	/**
	 * init
	 */
	public function init()
	{
		parent::init();		
	}
	
	/**
	 * Index method
	 */
	public function actionIndex()
	{
		try
		{
			$this->replaceSeoTitle( 'HOME' );

		} catch ( Exception $e ) {
			$strTip = '保存失败!';
		}

		$aryData = array();
		$aryData['tip'] = $strTip;
		$this->render( 'index' , $aryData );
	}

	/**
	 * get redis connection
	 */
	public function getRedis()
	{
		if ( empty( $this->_redis ) )
			$this->_redis = new CRedis();

		return $this->_redis;
	}

//end class
}
