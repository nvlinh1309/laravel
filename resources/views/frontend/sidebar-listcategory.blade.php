@php
    use App\Models\Category;
    $listcategory=Category::where(['status'=>1, 'parentid'=>0])->orderBy('orders','asc')->get();
    $html_listcategory='';
    foreach ($listcategory as $rcat) {
      $html_listcategory.='<li class="list-group-item"><a href="'.url('san-pham/'.$rcat->link).'">'.$rcat->name.'</a>';
      $listcategory1=Category::where(['status'=>1, 'parentid'=>$rcat->id])->orderBy('orders','asc')->get();
      if (count($listcategory1)) {
        $html_listcategory.='<ul>';
          foreach ($listcategory1 as $rcat1) {
            $html_listcategory.='<li><a href="'.url('san-pham/'.$rcat1->link).'">'.$rcat1->name.'</a></li>';
          }
        $html_listcategory.='</ul>';
      }
      $html_listcategory.='</li>';
    }

@endphp

<ul class="list-group">
    <li class="list-group-item active">
        DANH MỤC SẢN PHẨM
    </li>
    {!! $html_listcategory !!}    
</ul>
