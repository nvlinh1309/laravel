@php
    use App\Models\Menu;
    $listmenu= Menu::where(['status'=>1,'parentid'=>0])->get();
    $html_mainmenu='';
    foreach ($listmenu as $rmenu) {
        $listmenu1= Menu::where(['status'=>1,'parentid'=>$rmenu->id] )->get();
        if (count($listmenu1)) {
            $html_mainmenu.='<li class="nav-item dropdown">';
            $html_mainmenu.='<a class="nav-link dropdown-toggle text-white" href="'.url($rmenu->link).'" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    '.$rmenu->name.'</a>';
            $html_mainmenu.='<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
            foreach ($listmenu1 as $rmenu1) {
                $html_mainmenu.='<a class="dropdown-item" href="'.url($rmenu1->link).'">'.$rmenu1->name.'</a>';
            }
            $html_mainmenu.='</div>';
            $html_mainmenu.='</li>';
        }else{
            $html_mainmenu.='<li class="nav-item">';
            $html_mainmenu.='<a class="nav-link text-white" href="'.url($rmenu->link).'">'.$rmenu->name.'</a>';
            $html_mainmenu.='</li>';
        }

    }

@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-demo">
    <a class="navbar-brand text-white" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        {!! $html_mainmenu !!}
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 text-white border-white" type="submit">Search</button>
      </form>
    </div>
  </nav>