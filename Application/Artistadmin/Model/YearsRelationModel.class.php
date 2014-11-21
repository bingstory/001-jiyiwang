<?php
namespace Artistadmin\Model;
use Think\Model\RelationModel;
class YearsRelationModel extends RelationModel{
	protected $tableName = 'yearslist';
	protected $_link = array(
		'years' => array(
			'mapping_type' => self::BELONGS_TO,
			'foreign_key'  => 'year_id',
			'mapping_fields' => 'year' ,
			'as_fields'  => 'year:year'
			),
		

		);
}