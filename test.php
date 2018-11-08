<?php 
require_once("./trackingmore.php");
$track = new Trackingmore;
//## 已完成测试开始 ###

//1 List all carriers (列出所有运输商)
//$track = $track->getCarrierList();

//2 detect a carriers by tracking number (识别一个运输商)
//$trackingNumber = 'DWZCN0101810142YQ';
//$track = $track->detectCarrier($trackingNumber);

//3 create a tracking number (创建单个运单号)
$extraInfo                         = array();
$extraInfo['title']                = '4PX page';
$extraInfo['logistics_channel']    = 'API TEST';
$extraInfo['customer_name']        = 'trackingmore user';
$extraInfo['customer_email']       = 'service@trackingmore.com';
$extraInfo['order_id']             = '#123';
$extraInfo['customer_phone']       = '+86 13142052920';
$extraInfo['order_create_time']    = '2018/09/08 16:51';
$extraInfo['destination_code']     = 'US';
$extraInfo['tracking_ship_date']   = '20180908';
$extraInfo['tracking_postal_code'] = '12201';
$extraInfo['lang']                 = 'en';
$track = $track->createTracking('dwz','DWZCN0101810142YQ',$extraInfo);

//4 List all trackings (列出多个物流信息)
//$track = $track->getTrackingsList($numbers = "DWZCN0101810142YQ",$orders = "",$page = 1,$limit = 100,$createdAtMin = 0,$createdAtMax = 0,$update_time_min = 0,$update_time_max = 0,$order_created_time_min = 0,$order_created_time_max = 0,$lang = "en");

//5 Get tracking results of a single tracking (列出单个运单号物流信息)
//$track = $track->getSingleTrackingResult("dwz","DWZCN0101810142YQ",'en');

//6 create muti tracking number (创建多个运单号)
//$items = array(
//    array(
//        'tracking_number' => 'DWZCN0101810142YQ',
//        'carrier_code'    => 'dwz',
//        'title'          => '4PX page',
//        'logistics_channel' => 'API TEST',
//        'customer_name'   => 'trackingmore user',
//        'customer_email'  => 'service@trackingmore.com',
//        'order_id'      => '#123',
//        'customer_phone'      => '+86 13142052920',
//        'order_create_time'      => '2018/09/08 16:51',
//        'destination_code'      => 'US',
//        'tracking_ship_date'      => '20180908',
//        'tracking_postal_code'      => '12201',
//        'lang'      => 'en'
//    ),
//    array(
//        'tracking_number' => 'LZ448865302CN',
//        'carrier_code'    => 'china-ems',
//        'title'          => '4PX page',
//        'logistics_channel' => 'API TEST',
//        'customer_name'   => 'trackingmore user',
//        'customer_email'  => 'service@trackingmore.com',
//        'order_id'      => '#123',
//        'customer_phone'      => '+86 13142052920',
//        'order_create_time'      => '2018/09/08 16:51',
//        'destination_code'      => 'US',
//        'tracking_ship_date'      => '20180908',
//        'tracking_postal_code'      => '12201',
//        'lang'      => 'en'
//    ),
//);
//$track = $track->createMultipleTracking($items);

//7 Update Tracking item (修改单个运单号附加信息)
//$extraInfo['title']          = '4PX page';
//$extraInfo['customer_name']  = 'trackingmore user';
//$extraInfo['logistics_channel']  = 'API TEST';
//$extraInfo['customer_email'] = 'service@trackingmore.com';
//$extraInfo['order_id']       = '#123';
//$extraInfo['customer_phone'] = '+86 13142052920';
//$extraInfo['destination_code'] = 'US';
//$extraInfo['status']       = '7';
//$track = $track->updateTrackingItem('dwz','DWZCN0101810142YQ',$extraInfo);

//8 Delete a tracking item (删除单个运单号)
//$track = $track->deleteTrackingItem('dwz','DWZCN0101810142YQ');

//9 Get realtime tracking results of a single tracking (获取单个运单号实时物流信息)
// $track = $track->getRealtimeTrackingResults("dwz","DWZCN0101810142YQ",array("lang"=>'en'));

//10 Modify courier code (修改运输商简码)
//$r = $track->updateCarrierCode("DWZCN0101810142YQ","dwz","china-ems");

//11 Get user info (查看用户余额)
//$r = $track->getUserInfoBalance();

//12 Get status number (查看不同状态快递数量)
//$r = $track->getStatusNumberCount();

//13 Set number not update (设置部分单号不再更新)
//$date = array();
//$data[] = array("tracking_number"=>"DWZCN0101810142YQ","carrier_code"=>"dwz");
//$r = $track->setNumberNotUpdate($data);

//14 Get remote iterm results (查询收货地址是否偏远)
//$data = array();
//$data[] = array("country"=>"CN","postcode"=>"400422");
//$data[] = array("country"=>"CN","postcode"=>"412000");
//$r = $track->searchDeliveryIsRemote($data);

//15 Get cost time iterm results
//$data = array();
//$data[] = array("original"=>"CN","destination"=>"US","carrier_code"=>"dwz");
//$data[] = array("original"=>"CN","destination"=>"US","carrier_code"=>"china-ems");
//$track = $track->getCarrierCostTime($data);

//16 Delete multiple tracking item (删除多个单号)
// $date = array();
// $data[] = array("tracking_number"=>"DWZCN0101810142YQ","carrier_code"=>"dwz");
// $data[] = array("tracking_number"=>"LZ448865302CN","carrier_code"=>"china-ems");
// $r = $track->deleteMultipleTracking($data);

//17 Update multiple Tracking item (修改多个运单号附加信息)
//$data = array();
//$data[] = array(
//    "tracking_number"=>"DWZCN0101810142YQ",
//    "carrier_code"=>"dwz",
//    "title"=>"4PX page",
//    "logistics_channel"=>"API TEST",
//    "customer_name"=>"trackingmore user",
//    "customer_email"=>"service@trackingmore.com",
//    "order_id"=>"#123",
//    "destination_code"=>"US",
//    "status"=>"7"
//);
//$data[] = array(
//    "tracking_number"=>"LZ448865302CN",
//    "carrier_code"=>"china-ems",
//    "title"=>"4PX page",
//    "logistics_channel"=>"API TEST",
//    "customer_name"=>"trackingmore user",
//    "customer_email"=>"service@trackingmore.com",
//    "order_id"=>"#123",
//    "destination_code"=>"US",
//    "status"=>"7"
//);
//$track = $track->updateMultipleTrackItem($data);
?>