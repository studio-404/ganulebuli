<?php 
class editPageForm
{
	public $out; 

	public function __construct()
	{
		require_once 'app/core/Config.php';
		if(!isset($_SESSION[Config::SESSION_PREFIX."username"]))
		{
			exit();
		}
	}
	
	public function index(){
		require_once 'app/core/Config.php';
		require_once 'app/functions/makeForm.php';
		require_once 'app/functions/request.php';
		require_once 'app/functions/strings.php';

		$output = array();
		$idx = functions\request::index("POST","idx");
		$lang = functions\request::index("POST","lang");
		$random = functions\strings::random(25);

		if($idx == "" || $lang == "")
		{
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"მოხდა შეცდომა !",
					"Details"=>"!"
				)
			);
		}
		else
		{
			$Database = new Database('page', array(
				'method'=>'selectById', 
				'idx'=>$idx,
				'lang'=>$lang 
			));
			$output = $Database->getter();

			$photos = new Database('photos', array(
				'method'=>'selectByParent', 
				'idx'=>$idx, 
				'lang'=>$lang, 
				'type'=>$output['type'] 
			));
			$pictures = $photos->getter();

			$file = new Database('file', array(
				'method'=>'selectFilesByPageId', 
				'page_id'=>$idx, 
				'lang'=>$lang,
				'type'=>"page" 
			));
			$files = $file->getter();

			$form = functions\makeForm::open(array(
				"action"=>"?",
				"method"=>"post",
				"id"=>""
			));

			$disabled = ($_SESSION[Config::SESSION_PREFIX."username"]!="root") ? "true" : "false";
			$form .= functions\makeForm::label(array(
				"id"=>"chooseNavTypeLabel", 
				"for"=>"chooseNavType", 
				"name"=>"ნავიგაციის ტიპი",
				"require"=>""
			));
			$form .= functions\makeForm::select(array(
				"id"=>"chooseNavType",
				"choose"=>"აირჩიეთ ნავიგაციის ტიპი",
				"options"=>array("მთავარი", "დამატებითი"), 
				"selected"=>$output['nav_type'],
				"disabled"=>$disabled 
			));

			$form .= functions\makeForm::label(array(
				"id"=>"choosePageTypeLabel", 
				"for"=>"choosePageType", 
				"name"=>"გვერდის ტიპი",
				"require"=>""
			));
			$form .= functions\makeForm::select(array(
				"id"=>"choosePageType",
				"choose"=>"აირჩიეთ გვერდის ტიპი",
				"options"=>array(
					"text"=>"ტექსტური",
					"news"=>"სიახლეები", 
					"plugin"=>"პლაგინი", 
					"catalog"=>"კატალოგი"
				), 
				"selected"=>$output['type'],
				"disabled"=>$disabled
			));

			$form .= functions\makeForm::label(array(
				"id"=>"titleLabel", 
				"for"=>"title", 
				"name"=>"დასახელება",
				"require"=>""
			));
			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"დასახელება", 
				"id"=>"title", 
				"name"=>"title",
				"value"=>$output['title']
			));

			$form .= functions\makeForm::label(array(
				"id"=>"slugLabel", 
				"for"=>"slug", 
				"name"=>"ბმული",
				"require"=>""
			));
			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"ბმული", 
				"id"=>"slug", 
				"name"=>"slug", 
				"value"=>$output['slug'],
				"readonly"=>true
			));

			if($_SESSION[Config::SESSION_PREFIX."username"]=="root"){
				$form .= functions\makeForm::label(array(
					"id"=>"cssClassLabel", 
					"for"=>"cssClass", 
					"name"=>"კლასი",
					"require"=>""
				));
				$form .= functions\makeForm::inputText(array(
					"placeholder"=>"კლასი", 
					"id"=>"cssClass", 
					"name"=>"cssClass",
					"value"=>$output['cssclass']
				));

				$parentModuleOptions = new Database('modules', array(
					'method'=>'parentModuleOptions', 
					'lang'=>$lang
				));

				$form .= functions\makeForm::label(array(
					"id"=>"attachModuleLabel", 
					"for"=>"attachModule", 
					"name"=>"მოდული",
					"require"=>""
				));
				$form .= functions\makeForm::select(array(
					"id"=>"attachModule",
					"choose"=>"მიამაგრე მოდული",
					"multiple"=>true,
					"options"=>$parentModuleOptions->getter(),
					"selected"=>explode(",",$output['usefull_type']),
					"disabled"=>"false"
				));
			}

			$form .= functions\makeForm::label(array(
				"id"=>"redirectLabel", 
				"for"=>"redirect", 
				"name"=>"გადამისამართება",
				"require"=>""
			));
			$form .= functions\makeForm::inputText(array(
				"placeholder"=>"გადამისამართება", 
				"id"=>"redirect", 
				"name"=>"redirect", 
				"value"=>$output['redirect']
			));

			
			$form .= functions\makeForm::label(array(
				"id"=>"shortDescription", 
				"for"=>"pageDescription", 
				"name"=>"მოკლე აღწერა ( Fb გაზიარების ტექსტი )",
				"require"=>""
			));

			$form .= functions\makeForm::textarea(array(
				"id"=>"pageDescription",
				"name"=>"pageDescription",
				"placeholder"=>"მოკლე აღწერა", 
				"value"=>$output['description']
			));
			// if($_SESSION[Config::SESSION_PREFIX."username"]=="root"){}

			$form .= functions\makeForm::label(array(
				"id"=>"longDescription", 
				"for"=>"pageText", 
				"name"=>"ვრცელი აღწერა",
				"require"=>""
			));

			$form .= functions\makeForm::textarea(array(
				"id"=>"pageText",
				"name"=>"pageText",
				"placeholder"=>"ვრცელი აღწერა", 
				"value"=>$output['text'] 
			));


			$form .= functions\makeForm::label(array(
				"id"=>"photoLabel", 
				"for"=>"photo", 
				"name"=>"ფოტოს მიმაგრება",
				"require"=>""
			));
			$form .= "<div class=\"row\" id=\"photoUploaderBox\" style=\"margin:0 -10px\">";

			if(count($pictures)){
				$i = 2;
				
				foreach($pictures as $picture) {
					$form .= "<div class=\"col s4 imageItem\" id=\"img".$i."\">
						<div class=\"card\">
				    		<div class=\"card-image waves-effect waves-block waves-light\">
				    			<input type=\"hidden\" name=\"managerFiles[]\" class=\"managerFiles\" value=\"".$picture['path']."\" />
				      			<img class=\"activator\" src=\"".Config::WEBSITE.$lang."/image/loadimage?f=".Config::WEBSITE_.$picture["path"]."&w=215&h=173\" />
				    		</div>

				    		<div class=\"card-content\">
			                	<p>
			                		<a href=\"javascript:void(0)\" onclick=\"openFileManager('photoUploaderBox', 'img".$i."')\" class=\"large material-icons\">mode_edit</a>
			                		<a href=\"javascript:void(0)\" onclick=\"removePhotoItem('img".$i."')\" class=\"large material-icons\">delete</a>
			                	</p>
			              	</div>

			    		</div>
			  		</div>";
			  		$i++;
				}
			}

			$form .= "<div class=\"col s4 imageItem\" id=\"img1\">
				<div class=\"card\">
		    		<div class=\"card-image waves-effect waves-block waves-light\">
		    			<input type=\"hidden\" name=\"managerFiles[]\" class=\"managerFiles\" value=\"\" />
		      			<img class=\"activator\" src=\"/public/img/noimage.png\" />
		    		</div>

		    		<div class=\"card-content\">
	                	<p>
	                		<a href=\"javascript:void(0)\" onclick=\"openFileManager('photoUploaderBox', 'img1')\" class=\"large material-icons\">mode_edit</a>
	                		<a href=\"javascript:void(0)\" onclick=\"removePhotoItem('img1')\" class=\"large material-icons\">delete</a>
	                	</p>
	              	</div>

	    		</div>
	  		</div>";

	  		$form .= "</div>";

	  		$form .= "<div style=\"clear:both\"></div>";

	  		if($_SESSION[Config::SESSION_PREFIX."username"]=="root"){
	  			$form .= "<div class=\"input-field\">
		            <label>ფაილის მიმაგრება: </label>
		          </div>";
	          
	        	$form .= "<a href=\"javascript:void(0)\" class=\"waves-effect waves-light btn margin-bottom-20\" style=\"clear:both; margin-top: 40px;\" onclick=\"openFileManagerForFiles('attachfiles')\"><i class=\"material-icons left\">note_add</i>ატვირთვა</a>";

	        	$form .= "<input type=\"hidden\" name=\"random\" id=\"random\" value=\"".$random."\" />";
	        	$form .= "<input type=\"hidden\" name=\"file_attach_type\" id=\"file_attach_type\" value=\"page\" />";
	        	
	        	$form .= "<ul class=\"collection with-header\" id=\"sortableFiles-box\">";

		  		if(count($files))
		  		{
		  			$runed = 1;
		  			foreach ($files as $f) {
		  				$explode = explode("/", $f['file_path']);
		  				$filename = end($explode);

		  				$form .= "<li class=\"collection-item level-0 popupfile0\" data-item=\"".$f['idx']."\" data-cid=\"".$f['cid']."\" data-file=\"".$f['file_path']."\">
								<div>
									".$filename."
									
									<a href=\"javascript:void(0)\" onclick=\"removeAttachedFile('level-0','".$f['idx']."', true)\" class=\"secondary-content tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"წაშლა\"><i class=\"material-icons\">delete</i></a>
									<a href=\"javascript:void(0)\" class=\"secondary-content tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"კომენტარი (5)\"><i class=\"material-icons\">comment</i></a>
									<a href=\"javascript:void(0)\" onclick=\"openFileManagerForSubFiles('subfilex".$f['idx']."','".$f['idx']."')\" class=\"secondary-content tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"დამატება\"><i class=\"material-icons\">note_add</i></a>
								</div>";
				       $form .= "</li>";
				       $database = new Database("file", array(
				       		"method"=>"selectFilesByPageId", 
				       		"cid"=>$f['idx'], 
				       		"page_id"=>$f['page_id'], 
				       		"type"=>$f['type'], 
				       		"lang"=>$f['lang']  
				       ));
				       
				       $subfiles = $database->getter(); 
				       if(count($subfiles))
				       { 
					       	if($runed==1){
									$form .= "<ul id=\"subfilex-".$f['idx']."\" class=\"collection with-header sortableFiles-box2\" data-cid=\"".$f['idx']."\" style=\"margin:10px;\">";
							}
				       		foreach ($subfiles as $sf) {
				       			$ex = explode("/", $sf['file_path']); 
				       			$fn = end($ex);
								$form .= "<li class=\"collection-item level-2\" data-item=\"".$sf['idx']."\" data-cid=\"".$sf['cid']."\" data-path=\"".$sf['idx']."\">";
								$form .= "<div>";
								$form .= $fn;
								$form .= "<a href=\"javascript:void(0)\" onclick=\"removeAttachedFile('level-2','".$sf['idx']."', false)\"  class=\"secondary-content tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"წაშლა\"><i class=\"material-icons\">delete</i></a>";
								$form .= "<a href=\"\" class=\"secondary-content tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"კომენტარი (5)\"><i class=\"material-icons\">comment</i></a>";
								$form .= "</div>";
								$form .= "</li>";
				       		}
				       		if($runed==1){
								$form .= "</ul>";
							}
				       }
						
		  			}
		  		}

		  		$form .= "</ul>";
	  		}
	  		
			$form .= functions\makeForm::close();


			$this->out = array(
				"Error" => array(
					"Code"=>0, 
					"Text"=>"ოპერაცია შესრულდა წარმატებით !",
					"Details"=>""
				),
				"form" => $form,
				"attr" => "formPageEdit('".$idx."', '".$lang."')"
			);

		}

		

		return $this->out;
	}
}