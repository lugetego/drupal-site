<?php

/* themes/custom/basis/templates/block/block--footer-2.html.twig */
class __TwigTemplate_d14800be175060f625efdb87cfda92ac9cb1431739eaa9b72fe7c41922f1e2f5 extends Twig_Template
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
        echo "<div class=\"container-fluid footer\">
    <div class=\"container footer-content\">
        <h1></h1>
        <span class=\"text-center\">
            <h3><small>Centro de Ciencias Matemáticas UNAM Campus Morelia</small></h3>
        </span>
        <div class=\"text-center\">
            <img alt=\"footer\" src=\"/matmor/themes/custom/basis/img/logos-footer-unam.png\" class=\"logo-footer\">
            <img alt=\"footer\" src=\"/matmor/themes/custom/basis/img/logos-footer-unam2.png\" class=\"logo-footer\">
            <img alt=\"footer\" src=\"/matmor/themes/custom/basis/img/logos-footer-ccm.png\" class=\"logo-footer\">
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/basis/templates/block/block--footer-2.html.twig";
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
        return new Twig_Source("<div class=\"container-fluid footer\">
    <div class=\"container footer-content\">
        <h1></h1>
        <span class=\"text-center\">
            <h3><small>Centro de Ciencias Matemáticas UNAM Campus Morelia</small></h3>
        </span>
        <div class=\"text-center\">
            <img alt=\"footer\" src=\"/matmor/themes/custom/basis/img/logos-footer-unam.png\" class=\"logo-footer\">
            <img alt=\"footer\" src=\"/matmor/themes/custom/basis/img/logos-footer-unam2.png\" class=\"logo-footer\">
            <img alt=\"footer\" src=\"/matmor/themes/custom/basis/img/logos-footer-ccm.png\" class=\"logo-footer\">
        </div>
    </div>
</div>", "themes/custom/basis/templates/block/block--footer-2.html.twig", "/var/www/html/matmor2/themes/custom/basis/templates/block/block--footer-2.html.twig");
    }
}
