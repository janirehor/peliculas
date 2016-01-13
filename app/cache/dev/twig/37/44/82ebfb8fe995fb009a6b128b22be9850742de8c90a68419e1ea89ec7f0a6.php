<?php

/* ::base.html.twig */
class __TwigTemplate_374482ebfb8fe995fb009a6b128b22be9850742de8c90a68419e1ea89ec7f0a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        // line 11
        echo "    </head>
    <body>
        
        <div id=\"cabecera\">
            ";
        // line 15
        $this->displayBlock('cabecera', $context, $blocks);
        // line 18
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 21
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 22
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 25
        $this->displayBlock('pie', $context, $blocks);
        // line 27
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "PELICULAS";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         
       
         ";
    }

    // line 15
    public function block_cabecera($context, array $blocks = array())
    {
        // line 16
        echo "                <br>
            ";
    }

    // line 21
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "Cuerpo";
    }

    // line 25
    public function block_pie($context, array $blocks = array())
    {
        echo " <h4>Made by Janire</h4>  
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  91 => 21,  86 => 16,  83 => 15,  74 => 7,  71 => 6,  65 => 5,  58 => 27,  56 => 25,  51 => 22,  49 => 21,  44 => 18,  36 => 11,  30 => 5,  24 => 1,  98 => 27,  95 => 26,  90 => 21,  87 => 20,  78 => 12,  70 => 8,  67 => 7,  54 => 29,  52 => 26,  47 => 23,  45 => 20,  40 => 17,  38 => 7,  34 => 6,  42 => 15,  35 => 6,  31 => 4,  28 => 3,);
    }
}
