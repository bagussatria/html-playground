<?php // require the website config file. ?>
<?php require_once('includes/config.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>

      <!-- website meta tags -->
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Social Existence</title>
      <meta name="description" content="search over <?php echo $website['count2'];?>+ popular social networks to check if a username, product or brand exists." />

      <!-- website stylesheets -->
      <link href="<?php echo $website['url'];?>assets/css/styles.css?v=<?php echo $website['version'];?>" rel="stylesheet" type="text/css" />

   </head>
   <body>

      <!-- website main html -->
      <div id="main">

         <div id="se-form-panel">
            <div class="row">
               <div class="col12">
                  <h1>check the social existence of a username, product or brand!</h1>
                  <p>search over <i><?php echo $website['count2'];?>+</i> popular social networks to check if a username, product or brand exists.</p>
               </div>
               <div class="col8">
                  <input type="text" placeholder="username, product or brand" />
               </div>
               <div class="col4">
                  <button>check existence</button>
               </div>
            </div>
         </div>

         <div id="se-processing-panel">
            <div class="row">
               <div class="col12">
                  <h1>checking existence <i>0%</i></h1>
                  <p>checking existence of <i>username</i> on <i>example.com</i></p>
               </div>
            </div>
         </div>

         <div id="se-results-panel">
            <div class="row">
               <div class="col12">
                  <h1>social existence for <i>username</i></h1>
                  <p><i>username</i> exists on <i>0%</i> of the websites we checked</p>
               </div>
               <div id="se-results-parent" class="col12 row">
               </div>
               <div class="col6">
                  <button>check another username, product or brand</button>
               </div>
               <div class="col3">
                  <button>facebook</button>
               </div>
               <div class="col3">
                  <button>twitter</button>
               </div>
            </div>
         </div>

      </div>

      <!-- website javascript -->
      <script id="se-data" type="application/json"><?php echo json_encode(array($website['statuses'], $website['count']));?></script>
      <script src="<?php echo $website['url'];?>assets/js/javascript.js?v=<?php echo $website['version'];?>" type="text/javascript"></script>

   </body>
</html>