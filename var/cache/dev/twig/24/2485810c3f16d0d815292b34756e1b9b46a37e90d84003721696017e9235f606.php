<?php

/* MemberBundle:Default:parent.html.twig */
class __TwigTemplate_5a8deb5ecb64f03c8a24be439efe631560ad8aeb418948526fd1d70656e72dd6 extends Twig_Template
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
        $__internal_b29bcd1fd9f8c10d7fc2509b7ef3305e7f692beab1d76ba6ac63aa5956a464bc = $this->env->getExtension("native_profiler");
        $__internal_b29bcd1fd9f8c10d7fc2509b7ef3305e7f692beab1d76ba6ac63aa5956a464bc->enter($__internal_b29bcd1fd9f8c10d7fc2509b7ef3305e7f692beab1d76ba6ac63aa5956a464bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MemberBundle:Default:parent.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/assets/css/dpl-min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/assets/css/bui-min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/assets/css/main-min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>

<div class=\"header\">

    <div class=\"dl-title\">
    </div>

    <div class=\"dl-log\">欢迎您，<span class=\"dl-log-user\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["login_admin"]) ? $context["login_admin"] : $this->getContext($context, "login_admin")), "html", null, true);
        echo "</span><a href=\"";
        echo $this->env->getExtension('routing')->getPath("member_logout");
        echo "\" title=\"退出系统\" class=\"dl-log-quit\">[退出]</a>
    </div>
</div>
<div class=\"content\">
    <div class=\"dl-main-nav\">
        <div class=\"dl-inform\"><div class=\"dl-inform-title\"><s class=\"dl-inform-icon dl-up\"></s></div></div>
        <ul id=\"J_Nav\"  class=\"nav-list ks-clear\">
            <li class=\"nav-item dl-selected\"><div class=\"nav-item-inner nav-home\">系统管理</div></li>\t\t<li class=\"nav-item dl-selected\"></li>

        </ul>
    </div>
    <ul id=\"J_NavContent\" class=\"dl-tab-conten\">

    </ul>
</div>
<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/assets/js/jquery-1.8.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/assets/js/bui-min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/assets/js/common/main-min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("static/member/assets/js/config-min.js"), "html", null, true);
        echo "\"></script>
<script>
    BUI.use('common/main',function(){
        var config = [{id:'1',menu:[{text:'系统管理',items:[{id:'1',text:'用户管理',href:'";
        // line 39
        echo $this->env->getExtension('routing')->getPath("member_list");
        echo "'}]}]}];
        new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>
</body>
</html>";
        
        $__internal_b29bcd1fd9f8c10d7fc2509b7ef3305e7f692beab1d76ba6ac63aa5956a464bc->leave($__internal_b29bcd1fd9f8c10d7fc2509b7ef3305e7f692beab1d76ba6ac63aa5956a464bc_prof);

    }

    public function getTemplateName()
    {
        return "MemberBundle:Default:parent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 39,  82 => 36,  78 => 35,  74 => 34,  70 => 33,  50 => 18,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE HTML>*/
/* <html>*/
/* <head>*/
/*     <title>后台管理系统</title>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     <link href="{{ asset('static/member/assets/css/dpl-min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('static/member/assets/css/bui-min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('static/member/assets/css/main-min.css') }}" rel="stylesheet" type="text/css" />*/
/* </head>*/
/* <body>*/
/* */
/* <div class="header">*/
/* */
/*     <div class="dl-title">*/
/*     </div>*/
/* */
/*     <div class="dl-log">欢迎您，<span class="dl-log-user">{{ login_admin }}</span><a href="{{ path('member_logout') }}" title="退出系统" class="dl-log-quit">[退出]</a>*/
/*     </div>*/
/* </div>*/
/* <div class="content">*/
/*     <div class="dl-main-nav">*/
/*         <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>*/
/*         <ul id="J_Nav"  class="nav-list ks-clear">*/
/*             <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">系统管理</div></li>		<li class="nav-item dl-selected"></li>*/
/* */
/*         </ul>*/
/*     </div>*/
/*     <ul id="J_NavContent" class="dl-tab-conten">*/
/* */
/*     </ul>*/
/* </div>*/
/* <script type="text/javascript" src="{{ asset('static/member/assets/js/jquery-1.8.1.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('static/member/assets/js/bui-min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('static/member/assets/js/common/main-min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('static/member/assets/js/config-min.js') }}"></script>*/
/* <script>*/
/*     BUI.use('common/main',function(){*/
/*         var config = [{id:'1',menu:[{text:'系统管理',items:[{id:'1',text:'用户管理',href:'{{ path('member_list') }}'}]}]}];*/
/*         new PageUtil.MainPage({*/
/*             modulesConfig : config*/
/*         });*/
/*     });*/
/* </script>*/
/* </body>*/
/* </html>*/
