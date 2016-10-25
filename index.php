<?php
$books =[
    [
      'title' => 'GOTLIB...',
      'author' =>[
      'name'=>'Burdy Goureige',
      'birth' =>'1934',
      'deceased' => FALSE,
     ],
   ],

    [
      'title' => 'COOLMan',
      'author' =>[
      'name'=>'Burdy Goureige',
      'birth' =>'1934',
      'deceased' => FALSE,
    ],
     ],


    [
      'title' => 'CINEMASTOK...',
      'author' =>[
      'name'=>'Burdy Goureige',
      'birth' =>'1934',
      'deceased' => FALSE,
      ],
    ],



];
print '<section> ';
    foreach ($books as $book){
    print '<h2>'. $book['title']. '</h2>' ;


    foreach ($book['author'] as $key => $value) {
        show_author($key, $value);
    }
  }

print '</section>';

 function show_author($param1,$param2){
   if($param2 == 'deceased'){


   } else{
     return ucfirst($param1).':'.$param2.'<hr/>';
   }

  }








/*print'<aside>' ;
foreach ($books as $key => $value){
  print '<h2>'. $book['title'].'</h2>' ;
}
print '</aside>';*/
?>
