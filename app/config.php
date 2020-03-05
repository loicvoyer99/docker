<?php


$image = 'https://i.pinimg.com/originals/b2/1c/94/b21c943d88d225ee40b9919c6cc2a7f2.jpg';


/* autres images d'alpaga blanc
	https://previews.123rf.com/images/sal73it/sal73it1509/sal73it150900030/45043313-jeune-visage-d-alpaga-blanc-ras%C3%A9.jpg

	https://c8.alamy.com/compfr/x62px5/alpaga-blanc-x62px5.jpg

	https://i.pinimg.com/originals/b2/1c/94/b21c943d88d225ee40b9919c6cc2a7f2.jpg

	https://www.alpagasfibrefine.com/2018fibrefine/wp-content/uploads/2012/06/Armstrong-2015-t%C3%AAte_web.jpg
*/

$imageData = base64_encode(file_get_contents($image));
