<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>
    <!-- Include the x3dom JavaScript -->
    <script type='text/javascript' src='js/x3dom.js'></script>

    <link rel="stylesheet" href="css/custom.css">

    <script src="https://kit.fontawesome.com/0c6fae9c3e.js" crossorigin="anonymous"></script>

    <title>Coca Cola Journey</title>
</head>
<body id="bodyColor">
<nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
    <div class="container-fluid">
        <!--Brand -->
        <div class="logo">
            <a class="navbar-brand" id ="navHome" href="#">
                <h1>1</h1>
                <h1>oca</h1>
                <h2>Cola</h2>
                <h3>Journey</h3>
                <p>Refreshing the world, one story at a time</p>
            </a>
        </div>


        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!--Links-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a id ="navHome" class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover"
                       data-placement="bottom" title="About, Statement, References"
                       data-content="Find Statement of Originality and References here...">About</a>
                </li>

                <!--Dropdown-->
                <li class="nav-item">
                    <a id="navModels" class="nav-link"  href="#" data-toggle="popover"
                       data-trigger="hover" data-placement="bottom" title="X3D Models"
                       data-content="There are three X3D models: Coke, Sprite and Dr. Pepper">Models</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <!-- Home page block element -->
    <div class="main_contents" id="home">
        <div class="row">
            <div class="col-sm-12">
                <div id="main_3d_image" class="img-fluid d-flex align-items-center justify-content-center">
                    <div id="main_text" class="col-xs-12">
                        <div id="title_home"></div>
                        <div id="subTitle_home"></div>
                        <div id="description_home"></div>
                    </div>
                </div>
                <div class="text-center">
                    <p> Coca Cola background image from <a href="https://thebrandhopper.com/2023/04/01/marketing-mix-and-porters-five-forces-of-coca-cola/">The Brand Hopper</a></p>
                </div>
            </div>
        </div>

        <ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-coke-tab" data-toggle="pill" href="#pills-coke" role="tab" aria-controls="pills-coke" aria-selected="true">Coke</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-sprite-tab" data-toggle="pill" href="#pills-sprite" role="tab" aria-controls="pills-sprite" aria-selected="false">Sprite</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-pepper-tab" data-toggle="pill" href="#pills-pepper" role="tab" aria-controls="pills-pepper" aria-selected="false">Dr. Pepper</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <!--Cola Column-->
            <div class="tab-pane fade show active" id="pills-coke" role="tabpanel" aria-labelledby="pills-coke-tab">
                    <div class="card cola-card drinks-card mx-auto">
                        <div class="row no-gutters">
                            <div class="col-sm-5 my-auto">
                                <img class="card-img-top img-fluid img-thumbnail" src="assets/images/coca_cola.jpg" alt="Coca Cola">
                            </div>
                            <div class="col-sm-7 my-auto">
                                <div class="card-body">
                                    <div id="title_left" class="card-title homeText"></div>
                                    <div id="subTitle_left" class="card-subtitle homeText"></div>
                                    <div id="description_left" class="card-text homeText"></div>
                                    <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola"
                                       class="btn btn-danger">Find out more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!--Sprite Column-->
            <div class="tab-pane fade" id="pills-sprite" role="tabpanel" aria-labelledby="pills-sprite-tab">
                <div class="card sprite-card drinks-card mx-auto">
                    <div class="row no-gutters">
                        <div class="col-sm-5 my-auto">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/sprite.jpg" alt="Sprite">
                        </div>
                        <div class="col-sm-7 my-auto">
                            <div class="card-body">
                                <div id="title_centre" class="card-title homeText"></div>
                                <div id="subTitle_centre" class="card-subtitle homeText"></div>
                                <div id="description_centre" class="card-text homeText"></div>
                                <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite"
                                   class="btn btn-success">Find out more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Dr Pepper-->
            <div class="tab-pane fade" id="pills-pepper" role="tabpanel" aria-labelledby="pills-pepper-tab">
                <div class="card pepper-card drinks-card mx-auto">
                    <div class="row no-gutters">
                        <div class="col-sm-5 my-auto">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/dr_pepper.jpg" alt="Dr Pepper">
                        </div>
                        <div class="col-sm-7 my-auto">
                            <div class="card-body">
                                <div id="title_right" class="card-title homeText"></div>
                                <div id="subTitle_right" class="card-subtitle homeText"></div>
                                <div id="description_right" class="card-text homeText"></div>
                                <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper"
                                   class="btn btn-dark">Find out more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        </div>

    <div id="about">
        <h3 class="text-center">About</h3>
        <p class="text-center">3D Apps is a final year and postgraduate module about creating a
        'responsive and mobile first Web 3D application' (3D App), where a user is able to manipulate 3D objects using
        X3DOM. Most of this website is adopted from the
        <a href="http://users.sussex.ac.uk/~martinwh/3dapp/labs/">Live Feedback Site</a>.</p>

        <h3 class="text-center">Statement of Originality</h3>
        <p class="text-center">These web pages are submitted as part requirement for the degree of
        Computing for Digital Media at the University of Sussex.  They are the product of my own labour except where
        indicated in the web page content. These web pages or contents may be freely copied and distributed provided
        the source is acknowledged.</p>

        <h3 class="text-center">References</h3>
        <p class="text-center"> Coca Cola background image on home screen from
        <a href="https://thebrandhopper.com/2023/04/01/marketing-mix-and-porters-five-forces-of-coca-cola/">
        The Brand Hopper</a></p>

        <p class="text-center">Fadeaway tabs from <a href="https://getbootstrap.com/docs/4.4/components/navs/">Bootstrap documentation</a></p>

        <p class="text-center">Texture changing on X3D Models from <a href="https://benskitchen.com/x3dom/cubetex.php">Ben's Kitchen</a></p>

        <p class="text-center">Collapsable button groups from <a href="https://getbootstrap.com/docs/4.0/components/collapse/">Bootstrap documentation</a></p>

        <p class="text-center">Javascript lightbox from <a href="https://fslightbox.com/">fslightbox</a></p>


    </div>

    <!--x3d models & 3d image gallery-->
    <div id="models" class="main_contents">
        <!--row for the two cards-->
        <div class="row">
            <!--x3d model-->
            <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- X3D Models -->
                        <div>
                            <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                            <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                            <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                            <div id="x3dModelTitle_fanta" class="card-title drinksText"></div>

                            <div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="cameraDropdown" aria-haspopup="true" aria-expanded="false">
                                        Cameras
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="cameraDropdown">
                                        <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                        <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                        <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                        <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                        <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                        <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" id="animationDropdown" aria-haspopup="true" aria-expanded="false">
                                        Animation
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="animationDropdown">
                                        <a class="dropdown-item" href="#" onclick="spinX();">RotX</a>
                                        <a class="dropdown-item" href="#" onclick="spinY();">RotY</a>
                                        <a class="dropdown-item" href="#" onclick="spinZ();">RotZ</a>
                                        <a class="dropdown-item" href="#" onclick="stopRotation();">Stop</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="renderDropdown" aria-haspopup="true" aria-expanded="false">
                                        Render
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="renderDropdown">
                                        <a class="dropdown-item" href="#" onclick="poly();">Polygon</a>
                                        <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                        <a class="dropdown-item" href="#" onclick="vertex();">Vertex</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Place the X3D code here -->
                            <div class="model3D">
                                <x3d id="wire">
                                    <scene>
                                        <Switch whichChoice="0" id='SceneSwitch'>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="spinX();" url="./assets/x3d/cokecan.x3d" > </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="spinX();" url="./assets/x3d/sprite.x3d"> </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="spinX();" url="./assets/x3d/pepper.x3d"> </inline>
                                            </transform>
                                        </Switch>
                                    </scene>
                                </x3d>
                            </div>
                            <div>
                                <button type="button" class="btn btn-danger btn-responsive" data-toggle="collapse" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                                <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                                <button type="button" class="btn btn-dark btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Dr. Pepper</button>
                                <button type="button" class="btn btn-warning btn-responsive" onMouseUp="texChange(); fantaDescription();">Switch Textures (Fanta)</button>
                            </div>
                            <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                            <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                            <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                            <div id="x3dCreationMethod_fanta" class="card-text drinksText"></div>
                        </div>
                    </div>
                </div>
                <div id ="cokeDescription" class="row">
                    <div class="col-sm-12">
                        <div class="card cola-card">
                            <div class="card-body">
                                <div id="title_coke" class="card-title"></div>
                                <div id="subTitle_coke" class="card-subtitle"></div>
                                <div id="description_coke" class="card-text"></div>
                                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-danger">Find out more...</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id ="spriteDescription" class="row">
                    <div class="col-sm-12">
                        <div class="card sprite-card">
                            <div class="card-body">
                                <div id="title_sprite" class="card-title"></div>
                                <div id="subTitle_sprite" class="card-subtitle"></div>
                                <div id="description_sprite" class="card-text"></div>
                                <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-success">Find out more...</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id ="pepperDescription" class="row">
                    <div class="col-sm-12">
                        <div class="card pepper-card">
                            <div class="card-body">
                                <div id="title_pepper" class="card-title"></div>
                                <div id="subTitle_pepper" class="card-subtitle"></div>
                                <div id="description_pepper" class="card-text"></div>
                                <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-dark">Find out more...</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id ="fantaDescription" class="row">
                        <div class="col-sm-12">
                            <div class="card fanta-card">
                                <div class="card-body">
                                    <div id="title_fanta" class="card-title"></div>
                                    <div id="subTitle_fanta" class="card-subtitle"></div>
                                    <div id="description_fanta" class="card-text"></div>
                                    <a href="https://www.coca-cola.co.uk/brands/fanta" class="btn btn-warning">Find out more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <!--X3D Controls-->
            <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header">
                        Interaction
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">X3D Model Controls</h4>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Cameras
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="card-Title drinksText">
                                            <h3>Camera Views</h3>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-outline-success btn-responsive" onclick="cameraFront();">Front</button>
                                            <button type="button" class="btn btn-outline-primary btn-responsive" onclick="cameraBack();">Back</button>
                                            <button type="button" class="btn btn-outline-info btn-responsive" onclick="cameraLeft();">Left</button>
                                            <button type="button" class="btn btn-outline-warning btn-responsive" onclick="cameraRight();">Right</button>
                                            <button type="button" class="btn btn-outline-danger btn-responsive" onclick="cameraTop();">Top</button>
                                            <button type="button" class="btn btn-outline-secondary btn-responsive" onclick="cameraBottom();">Bottom</button>
                                        </div>
                                        <div class="card-text drinksText">
                                            <p>These buttons select a limited range of X3D model viewpoints.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Animation
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="card-Title drinksText">
                                            <h3>Animation Options</h3>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary btn-responsive" onclick="spinX();">RotX</button>
                                        <button type="button" class="btn btn-outline-success btn-responsive" onclick="spinY();">RotY</button>
                                        <button type="button" class="btn btn-outline-info btn-responsive" onclick="spinZ();">RotZ</button>
                                        <button type="button" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</button>
                                        <div class="card-text drinksText">
                                            <p>These buttons select a range of X3D animation options</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Rendering
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="card-Title drinksText">
                                            <h3>Render Options</h3>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-outline-success btn-responsive" onclick="poly();">Polygon</button>
                                            <button type="button" class="btn btn-outline-primary btn-responsive" onclick="wireframe();">Wireframe</button>
                                            <button type="button" class="btn btn-outline-info btn-responsive" onclick="vertex();">Vertex</button>
                                        </div>
                                        <div class="card-text drinksText">
                                            <p>These buttons select a limited number of render options.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Gallery
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center">3D Image Gallery</h4>
                        <!- - Dynamically generated gallery- ->
                        <div class="gallery align-items-center" id="gallery"></div>
                        <p class="card-text">3D images rendered in Cinema 4D, Javascript lightbox from <a href="https://fslightbox.com/">fslightbox</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav id="footerColor" class="navbar navbar-expand-sm footer">
    <div class="container-fluid">
        <div class="float-left copyright">
            <p><span class="align-baseline"></span>&copy 2023 Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></p>
        </div>
        <div class="social">
            <p><span class="align-baseline"></span>Github link to models: <a href="https://github.com/rietse/3D-Web-App/tree/main/3dmodels"><i class="fab fa-github-square fa-2x"></i></a></p>
        </div>
    </div>
</nav>

<div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">3D App Contact Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <p>Dr Martin White, Chichester 1, 126, Email: m.white@sussex.ac.uk</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  ></script>
-->
<script
        src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
<script type='text/javascript' src="js/custom.js"></script>

<!-- JavaScript and PHP based Gallery generator  -->
<script src="js/gallery_generator.js"></script>

<!-- JavaScript to swap for SPA and restyle -->
<script src="js/swap_restyle.js"></script>

<script src="js/getJsonData.js"></script>

<script src="js/modelInteraction.js"></script>

<script src="js/fslightbox.js"></script>

</body>
</html>
