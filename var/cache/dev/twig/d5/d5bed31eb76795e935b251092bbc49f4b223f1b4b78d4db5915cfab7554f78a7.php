<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_33ae47670bebee16f6d455c85980f7f6b3c7cd7b26f4a58f1f891aff2d5c8572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b0f11af22535e4e7694f874248e3af3fe8b10ab41b27c99cee556a00772104 = $this->env->getExtension("native_profiler");
        $__internal_13b0f11af22535e4e7694f874248e3af3fe8b10ab41b27c99cee556a00772104->enter($__internal_13b0f11af22535e4e7694f874248e3af3fe8b10ab41b27c99cee556a00772104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b0f11af22535e4e7694f874248e3af3fe8b10ab41b27c99cee556a00772104->leave($__internal_13b0f11af22535e4e7694f874248e3af3fe8b10ab41b27c99cee556a00772104_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f07995a652f088f8d974cbde0dd7aaf265efc3c497da9edf00721da524aa538 = $this->env->getExtension("native_profiler");
        $__internal_6f07995a652f088f8d974cbde0dd7aaf265efc3c497da9edf00721da524aa538->enter($__internal_6f07995a652f088f8d974cbde0dd7aaf265efc3c497da9edf00721da524aa538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6f07995a652f088f8d974cbde0dd7aaf265efc3c497da9edf00721da524aa538->leave($__internal_6f07995a652f088f8d974cbde0dd7aaf265efc3c497da9edf00721da524aa538_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad9d02b3987c00a0ea46b16ff5da5e4e7220313c118861834862694c7c10fcb7 = $this->env->getExtension("native_profiler");
        $__internal_ad9d02b3987c00a0ea46b16ff5da5e4e7220313c118861834862694c7c10fcb7->enter($__internal_ad9d02b3987c00a0ea46b16ff5da5e4e7220313c118861834862694c7c10fcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ad9d02b3987c00a0ea46b16ff5da5e4e7220313c118861834862694c7c10fcb7->leave($__internal_ad9d02b3987c00a0ea46b16ff5da5e4e7220313c118861834862694c7c10fcb7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_88d40fcc4c715a564339289efc8ace30d93b42f816daf4032f53c619f8647b7f = $this->env->getExtension("native_profiler");
        $__internal_88d40fcc4c715a564339289efc8ace30d93b42f816daf4032f53c619f8647b7f->enter($__internal_88d40fcc4c715a564339289efc8ace30d93b42f816daf4032f53c619f8647b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_88d40fcc4c715a564339289efc8ace30d93b42f816daf4032f53c619f8647b7f->leave($__internal_88d40fcc4c715a564339289efc8ace30d93b42f816daf4032f53c619f8647b7f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
