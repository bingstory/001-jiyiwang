<?php
namespace Systemadmin\Model;
use Think\Model\RelationModel;
class WorksRelationModel extends RelationModel{
	protected $tableName = 'works';
	protected $_link = array(
		'artistcate' => array(
			'mapping_type'   => self::BELONGS_TO,
			'foreign_key'    => 'cate_id',
			'mapping_fields' => 'name',
			'as_fields'      => 'name:cate'
			),
		'category'  => array(
			'mapping_type'   => self::BELONGS_TO,
			'foreign_key'    => 'shopcate_id',
			'mapping_fields' => 'name',
			'as_fields'      => 'name:shopcate'
			),
		'attr' => array(
			'mapping_type' => self::MANY_TO_MANY,
			'relation_table' => 'jiyi_works_attr',
			'foreign_key'  => 'works_id',
			'relation_key' => 'attr_id'
			),
		);
}