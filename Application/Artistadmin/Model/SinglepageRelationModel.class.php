<?php
namespace Systemadmin\Model;
use Think\Model\RelationModel;
class SinglepageRelationModel extends RelationModel{
	protected $tableName = 'singlepage';
	protected $_link = array(
		'category' =>array(
			'mapping_type'   => self::BELONGS_TO,
			'foreign_key'    => 'cid',
			'mapping_fields' => 'name',
			'as_fields'      => 'name:cate'
			), 
		);
}