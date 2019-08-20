<?php
 
  $link = 'social.json';

  function smedia(){
    global $link;
    $social = file_get_contents($link); 
    $smedia = json_decode($social, true);

    $sm = $smedia["links"];
    $smT = count($sm);

    $s = '';
    

    for($i = 0; $i < $smT; $i++){
      $link  = $sm[$i]["link"];
      $title = $sm[$i]["key"];
      $icon  = $sm[$i]["icon"];

      $s .= '<li>';
      $s .= '<a href="'.$link.'" target="_blank" title="'.$title.'">';
      $s .= '<span class="'.$icon.'"></span>';
      $s .= '</a>';
      $s .= '</li>';
    }

    echo $s;
  }

?>