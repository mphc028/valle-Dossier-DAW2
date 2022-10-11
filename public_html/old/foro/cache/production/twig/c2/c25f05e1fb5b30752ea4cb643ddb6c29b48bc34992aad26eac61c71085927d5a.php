<?php

/* user_welcome_inactive.txt */
class __TwigTemplate_3ac0fe557a52d5d27e0281a6cc712f8574bd5d2b1568848a3c0c95e4860b23af extends Twig_Template
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
        echo "\"

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

Por favor visite el siguiente enlace para activar su cuenta:

";
        // line 15
        echo ($context["U_ACTIVATE"] ?? null);
        echo "

Su contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada.
En el caso de que la olvide tendrá la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a su cuenta.

Gracias por registrarse.

";
        // line 22
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome_inactive.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  46 => 15,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user_welcome_inactive.txt", "");
    }
}
