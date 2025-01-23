<?

$title = "Title";
$headers = "Recers Post";

$posts = [
  1 => [
        "title" => "Зелёные листья",
        "desc" => "Листики",
        "img" => "assets/imgs/cards/14.Листва.jpg",
        "slug" => "Облака~"
  ],
  2 => [
    "title" => "Облака~",
    "desc" => "Белокрылые лошадки",    
    "img" => "assets/imgs/cards/15.Облака.jpg",
    "slug" => "Облака~"
  ],
  3 => [
    "title" => "Город сверху",
    "desc" => "Городочек",
    "img" => "assets/imgs/cards/16.Город.jpg",
    "slug" => "Облака~"
  ],
  4 => [
    "title" => "Большой мост",
    "desc" => "Мостик",
    "img" => "assets/imgs/cards/17.Мост.jpg",
    "slug" => "Облака~"
  ]
];

$most_popular_posts = [
  1 => [
        "title" => "First post",
        "slug" => "#"
      ],
  2 => [
    "title" => "Second post",
    "slug" => "#"
      ],
  3 => [
    "title" => "Trird post",
    "slug" => "#"
      ],
  4 => [
    "title" => "Foure post",
    "slug" => "#"
      ]     
  ];

require_once VIEWS.'/index.tmpl.php';

?>