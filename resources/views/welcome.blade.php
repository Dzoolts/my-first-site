@extends('pastel-layout')
@section("content")
    <div>Hi, <?php echo $name; ?></div>
    <div>Ez a nap van ma: <?php echo $day;?></div>
        <div>Itt egy szám:  {{$number; }}</div>
    <div>Itt egy true-false érték: <?php echo $logikai;?></div>
    @if($logikai)
        <div>Igaz</div>
    @else
        <div>Hamis</div>
    @endif
@endsection

