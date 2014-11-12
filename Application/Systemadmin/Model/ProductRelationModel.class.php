<?php 
namespace Systemadmin\Model;
use Think\Model\RelationModel;  
class ProductRelationModel extends RelationModel{
	
	protected $tableName = 'product';

	protected $_link = array(
	// 	'attr' => array(
 //               'mapping_type' => self::MANY_TO_MANY,
 //               'mapping_name' =>'attr', 
 //               'foreign_key' => 'bid',
 //               'relation_foreign_key' => 'aid',
 //               'relation_table' => 'hd_blog_attr',
	// 		),
		'cate' => array(
               'mapping_type' => self::BELONGS_TO,
               'foreign_key' => 'cid',
               'mapping_fields' => 'name',
               'as_fields' =>'name:cate'
			)

		);
	public function getProduct($type=0){
		$field = array('del');
		$where = array('del'=>$type);
		return $this->where($where)->field($field,true)->relation(true)->select();
	}
}

 ?>