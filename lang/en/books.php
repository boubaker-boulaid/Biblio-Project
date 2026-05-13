<?php

return [
    // Search / Filters
    'heading' => 'Search for a Book',
    'filter_heading' => 'Filter books',
    'filter_categories' => 'Categories',
    'filter_all' => 'All',
    'filter_horror' => 'Horror',
    'filter_mystery' => 'Mystery',
    'filter_fiction' => 'Fiction',
    'filter_action' => 'Action',
    'filter_language' => 'Language',
    'filter_all_language' => 'All',
    'filter_spanish' => 'Spanish',
    'filter_french' => 'French',
    'filter_german' => 'German',
    'filter_arabic' => 'Arabic',
    'filter_english' => 'English',
    'filter_tags' => 'Tags',
    'tag_html' => 'HTML',
    'tag_laravel' => 'Laravel',
    'found_count' => ':count Book(s) found',
    'sort_label' => 'Sort by:',
    'sort_newest' => 'newest',
    'sort_oldest' => 'oldest',
    'sort_title' => 'title',
    'sort_price_high_low' => 'price (high to low)',
    'sort_price_low_high' => 'price (low to high)',
    'details' => 'Details',

    // Index page
    'index' => [
        'title' => 'Home',
        'search_results_for' => 'Search Results for ":query"',
        'found_books' => 'Found :count Book(s)',
        'view_all' => 'View all books',
        'browse' => 'Browse books',
        'add_book' => 'Add a book',
        'view' => 'View',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'delete_confirm' => 'Are you sure you want to delete this book?',
    ],

    // Show page
    'show' => [
        'title' => 'Book Details',
        'details_title' => 'Details',
        'overview' => 'Book Overview',
        'created_at' => 'Created at:',
        'author_label' => 'Author:',
        'publisher' => 'Publisher:',
        'category_label' => 'Category:',
        'price_label' => 'Price:',
        'buy' => 'Buy',
        'send' => 'Send',
    ],

    // Create page
    'create' => [
        'title' => 'Add a book',
        'add' => 'Add a book',
        'add_new' => 'Add a new book',
        'error_summary' => 'Please correct the errors below.',
        'cancel' => 'Cancel',
        'submit_add' => 'Add',
    ],

    // Edit page
    'edit' => [
        'title' => 'Edit a book',
        'edit_heading' => 'Edit a book',
        'edit_title' => 'Edit :designation',
        'error_summary' => 'Please correct the errors below.',
        'cancel' => 'Cancel',
        'submit_edit' => 'Modify',
    ],

    // Shared form fields
    'designation' => 'Designation',
    'author' => 'Author',
    'price' => 'Price',
    'type' => 'Type',
    'year' => 'Year',
    'category' => 'Category',
    'description' => 'Description',
    'cover' => 'Cover',

    // Flash Messages
    'added_success' => 'The book was added successfully!',
    'added_error' => 'An error occurred while adding the book!',
    'updated_success' => 'The book was updated successfully!',
    'updated_error' => 'An error occurred while updating the book!',
    'deleted_success' => 'The book was deleted successfully!',
    'deleted_error' => 'An error occurred while deleting the book!',
    'email_sent' => 'Email sent successfully!',
    'email_error' => 'An error occurred while sending the email!',
];
