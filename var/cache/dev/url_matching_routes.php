<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil_index', '_controller' => 'App\\Controller\\AccueilController::indexAction'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'accueil_connexion', '_controller' => 'App\\Controller\\AccueilController::connexionAction'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::accueilAction'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'accueil_deconnexion', '_controller' => 'App\\Controller\\AccueilController::deconnexionAction'], null, null, null, false, false, null]],
        '/doctrine/ajouterendur' => [[['_route' => 'doctrine_ajouterEnDur', '_controller' => 'App\\Controller\\DoctrineController::ajouterEnDurAction'], null, null, null, false, false, null]],
        '/commanderProduit' => [[['_route' => 'commander_produit', '_controller' => 'App\\Controller\\PanierController::commanderProduitAction'], null, null, null, false, false, null]],
        '/gererPanier' => [[['_route' => 'gerer_panier', '_controller' => 'App\\Controller\\PanierController::gererPanierAction'], null, null, null, false, false, null]],
        '/validerPanier' => [[['_route' => 'valider_panier', '_controller' => 'App\\Controller\\PanierController::validerPanierAction'], null, null, null, false, false, null]],
        '/commanderPanier' => [[['_route' => 'commander_panier', '_controller' => 'App\\Controller\\PanierController::commanderPanierAction'], null, null, null, false, false, null]],
        '/viderPanier' => [[['_route' => 'vider_panier', '_controller' => 'App\\Controller\\PanierController::viderPanierAction'], null, null, null, false, false, null]],
        '/addProduit' => [[['_route' => 'ajouter_produit', '_controller' => 'App\\Controller\\ProduitController::ajouterProduitAction'], null, null, null, false, false, null]],
        '/listerMagasin' => [[['_route' => 'lister_magasin', '_controller' => 'App\\Controller\\ProduitController::listerMagasinAction'], null, null, null, false, false, null]],
        '/creercompte' => [[['_route' => 'accueil_creer_compte', '_controller' => 'App\\Controller\\UtilisateurController::creerCompteAction'], null, null, null, false, false, null]],
        '/editer' => [[['_route' => 'editer_profil', '_controller' => 'App\\Controller\\UtilisateurController::editerProfilAction'], null, null, null, false, false, null]],
        '/gererUtilisateur' => [[['_route' => 'gerer_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::gererUtilisateurAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/supprimerElementPanier/([^/]++)(*:201)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [
            [['_route' => 'supprimer_element_panier', '_controller' => 'App\\Controller\\PanierController::supprimerElementPanierAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
