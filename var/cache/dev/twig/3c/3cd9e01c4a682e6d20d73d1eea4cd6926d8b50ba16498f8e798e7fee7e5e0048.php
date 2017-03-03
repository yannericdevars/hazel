<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
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
        $__internal_bec58aa03a6480326a07467999ed3c04b06c0a207b536b03332d70c1bd17b265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec58aa03a6480326a07467999ed3c04b06c0a207b536b03332d70c1bd17b265->enter($__internal_bec58aa03a6480326a07467999ed3c04b06c0a207b536b03332d70c1bd17b265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e6ee3ff64fc6d4f3c4ff3924e570e378e17ec51c391083fe61e59a04168aa723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ee3ff64fc6d4f3c4ff3924e570e378e17ec51c391083fe61e59a04168aa723->enter($__internal_e6ee3ff64fc6d4f3c4ff3924e570e378e17ec51c391083fe61e59a04168aa723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bec58aa03a6480326a07467999ed3c04b06c0a207b536b03332d70c1bd17b265->leave($__internal_bec58aa03a6480326a07467999ed3c04b06c0a207b536b03332d70c1bd17b265_prof);

        
        $__internal_e6ee3ff64fc6d4f3c4ff3924e570e378e17ec51c391083fe61e59a04168aa723->leave($__internal_e6ee3ff64fc6d4f3c4ff3924e570e378e17ec51c391083fe61e59a04168aa723_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_daa32fa11b7757c15fca553f45a5965234dfe11b5f205f305b36ffa498ccafbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa32fa11b7757c15fca553f45a5965234dfe11b5f205f305b36ffa498ccafbe->enter($__internal_daa32fa11b7757c15fca553f45a5965234dfe11b5f205f305b36ffa498ccafbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9b32a1239a7153737829071dcee7fc27b8d870c4b9ed9d1f59087dffa6be0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b32a1239a7153737829071dcee7fc27b8d870c4b9ed9d1f59087dffa6be0a4->enter($__internal_c9b32a1239a7153737829071dcee7fc27b8d870c4b9ed9d1f59087dffa6be0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9b32a1239a7153737829071dcee7fc27b8d870c4b9ed9d1f59087dffa6be0a4->leave($__internal_c9b32a1239a7153737829071dcee7fc27b8d870c4b9ed9d1f59087dffa6be0a4_prof);

        
        $__internal_daa32fa11b7757c15fca553f45a5965234dfe11b5f205f305b36ffa498ccafbe->leave($__internal_daa32fa11b7757c15fca553f45a5965234dfe11b5f205f305b36ffa498ccafbe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38ff57525e31396a68108eecb32cb370b7593f1032ac631aefdb89fa929ac2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ff57525e31396a68108eecb32cb370b7593f1032ac631aefdb89fa929ac2bc->enter($__internal_38ff57525e31396a68108eecb32cb370b7593f1032ac631aefdb89fa929ac2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9c1cd66d5dbde744e562690958ce4307045e7f0e49ffb13c6be39869b721130f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1cd66d5dbde744e562690958ce4307045e7f0e49ffb13c6be39869b721130f->enter($__internal_9c1cd66d5dbde744e562690958ce4307045e7f0e49ffb13c6be39869b721130f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c1cd66d5dbde744e562690958ce4307045e7f0e49ffb13c6be39869b721130f->leave($__internal_9c1cd66d5dbde744e562690958ce4307045e7f0e49ffb13c6be39869b721130f_prof);

        
        $__internal_38ff57525e31396a68108eecb32cb370b7593f1032ac631aefdb89fa929ac2bc->leave($__internal_38ff57525e31396a68108eecb32cb370b7593f1032ac631aefdb89fa929ac2bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95074a43b74dc7663e1cacba0327ad03c48ec391524963a32d598ad0f615c266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95074a43b74dc7663e1cacba0327ad03c48ec391524963a32d598ad0f615c266->enter($__internal_95074a43b74dc7663e1cacba0327ad03c48ec391524963a32d598ad0f615c266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d540ac52a9bdcb48ca005a4350c11ea461c0cd357529010833f5d9888eabea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d540ac52a9bdcb48ca005a4350c11ea461c0cd357529010833f5d9888eabea8->enter($__internal_9d540ac52a9bdcb48ca005a4350c11ea461c0cd357529010833f5d9888eabea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d540ac52a9bdcb48ca005a4350c11ea461c0cd357529010833f5d9888eabea8->leave($__internal_9d540ac52a9bdcb48ca005a4350c11ea461c0cd357529010833f5d9888eabea8_prof);

        
        $__internal_95074a43b74dc7663e1cacba0327ad03c48ec391524963a32d598ad0f615c266->leave($__internal_95074a43b74dc7663e1cacba0327ad03c48ec391524963a32d598ad0f615c266_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ydevars/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
