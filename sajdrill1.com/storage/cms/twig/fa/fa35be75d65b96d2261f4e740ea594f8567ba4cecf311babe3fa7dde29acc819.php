<?php

/* /var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/mag.htm */
class __TwigTemplate_cf6f1a455e1f38134bc02511b2db87bea94521397f37e64554791bae6164cddf extends Twig_Template
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
        echo "<section class=\"container\">
\t<div class=\"sjt-blog-fa\">
\t\t<div class=\"center\">
            <h2>وبلاگ</h2>
            <p class=\"lead\">توضیحاتی در مورد این بخش از سایت و متن کوتاه مرتبط</p>
        </div>
        <div class=\"blog\">
            <div class=\"row\">
                 <div class=\"col-md-8\">
                    <div class=\"blog-item\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-2 text-center\">
                                <div class=\"entry-meta\">
                                    <span id=\"publish_date\">07  NOV</span>
                                    <span><i class=\"fa fa-user\"></i> <a href=\"#\">John Doe</a></span>
                                    <span><i class=\"fa fa-comment\"></i> <a href=\"";
        // line 16
        echo "blog/blog-item";
        echo "\">2 Comments</a></span>
                                    <span><i class=\"fa fa-heart\"></i><a href=\"#\">56 Likes</a></span>
                                </div>
                            </div>
                                
                            <div class=\"col-xs-12 col-sm-10 blog-content\">
                                <a href=\"#\"><img class=\"img-responsive img-blog\" src=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/blog1.jpg");
        echo "\" width=\"100%\" alt=\"\" /></a>
                                <h2><a href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog-item");
        echo "\">Consequat bibendum quam liquam viverra</a></h2>
                                <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>
                                <a class=\"btn btn-primary readmore\" href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog-item");
        echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                    <div class=\"blog-item\">
                        <div class=\"row\">
                             <div class=\"col-sm-2 text-center\">
                                <div class=\"entry-meta\"> 
                                    <span id=\"publish_date\">07  NOV</span>
                                    <span><i class=\"fa fa-user\"></i> <a href=\"#\">John Doe</a></span>
                                    <span><i class=\"fa fa-comment\"></i> <a href=\"";
        // line 36
        echo "blog/blog-item";
        echo "\">2 Comments</a></span>
                                    <span><i class=\"fa fa-heart\"></i><a href=\"#\">56 Likes</a></span>
                                </div>
                            </div>
                            <div class=\"col-sm-10 blog-content\">
                                <a href=\"\"><img class=\"img-responsive img-blog\" src=\"";
        // line 41
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/blog2.jpg");
        echo "\" width=\"100%\" alt=\"\" /></a>
                                <h2><a href=\"";
        // line 42
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog-item");
        echo "\">Consequat bibendum quam liquam viverra</a></h2>
                                <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>
                                <a class=\"btn btn-primary readmore\" href=\"";
        // line 44
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog-item");
        echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                    <ul class=\"pagination pagination-lg\">
                        <li><a href=\"#\"><i class=\"fa fa-long-arrow-left\"></i>Previous Page</a></li>
                        <li class=\"active\"><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Next Page<i class=\"fa fa-long-arrow-right\"></i></a></li>
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Search Here\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget categories\">
                        <h3>Recent Comments</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
                                    <img src=\"";
        // line 72
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/avatar3.png");
        echo "\" alt=\"\"  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span> <span>On <a href=\"#\">Creative</a></span>
                                    </div>
                                </div>
                                <div class=\"single_comments\">
                                    <img src=\"";
        // line 79
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/avatar3.png");
        echo "\" alt=\"\"  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span><span>On <a href=\"#\">Creative</a></span>
                                    </div>
                                </div>
                                <div class=\"single_comments\">
                                    <img src=\"";
        // line 86
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/avatar3.png");
        echo "\" alt=\"\"  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span><span>On <a href=\"#\">Creative</a></span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     

                    <div class=\"widget categories\">
                        <h3>Categories</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                ";
        // line 102
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 103
        echo "                            </div>
                        </div>                     
                    </div><!--/.categories-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget archieve\">
                        <h3>Archieve</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <ul class=\"blog_archieve\">
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> December 2013 <span class=\"pull-right\">(97)</span></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> November 2013 <span class=\"pull-right\">(32)</span></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> October 2013 <span class=\"pull-right\">(19)</span></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> September 2013 <span class=\"pull-right\">(08)</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
    \t\t\t\t
                    <div class=\"widget tags\">
                        <h3>Tag Cloud</h3>
                        <ul class=\"tag-cloud\">
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Apple</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Barcelona</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Office</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Ipod</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Stock</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Race</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">London</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Football</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Porche</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Gadgets</a></li>
                        </ul>
                    </div><!--/.tags-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget blog_gallery\">
                        <h3>Our Gallery</h3>
                        <ul class=\"sidebar-gallery\">
                            <li><a href=\"#\"><img src=\"";
        // line 140
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery1.png");
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 141
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery2.png");
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 142
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery3.png");
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 143
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery4.png");
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 144
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery5.png");
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 145
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery6.png");
        echo "\" alt=\"\" /></a></li>
                        </ul>
                    </div><!--/.blog_gallery-->
    \t\t\t</aside>  
            </div><!--/.row-->
        </div>
\t</div>
        
        <div>
            <div class=\"row\">";
        // line 154
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>
        </div>
        <div class=\"center\">
            <h2>Blogs</h2>
            <p class=\"lead\">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
        </div>
<div class=\"sjt-blog-en\">
        <div class=\"blog\">
            <div class=\"row\">
                 <div class=\"col-md-8\">
                    <div class=\"blog-item\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-2 text-center\">
                                <div class=\"entry-meta\">
                                    <span id=\"publish_date\">07  NOV</span>
                                    <span><i class=\"fa fa-user\"></i> <a href=\"#\">John Doe</a></span>
                                    <span><i class=\"fa fa-comment\"></i> <a href=\"";
        // line 170
        echo "blog/blog-item";
        echo "\">2 Comments</a></span>
                                    <span><i class=\"fa fa-heart\"></i><a href=\"#\">56 Likes</a></span>
                                </div>
                            </div>
                                
                            <div class=\"col-xs-12 col-sm-10 blog-content\">
                                <a href=\"#\"><img class=\"img-responsive img-blog\" src=\"";
        // line 176
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/blog1.jpg");
        echo "\" width=\"100%\" alt=\"\" /></a>
                                <h2><a href=\"";
        // line 177
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog-item");
        echo "\">Consequat bibendum quam liquam viverra</a></h2>
                                <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>
                                <a class=\"btn btn-primary readmore\" href=\"";
        // line 179
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog-item");
        echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                    <div class=\"blog-item\">
                        <div class=\"row\">
                             <div class=\"col-sm-2 text-center\">
                                <div class=\"entry-meta\"> 
                                    <span id=\"publish_date\">07  NOV</span>
                                    <span><i class=\"fa fa-user\"></i> <a href=\"#\">John Doe</a></span>
                                    <span><i class=\"fa fa-comment\"></i> <a href=\"";
        // line 190
        echo "blog/blog-item";
        echo "\">2 Comments</a></span>
                                    <span><i class=\"fa fa-heart\"></i><a href=\"#\">56 Likes</a></span>
                                </div>
                            </div>
                            <div class=\"col-sm-10 blog-content\">
                                <a href=\"\"><img class=\"img-responsive img-blog\" src=\"";
        // line 195
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/blog2.jpg");
        echo "\" width=\"100%\" alt=\"\" /></a>
                                <h2><a href=\"";
        // line 196
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog-item");
        echo "\">Consequat bibendum quam liquam viverra</a></h2>
                                <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>
                                <a class=\"btn btn-primary readmore\" href=\"";
        // line 198
        echo $this->env->getExtension('CMS')->pageFilter("blog/blog-item");
        echo "\">Read More <i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                    <ul class=\"pagination pagination-lg\">
                        <li><a href=\"#\"><i class=\"fa fa-long-arrow-left\"></i>Previous Page</a></li>
                        <li class=\"active\"><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Next Page<i class=\"fa fa-long-arrow-right\"></i></a></li>
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        ";
        // line 216
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("searchForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 217
        echo "                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Search Here\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget categories\">
                        <h3>Recent Comments</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
                                    <img src=\"";
        // line 227
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/avatar3.png");
        echo "\" alt=\"\"  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span> <span>On <a href=\"#\">Creative</a></span>
                                    </div>
                                </div>
                                <div class=\"single_comments\">
                                    <img src=\"";
        // line 234
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/avatar3.png");
        echo "\" alt=\"\"  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span><span>On <a href=\"#\">Creative</a></span>
                                    </div>
                                </div>
                                <div class=\"single_comments\">
                                    <img src=\"";
        // line 241
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/avatar3.png");
        echo "\" alt=\"\"  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span><span>On <a href=\"#\">Creative</a></span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     

                    <div class=\"widget categories\">
                        <h3>Categories</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                ";
        // line 257
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 258
        echo "                            </div>
                        </div>                     
                    </div><!--/.categories-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget archieve\">
                        <h3>Archieve</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <ul class=\"blog_archieve\">
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> December 2013 <span class=\"pull-right\">(97)</span></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> November 2013 <span class=\"pull-right\">(32)</span></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> October 2013 <span class=\"pull-right\">(19)</span></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> September 2013 <span class=\"pull-right\">(08)</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
    \t\t\t\t
                    <div class=\"widget tags\">
                        <h3>Tag Cloud</h3>
                        <ul class=\"tag-cloud\">
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Apple</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Barcelona</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Office</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Ipod</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Stock</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Race</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">London</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Football</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Porche</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Gadgets</a></li>
                        </ul>
                    </div><!--/.tags-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget blog_gallery\">
                        <h3>Our Gallery</h3>
                        ";
        // line 294
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("gallery"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 295
        echo "                        <ul class=\"sidebar-gallery\">
                            <li><a href=\"#\">
                                <img src=\"";
        // line 297
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery1.png");
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 298
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery2.png");
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 299
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery3.png");
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 300
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery4.png");
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 301
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery5.png");
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 302
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/blog/gallery6.png");
        echo "\" alt=\"\" /></a></li>
                        </ul>
                    </div><!--/.blog_gallery-->
    \t\t\t</aside>  
            </div><!--/.row-->
        </div>
        </div>
    </section><!--/#blog-->";
    }

    public function getTemplateName()
    {
        return "/var/www/www-sajdrill-com/public_html/themes/jtherczeg-corlate/pages/mag.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 302,  442 => 301,  438 => 300,  434 => 299,  430 => 298,  426 => 297,  422 => 295,  418 => 294,  380 => 258,  376 => 257,  357 => 241,  347 => 234,  337 => 227,  325 => 217,  321 => 216,  300 => 198,  295 => 196,  291 => 195,  283 => 190,  269 => 179,  264 => 177,  260 => 176,  251 => 170,  230 => 154,  218 => 145,  214 => 144,  210 => 143,  206 => 142,  202 => 141,  198 => 140,  159 => 103,  155 => 102,  136 => 86,  126 => 79,  116 => 72,  85 => 44,  80 => 42,  76 => 41,  68 => 36,  54 => 25,  49 => 23,  45 => 22,  36 => 16,  19 => 1,);
    }
}
/* <section class="container">*/
/* 	<div class="sjt-blog-fa">*/
/* 		<div class="center">*/
/*             <h2>وبلاگ</h2>*/
/*             <p class="lead">توضیحاتی در مورد این بخش از سایت و متن کوتاه مرتبط</p>*/
/*         </div>*/
/*         <div class="blog">*/
/*             <div class="row">*/
/*                  <div class="col-md-8">*/
/*                     <div class="blog-item">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-12 col-sm-2 text-center">*/
/*                                 <div class="entry-meta">*/
/*                                     <span id="publish_date">07  NOV</span>*/
/*                                     <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>*/
/*                                     <span><i class="fa fa-comment"></i> <a href="{{ 'blog/blog-item' }}">2 Comments</a></span>*/
/*                                     <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                                 */
/*                             <div class="col-xs-12 col-sm-10 blog-content">*/
/*                                 <a href="#"><img class="img-responsive img-blog" src="{{ 'assets/images/blog/blog1.jpg'|theme }}" width="100%" alt="" /></a>*/
/*                                 <h2><a href="{{ 'blog/blog-item'|page }}">Consequat bibendum quam liquam viverra</a></h2>*/
/*                                 <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>*/
/*                                 <a class="btn btn-primary readmore" href="{{ 'blog/blog-item'|page }}">Read More <i class="fa fa-angle-right"></i></a>*/
/*                             </div>*/
/*                         </div>    */
/*                     </div><!--/.blog-item-->*/
/*                         */
/*                     <div class="blog-item">*/
/*                         <div class="row">*/
/*                              <div class="col-sm-2 text-center">*/
/*                                 <div class="entry-meta"> */
/*                                     <span id="publish_date">07  NOV</span>*/
/*                                     <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>*/
/*                                     <span><i class="fa fa-comment"></i> <a href="{{ 'blog/blog-item' }}">2 Comments</a></span>*/
/*                                     <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-10 blog-content">*/
/*                                 <a href=""><img class="img-responsive img-blog" src="{{ 'assets/images/blog/blog2.jpg'|theme }}" width="100%" alt="" /></a>*/
/*                                 <h2><a href="{{ 'blog/blog-item'|page }}">Consequat bibendum quam liquam viverra</a></h2>*/
/*                                 <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>*/
/*                                 <a class="btn btn-primary readmore" href="{{ 'blog/blog-item'|page }}">Read More <i class="fa fa-angle-right"></i></a>*/
/*                             </div>*/
/*                         </div>    */
/*                     </div><!--/.blog-item-->*/
/*                         */
/*                     <ul class="pagination pagination-lg">*/
/*                         <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>*/
/*                         <li class="active"><a href="#">1</a></li>*/
/*                         <li><a href="#">2</a></li>*/
/*                         <li><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>*/
/*                     </ul><!--/.pagination-->*/
/*                 </div><!--/.col-md-8-->*/
/* */
/*                 <aside class="col-md-4">*/
/*                     <div class="widget search">*/
/*                         <form role="form">*/
/*                                 <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">*/
/*                         </form>*/
/*                     </div><!--/.search-->*/
/*     				*/
/*     				<div class="widget categories">*/
/*                         <h3>Recent Comments</h3>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-12">*/
/*                                 <div class="single_comments">*/
/*                                     <img src="{{ 'assets/images/blog/avatar3.png'|theme }}" alt=""  />*/
/*                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>*/
/*                                     <div class="entry-meta small muted">*/
/*                                         <span>By <a href="#">Alex</a></span> <span>On <a href="#">Creative</a></span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_comments">*/
/*                                     <img src="{{ 'assets/images/blog/avatar3.png'|theme }}" alt=""  />*/
/*                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>*/
/*                                     <div class="entry-meta small muted">*/
/*                                         <span>By <a href="#">Alex</a></span><span>On <a href="#">Creative</a></span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_comments">*/
/*                                     <img src="{{ 'assets/images/blog/avatar3.png'|theme }}" alt=""  />*/
/*                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>*/
/*                                     <div class="entry-meta small muted">*/
/*                                         <span>By <a href="#">Alex</a></span><span>On <a href="#">Creative</a></span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                             </div>*/
/*                         </div>                     */
/*                     </div><!--/.recent comments-->*/
/*                      */
/* */
/*                     <div class="widget categories">*/
/*                         <h3>Categories</h3>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6">*/
/*                                 {% component 'blogCategories' %}*/
/*                             </div>*/
/*                         </div>                     */
/*                     </div><!--/.categories-->*/
/*     				*/
/*     				<div class="widget archieve">*/
/*                         <h3>Archieve</h3>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-12">*/
/*                                 <ul class="blog_archieve">*/
/*                                     <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>*/
/*                                     <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</span></a></li>*/
/*                                     <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span class="pull-right">(19)</span></a></li>*/
/*                                     <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span class="pull-right">(08)</span></a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>                     */
/*                     </div><!--/.archieve-->*/
/*     				*/
/*                     <div class="widget tags">*/
/*                         <h3>Tag Cloud</h3>*/
/*                         <ul class="tag-cloud">*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">London</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>*/
/*                         </ul>*/
/*                     </div><!--/.tags-->*/
/*     				*/
/*     				<div class="widget blog_gallery">*/
/*                         <h3>Our Gallery</h3>*/
/*                         <ul class="sidebar-gallery">*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery1.png'|theme }}" alt="" /></a></li>*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery2.png'|theme }}" alt="" /></a></li>*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery3.png'|theme }}" alt="" /></a></li>*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery4.png'|theme }}" alt="" /></a></li>*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery5.png'|theme }}" alt="" /></a></li>*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery6.png'|theme }}" alt="" /></a></li>*/
/*                         </ul>*/
/*                     </div><!--/.blog_gallery-->*/
/*     			</aside>  */
/*             </div><!--/.row-->*/
/*         </div>*/
/* 	</div>*/
/*         */
/*         <div>*/
/*             <div class="row">{% component 'blogPosts' %}</div>*/
/*         </div>*/
/*         <div class="center">*/
/*             <h2>Blogs</h2>*/
/*             <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>*/
/*         </div>*/
/* <div class="sjt-blog-en">*/
/*         <div class="blog">*/
/*             <div class="row">*/
/*                  <div class="col-md-8">*/
/*                     <div class="blog-item">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-12 col-sm-2 text-center">*/
/*                                 <div class="entry-meta">*/
/*                                     <span id="publish_date">07  NOV</span>*/
/*                                     <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>*/
/*                                     <span><i class="fa fa-comment"></i> <a href="{{ 'blog/blog-item' }}">2 Comments</a></span>*/
/*                                     <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                                 */
/*                             <div class="col-xs-12 col-sm-10 blog-content">*/
/*                                 <a href="#"><img class="img-responsive img-blog" src="{{ 'assets/images/blog/blog1.jpg'|theme }}" width="100%" alt="" /></a>*/
/*                                 <h2><a href="{{ 'blog/blog-item'|page }}">Consequat bibendum quam liquam viverra</a></h2>*/
/*                                 <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>*/
/*                                 <a class="btn btn-primary readmore" href="{{ 'blog/blog-item'|page }}">Read More <i class="fa fa-angle-right"></i></a>*/
/*                             </div>*/
/*                         </div>    */
/*                     </div><!--/.blog-item-->*/
/*                         */
/*                     <div class="blog-item">*/
/*                         <div class="row">*/
/*                              <div class="col-sm-2 text-center">*/
/*                                 <div class="entry-meta"> */
/*                                     <span id="publish_date">07  NOV</span>*/
/*                                     <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>*/
/*                                     <span><i class="fa fa-comment"></i> <a href="{{ 'blog/blog-item' }}">2 Comments</a></span>*/
/*                                     <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-10 blog-content">*/
/*                                 <a href=""><img class="img-responsive img-blog" src="{{ 'assets/images/blog/blog2.jpg'|theme }}" width="100%" alt="" /></a>*/
/*                                 <h2><a href="{{ 'blog/blog-item'|page }}">Consequat bibendum quam liquam viverra</a></h2>*/
/*                                 <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>*/
/*                                 <a class="btn btn-primary readmore" href="{{ 'blog/blog-item'|page }}">Read More <i class="fa fa-angle-right"></i></a>*/
/*                             </div>*/
/*                         </div>    */
/*                     </div><!--/.blog-item-->*/
/*                         */
/*                     <ul class="pagination pagination-lg">*/
/*                         <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>*/
/*                         <li class="active"><a href="#">1</a></li>*/
/*                         <li><a href="#">2</a></li>*/
/*                         <li><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>*/
/*                     </ul><!--/.pagination-->*/
/*                 </div><!--/.col-md-8-->*/
/* */
/*                 <aside class="col-md-4">*/
/*                     <div class="widget search">*/
/*                         {% component 'searchForm' %}*/
/*                         <form role="form">*/
/*                                 <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">*/
/*                         </form>*/
/*                     </div><!--/.search-->*/
/*     				*/
/*     				<div class="widget categories">*/
/*                         <h3>Recent Comments</h3>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-12">*/
/*                                 <div class="single_comments">*/
/*                                     <img src="{{ 'assets/images/blog/avatar3.png'|theme }}" alt=""  />*/
/*                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>*/
/*                                     <div class="entry-meta small muted">*/
/*                                         <span>By <a href="#">Alex</a></span> <span>On <a href="#">Creative</a></span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_comments">*/
/*                                     <img src="{{ 'assets/images/blog/avatar3.png'|theme }}" alt=""  />*/
/*                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>*/
/*                                     <div class="entry-meta small muted">*/
/*                                         <span>By <a href="#">Alex</a></span><span>On <a href="#">Creative</a></span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_comments">*/
/*                                     <img src="{{ 'assets/images/blog/avatar3.png'|theme }}" alt=""  />*/
/*                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>*/
/*                                     <div class="entry-meta small muted">*/
/*                                         <span>By <a href="#">Alex</a></span><span>On <a href="#">Creative</a></span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                             </div>*/
/*                         </div>                     */
/*                     </div><!--/.recent comments-->*/
/*                      */
/* */
/*                     <div class="widget categories">*/
/*                         <h3>Categories</h3>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6">*/
/*                                 {% component 'blogCategories' %}*/
/*                             </div>*/
/*                         </div>                     */
/*                     </div><!--/.categories-->*/
/*     				*/
/*     				<div class="widget archieve">*/
/*                         <h3>Archieve</h3>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-12">*/
/*                                 <ul class="blog_archieve">*/
/*                                     <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>*/
/*                                     <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</span></a></li>*/
/*                                     <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span class="pull-right">(19)</span></a></li>*/
/*                                     <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span class="pull-right">(08)</span></a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>                     */
/*                     </div><!--/.archieve-->*/
/*     				*/
/*                     <div class="widget tags">*/
/*                         <h3>Tag Cloud</h3>*/
/*                         <ul class="tag-cloud">*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">London</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>*/
/*                             <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>*/
/*                         </ul>*/
/*                     </div><!--/.tags-->*/
/*     				*/
/*     				<div class="widget blog_gallery">*/
/*                         <h3>Our Gallery</h3>*/
/*                         {% component 'gallery' %}*/
/*                         <ul class="sidebar-gallery">*/
/*                             <li><a href="#">*/
/*                                 <img src="{{ 'assets/images/blog/gallery1.png'|theme }}" alt="" /></a></li>*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery2.png'|theme }}" alt="" /></a></li>*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery3.png'|theme }}" alt="" /></a></li>*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery4.png'|theme }}" alt="" /></a></li>*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery5.png'|theme }}" alt="" /></a></li>*/
/*                             <li><a href="#"><img src="{{ 'assets/images/blog/gallery6.png'|theme }}" alt="" /></a></li>*/
/*                         </ul>*/
/*                     </div><!--/.blog_gallery-->*/
/*     			</aside>  */
/*             </div><!--/.row-->*/
/*         </div>*/
/*         </div>*/
/*     </section><!--/#blog-->*/
