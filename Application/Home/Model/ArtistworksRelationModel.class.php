<?php 
namespace Home\Model;
use Think\Model\RelationModel;  
class ArtistworksRelationModel extends RelationModel{
	
	protected $tableName = 'user';

	protected $_link = array(
		'works' => array(
               'mapping_type' => self::HAS_MANY,
               'foreign_key' => 'artist_id',
               'mapping_order' => 'pubtime desc',
               'mapping_limit' => '3',
			)
		);
}

 ?>