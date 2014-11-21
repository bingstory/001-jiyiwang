<?php
namespace Home\Model;
use Think\Model\ViewModel;
class WorksViewModel extends ViewModel {  
 public $viewFields = array(    
       'works' => array('id','artist_id','title','works_id','material','createyear','pubtime','content','thumb','star','price','favor','concern','size','expressfee','artistname',
       	'_type' => 'LEFT',
       	'_as'   => 'w'
       	),  
       'artistcate' => array('name'=>'artistcatename',
       	'_type' => 'LEFT',
       	'_as'   => 'a',
       	'_on'   => 'w.cate_id'
       	),
       'category' => array('name'=>'shopcatename',
            '_type' => 'LEFT',
            '_as'   => 'ca',
            '_on'   => 'w.shopcate_id = ca.id'
            ),
       
    ); 
}