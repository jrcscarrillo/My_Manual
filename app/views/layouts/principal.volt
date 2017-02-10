<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        {{ get_title() }}
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="http://ventasloscoqueiros.com/css/demo.css">
        <link rel="stylesheet" href="http://ventasloscoqueiros.com/css/sky-forms-ie8.css">
        <link rel="stylesheet" href="http://ventasloscoqueiros.com/css/sky-forms-blue.css">
        <link rel="stylesheet" href="http://ventasloscoqueiros.com/css/sky-forms.css">
        <link rel="stylesheet" href="http://ventasloscoqueiros.com/css/footer.css">
    </head>
    <body class="bg-blue" id="cuerpito">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">CarrillosTeam</a>
                </div>

            </div>
        </nav>        
{% block cuerpo %}{% endblock %}
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 footerleft ">
                        <div class="logofooter"><img src="http://ventasloscoqueiros.com/img/Carrillos_Team_logo.jpg"></div>
                        <p>I am a facilitator, my job is to support everyone to accomplish their objectives, and to create an environment, where; every participant has the opportunity to collaborate, innovate, and excel.</p>
                        <p><i class="fa fa-map-pin"></i> 237 N Lexington Pkwy, DeForest, Wisconsin -        53532, USA</p>
                        <p><i class="fa fa-phone"></i> Phone (USA) : +1 608 473 4446</p>
                        <p><i class="fa fa-envelope"></i> E-mail : info@carrillosteam.com</p>

                    </div>
                    <div class="col-md-2 col-sm-6 paddingtop-bottom">
                        <h6 class="heading7">GENERAL LINKS</h6>
                        <ul class="footer-ul">
                            <li><a href="#"> Career</a></li>
                            <li><a href="#"> Privacy Policy</a></li>
                            <li><a href="#"> Terms & Conditions</a></li>
                            <li><a href="#"> Client Gateway</a></li>
                            <li><a href="#"> Ranking</a></li>
                            <li><a href="#"> Case Studies</a></li>
                            <li><a href="#"> Frequently Ask Questions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 paddingtop-bottom">
                        <h6 class="heading7"></h6>
                        <ul class="footer-ul">
                        <li><a href="#">webenlance.com</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Faq's</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 paddingtop-bottom">
                        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer start from here-->

        <div class="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p>© 2017 - All Rights with CarrillosTeam</p>
                </div>
            </div>
        </div>
        <script src="https://use.fontawesome.com/3b0b538fb9.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>        
        <script src="http://ventasloscoqueiros.com/js/jquery.form.min.js"></script>  
        <script src="http://ventasloscoqueiros.com/js/jquery.maskedinput.min.js"></script>  
        <script src="http://ventasloscoqueiros.com/js/jquery.modal.js"></script>  
        <script src="http://ventasloscoqueiros.com/js/jquery.validate.min.js"></script>  
        <!--[if lt IE 10]>
                <script src="http://ventasloscoqueiros.com/js/jquery.placeholder.min.js"></script>
        <![endif]-->		
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="http://ventasloscoqueiros.com/js/sky-forms-ie8.js"></script>
        <![endif]-->        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
