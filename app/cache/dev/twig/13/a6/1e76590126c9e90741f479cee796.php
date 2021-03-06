<?php

/* AcmeRestaurantsBundle:Default:index.html.twig */
class __TwigTemplate_13a61e76590126c9e90741f479cee796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeRestaurantsBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeRestaurantsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 5
            echo "    
      <article class=\"places\">
         <header>     
            <h2><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placesName"), "html", null, true);
            echo "</a></h2>
         </header>           
         ";
            // line 11
            echo "        
         ";
            // line 12
            if (($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placePhoto") != "")) {
                echo "     
         <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placePhoto"), "html", null, true);
                echo "\">     
         ";
            } elseif (($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placePhoto") < 10)) {
                // line 15
                echo "         <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/AcmeRestaurants/images/food.jpg"), "html", null, true);
                echo "\" />
         ";
            }
            // line 17
            echo "         <div class=\"snippet\">
              <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placesAddress"), "html", null, true);
            echo "</p>
              <p class=\"continue\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id"))), "html", null, true);
            echo "\">Continue reading...</a></p>
         </div>              
         <footer class=\"meta\">
         <p>Comments: -</p>       
         <p>Rating:";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placesRating"), "html", null, true);
            echo "</p>
         <p>Tags: <span class=\"highlight\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placesTypes"), "html", null, true);
            echo "</span></p>
         </footer>
      </article> 
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "     <p>There are no blog entries for places</p>
     
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " ";
    }

    public function getTemplateName()
    {
        return "AcmeRestaurantsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  195 => 59,  190 => 54,  180 => 48,  175 => 45,  150 => 30,  146 => 29,  137 => 25,  134 => 24,  129 => 17,  118 => 12,  114 => 10,  100 => 60,  70 => 18,  127 => 28,  110 => 22,  90 => 32,  84 => 48,  76 => 17,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 40,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 31,  71 => 16,  67 => 17,  63 => 14,  59 => 24,  38 => 5,  94 => 28,  89 => 20,  85 => 24,  75 => 17,  68 => 14,  56 => 13,  87 => 25,  21 => 2,  26 => 6,  93 => 56,  88 => 31,  78 => 45,  46 => 7,  27 => 4,  44 => 16,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 49,  171 => 61,  166 => 71,  163 => 39,  158 => 67,  156 => 66,  151 => 63,  142 => 28,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 5,  91 => 53,  62 => 23,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 4,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 20,  115 => 43,  111 => 9,  108 => 19,  101 => 32,  98 => 59,  96 => 31,  83 => 25,  74 => 19,  66 => 39,  55 => 12,  52 => 12,  50 => 10,  43 => 5,  41 => 8,  35 => 5,  32 => 4,  29 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 53,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 31,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 13,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 50,  82 => 28,  80 => 46,  73 => 10,  64 => 13,  60 => 6,  57 => 7,  54 => 10,  51 => 18,  48 => 6,  45 => 10,  42 => 8,  39 => 9,  36 => 4,  33 => 6,  30 => 7,);
    }
}
