<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* content.html */
class __TwigTemplate_00f6204f584fcb0ee42ce5247bd330358df7d6dc6c325d40d95618b9da19d664 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<table style=\"border-collapse: collapse; width: 87.8471%; height: 57px;\" border=\"1\">
<tbody>
<tr style=\"height: 18px;\">
<td style=\"width: 33.3333%; background-color: #505050; height: 18px;\"><span style=\"color: #ffffff;\"><strong>Words</strong></span></td>
<td style=\"width: 33.3333%; background-color: #505050; height: 18px;\"><span style=\"color: #ffffff;\"><strong>Description</strong></span></td>
</tr>
<tr style=\"height: 18px; background-color: #f1e0c6;\">
<td style=\"width: 33.3333%; height: 18px;\"><em>!example</em></td>
<td style=\"width: 33.3333%; height: 18px;\">This is just an example</td>
</tr>
<tr style=\"height: 18px; background-color: #d4c0a1;\">
<td style=\"width: 33.3333%; height: 18px;\"><em>!buyhouse</em></td>
<td style=\"width: 33.3333%; height: 18px;\">Buy house you are looking at</td>
</tr>
<tr style=\"height: 18px; background-color: #f1e0c6;\">
<td style=\"width: 33.3333%; height: 18px;\"><em>!aol</em></td>
<td style=\"width: 33.3333%; height: 18px;\">Buy AoL</td>
</tr>
<tr style=\"height: 18px; background-color: #d4c0a1;\">
<td style=\"width: 33.3333%; height: 18px;\"><em>!sellhouse</em></td>
<td style=\"width: 33.3333%; height: 18px;\">Sell house you are looking at</td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "content.html";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "content.html", "");
    }
}
