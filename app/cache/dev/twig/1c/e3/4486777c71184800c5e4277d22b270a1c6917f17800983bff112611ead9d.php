<?php

/* WellnetTestBundle:Default:help.html.twig */
class __TwigTemplate_1ce34486777c71184800c5e4277d22b270a1c6917f17800983bff112611ead9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-header\">
        <h1>Help</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"hidden-print affix\" role=\"complementary\" style=\"width: 263px;\">
                <ul class=\"nav bs-sidenav\" style=\"background-color: #F7F5FA;\">
                    <li>
                        <a href=\"#struttura\">Struttura</a>
                    </li>
                    <li>
                        <a href=\"#configurazione\">Configurazione</a>
                    </li>
                    <li>
                        <a href=\"#2legged\">OAuth 2-legged</a>
                    </li>
                    <li>
                        <a href=\"#3legged\">OAuth 3-legged</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class=\"col-md-9\">

            <h3 id=\"struttura\">Struttura</h3>

            <p>Il client rest per le API di AreaOperatori è un'applicazione basata sul framework Symfony2. La libreria
                utilizzata per implementare il client HTTP è <a href=\"http://guzzlephp.org\">Guzzle</a>. Le funzionalità
                sono
                separate in tre sezioni distinte: <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("wellnet_test_2legged");
        echo "\">2-legged</a>, <a
                        href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("wellnet_test_3legged");
        echo "\">3-legged</a> e <a
                        href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("wellnet_test_collaudo");
        echo "\">collaudo</a>.
            </p>

            <p>Per ciascuna API è stata definita una rotta nel file <code>Resources/config/routing.yml</code> e il
                relativo
                metodo
                all'interno di un controller. Ad esempio:</p>

            <div class=\"highlight\">
<pre>
<code>
    wellnet_test_get_structure:
        pattern: /structure/node/{type}
        defaults: { _controller: WellnetTestBundle:Structure:getStructure }
</code>
</pre>
            </div>

            <p>richiama il metodo <code>getStructureAction()</code> all'interno della classe
                <code>StructureController</code>. Ciascun metodo istanzia il client HTTP ed effettua la richiesta
                all'endpoint delle API:</p>

            <div class=\"highlight\">
<pre>
<code>
    public function getStructureAction(Request \$request, \$type) {
        \$client = \$this->getClient(\$request);

        \$request = \$client->post('/api/1.0/structure/get_structure', NULL, array('type' => \$type));
        \$data = \$request->send();

        return \$this->render('WellnetTestBundle:Default:response.html.twig', array('data' => \$data));
    }
</code>
</pre>
            </div>

            <p>Alcuni metodi richiedono il passaggio di parametri, che possono essere componenti della URL, definiti
                nella
                query string oppure contenuti nel post della richiesta; vanno definiti come descritto in seguito,
                rispettivamente:</p>

            <div class=\"highlight\">
<pre>
<code>
    \$request = \$client->post(\"/en/api/1.0/structure/change_state/{\$nid}/{\$state}\");
    \$data = \$request->send();
</code>
</pre>
            </div>

            <div class=\"highlight\">
<pre>
<code>
    \$request = \$client->get('/en/api/1.0/comment');
    \$query = \$request->getQuery();
    \$query->set('parameters', array('nid' => \$nid));
    \$data = \$request->send();
</code>
</pre>
            </div>

            <div class=\"highlight\">
<pre>
<code>
    \$request = \$client->post('/en/api/1.0/node', NULL, array(
        'node' => array(
            'type' => 'poi',
            'title' => 'POI di test',
            [...]
        )
    ));
    \$data = \$request->send();
</code>
</pre>
            </div>

            <p>Se l'applicazione viene spostata in un'altra cartella potrebbe essere necessario ricostruire la cache, questo può essere fatto da riga comando in questo modo:</p>

            <div class=\"highlight\">
<pre>
<code>
    \$> php app/console cache:clear
</code>
</pre>
            </div>

            <h3 id=\"configurazione\">Configurazione</h3>

            <p>L'applicazione deve essere configurata prima di poter essere utilizzata. Il file di configurazione è
                <code>app/config/parameters.yml</code>.
            </p>

            <h3 id=\"2legged\">OAuth 2-legged</h3>

            <p>L'autenticazione OAuth a due passaggi prevede la condivisione di una chiave e di un segreto tra il client e il server, tutte le chiamate vengono eseguite con la stessa utenza e non è prevista nessuna interazione con l'utente. Le configurazioni necessarie sono <code>server_url</code>, <code>consumer_key</code> e <code>consumer_secret</code>. Il client viene costruito così:</p>

            <div class=\"highlight\">
<pre>
<code>
    \$client = new Client(\$this->container->getParameter('server_url'));

    \$oauth = new OauthPlugin(array(
        'consumer_key' => \$this->container->getParameter('consumer_key'),
        'consumer_secret' => \$this->container->getParameter('consumer_secret'),
    ));
    \$client->addSubscriber(\$oauth);
</code>
</pre>
            </div>

            <h3 id=\"3legged\">OAuth 3-legged</h3>

            <p>L'autenticazione OAuth a tre passaggi prevede la condivisione di una chiave e di un segreto tra il client e il server, tuttavia alla prima chiamata l'utente deve essere portato sul sito, alla pagina di login, per autorizzare il client ad agire per suo conto. Un'implementazione di riferimento è presente all'interno della classe <code>ThreeLeggedController</code>. Le configurazioni necessarie sono <code>server_url</code>, <code>consumer_key_3legged</code> e <code>consumer_secret_3legged</code>, <code>request_token_uri</code>, <code>authorize_uri</code>, <code>access_token_uri</code> e <code>resource_uri</code>.</p>

            <p style=\"text-align:center; margin-top: 40px;\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wellnettest/images/ThreeLeggedOAuthDance.gif"), "html", null, true);
        echo "\" /></p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WellnetTestBundle:Default:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 152,  72 => 37,  68 => 36,  64 => 35,  31 => 4,  28 => 3,);
    }
}
