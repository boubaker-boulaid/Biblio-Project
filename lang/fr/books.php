<?php

return [
    // Search / Filters
    'heading' => 'Rechercher un Livre',
    'filter_heading' => 'Filtrer les livres',
    'filter_categories' => 'Catégories',
    'filter_all' => 'Tout',
    'filter_horror' => 'Horreur',
    'filter_mystery' => 'Mystère',
    'filter_fiction' => 'Fiction',
    'filter_action' => 'Action',
    'filter_language' => 'Langue',
    'filter_all_language' => 'Tous',
    'filter_spanish' => 'Espagnol',
    'filter_french' => 'Français',
    'filter_german' => 'Allemand',
    'filter_arabic' => 'Arabe',
    'filter_english' => 'Anglais',
    'filter_tags' => 'Tags',
    'tag_html' => 'HTML',
    'tag_laravel' => 'Laravel',
    'found_count' => ':count Livre(s) trouvé(s)',
    'sort_label' => 'Trier par:',
    'sort_newest' => 'plus récent',
    'sort_oldest' => 'plus ancien',
    'sort_title' => 'titre',
    'sort_price_high_low' => 'prix (élevé au bas)',
    'sort_price_low_high' => 'prix (bas à élevé)',
    'details' => 'Détails',

    // Index page
    'index' => [
        'title' => 'Accueil',
        'search_results_for' => 'Résultats de recherche pour ":query"',
        'found_books' => ':count Livre(s) trouvé(s)',
        'view_all' => 'Voir tous les livres',
        'browse' => 'Parcourir les livres',
        'add_book' => 'Ajouter un livre',
        'view' => 'Voir',
        'edit' => 'Modifier',
        'delete' => 'Supprimer',
        'delete_confirm' => 'Êtes-vous sûr de vouloir supprimer ce livre ?',
    ],

    // Show page
    'show' => [
        'title' => 'Détails du livre',
        'details_title' => 'Détails',
        'overview' => 'Aperçu du livre',
        'created_at' => 'Date de création:',
        'author_label' => 'Auteur:',
        'publisher' => 'Editeur:',
        'category_label' => 'Catégorie:',
        'price_label' => 'Prix:',
        'buy' => 'Acheter',
        'send' => 'Envoyer',
    ],

    // Create page
    'create' => [
        'title' => 'Ajouter un livre',
        'add' => 'Ajouter un livre',
        'add_new' => 'Ajouter un nouveau livre',
        'error_summary' => 'Veuillez corriger les erreurs ci-dessous.',
        'cancel' => 'Annuler',
        'submit_add' => 'Ajouter',
    ],

    // Edit page
    'edit' => [
        'title' => 'Modifier un livre',
        'edit_heading' => 'Modifier un livre',
        'edit_title' => 'Modifier :designation',
        'error_summary' => 'Veuillez corriger les erreurs ci-dessous.',
        'cancel' => 'Annuler',
        'submit_edit' => 'Modifier',
    ],

    // Shared form fields
    'designation' => 'Désignation',
    'author' => 'Auteur',
    'price' => 'Prix',
    'type' => 'Type',
    'year' => 'Année',
    'category' => 'Catégorie',
    'description' => 'Description',
    'cover' => 'Couverture',

    // Flash Messages
    'added_success' => 'Le livre a été ajouté avec succès !',
    'added_error' => 'Une erreur est survenue lors de l\'ajout du livre !',
    'updated_success' => 'Le livre a été mis à jour avec succès !',
    'updated_error' => 'Une erreur est survenue lors de la mise à jour du livre !',
    'deleted_success' => 'Le livre a été supprimé avec succès !',
    'deleted_error' => 'Une erreur est survenue lors de la suppression du livre !',
    'email_sent' => 'E-mail envoyé avec succès !',
    'email_error' => 'Une erreur est survenue lors de l\'envoi de l\'e-mail !',
];
