<?php
namespace Systemadmin\Model;
use Think\Model\RelationModel;
class ArtistattrRelationModel extends RelationModel{
	protected $tableName = 'user';
	protected $_link = array(
		'attr' => array(
			'mapping_type' => self::MANY_TO_MANY,
			'relation_table' => 'jiyi_artist_attr',
			'foreign_key'  => 'artist_id',
			'relation_key' => 'attr_id'
			),
		);
}
