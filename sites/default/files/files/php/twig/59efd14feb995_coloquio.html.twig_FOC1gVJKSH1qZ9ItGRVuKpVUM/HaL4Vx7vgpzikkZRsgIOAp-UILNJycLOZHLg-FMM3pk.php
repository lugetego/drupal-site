<?php

/* modules/custom/coloquio/templates/coloquio.html.twig */
class __TwigTemplate_ebb64f5f3b53314b41262d0d1b62362f54e082389fd15a24176d39c98658b125 extends Twig_Template
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
        $tags = array("for" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
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
        echo "
<div class=\"row\" style=\"background: #e6e6e6; padding-left: 10px; padding-right: 10px\">
<h3></h3>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["seminarios"] ?? null), "evento", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 5
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["evento"], "seminario", array()), "html", null, true));
            echo "<br>
    <em>";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["evento"], "titulo", array()), "html", null, true));
            echo "</em><br>
    <strong>";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["evento"], "ponente", array()), "html", null, true));
            echo "</strong> - <em>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["evento"], "origen", array()), "html", null, true));
            echo "</em>
";
            // line 11
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["evento"], "fecha", array()), "html", null, true));
            echo " <br>
    ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["evento"], "lugar", array()), "html", null, true));
            echo " <br>
    ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["evento"], "hora", array()), "html", null, true));
            echo "
    <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/coloquio/templates/coloquio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  76 => 13,  72 => 12,  67 => 11,  61 => 7,  57 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"row\" style=\"background: #e6e6e6; padding-left: 10px; padding-right: 10px\">
<h3></h3>
{% for evento in seminarios.evento %}
    {{ evento.seminario }}<br>
    <em>{{ evento.titulo }}</em><br>
    <strong>{{ evento.ponente }}</strong> - <em>{{ evento.origen }}</em>
{#    {% if evento.resumen %}
        <p>{{ evento.resumen }}</p>
    {% endif %}#}
    {{ evento.fecha }} <br>
    {{ evento.lugar }} <br>
    {{ evento.hora }}
    <hr>
{% endfor %}
</div>
{#

    <div class=\"row\">
        <div class=\"col-md-12\">
            {{ coloquio.evento.seminario }}
            <h4>{{ coloquio.evento.titulo }}</h4>
            <strong>{{ coloquio.evento.ponente }}</strong> - <em>{{ coloquio.evento.origen }}</em> <br>
            {% if coloquio.evento.resumen %}
                <div class=\"well-sm panel-primary\">
                    {{ coloquio.evento.resumen }}
                </div>
            {% endif %}
            {{ coloquio.evento.fecha }} <br>
            {{ coloquio.evento.lugar }} <br>
            {{ coloquio.evento.hora }}
        </div>
    </div>
    <div class=\"page-header\"></div>

#}
", "modules/custom/coloquio/templates/coloquio.html.twig", "/var/www/html/matmor2/modules/custom/coloquio/templates/coloquio.html.twig");
    }
}
