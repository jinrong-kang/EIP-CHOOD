

Our website using Codeigniter Framework to develop, So this README file shows how to add our website files to Codeigniter Framework.

step 1:
  Framework: downlaod the Codeigniter Framework.
step 2:
  Database: execute the "chood.sql" file to create database tables.
step 3:
  File structure: 
  1.in the "Chood/application" folder:
    1).modify the "config/database.php" to config database environment;
    2).add the "config/twig.php" file to support multiple language.
    3).add "controllers/Article.php" file and "controllers/User.php" file for Controller module.
    4). add "views/article" folder fro View module.
    5). add "models/Article_model.php" file and "models/User_model.php" file to support database manipulation.
    6). add "third_party/Twig" folder to support Twig Framework.

  2.in the "Chood/resource" folder:
    add css, js, images file for Html file.

  3.in the "Chood/uploads" folder:
    1. user's upload JPG images.
    2. "thumb_imgs" folder include all thumb images corresponding every user's images in "uploads" folder.

  4.in the "Chood/images” folder:
    includes the images of UI.


