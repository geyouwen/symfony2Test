<?php

/* MemberBundle:Member:index.html.twig */
class __TwigTemplate_96fd838dbd82de9c0cd5d9ffe6684047866cca2f4f804e77db4d08108a7d38a7 extends Twig_Template
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
        $__internal_213a40bea67e6ff4bfe82103453482e72d13de3889694a1147534bc51ae771e5 = $this->env->getExtension("native_profiler");
        $__internal_213a40bea67e6ff4bfe82103453482e72d13de3889694a1147534bc51ae771e5->enter($__internal_213a40bea67e6ff4bfe82103453482e72d13de3889694a1147534bc51ae771e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MemberBundle:Member:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/Css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/Css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/Css/style.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/Js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/Js/jquery.sorted.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/Js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/Js/ckform.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/Js/common.js"), "html", null, true);
        echo "\"></script>

    <style type=\"text/css\">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<form class=\"form-inline definewidth m20\" action=\"index.html\" method=\"get\">
 <button type=\"button\" class=\"btn btn-success\" id=\"addnew\">新增用户</button>
</form>
<table class=\"table table-bordered table-hover definewidth m10\" >
    <thead>
    <tr>
        <th>id</th>
        <th>姓名</th>
        <th>手机</th>
        <th>Email</th>
        <th>qq</th>
        <th>操作</th>
    </tr>
    </thead>
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "\t     <tr>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mobile", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "qq", array()), "html", null, true);
            echo "</td>
            <td>
                  <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">编辑</a>
                  
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</table>
\t\t</body>
\t\t</html>

<script>
    \$(function () {
        
\t\t\$('#addnew').click(function(){

\t\t\t\twindow.location.href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("member_add");
        echo "\";
\t\t });


    });

\tfunction del(id)
\t{
\t\t
\t\t
\t\tif(confirm(\"确定要删除吗？\"))
\t\t{
\t\t
\t\t\tvar url = \"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("member_list");
        echo "\";
\t\t\t
\t\t\twindow.location.href=url;\t\t
\t\t
\t\t}
\t
\t
\t
\t
\t}
</script>";
        
        $__internal_213a40bea67e6ff4bfe82103453482e72d13de3889694a1147534bc51ae771e5->leave($__internal_213a40bea67e6ff4bfe82103453482e72d13de3889694a1147534bc51ae771e5_prof);

    }

    public function getTemplateName()
    {
        return "MemberBundle:Member:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 85,  147 => 72,  136 => 63,  125 => 58,  120 => 56,  116 => 55,  112 => 54,  108 => 53,  104 => 52,  101 => 51,  97 => 50,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title></title>*/
/*     <meta charset="UTF-8">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('static/member/Css/bootstrap.css') }}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('static/member/Css/bootstrap-responsive.css') }}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('static/member/Css/style.css') }}" />*/
/*     <script type="text/javascript" src="{{ asset('static/member/Js/jquery.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('static/member/Js/jquery.sorted.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('static/member/Js/bootstrap.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('static/member/Js/ckform.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('static/member/Js/common.js') }}"></script>*/
/* */
/*     <style type="text/css">*/
/*         body {*/
/*             padding-bottom: 40px;*/
/*         }*/
/*         .sidebar-nav {*/
/*             padding: 9px 0;*/
/*         }*/
/* */
/*         @media (max-width: 980px) {*/
/*             /* Enable use of floated navbar text *//* */
/*             .navbar-text.pull-right {*/
/*                 float: none;*/
/*                 padding-left: 5px;*/
/*                 padding-right: 5px;*/
/*             }*/
/*         }*/
/* */
/* */
/*     </style>*/
/* </head>*/
/* <body>*/
/* <form class="form-inline definewidth m20" action="index.html" method="get">*/
/*  <button type="button" class="btn btn-success" id="addnew">新增用户</button>*/
/* </form>*/
/* <table class="table table-bordered table-hover definewidth m10" >*/
/*     <thead>*/
/*     <tr>*/
/*         <th>id</th>*/
/*         <th>姓名</th>*/
/*         <th>手机</th>*/
/*         <th>Email</th>*/
/*         <th>qq</th>*/
/*         <th>操作</th>*/
/*     </tr>*/
/*     </thead>*/
/*     {% for item in data %}*/
/* 	     <tr>*/
/*             <td>{{ item.id }}</td>*/
/*             <td>{{ item.username }}</td>*/
/*             <td>{{ item.mobile }}</td>*/
/*             <td>{{ item.email }}</td>*/
/*             <td>{{ item.qq }}</td>*/
/*             <td>*/
/*                   <a href="{{ path('member_edit', { 'id': item.id }) }}">编辑</a>*/
/*                   */
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* 		</body>*/
/* 		</html>*/
/* */
/* <script>*/
/*     $(function () {*/
/*         */
/* 		$('#addnew').click(function(){*/
/* */
/* 				window.location.href="{{ path('member_add') }}";*/
/* 		 });*/
/* */
/* */
/*     });*/
/* */
/* 	function del(id)*/
/* 	{*/
/* 		*/
/* 		*/
/* 		if(confirm("确定要删除吗？"))*/
/* 		{*/
/* 		*/
/* 			var url = "{{ path('member_list') }}";*/
/* 			*/
/* 			window.location.href=url;		*/
/* 		*/
/* 		}*/
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* 	}*/
/* </script>*/
