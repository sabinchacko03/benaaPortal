<ul class="suggestions__list">
    @if(count($result) > 0)
        @foreach($result as $row)
            <li class="suggestions__item">                
                    <div class="suggestions__item-image product-image">
                        <div class="product-image__body">
                            <a href="{{URL::to('/')}}/product/{{strtolower(str_replace(' ', '-', $category))}}/{{strtolower(str_replace(' ', '-', $subCategory))}}/{{strtolower(str_replace(' ', '-', $row['Name']))}}">
                                <img class="product-image__img" src="{{$row['Product2']['Default_Image_URL__c']}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="suggestions__item-info">
                        <a class="suggestions__item-name" href="{{URL::to('/')}}/product/{{strtolower(str_replace(' ', '-', $category))}}/{{strtolower(str_replace(' ', '-', $subCategory))}}/{{strtolower(str_replace(' ', '-', $row['Name']))}}">
                            {{$row['Name']}}
                        </a>
                        <div class="suggestions__item-meta">SKU: 83690/32</div>
                    </div>
                    <div class="suggestions__item-price">
                        AED {{number_format($row['UnitPrice'], 2)}}
                    </div>
                    <!-- <div class="suggestions__item-actions">
                        <button type="button" title="Add to cart" class="btn btn-primary btn-sm btn-svg-icon">
                            <svg width="16px" height="16px">
                                <use xlink:href="images/sprite.svg#cart-16"></use>
                            </svg>
                        </button>
                    </div> -->
            </li>
        @endforeach        
    @else
        <li>
            No results!
        </li>        
    @endif
</ul>