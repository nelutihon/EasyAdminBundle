<?php

return [
    'page_title' => [
        // 'dashboard' => '',
        'detail' => '%entity_label_singular% (#%entity_id%)',
        'edit' => 'Modifier %entity_label_singular% (#%entity_id%)',
        'index' => '%entity_label_plural%',
        'new' => 'Créer "%entity_label_singular%"',
        'exception' => 'Erreur|Erreurs',
    ],

    'datagrid' => [
        'hidden_results' => 'Certains résultats ne peuvent pas être affichés car vous n\'avez pas la permission',
        'no_results' => 'Aucun résultat trouvé',
    ],

    'paginator' => [
        'first' => 'Premier',
        'previous' => 'Précédent',
        'next' => 'Suivant',
        'last' => 'Dernier',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> sur <strong>%results%</strong>',
        'results' => '{0} Aucun résultat|{1} <strong>1</strong> résultat|]1,Inf] <strong>%count%</strong> résultats',
    ],

    'label' => [
        'true' => 'Oui',
        'false' => 'Non',
        'empty' => 'Vide',
        'null' => 'Aucun(e)',
        'nullable_field' => 'Laisser vide',
        'object' => 'Objet PHP',
        'inaccessible' => 'Inaccessible',
        'inaccessible.explanation' => 'Aucun accesseur n\'existe pour cette propriété ou celle-ci n\'est pas publique.',
        'form.empty_value' => 'Aucun(e)',
    ],

    'field' => [
        // 'code_editor.view_code' => '',
        // 'text_editor.view_content' => '',
    ],

    'action' => [
        'entity_actions' => 'Actions',
        'new' => 'Créer %entity_label_singular%',
        'search' => 'Rechercher',
        'detail' => 'Voir',
        'edit' => 'Éditer',
        'delete' => 'Supprimer',
        'cancel' => 'Annuler',
        'index' => 'Retour à la liste',
        'deselect' => 'Désélectionner',
        'add_new_item' => 'Ajouter un nouvel élément',
        'remove_item' => 'Supprimer l\'élément',
        'choose_file' => 'Choisir un fichier',
        // 'close' => '',
        // 'create' => '',
        // 'create_and_add_another' => '',
        // 'create_and_continue' => '',
        // 'save' => '',
        // 'save_and_continue' => '',
    ],

    'batch_action_modal' => [
        'title' => 'Voulez-vous vraiment modifier les éléments sélectionnés?',
        'content' => 'Cette action est irréversible.',
        'action' => 'Procéder',
    ],

    'delete_modal' => [
        'title' => 'Voulez-vous supprimer cet élément ?',
        'content' => 'Cette action est irréversible.',
    ],

    'filter' => [
        'title' => 'Filtres',
        'button.clear' => 'Effacer',
        'button.apply' => 'Appliquer',
        'label.is_equal_to' => 'est égal(e) à',
        'label.is_not_equal_to' => 'est différent(e) de',
        'label.is_greater_than' => 'est supérieur(e) à',
        'label.is_greater_than_or_equal_to' => 'est supérieur(e) ou égal(e) à',
        'label.is_less_than' => 'est inférieur(e) à',
        'label.is_less_than_or_equal_to' => 'est inférieur(e) ou égal(e) à',
        'label.is_between' => 'est entre',
        'label.contains' => 'contient',
        'label.not_contains' => 'ne contient pas',
        'label.starts_with' => 'commence par',
        'label.ends_with' => 'finit par',
        'label.exactly' => 'est strictement égal(e) à',
        'label.not_exactly' => 'est strictement différent(e) de',
        'label.is_same' => 'est',
        'label.is_not_same' => 'n\'est pas',
        'label.is_after' => 'est postérieure à',
        'label.is_after_or_same' => 'est postérieure à ou est le',
        'label.is_before' => 'est antérieure à',
        'label.is_before_or_same' => 'est antérieure à ou est le',
    ],

    'form' => [
        'are_you_sure' => 'Vous n\'avez pas sauvegardé vos modifications.',
        'tab.error_badge_title' => '1 champ invalide|%count% champs invalides',
    ],

    'user' => [
        'logged_in_as' => 'Connecté en tant que',
        'unnamed' => 'Utilisateur sans nom',
        'anonymous' => 'Utilisateur anonyme',
        'sign_out' => 'Déconnexion',
        'exit_impersonation' => 'Arrêter l\'impersonnalisation',
    ],

    'login_page' => [
        'username' => 'Identifiant',
        'password' => 'Mot de passe',
        'sign_in' => 'Connectez-vous',
    ],

    'exception' => [
        'entity_not_found' => 'Cet élément n\'est plus disponible.',
        'entity_remove' => 'Cet élément ne peut être supprimé car d\'autres éléments en dépendent.',
        'forbidden_action' => 'L\'action demandée ne peut être exécutée sur cet élément.',
    ],
];
