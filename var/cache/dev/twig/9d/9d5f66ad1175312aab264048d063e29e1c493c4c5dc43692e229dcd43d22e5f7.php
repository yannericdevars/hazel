<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_961059fb2554d50194e0a2200835795178dacf72a84c4b640d459c5905b3c35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961059fb2554d50194e0a2200835795178dacf72a84c4b640d459c5905b3c35d->enter($__internal_961059fb2554d50194e0a2200835795178dacf72a84c4b640d459c5905b3c35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fa2bdfdf8d8c2ed59e241fc54ed05d6787a7019eeafda3de895427c3e2c6efbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2bdfdf8d8c2ed59e241fc54ed05d6787a7019eeafda3de895427c3e2c6efbd->enter($__internal_fa2bdfdf8d8c2ed59e241fc54ed05d6787a7019eeafda3de895427c3e2c6efbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_961059fb2554d50194e0a2200835795178dacf72a84c4b640d459c5905b3c35d->leave($__internal_961059fb2554d50194e0a2200835795178dacf72a84c4b640d459c5905b3c35d_prof);

        
        $__internal_fa2bdfdf8d8c2ed59e241fc54ed05d6787a7019eeafda3de895427c3e2c6efbd->leave($__internal_fa2bdfdf8d8c2ed59e241fc54ed05d6787a7019eeafda3de895427c3e2c6efbd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d20c58b038d47329fdf3bb69f01622c8e8d3d156983cb11433dbfd5e8bbbb54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20c58b038d47329fdf3bb69f01622c8e8d3d156983cb11433dbfd5e8bbbb54d->enter($__internal_d20c58b038d47329fdf3bb69f01622c8e8d3d156983cb11433dbfd5e8bbbb54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbd6f0f1b62686bd118024758a9d853a21108de428284e4c926703f2dd91c269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd6f0f1b62686bd118024758a9d853a21108de428284e4c926703f2dd91c269->enter($__internal_fbd6f0f1b62686bd118024758a9d853a21108de428284e4c926703f2dd91c269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fbd6f0f1b62686bd118024758a9d853a21108de428284e4c926703f2dd91c269->leave($__internal_fbd6f0f1b62686bd118024758a9d853a21108de428284e4c926703f2dd91c269_prof);

        
        $__internal_d20c58b038d47329fdf3bb69f01622c8e8d3d156983cb11433dbfd5e8bbbb54d->leave($__internal_d20c58b038d47329fdf3bb69f01622c8e8d3d156983cb11433dbfd5e8bbbb54d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_615cb0051b76e1843dbf9801855a6d250bb563b2ec61c6e97b78411c1de0f6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615cb0051b76e1843dbf9801855a6d250bb563b2ec61c6e97b78411c1de0f6f8->enter($__internal_615cb0051b76e1843dbf9801855a6d250bb563b2ec61c6e97b78411c1de0f6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_960be69b2cf23907fcd49e1229ef35801cd572fa3e341962d89b2cc9dc021eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960be69b2cf23907fcd49e1229ef35801cd572fa3e341962d89b2cc9dc021eea->enter($__internal_960be69b2cf23907fcd49e1229ef35801cd572fa3e341962d89b2cc9dc021eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            
        <style type=\"text/css\">
            
        .blue {
\tborder: 1px solid blue;
        
        }
        .green {
\tborder: 1px solid green;
        
        }
        
        </style>
        ";
        
        $__internal_960be69b2cf23907fcd49e1229ef35801cd572fa3e341962d89b2cc9dc021eea->leave($__internal_960be69b2cf23907fcd49e1229ef35801cd572fa3e341962d89b2cc9dc021eea_prof);

        
        $__internal_615cb0051b76e1843dbf9801855a6d250bb563b2ec61c6e97b78411c1de0f6f8->leave($__internal_615cb0051b76e1843dbf9801855a6d250bb563b2ec61c6e97b78411c1de0f6f8_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_24f93a646851719ddbe960b184d2a484f019e6f2d2c206b13d3e5045e53d8763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f93a646851719ddbe960b184d2a484f019e6f2d2c206b13d3e5045e53d8763->enter($__internal_24f93a646851719ddbe960b184d2a484f019e6f2d2c206b13d3e5045e53d8763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2295c36b454ab4bbd9893e329afadc31e95334a49b29d82f76960011f674dc8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2295c36b454ab4bbd9893e329afadc31e95334a49b29d82f76960011f674dc8b->enter($__internal_2295c36b454ab4bbd9893e329afadc31e95334a49b29d82f76960011f674dc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2295c36b454ab4bbd9893e329afadc31e95334a49b29d82f76960011f674dc8b->leave($__internal_2295c36b454ab4bbd9893e329afadc31e95334a49b29d82f76960011f674dc8b_prof);

        
        $__internal_24f93a646851719ddbe960b184d2a484f019e6f2d2c206b13d3e5045e53d8763->leave($__internal_24f93a646851719ddbe960b184d2a484f019e6f2d2c206b13d3e5045e53d8763_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a3e956485c629a0cb9f40a2f5925a7d5fda641c77bf19ed5dc1ed2d75ca2d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3e956485c629a0cb9f40a2f5925a7d5fda641c77bf19ed5dc1ed2d75ca2d6a->enter($__internal_2a3e956485c629a0cb9f40a2f5925a7d5fda641c77bf19ed5dc1ed2d75ca2d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_50f628e3490125d235eb6b1bc5526d07ad09ba27a82d3f3e7624cb0fd5da2a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f628e3490125d235eb6b1bc5526d07ad09ba27a82d3f3e7624cb0fd5da2a76->enter($__internal_50f628e3490125d235eb6b1bc5526d07ad09ba27a82d3f3e7624cb0fd5da2a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_50f628e3490125d235eb6b1bc5526d07ad09ba27a82d3f3e7624cb0fd5da2a76->leave($__internal_50f628e3490125d235eb6b1bc5526d07ad09ba27a82d3f3e7624cb0fd5da2a76_prof);

        
        $__internal_2a3e956485c629a0cb9f40a2f5925a7d5fda641c77bf19ed5dc1ed2d75ca2d6a->leave($__internal_2a3e956485c629a0cb9f40a2f5925a7d5fda641c77bf19ed5dc1ed2d75ca2d6a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 25,  115 => 24,  92 => 7,  83 => 6,  65 => 5,  53 => 26,  50 => 25,  48 => 24,  41 => 21,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            
        <style type=\"text/css\">
            
        .blue {
\tborder: 1px solid blue;
        
        }
        .green {
\tborder: 1px solid green;
        
        }
        
        </style>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ydevars/symfony/app/Resources/views/base.html.twig");
    }
}
