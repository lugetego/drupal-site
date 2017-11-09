<?php

/* themes/custom/basis/templates/block/block--noticias.html.twig */
class __TwigTemplate_42d32e4b55736d0cdb9b6c4ab1b136567894c390d3dddad6f05ef282c122e478 extends Twig_Template
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
    <div class=\"col-md-12 col-sm-12 col-xs-12 section-title text-center\">
        <h2 class=\"heading text-center\">Unidades de Apoyo</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <a href=\"http://pccm.umich.unam.mx\"><img src=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/img/small-banner-docencia.png\"></a>

            <span class=\"heading text-center\"><h3 class=\"title-unidad\">Unidad de Docencia</h3></span>

        </div>
        <div class=\"col-md-4\">
            <a href=\"http://www.matmor.unam.mx/documentacion/\"><img src=\"";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/img/small-banner-documentacion.png\"></a>
            <span class=\"heading text-center\"><h3 class=\"title-unidad\">Unidad de Documentación</h3></span>

        </div>
        <div class=\"col-md-4\">
            <a href=\"divulgacion\"><img src=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/img/small-banner-divulgacion.png\"></a>
            <span class=\"heading text-center\"><h3 class=\"title-unidad\">Unidad de Divulgación</h3></span>
        </div>
    </div>

</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/basis/templates/block/block--noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  60 => 13,  51 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"col-md-12 col-sm-12 col-xs-12 section-title text-center\">
        <h2 class=\"heading text-center\">Unidades de Apoyo</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <a href=\"http://pccm.umich.unam.mx\"><img src=\"{{ base_path ~ directory }}/img/small-banner-docencia.png\"></a>

            <span class=\"heading text-center\"><h3 class=\"title-unidad\">Unidad de Docencia</h3></span>

        </div>
        <div class=\"col-md-4\">
            <a href=\"http://www.matmor.unam.mx/documentacion/\"><img src=\"{{ base_path ~ directory }}/img/small-banner-documentacion.png\"></a>
            <span class=\"heading text-center\"><h3 class=\"title-unidad\">Unidad de Documentación</h3></span>

        </div>
        <div class=\"col-md-4\">
            <a href=\"divulgacion\"><img src=\"{{ base_path ~ directory }}/img/small-banner-divulgacion.png\"></a>
            <span class=\"heading text-center\"><h3 class=\"title-unidad\">Unidad de Divulgación</h3></span>
        </div>
    </div>

</div><!-- /.container -->
", "themes/custom/basis/templates/block/block--noticias.html.twig", "/var/www/html/matmor2/themes/custom/basis/templates/block/block--noticias.html.twig");
    }
}
