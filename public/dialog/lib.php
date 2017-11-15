<?php
function open_file1($tdir)
{
	$name = (explode("/",$_GET["dir"])); // Tách chuỗi gốc thành nhiều chuỗi con dựa vào dấu cách
	$index = $name[1];
        $dirs = scandir($tdir);
        foreach($dirs as $file)
        {
                if (($file == '.')||($file == '..'))
                {
                }
                /*elseif (is_dir($tdir.'/'.$file))
                {
                        filesInDir($tdir.'/'.$file);
						 echo ($tdir.'/'.$file)."<br>";
                }*/
                else
                {
						if($file==$index){
                            echo "<li class='open'><a href='?id=".$_GET["id"]."&dir=".$tdir.'/'.$file."'>".$file."</a></li>";
						}
						else{
							echo "<li class='close'><a href='?id=".$_GET["id"]."&dir=".$tdir.'/'.$file."'>".$file."</a></li>";
						}
                }
        }
}
function open_file2($tdir)
{
        $dirs = scandir($tdir);
        foreach($dirs as $file)
        {
                if (($file == '.')||($file == '..'))
                {
                }
                else
                {
		            $check = (explode(".",$file));
					if(is_array($check) && count($check)==1){
					echo "<li class='tv'><a href='?id=".$_GET["id"]."&dir=".$tdir.'/'.$file."'>".$file."</a></li>";
					}
					else if(is_array($check) && count($check)>1){
						if($check[1]=="png" || $check[1]=="jpg" || $check[1]=="gif" || $check["1"]=="jpeg"){
					        echo "<li class='picture'>";
						}
					else if($check[1]=="ppt"){
						     echo "<li class='ppt'>";
					}
				    else if($check[1]=="flv" || $check[1]=="mp4" || $check["1"]=="avi"){
						  echo "<li class='clip'>";
					}
					else if($check[1]=="mp3"){
						    echo "<li class='music'>";
					}
					else if($check[1]=="doc" || $check[1]==".docx"){
						    echo "<li class='doc'>";
					}
					else if($check[1]=="xls" || $check[1]=="xlsx"){
						    echo "<li class='xls'>";
					}
					else if($check[1]=="txt"){
						    echo "<li class='txt'>";
					}
					else{
						    echo "<li class='gx'>";
						}
							?>
							<a href='javascript:void(0)'
                            <?php
                            if($check[1]=="png" || $check[1]=="jpg" || $check[1]=="gif" || $check["1"]=="jpeg"){
					        ?>
                            onmouseover="return showanh('<?php echo $tdir.'/'.$file  ?>');" onmouseout="return default_anh('images/nopic.png')"
                            <?php
						    }?>
                             onclick="return insert('<?php echo $tdir.'/'.$file  ?>')">
                            <?php
                            echo "".$file."</a></li>";
						}		
					}
                }
        }
?>