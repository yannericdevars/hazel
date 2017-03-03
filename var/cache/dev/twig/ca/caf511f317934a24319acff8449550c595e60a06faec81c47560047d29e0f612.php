<?php

/* default/esi.html.twig */
class __TwigTemplate_eb7a60d70ec24d50819b8ddea8066187ea33234395baa808b11a56a38db67c0f extends Twig_Template
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
        $__internal_dc96184ec201201f3842a48223268c917a26ca5867b34b6cbd6512b778df89f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc96184ec201201f3842a48223268c917a26ca5867b34b6cbd6512b778df89f6->enter($__internal_dc96184ec201201f3842a48223268c917a26ca5867b34b6cbd6512b778df89f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/esi.html.twig"));

        $__internal_abc2a08e209b03497ec80816811c2762a60666cdec2dc46d7019a30ba7b9c59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc2a08e209b03497ec80816811c2762a60666cdec2dc46d7019a30ba7b9c59a->enter($__internal_abc2a08e209b03497ec80816811c2762a60666cdec2dc46d7019a30ba7b9c59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/esi.html.twig"));

        // line 1
        echo "
    <div class=\"green\">
        test 2
    </div>

";
        
        $__internal_dc96184ec201201f3842a48223268c917a26ca5867b34b6cbd6512b778df89f6->leave($__internal_dc96184ec201201f3842a48223268c917a26ca5867b34b6cbd6512b778df89f6_prof);

        
        $__internal_abc2a08e209b03497ec80816811c2762a60666cdec2dc46d7019a30ba7b9c59a->leave($__internal_abc2a08e209b03497ec80816811c2762a60666cdec2dc46d7019a30ba7b9c59a_prof);

    }

    public function getTemplateName()
    {
        return "default/esi.html.twig";
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

", "default/esi.html.twig", "/home/ydevars/symfony/app/Resources/views/default/esi.html.twig");
    }
}
