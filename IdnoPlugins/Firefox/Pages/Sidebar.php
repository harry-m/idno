<?php

    /**
     * Firefox sidebar
     */

    namespace IdnoPlugins\Firefox\Pages {

        /**
         * Default class to serve Firefox-related account settings
         */
        class Sidebar extends \Idno\Common\Page
        {

            function getContent()
            {
                if (!\Idno\Core\site()->session()->isLoggedIn()) {
                    $this->setResponse(401);
                    $this->forward('/session/login');
                }

                $t = \Idno\Core\site()->template();
                $body = $t->draw('firefox/sidebar');
                $t->__(['title' => 'Sidebar', 'body' => $body, 'hidenav' => true])->drawPage();
            }

        }
    }