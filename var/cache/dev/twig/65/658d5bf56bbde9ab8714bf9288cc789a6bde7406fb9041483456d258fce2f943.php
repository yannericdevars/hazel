<?php

/* default/esis.html.twig */
class __TwigTemplate_9467f47e602d61310ce728a48c0da144d99f8feb2fde2fa8244dff3738e850df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/esis.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23aa616da469089e227ef6a9e96380bb14ce55caf1f0b1ee16ad3acc31e00afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23aa616da469089e227ef6a9e96380bb14ce55caf1f0b1ee16ad3acc31e00afc->enter($__internal_23aa616da469089e227ef6a9e96380bb14ce55caf1f0b1ee16ad3acc31e00afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/esis.html.twig"));

        $__internal_c6bcc6b5176a0320d93d9fd3e91502011f0573e0e6782255cd59b538f73863d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bcc6b5176a0320d93d9fd3e91502011f0573e0e6782255cd59b538f73863d6->enter($__internal_c6bcc6b5176a0320d93d9fd3e91502011f0573e0e6782255cd59b538f73863d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/esis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23aa616da469089e227ef6a9e96380bb14ce55caf1f0b1ee16ad3acc31e00afc->leave($__internal_23aa616da469089e227ef6a9e96380bb14ce55caf1f0b1ee16ad3acc31e00afc_prof);

        
        $__internal_c6bcc6b5176a0320d93d9fd3e91502011f0573e0e6782255cd59b538f73863d6->leave($__internal_c6bcc6b5176a0320d93d9fd3e91502011f0573e0e6782255cd59b538f73863d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c230aed4364f806584ba265c40151aa325d9ca83ecb7b85b39ebb8a38a3533a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c230aed4364f806584ba265c40151aa325d9ca83ecb7b85b39ebb8a38a3533a2->enter($__internal_c230aed4364f806584ba265c40151aa325d9ca83ecb7b85b39ebb8a38a3533a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_756678f76ad2ff99790f890d59275fac22553bd6abd84de7c5888c1e7c4e7d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756678f76ad2ff99790f890d59275fac22553bd6abd84de7c5888c1e7c4e7d40->enter($__internal_756678f76ad2ff99790f890d59275fac22553bd6abd84de7c5888c1e7c4e7d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"blue\">
        test 1
    </div>
    <p>&nbsp;</p>
      ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:esi", array("twig" => "default/fichier_exemple.html.twig")));
        echo "
";
        
        $__internal_756678f76ad2ff99790f890d59275fac22553bd6abd84de7c5888c1e7c4e7d40->leave($__internal_756678f76ad2ff99790f890d59275fac22553bd6abd84de7c5888c1e7c4e7d40_prof);

        
        $__internal_c230aed4364f806584ba265c40151aa325d9ca83ecb7b85b39ebb8a38a3533a2->leave($__internal_c230aed4364f806584ba265c40151aa325d9ca83ecb7b85b39ebb8a38a3533a2_prof);

    }

    public function getTemplateName()
    {
        return "default/esis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"blue\">
        test 1
    </div>
    <p>&nbsp;</p>
      {{ render(controller('AppBundle:Default:esi', {'twig' : 'default/fichier_exemple.html.twig'})) }}
{% endblock %}
", "default/esis.html.twig", "/home/ydevars/symfony/app/Resources/views/default/esis.html.twig");
    }
}
