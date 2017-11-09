<?php

/* themes/custom/basis/templates/block/block--divulgacion.html.twig */
class __TwigTemplate_8592c19b92ed11a2087f513541eed2152bae6fe1cfd4c2b78152771628560c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"container\">
<div class=\"section-title text-center\">
   <h2 class=\"heading\">Divulgación</h2>
</div>

    <p>La Unidad de Divulgación y Vinculación del CCM tiene por objetivo acercar las matemáticas a
        personas fuera de nuestro centro de investigación. Para lograr esto su personal académico desarrolla y participa en
        distintos proyectos de divulgación de las matemáticas, desde actividades cuya finalidad sea compartir con público
        general algún tema de matemáticas básicas desde un punto de vista lúdico, hasta el establecimiento de vínculos con
        otras instituciones que se refleje en un beneficio mutuo en el que el CCM ofrece su conocimiento y experiencia de
        sus distintas áreas de investigación.
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/basis/templates/block/block--divulgacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/basis/templates/block/block--divulgacion.html.twig", "/var/www/html/themes/custom/basis/templates/block/block--divulgacion.html.twig");
    }
}
