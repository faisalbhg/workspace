<?php
   
return [
    'TAX_PERCENT' => 5,
    'CURRENCY' => 'AED',
    
    
    "user_type" => [
        "1"=>"Administrator",
        "2"=>"Operation",
        "3"=>"Service",
        "4"=>"Sales",
        "5"=>"Finance",
        "6"=>"Security",
    ],

    'workspace_unit_category'=>[
        "1"=>"Business Center",
        "2"=>"Meeting Room",
        "3"=>"Co-working spaces",
    ],

    'workspace_unit_type'=>[
        "1"=>"Sq.Ft",
        "2"=>"Chair",
        "3"=>"Table",
    ],

    'price_in_day'=>[
        "0"=>"All Day",
        "1"=>"Monday",
        "2"=>"Tuesday",
        "3"=>"Wednesday",
        "4"=>"Thursday",
        "5"=>"Friday",
        "6"=>"Saturday",
        "7"=>"Sunday",
    ],

    'price_time_type'=>[
        "1"=>"Hour",
        "2"=>"Day",
        "3"=>"Week",
        "4"=>"Month",
        "5"=>"Year",
    ],

    'backend_url'=>'https://we-work.ae/wework-booking-admin/',

    "open_space_packages"=>[
        "1"=>[
            'id'=>1,
            'name'=>"Starter Pack",
            "package_category"=>3,
            "credits"=>25,
            "permonth_charge"=>100.00,
            "min_access"=>3,
            "max_access"=>5
        ],
        "2"=>[
            'id'=>2,
            'name'=>"Value Pack",
            "package_category"=>3,
            "credits"=>65,
            "permonth_charge"=>200.00,
            "min_access"=>8,
            "max_access"=>13
        ],
        "3"=>[
            'id'=>3,
            'name'=>"Most Popular",
            "package_category"=>3,
            "credits"=>160,
            "permonth_charge"=>400.00,
            "min_access"=>16,
            "max_access"=>31
        ],
    ],
    'single_package_price'=>[
        'id'=>4,
        'name'=>"Single Pack",
        "package_category"=>3,
        "credits"=>5,
        "permonth_charge"=>20.00,
        "min_access"=>0,
        "max_access"=>1
    ],
    'parking_package_price'=>[
        'id'=>5,
        'name'=>"Parking Pack",
        "package_category"=>4,
        "credits"=>0,
        "permonth_charge"=>15.00,
        "min_access"=>0,
        "max_access"=>1
    ],

    'meeting_package_price'=>[
        'id'=>6,
        'name'=>"Meeting Room ",
        "package_category"=>2,
        "credits"=>0,
        "permonth_charge"=>100.00,
        "min_access"=>0,
        "max_access"=>1
    ],

    'card_payment_url'=>'https://bhr.ae/payment-app/api/post-card-payment',
    'paymenkLink_payment_url'=>'https://bhr.ae/payment-app/api/pbl-payment-panel',
    'paymenkLinkSynch_payment_url'=>'https://bhr.ae/payment-app/api/singlePBLSynch-payment-panel',

    'payment' => [
        'type'=>[
            '0'=>"Pay Later",
            '1'=>"Payment Link",
            '2'=>"Pay By Card",
            '3'=>"Cash Payment",
        ],
        'icons'=>[
            '0'=>"fa-solid fa-basket-shopping",
            '1'=>"fa-solid fa-file-invoice-dollar",
            '2'=>"fa-solid fa-credit-card",
            '3'=>"fa-solid fa-money-bill-1",
        ],
        'text_class'=>[
            '0'=>'text-dark',
            '1'=>"text-danger",
            '2'=>"text-danger",
            '3'=>"text-info",
        ],
        'status'=>[
            '0'=>'Pending',
            '1'=>'Paid',
            '2'=>'Failed',
            '3'=>'Cancelled',
        ],
        'status_text' => [
            '0' => 'Payment Pending',
            '1' => 'Payment Success..!',
            '2' => 'Payment Failed..!',
            '3' => 'Payment Cancelled..!',
        ],
        'status_class'=>[
            '0'=>'bg-gradient-primary',
            '1'=>'bg-gradient-success',
            '2'=>'bg-gradient-danger',
            '3'=>'bg-gradient-danger',
        ],
        'status_icon'=>[
            '0'=>'fas fa-minus',
            '1'=>'fas fa-check',
            '2'=>'fas fa-minus',
            '3'=>'fas fa-minus',
        ],
        'status_icon_class'=>[
            '0'=>'btn-outline-danger',
            '1'=>'btn-outline-success',
            '2'=>'btn-outline-danger',
            '3'=>'btn-outline-danger',
        ],
        'status_update'=>[
            '1'=>'Paid',
            '2'=>'Failed',
            '3'=>'Cancelled',
        ],
    ],

    'booking' => [
        'text_class'=>[
            '0'=>'text-dark',
            '1'=>"text-danger",
            '2'=>"text-danger",
        ],
        'status'=>[
            '0'=>'Pending',
            '1'=>'Booked',
            '2'=>'Cancelled',
        ],
    ],
    'meetinDurations'=>[
        "60"=>"1 Hour",
        "120"=>"2 Hour",
        "180"=>"3 Hour",
        "240"=>"4 Hour",
        "300"=>"5 Hour",
        "360"=>"6 Hour",
        "420"=>"7 Hour",
        "480"=>"8 Hour",
        "540"=>"9 Hour",
        "600"=>"10 Hour",
    ],
    'meetinDurationsPrice'=>[
        "60"=>"1",
        "120"=>"2",
        "180"=>"3",
        "240"=>"4",
        "300"=>"5",
        "360"=>"6",
        "420"=>"7",
        "480"=>"8",
        "540"=>"9",
        "600"=>"10",
    ],
    'officenumbers' => [
        "1"=>"404 A-15",
        "2"=>"502A-24",
        "3"=>"901 A-1",
        "4"=>"901 A-2",
        "5"=>"901 A-3",
        "6"=>"901 A-4",
        "7"=>"901 A-5",
        "8"=>"901 A-6",
        "9"=>"901 A-7",
        "10"=>"902 A-8",
        "11"=>"902 A-9",
        "12"=>"401 A-06",
        "13"=>"401 A-07",
        "14"=>"401 A-08",
        "15"=>"401 A-09",
        "15"=>"401 A-10",
        "16"=>"401 A-11",
        "17"=>"401 A-12",
        "18"=>"401 A-13",
        "19"=>"401 A-23",
        "20"=>"402 A-20",
        "21"=>"402 A-21",
        "22"=>"402 A-22",
        "23"=>"402 A-24",
        "24"=>"402 A-25",
        "25"=>"402 A-26",
        "26"=>"402 A-27",
        "27"=>"403 A-17",
        "28"=>"403 A-18",
        "29"=>"403 A-19",
        "30"=>"403 A-28",
        "31"=>"403 A-29",
        "32"=>"403 A-30",
        "33"=>"403 A-31",
        "34"=>"403 A-32",
        "35"=>"404 A-01",
        "36"=>"404 A-02",
        "37"=>"404 A-03",
        "38"=>"404 A-04",
        "39"=>"404 A-05",
        "40"=>"404 A-14",
        "41"=>"404 A-16",
        "42"=>"501 A-06",
        "43"=>"501 A-07",
        "44"=>"501 A-08",
        "45"=>"501 A-09",
        "46"=>"501 A-10",
        "47"=>"501 A-11",
        "48"=>"501 A-12",
        "49"=>"501 A-13",
        "50"=>"501 A-23",
        "51"=>"502 A-20",
        "52"=>"502 A-21",
        "53"=>"502 A-22",
        "54"=>"502 A-25",
        "55"=>"502 A-26",
        "56"=>"502 A-27",
        "57"=>"503 A-17",
        "58"=>"503 A-18",
        "59"=>"503 A-19",
        "60"=>"503 A-28",
        "61"=>"503 A-29",
        "62"=>"503 A-30",
        "63"=>"503 A-31",
        "64"=>"503 A-32",
        "65"=>"504 A-01",
        "66"=>"504 A-02",
        "67"=>"504 A-03",
        "68"=>"504 A-04",
        "69"=>"504 A-05",
        "70"=>"504 A-14",
        "71"=>"504 A-15",
        "72"=>"504 A-16",
        "73"=>"902 A-10",
        "74"=>"902 A-11",
        "75"=>"902 A-12",
        "76"=>"902 A-13",
        "77"=>"902 A-14",
        "78"=>"903 A-15",
        "79"=>"903 A-16",
        "80"=>"903 A-17",
        "81"=>"903 A-18",
        "82"=>"903 A-19",
        "83"=>"903 A-20",
        "84"=>"903 A-21",
        "85"=>"903 A-22",
        "86"=>"903 A-23",
        "87"=>"904 A-24",
        "88"=>"904 A-25",
        "89"=>"904 A-26",
        "90"=>"904 A-27",
        "91"=>"904 A-28",
        "92"=>"904 A-29",
        "93"=>"904 A-30",
        "94"=>"904 A-31",
        "95"=>"401 A-013",
        "96"=>"402 A-020",
        "97"=>"402 A-022",
        "98"=>"403 A-019",
        "99"=>"403 A-028",
        "100"=>"403 A-029",
        "101"=>"403 A-030",
        "102"=>"403 A-032",
        "103"=>"404 A-015",
        "104"=>"501 A-013",
        "105"=>"503 A-028",
        "106"=>"503 A-030",
        "107"=>"503 A-031",
        "108"=>"503 A-032",
        "109"=>"902 A-12-1",
        "110"=>"902 A-12-2",
        "111"=>"902 A-12-3",
        "112"=>"902 A-12-4",
        "113"=>"902 A-12-5",
        "114"=>"902 A-12-6",
        "115"=>"803 B-01",
        "116"=>"803 B-02",
        "117"=>"803 B-03",
        "118"=>"803 B-04",
        "119"=>"803 B-05",
        "120"=>"803 B-06",
        "121"=>"803 B-07",
        "122"=>"803 B-08",
        "123"=>"803 B-09",
        "124"=>"803 B-010",
        "125"=>"803 B-011",
        "126"=>"804 B-012",
        "127"=>"804 B-013",
        "128"=>"804 B-014",
        "129"=>"804 B-015",
        "130"=>"804 B-016",
        "131"=>"804 B-017",
        "132"=>"804 B-018",
        "133"=>"804 B-019",
        "134"=>"804 B-020",
        "135"=>"804 B-021",
        "136"=>"804 B-022",
    ],
    'meetinRoom' => [
        "5"=>"5th floor Meeting room",
        "8"=>"8th floor Meeting room",
        "9"=>"9th floor Meeting room",
    ],

    'services'=>[
        'types'=>[
            '1'=>'Color Print',
            '2'=>'Black & White Print',
            '3'=>'Scanning'
        ],
        'price'=>[
            '1'=>2.00,
            '2'=>1.00,
            '3'=>1.00,
        ],
        'status'=>[
            '0'=>'Pending',
            '1'=>'Complated',
            '2'=>'Cancelled',
            '3'=>'Rejected',
        ],
        'status_class'=>[
            '0'=>'bg-gradient-primary',
            '1'=>'bg-gradient-success',
            '2'=>'bg-gradient-danger',
            '3'=>'bg-gradient-dager',
        ]
    ],

    "tenants"=>[
        "404 A-01",
        "404 A-02",
        "404 A-03",
        "404 A-04",
        "404 A-05",
        "401 A-06",
        "401 A-07",
        "401 A-08",
        "401 A-09",
        "401 A-10",
        "401 A-11",
        "401 A-12",
        "401 A-13",
        "404 A-14",
        "404A-15",
        "404 A-16",
        "403 A-17",
        "403 A-18",
        "403 A-19",
        "402 A-20",
        "402 A-21",
        "402 A-22",
        "401 A-23",
        "402 A-24",
        "402 A-25",
        "402 A-26",
        "402 A-27",
        "403 A-28",
        "403 A-29",
        "403 A-30",
        "403 A-31",
        "403 A-32",
        "404 A-015",
        "403 A-019",
        "403 A-028",
        "403 A-030",
        "401 A-013",
        "504 A-01",
        "504 A-02",
        "504 A-03",
        "504 A-04",
        "504 A-05",
        "501 A-06",
        "501 A-07",
        "501 A-08",
        "501 A-09",
        "501 A-10",
        "501 A-11",
        "501 A-12",
        "501 A-13",
        "504 A-14",
        "504 A-15",
        "504 A-16",
        "503 A-17",
        "503 A-18",
        "503 A-19",
        "502 A-20",
        "502 A-21",
        "502 A-22",
        "501 A-23",
        "502A-24",
        "502 A-25",
        "502 A-26",
        "502 A-27",
        "503 A-28",
        "503 A-29",
        "503 A-30",
        "503 A-31",
        "503 A-32",
        "503 A-032",
        "501 A-013",
        "503 A-028",
        "503 A-030",
        "803 B-01",
        "803 B-02",
        "803 B-03",
        "803 B-04",
        "803 B-05",
        "803 B-06",
        "803 B-07",
        "803 B-08",
        "803 B-09",
        "803 B-010",
        "803 B-011",
        "804 B-012",
        "804 B-013",
        "804 B-014",
        "804 B-015",
        "804 B-016",
        "804 B-017",
        "804 B-018",
        "804 B-019",
        "804 B-020",
        "804 B-021",
        "804 B-022",
        "901 A-1",
        "901 A-2",
        "901 A-3",
        "901 A-4",
        "901 A-5",
        "901 A-6",
        "901 A-7",
        "902 A-8",
        "902 A-9",
        "902 A-10",
        "902 A-11",
        "902 A-12",
        "902 A-13",
        "902 A-14",
        "903 A-15",
        "903 A-16",
        "903 A-17",
        "903 A-18",
        "903 A-19",
        "903 A-20",
        "903 A-21",
        "903 A-22",
        "903 A-23",
        "904 A-24",
        "904 A-25",
        "904 A-26",
        "904 A-27",
        "904 A-28",
        "904 A-29",
        "904 A-30",
        "904 A-31",
        "902 A-32",
        "903 A-33",
        "903 A-34",
        "901 B-1",
        "901 B-2",
        "901 B-3",
        "901 B-4",
        "901 B-5",
        "901 B-6",
        "902 B-7",
        "902 B-8",
        "902 B-9",
        "902 B-10",
        "902 B-11",
        "902 B-12",
        "903 B-13",
        "903 B-14",
        "903 B-15",
        "903 B-16",
        "903 B-17",
        "903 B-18",
        "904 B-19",
        "904 B-20",
        "904 B-21",
        "904 B-22",
        "904 B-23",
        "904 B-24",
        "904 B-25",
        "M01 A1-1",
        "M01 A2-2",
        "M01 A3-3",
        "M01 A4-4",
        "M02 A1-5",
        "M02 A2-6",
        "M02 A3-7",
        "M02 A4-8",
    ],
]
  
?>