<?php

/* user_welcome.txt */
class __TwigTemplate_77610c084555a1cf88734cffa04e9cdf4d749c4f626408efd9a05fd962dae226 extends Twig_Template
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
        echo "Subject: Bienvenido a \"";
        echo ($context["SITENAME"] ?? null);
        echo "\" - ";
        echo ($context["U_BOARD"] ?? null);
        echo "

";
        // line 3
        echo ($context["WELCOME_MSG"] ?? null);
        echo "

Por favor guarde este email para futuras referencias. La información de su cuenta es la siguiente:

----------------------------
Nombre de usuario: ";
        // line 8
        echo ($context["USERNAME"] ?? null);
        echo "

URL del Sitio: ";
        // line 10
        echo ($context["U_BOARD"] ?? null);
        echo "
----------------------------

Su clave ha sido encriptada en nuestra base de datos. Si la olvidó podrá solicitar una nueva la cuál será activada en la misma forma que esta cuenta.

Gracias por registrarse.

";
        // line 17
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  40 => 10,  35 => 8,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user_welcome.txt", "");
    }
}
