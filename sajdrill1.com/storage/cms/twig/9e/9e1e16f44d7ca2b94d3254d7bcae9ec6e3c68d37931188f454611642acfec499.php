<?php

/* /var/www/www-sajdrill-com/public_html/plugins/cheerfullab/frontendspelling/components/frontendspelling/tes_js.htm */
class __TwigTemplate_21c36c0a0fac7494d137f1f58e6f420857be8ec11c7ebceee8160f0fb8322b1d extends Twig_Template
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
        echo "<script>
;(function()
    {
        var tesLang = {
            title: '";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["popupTitle"]) ? $context["popupTitle"] : null), "html", null, true);
        echo "',
            submit: '";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["buttonTitle"]) ? $context["buttonTitle"] : null), "html", null, true);
        echo "'
        };

    var comment = '',
            isForm = false;

    function getSelection()
    {
        var selection = '';
        /**
         * For Modern browsers
         */
        if (window.getSelection)
            selection = window.getSelection().toString();
        /**
         * For IE 8 and less
         */
        else if (document.selection && document.selection.type != 'Control')
            selection = document.selection.createRange().text;

        if( !selection )
            throw new Error('no_selection');

        return selection;
    }

    function createForm()
    {
        if( isForm ) return false;

        var container = document.createElement('div'),
                title = document.createElement('p'),
                form = document.createElement('form'),
                text = document.createElement('p'),
                submit = document.createElement('input'),
                close = document.createElement('span'),
                successMessage = document.createElement('p');

        container.classList.add('tes__container');
        container.id = 'tes-container';

        title.classList.add('tes__title');
        title.innerText = tesLang.title;

        form.classList.add('tes__form');
        form.action = '';
        form.method = 'POST';
        form.appendChild(title);
        form.appendChild(text);
        form.appendChild(submit);
        form.appendChild(close);
        form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    var json = {
                                url: encodeURIComponent(window.location.href),
                                text: encodeURIComponent(getSelection()),
                                comment: encodeURIComponent(comment)
                            },
                            xhr = new XMLHttpRequest();

                    xhr.open('POST', '/backend/cheerfullab/frontendspelling/spellingrequests/create_ajax', true);
                    xhr.setRequestHeader('Content-Type', 'application/json');
                    xhr.send(JSON.stringify({textError: json}));

                    xhr.onreadystatechange = function () {
                        if (xhr.readyState != 4) return;

                        if (xhr.status != 200)
                    {
                        console.log(xhr.status + ': ' + xhr.statusText);
                    } else {
                            var data = JSON.parse(xhr.responseText)[0];
                            if (data.status)
                        {
                            successMessage.classList.add('tes__success-message');
                            successMessage.innerText = data.message;
                            form.removeChild(text);
                            form.appendChild(successMessage);
                        } else
                        {
                            throw new Error(data.message);
                        }
                    }
                }
                }
        );

        text.classList.add('tes__selected-text');
        text.innerText = getSelection();

        submit.type = 'submit';
        submit.classList.add('tes__submit');
        submit.value = tesLang.submit;

        close.classList.add('tes__close');
        close.innerText = '+';
        close.addEventListener('click', function() {
                    container.parentNode.removeChild(container);
                    isForm = false;
                }
        );
        container.addEventListener('click', function () {
                    container.parentNode.removeChild(container);
                    isForm = false;
                }
        );

        container.appendChild(form);
        document.body.appendChild(container);
        isForm = true;
    }

    document.addEventListener('keypress', function() {
                if ((event.ctrlKey) && ((event.keyCode == 0xA) || (event.keyCode == 0xD)))
            {
                try {
                    createForm();
                } catch (e) {
                }

            }
            }
    );
    }
)();
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/cheerfullab/frontendspelling/components/frontendspelling/tes_js.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <script>*/
/* ;(function()*/
/*     {*/
/*         var tesLang = {*/
/*             title: '{{ popupTitle }}',*/
/*             submit: '{{ buttonTitle }}'*/
/*         };*/
/* */
/*     var comment = '',*/
/*             isForm = false;*/
/* */
/*     function getSelection()*/
/*     {*/
/*         var selection = '';*/
/*         /***/
/*          * For Modern browsers*/
/*          *//* */
/*         if (window.getSelection)*/
/*             selection = window.getSelection().toString();*/
/*         /***/
/*          * For IE 8 and less*/
/*          *//* */
/*         else if (document.selection && document.selection.type != 'Control')*/
/*             selection = document.selection.createRange().text;*/
/* */
/*         if( !selection )*/
/*             throw new Error('no_selection');*/
/* */
/*         return selection;*/
/*     }*/
/* */
/*     function createForm()*/
/*     {*/
/*         if( isForm ) return false;*/
/* */
/*         var container = document.createElement('div'),*/
/*                 title = document.createElement('p'),*/
/*                 form = document.createElement('form'),*/
/*                 text = document.createElement('p'),*/
/*                 submit = document.createElement('input'),*/
/*                 close = document.createElement('span'),*/
/*                 successMessage = document.createElement('p');*/
/* */
/*         container.classList.add('tes__container');*/
/*         container.id = 'tes-container';*/
/* */
/*         title.classList.add('tes__title');*/
/*         title.innerText = tesLang.title;*/
/* */
/*         form.classList.add('tes__form');*/
/*         form.action = '';*/
/*         form.method = 'POST';*/
/*         form.appendChild(title);*/
/*         form.appendChild(text);*/
/*         form.appendChild(submit);*/
/*         form.appendChild(close);*/
/*         form.addEventListener('submit', function(e) {*/
/*                     e.preventDefault();*/
/*                     var json = {*/
/*                                 url: encodeURIComponent(window.location.href),*/
/*                                 text: encodeURIComponent(getSelection()),*/
/*                                 comment: encodeURIComponent(comment)*/
/*                             },*/
/*                             xhr = new XMLHttpRequest();*/
/* */
/*                     xhr.open('POST', '/backend/cheerfullab/frontendspelling/spellingrequests/create_ajax', true);*/
/*                     xhr.setRequestHeader('Content-Type', 'application/json');*/
/*                     xhr.send(JSON.stringify({textError: json}));*/
/* */
/*                     xhr.onreadystatechange = function () {*/
/*                         if (xhr.readyState != 4) return;*/
/* */
/*                         if (xhr.status != 200)*/
/*                     {*/
/*                         console.log(xhr.status + ': ' + xhr.statusText);*/
/*                     } else {*/
/*                             var data = JSON.parse(xhr.responseText)[0];*/
/*                             if (data.status)*/
/*                         {*/
/*                             successMessage.classList.add('tes__success-message');*/
/*                             successMessage.innerText = data.message;*/
/*                             form.removeChild(text);*/
/*                             form.appendChild(successMessage);*/
/*                         } else*/
/*                         {*/
/*                             throw new Error(data.message);*/
/*                         }*/
/*                     }*/
/*                 }*/
/*                 }*/
/*         );*/
/* */
/*         text.classList.add('tes__selected-text');*/
/*         text.innerText = getSelection();*/
/* */
/*         submit.type = 'submit';*/
/*         submit.classList.add('tes__submit');*/
/*         submit.value = tesLang.submit;*/
/* */
/*         close.classList.add('tes__close');*/
/*         close.innerText = '+';*/
/*         close.addEventListener('click', function() {*/
/*                     container.parentNode.removeChild(container);*/
/*                     isForm = false;*/
/*                 }*/
/*         );*/
/*         container.addEventListener('click', function () {*/
/*                     container.parentNode.removeChild(container);*/
/*                     isForm = false;*/
/*                 }*/
/*         );*/
/* */
/*         container.appendChild(form);*/
/*         document.body.appendChild(container);*/
/*         isForm = true;*/
/*     }*/
/* */
/*     document.addEventListener('keypress', function() {*/
/*                 if ((event.ctrlKey) && ((event.keyCode == 0xA) || (event.keyCode == 0xD)))*/
/*             {*/
/*                 try {*/
/*                     createForm();*/
/*                 } catch (e) {*/
/*                 }*/
/* */
/*             }*/
/*             }*/
/*     );*/
/*     }*/
/* )();*/
/* </script>*/
