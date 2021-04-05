<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'accueil_index' => [[], ['_controller' => 'App\\Controller\\AccueilController::indexAction'], [], [['text', '/']], [], []],
    'accueil_connexion' => [[], ['_controller' => 'App\\Controller\\AccueilController::connexionAction'], [], [['text', '/connexion']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::accueilAction'], [], [['text', '/accueil']], [], []],
    'accueil_deconnexion' => [[], ['_controller' => 'App\\Controller\\AccueilController::deconnexionAction'], [], [['text', '/deconnexion']], [], []],
    'doctrine_ajouterEnDur' => [[], ['_controller' => 'App\\Controller\\DoctrineController::ajouterEnDurAction'], [], [['text', '/doctrine/ajouterendur']], [], []],
    'commander_produit' => [[], ['_controller' => 'App\\Controller\\PanierController::commanderProduitAction'], [], [['text', '/commanderProduit']], [], []],
    'gerer_panier' => [[], ['_controller' => 'App\\Controller\\PanierController::gererPanierAction'], [], [['text', '/gererPanier']], [], []],
    'valider_panier' => [[], ['_controller' => 'App\\Controller\\PanierController::validerPanierAction'], [], [['text', '/validerPanier']], [], []],
    'supprimer_element_panier' => [['id'], ['_controller' => 'App\\Controller\\PanierController::supprimerElementPanierAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supprimerElementPanier']], [], []],
    'commander_panier' => [[], ['_controller' => 'App\\Controller\\PanierController::commanderPanierAction'], [], [['text', '/commanderPanier']], [], []],
    'vider_panier' => [[], ['_controller' => 'App\\Controller\\PanierController::viderPanierAction'], [], [['text', '/viderPanier']], [], []],
    'ajouter_produit' => [[], ['_controller' => 'App\\Controller\\ProduitController::ajouterProduitAction'], [], [['text', '/addProduit']], [], []],
    'lister_magasin' => [[], ['_controller' => 'App\\Controller\\ProduitController::listerMagasinAction'], [], [['text', '/listerMagasin']], [], []],
    'accueil_creer_compte' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::creerCompteAction'], [], [['text', '/creercompte']], [], []],
    'editer_profil' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::editerProfilAction'], [], [['text', '/editer']], [], []],
    'gerer_utilisateur' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::gererUtilisateurAction'], [], [['text', '/gererUtilisateur']], [], []],
];
