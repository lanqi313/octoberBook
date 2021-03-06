<?php

return [
    'cms_object' => [
        'invalid_file' => 'Nome de arquivo inválido: ":name". Os nomes de arquivos podem conter apenas letras, números, sublinhados, traços e pontos. Veja alguns exemplos de nomes de arquivos corretos: pagina.htm, pagina, subdiretorio/pagina',
        'invalid_property' => 'A propriedade ":nome" não pode ser definida',
        'file_already_exists' => 'Arquivo ":name" já existe.',
        'error_saving' => 'Erro ao salvar arquivo ":name". Verifique as permissões de escrita.',
        'error_creating_directory' => 'Erro ao criar o diretório :name. Verifique as permissões de escrita.',
        'invalid_file_extension'=>'Extensão de arquivo inválida: :invalid. Extensões válidas: :allowed.',
        'error_deleting' => 'Erro ao excluir o arquivo de template ":name". Verifique as permissões de escrita.',
        'delete_success' => 'Templates apagados com sucesso: :count.',
        'file_name_required' => 'O campo de Nome do Arquivo é necessário.',
    ],
    'theme' => [
        'not_found_name' => 'O tema ":name" não foi encontrado.',
        'active' => [
            'not_set' => 'O tema ativo não foi definido.',
            'not_found' => 'O tema ativo não foi encontrado.',
        ],
        'edit' => [
            'not_set' => 'O tema de edição não foi definido.',
            'not_found' => 'O tema de edição não foi encontrado.',
            'not_match' => 'O objeto que você está tentando acessar não pertence ao tema que está sendo editado. Por favor, recarregue a página.',
        ],
        'settings_menu' => 'Temas',
        'settings_menu_description' => 'Veja a lista de temas instalados e selecione o tema ativo.',
        'name_label' => 'Nome',
        'name_create_placeholder' => 'Nome do novo tema',
        'author_label' => 'Autor',
        'author_placeholder' => 'Nome do autor',
        'description_label' => 'Descrição',
        'description_placeholder' => 'Descrição do tema',
        'homepage_label' => 'Site',
        'homepage_placeholder' => 'URL do site',
        'code_label' => 'Código',
        'code_placeholder' => 'Um código exclusivo para esse tema a ser usado para distribuição',
        'dir_name_label' => 'Nome do diretório',
        'dir_name_create_label' => 'O diretório-alvo de temas',
        'theme_label' => 'Tema',
        'activate_button' => 'Ativar',
        'active_button' => 'Ativado',
        'customize_button' => 'Customizar',
        'duplicate_button' => 'Duplicar',
        'duplicate_title' => 'Duplicar tema',
        'duplicate_theme_success' => 'Tema duplicado com sucesso!',
        'manage_button' => 'Gerenciar',
        'manage_title' => 'Gerenciar tema',
        'edit_properties_title' => 'Tema',
        'edit_properties_button' => 'Editar propriedades',
        'save_properties' => 'Salvar propriedades',
        'import_button' => 'Importar',
        'import_title' => 'Importar tema',
        'import_theme_success' => 'Tema importado com sucesso!',
        'import_uploaded_file' => 'Arquivo de tema',
        'import_overwrite_label' => 'Sobrescrever arquivos existentes',
        'import_overwrite_comment' => 'Desmarque para importar apenas arquivos novos',
        'import_folders_label' => 'Pastas',
        'import_folders_comment' => 'Por favor selecione as pastas de temas que deseja importar',
        'export_button' => 'Exportar',
        'export_title' => 'Exportar tema',
        'export_folders_label' => 'Pastas',
        'export_folders_comment' => 'Por favor selecione as pastas de temas que deseja exportar',
        'delete_button' => 'Deletar',
        'delete_confirm' => 'Tem certeza que deseja deletar este tema? Isto não pode ser revertido!',
        'delete_active_theme_failed' => 'Não é possível deletar o tema ativo, torne outro tema ativo antes.',
        'delete_theme_success' => 'Tema deletado com sucesso!',
        'create_title' => 'Criar tema',
        'create_button' => 'Criar',
        'create_new_blank_theme' => 'Criar novo tema em branco',
        'create_theme_success' => 'Tema criado com sucesso!',
        'create_theme_required_name' => 'Por favor forneça um nome para o tema.',
        'new_directory_name_label' => 'Diretório do tema',
        'new_directory_name_comment' => 'Forneça um novo nome de diretório para o tema duplicado.',
        'dir_name_invalid' => 'O nome só pode conter letras, números, e os símbolos: _-',
        'dir_name_taken' => 'Diretório de tema escolhido já existe.',
        'find_more_themes' => 'Encontrar mais temas.',
        'return' => 'Retornar à lista de temas',
    ],
    'maintenance' => [
        'settings_menu' => 'Modo de manutenção',
        'settings_menu_description' => 'Configurar modo de manutenção e a página exibida.',
        'is_enabled' => 'Ativar modo de manutenção',
        'is_enabled_comment' => 'Quando ativado visitantes do site vão ver a página selecionada.',
    ],
    'page' => [
        'not_found_name' => 'A página ":name" não foi encontrada',
        'not_found' => [
            'label' => 'Página não encontrada',
            'help' => 'A página solicitada não pode ser encontrada.',
        ],
        'custom_error' => [
            'label' => 'Erro na página',
            'help' => 'Lamentamos, mas algo deu errado e que a página não pode ser exibida.',
        ],
        'menu_label' => 'Páginas',
        'unsaved_label' => 'Página(s) não salva(s)',
        'no_list_records' => 'Nenhuma página encontrada',
        'new' => 'Nova página',
        'invalid_url' => 'Formato de URL inválido. A URL deve começar com uma barra e pode conter letras, números e os símbolos: _-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Você realmente deseja excluir as páginas selecionadas?',
        'delete_confirm_single' => 'Você realmente deseja excluir esta página?',
        'no_layout' => '-- sem layout --',
    ],
    'layout' => [
        'not_found_name' => 'O layout ":name" não foi encontrado',
        'menu_label' => 'Layouts',
        'unsaved_label' => 'Layout(s) não salvo(s)',
        'no_list_records' => 'Nenhum layout encontrado',
        'new' => 'Novo layout',
        'delete_confirm_multiple' => 'Você realmente deseja excluir os layouts selecionados?',
        'delete_confirm_single' => 'Você realmente deseja excluir este layout?',
    ],
    'partial' => [
        'not_found_name' => 'O bloco ":name" não foi encontrado.',
        'invalid_name' => 'Nome de bloco inválido: :name.',
        'menu_label' => 'Blocos',
        'unsaved_label' => 'Bloco(s) não salvo(s)',
        'no_list_records' => 'Nenhum bloco encontrado',
        'delete_confirm_multiple' => 'Você realmente deseja apagar os blocos selecionados?',
        'delete_confirm_single' => 'Você realmente deseja apagar este bloco?',
        'new' => 'Novo bloco',
    ],
    'content' => [
        'not_found_name' => 'O arquivo de conteúdo ":name" não foi encontrado.',
        'menu_label' => 'Conteúdo',
        'unsaved_label' => 'Conteúdo não salvo',
        'no_list_records' => 'Nenhum arquivo de conteúdo encontrado',
        'delete_confirm_multiple' => 'Você realmente deseja apagar arquivos ou diretórios de conteúdo selecionados?',
        'delete_confirm_single' => 'Você realmente deseja apagar este arquivo de conteúdo?',
        'new' => 'Novo arquivo de conteúdo',
    ],
    'ajax_handler' => [
        'invalid_name' => 'O nome do manipulador AJAX é inválido: :name.',
        'not_found' => 'Manipulador AJAX ":name" não encontrado.',
    ],
    'cms' => [
        'menu_label' => 'CMS',
    ],
    'sidebar' => [
        'add' => 'Adicionar',
        'search' => 'Buscar...',
    ],
    'editor' => [
        'settings' => 'Configurações',
        'title' => 'Título',
        'new_title' => 'Título da nova página',
        'url' => 'URL',
        'filename' => 'Nome do Arquivo',
        'layout' => 'Layout',
        'description' => 'Descrição',
        'preview' => 'Visualizar',
        'meta' => 'Meta',
        'meta_title' => 'Meta Título',
        'meta_description' => 'Meta Descrição',
        'markup' => 'Edição',
        'code' => 'Código',
        'content' => 'Conteúdo',
        'hidden' => 'Oculta',
        'hidden_comment' => 'Páginas ocultas são acessíveis somente para administradores.',
        'enter_fullscreen' => 'Entrar no modo de tela cheia',
        'exit_fullscreen' => 'Sair do modo de tela cheia',
    ],
    'asset' => [
        'menu_label' => 'Arquivos',
        'unsaved_label' => 'Arquivo(s) não salvo(s)',
        'drop_down_add_title' => 'Adicionar...',
        'drop_down_operation_title' => 'Ação...',
        'upload_files' => 'Enviar arquivo(s)',
        'create_file' => 'Criar arquivo',
        'create_directory' => 'Criar diretório',
        'directory_popup_title' => 'Novo diretório',
        'directory_name' => 'Nome do diretório',
        'rename' => 'Renomear',
        'delete' => 'Excluir',
        'move' => 'Mover',
        'select' => 'Selecionar',
        'new' => 'Novo arquivo',
        'rename_popup_title' => 'Renomear',
        'rename_new_name' => 'Novo nome',
        'invalid_path' => 'O caminho pode conter apenas letras, números, espaços e os símbolos: ._-/',
        'error_deleting_file' => 'Erro ao excluir arquivo :name.',
        'error_deleting_dir_not_empty' => 'Erro ao excluir diretório :name. O diretório não está vazio.',
        'error_deleting_dir' => 'Erro ao excluir diretório :name.',
        'invalid_name' => 'O nome pode conter apenas letras, números, espaços e os símbolos: ._-',
        'original_not_found' => 'Arquivo ou diretório original não encontrado',
        'already_exists' => 'Um arquivo ou diretório com este nome já existe',
        'error_renaming' => 'Erro ao renomear o arquivo ou diretório',
        'name_cant_be_empty' => 'O nome não pode estar vazio',
        'too_large' => 'O arquivo enviado é muito grande. O tamanho máximo permitido é :max_size',
        'type_not_allowed' => 'Apenas os seguintes tipos de arquivos são permitidos: :allowed_types',
        'file_not_valid' => 'O arquivo não é válido',
        'error_uploading_file' => 'Error uploading file ":name": :error',
        'move_please_select' => 'por favor selecione',
        'move_destination' => 'Diretório de destino',
        'move_popup_title' => 'Mover arquivos',
        'move_button' => 'Mover',
        'selected_files_not_found' => 'Arquivos selecionados não encontrados',
        'select_destination_dir' => 'Por favor, selecione um diretório de destino',
        'destination_not_found' => 'Diretório de destino não encontrado',
        'error_moving_file' => 'Erro ao mover arquivo :file',
        'error_moving_directory' => 'Erro ao mover diretório :dir',
        'error_deleting_directory' => 'Erro ao excluir o diretório original :dir',
        'path' => 'Caminho',
    ],
    'component' => [
        'menu_label' => 'Componentes',
        'unnamed' => 'Sem nome',
        'no_description' => 'Nenhuma descrição fornecida',
        'alias' => 'Alias',
        'alias_description' => 'Um nome exclusivo dado a este componente quando usá-lo no código de uma página ou layout.',
        'validation_message' => 'Aliases de componentes são necessários e podem conter letras, números e sublinhados. Os aliases deve começar com uma letra.',
        'invalid_request' => 'O template não pode ser salvo devido a dados inválidos nos componentes.',
        'no_records' => 'Nenhum componente encontrado',
        'not_found' => 'O componente ":name" não foi encontrado.',
        'method_not_found' => 'O componente ":name" não tem um método ":method".',
    ],
    'template' => [
        'invalid_type' => 'Tipo de template desconhecido.',
        'not_found' => 'O template solicitado não foi encontrado.',
        'saved'=> 'O modelo foi salvo com sucesso.',
    ],
    'permissions' => [
        'name' => 'Cms',
        'manage_content' => 'Gerenciar conteúdo',
        'manage_assets' => 'Gerenciar arquivos',
        'manage_pages' => 'Gerenciar páginas',
        'manage_layouts' => 'Gerenciar layouts',
        'manage_partials' => 'Gerenciar blocos',
        'manage_themes' => 'Gerenciar temas',
    ],
];
