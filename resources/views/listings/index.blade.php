<x-layout>
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    
    @foreach ($listings as $listing)
    <x-listing-card :listing="$listing" />
    @endforeach
</div>
<div class="mt-6 p-4">
    {{$listings->links()}}
</div>
</x-layout>

{{-- @php
    $a=[1,2,5,8];
    $s=1111230;
    for ($i=0;$i<4;$i++) {
        $sm=0;
        for ($j=0;$j<4;$j++) {
            if($a[$i]==$a[$j])continue;
            if($sm==0)
                $sm+=($a[$i]+$a[$j]);
            else if($j<3)
                $sm+=($a[$i]+$a[$j]);
            else {
                // if($a[$i]>$a[$j])$sm+=$a[$i]
                // else $sm+=$a[$j]
                $sm+=max($a[$i],$a[$j]);
                // echo max($a[$i],$a[$j]) . '\n';
            }
            
        }
        $s=min($sm,$s);
    }
    echo $s;
@endphp --}}