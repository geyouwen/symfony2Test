<?php

/* MemberBundle:Default:index.html.twig */
class __TwigTemplate_b02e834bb190789f6204ca0318eb3f4f623f3f6e54af629f0c032a4a3682062f extends Twig_Template
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
        $__internal_753725f652456bd01b3fdfaaefec4dcf4646e5b1cef3d0a587763b50dd58d669 = $this->env->getExtension("native_profiler");
        $__internal_753725f652456bd01b3fdfaaefec4dcf4646e5b1cef3d0a587763b50dd58d669->enter($__internal_753725f652456bd01b3fdfaaefec4dcf4646e5b1cef3d0a587763b50dd58d669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MemberBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>登录界面</title>

    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/css/loginMy.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <style>
        html,body{width:100%;}
    </style>

</head>
<body>

<div class=\"main\">

    <div class=\"center\">
        <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("member_login");
        echo "\" id=\"formOne\" method=\"post\"onsubmit=\"return submitB()\" >
            <i class=\"fa fa-user Cone\">  | </i>
            <input type=\"text\" name=\"mobile\" id=\"mobile\" placeholder=\"手机号\"onblur=\"checkUser()\"/>
            <span id=\"user_pass\"></span>
            <br/>
            <i class=\"fa fa-key Cone\">  | </i>
            <input type=\"password\" name=\"password\" id=\"pwd\" placeholder=\"密码\"onblur=\"checkUser1()\"/>
            <span id=\"pwd_pass\"></span>
            <input type=\"submit\" value=\"登录\" id=\"submit\" name=\"submit\" style=\"padding-right: 60px;\">
            13955198874 123456
        </form>
    </div>

</div>

<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/js/loginMy.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_753725f652456bd01b3fdfaaefec4dcf4646e5b1cef3d0a587763b50dd58d669->leave($__internal_753725f652456bd01b3fdfaaefec4dcf4646e5b1cef3d0a587763b50dd58d669_prof);

    }

    public function getTemplateName()
    {
        return "MemberBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 35,  49 => 20,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     <title>登录界面</title>*/
/* */
/*     <link href="{{ asset('static/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('static/css/loginMy.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/*     <style>*/
/*         html,body{width:100%;}*/
/*     </style>*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <div class="main">*/
/* */
/*     <div class="center">*/
/*         <form action="{{ path('member_login') }}" id="formOne" method="post"onsubmit="return submitB()" >*/
/*             <i class="fa fa-user Cone">  | </i>*/
/*             <input type="text" name="mobile" id="mobile" placeholder="手机号"onblur="checkUser()"/>*/
/*             <span id="user_pass"></span>*/
/*             <br/>*/
/*             <i class="fa fa-key Cone">  | </i>*/
/*             <input type="password" name="password" id="pwd" placeholder="密码"onblur="checkUser1()"/>*/
/*             <span id="pwd_pass"></span>*/
/*             <input type="submit" value="登录" id="submit" name="submit" style="padding-right: 60px;">*/
/*             13955198874 123456*/
/*         </form>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <script type="text/javascript" src="{{ asset('static/js/loginMy.js') }}"></script>*/
/* </body>*/
/* </html>*/
