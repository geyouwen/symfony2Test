<?php

/* MemberBundle:Member:add.html.twig */
class __TwigTemplate_c868a2871622b1a8a25ab21a8039b03125d268fd39f6a24d53e7097cf08ec1b1 extends Twig_Template
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
        $__internal_6ff667ef3dc9a1d44b0c4a4de847004d91475605c90bbd2903e4dbc9c2b6571c = $this->env->getExtension("native_profiler");
        $__internal_6ff667ef3dc9a1d44b0c4a4de847004d91475605c90bbd2903e4dbc9c2b6571c->enter($__internal_6ff667ef3dc9a1d44b0c4a4de847004d91475605c90bbd2903e4dbc9c2b6571c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MemberBundle:Member:add.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("member_add");
        echo "\" method=\"post\" class=\"definewidth m20\">
    <table class=\"table table-bordered table-hover definewidth m10\">
        <tr>
            <td width=\"10%\" class=\"tableleft\">用户名</td>
            <td><input type=\"text\" name=\"username\"/></td>
        </tr>
        <tr>
            <td class=\"tableleft\">密码</td>
            <td><input type=\"password\" name=\"password\"/></td>
        </tr>
        <tr>
            <td class=\"tableleft\">手机</td>
            <td><input type=\"text\" name=\"mobile\"/></td>
        </tr><tr>
            <td class=\"tableleft\">QQ</td>
            <td><input type=\"text\" name=\"qq\"/></td>
        </tr>
        <tr>
            <td class=\"tableleft\">邮箱</td>
            <td><input type=\"text\" name=\"email\"/></td>
        </tr>
        <tr>
            <td class=\"tableleft\"></td>
            <td>
                <button type=\"submit\" class=\"btn btn-primary\" type=\"button\">保存</button> &nbsp;&nbsp;<button type=\"button\" class=\"btn btn-success\" name=\"backid\" id=\"backid\">返回列表</button>
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
        // line 72
        echo $this->env->getExtension('routing')->getPath("member_list");
        echo "\";
        });

    });
</script>";
        
        $__internal_6ff667ef3dc9a1d44b0c4a4de847004d91475605c90bbd2903e4dbc9c2b6571c->leave($__internal_6ff667ef3dc9a1d44b0c4a4de847004d91475605c90bbd2903e4dbc9c2b6571c_prof);

    }

    public function getTemplateName()
    {
        return "MemberBundle:Member:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 72,  85 => 38,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
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
/* <form action="{{ path('member_add') }}" method="post" class="definewidth m20">*/
/*     <table class="table table-bordered table-hover definewidth m10">*/
/*         <tr>*/
/*             <td width="10%" class="tableleft">用户名</td>*/
/*             <td><input type="text" name="username"/></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="tableleft">密码</td>*/
/*             <td><input type="password" name="password"/></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="tableleft">手机</td>*/
/*             <td><input type="text" name="mobile"/></td>*/
/*         </tr><tr>*/
/*             <td class="tableleft">QQ</td>*/
/*             <td><input type="text" name="qq"/></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="tableleft">邮箱</td>*/
/*             <td><input type="text" name="email"/></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="tableleft"></td>*/
/*             <td>*/
/*                 <button type="submit" class="btn btn-primary" type="button">保存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>*/
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
