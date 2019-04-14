<?php

/* /var/www/www-sajdrill-com/public_html/plugins/raviraj/rjsliders/components/advanced/default.htm */
class __TwigTemplate_ea101f7357f863b49cb8f895f5675303bcf6482ea354141139d0f18aac59197d extends Twig_Template
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
    jssor_";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "_starter = function (containerId) {
        ";
        // line 3
        if (((isset($context["transaction"]) ? $context["transaction"] : null) != 0)) {
            // line 4
            echo "        var _SlideshowTransitions = [
            ";
            // line 5
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 2))) {
                // line 6
                echo "                //Fade Twins
                { \$Duration: 700, \$Opacity: 2, \$Brother: { \$Duration: 1000, \$Opacity: 2 } },
            ";
            }
            // line 9
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 3))) {
                // line 10
                echo "            //Rotate Overlap
                { \$Duration: 1200, \$Zoom: 11, \$Rotate: -1, \$Easing: { \$Zoom: \$JssorEasing\$.\$EaseInQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$Opacity: 2, \$Round: { \$Rotate: 0.5 }, \$Brother: { \$Duration: 1200, \$Zoom: 1, \$Rotate: 1, \$Easing: \$JssorEasing\$.\$EaseSwing, \$Opacity: 2, \$Round: { \$Rotate: 0.5 }, \$Shift: 90 } },
            ";
            }
            // line 13
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 4))) {
                // line 14
                echo "            //Switch
                { \$Duration: 1400, \$Zoom: 1.5, \$FlyDirection: 1, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInWave, \$Zoom: \$JssorEasing\$.\$EaseInSine }, \$ScaleHorizontal: 0.25, \$Opacity: 2, \$ZIndex: -10, \$Brother: { \$Duration: 1400, \$Zoom: 1.5, \$FlyDirection: 2, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInWave, \$Zoom: \$JssorEasing\$.\$EaseInSine }, \$ScaleHorizontal: 0.25, \$Opacity: 2, \$ZIndex: -10 } },
            ";
            }
            // line 17
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 5))) {
                // line 18
                echo "            //Rotate Relay
                { \$Duration: 1200, \$Zoom: 11, \$Rotate: 1, \$Easing: { \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$Opacity: 2, \$Round: { \$Rotate: 1 }, \$ZIndex: -10, \$Brother: { \$Duration: 1200, \$Zoom: 11, \$Rotate: -1, \$Easing: { \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$Opacity: 2, \$Round: { \$Rotate: 1 }, \$ZIndex: -10, \$Shift: 600 } },
            ";
            }
            // line 21
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 6))) {
                // line 22
                echo "            //Doors
                { \$Duration: 1500, \$Cols: 2, \$FlyDirection: 1, \$ChessMode: { \$Column: 3 }, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInOutCubic }, \$ScaleHorizontal: 0.5, \$Opacity: 2, \$Brother: { \$Duration: 1500, \$Opacity: 2 } },
            ";
            }
            // line 25
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 7))) {
                // line 26
                echo "            //Rotate in+ out-
                { \$Duration: 1500, \$Zoom: 1, \$Rotate: 0.1, \$During: { \$Left: [0.6, 0.4], \$Top: [0.6, 0.4], \$Rotate: [0.6, 0.4], \$Zoom: [0.6, 0.4] }, \$FlyDirection: 6, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInQuad, \$Top: \$JssorEasing\$.\$EaseInQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$ScaleHorizontal: 0.3, \$ScaleVertical: 0.5, \$Opacity: 2, \$Brother: { \$Duration: 1000, \$Zoom: 11, \$Rotate: -0.5, \$Easing: { \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$Opacity: 2, \$Shift: 200 } },
            ";
            }
            // line 29
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 8))) {
                // line 30
                echo "            //Fly Twins
                { \$Duration: 1500, \$During: { \$Left: [0.6, 0.4] }, \$FlyDirection: 1, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$ScaleHorizontal: 0.3, \$Opacity: 2, \$Outside: true, \$Brother: { \$Duration: 1000, \$FlyDirection: 2, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$ScaleHorizontal: 0.3, \$Opacity: 2 } },
            ";
            }
            // line 33
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 9))) {
                // line 34
                echo "            //Rotate in- out+
                { \$Duration: 1500, \$Zoom: 11, \$Rotate: 0.5, \$During: { \$Left: [0.4, 0.6], \$Top: [0.4, 0.6], \$Rotate: [0.4, 0.6], \$Zoom: [0.4, 0.6] }, \$Easing: { \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$ScaleHorizontal: 0.3, \$ScaleVertical: 0.5, \$Opacity: 2, \$Brother: { \$Duration: 1000, \$Zoom: 1, \$Rotate: -0.5, \$Easing: { \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$Opacity: 2, \$Shift: 200 } },
            ";
            }
            // line 37
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 10))) {
                // line 38
                echo "            //Rotate Axis up overlap
                { \$Duration: 1200, \$Rotate: -0.1, \$FlyDirection: 5, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInQuad, \$Top: \$JssorEasing\$.\$EaseInQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$ScaleHorizontal: 0.25, \$ScaleVertical: 0.5, \$Opacity: 2, \$Brother: { \$Duration: 1200, \$Rotate: 0.1, \$FlyDirection: 10, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInQuad, \$Top: \$JssorEasing\$.\$EaseInQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$ScaleHorizontal: 0.1, \$ScaleVertical: 0.7, \$Opacity: 2 } },
            ";
            }
            // line 41
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 11))) {
                // line 42
                echo "            //Chess Replace TB
                { \$Duration: 1600, \$Rows: 2, \$FlyDirection: 1, \$ChessMode: { \$Row: 3 }, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2, \$Brother: { \$Duration: 1600, \$Rows: 2, \$FlyDirection: 2, \$ChessMode: { \$Row: 3 }, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2 } },
            ";
            }
            // line 45
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 12))) {
                // line 46
                echo "            //Chess Replace LR
                { \$Duration: 1600, \$Cols: 2, \$FlyDirection: 8, \$ChessMode: { \$Column: 12 }, \$Easing: { \$Top: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2, \$Brother: { \$Duration: 1600, \$Cols: 2, \$FlyDirection: 4, \$ChessMode: { \$Column: 12 }, \$Easing: { \$Top: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2 } },
            ";
            }
            // line 49
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 13))) {
                // line 50
                echo "            //Shift TB
                { \$Duration: 1200, \$FlyDirection: 4, \$Easing: { \$Top: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2, \$Brother: { \$Duration: 1200, \$FlyDirection: 8, \$Easing: { \$Top: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2 } },
            ";
            }
            // line 53
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 14))) {
                // line 54
                echo "            //Shift LR
                { \$Duration: 1200, \$FlyDirection: 1, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2, \$Brother: { \$Duration: 1200, \$FlyDirection: 2, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2 } },
            ";
            }
            // line 57
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 15))) {
                // line 58
                echo "            //Return TB
                { \$Duration: 1200, \$FlyDirection: 8, \$Easing: { \$Top: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2, \$ZIndex: -10, \$Brother: { \$Duration: 1200, \$FlyDirection: 8, \$Easing: { \$Top: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2, \$ZIndex: -10, \$Shift: -100 } },
            ";
            }
            // line 61
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 16))) {
                // line 62
                echo "            //Return LR
                { \$Duration: 1200, \$Delay: 40, \$Cols: 6, \$FlyDirection: 1, \$Formation: \$JssorSlideshowFormations\$.\$FormationStraight, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2, \$ZIndex: -10, \$Brother: { \$Duration: 1200, \$Delay: 40, \$Cols: 6, \$FlyDirection: 1, \$Formation: \$JssorSlideshowFormations\$.\$FormationStraight, \$Easing: { \$Top: \$JssorEasing\$.\$EaseInOutQuart, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2, \$ZIndex: -10, \$Shift: -100 } },
            ";
            }
            // line 65
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 17))) {
                // line 66
                echo "            //Rotate Axis down
                { \$Duration: 1500, \$Rotate: 0.1, \$During: { \$Left: [0.6, 0.4], \$Top: [0.6, 0.4], \$Rotate: [0.6, 0.4] }, \$FlyDirection: 10, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInQuad, \$Top: \$JssorEasing\$.\$EaseInQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$ScaleHorizontal: 0.1, \$ScaleVertical: 0.7, \$Opacity: 2, \$Brother: { \$Duration: 1000, \$Rotate: -0.1, \$FlyDirection: 5, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInQuad, \$Top: \$JssorEasing\$.\$EaseInQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$ScaleHorizontal: 0.2, \$ScaleVertical: 0.5, \$Opacity: 2 } },
            ";
            }
            // line 69
            echo "            ";
            if ((((isset($context["transaction"]) ? $context["transaction"] : null) == 1) || ((isset($context["transaction"]) ? $context["transaction"] : null) == 18))) {
                // line 70
                echo "            //Extrude Replace
                { \$Duration: 1600, \$Delay: 40, \$Cols: 12, \$During: { \$Left: [0.4, 0.6] }, \$SlideOut: true, \$FlyDirection: 2, \$Formation: \$JssorSlideshowFormations\$.\$FormationStraight, \$Assembly: 260, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInOutExpo, \$Opacity: \$JssorEasing\$.\$EaseInOutQuad }, \$ScaleHorizontal: 0.2, \$Opacity: 2, \$Outside: true, \$Round: { \$Top: 0.5 }, \$Brother: { \$Duration: 1000, \$Delay: 40, \$Cols: 12, \$FlyDirection: 1, \$Formation: \$JssorSlideshowFormations\$.\$FormationStraight, \$Assembly: 1028, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInOutExpo, \$Opacity: \$JssorEasing\$.\$EaseInOutQuad }, \$ScaleHorizontal: 0.2, \$Opacity: 2, \$Round: { \$Top: 0.5 } } }
            ";
            }
            // line 73
            echo "            ];
        ";
        }
        // line 75
        echo "        var options = {
            \$FillMode: ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["fillmode"]) ? $context["fillmode"] : null), "html", null, true);
        echo ",
            \$AutoPlay: ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["autoplay"]) ? $context["autoplay"] : null), "html", null, true);
        echo ",
            \$AutoPlayInterval: ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["autoplayinterval"]) ? $context["autoplayinterval"] : null), "html", null, true);
        echo ", 
            \$PauseOnHover: ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["pauseonhover"]) ? $context["pauseonhover"] : null), "html", null, true);
        echo ",
            \$ArrowKeyNavigation: ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["arrowkeynavigation"]) ? $context["arrowkeynavigation"] : null), "html", null, true);
        echo ",
            \$SlideDuration: ";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["slideduration"]) ? $context["slideduration"] : null), "html", null, true);
        echo ",
            \$MinDragOffsetToSlide: ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["mindragoffset"]) ? $context["mindragoffset"] : null), "html", null, true);
        echo ",
            \$SlideSpacing: ";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["slidespacing"]) ? $context["slidespacing"] : null), "html", null, true);
        echo ",
            \$DragOrientation: ";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["dragorientation"]) ? $context["dragorientation"] : null), "html", null, true);
        echo ",
            \$PlayOrientation: ";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["playorientation"]) ? $context["playorientation"] : null), "html", null, true);
        echo ",
            \$DisplayPieces: 1, 
            \$ParkingPosition: 0,
            \$UISearchMode: 1,

            ";
        // line 90
        if (((isset($context["transaction"]) ? $context["transaction"] : null) != 0)) {
            // line 91
            echo "            \$SlideshowOptions: {
                \$Class: \$JssorSlideshowRunner\$,
                \$Transitions: _SlideshowTransitions,
                \$TransitionsOrder: 0,    
                \$ShowLink: false       
            },
            ";
        }
        // line 98
        echo "            \$BulletNavigatorOptions: { 
                \$Class: \$JssorBulletNavigator\$, 
                \$ChanceToShow: ";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["chancetoshow"]) ? $context["chancetoshow"] : null), "html", null, true);
        echo ",
                \$AutoCenter: ";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["autocenter"]) ? $context["autocenter"] : null), "html", null, true);
        echo ",
                \$Orientation: ";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["orientation"]) ? $context["orientation"] : null), "html", null, true);
        echo ",
                \$SpacingX: ";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["spacingx"]) ? $context["spacingx"] : null), "html", null, true);
        echo ",
                \$SpacingY: ";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["spacingy"]) ? $context["spacingy"] : null), "html", null, true);
        echo ",
                \$Steps: ";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["steps"]) ? $context["steps"] : null), "html", null, true);
        echo ",
                \$Lanes: ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["lanes"]) ? $context["lanes"] : null), "html", null, true);
        echo "
            },

            \$ArrowNavigatorOptions: { 
                \$Class: \$JssorArrowNavigator\$,
                \$ChanceToShow: ";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["chancetoshowarrow"]) ? $context["chancetoshowarrow"] : null), "html", null, true);
        echo ",
                \$AutoCenter: ";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["autocenterarrow"]) ? $context["autocenterarrow"] : null), "html", null, true);
        echo ",
                \$Steps: ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["stepsarrow"]) ? $context["stepsarrow"] : null), "html", null, true);
        echo "
            }
        };

        var jssor_slider1 = new \$JssorSlider\$(\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\", options);

        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth;
            var parentWidth = jssor_slider1.\$Elmt.parentNode.clientWidth;
            if (parentWidth)
                jssor_slider1.\$SetScaleWidth(Math.max(Math.min(parentWidth, bodyWidth-40), 200));
                                                // Remove 40 if you want full width slider
            else
                \$JssorUtils\$.\$Delay(ScaleSlider, 30);
        }

        ScaleSlider();
        \$JssorUtils\$.\$AddEvent(window, \"load\", ScaleSlider);

        if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
            \$JssorUtils\$.\$OnWindowResize(window, ScaleSlider);
        }
    };
</script>
<div id=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\" style=\"position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: ";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px; overflow: hidden;\">
    <div u=\"loading\" style=\"position: absolute; top: 0px; left: 0px;\">
        <div style=\"filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;\">
        </div>
        <div class=\"load\" style=\"position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;\">
        </div>
    </div>
    <!-- Slides Container -->
    <div u=\"slides\" style=\"cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: ";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px; overflow: hidden;\">
        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 147
            echo "        <div>
            <img u=\"image\" src=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" />
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "    </div>

    <!-- Bullet Navigator Skin Begin -->
    <div u=\"navigator\" class=\"jssorb21\" style=\"position: absolute; bottom: 26px; left: 6px;\">
        <div u=\"prototype\" style=\"POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;\"></div>
    </div>
    <!-- Bullet Navigator Skin End -->
    <!-- Arrow Navigator Skin Begin -->
    <!-- Arrow Left -->
    <span u=\"arrowleft\" class=\"jssora21l\" style=\"width: 55px; height: 55px; top: 123px; left: 8px;\"></span>
    <!-- Arrow Right -->
    <span u=\"arrowright\" class=\"jssora21r\" style=\"width: 55px; height: 55px; top: 123px; right: 8px\"></span>
    <!-- Arrow Navigator Skin End -->
    <script>
        document.addEventListener(\"DOMContentLoaded\",function(){
            jssor_";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "_starter('";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "');
        });
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/plugins/raviraj/rjsliders/components/advanced/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 166,  335 => 151,  326 => 148,  323 => 147,  319 => 146,  315 => 145,  302 => 137,  279 => 117,  272 => 113,  268 => 112,  264 => 111,  256 => 106,  252 => 105,  248 => 104,  244 => 103,  240 => 102,  236 => 101,  232 => 100,  228 => 98,  219 => 91,  217 => 90,  209 => 85,  205 => 84,  201 => 83,  197 => 82,  193 => 81,  189 => 80,  185 => 79,  181 => 78,  177 => 77,  173 => 76,  170 => 75,  166 => 73,  161 => 70,  158 => 69,  153 => 66,  150 => 65,  145 => 62,  142 => 61,  137 => 58,  134 => 57,  129 => 54,  126 => 53,  121 => 50,  118 => 49,  113 => 46,  110 => 45,  105 => 42,  102 => 41,  97 => 38,  94 => 37,  89 => 34,  86 => 33,  81 => 30,  78 => 29,  73 => 26,  70 => 25,  65 => 22,  62 => 21,  57 => 18,  54 => 17,  49 => 14,  46 => 13,  41 => 10,  38 => 9,  33 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <script>*/
/*     jssor_{{ __SELF__ }}_starter = function (containerId) {*/
/*         {% if transaction != 0 %}*/
/*         var _SlideshowTransitions = [*/
/*             {% if transaction==1 or transaction==2 %}*/
/*                 //Fade Twins*/
/*                 { $Duration: 700, $Opacity: 2, $Brother: { $Duration: 1000, $Opacity: 2 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==3 %}*/
/*             //Rotate Overlap*/
/*                 { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Brother: { $Duration: 1200, $Zoom: 1, $Rotate: 1, $Easing: $JssorEasing$.$EaseSwing, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Shift: 90 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==4 %}*/
/*             //Switch*/
/*                 { $Duration: 1400, $Zoom: 1.5, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $ScaleHorizontal: 0.25, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1400, $Zoom: 1.5, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $ScaleHorizontal: 0.25, $Opacity: 2, $ZIndex: -10 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==5 %}*/
/*             //Rotate Relay*/
/*                 { $Duration: 1200, $Zoom: 11, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Brother: { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Shift: 600 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==6 %}*/
/*             //Doors*/
/*                 { $Duration: 1500, $Cols: 2, $FlyDirection: 1, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutCubic }, $ScaleHorizontal: 0.5, $Opacity: 2, $Brother: { $Duration: 1500, $Opacity: 2 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==7 %}*/
/*             //Rotate in+ out-*/
/*                 { $Duration: 1500, $Zoom: 1, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4], $Zoom: [0.6, 0.4] }, $FlyDirection: 6, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $ScaleHorizontal: 0.3, $ScaleVertical: 0.5, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 11, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==8 %}*/
/*             //Fly Twins*/
/*                 { $Duration: 1500, $During: { $Left: [0.6, 0.4] }, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2, $Outside: true, $Brother: { $Duration: 1000, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==9 %}*/
/*             //Rotate in- out+*/
/*                 { $Duration: 1500, $Zoom: 11, $Rotate: 0.5, $During: { $Left: [0.4, 0.6], $Top: [0.4, 0.6], $Rotate: [0.4, 0.6], $Zoom: [0.4, 0.6] }, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $ScaleHorizontal: 0.3, $ScaleVertical: 0.5, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 1, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==10 %}*/
/*             //Rotate Axis up overlap*/
/*                 { $Duration: 1200, $Rotate: -0.1, $FlyDirection: 5, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $ScaleHorizontal: 0.25, $ScaleVertical: 0.5, $Opacity: 2, $Brother: { $Duration: 1200, $Rotate: 0.1, $FlyDirection: 10, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $ScaleHorizontal: 0.1, $ScaleVertical: 0.7, $Opacity: 2 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==11 %}*/
/*             //Chess Replace TB*/
/*                 { $Duration: 1600, $Rows: 2, $FlyDirection: 1, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, $Rows: 2, $FlyDirection: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==12 %}*/
/*             //Chess Replace LR*/
/*                 { $Duration: 1600, $Cols: 2, $FlyDirection: 8, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, $Cols: 2, $FlyDirection: 4, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==13 %}*/
/*             //Shift TB*/
/*                 { $Duration: 1200, $FlyDirection: 4, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==14 %}*/
/*             //Shift LR*/
/*                 { $Duration: 1200, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==15 %}*/
/*             //Return TB*/
/*                 { $Duration: 1200, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==16 %}*/
/*             //Return LR*/
/*                 { $Duration: 1200, $Delay: 40, $Cols: 6, $FlyDirection: 1, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, $Delay: 40, $Cols: 6, $FlyDirection: 1, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==17 %}*/
/*             //Rotate Axis down*/
/*                 { $Duration: 1500, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4] }, $FlyDirection: 10, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $ScaleHorizontal: 0.1, $ScaleVertical: 0.7, $Opacity: 2, $Brother: { $Duration: 1000, $Rotate: -0.1, $FlyDirection: 5, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $ScaleHorizontal: 0.2, $ScaleVertical: 0.5, $Opacity: 2 } },*/
/*             {% endif %}*/
/*             {% if transaction==1 or transaction==18 %}*/
/*             //Extrude Replace*/
/*                 { $Duration: 1600, $Delay: 40, $Cols: 12, $During: { $Left: [0.4, 0.6] }, $SlideOut: true, $FlyDirection: 2, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $ScaleHorizontal: 0.2, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5 }, $Brother: { $Duration: 1000, $Delay: 40, $Cols: 12, $FlyDirection: 1, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 1028, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $ScaleHorizontal: 0.2, $Opacity: 2, $Round: { $Top: 0.5 } } }*/
/*             {% endif %}*/
/*             ];*/
/*         {% endif %}*/
/*         var options = {*/
/*             $FillMode: {{ fillmode }},*/
/*             $AutoPlay: {{ autoplay }},*/
/*             $AutoPlayInterval: {{ autoplayinterval }}, */
/*             $PauseOnHover: {{ pauseonhover }},*/
/*             $ArrowKeyNavigation: {{ arrowkeynavigation }},*/
/*             $SlideDuration: {{ slideduration }},*/
/*             $MinDragOffsetToSlide: {{ mindragoffset }},*/
/*             $SlideSpacing: {{ slidespacing }},*/
/*             $DragOrientation: {{ dragorientation }},*/
/*             $PlayOrientation: {{ playorientation }},*/
/*             $DisplayPieces: 1, */
/*             $ParkingPosition: 0,*/
/*             $UISearchMode: 1,*/
/* */
/*             {% if transaction != 0 %}*/
/*             $SlideshowOptions: {*/
/*                 $Class: $JssorSlideshowRunner$,*/
/*                 $Transitions: _SlideshowTransitions,*/
/*                 $TransitionsOrder: 0,    */
/*                 $ShowLink: false       */
/*             },*/
/*             {% endif %}*/
/*             $BulletNavigatorOptions: { */
/*                 $Class: $JssorBulletNavigator$, */
/*                 $ChanceToShow: {{ chancetoshow }},*/
/*                 $AutoCenter: {{ autocenter }},*/
/*                 $Orientation: {{ orientation }},*/
/*                 $SpacingX: {{ spacingx }},*/
/*                 $SpacingY: {{ spacingy }},*/
/*                 $Steps: {{ steps }},*/
/*                 $Lanes: {{ lanes }}*/
/*             },*/
/* */
/*             $ArrowNavigatorOptions: { */
/*                 $Class: $JssorArrowNavigator$,*/
/*                 $ChanceToShow: {{ chancetoshowarrow }},*/
/*                 $AutoCenter: {{ autocenterarrow }},*/
/*                 $Steps: {{ stepsarrow }}*/
/*             }*/
/*         };*/
/* */
/*         var jssor_slider1 = new $JssorSlider$("{{ __SELF__ }}", options);*/
/* */
/*         function ScaleSlider() {*/
/*             var bodyWidth = document.body.clientWidth;*/
/*             var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;*/
/*             if (parentWidth)*/
/*                 jssor_slider1.$SetScaleWidth(Math.max(Math.min(parentWidth, bodyWidth-40), 200));*/
/*                                                 // Remove 40 if you want full width slider*/
/*             else*/
/*                 $JssorUtils$.$Delay(ScaleSlider, 30);*/
/*         }*/
/* */
/*         ScaleSlider();*/
/*         $JssorUtils$.$AddEvent(window, "load", ScaleSlider);*/
/* */
/*         if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {*/
/*             $JssorUtils$.$OnWindowResize(window, ScaleSlider);*/
/*         }*/
/*     };*/
/* </script>*/
/* <div id="{{ __SELF__ }}" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: {{ height }}px; overflow: hidden;">*/
/*     <div u="loading" style="position: absolute; top: 0px; left: 0px;">*/
/*         <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">*/
/*         </div>*/
/*         <div class="load" style="position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">*/
/*         </div>*/
/*     </div>*/
/*     <!-- Slides Container -->*/
/*     <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: {{ height }}px; overflow: hidden;">*/
/*         {% for image in slider.images %}*/
/*         <div>*/
/*             <img u="image" src="{{ image.path }}" />*/
/*         </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     <!-- Bullet Navigator Skin Begin -->*/
/*     <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">*/
/*         <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>*/
/*     </div>*/
/*     <!-- Bullet Navigator Skin End -->*/
/*     <!-- Arrow Navigator Skin Begin -->*/
/*     <!-- Arrow Left -->*/
/*     <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;"></span>*/
/*     <!-- Arrow Right -->*/
/*     <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px"></span>*/
/*     <!-- Arrow Navigator Skin End -->*/
/*     <script>*/
/*         document.addEventListener("DOMContentLoaded",function(){*/
/*             jssor_{{ __SELF__ }}_starter('{{ __SELF__ }}');*/
/*         });*/
/*     </script>*/
/* </div>*/
