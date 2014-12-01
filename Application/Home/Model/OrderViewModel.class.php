<?php
namespace Home\Model;
use Think\Model\ViewModel;
class OrderViewModel extends ViewModel {  
 public $viewFields = array(    
       'orderlist' => array('id','userid','ordid','ordtitle','productid','ordbuynum','ordprice','ordfee','ordstatus','isjifen',
            '_type' => 'LEFT',
            '_as'   => 'o'
            ),
       'works' => array('id'=>'works_id','artist_id','title','works_id','material','createyear','pubtime','content','thumb','star','price','favor','concern','size','expressfee','artistname',
       	'_type' => 'LEFT',
       	'_as'   => 'w',
            '_on'   => 'w.id = o.productid'
       	),  
       
       
    ); 
}