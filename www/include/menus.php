<?php
include_once('./_common.php');

$sb_menus = [
  [
    'id' => '',
    'name' => '회원기관',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '회원가입 명단',
        'link' => '',
      ],
      [
        'id' => '',
        'name' => '회원기관 소식',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '전국 과학관 현황',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '회원가입 안내',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => '',
    'name' => '사업소개',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '지역과학관 활성화 지원 사업',
        'link' => '',
      ],
      [
        'id' => '',
        'name' => '두드림 프로젝트 사업',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '금요일에 과학터치',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '전국 과학관 길라잡이',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '전국 과학관 현황조사',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => '',
    'name' => '커뮤니티',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '공지사항',
        'link' => '',
      ],
      [
        'id' => '',
        'name' => '채용공고',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '전국과학관 e소식지',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '과기정통부 소식',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => '',
    'name' => '협회소개',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '인사말',
        'link' => '',
      ],
      [
        'id' => '',
        'name' => '기관소개',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '조직도',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => 'CI 소개',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '오시는 길',
        'link' => ''
      ]
    ]
  ]
];

//제품 카테고리 DB 데이터 가져오기 + 메뉴 배열에 할당
/* 필요시 주석 해제
$cate_table = G5_TABLE_PREFIX.'shop_category';
$prd_table = G5_TABLE_PREFIX.'shop_item';
$prd_cate_sql = " select ca_id, ca_1_subj from {$cate_table} ";
$prd_cate_result = sql_query($prd_cate_sql);
$prd_cate = array();
for($i=0; $prd_cate_row=sql_fetch_array($prd_cate_result); $i++){
  $sb_menus[1]['sb_2menus'][] = [
    'id' => $prd_cate_row['ca_id'],
    'name' => $prd_cate_row['ca_1_subj'],
    'link' => '/sub/prod_list/'.$prd_cate_row['ca_id'],
  ];

  $prd_item_sql = " select it_id, it_name from {$prd_table} where ca_id = '{$prd_cate_row['ca_id']}' and it_use=1 ";
  $prd_item_result = sql_query($prd_item_sql);
  $prd_item = array();
  for($k=0; $prd_item_row=sql_fetch_array($prd_item_result); $k++){
    $sb_menus[1]['sb_2menus'][$i]['sb_3menus'][] = [
      'id' => $prd_item_row['it_id'],
      'name' => $prd_item_row['it_name'],
      'link' => '/sub/prod_view/'.$prd_item_row['it_id'],
    ];
  }
}
*/
?>