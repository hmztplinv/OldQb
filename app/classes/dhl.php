<?php


class Dhl
{
    public static function get_shipment($dhlnumber)
    {
        $curl = curl_init();
        $number = $dhlnumber;
        curl_setopt_array($curl, [CURLOPT_URL => "https://api-eu.dhl.com/track/shipments?trackingNumber=" . $number,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => ["DHL-API-Key: dkoBv4F2HNY23wtpdoP8aQjIhArTK6FG"],]);
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $data = json_decode($response, TRUE);

        if (!empty($data['title'])){
            $message['err'] = $data['detail'];
            $message['redirects'] = "seller/dhl";
            return $message;
        }
        $originAddress = $data['shipments'][0]['origin']['address']['addressLocality'];
        $destinationAddress = $data['shipments'][0]['destination']['address']['addressLocality'];
        if(empty($data['shipments'][0]['estimatedTimeOfDelivery'])) {
            $estimatedTimeOfDelivery="DELIVERED";
        }
        else{
            $estimatedTimeOfDelivery = $data['shipments'][0]['estimatedTimeOfDelivery'];
        }
        if (empty($data['shipments'][0]['estimatedTimeOfDeliveryRemark']))
        {
            $estimatedTimeOfDeliveryRemark="DELIVERED";
        }
        else{
            $estimatedTimeOfDeliveryRemark = $data['shipments'][0]['estimatedTimeOfDeliveryRemark'];
        }
        $totalNumberOfPieces = $data['shipments'][0]['details']['totalNumberOfPieces'];
        $pieceIds = $data['shipments'][0]['details']['pieceIds'];
        $lastUpdatedTime = $data['shipments'][0]['events'][0]['timestamp'];
        $lastUpdatedLocation = $data['shipments'][0]['events'][0]['location']['address']['addressLocality'];
        $lastUpdatedDescription = $data['shipments'][0]['events'][0]['description'];
        $dhldata = [
            'originAddress' => $originAddress,
            'destinationAddress' => $destinationAddress,
            'estimatedTimeOfDelivery' => $estimatedTimeOfDelivery,
            'estimatedTimeOfDeliveryRemark' => $estimatedTimeOfDeliveryRemark,
            'totalNumberOfPieces' => $totalNumberOfPieces,
            'pieceIds' => $pieceIds,
            'lastUpdatedTime' => $lastUpdatedTime,
            'lastUpdatedLocation' => $lastUpdatedLocation,
            'lastUpdatedDescription' => $lastUpdatedDescription
        ];
        return $dhldata;
    }

    public static function set_dhl($dhl)
    {
        global $db;
        $query = $db->prepare("INSERT INTO [dbo].[dhl] ([customerName],[description],[userId],[pieceCount],[pieceId],[createdDate],[lastUpdateDate],[originAddress],[destinationAddress],[lastUpdatedLocation],[estimatedTimeOfDelivery],[estimatedTimeOfDeliveryRemark],[lastUpdatedDescription],[dhlNumber]) VALUES(:customerName,:description,:userId,:pieceCount,:pieceId,:createdDate,:lastUpdateDate,:originAddress,:destinationAddress,:lastUpdatedLocation,:estimatedTimeOfDelivery,:estimatedTimeOfDeliveryRemark,:lastUpdatedDescription,:dhlNumber)");
        $result=$query->execute($dhl);
        Log::createLog(session('user_id'), "dhl", "insert.dhl");
        return $result!=NULL? 1:0;
    }
    public static function set_dhll($dhl)
    {
        global $db;
        $query = $db->prepare("INSERT INTO [dbo].[dhl] ([userId],[pieceCount],[pieceId],[createdDate]) VALUES(:userId,:pieceCount,:pieceId,:createdDate)");
        $query->execute($dhl);
        Log::createLog(session('user_id'), "dhl", "insert.dhl");
    }

    public static function dhl_exist($pieceId)
    {
        global $db;
        $query = $db->prepare("SELECT * FROM dhl WHERE pieceId=:pieceId ");
        $query->execute([
            'pieceId' => $pieceId
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function update_dhl($dhl)
    {
        global $db;
        $query = $db->prepare("UPDATE dhl SET customerName=:customerName,description=:description,lastUpdateDate=:lastUpdateDate,lastUpdatedLocation=:lastUpdatedLocation,estimatedTimeOfDelivery=:estimatedTimeOfDelivery,estimatedTimeOfDeliveryRemark=:estimatedTimeOfDeliveryRemark,lastUpdatedDescription=:lastUpdatedDescription where dhlNumber=:dhlNumber");
       $result= $query->execute($dhl);

       if ($result!=NULL){
           return 1;
           Log::createLog(session('user_id'), "dhl", "insert.dhl");
       }else{
           return 0;
       }


    }

    public static function get_dhl_by_user_id()
    {
        global $db;
        $query = $db->prepare("SELECT * from dhl ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}
