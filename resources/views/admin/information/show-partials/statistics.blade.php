<div class="tab-pane active" id="statistics" aria-labelledby="statistics-tab" role="tabpanel">
    <!-- users edit media object start -->
    <div class="media mb-2">

        <div class="media-body mt-50">

            <p>საწვავის დღის საწყისი ნაშთი ლიტრებში: </p>
            <p>ჩასხმული (გაცემული) საწვავის რაოდენობა - ლიტრი: </p>
            <p>შესყიდული საწვავი - ლიტრი: </p>
            <p>ნაშთი დღის ბოლოს უნდა იყოს ტონიანში - ლიტრი: </p>
            <p>ნაშთი დღის ბოლოს უნდა იყოს ექსკავატორებში ჯამში - ლიტრი: </p>

            <hr>
            @foreach ($excavators as $excavator)
                <p>{{ $excavator->name_eng }}-ს ტრაქტორების გახარჯული საწვავის რაოდენობა</p>
            @endforeach

            <p>მანქანების გახარჯული საწვავის რაოდენობა - ლიტრი: </p>
            <p>დღეში სულ გახარჯული საწვავის რაოდენობა - ლიტრი: </p>

            @foreach ($excavators as $excavator)
                <p>{{ $excavator->name_eng }}-ში არსებული საწვავი</p>
            @endforeach
            <p>ჯამი:</p>

            <hr>
            <p>ამ დღეს გატანილი კუბი: </p>

            @foreach ($excavators as $excavator)
                <p>ჩასხმის დროს დაკლებული საწვავი {{ $excavator->name_eng }}-ზე</p>
            @endforeach

            <p>მანქანებზე ჩასხმული საწვავი: </p>
            <p>რეისების რაოდენობა: </p>

            @foreach ($excavators as $excavator)
                <p>{{ $excavator->name_eng }} ლიტრი/საათი</p>
            @endforeach

        </div>
    </div>
</div>
