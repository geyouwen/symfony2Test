<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7027e1b90f5720df543381284921205efa9c5dbc6b09337a4d7f9b2ba65c049c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8062a25fb73f00e9d46a5026a4f5ecd97307583acf576074ad2a0829b3df274a = $this->env->getExtension("native_profiler");
        $__internal_8062a25fb73f00e9d46a5026a4f5ecd97307583acf576074ad2a0829b3df274a->enter($__internal_8062a25fb73f00e9d46a5026a4f5ecd97307583acf576074ad2a0829b3df274a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8062a25fb73f00e9d46a5026a4f5ecd97307583acf576074ad2a0829b3df274a->leave($__internal_8062a25fb73f00e9d46a5026a4f5ecd97307583acf576074ad2a0829b3df274a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e3e5264ceada04ba7ada97ccde7b64edbfb267010463f098701254645ff870b = $this->env->getExtension("native_profiler");
        $__internal_7e3e5264ceada04ba7ada97ccde7b64edbfb267010463f098701254645ff870b->enter($__internal_7e3e5264ceada04ba7ada97ccde7b64edbfb267010463f098701254645ff870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7e3e5264ceada04ba7ada97ccde7b64edbfb267010463f098701254645ff870b->leave($__internal_7e3e5264ceada04ba7ada97ccde7b64edbfb267010463f098701254645ff870b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c473ce2014123ccb9469b867778a9a2cbf98bf2718af2616bb7d2d1e83ed2472 = $this->env->getExtension("native_profiler");
        $__internal_c473ce2014123ccb9469b867778a9a2cbf98bf2718af2616bb7d2d1e83ed2472->enter($__internal_c473ce2014123ccb9469b867778a9a2cbf98bf2718af2616bb7d2d1e83ed2472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c473ce2014123ccb9469b867778a9a2cbf98bf2718af2616bb7d2d1e83ed2472->leave($__internal_c473ce2014123ccb9469b867778a9a2cbf98bf2718af2616bb7d2d1e83ed2472_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0dd069139a6deaf1f8d003216036c3635a6e2010b48dcda11863824aceefc1d3 = $this->env->getExtension("native_profiler");
        $__internal_0dd069139a6deaf1f8d003216036c3635a6e2010b48dcda11863824aceefc1d3->enter($__internal_0dd069139a6deaf1f8d003216036c3635a6e2010b48dcda11863824aceefc1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0dd069139a6deaf1f8d003216036c3635a6e2010b48dcda11863824aceefc1d3->leave($__internal_0dd069139a6deaf1f8d003216036c3635a6e2010b48dcda11863824aceefc1d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
