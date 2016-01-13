<?php

/* uniPeliculasBundle::layout.html.twig */
class __TwigTemplate_995f133b713ee792757ec86459d318f9b911dfbfe3ee744bca75427d5eaa7871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSuperior' => array($this, 'block_menuSuperior'),
            'menuLateral' => array($this, 'block_menuLateral'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "    
    <div id=\"menuSuperior\">
      ";
        // line 7
        $this->displayBlock('menuSuperior', $context, $blocks);
        // line 17
        echo "    </div>

    <div id=\"menuLateral\">
      ";
        // line 20
        $this->displayBlock('menuLateral', $context, $blocks);
        // line 23
        echo "    </div>
    
    <div id=\"central\">
      ";
        // line 26
        $this->displayBlock('central', $context, $blocks);
        // line 29
        echo "    </div>








";
    }

    // line 7
    public function block_menuSuperior($context, array $blocks = array())
    {
        // line 8
        echo "          <a href=\"";
        echo $this->env->getExtension('routing')->getPath("peliculas_buscar_titulo");
        echo "\">
            Buscar Titulo
         </a>
            <br>
         <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("peliculas_buscar_autor");
        echo "\">
            Buscar Autor
         </a>
         
      ";
    }

    // line 20
    public function block_menuLateral($context, array $blocks = array())
    {
        // line 21
        echo "    
      ";
    }

    // line 26
    public function block_central($context, array $blocks = array())
    {
        // line 27
        echo "        
      ";
    }

    public function getTemplateName()
    {
        return "uniPeliculasBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  95 => 26,  90 => 21,  87 => 20,  78 => 12,  70 => 8,  67 => 7,  54 => 29,  52 => 26,  47 => 23,  45 => 20,  40 => 17,  38 => 7,  34 => 5,  42 => 10,  35 => 6,  31 => 4,  28 => 3,);
    }
}
