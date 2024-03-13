<?php
$countries=Customer::get_country_name();
$customer = Customer::customer_exist(session('user_id'));

$countryname=Customer::get_countries_name_by_userid();
$user = User::get_user_name();
if( ( $user['customerNo']!=NULL || $user['customerNoBien']!=NULL ) && empty($customer) ){
    if ($user['customerNo']!=NULL){
        $customerNo = $user['customerNo']; // Değiştirilebilir müşteri parametresi
        $validdb="HAYAL";
        $validdbno='06';
    }
    else{
        $customerNo = $user['customerNoBien'];
        $validdb="BIEN";
        $validdbno='03';
    }
    $countryconverter = array('AF' => 'Afghanistan', 'MAK'=>'REPUBLIC OF NORTH MACEDONIACEDONIA', 'AX' => 'Aland Islands', 'AL' => 'Albania', 'DZ' => 'Algeria', 'AS' => 'American Samoa', 'AD' => 'Andorra', 'AO' => 'Angola', 'AI' => 'Anguilla', 'AQ' => 'Antarctica', 'AG' => 'Antigua And Barbuda', 'AR' => 'Argentina', 'AM' => 'Armenia', 'AW' => 'Aruba', 'AU' => 'Australia', 'AT' => 'Austria', 'AZ' => 'Azerbaijan', 'BS' => 'Bahamas', 'BH' => 'Bahrain', 'BD' => 'Bangladesh', 'BB' => 'Barbados', 'BY' => 'Belarus', 'BE' => 'Belgium', 'BZ' => 'Belize', 'BJ' => 'Benin', 'BM' => 'Bermuda', 'BT' => 'Bhutan', 'BO' => 'Bolivia', 'BA' => 'Bosnia And Herzegovina', 'BW' => 'Botswana', 'BV' => 'Bouvet Island', 'BR' => 'Brazil', 'IO' => 'British Indian Ocean Territory', 'BN' => 'Brunei Darussalam', 'BG' => 'Bulgaria', 'BF' => 'Burkina Faso', 'BI' => 'Burundi', 'KH' => 'Cambodia', 'KS' => 'Kosova', 'CM' => 'Cameroon', 'CA' => 'Canada', 'CV' => 'Cape Verde', 'KY' => 'Cayman Islands', 'CF' => 'Central African Republic', 'TD' => 'Chad', 'CL' => 'Chile', 'CN' => 'China', 'CX' => 'Christmas Island', 'CC' => 'Cocos (Keeling) Islands', 'CO' => 'Colombia', 'KM' => 'Comoros', 'CG' => 'Congo', 'CD' => 'Congo, Democratic Republic', 'CK' => 'Cook Islands', 'CR' => 'Costa Rica', 'CI' => 'Cote D\'Ivoire', 'HR' => 'Croatia', 'CU' => 'Cuba', 'CY' => 'Cyprus', 'CZ' => 'Czech Republic', 'DK' => 'Denmark', 'DJ' => 'Djibouti', 'DM' => 'Dominica', 'DO' => 'Dominican Republic', 'EC' => 'Ecuador', 'EG' => 'Egypt', 'SV' => 'El Salvador', 'GQ' => 'Equatorial Guinea', 'ER' => 'Eritrea', 'EE' => 'Estonia', 'ET' => 'Ethiopia', 'FK' => 'Falkland Islands (Malvinas)', 'FO' => 'Faroe Islands', 'FJ' => 'Fiji', 'FI' => 'Finland', 'FR' => 'France', 'GF' => 'French Guiana', 'PF' => 'French Polynesia', 'TF' => 'French Southern Territories', 'GA' => 'Gabon', 'GM' => 'Gambia', 'GE' => 'Georgia', 'DE' => 'Germany', 'GH' => 'Ghana', 'GI' => 'Gibraltar', 'GR' => 'Greece', 'GL' => 'Greenland', 'GD' => 'Grenada', 'GP' => 'Guadeloupe', 'GU' => 'Guam', 'GT' => 'Guatemala', 'GG' => 'Guernsey', 'GN' => 'Guinea', 'GW' => 'Guinea-Bissau', 'GY' => 'Guyana', 'HT' => 'Haiti', 'HM' => 'Heard Island & Mcdonald Islands', 'VA' => 'Holy See (Vatican City State)', 'HN' => 'Honduras', 'HK' => 'Hong Kong', 'HU' => 'Hungary', 'IS' => 'Iceland', 'IN' => 'India', 'ID' => 'Indonesia', 'IR' => 'Iran, Islamic Republic Of', 'IQ' => 'Iraq', 'IE' => 'Republic Of Ireland', 'IM' => 'Isle Of Man', 'IL' => 'Israel', 'IT' => 'Italy', 'JM' => 'Jamaica', 'JP' => 'Japan', 'JE' => 'Jersey', 'JO' => 'Jordan', 'KZ' => 'Kazakhstan', 'KE' => 'Kenya', 'KI' => 'Kiribati', 'KR' => 'Republic Of Korea', 'KW' => 'Kuwait', 'KG' => 'Kyrgyzstan', 'LA' => 'Lao People\'s Democratic Republic', 'LV' => 'Latvia', 'LB' => 'Lebanon', 'LS' => 'Lesotho', 'LR' => 'Liberia', 'LY' => 'Libyan Arab Jamahiraya', 'LI' => 'Liechtenstein', 'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'MO' => 'Macao', 'MK' => 'Macedonia', 'MG' => 'Madagascar', 'MW' => 'Malawi', 'MY' => 'Malaysia', 'MV' => 'Maldives', 'ML' => 'Mali', 'MT' => 'Malta', 'MH' => 'Marshall Islands', 'MQ' => 'Martinique', 'MR' => 'Mauritania', 'MU' => 'Mauritius', 'YT' => 'Mayotte', 'MX' => 'Mexico', 'FM' => 'Micronesia, Federated States Of', 'MD' => 'Moldova', 'MC' => 'Monaco', 'MN' => 'Mongolia', 'ME' => 'Montenegro', 'MS' => 'Montserrat', 'MA' => 'Morocco', 'MZ' => 'Mozambique', 'MM' => 'Myanmar', 'NA' => 'Namibia', 'NR' => 'Nauru', 'NP' => 'Nepal', 'NL' => 'Netherlands', 'AN' => 'Netherlands Antilles', 'NC' => 'New Caledonia', 'NZ' => 'New Zealand', 'NI' => 'Nicaragua', 'NE' => 'Niger', 'NG' => 'Nigeria', 'NU' => 'Niue', 'NF' => 'Norfolk Island', 'MP' => 'Northern Mariana Islands', 'NO' => 'Norway', 'OM' => 'Oman', 'PK' => 'Pakistan', 'PW' => 'Palau', 'PS' => 'Palestinian Territory, Occupied', 'PA' => 'Panama', 'PG' => 'Papua New Guinea', 'PY' => 'Paraguay', 'PE' => 'Peru', 'PH' => 'Philippines', 'PN' => 'Pitcairn', 'PL' => 'Poland', 'PT' => 'Portugal', 'PR' => 'Puerto Rico', 'QA' => 'Qatar', 'RE' => 'Reunion', 'RO' => 'Romania', 'RU' => 'Russian Federation', 'RW' => 'Rwanda', 'BL' => 'Saint Barthelemy', 'SH' => 'Saint Helena', 'KN' => 'Saint Kitts And Nevis', 'LC' => 'Saint Lucia', 'MF' => 'Saint Martin', 'PM' => 'Saint Pierre And Miquelon', 'VC' => 'Saint Vincent And Grenadines', 'WS' => 'Samoa', 'SM' => 'San Marino', 'ST' => 'Sao Tome And Principe', 'SA' => 'Saudi Arabia', 'SN' => 'Senegal', 'RS' => 'Serbia', 'SC' => 'Seychelles', 'SL' => 'Sierra Leone', 'SG' => 'Singapore', 'SK' => 'Slovakia', 'SI' => 'Slovenia', 'SB' => 'Solomon Islands', 'SO' => 'Somalia', 'ZA' => 'South Africa', 'GS' => 'South Georgia And Sandwich Isl.', 'ES' => 'Spain', 'LK' => 'Sri Lanka', 'SD' => 'Sudan', 'SR' => 'Suriname', 'SJ' => 'Svalbard And Jan Mayen', 'SZ' => 'Swaziland', 'SE' => 'Sweden', 'CH' => 'Switzerland', 'SY' => 'Syrian Arab Republic', 'TW' => 'Taiwan', 'TJ' => 'Tajikistan', 'TZ' => 'Tanzania', 'TH' => 'Thailand', 'TL' => 'Timor-Leste', 'TG' => 'Togo', 'TK' => 'Tokelau', 'TO' => 'Tonga', 'TT' => 'Trinidad And Tobago', 'TN' => 'Tunisia', 'TR' => 'Turkey', 'TM' => 'Turkmenistan', 'TC' => 'Turks And Caicos Islands', 'TV' => 'Tuvalu', 'UG' => 'Uganda', 'UA' => 'Ukraine', 'AE' => 'United Arab Emirates', 'GB' => 'United Kingdom', 'US' => 'United States', 'UM' => 'United States Outlying Islands', 'UY' => 'Uruguay', 'UZ' => 'Uzbekistan', 'VU' => 'Vanuatu', 'VE' => 'Venezuela', 'VN' => 'Viet Nam', 'VG' => 'Virgin Islands, British', 'VI' => 'Virgin Islands, U.S.', 'WF' => 'Wallis And Futuna', 'EH' => 'Western Sahara', 'YE' => 'Yemen', 'ZM' => 'Zambia', 'ZW' => 'Zimbabwe');


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://212.175.89.13:40259/CustomerList/ById?customer=' . $customerNo,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'accept: application/json',
            'Database: '.$validdb,
            'Language: T',
            'Company: '.$validdbno,
            'username: caniasuserapi',
            'password: Z~pvK0Se'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $response=json_decode($response,true);
    $customer['taxNumber']=$response['taxnum'];
    $customer['postCode']=$response['zipstreet'];
    $customer['companyName']=$response['name1'];
    $customer['address']=$response['adres'];
    $countryname['countryName']=$countryconverter[$response['country']];
    $user['phone']=$response['telnum'];
}
if (post('save') && empty($customer)){
    $countryId=Customer::get_districtid_by_name(post('countryName'));
    $customers = [
        'countryId' => $countryId['countryId'],
        'userId' => intval(session('user_id')),
        'companyName' => post('companyName'),
        'address' => post('address'),
        'faxNumber' => post('faxNumber'),
        'taxAdministration' => post('taxAdministration'),
        'taxNumber' => post('taxNumber'),
        'bankName' => post('bankName'),
        'bankBranchName' => post('bankBranchName'),
        'ibanNumber' => post('ibanNumber'),
        'postCode'=> post('postCode'),
        'marketType'=>post('marketType'),
        'transportType'=>post('transportType'),
        'currency'=>post('currency'),
        'created_at'=>date('d/m/Y H:i:s',time()),
        'updated_at'=>date('d/m/Y H:i:s',time()),
        'customerNo'=>post('customerNo')==NULL?NULL:post('customerNo'),
        'isQuaCustomerCreated'=>post('customerNo')==NULL?0:1,
        'isBienCustomerCreated'=>post('customerNoBien')==NULL?0:1

    ];
    $user=[
        'uname'=>post('uname'),
        'email'=>post('email'),
        'phone'=>post('phone'),
        'user_id'=>session('user_id')
    ];
    $res=User::update_user($user);
    if($res==1){
        $ress=Customer::set_customer_account($customers);
        if($ress==1){
            $message['suc']="Registry is Successful. ASAP Seller will verify your account. Please wait.";
            $message['redirects']="login";
        }else{
            $message['err']="An Error Ocur. Please try again later.";
            $message['redirects']="login";
        }
    }else{
        $message['err']="An Error Ocur. Please try again later.";
        $message['redirects']="login";
    }
}
if(post('save') && isset($customer)){

    $countryId=Customer::get_districtid_by_name(post('countryName'));

    $customers = [
        'countryId' => $countryId['countryId'],
        'userId' => intval(session('user_id')),
        'companyName' => post('companyName'),
        'address' => post('address'),
        'faxNumber' => post('faxNumber'),
        'taxAdministration' => post('taxAdministration'),
        'taxNumber' => post('taxNumber'),
        'bankName' => post('bankName'),
        'bankBranchName' => post('bankBranchName'),
        'ibanNumber' => post('ibanNumber'),
        'postCode'=> post('postCode'),
        'marketType'=>post('marketType'),
        'transportType'=>post('transportType'),
        'currency'=>post('currency'),
        'updated_at'=>date('d/m/Y H:i:s',time()),
    ];
    $user=[
        'uname'=>post('uname'),
        'email'=>post('email'),
        'phone'=>post('phone'),
        'user_id'=>session('user_id')
    ];
    $res=User::update_user($user);
    if($res==1){
        $ress=Customer::update_customer_account($customers);
        if($ress==1){
            $message['suc']="Your membership application has been sent to the customer representative. After your application has been reviewed, you will be informed by e-mail whether your account has been activated or not. You can contact your customer representative for more information.";
            $message['redirects']=Customer::is_customer_verified()==1?'login':'index';
        }else{
            $message['err']="An Error Ocur. Please try again later.";
            $message['redirects']="login";
        }
    }else{
        $message['err']="An Error Ocur. Please try again later.";
        $message['redirects']="login";
    }

}


require cview('customer_detail');
