<?php

$formats = [
  'date' => 'd/m/Y',
  'datetime' => 'd/m/Y H:i:s',
  'time' => 'H:i:s'
];

// o meu esquema para os módulos é o seguinte:
$example_modules_structure = [
  'table_name' => [
    'name' => 'Nome da Tabela',
    'icon' => 'fa fa-icon',
    'supports_lang' => false, // optional, default is false
    'db_pagination' => false, // optional, default is false
    'columns' => [
      'column_name' => [
        'name' => 'Nome da Coluna', // required
        'type' => 'text', // text, number, date, datetime, time, textarea, checkbox, hidden, image, decimal, html, code, radio, select, password
        'required' => true, // optional, default is false
        'editable' => true, // optional, default is true
        'primary' => true, // optional, default is false
        'foreign' => [
          'module' => 'table_name',
          'column' => 'column_name',
          'highlighted_columns' => ['column_name', 'column_name'] // optional
        ], // optional
        'options' => [
          'option1' => 'Option 1',
          'option2' => 'Option 2'
        ] // optional
      ]
    ]
  ]
];

$modules = [
  'avaliacoes' => [
    'name' => "Avaliações",
    'icon' => 'fa fa-star',
    'columns' => [
      'id' => [
        'name' => 'ID',
        'primary' => true,
        'type' => 'hidden',
      ],
      'id_utilizador' => [
        'name' => 'ID do Utilizador',
        'type' => 'text',
        'foreign' => [
          'module' => 'utilizadores',
          'column' => 'id',
          'highlighted_columns' => ['primeiro_nome', 'ultimo_nome']
        ]
      ],
      'id_explicador' => [
        'name' => 'ID do Explicador',
        'type' => 'text',
        'foreign' => [
          'module' => 'explicadores',
          'column' => 'id',
          'highlighted_columns' => ['apresentacao']
        ]
      ],
      'estrelas' => [
        'name' => 'Estrelas',
        'type' => 'number',
      ],
      'texto' => [
        'name' => 'Texto',
        'type' => 'textarea',
      ],
      'criado_em' => [
        'name' => 'Criado Em',
        'type' => 'datetime',
      ],
      'ativo' => [
        'name' => 'Ativo',
        'type' => 'checkbox',
        'required' => false
      ]
    ]
  ],
  'disciplinas' => [
    'name' => "Disciplinas",
    'icon' => 'fa fa-book',
    'columns' => [
      'id' => [
        'name' => 'ID',
        'primary' => true,
        'type' => 'hidden',
      ],
      'nome' => [
        'name' => 'Nome',
        'type' => 'text',
      ],
      'ativo' => [
        'name' => 'Ativo',
        'type' => 'checkbox',
        'required' => false
      ]
    ]
  ],
  'explicadores' => [
    'name' => "Explicadores",
    'icon' => 'fa fa-chalkboard-teacher',
    'columns' => [
      'id' => [
        'name' => 'ID',
        'primary' => true,
        'type' => 'hidden',
      ],
      'apresentacao' => [
        'name' => 'Apresentação',
        'type' => 'textarea',
      ],
      'website' => [
        'name' => 'Website',
        'type' => 'text',
        'required' => false
      ],
      'linkedin' => [
        'name' => 'LinkedIn',
        'type' => 'text',
        'required' => false
      ],
      'ativo' => [
        'name' => 'Ativo',
        'type' => 'checkbox',
        'required' => false
      ]
    ]
  ],
  'disciplinas_turma' => [
    'name' => "Disciplinas da Turma",
    'icon' => 'fa fa-university',
    'columns' => [
      'id' => [
        'name' => 'ID',
        'primary' => true,
        'type' => 'hidden',
      ],
      'id_disciplina' => [
        'name' => 'ID da Disciplina',
        'type' => 'number',
        'foreign' => [
          'module' => 'disciplinas',
          'column' => 'id',
          'highlighted_columns' => ['nome']
        ]
      ],
      'id_turma' => [
        'name' => 'ID da Turma',
        'type' => 'number',
        'foreign' => [
          'module' => 'turmas',
          'column' => 'id',
          'highlighted_columns' => ['nome']
        ]
      ],
      'ativo' => [
        'name' => 'Ativo',
        'type' => 'checkbox',
        'required' => false
      ]
    ]
  ],
  'experiencias_profissionais' => [
    'name' => "Experiências Profissionais",
    'icon' => 'fa fa-briefcase',
    'columns' => [
      'id' => [
        'name' => 'ID',
        'primary' => true,
        'type' => 'hidden',
      ],
      'titulo' => [
        'name' => 'Título',
        'type' => 'text',
      ],
      'instituicao' => [
        'name' => 'Instituição',
        'type' => 'text',
      ],
      'data_inicio' => [
        'name' => 'Data de Início',
        'type' => 'date',
      ],
      'data_fim' => [
        'name' => 'Data de Fim',
        'type' => 'date',
      ],
      'id_explicador' => [
        'name' => 'ID do Explicador',
        'type' => 'number',
        'foreign' => [
          'module' => 'explicadores',
          'column' => 'id',
          'highlighted_columns' => ['apresentacao']
        ]
      ],
      'ativo' => [
        'name' => 'Ativo',
        'type' => 'checkbox',
        'required' => false
      ]
    ]
  ],
  'logs' => [
    'name' => "Logs",
    'icon' => 'fa fa-history',
    'columns' => [
      'id' => [
        'name' => 'ID',
        'primary' => true,
        'type' => 'hidden',
      ],
      'pagina' => [
        'name' => 'Página',
        'type' => 'text',
      ],
      'modulo' => [
        'name' => 'Módulo',
        'type' => 'text',
      ],
      'acao' => [
        'name' => 'Ação',
        'type' => 'text',
      ],
      'id_utilizador' => [
        'name' => 'ID do Utilizador',
        'type' => 'number',
      ],
      'id_sessao' => [
        'name' => 'ID da Sessão',
        'type' => 'text',
      ],
      'de_onde' => [
        'name' => 'De Onde',
        'type' => 'text',
      ],
      'data' => [
        'name' => 'Data',
        'type' => 'datetime',
      ]
    ]
  ],
  'mensagens' => [
    'name' => "Mensagens",
    'icon' => 'fa fa-envelope',
    'columns' => [
      'id' => [
        'name' => 'ID',
        'primary' => true,
        'type' => 'hidden',
      ],
      'criado_em' => [
        'name' => 'Criado Em',
        'type' => 'datetime',
      ],
      'texto' => [
        'name' => 'Texto',
        'type' => 'textarea',
      ],
      'id_utilizador' => [
        'name' => 'ID do Utilizador',
        'type' => 'number',
        'foreign' => [
          'module' => 'utilizadores',
          'column' => 'id',
          'highlighted_columns' => ['primeiro_nome', 'ultimo_nome']
        ]
      ],
      'id_turma' => [
        'name' => 'ID da Turma',
        'type' => 'number',
        'foreign' => [
          'module' => 'turmas',
          'column' => 'id',
          'highlighted_columns' => ['nome']
        ]
      ],
      'ativo' => [
        'name' => 'Ativo',
        'type' => 'checkbox',
        'required' => false
      ]
    ]
  ],
  'reunioes' => [
    'name' => "Reuniões",
    'icon' => 'fa fa-users',
    'columns' => [
      'id' => [
        'name' => 'ID',
        'primary' => true,
        'type' => 'hidden',
      ],
      'titulo' => [
        'name' => 'Título',
        'type' => 'text',
      ],
      'data' => [
        'name' => 'Data',
        'type' => 'datetime',
      ],
      'criado_em' => [
        'name' => 'Criado Em',
        'type' => 'datetime',
      ],
      'id_turma' => [
        'name' => 'ID da Turma',
        'type' => 'number',
        'foreign' => [
          'module' => 'turmas',
          'column' => 'id',
          'highlighted_columns' => ['nome']
        ]
      ],
      'ativo' => [
        'name' => 'Ativo',
        'type' => 'checkbox',
        'required' => false
      ]
    ]
  ],
  'turmas' => [
    'name' => "Turmas",
    'icon' => 'fa fa-graduation-cap',
    'columns' => [
      'id' => [
        'name' => 'ID',
        'primary' => true,
        'type' => 'hidden',
      ],
      'nome' => [
        'name' => 'Nome',
        'type' => 'text',
      ],
      'descricao' => [
        'name' => 'Descrição',
        'type' => 'textarea',
      ],
      'criado_em' => [
        'name' => 'Criado Em',
        'type' => 'datetime',
      ],
      'como_funciona' => [
        'name' => 'Como Funciona',
        'type' => 'textarea',
      ],
      'preco' => [
        'name' => 'Preço',
        'type' => 'decimal',
      ],
      'ativo' => [
        'name' => 'Ativo',
        'type' => 'checkbox',
        'required' => false
      ]
    ]
  ],
  'utilizadores' => [
    'name' => "Utilizadores",
    'icon' => 'fa fa-user',
    'show_add_button' => false,
    'columns' => [
      'id' => [
        'name' => 'ID',
        'primary' => true,
        'type' => 'hidden',
      ],
      'primeiro_nome' => [
        'name' => 'Primeiro Nome',
        'type' => 'text',
      ],
      'ultimo_nome' => [
        'name' => 'Último Nome',
        'type' => 'text',
      ],
      'avatar_url' => [
        'name' => 'URL do Avatar',
        'type' => 'text',
      ],
      'data_nasc' => [
        'name' => 'Data de Nascimento',
        'type' => 'date',
      ],
      'ativo' => [
        'name' => 'Ativo',
        'type' => 'checkbox',
        'required' => false
      ]
    ]
  ],
];