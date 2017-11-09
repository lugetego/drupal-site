<?php

/* themes/custom/basis/templates/block/block--enlacesinstitucionales-3.html.twig */
class __TwigTemplate_520803d9dd0e0876e1555c837dce289d4470fb17cd7edfc9460d7193dcd4cb02 extends Twig_Template
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
        echo "<div class=\"container-fluid\" style=\"padding-top: 80px;\">
    <div class=\"row\">
        <div class=\"col-md-4 Titulos-noticias\">
            <img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/img/labunam.png\">

        </div>
        <div class=\"col-md-4 Titulos-noticias\">
            <img src=\"";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/img/numeralia-unam.jpg\">

        </div>
        <div class=\"col-md-4 Titulos-noticias\">
            <img src=\"";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/img/pag-rector.jpg\">

        </div>
    </div>
</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/basis/templates/block/block--enlacesinstitucionales-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  55 => 8,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid\" style=\"padding-top: 80px;\">
    <div class=\"row\">
        <div class=\"col-md-4 Titulos-noticias\">
            <img src=\"{{ base_path ~ directory }}/img/labunam.png\">

        </div>
        <div class=\"col-md-4 Titulos-noticias\">
            <img src=\"{{ base_path ~ directory }}/img/numeralia-unam.jpg\">

        </div>
        <div class=\"col-md-4 Titulos-noticias\">
            <img src=\"{{ base_path ~ directory }}/img/pag-rector.jpg\">

        </div>
    </div>
</div><!-- /.container -->
", "themes/custom/basis/templates/block/block--enlacesinstitucionales-3.html.twig", "/var/www/html/matmor2/themes/custom/basis/templates/block/block--enlacesinstitucionales-3.html.twig");
    }
}
