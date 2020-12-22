

@if ($paginator->lastPage() > 1)
    <div class="content-pagination">
    @if (!$paginator->onFirstPage())
         <a class="content-pagination-left" href="{{ $paginator->url($paginator->currentPage()-1) }}"><i class="fas fa-chevron-left"></i></a>
    @endif
         <span>Trang {{$paginator->currentPage()}}</span>
    @if (!($paginator->currentPage() == $paginator->lastPage()))
         <a class="content-pagination-right" href="{{$paginator->url($paginator->currentPage()+1)}}"><i class="fas fa-chevron-right"></i></a>
    @endif
    </div>
@endif
