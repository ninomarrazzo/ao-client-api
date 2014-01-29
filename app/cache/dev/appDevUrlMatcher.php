<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/bootstrap')) {
            // _assetic_bootstrap_css
            if ($pathinfo === '/css/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            if (0 === strpos($pathinfo, '/css/bootstrap_')) {
                // _assetic_bootstrap_css_0
                if ($pathinfo === '/css/bootstrap_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                }

                // _assetic_bootstrap_css_1
                if ($pathinfo === '/css/bootstrap_form_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/bootstrap')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/js/bootstrap.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                if (0 === strpos($pathinfo, '/js/bootstrap_')) {
                    // _assetic_bootstrap_js_0
                    if ($pathinfo === '/js/bootstrap_transition_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                    // _assetic_bootstrap_js_1
                    if ($pathinfo === '/js/bootstrap_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                    }

                    // _assetic_bootstrap_js_2
                    if ($pathinfo === '/js/bootstrap_button_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/bootstrap_c')) {
                        // _assetic_bootstrap_js_3
                        if ($pathinfo === '/js/bootstrap_carousel_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                        }

                        // _assetic_bootstrap_js_4
                        if ($pathinfo === '/js/bootstrap_collapse_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                        }

                    }

                    // _assetic_bootstrap_js_5
                    if ($pathinfo === '/js/bootstrap_dropdown_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                    }

                    // _assetic_bootstrap_js_6
                    if ($pathinfo === '/js/bootstrap_modal_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                    }

                    // _assetic_bootstrap_js_7
                    if ($pathinfo === '/js/bootstrap_tooltip_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                    }

                    // _assetic_bootstrap_js_8
                    if ($pathinfo === '/js/bootstrap_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                    }

                    // _assetic_bootstrap_js_9
                    if ($pathinfo === '/js/bootstrap_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                    }

                    // _assetic_bootstrap_js_10
                    if ($pathinfo === '/js/bootstrap_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                    }

                    // _assetic_bootstrap_js_11
                    if ($pathinfo === '/js/bootstrap_affix_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                    }

                    // _assetic_bootstrap_js_12
                    if ($pathinfo === '/js/bootstrap_bc-bootstrap-collection_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/js/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/js/jquery_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // wellnet_test_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'wellnet_test_homepage');
            }

            return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\DefaultController::indexAction',  '_route' => 'wellnet_test_homepage',);
        }

        if (0 === strpos($pathinfo, '/t')) {
            // wellnet_test_2legged
            if ($pathinfo === '/twolegged') {
                return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\DefaultController::twoleggedAction',  '_route' => 'wellnet_test_2legged',);
            }

            // wellnet_test_3legged
            if ($pathinfo === '/threelegged') {
                return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\DefaultController::threeleggedAction',  '_route' => 'wellnet_test_3legged',);
            }

        }

        // wellnet_test_collaudo
        if ($pathinfo === '/collaudo') {
            return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\DefaultController::collaudoAction',  '_route' => 'wellnet_test_collaudo',);
        }

        // wellnet_test_help
        if ($pathinfo === '/help') {
            return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\DefaultController::helpAction',  '_route' => 'wellnet_test_help',);
        }

        if (0 === strpos($pathinfo, '/structure')) {
            // wellnet_test_get_structure
            if (0 === strpos($pathinfo, '/structure/node') && preg_match('#^/structure/node/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_get_structure')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\StructureController::getStructureAction',));
            }

            // wellnet_test_change_state
            if (0 === strpos($pathinfo, '/structure/change_state') && preg_match('#^/structure/change_state/(?P<nid>[^/]++)/(?P<state>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_change_state')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\StructureController::changeStateAction',));
            }

            // wellnet_test_unpublish_live
            if (0 === strpos($pathinfo, '/structure/unpublish_live') && preg_match('#^/structure/unpublish_live/(?P<nid>[^/]++)/(?P<vid>[^/]++)/(?P<state>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_unpublish_live')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\StructureController::unpublishLiveAction',));
            }

        }

        if (0 === strpos($pathinfo, '/node')) {
            // wellnet_test_list_nodes
            if (0 === strpos($pathinfo, '/node/detail') && preg_match('#^/node/detail/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_list_nodes')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\NodeController::indexAction',));
            }

            // wellnet_test_list_all_nodes
            if ($pathinfo === '/node_all') {
                return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\NodeController::allNodesAction',  '_route' => 'wellnet_test_list_all_nodes',);
            }

            // wellnet_test_get_node
            if (0 === strpos($pathinfo, '/node/get') && preg_match('#^/node/get/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_get_node')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\NodeController::getAction',));
            }

            // wellnet_test_delete_node
            if (0 === strpos($pathinfo, '/node/delete') && preg_match('#^/node/delete/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_delete_node')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\NodeController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/node/create_')) {
                // wellnet_test_create_accreditation_node
                if ($pathinfo === '/node/create_accreditation') {
                    return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\AccreditationNodeController::createAction',  '_route' => 'wellnet_test_create_accreditation_node',);
                }

                // wellnet_test_create_eliot_node
                if ($pathinfo === '/node/create_eliot') {
                    return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\EliotNodeController::createAction',  '_route' => 'wellnet_test_create_eliot_node',);
                }

            }

        }

        // wellnet_test_contributions_get_eliot_types
        if ($pathinfo === '/eliot/get_types') {
            return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\EliotNodeController::getTypesAction',  '_route' => 'wellnet_test_contributions_get_eliot_types',);
        }

        // wellnet_test_create_file
        if ($pathinfo === '/file/create') {
            return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\FileController::createAction',  '_route' => 'wellnet_test_create_file',);
        }

        if (0 === strpos($pathinfo, '/node')) {
            // wellnet_test_list_nodes_topic
            if ($pathinfo === '/node/detail/topic') {
                return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\TopicNodeController::indexAction',  '_route' => 'wellnet_test_list_nodes_topic',);
            }

            if (0 === strpos($pathinfo, '/node/create_')) {
                if (0 === strpos($pathinfo, '/node/create_topic')) {
                    // wellnet_test_create_topic_node
                    if ($pathinfo === '/node/create_topic') {
                        return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\TopicNodeController::createAction',  '_route' => 'wellnet_test_create_topic_node',);
                    }

                    // wellnet_test_create_topic_tag
                    if (0 === strpos($pathinfo, '/node/create_topic_tag') && preg_match('#^/node/create_topic_tag/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_create_topic_tag')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\TopicNodeController::createTagAction',));
                    }

                }

                // wellnet_test_create_event_node
                if ($pathinfo === '/node/create_event') {
                    return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\EventNodeController::createAction',  '_route' => 'wellnet_test_create_event_node',);
                }

            }

            // wellnet_test_update_event_node
            if (0 === strpos($pathinfo, '/node/update_event') && preg_match('#^/node/update_event/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_update_event_node')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\EventNodeController::updateAction',));
            }

            // wellnet_test_delete_event_node
            if (0 === strpos($pathinfo, '/node/delete_event') && preg_match('#^/node/delete_event/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_delete_event_node')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\EventNodeController::deleteAction',));
            }

            // wellnet_test_create_poi_node
            if ($pathinfo === '/node/create_poi') {
                return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\PoiNodeController::createAction',  '_route' => 'wellnet_test_create_poi_node',);
            }

            // wellnet_test_update_poi_node
            if (0 === strpos($pathinfo, '/node/update_poi') && preg_match('#^/node/update_poi/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_update_poi_node')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\PoiNodeController::updateAction',));
            }

            // wellnet_test_create_image_node
            if ($pathinfo === '/node/create_image') {
                return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ImageNodeController::createAction',  '_route' => 'wellnet_test_create_image_node',);
            }

            // wellnet_test_update_image_node
            if (0 === strpos($pathinfo, '/node/update_image') && preg_match('#^/node/update_image/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_update_image_node')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ImageNodeController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // wellnet_test_list_users
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\UserController::indexAction',  '_route' => 'wellnet_test_list_users',);
            }

            if (0 === strpos($pathinfo, '/user/get')) {
                // wellnet_test_get_user
                if (preg_match('#^/user/get/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_get_user')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\UserController::getAction',));
                }

                // wellnet_test_get_user_accreditation
                if (0 === strpos($pathinfo, '/user/get_accreditation') && preg_match('#^/user/get_accreditation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_get_user_accreditation')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\UserController::getAccreditationAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/group/get_')) {
            // wellnet_test_get_group_members
            if (0 === strpos($pathinfo, '/group/get_members') && preg_match('#^/group/get_members/(?P<gid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_get_group_members')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\GroupController::getMembersAction',));
            }

            // wellnet_test_get_group_services
            if (0 === strpos($pathinfo, '/group/get_services') && preg_match('#^/group/get_services/(?P<gid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_get_group_services')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\GroupController::getServicesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/comments')) {
            // wellnet_test_list_comments
            if (preg_match('#^/comments/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_list_comments')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\CommentController::indexAction',));
            }

            // wellnet_test_create_comments
            if (0 === strpos($pathinfo, '/comments/create') && preg_match('#^/comments/create/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_create_comments')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\CommentController::createAction',));
            }

            // wellnet_test_get_comments
            if (0 === strpos($pathinfo, '/comments/get') && preg_match('#^/comments/get/(?P<cid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_get_comments')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\CommentController::getAction',));
            }

        }

        if (0 === strpos($pathinfo, '/workshop')) {
            // wellnet_test_get_workshop_attendees
            if (0 === strpos($pathinfo, '/workshop/get_attendees') && preg_match('#^/workshop/get_attendees/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_get_workshop_attendees')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\WorkshopController::getAttendeesAction',));
            }

            // wellnet_test_create_attendee_node
            if ($pathinfo === '/workshop/create_attendee') {
                return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\WorkshopController::createAttendeeAction',  '_route' => 'wellnet_test_create_attendee_node',);
            }

        }

        if (0 === strpos($pathinfo, '/contributions')) {
            // wellnet_test_contributions_publish
            if (0 === strpos($pathinfo, '/contributions/publish') && preg_match('#^/contributions/publish/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_contributions_publish')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ContributionController::publishAction',));
            }

            if (0 === strpos($pathinfo, '/contributions/g')) {
                // wellnet_test_contributions_get_themes
                if ($pathinfo === '/contributions/get_themes') {
                    return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ContributionController::getThemesAction',  '_route' => 'wellnet_test_contributions_get_themes',);
                }

                // wellnet_test_contributions_grant_points
                if (0 === strpos($pathinfo, '/contributions/grant_points') && preg_match('#^/contributions/grant_points/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_contributions_grant_points')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ContributionController::grantPointsAction',));
                }

            }

            // wellnet_test_contributions_remove_points
            if (0 === strpos($pathinfo, '/contributions/remove_points') && preg_match('#^/contributions/remove_points/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_contributions_remove_points')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ContributionController::removePointsAction',));
            }

            // wellnet_test_contributions_list_medias
            if ($pathinfo === '/contributions/list_medias') {
                return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ContributionController::listMediasAction',  '_route' => 'wellnet_test_contributions_list_medias',);
            }

            if (0 === strpos($pathinfo, '/contributions/get_')) {
                if (0 === strpos($pathinfo, '/contributions/get_media')) {
                    // wellnet_test_contributions_get_media
                    if (preg_match('#^/contributions/get_media/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_contributions_get_media')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ContributionController::getMediaAction',));
                    }

                    // wellnet_test_contributions_get_media_file
                    if (0 === strpos($pathinfo, '/contributions/get_media_file') && preg_match('#^/contributions/get_media_file/(?P<fid>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_contributions_get_media_file')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ContributionController::getMediaFileAction',));
                    }

                }

                // wellnet_test_contributions_get_related
                if (0 === strpos($pathinfo, '/contributions/get_related') && preg_match('#^/contributions/get_related/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_contributions_get_related')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ContributionController::getRelatedAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/webform')) {
            // wellnet_test_list_webform
            if ($pathinfo === '/webform') {
                return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\WebformController::indexWebformAction',  '_route' => 'wellnet_test_list_webform',);
            }

            // wellnet_test_get_webform
            if (0 === strpos($pathinfo, '/webform/get') && preg_match('#^/webform/get/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_get_webform')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\WebformController::getWebformAction',));
            }

        }

        // wellnet_test_webform_submission
        if (0 === strpos($pathinfo, '/submission') && preg_match('#^/submission/(?P<nid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wellnet_test_webform_submission')), array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\WebformController::getSubmissionAction',));
        }

        // wellnet_test_3_legged
        if ($pathinfo === '/3_legged') {
            return array (  '_controller' => 'Wellnet\\Bundle\\TestBundle\\Controller\\ThreeLeggedController::indexAction',  '_route' => 'wellnet_test_3_legged',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
