<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d5f7034ba89d7aa9826b6cd5a91bf5772307317168e10b12d00fd67ad504db00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f7034ba89d7aa9826b6cd5a91bf5772307317168e10b12d00fd67ad504db00->enter($__internal_d5f7034ba89d7aa9826b6cd5a91bf5772307317168e10b12d00fd67ad504db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f0e23f88bad05830e138dac6bfe56d03e863042fdbc4d5901cd2893f67b766f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e23f88bad05830e138dac6bfe56d03e863042fdbc4d5901cd2893f67b766f7->enter($__internal_f0e23f88bad05830e138dac6bfe56d03e863042fdbc4d5901cd2893f67b766f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5f7034ba89d7aa9826b6cd5a91bf5772307317168e10b12d00fd67ad504db00->leave($__internal_d5f7034ba89d7aa9826b6cd5a91bf5772307317168e10b12d00fd67ad504db00_prof);

        
        $__internal_f0e23f88bad05830e138dac6bfe56d03e863042fdbc4d5901cd2893f67b766f7->leave($__internal_f0e23f88bad05830e138dac6bfe56d03e863042fdbc4d5901cd2893f67b766f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8433a922cde08302b20e996f82b28a55d00c064a3d5e54f86a8d3c3edde2fbd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8433a922cde08302b20e996f82b28a55d00c064a3d5e54f86a8d3c3edde2fbd8->enter($__internal_8433a922cde08302b20e996f82b28a55d00c064a3d5e54f86a8d3c3edde2fbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d28791c23840afacd0858fe20929047b29d0384a443b0bdf0c0744e645e048b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d28791c23840afacd0858fe20929047b29d0384a443b0bdf0c0744e645e048b->enter($__internal_9d28791c23840afacd0858fe20929047b29d0384a443b0bdf0c0744e645e048b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9d28791c23840afacd0858fe20929047b29d0384a443b0bdf0c0744e645e048b->leave($__internal_9d28791c23840afacd0858fe20929047b29d0384a443b0bdf0c0744e645e048b_prof);

        
        $__internal_8433a922cde08302b20e996f82b28a55d00c064a3d5e54f86a8d3c3edde2fbd8->leave($__internal_8433a922cde08302b20e996f82b28a55d00c064a3d5e54f86a8d3c3edde2fbd8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_471adfccdd4c91a9fe7777e40fa106d3bbf04e8c873add1d704fa0723b4ff70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471adfccdd4c91a9fe7777e40fa106d3bbf04e8c873add1d704fa0723b4ff70d->enter($__internal_471adfccdd4c91a9fe7777e40fa106d3bbf04e8c873add1d704fa0723b4ff70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_14233dd88517471583560ba1fb63b036312cbd8beaa1dd29e2ad5d118ea1d3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14233dd88517471583560ba1fb63b036312cbd8beaa1dd29e2ad5d118ea1d3d6->enter($__internal_14233dd88517471583560ba1fb63b036312cbd8beaa1dd29e2ad5d118ea1d3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_14233dd88517471583560ba1fb63b036312cbd8beaa1dd29e2ad5d118ea1d3d6->leave($__internal_14233dd88517471583560ba1fb63b036312cbd8beaa1dd29e2ad5d118ea1d3d6_prof);

        
        $__internal_471adfccdd4c91a9fe7777e40fa106d3bbf04e8c873add1d704fa0723b4ff70d->leave($__internal_471adfccdd4c91a9fe7777e40fa106d3bbf04e8c873add1d704fa0723b4ff70d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cbcc44db96f409ebdc9925c2747cf249d609bfb7610e807fd7e189c152e1445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cbcc44db96f409ebdc9925c2747cf249d609bfb7610e807fd7e189c152e1445->enter($__internal_5cbcc44db96f409ebdc9925c2747cf249d609bfb7610e807fd7e189c152e1445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_44022fd2937522ba4e0a8d2e1b111cae08ab72988decf510d54bb7ab6bf97737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44022fd2937522ba4e0a8d2e1b111cae08ab72988decf510d54bb7ab6bf97737->enter($__internal_44022fd2937522ba4e0a8d2e1b111cae08ab72988decf510d54bb7ab6bf97737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_44022fd2937522ba4e0a8d2e1b111cae08ab72988decf510d54bb7ab6bf97737->leave($__internal_44022fd2937522ba4e0a8d2e1b111cae08ab72988decf510d54bb7ab6bf97737_prof);

        
        $__internal_5cbcc44db96f409ebdc9925c2747cf249d609bfb7610e807fd7e189c152e1445->leave($__internal_5cbcc44db96f409ebdc9925c2747cf249d609bfb7610e807fd7e189c152e1445_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ydevars/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
