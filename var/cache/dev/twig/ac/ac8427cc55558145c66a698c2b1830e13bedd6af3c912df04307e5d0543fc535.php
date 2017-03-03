<?php

/* default/fichier_exemple.html.twig */
class __TwigTemplate_212bd40f9dfc4ad3d726d0f033f6cef4eab512ad7aed98c88631b379bb3cebb2 extends Twig_Template
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
        $__internal_b7ff4371b5b12fc2db26c956ad05c89b7c76ddf8a7a97aca21239114cff43b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ff4371b5b12fc2db26c956ad05c89b7c76ddf8a7a97aca21239114cff43b78->enter($__internal_b7ff4371b5b12fc2db26c956ad05c89b7c76ddf8a7a97aca21239114cff43b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/fichier_exemple.html.twig"));

        $__internal_73d0397f3a6617c881de4b48ebe6d5b8cf70c2cf54f556e1706f4754cf582b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d0397f3a6617c881de4b48ebe6d5b8cf70c2cf54f556e1706f4754cf582b43->enter($__internal_73d0397f3a6617c881de4b48ebe6d5b8cf70c2cf54f556e1706f4754cf582b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/fichier_exemple.html.twig"));

        // line 1
        echo "
    <div class=\"green\">
        test 2
    </div>

";
        
        $__internal_b7ff4371b5b12fc2db26c956ad05c89b7c76ddf8a7a97aca21239114cff43b78->leave($__internal_b7ff4371b5b12fc2db26c956ad05c89b7c76ddf8a7a97aca21239114cff43b78_prof);

        
        $__internal_73d0397f3a6617c881de4b48ebe6d5b8cf70c2cf54f556e1706f4754cf582b43->leave($__internal_73d0397f3a6617c881de4b48ebe6d5b8cf70c2cf54f556e1706f4754cf582b43_prof);

    }

    public function getTemplateName()
    {
        return "default/fichier_exemple.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    <div class=\"green\">
        test 2
    </div>

", "default/fichier_exemple.html.twig", "/home/ydevars/symfony/app/Resources/views/default/fichier_exemple.html.twig");
    }
}
