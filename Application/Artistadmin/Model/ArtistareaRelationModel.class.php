<?php 
namespace Artistadmin\Model;
use Think\Model\RelationModel;  
class ArtistareaRelationModel extends RelationModel{
	
	protected $tableName = 'user';

	protected $_link = array(
		'area' => array(
               'mapping_type' => self::BELONGS_TO,
               'foreign_key' => 'area_id',
               'mapping_fields' => 'name',
               'as_fields' =>'name:area'
			)
		);
}

 ?>