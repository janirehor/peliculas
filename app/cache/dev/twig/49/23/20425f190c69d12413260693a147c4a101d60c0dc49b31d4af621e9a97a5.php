<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_492320425f190c69d12413260693a147c4a101d60c0dc49b31d4af621e9a97a5 extends Twig_Template
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
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 76,  185 => 75,  174 => 74,  167 => 71,  153 => 69,  118 => 49,  113 => 48,  104 => 42,  389 => 160,  386 => 159,  380 => 158,  378 => 157,  371 => 156,  367 => 155,  363 => 153,  361 => 152,  358 => 151,  353 => 149,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 135,  315 => 131,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 118,  281 => 114,  276 => 111,  274 => 110,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  248 => 97,  232 => 88,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  197 => 69,  194 => 68,  191 => 77,  184 => 63,  178 => 59,  175 => 58,  172 => 57,  170 => 56,  155 => 47,  152 => 46,  134 => 54,  34 => 5,  356 => 330,  354 => 329,  351 => 328,  307 => 128,  70 => 15,  65 => 11,  20 => 1,  97 => 41,  58 => 18,  127 => 35,  110 => 22,  90 => 20,  84 => 27,  76 => 31,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 340,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 78,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 41,  71 => 23,  67 => 24,  63 => 18,  59 => 16,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 11,  28 => 3,  93 => 38,  88 => 32,  78 => 18,  27 => 3,  38 => 7,  87 => 34,  46 => 13,  21 => 2,  24 => 3,  44 => 10,  31 => 4,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 54,  163 => 53,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 56,  136 => 56,  121 => 50,  117 => 19,  105 => 25,  91 => 33,  62 => 24,  49 => 14,  25 => 35,  19 => 1,  79 => 18,  72 => 27,  69 => 26,  47 => 8,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 31,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 37,  83 => 33,  74 => 27,  66 => 25,  55 => 16,  52 => 12,  50 => 18,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 8,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 66,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 70,  162 => 57,  154 => 58,  149 => 51,  147 => 43,  144 => 42,  141 => 48,  133 => 55,  130 => 41,  125 => 51,  122 => 43,  116 => 41,  112 => 42,  109 => 27,  106 => 45,  103 => 32,  99 => 23,  95 => 34,  92 => 28,  86 => 28,  82 => 19,  80 => 32,  73 => 16,  64 => 23,  60 => 6,  57 => 20,  54 => 19,  51 => 13,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
