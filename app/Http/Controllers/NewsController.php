<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index($news){
        echo "Berita Dengan Judul $news <br>";
        echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum commodi officia enim rem et error necessitatibus ipsa porro nisi earum, facilis aspernatur! Reiciendis laboriosam, nobis quibusdam corporis quod dolore suscipit aliquam atque commodi necessitatibus, hic et sapiente! Ad minus nulla dicta possimus porro accusantium dignissimos, reiciendis cum ut similique sit facilis qui fugit dolorum, harum eligendi. Libero voluptatem velit unde laboriosam minima itaque quasi ratione excepturi quidem dolor ipsa iste, minus doloribus, id ut? Aliquid error sit architecto veritatis fugiat ipsum nam autem. Recusandae ipsam dicta consequuntur repudiandae veniam distinctio expedita eum! Enim impedit cupiditate ex unde reiciendis voluptatum vitae, culpa voluptate fugiat expedita voluptates inventore magni, veniam vero! Numquam nam impedit odit sed a? Consequatur et, nobis numquam iste, fugit tempore accusamus mollitia tempora quis quia consequuntur at voluptate inventore dolorem nisi. Culpa ut repudiandae velit aliquam, obcaecati asperiores omnis deleniti deserunt nemo eum officia, sequi, qui ex ad?";
    }
}
