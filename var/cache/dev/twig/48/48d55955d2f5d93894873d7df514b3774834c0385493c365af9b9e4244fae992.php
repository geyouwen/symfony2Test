<?php

/* MemberBundle:Member:edit.html.twig */
class __TwigTemplate_957692a66ca6aa46b1f318818ae1d4f140b41ab0eab198f8bc184b6e40b69750 extends Twig_Template
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
        $__internal_34f39f330ae063b733b682a112a6371ef051677cc795c5b28fa1ee7e4fbd259b = $this->env->getExtension("native_profiler");
        $__internal_34f39f330ae063b733b682a112a6371ef051677cc795c5b28fa1ee7e4fbd259b->enter($__internal_34f39f330ae063b733b682a112a6371ef051677cc795c5b28fa1ee7e4fbd259b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MemberBundle:Member:edit.html.twig"));

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
<form action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_edit", array("id" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"definewidth m20\">
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id", array()), "html", null, true);
        echo "\" />
    <table class=\"table table-bordered table-hover definewidth m10\">
        <tr>
            <td width=\"10%\" class=\"tableleft\">用户名</td>
            <td><input type=\"text\" name=\"username\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "username", array()), "html", null, true);
        echo "\"/></td>
        </tr>
        <tr>
            <td class=\"tableleft\">手机</td>
            <td><input type=\"text\" name=\"mobile\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "mobile", array()), "html", null, true);
        echo "\"/></td>
        </tr><tr>
            <td class=\"tableleft\">QQ</td>
            <td><input type=\"text\" name=\"qq\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "qq", array()), "html", null, true);
        echo "\"/></td>
        </tr>
        <tr>
            <td class=\"tableleft\">邮箱</td>
            <td><input type=\"text\" name=\"email\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "email", array()), "html", null, true);
        echo "\"/></td>
        </tr>
        <tr>
            <td class=\"tableleft\"></td>
            <td>
                <button type=\"submit\" class=\"btn btn-primary\" type=\"button\">保存</button>\t\t\t\t &nbsp;&nbsp;<button type=\"button\" class=\"btn btn-success\" name=\"backid\" id=\"backid\">返回列表</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<script>
    \$(function () {
        \$('#backid').click(function(){
            window.location.href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("member_list");
        echo "\";
        });

    });
</script>";
        
        $__internal_34f39f330ae063b733b682a112a6371ef051677cc795c5b28fa1ee7e4fbd259b->leave($__internal_34f39f330ae063b733b682a112a6371ef051677cc795c5b28fa1ee7e4fbd259b_prof);

    }

    public function getTemplateName()
    {
        return "MemberBundle:Member:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 69,  116 => 54,  109 => 50,  103 => 47,  96 => 43,  89 => 39,  85 => 38,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
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
/* */
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
/* <form action="{{ path('member_edit', {'id':member.id}) }}" method="post" class="definewidth m20">*/
/*     <input type="hidden" name="id" value="{{ member.id }}" />*/
/*     <table class="table table-bordered table-hover definewidth m10">*/
/*         <tr>*/
/*             <td width="10%" class="tableleft">用户名</td>*/
/*             <td><input type="text" name="username" value="{{ member.username }}"/></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="tableleft">手机</td>*/
/*             <td><input type="text" name="mobile" value="{{ member.mobile }}"/></td>*/
/*         </tr><tr>*/
/*             <td class="tableleft">QQ</td>*/
/*             <td><input type="text" name="qq" value="{{ member.qq }}"/></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="tableleft">邮箱</td>*/
/*             <td><input type="text" name="email" value="{{ member.email }}"/></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="tableleft"></td>*/
/*             <td>*/
/*                 <button type="submit" class="btn btn-primary" type="button">保存</button>				 &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* </form>*/
/* </body>*/
/* </html>*/
/* <script>*/
/*     $(function () {*/
/*         $('#backid').click(function(){*/
/*             window.location.href="{{ path('member_list') }}";*/
/*         });*/
/* */
/*     });*/
/* </script>*/
