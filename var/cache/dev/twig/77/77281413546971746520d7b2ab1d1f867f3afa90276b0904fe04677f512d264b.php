<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_90e354130212654059cd9238f40a6eb546f573a7d680f562b8e8f4ed32de64f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e43cce1deb59eba42325e51adfed662d2eac285d5a3458d5b8b125b7ec59c409 = $this->env->getExtension("native_profiler");
        $__internal_e43cce1deb59eba42325e51adfed662d2eac285d5a3458d5b8b125b7ec59c409->enter($__internal_e43cce1deb59eba42325e51adfed662d2eac285d5a3458d5b8b125b7ec59c409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e43cce1deb59eba42325e51adfed662d2eac285d5a3458d5b8b125b7ec59c409->leave($__internal_e43cce1deb59eba42325e51adfed662d2eac285d5a3458d5b8b125b7ec59c409_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b2863ac20e32f7125ed045840b3cd4ac7640f19310693b63ad2bd730e62b30e = $this->env->getExtension("native_profiler");
        $__internal_3b2863ac20e32f7125ed045840b3cd4ac7640f19310693b63ad2bd730e62b30e->enter($__internal_3b2863ac20e32f7125ed045840b3cd4ac7640f19310693b63ad2bd730e62b30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b2863ac20e32f7125ed045840b3cd4ac7640f19310693b63ad2bd730e62b30e->leave($__internal_3b2863ac20e32f7125ed045840b3cd4ac7640f19310693b63ad2bd730e62b30e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd548d7894d7061b8b5381e08fb555bc939cc755d852f5ccb97f89e10547d826 = $this->env->getExtension("native_profiler");
        $__internal_dd548d7894d7061b8b5381e08fb555bc939cc755d852f5ccb97f89e10547d826->enter($__internal_dd548d7894d7061b8b5381e08fb555bc939cc755d852f5ccb97f89e10547d826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd548d7894d7061b8b5381e08fb555bc939cc755d852f5ccb97f89e10547d826->leave($__internal_dd548d7894d7061b8b5381e08fb555bc939cc755d852f5ccb97f89e10547d826_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5345113824bbc660b08cdbee88242dcb85db8e75211713f8c08d0385b6f35c96 = $this->env->getExtension("native_profiler");
        $__internal_5345113824bbc660b08cdbee88242dcb85db8e75211713f8c08d0385b6f35c96->enter($__internal_5345113824bbc660b08cdbee88242dcb85db8e75211713f8c08d0385b6f35c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5345113824bbc660b08cdbee88242dcb85db8e75211713f8c08d0385b6f35c96->leave($__internal_5345113824bbc660b08cdbee88242dcb85db8e75211713f8c08d0385b6f35c96_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
