
Instruction for how to add my website files to Codeigniter Framework.
step 1:
	Framework: downlaod the Codeigniter Framework.
step 2:
	Database: execute the "chood.sql" file to create database tables.
step 3:
	File structure: 
	in the "Chood/application" folder:
		1. modify the "config/database.php" to config database environment;
		2. add the "config/twig.php" file to support multiple language.
		3. add "controllers/Article.php" file and "controllers/User.php" file for Controller module.
		4. add "views/article" folder fro View module.
		5. add "models/Article_model.php" file and "models/User_model.php" file to support database manipulation.
		6. add "third_party/Twig" folder to support Twig Framework.
	in the "Chood/resource" folder:
		1. add css, js, images file for UI.
	in the "Chood/uploads" folder:
		1. user's upload JPG images.
		2. "thumb_imgs" folder include all thumb images corresponding every user's images in "uplpoad" folder.

