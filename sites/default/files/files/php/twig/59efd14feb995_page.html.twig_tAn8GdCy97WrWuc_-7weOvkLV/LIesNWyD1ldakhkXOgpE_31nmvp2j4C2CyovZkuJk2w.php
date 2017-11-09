<?php

/* themes/custom/basis/templates/page.html.twig */
class __TwigTemplate_3170290d14268d790499be1075aa6eb7033f5503bc3fa3659eb333acf69422c0 extends Twig_Template
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
        $tags = array("if" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        echo "<div class=\"top_bar\">
    <div class=\"container\">
        <a class=\"btn-circle btn-social-icon btn-sm btn-twitter social\">
            <span class=\"fa fa-twitter\"></span>
        </a>
        <a class=\"btn-circle btn-social-icon btn-sm btn-facebook social\">
            <span class=\"fa fa-facebook\"></span>
        </a>
        <img src=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/img/icons/social-search.svg\" class=\"social\">
        <img src=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/img/icons/social-mail.svg\" class=\"social\">
    </div>

</div>

<div id=\"page\" >

    ";
        // line 17
        if ($this->getAttribute(($context["page"] ?? null), "headline", array())) {
            // line 18
            echo "        <section id=\"headline\">
            <div class=\"container-fluid\">
                <nav class=\"navbar\">
                    ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "headline", array()), "html", null, true));
            echo "
                </nav>
            </div>
        </section>
    ";
        }
        // line 26
        echo "
    <header id=\"header\" >
        <div class=\"container-fluid\">
            ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
        </div>
    </header>

    <section id=\"main\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"content\" class=\"col-md-9 col-sm-9 col-xs-12\">

                    ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "

                </div>
                ";
        // line 41
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", array())) {
            // line 42
            echo "                    <aside id=\"sidebar\" class=\"sidebar col-md-3 col-sm-3 col-xs-12\">
                        ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", array()), "html", null, true));
            echo "
                    </aside>
                ";
        }
        // line 46
        echo "            </div>
        </div>
    </section>

    <header id=\"fluid\" >
        <div class=\"container-fluid\">
            ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fluid", array()), "html", null, true));
        echo "
        </div>
    </header>

    ";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 57
            echo "        <footer id=\"footer\">
            <div class=\"container-fluid\">
                ";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
            </div>
        </footer>
    ";
        }
        // line 63
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/basis/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 63,  137 => 59,  133 => 57,  131 => 56,  124 => 52,  116 => 46,  110 => 43,  107 => 42,  105 => 41,  99 => 38,  87 => 29,  82 => 26,  74 => 21,  69 => 18,  67 => 17,  57 => 10,  53 => 9,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"top_bar\">
    <div class=\"container\">
        <a class=\"btn-circle btn-social-icon btn-sm btn-twitter social\">
            <span class=\"fa fa-twitter\"></span>
        </a>
        <a class=\"btn-circle btn-social-icon btn-sm btn-facebook social\">
            <span class=\"fa fa-facebook\"></span>
        </a>
        <img src=\"{{ base_path ~ directory }}/img/icons/social-search.svg\" class=\"social\">
        <img src=\"{{ base_path ~ directory }}/img/icons/social-mail.svg\" class=\"social\">
    </div>

</div>

<div id=\"page\" >

    {% if page.headline %}
        <section id=\"headline\">
            <div class=\"container-fluid\">
                <nav class=\"navbar\">
                    {{ page.headline }}
                </nav>
            </div>
        </section>
    {% endif %}

    <header id=\"header\" >
        <div class=\"container-fluid\">
            {{ page.header }}
        </div>
    </header>

    <section id=\"main\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"content\" class=\"col-md-9 col-sm-9 col-xs-12\">

                    {{ page.content }}

                </div>
                {% if page.sidebar %}
                    <aside id=\"sidebar\" class=\"sidebar col-md-3 col-sm-3 col-xs-12\">
                        {{ page.sidebar}}
                    </aside>
                {% endif %}
            </div>
        </div>
    </section>

    <header id=\"fluid\" >
        <div class=\"container-fluid\">
            {{ page.fluid }}
        </div>
    </header>

    {% if page.footer %}
        <footer id=\"footer\">
            <div class=\"container-fluid\">
                {{ page.footer }}
            </div>
        </footer>
    {% endif %}

</div>
", "themes/custom/basis/templates/page.html.twig", "/var/www/html/matmor2/themes/custom/basis/templates/page.html.twig");
    }
}
