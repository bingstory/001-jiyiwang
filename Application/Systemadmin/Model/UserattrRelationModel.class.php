<?php
namespace Systemadmin\Model;
use Think\Model\RelationModel;
class UserattrRelationModel extends RelationModel{
	protected $tableName = 'user';
	protected $_link = array(
		'attr' =>array(
			'mapping_type'         => self::MANY_TO_MANY,
			'foreign_key'          => 'artist_id',
			'relation_foreign_key' => 'attr_id',
			'relation_table'       => 'jiyi_artist_attr'
			), 
		);
}